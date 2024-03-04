@extends('layout.main')

@section('css')
<link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.5.0-web/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.5.0-web/css/all.min.css') }}">
@endsection

@section('content')
<!-- Heading Start -->
<div class="max-w-full w-full px-5 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
    <div class="w-full">
        <h1 class="font-semibold text-lg mb-2">Jadwal</h1>
        <h4 class="font-medium text-slate-600 dark:text-slate-400">Lemburku</h4>
    </div>
</div>
<!-- Heading End -->

<!-- Content Start -->
<section class="block mt-9 px-2 lg:pl-10 lg:pr-10">
    <div class="w-full flex items-center gap-2 mb-6">
        <a href="{{ url('#') }}" class="px-4 py-2 rounded-full text-primer-60  hover:text-primer-60 font-semibold text-xs hover:bg-primer-20  w-fit flex items-center gap-2" data-name="tambah-data">
            <i class="fa-solid fa-plus text-md"></i>
            Pengajuan Lembur
        </a>
        <span class="font-semibold text-sm">/</span>
        <a href="{{ url('/lemburku') }}" class="px-4 py-2 rounded-full hover:text-primer-60 font-semibold text-xs hover:bg-primer-20 w-fit flex items-center gap-2">
            <i class="fa-solid fa-table text-md"></i>
            Lembur Diajukan
        </a>
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
        <div id="selected-date" class="w-full xl:w-3/5 p-4 lg:py-4 lg:px-6 bg-white dark:bg-slate-800 rounded-lg">
            <span class="block mb-4 font-semibold text-sm uppercase tracking-wide">pengajuan lembur</span>
            <div class="w-full flex flex-col gap-1">
                <span class="block text-sm">Tanggal yang dipilih :</span>
                <span id="selected-date-value"></span>
            </div>
            <div class="w-full flex flex-col gap-4 py-4">
                <form id="fromLembur">
                    @csrf
                    <input type="hidden" name="date" id="date" value="">
                    <input type="hidden" name="idKaryawan" id="idKaryawan" value="">

                    <div class="pt-9 pb-4">
                        <div class="relative mb-6">
                            <label for="labels-range-input" class="sr-only">Labels range</label>
                            <input id="labels-range-input" type="range" min="2" max="8" value="2" step="1" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                            
                            <span class="text-sm text-slate-600 dark:text-slate-300 absolute start-0 -bottom-6">1</span>
                            <span class="text-sm text-slate-600 dark:text-slate-300 absolute start-[17.6666667%] -translate-x-1/2 rtl:translate-x-1/2 -top-6">1.5</span>
                            <span class="text-sm text-slate-600 dark:text-slate-300 absolute start-[34.3333333%] -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">2</span>
                            <span class="text-sm text-slate-600 dark:text-slate-300 absolute start-[50%] -translate-x-1/2 rtl:translate-x-1/2 -top-6">2.5</span>
                            <span class="text-sm text-slate-600 dark:text-slate-300 absolute start-[65.6666667%] -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">3</span>
                            <span class="text-sm text-slate-600 dark:text-slate-300 absolute start-[82.3333333%] -translate-x-1/2 rtl:translate-x-1/2 -top-6">3.5</span>
                            <span class="text-sm text-slate-600 dark:text-slate-300 absolute end-0 -bottom-6">4</span>
                        </div>
                        <div class="w-full flex flex-col gap-1 pt-4">
                            <span class="block text-sm">Jumlah Jam Lembur :</span>
                            <span id="jml-jam-lembur" class="text-sm font-semibold">1 Jam</span>
                        </div>
                    </div>

                    <div class="w-full flex flex-col gap-2 py-2">
                        <label for="mulai-lembur" class="block text-sm font-semibold">Jam Mulai Lembur</label>
                        <input type="time" name="mulai-lembur" id="mulai-lembur" class="item-input">
                    </div>
                    <div class="w-full flex flex-col gap-2 pt-2 pb-6">
                        <label for="akhir-lembur" class="block text-sm font-semibold">Jam Selesai Lembur</label>
                        <input type="time" name="akhir-lembur" id="akhir-lembur" class="item-input">
                    </div>

                    <textarea name="alasan-lembur" id="alasan-lembur" cols="10" rows="3" 
                    class="item-input" placeholder="Masukan Alasan Lembur"></textarea>
                    <button id="btn-req-lembur" type="submit" class="text-center px-4 py-3 w-full rounded-md font-semibold text-sm text-white mt-2 bg-primer-60 hover:bg-primer-80 transition-all duration-200 ease-in-out uppercase">ajukan lembur</button>
                </form>
                
            </div>
        </div>
    </div>
</section>
<!-- Content End -->
@endsection

@section('script')
    @include('jadwal.lembur.req-lembur.script-req-lembur')
@endsection