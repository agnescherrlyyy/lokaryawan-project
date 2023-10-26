@extends('layout.main')

@section('content')
    <!-- Heading Start -->
    <div class="max-w-full w-full px-5 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
        <div class="w-full">
            <h1 class="font-semibold text-lg mb-2">Cuti Tahunan</h1>
            <h4 class="font-medium text-slate-600 dark:text-slate-400">Permintaan Cuti Tahunan</h4>
        </div>
    </div>
    <!-- Heading End --> 

    <!-- Permintaan Cuti Content Start -->
    <section class="block mt-9 px-5 lg:pl-10 lg:pr-16">
        <div class="w-full flex items-center gap-1">
            <a href="{{ url('/dashboard') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-400 dark:text-slate-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-slate-400 dark:text-slate-500">
                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
            </svg>
            <button id="back-cuti" class="font-medium text-sm text-slate-400 dark:text-slate-500">Cuti Tahunan</button>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-primer-60">
                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
            </svg>
        </div>
        <section class="w-full flex flex-col lg:flex-row gap-4">
            <div class="w-full h-fit bg-white dark:bg-slate-800 rounded-lg mt-9">
                <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-3 px-6 py-4 border-b border-slate-200 dark:border-slate-700">
                    <span class="inline-block font-semibold text-sm">Permintaan Cuti</span>
                </div>
                <div class="w-full flex flex-col gap-2 p-4">
                    <div class="w-full flex items-center justify-between">
                        <span class="text-sm">Tgl pengajuan</span>
                        <span class="text-sm whitespace-nowrap">06/10/2023</span>
                    </div>
                    <div class="w-full flex items-center justify-between">
                        <span class="text-sm">Tgl permintaan cuti</span>
                        <span class="text-sm whitespace-nowrap">12/10/2023</span>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white dark:bg-slate-800 rounded-lg mt-9">
                <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-3 px-6 py-4 border-b border-slate-200 dark:border-slate-700">
                    <span class="inline-block font-semibold text-sm">Log Permintaan Cuti 12/10/2023</span>
                </div>
                <div class="w-full flex flex-col px-2 py-4">
                    <div class="p-4 rounded-lg">
                        <div class="flex">
                            <div class="h-16 w-16 mr-6">
                                <img src="{{ asset('img/user.svg') }}" alt="" srcset="" class="h-full w-full">
                            </div>
                            <div class="w-full flex flex-col gap-2">
                                <span class="block font-semibold text-sm">Muh Khoirul Irvan</span>
                                <div class="w-full flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-rose-600">
                                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="font-semibold text-xs text-rose-600">Reject</span>
                                </div>
                                <p class="text-xs">Ketarangan Menolak Permintaan Cuti</p>
                                <span class="block text-xs text-gray-500 dark:text-gray-400">08/10/23 09:49</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 rounded-lg">
                        <div class="flex">
                            <div class="h-16 w-16 mr-6">
                                <img src="{{ asset('img/user.svg') }}" alt="" srcset="" class="h-full w-full">
                            </div>
                            <div class="w-full flex flex-col gap-2">
                                <span class="block font-semibold text-sm">Misbahul Munir</span>
                                <div class="w-full flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-emerald-500">
                                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="font-semibold text-xs text-emerald-600">Approved</span>
                                </div>
                                <span class="block text-xs text-gray-500 dark:text-gray-400">07/10/23 12:54</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- Permintaan Cuti Content End -->
@endsection

@section('script')
<script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#back-cuti").click(function(e){
            e.preventDefault();
            window.history.back();
        })
    });
</script>
@endsection