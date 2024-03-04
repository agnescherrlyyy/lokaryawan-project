@extends('layout.main')

@section('content')
<!-- Heading Start -->
<div class="max-w-full w-full px-10 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
    <div class="w-full">
        <h1 class="font-semibold text-xl mb-2">Approve Cuti</h1>
        <h4 class="font-medium text-slate-600 dark:text-slate-300">Approve Lembur</h4>
    </div>
</div>
<!-- Heading End -->

<!-- Riwayat Lembur Content Start -->
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
        <button class="btn-back font-medium text-sm text-slate-400 dark:text-slate-500">Notification</button>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-slate-400 dark:text-slate-500">
            <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
        </svg>
        <button class="font-medium text-sm text-primer-60">Approved Lembur</button>
    </div>
    <div class="w-full flex flex-col lg:flex-row items-start gap-4 mt-9">
        <div class="w-full bg-white dark:bg-slate-800 rounded-lg">
            <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-3 px-6 py-6 border-b border-slate-200 dark:border-slate-700">
                <span class="inline-block font-semibold text-sm">Detail Lembur</span>
            </div>
            <div class="w-full px-6 pb-6">
                <div class="w-full flex flex-col gap-4">
                    <div class="w-full pt-2">
                        <span id="judul-cuti" class="inline-block font-semibold text-sm">
                        </span>
                    </div>
                    <div class="w-full flex flex-wrap items-center gap-2">
                        <span id="name" class="inline-block font-medium py-2 text-sm">
                        </span>
                        <span id="cuti" class="block w-fit px-3 py-2 bg-blue-50 text-blue-600 rounded-full font-semibold text-xs">
                            Lembur
                        </span>
                    </div>
                    <div class="w-full flex items-center gap-2 mt-1">
                        <svg class="h-5 w-5 text-slate-600 dark:text-slate-300"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="4" y="5" width="16" height="16" rx="2" />  <line x1="16" y1="3" x2="16" y2="7" />  <line x1="8" y1="3" x2="8" y2="7" />  <line x1="4" y1="11" x2="20" y2="11" />  <rect x="8" y="15" width="2" height="2" /></svg>
                        <span id="tgl-lembur" class="font-medium text-sm text-slate-600 dark:text-slate-300">
                            
                        </span>
                    </div>
                    <div class="w-full flex items-center gap-2">
                        <svg class="h-5 w-5 text-slate-600 dark:text-slate-300"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="4" y="5" width="16" height="16" rx="2" />  <line x1="16" y1="3" x2="16" y2="7" />  <line x1="8" y1="3" x2="8" y2="7" />  <line x1="4" y1="11" x2="20" y2="11" />  <line x1="11" y1="15" x2="12" y2="15" />  <line x1="12" y1="15" x2="12" y2="18" /></svg>
                        <span id="tgl-pengajuan" class="font-medium text-sm text-slate-600 dark:text-slate-300"></span>
                    </div>
                    <div class="w-full flex flex-col items-start gap-2">
                        <span class="text-sm font-semibold">Keterangan</span>
                        <span id="keterangan" class="font-medium text-sm text-slate-600 dark:text-slate-300"></span>
                    </div>
                    <div class="w-full flex flex-col items-start gap-2">
                        <span class="text-sm font-semibold">Jumlah Jam Lembur</span>
                        <span id="jml-jamLembur" class="font-medium text-sm text-slate-600 dark:text-slate-300"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full bg-white dark:bg-slate-800 rounded-lg">
            <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-3 px-6 py-6 border-b border-slate-200 dark:border-slate-700">
                <span class="inline-block font-semibold text-sm">Action Approved Lembur</span>
            </div>
            <div class="w-full">
                <form id="fromData">
                    <div class="px-6 py-4">
                        <input type="hidden" name="status" id="status" value="">
                        <div class="w-full flex flex-col gap-2 mb-4">
                            <label for="alasan-lembur" class="text-xs font-semibold">Edit Jumlah Jam Lembur</label>
                            <input type="number" name="jumlah-lembur" id="jumlah-lembur" class="item-input-readonly" placeholder="Masukan Jumlah Jam Lembur" readonly>
                        </div>
                        <textarea name="alasan-lembur" id="alasan-lembur" cols="10" rows="5" class="item-input-readonly" placeholder="Masukan Catatan atau Alasan" readonly>-</textarea>
                    </div>
                </form>
            </div>
            <div class="w-full lg:w-1/2 lg:flex-row flex flex-col gap-4 px-6 pb-6">
                <button id="btn-reject" type="submit" data-index="2" form="fromData" class="text-center px-4 py-3 w-full rounded-full font-semibold text-sm text-white mt-2 bg-rose-600 hover:bg-rose-800 transition-all duration-200 ease-in-out uppercase">rejected</button>
                <button id="btn-approve" type="submit" data-index="1" form="fromData" class="text-center px-4 py-3 w-full rounded-full font-semibold text-sm text-white mt-2 bg-primer-60 hover:bg-primer-80 transition-all duration-200 ease-in-out uppercase">Approved</button>
            </div>
        </div>
    </div>
