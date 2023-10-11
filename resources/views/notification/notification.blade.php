<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('/img/favicon.png') }}" type="image/x-icon">
    <title>Notification &mdash; LOKARYAWAN</title>
    @vite('resources/css/app.css')
</head>
<body class="font-Poppins">
    <section class="max-w-full w-full">
        <div class="fixed left-0 top-0 max-w-full w-full px-5 xl:px-16 bg-white shadow-sm">
            <div class="max-w-7xl w-full mx-auto h-16 flex items-center justify-between py-6">
                <button class="btn-back">
                    <div class="w-28">
                        <img src="{{asset('/img/logo-saloka.png')}}" alt="Logo Saloka" />
                    </div>
                </button>
            </div>
        </div>
        <div class="max-w-7xl w-full mx-auto flex justify-center pt-16">
            <div class="w-full lg:max-w-lg lg:w-full p-4">
                <div class="w-full flex items-center justify-between gap-3">
                    <button class="btn-back">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M20.25 12a.75.75 0 01-.75.75H6.31l5.47 5.47a.75.75 0 11-1.06 1.06l-6.75-6.75a.75.75 0 010-1.06l6.75-6.75a.75.75 0 111.06 1.06l-5.47 5.47H19.5a.75.75 0 01.75.75z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <span class="font-semibold">Notification</span>
                    <span class="font-semibold"></span>
                </div>
                <div class="w-full flex flex-col gap-2 mt-6">
                    <span class="font-semibold text-sm">Permintaan Cuti</span>
                    <button class="w-full flex flex-col gap-2 px-4 py-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-sm">Pengajuan Cuti 20-10-2023</span>
                        <span class="block w-fit px-3 py-2 bg-blue-50 text-blue-600 rounded-full font-semibold text-xs">
                            Cuti Tahunan
                        </span>
                        <span class="text-sm">Agnes Cherrly</span>
                        <span class="text-xs text-slate-500">17-10-2023 08:00</span>
                    </button>
                    <button class="w-full flex flex-col gap-2 px-4 py-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-sm">Pengajuan Cuti 20-10-2023</span>
                        <span class="block w-fit px-3 py-2 bg-blue-50 text-blue-600 rounded-full font-semibold text-xs">
                            Cuti Tahunan
                        </span>
                        <span class="text-sm">Desi</span>
                        <span class="text-xs text-slate-500">17-10-2023 08:00</span>
                    </button>
                </div>
                <div class="w-full flex flex-col gap-2 mt-6">
                    <span class="font-semibold text-sm">Permintaan Komplemen</span>
                    <button class="w-full flex flex-col gap-2 px-4 py-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-sm">Komplemen Tiket 100%</span>
                        <span class="block w-fit px-3 py-2 bg-sky-50 text-sky-500 rounded-full font-semibold text-xs">
                            Komplemen
                        </span>
                        <span class="text-sm">Yanto</span>
                        <span class="text-xs text-slate-500">17-10-2023 08:00</span>
                    </button>
                    <button class="w-full flex flex-col gap-2 px-4 py-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-sm">Komplemen Tiket 100%</span>
                        <span class="block w-fit px-3 py-2 bg-sky-50 text-sky-500 rounded-full font-semibold text-xs">
                            Komplemen
                        </span>
                        <span class="text-sm">Reza</span>
                        <span class="text-xs text-slate-500">17-10-2023 08:00</span>
                    </button>
                    <button class="w-full flex flex-col gap-2 px-4 py-3 rounded-lg hover:bg-slate-50">
                        <span class="font-semibold text-sm">Komplemen Tiket 100%</span>
                        <span class="block w-fit px-3 py-2 bg-sky-50 text-sky-500 rounded-full font-semibold text-xs">
                            Komplemen
                        </span>
                        <span class="text-sm">Reza</span>
                        <span class="text-xs text-slate-500">17-10-2023 08:00</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".btn-dashboard").click(function (e) {
                e.preventDefault();
                window.location.href = "/dashboard";
            });
            $('.btn-back').click(function (e) {
                e.preventDefault();
                window.location.href = "/dashboard";
            });
        })
    </script>
</body>
</html>