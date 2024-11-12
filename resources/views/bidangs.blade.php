<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Kepengurusan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
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
                    <h1 class="text-primary"><span class="text-redRiung">-</span>RIUNG MANDALA<span
                            class="text-redRiung">-</span></h1>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Bidang End --}}

    {{-- Section Ketua dan Wakil --}}

    <section id="ketuawakil" class="pb-14">
        <div class="flex items-center justify-center animate-fadeInUp">
            <div class="block lg:hidden mb-20 w-64 md:w-72 bg-transparent"> <!-- Lebar diatur menjadi lebih besar -->
                <img src="{{ asset('assets/riung.png') }}" alt="Person"
                    class="w-full h-auto object-cover rounded-lg hover:scale-110 transition ease-in-out" />
            </div>
        </div>
        <div class="container mx-auto px-6 font-Poppins sm:flex sm:flex-wrap sm:gap-6 sm: justify-evenly">
            {{-- kabem --}}
            @foreach($ketua as $ketua)
                <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 bg-gradient-to-b from-[#DC7477] to-[#1D66A6] md:w-80 lg:w-72 ease-in-out transition duration-300 relative animate-fadeInUp">
                    <img src="{{ asset('storage/' . $ketua->path_foto_anggota) }}" alt="Gambar Contoh"
                        class="w-full h-full object-cover hover:scale-110 transition ease-in-out">
                    <div class="absolute w-full h-10 bottom-6 bg-gradient-to-r from-[#DC7477] to-[#1D66A6] flex items-center justify-center shadow-xl">
                        <div class="text-center text-white">
                            <p class="font-bold text-xs">{{ $ketua->nama }}</p>
                            <p class="text-xs">Ketua BEM FSM 2024</p>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- logo riung --}}
            <div
                class="hidden lg:block rounded-full overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72 bg-transparent ease-in-out transition duration-300 animate-fadeInUp">
                <img src="{{ asset('assets/riung.png') }}" alt="Person"
                    class="w-full h-full object-cover rounded-lg hover:scale-110 transition ease-in-out" />
            </div>

            {{-- wakabem --}}
            @foreach($wakil as $wakil)
                <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 bg-gradient-to-b from-[#DC7477] to-[#1D66A6] md:w-80 lg:w-72 ease-in-out transition duration-300 relative animate-fadeInUp">
                    <img src="{{ asset('storage/' . $wakil->path_foto_anggota) }}" alt="Gambar Contoh"
                        class="w-full h-full object-cover hover:scale-110 transition ease-in-out">
                    <div class="absolute w-full h-10 bottom-6 bg-gradient-to-r from-[#DC7477] to-[#1D66A6] flex items-center justify-center shadow-xl">
                        <div class="text-center text-white">
                            <p class="font-bold text-xs">{{ $wakil->nama }}</p>
                            <p class="text-xs">Ketua BEM FSM 2024</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section id="About" class="pb-10 px-6 lg:px-8">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="md:hidden container mx-auto font-Poppins sm:flex sm:flex-wrap sm:gap-6 sm:justify-evenly">
                    @foreach ($sekre as $sekre)
                        <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 bg-gradient-to-b from-[#DC7477] to-[#1D66A6] md:w-80 lg:w-72 ease-in-out transition duration-300 relativ animate-fadeInUp">
                            <img src="{{ asset('storage/' . $sekre->path_foto_anggota) }}" alt="{{ $sekre->nama }}"
                                class="w-full h-full object-cover hover:scale-[1.1] transition ease-in-out">
                            <div
                                class="absolute w-full h-16 bottom-6 bg-gradient-to-r from-[#DC7477] to-[#1D66A6] flex items-center justify-center shadow-xl">
                                <div class="text-center text-white">
                                    <p class="font-bold text-xs">{{ $sekre->nama }}</p>
                                    <p class="text-xs">{{ $sekre->jabatan }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @foreach ($benda as $benda)
                        <div class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 bg-gradient-to-b from-[#DC7477] to-[#1D66A6] md:w-80 lg:w-72 ease-in-out transition duration-300 relativ animate-fadeInUp">
                            <img src="{{ asset('storage/' . $benda->path_foto_anggota) }}" alt="{{ $benda->nama }}"
                                class="w-full h-full object-cover hover:scale-[1.1] transition ease-in-out">
                            <div
                                class="absolute w-full h-16 bottom-6 bg-gradient-to-r from-[#DC7477] to-[#1D66A6] flex items-center justify-center shadow-xl">
                                <div class="text-center text-white">
                                    <p class="font-bold text-xs">{{ $benda->nama }}</p>
                                    <p class="text-xs">{{ $benda->jabatan }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="hidden md:flex w-full px-2 lg:w-1/2 justify-center mb-10 animate-fadeInUp">
                    <div
                        class="w-[42rem] h-80 bg-gradient-to-b from-[#DC7477] to-[#1D66A6] mx-auto rounded-lg shadow-lg flex items-center justify-center relative overflow-hidden">
                        <!-- First Image -->
                        <img src="{{ asset('assets/foto_bph/denaya.png') }}" alt="denaya"
                            class="scale-[.55] absolute -top-[11rem] lg:-top-32 left-[15%] md:left-[18%] hover:scale-[.65] transition ease-in-out">
                
                        <!-- Second Image -->
                        <img src="{{ asset('assets/foto_bph/feodora.png') }}" alt="dora"
                            class="scale-[.55] absolute -top-[11rem] lg:-top-44 right-[15%] md:right-[18%] hover:scale-[.65] transition ease-in-out">
                        
                        <div
                            class="absolute w-full h-10 bottom-6 bg-gradient-to-r from-[#DC7477] to-[#1D66A6] flex items-center justify-center shadow-xl">
                            <div class="text-center text-white">
                                <p class="font-bold text-xs">Feodora & Denaya Tsabitah Salwa</p>
                                <p class="text-xs">Sekretaris 1 & 2</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden md:flex w-full px-2 lg:w-1/2 justify-center mb-10 animate-fadeInUp">
                    <div
                        class="w-[42rem] h-80 bg-gradient-to-b from-[#DC7477] to-[#1D66A6] mx-auto rounded-lg shadow-lg flex items-center justify-center relative overflow-hidden">
                        <!-- First Image -->
                        <img src="{{ asset('assets/foto_bph/annisa.png') }}" alt="annis"
                            class="scale-[.55] absolute -top-[12rem] lg:-top-32 left-[15%] md:left-[18%] hover:scale-[.65] transition ease-in-out">

                        <!-- Second Image -->
                        <img src="{{ asset('assets/foto_bph/nila.png') }}" alt="nila"
                            class="scale-[.55] absolute -top-[12rem] lg:-top-32 right-[15%] md:right-[18%] hover:scale-[.65] transition ease-in-out">
                        <div
                            class="absolute w-full h-10 bottom-6 bg-gradient-to-l from-[#DC7477] to-[#1D66A6] flex items-center justify-center shadow-xl">
                            <div class="text-center text-white">
                                <p class="font-bold text-xs">Nila Masadah & Annisa Catur Yuniarti</p>
                                <p class="text-xs">Bendahara 1 & 2</p>
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
            @foreach ($koor as $koor)
                <div
                    class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 bg-gradient-to-b from-[#DC7477] to-[#1D66A6] md:w-80 lg:w-72  ease-in-out transition duration-300 relativ animate-fadeInUp">
                    <img src="{{ asset('storage/' . $koor->path_foto_anggota) }}" alt="{{ $koor->nama }}"
                        class="w-full h-full object-cover hover:scale-[1.1] transition ease-in-out">
                    <div
                        class="absolute w-full h-16 bottom-6 bg-gradient-to-r from-[#DC7477] to-[#1D66A6] flex items-center justify-center shadow-xl">
                        <div class="text-center text-white">
                            <p class="font-bold text-xs">{{ $koor->nama }}</p>
                            <p class="text-xs">{{ $koor->jabatan }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- Section sisanya --}}
        </div>
    </section>


    {{-- Section Bidang dan Biro --}}
    <section id="kemahasiswaan-post" class="pt-20 pb-14">
        <div class="relative h-5 w-full mx-auto flex items-center justify-center text-center mb-20">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full h-4 bg-[#DC7477]"></div>
            </div>
            <div class="relative px-4 bg-white z-10">
                <h2 class="text-black font-bold text-6xl">Bidang dan Biro</h2>
            </div>
        </div>

        {{-- <div class="font-bold text-center text-4xl md:text-5xl mb-14">
            <h1 class="text-primary uppercase"><span class="text-[#ED8720]">-</span> Bidang dan Biro <span class="text-[#ED8720]">-</span></h1>
        </div> --}}

        <div class="container mx-auto px-6 font-Poppins sm:flex sm:flex-wrap sm:gap-6 sm: justify-evenly">
            @foreach ($bidangs->take(12) as $bidang)
                <div
                    class="rounded-lg shadow-lg overflow-hidden mb-10 sm:w-64 bg-white md:w-80 lg:w-72 ease-in-out transition duration-300 relative cursor-pointer animate-fadeInUp">
                    <a href="/bidangs/{{ $bidang->bidang }}">
                        <img src="{{ $bidang->path_logo_bidang }}" alt="{{ $bidang->bidang }}"
                            class="w-full h-full object-cover hover:scale-110 transition ease-in-out">
                        <div
                            class="absolute w-full h-10 bottom-6 bg-gradient-to-r from-[#DC7477] to-[#1D66A6] flex items-center justify-center shadow-xl">
                            <div class="text-center text-white">
                                <p class="font-bold text-xs">{{ $bidang->bidang }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
    <x-footer></x-footer>
</body>

</html>
