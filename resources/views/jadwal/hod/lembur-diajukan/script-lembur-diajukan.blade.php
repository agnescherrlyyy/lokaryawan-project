<script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/crypto-js.js') }}"></script>
<script src="{{ asset('js/selectinput.js') }}"></script>
<script src="{{ asset('js/flowbite.min.js') }}"></script>
<script type="text/javascript">
    let totLembur = $('#so-value').data('tot-lembur');
    let jamAkhir = $('#so-value').data('jam-akhir');
    let jamAwal = $('#so-value').data('jam-awal');
    let idReqOvertime = $('#so-value').data('id-request');
    let tglLembur = $('#tgl-lembur').data('tgl-lembur');
    let keterangan = $('#so-value').data('ket');
    let pic = $('#so-value').data('pic');

    let sttsSubDept = false;
    let dataKaryawan = [];
    let dataSearched = [];
    var itemsPerPage = 10;
    var currentPage = 1;
    var searchText = '';
    var selectedDataIDs = [];
    var idReqOverTimeLast = '';

    const encryptedFromData = localStorage.getItem('encryptedFromData');
    const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
    const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));

    var username = decryptedFromData.username;
    // var username = 6741;

    $.ajax({
        url: '{{ env('APP_SERVICE') }}get_request_overtime_grouping',
        type: 'GET',
        async: false,
        success: function (response) {
            if(response.status === 'success'){
                const listDataOvertime = response.data.get_dataOvertimeByPIC;
                const containerSelect = document.getElementById('container-list');
                console.log(listDataOvertime);

                listDataOvertime.reverse().forEach(item => {
                    const option = document.createElement('li');
                    option.innerHTML = `
                        <li><a id="item-list" class="btn-modal block w-full px-5 py-3 mt-2 hover:bg-slate-100 dark:hover:bg-slate-500 text-sm cursor-pointer item-list" data-tot-lembur="${item.jam_lembur}" data-jam-awal="${item.jam_awal}" data-jam-akhir="${item.jam_akhir}" data-id-overtime="${item.id_request_overtime}" data-ket="${item.keterangan}" data-pic="${item.pic}" data-tgl-lembur="${item.tgl_lembur}">Lembur ${item.tgl_lembur} - ${item.jam_awal} - ${item.jam_akhir}</a></li>
                    `
                    containerSelect.appendChild(option);
                });
                
            }else{
                console.log(response);
            }
        },
        error: function (error) {
            console.log(error);
            alert('Gagal Mengambil Data');
        }
    });

    $(document).on('click', '#item-list', function(e){
        e.preventDefault();
        totLembur = $(this).data('tot-lembur');
        jamAkhir = $(this).data('jam-akhir');
        jamAwal = $(this).data('jam-awal');
        idReqOvertime = $(this).data('id-overtime');
        tglLembur = $(this).data('tgl-lembur');
        keterangan = $(this).data('ket');
        pic = $(this).data('pic');

        $('#so-value').val(tglLembur + ' Pukul ' + jamAwal + ' - ' + jamAkhir);
        $('#so-value').data('tot-lembur', totLembur);
        $('#so-value').data('jam-akhir', jamAkhir);
        $('#so-value').data('jam-awal', jamAwal);
        $('#so-value').data('id-request', idReqOvertime);
        $('#so-value').data('tgl-lembur', tglLembur);
        $('#so-value').data('ket', keterangan);
        $('#so-value').data('pic', pic);
        $('.select-box').removeClass('active');
    });

    $('#option-search').on('input', function() {
        const searchTerm = $(this).val().toLowerCase();

        $('.item-list').each(function() {
            const textContent = $(this).text().toLowerCase();
            const isVisible = textContent.includes(searchTerm);
            $(this).css('display', isVisible ? 'block' : 'none');
        });
    });

    $('#show-entries').on('change', function(){
        var value = $(this).val();
        itemsPerPage = value;
        updatePagination();
    });

    $('#search-table').on('input', function(){
        searchText = $(this).val();
        if(searchText.length >= 3){
            dataSearched = [];
            $.each(dataKaryawan, function(index, item) {
                var id = String(item.id);
                if (
                    item.departemen.toLowerCase().includes(searchText.toLowerCase()) ||
                    item.sub_departemen.toLowerCase().includes(searchText.toLowerCase()) ||
                    item.id_karyawan.toLowerCase().includes(searchText.toLowerCase()) ||
                    item.name.toLowerCase().includes(searchText.toLowerCase())
                ) {
                    dataSearched.push(item);
                }
            });
        }else{
            dataSearched = dataKaryawan;
        }
        updatePagination();
    });

    function renderTablePage(page){
        var startIndex = (page - 1) * parseInt(itemsPerPage);
        var endIndex = parseInt(startIndex) + parseInt(itemsPerPage);
        var slicedData = dataSearched.reverse().slice(startIndex, endIndex);

        var tableBody = $('.w-full tbody');
        tableBody.empty();

        $.each(slicedData, function (index, data){
            var row;
            row = $(`<tr class="bg-white dark:bg-slate-800"></tr>`);
    
            row.append(`
                <td class="pl-6 pr-3 py-3 text-sm tracking-wide sticky left-0 bg-white dark:bg-slate-800 text-left whitespace-nowrap">
                    <input id="default-checkbox" type="checkbox" value="" class="sub-checkbox w-4 h-4 text-amber-500 bg-white border-gray-300 rounded focus:ring-amber-500 dark:focus:ring-amber-500 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 cursor-pointer" data-id="${data.id_karyawan}">
                </td>
            `);
            row.append(`<td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">${index + 1}</td>`);
            row.append(`<td class="p-3 text-sm tracking-wide sticky left-12 bg-white dark:bg-slate-800 text-left whitespace-nowrap">${data.id_karyawan}</td>`);
            row.append(`<td class="p-3 text-sm tracking-wide sticky left-32 bg-white dark:bg-slate-800 text-left whitespace-nowrap">${data.name}</td>`);
            row.append(`<td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">${data.departemen}</td>`);
            row.append(`<td class="pr-6 pl-3 py-3 text-sm tracking-wide text-left whitespace-nowrap">
                ${data.sub_departemen}
            </td>`);
            
            tableBody.append(row);
        });
    }

    function updatePagination(){
        var totalPages = Math.ceil(dataSearched.length / itemsPerPage);
        var list_pagination = ``;
        var firstPage = currentPage - 3 > 2 ? true : false;
        var lastPage = currentPage + 4 < totalPages ? true : false;

        var firstPagination = firstPage ? currentPage - 4 : 1;
        var lastPaginaiton = lastPage ? currentPage + 4 : totalPages;
        var startEntry = (currentPage - 1) * itemsPerPage + 1;
        var endEntry = Math.min(currentPage * itemsPerPage, dataSearched.length);
        

        $('#pagination-list').empty();

        $('#pagination-list').append(list_pagination);

        $('#current-page').text(currentPage);
        $('#total-pages').text(totalPages);
        $('#prev-page').prop('disabled', currentPage === 1);
        $('#next-page').prop('disabled', currentPage === totalPages);
        $('#pagination-info').text(`Showing ${startEntry} to ${endEntry} of ${dataSearched.length} entries`);
        
        renderTablePage(currentPage);
    }

    $('#prev-page').click(function() {
        if (currentPage > 1) {
            currentPage--;
            updatePagination();
        }
    });

    $('#next-page').click(function() {
        var totalPages = Math.ceil(dataSearched.length / itemsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            updatePagination();
        }
    });

    $('.main-checkbox').click(function(){
        if($(this).is(':checked')){
            $('.sub-checkbox').prop('checked', true);

            selectedDataIDs = $('.sub-checkbox:checked').map(function() {
                return $(this).data('id');
            }).get();
            console.log(selectedDataIDs);
        }else{
            $('.sub-checkbox').prop('checked', false);
            selectedDataIDs = [];
        }
    });

    $(document).on('change', '.sub-checkbox', function() {
        selectedDataIDs = $('.sub-checkbox:checked').map(function() {
            return $(this).data('id');
        }).get();
        console.log(selectedDataIDs);
        $('.main-checkbox').prop('checked', selectedDataIDs.length === $('.sub-checkbox').length);
    });

    updatePagination();

    getDataKaryawan(sttsSubDept);

    function getDataKaryawan(status){
        $.ajax({
            url:'{{ env('APP_SERVICE') }}get_list_karyawan_overtime?is_sub_departemen='+sttsSubDept+'&id_karyawan='+username,
            type: "GET",
            asycn: false,
            success: function(response){
                console.log(response);
                dataKaryawan = response;
                dataSearched = response;
                updatePagination();
            },
            error: function(error){
                console.log(error);
                alert('Gagal Mengambil Data');
            }
        })
    }

    $(document).ready(function () {
        $('#subDepTrue').click(function(e) {
            e.preventDefault();
            sttsSubDept = true;
            getDataKaryawan(sttsSubDept);
        });

        $('#subDepFalse').click(function(e) {
            e.preventDefault();
            sttsSubDept = false;
            getDataKaryawan(sttsSubDept);
        });

        $('#btn-req-lembur').click(function (e) {
            e.preventDefault();

            const listDataKaryawan = selectedDataIDs.map((id) => {
                return { "id_karyawan": id.toString() };
            });

            let valueTotLemburtoFloat = parseFloat(totLembur);
            console.log(valueTotLemburtoFloat);

            if(selectedDataIDs.length === 0 || !totLembur || !jamAkhir || !jamAwal || !tglLembur || !idReqOvertime || !pic || !keterangan){
                Swal.fire({
                    title: 'Oops!',
                    text: 'Harap Pilih Lembru dan List Karyawan Terlebih Dahulu',
                    imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                    imageWidth: 200,
                    imageHeight: 200,
                    imageAlt: 'Custom image',
                    showConfirmButton: true,
                });
                return;
            }

            Swal.fire({
                title: 'Loading!',
                text: 'Proses Pengajuan Lembur',
                timerProgressBar: true,
                allowOutsideClick: false,
                allowEscapeKey: false,
                didOpen: () => {
                    Swal.showLoading();
                },
            });

            $.ajax({
                url: '{{ env('APP_SERVICE') }}request_list_overtime',
                type: 'POST',
                data: {
                    id_request_overtime: idReqOvertime,
                    tgl_lembur: tglLembur,
                    jam_mulai : jamAwal,
                    jam_akhir : jamAkhir,
                    jam_lembur: valueTotLemburtoFloat,
                    keterangan: keterangan,
                    pic: pic,
                    list_id_karyawan: JSON.stringify(listDataKaryawan)
                },
                success: function (response) {
                    Swal.close();
                    if (response.status == "success") {
                        console.log(response);
                        Swal.fire({
                            title: 'Sukses',
                            text: 'Pengajuan Lembur Karyawan Berhasil',
                            imageUrl: '{{ asset('img/STK-20230906-WA0025.webp') }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            showConfirmButton: false,
                            timer: 1500,
                        });
                        window.location.reload();
                    } else {
                        console.log(response);
                        Swal.fire({
                            title: 'Oops!',
                            text: 'Pengajuan Lembur Karyawan Gagal, Silahkan Coba Lagi',
                            imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            showConfirmButton: false,
                            timer: 1500,
                        });
                    }
                },
                error: function (error) {
                    console.log(error);
                    Swal.close();
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Terjadi Kesalahan',
                        text: 'Harap Hubungi Developer',
                        showConfirmButton: true,
                    });
                }
            });
        });
    });
</script>