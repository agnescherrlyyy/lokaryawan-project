@extends('layout-2.main')

@section('main-content')
    <div class="max-w-full w-full pt-16">
        <div class="w-full bg-primer-40 px-5 lg:px-16">
            <div class="max-w-7xl w-full mx-auto h-28 flex flex-col justify-center py-2">
                <span class="block font-semibold text-lg text-white">Informasi Terbaru</span>
                <span class="block font-medium text-sm text-white">Ragam Informasi terbaru seputar Saloka Theme Park</span>
            </div>
        </div>
        <div class="max-w-7xl w-full mx-auto px-5 py-9">
            <div class="w-full flex items-center gap-3 pb-9">
                <button class="btn-back">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M20.25 12a.75.75 0 01-.75.75H6.31l5.47 5.47a.75.75 0 11-1.06 1.06l-6.75-6.75a.75.75 0 010-1.06l6.75-6.75a.75.75 0 111.06 1.06l-5.47 5.47H19.5a.75.75 0 01.75.75z" clip-rule="evenodd" />
                    </svg>
                </button>
                <span class="font-semibold text-sm">Kembali</span>
                <span class="font-semibold"></span>
            </div>
            <div class="w-full flex flex-col xl:flex-row-reverse gap-9">
                <div class="w-full xl:w-1/4">
                    <div class="w-full flex flex-col gap-2">
                        <strong class="text-lg">Pencarian</strong>
                        <div class="flex items-center relative">
                            <input type="text" name="" id="" placeholder="Temukan informasi terbaru...." class=" w-full px-10 py-3 border border-slate-300 bg-white dark:bg-slate-600 rounded-full focus:outline-none focus:border-primer-80 text-slate-700 dark:text-slate-50 text-xs focus:ring-2 focus:ring-primer-40">
                            <button type="submit" class="absolute left-3 group opacity-30">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                    <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                                </svg>          
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full xl:w-3/4 flex flex-col gap-9 xl:pr-9 xl:border-r xl:border-r-salate-300 dark:xl:border-r-slate-600">
                    <div class="w-full overflow-hidden">
                        <img 
                            src="{{ asset('img/1696126594PromomelaluiWebSaloka.png') }}" 
                            alt=""
                            class="rounded-md"
                        >
                        <div class="flex flex-col gap-4 py-4">
                            <div class="flex flex-col gap-2">
                                <span class="block w-fit px-3 py-2 bg-indigo-50 text-indigo-600 rounded-full font-semibold text-xs">
                                    Informasi
                                </span>
                                <span class="text-sm text-slate-500 text-justify">12 Oktober 2023</span>
                                <h1 class="font-semibold text-lg">Hari Batik Nasional 2023</h1>
                                <div class="w-full flex flex-col gap-4">
                                    <p class="text-sm text-slate-500 dark:text-slate-400">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut debitis provident qui nam ipsam magni! Voluptatibus vel adipisci nisi inventore!</p>
                                    <p class="text-sm text-slate-500 dark:text-slate-400 text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda delectus rerum sint veniam unde, quis quae aliquid, veritatis a eveniet asperiores ducimus laboriosam deserunt ut totam error nostrum maxime atque dignissimos corporis! Eveniet dolorem quidem quas corporis molestias, facilis natus quasi sit vero placeat odit culpa iure, quos sequi ullam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main-script')
    <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".btn-dashboard").click(function (e) {
                e.preventDefault();
                window.location.href = "{{ url('/dashboard') }}";
            });

            $('.btn-back').click(function (e) {
                e.preventDefault();
                history.back();
            });
        });

    </script>
@endsection