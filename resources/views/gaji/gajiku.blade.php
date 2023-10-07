@extends('layout.main')

@section('content')
    <!-- Heading Start -->
    <div class="max-w-full w-full px-10 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
        <div class="w-full">
            <h1 class="font-semibold text-lg mb-2">Penggajian</h1>
            <h4 class="font-medium text-slate-600 dark:text-slate-400">Gajiku</h4>
        </div>
    </div>
    <!-- Heading End -->

    <!-- Gajiku Content Start -->
    <section class="block mt-9 px-5 lg:pl-10 lg:pr-16">
        <div class="w-full flex flex-col items-center justify-center p-4 lg:py-4 lg:px-8 rounded-lg bg-white dark:bg-slate-800">
            <div class="w-32 h-32 rounded-full overflow-hidden">
                <img src="{{ asset('img/STK-20230906-WA0007.png') }}" alt="" class="w-full h-full">
            </div>
            <div class="w-full flex flex-col items-center justify-center gap-1">
                <strong class="text-lg">Agnes Cherrly</strong>
                <span class="text-sm">02-2023-109</span>
                <span class="text-sm font-medium text-slate-500 dark:text-slate-400 pb-2">IT &mdash; Aplikasi dan Sytem</span>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path d="M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z" />
                        <path fill-rule="evenodd" d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-sm">8035165696</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                        <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-sm">September 2023</span>
                </div>
            </div>

            <!-- Salary Content Start -->
            <div class="w-full pt-3 mt-3">
                <div class="w-full flex flex-col gap-1 pt-2 pb-3 border-b-2 border-slate-200 dark:border-slate-600">
                    <span class="font-semibold text-sm uppercase pb-1">Absensi</span>
                    <div class="w-full grid grid-cols-3 md:grid-cols-3 lg:grid-cols-4 gap-y-6 mt-4 bg-white dark:bg-slate-800 rounded-lg">
                        <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                            <div class="w-10 h-10 md:w-12 md:h-12">
                                <img 
                                    src="{{ asset('img/total-priode.svg') }}"
                                    alt="icon"
                                    class="w-full h-full"
                                    >
                            </div>
                            <div class="flex flex-col gap-1">
                                <span class="font-semibold">22</span>
                                <span class="text-xs text-slate-500">Total hari masuk</span>
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
                                <span class="font-semibold">8</span>
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
                                <span class="font-semibold">0</span>
                                <span class="text-xs text-slate-500">Total PH</span>
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
                                <span class="font-semibold">0</span>
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
                                <span class="font-semibold">0</span>
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
                                <span class="font-semibold">0</span>
                                <span class="text-xs text-slate-500">Total Cuti</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-1 pt-2 pb-3 border-b-2 border-slate-200 dark:border-slate-600">
                    <span class="font-semibold text-sm uppercase pb-1">Gaji + Tunjangan Tetap</span>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Gaji Pokok</span>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Rp 1.000.000</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Tunj. Jabatan</span>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Rp 1.000.000</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Tunj. Keahlian</span>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Rp 1.000.000</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Total Gaji Pokok + Tunjangan</span>
                        <span class="font-semibold text-sm whitespace-nowrap">Rp 3.000.000</span>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-1 pt-2 pb-3 border-b-2 border-slate-200 dark:border-slate-600">
                    <span class="font-semibold text-sm uppercase pb-1">Tunjangan Lainnya</span>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Tunj. Transport</span>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Transport dibayarkan</span>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Total hari prorate</span>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Tunjangan komunikasi</span>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Lembur</span>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">THR</span>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Komisi</span>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Upah Kotor (Bruto)</span>
                        <span class="font-semibold text-sm whitespace-nowrap">Rp 3.000.000</span>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-1 pt-2 pb-3 border-b-2 border-slate-200 dark:border-slate-600">
                    <span class="font-semibold text-sm uppercase pb-1">Potongan</span>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">BPJS Kesehatan</span>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Rp 28.000</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">BPJS Tenaga Kerja</span>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Rp 56.000</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Jaminan Pensiun</span>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Rp 28.000</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Absensi/Alfa</span>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">PPH 21</span>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Iuran Koperasi</span>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Pinjaman Koperasi</span>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Hutang ke Perusahaan</span>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Lainnya</span>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Total Potongan</span>
                        <span class="font-semibold text-sm whitespace-nowrap">Rp 112.000</span>
                    </div>
                </div>
                <div class="w-full py-3">
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm">Total Terima (Netto)</span>
                        <span class="font-semibold text-sm whitespace-nowrap">Rp 2.888.000</span>
                    </div>
                </div>
            </div>
            <!-- Salary Content End -->
        </div>
        <div class="w-full mt-6">
            <span class="block font-semibold text-sm">Catatan (Lain - lainnya)</span>
            <div class="w-full flex flex-col gap-2 mt-2">
                <div class="w-full flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-sekunder-60">
                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                    <p class="text-xs">BPJS (JHT, JKK, JKM) yang dibayarkan perusahaan : Rp 127.120</p>
                </div>
                <div class="w-full flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 lg:w-5 lg:h-5 text-sekunder-60">
                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                    <p class="text-xs">Jaminan Pensiun yang dibayarkan : Rp 56.120</p>
                </div>
                <div class="w-full flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-sekunder-60">
                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                    <p class="text-xs">BPJS Kesehatan yang dibayarkan perusahaan : Rp 112.120</p>
                </div>
                <div class="w-full flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 lg:w-5 lg:h-5 text-sekunder-60">
                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                    <p class="text-xs">PPH21 yang dibayarkan : Rp 0</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Gajiku Content End -->
@endsection