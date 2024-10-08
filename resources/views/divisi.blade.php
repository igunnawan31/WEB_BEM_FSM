<x-layoutdivisi>
    <main>
    <!-- Section Home Start -->
        <section id="Home" class="relative pb-36 pt-36 bg-cover bg-center" style="background-image: url('assets/biro_kmi.png');">
            <div class="absolute inset-0 bg-[#121026] bg-opacity-80"></div>
            <div class="flex items-center justify-center h-full my-[10rem] relative z-10">
                <div class="container mx-auto lg:px-8">
                    <div class="w-full flex items-center justify-center lg:pl-8">
                        <div class="text-center lg:text-left">
                            <h1 class="text-7xl text-center font-bold text-white md:text-8xl lg:text-9xl">BIRO</h1>
                            <h2 class="text-xl font-bold text-white md:text-2xl lg:text-3xl">{{ $bidang->bidang }}</h2>
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
                                <h1 class="text-4xl font-bold">Tentang Biro Kantor Media Informasi</h1>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-2 lg:w-1/2 lg:pl-8">
                        <p class="font-medium text-slate-700 mb-4 mt-1 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum dicta, enim nisi magni ratione doloremque. Perferendis totam quod id. Tenetur iusto saepe dolores commodi repellendus beatae pariatur voluptate, mollitia earum minima rem, dolor hic explicabo! In unde impedit possimus blanditiis at cum, quia laudantium odit delectus optio omnis amet architecto, consectetur cumque. Quos corporis aut, similique facere ipsam doloribus quasi.</p>
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
                <div class="block lg:hidden rounded-lg mb-10 sm:w-64 md:w-80 lg:w-72 bg-transparent">
                    <img src="assets/kmi.png" alt="Person" class="w-full h-full object-cover rounded-lg hover:scale-110 transition ease-in-out"/>
                </div>
            </div>
            
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
                <div class="hidden lg:block rounded-lg overflow-hidden mb-10 sm:w-64 md:w-80 lg:w-72 bg-transparent ease-in-out transition duration-300">
                    <img src="assets/kmi.png" alt="Person" class="w-full h-full object-cover rounded-lg hover:scale-110 transition ease-in-out"/>
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
        
        <!-- Section Ketua dan Wakil End -->

        <!-- Section Anggota BEM FSM Start -->
        <div class="pb-10">
            <h2 class="font-Poppins text-center font-bold text-4xl">Anggota</h2>
        </div>
        <div class="container swiper">
            <div class="slider-wrapper">
                <div class="card-list swiper-wrapper">
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
    </main>
</x-layoutdivisi>