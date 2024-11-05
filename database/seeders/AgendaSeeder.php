<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $agenda = [
            //tim pmo
            [
                'namaagenda' => 'Staff Rewarding',
                'bidang_id' => 1,
                'deskripsi' => 'Staff rewarding difungsikan sebagai wadah untuk mengapresiasi setiap kinerja terbaik dari staf BEM FSM Undip sekaligus membangkitkan semangat pada staf BEM FSM agar dapat memaksimalkan potensi terbaiknya.',
                'path_foto_agenda' => '',
            ],
            [
                'namaagenda' => 'Laporan Bidang',
                'bidang_id' => 1,
                'deskripsi' => 'Laporan bidang merupakan himpunan data dari tiap Bidang/Biro dalam keberjalanannya yang diadakan per-triwulan sebagai media evaluasi Bidang/Biro. Laporan bidang dibuat dengan mengacu pada penilaian pengawasan dan hasil survey internal BEM FSM Undip 2024.',
                'path_foto_agenda' => '',
            ],
            [
                'namaagenda' => 'Rapor Kinerja Individu',
                'bidang_id' => 1,
                'deskripsi' => 'Rapor kinerja individu difungsikan untuk mengetahui, mengukur, dan menilai kinerja dari setiap pengurus BEM FSM berdasarkan KPI yang sudah ditetapkan sehingga dapat memberikan gambaran terukur bagaimana progres pengurus selama masa kepengurusan.',
                'path_foto_agenda' => '',
            ],
            [
                'namaagenda' => 'Makrab',
                'bidang_id' => 1,
                'deskripsi' => 'Makrab atau Malam Pengakraban merupakan agenda keakraban rutin sebagai salah satu media pendekatan dan harmonisasi internal BEM FSM Undip 2024 dengan harapan untuk menjaga stabilitas performa seluruh pengurus.',
                'path_foto_agenda' => '',
            ],
            [
                'namaagenda' => 'Sec account BEM FSM 2024',
                'bidang_id' => 1,
                'deskripsi' => 'Second account BEMFSM 2024 merupakan sebuah media berupa second account instagram yang memuat aktivitas-aktivitas pengurus BEM FSM Undip 2024 dan google form dengan format anonim yang memuat pesan atau kesan antar pengurus BEM FSM Undip 2024.',
                'path_foto_agenda' => '',
            ],
            //psdm
            [
                'namaagenda' => 'Database Pembicara dan Pengaryaan',
                'bidang_id' => 2,
                'deskripsi' => 'Database pembicara berisikan mahasiswa aktif, alumni, influencer, dsb yang dirasa memiliki potensi untuk direkomendasikan menjadi pembicara dalam kegiatan kaderisasi di FSM.',
                'path_foto_agenda' => '',
            ],
            [
                'namaagenda' => 'Jurnal Kaderisasi',
                'bidang_id' => 2,
                'deskripsi' => 'Jurnal kaderisasi merupakan produk kaderisasi yang berbentuk makalah dengan topik pembahasan mengenai isu dan edukasi kaderisasi, keterkaitan organisasi dengan mahasiswa, serta pengembangan sumber sumber daya manusia dalam ranah universitas dan umum.',
                'path_foto_agenda' => '',
            ],
            [
                'namaagenda' => 'Lingkar PSDM HMD dan/atau UKM-F',
                'bidang_id' => 2,
                'deskripsi' => 'Forum diskusi mengenai informasi dan isu kaderisasi tingkat departemen, fakultas, dan universitas baik pada ranah himpunan maupun UKM-F.',
                'path_foto_agenda' => '',
            ],
            [
                'namaagenda' => 'Kaderpedia',
                'bidang_id' => 2,
                'deskripsi' => 'Pencerdasan bagi Mahasiswa FSM dalam bentuk infografis mengenai permasalahan, pemahaman, serta hal-hal lain yang berkaitan dengan kaderisasi serta organisasi di lingkup Fakultas dan Universitas.',
                'path_foto_agenda' => '',
            ],
            // riskel
            [
                'namaagenda' => 'Intip Riskel (Intel)',
                'bidang_id' => 3,
                'deskripsi' => 'Menambah wawasan dan minat masyarakat mengenai berita keilmuan serta membuka pandangan mahasiswa FSM terkait riset.',
                'path_foto_agenda' => '',
            ],
            [
                'namaagenda' => 'Roadshow',
                'bidang_id' => 3,
                'deskripsi' => 'Menjalin komunikasi dan koordinasi yang selaras dengan bidang, biro, dan UKM-F yang membawahi keilmuan dan pendidikan.',
                'path_foto_agenda' => '',
            ],

            [
                'namaagenda' => 'Catalyst Mentoring Session',
                'bidang_id' => 3,
                'deskripsi' => 'Kegitan yang diisi dengan pelatihan intensif kepada Mahasiswa FSM dalam meningkatkan iklim riset dan kesempatan Mahasiswa FSM dalam mengikuti lomba.',
                'path_foto_agenda' => '',
            ],
            [
                'namaagenda' => 'Publikasi Riskel',
                'bidang_id' => 3,
                'deskripsi' => 'Menyampaikan Informasi lomba dan pelatihan terkait keilmuan dengan baik serta mengapresiasi prestasi mahasiswa FSM.',
                'path_foto_agenda' => '',
            ],
            //kesma
            [
                'namaagenda' => 'Infocacy (Information of Academic and Advocacy)',
                'bidang_id' => 4,
                'deskripsi' => 'Infocacy (Information of Academic and Advocacy) merupakan penyampaian informasi yang berkaitan dengan UKT dan akademik. Infocacy juga berperan untuk mengadvokasikan isu-isu yang ada di lingkup FSM agar tercapainya penyelesaian.',
                'path_foto_agenda' => '',
            ],
            [
                'namaagenda' => 'HFF atau Hands For Friends',
                'bidang_id' => 4,
                'deskripsi' => 'HFF atau Hands For Friends merupakan kegiatan penggalangan dana sebagai bentuk kepedulian terhadap mahasiswa FSM yang mengalami musibah. Pengumpulan dana HFF berasal dari HMD dan galang dana yang dilakukan secara insidental.',
                'path_foto_agenda' => '',
            ],

            [
                'namaagenda' => 'Kawal Maba',
                'bidang_id' => 4,
                'deskripsi' => 'Kegiatan pengawalan bagi mahasiswa baru berupa pemberian informasi terkait administrasi registrasi ulang, biaya kuliah baik UKT & SPI dan informasi lainnya yang berkaitan dengan mahasiswa baru hingga mahasiswa tersebut dinyatakan menjadi mahasiswa FSM.',
                'path_foto_agenda' => '',
            ],
            [
                'namaagenda' => 'Forkesma',
                'bidang_id' => 4,
                'deskripsi' => 'Forkesma atau forum kesejahteraan mahasiswa merupakan forum kesma HMD bersama dengan kesma BEM FSM. Forum ini diadakan dengan tujuan untuk membahas isu-isu maupun pokok bahasan di FSM sekaligus untuk menjalin sinergitas dengan kesma HMD sebagai upaya untuk memaksimalkan kesejahteraan mahasiswa di FSM Undip.',
                'path_foto_agenda' => '',
            ],
            [
                'namaagenda' => 'Sekolah Kesma',
                'bidang_id' => 4,
                'deskripsi' => 'Sekolah kesma adalah kegiatan berupa forum dengan tujuan pencerdasan bagi internal maupun eksternal kesma di lingkup FSM sebagai upaya untuk meningkatkan kinerja fungsionaris dalam mewujudkan kesejahteraan mahasiswa FSM',
                'path_foto_agenda' => '',
            ],
            [
                'namaagenda' => 'Infosce (Information Of Scholarship and Career)',
                'bidang_id' => 4,
                'deskripsi' => 'Infosce adalah program yang menyajikan informasi dan pelayanan terkait beasiswa, magang, dan lowongan pekerjaan. Informasi diberikan melalui Instagram dan linktree dari Kesma BEM FSM dan BEM FSM.',
                'path_foto_agenda' => '',
            ],
            //harkam
            [
                'namaagenda' => 'FOKUS (Forum Diskusi)',
                'bidang_id' => 5,
                'deskripsi' => 'Pengadaan forum yang akan dipandu oleh Bidang Harmonisasi Kampus bersama seluruh Ketua Ormawa FSM dengan membahas beberapa pokok bahasan tertentu sesuai dengan kebutuhan dan ketercapaian.',
                'path_foto_agenda' => '',
            ],
            [
                'namaagenda' => 'SILBI (Silaturahmi Birokrasi)',
                'bidang_id' => 5,
                'deskripsi' => 'Bertemu dengan birokrasi untuk menjalin komunikasi antara fungsionaris BEM FSM 2024 dengan perwakilan birokrasi.',
                'path_foto_agenda' => '',
            ],
            //ekotif
            [
                'namaagenda' => 'Economic Insights (E-Sights)',
                'bidang_id' => 6,
                'deskripsi' => 'Publikasi berita maupun informasi mengenai hal-hal yang berkaitan dengan kewirausahaan dan membagikan konten pencerdasan dengan tujuan untuk menumbuhkan iklim wirausaha di FSM.',
                'path_foto_agenda' => '',
            ],
            [
                'namaagenda' => 'Fun Selling',
                'bidang_id' => 6,
                'deskripsi' => 'Kegiatan ini dilakukan dengan tujuan untuk mendapatkan dana melalui usaha-usaha kreatif serta inovatif yang digunakan sebagai penunjang dana keuangan BEM FSM 2023.',
                'path_foto_agenda' => '',
            ],
            [
                'namaagenda' => 'FSM Business Tracking',
                'bidang_id' => 6,
                'deskripsi' => 'Kegiatan ini dilakukan dengan tujuan untuk menghimpun dan mendata mahasiswa FSM yang memiliki usaha dan menyediakan wadah berwirausaha serta memberikan informasi mengenai kewirausahaan',
                'path_foto_agenda' => '',
            ],
            //seniora
            //dimas
            [
                'namaagenda' => 'Riung Sosial dan Lingkungan (Riung Sosling)',
                'bidang_id' => 8,
                'deskripsi' => 'Forum diskusi bersama bidang sosial di HMD FSM dan biro yang aktif dalam ranah lingkungan dan konservasi untuk menyelaraskan kegiatan dan berdiskusi bersama dalam menanggapi isu sosial yang sedang terjadi.',
                'path_foto_agenda' => '',
            ],
            //sospol
            [
                'namaagenda' => 'FSM Bergerak',
                'bidang_id' => 9,
                'deskripsi' => 'FSM Bergerak merupakan ruang diskusi untuk khususnya mahasiswa FSM agar dapat menjalankan visi, misi dan latar belakang dari Sospol BEM FSM. Selain itu,  FSM Bergerak bisa menjadi ruang kaderisasi politik mahasiswa FSM. ',
                'path_foto_agenda' => '',
            ],
            [
                'namaagenda' => 'Diskusi,Kajian dan Visitasi (DKV)',
                'bidang_id' => 9,
                'deskripsi' => 'Diskusi, Kajian dan Visitasi merupakan rangkain eskalasi sebuah gerakan. Visitasi dilakukan untuk memperoleh pengetahuan dan sudut pandang dari lembaga/komunitas yang memiliki kefasihan terhadap suatu isu agar Sospol BEM FSM dapat merumuskan kajian yang tepat.',
                'path_foto_agenda' => '',
            ],
            //biro stat
            //biro kmi
            //biro humas

        ];
        DB::table('agendas')->insert($agenda);
    }
}
