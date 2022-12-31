<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BeritaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //kosongkan semua data di tabel users
        \DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \DB::table('beritas')->truncate();

        //membuat 3 user secara manual
        \DB::table('beritas')->insert([
            [
                'author_id' => rand(1,3),
                'title'     => "Desa Wisata Ubud Jadi Percontohan Pengembangan Desa Wisata",
                'excerpt'   => "Kementerian Pariwisata, Kementerian Pembangunan Daerah Tertinggal dan Transmigrasi, dan Kementerian Koperasi dan UKM sepakat mendukung program Pengembangan Desa Wisata di Indonesia. 
                                Untuk itu, Desa Wisata kawasan Ubud, Gianyar Bali menjadi percontohan bagi pengembangan desa wisata di Tanah Air.",
                'body'      => "Kementerian Pariwisata, Kementerian Pembangunan Daerah Tertinggal dan Transmigrasi, dan Kementerian Koperasi dan UKM sepakat mendukung program Pengembangan Desa Wisata di Indonesia. Untuk itu, Desa Wisata kawasan Ubud, Gianyar Bali menjadi percontohan bagi pengembangan desa wisata di Tanah Air.

                Menteri Desa, Pembangunan Daerah Tertinggal dan Transmigrasi (DPDTT) Eko Putro Sandjojo menjelaskan dalam memacu pembangunan meningkatkan kesejahteraan masyarakat diharapkan desa fokus pada program-program unggulan masing-masing. Sehingga kemajuan desa akan lebih cepat dalam mengangkat kesejahteraan masyarakat.
                
                Dan desa wisata Ubud sangat tepat sebagai akselerasi untuk mempercepat pengembangan Desa Wisata dengan menyelaraskan wirausaha berbasis budaya dan pariwisata. Karena itu, dengan fokus pada program unggulan, kemajuan desa akan cepat lagi dan mengangkat kesejahteraan masyarakat. Program unggulan untuk pembangunan desa itu diantaranya Pro Kades, Embung Desa dan BUMDes tetap menjadi fokus kementeriannya.
                
                “Program Pro Kades dilakukan dengan membuat klasterisasi desa, bisa pertanian, perikanan dan paling penting pariwisata. Pariwisata ini dimana fokusnya. Saya mau dapat masukan di Ubud ini fokusnya dimana dan apa saja kebutuhannya,” ucapnya padan acara “The 4th Ubud Royal Weekend” di Ubud, Denpasar, Bali, akhir pekan lalu.
                
                Setelah mendapat banyak masukan khususnya dalam pengembangan pariwisata desa, pihaknya akan mengumpulkan 16 Kementerian terkait, dunia usaha plus bank agar bisa membantu. Mendes Eko melanjutkan, program kedua untuk desa yakni program Embung Desa, meskipun embung tidak relevan di Ubud namun tetap bisa untuk pariwisata.
                
                “Jadi ada akselerasi. Jadi, bukan semata hanya kepentingan pertanian. Embung ini juga bisa untuk perikanan guna meningkatkan gizi masyarakat,” ungkapnya dalam acara yang juga dilakukan MoU PT Mitra BUMDes dengan Pemerintah Kabupaten Gianyar.
                
                Saat ini, katanya, masih banyak balita masih kekurangan gizi. Terkait program BUMDdes, Menteri Eko ingin mengetahui apa PT Mitra BUMdes kabupaten seperti di Gianyar sudah terbentuk apa belum. Dengan danya PT Mitra BUMdes di kabupaten bisa dibentuk mitra BUMdes di desa-desa sehingga ada pendampingan di tiap BUMDdes desa.
                
                Dengan begitu, sambung Mendes Eko, bisa terjadi “link and match” antara perusahaan besar, UKM dengan pengusaha kecil di desa-desa. Yang selama ini menjadi problem UKM dan pengusaha kecil ini, mereka tak memiliki “resources management” distribusi dan marketing karena hal tersebut mahal.

                Sementara Menteri Pariwisata, Arief Yahya mengatakan, tidak hanya sebagai destinasi wisata, Ubud juga mampu menyelaraskan wirausaha UKM dan mengembangkan desanya sebagai upaya untuk menarik wisatawan.

                “Desa Wisata itu bisa berfungsi ganda. Bisa sebagai amenitas dengan homestay, akomodasi di rumah penduduk yang sudah sadar wisata. Juga sebagai atraksi, karena berada dalam atmosfer kehidupan masyarakat desa yang hommy, kaya dengan sentuhan budaya, dan nuansa kekeluargaan yang belum tentu bisa ditemukan di negara lain,” papar Menpar. ",
                'slug'      => "Desa Wisata Ubud Jadi Percontohan Pengembangan Desa Wisata",
                'created_at'=> date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'updated_at'=> date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'image'     => "../assets/images/Berita_1.jpg"
            ],
            [
                'author_id' => rand(1,3),
                'title'     => "Seni Budaya, Rahasia Kunci Kesuksesan Ubud, Gianyar, Bali",
                'excerpt'   => "Desa Ubud di Kabupaten Gianyar merupakan sebuah desa pusat kesenian dan budaya di Bali. Masyarakat yang masih memegang teguh adat dan tradisi menjadi salah satu alasan Ubud masih masuk dalam daftar destinasi perjalanan di Bali. Ubud tidak hanya memiliki banyak museum dan galeri, namun Ubud juga banyak menghasilkan kerajinan tangan masyarakat setempat serta mempertunjukkan pentas seni budaya mereka. ",
                'body'      => "Desa Ubud di Kabupaten Gianyar merupakan sebuah desa pusat kesenian dan budaya di Bali. Masyarakat yang masih memegang teguh adat dan tradisi menjadi salah satu alasan Ubud masih masuk dalam daftar destinasi perjalanan di Bali. Ubud tidak hanya memiliki banyak museum dan galeri, namun Ubud juga banyak menghasilkan kerajinan tangan masyarakat setempat serta mempertunjukkan pentas seni budaya mereka. 
                                Bisa dikatakan bahwa Desa Ubud tanpa aktivitas seni budayanya akan gersang, tidak ada kunjungan wisatawan yang dapat meningkatkan perekonomian mereka. Oleh karena itu, mereka terus mengelola pariwisata bekelanjutan/sustainable tourism di daerah mereka. Mari kita lihat rahasia dan kunci utama kesusksesan Desa Ubud di Gianyar, Bali :
                                1. Kokohnya Adat dan Tradisi                
                                Masyarakatnya tetap mempertahankan nilai-nilai adat dan tradisi juga kehidupan ritual yang masih tetap kokoh, ditengah modernisasi yang berkembang seiring dengan datangnya wisatawan manca negara. Desa Ubud merupakan sebuah tempat yang memperlihatkan hubungan antara modernisasi dan tradisi di Bali;
                                2. Seni Budaya Desa Ubud seperti Sungai yang Mengalir tanpa Henti
                                Keanekaragaman seni dan budaya telah diwarisi masyarakat di Desa Ubud secara turun temurun. Selain itu, Ubud telah diakui sebagai salah satu pusat budaya dan seni yang ada di Bali. Banyaknya seni kerajian berupa patung, lukisan atau kerajian khas Bali membuktikan bahwa masyarakat Desa Ubud memiliki tangan-tangan terampil mengolah sumber daya alam disekitarnya menjadi karya seni bernilai tinggi;
                                3. Tidak ada pantai? Tak masalah!
                                Tidak seperti wilayah Bali lainnya, Desa Ubud tidak memiliki pantai karena berada di dataran tinggi, akan tetapi ini bukan sebuah masalah. Hamparan alam yang berwarna hijau juga menjadi sebuah daya tarik bagi wisatawan, apalagi para seniman. Lingkungan yang masih alami ini menjadikan desa Ubud surganya para seniman dan menjadikan tempat ini sebagai tempat inspirasi. Oleh karena itu, Ubud memiliki banyak museum dan galeri-galeri seni;
                                4. Selalu ada Tempat bagi Penikmat Kuliner Tradisional 
                                Bukan hanya barang-barang seni yang bertebaran di Desa Ubud Gianyar, kuliner tradisonal yang menjadi kuliner turun temurun yang ada di bali juga dijajakan di Desa Ubud Gianyar. Makanan dan minuman yang merupakan resep turun temurun selalu memiliki tempat untuk bisa dicipipi oleh para penikmat kuliner. seperti babi guling, ayam betutu beragam jenis jajanan pasar khas Bali yang oleh masyarakat setempat disebut jaje pasar atau jaje Bali, atau minuman tradisional atau sering disebut loloh (jamu) bali;
                                5. Keramahan adalah Budaya yang Tidak Pernah Lengser
                                Suasana yang tenang, menyatu dengan alam, dan menjunjung tinggi kesenian lokal, Ubud mampu menawan hati para pelancong dari penjuru dunia. Bukan hanya itu keramahtamahan penduduk sekitar menjadi salah satu budaya yang membuat para wisatawan nyaman berada di Ubud. Masyarakat Desa Ubud Gianyar masih memegang teguh filosofi Tri Hita Karana yakni ajaran untuk berbuat baik pada sesama, Tuhan, dan alam. Keramahan masyarakat Ubud tidak pernah lengser, hingga mendapatkan gelar kota paling bersahabatt di Dunia posisi ke 11 oleh Travel+Leisure pada 2017. Desa Ubud yang menyadari bahwa kesenian dan kebudayaan merupakan suatu yang tidak pernah lepas dari kehidupan mereka, menjadikan hal tersebut sebagai daya tarik untuk memikat wisatawan untuk berkunjung. Menginginkan pariwisata bekelenjutan/sustainable tourism di daerahnya juga membuat masyarakat di Desa Ubud tetap menjaga kelestarian ada istiadat, kesenian, dan kebudayaan mereka karena budaya itu sangat penting bagi mereka. Jangan lupa untuk mengunjungi Desa Ubud di Kabupaten Gianyar ketika berkunjung ke Bali ya Travelovers.",
                'slug'      => "Seni Budaya, Rahasia Kunci Kesuksesan Ubud, Gianyar, Bali",
                'created_at'=> date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'updated_at'=> date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'image'     => "../assets/images/Berita_2.jpg"
            ],
            [
                'author_id' => rand(1,3),
                'title'     => "Kajian pariwisata dan perubahan lingkungan sosial, ekonomi masyarakat di desa Ubud, Gianyar, Bali",
                'excerpt'   => "Penelitian ini menyajikan aspek pariwisata dan perubahan lingkungan sosial ekonomi masyarakat di Desa Ubud, Gianyar, Bali. Penelitian ini bertujuan untuk mengkaji perkembangan pariwisata di Desa Ubud dari tahun 1993-2003 dan perubahan lingkungan sosial ekonomi masyarakat sebagai akibat perkembangan pariwisata dari tahun 1993-2003.",
                'body'      => "Penelitian ini menyajikan aspek pariwisata dan perubahan lingkungan sosial ekonomi masyarakat di Desa Ubud, Gianyar, Bali. Penelitian ini bertujuan untuk mengkaji perkembangan pariwisata di Desa Ubud dari tahun 1993-2003 dan perubahan lingkungan sosial ekonomi masyarakat sebagai akibat perkembangan pariwisata dari tahun 1993-2003. 
                                Pengumpulan data menggunakan metode survei, dengan melakukan wawancara, dan penyebaran kuisioner terhadap 90 KK, dengan rincian 50 KK untuk Dusun Ubud Klod dan 40 KK untuk Dusun Junjungan. Penentuan sampel responden menggunakan teknik Proporsional Random Sampling. Data primer dianalisis menggunakan analisis tabulasi frekuensi yang kemudian dianalisis lagi secara deskriftif. 
                                Hasil penelitian menunjukkan bahwa Perkembangan tingkat kunjungan wisatawan dari tahun 1993-2003 adalah dominan meningkat, sedangkan jumlah industri pariwisata mengalami peningkatan yang pesat. Perubahan lingkungan biofisik karena alih fungsi lahan akibat pembangunan fisik fasilitas pariwisata dari tahun 1993-2003. Perubahan kondisi ekonomi masyarakat Ubud berupa perubahan pekerjaan pokok, 
                                penambahan pekerjaan sampingan dan jam kerja serta penambahan pendapatan masyarakat. Perubahan yang terjadi pada kondisi sosial masyarakat, khususnya tingkat solidaritas masyarakat tidak terlalu berarti, tidak seperti yang terjadi pada pola gaya hidup . Perubahan pada solidaritas adalah perubahan yang masih dalam kewajaran, berbeda dengan perubahan proses sosial yang terjadi pada pola gaya hidup, pada umumnya perubahannya meningkat, terutama pola gaya hidup kepemilikan sarana transportasi dan komunikasi serta pola bepergian ke luar daerah, baik pada provinsi sama maupun pada provinsi yang berbeda.",
                'slug'      => "Kajian pariwisata dan perubahan lingkungan sosial, ekonomi masyarakat di desa Ubud, Gianyar, Bali",
                'created_at'=> date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'updated_at'=> date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'image'     => "../assets/images/Berita_3.jpg"
            ],
            [
                'author_id' => rand(1,3),
                'title'     => "Desa Ubud, Pusat Seni dan Budaya di Bali",
                'excerpt'   => "Ubud merupakan salah satu tujuan liburan populer di Bali. Kawasan pariwisata Ubud identik dengan seni, budaya serta keindahan alam pedesaan. Untuk budaya, di Ubud Sahabat akan menemukan banyak objek wisata pura Hindu serta keindahan istana kerajaan. Keindahan alam juga menjadi keunggulan pariwisata Ubud, anda dapat melihat lereng bukit hijau, sawah berundak, serta sungai yang masih alami.",
                'body'      => "Ubud merupakan salah satu tujuan liburan populer di Bali. Kawasan pariwisata Ubud identik dengan seni, budaya serta keindahan alam pedesaan. Untuk budaya, di Ubud Sahabat akan menemukan banyak objek wisata pura Hindu serta keindahan istana kerajaan. Keindahan alam juga menjadi keunggulan pariwisata Ubud, anda dapat melihat lereng bukit hijau, sawah berundak, serta sungai yang masih alami.

                                Ubud sebagai tempat wisata di pulau Bali, sudah terkenal semejak tahun 1930-an. Kawasan pariwisata Ubud masuk dalam pemerintahan kabupaten Gianyar. Kabupaten Gianyar sebagai tempat wisata, terkenal memiliki banyak seniman berbakat dan dapat dikatakan merupakan pusat budaya dan seni di Bali. Khusus untuk seni lukis, seni ukir, seni patung, seni tari dan seni musik traditional Bali.
                
                                Pariwisata Ubud juga didukung dengan lengkapnya sarana akomodasi, tersedia dari hotel murah sampai resort mewah. Mencari tempat makan juga sangat mudah di Ubud, dan saat ini area pariwisata Ubud sangat terkenal menjadi destinasi wisata Kuliner di Bali selain wisata kuliner di Seminyak.
                
                                Karena itulah, Kemendes memberikan penghargaan kepada desa ini sebagai “Desa Wisata Budaya”.",
                'slug'      => "Desa Ubud, Pusat Seni dan Budaya di Bali",
                'created_at'=> date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'updated_at'=> date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'image'     => "../assets/images/Berita_4.jpg"
            ],
            [
                'author_id' => rand(1,3),
                'title'     => "Dikunjungi Jokowi, Ini Sejarah Desa Ubud Bali, Ada sejak Tahun 1771, Jadi Tujuan Seniman Luar Negeri",
                'excerpt'   => "Presiden Joko Widodo berkunjung ke Puri Saren Agung, Ubud, Kabupaten Gianyar, pada Selasa (16/3/2021). Ia meninjau vaksinasi massal Covid-19 yang menyasar para pelaku industri pariwisata, pimpinan umat beragama, perwakilan budayawan, perwakilan pemuda, serta masyarakat setempat. Selain itu, Jokowi mengatakan, ada tiga zona hijau yang dipersiapkan untuk dibuka penuh untuk wisatawan yang berunjung ke Pulau Dewata. Tiga wilayah tersebut adalah Ubud, Sanur, dan Nusa Dua.",
                'body'      => "Presiden Joko Widodo berkunjung ke Puri Saren Agung, Ubud, Kabupaten Gianyar, pada Selasa (16/3/2021). Ia meninjau vaksinasi massal Covid-19 yang menyasar para pelaku industri pariwisata, pimpinan umat beragama, perwakilan budayawan, perwakilan pemuda, serta masyarakat setempat. Selain itu, Jokowi mengatakan, ada tiga zona hijau yang dipersiapkan untuk dibuka penuh untuk wisatawan yang berunjung ke Pulau Dewata. Tiga wilayah tersebut adalah Ubud, Sanur, dan Nusa Dua. “Saya lihat di Provinsi Bali ini kita ingin konsentrasi di tiga zona hijau yang telah ditetapkan, yaitu di Ubud, kemudian di Sanur, yang ketiga di Nusa Dua, kata Presiden.
                
                Ubud ada di Kabupaten Gianyar, Bali. Di desa wisata tersebut ada Puri Ubud yang menjadi tempat tinggal keluarga Raja Ubud. Puri ini menjadi salah satu destinasi wisata di Pulau Bali. Dikutip dari gianyarkab.go.id, Puri Agung Gianyar ada sejak 19 April 1771. Puri tersebut dibangun oleh Raja Ida Anak Agung Gianyar I, Ida Dewata Manggis Sakti. Saat itu Gianyar dipilih menjadi nama sebuah keraton. Di wilayah Gianyar ditemukan artefak, relief yang menggambarkan kehidupan candi-candi atau goa-goa di tebung sungai (tukad) Pakerisan yang diperkirakan ada sejak 2.000 tahun yang lalu. Sejak berdirinya Puri Agung Gianyar 19 April 1771, Ubud menjadi ibu kota pusat pemerintah dan menjadi kerajaan yang berdaulat. Kerajaan tersebut ikut mengisi lembaran sejarah kerajaan-kerajaan di Bali.",
                'slug'      => "Dikunjungi Jokowi, Ini Sejarah Desa Ubud Bali, Ada sejak Tahun 1771, Jadi Tujuan Seniman Luar Negeri",
                'created_at'=> date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'updated_at'=> date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'image'     => "../assets/images/Berita_5.jpeg"
            ],
            [
                'author_id' => rand(1,3),
                'title'     => "Wisata Ubud Bali – Kegiatan Liburan Menarik Favorit Wisatawan",
                'excerpt'   => "Objek wisata Ubud Bali sangat terkenal di kalangan wisatawan mancanegara selama berpuluh-puluh tahun. Setiap wisatawan yang berkunjung akan mempunyai kesan tersendiri tentang tempat wisata di Ubud. Belum lama ini Ubud dipilih sebagai lokasi syuting film yang berjudul Eat, Pray, Love yang dimainkan oleh aktris Hollywood, Julia Robert.",
                'body'      => "Objek wisata Ubud Bali sangat terkenal di kalangan wisatawan mancanegara selama berpuluh-puluh tahun. Setiap wisatawan yang berkunjung akan mempunyai kesan tersendiri tentang tempat wisata di Ubud.

                Belum lama ini Ubud dipilih sebagai lokasi syuting film yang berjudul Eat, Pray, Love yang dimainkan oleh aktris Hollywood, Julia Robert dan judul film ini diambil dari buku karya Elizabeth Gilbert dengan judul yang sama. Penulis tersebut menjadikan Ubud sebagai tempat pencaharian cintanya.

                Lokasi dari desa Ubud terletak di Kabupaten Gianyar. Jika pembaca berangkat dari Bandara Ngurah Rai menuju objek wisata Ubud, akan memerlukan waktu kurang lebih 1 jam perjalanan. Berikut adalah kegiatan wisata menarik yang dapat dilakukan di tempat wisata Ubud Bali :
                
                1. Aktivitas Yoga 
                Salah satu kegiatan menarik wisata Ubud Bali adalah Yoga. Saat melakukan kegiatan yoga di Ubud, sebaiknya dilakukan di pagi hari. Disamping dapat menikmati udara pagi yang masih segar, pikiran kita juga masih rileks. Ubud sangat terkenal dengan aktivitas Yoga hingga ke seluruh dunia. Wisatawan mancanegara maupun domestik, datang untuk belajar yoga di Ubud. Tersedia bagi pemula maupun yang sudah professional.
                
                2. Naik Sepeda / Bali Bike Tours
                Selain yoga, kegiatan menarik wisata Ubud adalah naik sepeda. Sambil berolahraga di pagi hari, kegiatan bersepeda di tepi sawah sangat digemari wisatawan yang berlibur di Ubud. Dengan mengikuti paket bersepeda, seorang pemandu akan mengajak anda, berkeliling sawah dan masuk ke perkampungan penduduk setempat dan berinteraksi dengan mereka.
                
                3. Belajar Memasak Makanan Khas Bali
                Hampir sebagian besar hotel dan restoran di Ubud, membuka kelas memasak bagi wisatawan yang berkunjung. Terutama anak-anak sangat menyukai kegiatan belajar memasak makanan khas Bali. Mereka dapat bermain sambil belajar, mengenal makanan khas Bali. Menu khas Bali yang diajarkan misalnya Sate Lilit, Lawar dan makanan Indonesia lainnya seperti Nasi Goreng dan Gado-Gado. Kegiatan biasanya dimulai di pagi hari, dan para peserta akan diajak ke pasar tradisional, untuk membeli bahan-bahan yang diperlukan.
                
                Mudah-mudahan artikel tentang wisata Ubud ini bermanfaat bagi anda yang berencana untuk berlibur ke Ubud Bali.",
                'slug'      => "Wisata Ubud Bali – Kegiatan Liburan Menarik Favorit Wisatawan",
                'created_at'=> date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'updated_at'=> date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'image'     => "../assets/images/Berita_6.jpg"
            ],
            
        ]);
    }
}
