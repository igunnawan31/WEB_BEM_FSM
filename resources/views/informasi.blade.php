<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <!-- Section Informasi Start -->

    <section id="informasi" class="pt-20 mt-10 pb-10 animate-on-scroll">
        <div class="w-full h-full">
            <div class="pt-10 mb-10">
                <div class="font-bold text-center text-4xl md:text-5xl uppercase">
                    <h1 class="text-primary mb-2">Informasi</h1>
                    <h1 class="text-primary"><span class="text-[#ED8720]">-</span>Seputar FSM<span class="text-[#ED8720]">-</span></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Informasi - Post Start -->
    <section id="informasi-post" class="pt-20 pb-14 bg-primary animate-on-scroll">
        <div class="font-bold text-center text-4xl md:text-5xl mb-14">
            <h1 class="text-white uppercase"><span class="text-[#ED8720]">-</span> Informasi Terbaru <span class="text-[#ED8720]">-</span></h1>
        </div>
        <div class="container mx-auto px-6 font-Poppins sm:flex
        sm:flex-wrap sm:gap-6 sm: justify-evenly">
            <div class="rounded-lg shadow-lg overflow-hidden mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-60 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="assets/contoh_postingan.png" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>
            </div>
            <div class="rounded-md shadow-lg overflow-hidden mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-65 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="assets/contoh_postingan.png" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>
                
            </div>
            <div class="rounded-md shadow-lg overflow-hidden mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-65 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="assets/contoh_postingan.png" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>
                
            </div>
            <div class="rounded-md shadow-lg overflow-hidden mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-65 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="assets/contoh_postingan.png" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>    
            </div>
        </div>
    </section>
    <!-- Section Informasi - Post End -->

    <!-- Section Kemahasiswaan - Post Start -->
    <section id="kemahasiswaan-post" class="pt-20 pb-14">
        <div class="font-bold text-center text-4xl md:text-5xl mb-14">
            <h1 class="text-primary uppercase"><span class="text-[#ED8720]">-</span> Kemahasiswaan <span class="text-[#ED8720]">-</span></h1>
        </div>
        <div class="container mx-auto px-6 font-Poppins sm:flex
        sm:flex-wrap sm:gap-6 sm: justify-evenly">
            <div class="rounded-lg shadow-lg overflow-hidden mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-60 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="assets/contoh_postingan.png" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>
                
            </div>
            <div class="rounded-md shadow-lg overflow-visible mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-65 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="assets/contoh_postingan.png" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>
                
            </div>
            <div class="rounded-md shadow-lg overflow-hidden mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-65 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="assets/contoh_postingan.png" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>
                
            </div>
            <div class="rounded-md shadow-lg overflow-hidden mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-65 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="assets/contoh_postingan.png" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>    
            </div>
        </div>
    </section>
    <!-- Section Kemahasiswaan - Post End -->

    <!-- Section Karir dan Profesi - Post Start -->
    <section id="karir-post" class="pt-20 pb-14 bg-primary">
        <div class="font-bold text-center text-4xl md:text-5xl mb-14">
            <h1 class="text-white uppercase"><span class="text-[#ED8720]">-</span> Karir dan Profesi <span class="text-[#ED8720]">-</span></h1>
        </div>
        <div class="container mx-auto px-6 font-Poppins sm:flex
        sm:flex-wrap sm:gap-6 sm: justify-evenly">
            <div class="rounded-lg shadow-lg overflow-hidden mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-60 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="assets/contoh_postingan.png" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>
                
            </div>
            <div class="rounded-md shadow-lg overflow-visible mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-65 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="assets/contoh_postingan.png" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>
                
            </div>
            <div class="rounded-md shadow-lg overflow-hidden mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-65 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="assets/contoh_postingan.png" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>
                
            </div>
            <div class="rounded-md shadow-lg overflow-hidden mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-65 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="assets/contoh_postingan.png" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>    
            </div>
        </div>
    </section>
    <!-- Section Karir dan Profesi - Post End -->

    <!-- Section Beasiswa - Post Start -->
    <section id="Beasiswa" class="pt-20 pb-14">
        <div class="font-bold text-center text-4xl md:text-5xl mb-14">
            <h1 class="text-primary uppercase"><span class="text-[#ED8720]">-</span> Beasiswa <span class="text-[#ED8720]">-</span></h1>
        </div>
        <div class="container mx-auto px-6 font-Poppins sm:flex
        sm:flex-wrap sm:gap-6 sm: justify-evenly">
            <div class="rounded-lg shadow-lg overflow-hidden mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-60 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="assets/contoh_postingan.png" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>
                
            </div>
            <div class="rounded-md shadow-lg overflow-visible mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-65 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="assets/contoh_postingan.png" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>
                
            </div>
            <div class="rounded-md shadow-lg overflow-hidden mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-65 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="assets/contoh_postingan.png" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>
                
            </div>
            <div class="rounded-md shadow-lg overflow-hidden mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-65 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="assets/contoh_postingan.png" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>    
            </div>
        </div>
    </section>
    <!-- Section Kemahasiswaan - Post End -->

    <!-- Section Administrasi - Post Start -->
    <section id="administrasi-post" class="pt-20 pb-14 bg-primary">
        <div class="font-bold text-center text-4xl md:text-5xl mb-14">
            <h1 class="text-white uppercase"><span class="text-[#ED8720]">-</span> Administrasi <span class="text-[#ED8720]">-</span></h1>
        </div>
        <div class="container mx-auto px-6 font-Poppins sm:flex
        sm:flex-wrap sm:gap-6 sm: justify-evenly">
            <div class="rounded-lg shadow-lg overflow-hidden mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-60 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="assets/contoh_postingan.png" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>
                
            </div>
            <div class="rounded-md shadow-lg overflow-visible mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-65 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="assets/contoh_postingan.png" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>
                
            </div>
            <div class="rounded-md shadow-lg overflow-hidden mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-65 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="assets/contoh_postingan.png" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>
                
            </div>
            <div class="rounded-md shadow-lg overflow-hidden mb-10
            sm:w-64 bg-transparent md:w-80 lg:w-72 opacity-65 hover:opacity-100 ease-in-out transition duration-300">
                <a href="https://instagram.com/bemfsm_undip" class="w-full h-full block">
                    <img src="assets/contoh_postingan.png" alt="Gambar Contoh" class="w-full h-full object-cover">
                </a>    
            </div>
            
        </div>
    </section>
    <!-- Section Karir dan Profesi - Post End -->

    <!-- footer section -->
    <x-footer></x-footer>
    <!-- footer section end -->
</body>
</html>