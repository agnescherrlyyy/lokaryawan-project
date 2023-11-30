@extends('layout.main')

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

@section('script')
<script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        const encryptedFromData = localStorage.getItem('encryptedFromData');
        const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
        const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));

        var username = decryptedFromData.username;
        console.log(username);

        if(username){
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
                                iconSVG = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-sekunder-60">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z" clip-rule="evenodd" />
                                </svg>`;
                            } else if (ketReqCuti === '1'){
                                keterangan = '<span class="font-semibold text-xs text-primer-60">Disetujui</span>';
                                iconSVG = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-primer-60">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                </svg>`;
                            } else if (ketReqCuti === '2'){
                                keterangan = '<span class="font-semibold text-xs text-rose-600">Ditolak</span>';
                                iconSVG = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-rose-600">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                                </svg>`;
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
                                    <span class="block text-xs">${rangeTanggal}</span>
                                    <span class="block text-xs text-slate-600 dark:text-slate-300">${data.tgl_pengajuan}</span>
                                    <div class="w-full flex items-center gap-1">
                                        ${iconSVG}
                                        ${keterangan}
                                    </div>
                                    <p class="text-xs">${noteCuti}</p>
                                </div>
                            </div>
                            `;
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
            })
        }else{
            alert('ID Karywawan tidak tersedia');
        }

        function getTanggalRange(tanggalCuti) {
            const cleanedString = tanggalCuti.replace(/[\["\]]/g, '');
            const dateArray = cleanedString.split(',');
            const sortedDates = dateArray.sort();

            const startDateFormatted = formatTanggal(sortedDates[0]);
            const endDateFormatted = formatTanggal(sortedDates[sortedDates.length - 1]);

            return `${startDateFormatted} s/d ${endDateFormatted}`;
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