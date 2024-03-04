<script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/crypto-js.js') }}"></script>
<script src="{{ asset('js/flowbite.min.js') }}"></script>
<script type="text/javascript">
    const encryptedFromData = localStorage.getItem('encryptedFromData');
    const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
    const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));

    var username = decryptedFromData.username;

    $.ajax({
        url: '{{ env('APP_SERVICE') }}get_request_overtime?id_karyawan='+username,
        type: 'GET',
        async: false,
        success: function(response) {
            if(response.status === 'success'){
                let data = response.data;
                let lastIndex = data.length - 1;
                let lastElement = data[lastIndex];
                let idOvertime = lastElement.id_overtime;
                console.log(idOvertime);

                $.ajax({
                    url: '{{ env('APP_SERVICE') }}get_request_overtime_ByID?id_overtime='+idOvertime,
                    type: 'GET',
                    async: false,
                    success: function(response) {
                        if(response.status === 'success'){
                            const detailIDOvertime = response.data[0];
                            console.log(detailIDOvertime);
                            $('#id-overtime').text(detailIDOvertime.id_overtime);
                            $('#tgl-pengajuan').text(detailIDOvertime.tgl_pengajuan);
                            $('#tgl-lembur').text(detailIDOvertime.tgl_lembur);
                            $('#keterangan').text(detailIDOvertime.keterangan);
                            $('#jml-jam-dipilih').text(detailIDOvertime.jam_lembur);
                            $('#tot-jam-lembur').text(detailIDOvertime.total_jam);

                            $('#status').removeClass().empty();
                            $('#fa-solid').removeClass();

                            if (detailIDOvertime.status === '0') {
                                $('#status').text('Menunggu Approval').addClass('text-sekunder-60 font-semibold text-xs');
                                $('#fa-solid').addClass('fa-solid fa-hourglass-start text-xs text-sekunder-60');
                            } else if (detailIDOvertime.status === '1') {
                                $('#status').text('Disetujui').addClass('text-primer-60 font-semibold text-xs');
                                $('#fa-solid').addClass('fa-solid fa-circle-check text-xs text-primer-60');
                            } else if (detailIDOvertime.status === '2') {
                                $('#status').text('Ditolak').addClass('text-rose-600 font-semibold text-xs');
                                $('#fa-solid').addClass('fa-solid fa-circle-xmark text-xs text-rose-600');
                            }
                        }
                    },
                    error: function(error){
                        console.log(error);
                        alert('Gagal Mengambil Data');
                    }
                });
            }
        },
        error: function(error){
            console.log(error);
            alert('Gagal Mengambil Data');
        }
    });

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
