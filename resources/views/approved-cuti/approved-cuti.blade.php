@extends('layout-2.main')

@section('main-content')
    <div class="max-w-7xl w-full mx-auto flex justify-center pt-16">
        <div class="w-full p-4">
            <div class="w-full flex items-center justify-between lg:justify-start gap-3">
                <button class="btn-back">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M20.25 12a.75.75 0 01-.75.75H6.31l5.47 5.47a.75.75 0 11-1.06 1.06l-6.75-6.75a.75.75 0 010-1.06l6.75-6.75a.75.75 0 111.06 1.06l-5.47 5.47H19.5a.75.75 0 01.75.75z" clip-rule="evenodd" />
                    </svg>
                </button>
                <span class="font-semibold text-sm">Approved Cuti</span>
                <span class="font-semibold"></span>
            </div>
            <div class="w-full mt-6 px-6">
                <div class="w-full flex flex-col gap-1">
                    <strong class="w-full xl:w-1/2 block text-lg py-4 border-b">Permintaan Cuti</strong>
                    <div class="w-full pt-4">
                        <span class="inline-block font-semibold text-sm">
                            Permintaan Cuti 12-10-2023
                        </span>
                    </div>
                    <div class="w-full flex flex-wrap items-center gap-2">
                        <span class="inline-block font-medium py-2 text-sm">
                            Agnes Cherrly
                        </span>
                        <span class="block w-fit px-3 py-2 bg-blue-50 text-blue-600 rounded-full font-semibold text-xs">
                            Cuti Tahunan
                        </span>
                    </div>
                    <div class="w-full flex items-center gap-2">
                        <svg class="h-5 w-5 text-slate-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="4" y="5" width="16" height="16" rx="2" />  <line x1="16" y1="3" x2="16" y2="7" />  <line x1="8" y1="3" x2="8" y2="7" />  <line x1="4" y1="11" x2="20" y2="11" />  <line x1="11" y1="15" x2="12" y2="15" />  <line x1="12" y1="15" x2="12" y2="18" /></svg>
                        <span class="font-medium text-sm text-slate-500">12-10-2023</span>
                    </div>
                    <div class="w-full flex items-center gap-2 mt-1">
                        <svg class="h-5 w-5 text-slate-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="4" y="5" width="16" height="16" rx="2" />  <line x1="16" y1="3" x2="16" y2="7" />  <line x1="8" y1="3" x2="8" y2="7" />  <line x1="4" y1="11" x2="20" y2="11" />  <rect x="8" y="15" width="2" height="2" /></svg>
                        <span class="font-medium text-sm text-slate-500">10-10-2023</span>
                    </div>
                    <div id="keterangan" class="w-full hidden">
                        <span id="text-keterangan" class="text-sm text-rose-600">
                            *Perimintaan Cuti di Reject pada tanggal
                        </span>
                        <span id="tgl-keterangan" class="text-sm text-rose-600">
                            11-10-2023
                        </span>
                    </div>
                    <div id="alasan-reject" class="hidden w-full xl:w-1/2 flex-col">
                        <span class="inline-block font-semibold text-sm">
                            Alasan
                        </span>
                        <span id="text-alasan" class="inline-block text-sm">
                            Dikarekan masih banyak pekerjaan yang belum selesai
                        </span>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 lg:flex-row flex flex-col gap-2 px-6 mt-6">
                <button id="reject" type="submit" class="btn-modal text-center px-4 py-3 w-full rounded-md font-semibold text-sm text-white mt-2 bg-rose-600 hover:bg-rose-800 transition-all duration-200 ease-in-out uppercase">rejected</button>
                <button id="approve" type="submit" class="text-center px-4 py-3 w-full rounded-md font-semibold text-sm text-white mt-2 bg-primer-60 hover:bg-primer-80 transition-all duration-200 ease-in-out uppercase">Approved</button>
            </div>
        </div>
    </div>
