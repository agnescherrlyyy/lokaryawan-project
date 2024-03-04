@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.5.0-web/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.5.0-web/css/all.min.css') }}">
@endsection

@section('content')
    <!-- Heading Start -->
    <div class="max-w-full w-full px-5 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
        <div class="w-full">
            <h1 class="font-semibold text-lg mb-2">Komplemen</h1>
            <h4 class="font-medium text-slate-600 dark:text-slate-300">Pengajuan Komplemen</h4>
        </div>
    </div>
    <!-- Heading End --> 
    <!-- Content Start -->
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
            <button id="back-komplemen" class="font-medium text-sm text-slate-400 dark:text-slate-500">Komplemen</button>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-slate-400 dark:text-slate-500">
                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
            </svg>
            <button class="font-medium text-sm text-primer-60">Permintaan Komplemen</button>
        </div>
        <div class="w-full">
            <div class="w-full bg-white dark:bg-slate-800 rounded-lg mt-9">
                <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-3 px-6 py-6 border-b border-slate-200 dark:border-slate-700">
                    <span class="inline-block font-semibold text-sm">Pengajuan Komplemen</span>
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <button class="dropdown-button px-4 py-2 rounded-full bg-primer-60 text-slate-50 font-semibold text-xs hover:bg-primer-40 w-fit flex items-center gap-2 whitespace-nowrap" button-target="dropdown-primary">
                                Filter
                                <i class="fa-solid fa-chevron-down text-sm"></i>                            
                            </button>
                            <ul id="container-list" class="dropdown-menu min-w-max w-full absolute top-full xl:right-0 bg-white dark:bg-slate-700 shadow-md rounded-lg py-3 mt-2 hidden pointer-events-none transition-all duration-150 ease-linear z-10" data-target="dropdown-primary">
                                <li><a id="item-dropdown" href="#" class="flex items-center gap-2 w-full px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-500 active:bg-sekunder-60 dark:active:bg-sekunder-60 font-semibold text-xs text-slate-600 dark:text-slate-300" data-index="Semua">
                                    Semua
                                </a></li>
                                <li><a id="item-dropdown" href="#" class="flex items-center gap-2 w-full px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-500 active:bg-sekunder-60 dark:active:bg-sekunder-60 font-semibold text-xs text-slate-600 dark:text-slate-300" data-index="0">
                                    Sedang Diproses
                                </a></li>
                                <li><a id="item-dropdown" href="#" class="flex items-center gap-2 w-full px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-500 active:bg-sekunder-60 dark:active:bg-sekunder-60 font-semibold text-xs text-slate-600 dark:text-slate-300" data-index="1">
                                    Sukses
                                </a></li>
                                <li><a id="item-dropdown" href="#" class="flex items-center gap-2 w-full px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-500 active:bg-sekunder-60 dark:active:bg-sekunder-60 font-semibold text-xs text-slate-600 dark:text-slate-300" data-index="2">
                                    Menunggu Pembayaran
                                </a></li>
                                <li><a id="item-dropdown" href="#" class="flex items-center gap-2 w-full px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-500 active:bg-sekunder-60 dark:active:bg-sekunder-60 font-semibold text-xs text-slate-600 dark:text-slate-300" data-index="3">
                                    Expired
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="container-komplemen" class="w-full grid grid-cols-1 md:grid-cols-2 gap-4 bg-white dark:bg-slate-800 rounded-b-2xl py-4 px-4 xl:px-6">
                </div>
            </div>
        </div>
    </section>
    <!-- Content End -->
@endsection

