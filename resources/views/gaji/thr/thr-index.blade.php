@extends('layout.main')

@section('content')
    <!-- Heading Start -->
    <div
        class="max-w-full w-full px-10 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
        <div class="w-full">
            <h1 class="font-semibold text-lg mb-2">Penggajian</h1>
            <h4 class="font-medium text-slate-600 dark:text-slate-300">THR</h4>
        </div>
    </div>
    <!-- Heading End -->

    <!-- Gajiku Content Start -->
    <section class="block mt-9 px-5 lg:pl-10 lg:pr-10">
        <div class="w-full flex flex-col gap-4 px-6 py-4 rounded-lg bg-white dark:bg-slate-800 mb-6">
            <div class="w-full flex items-center justify-between">
                <strong class="text-sm">Setting</strong>
                <button
                    class="unduh-slip px-4 py-3 rounded-full text-slate-50 font-semibold text-xs bg-primer-60 hover:bg-primer-80 transition-colors duration-200 ease-in-out w-fit">
                    Unduh Slip THR
                </button>
            </div>
            <div class="w-full flex flex-col lg:flex-row gap-4 xl:gap-10">
                <div class="w-full">
                    <div class="w-full lg:w-1/2 relative select-box">
                        <div
                            class="show-menu w-full flex items-center justify-between border border-sekunder-40 px-4 py-3 rounded-lg cursor-pointer bg-white dark:bg-slate-700">
                            <input
                                class="w-full text-box border-none focus:ring-0 active:ring-0 p-0 focus:outline-none active:outline-none text-sm placeholder:text-slate-950 dark:placeholder:text-slate-50 bg-transparent font-medium"
                                type="text" name="" placeholder="Pilih Periode" id="so-value" readonly>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 font-semibold transition-transform duration-150 ease-in-out">
                                <path fill-rule="evenodd"
                                    d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <ul
                            class="menu-list w-full h-64 overflow-x-auto mt-4 py-3 opacity-0 pointer-events-none bg-white dark:bg-slate-600 shadow-md rounded-lg transition-all duration-200 ease-linear absolute top-full right-0 z-50">
                            <li class="px-4">
                                <input class="w-full item-input" type="text" name="" id="option-search"
                                    placeholder="Search">
                            </li>
                            @foreach ($periodes as $periode)
                                <li><a data-id_periode="{{ $periode->id_periode }}" data-periode="{{ $periode->periode }}"
                                        id="item-list"
                                        class="btn-modal block w-full px-5 py-3 mt-2 hover:bg-slate-100 dark:hover:bg-slate-500 text-sm cursor-pointer item-list"
                                        data-name="modal-password">{{ $periode->periode }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="w-full flex flex-col items-center justify-center p-4 lg:py-4 lg:px-8 rounded-xl bg-white dark:bg-slate-800">
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
                        <path fill-rule="evenodd"
                            d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z"
                            clip-rule="evenodd" />
                    </svg>
                    <span id="rekening-karyawan" class="text-sm"></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path
                            d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                        <path fill-rule="evenodd"
                            d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z"
                            clip-rule="evenodd" />
                    </svg>
                    <span id="priode" class="text-sm"></span>
                </div>
            </div>

            <!-- Salary Content Start -->
            <div class="w-full pt-3 mt-3">
                <div class="w-full flex flex-col gap-1 pt-2 pb-3 border-b-2 border-slate-200 dark:border-slate-600">
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
                        <span class="text-sm text-slate-500 dark:text-slate-400">Tunjangan komunikasi</span>
                        <span id="tunj-komunikasi" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Lembur</span>
                        <span id="lembur" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Tambahan lainnya</span>
                        <span id="tambahan-lainnya" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Upah Kotor (Bruto)</span>
                        <span id="upah-kotor" class="font-semibold text-sm whitespace-nowrap">Rp 0.000.000</span>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-1 pt-2 pb-3 border-b-2 border-slate-200 dark:border-slate-600">
                    <span class="font-semibold text-sm uppercase pb-1">Potongan</span>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Absensi/Alfa</span>
                        <span id="alfa" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Ijin</span>
                        <span id="ijin" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Potongan lainnya</span>
                        <span id="potongan-lain" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">BPJS TK Karyawan</span>
                        <span id="bpjs-tk" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">BPJS JP Karyawan</span>
                        <span id="bpjs-jp" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">BPJS Kesehatan Karyawan</span>
                        <span id="bpjs-kesehatan" class="text-sm text-slate-500 dark:text-slate-400">Rp 0</span>
                    </div>
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Total Potongan</span>
                        <span id="total-potongan" class="font-semibold text-sm whitespace-nowrap">Rp 0.000.000</span>
                    </div>
                </div>
                <div class="w-full py-3">
                    <div class="w-full flex items-center gap-4 justify-between">
                        <span class="text-sm">Total Terima (Netto)</span>
                        <div class="flex item-center gap-1">
                            <span id="total-terima" class="font-semibold text-sm whitespace-nowrap">Rp 0.000.000 </span>
                            <span id="type-thr" class="font-normal text-sm">ddd</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Salary Content End -->
        </div>
    </section>
    <!-- Gajiku Content End -->
@endsection

@section('modal')
    <section
        class="modal-container hidden items-center justify-center max-w-full w-full max-h-screen h-full fixed top-0 left-0 z-[9999] px-5">
        <div class="show-modal w-full max-w-full md:max-w-lg rounded-lg bg-white dark:bg-slate-700 p-4"
            data-target="modal-password">
            <div class="w-full flex items-center justify-between relative pb-6 border-b border-slate-100">
                <strong>Generate</strong>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="close-modal w-8 h-8 absolute top-0 right-0 cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="w-full pt-6">
                <form id="form_data" class="w-full flex flex-col items-center justify-center gap-4">
                    @csrf
                    <div class="w-full flex flex-col justify-center items-start gap-2 px-4 relative">
                        <label for="password" class="block font-semibold text-xs"></label>
                        <div class="w-full">
                            <input type="password" name="password" id="password"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 6)" value=""
                                placeholder="Masukan PIN" class="item-input" maxlength="6" required>
                        </div>
                        <div id="show-pin" class="absolute right-6 top-5 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6 text-slate-700 dark:text-slate-50">
                                <path
                                    d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z" />
                                <path
                                    d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z" />
                                <path
                                    d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z" />
                            </svg>
                        </div>
                    </div>
                </form>
            </div>
            <div class="w-full flex item-center justify-end gap-3 mt-6">
                <button
                    class="close-modal px-4 py-3 rounded-lg bg-slate-300 text-slate-950 text-xs hover:bg-slate-200 w-fit">
                    Batal
                </button>
                <button id="submit-password" type="button" form="form_data"
                    class="close-modal px-4 py-3 rounded-lg text-slate-50 text-xs bg-primer-60 hover:bg-primer-80 transition-colors duration-200 ease-in-out w-fit">
                    Submit
                </button>
            </div>
        </div>
    </section>
@endsection

@section('script')
    @include('gaji.thr.script-thr')
@endsection
