@extends('layout-2.main')

@section('main-content')
    <div class="max-w-7xl w-full mx-auto flex justify-center pt-16">
        <div class="w-full lg:max-w-lg lg:w-full p-4">
            <div class="w-full flex items-center justify-between gap-3">
                <button class="btn-back">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M20.25 12a.75.75 0 01-.75.75H6.31l5.47 5.47a.75.75 0 11-1.06 1.06l-6.75-6.75a.75.75 0 010-1.06l6.75-6.75a.75.75 0 111.06 1.06l-5.47 5.47H19.5a.75.75 0 01.75.75z" clip-rule="evenodd" />
                    </svg>
                </button>
                <span class="font-semibold text-sm">Notification</span>
                <span class="font-semibold"></span>
            </div>
            <div class="w-full flex flex-col gap-2 mt-6 px-4">
                <span class="font-semibold text-xs text-slate-500 uppercase">Permintaan Cuti</span>
                
            </div>
            <div class="w-full flex flex-col gap-2 mt-6 px-4">
                <span class="font-semibold text-xs text-slate-500 uppercase">Permintaan Komplemen</span>
                {{-- <button class="w-full flex flex-col gap-2 px-4 py-3 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800">
                    <span class="font-semibold text-sm">Komplemen Tiket 100%</span>
                    <span class="block w-fit px-3 py-2 bg-indigo-50 text-indigo-500 rounded-full font-semibold text-xs">
                        Komplemen
                    </span>
                    <span class="text-sm">Yanto</span>
                    <span class="text-xs text-slate-500">17-10-2023 08:00</span>
                </button> --}}
            </div>
        </div>
    </div>
@endsection

@section('main-script')
    <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/crypto-js.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // var username = 6741;

            const encryptedFromData = localStorage.getItem('encryptedFromData');
            const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
            const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));

            var username = decryptedFromData.username;

            $(".btn-dashboard").click(function (e) {
                e.preventDefault();
                window.location.href = "/dashboard";
            });

            $('.btn-back').click(function (e) {
                e.preventDefault();
                history.back();
            });

            $.ajax({
                url: '{{ env('APP_SERVICE') }}get_notif_approve?id_karyawan=' + username,
                type: 'GET',
                success: function (response) {
                    if (response.status === 'success') {
                        const dataCuti = response.dataCuti;
                        const container = document.querySelector('.w-full.flex.flex-col.gap-2.mt-6.px-4');

                        dataCuti.forEach(function(cutiData) {
                            const tanggalArray = cutiData.tanggal.split(',');
                            const tanggalFormatted = tanggalArray.join(', ').replace(/["\[\]]/g, '');

                            const button = document.createElement('button');
                            button.className = 'approved-cuti w-full flex flex-col gap-2 px-4 py-3 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800';
                            button.setAttribute('data-id', cutiData.id);
                            button.setAttribute('data-id_cuti_trn', cutiData.id_cuti_trn);
                            button.innerHTML = `
                                <span class="font-semibold text-sm">Pengajuan Cuti ${tanggalFormatted}</span>
                                <span class="block w-fit px-3 py-2 bg-blue-50 text-blue-600 rounded-full font-semibold text-xs">
                                    ${cutiData.cuti}
                                </span>
                                <span class="text-sm">${cutiData.name}</span>
                                <span class="text-xs text-slate-500">${cutiData.tgl_pengajuan}</span>
                            `;
                            container.appendChild(button);
                        });
                    }
                },
                error: function() {
                    alert('Response Tidak Terdeteksi');
                }
            });

            $('.w-full.flex.flex-col.gap-2.px-4').on('click', '.approved-cuti', function (e) {
                e.preventDefault();
                var id = $(this).data('id');
                var id_cuti_trn = $(this).data('id_cuti_trn');
                window.location.href = `{{ url('/approved-cuti') }}?id=${id}&id_cuti_trn=${id_cuti_trn}`;
            });
        });
    </script>
@endsection

