@extends('layout.main')

@section('content')
    <!-- Heading Start -->
    <div class="max-w-full w-full px-10 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
        <div class="w-full">
            <h1 class="font-semibold text-xl mb-2">Jadwal</h1>
            <h4 class="font-medium text-slate-600 dark:text-slate-400">Absenku</h4>
        </div>
    </div>
    <!-- Heading End -->

    <!-- Absenku Content Start -->
    <section class="block mt-9 px-5 lg:pl-10 lg:pr-16">
        <div class="max-w-full lg:w-full mx-auto lg:flex lg:items-center pb-6">
            <div class="w-full lg:w-1/2">
                <div class="w-full relative select-box">
                    <div class="show-menu w-full flex items-center justify-between gap-4 border-2 border-sekunder-40 px-4 py-3 rounded-lg cursor-pointer bg-white dark:bg-slate-700">
                        <input class="w-full text-box focus:outline-none active:outline-none text-sm placeholder:text-slate-950 dark:placeholder:text-slate-50 bg-transparent font-medium cursor-pointer" type="text" name="" placeholder="Pilih Priode Absenku" id="so-value" readonly>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 font-semibold transition-transform duration-150 ease-in-out">
                            <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                        </svg>                                  
                    </div>
                    <ul class="menu-list w-full mt-4 py-3 opacity-0 pointer-events-none bg-white dark:bg-slate-600 shadow-md rounded-lg transition-all duration-200 ease-linear absolute top-full right-0 z-50">
                        <li class="px-4" ><input class="w-full item-input" type="text" name="" id="option-search" placeholder="Search"></li>
                        <li><a href="#" id="item-list" class="block w-full px-5 py-3 mt-2 hover:bg-slate-100 dark:hover:bg-slate-500 text-sm  cursor-pointer">Juli - Agustus 2023</a></li>
                        <li><a href="#" id="item-list" class="block w-full px-5 py-3 mt-2 hover:bg-slate-100 dark:hover:bg-slate-500 text-sm  cursor-pointer">Agustus - September 2023</a></li>
                        <li><a href="#" id="item-list" class="block w-full px-5 py-3 mt-2 hover:bg-slate-100 dark:hover:bg-slate-500 text-sm  cursor-pointer">September - Oktober 2023</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-full flex flex-col items-center justify-center p-4 rounded-lg bg-white dark:bg-slate-800">
            <div class="w-32 h-32 rounded-full overflow-hidden">
                <img src="{{ asset('img/STK-20230906-WA0007.png') }}" alt="" class="w-full h-full">
            </div>
            <div class="w-full flex flex-col items-center justify-center gap-1">
                <strong class="text-lg">Agnes Cherrly</strong>
                <span class="text-sm">02-2023-109</span>
                <span class="text-sm font-medium text-slate-500 dark:text-slate-400">IT &mdash; Aplikasi dan Sytem</span>
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
                        <span id="total-berangkat" class="font-semibold"></span>
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
                        <span class="text-xs text-slate-500">Total Terlambat</span>
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
                        <span class="text-xs text-slate-500">Total Terlambat dgn Form</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full bg-white dark:bg-slate-800 rounded-lg mt-9">
            <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 px-6 py-4 border-b border-slate-200 dark:border-slate-700">
                <span class="inline-block font-semibold text-sm">Jadwalku Priode September - Oktober 2023</span>
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
                                <th class="sticky left-0 z-[9999] bg-white p-3 text-sm font-semibold tracking-wide text-left">Hari</th>
                                <th class="sticky left-20 p-3 z-[9999] bg-white text-sm font-semibold tracking-wide text-left">Tanggal</th>
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
        $(document).ready(function() {
            var id_karyawan = '{{ session('username') }}';

            if (id_karyawan){
                $.ajax({
                    url: '{{ env('APP_API') }}jadwalku?id_periode=230013&id_karyawan=' + id_karyawan,
                    type: 'GET',
                    success: function(response) {
                        if(response.status === 'success'){
                            console.log(response);
                            summary = response.summary[0];
                            absenData = response.jadwal;
                            console.log(absenData);
                            $('#total-hari-priode').text(summary.tot_hari + summary.tot_libur);
                            $('#total-berangkat').text(summary.tot_masuk);
                            $('#total-libur').text(summary.tot_libur);
                            $('#total-ph').text(summary.tot_ph);
                            $('#total-izin').text(summary.tot_izin);
                            $('#total-alfa').text(summary.tot_alfa);
                            $('#total-sakit').text(summary.tot_sakit);
                            $('#total-cuti').text(summary.tot_cuti);
                            $('#total-terlambat').text(summary.tot_terlambat);
                            $('#total-terlambat-form').text(summary.tot_terlambat_dgn_form);

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
        });
    </script>
@endsection