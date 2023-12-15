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
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">Tgl Permintaan Cuti</span>
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
            url: '{{ env('APP_SERVICE') }}get_request_cuti?id_karyawan='+username,
            type: 'GET',
            success: function(response){
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
                                historyActivity = response.history_approve;
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

                                console.log(data);
                                $('#permintaan-cuti').text('Permintaan Cuti ' + getTanggalRange(data.tanggal));
                                $('#nama-cuti').text(data.cuti);
                                $('#tgl-pengajuan').text(getTanggalRange(data.tanggal));
                                $('#keterangan').text(data.keterangan);
                                $('#tgl-permintaan').text(data.tgl_pengajuan);
                                $('#status').text(textStatus);
                                $('#note').text(data.note);

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
                                    } else if (itemCard.status === '2'){
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
                                            <span class="block font-semibold text-sm">${itemData.id_karyawan_approve}</span>
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