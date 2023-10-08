<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('/img/favicon.png') }}" type="image/x-icon">
    <title>Login &mdash; LOKARYAWAN</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="font-Poppins">
    <section id="bg-auth" class="max-w-full w-full min-h-screen h-full flex flex-col items-center justify-center px-5 lg:px-16">
        <div class="w-full flex items-center justify-center py-6">
            <div class="w-28">
                <img src="{{asset('/img/logo-saloka.png')}}" alt="Logo Saloka" />
            </div>
        </div>
        <div class="w-full flex items-center justify-center z-50">
            <div class="max-w-sm w-full bg-white px-2 lg:px-6 lg:py-6 rounded-lg overflow-hidden lg:shadow-lg">
                <span class="block font-semibold text-primer-60 text-xl">Login LOKARYAWAN</span>
                <p class="text-sm text-slate-400 mt-2">Sugeng Rawuh, silahkan berikan informasi untuk akses aplikasi 👋</p>
                <div class="w-full mt-4">
                    <form action="" method="POST">
                        <div class="w-full mb-4 relative">
                            <label htmlFor="username" class="block mb-2 font-medium text-slate-700 text-sm">Username</label>
                            <input 
                                type="text"
                                id="username"
                                name="username"
                                class="w-full text-sm border rounded-md py-3 pl-10 pr-4 text-slate-700 focus:outline-none  focus:border-sekunder-60 focus:ring-2 focus:ring-sekunder-40 placeholder:opacity-50 transition-all duration-200 ease-in-out"
                                placeholder="Masukan username"
                                required
                            />
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 absolute left-3 top-10 text-slate-700">
                                <path fillRule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clipRule="evenodd" />
                            </svg>
                        </div>
                        <div class="w-full mb-4 relative">
                            <label htmlFor="password" class="block mb-2 font-medium text-slate-700 text-sm">Password</label>
                            <input 
                                type="password"
                                id="password"
                                name="password"
                                class="w-full text-sm border rounded-md py-3 pl-10 pr-4 text-slate-700 focus:outline-none focus:border-sekunder-60 focus:ring-2 focus:ring-sekunder-40 placeholder:opacity-50 transition-all duration-200 ease-in-out"
                                placeholder="Masukan password"
                                required
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 absolute left-3 top-10 text-slate-700">
                                <path fill-rule="evenodd" d="M15.75 1.5a6.75 6.75 0 00-6.651 7.906c.067.39-.032.717-.221.906l-6.5 6.499a3 3 0 00-.878 2.121v2.818c0 .414.336.75.75.75H6a.75.75 0 00.75-.75v-1.5h1.5A.75.75 0 009 19.5V18h1.5a.75.75 0 00.53-.22l2.658-2.658c.19-.189.517-.288.906-.22A6.75 6.75 0 1015.75 1.5zm0 3a.75.75 0 000 1.5A2.25 2.25 0 0118 8.25a.75.75 0 001.5 0 3.75 3.75 0 00-3.75-3.75z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <a id="modal-password" class="btn-modal block w-full text-center font-semibold text-xs text-blue-500 hover:text-blue-400 cursor-pointer">                         
                            Ganti Password?                    
                        </a>
                        <button id="btn-login" type="submit" class="text-center px-4 py-3 w-full rounded-md font-semibold text-sm text-white mt-6 bg-primer-60 hover:bg-primer-80 transition-all duration-200 ease-in-out">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Start-->
    <section id="#modalAdd" class="modal-container hidden max-w-full w-full max-h-screen h-full fixed top-0 left-0 z-[100]">
        <div class="w-full h-full flex items-center justify-center px-5">
            <div id="modal-password" class="show-modal w-full max-w-full md:max-w-lg rounded-lg bg-white dark:bg-slate-700 p-4">
                <div class="w-full flex items-center justify-between relative pb-6 border-b border-slate-100">
                    <strong>Ganti Password</strong>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="close-modal w-8 h-8 absolute top-0 right-0 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>                                            
                </div>
                <div class="w-full pt-6">
                    <form id="form_add" class="w-full flex flex-col items-center justify-center gap-4">
                        @csrf
                        <div class="w-full flex flex-col justify-center items-start gap-2 px-4">
                            <label for="username" class="block font-semibold text-sm">Username</label>
                            <div class="w-full">
                                <input type="text" name="username" id="username" value="" placeholder="Username" class="item-input" required>
                            </div>
                        </div>
                        <div class="w-full flex flex-col justify-center items-start gap-2 px-4">
                            <label for="password-lama" class="block font-semibold text-sm">Password lama</label>
                            <div class="w-full">
                                <input type="password" name="password-lama" id="password-lama" value="" placeholder="Password lama" class="item-input" required>
                            </div>
                        </div>
                        <div class="w-full flex flex-col justify-center items-start gap-2 px-4">
                            <label for="password-baru" class="block font-semibold text-sm">Password lama</label>
                            <div class="w-full">
                                <input type="password" name="password-baru" id="password-baru" value="" placeholder="Password baru" class="item-input" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="w-full flex item-center justify-end gap-3 mt-6">
                    <button class="close-modal px-4 py-3 rounded-lg bg-slate-300 text-slate-950 text-xs hover:bg-slate-200 w-fit">                         
                        Batal
                    </button>
                    <button type="submit" form="form_add" class="close-modal px-4 py-3 rounded-lg text-slate-50 text-xs bg-primer-60 hover:bg-primer-80 transition-colors duration-200 ease-in-out w-fit">                         
                        Perbaharui Password
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal End-->

    <script src="{{ asset('js/scriptModal.js') }}"></script>
    <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#btn-login').click(function (e) {
                e.preventDefault();
                var formData = {
                    username: $('#username').val(),
                    password: $('#password').val(),
                    _token: $('meta[name="csrf-token"]').attr('content'),
                };
                $.ajax({
                    type: 'POST',
                    url: "{{ route('login.check_login') }}",
                    data: formData,
                    dataType: 'json',
                    success: function (data) {
                        if (data.success) {
                            Swal.fire({
                                title: 'Login Berhasil',
                                text: 'Selamat Data di LOKARYAWAN👋',
                                imageUrl: '{{ asset('img/STK-20230906-WA0025.webp') }}',
                                imageWidth: 200,
                                imageHeight: 200,
                                imageAlt: 'Custom image',
                                showConfirmButton: false,
                                timer: 1500,
                            });
                            window.location.href = "{{ route('dashboard.index') }}";
                        } else {
                            Swal.fire({
                                title: 'Login Gagal',
                                text: data.message,
                                imageUrl: '{{ asset('img/STK-20230906-WA0027.webp') }}',
                                imageWidth: 200,
                                imageHeight: 200,
                                imageAlt: 'Custom image',
                                showConfirmButton: false,
                                timer: 1500,
                            });
                        }
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        Swal.fire({
                            title: 'Login Gagal',
                            text: 'Username atau password salah.',
                            imageUrl: '{{ asset('img/STK-20230906-WA0027.webp') }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            showConfirmButton: false,
                            timer: 1500,
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>