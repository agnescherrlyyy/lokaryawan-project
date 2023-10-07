@extends('layout.main')

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
    <section class="block mt-9 px-2 lg:pl-10 lg:pr-16">
        <div class="w-full mb-4 px-3">
            <button id="kode-booking" class="btn-modal px-4 py-3 rounded-full bg-primer-60 text-slate-50 font-medium text-xs hover:bg-primer-40 w-fit flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                    <path fill-rule="evenodd" d="M3 4.875C3 3.839 3.84 3 4.875 3h4.5c1.036 0 1.875.84 1.875 1.875v4.5c0 1.036-.84 1.875-1.875 1.875h-4.5A1.875 1.875 0 013 9.375v-4.5zM4.875 4.5a.375.375 0 00-.375.375v4.5c0 .207.168.375.375.375h4.5a.375.375 0 00.375-.375v-4.5a.375.375 0 00-.375-.375h-4.5zm7.875.375c0-1.036.84-1.875 1.875-1.875h4.5C20.16 3 21 3.84 21 4.875v4.5c0 1.036-.84 1.875-1.875 1.875h-4.5a1.875 1.875 0 01-1.875-1.875v-4.5zm1.875-.375a.375.375 0 00-.375.375v4.5c0 .207.168.375.375.375h4.5a.375.375 0 00.375-.375v-4.5a.375.375 0 00-.375-.375h-4.5zM6 6.75A.75.75 0 016.75 6h.75a.75.75 0 01.75.75v.75a.75.75 0 01-.75.75h-.75A.75.75 0 016 7.5v-.75zm9.75 0A.75.75 0 0116.5 6h.75a.75.75 0 01.75.75v.75a.75.75 0 01-.75.75h-.75a.75.75 0 01-.75-.75v-.75zM3 14.625c0-1.036.84-1.875 1.875-1.875h4.5c1.036 0 1.875.84 1.875 1.875v4.5c0 1.035-.84 1.875-1.875 1.875h-4.5A1.875 1.875 0 013 19.125v-4.5zm1.875-.375a.375.375 0 00-.375.375v4.5c0 .207.168.375.375.375h4.5a.375.375 0 00.375-.375v-4.5a.375.375 0 00-.375-.375h-4.5zm7.875-.75a.75.75 0 01.75-.75h.75a.75.75 0 01.75.75v.75a.75.75 0 01-.75.75h-.75a.75.75 0 01-.75-.75v-.75zm6 0a.75.75 0 01.75-.75h.75a.75.75 0 01.75.75v.75a.75.75 0 01-.75.75h-.75a.75.75 0 01-.75-.75v-.75zM6 16.5a.75.75 0 01.75-.75h.75a.75.75 0 01.75.75v.75a.75.75 0 01-.75.75h-.75a.75.75 0 01-.75-.75v-.75zm9.75 0a.75.75 0 01.75-.75h.75a.75.75 0 01.75.75v.75a.75.75 0 01-.75.75h-.75a.75.75 0 01-.75-.75v-.75zm-3 3a.75.75 0 01.75-.75h.75a.75.75 0 01.75.75v.75a.75.75 0 01-.75.75h-.75a.75.75 0 01-.75-.75v-.75zm6 0a.75.75 0 01.75-.75h.75a.75.75 0 01.75.75v.75a.75.75 0 01-.75.75h-.75a.75.75 0 01-.75-.75v-.75z" clip-rule="evenodd" />
                </svg>
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
                        <span id="komplemen100" class="font-semibold">5</span>
                        <span class="text-sm text-slate-400">Tiket Komplemen 100%</span>
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
                        <span id="komplemen50" class="font-semibold">5</span>
                        <span class="text-sm text-slate-400">Tiket Komplemen 50%</span>
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
            <div id="selected-date" class="w-full xl:w-3/5 p-4 lg:py-4 lg:px-6 bg-white dark:bg-slate-800 rounded-lg">
                <span class="block mb-4 font-semibold text-sm uppercase tracking-wide">AMBIL KOMPLEMEN TIKET</span>
                <div class="w-full flex flex-col gap-1">
                    <span class="block text-sm">Tanggal yang dipilih :</span>
                    <span id="selected-date-value"></span>
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
                                <span class="font-medium">Reguler Ticket &mdash; Weekday</span>
                                <span class="text-sm text-slate-400">Tiket Komplemen 100%</span>
                            </div>
                        </div>
                        <div class="w-full flex flex-col gap-3">
                            <div class="w-full flex flex-col items-center justify-center lg:flex-row lg:items-center lg:justify-between gap-4">
                                <div class=" flex items-center gap-4">
                                    <button class="minus-ticket w-8 h-8 xl:w-6 xl:h-6 flex items-center justify-center rounded-full border-2 border-primer-60 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-primer-60">
                                            <path fill-rule="evenodd" d="M5.25 12a.75.75 0 01.75-.75h12a.75.75 0 010 1.5H6a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <span class="value-ticket font-semibold">0</span>
                                    <button class="plus-ticket w-8 h-8 xl:w-6 xl:h-6 flex items-center justify-center rounded-full border-2 border-primer-60 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-primer-60">
                                            <path fill-rule="evenodd" d="M12 5.25a.75.75 0 01.75.75v5.25H18a.75.75 0 010 1.5h-5.25V18a.75.75 0 01-1.5 0v-5.25H6a.75.75 0 010-1.5h5.25V6a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                                <div class=" flex items-center gap-2">
                                    <span class="text-sm line-through whitespace-nowrap">Rp. 120,000</span>
                                    <span class="font-semibold text-sm whitespace-nowrap">Rp. 000,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex flex-col md:flex-row md:items-center md:gap-5 gap-5 px-4 py-4 bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-600">
                        <div class="w-full flex gap-4">
                            <div class="w-12 h-12 md:w-12 md:h-12">
                                <img 
                                    src="{{ asset('img/komplemen50.svg') }}"
                                    alt="icon"
                                    class="w-full h-full"
                                >
                            </div>
                            <div class="flex flex-col gap-1">
                                <span class="font-medium">Reguler Ticket &mdash; Weekday</span>
                                <span class="text-sm text-slate-400">Tiket Komplemen 50%</span>
                            </div>
                        </div>
                        <div class="w-full flex flex-col gap-3">
                            <div class="w-full flex flex-col items-center justify-center lg:flex-row lg:items-center lg:justify-between gap-4">
                                <div class=" flex items-center gap-4">
                                    <button class="minus-ticket w-8 h-8 xl:w-6 xl:h-6 flex items-center justify-center rounded-full border-2 border-primer-60 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-primer-60">
                                            <path fill-rule="evenodd" d="M5.25 12a.75.75 0 01.75-.75h12a.75.75 0 010 1.5H6a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <span class="value-ticket font-semibold">0</span>
                                    <button class="plus-ticket w-8 h-8 xl:w-6 xl:h-6 flex items-center justify-center rounded-full border-2 border-primer-60 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-primer-60">
                                            <path fill-rule="evenodd" d="M12 5.25a.75.75 0 01.75.75v5.25H18a.75.75 0 010 1.5h-5.25V18a.75.75 0 01-1.5 0v-5.25H6a.75.75 0 010-1.5h5.25V6a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                                <div class=" flex items-center gap-2">
                                    <span class="text-sm line-through whitespace-nowrap">Rp. 120,000</span>
                                    <span class="font-semibold text-sm whitespace-nowrap">Rp. 60,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full pt-2">
                    <span class="font-semibold text-sm">Ringkasan Komplemen Tiket</span>
                    <div class="w-full flex items-center justify-between my-2">
                        <span class="text-sm text-slate-500">Total dibayar</span>
                        <span class="font-semibold text-sm">Rp 60.000</span>
                    </div>
                    <button id="btn-checkout" type="submit" class="text-center px-4 py-3 w-full rounded-md font-semibold text-sm text-white mt-2 bg-gradient-to-r from-sekunder-60 to-primer-60 hover:bg-gradient-to-r hover:from-primer-40 hover:to-sekunder-40 transition-all duration-200 ease-in-out uppercase">Checkout</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Tiket Content End -->
@endsection

@section('script')
    <script src="{{ asset('js/calender.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            const minusButtons = $(".minus-ticket");
            const plusButtons = $(".plus-ticket");
            const valueTickets = $(".value-ticket");

            minusButtons.click(function () {
                const valueTicket = $(this).siblings(".value-ticket");
                let ticketValue = parseInt(valueTicket.text());
                if (ticketValue > 0) {
                    ticketValue--;
                    valueTicket.text(ticketValue);
                }
            });

            plusButtons.click(function () {
                const valueTicket = $(this).siblings(".value-ticket");
                let ticketValue = parseInt(valueTicket.text());
                if (ticketValue < 5) {
                    ticketValue++;
                    valueTicket.text(ticketValue);
                }
            });

            $("#btn-checkout").click(function (e) {
                e.preventDefault();
                window.location.href = "/tiket/konfirmasi-pembayaran";
            });

            $('#kode-booking').click(function(e){
                e.preventDefault();
                window.location.href = "/tiket/kodebookingku";
            });
        });
    </script>
@endsection