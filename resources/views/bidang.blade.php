<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Kepengurusan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-header></x-header>

    {{-- Section Bidang --}}

    <section id="informasi" class="pt-20 mt-10 pb-10 animate-on-scroll">
        <div class="w-full h-full">
            <div class="pt-10 mb-10">
                <div class="font-bold text-center text-4xl md:text-5xl uppercase">
                    <h1 class="text-primary mb-2 uppercase">Struktur Kepengurusan</h1>
                    <h1 class="text-primary"><span class="text-[#ED8720]">-</span>RIUNG MANDALA<span class="text-[#ED8720]">-</span></h1>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Bidang End --}}

    {{-- Section Ketua dan Wakil --}}

    <section id="ketuawakil" class="pb-14">
        <div class="flex items-center justify-center">
            <div class="block lg:hidden rounded-full mb-20 sm:w-64 md:w-80 lg:w-72 bg-transparent">
                <img src="{{ asset('assets/riung.png') }}" alt="Person" class="w-full h-full object-cover rounded-lg hover:scale-110 transition ease-in-out"/>
            </div>
        </div>
        
        <div class="container mx-auto px-6 font-Poppins sm:flex sm:flex-wrap sm:gap-6 sm: justify-evenly">
            <div class="rounded-lg shadow-lg overflow-hidden mb-10
            sm:w-64 bg-gradient-to-t from-[#121026] to-[#ED8720] md:w-80 lg:w-72  ease-in-out transition duration-300 relative">
                <img src="{{ asset('assets/kabem-removebg.png') }}" alt="Gambar Contoh" class="w-full h-full object-cover hover:scale-110 transition ease-in-out">
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block rounded-full overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72 bg-transparent ease-in-out transition duration-300">
                <img src="{{ asset('assets/riung.png') }}" alt="Person" class="w-full h-full object-cover rounded-lg hover:scale-110 transition ease-in-out"/>
            </div>
            <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72 ease-in-out transition duration-300 bg-gradient-to-t from-[#121026] to-[#ED8720] relative">
                <img src="{{ asset('assets/wakabem_remove.png') }}" alt="Person" class="w-full h-full object-cover hover:scale-110 transition ease-in-out" />
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Ketua dan Wakil End --}}

    {{-- Section Sekre dan Bendahara --}}

    {{-- <section id="sekrebenda" class="pb-14">
        <div class="container mx-auto px-6 font-Poppins sm:flex sm:flex-wrap sm:gap-6 sm: justify-evenly">
            <div class="rounded-lg shadow-lg overflow-hidden mb-10
            sm:w-64 bg-gradient-to-t from-[#121026] to-[#ED8720] md:w-80 lg:w-72 ease-in-out transition duration-300 relative">
                <img src="{{ asset('assets/kabem-removebg.png') }}" alt="Gambar Contoh" class="w-full h-full object-cover hover:scale-110 transition ease-in-out">
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>
            <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72 ease-in-out transition duration-300 bg-gradient-to-t from-[#121026] to-[#ED8720] relative">
                <img src="{{ asset('assets/wakabem_remove.png') }}" alt="Person" class="w-full h-full object-cover hover:scale-110 transition ease-in-out" />
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </section>   --}}

    <section id="About" class="pb-10 px-4 lg:px-8">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full px-2 lg:w-1/2 flex justify-center mb-10">
                    <div class="w-[42rem] h-80 bg-gradient-to-t from-[#121026] to-[#ED8720] mx-auto rounded-lg shadow-lg flex items-center justify-center relative overflow-hidden">
                        <!-- First Image -->
                        <img src="{{ asset('assets/wakabem_remove.png') }}" alt="Person1" class="scale-[.65] absolute left-[15%] md:left-[28%]">
                        
                        <!-- Second Image -->
                        <img src="{{ asset('assets/wakabem_remove.png') }}" alt="Person2" class="scale-[.65] absolute right-[15%] md:right-[28%]">
                        <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                            <div class="text-center text-white">
                                <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                                <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-2 lg:w-1/2 flex justify-center">
                    <div class="w-[42rem] h-80 bg-gradient-to-t from-[#121026] to-[#ED8720] mx-auto rounded-lg shadow-lg flex items-center justify-center relative overflow-hidden">
                        <!-- First Image -->
                        <img src="{{ asset('assets/wakabem_remove.png') }}" alt="Person1" class="scale-[.65] absolute left-[15%] md:left-[28%]">
                        
                        <!-- Second Image -->
                        <img src="{{ asset('assets/wakabem_remove.png') }}" alt="Person2" class="scale-[.65] absolute right-[15%] md:right-[28%]">
                        <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                            <div class="text-center text-white">
                                <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                                <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Sekre Benda End --}}

    {{-- Section Sisanya --}}

    <section id="sisanya" class="pb-14">
        <div class="container mx-auto px-6 font-Poppins sm:flex sm:flex-wrap sm:gap-6 sm: justify-evenly">
            <div class="rounded-lg shadow-lg overflow-hidden mb-10
            sm:w-64 bg-gradient-to-t from-[#121026] to-[#ED8720] md:w-80 lg:w-72  ease-in-out transition duration-300 relative">
                <img src="assets/wakabem_remove.png" alt="Gambar Contoh" class="w-full h-full object-cover hover:scale-110 transition ease-in-out">
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>
            <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72 ease-in-out transition duration-300 bg-gradient-to-t from-[#121026] to-[#ED8720] relative">
                <img src="assets/wakabem_remove.png" alt="Person" class="w-full h-full object-cover hover:scale-110 transition ease-in-out" />
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>
            <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72 ease-in-out transition duration-300 bg-gradient-to-t from-[#121026] to-[#ED8720] relative">
                <img src="assets/wakabem_remove.png" alt="Person" class="w-full h-full object-cover hover:scale-110 transition ease-in-out" />
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>
            <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72 ease-in-out transition duration-300 bg-gradient-to-t from-[#121026] to-[#ED8720] relative">
                <img src="assets/wakabem_remove.png" alt="Person" class="w-full h-full object-cover hover:scale-110 transition ease-in-out" />
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>
            <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72 ease-in-out transition duration-300 bg-gradient-to-t from-[#121026] to-[#ED8720] relative">
                <img src="assets/wakabem_remove.png" alt="Person" class="w-full h-full object-cover hover:scale-110 transition ease-in-out" />
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>
            <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72 ease-in-out transition duration-300 bg-gradient-to-t from-[#121026] to-[#ED8720] relative">
                <img src="assets/wakabem_remove.png" alt="Person" class="w-full h-full object-cover hover:scale-110 transition ease-in-out" />
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section sisanya --}}

    {{-- Section Bidang dan Biro --}}

    <section id="kemahasiswaan-post" class="pt-20 pb-14">
        <div class="relative h-5 w-full mx-auto flex items-center justify-center text-center mb-20">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full h-4 bg-[#ED8720]"></div>
            </div>
            <div class="relative px-4 bg-white z-10">
                <h2 class="text-black font-bold text-6xl">Bidang dan Biro</h2>
            </div>
        </div>
        {{-- <div class="font-bold text-center text-4xl md:text-5xl mb-14">
            <h1 class="text-primary uppercase"><span class="text-[#ED8720]">-</span> Bidang dan Biro <span class="text-[#ED8720]">-</span></h1>
        </div> --}}
        <div class="container mx-auto px-6 font-Poppins sm:flex sm:flex-wrap sm:gap-6 sm: justify-evenly">
            <div class="rounded-lg shadow-lg overflow-hidden mb-10
            sm:w-64 bg-white md:w-80 lg:w-72  ease-in-out transition duration-300 relative">
                <img src="assets/kmi.png" alt="Gambar Contoh" class="w-full h-full object-cover hover:scale-110 transition ease-in-out">
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>
            <div class="rounded-lg shadow-lg overflow-hidden mb-10
            sm:w-64 bg-white md:w-80 lg:w-72  ease-in-out transition duration-300 relative">
                <img src="assets/kmi.png" alt="Gambar Contoh" class="w-full h-full object-cover hover:scale-110 transition ease-in-out">
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>
            <div class="rounded-lg shadow-lg overflow-hidden mb-10
            sm:w-64 bg-white md:w-80 lg:w-72  ease-in-out transition duration-300 relative">
                <img src="assets/kmi.png" alt="Gambar Contoh" class="w-full h-full object-cover hover:scale-110 transition ease-in-out">
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>
            <div class="rounded-lg shadow-lg overflow-hidden mb-10
            sm:w-64 bg-white md:w-80 lg:w-72  ease-in-out transition duration-300 relative">
                <img src="assets/kmi.png" alt="Gambar Contoh" class="w-full h-full object-cover hover:scale-110 transition ease-in-out">
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>
            <div class="rounded-lg shadow-lg overflow-hidden mb-10
            sm:w-64 bg-white md:w-80 lg:w-72  ease-in-out transition duration-300 relative">
                <img src="assets/kmi.png" alt="Gambar Contoh" class="w-full h-full object-cover hover:scale-110 transition ease-in-out">
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>
            <div class="rounded-lg shadow-lg overflow-hidden mb-10
            sm:w-64 bg-white md:w-80 lg:w-72  ease-in-out transition duration-300 relative">
                <img src="assets/kmi.png" alt="Gambar Contoh" class="w-full h-full object-cover hover:scale-110 transition ease-in-out">
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>
            <div class="rounded-lg shadow-lg overflow-hidden mb-10
            sm:w-64 bg-white md:w-80 lg:w-72  ease-in-out transition duration-300 relative">
                <img src="assets/kmi.png" alt="Gambar Contoh" class="w-full h-full object-cover hover:scale-110 transition ease-in-out">
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>
            <div class="rounded-lg shadow-lg overflow-hidden mb-10
            sm:w-64 bg-white md:w-80 lg:w-72  ease-in-out transition duration-300 relative">
                <img src="assets/kmi.png" alt="Gambar Contoh" class="w-full h-full object-cover hover:scale-110 transition ease-in-out">
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>
            <div class="rounded-lg shadow-lg overflow-hidden mb-10
            sm:w-64 bg-white md:w-80 lg:w-72  ease-in-out transition duration-300 relative">
                <img src="assets/kmi.png" alt="Gambar Contoh" class="w-full h-full object-cover hover:scale-110 transition ease-in-out">
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>
            <div class="rounded-lg shadow-lg overflow-hidden mb-10
            sm:w-64 bg-white md:w-80 lg:w-72  ease-in-out transition duration-300 relative">
                <img src="assets/kmi.png" alt="Gambar Contoh" class="w-full h-full object-cover hover:scale-110 transition ease-in-out">
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>
            <div class="rounded-lg shadow-lg overflow-hidden mb-10
            sm:w-64 bg-white md:w-80 lg:w-72  ease-in-out transition duration-300 relative">
                <img src="assets/kmi.png" alt="Gambar Contoh" class="w-full h-full object-cover hover:scale-110 transition ease-in-out">
                <div class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-yellow-300 to-[#ED8720] flex items-center justify-center shadow-xl">
                    <div class="text-center text-white">
                        <p class="font-bold text-xs">Fikrizal Ekasastra Wibawa</p>
                        <p class="text-xs">Wakil Ketua BEM FSM 2024</p>
                    </div>
                </div>
            </div>

    </section>



    <x-footer></x-footer>
</body>
</html>