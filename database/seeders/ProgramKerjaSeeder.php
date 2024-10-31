<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proker = [
            //tim pmo
            [
                'namaproker' => 'Open Recruitment',
                'bidang_id' => 1,
                'deskripsi' => 'Open Recruitment merupakan rangkaian proses perekrutan Kepala Divisi dan Staf Tim/Bidang/Biro BEM FSM Undip 2024. Proses perekrutan dilakukan pada awal kepengurusan dengan menetapkan standar dan tahap penyeleksian dalam kualifikasi tertentu.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Open Recruitment',
                'bidang_id' => 1,
                'deskripsi' => 'Open Recruitment merupakan rangkaian proses perekrutan Kepala Divisi dan Staf Tim/Bidang/Biro BEM FSM Undip 2024. Proses perekrutan dilakukan pada awal kepengurusan dengan menetapkan standar dan tahap penyeleksian dalam kualifikasi tertentu.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Open House',
                'bidang_id' => 1,
                'deskripsi' => 'Open House merupakan wadah untuk mensosialisasikan setiap kegiatan, nilai, dan arahan kerja yang akan dilaksanakan BEM FSM Undip 2024 kepada seluruh mahasiswa FSM UNDIP.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'First Gathering',
                'bidang_id' => 1,
                'deskripsi' => 'First Gathering merupakan kegiatan untuk saling mengenal satu sama lain sehingga tercipta hubungan kekeluargaan yang harmonis. Selain itu, First Gathering bertujuan untuk memberikan gambaran kepada seluruh pengurus BEM FSM Undip 2024 mengenai kegiatan yang akan dilaksanakan selama satu periode ke depan.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Fun with BEM',
                'bidang_id' => 1,
                'deskripsi' => 'Fun with BEM adalah langkah strategis untuk memperkenalkan kabinet dan program kerja yang ada di dalamnya, serta sebagai ajang branding kepada masyarakat FSM dengan mengadakan Bazaar Bidang dan FSM Rendezvous.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Upgrading',
                'bidang_id' => 1,
                'deskripsi' => 'Upgrading merupakan kegiatan yang diisi dengan games untuk mengakrabkan pengurus BEM FSM Undip 2024 serta memberi materi pembekalan diri selama menjabat. Tujuan diadakannya kegiatan ini adalah antar pengurus BEM FSM dapat mengenal satu sama lain dengan baik serta dapat meningkatkan kualitas kinerja pengurus BEM FSM Undip 2024.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Sekolah Bidang',
                'bidang_id' => 1,
                'deskripsi' => 'Resonation School merupakan rangkaian kegiatan pengenalan dan pendalaman pemahaman dari tiap Tim/Bidang/Biro BEM FSM Undip 2024 guna memperkuat pengetahuan mengenai Tim/Bidang/Biro masing-masing.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Internship',
                'bidang_id' => 1,
                'deskripsi' => 'Internship merupakan program yang diusung oleh PMO dan berkoordinasi langsung dengan Koordinator Bidang dalam memberi kesempatan bagi mahasiswa FSM untuk ikut merasakan iklim kerja BEM FSM Undip 2024 melalui Tim/Bidang/Biro pilihannya.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Farewell',
                'bidang_id' => 1,
                'deskripsi' => 'Farewell merupakan kegiatan perpisahan yang diadakan di akhir kepengurusan untuk memberikan kesan sebelum melepas kepengurusan. Kegiatan ini diisi dengan persembahan dari dan untuk pengurus agar dapat bersama-sama memaknai hasil kinerja selama setahun berkarya di BEM FSM Undip 2024.',
                'path_foto_proker' => '',
            ],
            //psdm
            [
                'namaproker' => 'ODM FSM',
                'bidang_id' => 2,
                'deskripsi' => 'Serangkaian kegiatan penyambutan mahasiswa baru FSM yang meliputi pengenalan dan pembiasaan kehidupan kampus, tingkat Universitas, Fakultas, dan Departemen.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Leadership Training',
                'bidang_id' => 2,
                'deskripsi' => 'Pelatihan kepemimpinan yang menjembatani LKMM Pra Dasar dan LKMM Dasar yang dikemas dalam bentuk penyampaian materi guna menumbuhkan jiwa kepemimpinan.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'LKMMD FSM (Latihan Keterampilan Manajemen Mahasiswa tingkat Dasar FSM)',
                'bidang_id' => 2,
                'deskripsi' => 'Pelatihan kepemimpinan sekaligus pemberian materi manajerial organisasi, isu lingkungan kampus, sosial politik, dan lainnya yang dilaksanakan dalam 3 tahapan (Pra, hari H, dan Pasca).',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Riung Pencakar Mimpi',
                'bidang_id' => 2,
                'deskripsi' => 'Pelatihan kepemimpinan yang menjembatani antara LKMM Tingkat Dasar dengan LKMM Tingkat Menengah guna meningkatkan kemampuan mahasiswa dalam mengkoordinasikan, mengembangkan suatu organisasi, dan membina tim kerja dalam suatu organisasi atau kelembagaan.',
                'path_foto_proker' => '',
            ],
            //riskel
            [
                'namaproker' => 'Research School 2',
                'bidang_id' => 3,
                'deskripsi' => 'Kaderisasi Riset yang memberikan pemahaman tentang manajemen tim riset, teknik pembuatan KTI dan presentasi, sekaligus meningkatkan kualitas kakak pembimbing PKM serta minat mahasiswa FSM untuk mengikuti event KTI.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Diponegoro Science Festival',
                'bidang_id' => 3,
                'deskripsi' => 'Sarana Branding FSM kepada para Siswa SMA yang akan mengikuti lomba dan guna untuk meningkatkan wawasan Mahasiswa FSM dalam Jembatan Pilar Riset Undip',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Jembatan Pilar Riset',
                'bidang_id' => 3,
                'deskripsi' => 'Memberikan informasi, pemahaman dan pelayanan untuk meningkatkan minat mahasiswa FSM terhadap Jembatan Pilar Riset.',
                'path_foto_proker' => '',
            ],
            //kesma
            [
                'namaproker' => 'SC Day',
                'bidang_id' => 4,
                'deskripsi' => 'Scholarship and Career Day (SC Day) adalah acara yang menghadirkan dua kegiatan untuk membantu mahasiswa dalam lebih jauh mengenal persiapan karir/beasiswa di FSM. SC Day mencakup Scholarship & Career Forum dan Scholarship Fair, yang bertujuan membantu mahasiswa mengenal beasiswa-beasiswa yang ada di FSM.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Beasiswa Kesatria Mandala',
                'bidang_id' => 4,
                'deskripsi' => 'Beasiswa Kesatria Mandala merupakan kegiatan pemberian bantuan finansial kepada mahasiswa FSM yang mengalami kendala dalam pembayaran UKT. Dana bantuan tersebut berasal dari open donasi beasiswa secara terbuka. Nama beasiswa ini diambil dari nama kabinet BEM FSM Undip 2024.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'SC Talk',
                'bidang_id' => 4,
                'deskripsi' => 'SC Talk (Scholarship & Career Talk) adalah kegiatan berupa podcast dengan narasumber yang memiliki pengalaman dibidang beasiswa/karir danakan membahas seputar dunia persiapan beasiswa/karir.',
                'path_foto_proker' => '',
            ],
            //harkam 
            [
                'namaproker' => 'FSM Issues Center',
                'bidang_id' => 5,
                'deskripsi' => 'Kegiatan yang dilakukan untuk menganalisis, mensurvei, dan mengkaji problematika yang berhubungan dengan civitas akademika FSM sehingga terciptanya keterbukaan kepada publik mengenai problematika yang ada dengan data yang dapat dipertanggungjawabkan.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'FSM Gathering',
                'bidang_id' => 5,
                'deskripsi' => 'Suatu rangkaian advokasi yang dilakukan oleh bidang Harmonisasi Kampus dengan menampung aspirasi mahasiswa FSM dan merupakan wadah berdialog antara publik dengan birokrasi.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Tilik Ormawa',
                'bidang_id' => 5,
                'deskripsi' => 'Melakukan branding proker dan branding Ormawa melalui postingan Instagram dan podcast di akun resmi BEM FSM.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Roadshow',
                'bidang_id' => 5,
                'deskripsi' => 'Kegiatan mengunjungi setiap HMD di FSM yang diisi dengan pemaparan arahan kerja masing-masing partisipan baik HMD maupun BEM FSM serta FGD sesuai dengan fokus bidangnya masing-masing.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'FSM Harmony',
                'bidang_id' => 5,
                'deskripsi' => 'Kegiatan ini merupakan malam puncak bagi seluruh Ormawa yang telah mengabdi untuk FSM selama satu tahun kepengurusan.',
                'path_foto_proker' => '',
            ],
            //ekotif
            [
                'namaproker' => 'Science Economic Competition (SECTION 2.0)',
                'bidang_id' => 6,
                'deskripsi' => 'SECTION 2.0 adalah sebuah lomba business case yang dirancang agar peserta dapat menyelesaikan suatu masalah dengan mengembangkan solusi bisnis kreatif dan inovatif. Lomba ini terbuka dalam bentuk tim yang memiliki minat dan pengalaman di bidang bisnis, manajemen, dan kewirausahaan.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Business Innovation and Growth Session (BIGS)',
                'bidang_id' => 6,
                'deskripsi' => 'Business Innovation and Growth Session (BIGS) adalah sebuah sarana untuk meningkatkan pengetahuan seputar bisnis serta mempersiapkan mahasiswa FSM dalam mengikuti lomba kewirausahaan dengan memberikan pelatihan selama 3 session. Adapun dua topik utama yang akan dibawakan yaitu mengenai ilmu pengetahuan seputar ekonomi dan Program Mahasiswa Wirausaha.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Economic Society',
                'bidang_id' => 6,
                'deskripsi' => 'Economic Society adalah program kerja yang menyediakan fasilitas studi banding dan forum komunikasi antara Bidang Ekotif BEM FSM dengan pihak eksternal guna menjalin hubungan baik sehingga tercipta koordinasi yang lancar. Adapun pihak eksternal yang dimaksud yaitu Bidang Ekonomi HMD, Bidang Ekonomi BEM Fakultas di Undip, dan Bidang Ekonomi BEM Universitas di Indonesia.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Mandala Store',
                'bidang_id' => 6,
                'deskripsi' => 'Sebuah platform toko online dan offline yang berfungsi sebagai tempat penjualan barang-barang dengan tujuan menghasilkan profit sebagai penunjang finansial proker seperti merchandise.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Riung Mandala Starter Crew',
                'bidang_id' => 6,
                'deskripsi' => 'Pengadaan serta penjualan perlengkapan pengurus BEM FSM, yang terdiri dari jaket BEM, jaket kabinet, lanyard, badge, dll.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Starterpack Maba',
                'bidang_id' => 6,
                'deskripsi' => 'Penjualan berbagai macam paket atribut yang dibutuhkan mahasiswa baru pada saat akan melakukan orientasi',
                'path_foto_proker' => '',
            ],
            //seniora
            [
                'namaproker' => 'Dekan Cup',
                'bidang_id' => 7,
                'deskripsi' => 'Dekan Cup merupakan acara tahunan di FSM Undip berupa serangkaian kegiatan lomba antar departemen dalam bentuk pekan olahraga yang terbuka untuk masing-masing delegasi dari seluruh departemen di FSM Undip guna meningkatkan keakraban, kekeluargaan serta kebersamaan di lingkungan FSM Undip. Tiap tahunnya Dekan Cup selalu membawakan lomba lomba yang beragam dalam bidang olahraga dan tentunya menyesuaikan keadaan agar lomba yang diadakan tetap relevan.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Prada Olimdipo',
                'bidang_id' => 7,
                'deskripsi' => 'Prada (Pendelegasian Riung Mandala) hadir bertujuan untuk mewadahi minat dan bakat mahasiswa FSM dan sebagai database guna pengkaryaan mahasiswa FSM Undip pada kompetisi Olimpiade Diponegoro. Pendekar merupakan kegiatan seleksi terbuka untuk delegasi dari masing - masing departemen di FSM Undip dan juga sebagai kegiatan pemberian pelayanan dan bantuan administrasi untuk mahasiswa FSM yang lolos seleksi untuk mengikuti kompetisi Olimpiade Diponegoro.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Larut',
                'bidang_id' => 7,
                'deskripsi' => 'Latihan rutin (LARUT) merupakan suatu wadah yg ditujukan bagi mahasiswa fsm yang memiliki potensi dan minat dibidang olahraga bertujuan untuk mengembangkan kemampuan serta menjalin silaturahmi antar mahasiswa fsm',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'FSM Got Talent',
                'bidang_id' => 7,
                'deskripsi' => 'FSM Got Talent merupakan kegiatan perlombaan seni yang terbuka untuk seluruh mahasiswa FSM untuk mengekspresikan minat dan bakatnya dalam bidang seni, sama seperti Dekan Cup, FSM Got Talent tiap tahunnya selalu membawakan macam macam lomba dalam bidang seni yang menyesuaikan dengan keadaan agar tetap relevan dan dapat diikuti oleh seluruh delegasi dari masing masing departemen.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Selaras',
                'bidang_id' => 7,
                'deskripsi' => 'Selaras bertujuan untuk mewadahi mahasiswa dalam bidang seni di FSM Undip. Selaras hadir sebagai kegiatan yang diadakan untuk menciptakan kolaborasi karya seni antara Seniora BEM FSM dengan semua lembaga Seniora/Mikat HMD FSM Undip, kolaborasi yang diciptakan dapat berupa lagu, puisi, dan konten menarik dalam bidang seni lainnya.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Lacestra',
                'bidang_id' => 7,
                'deskripsi' => 'Lacestra adalah sebuah program kerja yang berbentuk apresiasi kepada mahasiswa/i FSM di bidag seni yang disuguhkan dalam bentuk acara puncak yang menampilkan sesi perhargaan serta pentas seni. Acara ini berupa penampilan dari pemenang FGT dan awarding pemenang dekan cup.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Prada DAC',
                'bidang_id' => 7,
                'deskripsi' => 'Prada hadir bertujuan untuk mewadahi minat dan bakat mahasiswa FSM dan sebagai database guna pengkaryaan mahasiswa FSM Undip pada kompetisi Diponegoro Art Competition. Pendekar merupakan kegiatan seleksi terbuka untuk delegasi dari masing - masing departemen di FSM Undip dan juga sebagai kegiatan pemberian pelayanan dan bantuanadministrasi untuk mahasiswa FSM yang lolos seleksi untuk mengikutikompetisi Diponegoro Art Competition.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Kawal BSO dan Saintras',
                'bidang_id' => 7,
                'deskripsi' => 'Kegiatan ini merupakan bentuk pendampingan dan pengawasan terhadap Badan semi Otonom (BSO) FSM serta kelompok suporter SAINTRAS dalam menjalani kegiatan yang memberikan dukungan terhadap atlet didalam perlombaan olahraga dan seni.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Lingkar Seniora',
                'bidang_id' => 7,
                'deskripsi' => 'Lingkar Seniora merupakan forum bersama antara Seniora BEM FSM dengan lembaga Seniora/Mikat dari tiap tiap HMD guna berkoordinasi dan penyelarasan program kerja serta timeline dari aktivitas seni dan olahraga BEM FSM dan Seniora/Mikat HMD, Lingkar Seniora juga diadakan sebagai ajang sharing dan berbagi informasi terkait keberjalanan aktivitas seni dan olahraga pada masing masing HMD.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Database Prada',
                'bidang_id' => 7,
                'deskripsi' => 'Pendataan mahasiswa FSM yang memiliki prestasi non akademik dan mendata para juara dari dekancup dan fgt yang selanjutnya akan diseleksi dan didelegasikan untuk mengikuti kegiatan OLIMDIPO dan DAC',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Sora',
                'bidang_id' => 7,
                'deskripsi' => 'Sora merupakan kegiatan yang bertujuan untuk memberikan rekomendasi memberikan rekomendasi terkait lagu, film, dan berita seputar informasi olahraga terkini, serta memberikan apresiasi dan dukungan kepada mahasiswa FSM yang mengikuti kejuaraan seni dan olahraga dalam bentuk postingan pada media sosial BEM FSM UNDIP 2023.',
                'path_foto_proker' => '',
            ],
            //dimas
            [
                'namaproker' => 'Desa Mitra (Desmit)',
                'bidang_id' => 8,
                'deskripsi' => 'Optimalisasi pengembangan dan pemberdayaan SDA dan SDM di Desa Mitra FSM yaitu, Dusun Menco dengan merujuk pada Renstra yang telah ditetapkan. Dalam pelaksanaannya, koordinasi bersama HMD menjadi landasan untuk memastikan efektivitas dan kesinambungan dari inisiatif ini, dengan tujuan meningkatkan kesejahteraan dan daya dukung lingkungan di wilayah tersebut.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'FSM Peduli',
                'bidang_id' => 8,
                'deskripsi' => 'Bantuan donasi atau upaya pengumpulan dana yang bertujuan mendukung masyarakat yang mengalami dampak dari bencana alam atau menghadapi berbagai tantangan dalam kehidupan sosial mereka. Hal ini mencakup inisiatif untuk memberikan dukungan finansial atau sumber daya kepada mereka yang memerlukan, baik dalam menghadapi musibah alam maupun mengatasi masalah kehidupan sehari-hari dalam masyarakat.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Semir (Sembako Irit)',
                'bidang_id' => 8,
                'deskripsi' => 'Sebuah program yang menawarkan sembako dengan harga yang lebih terjangkau, bertujuan untuk meringankan beban ekonomi masyarakat dan memberikan akses yang lebih mudah terhadap barang-barang pokok yang diperlukan. Selain itu, program ini tidak hanya berfungsi sebagai upaya penggalangan donasi, tetapi juga sebagai sumber informasi terkini bagi masyarakat yang membutuhkan dukungan ekonomi dalam memenuhi kebutuhan hidup sehari-hari.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Green Action (GA)',
                'bidang_id' => 8,
                'deskripsi' => 'revitalisasi dan pelestarian lingkungan. Dengan fokus utama pada pengembalian dan pemulihan ekosistem yang terancam, program ini mencakup serangkaian kegiatan yang dirancang untuk meningkatkan kesadaran dan melibatkan masyarakat dalam aksi nyata untuk melindungi lingkungan. Selain itu, program ini juga mempromosikan gaya hidup berkelanjutan dan praktek ramah lingkungan untuk memotivasi perubahan perilaku dan menciptakan dampak positif dalam jangka panjang.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Trash Issues',
                'bidang_id' => 8,
                'deskripsi' => 'Pemungutan sampah dan membersihkan lingkungan sekitar sambil mengangkat isu-isu terkait masalah sampah. Program ini bertujuan untuk mengurangi pencemaran lingkungan oleh sampah serta meningkatkan kesadaran masyarakat tentang pentingnya menjaga kebersihan dan keberlanjutan.',
                'path_foto_proker' => '',
            ],
            //sospol
            [
                'namaproker' => 'Sospol Talk',
                'bidang_id' => 9,
                'deskripsi' => 'Sospol Talk merupakan bentuk pencerdasan dan penyebaran informasi kepada mahasiswa FSM dan masyarakat umum. Sospol Talk terbagi menjadi dua variasi yaitu video diskusi dalam bentuk podcast dengan pembicara yang di upload di Instagram dan video pendek yang sedang membicarakan isu yang relevan dan menjadi perbincangan di ruang publik untuk diupload di Tiktok.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Ruang Argumentasi',
                'bidang_id' => 9,
                'deskripsi' => 'Ruang Argumentasi merupakan media pencerdasan digital berupa akun sosial media yang berisi infografis dan propaganda dari Sospol BEM FSM Undip. Ruang Argumentasi juga terbuka kepada mahasiswa FSM untuk menyampaikan pandangan dan opini mereka dalam merespon isu. Pandangan dan opini tersebut dipublikasikan dalam bentuk tulisan ataupun infografis singkat pada akun sosial media Ruang Argumentasi.',
                'path_foto_proker' => '',
            ],
            //biro stat
            [
                'namaproker' => 'Progressi',
                'bidang_id' => 10,
                'deskripsi' => 'Progressi (Program Survei dan Evaluasi) adalah inovasi terbaru dari Biro Statistik BEM FSM Undip yang bertujuan untuk memberikan penilaian dan evaluasi yang kmprehensif terhadap keberjalanan program kerja non postingan dari berbagai Tim, Biro, maupun Bidang yang ada di dalam BEM FSM Undip 2024.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Pelita (Pembukuan dan Evaluasi Intensif untuk Tindakan Aksi)',
                'bidang_id' => 10,
                'deskripsi' => 'Pelita (Pembukuan dan Evaluasi Intensif untuk Tindakan Aksi) adalah program kerja inovasi yang merupakan kelanjutan serta masih berhubungan dengan dengan program kerja Progressi. Pelita adalah sebuah pemantauan dan evaluasi yang sangat terperinci, dirandang untuk memberikan wawasan tentang kinerja BEM FSM Undip 2024 selama satu periode kepengurusan.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Bincang Data',
                'bidang_id' => 10,
                'deskripsi' => 'Program kerja Bincang Data yang diselenggarakan oleh Biro Statistik BEM FSM Undip 2024 adalah inisiatif yang bertujuan untuk menghadirkan informasi yang akurat dan berdasarkan data kepada publik dalam format yang mudah dipahami mahasiswa umum maupun mahasiswa FSM Undip.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Edustat',
                'bidang_id' => 10,
                'deskripsi' => 'Education in Statistics atau Edustat adalah sebuah inovasi program kerja yang bertujuan untuk menyampaikan informasi-informasi mengenai ilmu dasar statistika melalui infografis. Infografis tersebut dirancang untuk menjadi menarik dan mudah dipahami oleh berbagai audiens dengan latar belakang pendidikan yang berbeda.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Survey Time',
                'bidang_id' => 10,
                'deskripsi' => 'Program kerja Survey Time merupakan inisiatif dari Badan Eksekutif Mahasiswa (BEM) Fakultas Sains dan Matematika (FSM) untuk melakukan penjaringan pendapat dan opini publik di kalangan mahasiswa FSM. Tujuan utamanya adalah untuk memahami kebutuhan, harapan, dan masukan dari mahasiswa terkait fungsi pelayanan BEM FSM Undip 2024.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Mahasiswa Insight',
                'bidang_id' => 10,
                'deskripsi' => 'Mahasiswa Insights adalah sebuah program yang dikembangkan oleh Biro Statistik BEM FSM Undip 2024 untuk menghimpun, menyajikan, serta menganalisis kumpulan data seputar mahasiswa FSM Undip. Program ini bertujuan untuk memberikan pemahaman mendalam tentang profil, perkembangan, dan kebutuhan mahasiswa.',
                'path_foto_proker' => '',
            ],
            //biro kmi
            [
                'namaproker' => 'Riung Archive',
                'bidang_id' => 11,
                'deskripsi' => 'Riung Archive merupakan dokumentasi terhadap segala kegiatan yang dilaksanakan oleh BEM FSM Undip 2024 yang akan diunggah dalam bentuk live report di official account Instagram BEM FSM Undip dan akan diarsipkan juga via Google Drive sebagai bentuk database dokumentasi program kerja.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => '3C (Content Creative & Celebration)',
                'bidang_id' => 11,
                'deskripsi' => 'Penyampaian informasi kepada publik melalui kanal media BEM FSM Undip dalam bentuk 3C, atau Content Creative & Celebration, disesuaikan dengan perkembangan dan tren yang sedang terjadi, dikemas secara menarik, edukatif, dan informatif. Konten celebration day juga dimasukkan sebagai bentuk perayaan terhadap berbagai macam hari/peristiwa penting yang terjadi, baik dalam lingkup nasional maupun internasional.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Rilet Mandala',
                'bidang_id' => 11,
                'deskripsi' => 'Rilet Mandala merupakan bentuk publikasi kepada mahasiswa FSM Undip dan masyarakat luas untuk mengenal lebih dekat dengan Kabinet Riung Mandala yang akan dikemas dalam bentuk postingan launching, video company profile, dan pamit yang akan diunggah melalui kanal media BEM FSM Undip.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Kabar FSM On-Air',
                'bidang_id' => 11,
                'deskripsi' => 'Kabar FSM berbentuk podcast merupakan program kerja Biro Humas yang terintegrasi untuk memberikan informasi bagi mahasiswa FSM Undip dengan mengangkat berbagai topik menarik yang berkolaborasi dengan bidang/biro terkait. Kabar FSM On-Air merupakan bagian dari podcast BEM FSM Undip 2024, mulai dari proses shooting, editing, hingga dipublikasikan melalui kanal media BEM FSM Undip.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Lingkar Design',
                'bidang_id' => 11,
                'deskripsi' => 'Lingkar Design merupakan wadah untuk koordinasi mengenai alur pengajuan publikasi konten tiap bidang/biro terkait. Dalam hal ini, editing konten dikembalikan ke masing-masing bidang/biro. Biro KMI menyediakan wadah asistensi sebelum konten di-upload ke kanal media BEM FSM Undip.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Sosialisasi Design',
                'bidang_id' => 11,
                'deskripsi' => 'Sosialisasi Design merupakan kegiatan yang dilakukan dengan tujuan mengedukasi pengurus BEM FSM Undip 2024 dalam melakukan editing template SOP postingan.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Website',
                'bidang_id' => 11,
                'deskripsi' => 'Membuat konsep dan mengelola website BEM FSM Undip 2024, serta senantiasa melakukan update website secara berkala demi terciptanya website yang aktual dan informatif yang mengintegrasikan seluruh informasi dalam website sehingga mewujudkan tata kelola data yang terpadu.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Social Media',
                'bidang_id' => 11,
                'deskripsi' => 'Social Media merupakan kegiatan penyaluran segala informasi dan promosi mengenai BEM FSM Undip 2024 melalui berbagai kanal media dan bertanggung jawab atas pengelolaan kanal media tersebut, serta melakukan laporan dan evaluasi terkait keefektifan konten yang terpublikasi.',
                'path_foto_proker' => '',
            ],
            //biro humas
            [
                'namaproker' => 'ILMMIPA (Ikatan Lembaga Mahasiswa MIPA Indonesia)',
                'bidang_id' => 12,
                'deskripsi' => 'Banyaknya organisasi linear yang berkaitan pada bidang yang sama, dengan banyaknya sumber daya manusia dengan inovasi dan pemikiran yang berbeda, membutuhkan adanya suatu ikatan yang menyatukan semua pihak. ',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'KREASI (Kerjasama dan Relasi)',
                'bidang_id' => 12,
                'deskripsi' => 'KREASI merupakan kegiatan kolaborasi atau kerja sama antara BEM FSM dengan instansi dan lembaga internal maupun eksternal mengenai pendanaan, sponsorship, dan publikasi kegiatan berupa media partner. Kegiatan ini juga bertujuan untuk membangun citra positif BEM FSM sebagaimana biro Humas merupakan garda terdepan dalam mewujudkan upaya tersebut dan berperan sebagai perantara antara BEM FSM dengan pihak luar sehingga dapat mewujudkan kerja sama yang dapat meningkatkan kinerja BEM FSM 2024 dalam keberjalanannya.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'KUPER (kunjungan perusahaan)',
                'bidang_id' => 12,
                'deskripsi' => 'KUPER atau kunjungan perusahaan merupakan kegiatan yang disediakan oleh biro Humas secara daring (online) maupun luring (offline). Dalam hal ini, KUPER berperan sebagai jembatan antara BEM FSM 2024 dengan perusahaan dalam melakukan kunjungan terkait dengan instansi/lembaga yang hendak dikunjungi sehingga acara dapat terselenggarakan dengan baik dan mencapai tujuan yang hendak dicapai oleh masing-masing kegiatannya.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Studi Banding',
                'bidang_id' => 12,
                'deskripsi' => 'Studi Banding merupakan kegiatan yang dapat digunakan untuk memberikan referensi dalam pengembangan dan perbaikan suatu lembaga. Sesuai dengan fungsinya tersebut, kegiatan Studi Banding BEM FSM bermaksud membandingkan bagaimana kondisi kelembagaan mahasiswa yang ada di FSM Undip dengan kondisi lembaga organisasi mahasiswa di Fakultas MIPA Universitas lain. Selain itu, kegiatan ini juga bermaksud memberikan studi komparasi antara kondisi organisasi mahasiswa FSM di universitas lain dan kondisi organisasi mahasiswa fakultas lain di UNDIP.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'We Share',
                'bidang_id' => 12,
                'deskripsi' => 'Soft skill maupun hard skill merupakan suatu kemampuan yang perlu kita miliki sebagai bekal kita terjun ke dunia kerja nantinya. Hard skill dapat kita peroleh dengan mempelajari materi-materi perkuliahan, sedangkan soft skill perlu diasah dengan berbagai cara. Salah satunya dengan mengikuti beberapa kegiatan, ataupun membaca infografis ataupun materi terkait soft skill tersebut. Oleh sebab itu, Biro Humas akan memberikan informasi-informasi terkait yang dapat menambah wawasan mahasiswa FSM mengenai soft skill.',
                'path_foto_proker' => '',
            ],
            [
                'namaproker' => 'Kabar FSM',
                'bidang_id' => 12,
                'deskripsi' => 'Perkembangan sosial yang semakin pesat membuat informasi datang dari berbagai platform dengan ditandai hadirnya fitur-fitur menarik dan kreatif seperti Insta TV, Insta Reels, TikTok, dsb. Kabar FSM dihadirkan menjadi salah satu media pencerdasan untuk pengikut Instagram BEM FSM dengan berbagai topik menarik yang berkolaborasi dengan bidang/biro melalui konten yang dibawa.',
                'path_foto_proker' => '',
            ],
            //bph
            // [
            //     'namaproker' => 'We Share',
            //     'bidang_id' => 10,
            //     'deskripsi' => 'Mahasiswa Insights adalah sebuah program yang dikembangkan oleh Biro 
            //     Statistik BEM FSM Undip 2024 untuk menghimpun, menyajikan, serta menganalisis kumpulan 
            //     data seputar mahasiswa FSM Undip. Program ini bertujuan untuk memberikan pemahaman mendalam 
            //     tentang profil, perkembangan, dan kebutuhan mahasiswa.',
            //     'path_foto_proker' => '',
            // ],
            // [
            //     'namaproker' => 'We Share',
            //     'bidang_id' => 10,
            //     'deskripsi' => 'Mahasiswa Insights adalah sebuah program yang dikembangkan oleh Biro 
            //     Statistik BEM FSM Undip 2024 untuk menghimpun, menyajikan, serta menganalisis kumpulan 
            //     data seputar mahasiswa FSM Undip. Program ini bertujuan untuk memberikan pemahaman mendalam 
            //     tentang profil, perkembangan, dan kebutuhan mahasiswa.',
            //     'path_foto_proker' => '',
            // ],
            // [
            //     'namaproker' => 'We Share',
            //     'bidang_id' => 10,
            //     'deskripsi' => 'Mahasiswa Insights adalah sebuah program yang dikembangkan oleh Biro 
            //     Statistik BEM FSM Undip 2024 untuk menghimpun, menyajikan, serta menganalisis kumpulan 
            //     data seputar mahasiswa FSM Undip. Program ini bertujuan untuk memberikan pemahaman mendalam 
            //     tentang profil, perkembangan, dan kebutuhan mahasiswa.',
            //     'path_foto_proker' => '',
            // ],
        ];
        DB::table('program_kerjas')->insert($proker);
    }
}
