@extends('layout.main')

@section('css')
<link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.5.0-web/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.5.0-web/css/all.min.css') }}">
@endsection

@section('content')
<!-- Heading Start -->
<div class="max-w-full w-full px-5 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
    <div class="w-full">
        <h1 class="font-semibold text-lg mb-2">Komplemen</h1>
        <h4 class="font-medium text-slate-600 dark:text-slate-400">Tiket</h4>
    </div>
</div>
<!-- Heading End -->

<!-- Tiket Content Start -->
<section class="block mt-9 px-2 lg:pl-10 lg:pr-10">
    <div class="w-full flex flex-col sm:flex-row sm:items-center gap-3 mb-4 px-3">
        <button id="permintaan-komplemen" class="w-full sm:w-fit px-4 py-3 rounded-full bg-sekunder-60 text-slate-50 font-medium text-sm hover:bg-sekunder-40 flex items-center justify-center sm:justify-start gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                <path fill-rule="evenodd" d="M11.47 2.47a.75.75 0 011.06 0l4.5 4.5a.75.75 0 01-1.06 1.06l-3.22-3.22V16.5a.75.75 0 01-1.5 0V4.81L8.03 8.03a.75.75 0 01-1.06-1.06l4.5-4.5zM3 15.75a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
            </svg>
            Permintaan Komplemen
        </button>
        <button id="kode-booking" class="w-full sm:w-fit px-4 py-3 rounded-full bg-primer-60 text-slate-50 font-medium text-sm hover:bg-primer-80 flex items-center justify-center sm:justify-start gap-2">
            <i class="fa-solid fa-qrcode text-sm"></i>
            Kode Bookingku
        </button>
    </div>
    <div class="w-full flex flex-col items-center justify-center p-4 rounded-lg bg-white dark:bg-slate-800">
        <div class="w-full grid grid-cols-2 bg-white dark:bg-slate-800">
            <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                <div class="w-10 h-10 md:w-12 md:h-12">
                    <img 
                        src="{{ asset('img/sisa-komplemen-100-svg.svg') }}"
                        alt="icon"
                        class="w-full h-full"
                        >
                </div>
                <div class="flex flex-col gap-1">
                    <span id="komplemen100" class="font-semibold">0</span>
                    <span class="text-sm text-slate-400">Sisa Komplemen 100%</span>
                </div>
            </div>
            <div class="w-full flex flex-col md:flex-row md:items-center md:gap-5 gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                <div class="w-10 h-10 md:w-12 md:h-12">
                    <img 
                        src="{{ asset('img/sisa-komplemen-50-svg.svg') }}"
                        alt="icon"
                        class="w-full h-full"
                        >
                </div>
                <div class="flex flex-col gap-1">
                    <span id="komplemen50" class="font-semibold">0</span>
                    <span class="text-sm text-slate-400">Sisa Komplemen 50%</span>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full flex flex-col xl:flex-row gap-4 mt-6">
        <div class="w-full xl:w-2/5">
            <div class="calendar-container">
                <div class="calendar-header">
                    <button id="prev-month" class="w-10 h-10 flex items-center justify-center rounded-full border">
                        <svg class="h-5 w-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M18 15l-6-6l-6 6h12" transform="rotate(270 12 12)" /></svg>
                    </button>
                    <h2 id="current-month"></h2>
                    <button id="next-month" class="w-10 h-10 flex items-center justify-center rounded-full border">
                        <svg class="h-5 w-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M18 15l-6-6l-6 6h12" transform="rotate(90 12 12)" /></svg>
                    </button>
                </div>
                <div id="calendar"></div>
            </div>
        </div>
        <div id="selected-date" class="w-full xl:w-3/5 p-4 lg:py-6 lg:px-6 bg-white dark:bg-slate-800 rounded-lg">
            <span class="block mb-4 font-semibold text-sm uppercase tracking-wide">AMBIL KOMPLEMEN TIKET</span>
            <div class="w-full flex flex-col gap-1">
                <span class="block text-sm">Tanggal yang dipilih :</span>
                <span id="selected-date-value"></span>
            </div>
            <div class="w-full flex items-center gap-4 mt-4 px-4 py-3 rounded-lg bg-slate-50 dark:bg-slate-700">
                <i class="fa-solid fa-triangle-exclamation text-4xl text-sekunder-60"></i>
                <div class="w-full flex flex-col gap-1">
                    <strong class="text-sm">Peringatan</strong>
                    <span class="text-sm text-slate-600 dark:text-slate-300">Dilarang Memperjualbelikan Tiket Komplemen. Segala Bentuk Pelanggaran Akan Ditindak Tegas!</span>
                </div>
            </div>
            <div class="w-full flex flex-col gap-4 my-4">
                <div class="w-full flex flex-col md:flex-row md:items-center md:gap-5 gap-5 px-4 py-4 bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-600">
                    <div class="w-full flex gap-4">
                        <div class="w-12 h-12 md:w-12 md:h-12">
                            <img 
                                src="{{ asset('img/koplemen100.svg') }}"
                                alt="icon"
                                class="w-full h-full"
                            >
                        </div>
                        <div class="flex flex-col gap-1">
                            <span id="type-ticket" class="font-medium" data-id=""> &mdash; </span>
                            <span id="ket-ticekt" class="text-sm text-slate-400"></span>
                        </div>
                    </div>
                    <div class="w-full flex flex-col gap-3">
                        <div class="w-full flex flex-col items-center justify-center lg:flex-row lg:items-center lg:justify-between gap-4">
                            <div class=" flex items-center gap-4">
                                <button id="minus-ticket-normal" class="w-8 h-8 xl:w-6 xl:h-6 flex items-center justify-center rounded-full border-2 border-primer-60 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-primer-60">
                                        <path fill-rule="evenodd" d="M5.25 12a.75.75 0 01.75-.75h12a.75.75 0 010 1.5H6a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <span id="value-ticket-normal" class="font-semibold">0</span>
                                <button id="plus-ticket-normal" class="w-8 h-8 xl:w-6 xl:h-6 flex items-center justify-center rounded-full border-2 border-primer-60 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-primer-60">
                                        <path fill-rule="evenodd" d="M12 5.25a.75.75 0 01.75.75v5.25H18a.75.75 0 010 1.5h-5.25V18a.75.75 0 01-1.5 0v-5.25H6a.75.75 0 010-1.5h5.25V6a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                            <div class=" flex items-center gap-2">
                                <span id="price-ticket" class="font-semibold text-sm whitespace-nowrap" data-id=""></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden w-full flex-col md:flex-row md:items-center md:gap-5 gap-5 px-4 py-4 bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-600">
                    <div class="w-full flex gap-4">
                        <div class="w-12 h-12 md:w-12 md:h-12">
                            <img 
                                src="{{ asset('img/komplemen50.svg') }}"
                                alt="icon"
                                class="w-full h-full"
                            >
                        </div>
                        <div class="flex flex-col gap-1">
                            <span id="type-ticket-setengah" class="font-medium" data-id=""> &mdash; </span>
                            <span id="ket-ticekt-setengah" class="text-sm text-slate-400"></span>
                        </div>
                    </div>
                    <div class="w-full flex flex-col gap-3">
                        <div class="w-full flex flex-col items-center justify-center lg:flex-row lg:items-center lg:justify-between gap-4">
                            <div class=" flex items-center gap-4">
                                <button id="minus-ticket-setengah" class=" w-8 h-8 xl:w-6 xl:h-6 flex items-center justify-center rounded-full border-2 border-primer-60 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-primer-60">
                                        <path fill-rule="evenodd" d="M5.25 12a.75.75 0 01.75-.75h12a.75.75 0 010 1.5H6a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <span id="value-ticket-setengah" class="font-semibold">0</span>
                                <button id="plus-ticket-setengah" class="w-8 h-8 xl:w-6 xl:h-6 flex items-center justify-center rounded-full border-2 border-primer-60 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-primer-60">
                                        <path fill-rule="evenodd" d="M12 5.25a.75.75 0 01.75.75v5.25H18a.75.75 0 010 1.5h-5.25V18a.75.75 0 01-1.5 0v-5.25H6a.75.75 0 010-1.5h5.25V6a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                            <div class=" flex items-center gap-2">
                                <span id="price-ticket-setengah" class="font-semibold text-sm whitespace-nowrap" data-id=""></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full pt-2">
                <span class="font-semibold text-sm">Ringkasan Komplemen Tiket</span>
                <div class="w-full flex items-center justify-between my-2">
                    <span class="text-sm text-slate-500">Total dibayar</span>
                    <span id="jumlah-dibayar" class="font-semibold text-sm">Rp 0</span>
                </div>
                <button type="button" class="btn-modal text-center px-4 py-3 w-full rounded-md font-semibold text-sm text-white mt-2 bg-primer-60 hover:bg-primer-80 transition-all duration-200 ease-in-out uppercase" data-name="save-data">Checkout</button>
            </div>
        </div>
    </div>
