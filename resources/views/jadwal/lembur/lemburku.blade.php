@extends('layout.main')

@section('css')
<link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.5.0-web/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.5.0-web/css/all.min.css') }}">
@endsection

@section('content')
    <!-- Heading Start -->
    <div class="max-w-full w-full px-10 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
        <div class="w-full">
            <h1 class="font-semibold text-xl mb-2">Jadwal</h1>
            <h4 class="font-medium text-slate-600 dark:text-slate-300">Lemburku</h4>
        </div>
    </div>

    <section class="block mt-9 px-5 lg:pl-10 lg:pr-10">
        <div class="w-full flex items-center gap-2 mb-6">
            <a href="{{ url('#') }}" class="px-4 py-2 rounded-full text-primer-60  hover:text-primer-60 font-semibold text-xs hover:bg-primer-20 w-fit flex items-center gap-2">
                <i class="fa-solid fa-table text-md"></i>
                Daftar Lemburku
            </a>
            <span class="font-semibold text-sm">/</span>
            <a href="{{ url('/req-lembur') }}" class="px-4 py-2 rounded-full  hover:text-primer-60 font-semibold text-xs hover:bg-primer-20 w-fit flex items-center gap-2" data-name="tambah-data">
                <i class="fa-solid fa-plus text-md"></i>
                Request Lembur
            </a>
        </div>

        <div class="w-full flex flex-col items-center justify-center p-4 rounded-lg bg-white dark:bg-slate-800 mt-6">
            <div class="w-32 h-32 rounded-full overflow-hidden">
                <img src="{{ asset('img/STK-20230906-WA0007.png') }}" alt="" class="w-full h-full">
            </div>
            <div class="w-full flex flex-col items-center justify-center gap-1">
                <strong class="text-lg">{{ session('name') }}</strong>
                <span class="text-sm">{{ session('username') }}</span>
                <div class="w-full flex items-center justify-center gap-2">
                    <span id="departemen" class="text-sm font-medium text-slate-500 dark:text-slate-400"></span>
                    <span class="text-sm font-medium text-slate-500 dark:text-slate-400">&mdash;</span>
                    <span id="sub-departemen" class="text-sm font-medium text-slate-500 dark:text-slate-400"></span>
                </div>
            </div>
            <div class="w-full grid grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-y-6 mt-6 bg-white dark:bg-slate-800 rounded-lg">
                <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                    <div class="w-10 h-10 md:w-12 md:h-12">
                        <img 
                            src="{{ asset('img/lembur.svg') }}"
                            alt="icon"
                            class="w-full h-full"
                            >
                    </div>
                    <div class="flex flex-col gap-1">
                        <span id="total-lembur" class="font-semibold"></span>
                        <span class="text-xs text-slate-600 dark:text-slate-300">Total lembur</span>
                    </div>
                </div>
                <div class="w-full flex flex-col md:flex-row md:items-center md:gap-5 gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                    <div class="w-10 h-10 md:w-12 md:h-12">
                        <img 
                            src="{{ asset('img/jumlah-lembur.svg') }}"
                            alt="icon"
                            class="w-full h-full"
                            >
                    </div>
                    <div class="flex flex-col gap-1">
                        <span id="total-jam" class="font-semibold"></span>
                        <span class="text-xs text-slate-600 dark:text-slate-300">Total jam lembur</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full bg-white dark:bg-slate-800 rounded-lg mt-9">
            <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 px-6 py-4 border-b border-slate-200 dark:border-slate-700">
                <span class="inline-block font-semibold text-sm">Jumlah Lemburku</span>
                <div class="flex items-center gap-3">
                    <div class="flex items-center relative">
                        <input type="text" name="" id="searchInput" placeholder="Cari Tanggal Cuti" class=" w-full px-10 py-3 border border-slate-300 bg-white dark:bg-slate-600 rounded-full focus:outline-none focus:border-primer-80 text-slate-700 dark:text-slate-50 text-xs focus:ring-2 focus:ring-primer-40">
                        <button type="submit" class="absolute left-3 group opacity-30">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                            </svg>          
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full py-4">
                <div class="overflow-auto">
                    <table class="w-full ">
                        <thead class="border-y-2 dark:border-y-gray-600 bg-white dark:bg-gray-800">
                            <tr>
                                <th class="pl-6 pr-3 py-3 text-xs font-semibold tracking-wide text-left">No.</th>
                                <th class="p-3 text-xs font-semibold tracking-wide text-left">Tanggal</th>
                                <th class="pr-6 pl-3 py-3 text-xs font-semibold tracking-wide text-left">Jumlah Jam Lembur</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 dark:divide-gray-600">
                            <tr class="odd:bg-gray-50 even:bg-white dark:odd:bg-gray-700 dark:even:bg-gray-800">
                                <td class="pl-6 pr-3 py-3 text-sm tracking-wide text-left"></td>
                                <td class="p-3 text-sm tracking-wide text-left"></td>
                                <td class="pr-6 pl-3 py-3 text-sm tracking-wide text-left"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Heading End -->
