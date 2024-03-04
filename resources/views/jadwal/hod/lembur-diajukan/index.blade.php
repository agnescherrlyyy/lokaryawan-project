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
        <a href="{{ url('/jadwal/pengajuan-lembur-hod') }}" class="px-4 py-2 rounded-full hover:text-primer-60 font-semibold text-xs hover:bg-primer-20 w-fit flex items-center gap-2">
            <i class="fa-solid fa-plus text-md"></i>
            Pengajuan Lembur
        </a>
        <span class="font-semibold text-sm">/</span>
        <a href="{{ url('#') }}" class="px-4 py-2 rounded-full text-primer-60  hover:text-primer-60 font-semibold text-xs hover:bg-primer-20  w-fit flex items-center gap-2" data-name="tambah-data">
            <i class="fa-solid fa-table text-md"></i>
            Lembur Diajukan
        </a>
    </div>
    <div class="w-full px-6 py-6 bg-white dark:bg-slate-800 rounded-lg mb-6">
        <div class="w-full flex items-center justify-between pb-6 mb-6 border-b border-slate-300 dark:border-slate-600">
            <strong class="w-full block text-sm">List Pengajuan Lembur</strong>
        </div>
        <div class="w-full pb-4">
            <div class="w-full relative select-box">
                <div class="show-menu w-full flex items-center justify-between border border-sekunder-40 px-4 py-3 rounded-lg cursor-pointer bg-white dark:bg-slate-700">
                    <input class="value-list-overtime w-full text-box border-none focus:ring-0 active:ring-0 p-0 focus:outline-none active:outline-none text-sm placeholder:text-slate-950 dark:placeholder:text-slate-50 bg-transparent font-medium" type="text" name="" placeholder="Pilih Lembur" id="so-value" data-tot-lembur="" data-jam-akhir="" data-jam-awal="" data-id-request="" data-tgl-lembur="" data-ket="" data-pic="" readonly>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 font-semibold transition-transform duration-150 ease-in-out">
                        <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                    </svg>                                  
                </div>
                <ul id="container-list" class="menu-list w-full h-64 overflow-x-auto mt-4 py-3 opacity-0 pointer-events-none bg-white dark:bg-slate-600 shadow-md rounded-lg transition-all duration-200 ease-linear absolute top-full right-0 z-50">
                    <li class="px-4" >
                        <input class="w-full item-input" type="text" name="" id="option-search" placeholder="Search">
                    </li>
                    {{-- <li><a id="item-list" class="btn-modal block w-full px-5 py-3 mt-2 hover:bg-slate-100 dark:hover:bg-slate-500 text-sm cursor-pointer item-list" data-name="modal-password">Test</a></li> --}}
                </ul>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-4 px-6 py-6 bg-white dark:bg-slate-800 rounded-t-lg">
        <span class="inline-block font-semibold text-sm whitespace-nowrap">Daftar Karyawan</span>
        <div class="w-full flex flex-col gap-4">
            <div class="w-fit flex items-center gap-2">
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
                <button id="btn-req-lembur" class="w-fit text-white bg-primer-60 hover:bg-primer-80 font-medium rounded-full text-sm px-5 py-2.5 text-center inline-flex items-center whitespace-nowrap" type="button">Ajukan Lembur</button>
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
                    <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap"></td>
                    <td class="p-3 text-sm tracking-wide sticky left-12 bg-white dark:bg-slate-800 text-left whitespace-nowrap"></td>
                    <td class="p-3 text-sm tracking-wide sticky left-32 bg-white dark:bg-slate-800 text-left whitespace-nowrap"></td>
                    <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap"></td>
                    <td class="pr-6 pl-3 py-3 text-sm tracking-wide text-left whitespace-nowrap">
                        
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
</section>
<!-- Content End -->
@endsection

@section('script')
    @include('jadwal.hod.lembur-diajukan.script-lembur-diajukan')
@endsection