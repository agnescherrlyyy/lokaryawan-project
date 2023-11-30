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
        <section class="w-full flex flex-col lg:flex-row gap-4">
            <div class="w-full h-fit bg-white dark:bg-slate-800 rounded-lg mt-9">
                <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-3 px-6 py-4 border-b border-slate-200 dark:border-slate-700">
                    <span id="permintaan-cuti" class="inline-block font-semibold text-sm">Permintaan Cuti</span>
                </div>
                <div class="px-4 pt-4 pb-2">
                    <span id="nama-cuti" class="block w-fit px-3 py-2 text-center text-blue-600 bg-blue-50 rounded-full font-semibold text-xs">
                        
                    </span>
                </div>
                <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-4 px-5 pb-6 pt-2">
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400">Tanggal Pengajuan</span>
                        <span id="tgl-pengajuan" class="text-[13px] whitespace-nowrap">06/10/2023</span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400">Keterangan</span>
                        <span id="keterangan" class="text-[13px] whitespace-nowrap">06/10/2023</span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">Tgl Permintaan Cuti</span>
                        <span id="tgl-permintaan" class="text-[13px] ">12/10/2023</span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">Status</span>
                        <span id="status" class="text-[13px] ">12/10/2023</span>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <span class="text-[13px] font-semibold text-slate-600 dark:text-slate-400 whitespace-nowrap">Note</span>
                        <span id="note" class="text-[13px] ">12/10/2023</span>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white dark:bg-slate-800 rounded-lg mt-9">
                <div class="w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-3 px-6 py-4 border-b border-slate-200 dark:border-slate-700">
                    <span class="inline-block font-semibold text-sm">Log Permintaan Cuti 12/10/2023</span>
                </div>
                <div class="w-full flex flex-col px-2 py-4">
                    <div class="p-4 rounded-lg">
                        <div class="flex">
                            <div class="h-16 w-16 mr-6">
                                <img src="{{ asset('img/user.svg') }}" alt="" srcset="" class="h-full w-full">
                            </div>
                            <div class="w-full flex flex-col gap-2">
                                <span class="block font-semibold text-sm">Muh Khoirul Irvan</span>
                                <div class="w-full flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-rose-600">
                                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="font-semibold text-xs text-rose-600">Reject</span>
                                </div>
                                <p class="text-xs">Ketarangan Menolak Permintaan Cuti</p>
                                <span class="block text-xs text-gray-500 dark:text-gray-400">08/10/23 09:49</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 rounded-lg">
                        <div class="flex">
                            <div class="h-16 w-16 mr-6">
                                <img src="{{ asset('img/user.svg') }}" alt="" srcset="" class="h-full w-full">
                            </div>
                            <div class="w-full flex flex-col gap-2">
                                <span class="block font-semibold text-sm">Misbahul Munir</span>
                                <div class="w-full flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-emerald-500">
                                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="font-semibold text-xs text-emerald-600">Approved</span>
                                </div>
                                <span class="block text-xs text-gray-500 dark:text-gray-400">07/10/23 12:54</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- Permintaan Cuti Content End -->
@endsection

@section('script')
<script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/crypto-js.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        const encryptedFromData = localStorage.getItem('encryptedFromData');
        const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
        const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));

        var username = decryptedFromData.username;
        console.log(username);

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
                    console.log(lastElement);
                    let range = getTanggalRange(lastElement.tanggal);
                    let textStatus;

                    if(lastElement.status === '2'){
                        textStatus = 'Ditolak';
                    } else if(lastElement.status === '1'){
                        textStatus = 'Disetujui';
                    } else if(lastElement.status === '0'){
                        textStatus = 'Pandding';
                    }

                    $('#permintaan-cuti').text('Permintaan Cuti '+ range);
                    $('#nama-cuti').text(lastElement.cuti);
                    $('#tgl-pengajuan').text(lastElement.tgl_pengajuan);
                    $('#keterangan').text(lastElement.keterangan);
                    $('#tgl-permintaan').text(range);
                    $('#status').text(textStatus);
                    $('#note').text(lastElement.note);
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
    });
</script>
@endsection