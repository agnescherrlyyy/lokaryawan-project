@extends('layout-2.main')

@section('main-content')
    <div class="max-w-7xl w-full mx-auto flex justify-center pt-16">
        <div class="w-full lg:max-w-lg lg:w-full p-4">
            <div class="w-full flex items-center justify-between gap-3">
                <button class="btn-back">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M20.25 12a.75.75 0 01-.75.75H6.31l5.47 5.47a.75.75 0 11-1.06 1.06l-6.75-6.75a.75.75 0 010-1.06l6.75-6.75a.75.75 0 111.06 1.06l-5.47 5.47H19.5a.75.75 0 01.75.75z" clip-rule="evenodd" />
                    </svg>
                </button>
                <span class="font-semibold text-sm">Profile User</span>
                <span class="font-semibold"></span>
            </div>
            <div class="w-full flex flex-col items-center justify-center p-4 mt-4">
                <div class="w-32 h-32 rounded-full overflow-hidden">
                    <img src="{{ asset('img/STK-20230906-WA0007.png') }}" alt="" class="w-full h-full">
                </div>
                <div class="w-full flex flex-col items-center justify-center gap-1">
                    <strong class="">{{ session('name') }}</strong>
                    <span class="text-xs">{{ session('username') }}</span>
                    <span class="text-xs font-medium text-slate-500 dark:text-slate-400">IT &mdash; Aplikasi dan Sytem</span>
                </div>
            </div>
            <div class="w-full flex flex-col items-center justify-center gap-2 mt-4 ">
                <div class="max-w-sm w-full flex flex-col it justify-center mb-4 px-4 py-4 bg-white dark:bg-slate-900">
                    <span class="font-semibold text-sm mb-2 text-slate-500">Setting Profile</span>
                    <div class="w-full flex items-center justify-center">
                        <button id="ganti-password" class="btn-modal w-full px-4 py-4 font-medium text-xs flex items-center justify-between gap-2 rounded-lg bg-blue-50 hover:bg-blue-100 dark:bg-blue-400 hover:dark:bg-blue-500">
                            <span class="w-full flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path fill-rule="evenodd" d="M15.75 1.5a6.75 6.75 0 00-6.651 7.906c.067.39-.032.717-.221.906l-6.5 6.499a3 3 0 00-.878 2.121v2.818c0 .414.336.75.75.75H6a.75.75 0 00.75-.75v-1.5h1.5A.75.75 0 009 19.5V18h1.5a.75.75 0 00.53-.22l2.658-2.658c.19-.189.517-.288.906-.22A6.75 6.75 0 1015.75 1.5zm0 3a.75.75 0 000 1.5A2.25 2.25 0 0118 8.25a.75.75 0 001.5 0 3.75 3.75 0 00-3.75-3.75z" clip-rule="evenodd" />
                                </svg>
                                Ganti Password
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modal')
    <section id="modalAdd" class="modal-container hidden max-w-full w-full max-h-screen h-full fixed top-0 left-0 z-[100]">
        <div class="w-full h-full flex items-center justify-center px-5">
            <div id="ganti-password" class="show-modal w-full max-w-full md:max-w-lg rounded-lg bg-white dark:bg-slate-700 p-4">
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
                            <label for="username" class="block font-semibold text-xs">Username</label>
                            <div class="w-full">
                                <input type="text" name="username" id="username" value="" placeholder="Username" class="item-input" required>
                            </div>
                        </div>
                        <div class="w-full flex flex-col justify-center items-start gap-2 px-4">
                            <label for="password-lama" class="block font-semibold text-xs">Password lama</label>
                            <div class="w-full">
                                <input type="password" name="password-lama" id="password-lama" value="" placeholder="Password lama" class="item-input" required>
                            </div>
                        </div>
                        <div class="w-full flex flex-col justify-center items-start gap-2 px-4">
                            <label for="password-baru" class="block font-semibold text-xs">Password Baru</label>
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
                    <button id="btn-up-password" type="submit" form="form_add" class="close-modal px-4 py-3 rounded-lg text-slate-50 text-xs bg-primer-60 hover:bg-primer-80 transition-colors duration-200 ease-in-out w-fit">                         
                        Perbaharui Password
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('main-script')
    <script src="{{ asset('js/scriptModal.js') }}"></script>
    <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.btn-dashboard').click(function (e) {
                e.preventDefault();
                window.location.href = '{{url("/dashboard")}}';
            });

            $('.btn-back').click(function (e) {
                e.preventDefault();
                window.location.href = '{{url("/dashboard")}}';
            });

            $('#btn-up-password').click(function (e) {
                e.preventDefault();

                const username = $('#username').val();
                const passwordLama = $('#password-lama').val();
                const passwordBaru = $('#password-baru').val();

                const data = {
                    username: username,
                    password_lama: passwordLama,
                    password_baru: passwordBaru
                };

                Swal.fire({
                    title: 'Loading!',
                    text: 'Data Update Process',
                    imageUrl: '{{asset('/img/STK-20230906-WA0027.webp')}}',
                    imageWidth: 100,
                    imageHeight: 100,
                    imageAlt: 'Custom image',
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                    },
                });

                $.ajax({
                    url: '{{ env('APP_API') }}edit_password',
                    type: 'POST',
                    data: data,
                    success: function (response) {
                        if (response.status === "success") {
                            Swal.close();
                            Swal.fire({
                                title: 'Success',
                                text: 'Update Password User Successfuly.',
                                imageUrl: '{{asset('/img/STK-20230906-WA0035.webp')}}',
                                imageWidth: 200,
                                imageHeight: 200,
                                imageAlt: 'Custom image',
                                showConfirmButton: false,
                                timer: 1200,
                            }).then(() => {
                                $('#username').val('');
                                $('#password-lama').val('');
                                $('#password-baru').val('');
                            });
                        } else {
                            Swal.close();
                            Swal.fire({
                                title: 'Error',
                                text: 'Data Unsuccessfully Updated.',
                                imageUrl: '{{asset('/img/STK-20230906-WA0027.webp')}}',
                                imageWidth: 200,
                                imageHeight: 200,
                                imageAlt: 'Custom image',
                                showConfirmButton: false,
                                timer: 1200,
                            });
                        }
                    },
                    error: function (error) {
                        console.error('Error updating data:', error);
                    }
                });
            });
        });
    </script>
@endsection
    
    