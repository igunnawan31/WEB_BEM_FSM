<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Tailwind -->
        {{-- <link href="css/style.css" rel="stylesheet" /> --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Google Font / poppins -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"/>

    </head>
    <body>
        <!-- Header Start -->
        <x-header></x-header>
        <!-- Header End -->            

        <!-- hero section -->
        <section class="pt-28">
            <div class="container mx-auto px-4 ">
                <div class="flex flex-wrap px-5 md:px-0 lg:px-16">
                    <!-- Kabiner Riung Mandala -->
                    <div class="w-full self-center">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-[#121026] text-center">Kabinet <span class="block pt-1">Riung Mandala</span></h1>
                    </div>
                    <!-- Foto Ketua dan Wakil Ketua -->
                    <div class="w-full mt-10 flex flex-col items-center justify-center gap-12 md:gap-8 md:px-4 lg:gap-12 md:flex-row">
                        <!-- wakabem -->
                        <div class="order-3 w-full flex justify-center items-center rounded-full md:order-1 animate-on-scroll">
                            <img src="assets/wakabem.png" alt="wakabem" class="rounded-full hover:scale-105 hover:shadow-lg transition-transform duration-300 ease-in-out">
                        </div>
                        <!-- button -->
                        <a class="hidden text-xl bg-[#121026] rounded-full py-2 px-4 text-white hover:shadow-2xl hover:bg-orange transition duration-300 ease-in-out md:block md:text-sm lg:text-xl md:order-2 animate-on-scroll" href="/bidangs">Selengkapnya</a>
                        <!-- kabem -->
                        <div class="order-1 w-full flex justify-center items-center rounded-full md:order-last animate-on-scroll">
                            <img src="assets/kabem.png" alt="kabem" class="rounded-full hover:scale-105 hover:shadow-lg transition-transform duration-300 ease-in-out">
                        </div>
                        <!-- button for mobile -->
                        <a class="order-last text-sm bg-[#121026] rounded-full py-3 px-8 text-white hover:shadow-2xl hover:bg-orange transition duration-300 ease-in-out md:hidden" href="/bidangs">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero section end -->
        
        <!-- visi-misi section -->
        <section class="pt-12 pb-16 md:pt-20" >
            <div class="mx-auto container text-center px-4 lg:px-12">
                <div class="w-full px-7 mb-8 ">
                    <h1 class="relative text-4xl font-bold inline-block underline-orange mb-4 md:text-5xl lg:text-6xl">VISI</h1>
                    <p class="font-medium text-xl md:text-lg ">"BEM FSM 2024 bertekad merajut harmoni perubahan, melangkah dengan semangat Riung Mandala untuk FSM yang evolutif dan kolaboratif"</p>
                </div>
                <div class="container ">
                    <div class="w-full space-y-4 px-6 md:px-8 ">
                        <h1 class="relative text-4xl font-bold inline-block underline-orange mb-4  md:text-5xl lg:text-6xl">MISI</h1>
                        <div class="flex flex-wrap justify-center items-center text-center md:text-justify">
                            <div class="w-full md:w-[49%] md:pr-4 lg:pr-8">
                                <p class="font-medium text-xl md:text-lg mb-4">Memaksimalkan iklim kerja yang altruistik dan responsif dalam internal organisasi BEM FSM 2024.</p>
                                <p class="font-medium text-xl md:text-lg mb-4">Mengembangkan kompetensi unggul sebagai transformasi kualitas mahasiswa Fakultas Sains dan Matematika.</p>
                            </div>
                            <div class="hidden w-0.5 bg-black self-stretch md:block "></div> 
                            <div class="w-full md:w-[49%] md:pl-4 lg:pl-8">
                                <p class="font-medium text-xl md:text-lg mb-4">Maksimalkan peran dalam pelayanan, pemberdayaan, dan pergerakan dengan semangat inovatif yang evolutif.</p>
                                <p class="font-medium text-xl md:text-lg mb-4">Sinergi internal dan kolaborasi eksternal sebagai kunci kesuksesan BEM FSM Undip 2024.</p>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
        <!-- visi-misi section end -->

        <!-- filosofi section -->
        <section class="py-20 bg-[#F09231] bg-gradient-to-b from-[#F09231] from-0% via-[#3C2A27] via-66%  to-[#0F1025] to-100% text-white">
            <div class="mx-auto container">
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h1 class="relative text-4xl font-bold inline-block underline-orange z-10 mb-12 md:text-5xl lg:text-6xl">FILOSOFI LOGO</h1>
                        <div class="flex justify-center">
                            <img src="assets/riung.png" alt="gambar logo bem" class="w-3/4 md:w-2/5 animate-on-scroll">
                        </div>
                    </div>
                </div>
                <div class="w-full px-8 flex flex-wrap justify-center text-center mx-auto ">
                    <div class="mb-12 p-4 md:w-1/2 ">
                        <div class="flex justify-center ">
                            <img src="assets/kelopak.png" alt="Kelopak Bunga 6 Pasang" class="w-1/2 lg:w-1/3 animate-on-scroll">
                        </div>
                        <h1 class="font-semibold text-xl md:text-2xl mt-5 mb-3">Kelopak Bunga 6 Pasang</h1>
                        <p class="font-medium text-sm lg:text-base">Kelopak bunga yang terdiri dari 6 pasang melambangkan setiap himpunan mahasiswa di Fakultas Sains dan Matematika.</p>
                    </div>
                    <div class="mb-12 p-4 md:w-1/2">
                        <div class="flex justify-center">
                           <img src="assets/semanggi.png" alt="Semanggi Berdaun Empat" class="w-1/2 lg:w-1/3 animate-on-scroll">
                        </div>
                        <h1 class="font-semibold text-xl md:text-2xl mt-5 mb-3">Semanggi Berdaun Empat</h1>
                        <p class="font-medium text-sm lg:text-base">Semanggi berdaun empat melambangkan keberuntungan atau kesatuan yang harmonis. </p>
                    </div>
                    <div class="mb-12 p-4 md:w-1/2">
                        <div class="flex justify-center">
                            <img src="assets/riunglogo.png" alt="Kelopak Bunga 6 Pasang" class="w-1/2 lg:w-1/3 animate-on-scroll">
                        </div>
                        <h1 class="font-semibold text-xl md:text-2xl mt-5 mb-3">Riung</h1>
                        <p class="font-medium text-sm lg:text-base">Riung dilambangkan dengan kelopak bunga yang saling bersentuhan seolah seperti sekumpulan orang yang berjumlah enam sedang saling bergandengan satu sama lainnya</p>
                    </div>
                    <div class="mb-12 p-4 md:w-1/2">
                        <div class="flex justify-center">
                            <img src="assets/mandala.png" alt="Kelopak Bunga 6 Pasang" class="w-1/2 lg:w-1/3 animate-on-scroll">
                        </div>
                        <h1 class="font-semibold text-xl md:text-2xl mt-5 mb-3">Mandala</h1>
                        <p class="font-medium text-sm lg:text-base">Mandala digambarkan dengan keseluruhan elemen yang saling berdekatan sehingga membentuk suatu lingkaran yang indah. </p>
                    </div>
                </div>
            </div>    
        </section>
        <!-- filosofi section end -->

        <!-- filosofi warna section -->
        <section class="py-20">
            <div class="mx-auto container">
                <div class="w-full px-4 mb-12">
                    <div class="max-w-xl mx-auto text-center mb-8">
                        <h1 class="relative text-4xl font-bold inline-block underline-orange md:text-5xl lg:text-6xl">FILOSOFI WARNA</h1>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center items-center gap-4 ">
                    <div class="relative group w-64 h-64 lg:w-72 lg:h-72 bg-[#FBBD22] rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-500 animate-on-scroll">
                        <div class="absolute inset-0 flex items-center justify-center text-white font-bold text-xl transition-all duration-500 group-hover:translate-y-[-20px] group-hover:opacity-0">Warna Kuning</div>
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-gray-800 p-4 opacity-0 translate-y-[20px] transition-all duration-500 group-hover:translate-y-0 group-hover:opacity-100">
                            <h2 class="font-bold text-2xl">Warna Kuning</h2>
                            <p class="text-sm mt-2">Warna kuning melambangkan rasa kebersamaan dan solidaritas di antara individu atau kelompok.</p>
                        </div>
                    </div>
                  
                    <div class="relative group w-64 h-64 lg:w-72 lg:h-72 bg-[#121026] rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-500 animate-on-scroll">
                        <div class="absolute inset-0 flex items-center justify-center text-white font-bold text-xl transition-all duration-500 group-hover:translate-y-[-20px] group-hover:opacity-0">Warna Biru</div>
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white p-4 opacity-0 translate-y-[20px] transition-all duration-500 group-hover:translate-y-0 group-hover:opacity-100">
                            <h2 class="font-bold text-2xl">Warna Biru</h2>
                            <p class="text-sm mt-2">Warna biru melambangkan ketenangan dan kedamaian.</p>
                        </div>
                    </div>
                  
                    <div class="relative group w-64 h-64 lg:w-72 lg:h-72 bg-[#ED8720] rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-500 animate-on-scroll">
                        <div class="absolute inset-0 flex items-center justify-center text-white font-bold text-xl transition-all duration-500 group-hover:translate-y-[-20px] group-hover:opacity-0">Warna Jingga</div>
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-gray-800 p-4 opacity-0 translate-y-[20px] transition-all duration-500 group-hover:translate-y-0 group-hover:opacity-100">
                            <h2 class="font-bold text-2xl">Warna Jingga</h2>
                            <p class="text-sm mt-2">Warna jingga melambangkan semangat dan energi positif.</p>
                        </div>
                    </div>
                </div>
                  
            </div>
        </section>
        <!-- filosofi warna section end -->
         
        <!-- footer section -->
        <footer class="py-16 bg-[#121026] text-white">
            <div class="mx-auto container ">
                <div class="flex flex-wrap mx-auto px-4 items-center justify-center">
                    <!-- logo -->
                    <div class="w-full px-4 mb-8 md:mb-0 lg:w-3/6">
                        <div class="flex flex-col gap-4 justify-start lg:items-center md:flex-row">
                            <img src="assets/riung.png" alt="logo bem " class="w-2/5 md:w-[30%] ">
                            <div class="flex flex-col justify-center ">
                                <h1 class="font-semibold text-2xl md:text-3xl lg:text-5xl mb-1">BEM FSM</h1>
                                <p class="font-semibold text-xs md:text-sm">- Kabinet Riung Mandala</p>
                            </div>
                        </div>
                    </div>
                    <div class="hidden w-[1px] bg-slate-600 self-stretch md:block "></div>   
                    <!-- alamat -->
                    <div class="w-full px-4 md:px-8 mb-8 lg:w-1/6 self-start">
                        <h1 class="font-semibold text-2xl mb-1 md:mb-2 mt-2">Alamat</h1>
                        <p class="font-normal text-xs">Fakultas Sains dan Matematika</p>
                        <p class="font-normal text-xs">Jl. Prof. Soedarto No.50275, Tembalang, Kec. Tembalang, Kota Semarang, Jawa Tengah </p>
                        <p class="font-normal text-xs">50275</p>
                    </div>
                    <div class="hidden w-[1px] bg-slate-600 self-stretch md:block "></div>    
                    <!-- kontak -->
                    <div class="w-full px-4 md:px-8 mb-4 lg:w-1/6 self-start">
                        <h1 class="font-semibold text-2xl mb-1">Kontak</h1>
                        <ul>
                            <li class="flex items-center text-sm ">
                                <span class="inline-block mb-2">
                                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12.8432 18.1568C14.5559 19.0188 16.5723 19.6404 18.9375 19.9063C19.5115 19.9709 20 19.511 20 18.9334V16.7808C20 16.3219 19.6877 15.9219 19.2425 15.8106L16.5493 15.1373C16.2085 15.0521 15.848 15.152 15.5996 15.4004L12.8432 18.1568ZM12.8432 18.1568C9.72749 16.5888 7.61705 14.225 6.24117 11.7588M6.24117 11.7588C4.93032 9.40926 4.28622 6.96674 4.07481 5.03084C4.01343 4.46884 4.46855 4 5.03389 4H7.1802C7.65688 4 8.06729 4.33646 8.16078 4.80388L8.89504 8.47521C8.96061 8.80307 8.85799 9.14201 8.62157 9.37843L6.24117 11.7588Z" stroke="#fff" stroke-width="2"></path></g></svg>
                                </span>
                                <span class="ml-2">08123456789</span>
                            </li>
                            <li class="flex items-center text-sm mb-2">
                                <span class="inline-block">
                                    <svg width="25px" height="25px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000" stroke-width="0.00024000000000000003"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.096"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 5.25L3 6V18L3.75 18.75H20.25L21 18V6L20.25 5.25H3.75ZM4.5 7.6955V17.25H19.5V7.69525L11.9999 14.5136L4.5 7.6955ZM18.3099 6.75H5.68986L11.9999 12.4864L18.3099 6.75Z" fill="#fff"></path> </g></svg>
                                </span>
                                <span class="ml-2">bemfsm@gmail.com</span>
                            </li>
                            <li class="flex items-center text-sm mb-2">
                                <span class="inline-block">
                                    <svg fill="#fff" width="25px" height="25px" viewBox="-3.2 -3.2 38.40 38.40" xmlns="http://www.w3.org/2000/svg" stroke="#fff" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#fffCCCCCC" stroke-width="0.384"></g><g id="SVGRepo_iconCarrier"><path d="M 2 5 L 2 25 L 7 25 L 7 30.09375 L 8.625 28.78125 L 13.34375 25 L 30 25 L 30 5 Z M 4 7 L 28 7 L 28 23 L 12.65625 23 L 12.375 23.21875 L 9 25.90625 L 9 23 L 4 23 Z M 8 12 L 8 14 L 24 14 L 24 12 Z M 8 16 L 8 18 L 20 18 L 20 16 Z"></path></g></svg>
                                </span>
                                <span class="ml-2">08123456789</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- footer copyright -->
                <div class="w-full mt-4 pt-6 border-t border-slate-600 px-8">
                    <!-- iconku -->
                    <div class="flex items-center justify-center mb-4 md:justify-between mx-12 md:gap-4">
                        <p class="hidden font-medium text-xs text-center text-slate-400 md:text-sm md:block">Copyright © Muhammad Gunawan | Daffa Hirza Ni'am | Mohammad Izza Hakiki<p>
                        <div class="flex">
                        <!-- youtube -->
                            <a href="#" target="_blank" class="w-9 h-9  mr-3 rounded-full flex justify-center items-center border border-slate-300 text-white hover:border-[#ED8720] hover:bg-[#ED8720] ">
                                <svg width="25" height="25" role="img" viewBox="0 0 24 24" class="fill-current" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                            </a>
                            <!-- twitter -->
                            <a href="#" target="_blank" class="w-9 h-9  mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-[#ED8720] hover:bg-[#ED8720]  text-white">
                                <svg width="22" height="22" role="img" viewBox="0 0 24 24" class="fill-current" xmlns="http://www.w3.org/2000/svg"><title>X</title><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg>
                            </a>
                            <!-- facebook -->
                            <a href="#" target="_blank" class="w-9 h-9  mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-[#ED8720] hover:bg-[#ED8720]  text-white">
                                <svg width="25" height="25" role="img" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"/></svg>
                            <!-- instagram -->
                            <a href="#" target="_blank" class="w-9 h-9  mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-[#ED8720] hover:bg-[#ED8720]  text-white">
                                <svg class="fill-current" width="25" height="25" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
                            </a>    
                        </div>
                    </div>
                    <p class="font-medium text-xs text-center text-slate-400 md:hidden md:text-sm">Copyright © Muhammad Gunawan | Daffa Hirza Ni'am | Mohammad Izza Hakiki</p>
                </div>
            </div>
        </footer>
        <!-- footer section end -->

        <!-- script js -->
    </body>
</html>
