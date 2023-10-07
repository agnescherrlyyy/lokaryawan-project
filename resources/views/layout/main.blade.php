<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('/img/favicon.png') }}" type="image/x-icon">
    <title>{{ $subtitle }} &mdash; LOKARYAWAN</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="font-Poppins bg-slate-100 text-slate-950 dark:bg-slate-900 dark:text-slate-50 transition-colors duration-300 ease-in-out">
    <section class="max-w-full w-full min-h-screen h-full">
        @include('layout.sidebar')
        <div class="home-section">
            @include('layout.navbar')
            @yield('content')
            <div class="px-10 lg:pl-10 lg:pr-16 mt-12 py-4 border-t-2 border-t-slate-200 dark:border-t-slate-700">
                <p class="text-sm text-slate-400">Copyright © 2023  Design By IT SALOKA</p>
            </div>
        </div>
    </section>
    @yield('script')
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('js/darkmode.js') }}"></script>
</body>
</html>