@section('modal')
<section class="modal-container hidden items-center justify-center max-w-full w-full max-h-screen h-full fixed top-0 left-0 z-[9999] px-5 py-5">
    <div class="show-modal w-full max-w-full xl:max-w-7xl max-h-screen lg:max-h-fit h-full lg:h-fit overflow-auto rounded-lg bg-white dark:bg-slate-800 p-4 lg:p-6" data-index="" data-target="detail-komplemen">
        <div class="w-full flex items-center justify-between relative pt-2 pb-6 border-b border-slate-200 dark:border-slate-600">
            <strong>Detail Komplemen</strong>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="close-modal w-8 h-8 absolute top-0 right-0 cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>                                            
        </div>
        <section class="w-full flex flex-col lg:flex-row gap-9 px-0 lg:px-4 pb-4 mt-9">
            <div class="w-full h-fit bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-600">
                <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-3 px-6 py-4 border-b border-slate-200 dark:border-slate-700">
                    <span id="permintaan-cuti" class="inline-block font-semibold text-sm">Detail </span>
                </div>
                <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-6 px-5 pb-6 pt-4">
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400">Tanggal Pengajuan</span>
                        <span id="tgl-pengajuan" class="text-[13px]"></span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400">Tanggal Kedatangan</span>
                        <span id="tgl-kedatangan" class="text-[13px] whitespace-nowrap"></span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">ID Komplemen</span>
                        <span id="id-komplemen" class="text-[13px] "></span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">Qty Total</span>
                        <span id="qty-total" class="text-[13px] "></span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">Kode Booking</span>
                        <span id="kode-booking" class="text-[13px] "></span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">Order ID</span>
                        <span id="order-id" class="text-[13px] "></span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">Status</span>
                        <div class="flex items-center gap-3">
                            <i id="fa-solid" class=" "></i>
                            <span id="status-komplemen" class="text-[13px] "></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-600">
                <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-3 px-6 py-4 border-b border-slate-200 dark:border-slate-700">
                    <span class="inline-block font-semibold text-sm">Detail Tiket</span>
                </div>
                <div id="container-tiket" class="w-full flex flex-col px-4 py-4">
                    
                </div>
            </div>
        </section>
    </div>
    <div class="show-modal w-full max-w-full xl:max-w-7xl max-h-screen lg:max-h-screen h-full lg:h-full overflow-auto rounded-lg bg-white p-4 lg:p-6" data-target="payment-method">
        <div class="w-full flex items-center justify-between relative pb-6 border-b border-slate-100 dark:border-slate-600">
            <strong></strong>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 absolute -top-2 -right-1 text-red-600 close-modal cursor-pointer">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="w-full flex flex-col items-center justify-center gap-2">
        </div>
    </div>
</section>
@endsection

