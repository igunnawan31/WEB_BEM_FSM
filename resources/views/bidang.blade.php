<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $bidang->bidang }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-header></x-header>
    <section id="Home" class="relative pb-36 pt-36 bg-cover bg-center" style="background-image: url('{{ asset($bidang->path_foto_bidang) }}');">
        <div class="absolute inset-0 bg-[#121026] bg-opacity-80"></div>
        <div class="flex items-center justify-center h-full my-[10rem] relative z-10">
            <div class="container mx-auto lg:px-8">
                <div class="w-full flex items-center justify-center lg:pl-8">
                    <div class="text-center lg:text-left">
                        <h1 class="text-7xl text-center font-bold text-white md:text-8xl lg:text-9xl">{{ $firstWord }}</h1>
                        <h2 class="text-xl font-bold text-white md:text-2xl lg:text-3xl text-center">{{ $remainingWords }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section Home End -->

    <!-- Section About Start -->
    <section id="About" class="pt-20 px-4 lg:px-8">
        <!-- <h4 class="text-center font-Poppins text-2xl md:text-3xl lg:text-4xl text-slate-800 font-bold">About Me</h4> -->
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full px-2 lg:w-1/2 flex justify-center">
                    <div class="relative mb-5 lg:mb-0">
                        <div class="w-full max-w-[40rem] mx-auto text-center lg:text-left">
                            <h1 class="text-4xl font-bold">{{ $bidang->bidang }}</h1>
                        </div>
                    </div>
                </div>
                <div class="w-full px-2 lg:w-1/2 lg:pl-8">
                    <p class="font-medium text-slate-700 mb-4 mt-1 text-justify">{{ $bidang->penjelasan }}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section About End -->

    <!-- Section Kepengurusan Start -->
    <section id="Kepengurusan" class="pt-10">
        <div class="w-full h-full bg-[#121026]">
            <div class="py-5 mb-10">
                <h1 class="font-bold text-white text-3xl text-center md:text-4xl lg:text-5xl">Struktur Kepengurusan</h1>
            </div>
        </div>
    </section>
    <!-- Section End -->

    <!-- Section Ketua dan Wakil Start -->
    <section id="ketuawakil" class="pb-14">
        <div class="flex items-center justify-center">
            <div class="block rounded-lg mb-10 sm:w-64 md:w-80 lg:w-72 bg-transparent">
                <img src="{{ asset($bidang->path_logo_bidang) }}" alt="Foto Bidang" class="w-full h-full object-cover rounded-lg hover:scale-110 transition ease-in-out"/>
            </div>
        </div>
        <div class="container mx-auto px-6 font-Poppins sm:flex sm:flex-wrap sm:gap-6 sm: justify-evenly">
            @foreach ($ketua as $member)
                <div class="rounded-lg shadow-lg overflow-hidden mb-10
                sm:w-64 bg-gradient-to-t from-[#121026] to-[#ED8720] md:w-80 lg:w-72  ease-in-out transition duration-300 relative">
                    <img src="{{ asset('storage/' . $member->path_foto_anggota) }}" alt="Gambar Contoh" class="w-full h-full object-cover scale-[1.5] hover:scale-[1.75] -translate-y-20 transition ease-in-out">
                    <div class="absolute w-full h-20 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                        <div class="text-center text-white">
                            <p class="font-bold text-xs">{{ $member->nama }}</p>
                            <p class="text-xs">{{ $member->jabatan }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    
    <!-- Section Ketua dan Wakil End -->

    <!-- Section Anggota BEM FSM Start -->
    <div class="pb-10">
        <h2 class="font-Poppins text-center font-bold text-4xl">Anggota</h2>
    </div>
    <div class="container swiper">
        <div class="slider-wrapper">
            <div class="card-list swiper-wrapper">
                @foreach ($anggota as $member)
                <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72 ease-in-out transition duration-300 bg-gradient-to-t from-[#121026] to-[#ED8720] relative swiper-slide">
                    <img src="{{ asset('storage/' . $member->path_foto_anggota) }}" alt="User Image" class=" w-full h-full object-cover scale-[1.5] hover:scale-[1.75] -translate-y-20 transition ease-in-out">
                    <div class="absolute w-full h-16 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                        <div class="text-center text-white">
                            <p class="font-bold text-xs">{{ $member->nama }}</p>
                            <p class="text-xs">{{ $member->jabatan }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72 ease-in-out transition duration-300 bg-gradient-to-t from-[#121026] to-[#ED8720] relative swiper-slide">
                    <img src="assets/wakabem_remove.png" alt="User Image" class=" w-full h-full object-cover hover:scale-110 transition ease-in-out">
                    <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                        <div class="text-center text-white">
                            <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                            <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72 ease-in-out transition duration-300 bg-gradient-to-t from-[#121026] to-[#ED8720] relative swiper-slide">
                    <img src="assets/wakabem_remove.png" alt="User Image" class=" w-full h-full object-cover hover:scale-110 transition ease-in-out">
                    <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                        <div class="text-center text-white">
                            <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                            <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72 ease-in-out transition duration-300 bg-gradient-to-t from-[#121026] to-[#ED8720] relative swiper-slide">
                    <img src="assets/wakabem_remove.png" alt="User Image" class=" w-full h-full object-cover hover:scale-110 transition ease-in-out">
                    <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                        <div class="text-center text-white">
                            <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                            <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72 ease-in-out transition duration-300 bg-gradient-to-t from-[#121026] to-[#ED8720] relative swiper-slide">
                    <img src="assets/wakabem_remove.png" alt="User Image" class=" w-full h-full object-cover hover:scale-110 transition ease-in-out">
                    <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                        <div class="text-center text-white">
                            <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                            <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <!-- Section Anggota BEM FSM End -->

    <!-- Section Program Kerja -->
    <section id="Programkerja" class="pt-32">
        <div class="w-full h-full bg-[#121026]">
            <div class="py-10 mb-10">
                <h1 class="font-bold text-white text-3xl text-center md:text-4xl lg:text-5xl">Program Kerja Biro KMI</h1>
            </div>
            <div class="container swiper">
                <div class="slider-wrapper">
                    <div class="card-list swiper-wrapper">
                        <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72 ease-in-out transition duration-300 bg-transparent relative swiper-slide">
                            <!-- <div class="w-full h-full bg-[#ED8720] block z-10">
                                
                            </div>
                            <div class="w-full h-full bg-white"></div> -->
                            <div class="relative flex group w-96 h-96 bg-[#FBBD22] rounded-lg shadow-lg justify-center items-center">
                                <div class="absolute flex items-center justify-center">
                                    warna kuning
                                </div>
                                
                            </div>
                            <!-- <img src="assets/wakabem_remove.png" alt="User Image" class=" w-full h-full object-cover hover:scale-110 transition ease-in-out">
                            <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                                <div class="text-center text-white">
                                    <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                                    <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                                </div>
                            </div> -->
                        </div>
                        <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72 ease-in-out transition duration-300 bg-gradient-to-t from-[#121026] to-[#ED8720] relative swiper-slide">
                            <img src="assets/wakabem_remove.png" alt="User Image" class=" w-full h-full object-cover hover:scale-110 transition ease-in-out">
                            <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                                <div class="text-center text-white">
                                    <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                                    <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72 ease-in-out transition duration-300 bg-gradient-to-t from-[#121026] to-[#ED8720] relative swiper-slide">
                            <img src="assets/wakabem_remove.png" alt="User Image" class=" w-full h-full object-cover hover:scale-110 transition ease-in-out">
                            <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                                <div class="text-center text-white">
                                    <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                                    <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72 ease-in-out transition duration-300 bg-gradient-to-t from-[#121026] to-[#ED8720] relative swiper-slide">
                            <img src="assets/wakabem_remove.png" alt="User Image" class=" w-full h-full object-cover hover:scale-110 transition ease-in-out">
                            <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                                <div class="text-center text-white">
                                    <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                                    <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72 ease-in-out transition duration-300 bg-gradient-to-t from-[#121026] to-[#ED8720] relative swiper-slide">
                            <img src="assets/wakabem_remove.png" alt="User Image" class=" w-full h-full object-cover hover:scale-110 transition ease-in-out">
                            <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                                <div class="text-center text-white">
                                    <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                                    <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
</body>
</html>