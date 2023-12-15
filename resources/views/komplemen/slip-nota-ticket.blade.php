@extends('layout.main')

@section('content')
    <section class="block pt-0 px-5 lg:pl-10 lg:pr-16">
        <div class="max-w-7xl w-full mx-auto flex justify-center bg-white dark:bg-slate-800 mt-4 py-6 rounded-xl">
            <div class="w-full lg:max-w-lg lg:w-full p-4">
                <div class="w-full p-6 mt-9 bg-slate-100 dark:bg-slate-700 rounded-lg relative">
                    <div class="w-10 h-10 rounded-full bg-white dark:bg-slate-800 absolute -top-6 left-[46%]"></div>
                    <div class="w-full flex flex-col gap-2 pb-4 border-b-2 border-gray-200">
                        <strong class="text-sm">Data Diri</strong>
                        <div class="w-full flex items-center justify-between gap-2">
                            <span class="text-sm">Tgl Kedatangan</span>
                            <span id="tgl-kedatangan" class="text-sm whitespace-nowrap"></span>
                        </div>
                        <div class="w-full flex items-center justify-between gap-2">
                            <span class="text-sm">Tgl Pengajuan</span>
                            <span id="tgl-pengajuan" class="text-sm whitespace-nowrap"></span>
                        </div>
                        <div class="w-full flex items-center justify-between gap-2">
                            <span class="text-sm">Nama</span>
                            <span id="name" class="text-sm whitespace-nowrap"></span>
                        </div>
                        <div class="w-full flex items-center justify-between gap-2">
                            <span class="text-sm">ID Karyawan</span>
                            <span id="id-karyawan" class="text-sm whitespace-nowrap"></span>
                        </div>
                        <div class="w-full flex items-center justify-between gap-2">
                            <span class="text-sm">No Telpon</span>
                            <span id="no-telp" class="text-sm whitespace-nowrap"></span>
                        </div>
                    </div>
                    <div class="w-full flex flex-col gap-2 mt-6 pb-4 border-b-2 border-dashed border-gray-200">
                        <strong class="text-sm">Detail Pembayaran</strong>
                        <div class="w-full flex items-center justify-between gap-2">
                            <span class="text-sm">Tiket</span>
                            <span id="nama-tiket" class="text-sm whitespace-nowrap"></span>
                        </div>
                        <div class="w-full flex items-center justify-between gap-2">
                            <span class="text-sm">Qty</span>
                            <span id="qty-tiket" class="text-sm whitespace-nowrap"></span>
                        </div>
                        <div class="w-full flex items-center justify-between gap-2">
                            <span class="text-sm">Subtotal</span>
                            <span id="subtotal-rp" class="text-sm whitespace-nowrap"></span>
                        </div>
                    </div>
                    <div class="w-full flex flex-col gap-2 py-4 border-b-2 border-dashed border-gray-200">
                        <div class="w-full flex items-center justify-between gap-2">
                            <span class="text-sm font-semibold">Total</span>
                            <span id="total-rp" class="font-semibold whitespace-nowrap"></span>
                        </div>
                    </div>
                    <div class="w-full my-2">
                        <button id="btn-checkout" class="btn-modal text-center px-4 py-3 w-full rounded-md font-semibold text-sm text-white mt-2 bg-primer-60 hover:bg-primer-80 transition-all duration-200 ease-in-out uppercase" data-name="payment-method">Bayar Sekarang</button>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-white dark:bg-slate-800 absolute -bottom-6 left-[46%]"></div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('modal')
<section class="modal-container hidden items-center justify-center max-w-full w-full max-h-screen h-full fixed top-0 left-0 z-[9999] p-5 overflow-auto">
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
    <script type="text/javascript">
        const encryptedFromData = localStorage.getItem('encryptedFromData');
        const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
        const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));
        var username = decryptedFromData.username;
        var idKomplemenTrn = "{{ $request['id'] }}";
        var linkPaymentMethod = "{{ $request['payment'] }}";

        $.ajax({
            url: '{{ env('APP_SERVICE') }}get_request_komplement_ByID?id_karyawan='+username+'&id_komplement_trn='+idKomplemenTrn,
            type: 'GET',
            success: function (response) {
                if(response.status === "success"){
                    var dataUser = response.data[0];
                    var dataTiketAwal = response.ticket_order;
                    var dataTiketAkhir = dataTiketAwal.length - 1;
                    var dataTiket = dataTiketAwal[dataTiketAkhir];
                    
                    var tglAwalKedatangan = dataUser.tanggal_kedatangan
                    var tglNormal = new Date(tglAwalKedatangan);
                    var tglAkhirKedatangan = tglNormal.getDate() + " " + getNamaBulan(tglNormal.getMonth()) + " " + tglNormal.getFullYear();

                    $('#tgl-kedatangan').text(tglAkhirKedatangan);
                    $('#tgl-pengajuan').text(dataUser.tanggal_pengajuan);
                    $('#name').text(dataUser.name);
                    $('#id-karyawan').text(dataUser.id_karyawan);
                    $('#no-telp').text('+'+dataUser.no_hp);

                    $('#nama-tiket').text(dataTiket.product_name);
                    $('#qty-tiket').text(dataTiket.qty);
                    $('#subtotal-rp').text(formatRupiah(dataTiket.price_unit));
                    $('#total-rp').text(formatRupiah(dataTiket.subtotal));
                } else {
                    alert(response);
                }
            },
            error: function (xhr, status, error) {
                console.log('Tidak Berhasil');
                console.log(xhr.responseText);
                alert('API BAD REQUEST');
            }
        });

        $(document).ready(function () {
            $('#btn-checkout').click(function (e) {
                e.preventDefault();
                var iframe = document.createElement('iframe');
                iframe.src = linkPaymentMethod;
                iframe.width = '100%';
                iframe.height = '100%';
                $('.show-modal[data-target="payment-method"]').append(iframe);
            });

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