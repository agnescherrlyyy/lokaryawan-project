@extends('layout-2.main')

@section('main-content')
    <div class="max-w-7xl w-full mx-auto flex justify-center pt-16">
        <div class="w-full lg:max-w-lg lg:w-full p-4">
            <div class="w-full flex items-center justify-between gap-3">
                <button class="btn-back">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M20.25 12a.75.75 0 01-.75.75H6.31l5.47 5.47a.75.75 0 11-1.06 1.06l-6.75-6.75a.75.75 0 010-1.06l6.75-6.75a.75.75 0 111.06 1.06l-5.47 5.47H19.5a.75.75 0 01.75.75z" clip-rule="evenodd" />
                    </svg>
                </button>
                <span class="font-semibold text-sm">Konfirmasi Pembayaran</span>
                <span class="font-semibold"></span>
            </div>
            <div class="w-full p-6 mt-9 bg-slate-100 dark:bg-slate-800 rounded-lg relative">
                <div class="w-10 h-10 rounded-full bg-white dark:bg-slate-900 absolute -top-6 left-[46%]"></div>
                <div class="w-full flex flex-col gap-2 pb-4 border-b-2 border-gray-200">
                    <strong class="text-sm">Data Diri</strong>
                    <div class="w-full flex items-center justify-between">
                        <span class="text-sm">Tgl ambil</span>
                        <span class="text-sm whitespace-nowrap">Jumat, 6 Oktober 2023</span>
                    </div>
                    <div class="w-full flex items-center justify-between">
                        <span class="text-sm">Nama</span>
                        <span class="text-sm whitespace-nowrap">Agnes Cherrly</span>
                    </div>
                    <div class="w-full flex items-center justify-between">
                        <span class="text-sm">NIK</span>
                        <span class="text-sm whitespace-nowrap">02-2023-109</span>
                    </div>
                    <div class="w-full flex items-center justify-between">
                        <span class="text-sm">Department</span>
                        <span class="text-sm whitespace-nowrap">IT</span>
                    </div>
                    <div class="w-full flex items-center justify-between">
                        <span class="text-sm">Sub Department</span>
                        <span class="text-sm whitespace-nowrap">Aplikasi dan System</span>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-2 mt-6 pb-4 border-b-2 border-dashed border-gray-200">
                    <strong class="text-sm">Detail Pembayaran</strong>
                    <div class="w-full flex items-center justify-between">
                        <span class="text-sm">Tiket</span>
                        <span class="text-sm whitespace-nowrap">Promo Oktober - Weekday</span>
                    </div>
                    <div class="w-full flex items-center justify-between">
                        <span class="text-sm">Qty</span>
                        <span class="text-sm whitespace-nowrap">1</span>
                    </div>
                    <div class="w-full flex items-center justify-between">
                        <span class="text-sm">Subtotal</span>
                        <span class="text-sm whitespace-nowrap">Rp 60,000</span>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-2 py-4 border-b-2 border-dashed border-gray-200">
                    <div class="w-full flex items-center justify-between">
                        <span class="text-sm">Total</span>
                        <span class="font-semibold whitespace-nowrap">Rp 60,000</span>
                    </div>
                </div>
                <div class="w-full my-2">
                    <button type="submit" class="text-center px-4 py-3 w-full rounded-md font-semibold text-sm text-white mt-2 bg-primer-60 hover:bg-primer-80 transition-all duration-200 ease-in-out uppercase">Checkout</button>
                </div>
                <div class="w-10 h-10 rounded-full bg-white dark:bg-slate-900 absolute -bottom-6 left-[46%]"></div>
            </div>
        </div>
    </div>
@endsection

@section('main-script')
    <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $(".btn-dashboard").click(function (e) {
                e.preventDefault();
                window.location.href = "{{ url('/dashboard') }}";
            });
            $('.btn-back').click(function (e) {
                e.preventDefault();
                window.location.href = "{{ url('/tiket') }}";
            });
        });
    </script>
@endsection