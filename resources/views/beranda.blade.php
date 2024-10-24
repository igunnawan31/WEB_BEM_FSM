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
<body>
    <!-- Header Start -->
    <x-header></x-header>

    <!-- Header End -->

    <!-- Section Home Start -->
    <section id="Home" class="relative min-h-screen bg-cover bg-center overflow-hidden" style="background-image: url('assets/fakultas.png');">
        <div class="flex items-center justify-center h-full py-[13rem]">
            <div class="container mx-auto px-4 lg:px-8">
                <div class="flex flex-wrap justify-center">
                    
                        <div class="relative mb-10 lg:mb-0">
                            <div class="w-[17rem] h-[17rem] rounded-full shadow-lg bg-blue-200 mx-auto group relative overflow-visible">
                                <img src="{{ asset('assets/riung.png') }}" alt="Riung Mandala" class="object-cover w-full h-full rounded-full">
                            </div>
                        </div>
                    
                    <div class="w-full px-2 lg:w-1/2 flex items-center justify-center lg:justify-start lg:pl-8">
                        <div class="text-center">
                            <h1 class="text-7xl font-bold text-white md:text-8xl lg:text-9xl lg:text-center">BEM FSM</h1>
                            <h2 class="text-2xl font-bold text-white md:text-3xl lg:text-4xl lg:text-center">-Kabinet Riung Mandala-</h2>
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
                <div id="default-carousel" class="relative w-full px-2 lg:w-1/2 justify-center mt-5 mb-10" data-carousel="slide">
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
                        @foreach($posts as $index => $post)
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
                <div class="w-full px-2 lg:w-1/2 lg:pl-8">
                    <h1 class="text-3xl font-bold text-slate-800 md:text-4xl lg:text-5xl">BEM FSM 2024</h1>
                    <p class="font-medium text-slate-700 mb-4 mt-1 text-justify">Badan Eksekutif Mahasiswa (BEM)
                        Fakultas Sains dan Matematika (FSM) Universitas Diponegoro (Undip) adalah organisasi
                        kemahasiswaan yang berperan sebagai lembaga eksekutif di tingkat fakultas. BEM FSM bertugas
                        untuk menjalankan fungsi representasi mahasiswa serta mengkoordinasikan berbagai kegiatan yang
                        bertujuan untuk meningkatkan kesejahteraan mahasiswa di lingkungan FSM.</p>
                    <div class="flex flex-wrap justify-center lg:justify-start space-x-4">
                        <div class="text-center flex-1">
                            <div class="bg-black p-4 text-white rounded-md">
                                <h1 class="text-4xl">15</h1>
                                <p>program</p>
                            </div>
                        </div>
                        <div class="text-center flex-1">
                            <div class="bg-black p-4 text-white rounded-md">
                                <h1 class="text-4xl">15</h1>
                                <p>program</p>
                            </div>
                        </div>
                        <div class="text-center flex-1">
                            <div class="bg-black p-4 text-white rounded-md">
                                <h1 class="text-4xl">15</h1>
                                <p>program</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full mt-10">
                        <a href="/informasi" class="block w-full text-center text-Poppins font-bold py-3 
                        bg-white border-2 border-primary rounded-lg 
                        hover:bg-primary hover:text-white
                        transition ease-in-out duration-300">
                            Tentang Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section About End -->

    <!-- Section Company Profile Start -->
    <section id="Company" class="pt-20 mt-10 pb-14">
        <div class="w-full h-full bg-[#121026]">
            <div class="pt-10 mb-10">
                <h1 class="font-bold text-white text-3xl text-center md:text-4xl lg:text-5xl">Company Profile</h1>
            </div>
            <div class="container mx-auto px-6 font-Poppins flex justify-center">
                <div class="video-container">
                    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/6edqZBqNMRM?si=7TKJDydEYYdwI4tM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#121026" fill-opacity="1" d="M0,96L60,128C120,160,240,224,360,218.7C480,213,600,139,720,106.7C840,75,960,85,1080,74.7C1200,64,1320,32,1380,16L1440,0L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
        </svg>
    </section>

    <section id="kemahasiswaan-post" class="pt-10 pb-14">
        <h2 class="mb-10 text-center font-bold text-3xl text-slate-800 md:text-4xl lg:text-5xl pb-10">
            My Gallery
        </h2>
        <div class="container mx-auto px-6 font-Poppins sm:flex
        sm:flex-wrap sm:gap-6 sm: justify-evenly">
            <div class="rounded-lg shadow-lg overflow-hidden mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-60 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="{{ asset('assets/contoh_postingan.png') }}" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>
            </div>
            <div class="rounded-md shadow-lg overflow-visible mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-65 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="{{ asset('assets/contoh_postingan.png') }}" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>
            </div>
            <div class="rounded-md shadow-lg overflow-hidden mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-65 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="{{ asset('assets/contoh_postingan.png') }}" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>
            </div>
            <div class="rounded-md shadow-lg overflow-hidden mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-65 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="{{ asset('assets/contoh_postingan.png') }}" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>   
            </div>    
        </div>
        
        <div class="pt-10 mb-10 flex justify-center items-center">
            <a href="/informasi" class="text-white font-bold bg-[#121026] py-3 px-8 hover:shadow-lg hover:bg-white hover:text-[#121026] transition duration-300 shadow-lg 
            ease-in-out hover:border-2 hover:border-primary overflow-hidden">
                Selengkapnya
            </a>
        </div>
    </section>
    
    <!-- Section Company Profile End -->

    <!-- Footer Section -->
    <x-footer></x-footer>

    <!-- Footer Section End -->
</body>
</html>