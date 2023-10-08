<!-- Navbar Start -->
<nav class="px-5 lg:pl-10 lg:pr-16 py-4 bg-white dark:bg-slate-800 shadow-sm flex items-center justify-between z-50">
    <div class="flex items-center justify-center gap-4">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class=" three-bars w-6 h-6 cursor-pointer">
            <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
        </svg>
        <button 
            id="darkMode-toggle" 
            class=" w-10 h-10 flex items-center justify-center rounded-full bg-sekunder-60" onclick="toggleTheme()">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-slate-50">
                <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z" />
            </svg>   
        </button>
    </div>                 
    <div class="relative">
        <div id="profile" class="flex items-center justify-center gap-3 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
            </svg>              
            <span class="hidden md:block text-sm font-medium">Administrator</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
            </svg>
        </div>
        <div id="menu-profile" class="hidden w-48 absolute top-10 right-0 mt-2 py-3 bg-white text-slate-950 z-10 dark:bg-slate-700 dark:text-slate-50 rounded-lg overflow-hidden drop-shadow-md transition-all duration-300 ease-linear">
            <div class="py-2 px-5 text-sm uppercase font-medium">Profile</div>
            <div id="modal-password" class="btn-modal py-2 px-5 flex items-center gap-2 group hover:bg-sekunder-20 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 group-hover:text-sekunder-60">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                </svg>
                <span class="text-sm text-natural-100 dark:text-slate-50 group-hover:text-sekunder-60">Ganti Password</span>
            </div>
            <a id="logout-link" class="py-2 px-5 flex items-center gap-2 group hover:bg-red-50 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 group-hover:text-red-500">
                    <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />
                </svg>
                <span class="text-sm group-hover:text-red-500">Logout</span>
            </a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
<!-- Modal Start-->
<section id="#modalAdd" class="modal-container hidden max-w-full w-full max-h-screen h-full fixed top-0 left-0 z-[100]">
    <div class="w-full h-full flex items-center justify-center px-5">
        <div id="modal-password" class="show-modal w-full max-w-full md:max-w-lg rounded-lg bg-white dark:bg-slate-700 p-4">
            <div class="w-full flex items-center justify-between relative pb-6 border-b border-slate-100">
                <strong>Ganti Password</strong>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="close-modal w-8 h-8 absolute top-0 right-0 cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>                                            
            </div>
            <div class="w-full pt-6">
                <form id="form_add" class="w-full flex flex-col items-center justify-center gap-4">
                    @csrf
                    <div class="w-full flex flex-col justify-center items-start gap-2 px-4">
                        <label for="username" class="block font-semibold text-sm">Username</label>
                        <div class="w-full">
                            <input type="text" name="username" id="username" value="" placeholder="Username" class="item-input" required>
                        </div>
                    </div>
                    <div class="w-full flex flex-col justify-center items-start gap-2 px-4">
                        <label for="password-lama" class="block font-semibold text-sm">Password lama</label>
                        <div class="w-full">
                            <input type="password" name="password-lama" id="password-lama" value="" placeholder="Password lama" class="item-input" required>
                        </div>
                    </div>
                    <div class="w-full flex flex-col justify-center items-start gap-2 px-4">
                        <label for="password-baru" class="block font-semibold text-sm">Password lama</label>
                        <div class="w-full">
                            <input type="password" name="password-baru" id="password-baru" value="" placeholder="Password baru" class="item-input" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="w-full flex item-center justify-end gap-3 mt-6">
                <button class="close-modal px-4 py-3 rounded-lg bg-slate-300 text-slate-950 text-xs hover:bg-slate-200 w-fit">                         
                    Batal
                </button>
                <button type="submit" form="form_add" class="close-modal px-4 py-3 rounded-lg text-slate-50 text-xs bg-primer-60 hover:bg-primer-80 transition-colors duration-200 ease-in-out w-fit">                         
                    Perbaharui Password
                </button>
            </div>
        </div>
    </div>
</section>
<!-- Modal End-->
<script type="text/javascript">
    function logout(){
        Swal.fire({
            title: 'Berhasil Logout!',
            text: 'Sampai jumpa lagi👋.',
            imageUrl: '{{asset('/img/STK-20230906-WA0025.webp')}}',
            imageWidth: 200,
            imageHeight: 200,
            imageAlt: 'Custom image',
            showConfirmButton: false,
            timer: 1500,
        });
        setTimeout(function() {
            window.location.href = '{{url('/logout')}}';
        }, 1000);
    }
    document.getElementById('logout-link').addEventListener('click', function (e) {
        e.preventDefault();
        logout();
    });
</script>