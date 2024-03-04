@extends('layout.main')

@section('css')
<link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.5.0-web/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.5.0-web/css/all.min.css') }}">
@endsection

@section('content')
    <!-- Heading Start -->
    <div class="max-w-full w-full px-5 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
        <div class="w-full">
            <h1 class="font-semibold text-lg mb-2">Cuti Tahunan</h1>
            <h4 class="font-medium text-slate-600 dark:text-slate-300">Riwayat Cuti Tahunan</h4>
        </div>
    </div>
    <!-- Heading End --> 

    <!-- Riwayat Cuti Content Start -->
    <section class="block mt-9 px-5 lg:pl-10 lg:pr-10">
        <div class="w-full flex items-center gap-1">
            <a href="{{ url('/dashboard') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-400 dark:text-slate-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-slate-400 dark:text-slate-500">
                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
            </svg>
            <button id="back-cuti" class="font-medium text-sm text-slate-400 dark:text-slate-500">Cuti</button>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-slate-400 dark:text-slate-500">
                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
            </svg>
            <button class="font-medium text-sm text-primer-60">Riwayat Cuti</button>
        </div>
        <div class="w-full">
            <div class="w-full bg-white dark:bg-slate-800 rounded-lg mt-9">
                <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-3 px-6 py-6 border-b border-slate-200 dark:border-slate-700">
                    <span class="inline-block font-semibold text-sm">Riwayat Cuti</span>
                </div>
                <div id="container-riwayat" class="w-full grid grid-cols-1 md:grid-cols-2 gap-4 py-6 px-4 xl:px-6 bg-white dark:bg-slate-800 rounded-b-2xl">
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Riwayat Cuti Content End -->
@endsection

@section('modal')
<section class="modal-container hidden items-center justify-center max-w-full w-full max-h-screen h-full fixed top-0 left-0 z-[9999] px-5 py-5">
    <div class="show-modal w-full max-w-full xl:max-w-7xl max-h-screen lg:max-h-fit h-full lg:h-fit overflow-auto rounded-lg bg-white dark:bg-slate-800 p-4 lg:p-6" data-index="" data-target="detail-cuti">
        <div class="w-full flex items-center justify-between relative pt-2 pb-6 border-b border-slate-200 dark:border-slate-600">
            <strong>Detail Cuti</strong>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="close-modal w-8 h-8 absolute top-0 right-0 cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>                                            
        </div>
        <section class="w-full flex flex-col lg:flex-row gap-9 px-0 lg:px-4 pb-4 mt-9">
            <div class="w-full h-fit bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-600">
                <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-3 px-6 py-4 border-b border-slate-200 dark:border-slate-700">
                    <span id="permintaan-cuti" class="inline-block font-semibold text-sm">Pengajuan Cuti</span>
                </div>
                <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-6 px-5 pb-6 pt-4">
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400">Tanggal Pengajuan</span>
                        <span id="tgl-pengajuan" class="text-[13px]"></span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400">Tanggal Cuti</span>
                        <span id="tgl-cuti" class="text-[13px] whitespace-nowrap"></span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">ID Cuti Trn</span>
                        <span id="id-cuti-trn" class="text-[13px] "></span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">ID Cuti Mst</span>
                        <span id="id-cuti-mst" class="text-[13px] "></span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">ID Cuti</span>
                        <span id="id-cuti" class="text-[13px] "></span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">Tipe Cuti</span>
                        <span id="type-cuti" class="text-[13px] "></span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">Keterangan</span>
                        <span id="keterangan" class="text-[13px] "></span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">Status</span>
                        <div class="flex items-center gap-3">
                            <i id="fa-solid" class=" "></i>
                            <span id="status-cuti" class="text-[13px] "></span>
                        </div>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">Lampiran</span>
                        <span id="lampiran-cutiTahunan" class="hidden text-[13px]"></span>
                        <button id="btn-tmbh-lampiran" class="hidden showModal w-fit px-3 py-2.5 rounded-full font-semibold text-xs bg-sekunder-60 hover:bg-sekunder-40 transition-all ease-in-out text-white" data-name="upload-lampiran">Tambah Lampiran</button>
                        <a id="link-lampiran" href="#" target="_blank" rel="noopener noreferrer" class="hidden text-[13px] underline underline-offset-4 font-semibold text-blue-600">Lihat Lampiran</a>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-600">
                <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-3 px-6 py-4 border-b border-slate-200 dark:border-slate-700">
                    <span class="inline-block font-semibold text-sm">Log Pengajuan Cuti</span>
                </div>
                <div id="container-log-cuti" class="w-full flex flex-col gap-4 px-4 py-4">
                    
                </div>
            </div>
        </section>
    </div>
    <div class="show-modal w-full max-w-full md:max-w-lg rounded-lg bg-white dark:bg-slate-700 p-4" data-target="upload-lampiran">
        <div class="w-full flex items-center justify-between relative pb-6 border-b border-slate-100">
            <strong>Upload Lampiran</strong>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="close-modal w-8 h-8 absolute top-0 right-0 cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>                                            
        </div>
        <div class="w-full pt-6">
            <form id="form_data" class="w-full flex flex-col items-center justify-center gap-4">
                @csrf
                <input type="hidden" name="idCutiTrn" id="idCutiTrn" value="">
                <div class="w-full flex flex-col justify-center items-start gap-2 px-4 relative">
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="input-file" type="file" accept="image/*">
                </div>
            </form>
        </div>
        <div class="w-full flex item-center justify-end gap-3 mt-6">
            <button class="close-modal px-4 py-3 rounded-lg bg-slate-300 text-slate-950 text-xs hover:bg-slate-200 w-fit">                         
                Batal
            </button>
            <button id="upload-file" type="button" form="form_data" class="close-modal px-4 py-3 rounded-lg text-slate-50 text-xs bg-primer-60 hover:bg-primer-80 transition-colors duration-200 ease-in-out w-fit">                         
                Upload File
            </button>
        </div>
    </div>
