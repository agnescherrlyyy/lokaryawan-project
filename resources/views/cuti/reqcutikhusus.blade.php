@extends('layout.main')

@section('content')
    <!-- Heading Start -->
    <div class="max-w-full w-full px-5 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
        <div class="w-full">
            <h1 class="font-semibold text-lg mb-2">Cuti</h1>
            <h4 class="font-medium text-slate-600 dark:text-slate-400">Cuti Khusus</h4>
        </div>
    </div>
    <!-- Heading End -->

    <!-- Cuti Tahun Content Start -->
    <section class="block mt-9 px-2 lg:pl-10 lg:pr-16">
        <div class="w-full mb-4 px-3 flex items-center gap-4">
            <button id="riwayat-cuti" class="btn-modal px-4 py-3 rounded-full bg-primer-60 text-slate-50 font-medium text-xs hover:bg-primer-40 w-fit flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M4.755 10.059a7.5 7.5 0 0112.548-3.364l1.903 1.903h-3.183a.75.75 0 100 1.5h4.992a.75.75 0 00.75-.75V4.356a.75.75 0 00-1.5 0v3.18l-1.9-1.9A9 9 0 003.306 9.67a.75.75 0 101.45.388zm15.408 3.352a.75.75 0 00-.919.53 7.5 7.5 0 01-12.548 3.364l-1.902-1.903h3.183a.75.75 0 000-1.5H2.984a.75.75 0 00-.75.75v4.992a.75.75 0 001.5 0v-3.18l1.9 1.9a9 9 0 0015.059-4.035.75.75 0 00-.53-.918z" clip-rule="evenodd" />
                </svg>
                Riwayat Cuti
            </button>
            <button id="permintaan-cuti" class="btn-modal px-4 py-3 rounded-full bg-sekunder-60 text-slate-50 font-medium text-xs hover:bg-sekunder-40 w-fit flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M11.47 2.47a.75.75 0 011.06 0l4.5 4.5a.75.75 0 01-1.06 1.06l-3.22-3.22V16.5a.75.75 0 01-1.5 0V4.81L8.03 8.03a.75.75 0 01-1.06-1.06l4.5-4.5zM3 15.75a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                </svg>
                Permintaan Cuti
            </button>
        </div>
        <div class="w-full rounded-lg">
            <div class="w-full lg:w-2/5">
                <div class="w-full relative select-box">
                    <div class="show-menu w-full flex items-center justify-between border border-sekunder-40 px-4 py-3 rounded-lg cursor-pointer bg-white dark:bg-slate-700">
                        <input class="w-full text-box focus:outline-none active:outline-none text-sm placeholder:text-slate-950 dark:placeholder:text-slate-50 bg-transparent font-medium" type="text" name="" placeholder="Pilih Tipe Cuti" id="so-value" readonly>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 font-semibold transition-transform duration-150 ease-in-out">
                            <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                        </svg>                                  
                    </div>
                    <ul class="menu-list w-full h-80 overflow-y-auto mt-4 py-3 opacity-0 pointer-events-none bg-white dark:bg-slate-600 shadow-md rounded-lg transition-all duration-200 ease-linear absolute top-full right-0 z-50">
                        <li class="px-4" ><input class="w-full item-input" type="text" name="" id="option-search" placeholder="Search"></li>
                        @foreach ($tipe_cuti as $tipe_cuti)
                            <li><a id-cuti="{{ $tipe_cuti->id_cuti }}" tipe-cuti="{{ $tipe_cuti->tipe_cuti }}" cuti="{{ $tipe_cuti->cuti }}" href="#" id="item-list" class="item-list block w-full px-5 py-3 mt-2 hover:bg-slate-100 dark:hover:bg-slate-500 text-sm  cursor-pointer">{{ $tipe_cuti->cuti }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-full flex flex-col xl:flex-row gap-4 mt-6">
            <div class="w-full xl:w-2/5">
                <div class="calendar-container">
                    <div class="calendar-header">
                        <button id="prev-month" class="w-10 h-10 flex items-center justify-center rounded-full border">
                            <svg class="h-5 w-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M18 15l-6-6l-6 6h12" transform="rotate(270 12 12)" /></svg>
                        </button>
                        <h2 id="current-month"></h2>
                        <button id="next-month" class="w-10 h-10 flex items-center justify-center rounded-full border">
                            <svg class="h-5 w-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M18 15l-6-6l-6 6h12" transform="rotate(90 12 12)" /></svg>
                        </button>
                    </div>
                    <div id="calendar"></div>
                </div>
            </div>
            <div id="selected-date" class="w-full xl:w-3/5 p-4 lg:py-4 lg:px-6 bg-white dark:bg-slate-800 rounded-lg max-h-fit h-full">
                <span class="block mb-4 font-semibold text-sm uppercase tracking-wide">PENGAJUAN CUTI</span>
                <div class="w-full flex flex-col gap-2">
                    <span class="block text-sm">Tanggal yang dipilih :</span>
                    <span id="selected-date-value"></span>
                    <form action="" method="POST">
                        <textarea name="alasan-cuti" id="alasan-cuti" cols="10" rows="3" class="item-input" placeholder="Masukan alasan mengambil cuti"></textarea>
                    </form>
                </div>
                <div class="w-full pt-2">
                    <button id="btn-cuti" type="submit" class="text-center px-4 py-3 w-full rounded-md font-semibold text-sm text-white mt-2 bg-primer-60 hover:bg-primer-80 transition-all duration-200 ease-in-out">Ajukan Cuti</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Cuti Tahun Content End -->
@endsection

@section('script')
<script src="{{ asset('js/calender.js') }}"></script>
<script src="{{ asset('js/selectinput.js') }}"></script>
<script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
<script>
    $(document).ready(function () {
        var username = localStorage.getItem('username');
        var idCuti;
        var tipeCuti;
        var namaCuti;

        $('.item-list').on('click', function () {
            idCuti = $(this).attr('id-cuti');
            tipeCuti = $(this).attr('tipe-cuti');
            namaCuti = $(this).attr('cuti');
        });

        $('#permintaan-cuti').click(function (e) {
            e.preventDefault();
            window.location.href = "{{ url('/cuti/permintaan-cutitahunan') }}";
        })
        $('#riwayat-cuti').click(function (e) {
            e.preventDefault();
            window.location.href = "{{ url('/cuti/riwayat-cutitahunan') }}";
        })

        let id_cuti;
        let tipe_cuti;
        let cuti;

        $.ajax({
            url: '{{ env('APP_SERVICE') }}get_master_cuti',
            type: 'GET',
            success: function (response) {
                if (response.status === 'success') {
                    id_cuti = response.data[0].id_cuti;
                    tipe_cuti = response.data[0].tipe_cuti;
                    cuti = response.data[0].cuti;
                }
            }
        });

        $('#btn-cuti').click(function (e) {
            e.preventDefault();
            let dateSelected = localStorage.getItem("selectedDate");
            var alasanCuti = $('#alasan-cuti').val();
    
            if (alasanCuti.trim() === "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Harap isi alasan cuti terlebih dahulu',
                });
                return;
            }
            var fromData = {
                id_karyawan: username,
                id_cuti: idCuti,
                tipe_cuti: tipeCuti,
                cuti: namaCuti,
                tanggal: dateSelected,
                total_cuti: 1,
                keterangan: alasanCuti,
            }
            Swal.fire({
                title: 'Loading!',
                text : 'Process Request',
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                },
            })
            $.ajax({
                url: '{{ env('APP_SERVICE') }}request_cuti',
                type: 'POST',
                data: fromData,
                success: function (response) {
                    Swal.close();
                    if (response.status == "success") {
                        console.log(fromData);
                        Swal.fire({
                            title: 'Success!',
                            text: 'Request Cuti Karyawan Successfuly',
                            imageUrl: '{{ asset('img/STK-20230906-WA0025.webp') }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            showConfirmButton: false,
                            timer: 1500,
                        });
                        $('#alasan-cuti').val('');
                    }else {
                        Swal.fire({
                            position: 'center',
                            icon: 'Error!',
                            title: 'Request Cuti Karyawan Unsuccessfuly',
                            showConfirmButton: false,
                            timer: 1700,
                            showCloseButton: true
                        });
                    }
                },
                error: function () {
                    Swal.fire({
                        position: 'center',
                        icon: 'Error!',
                        title: 'API BAD REQUEST',
                        showConfirmButton: false,
                        timer: 1700,
                        showCloseButton: true
                    });
                }
            });
        });

        if (username) {
            $.ajax({
                url: '{{ env('APP_SERVICE') }}get_cuti?id_karyawan=' + username,
                get:'GET',
                success: function (response) {
                    const cutiTahunan = response.data[0];
                    $('#cuti-tahunan').text(cutiTahunan.sisa_cuti);
                },
                error: function () {
                    alert('Terjadi kesalahan saat mengambil data dari API');
                },
            });
        }else {
            alert('ID Karywawan tidak tersedia');
        }
    });
</script>
@endsection