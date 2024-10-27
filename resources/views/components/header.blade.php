<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 mt-2 lg:px-8">
    <div class="mx-auto container py-2 ">
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="/">
                    <img src="{{ asset('assets/logo_bem_fsm.png') }}" alt="Logo BEM" class="block w-16 h-16">
                </a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button"
                class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line origin-top-left transition duration-300 ease-in-out  "></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                </button>
                <nav id="nav-menu" 
                class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] 
                w-full right-4 top-full lg:block lg:static lg:max-w-full lg:shadow-none lg:rounded-none
                lg:bg-transparent ">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="/" class="text-base text-slate-500 p-2 mx-8 rounded-lg
                            flex group-hover:text-orange group-hover:shadow-md">Beranda</a>
                        </li>
                        <li class="group">
                            <a href="/tentangkami" class="text-base text-slate-500 p-2 mx-8 rounded-lg
                            flex group-hover:text-orange group-hover:shadow-md">Tentang Kami</a>
                        </li>
                        <li class="group">
                            <a href="/bidang" class="text-base text-slate-500 p-2 mx-8 rounded-lg
                            flex group-hover:text-orange group-hover:shadow-md">Bidang/Biro</a>
                        </li>
                        <li class="group">
                            <a href="/informasi" class="text-base text-slate-500 p-2 mx-8 rounded-lg
                            flex group-hover:text-orange group-hover:shadow-md">Informasi</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>