</section>
@endsection

@section('script')
<script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
    const encryptedFromData = localStorage.getItem('encryptedFromData');
    const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
    const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));

    var username = decryptedFromData.username;

    $.ajax({
        url: '{{ env('APP_SERVICE') }}get_request_cuti?id_karyawan=' + username,
        type: 'GET',
        success: function(response){
            if (response.status === 'success') {
                const listRiwayatCuti = response.data;
                listRiwayatCuti.reverse();
                const container = document.getElementById('container-riwayat');
                
                listRiwayatCuti.forEach(function(data){
                    let tanggalCuti = data.tanggal;
                    const rangeTanggal = getTanggalRange(tanggalCuti);
                    let ketReqCuti = data.status;
                    let keterangan;
                    let iconSVG;
                    const note = data.note;
                    let noteCuti;
                    let colorText;

                    if (ketReqCuti === '0'){
                        keterangan = '<span class="font-semibold text-xs text-sekunder-60">Menunggu Approval</span>';
                        iconSVG = `<i class="fa-solid fa-hourglass-start text-sekunder-60 pr-2"></i>`;
                    } else if (ketReqCuti === '1'){
                        keterangan = '<span class="font-semibold text-xs text-primer-60">Disetujui</span>';
                        iconSVG = `<i class="fa-solid fa-circle-check text-primer-60 pr-2"></i>`;
                    } else if (ketReqCuti === '2'){
                        keterangan = '<span class="font-semibold text-xs text-rose-600">Ditolak</span>';
                        iconSVG = `<i class="fa-solid fa-circle-xmark text-rose-600 pr-2"></i>`;
                    }

                    if (note === null){
                        noteCuti = '-';
                    } else {
                        noteCuti = note;
                    }

                    if (data.cuti === 'Cuti Tahunan'){
                        colorText = 'text-blue-600 bg-blue-50';
                    } else if (data.cuti !== 'Cuti Tahunan'){
                        colorText = 'text-primer-60 bg-primer-20';
                    }

                    const cardContainer = document.createElement('div');
                    cardContainer.classList.add('p-4', 'rounded-md', 'border', 'border-slate-100', 'dark:border-slate-700');
                    cardContainer.innerHTML = `
                    <div class="flex">
                        <div class="h-16 w-16 mr-6">
                            <img src="{{ asset('img/cuti-svg.svg') }}" alt="" srcset="" class="h-full w-full">
                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <span class="block font-semibold text-sm">Request Cuti ${rangeTanggal}</span>
                            <span class="block w-fit px-3 py-2 text-center ${colorText} rounded-full font-semibold text-xs">
                                ${data.cuti}
                            </span>
                            <p class="block my-1 text-xs font-semibold">${data.keterangan}</p>
                            <span class="block text-xs text-slate-600 dark:text-slate-300">${data.tgl_pengajuan}</span>
                            <div class="w-full flex items-center gap-1">
                                ${iconSVG}
                                ${keterangan}
                            </div>
                            <p class="text-xs">${noteCuti}</p>
                        </div>
                    </div>
                    <div class="w-full flex justify-end">
                        <button class="btn-modal font-semibold text-xs text-primer-60" data-name="detail-cuti" data-index="${data.id_cuti_trn}">Detail</button>
                    </div>`;
                    container.appendChild(cardContainer);
                });
            }else{
                Swal.fire({
                    title: 'Oops!',
                    text: 'Data Cuti Tidak Ada',
                    imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                    imageWidth: 200,
                    imageHeight: 200,
                    imageAlt: 'Custom image',
                    showConfirmButton: false,
                    timer: 1500,
                });
            }
        },
        error: function(){
            alert('Response dari API Tidak Terdeteksi');
        }
    });

    $(document).on('click', '.btn-modal', function(e){
        e.preventDefault();
        let modalContainer = $('.modal-container');
        let modalBox = $('.show-modal');
        var idCutiTrn = $(this).data('index');

        modalContainer.removeClass('hidden').addClass('flex');
        let nameButton = $(this).attr('data-name');
            
        modalBox.each(function() {
            let itemModal = $(this).attr('data-target');
            if (nameButton === itemModal) {
                $('.show-modal').data('index', idCutiTrn);
                idCutiTrn = $('.show-modal').data('index');
                $(this).addClass('active');

                $.ajax({
                    url: '{{ env('APP_SERVICE') }}get_request_cuti_ByID?id_cuti_trn='+idCutiTrn,
                    type: 'GET',
                    success: function(response){
                        if (response.status === 'success') {
                            console.log(response);
                            let dataCuti = response.data;
                            let dataLampiran = response.data_lampiran;
                            let logPengajuanCuti = response.history_approve;
                            const containerCard = document.getElementById('container-log-cuti');
                            
                            $('#permintaan-cuti').text('Permintaan Cuti ' + getTanggalRange(dataCuti.tanggal));
                            $('#tgl-pengajuan').text(dataCuti.tgl_pengajuan);
                            $('#tgl-cuti').text(getTanggalRange(dataCuti.tanggal));
                            $('#id-cuti-trn').text(dataCuti.id_cuti_trn);
                            $('#id-cuti-mst').text(dataCuti.id_cuti_mst);
                            $('#id-cuti').text(dataCuti.id_cuti);
                            $('#type-cuti').text(dataCuti.cuti);
                            $('#keterangan').text(dataCuti.keterangan);

                            //Untuk Upload Lampiran
                            console.log(dataCuti);
                            $('#idCutiTrn').val(dataCuti.id_cuti_trn);

                            $('#status-cuti').removeClass().empty();
                            $('#fa-solid').removeClass();
                            $('#lampiran-cuti').removeClass().empty();


                            if (dataCuti.status === '0'){
                                $('#fa-solid').addClass('fa-solid fa-hourglass-start text-sekunder-60');
                                $('#status-cuti').text('Menunggu Approval').addClass('text-sekunder-60 font-semibold text-xs');
                            } else if (dataCuti.status === '1'){
                                $('#fa-solid').addClass('fa-solid fa-circle-check text-primer-60');
                                $('#status-cuti').text('Disetujui').addClass('text-primer-60 font-semibold text-xs');
                            } else if (dataCuti.status === '2'){
                                $('#fa-solid').addClass('fa-solid fa-circle-xmark text-rose-600');
                                $('#status-cuti').text('Ditolak').addClass('text-rose-600 font-semibold text-xs');
                            }

                            $('#lampiran-cutiTahunan').addClass('hidden');
                            $('#btn-tmbh-lampiran').addClass('hidden');
                            $('#link-lampiran').addClass('hidden');

                            if(dataLampiran === null && response.data.tipe_cuti === "CT"){
                                $('#lampiran-cutiTahunan').removeClass('hidden');
                                $('#lampiran-cutiTahunan').text('-');
                            } else if (dataLampiran === null && response.data.tipe_cuti === "CK"){
                                console.log('Belum ada lampiran Cuti Khusus');
                                $('#btn-tmbh-lampiran').removeClass('hidden');
                                $('#link-lampiran').addClass('hidden');
                            } else if (dataLampiran !== null && response.data.tipe_cuti === "CK"){
                                $('#link-lampiran').removeClass('hidden');
                                $('#link-lampiran').attr('href', response.data_lampiran[0].url);
                            }

                            containerCard.innerHTML = '';

                            if (response.history_approve !== null){
                                logPengajuanCuti.forEach(function(item){
                                    let textStatus, iconStatus, styleStatus;
                                    const card = document.createElement('div');

                                    if (item.status === '0'){
                                        textStatus = 'Menunggu Approval';
                                        iconStatus = `<i class="fa-solid fa-hourglass-start text-sekunder-60 pr-2"></i>`;
                                        styleStatus = 'text-sekunder-60';
                                    } else if (item.status === '1'){
                                        textStatus = 'Disetujui';
                                        iconStatus = `<i class="fa-solid fa-circle-check text-primer-60 pr-2"></i>`;
                                        styleStatus = 'text-primer-60';
                                    } else if (item.status === '2'){
                                        textStatus = 'Ditolak';
                                        iconStatus = `<i class="fa-solid fa-circle-xmark text-rose-600 pr-2"></i>`;
                                        styleStatus = 'text-rose-600';
                                    }

                                    card.className = 'w-full flex flex-row gap-4';
                                    card.innerHTML = `<div class="flex">
                                        <div class="h-20 w-20 mr-6">
                                            <img src="{{ asset('img/user.svg') }}" alt="" srcset="" class="h-full w-full">
                                        </div>
                                        <div class="w-full flex flex-col gap-2">
                                            <span id="person" class="block font-semibold text-sm">${item.name}</span>
                                            <p id="note-person" class="text-xs">${item.id_karyawan_approve}</p>
                                            <div class="w-full flex items-center gap-1">
                                                ${iconStatus}
                                                <span class="font-semibold text-xs ${styleStatus}">${textStatus}</span>
                                            </div>
                                            <p id="note-person" class="text-xs">${item.note}</p>
                                            <span id="date-person" class="block text-xs text-gray-500 dark:text-gray-400">${item.tgl_approve}</span>
                                        </div>
                                    </div>`;

                                    containerCard.appendChild(card);
                                });
                            }
                        } else {
                            console.log(response);
                            alert('Response dari API Tidak Terdeteksi');
                        }
                    },
                    error: function(error){
                        console.log(error);
                        alert('BAD REQUEST API');
                    }
                });
            }
        });

        $('.close-modal').click(function(e) {
            e.preventDefault();
            modalContainer.removeClass('flex').addClass('hidden');
            modalBox.removeClass('active');
        });
    });

    $(document).ready(function() {
        $('.showModal').click(function(e) {
            e.preventDefault();
            $('.show-modal[data-target="detail-cuti"]').removeClass('active');
            $('.modal-container').removeClass('flex').addClass('hidden');
            $('.modal-container').removeClass('hidden').addClass('flex');
            $('.show-modal[data-target="upload-lampiran"]').addClass('active');
        });

        $('#input-file').change(function () {
            var maxFileSizeInBytes = 1 * 1024 * 1024;
            var selectedFile = this.files[0];

            if (selectedFile && selectedFile.size > maxFileSizeInBytes) {
                $('.modal-container').removeClass('flex').addClass('hidden');
                $('.show-modal').removeClass('active');
                Swal.fire({
                    title: 'Penting',
                    text: 'File Harus Berekstensi .jpg atau .png dan Ukuran Maksimal 1 Mb',
                    imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                    imageWidth: 150,
                    imageHeight: 150,
                    imageAlt: 'Custom image',
                });

                $(this).val('');
                return;
            }
        });

        $('#upload-file').click(function (e) {
            e.preventDefault();
            
            let idCutiTrn = $('#idCutiTrn').val();
            let lampiranFile = $('#input-file').prop('files')[0];

            console.log(idCutiTrn, lampiranFile);

            if (!lampiranFile){
                Swal.fire({
                    title: 'Oops!',
                    text: 'Harap Pilih Lampiran File yang akan di Upload!',
                    imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                    imageWidth: 200,
                    imageHeight: 200,
                    imageAlt: 'Custom image',
                    showConfirmButton: true,
                });
                return;
            }

            var fromData = new FormData();
            fromData.append('id_cuti_trn', idCutiTrn);
            fromData.append('lampiran_file', lampiranFile);
            console.log(fromData);

            loadingSweetalert();

            $.ajax({
                url: '{{ env('APP_SERVICE') }}update_request_cuti_khusus',
                type: 'POST',
                data: fromData,
                processData: false,
                contentType: false,
                error: function (error) {
                    console.log(error);
                    Swal.close();
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Terjadi Kesalahan',
                        text: 'Harap Hubungi Developer',
                        showConfirmButton: true,
                    });
                },
                success: function (response) {
                    Swal.close();
                    if (response.status === "success") {
                        console.log(response);
                        successSweetalert();
                        window.location.reload();
                    } else {
                        console.log(response);
                        erroSweetAlert();
                    }
                }
            });
        });
    });

    function successSweetalert() {
        Swal.fire({
            title: 'Sukses',
            text: 'Upload Lampiran File Berhasil',
            imageUrl: '{{ asset('img/STK-20230906-WA0025.webp') }}',
            imageWidth: 200,
            imageHeight: 200,
            imageAlt: 'Custom image',
            showConfirmButton: false,
            timer: 1500,
        });
    }

    function loadingSweetalert() {
        Swal.fire({
            title: 'Loading!',
            text: 'Proses Upload File',
            timerProgressBar: true,
            allowOutsideClick: false,
            allowEscapeKey: false,
            didOpen: () => {
                Swal.showLoading();
            },
        });
    }

    function erroSweetAlert() {
        Swal.fire({
            title: 'Oops!',
            text: 'Upload File Lampiran Gagal, Silahkan Coba Lagi',
            imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
            imageWidth: 200,
            imageHeight: 200,
            imageAlt: 'Custom image',
            showConfirmButton: false,
            timer: 1500,
        });
    }

    function getTanggalRange(tanggalCuti) {
        const cleanedString = tanggalCuti.replace(/[\["\]]/g, '');
        const dateArray = cleanedString.split(',');
        const sortedDates = dateArray.sort();

        if (sortedDates.length === 1) {
            return formatTanggal(sortedDates[0]);
        } else {
            const startDateFormatted = formatTanggal(sortedDates[0]);
            const endDateFormatted = formatTanggal(sortedDates[sortedDates.length - 1]);
            return `${startDateFormatted} s/d ${endDateFormatted}`;
        }
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

    $("#back-cuti").click(function(e){
        e.preventDefault();
        window.history.back();
    })
});
</script>
@endsection