</section>
<!-- Riwayat Lembur Content End -->
@endsection

@section('script')
<script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/crypto-js.js') }}"></script>
<script type="text/javascript">
    $('.btn-back').click(function (e) {
        e.preventDefault();
        window.location.href = "{{ url('/notification') }}";
    });

    const encryptedFromData = localStorage.getItem('encryptedFromData');
    const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
    const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));
    var idLembur = "{{ $request['id_overtime'] }}";
    var statusApproved;

    var username = decryptedFromData.username;

    $.ajax({
        url: '{{ env('APP_SERVICE') }}get_request_overtime_ByID?id_overtime='+idLembur,
        type: 'GET',
        async: false,
        success: function (response) {
            if (response.status === 'success') {
                var detailLembur = response.data;
                console.log(detailLembur);
                var tanggalLembur = detailLembur[0].tgl_lembur;
                $('#judul-cuti').text('Pengajuan Lembur '+ formatTanggal(tanggalLembur));
                $('#tgl-pengajuan').text(detailLembur[0].tgl_pengajuan);
                $('#tgl-lembur').text(formatTanggal(tanggalLembur));
                $('#keterangan').text(detailLembur[0].keterangan);
                statusApproved = detailLembur[0].status;
                $('#status').val(statusApproved);
                $('#jml-jamLembur').text(removeDecimalZeroes(detailLembur[0].jam_lembur));
                $('#jumlah-lembur').val(removeDecimalZeroes(detailLembur[0].jam_lembur));
            } else {
                Swal.fire({
                    position: 'center',
                    title: 'Mengambil Data Tidak Berhasil',
                    showConfirmButton: false,
                    timer: 1700,
                    showCloseButton: true
                });
            }
        },
        error: function () {
            alert('Maaf API Mengalami Masalah!');
        }
    });

    function actionOvertime(status) {
        if (status === '0') {
            $('#btn-approve').prop("disabled", false);
            $('#btn-reject').prop("disabled", false);
        } else if (status === '1') {
            $('#btn-approve').prop("disabled", true).removeClass("bg-primer-60 hover:bg-primer-80").addClass("bg-primer-40");
            $('#btn-reject').prop("disabled", true).removeClass("bg-rose-600 hover:bg-rose-800").addClass("bg-rose-400");
        } else if (status === '2') {
            $('#btn-approve').prop("disabled", true).removeClass("bg-primer-60 hover:bg-primer-80").addClass("bg-primer-40");
            $('#btn-reject').prop("disabled", true).removeClass("bg-rose-600 hover:bg-rose-800").addClass("bg-rose-400");
        }
    }

    $(document).ready(function () {
        $('#btn-approve').click(function (e) {
            e.preventDefault();
            var noteApproved = $('#alasan-lembur').val();
            var jumlahLembur = $('#jumlah-lembur').val();
            var status = $(this).data('index');
            var textError = 'Menyetujui Lembur Karyawan Gagal, Silahkan Coba Lagi';
            var textSuccess = 'Menyetujui Lembur Karyawan Berhasil';

            if(!idLembur || !status || !noteApproved || !username || !jumlahLembur) {
                Swal.fire({
                    title: 'Oops!',
                    text: 'Harap Lengkapi Alasan Menyetujui Lembur atau Jumlah Jam Lembur Terlebih Dahulu',
                    imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                    imageWidth: 200,
                    imageHeight: 200,
                    imageAlt: 'Custom image',
                    showConfirmButton: true,
                });
                return;
            }

            loadingSweetAlert();

            $.ajax({
                url: '{{ env('APP_SERVICE') }}update_action_overtime',
                type: 'POST',
                data: {
                    id_overtime: idLembur,
                    status: status,
                    note: noteApproved,
                    jam_lembur: jumlahLembur,
                    id_karyawan_approve: username
                },
                success: function (response) {
                    if (response.status === 'success') {
                        console.log(response);
                        $('#alasan-lembur').val('');
                        Swal.close();
                        succsessSweetAlert(textSuccess);
                        actionOvertime("1");
                        window.location.href = "{{ url('/notification') }}";
                    } else {
                        console.log(response);
                        Swal.close();
                        errorSweetAlert(textError);
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

        $('#btn-reject').click(function (e){
            e.preventDefault();
            var noteApproved = $('#alasan-lembur').val();
            var status = $(this).data('index');
            var textError = 'Menolak Lembur Karyawan Gagal, Silahkan Coba Lagi';
            var textSuccess = 'Menolak Lembur Karyawan Berhasil';

            if(!idLembur || !status || !noteApproved || !username) {
                Swal.fire({
                    title: 'Oops!',
                    text: 'Harap Lengkapi Alasan Menolaknpm  Lembur Terlebih Dahulu',
                    imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                    imageWidth: 200,
                    imageHeight: 200,
                    imageAlt: 'Custom image',
                    showConfirmButton: true,
                });
                return;
            }

            loadingSweetAlert();

            $.ajax({
                url: '{{ env('APP_SERVICE') }}update_action_overtime',
                type: 'POST',
                data: {
                    id_overtime: idLembur,
                    status: status,
                    note: noteApproved,
                    id_karyawan_approve: username
                },
                success: function (response) {
                    if (response.status === 'success') {
                        console.log(response);
                        $('#alasan-lembur').val('');
                        Swal.close();
                        succsessSweetAlert(textSuccess);
                        actionOvertime("2");
                        window.location.href = "{{ url('/notification') }}";
                    } else {
                        console.log(response);
                        Swal.close();
                        errorSweetAlert(textError);
                    }
                },
                error: function (error) {
                    console.log(error);
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
    });

    function removeDecimalZeroes(number) {
        let numberString = number.toString();
        
        if (numberString.indexOf('.00') !== -1) {
            numberString = numberString.replace('.00', '');
        }

        return parseFloat(numberString);
    }

    function loadingSweetAlert() {
        Swal.fire({
            title: 'Loading!',
            text: 'Proses Menyetujui/Menolak Lembur Karyawan',
            timerProgressBar: true,
            allowOutsideClick: false,
            allowEscapeKey: false,
            didOpen: () => {
                Swal.showLoading();
            },
        });
    }

    function succsessSweetAlert(successText) {
        Swal.fire({
            title: 'Sukses',
            text: successText,
            imageUrl: '{{ asset('img/STK-20230906-WA0025.webp') }}',
            imageWidth: 200,
            imageHeight: 200,
            imageAlt: 'Custom image',
            showConfirmButton: false,
            timer: 1500,
        });
    }

    function errorSweetAlert(errorText) {
        Swal.fire({
            title: 'Oops!',
            text: errorText,
            imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
            imageWidth: 200,
            imageHeight: 200,
            imageAlt: 'Custom image',
            showConfirmButton: false,
            timer: 1500,
        });
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