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
                    <div class="w-full self-cente animate-fadeInUp">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-[#121026] text-center">Kabinet <span class="block pt-1">Riung Mandala</span></h1>
                    </div>
                    <!-- Foto Ketua dan Wakil Ketua -->
                    <div class="w-full mt-10 flex flex-col items-center justify-center gap-12 md:gap-8 md:px-4 lg:gap-12 md:flex-row">
                        <!-- wakabem -->
                        <div class="order-3 elative flex justify-center items-center w-full md:w-1/2 group md:order-1 animate-on-scroll">
                            <svg version="1.1" viewBox="0 0 1842 2048" width="474" height="527" class="absolute top-0 left-0 w-full h-full transition-transform duration-300 ease-in-out group-hover:scale-105" xmlns="http://www.w3.org/2000/svg">
                                <path transform="translate(830,2)" d="m0 0h52l26 3 25 5 27 9 29 13 26 11 35 17 20 11 27 16 20 13 16 11 18 13 17 13 16 13 11 9 14 12 12 11 10 9 16 15 32 32 7 8 16 17 9 10 9 11 12 14 13 16 22 28 12 16 14 19 12 17 16 23 22 33 11 17 24 38 13 21 39 65 15 26 14 24 15 26 9 15 9 16 16 27 14 24 16 27 17 28 13 22 14 23 15 25 14 24 15 26 13 24 12 22 13 26 11 23 14 32 16 42 10 31 8 30 7 32 5 33 3 30 2 37v31l-2 35-5 46-5 30-8 36-6 23-11 35-12 33-13 31-17 35-13 25-9 15-11 18-11 17-12 17-14 19-11 14-9 11-12 14-11 12-7 8-31 31-8 7-10 9-11 9-9 8-13 10-21 16-16 11-24 16-21 13-23 13-14 8-16 8-29 14-30 13-31 12-44 15-42 12-38 9-42 8-33 5-49 5-44 3h-56l-38-2-37-3-42-5-43-7-35-7-37-9-40-11-38-12-29-10-36-14-27-11-33-15-36-17-27-14-22-12-28-16-26-16-24-15-31-21-23-16-21-16-11-8-18-14-17-14-11-9-14-12-12-11-8-7-44-44-9-11-9-10-11-14-15-20-14-21-13-22-12-23-10-21-13-33-12-36-8-28-10-42-10-50-9-53-9-66-6-57-5-67-3-57v-61l4-66 4-49 6-47 7-43 8-39 8-34 15-52 15-44 14-35 13-30 19-38 12-22 9-16 24-38 12-17 14-19 9-12 11-14 12-14 11-13 18-20 8-8 7-8 22-22 8-7 12-12 8-7 11-10 11-9 14-12 10-8 18-14 21-16 19-13 12-9 32-21 19-12 28-17 28-16 24-13 33-17 24-12 36-16 32-13 36-12 32-8 22-4 24-3z" fill="#1C69A6" />
                            </svg>
                            <img src="assets/wakabem_remove.png" alt="wakabem" class="rounded-full max-w-full max-h-full object-cover relative z-10" />
                        </div>
                        <!-- button -->
                        <a 
                        href="/bidangs"
                        class="hidden text-xl rounded-full py-2 px-8 text-white bg-gradient-to-r from-blueRiung to-redRiung 
                               hover:bg-white hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r 
                               hover:from-blueRiung hover:to-redRiung 
                               hover:border hover:border-blueRiung hover:shadow-xl transition duration-500 ease-out 
                               md:block md:text-sm lg:text-lg md:order-2 animate-on-scroll">
                          Selengkapnya
                        </a>
                        <!-- kabem -->
                        <div class="order-1 relative flex justify-center items-center w-full md:w-1/2 group md:order-last animate-on-scroll">
                            <svg version="1.1" viewBox="0 0 1842 2048" width="474" height="527" class="absolute top-0 left-0 w-full h-full transition-transform duration-300 ease-in-out group-hover:scale-105" xmlns="http://www.w3.org/2000/svg">
                                <path transform="translate(984,4)" d="m0 0 33 1 34 3 24 3 34 7 25 7 37 13 36 15 36 17 38 19 22 12 27 15 22 13 21 13 22 14 15 10 23 16 17 12 30 23 16 13 11 9 14 12 10 9 8 7 10 9 9 9 8 7 27 27 7 8 7 7 7 8 13 15 11 13 11 14 13 17 13 18 12 17 10 16 12 19 16 28 20 39 13 28 16 39 15 42 13 43 15 60 6 31 7 41 5 40 6 57 1 7v190l-7 72-4 39-6 46-9 57-10 54-11 48-8 30-9 29-13 35-13 29-12 24-13 22-16 24-8 11-13 17-22 26-15 16-30 30-8 7-11 10-11 9-10 9-14 11-12 10-36 27-18 13-32 22-23 15-26 16-25 15-27 15-28 15-30 15-23 11-34 15-43 17-36 13-37 12-50 14-38 9-41 8-38 6-74 9h-127l-72-9-43-7-43-9-34-9-39-12-35-12-34-14-27-12-33-16-22-12-26-15-19-12-21-14-17-12-13-10-18-14-14-12-11-9-7-7-8-7-13-12-18-18-7-8-7-7-9-11-13-15-26-34-12-17-13-20-15-25-9-16-12-23-15-31-13-31-12-34-11-35-9-35-7-37-5-35-3-34-1-19v-47l2-34 4-34 6-35 8-34 12-39 12-33 11-27 13-29 24-49 11-19 7-14 12-21 14-24 15-25 13-22 11-18 18-30 17-28 15-26 13-22 15-26 14-24 7-11 6-11 16-28 17-28 10-18 28-46 13-21 12-19 15-23 10-16 15-22 13-19 12-17 22-30 12-16 14-18 14-17 11-13 9-11 9-10 7-8 10-11 7-8 10-10 7-8 23-23 8-7 9-9 11-9 7-7 11-9 9-8 10-8 14-11 21-16 16-11 24-16 25-15 21-12 31-16 29-13 23-10 19-8 18-6 21-5 20-3 11-1z" fill="#F07274" />
                            </svg>
                            <img src="assets/kabem-removebg.png" alt="kabem" class="rounded-full max-w-full max-h-full object-cover relative z-10" />
                        </div>

                        <!-- button for mobile -->
                        <a 
                        href="/bidangs"
                        class="order-last text-sm rounded-full py-3 px-8 text-white 
                               bg-gradient-to-r from-[#1D66A6] to-[#DC7477] 
                               hover:bg-white hover:text-transparent hover:bg-clip-text 
                               hover:bg-gradient-to-r hover:from-[#1D66A6] hover:to-[#DC7477] 
                               hover:border hover:border-[#1D66A6] hover:shadow-xl 
                               transition duration-500 ease-out md:hidden">
                          Selengkapnya
                      </a>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- hero section end -->
        
        <!-- visi-misi section -->
        <section class="pt-12 pb-16 md:pt-20" >
            <div class="mx-auto container text-center px-4 lg:px-12">
                <div class="w-full px-7 mb-8 ">
                    <h1 class="relative text-4xl font-bold inline-block underline-redRiung mb-4 md:text-5xl lg:text-6xl">VISI</h1>
                    <p class="font-medium text-xl md:text-lg ">"BEM FSM 2024 bertekad merajut harmoni perubahan, melangkah dengan semangat Riung Mandala untuk FSM yang evolutif dan kolaboratif"</p>
                </div>
                <div class="container ">
                    <div class="w-full space-y-4 px-6 md:px-8 ">
                        <h1 class="relative text-4xl font-bold inline-block underline-redRiung   mb-4  md:text-5xl lg:text-6xl">MISI</h1>
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
        <section class="py-20 bg-gradient-to-b from-[#DC7477] to-[#1D66A6] text-white">
            <div class="mx-auto container">
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h1 class="relative text-4xl font-bold inline-block underline-blueRiung z-10 mb-12 md:text-5xl lg:text-6xl">FILOSOFI LOGO</h1>
                        <div class="flex justify-center">
                            <img src="assets/riung.png" alt="gambar logo bem" class="w-3/4 md:w-2/5 animate-on-scroll">
                        </div>
                    </div>
                </div>
                <div class="w-full px-8 flex flex-wrap justify-center text-center mx-auto  ">
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
                        <h1 class="relative text-4xl font-bold inline-block underline-redRiung md:text-5xl lg:text-6xl">FILOSOFI WARNA</h1>
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

        <x-footer></x-footer>
        <!-- footer section end -->

        <!-- script js -->
    </body>
</html>
