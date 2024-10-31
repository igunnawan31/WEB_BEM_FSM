<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class anggota extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $anggota = [
            //bph
            [
                'nama' => 'Hana Tsabita',
                'bidang_id' => 13,
                'jabatan' => 'Ketua Badan Eksekutif Mahasiswa FSM',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Fikrizal Ekasastra Wibawa',
                'bidang_id' => 13,
                'jabatan' => 'Wakil Ketua Badan Eksekutif Mahasiswa FSM',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Feodora',
                'bidang_id' => 13,
                'jabatan' => 'Sekertaris 1',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Denaya Tsabitah Salwa',
                'bidang_id' => 13,
                'jabatan' => 'Sekertaris 2',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Nila Masadah',
                'bidang_id' => 13,
                'jabatan' => 'Bendahara 1',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Annisa Catur Yuniarti',
                'bidang_id' => 13,
                'jabatan' => 'Bendahara 2',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Vidiawati',
                'bidang_id' => 13,
                'jabatan' => 'Koordinator Bidang Edukasi dan Pengambangan Mahasiswa',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Gabriella Miranda Angelica Siahaan',
                'bidang_id' => 13,
                'jabatan' => 'Koordinator Bidang Minat dan Bakat Mahasiswa',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Rinndy Antika Dwi Purnama',
                'bidang_id' => 13,
                'jabatan' => 'Koordinator Bidang Dinamika Kampus',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Rangga Bayu Ardana',
                'bidang_id' => 13,
                'jabatan' => 'Koordinator Bidang Pergerakan dan Pengabdian',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Farah Nur Imanda',
                'bidang_id' => 13,
                'jabatan' => 'Koordinator Biro Komunikasi dan Informasi',
                'path_foto_anggota' => ''
            ],
            //pmo
            [
                'nama' => 'Asciiedo Pangestu',
                'bidang_id' => 1,
                'jabatan' => 'Ketua Tim PMO',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Muhammad Anugrah',
                'bidang_id' => 1,
                'jabatan' => 'Supervisor Biro Komunikasi dan Informasi',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Elang Nukmianolo',
                'bidang_id' => 1,
                'jabatan' => 'Supervisor Biro Komunikasi dan Informasi',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Hasna Fairuz Khairunnisa',
                'bidang_id' => 1,
                'jabatan' => 'Supervisor Bidang Minat dan Bakat Mahasiswa',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Azizah Nur Chasanah',
                'bidang_id' => 1,
                'jabatan' => 'Supervisor Bidang Minat dan Bakat Mahasiswa',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Ivan Arkananta Mahardika Putra',
                'bidang_id' => 1,
                'jabatan' => 'Supervisor Bidang Dinamika Kampus',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Rachel Berlian Haqi',
                'bidang_id' => 1,
                'jabatan' => 'Supervisor Bidang Dinamika Kampus',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Megantari Puji Astuti',
                'bidang_id' => 1,
                'jabatan' => 'Supervisor Bidang Edukasi dan Pengembangan Mahasiswa',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Nayla Syafikha Wardhana',
                'bidang_id' => 1,
                'jabatan' => 'Supervisor Bidang Edukasi dan Pengembangan Mahasiswa',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Nanda Indarwati',
                'bidang_id' => 1,
                'jabatan' => 'Supervisor Bidang Pergerakan dan Pengabdian',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Nadya Ayu Rachmadani',
                'bidang_id' => 1,
                'jabatan' => 'Supervisor Bidang Pergerakan dan Pengabdian',
                'path_foto_anggota' => ''
            ],
            //psdm
            [
                'nama' => 'Nada Ahmad Rayhan',
                'bidang_id' => 2,
                'jabatan' => 'Kepala Bidang Pengembangan Sumber Daya Mahasiswa',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Sherine Putri Nurhaliza',
                'bidang_id' => 2,
                'jabatan' => 'Wakil Kepala Bidang Pengembangan Sumber Daya Mahasiswa',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Chintami Aurora Wulandari',
                'bidang_id' => 2,
                'jabatan' => 'Kepala Divisi Pengembangan dan Pemberdayaan Mahasiswa',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Brenda Feodora Zivanka',
                'bidang_id' => 2,
                'jabatan' => 'Kepala Divisi Kurikulum Kaderisasi',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Iqvan Nur Cahyo',
                'bidang_id' => 2,
                'jabatan' => 'Staf Ahli Divisi Pengembangan dan Pemberdayaan Mahasiswa',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Alya Putri Meyriska',
                'bidang_id' => 2,
                'jabatan' => 'Staf Ahli Divisi Pengembangan dan Pemberdayaan Mahasiswa',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Faditya Aldi Nugroho ',
                'bidang_id' => 2,
                'jabatan' => 'Staf Muda Divisi Pengembangan dan Pemberdayaan Mahasiswa',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Yusi Setya Salsabila',
                'bidang_id' => 2,
                'jabatan' => 'Staf Muda Divisi Pengembangan dan Pemberdayaan Mahasiswa',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Nadia Putri Mahardika',
                'bidang_id' => 2,
                'jabatan' => 'Staf Muda Divisi Kurikulum Kaderisasi',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Siti Fazira Syaikha',
                'bidang_id' => 2,
                'jabatan' => 'Staf Muda Divisi Kurikulum Kaderisasi',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Kevin Andytha Syahputri',
                'bidang_id' => 2,
                'jabatan' => 'Staf Muda Divisi Kurikulum Kaderisasi',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Riski Setiawan',
                'bidang_id' => 2,
                'jabatan' => 'Staf Muda Divisi Kurikulum Kaderisasi',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Abd Aziz',
                'bidang_id' => 2,
                'jabatan' => 'Staf Muda Divisi Kurikulum Kaderisasi',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Salma Firyal Kamilah',
                'bidang_id' => 2,
                'jabatan' => 'Staf Muda Divisi Kurikulum Kaderisasi',
                'path_foto_anggota' => ''
            ],
            //riskel
            [
                'nama' => 'Rifqi Athalla Ramadhana',
                'bidang_id' => 3,
                'jabatan' => 'Kepala Bidang Riset dan Keilmuan',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Kayla Azarya Putri Christanti Saranga',
                'bidang_id' => 3,
                'jabatan' => 'Wakil Kepala Bidang Riset dan Keilmuan',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Liwaul Izzati Haibah',
                'bidang_id' => 3,
                'jabatan' => 'Kepala Divisi Pengembangan Riset',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Raisya Noerzahrani Putri',
                'bidang_id' => 3,
                'jabatan' => 'Kepala Divisi Akademik',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Galih Panca Utama',
                'bidang_id' => 3,
                'jabatan' => 'Staff Muda Divisi Pengembangan Riset',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Sabila Anastasia',
                'bidang_id' => 3,
                'jabatan' => 'Staff Muda Divisi Pengembangan Riset',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Refika Banjarnahor',
                'bidang_id' => 3,
                'jabatan' => 'Staff Muda Divisi Pengembangan Riset',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Febiola Irashai',
                'bidang_id' => 3,
                'jabatan' => 'Staff Muda Divisi Pengembangan Riset',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Irgi Maulana Hakim',
                'bidang_id' => 3,
                'jabatan' => 'Staff Muda Divisi Pengembangan Riset',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Sharda Radhisya Wiranti',
                'bidang_id' => 3,
                'jabatan' => 'Staff Muda Divisi Pengembangan Riset',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Wardah Alfa Syahra',
                'bidang_id' => 3,
                'jabatan' => 'Staff Muda Divisi Akademik',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Ahmad Afif Zakariya',
                'bidang_id' => 3,
                'jabatan' => 'Staff Muda Divisi Akademik',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Almas Arvina Adi',
                'bidang_id' => 3,
                'jabatan' => 'Staff Muda Divisi Akademik',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Farah Nur Ramadani',
                'bidang_id' => 3,
                'jabatan' => 'Staff Muda Divisi Akademik',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Ersha Dwi Ariwiyanti',
                'bidang_id' => 3,
                'jabatan' => 'Staff Muda Divisi Akademik',
                'path_foto_anggota' => ''
            ],
            //kesma
            [
                'nama' => 'Defina Sukowardhani',
                'bidang_id' => 4,
                'jabatan' => 'Kepala Bidang Kesejahteraan Mahasiswa',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Amanda Rizki Koreana',
                'bidang_id' => 4,
                'jabatan' => 'Wakil Kepala Bidang Kesejahteraan Mahasiswa',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Nasywa Agiyan Nisa',
                'bidang_id' => 4,
                'jabatan' => 'Kepala Divisi Advocacy',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Muthia Zhafira Sahnah',
                'bidang_id' => 4,
                'jabatan' => 'Kepala Divisi Scholarship and Career',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Nyoman Dyah Primasari Utama',
                'bidang_id' => 4,
                'jabatan' => 'Staff Ahli Divisi Advocacy',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Raynor Raazan Zaidan',
                'bidang_id' => 4,
                'jabatan' => 'Staff Muda Divisi Advocacy',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Yazmin Mufida Khairunnisa',
                'bidang_id' => 4,
                'jabatan' => 'Staff Muda Divisi Advocacy',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Bintang Vandini',
                'bidang_id' => 4,
                'jabatan' => 'Staff Muda Divisi Advocacy',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Nabila Lutfideya Syifa Maharani',
                'bidang_id' => 4,
                'jabatan' => 'Staff Muda Divisi Advocacy',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Lutfa Denisya',
                'bidang_id' => 4,
                'jabatan' => 'Staff Ahli Divisi Scholarship and Career',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Hanun Salma Rafida Ulayya',
                'bidang_id' => 4,
                'jabatan' => 'Staff Ahli Divisi Scholarship and Career',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Rekyan Setyoputri Prameswari',
                'bidang_id' => 4,
                'jabatan' => 'Staff Muda Divisi Scholarship and Career',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Salma Perbiana',
                'bidang_id' => 4,
                'jabatan' => 'Staff Muda Divisi Scholarship and Career',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Annisa Hakiqi',
                'bidang_id' => 4,
                'jabatan' => 'Staff Muda Divisi Scholarship and Career',
                'path_foto_anggota' => ''
            ],
            //harkam
            [
                'nama' => 'Alvanesya Destia Handini',
                'bidang_id' => 5,
                'jabatan' => 'Kepala Bidang Harmonisasi Kampus',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Arija Qoshasi',
                'bidang_id' => 5,
                'jabatan' => 'Wakil Kepala Bidang Harmonisasi Kampus',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Salma Najwa Az-Zahro',
                'bidang_id' => 5,
                'jabatan' => 'Ketua Divisi Sinergisitas Lembaga',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Nabila Ratu Veeralyn',
                'bidang_id' => 5,
                'jabatan' => 'Ketua Divisi Analisis Kebijakan Kampus',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Hanun Hasna Karimah',
                'bidang_id' => 5,
                'jabatan' => 'Staf Ahli Analisis Kebijakan Kampus',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Aditya Haidar Faishal',
                'bidang_id' => 5,
                'jabatan' => 'Staf Ahli Analisis Kebijakan Kampus',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Alya Rizqi Qanita',
                'bidang_id' => 5,
                'jabatan' => 'Bendahara Bidang Harmonisasi Kampus',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Putra Ilham Manzist',
                'bidang_id' => 5,
                'jabatan' => 'Staf Muda Analisis Kebijakan Kampus',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Ezra Ziddanea Mayda Putri',
                'bidang_id' => 5,
                'jabatan' => 'Sekretaris Bidang Harmonisasi Kampus',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Safira Oktafia Pratiwi',
                'bidang_id' => 5,
                'jabatan' => 'Staf Ahli Sinergitas Lembaga',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Krisna Okky Widayat',
                'bidang_id' => 5,
                'jabatan' => 'Staf Ahli Sinergitas Lembaga',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Nazwa Maulida Azzahra',
                'bidang_id' => 5,
                'jabatan' => 'Staf Muda Sinergitas Lembaga',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Afni Anggreani',
                'bidang_id' => 5,
                'jabatan' => 'Staf Muda Sinergitas Lembaga',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Andrea Bianca Callista',
                'bidang_id' => 5,
                'jabatan' => 'Staf Muda Sinergitas Lembaga',
                'path_foto_anggota' => ''
            ],
            //ekotif
            [
                'nama' => 'Tasya Tazkiyah',
                'bidang_id' => 6,
                'jabatan' => 'Kepala Bidang Ekonomi Kreatif',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Andi Raifina Hana Rosyada',
                'bidang_id' => 6,
                'jabatan' => 'Wakil Kepala Bidang Ekonomi Kreatif',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Sheina Fathurobaniah',
                'bidang_id' => 6,
                'jabatan' => 'Kepala Divisi Business Resources Centre',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Elshania Putri Margareta',
                'bidang_id' => 6,
                'jabatan' => 'Kepala Divisi Entrepreneur Development Centre',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Rafa Anisa Putri',
                'bidang_id' => 6,
                'jabatan' => 'Staff Ahli Divisi Entrepreneur Development Centre ',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Khalishah Cahyasari',
                'bidang_id' => 6,
                'jabatan' => 'Staff Ahli Divisi Entrepreneur Development Centre',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Diandra Puspo negoro',
                'bidang_id' => 6,
                'jabatan' => 'Staff Muda Divisi Entrepreneur Development Centre ',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Muhammad Zidni Chilma',
                'bidang_id' => 6,
                'jabatan' => 'Staff Muda Divisi Entrepreneur Development Centre',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Muhammad Azka Subhan',
                'bidang_id' => 6,
                'jabatan' => 'Staff Muda Divisi Entrepreneur Development Centre',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Kayis Hilmi Farih',
                'bidang_id' => 6,
                'jabatan' => 'Staff Muda Divisi Entrepreneur Development Centre',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Raisya Syeine Widyaloka',
                'bidang_id' => 6,
                'jabatan' => 'Staff Ahli Divisi Business Resources Centre',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Kaila Khansa',
                'bidang_id' => 6,
                'jabatan' => 'Staff Muda Divisi Business Resources Centre',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Muhammad Fadhlurrahman Faza',
                'bidang_id' => 6,
                'jabatan' => 'Staff Muda Divisi Business Resources Centre',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Kevin Adi Santoso',
                'bidang_id' => 6,
                'jabatan' => 'Staff Muda Divisi Business Resources Centre',
                'path_foto_anggota' => ''
            ],
            //seniora
            [
                'nama' => 'Nabila Halisa Chairina',
                'bidang_id' => 7,
                'jabatan' => 'Kepala Bidang Seni dan Olahraga',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Danish Rahman Athaariq',
                'bidang_id' => 7,
                'jabatan' => 'Wakil Kepala Bidang Seni dan Olahraga',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Mohammad Alim Hasan',
                'bidang_id' => 7,
                'jabatan' => 'Kepala Divisi Olahraga',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Maria Azalia Christella',
                'bidang_id' => 7,
                'jabatan' => 'Kepala Divisi Seni',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Hamka Hafizh',
                'bidang_id' => 7,
                'jabatan' => 'Kepala Divisi Manajemen Minat dan Bakat',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Muhammad Khoiruddin Daffa Fiartra',
                'bidang_id' => 7,
                'jabatan' => 'Staff Ahli Divisi Olahraga',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Aula Amalia Husna',
                'bidang_id' => 7,
                'jabatan' => 'Staff Ahli Divisi Seni',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Daniswara Dwiputera Perwata',
                'bidang_id' => 7,
                'jabatan' => 'Staff Ahli Divisi Manajemen Minat dan Bakat',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Ulina Rotua',
                'bidang_id' => 7,
                'jabatan' => 'Staff Ahli Divisi Manajemen Minat dan Bakat',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Nikolas Paruda Pradayan',
                'bidang_id' => 7,
                'jabatan' => 'Staff Muda Divisi Olahraga',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Nabila Salsabila',
                'bidang_id' => 7,
                'jabatan' => 'Staff Muda Divisi Olahraga',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Dilla Syabita',
                'bidang_id' => 7,
                'jabatan' => 'Staff Muda Divisi Olahraga',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Ranggadya Aditama Ramadhani',
                'bidang_id' => 7,
                'jabatan' => 'Staff Muda Divisi Seni',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Zira Khanza Kespalani',
                'bidang_id' => 7,
                'jabatan' => 'Staff Muda Divisi Seni',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Dinda Nabila Putri',
                'bidang_id' => 7,
                'jabatan' => 'Staff Muda Divisi Seni',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Abu Muhammad Abdul Malik',
                'bidang_id' => 7,
                'jabatan' => 'Staff Muda Divisi Manajemen Minat dan Bakat',
                'path_foto_anggota' => ''
            ],
            //dimas
            [
                'nama' => 'Athaya Nisrina Mansoor',
                'bidang_id' => 8,
                'jabatan' => 'Kepala Bidang Pengabdian Masyarakat',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Wiwiting Dyah Putri Pradnya Paramita',
                'bidang_id' => 8,
                'jabatan' => 'Wakil Kepala Bidang Pengabdian Masyarakat',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Abdurrahman Rais',
                'bidang_id' => 8,
                'jabatan' => 'Kepala Divisi Community Empowerment',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Utari Maharani',
                'bidang_id' => 8,
                'jabatan' => 'Kepala Divisi Lingkungan Hidup',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Kornelyta Junielish Wardoyo',
                'bidang_id' => 8,
                'jabatan' => 'Staf Ahli Divisi Community Empowerment',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Arie Toulu Pramasta',
                'bidang_id' => 8,
                'jabatan' => 'Staf Ahli Divisi Community Empowerment',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Diki Wiguna',
                'bidang_id' => 8,
                'jabatan' => 'Staf Ahli Divisi Community Empowerment',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Iktiya Putri Nadiliayanti',
                'bidang_id' => 8,
                'jabatan' => 'Staf Ahli Divisi Lingkungan Hidup',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Tsabita Bahiratu Najma',
                'bidang_id' => 8,
                'jabatan' => 'Staf Ahli Divisi Lingkungan Hidup',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Dea Angelina Syafitri',
                'bidang_id' => 8,
                'jabatan' => 'Staf Muda Divisi Community Empowerment',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Ega Aryabima',
                'bidang_id' => 8,
                'jabatan' => 'Staf Muda Divisi Community Empowerment',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Nadia Shiva Arlianti Nugraheni',
                'bidang_id' => 8,
                'jabatan' => 'Staf Muda Divisi Community Empowerment',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Salsabila Nur Azizah',
                'bidang_id' => 8,
                'jabatan' => 'Staf Muda Divisi Lingkungan Hidup',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Reza Putra Pratama',
                'bidang_id' => 8,
                'jabatan' => 'Staf Muda Divisi Lingkungan Hidup',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Muhammad Ihsan',
                'bidang_id' => 8,
                'jabatan' => 'Staf Muda Divisi Lingkungan Hidup',
                'path_foto_anggota' => ''
            ],
            //sospol
            [
                'nama' => 'Ario Adi Nugroho',
                'bidang_id' => 9,
                'jabatan' => 'Kepala Bidang Sosial Politik',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Melanie Anggita',
                'bidang_id' => 9,
                'jabatan' => 'Wakil Kepala Bidang Sosial Politik',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Anisa Rahmadani',
                'bidang_id' => 9,
                'jabatan' => 'Kepala Divisi Aksi Media Propaganda',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Raira Ramadhina Putri Roundy',
                'bidang_id' => 9,
                'jabatan' => 'Kepala Divisi Kajian Strategis',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Daniel Triputra Aritonang',
                'bidang_id' => 9,
                'jabatan' => 'Staff Muda Divisi Aksi Media Propaganda',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Rizky Andrian',
                'bidang_id' => 9,
                'jabatan' => 'Staff Muda Divisi Aksi Media Propaganda',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Shendy Nurrizki',
                'bidang_id' => 9,
                'jabatan' => 'Staff Muda Divisi Aksi Media Propaganda',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Elvin Richardo Siahaan',
                'bidang_id' => 9,
                'jabatan' => 'Staff Muda Divisi Aksi Media Propaganda',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Sania Nur Fadhilah',
                'bidang_id' => 9,
                'jabatan' => 'Staff Muda Divisi Kajian Strategis',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Amanda Riski Nuraini',
                'bidang_id' => 9,
                'jabatan' => 'Staff Muda Divisi Kajian Strategis',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Azam Saiful Adzka Wibowo',
                'bidang_id' => 9,
                'jabatan' => 'Staff Muda Divisi Kajian Strategis',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Haidar Azmi Alkhanif',
                'bidang_id' => 9,
                'jabatan' => 'Staff Muda Divisi Kajian Strategis',
                'path_foto_anggota' => ''
            ],
            //biro stat
            [
                'nama' => 'Vivo Alansyah',
                'bidang_id' => 10,
                'jabatan' => 'Kepala Biro Statistika',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Rafi Raihan Ranazahwan',
                'bidang_id' => 10,
                'jabatan' => 'Wakil Kepala Biro Statistika',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Luh Putu Diyanni',
                'bidang_id' => 10,
                'jabatan' => 'Kepala Divisi Survei dan Penelitian',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Priya Musyaffa Tammam',
                'bidang_id' => 10,
                'jabatan' => 'Kepala Divisi Analisis Data dan Publikasi',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Hernawan Hilmy Haydar',
                'bidang_id' => 10,
                'jabatan' => 'Staff Ahli Divisi Survei dan Penelitian',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Mahishal Aziz',
                'bidang_id' => 10,
                'jabatan' => 'Staff Ahli Divisi Analisis Data dan Publikasi',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Gracia Effata Tambunan',
                'bidang_id' => 10,
                'jabatan' => 'Staff Muda Divisi Survei dan Penelitian',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Amelia Aprilianti',
                'bidang_id' => 10,
                'jabatan' => 'Staff Muda Divisi Survei dan Penelitian',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Syahreza Abror Alvarizqi',
                'bidang_id' => 10,
                'jabatan' => 'Staff Muda Divisi Analisis Data dan Publikasi',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Dafina Syafa Aulia',
                'bidang_id' => 10,
                'jabatan' => 'Staff Muda Divisi Analisis Data dan Publikasi',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Reina Faustina Amaris Wirahadikusumah',
                'bidang_id' => 10,
                'jabatan' => 'Staff Muda Divisi Analisis Data dan Publikasi',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Dyu Renes Jaladri',
                'bidang_id' => 10,
                'jabatan' => 'Staff Muda Divisi Analisis Data dan Publikasi',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Jhileta Michaela L Sinuraya',
                'bidang_id' => 10,
                'jabatan' => 'Staff Muda Divisi Analisis Data dan Publikasi',
                'path_foto_anggota' => ''
            ],
            //kmi
            [
                'nama' => 'Romero Maulana Rezacky',
                'bidang_id' => 11,
                'jabatan' => 'Kepala Biro Kantor Media Informasi',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Fatharik Kurnia Ramadhan',
                'bidang_id' => 11,
                'jabatan' => 'Wakil Kepala Biro Kantor Media Informasi',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Rajwaa Muflihul Aufaa',
                'bidang_id' => 11,
                'jabatan' => 'Staff Muda Divisi Content Development',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Loveando Mozart Marchiell',
                'bidang_id' => 11,
                'jabatan' => 'Staff Muda Divisi Content Development',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Farrabila Ramadhani',
                'bidang_id' => 11,
                'jabatan' => 'Staff Muda Divisi Content Development',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Mohammad Imam Muzaki',
                'bidang_id' => 11,
                'jabatan' => 'Staff Ahli Divisi Creative Design',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Muhammad Fikri Julian Nugroho',
                'bidang_id' => 11,
                'jabatan' => 'Staff Muda Divisi Creative Design',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Indra Purwanto',
                'bidang_id' => 11,
                'jabatan' => 'Staff Muda Divisi Creative Design',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Naira Fayyaza Ramadhani',
                'bidang_id' => 11,
                'jabatan' => 'Staff Muda Divisi Sosial Media dan Website',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Hana Fakhirah',
                'bidang_id' => 11,
                'jabatan' => 'Staff Muda Divisi Sosial Media dan Website',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Mohammad Izza Hakiki',
                'bidang_id' => 11,
                'jabatan' => 'Staff Muda Divisi Sosial Media dan Website',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Daffa Hirza Niam',
                'bidang_id' => 11,
                'jabatan' => 'Staff Muda Divisi Sosial Media dan Website',
                'path_foto_anggota' => ''
            ],
            //humas
            [
                'nama' => 'Muhamad Gunawan',
                'bidang_id' => 12,
                'jabatan' => 'Kepala Biro Humas',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Mona Pebriana',
                'bidang_id' => 12,
                'jabatan' => 'Wakil Kepala Biro Humas',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Shely Millata Husna',
                'bidang_id' => 12,
                'jabatan' => 'Kepala Divisi Event',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Salma Nabila',
                'bidang_id' => 12,
                'jabatan' => 'Kepala Divisi Relation and Partnership',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Umar Faqih',
                'bidang_id' => 12,
                'jabatan' => 'Sekretaris Biro Humas',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Zihan Ghevira Rahman',
                'bidang_id' => 12,
                'jabatan' => 'Bendahara Biro Humas',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Diana Raisa Kusumadewi',
                'bidang_id' => 12,
                'jabatan' => 'Staff Ahli Divisi Relation and Partnership',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Sausan Mahirah',
                'bidang_id' => 12,
                'jabatan' => 'Staff Ahli Divisi Relation and Partnership',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Dayu Ardita Arianti',
                'bidang_id' => 12,
                'jabatan' => 'Staf Muda Divisi Relation and Partnership',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Nurul Fatwah',
                'bidang_id' => 12,
                'jabatan' => 'Staf Muda Divisi Relation and Partnership',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Chelsea',
                'bidang_id' => 12,
                'jabatan' => 'Staff Muda Divisi Event',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Yasmin Atika Aulia',
                'bidang_id' => 12,
                'jabatan' => 'Staff Muda Divisi Event',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Asyifa Farhany Ainurrahman',
                'bidang_id' => 12,
                'jabatan' => 'Staff Muda Divisi Event',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Nayla Poetri Kurnia',
                'bidang_id' => 12,
                'jabatan' => 'Staff Muda Divisi Event',
                'path_foto_anggota' => ''
            ],
            [
                'nama' => 'Siriel Wafa Nuriel Fahri',
                'bidang_id' => 12,
                'jabatan' => 'Staff Muda Divisi Event',
                'path_foto_anggota' => ''
            ],



        ];

        DB::table('anggotas')->insert($anggota);
    }
}
