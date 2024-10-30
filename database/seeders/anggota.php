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
            [
                'nama' =>'Hana Tsabita', 
                'bidang_id' => 13, 
                'jabatan' => 'Ketua Badan Eksekutif Mahasiswa FSM'
            ],
            [
                'nama' =>'Nada Ahmad Rayhan', 
                'bidang_id' => 2, 
                'jabatan' => 'Kepala Bidang Pengembangan Sumber Daya Mahasiswa'
            ],
            [
                'nama' =>'Sherine Putri Nurhaliza', 
                'bidang_id' => 2, 
                'jabatan' => 'Wakil Kepala Bidang Pengembangan Sumber Daya Mahasiswa'
            ],
            [
                'nama' =>'Chintami Aurora Wulandari', 
                'bidang_id' => 2, 
                'jabatan' => 'Kepala Divisi Pengembangan dan Pemberdayaan Mahasiswa'
            ],
            [
                'nama' =>'Brenda Feodora Zivanka', 
                'bidang_id' => 2, 
                'jabatan' => 'Kepala Divisi Kurikulum Kaderisasi'
            ],
            [
                'nama' =>'Iqvan Nur Cahyo', 
                'bidang_id' => 2, 
                'jabatan' => 'Staf Ahli Divisi Pengembangan dan Pemberdayaan Mahasiswa'
            ],
            [
                'nama' =>'Alya Putri Meyriska', 
                'bidang_id' => 2, 
                'jabatan' => 'Staf Ahli Divisi Pengembangan dan Pemberdayaan Mahasiswa'
            ],
            [
                'nama' =>'Faditya Aldi Nugroho ', 
                'bidang_id' => 2, 
                'jabatan' => 'Staf Muda Divisi Pengembangan dan Pemberdayaan Mahasiswa'
            ],
            [
                'nama' =>'Yusi Setya Salsabila', 
                'bidang_id' => 2, 
                'jabatan' => 'Staf Muda Divisi Pengembangan dan Pemberdayaan Mahasiswa'
            ],
            [
                'nama' =>'Nadia Putri Mahardika', 
                'bidang_id' => 2, 
                'jabatan' => 'Staf Muda Divisi Kurikulum Kaderisasi'
            ],
            [
                'nama' =>'Siti Fazira Syaikha', 
                'bidang_id' => 2, 
                'jabatan' => 'Staf Muda Divisi Kurikulum Kaderisasi'
            ],
            [
                'nama' =>'Kevin Andytha Syahputri', 
                'bidang_id' => 2, 
                'jabatan' => 'Staf Muda Divisi Kurikulum Kaderisasi'
            ],
            [
                'nama' =>'Riski Setiawan', 
                'bidang_id' => 2, 
                'jabatan' => 'Staf Muda Divisi Kurikulum Kaderisasi'
            ],
            [
                'nama' =>'Abd Aziz', 
                'bidang_id' => 2, 
                'jabatan' => 'Staf Muda Divisi Kurikulum Kaderisasi'
            ],
            [
                'nama' =>'Salma Firyal Kamilah', 
                'bidang_id' => 2, 
                'jabatan' => 'Staf Muda Divisi Kurikulum Kaderisasi'
            ],
            [
                'nama' =>'Rifqi Athalla Ramadhana', 
                'bidang_id' => 3, 
                'jabatan' => 'Kepala Bidang Riset dan Keilmuan'
            ],
            [
                'nama' =>'Kayla Azarya Putri Christanti Saranga', 
                'bidang_id' => 3, 
                'jabatan' => 'Wakil Kepala Bidang Riset dan Keilmuan'
            ],
            [
                'nama' =>'Liwaul Izzati Haibah', 
                'bidang_id' => 3, 
                'jabatan' => 'Kepala Divisi Pengembangan Riset'
            ],
            [
                'nama' =>'Raisya Noerzahrani Putri', 
                'bidang_id' => 3, 
                'jabatan' => 'Kepala Divisi Akademik'
            ],
            [
                'nama' =>'Galih Panca Utama', 
                'bidang_id' => 3, 
                'jabatan' => 'Staff Muda Divisi Pengembangan Riset'
            ],
            [
                'nama' =>'Sabila Anastasia', 
                'bidang_id' => 3, 
                'jabatan' => 'Staff Muda Divisi Pengembangan Riset'
            ],
            [
                'nama' =>'Refika Banjarnahor', 
                'bidang_id' => 3, 
                'jabatan' => 'Staff Muda Divisi Pengembangan Riset'
            ],
            [
                'nama' =>'Febiola Irashai', 
                'bidang_id' => 3, 
                'jabatan' => 'Staff Muda Divisi Pengembangan Riset'
            ],
            [
                'nama' =>'Irgi Maulana Hakim', 
                'bidang_id' => 3, 
                'jabatan' => 'Staff Muda Divisi Pengembangan Riset'
            ],
            [
                'nama' =>'Sharda Radhisya Wiranti', 
                'bidang_id' => 3, 
                'jabatan' => 'Staff Muda Divisi Pengembangan Riset'
            ],
            [
                'nama' =>'Wardah Alfa Syahra', 
                'bidang_id' => 3, 
                'jabatan' => 'Staff Muda Divisi Akademik'
            ],
            [
                'nama' =>'Ahmad Afif Zakariya', 
                'bidang_id' => 3, 
                'jabatan' => 'Staff Muda Divisi Akademik'
            ],
            [
                'nama' =>'Almas Arvina Adi', 
                'bidang_id' => 3, 
                'jabatan' => 'Staff Muda Divisi Akademik'
            ],
            [
                'nama' =>'Farah Nur Ramadani', 
                'bidang_id' => 3, 
                'jabatan' => 'Staff Muda Divisi Akademik'
            ],
            [
                'nama' =>'Ersha Dwi Ariwiyanti', 
                'bidang_id' => 3, 
                'jabatan' => 'Staff Muda Divisi Akademik'
            ],
            [
                'nama' =>'Tasya Tazkiyah', 
                'bidang_id' => 6, 
                'jabatan' => 'Kepala Bidang Ekonomi Kreatif'
            ],
            [
                'nama' =>'Andi Raifina Hana Rosyada', 
                'bidang_id' => 6, 
                'jabatan' => 'Wakil Kepala Bidang Ekonomi Kreatif'
            ],
            [
                'nama' =>'Sheina Fathurobaniah', 
                'bidang_id' => 6, 
                'jabatan' => 'Kepala Divisi Business Resources Centre'
            ],
            [
                'nama' =>'Elshania Putri Margareta', 
                'bidang_id' => 6, 
                'jabatan' => 'Kepala Divisi Entrepreneur Development Centre'
            ],
            [
                'nama' =>'Rafa Anisa Putri', 
                'bidang_id' => 6, 
                'jabatan' => 'Staff Ahli Divisi Entrepreneur Development Centre '
            ],
            [
                'nama' =>'Khalishah Cahyasari', 
                'bidang_id' => 6, 
                'jabatan' => 'Staff Ahli Divisi Entrepreneur Development Centre'
            ],
            [
                'nama' =>'Diandra Puspo negoro', 
                'bidang_id' => 6, 
                'jabatan' => 'Staff Muda Divisi Entrepreneur Development Centre '
            ],
            [
                'nama' =>'Muhammad Zidni Chilma', 
                'bidang_id' => 6, 
                'jabatan' => 'Staff Muda Divisi Entrepreneur Development Centre'
            ],
            [
                'nama' =>'Muhammad Azka Subhan', 
                'bidang_id' => 6, 
                'jabatan' => 'Staff Muda Divisi Entrepreneur Development Centre'
            ],
            [
                'nama' =>'Kayis Hilmi Farih', 
                'bidang_id' => 6, 
                'jabatan' => 'Staff Muda Divisi Entrepreneur Development Centre'
            ],
            [
                'nama' =>'Raisya Syeine Widyaloka', 
                'bidang_id' => 6, 
                'jabatan' => 'Staff Ahli Divisi Business Resources Centre'
            ],
            [
                'nama' =>'Kaila Khansa', 
                'bidang_id' => 6, 
                'jabatan' => 'Staff Muda Divisi Business Resources Centre'
            ],
            [
                'nama' =>'Muhammad Fadhlurrahman Faza', 
                'bidang_id' => 6, 
                'jabatan' => 'Staff Muda Divisi Business Resources Centre'
            ],
            [
                'nama' =>'Kevin Adi Santoso', 
                'bidang_id' => 6, 
                'jabatan' => 'Staff Muda Divisi Business Resources Centre'
            ],
            [
                'nama' =>'Nabila Halisa Chairina', 
                'bidang_id' => 7, 
                'jabatan' => 'Kepala Bidang Seni dan Olahraga'
            ],
            [
                'nama' =>'Danish Rahman Athaariq', 
                'bidang_id' => 7, 
                'jabatan' => 'Wakil Kepala Bidang Seni dan Olahraga'
            ],
            [
                'nama' =>'Mohammad Alim Hasan', 
                'bidang_id' => 7, 
                'jabatan' => 'Kepala Divisi Olahraga'
            ],
            [
                'nama' =>'Maria Azalia Christella', 
                'bidang_id' => 7, 
                'jabatan' => 'Kepala Divisi Seni'
            ],
            [
                'nama' =>'Hamka Hafizh', 
                'bidang_id' => 7, 
                'jabatan' => 'Kepala Divisi Manajemen Minat dan Bakat'
            ],
            [
                'nama' =>'Muhammad Khoiruddin Daffa Fiartra', 
                'bidang_id' => 7, 
                'jabatan' => 'Staff Ahli Divisi Olahraga'
            ],
            [
                'nama' =>'Aula Amalia Husna', 
                'bidang_id' => 7, 
                'jabatan' => 'Staff Ahli Divisi Seni'
            ],
            [
                'nama' =>'Daniswara Dwiputera Perwata', 
                'bidang_id' => 7, 
                'jabatan' => 'Staff Ahli Divisi Manajemen Minat dan Bakat'
            ],
            [
                'nama' =>'Ulina Rotua', 
                'bidang_id' => 7, 
                'jabatan' => 'Staff Ahli Divisi Manajemen Minat dan Bakat'
            ],
            [
                'nama' =>'Nikolas Paruda Pradayan', 
                'bidang_id' => 7, 
                'jabatan' => 'Staff Muda Divisi Olahraga'
            ],
            [
                'nama' =>'Nabila Salsabila', 
                'bidang_id' => 7, 
                'jabatan' => 'Staff Muda Divisi Olahraga'
            ],
            [
                'nama' =>'Dilla Syabita', 
                'bidang_id' => 7, 
                'jabatan' => 'Staff Muda Divisi Olahraga'
            ],
            [
                'nama' =>'Ranggadya Aditama Ramadhani', 
                'bidang_id' => 7, 
                'jabatan' => 'Staff Muda Divisi Seni'
            ],
            [
                'nama' =>'Zira Khanza Kespalani', 
                'bidang_id' => 7, 
                'jabatan' => 'Staff Muda Divisi Seni'
            ],
            [
                'nama' =>'Dinda Nabila Putri', 
                'bidang_id' => 7, 
                'jabatan' => 'Staff Muda Divisi Seni'
            ],
            [
                'nama' =>'Abu Muhammad Abdul Malik', 
                'bidang_id' => 7, 
                'jabatan' => 'Staff Muda Divisi Manajemen Minat dan Bakat'
            ],
            [
                'nama' =>'Alvanesya Destia Handini', 
                'bidang_id' => 5, 
                'jabatan' => 'Kepala Bidang Harmonisasi Kampus'
            ],
            [
                'nama' =>'Arija Qoshasi', 
                'bidang_id' => 5, 
                'jabatan' => 'Wakil Kepala Bidang Harmonisasi Kampus'
            ],
            [
                'nama' =>'Salma Najwa Az-Zahro', 
                'bidang_id' => 5, 
                'jabatan' => 'Ketua Divisi Sinergisitas Lembaga'
            ],
            [
                'nama' =>'Nabila Ratu Veeralyn', 
                'bidang_id' => 5, 
                'jabatan' => 'Ketua Divisi Analisis Kebijakan Kampus'
            ],
            [
                'nama' =>'Hanun Hasna Karimah', 
                'bidang_id' => 5, 
                'jabatan' => 'Staf Ahli Analisis Kebijakan Kampus'
            ],
            [
                'nama' =>'Aditya Haidar Faishal', 
                'bidang_id' => 5, 
                'jabatan' => 'Staf Ahli Analisis Kebijakan Kampus'
            ],
            [
                'nama' =>'Alya Rizqi Qanita', 
                'bidang_id' => 5, 
                'jabatan' => 'Bendahara Bidang Harmonisasi Kampus'
            ],
            [
                'nama' =>'Putra Ilham Manzist', 
                'bidang_id' => 5, 
                'jabatan' => 'Staf Muda Analisis Kebijakan Kampus'
            ],
            [
                'nama' =>'Ezra Ziddanea Mayda Putri', 
                'bidang_id' => 5, 
                'jabatan' => 'Sekretaris Bidang Harmonisasi Kampus'
            ],
            [
                'nama' =>'Safira Oktafia Pratiwi', 
                'bidang_id' => 5, 
                'jabatan' => 'Staf Ahli Sinergitas Lembaga'
            ],
            [
                'nama' =>'Krisna Okky Widayat', 
                'bidang_id' => 5, 
                'jabatan' => 'Staf Ahli Sinergitas Lembaga'
            ],
            [
                'nama' =>'Nazwa Maulida Azzahra', 
                'bidang_id' => 5, 
                'jabatan' => 'Staf Muda Sinergitas Lembaga'
            ],
            [
                'nama' =>'Afni Anggreani', 
                'bidang_id' => 5, 
                'jabatan' => 'Staf Muda Sinergitas Lembaga'
            ],
            [
                'nama' =>'Andrea Bianca Callista', 
                'bidang_id' => 5, 
                'jabatan' => 'Staf Muda Sinergitas Lembaga'
            ],
        ];

        DB::table('anggotas')->insert($anggota);
    }
}
