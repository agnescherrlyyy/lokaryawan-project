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
        <h4 class="font-medium text-slate-600 dark:text-slate-400">Pengajuan Lembur</h4>
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
        <a href="{{ url('/jadwal/lembur-diajukan') }}" class="px-4 py-2 rounded-full hover:text-primer-60 font-semibold text-xs hover:bg-primer-20 w-fit flex items-center gap-2">
            <i class="fa-solid fa-table text-md"></i>
            Lembur Diajukan
        </a>
    </div>

    <div class="flex flex-col gap-4 px-6 py-6 bg-white dark:bg-slate-800 rounded-t-lg">
        <span class="inline-block font-semibold text-sm whitespace-nowrap">Daftar Karyawan</span>
        <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
            <div class="w-full flex items-center gap-2">
                <span class="text-xs">Show</span>
                <select id="show-entries" class="active:outline-none hover:outline-none text-xs cursor-pointer dark:bg-slate-800 bg-white border-none text-gray-900  rounded-lg focus:ring-0 block w-fit p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-0 dark:focus:border-none">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                </select>
                <span class="text-xs">entries</span>
            </div>
            <div class="w-full flex flex-col lg:flex-row lg:items-center gap-4">
                <div class="w-full flex items-center relative lg:mt-0">
                    <input type="text" id="search-table" placeholder="Serach" class=" w-full px-10 py-2.5 border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 rounded-full focus:outline-none focus:border-primer-60 text-slate-700 dark:text-slate-50 text-sm focus:ring-2 focus:ring-primer-40">
                    <button type="button" class="absolute left-3 group opacity-30">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                        </svg>          
                    </button>
                </div>
                <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="w-fit text-white bg-sekunder-60 hover:bg-sekunder-40 font-medium rounded-full text-sm px-5 py-2.5 text-center inline-flex items-center whitespace-nowrap" type="button">Sub Departemen<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                        <li>
                            <a id="subDepTrue" href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Aktifkan</a>
                        </li>
                        <li>
                            <a id="subDepFalse" href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Non Aktifkan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Table Start -->
    <div class="w-full overflow-x-auto bg-white dark:bg-slate-800">
        <table class="w-full">
            <thead class="border-y-2 dark:border-y-gray-600 bg-white dark:bg-gray-800">
                <tr>
                    <th class="pl-6 pr-3 py-3 text-xs font-semibold sticky left-0 bg-white dark:bg-slate-800 tracking-wide text-left">
                        <input id="default-checkbox" type="checkbox" value="" class="main-checkbox w-4 h-4 text-amber-500 bg-white border-gray-300 rounded focus:ring-amber-500 dark:focus:ring-amber-500 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 cursor-pointer">
                    </th>
                    <th class="p-3 text-xs font-semibold whitespace-nowrap tracking-wide text-left">#</th>
                    <th class="p-3 text-xs font-semibold sticky left-12 bg-white dark:bg-slate-800 tracking-wide text-left">ID Karyawan</th>
                    <th class="p-3 text-xs font-semibold sticky left-32 bg-white dark:bg-slate-800 tracking-wide text-left">Nama</th>
                    <th class="p-3 text-xs font-semibold tracking-wide text-left">Departemen</th>
                    <th class="pr-6 pl-3 py-3 text-xs font-semibold tracking-wide text-left">Sub Departemen</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 dark:divide-gray-600">
                <tr class="bg-white dark:bg-slate-800">
                    <td class="pl-6 pr-3 py-3 text-sm tracking-wide sticky left-0 bg-white dark:bg-slate-800 text-left whitespace-nowrap">
                        <input id="default-checkbox" type="checkbox" value="" class="sub-checkbox w-4 h-4 text-amber-500 bg-white border-gray-300 rounded focus:ring-amber-500 dark:focus:ring-amber-500 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 cursor-pointer">
                    </td>
                    <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">1</td>
                    <td class="p-3 text-sm tracking-wide sticky left-12 bg-white dark:bg-slate-800 text-left whitespace-nowrap">1682</td>
                    <td class="p-3 text-sm tracking-wide sticky left-32 bg-white dark:bg-slate-800 text-left whitespace-nowrap">Agnes Cherrly</td>
                    <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">IT</td>
                    <td class="pr-6 pl-3 py-3 text-sm tracking-wide text-left whitespace-nowrap">
                        Aplikasi dan System
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="max-w-full w-full pagination bg-white dark:bg-slate-800 px-6 py-4 rounded-b-lg">
        <ul class="flex items-center justify-end">
            <span id="pagination-info" class="block mr-4 text-sm text-slate-600 dark:text-slate-300"></span>
            <li><a id="prev-page" class="btn-pagination cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 010-1.06l7.5-7.5a.75.75 0 111.06 1.06L9.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5z" clip-rule="evenodd" />
                </svg>                          
            </a></li>
            <span class="flex" id="pagination-list">
            </span>
            <li><a id="next-page" class="btn-pagination cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
                </svg>                              
            </a></li>
        </ul>
    </div>
    <!-- Table End -->
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
    @include('jadwal.hod.pengajuan-lembur.script-pengajuan')
@endsection