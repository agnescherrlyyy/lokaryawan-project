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
        console.log(username);

        $.ajax({
            url: '{{ env('APP_SERVICE') }}get_request_cuti?id_karyawan=' + username,
            type: 'GET',
            success: function(response){
                if (response.status === 'success') {
                    console.log(response);
                    const listRiwayatCuti = response.data;
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
                        text: 'Tidak Berhasil Mengambil Data',
                        imageUrl: '{{ asset('img/STK-20230906-WA0025.webp') }}',
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
                    console.log(idCutiTrn);
                    $.ajax({
                        url: '{{ env('APP_SERVICE') }}get_request_cuti_ByID?id_cuti_trn='+idCutiTrn,
                        type: 'GET',
                        success: function(response){
                            if (response.status === 'success') {
                                let dataCuti = response.data;
                                let logPengajuanCuti = response.history_approve;
                                const containerCard = document.getElementById('container-log-cuti');
                                
                                console.log(dataCuti);
                                $('#permintaan-cuti').text('Permintaan Cuti ' + getTanggalRange(dataCuti.tanggal));
                                $('#tgl-pengajuan').text(dataCuti.tgl_pengajuan);
                                $('#tgl-cuti').text(getTanggalRange(dataCuti.tanggal));
                                $('#id-cuti-trn').text(dataCuti.id_cuti_trn);
                                $('#id-cuti-mst').text(dataCuti.id_cuti_mst);
                                $('#id-cuti').text(dataCuti.id_cuti);
                                $('#type-cuti').text(dataCuti.cuti);
                                $('#keterangan').text(dataCuti.keterangan);

                                $('#status-cuti').removeClass().empty();
                                $('#fa-solid').removeClass();

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

                                containerCard.innerHTML = '';

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
                                            <span id="person" class="block font-semibold text-sm">${item.id_karyawan_approve}</span>
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