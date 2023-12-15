@extends('layout.main')

@section('content')
    <!-- Heading Start -->
    <div class="max-w-full w-full px-10 lg:pl-10 lg:pr-16 lg:flex lg:items-start lg:justify-between py-4 bg-white dark:bg-slate-800">
        <div class="w-full">
            <h1 class="font-semibold text-xl mb-2">Notification</h1>
            <h4 class="font-medium text-slate-600 dark:text-slate-300">Notification</h4>
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
            <button class="font-medium text-sm text-primer-60">Notification</button>
        </div>
        <div class="w-full">
            <div class="w-full bg-white dark:bg-slate-800 rounded-lg mt-9">
                <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-3 px-6 py-6 border-b border-slate-200 dark:border-slate-700">
                    <span class="inline-block font-semibold text-sm">Notification List</span>
                </div>
                <div class="w-full flex flex-col gap-4 py-4 px-4 xl:px-6">
                    <span class="inline-block font-semibold text-sm">Notification Cuti</span>
                    <div id="container-notification" class="w-full grid grid-cols-1 md:grid-cols-2 gap-4 bg-white dark:bg-slate-800 rounded-b-2xl">
                    </div>
                </div>
                <div class="w-full flex flex-col gap-4 py-4 px-4 xl:px-6">
                    <span class="inline-block font-semibold text-sm">Notification Lembur</span>
                    <div id="container-lembur" class="w-full grid grid-cols-1 md:grid-cols-2 gap-4 bg-white dark:bg-slate-800 rounded-b-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Riwayat Cuti Content End -->
@endsection

@section('script')
    <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/crypto-js.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function (){

            const encryptedFromData = localStorage.getItem('encryptedFromData');
            const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
            const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));

            var username = decryptedFromData.username;

            $.ajax({
                url: '{{ env('APP_SERVICE') }}get_notif_approve?id_karyawan=' + username,
                type: 'GET',
                success: function (response) {
                    if (response.status === 'success') {
                        const dataCuti = response.dataCuti;
                        const dataLembur = response.dataLembur;
                        const cardContainer = document.getElementById('container-notification');
                        const cardContainerLembur = document.getElementById('container-lembur');

                        if (Array.isArray(dataCuti)){
                            dataCuti.forEach(function(cutiData){
                                const rangeTanggal = getTanggalRange(cutiData.tanggal);
                                const tipeCuti = cutiData.cuti;
                                let colorTextCuti;
                                if (tipeCuti === 'Cuti Tahunan'){
                                    colorTextCuti = `bg-blue-50 text-blue-600`;
                                } else if (tipeCuti !== 'Cuti Tahunan'){
                                    colorTextCuti = `bg-sekunder-20 text-sekunder-60`;
                                }
    
                                const button = document.createElement('button');
                                button.className = 'approved-cuti w-full flex flex-col gap-2 px-4 py-3 rounded-lg border border-slate-100 dark:border-slate-600 hover:bg-slate-50 dark:hover:bg-slate-700';
    
                                button.setAttribute('data-id', cutiData.id);
                                button.setAttribute('data-id_cuti_trn', cutiData.id_cuti_trn);
                                button.innerHTML = `
                                    <span class="block text-left font-semibold text-xs">Pengajuan Cuti ${rangeTanggal}</span>
                                    <span class="block w-fit px-3 py-2 ${colorTextCuti} rounded-full font-semibold text-xs">
                                        ${cutiData.cuti}
                                    </span>
                                    <span class="text-sm">${cutiData.name}</span>
                                    <span class="text-xs">${cutiData.keterangan}</span>
                                    <span class="text-xs text-slate-600 dark:text-slate-300">${cutiData.tgl_pengajuan}</span>
                                `;
    
                                cardContainer.appendChild(button);
                            });
                        }

                        if (Array.isArray(dataLembur)){
                            dataLembur.forEach(function(lemburData){
                                const tanggalLembur = formatTanggal(lemburData.tgl_lembur);
                                const button = document.createElement('button');
    
                                button.className = 'approved-lembur w-full flex flex-row gap-4 px-4 py-3 rounded-lg border border-slate-100 dark:border-slate-600 hover:bg-slate-50 dark:hover:bg-slate-700';
                                button.setAttribute('data-id', lemburData.id);
                                button.setAttribute('data-id_overtime', lemburData.id_overtime);
    
                                button.innerHTML = `<div class= "w-12 h-12 overflow-hidden rounded-full">
                                    <img src="{{ asset('img/lembur.svg') }}" alt="avatar" class="w-full h-full object-cover">
                                </div>
                                <div class="flex flex-col items-start gap-2">
                                    <span class="block text-left font-semibold text-xs">Pengajuan Lembur ${tanggalLembur}</span>
                                    <span class="text-sm">${lemburData.name}</span>
                                    <span class="text-xs">${tanggalLembur}</span>
                                    <span class="text-xs text-slate-600 dark:text-slate-300">${lemburData.tgl_pengajuan}</span>
                                </div>
                                `;
    
                                cardContainerLembur.appendChild(button);
                            });
                        }

                    }else{
                        alet('Tidak Berhasil Mengambil Data Dari API');
                    }
                },
                error: function () {
                    alet('URL Dari API Bermasalah!');
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

            $('#container-notification').on('click', '.approved-cuti', function (e) {
                e.preventDefault();
                console.log('Clicked');
                var id = $(this).data('id');
                var id_cuti_trn = $(this).data('id_cuti_trn');
                window.location.href = `{{ url('/approved-cuti') }}?id=${id}&id_cuti_trn=${id_cuti_trn}`;
            });

            $('#container-lembur').on('click', '.approved-lembur', function (e) {
                e.preventDefault();
                var id = $(this).data('id');
                var id_overtime = $(this).data('id_overtime');
                console.log(id);
                console.log(id_overtime);
                window.location.href = `{{ url('/approved-lembur') }}?id=${id}&id_overtime=${id_overtime}`;
            });
        });
    </script>
@endsection