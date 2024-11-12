<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="overflow-x-hidden">
    <!-- Header Start -->
    <x-header></x-header>

    <!-- Header End -->

    <!-- Section Home Start -->
    <section id="Home" class="relative min-h-screen pb-24 pt-36 bg-cover bg-center" style="background-image: url('assets/fakultas.png');">
        <div class="flex items-center justify-center h-full py-[13rem]">
            <div class="container mx-auto px-4 lg:px-8">
                <div class="flex flex-wrap">
                    <div class="w-full px-2 lg:w-1/2 flex justify-center">
                        <div class="relative mb-10 lg:mb-0">
                            <div class="w-[16rem] h-[16rem] rounded-full shadow-lg bg-blue-200 mx-auto group relative overflow-visible animate-fadeInUp">
                                <img src="{{ asset('assets/riung.png') }}" alt="Riung Mandala" class="object-cover w-full h-full rounded-full">
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-2 lg:w-1/2 flex items-center justify-center lg:justify-start lg:pl-8">
                        <div class="text-center">
                            <h1 class="text-7xl font-bold gradient-text md:text-7xl lg:text-8xl lg:text-left animate-fadeInUp">BEM FSM</h1>
                            <h2 class="text-2xl font-bold gradient-text md:text-3xl lg:text-4xl lg:text-left animate-fadeInUp delay-150">-Kabinet Riung Mandala-</h2>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>    
    <!-- Section Home End -->

    <!-- Section About Start -->
    <section id="About" class="pt-24 px-4 lg:px-8">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div id="default-carousel" class="relative w-full px-2 lg:w-1/2 justify-center mt-8 mb-2" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-72 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        @foreach($posts as $index => $post)
                            <div class="{{ $index === 0 ? '' : 'hidden' }} duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('storage/' . $post->post_foto) }}" class="absolute block w-full rounded-lg" alt="Post Image">
                            </div>
                        @endforeach
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-7 left-1/2 space-x-3 rtl:space-x-reverse">
                        @foreach($posts as $post)
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}" data-carousel-slide-to="{{ $index }}"></button>
                        @endforeach
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                <div class="w-full px-2 lg:w-1/2 lg:pl-8 ">
                    <h1 class="text-3xl font-bold text-slate-800 md:text-4xl lg:text-5xl">BEM FSM 2024</h1>
                    <p class="font-medium text-slate-700 mb-4 mt-1 text-justify">Badan Eksekutif Mahasiswa (BEM)
                        Fakultas Sains dan Matematika (FSM) Universitas Diponegoro (Undip) adalah organisasi
                        kemahasiswaan yang berperan sebagai lembaga eksekutif di tingkat fakultas. BEM FSM bertugas
                        untuk menjalankan fungsi representasi mahasiswa serta mengkoordinasikan berbagai kegiatan yang
                        bertujuan untuk meningkatkan kesejahteraan mahasiswa di lingkungan FSM.</p>
                    <div class="flex flex-wrap justify-center lg:justify-start gap-4">
                        <div class="text-center flex-1">
                            <div class="bg-redRiung p-4 text-white rounded-md">
                                <h1 class="text-4xl">{{ $bidangCount }}</h1>
                                <p>Bidang & Biro</p>
                            </div>
                        </div>
                        <div class="text-center flex-1">
                            <div class="bg-redRiung p-4 text-white rounded-md">
                                <h1 class="text-4xl">{{ $anggotaCount }}</h1>
                                <p>Anggota</p>
                            </div>
                        </div>
                        <div class="text-center flex-1">
                            <div class="bg-redRiung p-4 text-white rounded-md">
                                <h1 class="text-4xl">{{ $programCount }}</h1> 
                                <p>program</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full mt-4 ">
                        <a href="/tentangkami" class="block w-full text-center rounded-lg text-Poppins font-bold py-4 px-8 text-white 
                           bg-gradient-to-r from-[#1D66A6] to-[#DC7477] 
                          hover:bg-white hover:text-transparent hover:bg-clip-text 
                          hover:bg-gradient-to-r hover:from-[#1D66A6] hover:to-[#DC7477] 
                          hover:border hover:border-[#1D66A6] hover:shadow-xl 
                          transition-all duration-300 ease-in-out">
                            Tentang Kami
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section About End -->

    <!-- Section Company Profile Start -->
    <section id="Company" class="pt-20 mt-4">
        <div class="w-full h-full bg-[#121026]" style="background: radial-gradient(circle, rgba(220,116,119,1) 12%, rgba(29,102,166,1) 100%);">
            <div class="pt-10 mb-10">
                <h1 class="font-bold text-white text-3xl text-center md:text-4xl lg:text-5xl">Company Profile</h1>
            </div>
            <div class="container mx-auto px-6 font-Poppins flex justify-center">
                <div class="video-container">
                    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/6edqZBqNMRM?si=7TKJDydEYYdwI4tM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    {{-- <iframe class="responsive-iframe" src="https://www.youtube.com/embed/IPQpncfFpgk?si=rK0LHV9UfEE3JT3H" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                </div>
            </div>
            <div class="h-20 lg:h-30">
            </div>
        </div>
    </section>
    <!-- Section Company Profile End -->

    {{-- svg section atas--}}
    <div class="relative">
        <!-- SVG Section -->
        <div class="absolute top-0 left-0 -translate-y-[5%] md:-translate-y-[2%] lg:-translate-y-[0.5%] -translate-x-[3%]">
            <svg class="w-32 h-20 sm:w-48 sm:h-28 md:w-64 md:h-36 lg:w-80 lg:h-44" viewBox="0 0 2048 1196" xmlns="http://www.w3.org/2000/svg">
                <path d="m0 0h2035l-2 2-23 6-89 20-541 120-69 16-60 15-52 15-41 13-45 15-49 18-41 16-42 18-27 12-34 16-25 12-21 10-19 10-23 12-22 12-25 14-54 32-47 30-31 21-12 8-20 14-18 13-44 33-18 14-11 9-16 13-14 11-14 12-11 10-11 9-10 9-13 12-11 9-17 16-24 24-8 7-37 37-7 8-25 25-7 8-12 14-12 13-9 10-9 11-11 12-8 10-11 13-13 17-13 16-10 13-13 17-15 20-26 36-48 72-14 23-10 16-12 20-15 26-14 25-12 23-14 25-4 2z" fill="#2b67a3"/>
            </svg>
        </div>
    </div>
    {{-- svg section atas end --}}

    {{-- Section Informasi Start  --}}

    <section id="kemahasiswaan-post" class="pt-12 pb-10 px-4">
        <h2 class="mb-8 text-center font-bold text-3xl text-slate-800 md:text-4xl lg:text-5xl pb-10">
            Informasi 
        </h2>
        <div class="container swiper mx-auto px-6 font-Poppins">
            <div class="slider-wrapper">
                <div class="card-list swiper-wrapper">
                    @foreach ($igposts as $igpost)
                        <div class="swiper-slide flex justify-center animate-fadeInUp">
                            <div class="card w-full sm:w-40 md:w-56 lg:w-56 xl:w-64 sm:h-64 md:h-64 lg:h-80 xl:h-96  rounded-lg shadow-lg transform opacity-60 hover:opacity-100 hover:shadow-xl overflow-hidden ease-in-out transition duration-300">
                                <a href="{{ $igpost->linkig }}" class="block w-full h-full">
                                    <img src="{{ asset('storage/' . $igpost->post_foto) }}" alt="{{ $igpost->deskripsi_foto }}" class="w-full h-full object-cover">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- Swiper --}}
                <div class="swiper-button-prev absolute top-[38%] -translate-y-1/2 left-0 z-10 text-blue-500"></div>
                <div class="swiper-button-next absolute top-[38%] -translate-y-1/2 right-0 z-10 text-blue-500"></div>
            </div>
    
            <div class="pt-6 mt-12 mb-6 flex justify-center items-center">
                <a href="/informasi" 
                   class="text-white font-bold rounded-lg py-3 px-8 
                          bg-gradient-to-r from-[#1D66A6] to-[#DC7477] 
                          hover:bg-white hover:text-transparent hover:bg-clip-text 
                          hover:bg-gradient-to-r hover:from-[#1D66A6] hover:to-[#DC7477] 
                          hover:border hover:border-[#1D66A6] hover:shadow-xl 
                          transition-all duration-300 ease-in-out">
                    Selengkapnya
                </a>
            </div>
        </div>
    </section>
    {{-- Section Informasi End  --}}


    
    {{-- svg section bawah--}}
    <div class="relative">
        <!-- SVG Section -->
        <div class="absolute bottom-0 right-0 translate-y-[4.6%] sm:translate-y-[1.5%] sm:translate-x-[2%] lg:translate-x-[3%]">
            <svg class="w-32 h-20 sm:w-48 sm:h-28 md:w-64 md:h-36 lg:w-80 lg:h-44" version="1.1" viewBox="0 0 2048 1196" width="255" height="149" xmlns="http://www.w3.org/2000/svg">
                <path transform="translate(2046,5)" d="m0 0h2v1191h-2040l2-2 19-5 65-15 134-30 432-96 70-16 60-15 53-15 41-13 60-20 40-15 34-13 21-9 26-11 34-15 25-12 30-14 44-22 18-10 26-14 23-13 21-12 18-11 20-12 22-14 44-29 28-19 18-13 19-14 14-10 14-11 16-12 16-13 14-11 22-18 14-12 15-13 11-9 8-8 8-7 11-10 8-7 13-12 23-23 8-7 28-28 7-8 27-27 7-8 12-13 7-8 9-10 7-7 7-9 9-11 10-11 11-14 8-9 11-14 8-10 20-26 24-32 13-18 12-17 8-12 29-43 7-11 25-40 13-22 28-49 24-46z" fill="#1e66a5"/>
            </svg>
        </div>
    </div>
    {{-- svg section bawah end--}}
    

    <!-- Footer Section -->
    <x-footer></x-footer>

    <!-- Footer Section End -->
</body>
</html>