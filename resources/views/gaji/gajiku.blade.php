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
        <div class="w-full mb-4 px-3">
            <button id="view-nominal" class="btn-modal px-4 py-3 rounded-full bg-primer-60 text-slate-50 font-medium text-xs hover:bg-primer-40 w-fit flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                    <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                </svg>
                Lihat nominal
            </button>
        </div>
        <div class="w-full flex flex-col items-center justify-center p-4 lg:py-4 lg:px-8 rounded-xl bg-white dark:bg-slate-800">
            <div class="w-32 h-32 rounded-full overflow-hidden">
                <img src="{{ asset('img/STK-20230906-WA0007.png') }}" alt="" class="w-full h-full">
            </div>
            <div class="w-full flex flex-col items-center justify-center gap-1">
                <strong id="nama-karyawan" class="text-lg"></strong>
                <span id="nik-karyawan" class="text-sm"></span>
                <span id="dept" class="text-sm font-medium text-slate-500 dark:text-slate-400 pb-2"></span>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path d="M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z" />
                        <path fill-rule="evenodd" d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z" clip-rule="evenodd" />
                    </svg>
                    <span id="rekening-karyawan" class="text-sm"></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                        <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z" clip-rule="evenodd" />
                    </svg>
                    <span id="priode" class="text-sm"></span>
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
                                <span id="total-masuk" class="font-semibold"></span>
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
                <div class="w-full flex flex-col gap-1 pt-2 pb-3 border-b-2 border-slate-200 dark:border-slate-600">
                    <span class="font-semibold text-sm uppercase pb-1">Gaji + Tunjangan Tetap</span>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Gaji Pokok</span>
                        <span id="gaji-pokok" class="text-sm text-slate-500 dark:text-slate-400">Rp 0.000.000</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Tunj. Jabatan</span>
                        <span id="tunj-jabatan" class="text-sm text-slate-500 dark:text-slate-400">Rp 0.000.000</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Tunj. Keahlian</span>
                        <span id="tunj-keahlian" class="text-sm text-slate-500 dark:text-slate-400">Rp 0.000.000</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Total Gaji Pokok + Tunjangan</span>
                        <span id="tot-gaji-pokok" class="font-semibold text-sm whitespace-nowrap">Rp 0.000.000</span>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-1 pt-2 pb-3 border-b-2 border-slate-200 dark:border-slate-600">
                    <span class="font-semibold text-sm uppercase pb-1">Tunjangan Lainnya</span>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Tunj. Transport</span>
                        <span id="tunj-transport" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Transport dibayarkan</span>
                        <span id="transport-dibayarkan" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Total hari prorate</span>
                        <span id="prorate" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Tunjangan komunikasi</span>
                        <span id="tunj-komunikasi" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Lembur</span>
                        <span id="lembur" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">THR</span>
                        <span id="thr" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Komisi</span>
                        <span id="komisi" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Upah Kotor (Bruto)</span>
                        <span id="upah-kotor" class="font-semibold text-sm whitespace-nowrap">Rp 0.000.000</span>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-1 pt-2 pb-3 border-b-2 border-slate-200 dark:border-slate-600">
                    <span class="font-semibold text-sm uppercase pb-1">Potongan</span>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">BPJS Kesehatan</span>
                        <span id="bpjs-kesehatan" class="text-sm text-slate-500 dark:text-slate-400">Rp 00.000</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">BPJS Tenaga Kerja</span>
                        <span id="bpjs-tenaga-kerja" class="text-sm text-slate-500 dark:text-slate-400">Rp 0.000</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Jaminan Pensiun</span>
                        <span id="jaminan-pensiun" class="text-sm text-slate-500 dark:text-slate-400">Rp 00.000</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Absensi/Alfa</span>
                        <span id="alfa" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">PPH 21</span>
                        <span id="pph-21" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Iuran Koperasi</span>
                        <span id="iuran-koperasi" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Pinjaman Koperasi</span>
                        <span class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Hutang ke Perusahaan</span>
                        <span id="pinjaman" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Lainnya</span>
                        <span id="potongan-lain" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Total Potongan</span>
                        <span id="total-potongan" class="font-semibold text-sm whitespace-nowrap">Rp 000.000</span>
                    </div>
                </div>
                <div class="w-full py-3">
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm">Total Terima (Netto)</span>
                        <span id="total-terima" class="font-semibold text-sm whitespace-nowrap">Rp 0.000.000</span>
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
                    <p id="bpjs" class="text-xs">BPJS (JHT, JKK, JKM) yang dibayarkan perusahaan : Rp 000.000</p>
                </div>
                <div class="w-full flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 lg:w-5 lg:h-5 text-sekunder-60">
                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                    <p id="bpjs-jp" class="text-xs">Jaminan Pensiun yang dibayarkan : Rp 56.120</p>
                </div>
                <div class="w-full flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-sekunder-60">
                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                    <p id="bpjs-kes" class="text-xs">BPJS Kesehatan yang dibayarkan perusahaan : Rp 000.000</p>
                </div>
                <div class="w-full flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 lg:w-5 lg:h-5 text-sekunder-60">
                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                    <p id="pph-perusahaan" class="text-xs">PPH21 yang dibayarkan : Rp 0</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Gajiku Content End -->

    <!-- Modal Start-->
    <section id="modalAdd" class="modal-container hidden max-w-full w-full max-h-screen h-full fixed top-0 left-0 z-[100]">
        <div class="w-full h-full flex items-center justify-center px-5">
            <div id="view-nominal" class="show-modal w-full max-w-full md:max-w-lg rounded-lg bg-white dark:bg-slate-700 p-4">
                <div class="w-full flex items-center justify-between relative pb-6 border-b border-slate-100">
                    <strong>Lihat Nominal</strong>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="close-modal w-8 h-8 absolute top-0 right-0 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>                                            
                </div>
                <div class="w-full pt-6">
                    <form id="form_add" class="w-full flex flex-col items-center justify-center gap-4">
                        @csrf
                        <div class="w-full flex flex-col justify-center items-start gap-2 px-4">
                            <label for="password" class="block font-semibold text-xs">Password</label>
                            <div class="w-full">
                                <input type="password" name="password" id="password" value="" placeholder="Masukan password" class="item-input" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="w-full flex item-center justify-end gap-3 mt-6">
                    <button class="close-modal px-4 py-3 rounded-lg bg-slate-300 text-slate-950 text-xs hover:bg-slate-200 w-fit">                         
                        Batal
                    </button>
                    <button id="submit-password" type="submit" form="form_add" class="close-modal px-4 py-3 rounded-lg text-slate-50 text-xs bg-primer-60 hover:bg-primer-80 transition-colors duration-200 ease-in-out w-fit">                         
                        Submit Password
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal End-->
@endsection

