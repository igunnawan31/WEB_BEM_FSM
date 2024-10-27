<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class bidang extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bidang = [
            [
                'bidang' => 'Tim Penjamin Mutu Organisasi', 
                'slug' => 'tim-penjamin-mutu-organisasi',
                'penjelasan' => 'PMO / Penjamin Mutu Organisasi merupakan sebuah tim yang difungsikan sebagai penjaga internal dan penjamin mutu dengan melakukan upaya pengawasan, pengevaluasian, dan penilaian terhadap setiap kinerja pengurus BEM secara preventif, kuratif, dan persuasif sehingga terbentuk sistem kerja efektif dan efisien sesuai dengan visi, misi, serta nilai BEM yang dibawa demi terwujudnya keharmonisan internal BEM FSM Undip 2024 yang profesional.',
                'path_foto_bidang' => 'assets/foto_bidang/PMO.png',
                'path_logo_bidang' => 'assets/logo_bidang/PMO.png',
            ],
            [
                'bidang' => 'Bidang Pengembangan Sumber Daya Mahasiswa', 
                'slug' => 'bidang-pengembangan-sumber-daya-mahasiswa',
                'penjelasan' => 'Sumber Daya Mahasiswa merupakan salah satu komponen terpenting dan tidak dapat dipisahkan baik dalam suatu lembaga maupun organisasi. Hal tersebut dikarenakan sumber daya mahasiswa sangat dibutuhkan untuk membantu mengembangkan suatu lembaga atau organisasi tersebut. Sumber daya mahasiswa yang berkualitas dapat diciptakan dengan diadakannya suatu pengembangan. Oleh karena itu, Bidang Pengembangan Sumber Daya Mahasiswa (PSDM) hadir untuk mengembangkan Soft skill dalam lingkup kaderisasi dengan alur sistematis dan berkelanjutan. Alur kaderisasi yang dirancang menyesuaikan kebutuhan dan minat mahasiswa, guna mengoptimalkan potensi mahasiswa Fakultas Sains dan Matematika, Universitas Diponegoro.',
                'path_foto_bidang' => 'assets/foto_bidang/PSDM.png',
                'path_logo_bidang' => 'assets/logo_bidang/PSDM.png',
            ],
            [
                'bidang' => 'Bidang Kesejahteraan Mahasiswa', 
                'slug' => 'bidang-kesejahteraan-mahasiswa',
                'penjelasan' => 'Bidang Kesejahteraan Mahasiswa BEM FSM Undip hadir untuk memastikan terpenuhinya hak-hak kesejahteraan mahasiswa, sesuai dengan tujuan negara dan universitas. Bidang ini berfokus pada membantu dan melayani mahasiswa FSM dalam berbagai aspek, seperti UKT, beasiswa, dan karier, guna mendukung kesejahteraan mereka selama menjalani kehidupan akademik. Dengan adanya Bidang Kesejahteraan Mahasiswa, diharapkan mahasiswa FSM dapat meraih kesejahteraan yang layak dan dapat fokus dalam pengembangan diri serta studi mereka.',
                'path_foto_bidang' => 'assets/foto_bidang/KESMA.png',
                'path_logo_bidang' => 'assets/logo_bidang/KESMA.png',
            ],
            [
                'bidang' => 'Bidang Harmonisasi Kampus', 
                'slug' => 'bidang-harmonisasi-kampus',
                'penjelasan' => 'Bidang Harmonisasi Kampus merupakan bidang yang berperan dalam membangun komunikasi, koordinasi, dan kerja sama dengan organisasi mahasiswa di FSM (HMD dan UKM-F), mengajak seluruh mahasiswa FSM berdiskusi mengenai isu-isu hangat di kampus FSM, membangun komunikasi dengan birokrasi FSM, dan mengawal pergerakan internal FSM sesuai dengan arah serta tujuan fakultas.',
                'path_foto_bidang' => 'assets/foto_bidang/HARKAM.png',
                'path_logo_bidang' => 'assets/logo_bidang/HARKAM.png',
            ],
            [
                'bidang' => 'Bidang Ekonomi Kreatif', 
                'slug' => 'bidang-ekonomi-kreatif',
                'penjelasan' => 'Bidang Ekonomi Kreatif BEM FSM adalah bidang yang berperan dalam menciptakan lingkungan wirausaha yang masif guna menumbuhkan iklim wirausaha yang unggul dan dinamis. Bidang ini mengembangkan pengetahuan serta mewadahi potensi dan minat kewirausahaan mahasiswa FSM dalam mewujudkan peran aktif wirausahawan FSM melalui program kerja konkrit yang selaras dengan visi dan misi BEM FSM 2024. Selain itu, Bidang Ekonomi Kreatif BEM FSM juga bertanggung jawab mendukung sumber daya keuangan BEM FSM 2024 dengan pencarian laba melalui program kerja berprofit yang dikemas melalui media yang kreatif dan inovatif demi keberlangsungan program kerja BEM FSM yang optimal.',
                'path_foto_bidang' => 'assets/foto_bidang/EKOTIF.png',
                'path_logo_bidang' => 'assets/logo_bidang/EKOTIF.png',
            ],
            [
                'bidang' => 'Bidang Seni dan Olahraga', 
                'slug' => 'bidang-seni-dan-olahraga',
                'penjelasan' => 'Bidang seni dan olahraga merupakan bidang yang memberikan wadah serta pelayanan bagi pengembangan minat dan bakat mahasiswa FSM Undip guna menciptakan Mahasiswa FSM Undip yang kompeten dan mampu berprestasi dalam bidang seni dan olahraga. Bidang seni dan olahraga juga berperan untuk menjalin silaturahmi dengan mengadakan forum diskusi yang komunikatif dan harmonis dengan bidang/departemen seniora pada masing – masing HMD dan UKM-F untuk mengkoordinasikan aktivitas dan pengkaryaan mahasiswa FSM Undip di bidang seni dan olahraga dan mewujudkan lingkungan FSM yang kolaboratif di bidang seni dan olahraga.',
                'path_foto_bidang' => 'assets/foto_bidang/SENIORA.png',
                'path_logo_bidang' => 'assets/logo_bidang/SENIORA.png',
            ],
            [
                'bidang' => 'Bidang Pengabdian Masyarakat', 
                'slug' => 'bidang-pengabdian-masyarakat',
                'penjelasan' => 'Bidang Pengabdian Masyarakat (DIMAS) BEM FSM Undip 2024 berfokus pada pengamalan Tri Dharma Perguruan Tinggi melalui kegiatan sosial yang bertujuan meningkatkan kepedulian mahasiswa terhadap masyarakat dan lingkungan hidup. Bidang ini mengajak mahasiswa FSM untuk terlibat langsung dalam masyarakat, memberikan solusi atas permasalahan yang ada, serta menanamkan rasa kasih sayang dan empati yang tinggi. Melalui kegiatan ini, mahasiswa diharapkan dapat menjadi agen perubahan yang positif, berperan sebagai pemimpin masa depan, dan menjaga integritas moral dalam setiap aspek kehidupan sosial.',
                'path_foto_bidang' => 'assets/foto_bidang/DIMAS.png',
                'path_logo_bidang' => 'assets/logo_bidang/DIMAS.png',
            ],
            [
                'bidang' => 'Bidang Sosial dan Politik', 
                'slug' => 'bidang-sosial-dan-politik',
                'penjelasan' => 'Bidang Sosial Politik memiliki tanggung jawab untuk menjadi wadah dan  pengembangan literasi mahasiswa dalam hal isu-isu sosial politik di tingkat lokal,  regional, nasional, dan internasional. Bidang ini terdiri dari Divisi Kajian dan Aksi  Strategis serta Divisi Aksi Media dan Propaganda.',
                'path_foto_bidang' => 'assets/foto_bidang/SOSPOL.png',
                'path_logo_bidang' => 'assets/logo_bidang/SOSPOL.png',
            ],
            [
                'bidang' => 'Biro Statistika', 
                'slug' => 'biro-statistika',
                'penjelasan' => 'Biro Statistik BEM FSM Undip 2024 adalah bagian yang bertugas mengumpulkan, menganalisis, dan menyajikan data yang mendukung pengambilan keputusan strategis dalam organisasi. Fokusnya adalah meningkatkan peran dan fungsi biro ini dari sekadar simbolik menjadi lebih substantif dan berorientasi pada pelayanan. Program kerja yang diusung meliputi pengembangan sistem monitoring data internal, penyusunan laporan statistik berkala, dan pelatihan anggota dalam pengolahan data, dengan tujuan akhir menciptakan biro yang mampu menjadi pusat data terpercaya dan bermanfaat bagi seluruh civitas akademika FSM Undip.',
                'path_foto_bidang' => 'assets/foto_bidang/STAT.png',
                'path_logo_bidang' => 'assets/logo_bidang/STAT.png',
            ],
            [
                'bidang' => 'Biro Kantor Media Informasi', 
                'slug' => 'biro-kantor-media-informasi',
                'penjelasan' => 'Biro Kantor Media Informasi (KMI) BEM FSM Undip 2024 berfungsi sebagai ujung tombak dalam publikasi dan pembentukan citra positif melalui berbagai kanal media. Tanggung jawab utamanya adalah mengelola dan menyampaikan informasi yang aktual, relevan, dan edukatif, dengan mengikuti tren terkini agar tetap up-to-date. Dengan mengemas informasi secara menarik dan kreatif, Biro KMI berupaya menjangkau publik luas dan mendorong keterlibatan mahasiswa FSM Undip dalam kegiatan BEM, sekaligus memperkuat brand image BEM FSM Undip di mata masyarakat.',
                'path_foto_bidang' => 'assets/foto_bidang/KMI.png',
                'path_logo_bidang' => 'assets/logo_bidang/KMI.png',
            ],
            [
                'bidang' => 'Biro Kantor Media Informasi', 
                'slug' => 'biro-kantor-media-informasi',
                'penjelasan' => 'Biro Kantor Media Informasi (KMI) BEM FSM Undip 2024 berfungsi sebagai ujung tombak dalam publikasi dan pembentukan citra positif melalui berbagai kanal media. Tanggung jawab utamanya adalah mengelola dan menyampaikan informasi yang aktual, relevan, dan edukatif, dengan mengikuti tren terkini agar tetap up-to-date. Dengan mengemas informasi secara menarik dan kreatif, Biro KMI berupaya menjangkau publik luas dan mendorong keterlibatan mahasiswa FSM Undip dalam kegiatan BEM, sekaligus memperkuat brand image BEM FSM Undip di mata masyarakat.',
                'path_foto_bidang' => 'assets/foto_bidang/KMI.png',
                'path_logo_bidang' => 'assets/logo_bidang/KMI.png',
            ],
            [
                'bidang' => 'Badan Pengurus Harian (BPH)', 
                'slug' => 'badan-pengurus-harian-bph',
                'penjelasan' => 'Badan Pengurus Harian BEM FSM 2024',
                'path_foto_bidang' => 'assets/foto_bidang/KABINET.png',
                'path_logo_bidang' => 'assets/logo_bidang/KABINET.png',
            ],
        ];

        DB::table('bidangs')->insert($bidang);
    }
}
