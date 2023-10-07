@extends('layout.main')

@section('content')
    <!-- Heading Start -->
    <div class="max-w-full w-full px-10 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
        <div class="w-full">
            <h1 class="font-semibold text-xl mb-2">Jadwal</h1>
            <h4 class="font-medium text-slate-600 dark:text-slate-400">Jadwalku</h4>
        </div>
    </div>
    <!-- Heading End -->

    <!-- Jadwalku Content Start -->
    <section class="block mt-9 px-5 lg:pl-10 lg:pr-16">
        <div class="w-full flex flex-col items-center justify-center p-4 rounded-lg bg-white dark:bg-slate-800">
            <div class="w-32 h-32 rounded-full overflow-hidden">
                <img src="{{ asset('img/STK-20230906-WA0007.png') }}" alt="" class="w-full h-full">
            </div>
            <div class="w-full flex flex-col items-center justify-center gap-1">
                <strong class="text-lg">Agnes Cherrly</strong>
                <span class="text-sm">02-2023-109</span>
                <span class="text-sm font-medium text-slate-500 dark:text-slate-400">IT &mdash; Aplikasi dan Sytem</span>
            </div>
            <div class="w-full grid grid-cols-3 md:grid-cols-3 lg:grid-cols-4 gap-y-6 mt-6 bg-white dark:bg-slate-800 rounded-lg">
                <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                    <div class="w-10 h-10 md:w-12 md:h-12">
                        <img 
                            src="{{ asset('img/total-priode.svg') }}"
                            alt="icon"
                            class="w-full h-full"
                            >
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="font-semibold">30</span>
                        <span class="text-xs text-slate-500">Total hari priode</span>
                    </div>
                </div>
                <div class="w-full flex flex-col md:flex-row md:items-center md:gap-5 gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                    <div class="w-10 h-10 md:w-12 md:h-12">
                        <img 
                            src="{{ asset('img/berangkat.svg') }}"
                            alt="icon"
                            class="w-full h-full"
                            >
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="font-semibold">20</span>
                        <span class="text-xs text-slate-500">Total hari berangkat</span>
                    </div>
                </div>
                <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                    <div class="w-10 h-10 md:w-12 md:h-12">
                        <img 
                            src="{{ asset('img/libur.svg') }}"
                            alt="icon"
                            class="w-full h-full"
                            >
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="font-semibold">9</span>
                        <span class="text-xs text-slate-500">Total hari libur</span>
                    </div>
                </div>
                <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                    <div class="w-10 h-10 md:w-12 md:h-12">
                        <img 
                            src="{{ asset('img/ph.svg') }}"
                            alt="icon"
                            class="w-full h-full"
                            >
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="font-semibold">1</span>
                        <span class="text-xs text-slate-500">Total PH</span>
                    </div>
                </div>
                <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                    <div class="w-10 h-10 md:w-12 md:h-12">
                        <img 
                            src="{{ asset('img/izin.svg') }}"
                            alt="icon"
                            class="w-full h-full"
                            >
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="font-semibold">0</span>
                        <span class="text-xs text-slate-500">Total Izin</span>
                    </div>
                </div>
                <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                    <div class="w-10 h-10 md:w-12 md:h-12">
                        <img 
                            src="{{ asset('img/alfa.svg') }}"
                            alt="icon"
                            class="w-full h-full"
                            >
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="font-semibold">0</span>
                        <span class="text-xs text-slate-500">Total Alfa</span>
                    </div>
                </div>
                <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                    <div class="w-10 h-10 md:w-12 md:h-12">
                        <img 
                            src="{{ asset('img/sakit.svg') }}"
                            alt="icon"
                            class="w-full h-full"
                            >
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="font-semibold">0</span>
                        <span class="text-xs text-slate-500">Total Sakit</span>
                    </div>
                </div>
                <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                    <div class="w-10 h-10 md:w-12 md:h-12">
                        <img 
                            src="{{ asset('img/cuti.svg') }}"
                            alt="icon"
                            class="w-full h-full"
                            >
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="font-semibold">0</span>
                        <span class="text-xs text-slate-500">Total Cuti</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full bg-white dark:bg-slate-800 rounded-lg mt-9">
            <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 px-6 py-4 border-b border-slate-200 dark:border-slate-700">
                <span class="inline-block font-semibold text-sm">Jadwalku Priode September - Oktober 2023</span>
                <div class="flex items-center relative">
                    <input type="text" name="" id="" placeholder="Serach" class=" w-full px-10 py-3 border border-slate-300 bg-white dark:bg-slate-600 rounded-full focus:outline-none focus:border-primer-80 text-slate-700 dark:text-slate-50 text-xs focus:ring-2 focus:ring-primer-40">
                    <button type="submit" class="absolute left-3 group opacity-30">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                        </svg>          
                    </button>
                </div>
            </div>
            <div class="w-full py-4">
                <div class="overflow-auto">
                    <table class="w-full ">
                        <thead class="border-y-2 dark:border-y-gray-600 bg-white dark:bg-gray-800">
                            <tr>
                                <th class="pl-6 pr-3 py-3 text-sm font-semibold tracking-wide text-left">No.</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Hari</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Tanggal</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Kehadiran</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Jam Kehadiran</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Jam Pulang</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Event</th>
                                <th class="pr-6 pl-3 py-3 text-sm font-semibold tracking-wide text-left">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 dark:divide-gray-600">
                            @foreach ($jadwalku_table as $item) 
                            <tr class="odd:bg-gray-50 even:bg-white dark:odd:bg-gray-700 dark:even:bg-gray-800 {{ $item->kehadiran === 'PH' ? ' text-blue-500' : '' }} {{ $item->kehadiran === 'OFF' ? ' text-red-500' : '' }}">
                                <td class="pl-6 pr-3 py-3 text-sm tracking-wide text-left">{{ $item->id }}</td>
                                <td class="p-3 text-sm tracking-wide text-left">{{ $item->hari }}</td>
                                <td class="p-3 text-sm tracking-wide text-left whitespace-nowrap">{{ $item->tanggal }}</td>
                                <td class="p-3 text-sm tracking-wide text-left">{{ $item->kehadiran }}</td>
                                <td class="p-3 text-sm tracking-wide text-left">{{ $item->jam_kehadiran }}</td>
                                <td class="p-3 text-sm tracking-wide text-left">{{ $item->jam_pulang }}</td>
                                <td class="p-3 text-sm tracking-wide text-left">{{ $item->event }}</td>
                                <td class="p-3 text-sm tracking-wide text-left">{{ $item->keterangan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pagination bg-transparent px-6 pt-6">
                    <ul class="flex items-center justify-center">
                        <li><a href="#" class="btn-pagination">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 010-1.06l7.5-7.5a.75.75 0 111.06 1.06L9.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5z" clip-rule="evenodd" />
                            </svg>                          
                        </a></li>
                        <li><a href="#" class="btn-pagination active">1</a></li>
                        <li><a href="#" class="btn-pagination">2</a></li>
                        <li><a href="#" class="btn-pagination">3</a></li>
                        <li><a href="#" class="btn-pagination">4</a></li>
                        <li><a href="#" class="btn-pagination">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
                            </svg>                              
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Jadwalku Content End -->
@endsection