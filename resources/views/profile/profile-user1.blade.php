@extends('layout.main')

@section('content')
    <section class="block pt-0 px-5 lg:pl-10 lg:pr-16">
        <div class="max-w-7xl w-full mx-auto flex justify-center bg-white dark:bg-slate-800 mt-4 py-6 rounded-xl">
            <div class="w-full lg:max-w-lg lg:w-full">
                <div class="w-full flex flex-row items-center justify-center">
                    <div class="max-w-sm w-full flex items-center gap-3 px-4">
                        <div class="w-24 h-24 flex items-center justify-center rounded-full overflow-hidden">
                            <img src="{{ asset('img/STK-20230906-WA0007.png') }}" alt="" class="">
                        </div>
                        <div class="w-full flex flex-col gap-1 pb-2">
                            <strong class="">{{ session('name') }}</strong>
                            <div class="w-full flex gap-2">
                                <span id="departemen" class="text-sm font-medium text-slate-500 dark:text-slate-400"></span>
                                <span class="text-sm font-medium text-slate-500 dark:text-slate-400">&mdash;</span>
                                <span id="sub-departemen" class="text-sm font-medium text-slate-500 dark:text-slate-400"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full flex flex-col items-center justify-center gap-6 mt-2">
                    <div class="max-w-sm w-full flex flex-col items-center px-4">
                        <div class="max-w-sm w-full flex flex-col p-4 border border-gray-300 dark:border-gray-600 rounded-lg">
                            <span class="font-semibold text-xs mb-2 text-slate-500 dark:text-slate-400">Detail Profile</span>
                            <div class="w-full flex flex-col gap-3">
                                <div class="w-full flex flex-col gap-2">
                                    <span class="text-xs text-slate-600 dark:text-slate-300">ID Absen</span>
                                    <strong id="id-absen" class="text-xs"></strong>
                                </div>
                                <div class="w-full flex flex-col gap-2">
                                    <span class="text-xs text-slate-600 dark:text-slate-300">NIK</span>
                                    <strong id="nik" class="text-xs"></strong>
                                </div>
                                <div class="w-full flex flex-col gap-2">
                                    <span class="text-xs text-slate-600 dark:text-slate-300">Nomor WhatsApp</span>
                                    <strong id="nomorwa" class="text-xs"></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-sm w-full flex flex-col it justify-center px-4">
                        <span class="font-semibold text-xs mb-2 text-slate-500 dark:text-slate-400">Setting Profile</span>
                        <div class="w-full flex flex-col gap-4">
                            <button class="btn-modal w-full px-4 py-4 font-medium text-xs flex items-center justify-between gap-2 rounded-lg bg-blue-100 hover:bg-blue-200 dark:bg-blue-400 hover:dark:bg-blue-500" data-name="modal-password">
                                <span class="w-full flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                        <path fill-rule="evenodd" d="M15.75 1.5a6.75 6.75 0 00-6.651 7.906c.067.39-.032.717-.221.906l-6.5 6.499a3 3 0 00-.878 2.121v2.818c0 .414.336.75.75.75H6a.75.75 0 00.75-.75v-1.5h1.5A.75.75 0 009 19.5V18h1.5a.75.75 0 00.53-.22l2.658-2.658c.19-.189.517-.288.906-.22A6.75 6.75 0 1015.75 1.5zm0 3a.75.75 0 000 1.5A2.25 2.25 0 0118 8.25a.75.75 0 001.5 0 3.75 3.75 0 00-3.75-3.75z" clip-rule="evenodd" />
                                    </svg>
                                    Ganti Password
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button class="btn-modal w-full px-4 py-4 font-medium text-xs flex items-center justify-between gap-2 rounded-lg bg-blue-100 hover:bg-blue-200 dark:bg-blue-400 hover:dark:bg-blue-500" data-name="password">
                                <span class="w-full flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                        <path fill-rule="evenodd" d="M15.75 1.5a6.75 6.75 0 00-6.651 7.906c.067.39-.032.717-.221.906l-6.5 6.499a3 3 0 00-.878 2.121v2.818c0 .414.336.75.75.75H6a.75.75 0 00.75-.75v-1.5h1.5A.75.75 0 009 19.5V18h1.5a.75.75 0 00.53-.22l2.658-2.658c.19-.189.517-.288.906-.22A6.75 6.75 0 1015.75 1.5zm0 3a.75.75 0 000 1.5A2.25 2.25 0 0118 8.25a.75.75 0 001.5 0 3.75 3.75 0 00-3.75-3.75z" clip-rule="evenodd" />
                                    </svg>
                                    Ganti PIN
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button class="btn-modal w-full px-4 py-4 font-medium text-xs flex items-center justify-between gap-2 rounded-lg bg-blue-100 hover:bg-blue-200 dark:bg-blue-400 hover:dark:bg-blue-500" data-name="modal-whatsapp">
                                <span class="w-full flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                    </svg>
                                    <span id="tambah-wa">Tambahkan Nomor</span>
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('modal')
<section class="modal-container hidden items-center justify-center max-w-full w-full max-h-screen h-full fixed top-0 left-0 z-[9999] px-5">
    <div class="show-modal w-full max-w-full md:max-w-lg rounded-lg bg-white dark:bg-slate-700 p-4" data-target="modal-password">
        <div class="w-full flex items-center justify-between relative pb-6 border-b border-slate-100">
            <strong>Ganti Password</strong>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="close-modal w-8 h-8 absolute top-0 right-0 cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>                                            
        </div>
        <div class="w-full pt-6">
            <form id="form_add" class="w-full flex flex-col items-center justify-center gap-4">
                @csrf
                <div class="w-full flex flex-col justify-center items-start gap-2 px-4 relative">
                    <label for="password-lama" class="block font-semibold text-xs">Password Lama</label>
                    <div class="w-full">
                        <input type="password" name="password-lama" id="password-lama" value="" placeholder="Masukan Password Lama" class="item-input" maxlength="12" required>
                    </div>
                    <div id="show-pw-lama" class="absolute right-6 top-9 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-slate-700 dark:text-slate-50">
                            <path d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z" />
                            <path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z" />
                            <path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z" />
                        </svg>
                    </div>
                </div>
                <div class="w-full flex flex-col justify-center items-start gap-2 px-4 relative">
                    <label for="password-baru" class="block font-semibold text-xs">Password Baru</label>
                    <div class="w-full">
                        <input type="password" name="password-baru" id="password-baru" value="" placeholder="Masukan Password Baru" class="item-input" maxlength="12" required>
                    </div>
                    <div id="show-pw-baru" class="absolute right-6 top-9 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-slate-700 dark:text-slate-50">
                            <path d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z" />
                            <path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z" />
                            <path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z" />
                        </svg>
                    </div>
                </div>
            </form>
        </div>
        <div class="w-full flex item-center justify-end gap-3 mt-6">
            <button class="close-modal px-4 py-3 rounded-lg bg-slate-300 text-slate-950 text-xs hover:bg-slate-200 w-fit">                         
                Batal
            </button>
            <button id="btn-up-password" type="submit" form="form_add" class="close-modal px-4 py-3 rounded-lg text-slate-50 text-xs bg-primer-60 hover:bg-primer-80 transition-colors duration-200 ease-in-out w-fit">                         
                Perbaharui Password
            </button>
        </div>
    </div>

    <div class="show-modal w-full max-w-full md:max-w-lg rounded-lg bg-white dark:bg-slate-700 p-4" data-target="password">
        <div class="w-full flex items-center justify-between relative pb-6 border-b border-slate-100">
            <strong>Ganti PIN</strong>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="close-modal w-8 h-8 absolute top-0 right-0 cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>                                            
        </div>
        <div class="w-full pt-6">
            <form id="from-password" class="w-full flex flex-col items-center justify-center gap-4">
                @csrf
                <div class="w-full flex flex-col justify-center items-start gap-2 px-4 relative">
                    <label for="pw-lama-gaji" class="block font-semibold text-xs">PIN Lama</label>
                    <div class="w-full">
                        <input type="password" name="pw-lama-gaji" id="pw-lama-gaji" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 6)" value="" placeholder="Masukan PIN Lama" class="item-input" maxlength="6" required>
                    </div>
                    <div id="show-pin-lama" class="absolute right-6 top-9 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-slate-700 dark:text-slate-50">
                            <path d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z" />
                            <path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z" />
                            <path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z" />
                        </svg>
                    </div>
                </div>
                <div class="w-full flex flex-col justify-center items-start gap-2 px-4 relative">
                    <label for="pw-baru-gaji" class="block font-semibold text-xs">PIN Baru</label>
                    <div class="w-full">
                        <input type="password" name="pw-baru-gaji" id="pw-baru-gaji" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 6)" value="" placeholder="Masukan PIN Baru" class="item-input" maxlength="6" required>
                    </div>
                    <div id="show-pin-baru" class="absolute right-6 top-9 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-slate-700 dark:text-slate-50">
                            <path d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z" />
                            <path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z" />
                            <path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z" />
                        </svg>
                    </div>
                </div>
            </form>
            <div class="px-4 mt-2">
                <span class="text-sm text-blue-500 dark:text-blue-300">*PIN Harus Berupa 6 Digit Angka</span>
            </div>
        </div>
        <div class="w-full flex item-center justify-end gap-3 mt-6">
            <button class="close-modal px-4 py-3 rounded-lg bg-slate-300 text-slate-950 text-xs hover:bg-slate-200 w-fit">                         
                Batal
            </button>
            <button id="btn-ganti-PIN" type="submit" form="from-password" class="close-modal px-4 py-3 rounded-lg text-slate-50 text-xs bg-primer-60 hover:bg-primer-80 transition-colors duration-200 ease-in-out w-fit">                         
                Perbaharui PIN
            </button>
        </div>
    </div>

    <div class="show-modal w-full max-w-full md:max-w-lg rounded-lg bg-white dark:bg-slate-700 p-4" data-target="modal-whatsapp">
        <div class="w-full flex items-center justify-between relative pb-6 border-b border-slate-100">
            <strong>Masukan Nomor WhatsApp</strong>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="close-modal w-8 h-8 absolute top-0 right-0 cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>                                            
        </div>
        <div class="w-full pt-6">
            <form id="data-whatsapp" class="w-full flex flex-col items-center justify-center gap-4">
                @csrf
                <div class="w-full flex flex-col justify-center items-start gap-2 px-4">
                    <label for="nomor-whatsapp" class="block font-semibold text-xs">Nomor WhatsApp</label>
                    <div class="w-full">
                        <input type="number" name="nomor-whatsapp" id="nomor-whatsapp" value="" placeholder="Masukan Nomor Whatsapp Disini" class="item-input" required>
                    </div>
                </div>
            </form>
        </div>
        <div class="w-full flex item-center justify-end gap-3 mt-6">
            <button class="close-modal px-4 py-3 rounded-lg bg-slate-300 text-slate-950 text-xs hover:bg-slate-200 w-fit">                         
                Batal
            </button>
            <button id="btn-up-whatsapp" type="submit" form="data-whatsapp" class="close-modal px-4 py-3 rounded-lg text-slate-50 text-xs bg-primer-60 hover:bg-primer-80 transition-colors duration-200 ease-in-out w-fit">                         
                Masukan Nomor WA
            </button>
        </div>
    </div>
    {{-- <div class="w-full h-full flex items-center justify-center px-5">
    </div> --}}
