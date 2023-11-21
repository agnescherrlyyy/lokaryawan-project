@extends('layout.main')

@section('content')
    <!-- Heading Start -->
    <div class="max-w-full w-full px-10 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
        <div class="w-full">
            <h1 class="font-semibold text-xl mb-2">Jadwal</h1>
            <h4 class="font-medium text-slate-600 dark:text-slate-400">Jadwalku</h4>
        </div>
    </div>
    <!-- Heading End -->

    <!-- Jadwalku Content Start -->
    <section class="block mt-9 px-5 lg:pl-10 lg:pr-16">
        <div class="w-full flex flex-col items-center justify-center p-4 rounded-lg bg-white dark:bg-slate-800">
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
                        <span class="text-xs text-slate-500">Total hari priode</span>
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
                        <span id="total-masuk" class="font-semibold"></span>
                        <span class="text-xs text-slate-500">Total hari berangkat</span>
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
                        <span class="text-xs text-slate-500">Total hari libur</span>
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
                        <span class="text-xs text-slate-500">Total PH</span>
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
                        <span class="text-xs text-slate-500">Total Izin</span>
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
                        <span class="text-xs text-slate-500">Total Alfa</span>
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
                        <span class="text-xs text-slate-500">Total Sakit</span>
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
                        <span class="text-xs text-slate-500">Total Cuti</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full bg-white dark:bg-slate-800 rounded-lg mt-9">
            <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 px-6 py-4 border-b border-slate-200 dark:border-slate-700">
                <span class="inline-block font-semibold text-sm">
                    Jadwalku Priode
                    <span id="nama_periode" class="font-semibold text-sm">{{$periode_now->periode}}</span>
                </span>
                <div class="flex items-center relative">
                    <input type="text" name="" id="" placeholder="Serach" class=" w-full px-10 py-3 border border-slate-300 bg-white dark:bg-slate-600 rounded-full focus:outline-none focus:border-primer-80 text-slate-700 dark:text-slate-50 text-xs focus:ring-2 focus:ring-primer-40">
                    <button type="submit" class="absolute left-3 group opacity-30">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                        </svg>          
                    </button>
                </div>
            </div>
            <div class="w-full py-4">
                <div class="overflow-auto">
                    <table class="w-full ">
                        <thead class="border-y-2 dark:border-y-gray-600 bg-white dark:bg-gray-800">
                            <tr>
                                <th class="pl-6 pr-3 py-3 text-sm font-semibold tracking-wide text-left">No.</th>
                                <th class="sticky left-0 z-10 p-3 text-sm font-semibold tracking-wide text-left bg-white dark:bg-gray-800">Hari</th>
                                <th class="sticky left-16 p-3 z-10 text-sm font-semibold tracking-wide text-left bg-white dark:bg-gray-800">Tanggal</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Kehadiran</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Jam Kehadiran</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Jam Pulang</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Event</th>
                                <th class="pr-6 pl-3 py-3 text-sm font-semibold tracking-wide text-left">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 dark:divide-gray-600">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Jadwalku Content End -->
@endsection

@section('script')
    <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var id_karyawan = '{{ session('username') }}';
            var currentPage = 1;
            var jadwalData = [];
            var itemsPerPage = 10;

            const encryptedFromData = localStorage.getItem('encryptedFromData');
            const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
            const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));

            var username = decryptedFromData.username;

            if (id_karyawan) {
                $.ajax({
                    url: '{{ env('APP_API') }}jadwalku?id_karyawan=' + id_karyawan,
                    type: 'GET',
                    success: function (response) {
                        if (response.status === 'success') {
                            jadwalData = response.jadwal;
                            var totalHari = response.summary[0].tot_hari;
                            var totalMasuk = response.summary[0].tot_masuk;
                            var totalLibur = response.summary[0].tot_libur;
                            var totalPH = response.summary[0].tot_ph;
                            var totalIzin = response.summary[0].tot_izin;
                            var totalSakit = response.summary[0].tot_sakit;
                            var totalAlfa = response.summary[0].tot_alfa;
                            var totalHariPriode = response.summary[0].tot_hari;
                            var totdalCuti = response.summary[0].tot_cuti;

                            $('#total-hari-priode').text(totalHariPriode);
                            $('#total-masuk').text(totalMasuk);
                            $('#total-libur').text(totalLibur);
                            $('#total-ph').text(totalPH);
                            $('#total-izin').text(totalIzin);
                            $('#total-sakit').text(totalSakit);
                            $('#total-alfa').text(totalAlfa);
                            $('#total-cuti').text(totdalCuti);

                            var tableBody = $('.w-full tbody');
                            tableBody.empty();

                            $.each(jadwalData, function(index, jadwal) {
                                var row = $('<tr class="bg-white dark:bg-slate-800"></tr>');
                                row.append('<td class="pl-6 pr-3 py-3 text-sm tracking-wide text-left">' + (index + 1) + '</td>');
                                row.append('<td class="sticky left-0 bg-white dark:bg-slate-800 p-3 text-sm tracking-wide text-left ">' + jadwal.hari + '</td>');
                                row.append('<td class="sticky left-16 p-3 bg-white dark:bg-slate-800 text-sm tracking-wide text-left whitespace-nowrap">' + jadwal.tanggal + '</td>');
                                var textKehadiran = '';
                                if (jadwal.kehadiran === 0) {
                                    textKehadiran = 'Berangkat';
                                } else if (jadwal.kehadiran === 1) {
                                    textKehadiran = 'Libur';
                                } else if (jadwal.kehadiran === 2) {
                                    textKehadiran = 'PH';
                                } else if (jadwal.kehadiran === 3) {
                                    textKehadiran = 'Izin';
                                } else if (jadwal.kehadiran === 4) {
                                    textKehadiran = 'Alfa';
                                } else if (jadwal.kehadiran === 5) {
                                    textKehadiran = 'Sakit';
                                } else if (jadwal.kehadiran === 6) {
                                    textKehadiran = 'Cuti';
                                } else if (jadwal.kehadiran === 7) {
                                    textKehadiran = 'Cuti Tahunan';
                                } else if (jadwal.kehadiran === 9) {
                                    textKehadiran = 'Terlambat';
                                } else if (jadwal.kehadiran === 99) {
                                    textKehadiran = 'Terlambat dgn Form';
                                } else {
                                    textKehadiran = 'Tanpa Status';
                                }
                                row.append('<td class="p-3 text-sm tracking-wide text-left">' + textKehadiran + '</td>');
                                row.append('<td class="p-3 text-sm tracking-wide text-left">' + jadwal.jam_kehadiran + '</td>');
                                row.append('<td class="p-3 text-sm tracking-wide text-left">' + jadwal.jam_pulang + '</td>');
                                row.append('<td class="p-3 text-sm tracking-wide text-left">' + (jadwal.status || '') + '</td>');
                                row.append('<td class="pr-6 pl-3 py-3 text-sm tracking-wide text-left">' + jadwal.keterangan + '</td>');

                                tableBody.append(row);
                            });

                        } else {
                            alert('Gagal mengambil data dari API');
                        }
                    },
                    error: function () {
                        alert('Terjadi kesalahan saat mengambil data dari API');
                    }
                });
            } else {
                alert('ID Karywawan tidak tersedia');
            }

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
        });
    </script>
@endsection