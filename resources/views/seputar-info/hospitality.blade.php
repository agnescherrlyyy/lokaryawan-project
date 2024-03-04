@extends('layout.main')
@section('css')
<link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
@endsection

@section('content')
    <!-- Heading Start -->
    <div class="max-w-full w-full px-10 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
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
                            <img src="{{ asset('img/Hospitality_page-0001.jpg') }}" alt="" class="w-full xl:w-2/5 h-full rounded-md overflow-hidden">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
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