@extends('layout.main')

@section('content')
    <!-- Heading Start -->
    <div class="max-w-full w-full px-10 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
        <div class="w-full">
            <h1 class="font-semibold text-xl mb-2">Jadwal</h1>
            <h4 class="font-medium text-slate-600 dark:text-slate-300">Absenku</h4>
        </div>
    </div>
    <!-- Heading End -->

    <!-- Absenku Content Start -->
    <section class="block mt-9 px-5 lg:pl-10 lg:pr-10">
        <div class="max-w-full lg:w-full mx-auto lg:flex lg:items-center pb-6">
            <div class="w-full lg:w-1/2">
                <div class="w-full relative select-box">
                    <div class="show-menu w-full flex items-center justify-between gap-4 border-2 border-sekunder-40 px-4 py-3 rounded-lg cursor-pointer bg-white dark:bg-slate-700">
                        <input class="w-full text-box focus:outline-none active:outline-none text-sm placeholder:text-slate-950 dark:placeholder:text-slate-50 bg-transparent font-medium cursor-pointer" type="text" name="" placeholder="Pilih Periode Absenku" id="so-value" readonly>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 font-semibold transition-transform duration-150 ease-in-out">
                            <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                        </svg>                                  
                    </div>
                    <ul id="list-periode" class="menu-list w-full h-64 overflow-x-auto mt-4 py-3 opacity-0 pointer-events-none bg-white dark:bg-slate-600 shadow-md rounded-lg transition-all duration-200 ease-linear absolute top-full right-0 z-50">
                        <li class="px-4" ><input class="w-full item-input" type="text" name="" id="option-search" placeholder="Search"></li>
                        @foreach ($periodes as $periode)
                            <li><a data-id_periode="{{$periode->id_periode}}" data-periode="{{$periode->periode}}" id="item-list" class="block w-full px-5 py-3 mt-2 hover:bg-slate-100 dark:hover:bg-slate-500 text-sm cursor-pointer item-list">{{$periode->periode}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-full flex flex-col items-center justify-center p-4 rounded-lg bg-white dark:bg-slate-800">
            <div class="w-32 h-32 rounded-full overflow-hidden">
                <img src="{{ asset('img/STK-20230906-WA0007.png') }}" alt="" class="w-full h-full">
            </div>
            <div class="w-full flex flex-col items-center justify-center gap-1">
                <strong class="text-lg">{{session('name')}}</strong>
                <span class="text-sm">{{session('username')}}</span>
                <div class="w-full flex items-center justify-center gap-2">
                    <span id="departemen" class="text-sm font-medium text-slate-500 dark:text-slate-400"></span>
                    <span class="text-sm font-medium text-slate-500 dark:text-slate-400">&mdash;</span>
                    <span id="sub-departemen" class="text-sm font-medium text-slate-500 dark:text-slate-400"></span>
                </div>
            </div>
            <div class="w-full grid grid-cols-3 md:grid-cols-3 lg:grid-cols-4 gap-y-6 mt-6 bg-white dark:bg-slate-800 rounded-lg">
                <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                    <div class="w-10 h-10 md:w-12 md:h-12">
                        <img 
                            src="{{ asset('img/total-priode.svg') }}"
                            alt="icon"
                            class="w-full h-full"
                            >
                    </div>
                    <div class="flex flex-col gap-1">
                        <span id="total-hari-priode" class="font-semibold"></span>
                        <span class="text-xs text-slate-600 dark:text-slate-300">Total Hari Periode</span>
                    </div>
                </div>
                <div class="w-full flex flex-col md:flex-row md:items-center md:gap-5 gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                    <div class="w-10 h-10 md:w-12 md:h-12">
                        <img 
                            src="{{ asset('img/berangkat.svg') }}"
                            alt="icon"
                            class="w-full h-full"
                            >
                    </div>
                    <div class="flex flex-col gap-1">
                        <span id="total-berangkat" class="font-semibold"></span>
                        <span class="text-xs text-slate-600 dark:text-slate-300">Total Hari Berangkat</span>
                    </div>
                </div>
                <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                    <div class="w-10 h-10 md:w-12 md:h-12">
                        <img 
                            src="{{ asset('img/libur.svg') }}"
                            alt="icon"
                            class="w-full h-full"
                            >
                    </div>
                    <div class="flex flex-col gap-1">
                        <span id="total-libur" class="font-semibold"></span>
                        <span class="text-xs text-slate-600 dark:text-slate-300">Total Hari Libur</span>
                    </div>
                </div>
                <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                    <div class="w-10 h-10 md:w-12 md:h-12">
                        <img 
                            src="{{ asset('img/ph.svg') }}"
                            alt="icon"
                            class="w-full h-full"
                            >
                    </div>
                    <div class="flex flex-col gap-1">
                        <span id="total-ph" class="font-semibold"></span>
                        <span class="text-xs text-slate-600 dark:text-slate-300">Total PH</span>
                    </div>
                </div>
                <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                    <div class="w-10 h-10 md:w-12 md:h-12">
                        <img 
                            src="{{ asset('img/izin.svg') }}"
                            alt="icon"
                            class="w-full h-full"
                            >
                    </div>
                    <div class="flex flex-col gap-1">
                        <span id="total-izin" class="font-semibold"></span>
                        <span class="text-xs text-slate-600 dark:text-slate-300">Total Izin</span>
                    </div>
                </div>
                <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                    <div class="w-10 h-10 md:w-12 md:h-12">
                        <img 
                            src="{{ asset('img/alfa.svg') }}"
                            alt="icon"
                            class="w-full h-full"
                            >
                    </div>
                    <div class="flex flex-col gap-1">
                        <span id="total-alfa" class="font-semibold"></span>
                        <span class="text-xs text-slate-600 dark:text-slate-300">Total Alfa</span>
                    </div>
                </div>
                <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                    <div class="w-10 h-10 md:w-12 md:h-12">
                        <img 
                            src="{{ asset('img/sakit.svg') }}"
                            alt="icon"
                            class="w-full h-full"
                            >
                    </div>
                    <div class="flex flex-col gap-1">
                        <span id="total-sakit" class="font-semibold"></span>
                        <span class="text-xs text-slate-600 dark:text-slate-300">Total Sakit</span>
                    </div>
                </div>
                <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                    <div class="w-10 h-10 md:w-12 md:h-12">
                        <img 
                            src="{{ asset('img/cuti.svg') }}"
                            alt="icon"
                            class="w-full h-full"
                            >
                    </div>
                    <div class="flex flex-col gap-1">
                        <span id="total-cuti" class="font-semibold"></span>
                        <span class="text-xs text-slate-600 dark:text-slate-300">Total Cuti</span>
                    </div>
                </div>
                <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                    <div class="w-10 h-10 md:w-12 md:h-12">
                        <img 
                            src="{{ asset('img/terlambat.svg') }}"
                            alt="icon"
                            class="w-full h-full"
                            >
                    </div>
                    <div class="flex flex-col gap-1">
                        <span id="total-terlambat" class="font-semibold"></span>
                        <span class="text-xs text-slate-600 dark:text-slate-300">Total Terlambat</span>
                    </div>
                </div>
                <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                    <div class="w-10 h-10 md:w-12 md:h-12">
                        <img 
                            src="{{ asset('img/terlambat-form.svg') }}"
                            alt="icon"
                            class="w-full h-full"
                            >
                    </div>
                    <div class="flex flex-col gap-1">
                        <span id="total-terlambat-form" class="font-semibold"></span>
                        <span class="text-xs text-slate-600 dark:text-slate-300">Total Terlambat dengan Form</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full bg-white dark:bg-slate-800 rounded-lg mt-9">
            <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 px-6 py-4 border-b border-slate-200 dark:border-slate-700">
                <span class="inline-block font-semibold text-sm">Jadwalku Periode <span id="nama_periode">{{$periode_now->periode}}</span></span>
                <div class="flex items-center relative">
                    <input type="text" name="" id="searchInput" placeholder="Serach" class=" w-full px-10 py-3 border border-slate-300 bg-white dark:bg-slate-600 rounded-full focus:outline-none focus:border-primer-80 text-slate-700 dark:text-slate-50 text-xs focus:ring-2 focus:ring-primer-40">
                    <button type="submit" class="absolute left-3 group opacity-30">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                        </svg>          
                    </button>
                </div>
            </div>
            <div class="w-full py-4">
                <div class="overflow-auto">
                    <table class="w-full">
                        <thead class="border-y-2 dark:border-y-gray-600 bg-white dark:bg-gray-800">
                            <tr>
                                <th class="pl-6 pr-3 py-3 text-sm font-semibold tracking-wide text-left">No.</th>
                                <th class="sticky left-0 bg-white dark:bg-slate-800 p-3 text-sm font-semibold tracking-wide text-left">Hari</th>
                                <th class="sticky left-16 p-3 bg-white dark:bg-slate-800 text-sm font-semibold tracking-wide text-left">Tanggal</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Kehadiran</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Jam Kehadiran</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Jam Pulang</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Jam Aktual Kehadiran</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Jam Aktual Pulang</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Event</th>
                                <th class="pr-6 pl-3 py-3 text-sm font-semibold tracking-wide text-left">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 dark:divide-gray-600">

                        </tbody>
                    </table>
                </div>
                <div class="pagination bg-transparent px-6 pt-6">
                    <ul class="flex items-center justify-center">
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Absenku Content Start -->
@endsection

@section('script')
    <script src="{{ asset('js/selectinput.js') }}"></script>
    <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script type="text/javascript">
        const id_karyawan = '{{ session('username') }}';
        let id_periode = '{{$periode_now->id_periode}}';
        let nama_periode = '{{$periode_now->periode}}';
        let datas = [];

        const encryptedFromData = localStorage.getItem('encryptedFromData');
        const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
        const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));

        var username = decryptedFromData.username;

        var today = new Date();
        var year = today.getFullYear();
        var month = ('0' + (today.getMonth() + 1)).slice(-2); 
        var day = ('0' + today.getDate()).slice(-2);
        var formattedDate = year + '-' + month + '-' + day;

        $(document).ready(function() {
            var id_karyawan = '{{ session('username') }}';

            if (id_karyawan){
                get_data();
            } else {
                alert('ID Karywawan tidak tersedia');
            }

            $('#searchInput').on('input', function () {
                var searchText = $(this).val().toLowerCase();
                if (searchText.length >= 4) {
                    filterTable(searchText);
                } else {
                    $('.w-full tbody tr').show();
                }
            });

        });

        function filterTable(searchText) {
            $('.w-full tbody tr').each(function () {
                var rowText = $(this).text().toLowerCase();
                if (rowText.indexOf(searchText) === -1) {
                    $(this).hide();
                } else {
                    $(this).show();
                }
            });
        }

        function get_data(){
            try {
                $.ajax({
                    url: '{{ env('APP_API') }}jadwalku?id_periode='+id_periode+'&id_karyawan='+ id_karyawan,
                    type: 'GET',
                    success: function(response) {
                        if(response.status === 'success'){
                            if((response.summary).length > 0){
                                summary = response.summary[0];
                                absenData = response.jadwal;
                                $('#total-hari-priode').text(summary.tot_hari);
                                $('#total-berangkat').text(summary.tot_masuk);
                                $('#total-libur').text(summary.tot_libur);
                                $('#total-ph').text(summary.tot_ph);
                                $('#total-izin').text(summary.tot_izin);
                                $('#total-alfa').text(summary.tot_alfa);
                                $('#total-sakit').text(summary.tot_sakit);
                                $('#total-cuti').text(summary.tot_cuti);
                                $('#total-terlambat').text(summary.tot_terlambat);
                                $('#total-terlambat-form').text(summary.tot_terlambat_dgn_form);
                                datas = absenData;
                                fill_table();
                            }else{
                                absenData = response.jadwal;
                                $('#total-hari-priode').text(0);
                                $('#total-berangkat').text(0);
                                $('#total-libur').text(0);
                                $('#total-ph').text(0);
                                $('#total-izin').text(0);
                                $('#total-alfa').text(0);
                                $('#total-sakit').text(0);
                                $('#total-cuti').text(0);
                                $('#total-terlambat').text(0);
                                $('#total-terlambat-form').text(0);
                                datas = absenData;
                                fill_table();
                            }
                        } else {
                            alert('Gagal mengambil data dari API');
                        }
                    },
                    error: function () {
                        alert('Terjadi kesalahan saat mengambil data dari API');
                    }
                });
            } catch (error) {
                console.log(error);
                alert('Error');
            }
        }
        
        function fill_table(){
            var tableBody = $('.w-full tbody');
            tableBody.empty();

            $.each(datas, function(index, absen) {
                var row = $('<tr class="bg-white dark:bg-slate-800"></tr>');
                row.append('<td class="pl-6 pr-3 py-3 text-sm tracking-wide hari-ini text-left">' + (index + 1) + '</td>');
                row.append('<td class="sticky left-0 bg-white dark:bg-slate-800 p-3 text-sm tracking-wide hari-ini text-left ">' + absen.hari + '</td>');
                row.append('<td class="sticky left-16 p-3 bg-white dark:bg-slate-800 text-sm tracking-wide hari-ini text-left whitespace-nowrap">' + absen.tanggal + '</td>');
                var textKehadiran = '';
                if (absen.kehadiran === 0) {
                    textKehadiran = 'Berangkat';
                } else if (absen.kehadiran === 1) {
                    textKehadiran = 'Libur';
                } else if (absen.kehadiran === 2) {
                    textKehadiran = 'PH';
                } else if (absen.kehadiran === 3) {
                    textKehadiran = 'Izin';
                } else if (absen.kehadiran === 4) {
                    textKehadiran = 'Alfa';
                } else if (absen.kehadiran === 5) {
                    textKehadiran = 'Sakit';
                } else if (absen.kehadiran === 6) {
                    textKehadiran = 'Cuti';
                } else if (absen.kehadiran === 7) {
                    textKehadiran = 'Cuti Tahunan';
                } else if (absen.kehadiran === 9) {
                    textKehadiran = 'Terlambat';
                } else if (absen.kehadiran === 99) {
                    textKehadiran = 'Terlambat dgn Form';
                } else {
                    textKehadiran = 'Tanpa Status';
                }
                row.append('<td class="p-3 text-sm tracking-wide hari-ini text-left">' + textKehadiran + '</td>');
                row.append('<td class="p-3 text-sm tracking-wide hari-ini text-left">' + absen.jam_kehadiran + '</td>');
                row.append('<td class="p-3 text-sm tracking-wide hari-ini text-left">' + absen.jam_pulang + '</td>');
                row.append('<td class="p-3 text-sm tracking-wide hari-ini text-left">' + (absen.jam_kehadiran_karyawan) + '</td>');
                row.append('<td class="p-3 text-sm tracking-wide hari-ini text-left">' + (absen.jam_pulang_karyawan) + '</td>');
                row.append('<td class="p-3 text-sm tracking-wide hari-ini text-left">' + (absen.status || '') + '</td>');
                row.append('<td class="pr-6 pl-3 py-3 text-sm tracking-wide hari-ini text-left">' + absen.keterangan + '</td>');

                var absenDate = new Date(absen.tanggal);

                if (today.toDateString() === absenDate.toDateString() && absen.kehadiran === 0) {
                    row.find('.hari-ini').addClass('bg-primer-60 dark:bg-primer-60 text-white font-semibold');
                    row.find('.hari-ini').removeClass('bg-white dark:bg-slate-800');
                } else if (today.toDateString() === absenDate.toDateString() && absen.kehadiran === 1) {
                    row.find('.hari-ini').addClass('bg-rose-600 dark:bg-rose-600 text-white font-semibold');
                    row.find('.hari-ini').removeClass('bg-white dark:bg-slate-800');
                } else if (today.toDateString() === absenDate.toDateString() && absen.kehadiran === 2) {
                    row.find('.hari-ini').addClass('bg-purple-600 text-white font-semibold');
                    row.find('.hari-ini').removeClass('bg-white dark:bg-slate-800');
                }

                tableBody.append(row);
            });
        }
        
        $('.item-list').on('click', function(){
            id_periode = $(this).data('id_periode');
            nama_periode = $(this).data('periode');
            $('#nama_periode').text(nama_periode);
            get_data();
        });

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
    </script>
@endsection