@section('script')
    <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/scriptModal.js') }}"></script>
    <script src="{{ asset('js/dropdown.js') }}"></script>
    <script type="text/javascript">
        const encryptedFromData = localStorage.getItem('encryptedFromData');
        const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
        const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));

        var username = decryptedFromData.username;
        var idKomplemenTrn;

        $.ajax({
            url: '{{ env('APP_SERVICE') }}get_request_komplement_karyawan?id_karyawan='+username,
            type: 'GET',
            success: function (response) {
                if(response.status === 'success'){
                    var listDataKomplemen = response.data;
                    listDataKomplemen.reverse();
                    const containerCard = document.getElementById('container-komplemen');

                    function renderCardsByStatus(status) {
                        containerCard.innerHTML = '';

                        listDataKomplemen.forEach(item => {
                            if (status === "Semua" || item.status === status) {
                                const card = document.createElement('div');
                                card.className = 'item-komplemen w-full flex flex-row gap-4 px-4 py-3 rounded-lg border border-slate-100 dark:border-slate-600 cursor-pointer';
                                card.setAttribute('data-index', item.id_komplemen_trn);

                                var tglAwal = item.tanggal_kedatangan;
                                var tglNormal = new Date(tglAwal);
                                var tglKedatangan = tglNormal.getDate() + " " + getNamaBulan(tglNormal.getMonth()) + " " + tglNormal.getFullYear();
                                var textStatus;
                                var iconStatus;
                                var styleStatus;
                                var linkPaymentMethod;
                                var showPaymentButton = false;

                                if (item.status === "0"){
                                    textStatus = "Sedang Diproses";
                                    iconStatus = '<i class="fa-solid fa-hourglass-start text-blue-400"></i>';
                                    styleStatus = "text-blue-400";
                                } else if (item.status === "1"){
                                    textStatus = "Success";
                                    iconStatus = '<i class="fa-solid fa-circle-check text-primer-60"></i>';
                                    styleStatus = "text-primer-60";
                                } else if (item.status === "2"){
                                    textStatus = "Menunggu Pembayaran";
                                    iconStatus = '<i class="fa-solid fa-clock text-sekunder-60"></i>';
                                    styleStatus = "text-sekunder-60";

                                    if (item.payment_link !== null) {
                                        linkPaymentMethod = item.payment_link;
                                        showPaymentButton = true;
                                    } else {
                                        linkPaymentMethod = "#";
                                    }
                                } else if (item.status === "3"){
                                    textStatus = "Dibatalkan/Expired";
                                    iconStatus = '<i class="fa-solid fa-circle-xmark text-rose-600"></i>';
                                    styleStatus = "text-rose-600";
                                }

                                card.innerHTML = `<div class="w-16 h-14 overflow-hidden rounded-full">
                                    <img src="{{ asset('img/koplemen100.svg') }}" alt="avatar" class=" object-cover">
                                </div>
                                <div class="w-full flex flex-col items-start gap-2">
                                    <span class="block text-left font-semibold text-sm">${tglKedatangan}</span>
                                    <span class="text-sm">${item.id_komplemen_trn}</span>
                                    <span class="text-xs">${item.order_id}</span>
                                    <span class="text-xs text-slate-600 dark:text-slate-300">${item.tanggal_pengajuan}</span>
                                    <div class="w-full flex items-center gap-2">
                                        ${iconStatus}
                                        <span class="font-semibold text-xs ${styleStatus}">${textStatus}</span>
                                    </div>
                                    <button id="btn-pembayaran" class="btn-pembayaran ${showPaymentButton ? 'block' : 'hidden'} font-semibold text-xs text-blue-600 underline underline-offset-4 py-1.5" data-link="${linkPaymentMethod}" data-name="payment-method">Bayar Sekarang</button>
                                    <div class="w-full flex items-center justify-end gap-3">
                                        <button class="btn-modal font-semibold text-xs text-primer-60" data-index="${item.id_komplemen_trn}" data-name="detail-komplemen">Detail</button>
                                    </div>
                                </div>`;

                                containerCard.appendChild(card);
                            }
                        });
                    }

                    renderCardsByStatus("Semua");

                    $('#container-list a').on('click', function () {
                        const dataIndex = $(this).data('index').toString();
                        $('#container-list a').removeClass('bg-sekunder-60 hover:bg-sekunder-40 text-white');
                        $(this).addClass('bg-sekunder-60 hover:bg-sekunder-40 text-white font-semibold');
                        renderCardsByStatus(dataIndex);
                    });
                    
                } else {
                    console.log(response);
                    alert('Gagal Mengambil Data Dari API');
                }
            },
            error: function (error) {
                console.log(error);
                alert('BAD REQUEST API');
            }
        });

        $(document).on('click', '.btn-modal', function(e){
            e.preventDefault();
            let modalContainer = $('.modal-container');
            let modalBox = $('.show-modal');
            var idKomplemen = $(this).data('index');

            modalContainer.removeClass('hidden').addClass('flex');
            let nameButton = $(this).attr('data-name');
                
            modalBox.each(function() {
                let itemModal = $(this).attr('data-target');
                if (nameButton === itemModal) {
                    $('.show-modal').data('index', idKomplemen);
                    $(this).addClass('active');
                    idKomplemenTrn = idKomplemen;

                    $.ajax({
                        url: '{{ env('APP_SERVICE') }}get_request_komplement_ByID?id_karyawan=' + username + '&id_komplement_trn=' + idKomplemenTrn,
                        type: 'GET',
                        success: function(response) {
                            if (response.status === 'success') {
                                var detailUser = response.data[0];
                                var detailTiket = response.ticket_order;
                                const containerCard = document.getElementById('container-tiket');

                                var tglAwal = detailUser.tanggal_kedatangan;
                                var tglNormal = new Date(tglAwal);
                                var tglKedatangan = tglNormal.getDate() + " " + getNamaBulan(tglNormal.getMonth()) + " " + tglNormal.getFullYear();

                                $('#status-komplemen').removeClass().empty();
                                $('#fa-solid').removeClass();

                                if (detailUser.status === "0"){
                                    $('#status-komplemen').text('Sedang Diproses').addClass('text-blue-600 text-xs font-semibold');
                                    $('#fa-solid').addClass('fa-solid fa-hourglass-start text-blue-600');
                                } else if (detailUser.status === "1"){
                                    $('#status-komplemen').text('Success').addClass('text-primer-60 text-xs font-semibold');
                                    $('#fa-solid').addClass('fa-solid fa-circle-check text-primer-60');
                                } else if (detailUser.status === "2"){
                                    $('#status-komplemen').text('Menunggu Pembayaran').addClass('text-sekunder-60 text-xs font-semibold');
                                    $('#fa-solid').addClass('fa-solid fa-clock text-sekunder-60');
                                } else if (detailUser.status === "3"){
                                    $('#status-komplemen').text('Dibatalkan/Expired').addClass('text-red-600 text-xs font-semibold');
                                    $('#fa-solid').addClass('fa-solid fa-circle-xmark text-red-600');
                                }

                                let textKodeBoking;

                                if (detailUser.kode_booking === '' || detailUser.kode_booking === "null") {
                                    textKodeBoking = 'Dibatalkan/Expired';
                                } else {
                                    textKodeBoking = detailUser.kode_booking;
                                }

                                $('#tgl-pengajuan').text(detailUser.tanggal_pengajuan);
                                $('#tgl-kedatangan').text(tglKedatangan);
                                $('#id-komplemen').text(detailUser.id_komplemen_trn);
                                $('#qty-total').text(detailUser.qty_total);
                                $('#kode-booking').text(textKodeBoking);
                                $('#order-id').text(detailUser.order_id);

                                containerCard.innerHTML = '';

                                detailTiket.forEach(item => {
                                    const card = document.createElement('div');
                                    card.className = 'w-full flex flex-row gap-4 px-4 py-3 my-2';
                                    card.innerHTML = `<div class="w-14 h-14 rounded-full">
                                        <img src="{{ asset('img/koplemen100.svg') }}" alt="avatar" class="w-full h-full object-cover">
                                    </div>
                                    <div class="flex flex-col items-start gap-2">
                                        <span class="block text-left font-semibold text-sm">${item.product_name}</span>
                                        <span class="text-[13px]">Jumlah Tiket: ${item.qty} Qty</span>
                                        <span class="font-semibold text-sm">${formatRupiah(item.subtotal)}</span>
                                    </div>`;

                                    containerCard.appendChild(card);
                                });
                            } else {
                                console.log(response);
                                alert('Gagal Mengambil Data Dari API');
                            }
                        },
                        error: function(error) {
                            console.log(error);
                            alert('API BAD REQUEST');
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

        $(document).on('click', '#btn-pembayaran', function(e) {
            e.preventDefault();
            var paymentMethod = $(this).data('link');
            let modalContainer = $('.modal-container');
            modalContainer.removeClass('hidden').addClass('flex');
            $('.show-modal[data-target="payment-method"]').addClass('active');
            
            var iframe = document.createElement('iframe');
            iframe.src = paymentMethod;
            iframe.width = '100%';
            iframe.height = '100%';
            $('.show-modal[data-target="payment-method"]').append(iframe);
        });

        $('#back-komplemen').click(function(e) {
            e.preventDefault();
            window.location.href = "{{ url('/tiket') }}";
        });

        function formatRupiah(nominal) {
            return 'Rp ' + parseFloat(nominal).toLocaleString('id-ID');
        }

        function getNamaBulan(bulan) {
            var namaBulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
            return namaBulan[bulan];
        }
    </script>
@endsection