@section('script')
    <script src="{{ asset('js/scriptModal.js') }}"></script>
    <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#submit-password').click(function(e){
                e.preventDefault();
                var formData = {
                    password: $('#password').val(),
                };
                var passwordKaryawan = formData.password;
                $.ajax({
                    url: 'http://192.168.0.75:8099/api/gajiku?username=1105&password=' + passwordKaryawan + '&id_periode=230011&id_karyawan=02-1120-579',
                    type: 'GET',
                    success: function(response) {
                        if (response.status === 'success') {
                            console.log(response);

                            summaryProfile = response.gajiku.karyawan;
                            summaryKehadiran = response.gajiku.kehadiran_karyawan;
                            summaryGaji = response.gajiku.karyawan_gaji;

                            $('#nama-karyawan').text(summaryProfile.nama);
                            $('#nik-karyawan').text(summaryProfile.nik);
                            $('#dept').text(summaryProfile.departemen + ' - ' + summaryProfile.subDepartemen);
                            $('#rekening-karyawan').text(summaryProfile.noRekening);
                            $('#priode').text(summaryProfile.periode);

                            $('#total-masuk').text(summaryKehadiran.totMasuk);
                            $('#total-libur').text(summaryKehadiran.totLibur);
                            $('#total-ph').text(summaryKehadiran.totPh);
                            $('#total-alfa').text(summaryKehadiran.totAlfa);
                            $('#total-sakit').text(summaryKehadiran.totSakit);
                            $('#total-cuti').text(summaryKehadiran.totCuti);

                            $('#gaji-pokok').text('Rp ' + parseInt(summaryGaji[0].nominal));
                            $('#tunj-jabatan').text('Rp ' + parseInt(summaryGaji[1].nominal));
                            $('#tunj-keahlian').text('Rp ' + parseInt(summaryGaji[2].nominal));
                            var totalGajiPokok = parseInt(summaryGaji[0].nominal) + parseInt(summaryGaji[1].nominal) + parseInt(summaryGaji[2].nominal);
                            $('#tot-gaji-pokok').text('Rp ' + totalGajiPokok);

                            $('#tunj-transport').text('Rp ' + parseInt(summaryGaji[3].nominal));
                            $('#tunj-komunikasi').text('Rp' + parseInt(summaryGaji[4].nominal));
                            $('#lembur').text('Rp ' + parseInt(summaryGaji[5].nominal));
                            $('#komisi').text('Rp ' + parseInt(summaryGaji[6].nominal));
                            var gajiKotor = totalGajiPokok + parseInt(summaryGaji[3].nominal) + parseInt(summaryGaji[4].nominal) + parseInt(summaryGaji[5].nominal) + parseInt(summaryGaji[6].nominal);
                            $('#upah-kotor').text('Rp ' + gajiKotor)

                            $('#bpjs-kesehatan').text('Rp ' + parseInt(summaryGaji[17].nominal));
                            $('#bpjs-tenaga-kerja').text('Rp ' + parseInt(summaryGaji[13].nominal));
                            $('#jaminan-pensiun').text('Rp ' + parseInt(summaryGaji[15].nominal));
                            $('#alfa').text('Rp ' + parseInt(summaryGaji[9].nominal));
                            $('#iuran-koperasi').text('Rp ' + parseInt(summaryGaji[7].nominal));
                            $('#pinjaman').text('Rp ' + parseInt(summaryGaji[8].nominal));
                            $('#potongan-lain').text('Rp ' + parseInt(summaryGaji[11].nominal));
                            var totalPotongan = parseInt(summaryGaji[17].nominal) + parseInt(summaryGaji[13].nominal) + parseInt(summaryGaji[15].nominal) + parseInt(summaryGaji[9].nominal) + parseInt(summaryGaji[7].nominal) + parseInt(summaryGaji[8].nominal) + parseInt(summaryGaji[11].nominal);
                            $('#total-potongan').text('Rp ' + totalPotongan);

                            var totalTerima = gajiKotor - totalPotongan;
                            $('#total-terima').text('Rp ' + totalTerima);

                            $('#bpjs').text('BPJS (JHT, JKK, JKM) yang dibayarkan perusahaan : Rp ' + parseInt(summaryGaji[12].nominal));
                            $('#bpjs-jp').text('BPJS Kesehatan yang dibayarkan perusahaan : Rp ' + parseInt(summaryGaji[14].nominal));
                            $('#bpjs-kes').text('BPJS Kesehatan yang dibayarkan perusahaan : Rp ' + parseInt(summaryGaji[16].nominal));

                        } else {
                            alert('Gajiku mengambil data dari API');
                        }
                    },
                    error: function () {
                        alert('Terjadi kesalahan saat mengambil data dari API');
                    }
                })
            })
        })
    </script>
@endsection