@extends('layout.main')

@section('content')
    <!-- Heading Start -->
    <div class="max-w-full w-full px-5 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
        <div class="w-full">
            <h1 class="font-semibold text-lg mb-2">Cuti Tahunan</h1>
            <h4 class="font-medium text-slate-600 dark:text-slate-400">Permintaan Cuti Tahunan</h4>
        </div>
    </div>
    <!-- Heading End --> 

    <!-- Permintaan Cuti Content Start -->
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
            <button id="back-cuti" class="font-medium text-sm text-slate-400 dark:text-slate-500">Cuti Tahunan</button>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-primer-60">
                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
            </svg>
        </div>
        <section class="w-full flex flex-col lg:flex-row gap-9 mt-9">
            <div class="w-full h-fit bg-white dark:bg-slate-800 rounded-lg">
                <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-3 px-6 py-4 border-b border-slate-200 dark:border-slate-700">
                    <span id="permintaan-cuti" class="inline-block font-semibold text-sm">Permintaan Cuti</span>
                </div>
                <div class="px-4 pt-4 pb-2">
                    <span id="nama-cuti" class="block w-fit px-3 py-2 text-center text-primer-60 bg-primer-20 rounded-full font-semibold text-xs">
                        
                    </span>
                </div>
                <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-6 px-5 pb-6 pt-2">
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400">Tanggal Pengajuan</span>
                        <span id="tgl-pengajuan" class="text-[13px]"></span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400">Keterangan</span>
                        <span id="keterangan" class="text-[13px] whitespace-nowrap"></span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">Tanggal Cuti</span>
                        <span id="tgl-permintaan" class="text-[13px] "></span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">Status</span>
                        <span id="status" class="text-[13px] "></span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">Note</span>
                        <span id="note" class="text-[13px] "></span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">Lampiran</span>
                        <span id="lampiran-cutiTahunan" class="hidden text-[13px]"></span>
                        <button id="btn-tmbh-lampiran" class="hidden btn-modal w-fit px-3 py-2.5 rounded-full font-semibold text-xs bg-sekunder-60 hover:bg-sekunder-40 transition-all ease-in-out text-white" data-name="upload-lampiran">Tambah Lampiran</button>
                        <a id="link-lampiran" href="#" target="_blank" rel="noopener noreferrer" class="hidden text-[13px] font-semibold text-blue-600">Lihat Lampiran</a>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white dark:bg-slate-800 rounded-lg">
                <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-3 px-6 py-4 border-b border-slate-200 dark:border-slate-700">
                    <span id="log-permintaan-cuti" class="inline-block font-semibold text-sm" data-index="">Log Permintaan Cuti</span>
                </div>
                <div id="container-card" class="w-full flex flex-col px-2 py-4">
                    
                </div>
            </div>
        </section>
    </section>
    <!-- Permintaan Cuti Content End -->
@endsection

@section('modal')
<section class="modal-container hidden items-center justify-center max-w-full w-full max-h-screen h-full fixed top-0 left-0 z-[9999] px-5">
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
            <button id="upload-file" type="submit" form="form_data" class="close-modal px-4 py-3 rounded-lg text-slate-50 text-xs bg-primer-60 hover:bg-primer-80 transition-colors duration-200 ease-in-out w-fit">                         
                Upload File
            </button>
        </div>
    </div>
</section>
@endsection