@endsection

@section('modal')
    <section id="modalAdd" class="modal-container hidden max-w-full w-full max-h-screen h-full fixed top-0 left-0 z-[100]">
        <div class="w-full h-full flex items-center justify-center px-5">
            <div id="reject" class="show-modal w-full max-w-full md:max-w-lg rounded-lg bg-white dark:bg-slate-700 p-4">
                <div class="w-full flex gap-2 items-center justify-between relative pb-6 border-b border-slate-100">
                    <strong>Alasan Reject Permintaan Cuti</strong>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="close-modal w-8 h-8 absolute top-0 right-0 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>                                            
                </div>
                <div class="w-full pt-6">
                    <form id="form_add" class="w-full flex flex-col items-center justify-center gap-4">
                        @csrf
                        <div class="w-full flex flex-col justify-center items-start gap-2 px-4">
                            <label for="username" class="block font-semibold text-xs"></label>
                            <div class="w-full">
                                <textarea name="alasan" id="alasan" class="item-input" cols="30" rows="10" placeholder="Masukan alasan membatalkan cuti"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="w-full flex item-center justify-end gap-3 mt-6">
                    <button class="close-modal px-4 py-3 rounded-lg bg-slate-300 text-slate-950 text-xs hover:bg-slate-200 w-fit">                         
                        Batal
                    </button>
                    <button id="submit-reject" type="submit" form="form_add" class="close-modal px-4 py-3 rounded-lg text-slate-50 text-xs bg-primer-60 hover:bg-primer-80 transition-colors duration-200 ease-in-out w-fit">                         
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('main-script')
    <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/scriptModal.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".btn-dashboard").click(function (e) {
                e.preventDefault();
                window.location.href = "/dashboard";
            });

            $('.btn-back').click(function (e) {
                e.preventDefault();
                window.location.href = "/notification";
            });

            $("#submit-reject").click(function (e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Success',
                    text: 'Successfully rejected Agnes Cherrly leave request on 12-10-2023.',
                    imageUrl: '{{asset('/img/STK-20230906-WA0035.webp')}}',
                    imageWidth: 150,
                    imageHeight: 150,
                    imageAlt: 'Custom image',
                    showConfirmButton: false,
                    timer: 1200,
                });
                $("#keterangan").css("display", "inline");
                $("#alasan-reject").css("display", "flex");
                
                var alasanValue = $("#alasan").val();
                $("#text-alasan").text(alasanValue);
                
                $("#reject").prop("disabled", true);
                $("#approve").prop("disabled", true);

                var currentDate = new Date();
                var day = currentDate.getDate();
                var month = currentDate.getMonth() + 1;
                var year = currentDate.getFullYear();

                var formattedDate = day + "-" + (month < 10 ? "0" : "") + month + "-" + year;

                $("#tgl-keterangan").text(formattedDate);
            });

            $('#approve').click(function (e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Success',
                    text: 'Successfully approved Agnes Cherrly leave request on 12-10-2023.',
                    imageUrl: '{{asset('/img/STK-20230906-WA0035.webp')}}',
                    imageWidth: 150,
                    imageHeight: 150,
                    imageAlt: 'Custom image',
                    showConfirmButton: false,
                    timer: 1200,
                });

                $("#keterangan").css("display", "inline");
                $('#text-keterangan').css("color", "#059669");
                $('#text-keterangan').text('*Perimintaan Cuti di Approved pada tanggal');

                var currentDate = new Date();
                var day = currentDate.getDate();
                var month = currentDate.getMonth() + 1;
                var year = currentDate.getFullYear();

                var formattedDate = day + "-" + (month < 10 ? "0" : "") + month + "-" + year;
                $('#tgl-keterangan').css("color", "#059669");
                $("#tgl-keterangan").text(formattedDate);

                $("#reject").prop("disabled", true);
                $("#approve").prop("disabled", true);
            });
        });
    </script>
@endsection

