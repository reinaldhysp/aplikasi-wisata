<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WisataTableSeeder extends Seeder
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
        \DB::table('wisatas')->truncate();

        //membuat 3 user secara manual
        \DB::table('wisatas')->insert([
            [
                'title' => "Museum Puri Lukisan",
                'excerpt' => "Museum Puri Lukisan adalah sebuah museum seni rupa pertama, yang dikelola oleh swasta, di Bali. Diprakarsai oleh Cokorda Gede Agung Sukawati, I Gusti Nyoman Lempad serta seniman asing yang menetap di Ubud, Rudolf Bonnet. Berdiri pada 31 Januari 1956 di bawah naungan Yayasan Ratna Warta, dan di buka secara resmi oleh Menteri Pendidikan dan Kebudayaan, Muhammad Yamin.",
                'body' => "Museum Puri Lukisan (bernama lengkap Museum Puri Lukisan Ratna Wartha) adalah museum yang menjadi tempat dari berbagai koleksi kesenian budaya Bali berupa lukisan dan hasil ukiran kayu dari yang tradisional sampai yang modern. Museum ini merupakan museum seni tertua di Bali yang menyimpan koleksi sejak tahun 1930 hingga saat ini. Museum ini menyimpak koleksi kesenian berbagai budaya Bali, termasuk Ubud, Sanur, Batuan, Young Artist, dan sekolah Keliki. Museum Puri Lukisan berada di Jalan Raya Ubud, Gianyar, dan berjarak sekitar 40 menit dari bandara Ngurah Rai.

                Pendirian Museum Puri Lukisan didasarkan pada kekhawatiran adanya pemiskinan budaya Bali, dimana akan sulit untuk menemukan hasil karya budaya Bali di masa depan, akibat sudah menyebarnya hasil karya seniman Bali ke berbagai penjuru dunia pada beberapa dekade lalu. Ide untuk melestarikan hasil karya seniman Bali sebenarnya sudah ada sejak tahun 1936 dengan mendirikan perkumpulan seniman oleh Tjokorda Gde Agung Sukawati (Raja Ubud), Walter Spies (pelukis asal Jerman), dan Rudolf Bonnet (pelukis asal Belanda). Setelah berjalan beberapa waktu, ide pendirian museum muncul dan dimulailah pendiriannya yang ditandai dengan peletakan batu pertama pada tanggal 31 Januari 1954, dan kemudian diresmikan pada tanggal 31 Januari 1956 oleh Menteri Pendidikan dan Kebudayaan, Mohammad Yamin.",
                'image' => "../assets/images/Wisata_1.jpg",
                'created_at' => date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'updated_at' => date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days"))
            ],
            [
                'title' => "Puri Agung Ubud",
                'excerpt' => "Puri Agung Ubud Krisnakusuma terletak tepat di jantung kota Ubud. Merupakan pusat pemerintahan Kerajaan Ubud pada zaman dahulu, serta sebagai pusat kegiatan seni budaya dan adat, yang diadakan di tepat di depan puri. Puri Ubud masih memiliki tata ruang dan bangunan yang dipertahankan seperti aslinya.",
                'body' => "Puri Ubud atau dikenal dengan nama Puri Saren Agung, yang merupakan sebuah istana sebagai pusat pemerintahan kerajaan yang berkuasa pada masanya. Dari sinilah sejarah perkembangan pariwisata di kawasan Ubud dimulai, mulai dari jaman kerajaan, kolonial Belanda dan sampai saat ini. Bangunan puri ini menyimpan banyak cerita sejarah dari masa Bali kuno jaman tempo dulu, sekarang masih terjaga dengan baik, walaupun ada restorasi di beberapa tempat, namun masih mempertahankan bentuk aslinya, menggambarkan istana kerajaan yang megah di jamannya.

                Keberadaan Puri Ubud tertata dan terjaga dengan baik seperti bentuk aslinya, menjaga desain dan tata ruang tradisional Bali, serta ciri khas bangunan tradisional yang masih anda jumpai berdiri kokoh, dipenuhi ornamen ukiran Bali dengan kealamiannya. Identitas Bali memang tampil begitu sempurna di Puri Ubud, sehingga mengingatkan pengunjung ke masa feodalisme atau masa tempo dulu pada jaman Bali kuno. Tempat seperti ini memang sangat jarang bisa kita temui sekarang ini. Apalagi puri ini sebagai tempat wadah dan pementasan seni tari tradisional yang banyak diminati wisatawan.",
                'image' => "../assets/images/Wisata_2.jpg",
                'created_at' => date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'updated_at' => date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days"))
            ],
            [
                'title' => "Wanara Wana",
                'excerpt' => "Wanara Wana atau Hutan Kera, (lebih dikenal dengan Monkey Forest) adalah kawasan hutan sakral yang terdapat di kawasan Ubud, tepatnya masuk ke dalam wilayah desa adat Padangtegal, Ubud. Di hutan ini terdapat sekawanan kera yang jumlahnya ratusan, yang telah menghuni kawasan ini selama ratusan tahun.",
                'body' => "Mandala Suci Wenara Wana atau disebut juga Monkey Forest Ubud merupakan sebuah tempat cagar alam dan kompleks candi yang terletak di desa Padangtegal Ubud, Bali. Di tempat ini mempunyai kurang lebih 749 ekor monyet ekor panjang (Macaca fascicularis) (63 jantan dewasa, 34 jantan muda, 219 betina dewasa, 29 betina muda, 167 juvenile 1 (2-3 tahun), 118 juvenile 2 (1-2 tahun), 63 Infant old (5-12 bulan) dan 56 infant. Ada enam kelompok monyet yang menempati wilayah berbeda di hutan ini yaitu grup Pura, grup Hutan Baru, grup Sentral Point, grup timur, grup Michelin dan grup Kuburan. 
                
                Tempat ini merupakan atraksi wisata populer di Ubud, dan sering dikunjungi oleh lebih dari 120.000 wisatawan per bulan. Hutan ini memiliki luas kira-kira 12,5 hektar dan masih akan dilakukan perluasan disebelah selatan kawasan dan berisi setidaknya 186 spesies pohon yang berbeda. Monkey Forest Ubud ini pun juga terdapat tiga pura yang bernama Pura Dalem Agung Padangtegal, Pura Beji dan Pura Prajapati. Tempat ini berlokasi di desa Padangtegal dan diatur oleh warga desa yang langsung bekerja di Monkey Forest Ubud. Management Mandala Suci Wenara Wena yang mengelola tempat ini berfungsi untuk menjaga integritas kesucian dan untuk mempromosikan Monkey Forest Ubud sebagai tujuan berkunjung baik untuk wisatawan domestik dan mancanegara.",
                'image' => "../assets/images/Wisata_3.jpg",
                'created_at' => date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'updated_at' => date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days"))
            ],
            [
                'title' => "Museum Rudana dan Rudana Fine Art Gallery",
                'excerpt' => "Museum Rudana merupakan museum seni yang berlokasi di Ubud, Bali, yang didirikan oleh Nyoman Rudana, seorang kolektor lukisan yang juga duduk sebagai anggota Dewan Perwakilan Daerah (DPD) mewakili Provinsi Bali periode 2004 2009 dan diresmikan oleh Presiden Soeharto tanggal 26 Desember 1995.",
                'body' => "Museum Rudana adalah sebuah museum seni yang berada di Ubud, Gianyar, Bali dan digunakan untuk memamerkan dan mempromosikan karya seni berupa lukisan dan patung karya seniman Bali. Di antara karya seni yang dipamerkan adalah karya dari I Gusti Nyoman Lempad (almarhum), Nyoman Gunarsa, Made Wianta,seniman Indonesia di luar Bali seperti Affandi (almarhum), Basuki Abdullah (almarhum), Srihadi Soedarsono, Sunaryo Sutono, maupun seniman asing yang tinggal di Bali seperti Antonio Blanco (almarhum), Arie Smit. Museum Rudana didirikan oleh Nyoman Rudana, seorang kolektor lukisan yang juga pemilik galeri seni Rudana Fine Art Gallery dan Genta Fine Art Gallery.

                Museum Rudana didirikan atas dasar idealisme pendirinya, Nyoman Rudana, dimana seni merupakan hal yang universal, sebagai hasilnya, berkontribusi terhadap proses harmonisasi antara manusia dengan Tuhan (parahyangan), antara manusia dengan manusia (pawongan) serta manusia dengn alam sekitarnya (palemahan) yang tercermin dalam konsep filosofis Bali Tri Hita Karana, dimana seni sangat berperan dalam membantu menyebar luaskan perdamaian, kemakmuran serta rasa persauda-raan di antara umat manusia sedunia. Visi humanisme Museum Rudana, yaitu untuk kemaslahatan (manfaat) umat manusia, merupakan filosofi perjuangan Nyoman Rudana dalam mengoleksi lukisan – lukisan yang kini dapat dinikmati di museum ini.
                
                Obsesi pendirian museum ini diawali saat Nyoman Rudana menyaksikan bahwa begitu banyak hasil karya seni kuno Indonesia diboyong ke luar negeri. Tergerak untuk melestarikan karya – karya seni terbaik anak bangsa inilah kemudian Museum Rudana ini didirikan.",
                'image' => "../assets/images/Wisata_4.jpg",
                'created_at' => date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'updated_at' => date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days"))
            ],
            [
                'title' => "Arung Jeram",
                'excerpt' => "Di wilayah barat Ubud, terdapat Tukad (Kali) Ayung. Di sungai ini banyak aktivitas wisata tirta, di antaranya adalah arung jeram dan berkayak. Terdapat beberapa jasa wisata tirta yang menawarkan layanan ini. Selain wisata tirta, di sepanjang tebing Tukad Ayung juga memiliki pemandangan alam yang memikat, dan terdapat puluhan hotel berbintang.",
                'body' => "Di wilayah barat Ubud, terdapat Tukad (Kali) Ayung. Di sungai ini banyak aktivitas wisata tirta, di antaranya adalah arung jeram dan berkayak. Terdapat beberapa jasa wisata tirta yang menawarkan layanan ini. Selain wisata tirta, di sepanjang tebing Tukad Ayung juga memiliki pemandangan alam yang memikat, dan terdapat puluhan hotel berbintang. Di pulau Bali terdapat tiga sungai sebagai tempat arung jeram (rafting) favorit. Ketiga sungai tersebut antara lain : Sungai Ayung Ubud, Sungai Telaga Waja Karangasem dan Sungai Melangit Klungkung. Sungai Ayung yang berada di Ubud adalah sungai pertama atau sungai pelopor dalam aktivitas Bali rafting tour. Karena lokasi dari sungai Ayung berada di tempat wisata Ubud, membuat aktivitas rafting di sungai Ayung Ubud sangat cepat terkenal sampai ke mancanegara.",
                'image' => "../assets/images/Wisata_5.jpg",
                'created_at' => date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'updated_at' => date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days"))
            ],
        ]);
    }
}