@section('script')
<script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/crypto-js.js') }}"></script>
<script src="{{ asset('js/scriptModal.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        const encryptedFromData = localStorage.getItem('encryptedFromData');
        const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
        const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));

        var username = decryptedFromData.username;
        var cuti_trn;

        $("#back-cuti").click(function(e){
            e.preventDefault();
            window.history.back();
        })

        $.ajax({
            url: 'https://servicelokaryawan.salokapark.app/api/get_request_cuti?id_karyawan='+username,
            type: 'GET',
            success: function(response){
                console.log(response);
                if (response.status === 'success') {
                    var data = response.data;
                    var lastIndex = data.length - 1;
                    var lastElement = data[lastIndex];
                    cuti_trn = lastElement.id_cuti_trn;
                    $.ajax({
                        url: '{{ env('APP_SERVICE') }}get_request_cuti_ByID?id_cuti_trn='+cuti_trn,
                        type: 'GET',
                        success: function(response){
                            if (response.status === 'success') {
                                data = response.data;
                                console.log(response.data);
                                console.log(response);
                                
                                const containerCard = document.getElementById('container-card');

                                var textStatus;
                                if (data.status === '0'){
                                    textStatus = 'Menunggu Approval';
                                    $('#status').addClass('text-sekunder-60');
                                } else if (data.status === '1') {
                                    textStatus = 'Diapproval';
                                    $('#status').addClass('text-primer-60');
                                } else if (data.status === '2') {
                                    textStatus = 'Ditolak';
                                    $('#status').addClass('text-rose-600');
                                }

                                if (data.cuti === 'Cuti Tahunan'){
                                    $('#nama-cuti').removeClass('text-primer-60 bg-primer-20');
                                    $('#nama-cuti').addClass('text-blue-600 bg-blue-50');
                                }

                                if (data.note === null) {
                                    data.note = '-';
                                }

                                $('#permintaan-cuti').text('Permintaan Cuti ' + getTanggalRange(data.tanggal));
                                $('#nama-cuti').text(data.cuti);
                                $('#tgl-pengajuan').text(data.tgl_pengajuan);
                                $('#keterangan').text(data.keterangan);
                                $('#tgl-permintaan').text(getTanggalRange(data.tanggal));
                                $('#status').text(textStatus);
                                $('#note').text(data.note);

                                //Untuk Upload Lampiran
                                $('#idCutiTrn').val(data.id_cuti_trn);

                                if(response.data_lampiran === null && response.data.tipe_cuti === "CK"){
                                    console.log('Belum ada lampiran Cuti Khusus');
                                    $('#btn-tmbh-lampiran').removeClass('hidden');
                                    $('#link-lampiran').addClass('hidden');
                                } else if(response.data_lampiran !== null && response.data.tipe_cuti === "CK"){
                                    $('#btn-tmbh-lampiran').addClass('hidden');
                                    $('#link-lampiran').removeClass('hidden');
                                    $('#link-lampiran').attr('href', response.data_lampiran[0].url);
                                } else if (response.data_lampiran === null && response.data.tipe_cuti === "CT"){
                                    console.log('Belum ada lampiran Cuti Tahunan');
                                    $('#lampiran-cutiTahunan').removeClass('hidden');
                                    $('#lampiran-cutiTahunan').text('-');
                                }

                                if(response.history_approve === null){
                                    response.history_approve = [];
                                } else if(response.history_approve !== null){

                                    let historyActivity = response.history_approve;
                                    historyActivity.forEach(function(itemData){
                                        var iconStatus;
                                        var textStatus;
                                        var colorStatus;

                                        if (itemData.status === '0'){
                                            textStatus = 'Menunggu Approval';
                                            iconStatus = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-sekunder-60">
                                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z" clip-rule="evenodd" />
                                            </svg>
                                            `;
                                            colorStatus = 'text-sekunder-60';
                                        } else if (itemData.status === '1'){
                                            textStatus = 'Diapproval';
                                            iconStatus = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-primer-60">
                                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                            </svg>
                                            `;
                                            colorStatus = 'text-primer-60';
                                        } else if (itemData.status === '2'){
                                            textStatus = 'Ditolak';
                                            iconStatus = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-rose-600">
                                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                                            </svg>
                                            `;
                                            colorStatus = 'text-rose-600';
                                        }

                                        const itemCard = document.createElement('div');
                                        itemCard.className = 'p-4 rounded-lg';
                                        itemCard.innerHTML = `<div class="flex">
                                            <div class="h-16 w-16 mr-6">
                                                <img src="{{ asset('img/user.svg') }}" alt="" srcset="" class="h-full w-full">
                                            </div>
                                            <div class="w-full flex flex-col gap-2">
                                                <span class="block font-semibold text-sm">${itemData.name}</span>
                                                <p class="text-xs">${itemData.id_karyawan_approve}</p>
                                                <div class="w-full flex items-center gap-1">
                                                    ${iconStatus}
                                                    <span class="font-semibold text-xs ${colorStatus}">${textStatus}</span>
                                                </div>
                                                <p class="text-xs">${itemData.note}</p>
                                                <span class="block text-xs text-gray-500 dark:text-gray-400">${itemData.tgl_approve}</span>
                                            </div>
                                        </div>`;

                                        containerCard.appendChild(itemCard);
                                    });
                                }


                            } else {
                                alert('Tidak Berhasil Mengambil Data Dari API');
                            }
                        }
                    });
                }else{
                    alert('Tidak Berhasil Mengambil Data Dari API');
                }
            },
            error: function(){
                alert('Response Dari API Tidak Terdeteksi');
            }
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
            fromData.append('lampiran_file', lampiranFile);
            fromData.append('id_cuti_trn', idCutiTrn);

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
    });
</script>
@endsection