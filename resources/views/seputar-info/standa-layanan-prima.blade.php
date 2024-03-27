@extends('layout.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
@endsection

@section('content')
    <!-- Heading Start -->
    <div
        class="max-w-full w-full px-10 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
        <div class="w-full">
            <h1 class="font-semibold text-xl mb-2">Hospitality</h1>
            <h4 class="font-medium text-slate-600 dark:text-slate-300">Hospitality</h4>
        </div>
    </div>
    <!-- Heading End -->
    <section class="block mt-9 px-5 lg:pl-10 lg:pr-1">
        <div class="w-full bg-white dark:bg-slate-800 px-2 py-2 rounded-xl">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img src="{{ asset('img/standar-layanan-prima/Standard Customer Service Saloka_page-0001.jpg') }}"
                                alt="" class="w-full xl:w-3/5 h-full rounded-md overflow-hidden">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img src="{{ asset('img/standar-layanan-prima/Standard Customer Service Saloka_page-0002.jpg') }}"
                                alt="" class="w-full xl:w-3/5 h-full rounded-md overflow-hidden">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img src="{{ asset('img/standar-layanan-prima/Standard Customer Service Saloka_page-0003.jpg') }}"
                                alt="" class="w-full xl:w-3/5 h-full rounded-md overflow-hidden">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img src="{{ asset('img/standar-layanan-prima/Standard Customer Service Saloka_page-0004.jpg') }}"
                                alt="" class="w-full xl:w-3/5 h-full rounded-md overflow-hidden">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="w-full py-6 px-4 flex flex-col items-center justify-center gap-4">
                Lebih lengkapnya Standar Layanan Prima Saloka Theme Park dapat di download pada link dibawah ini:
                <a href="{{ asset('img/standar-layanan-prima/Standard-Customer-Service-Saloka.pdf') }}" target="_blank"
                    rel="noopener noreferrer"
                    class="w-fit px-4 py-2.5 bg-primer-60 hover:bg-primer-80 text-white rounded-full">Download
                    File</a>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/+esm.js') }}"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: false,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            zoom: {
                maxRatio: 2,
                minRatio: 1
            },
        });
    </script>
@endsection
