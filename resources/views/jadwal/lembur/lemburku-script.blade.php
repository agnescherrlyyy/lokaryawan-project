<script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/scriptModal.js') }}"></script>
<script src="{{ asset('js/crypto-js.js') }}"></script>
<script type="text/javascript">
    const encryptedFromData = localStorage.getItem('encryptedFromData');
    const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
    const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));

    var username = decryptedFromData.username;

    var dataLembur = [];
    var dataLemburSuccess = [];

    $.ajax({
        url: '{{ env('APP_API') }}get_karyawan_byID?id_karyawan=' + username,
        type: "GET",
        success: function(response) {
            if (response.status === 'success') {
                var data = response.data[0];
                var grade = data.grade;
                $('#departemen').text(data.departemen);
                $('#sub-departemen').text(data.sub_departemen);

                if (grade === 'Manager' || grade === 'SPV') {
                    $('#btn-pengajuan-lembur').removeClass('hidden');
                }
            }
        },
        error: function() {
            alert('Gagal Mengambil Data');
        }
    });

    $('#searchInput').on('input', function() {
        var searchTerm = $(this).val().toLowerCase();

        if (searchTerm.length >= 4) {
            filterTable(searchTerm);
        } else {
            $('.w-full tbody tr').show();
        }
    });

    function filterTable(searchTerm) {
        var tableRows = $('.w-full tbody tr');

        tableRows.each(function() {
            var rowText = $(this).text().toLowerCase();

            if (rowText.includes(searchTerm)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }

    $.ajax({
        url: '{{ env('APP_SERVICE') }}get_request_overtime?id_karyawan=' + username,
        type: "GET",
        async: false,
        success: function(response) {
            if (response.status === 'success') {
                console.log(response);
                dataLembur = response.data;
                dataLembur.reverse();

                dataLemburSuccess = dataLembur.filter(item => item.status === '1');
                var totalLembur = dataLemburSuccess.length;
                var totalJamLembur = dataLemburSuccess.reduce((total, lembur) => total + parseFloat(lembur
                    .jam_lembur), 0);
                $('#total-lembur').text(totalLembur);
                $('#total-jam').text(totalJamLembur);

                var tableBody = $('.w-full tbody');
                tableBody.empty();

                $.each(dataLembur, function(index, data) {
                    var row = $(`<tr class="bg-white dark:bg-slate-800"></tr>`);
                    row.append(
                        `<td class="pl-6 pr-3 py-3 text-sm tracking-wide text-left">${index + 1}</td>`
                        );
                    row.append(
                        `<td class="p-3 text-sm tracking-wide text-left">${data.tgl_lembur}</td>`
                        );
                    row.append(
                        `<td class="p-3 text-sm tracking-wide text-left">${parseFloat(data.jam_lembur).toString()}</td>`
                        );
                    row.append(`<td class="pr-6 pl-3 py-3 text-sm tracking-wide text-left">
                        <button class="btn-modal w-8 h-8 flex items-center justify-center rounded-full bg-primer-60 hover:bg-primer-80 text-white" data-name="tambah-jam" data-id-lembur="${data.id_overtime}">
                            <i class="fa-solid fa-circle-info text-xs"></i>
                        </button>
                    </td>`);

                    tableBody.append(row);
                });
            }
        }
    });

    $(document).on('click', '.btn-modal', function(e) {
        e.preventDefault();
        let modalContainer = $('.modal-container');
        let modalBox = $('.show-modal');
        var idLembur = $(this).data('id-lembur');
        console.log(idLembur);

        modalContainer.removeClass('hidden').addClass('flex');
        let nameButton = $(this).attr('data-name');

        modalBox.each(function() {
            let itemModal = $(this).attr('data-target');
            if (nameButton === itemModal) {
                $(this).addClass('active');
                $.ajax({
                    url: '{{ env('APP_SERVICE') }}get_request_overtime_ByID?id_overtime=' + idLembur,
                    type: "GET",
                    async: false,
                    success: function(response) {
                        if (response.status === 'success') {
                            console.log(response);
                            const containerCard = document.getElementById('container-card');
                            containerCard.innerHTML = '';
                            var dataDetail = response.data[0];
                            var detailHistory = response.history_approve;
                            var jamLembur = dataDetail.jam_lembur;
                            var totJamLembur = dataDetail.total_jam;
                            var jamLemburString = parseFloat(jamLembur).toString();
                            var totJamLemburString = parseFloat(totJamLembur).toString();

                            $('#status').removeClass().empty();
                            $('#fa-solid').removeClass();

                            if (dataDetail.status === '0') {
                                $('#status').text('Menunggu Approval').addClass(
                                    'text-sekunder-60 font-semibold text-xs');
                                $('#fa-solid').addClass(
                                    'fa-solid fa-hourglass-start text-xs text-sekunder-60');
                            } else if (dataDetail.status === '1') {
                                $('#status').text('Disetujui').addClass(
                                    'text-primer-60 font-semibold text-xs');
                                $('#fa-solid').addClass('fa-solid fa-circle-check text-xs text-primer-60');
                            } else if (dataDetail.status === '2') {
                                $('#status').text('Ditolak').addClass(
                                'text-rose-600 font-semibold text-xs');
                                $('#fa-solid').addClass('fa-solid fa-circle-xmark text-xs text-rose-600');
                            }

                            $('#id-overtime').text(dataDetail.id_overtime);
                            $('#tgl-pengajuan').text(dataDetail.tgl_pengajuan);
                            $('#keterangan').text(dataDetail.keterangan);
                            $('#tgl-lembur').text(getTanggalRange(dataDetail.tgl_lembur));
                            $('#jml-lembur').text(jamLemburString + ' Jam');
                            $('#tot-jam-lembur').text(totJamLemburString + ' Jam');

                            if (detailHistory !== null) {
                                detailHistory.forEach(function(itemData) {
                                    var textStatus;
                                    var styleStatus;
                                    var iconStatus;

                                    if (itemData.status === '0') {
                                        textStatus = 'Menunggu Approval';
                                        styleStatus = 'text-sekunder-60';
                                        iconStatus =
                                            '<i class="fa-solid fa-hourglass-start text-xs text-sekunder-60"></i>';
                                    } else if (itemData.status === '1') {
                                        textStatus = 'Disetujui';
                                        styleStatus = 'text-primer-60';
                                        iconStatus =
                                            '<i class="fa-solid fa-circle-check text-xs text-primer-60"></i>';
                                    } else if (itemData.status === '2') {
                                        textStatus = 'Ditolak';
                                        styleStatus = 'text-rose-600';
                                        iconStatus =
                                            '<i class="fa-solid fa-circle-xmark text-xs text-rose-600"></i>';
                                    }

                                    const itemCard = document.createElement('div');
                                    itemCard.className = 'p-2 rounded-lg';
                                    itemCard.innerHTML = `<div class="flex">
                                        <div class="h-16 w-16 mr-6">
                                            <img src="{{ asset('img/user.svg') }}" alt="" srcset="" class="h-full w-full">
                                        </div>
                                        <div class="w-full flex flex-col gap-2">
                                            <span class="block font-semibold text-sm">${itemData.name}</span>
                                            <p class="text-xs">${itemData.id_karyawan_approve}</p>
                                            <div class="w-full flex items-center gap-1">
                                                ${iconStatus}
                                                <span class="font-semibold text-xs ${styleStatus}">${textStatus}</span>
                                            </div>
                                            <p class="text-xs">${itemData.note}</p>
                                            <span class="block text-xs text-gray-500 dark:text-gray-400">${itemData.tgl_approve}</span>
                                        </div>
                                    </div>`;

                                    containerCard.appendChild(itemCard);
                                });
                            }


                        } else {
                            alert('Gagal Mengambil Data');
                        }
                    },
                    error: function(response) {
                        Swal.fire({
                            title: 'Oops!',
                            text: 'API BAD REQUEST. Harap Menghubungi Depelover',
                            imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            showConfirmButton: true,
                        });
                        console.log(response);
                    }
                });
            }
        });

        $('.close-modal').click(function(e) {
            e.preventDefault();
            modalContainer.removeClass('flex').addClass('hidden');
            modalBox.removeClass('active');
        });
    });

    function getTanggalRange(tanggalCuti) {
        const cleanedString = tanggalCuti.replace(/[\["\]]/g, '');
        const dateArray = cleanedString.split(',');
        const sortedDates = dateArray.sort();

        const startDateFormatted = formatTanggal(sortedDates[0]);
        const endDateFormatted = formatTanggal(sortedDates[sortedDates.length - 1]);

        return `${startDateFormatted}`;
    }

    function formatTanggal(tanggal) {
        const [year, month, day] = tanggal.split('-');
        const monthNames = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];
        const monthName = monthNames[parseInt(month, 10) - 1];

        return `${day} ${monthName} ${year}`;
    }
</script>
