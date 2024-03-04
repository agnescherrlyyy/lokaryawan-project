@extends('layout.main')

@section('css')
<link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.5.0-web/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.5.0-web/css/all.min.css') }}">
@endsection

@section('content')
<!-- Heading Start -->
<div class="max-w-full w-full px-5 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
    <div class="w-full">
        <h1 class="font-semibold text-lg mb-2">Lemburku</h1>
        <h4 class="font-medium text-slate-600 dark:text-slate-400">Approved Lembur</h4>
    </div>
</div>
<!-- Heading End -->

<!-- Main Content Start -->
<section class="block mt-9 px-5 lg:pl-10 lg:pr-10">
    <div class="w-full flex items-center gap-2 mb-4">
        <a href="{{ url('/lemburku') }}" class="px-4 py-2 rounded-full hover:text-primer-60 font-semibold text-xs hover:bg-primer-20 w-fit flex items-center gap-2">
            <i class="fa-solid fa-table text-md"></i>
            Daftar Lemburku
        </a>
        <span class="font-semibold text-sm">/</span>
        <a href="{{ url('#') }}" class="px-4 py-2 rounded-full text-primer-60  hover:text-primer-60 font-semibold text-xs hover:bg-primer-20  w-fit flex items-center gap-2" data-name="tambah-data">
            <i class="fa-solid fa-plus text-md"></i>
            Approved Lembur
        </a>
    </div>
    <section class="w-full flex flex-col gap-4">
        <div class="w-full h-fit bg-white dark:bg-slate-800 rounded-lg">
            <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-3 px-6 py-6 border-b border-slate-200 dark:border-slate-700">
                <span id="permintaan-cuti" class="inline-block font-semibold text-sm">Detail Lembur</span>
            </div>
            <div class="w-full grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6 px-6 pb-9 pt-2 mt-4">
                <div class="w-full flex flex-col gap-2">
                    <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400">ID Overtime</span>
                    <span id="id-overtime" class="text-[13px]"></span>
                </div>
                <div class="w-full flex flex-col gap-2">
                    <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400">Tanggal Pengajuan Lembur</span>
                    <span id="tgl-pengajuan" class="text-[13px]"></span>
                </div>
                <div class="w-full flex flex-col gap-2">
                    <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400">Tanggal Lembur</span>
                    <span id="tgl-lembur" class="text-[13px]"></span>
                </div>
                <div class="w-full flex flex-col gap-2">
                    <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400">Keterangan</span>
                    <span id="keterangan" class="text-[13px]"></span>
                </div>
                <div class="w-full flex flex-col gap-2">
                    <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400">Jam Lembur Dipilih</span>
                    <span id="jml-jam-dipilih" class="text-[13px]"></span>
                </div>
                <div class="w-full flex flex-col gap-2">
                    <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400">Total Jam Lembur</span>
                    <span id="tot-jam-lembur" class="text-[13px]"></span>
                </div>
                <div class="w-full flex flex-col gap-2">
                    <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400">Status</span>
                    <div class="flex items-center gap-2">
                        <i id="fa-solid" class=""></i>
                        <span id="status" class="text-[13px] "></span>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-2">
                    <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400">Aksi Approved</span>
                    <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                        <button class="px-4 py-3 rounded-full text-slate-50 font-semibold text-xs bg-primer-60 hover:bg-primer-80 transition-colors duration-200 ease-in-out w-fit">
                            Setujui Lembur
                        </button>
                        <button class="px-4 py-3 rounded-full text-slate-50 font-semibold text-xs bg-rose-600 hover:bg-rose-700 transition-colors duration-200 ease-in-out w-fit">
                            Tolak Lembur
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- Main Content End -->
@endsection

@section('script')
    @include('jadwal.lembur.approved-lembur.script-approved')
@endsection