</section>
<!-- Tiket Content End -->
@endsection

@section('modal')
<section class="modal-container hidden items-center justify-center max-w-full w-full max-h-screen h-full fixed top-0 left-0 z-[9999] p-5 overflow-auto">
    <div class="show-modal w-full max-w-full md:max-w-lg rounded-lg bg-white dark:bg-slate-700 p-4" data-target="save-data">
        <div class="w-full flex flex-col items-center justify-center gap-2 pt-6">
            <div class="w-48 h-48 overflow-hidden">
                <img src="{{ asset('img/STK-20230906-WA0006.webp') }}" alt="gambar loka" class="w-full h-full object-cover">
            </div>
            <strong class="text-center font-semibold">Konfirmasi Komplemen Tiket</strong>
            <span id="tanggal-dipilih" class="text-center text-sm"></span>
        </div>
        <div class="w-full flex item-center justify-center gap-3 mt-6">
            <button id="checkout" type="submit" class="close-modal px-4 py-3 rounded-lg text-slate-50 text-sm bg-primer-60 hover:bg-primer-80 transition-colors duration-200 ease-in-out w-fit">                         
                Checkout
            </button>
            <button class="close-modal px-4 py-3 rounded-lg bg-slate-300 text-slate-950 text-sm hover:bg-slate-200 w-fit">                         
                Batal
            </button>
        </div>
    </div>
    <div class="show-modal w-full max-w-full xl:max-w-7xl max-h-screen lg:max-h-screen h-full lg:h-full overflow-auto rounded-lg bg-white dark:bg-slate-800 p-4 lg:p-6" data-target="payment-method">
        <div class="w-full flex items-center justify-between relative pb-6 border-b border-slate-100 dark:border-slate-600">
            <strong></strong>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 absolute -top-2 -right-1 text-red-600 close-modal cursor-pointer">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="w-full flex flex-col items-center justify-center gap-2">
            
        </div>
    </div>
</section>
@endsection

@section('script')
    @include('komplemen.komplemen-baru.script-komplemen')
@endsection