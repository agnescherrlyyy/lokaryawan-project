@extends('layout.main')

@section('content')
    <!-- Heading Start -->
    <div class="max-w-full w-full px-10 lg:pl-10 lg:pr-10 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
        <div class="w-full">
            <h1 class="font-semibold text-xl mb-2">Dashboard</h1>
            <h4 class="font-medium text-slate-600 dark:text-slate-300">Analisis Dashboard LOKARYAWAN</h4>
        </div>
    </div>
    <!-- Heading End -->

    <!-- Dashboard Content Start -->
    <section class="block mt-9 px-5 lg:pl-10 lg:pr-10">
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
                    <span class="tanggal font-medium text-sm"></span>
                    <span id="absen-terakhir" class="font-semibold"></span>
                    <span class="text-sm text-slate-600 dark:text-slate-300">Absen Masuk</span>
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
                    <span class="tanggal font-medium text-sm"></span>
                    <span id="absen-selanjutnya" class="font-semibold"></span>
                    <span class="text-sm text-slate-600 dark:text-slate-300">Absen Pulang</span>
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
                    <span class="tanggal font-medium text-sm"></span>
                    <span id="terlambat" class="font-semibold"></span>
                    <span class="text-sm text-slate-600 dark:text-slate-300">Terlambat</span>
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
                    <span class="text-xs text-slate-600 dark:text-slate-300">Kedatangan Komplemen</span>
                    <span id="tgl-kedatangan-komplemen" class="font-semibold text-sm"></span>
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
                    <span id="komplemen100" class="font-semibold text-2xl"></span>
                    <span class="text-sm text-slate-600 dark:text-slate-300">Sisa Komplemen 100%</span>
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
                    <span id="komplemen50" class="font-semibold text-2xl"></span>
                    <span class="text-sm text-slate-600 dark:text-slate-300">Sisa Komplemen 50%</span>
                </div>
            </div>
            <div class="w-full flex flex-col md:flex-row md:gap-5 md:items-center gap-3 px-4 md:py-4 bg-white dark:bg-slate-800 border-r border-r-slate-100 dark:border-r-slate-700 xl:border-0">
                <div class="w-8 h-8 md:w-12 md:h-12">
                    <img 
                        src="{{ asset('img/cuti-svg.svg') }}"
                        alt="icon"
                        class="w-full h-full"
                        >
                </div>
                <div class="flex flex-col gap-2">
                    <span id="cuti-tahunan-past" class="font-semibold text-2xl"></span>
                    <span id="tahun-past" class="text-sm text-slate-600 dark:text-slate-300"></span>
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
                    <span id="cuti-tahunan-now" class="font-semibold text-2xl"></span>
                    <span id="tahun-now" class="text-sm text-slate-600 dark:text-slate-300"></span>
                </div>
            </div>
        </div>

        <!-- Info HR Start -->
        <div class="w-full mt-9">
            <div class="w-full flex items-center justify-between">
                <div class="flex flex-col gap-1">
                    <span class="font-semibold text-xl">Informasi Terbaru</span>
                    <span class="font-medium text-sm">Ragam Informasi Terbaru Seputar Saloka Theme Park</span>
                </div>
                <button class="lihat-semua hidden w-fit lg:flex lg:items-center lg:gap-2 font-medium text-xs text-primer-60 group hover:bg-primer-20 px-4 py-2 rounded-full">                                                                         
                    Lihat semua
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd" d="M3.75 12a.75.75 0 01.75-.75h13.19l-5.47-5.47a.75.75 0 011.06-1.06l6.75 6.75a.75.75 0 010 1.06l-6.75 6.75a.75.75 0 11-1.06-1.06l5.47-5.47H4.5a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 mt-4">
                <div class="w-full overflow-hidden">
                    <img 
                        src="{{ asset('img/1696126594PromomelaluiWebSaloka.jpg') }}" 
                        alt=""
                        class="rounded-md"
                    >
                    <div class="flex flex-col gap-4 py-4">
                        <div class="flex flex-col gap-1">
                            <span class="text-sm text-slate-500">24 November 2023</span>
                            <h1 class="font-semibold text-lg">Manual Book Lokaryawan</h1>
                        </div>
                        <a href="#" class="infos w-fit flex items-center gap-2 pb-1 border-b border-b-primer-60 text-primer-60 hover:text-primer-40">
                            <span class="font-semibold text-xs uppercase">Baca lebih lanjut</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M3.75 12a.75.75 0 01.75-.75h13.19l-5.47-5.47a.75.75 0 011.06-1.06l6.75 6.75a.75.75 0 010 1.06l-6.75 6.75a.75.75 0 11-1.06-1.06l5.47-5.47H4.5a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="w-full overflow-hidden">
                    <img 
                    src="{{ asset('img/Hospitality_page-0001.jpg') }}" 
                    alt=""
                    class="w-full h-[154px] object-cover object-top rounded-md"
                    </div>
                    <div class="flex flex-col gap-4 py-4">
                        <div class="flex flex-col gap-1">
                            <span class="text-sm text-slate-500">24 Desember 2023</span>
                            <h1 class="font-semibold text-lg">Hospitality</h1>
                        </div>
                        <a href="#" class="hosfitality w-fit flex items-center gap-2 pb-1 border-b border-b-primer-60 text-primer-60 hover:text-primer-40">
                            <span class="font-semibold text-xs uppercase">Baca lebih lanjut</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M3.75 12a.75.75 0 01.75-.75h13.19l-5.47-5.47a.75.75 0 011.06-1.06l6.75 6.75a.75.75 0 010 1.06l-6.75 6.75a.75.75 0 11-1.06-1.06l5.47-5.47H4.5a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="w-full overflow-hidden">
                    <img 
                        src="{{ asset('img/1696126594PromomelaluiWebSaloka.jpg') }}" 
                        alt=""
                        class="rounded-md"
                    >
                    <div class="flex flex-col gap-4 py-4">
                        <div class="flex flex-col gap-1">
                            <span class="text-sm text-slate-500">27 Desember 2023</span>
                            <h1 class="font-semibold text-lg">Manual Book Lokaryawan - Komplemen</h1>
                        </div>
                        <a href="#" class="mb-komplemen w-fit flex items-center gap-2 pb-1 border-b border-b-primer-60 text-primer-60 hover:text-primer-40">
                            <span class="font-semibold text-xs uppercase">Baca lebih lanjut</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M3.75 12a.75.75 0 01.75-.75h13.19l-5.47-5.47a.75.75 0 011.06-1.06l6.75 6.75a.75.75 0 010 1.06l-6.75 6.75a.75.75 0 11-1.06-1.06l5.47-5.47H4.5a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full flex items-center justify-center mt-6 lg:hidden">
                <a href="#" class="lihat-semua px-4 py-3 rounded-full border border-sekunder-60 text-sekunder-60 hover:border-sekunder-60 hover:bg-sekunder-60 hover:text-slate-50 font-medium text-sm w-fit">                         
                    Lihat semua
                </a>
            </div>
        </div>
        <!-- Info HR End -->
    </section>
    <!-- Dashboard Content End -->
