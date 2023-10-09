@extends('layout.main')

@section('content')
    <!-- Heading Start -->
    <div class="max-w-full w-full px-10 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
        <div class="w-full">
            <h1 class="font-semibold text-xl mb-2">Dashboard</h1>
            <h4 class="font-medium text-slate-600 dark:text-slate-400">Analisis Dashboard LOKARYAWAN</h4>
        </div>
    </div>
    <!-- Heading End -->

    <!-- Dashboard Content Start -->
    <section class="block mt-9 px-5 lg:pl-10 lg:pr-16">
        <div class="w-full mb-4 px-3">
            <button id="ganti-password" class="btn-modal px-4 py-3 rounded-full bg-primer-60 text-slate-50 font-medium text-xs hover:bg-primer-40 w-fit flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                    <path fill-rule="evenodd" d="M15.75 1.5a6.75 6.75 0 00-6.651 7.906c.067.39-.032.717-.221.906l-6.5 6.499a3 3 0 00-.878 2.121v2.818c0 .414.336.75.75.75H6a.75.75 0 00.75-.75v-1.5h1.5A.75.75 0 009 19.5V18h1.5a.75.75 0 00.53-.22l2.658-2.658c.19-.189.517-.288.906-.22A6.75 6.75 0 1015.75 1.5zm0 3a.75.75 0 000 1.5A2.25 2.25 0 0118 8.25a.75.75 0 001.5 0 3.75 3.75 0 00-3.75-3.75z" clip-rule="evenodd" />
                </svg>
                Ganti Password
            </button>
        </div>
        <div class="w-full grid grid-cols-1 gap-x-4 gap-y-5 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <div class="w-full flex gap-5 px-6 py-4 bg-white dark:bg-slate-800 rounded-lg">
                <div class="w-10 h-10">
                    <img 
                        src="{{ asset('img/absen-terakhir-svg.svg') }}"
                        alt="icon"
                        class="w-full h-full"
                        >
                </div>
                <div class="flex flex-col gap-2">
                    <span class="font-medium text-sm">01/10/2023</span>
                    <span class="font-semibold">08:45</span>
                    <span class="text-sm text-slate-500">Absen Terakhir</span>
                </div>
            </div>
            <div class="w-full flex gap-5 px-6 py-4 bg-white dark:bg-slate-800 rounded-lg">
                <div class="w-10 h-10">
                    <img 
                        src="{{ asset('img/absen-selanjutnya-svg.svg') }}"
                        alt="icon"
                        class="w-full h-full"
                        >
                </div>
                <div class="flex flex-col gap-2">
                    <span class="font-medium text-sm">01/10/2023</span>
                    <span class="font-semibold">18:09</span>
                    <span class="text-sm text-slate-500">Absen Selanjutnya</span>
                </div>
            </div>
            <div class="w-full flex gap-5 px-6 py-4 bg-white dark:bg-slate-800 rounded-lg">
                <div class="w-10 h-10">
                    <img 
                        src="{{ asset('img/terlambat-svg.svg') }}"
                        alt="icon"
                        class="w-full h-full"
                        >
                </div>
                <div class="flex flex-col gap-2">
                    <span class="font-medium text-sm">30/09/2023</span>
                    <span class="font-semibold">09:22</span>
                    <span class="text-sm text-slate-500">Terlambat</span>
                </div>
            </div>
            <div class="w-full flex gap-5 px-6 py-4 bg-white dark:bg-slate-800 rounded-lg">
                <div class="w-10 h-10">
                    <img 
                        src="{{ asset('img/kedatangan-komplimen-tiket-svg.svg') }}"
                        alt="icon"
                        class="w-full h-full"
                        >
                </div>
                <div class="flex flex-col gap-2">
                    <span class="font-medium text-sm">30/09/2023</span>
                    <span class="font-semibold">09:22</span>
                    <span class="text-sm text-slate-500">Kedatangan Komplemen</span>
                </div>
            </div>
        </div>
        <div class="w-full grid grid-cols-2 md:grid-cols-3 gap-y-6 px-2 py-4 mt-6 bg-white dark:bg-slate-800 rounded-lg">
            <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 border-r border-r-slate-100 dark:border-r-slate-700 bg-white dark:bg-slate-800">
                <div class="w-8 h-8 md:w-12 md:h-12">
                    <img 
                        src="{{ asset('img/sisa-komplemen-100-svg.svg') }}"
                        alt="icon"
                        class="w-full h-full"
                        >
                </div>
                <div class="flex flex-col gap-1">
                    <span class="font-semibold text-2xl">5</span>
                    <span class="text-sm text-slate-500">Sisa komplemen 100%</span>
                </div>
            </div>
            <div class="w-full flex flex-col md:flex-row md:items-center md:gap-5 gap-3 px-4 md:py-4 bg-white dark:bg-slate-800 md:border-r md:border-r-slate-100 dark:md:border-r-slate-700">
                <div class="w-8 h-8 md:w-12 md:h-12">
                    <img 
                        src="{{ asset('img/sisa-komplemen-50-svg.svg') }}"
                        alt="icon"
                        class="w-full h-full"
                        >
                </div>
                <div class="flex flex-col gap-1">
                    <span class="font-semibold text-2xl">5</span>
                    <span class="text-sm text-slate-500">Sisa komplemen 50%</span>
                </div>
            </div>
            <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800">
                <div class="w-8 h-8 md:w-12 md:h-12">
                    <img 
                        src="{{ asset('img/cuti-svg.svg') }}"
                        alt="icon"
                        class="w-full h-full"
                        >
                </div>
                <div class="flex flex-col gap-2">
                    <span class="font-semibold text-2xl">12</span>
                    <span class="text-sm text-slate-500">Sisa Cuti Tahunan</span>
                </div>
            </div>
        </div>

        <!-- Info HR Start -->
        <div class="w-full mt-9">
            <div class="w-full flex items-center justify-between">
                <span class="font-semibold text-xl">Informasi terbaru</span>
                <button id="modal-confirm" class="hidden  w-fit lg:flex lg:items-center lg:gap-2 font-medium text-xs text-primer-60 group hover:bg-primer-20 px-4 py-2 rounded-full">                                                                         
                    Lihat semua
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd" d="M3.75 12a.75.75 0 01.75-.75h13.19l-5.47-5.47a.75.75 0 011.06-1.06l6.75 6.75a.75.75 0 010 1.06l-6.75 6.75a.75.75 0 11-1.06-1.06l5.47-5.47H4.5a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4 mt-4">
                <div class="w-full rounded-md overflow-hidden bg-white dark:bg-slate-700">
                    <img 
                        src="{{ asset('img/1696126594PromomelaluiWebSaloka.png') }}" 
                        alt=""
                    >
                    <div class="flex flex-col gap-4 p-4">
                        <div class="flex flex-col gap-1">
                            <span class="text-sm">Memo dari HR</span>
                            <h1 class="font-semibold text-lg">Hari Batik Nasional 2023</h1>
                        </div>
                        <a href="#" class="flex items-center gap-2 text-primer-60 hover:text-primer-40">
                            <span class="text-sm">Baca lebih lanjut</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M3.75 12a.75.75 0 01.75-.75h13.19l-5.47-5.47a.75.75 0 011.06-1.06l6.75 6.75a.75.75 0 010 1.06l-6.75 6.75a.75.75 0 11-1.06-1.06l5.47-5.47H4.5a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="w-full rounded-md overflow-hidden bg-white dark:bg-slate-700">
                    <img 
                        src="{{ asset('img/1696126743.jpg') }}" 
                        alt=""
                    >
                    <div class="flex flex-col gap-4 p-4">
                        <div class="flex flex-col gap-1">
                            <span class="text-sm">Memo dari HR</span>
                            <h1 class="font-semibold text-lg">Hari Batik Nasional 2023</h1>
                        </div>
                        <a href="#" class="flex items-center gap-2 text-primer-60 hover:text-primer-40">
                            <span class="text-sm">Baca lebih lanjut</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M3.75 12a.75.75 0 01.75-.75h13.19l-5.47-5.47a.75.75 0 011.06-1.06l6.75 6.75a.75.75 0 010 1.06l-6.75 6.75a.75.75 0 11-1.06-1.06l5.47-5.47H4.5a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="w-full rounded-md overflow-hidden bg-white dark:bg-slate-700">
                    <img 
                        src="{{ asset('img/1696133020Oktomotif.jpg') }}" 
                        alt=""
                    >
                    <div class="flex flex-col gap-4 p-4">
                        <div class="flex flex-col gap-1">
                            <span class="text-sm">Memo dari HR</span>
                            <h1 class="font-semibold text-lg">Hari Batik Nasional 2023</h1>
                        </div>
                        <a href="#" class="flex items-center gap-2 text-primer-60 hover:text-primer-40">
                            <span class="text-sm">Baca lebih lanjut</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M3.75 12a.75.75 0 01.75-.75h13.19l-5.47-5.47a.75.75 0 011.06-1.06l6.75 6.75a.75.75 0 010 1.06l-6.75 6.75a.75.75 0 11-1.06-1.06l5.47-5.47H4.5a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full flex items-center justify-center mt-6 lg:hidden">
                <a href="#" class="px-4 py-3 rounded-full border border-sekunder-60 text-sekunder-60 hover:border-sekunder-60 hover:bg-sekunder-60 hover:text-slate-50 font-medium text-sm w-fit">                         
                    Lihat semua
                </a>
            </div>
        </div>
        <!-- Info HR End -->
    </section>
    <!-- Dashboard Content End -->

    <!-- Modal Start-->
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
                    <button id="btn-up-password" type="submit" form="form_add" class="close-modal px-4 py-3 rounded-lg text-slate-50 text-xs bg-primer-60 hover:bg-primer-80 transition-colors duration-200 ease-in-out w-fit">                         
                        Perbaharui Password
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal End-->
@endsection

@section('script')
    <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
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
                    url: 'http://192.168.0.75:8099/api/edit_password',
                    type: 'POST',
                    data: data,
                    success: function (response) {
                        if (response.status === "success") {
                            Swal.close();
                            Swal.fire({
                                title: 'Success',
                                text: 'Update Password User Successfuly.',
                                imageUrl: '{{asset('/img/STK-20230906-WA0035.webp')}}',
                                imageWidth: 100,
                                imageHeight: 100,
                                imageAlt: 'Custom image',
                                showConfirmButton: false,
                                timer: 1200,
                            })
                        } else {
                            Swal.close();
                            Swal.fire({
                                title: 'Error',
                                text: 'Data Unsuccessfully Updated.',
                                imageUrl: '{{asset('/img/STK-20230906-WA0027.webp')}}',
                                imageWidth: 100,
                                imageHeight: 100,
                                imageAlt: 'Custom image',
                                showConfirmButton: false,
                                timer: 1200,
                            })
                        }
                    },
                    error: function (error) {
                        console.error('Error updating data:', error);
                        console.log(error);
                        console.log(data);
                    }
                })
            })
        })
    </script>
@endsection