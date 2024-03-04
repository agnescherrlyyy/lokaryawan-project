<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('meta')
    <link rel="shortcut icon" href="{{ asset('/img/favicon.png') }}" type="image/x-icon">
    @yield('css')
    @yield('js')
    <title>{{ $subtitle }} &mdash; LOKARYAWAN</title>
    <script src="{{ asset('js/crypto-js.js') }}"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-Poppins bg-slate-100 text-slate-950 dark:bg-slate-900 dark:text-slate-50 transition-colors duration-300 ease-in-out">
    <section class="max-w-full w-full min-h-screen h-full">
        @include('layout.sidebar')
        <div class="home-section">
            @include('layout.navbar')
            @yield('content')
            <div class="px-10 lg:pl-10 lg:pr-16 mt-12 py-4 border-t-2 border-t-slate-200 dark:border-t-slate-700">
                <p class="text-sm text-slate-400">Copyright © 2023 APP by IT SALOKA</p>
            </div>
        </div>
    </section>
    @yield('modal')
    @yield('script')
    <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/crypto-js.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('js/darkmode.js') }}"></script>
    <script type="text/javascript">
        console.log(usernameEmpatDigit);

        $.ajax({
        url:'{{ env('APP_API') }}get_karyawan_byID?id_karyawan='+usernameEmpatDigit,
        type: "GET",
        success: function(response){
            if(response.status === 'success'){
                var data = response.data[0];
                var grade = data.grade;
                $('#departemen').text(data.departemen);
                $('#sub-departemen').text(data.sub_departemen);

                if (grade === 'Manager' || grade === 'SPV') {
                    $('#pengajuan-lembur').removeClass('hidden');
                }
            }
        },
        error: function(){
            alert('Gagal Mengambil Data');
        }
    });
    </script>
</body>
</html>