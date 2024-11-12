<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Header Start -->
    <x-header></x-header>
    <!-- Header End -->

    <!-- Section Informasi Start -->
    <section id="informasi" class="pt-20 mt-10 pb-10 animate-on-scroll">
        <div class="w-full h-full">
            <div class="pt-10 mb-10">
                <div class="font-bold text-center text-4xl md:text-5xl uppercase">
                    <h1 class="text-primary mb-2">Informasi</h1>
                    <h1 class="text-primary"><span class="text-redRiung">-</span>Seputar FSM <span class="text-redRiung ">-</span></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Informasi - Post Start -->
    <section id="informasi-post" class="pt-20 pb-14 bg-gradient-to-b from-[#DC7477] to-[#1D66A6] animate-on-scroll">
        <div class="font-bold text-center text-4xl md:text-5xl mb-14">
            <h1 class="text-white uppercase"><span class="text-blueRiung">-</span> Informasi Terbaru <span
                    class="text-blueRiung">-</span></h1>
        </div>
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
        </div>
    </section>
    <!-- Section Informasi - Post End -->

    <!-- Section Kemahasiswaan - Post Start -->
    <section id="kemahasiswaan-post" class="pt-20 pb-14">
        <div class="font-bold text-center text-4xl md:text-5xl mb-14">
            <h1 class="text-primary uppercase"><span class="text-blueRiung">-</span> Kemahasiswaan <span
                    class="text-blueRiung">-</span></h1>
        </div>
        <div class="container swiper mx-auto px-6 font-Poppins">
            <div class="slider-wrapper">
                <div class="card-list swiper-wrapper">
                    @foreach ($kemahasiswaan as $kmhs)
                        <div class="swiper-slide flex justify-center animate-fadeInUp">
                            <div class="card w-full sm:w-40 md:w-56 lg:w-56 xl:w-64 sm:h-64 md:h-64 lg:h-80 xl:h-96  rounded-lg shadow-lg transform opacity-60 hover:opacity-100 hover:shadow-xl overflow-hidden ease-in-out transition duration-300">
                                <a href="{{ $kmhs->linkig }}" class="block w-full h-full">
                                    <img src="{{ asset('storage/' . $kmhs->post_foto) }}" alt="{{ $kmhs->deskripsi_foto }}" class="w-full h-full object-cover">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- Swiper --}}
                <div class="swiper-button-prev absolute top-[38%] -translate-y-1/2 left-0 z-10 text-blue-500"></div>
                <div class="swiper-button-next absolute top-[38%] -translate-y-1/2 right-0 z-10 text-blue-500"></div>
            </div>
        </div>
    </section>
    <!-- Section Kemahasiswaan - Post End -->

    <!-- Section Karir dan Profesi - Post Start -->
    <section id="karir-post" class="pt-20 pb-14 bg-gradient-to-t from-[#DC7477] to-[#1D66A6]">
        <div class="font-bold text-center text-4xl md:text-5xl mb-14">
            <h1 class="text-white uppercase"><span class="text-redRiung">-</span> Karir dan Profesi <span
                    class="text-redRiung">-</span></h1>
        </div>
        <div class="container swiper mx-auto px-6 font-Poppins">
            <div class="slider-wrapper">
                <div class="card-list swiper-wrapper">
                    @foreach ($karir as $kr)
                        <div class="swiper-slide flex justify-center animate-fadeInUp">
                            <div class="card w-full sm:w-40 md:w-56 lg:w-56 xl:w-64 sm:h-64 md:h-64 lg:h-80 xl:h-96  rounded-lg shadow-lg transform opacity-60 hover:opacity-100 hover:shadow-xl overflow-hidden ease-in-out transition duration-300">
                                <a href="{{ $kr->linkig }}" class="block w-full h-full">
                                    <img src="{{ asset('storage/' . $kr->post_foto) }}" alt="{{ $kr->deskripsi_foto }}" class="w-full h-full object-cover">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- Swiper --}}
                <div class="swiper-button-prev absolute top-[38%] -translate-y-1/2 left-0 z-10 text-blue-500"></div>
                <div class="swiper-button-next absolute top-[38%] -translate-y-1/2 right-0 z-10 text-blue-500"></div>
            </div>
        </div>
    </section>
    <!-- Section Karir dan Profesi - Post End -->

    <!-- Section Beasiswa - Post Start -->
    <section id="Beasiswa" class="pt-20 pb-14">
        <div class="font-bold text-center text-4xl md:text-5xl mb-14">
            <h1 class="text-primary uppercase"><span class="text-redRiung">-</span> Beasiswa <span
                    class="text-redRiung">-</span></h1>
        </div>
        <div class="container swiper mx-auto px-6 font-Poppins">
            <div class="slider-wrapper">
                <div class="card-list swiper-wrapper">
                    @foreach ($beasiswa as $bsw)
                        <div class="swiper-slide flex justify-center animate-fadeInUp">
                            <div class="card w-full sm:w-40 md:w-56 lg:w-56 xl:w-64 sm:h-64 md:h-64 lg:h-80 xl:h-96  rounded-lg shadow-lg transform opacity-60 hover:opacity-100 hover:shadow-xl overflow-hidden ease-in-out transition duration-300">
                                <a href="{{ $bsw->linkig }}" class="block w-full h-full">
                                    <img src="{{ asset('storage/' . $bsw->post_foto) }}" alt="{{ $bsw->deskripsi_foto }}" class="w-full h-full object-cover">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- Swiper --}}
                <div class="swiper-button-prev absolute top-[38%] -translate-y-1/2 left-0 z-10 text-blue-500"></div>
                <div class="swiper-button-next absolute top-[38%] -translate-y-1/2 right-0 z-10 text-blue-500"></div>
            </div>
        </div>
    </section>
    <!-- Section Kemahasiswaan - Post End -->

    <!-- Section Administrasi - Post Start -->
    <section id="administrasi-post" class="pt-20 pb-14 bg-gradient-to-b from-[#DC7477] to-[#1D66A6]">
        <div class="font-bold text-center text-4xl md:text-5xl mb-14">
            <h1 class="text-white uppercase"><span class="text-blueRiung">-</span> Administrasi <span
                    class="text-blueRiung">-</span></h1>
        </div>
        <div class="container swiper mx-auto px-6 font-Poppins">
            <div class="slider-wrapper">
                <div class="card-list swiper-wrapper">
                    @foreach ($administrasi as $adm)
                        <div class="swiper-slide flex justify-center animate-fadeInUp">
                            <div class="card w-full sm:w-40 md:w-56 lg:w-56 xl:w-64 sm:h-64 md:h-64 lg:h-80 xl:h-96  rounded-lg shadow-lg transform opacity-60 hover:opacity-100 hover:shadow-xl overflow-hidden ease-in-out transition duration-300">
                                <a href="{{ $adm->linkig }}" class="block w-full h-full">
                                    <img src="{{ asset('storage/' . $adm->post_foto) }}" alt="{{ $adm->deskripsi_foto }}" class="w-full h-full object-cover">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- Swiper --}}
                <div class="swiper-button-prev absolute top-[38%] -translate-y-1/2 left-0 z-10 text-blue-500"></div>
                <div class="swiper-button-next absolute top-[38%] -translate-y-1/2 right-0 z-10 text-blue-500"></div>
            </div>
        </div>
    </section>
    <!-- Section Karir dan Profesi - Post End -->

    <!-- footer section -->
    <x-footer></x-footer>
    <!-- footer section end -->
</body>

</html>
