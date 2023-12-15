<div class="sidebar">
    <div class="w-full relative flex items-center justify-center">
        <div class="w-24 h-auto flex items-center justify-center">
            <img src="{{asset('/img/logo-saloka.png')}}" alt="Logo Saloka" class="w-full h-full object-cover object-center">
        </div>
    </div>
    <ul class="mt-10">
        <li class="w-full mt-2 relative">
            <button type="button" onclick="window.location.href='{{ url('/dashboard') }}'" class="{{ $title === 'Dashboard' ? 'menuActive' : 'hover:bg-slate-100 dark:hover:bg-slate-700' }} menu-sidebar w-full flex items-center justify-between px-6 py-4">
                <div class="flex items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ $title === 'Dashboard' ? 'item-menuActive' : '' }} w-5 h-5 mr-3">
                        <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h2.25a3 3 0 013 3v2.25a3 3 0 01-3 3H6a3 3 0 01-3-3V6zm9.75 0a3 3 0 013-3H18a3 3 0 013 3v2.25a3 3 0 01-3 3h-2.25a3 3 0 01-3-3V6zM3 15.75a3 3 0 013-3h2.25a3 3 0 013 3V18a3 3 0 01-3 3H6a3 3 0 01-3-3v-2.25zm9.75 0a3 3 0 013-3H18a3 3 0 013 3V18a3 3 0 01-3 3h-2.25a3 3 0 01-3-3v-2.25z" clip-rule="evenodd" />
                    </svg>                                                        
                    <span class="{{ $title === 'Dashboard' ? 'item-menuActive' : '' }} inline-block font-medium text-sm">Dashboard</span>                       
                </div>                          
            </button>
            <ul class="sub-menu">
                <li><a href="{{url('/dashboard')}}" class="title-subMenu">Dashboard</a></li>
            </ul>
        </li>
        <li class="w-full mt-2 relative">
            <button type="button" class="{{ $title === 'Jadwal' ? 'menuActive' : 'hover:bg-slate-100 dark:hover:bg-slate-700' }} menu-sidebar w-full flex items-center justify-between px-6 py-4">
                <div class="flex items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ $title === 'Jadwal' ? 'item-menuActive' : '' }} h-5 w-5 mr-3">
                        <path d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                        <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z" clip-rule="evenodd" />
                    </svg>                           
                    <span class="{{ $title === 'Jadwal' ? 'item-menuActive' : 'item-menuBase' }} inline-block font-medium text-sm ">Jadwal</span>                       
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ $title === 'Jadwal' ? 'item-menuActive' : 'item-menuBase' }} w-5 h-5 arrow-down">
                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                </svg>                          
            </button>
            <ul class="sub-menu">
                <li><a href="#" class="title-subMenu">Jadwal</a></li>
                <li><a href="{{ url('/jadwalku') }}" class="{{ $subtitle === 'Jadwalku' ? 'item-sub-menuActive' : 'item-sub-menuBase' }}">Jadwalku</a></li>
                <li><a href="{{ url('/absenku') }}" class="{{ $subtitle === 'Absenku' ? 'item-sub-menuActive' : 'item-sub-menuBase' }}">Absenku</a></li>
                <li><a href="{{ url('/lemburku') }}" class="{{ $subtitle === 'Lemburku' ? 'item-sub-menuActive' : 'item-sub-menuBase' }}">Lemburku</a></li>
            </ul>
        </li>
        <li class="w-full mt-2 relative">
            <button type="button" class="{{ $title === 'Penggajian' ? 'menuActive' : 'hover:bg-slate-100 dark:hover:bg-slate-700' }} menu-sidebar w-full flex items-center justify-between px-6 py-4">
                <div class="flex items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ $title === 'Penggajian' ? 'item-menuActive' : '' }} h-5 w-5 mr-3">
                        <path d="M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z" />
                        <path fill-rule="evenodd" d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z" clip-rule="evenodd" />
                    </svg>                          
                    <span class="{{ $title === 'Penggajian' ? 'item-menuActive' : 'item-menuBase' }} inline-block font-medium text-sm ">Penggajian</span>                       
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ $title === 'Penggajian' ? 'item-menuActive' : 'item-menuBase' }} w-5 h-5 arrow-down">
                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                </svg>                          
            </button>
            <ul class="sub-menu">
                <li><a href="#" class="title-subMenu">Penggajian</a></li>
                <li><a href="{{ url('/gajiku') }}" class="{{ $subtitle === 'Gajiku' ? 'item-sub-menuActive' : 'item-sub-menuBase' }}">Gajiku</a></li>
            </ul>
        </li>
        <li class="w-full mt-2 relative">
            <button type="button" class="{{ $title === 'Komplemen' ? 'menuActive' : 'hover:bg-slate-100 dark:hover:bg-slate-700' }} menu-sidebar w-full flex items-center justify-between px-6 py-4">
                <div class="flex items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ $title === 'Komplemen' ? 'item-menuActive' : '' }} h-5 w-5 mr-3">
                        <path fill-rule="evenodd" d="M1.5 6.375c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v3.026a.75.75 0 01-.375.65 2.249 2.249 0 000 3.898.75.75 0 01.375.65v3.026c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 17.625v-3.026a.75.75 0 01.374-.65 2.249 2.249 0 000-3.898.75.75 0 01-.374-.65V6.375zm15-1.125a.75.75 0 01.75.75v.75a.75.75 0 01-1.5 0V6a.75.75 0 01.75-.75zm.75 4.5a.75.75 0 00-1.5 0v.75a.75.75 0 001.5 0v-.75zm-.75 3a.75.75 0 01.75.75v.75a.75.75 0 01-1.5 0v-.75a.75.75 0 01.75-.75zm.75 4.5a.75.75 0 00-1.5 0V18a.75.75 0 001.5 0v-.75zM6 12a.75.75 0 01.75-.75H12a.75.75 0 010 1.5H6.75A.75.75 0 016 12zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z" clip-rule="evenodd" />
                    </svg>                         
                    <span class="{{ $title === 'Komplemen' ? 'item-menuActive' : 'item-menuBase' }} inline-block font-medium text-sm ">Komplemen</span>                       
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ $title === 'Komplemen' ? 'item-menuActive' : 'item-menuBase' }} w-5 h-5 arrow-down">
                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                </svg>                          
            </button>
            <ul class="sub-menu">
                <li><a href="#" class="title-subMenu">Komplemen</a></li>
                <li><a href="{{ url('/tiket') }}" class="{{ $subtitle === 'Tiket' ? 'item-sub-menuActive' : 'item-sub-menuBase' }}">Tiket</a></li>
            </ul>
        </li>
        <li class="w-full mt-2 relative">
            <button type="button" class="{{ $title === 'Cuti' ? 'menuActive' : 'hover:bg-slate-100 dark:hover:bg-slate-700' }} menu-sidebar w-full flex items-center justify-between px-6 py-4">
                <div class="flex items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ $title === 'Cuti' ? 'item-menuActive' : '' }} h-5 w-5 mr-3">
                        <path d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                        <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z" clip-rule="evenodd" />
                    </svg>                         
                    <span class="{{ $title === 'Cuti' ? 'item-menuActive' : 'item-menuBase' }} inline-block font-medium text-sm ">Cuti</span>                       
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ $title === 'Cuti' ? 'item-menuActive' : 'item-menuBase' }} w-5 h-5 arrow-down">
                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                </svg>                          
            </button>
            <ul class="sub-menu">
                <li><a href="#" class="title-subMenu">Cuti</a></li>
                <li><a href="{{ url('/cutitahunan') }}" class="{{ $subtitle === 'Cuti Tahunan' ? 'item-sub-menuActive' : 'item-sub-menuBase' }}">Cuti Tahunan</a></li>
                <li><a href="{{ url('/cutikhusus') }}" class="{{ $subtitle === 'Cuti Khusus' ? 'item-sub-menuActive' : 'item-sub-menuBase' }}">Cuti Khusus</a></li>
            </ul>
        </li>
    </ul>
    <div class="btnSidebarBack">
        <button class="w-10 h-10 z-[9999] fixed bottom-10 right-6 flex items-center justify-center rounded-full shadow-lg bg-sekunder-60">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
                <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
            </svg>                      
        </button>
    </div>
</div>
<!-- Sidebar End -->