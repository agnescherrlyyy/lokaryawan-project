@extends('layout.main')

@section('content')
    <section class="block pt-0 px-5 lg:pl-10 lg:pr-10 mt-9">
        <div class="w-full flex items-center gap-1 pb-4">
            <a href="{{ url('/dashboard') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 text-slate-400 dark:text-slate-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-4 h-4 text-slate-400 dark:text-slate-500">
                <path fill-rule="evenodd"
                    d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
                    clip-rule="evenodd" />
            </svg>
            <a href="{{ url('/tiket') }}" class="font-medium text-sm text-slate-400 dark:text-slate-500">Komplemen</a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-primer-60">
                <path fill-rule="evenodd"
                    d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
                    clip-rule="evenodd" />
            </svg>
        </div>
        <div class="max-w-7xl w-full mx-auto flex justify-center bg-white dark:bg-slate-800 mt-4 py-6 rounded-xl">
            <div class="w-full lg:max-w-lg lg:w-full p-4">
                <div class="w-full p-6 mt-9 bg-primer-60 text-slate-100 rounded-lg relative">
                    <div class="w-10 h-10 rounded-full bg-white dark:bg-slate-800 absolute -top-6 left-[46%]"></div>
                    <div class="w-full flex items-center justify-center my-6">
                        <img src="{{ asset('img/favicon.png') }}" alt="" class="w-24 h-auto">
                    </div>
                    <div class="w-full flex flex-col gap-2 pb-4 border-b-2 border-dashed border-gray-200">
                        <strong class="text-sm tracking-widest">Detail Kode Booking</strong>
                        <div class="w-full flex items-center justify-between gap-4">
                            <span class="text-sm">Type Komplemen</span>
                            <span id="type" class="text-sm text-right"></span>
                        </div>
                        <div class="w-full flex items-center justify-between gap-4">
                            <span class="text-sm">Total Qty</span>
                            <span id="qty" class="text-sm text-right"></span>
                        </div>
                        <div class="w-full flex items-center justify-between gap-4">
                            <span class="text-sm">Tgl Kedatangan</span>
                            <span id="tgl-kedatangan" class="text-sm text-right"></span>
                        </div>
                    </div>
                    <div
                        class="w-full flex flex-col items-center justify-center gap-2 py-4 border-b-2 border-dashed border-gray-200 pb-4">
                        <span id="kode-booking" class="font-semibold tracking-widest whitespace-nowrap"></span>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-white dark:bg-slate-800 absolute -bottom-6 left-[46%]"></div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            const encryptedFromData = localStorage.getItem('encryptedFromData');
            const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
            const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));

            var username = decryptedFromData.username;

            $.ajax({
                url: '{{ env('APP_SERVICE') }}get_request_komplement_karyawan?id_karyawan=' + username,
                type: 'GET',
                async: false,
                success: function(response) {
                    if (response.status === 'success') {
                        let data = response.data;
                        let lastIndex = data.length - 1;
                        let lastElement = data[lastIndex];
                        let idKomplemenTrn = lastElement.id_komplemen_trn;

                        $.ajax({
                            url: '{{ env('APP_SERVICE') }}get_request_komplement_comingSoon?id_karyawan=' +
                                username,
                            type: 'GET',
                            async: false,
                            success: function(response) {
                                if (response.status === 'success') {
                                    console.log(response);
                                    let dataKomplemen = response.data;
                                    var textStatus;
                                    var kodeBooking;
                                    var typeKomplemen;
                                    var textTypeKomplemen;

                                    if (response.data ===
                                        "Data Request Komplemen Karyawan Tidak Ditemukan" ||
                                        response.data === null) {
                                        typeKomplemen = '-';
                                    } else if (response.data !==
                                        "Data Request Komplemen Karyawan Tidak Ditemukan" ||
                                        response.data !== null) {
                                        typeKomplemen = JSON.parse(dataKomplemen
                                            .ticket_order);
                                        if (typeKomplemen.length === 1) {
                                            textTypeKomplemen = typeKomplemen[0]
                                                .product_name;
                                        } else if (typeKomplemen.length === 2) {
                                            textTypeKomplemen = typeKomplemen[0]
                                                .product_name + ' & ' + typeKomplemen[1]
                                                .product_name;
                                        }
                                    }

                                    if (dataKomplemen.status === "0") {
                                        textStatus = 'Sedang Diproses';
                                    } else if (dataKomplemen.status === "1") {
                                        textStatus = 'Sukes';
                                    } else if (dataKomplemen.status === "2") {
                                        textStatus = 'Menunggu Pembayaran';
                                    } else if (dataKomplemen.status === "3") {
                                        textStatus = 'Dibatalkan/Expired';
                                    }

                                    if (dataKomplemen.kode_booking === "null") {
                                        kodeBooking = textStatus;
                                    } else if (dataKomplemen.kode_booking !== "") {
                                        kodeBooking = dataKomplemen.kode_booking;
                                    }

                                    $('#qty').text(dataKomplemen.qty_total);
                                    $('#tgl-kedatangan').text(getTanggalRange(dataKomplemen
                                        .tanggal_kedatangan));
                                    $('#kode-booking').text(kodeBooking);
                                    $('#type').text(textTypeKomplemen);
                                } else {
                                    console.log(response);
                                    alert('Gagal Mengambil Data Dari API');
                                }
                            },
                            error: function(erorr) {
                                console.log(erorr);
                                alert('API BAD REQUEST');
                            }
                        });

                    } else {
                        console.log(response);
                        alert('Gagal Mengambil Data Dari API');
                    }
                },
                error: function(erorr) {
                    console.log(erorr);
                    alert('API BAD REQUEST');
                }
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
    </script>
@endsection
