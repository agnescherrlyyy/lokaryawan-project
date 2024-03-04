@extends('layout.main')

@section('content')
    <!-- Heading Start -->
    <div class="max-w-full w-full px-5 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
        <div class="w-full">
            <h1 class="font-semibold text-lg mb-2">Cuti</h1>
            <h4 class="font-medium text-slate-600 dark:text-slate-400">Cuti Tahunan</h4>
        </div>
    </div>
    <!-- Heading End -->

    <!-- Cuti Tahun Content Start -->
    <section class="block mt-9 px-2 lg:pl-10 lg:pr-10">
        <div class="w-full mb-4 px-3 flex flex-col md:flex-row md:items-center gap-4">
            <button id="riwayat-cuti" class="w-full md:w-fit px-4 py-3 rounded-full bg-sekunder-60 text-slate-50 font-medium text-sm hover:bg-sekunder-40 flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M4.755 10.059a7.5 7.5 0 0112.548-3.364l1.903 1.903h-3.183a.75.75 0 100 1.5h4.992a.75.75 0 00.75-.75V4.356a.75.75 0 00-1.5 0v3.18l-1.9-1.9A9 9 0 003.306 9.67a.75.75 0 101.45.388zm15.408 3.352a.75.75 0 00-.919.53 7.5 7.5 0 01-12.548 3.364l-1.902-1.903h3.183a.75.75 0 000-1.5H2.984a.75.75 0 00-.75.75v4.992a.75.75 0 001.5 0v-3.18l1.9 1.9a9 9 0 0015.059-4.035.75.75 0 00-.53-.918z" clip-rule="evenodd" />
                </svg>
                Riwayat Cuti
            </button>
            <button id="permintaan-cuti" class="w-full md:w-fit px-4 py-3 rounded-full bg-primer-60 text-slate-50 font-medium text-sm hover:bg-primer-40 flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M11.47 2.47a.75.75 0 011.06 0l4.5 4.5a.75.75 0 01-1.06 1.06l-3.22-3.22V16.5a.75.75 0 01-1.5 0V4.81L8.03 8.03a.75.75 0 01-1.06-1.06l4.5-4.5zM3 15.75a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                </svg>
                Permintaan Cuti
            </button>
        </div>
        <div class="w-full flex flex-col items-center justify-center rounded-lg">
            <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="w-full flex flex-col gap-4 px-6 py-6 bg-white dark:bg-slate-800 rounded-lg">
                    <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3">
                        <div class="w-10 h-10 md:w-12 md:h-12">
                            <img 
                                src="{{ asset('img/cuti-svg.svg') }}"
                                alt="icon"
                                class="w-full h-full"
                                >
                        </div>
                        <div class="flex flex-col gap-1">
                            <span id="cuti-tahunan-past" class="font-semibold">0</span>
                            <span id="tahun-past" class="text-sm text-slate-600 dark:text-slate-300"></span>
                        </div>
                    </div>
                    <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 pt-4 border-t border-t-slate-300 dark:border-t-slate-600">
                        <div class="w-10 h-10 md:w-12 md:h-12">
                            <img 
                                src="{{ asset('img/izin.svg') }}"
                                alt="icon"
                                class="w-full h-full"
                                >
                        </div>
                        <div class="flex flex-col gap-1">
                            <span id="expired-past" class="font-semibold text-sm"></span>
                            <span id="expired-text-past" class="text-sm text-slate-600 dark:text-slate-300"></span>
                        </div>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-4 px-6 py-6 bg-white dark:bg-slate-800 rounded-lg">
                    <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3">
                        <div class="w-10 h-10 md:w-12 md:h-12">
                            <img 
                                src="{{ asset('img/cuti-svg.svg') }}"
                                alt="icon"
                                class="w-full h-full"
                                >
                        </div>
                        <div class="flex flex-col gap-1">
                            <span id="cuti-tahunan-now" class="font-semibold"></span>
                            <span id="tahun-now" class="text-sm text-slate-600 dark:text-slate-300"></span>
                        </div>
                    </div>
                    <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 pt-4 border-t border-t-slate-300 dark:border-t-slate-600">
                        <div class="w-10 h-10 md:w-12 md:h-12">
                            <img 
                                src="{{ asset('img/izin.svg') }}"
                                alt="icon"
                                class="w-full h-full"
                                >
                        </div>
                        <div class="flex flex-col gap-1">
                            <span id="expired-now" class="font-semibold text-sm"></span>
                            <span id="expired-text-now" class="text-sm text-slate-600 dark:text-slate-300"></span>
                        </div>
                    </div>
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
                        <textarea name="alasan-cuti" id="alasan-cuti" cols="10" rows="3" class="hidden" placeholder="Masukan Alasan Mengambil Cuti"></textarea>
                    </form>
                </div>
                <div class="w-full pt-2">
                    <button id="btn-cuti" type="submit" class="text-center px-4 py-3 w-full rounded-md font-semibold text-sm text-white mt-2 bg-primer-60 hover:bg-primer-80 transition-all duration-200 ease-in-out uppercase">AJUKAN CUTI</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Cuti Tahun Content End -->
