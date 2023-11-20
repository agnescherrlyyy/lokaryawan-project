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
    <div class="w-fit flex items-center gap-4">
        <button id="notification" class="w-fit flex">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-slate-800 dark:text-slate-50">
                <path d="M5.85 3.5a.75.75 0 00-1.117-1 9.719 9.719 0 00-2.348 4.876.75.75 0 001.479.248A8.219 8.219 0 015.85 3.5zM19.267 2.5a.75.75 0 10-1.118 1 8.22 8.22 0 011.987 4.124.75.75 0 001.48-.248A9.72 9.72 0 0019.266 2.5z" />
                <path fill-rule="evenodd" d="M12 2.25A6.75 6.75 0 005.25 9v.75a8.217 8.217 0 01-2.119 5.52.75.75 0 00.298 1.206c1.544.57 3.16.99 4.831 1.243a3.75 3.75 0 107.48 0 24.583 24.583 0 004.83-1.244.75.75 0 00.298-1.205 8.217 8.217 0 01-2.118-5.52V9A6.75 6.75 0 0012 2.25zM9.75 18c0-.034 0-.067.002-.1a25.05 25.05 0 004.496 0l.002.1a2.25 2.25 0 11-4.5 0z" clip-rule="evenodd" />
            </svg>
            <span class="notifaction-animation relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-sky-500"></span>
            </span>
        </button>
        <div class="relative">
            <div id="profile" class="flex items-center justify-center gap-1 cursor-pointer">
                <div class="w-12 h-12 flex items-center justify-center rounded-full overflow-hidden">
                    <img src="{{ asset('img/STK-20230906-WA0007.png') }}" alt="" class="w-full h-full">
                </div>
                <span class="hidden md:block text-sm font-medium">{{ session('name') }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                </svg>
            </div>
            <div id="menu-profile" class="hidden w-48 absolute top-10 right-0 mt-2 py-3 bg-white text-slate-950 z-10 dark:bg-slate-700 dark:text-slate-50 rounded-lg overflow-hidden drop-shadow-md transition-all duration-300 ease-linear">
                <div class="py-2 px-5 text-sm uppercase font-semibold">Profile</div>
                <a id="profile-user" class="py-2 px-5 flex items-center gap-2 group hover:bg-blue-50 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 group-hover:text-blue-500">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                    </svg> 
                    <span class="text-sm group-hover:text-blue-500">Profile</span>
                </a>
                <a id="logout-link" class="py-2 px-5 flex items-center gap-2 group hover:bg-red-50 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 group-hover:text-red-500">
                        <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-sm group-hover:text-red-500">Logout</span>
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->

<script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
<script type="text/javascript">
    function logout(){
        localStorage.removeItem('encryptedFromData');
        localStorage.removeItem('encryptedDataUser');
        localStorage.removeItem('selectedDate');
        localStorage.removeItem('encryptedSisaCuti');
        localStorage.removeItem('encryptedSelectedDates');
        localStorage.removeItem('encryptedJumlahHari');
        localStorage.removeItem('encryptedDateCutiKhusus');
        localStorage.removeItem('encryptedData');

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
            window.location.href = '{{url("end-session")}}';
        }, 1000);
    }
    document.getElementById('logout-link').addEventListener('click', function (e) {
        e.preventDefault();
        logout();
    });
    $('#profile-user').click(function(e){
        e.preventDefault();
        window.location.href = '{{url("/profile-user")}}';
    });

    var haveNotifaction = false;
    function updateHaveNotifaction(){
        if (haveNotifaction) {
            $('.notifaction-animation').show();
        }else{
            $('.notifaction-animation').hide();
        }
    }
    updateHaveNotifaction();

    // $.ajax({
    //     url: 'url_ke_api_notifikasi',
    //     method: 'GET',
    //     success: function(data) {
    //         hasNotification = data.hasNotification;
    //         updateNotificationUI();
    //     },
    //     error: function() {
    //         // Handle error
    //     }
    // });

    $('#notification').click(function(e){
        e.preventDefault();
        window.location.href = '{{url("/notification")}}';
    });
</script>