@endsection

@section('modal')
    <section class="modal-container hidden items-center justify-center max-w-full w-full max-h-screen h-full fixed top-0 left-0 z-[9999] px-5 py-5">
        <div class="show-modal w-full max-w-full xl:max-w-7xl max-h-screen lg:max-h-fit h-full lg:h-fit overflow-auto rounded-lg bg-white dark:bg-slate-800 p-4 lg:p-6" data-target="tambah-jam">
            <div class="w-full flex items-center justify-between relative pt-2 pb-6 border-b border-slate-200 dark:border-slate-600">
                <strong>Detail Lembur</strong>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="close-modal w-8 h-8 absolute top-0 right-0 cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>                                            
            </div>
            <section class="w-full flex flex-col lg:flex-row gap-9 px-0 lg:px-4 pb-4 mt-9">
                <div class="w-full h-fit bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-600">
                    <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-3 px-6 py-4 border-b border-slate-200 dark:border-slate-700">
                        <span id="permintaan-cuti" class="inline-block font-semibold text-sm">Pengajuan Lembur</span>
                    </div>
                    <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-6 px-5 pb-6 pt-2 mt-4">
                        <div class="w-full flex flex-col gap-2">
                            <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400">ID Overtime</span>
                            <span id="id-overtime" class="text-[13px]"></span>
                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400">Tanggal Pengajuan</span>
                            <span id="tgl-pengajuan" class="text-[13px]"></span>
                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400">Keterangan</span>
                            <span id="keterangan" class="text-[13px] whitespace-nowrap"></span>
                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">Tanggal Lembur</span>
                            <span id="tgl-lembur" class="text-[13px] "></span>
                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">Jam Lembur Dipilih</span>
                            <span id="jml-lembur" class="text-[13px] "></span>
                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">Total Jam Lembur</span>
                            <span id="tot-jam-lembur" class="text-[13px] "></span>
                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">Status</span>
                            <div class="flex items-center gap-2">
                                <i id="fa-solid" class=""></i>
                                <span id="status" class="text-[13px] "></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-600">
                    <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-3 px-6 py-4 border-b border-slate-200 dark:border-slate-700">
                        <span class="inline-block font-semibold text-sm">Log Pengajuan Lembur</span>
                    </div>
                    <div id="container-card" class="w-full flex flex-col px-4 py-4">
                        
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/crypto-js.js') }}"></script>
    <script type="text/javascript">
        const encryptedFromData = localStorage.getItem('encryptedFromData');
        const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
        const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));

        var username = decryptedFromData.username;
        var dataLembur = [];

        if(username){
            $.ajax({
                url:'{{ env('APP_API') }}get_karyawan_byID?id_karyawan='+username,
                type: "GET",
                success: function(response){
                    if(response.status === 'success'){
                        var data = response.data[0];
                        $('#departemen').text(data.departemen);
                        $('#sub-departemen').text(data.sub_departemen);
                    }
                },
                error: function(){
                    alert('Gagal Mengambil Data');
                }
            });
        }else{
            alert('ID Karywawan tidak tersedia');
        }

        $('#searchInput').on('input', function () {
            var searchTerm = $(this).val().toLowerCase();

            if (searchTerm.length >= 4) {
                filterTable(searchTerm);
            } else {
                $('.w-full tbody tr').show();
            }
        });

        function filterTable(searchTerm) {
            var tableRows = $('.w-full tbody tr');

            tableRows.each(function () {
                var rowText = $(this).text().toLowerCase();

                if (rowText.includes(searchTerm)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }

        $.ajax({
            url:'{{ env('APP_SERVICE') }}get_request_overtime?id_karyawan='+username,
            type: "GET",
            async: false,
            success: function(response){
                if (response.status === 'success'){
                    dataLembur = response.data;
                    var totalLembur = dataLembur.length;
                    var totalJamLembur = dataLembur.reduce((total, lembur) => total + parseFloat(lembur.jam_lembur), 0);
                    $('#total-lembur').text(totalLembur);
                    $('#total-jam').text(totalJamLembur);

                    var tableBody = $('.w-full tbody');
                    tableBody.empty();

                    $.each(dataLembur, function(index, data){
                        var row =  $(`<tr class="bg-white dark:bg-slate-800"></tr>`);
                        row.append(`<td class="pl-6 pr-3 py-3 text-sm tracking-wide text-left">${index + 1}</td>`);
                        row.append(`<td class="p-3 text-sm tracking-wide text-left">${data.tgl_lembur}</td>`);
                        row.append(`<td class="p-3 text-sm tracking-wide text-left">${parseFloat(data.jam_lembur).toString()}</td>`);
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

        $(document).on('click', '.btn-modal', function(e){
            e.preventDefault();
            var idLembur = $(this).data('id-lembur');
            console.log(idLembur);

            $.ajax({
                url: '{{ env('APP_SERVICE') }}get_request_overtime_ByID?id_overtime='+idLembur,
                type: "GET",
                async: false,
                success: function(response){
                    if (response.status === 'success'){
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
                            $('#status').text('Menunggu Approval').addClass('text-sekunder-60 font-semibold text-xs');
                            $('#fa-solid').addClass('fa-solid fa-hourglass-start text-xs text-sekunder-60');
                        } else if (dataDetail.status === '1') {
                            $('#status').text('Disetujui').addClass('text-primer-60 font-semibold text-xs');
                            $('#fa-solid').addClass('fa-solid fa-circle-check text-xs text-primer-60');
                        } else if (dataDetail.status === '2') {
                            $('#status').text('Ditolak').addClass('text-rose-600 font-semibold text-xs');
                            $('#fa-solid').addClass('fa-solid fa-circle-xmark text-xs text-rose-600');
                        }

                        $('#id-overtime').text(dataDetail.id_overtime);
                        $('#tgl-pengajuan').text(dataDetail.tgl_pengajuan);
                        $('#keterangan').text(dataDetail.keterangan);
                        $('#tgl-lembur').text(getTanggalRange(dataDetail.tgl_lembur));
                        $('#jml-lembur').text(jamLemburString + ' Jam');
                        $('#tot-jam-lembur').text(totJamLemburString + ' Jam');


                        detailHistory.forEach(function(itemData){
                            var textStatus;
                            var styleStatus;
                            var iconStatus;

                            if (itemData.status === '0') {
                                textStatus = 'Menunggu Approval';
                                styleStatus = 'text-sekunder-60';
                                iconStatus = '<i class="fa-solid fa-hourglass-start text-xs text-sekunder-60"></i>';
                            } else if (itemData.status === '1') {
                                textStatus = 'Disetujui';
                                styleStatus = 'text-primer-60';
                                iconStatus = '<i class="fa-solid fa-circle-check text-xs text-primer-60"></i>';
                            } else if (itemData.status === '2') {
                                textStatus = 'Ditolak';
                                styleStatus = 'text-rose-600';
                                iconStatus = '<i class="fa-solid fa-circle-xmark text-xs text-rose-600"></i>';
                            }

                            const itemCard = document.createElement('div');
                            itemCard.className = 'p-2 rounded-lg';
                            itemCard.innerHTML = `<div class="flex">
                                <div class="h-16 w-16 mr-6">
                                    <img src="{{ asset('img/user.svg') }}" alt="" srcset="" class="h-full w-full">
                                </div>
                                <div class="w-full flex flex-col gap-2">
                                    <span class="block font-semibold text-sm">${itemData.id_karyawan_approve}</span>
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

                    } else {
                        alert('Gagal Mengambil Data');
                    }
                },
                error: function(response){
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
            })
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
@endsection