</section>
@endsection

@section('script')
    <script src="{{ asset('js/crypto-js.js') }}"></script>
    <script src="{{ asset('js/scriptModal.js') }}"></script>
    <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            const encryptedFromData = localStorage.getItem('encryptedFromData');
            const decryptedBytes = CryptoJS.AES.decrypt(encryptedFromData, '{{ env('APP_KEY') }}');
            const decryptedFromData = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));
            const iconShowPW = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-slate-700 dark:text-slate-50">
            <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
            <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
            </svg>`;
            const iconHidePW = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-slate-700 dark:text-slate-50">
            <path d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z" />
            <path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z" />
            <path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z" />
            </svg>`;

            var username = decryptedFromData.username;

            $('.btn-dashboard').click(function (e) {
                e.preventDefault();
                window.location.href = '{{url("/dashboard")}}';
            });

            $('.btn-back').click(function (e) {
                e.preventDefault();
                history.back();
            });

            $('#btn-up-password').click(function (e) {
                e.preventDefault();

                const passwordLama = $('#password-lama').val();
                const passwordBaru = $('#password-baru').val();

                const data = {
                    username: username,
                    password_lama: passwordLama,
                    password_baru: passwordBaru
                };

                $('#password-lama').val('');
                $('#password-baru').val(''); 

                if(!passwordBaru || !passwordLama){
                    Swal.fire({
                        title: 'Penting!',
                        text: 'Harap Mengisi Kolom Password Lama dan Password Baru',
                        imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                        imageWidth: 200,
                        imageHeight: 200,
                        imageAlt: 'Custom image',
                        showConfirmButton: false,
                        timer: 1200,
                    });
                    return;
                }

                Swal.fire({
                    title: 'Loading!',
                    text: 'Data Update Process',
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                    },
                });

                $.ajax({
                    url: '{{ env('APP_API') }}edit_password',
                    type: 'POST',
                    data: data,
                    success: function (response) {
                        if (response.status === "success") {
                            Swal.close();
                            Swal.fire({
                                title: 'Sukses',
                                text: 'Memperbaharui Password Berhasil',
                                imageUrl: '{{asset('/img/STK-20230906-WA0035.webp')}}',
                                imageWidth: 200,
                                imageHeight: 200,
                                imageAlt: 'Custom image',
                                showConfirmButton: false,
                                timer: 1200,
                            }).then(() => {
                                $('#password-lama').val('');
                                $('#password-baru').val('');
                            });
                        } else {
                            Swal.close();
                            Swal.fire({
                                title: 'Oops!',
                                text: 'Pastikan Password Lama Benar',
                                imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                                imageWidth: 200,
                                imageHeight: 200,
                                imageAlt: 'Custom image',
                                showConfirmButton: false,
                                timer: 1200,
                            });
                        }
                    },
                    error: function (error) {
                        console.error('Error updating data:', error);
                    }
                });
            });

            $('#btn-ganti-PIN').click(function (e) {
                e.preventDefault();

                const pwLama = $('#pw-lama-gaji').val();
                const pwBaru = $('#pw-baru-gaji').val();

                $('#pw-lama-gaji').val('');
                $('#pw-baru-gaji').val(''); 

                if(!pwLama || !pwBaru){
                    Swal.fire({
                        title: 'Penting!',
                        text: 'Harap Mengisi kolom PIN Lama dan PIN Baru',
                        imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                        imageWidth: 200,
                        imageHeight: 200,
                        imageAlt: 'Custom image',
                        showConfirmButton: false,
                        timer: 1200,
                    });
                    return;
                }

                Swal.fire({
                    title: 'Loading!',
                    text: 'Data Update Process',
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                    },
                });

                $.ajax({
                    url: '{{ url("/profile-user/update-pin") }}',
                    type: 'POST',
                    data: {
                        username: username,
                        password_lama: pwLama,
                        password_baru: pwBaru,
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function (response) {
                        if (response.status === "success") {
                            Swal.close();
                            Swal.fire({
                                title: 'Sukses',
                                text: 'Memperbaharui PIN Berhasil',
                                imageUrl: '{{asset('/img/STK-20230906-WA0035.webp')}}',
                                imageWidth: 200,
                                imageHeight: 200,
                                imageAlt: 'Custom image',
                                showConfirmButton: false,
                                timer: 1200,
                            }).then(() => {
                                $('#pw-lama-gaji').val('');
                                $('#pw-baru-gaji').val('');
                            });
                        } else {
                            Swal.close();
                            Swal.fire({
                                title: 'Oops!',
                                text: 'Pastikan PIN Lama Benar',
                                imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                                imageWidth: 200,
                                imageHeight: 200,
                                imageAlt: 'Custom image',
                                showConfirmButton: false,
                                timer: 1200,
                            });
                        }
                    },
                    error: function (error) {
                        console.error('Error updating data:', error);
                    }
                });
            });

            if(username){
                $.ajax({
                    url:'{{ env('APP_API') }}get_karyawan_byID?id_karyawan='+username,
                    type: "GET",
                    success: function(response){
                        if(response.status === 'success'){
                            var data = response.data[0];
                            $('#departemen').text(data.departemen);
                            $('#sub-departemen').text(data.sub_departemen);
                            $('#id-absen').text(data.id_absen);
                            $('#nomorwa').text(data.no_hp);
                            $('#nik').text(data.username);

                            if (data.no_hp === '') {
                                $('#btn-up-whatsapp').click(function (e) {
                                    e.preventDefault();
                                    var nomoWA = $('#nomor-whatsapp').val();
                                    if (!nomoWA) {
                                        Swal.fire({
                                            title: 'Penting!',
                                            text: 'Nomor WhatsApp Wajib Diisi',
                                            imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                                            imageWidth: 200,
                                            imageHeight: 200,
                                            imageAlt: 'Custom image',
                                            showConfirmButton: false,
                                            timer: 1200,
                                        });
                                        return;
                                    }

                                    const nomoWAUpdated = nomoWA.replace(/^0/, '62');
                                    const dataUbahWA = {
                                        id_karyawan : data.username,
                                        no_hp: nomoWAUpdated
                                    }

                                    Swal.fire({
                                        title: 'Loading!',
                                        text: 'Data Update Process',
                                        timerProgressBar: true,
                                        didOpen: () => {
                                            Swal.showLoading()
                                        },
                                    });

                                    $.ajax({
                                        url: 'https://lokahr.salokapark.app/api/update_nohandphone',
                                        type: 'POST',
                                        data: dataUbahWA,
                                        success: function (response) {
                                            if (response.status === "success") {
                                                Swal.close();
                                                $('#nomorwa').text(nomoWAUpdated);
                                                Swal.fire({
                                                    title: 'Sukses',
                                                    text: 'Memperbaharui Nomor WhatsApp Berhasil',
                                                    imageUrl: '{{asset('/img/STK-20230906-WA0035.webp')}}',
                                                    imageWidth: 200,
                                                    imageHeight: 200,
                                                    imageAlt: 'Custom image',
                                                    showConfirmButton: false,
                                                    timer: 1200,
                                                }).then(() => {
                                                    $('#nomor-whatsapp').val('');
                                                });
                                            }else {
                                                Swal.close();
                                                Swal.fire({
                                                    title: 'Oops!',
                                                    text: 'Gagal Memperbaharui Nomor WhatsApp, Silahkan Coba Lagi',
                                                    imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                                                    imageWidth: 200,
                                                    imageHeight: 200,
                                                    imageAlt: 'Custom image',
                                                    showConfirmButton: false,
                                                    timer: 1200,
                                                });
                                            }
                                        },
                                        error: function (error) {
                                            console.error('Error updating data:', error);
                                        }
                                    })
                                });
                            } else if (data.no_hp !== '') {
                                $('#tambah-wa').text('Edit Nomor');
                                $('#btn-up-whatsapp').click(function (e) {
                                    e.preventDefault();
                                    
                                    var nomoWA = $('#nomor-whatsapp').val();
                                    
                                    if (!nomoWA) {
                                        Swal.fire({
                                            title: 'Penting!',
                                            text: 'Nomor WhatsApp Wajib Diisi',
                                            imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                                            imageWidth: 200,
                                            imageHeight: 200,
                                            imageAlt: 'Custom image',
                                            showConfirmButton: false,
                                            timer: 1200,
                                        });
                                        return;
                                    }

                                    const nomoWAUpdated = nomoWA.replace(/^0/, '62');
                                    const dataUbahWA = {
                                        id_karyawan : data.username,
                                        no_hp: nomoWAUpdated
                                    }

                                    Swal.fire({
                                        title: 'Loading!',
                                        text: 'Data Update Process',
                                        timerProgressBar: true,
                                        didOpen: () => {
                                            Swal.showLoading()
                                        },
                                    });

                                    $.ajax({
                                        url: 'https://lokahr.salokapark.app/api/update_nohandphone',
                                        type: 'POST',
                                        data: dataUbahWA,
                                        success: function (response) {
                                            if (response.status === "success") {
                                                Swal.close();
                                                $('#nomorwa').text(nomoWAUpdated);
                                                Swal.fire({
                                                    title: 'Sukses',
                                                    text: 'Memperbaharui Nomor WhatsApp Berhasil',
                                                    imageUrl: '{{asset('/img/STK-20230906-WA0035.webp')}}',
                                                    imageWidth: 200,
                                                    imageHeight: 200,
                                                    imageAlt: 'Custom image',
                                                    showConfirmButton: false,
                                                    timer: 1200,
                                                }).then(() => {
                                                    $('#nomor-whatsapp').val('');
                                                });
                                            }else {
                                                Swal.close();
                                                Swal.fire({
                                                    title: 'Oops!',
                                                    text: 'Gagal Memperbaharui Nomor WhatsApp, Silahkan Coba Lagi',
                                                    imageUrl: '{{ asset('img/STK-20230906-WA0006.webp') }}',
                                                    imageWidth: 200,
                                                    imageHeight: 200,
                                                    imageAlt: 'Custom image',
                                                    showConfirmButton: false,
                                                    timer: 1200,
                                                });
                                            }
                                        },
                                        error: function (error) {
                                            console.error('Error updating data:', error);
                                        }
                                    })
                                });
                            }
                        }
                    },
                    error: function(){
                        alert('Gagal Mengambil Data');
                    }
                });
            }else{
                alert('ID Karywawan tidak tersedia');
            }

            $('#show-pin-lama').click(function (e) {
                e.preventDefault();
                var showPIN = $('#pw-lama-gaji');
                var icon = $('#show-pin-lama');
                if (showPIN.attr('type') === 'password') {
                    showPIN.attr('type', 'text');
                    icon.html(iconShowPW);
                } else {
                    showPIN.attr('type', 'password');
                    icon.html(iconHidePW);
                }
            });
            $('#show-pin-baru').click(function (e) {
                e.preventDefault();
                var showPIN = $('#pw-baru-gaji');
                var icon = $('#show-pin-baru');
                if (showPIN.attr('type') === 'password') {
                    showPIN.attr('type', 'text');
                    icon.html(iconShowPW);
                } else {
                    showPIN.attr('type', 'password');
                    icon.html(iconHidePW);
                }
            });
            $('#show-pw-lama').click(function (e) {
                e.preventDefault();
                var showPW = $('#password-lama');
                var icon = $('#show-pw-lama');
                if (showPW.attr('type') === 'password') {
                    showPW.attr('type', 'text');
                    icon.html(iconShowPW);
                } else {
                    showPW.attr('type', 'password');
                    icon.html(iconHidePW);
                }
            });
            $('#show-pw-baru').click(function (e) {
                e.preventDefault();
                var showPW = $('#password-baru');
                var icon = $('#show-pw-baru');
                if (showPW.attr('type') === 'password') {
                    showPW.attr('type', 'text');
                    icon.html(iconShowPW);
                } else {
                    showPW.attr('type', 'password');
                    icon.html(iconHidePW);
                }
            });
        });

        $(document).on('click', '#modal-edit', function () {
            $('#edit-modal').css('display', 'block');
        });
    </script>
@endsection