@endsection

@section('script')
<script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
<script type="text/javascript">
    var id_karyawan = '{{ session('username') }}';

    const encryptedFromData = localStorage.getItem('encryptedFromData');
    const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
    const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));

    var username = decryptedFromData.username;
    const nowYears = new Date().getFullYear();

    $(document).ready(function() {
        if (id_karyawan) {
            $.ajax({
                url: '{{ env('APP_API') }}summary_kehadiran?id_karyawan=' + id_karyawan,
                type: 'GET',
                success: function(response) {
                    if (response.status === 'success') {
                        var tanggal = response.summaryKehadiran.tanggal;
                        var absenMasuk = '';
                        var absenPulang = '';
                        var terlambat = '';
                        var tanggalNormal = new Date(tanggal);
                        var tanggalAkhir = tanggalNormal.getDate() + " " + getNamaBulan(tanggalNormal.getMonth()) + " " + tanggalNormal.getFullYear();

                        if (response.summaryKehadiran.jam_kehadiran_karyawan === '00:00'){
                            absenMasuk = response.summaryKehadiran.jam_kehadiran;
                        } else if (response.summaryKehadiran.jam_kehadiran_karyawan !== '00:00') {
                            absenMasuk = response.summaryKehadiran.jam_kehadiran_karyawan;
                        }

                        if (response.summaryKehadiran.jam_pulang_karyawan === '00:00'){
                            absenPulang = response.summaryKehadiran.jam_pulang;
                        } else if (response.summaryKehadiran.jam_pulang_karyawan !== '00:00') {
                            absenPulang = response.summaryKehadiran.jam_pulang_karyawan;
                        }

                        if (response.summaryTerlambat === null) {
                            terlambat = '00.00';
                        } else if (response.summaryTerlambat !== null) {
                            terlambat = response.summaryTerlambat.status;
                        }

                        if (terlambat.indexOf('-') === -1) {
                            terlambat = '00.00';
                        }

                        $('.tanggal').text(tanggalAkhir);
                        $('#absen-terakhir').text(absenMasuk);
                        $('#absen-selanjutnya').text(absenPulang);
                        $('#terlambat').text(terlambat);
                    } else {
                        alert('Gagal mengambil data dari API');
                    }
                },
                error: function() {
                    alert('Terjadi kesalahan saat mengambil data dari API');
                }
            });
        } else{
            alert('ID Karywawan tidak tersedia');
        }

        $('.infos').click(function(e) {
            e.preventDefault();
            window.location.href = "{{ url('/manual-book') }}";
        });

        $('.hosfitality').click(function(e) {
            e.preventDefault();
            window.location.href = "{{ url('/hospitality') }}";
        });

        $('.mb-komplemen').click(function(e) {
            e.preventDefault();
            window.location.href = "{{ url('/manual-book-komplemen') }}";
        });

    });

    $.ajax({
        url:'{{ env('APP_SERVICE') }}get_komplemen?id_karyawan='+username+'&tahun=' +nowYears,
        type: "GET",
        success: function(response){
            if (response.status === 'success') {
                if (response.data === "Data Komplemen Karyawan Tidak Ditemukan"){
                    $('#komplemen100').text('0');
                    $('#komplemen50').text('0');
                } else {
                    var tiketNormal = response.data[1];
                    var tiketSetengah = response.data[0];
                    $('#komplemen100').text(tiketNormal.sisa_komplement);
                    $('#komplemen50').text(tiketSetengah.sisa_komplement);
                }
            }else{
                alert('Gagal mengambil data dari API');
            }
        },
        error: function(){
            alert('Response Tidak Terdeteksi');
        }
    });

    $.ajax({
        url: '{{ env('APP_SERVICE') }}get_request_komplement_comingSoon?id_karyawan='+username,
        type: "GET",
        success: function (response) {
            if (response.data === "Data Request Komplemen Karyawan Tidak Ditemukan" || response.data === null) {
                $('#tgl-kedatangan-komplemen').text('----/--/--');
            } else if (response.data !== "Data Request Komplemen Karyawan Tidak Ditemukan"){
                $('#tgl-kedatangan-komplemen').text(getTanggalRange(response.data.tanggal_kedatangan));
            }
        },
        error: function () {
            alert('Response Tidak Terdeteksi');
        }
    });

    $.ajax({
        url: '{{ env('APP_SERVICE') }}get_cuti?id_karyawan=' + username + '&tahun='+nowYears,
        type: 'GET',
        async: false,
        success: function (response) {
            if (response.status === 'success') {
                console.log(response);
                if(response.data === "ID Karyawan Tidak Ditemukan"){
                    $('#cuti-tahunan-past').text('0');
                    $('#tahun-past').text('Sisa Cuti Tahun -');
                    $('#cuti-tahunan-now').text('0');
                    $('#tahun-now').text('Sisa Cuti Tahun -');
                } else if (response.data.length === 1) {
                    let dataCuti = response.data[0];
                    $('#cuti-tahunan-past').text(dataCuti.sisa_cuti);
                    $('#tahun-past').text('Sisa Cuti Tahun '+dataCuti.tahun);
                    $('#cuti-tahunan-now').text('0');
                    $('#tahun-now').text('Sisa Cuti Tahun -');
                } else if (response.data.length >= 2) {
                    let dataCutiSatu = response.data[0];
                    let dataCutiDua = response.data[1];
                    $('#cuti-tahunan-past').text(dataCutiSatu.sisa_cuti);
                    $('#tahun-past').text('Sisa Cuti Tahun '+ dataCutiSatu.tahun);
                    $('#cuti-tahunan-now').text(dataCutiDua.sisa_cuti);
                    $('#tahun-now').text('Sisa Cuti Tahun '+ dataCutiDua.tahun);
                }
            } else {
                console.log(response);
            }
        },
        error: function (error) {
            console.log(error);
            console.log('Terjadi Kesalahan, Harap Hubungi Developer');
        }
    });

    $.ajax({
        url: '{{ env('APP_SERVICE') }}get_notif_approve?id_karyawan='+ usernameEmpatDigit,
        type: 'GET',
        success: function (response) {
            if (response.status === 'success') {
                if(response.dataCuti === "Data Tidak Ditemukan" && response.dataLembur === "Data Tidak Ditemukan"){
                    console.log('Belum Ada Notifikasi');
                } else if (response.dataCuti !== "Data Tidak Ditemukan" || response.dataLembur !== "Data Tidak Ditemukan"){
                    Swal.fire({
                        title: 'Notifikasi',
                        text: 'Klik Icon 🔔 Untuk Melihat Daftar Lembur dan Cuti',
                        imageUrl: '{{ asset('img/STK-20230906-WA0035.webp') }}',
                        imageWidth: 200,
                        imageHeight: 200,
                        imageAlt: 'Custom image',
                        showConfirmButton: true,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '{{url("/notification")}}';
                        }
                    });
                } else if (response.dataCuti !== "Data Tidak Ditemukan" || response.dataLembur !== "Data Tidak Ditemukan"){
                    Swal.fire({
                        title: 'Notifikasi',
                        text: 'Klik Icon 🔔 Untuk Melihat Daftar Lembur dan Cuti',
                        imageUrl: '{{ asset('img/STK-20230906-WA0035.webp') }}',
                        imageWidth: 200,
                        imageHeight: 200,
                        imageAlt: 'Custom image',
                        showConfirmButton: true,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '{{url("/notification")}}';
                        }
                    });
                } else if (response.message === "ID Karyawan tidak memiliki Access Approve"){
                    console.log('Belum Ada Notifikasi');
                } else {
                    console.log('Belum Ada Notifikasi');
                }
            } else {
                console.log(response);
                console.log('Tidak Ditemukan Data Notifikasi');
            }
        },
        error: function (error) {
            console.log(error);
            console.log('Terjadi Kesalahan, Harap Hubungi Developer');
        }
    });

    function getNamaBulan(bulan) {
        var namaBulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        return namaBulan[bulan];
    }

    function getTanggalRange(tanggalCuti) {
        const cleanedString = tanggalCuti.replace(/[\["\]]/g, '');
        const dateArray = cleanedString.split(',');
        const sortedDates = dateArray.sort();

        const startDateFormatted = formatTanggal(sortedDates[0]);
        const endDateFormatted = formatTanggal(sortedDates[sortedDates.length - 1]);

        return `${startDateFormatted}`;
    }

    function formatTanggal(tanggal) {
        const [year, month, day] = tanggal.split('-');
        const monthNames = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];
        const monthName = monthNames[parseInt(month, 10) - 1];

        return `${day} ${monthName} ${year}`;
    }

</script>
@endsection