@endsection

@section('script')
<script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/crypto-js.js') }}"></script>
<script src="{{ asset('js/calender-cutitahunan.js') }}"></script>
<script>
    $(document).ready(function () {
        const encryptedFromData = localStorage.getItem('encryptedFromData');
        const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
        const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));

        var username = decryptedFromData.username;
        
        const nowYears = new Date().getFullYear();

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
        let sisaCuti;

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

            const encryptedSelectedDates = localStorage.getItem('encryptedSelectedDates');
            const decryptedBytes = CryptoJS.AES.decrypt(encryptedSelectedDates, '{{ env('APP_KEY') }}');
            const decryptedSelectedDates = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));
            const dateCutiTahunan = JSON.stringify(decryptedSelectedDates);
            console.log(dateCutiTahunan);

            var alasanCuti = '-';

            if (!decryptedSelectedDates || decryptedSelectedDates.length === 0) {
                Swal.fire({
                    title: 'Oops!',
                    text: 'Harap Lengkapi Data Pengajuan Cuti Terlebih Dahulu',
                    imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                    imageWidth: 200,
                    imageHeight: 200,
                    imageAlt: 'Custom image',
                    showConfirmButton: true,
                });
                return;
            }

            var fromData = {
                id_karyawan: username,
                id_cuti: id_cuti,
                tipe_cuti: tipe_cuti,
                cuti: cuti,
                tanggal: dateCutiTahunan,
                total_cuti: decryptedSelectedDates.length,
                keterangan: alasanCuti,
            }

            if (!fromData.id_karyawan || !fromData.id_cuti || !fromData.tipe_cuti || !fromData.cuti || !alasanCuti) {
                Swal.fire({
                    title: 'Oops!',
                    text: 'Harap Lengkapi Data Pengajuan Cuti Terlebih Dahulu',
                    imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                    imageWidth: 200,
                    imageHeight: 200,
                    imageAlt: 'Custom image',
                    showConfirmButton: true,
                });
                return;
            }

            Swal.fire({
                title: 'Loading!',
                text: 'Proses Pengajuan Cuti Tahunan',
                timerProgressBar: true,
                allowOutsideClick: false,
                allowEscapeKey: false,
                didOpen: () => {
                    Swal.showLoading();
                },
            });

            $.ajax({
                url: '{{ env('APP_SERVICE') }}request_cuti',
                type: 'POST',
                data: fromData,
                success: function (response) {
                    console.log(fromData);
                    Swal.close();
                    if (response.status == "success") {
                        Swal.fire({
                            title: 'Sukses',
                            text: 'Permintaan Cuti Karyawan Berhasil',
                            imageUrl: '{{ asset('img/STK-20230906-WA0025.webp') }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            showConfirmButton: false,
                            timer: 1500,
                        });
                        $('#alasan-cuti').val('');
                        window.location.href = "{{ url('/cuti/permintaan-cutitahunan') }}";
                        console.log(response);
                    } else {
                        Swal.fire({
                            title: 'Oops!',
                            text: 'Permintaan Cuti Karyawan Gagal, Silahkan Coba Lagi',
                            imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                            imageWidth: 200,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                            showConfirmButton: false,
                            timer: 1500,
                        });
                    }
                },
                error: function () {
                    Swal.close();
                    console.log('Tidak Berhasil');
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Terjadi Kesalahan',
                        text: 'Harap Hubungi Developer',
                        showConfirmButton: true,
                    });
                }
            });
        });

        if (username) {
            $.ajax({
                url: 'https://servicelokaryawan.salokapark.app/api/get_cuti?id_karyawan='+username+'&tahun='+nowYears,
                get:'GET',
                success: function (response) {
                    console.log(response);
                    if(response.data === "ID Karyawan Tidak Ditemukan"){
                        $('#cuti-tahunan-past').text('0');
                        $('#tahun-past').text('Sisa Cuti Tahun -');
                        $('#cuti-tahunan-now').text('0');
                        $('#tahun-now').text('Sisa Cuti Tahun -');
                        $('#expired-past').text('----/--/--');
                        $('#expired-text-past').text('Periode Cuti -');
                        $('#expired-now').text('----/--/--');
                        $('#expired-text-now').text('Periode Cuti -');
                    } else if(response.data.length === 1) {
                        console.log(response.data);
                        const cutiTahunan = response.data[0];
                        $('#cuti-tahunan-past').text(cutiTahunan.sisa_cuti);
                        $('#tahun-past').text('Sisa Cuti Tahun ' + cutiTahunan.tahun);
                        $('#expired-past').text(cutiTahunan.date_start + '  s/d  ' + cutiTahunan.date_expired);
                        $('#expired-text-past').text('Periode Cuti ' + cutiTahunan.tahun);
                        $('#cuti-tahunan-now').text('0');
                        $('#tahun-now').text('Sisa Cuti Tahun -');
                        $('#expired-now').text('----/--/--');
                        $('#expired-text-now').text('Periode Cuti -');
                        
                        sisaCuti = cutiTahunan.sisa_cuti;
                        
                        const encryptedSisaCuti = CryptoJS.AES.encrypt(JSON.stringify(sisaCuti), '{{ env('APP_KEY') }}').toString();
                        localStorage.setItem('encryptedSisaCuti', encryptedSisaCuti);
                    } else if(response.data.length > 1){
                        const cutiTahunanPertama = response.data[0];
                        const cutiTahunanKedua = response.data[1];

                        $('#cuti-tahunan-past').text(cutiTahunanPertama.sisa_cuti);
                        $('#tahun-past').text('Sisa Cuti Tahun ' + cutiTahunanPertama.tahun);
                        $('#expired-past').text(cutiTahunanPertama.date_start + '  s/d  ' + cutiTahunanPertama.date_expired);
                        $('#expired-text-past').text('Periode Cuti ' + cutiTahunanPertama.tahun);
                        $('#cuti-tahunan-now').text(cutiTahunanKedua.sisa_cuti);
                        $('#tahun-now').text('Sisa Cuti Tahun ' + cutiTahunanKedua.tahun);
                        $('#expired-now').text(cutiTahunanKedua.date_start + '  s/d  ' + cutiTahunanKedua.date_expired);
                        $('#expired-text-now').text('Periode Cuti '+ cutiTahunanKedua.tahun);

                        if (cutiTahunanPertama.sisa_cuti > 0){
                            sisaCuti = cutiTahunanPertama.sisa_cuti;
                            console.log('Sisa Cuti Tahun Pertama : ' + sisaCuti);
                            getSisaCuti(sisaCuti);
                        } else if (cutiTahunanPertama.sisa_cuti === 0){
                            sisaCuti = cutiTahunanKedua.sisa_cuti;
                            console.log('Sisa Cuti Tahun Kedua : ' + sisaCuti);
                            getSisaCuti(sisaCuti);
                        }

                    }
                },
                error: function () {
                    alert('Terjadi kesalahan saat mengambil data dari API');
                },
            });
        }else {
            alert('ID Karywawan tidak tersedia');
        }

        window.addEventListener('beforeunload', function() {
            localStorage.removeItem('encryptedSelectedDates');
        });
    });

    function getSisaCuti(sisaCutiDisimpan){
        const encryptedSisaCuti = CryptoJS.AES.encrypt(JSON.stringify(sisaCutiDisimpan), '{{ env('APP_KEY') }}').toString();
        localStorage.setItem('encryptedSisaCuti', encryptedSisaCuti);
    }
</script>
@endsection