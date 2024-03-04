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
    <script src="{{ asset('js/crypto-js.js') }}"></script>
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
                                class="w-full text-sm border border-slate-300 rounded-md py-3 pl-10 pr-4 text-slate-700 focus:outline-none  focus:border-sekunder-60 focus:ring-2 focus:ring-sekunder-40 placeholder:opacity-50 transition-all duration-200 ease-in-out"
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
                                class="w-full text-sm border border-slate-300 rounded-md py-3 pl-10 pr-4 text-slate-700 focus:outline-none focus:border-sekunder-60 focus:ring-2 focus:ring-sekunder-40 placeholder:opacity-50 transition-all duration-200 ease-in-out"
                                placeholder="Masukan password"
                                required
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 absolute left-3 top-10 text-slate-700">
                                <path fill-rule="evenodd" d="M15.75 1.5a6.75 6.75 0 00-6.651 7.906c.067.39-.032.717-.221.906l-6.5 6.499a3 3 0 00-.878 2.121v2.818c0 .414.336.75.75.75H6a.75.75 0 00.75-.75v-1.5h1.5A.75.75 0 009 19.5V18h1.5a.75.75 0 00.53-.22l2.658-2.658c.19-.189.517-.288.906-.22A6.75 6.75 0 1015.75 1.5zm0 3a.75.75 0 000 1.5A2.25 2.25 0 0118 8.25a.75.75 0 001.5 0 3.75 3.75 0 00-3.75-3.75z" clip-rule="evenodd" />
                            </svg>
                            <div id="show-password" class="absolute right-3 top-10 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-slate-700">
                                    <path d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z" />
                                    <path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z" />
                                    <path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z" />
                                </svg>                                  
                            </div>
                        </div>
                        <button id="btn-login" type="submit" class="text-center px-4 py-3 w-full rounded-md font-semibold text-sm text-white mt-6 bg-primer-60 hover:bg-primer-80 transition-all duration-200 ease-in-out">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#btn-login').click(function (e) {
                e.preventDefault();
                var formData = {
                    username: $('#username').val(),
                    password: $('#password').val(),
                };
                $.ajax({
                    type: 'POST',
                    url: "https://lokahr.salokapark.app/api/login",
                    data: formData,
                    dataType: 'json',
                    success: function (data) {
                        console.log(data)
                        if (data.status == "success") {
                            const encryptedFromData = CryptoJS.AES.encrypt(JSON.stringify(formData), '{{ env('APP_KEY') }}').toString();
                            localStorage.setItem('encryptedFromData', encryptedFromData);
                            Swal.fire({
                                title: 'Login Berhasil',
                                text: 'Selamat Datang di LOKARYAWAN👋',
                                imageUrl: '{{ asset('img/STK-20230906-WA0025.webp') }}',
                                imageWidth: 200,
                                imageHeight: 200,
                                imageAlt: 'Custom image',
                                showConfirmButton: false,
                                timer: 1500,
                            });
                            window.location.href = "{{ url('start-session') }}?name="+data.user.name+"&username="+data.user.username;
                        } else {
                            Swal.fire({
                                title: 'Login Gagal',
                                text: data.message,
                                imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                                imageWidth: 200,
                                imageHeight: 200,
                                imageAlt: 'Custom image',
                                showConfirmButton: false,
                                timer: 1500,
                            });
                        }
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        console.log(xhr);
                        console.log(textStatus);
                        Swal.fire({
                            title: 'Login Gagal',
                            text: 'Terjadi Kesalahan Harap Hubungi Developer.',
                            imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            showConfirmButton: false,
                            timer: 1500,
                        });
                    }
                });
            });

            $('#show-password').click(function (e) {
                e.preventDefault();
                var showPassword = $('#password');
                var icon = $('#show-password svg');

                if (showPassword.attr('type') === 'password') {
                    showPassword.attr('type', 'text');
                    icon.html(`
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                    `);
                } else {
                    showPassword.attr('type', 'password');
                    icon.html(`
                        <path d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z" />
                        <path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z" />
                        <path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z" />
                    `);
                }
            });
        });
    </script>
    @if (session('danger'))
        <script>
            Swal.fire({
                title: 'Access Dinied',
                text: "{{session('danger')}}",
                imageUrl: '{{ asset('img/STK-20230906-WA0027.webp') }}',
                imageWidth: 200,
                imageHeight: 200,
                imageAlt: 'Custom image',
                showConfirmButton: false,
                timer: 1500,
            });
        </script>
    @endif
</body>
</html>