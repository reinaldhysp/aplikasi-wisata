<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AkomodasiTableSeeder extends Seeder
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
        \DB::table('akomodasis')->truncate();

        //membuat 3 user secara manual
        \DB::table('akomodasis')->insert([
            [
                'nama'       => "Ashoka Tree Resort at Tanggayuda Ubud",
                'body'       => "Didesain dengan menggunakan warna yang hangat, kamar di Ashoka Tree Resort at Tanggayuda Ubud dilengkapi dengan AC, TV layar datar, mesin pembuat kopi dan minibar. 
                                Kamar mandi dalam dilengkapi dengan bathtub, shower dan perlengkapan mandi gratis. Tersedia juga jubah mandi dan sandal. Beberapa kamar memiliki pemandangan menghadap ke kebun dan kolam.
                                Kamu dapat menikmati beragam hidangan barat dan Asia yang tersedia di Laddu Kitchen sambil menatap pemandangan lembah dan bukit Ubud. Atau tamu dapat mencoba berbagai restoran di sekitar 
                                resor seperti Papillon, Uma Cucina dan Kemiri Restaurant. Mozaic yang menyediakan hidangan Perancis autentik berjarak 8 menit berkendara dengan mobil dari hotel.",
                'image'      => "../assets/images/Akomodasi_1.jpg",
                'harga'      => "IDR 650.000 (per kamar per malam)",
                'created_at' => date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'updated_at' => date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days"))
            ],
            [
                'nama'      => "Ubud Luwih Villa",
                'body'      => "Dengan menginap di vila ini di kota Ubud (Andong), Anda akan berada hanya 15 menit dengan berkendara dari Pasar Seni Tradisional Ubud dan Puri Agung Ubud. Vila ini berada 4,8 mi (7,7 km) dari Ubud Monkey 
                                Forest dan 3,6 mi (5,8 km) dari Campuhan Ridge Walk.Buat diri Anda nyaman di vila ber-AC Anda, yang memiliki fitur lemari es dan televisi layar datar.Terdapat teras berperabot pribadi.
                                Program satelit dan pemutar DVD disediakan untuk hiburan Anda, sementara akses Internet nirkabel gratis membuat Anda tetap terhubung.Kamar mandi pribadi dengan bathtub dan shower terpisah memiliki fitur bathtub besar dan shower rainfall.",
                'image'      => "../assets/images/Akomodasi_2.jpg",
                'harga'     => "IDR 249.999 (per kamar per malam)",
                'created_at'=> date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'updated_at'=> date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days"))
            ],
            [
                'nama'      => "Taluh Bebek Ubud Private Villas",
                'body'      => "Terletak di Ubud, Taluh Bebek Ubud Private Villas menawarkan akomodasi dengan area tempat duduk. Wi-Fi gratis dan sarapan terapung ditawarkan. Unit-unit di homestay ini memiliki teras, AC, TV layar datar, dan kamar mandi pribadi dengan shower dan perlengkapan mandi gratis. Teras dengan pemandangan kolam renang ditawarkan di semua unit. Sarapan kontinental disajikan setiap pagi di akomodasi. Di vila ini, Anda akan menemukan restoran yang menyajikan hidangan khas Indonesia. Pilihan bebas-gluten, vegetarian, dan vegan juga dapat diminta. Taluh Bebek Ubud Private Villas menawarkan kolam renang luar ruangan. Anda dapat bersantai di taman. Akomodasi ini berjarak 5 km dari Museum Seni Neka. Bandara terdekat adalah Bandar Internasional Ngurah Rai, 44 km dari Taluh Bebek Ubud Private Villas, dan tersedia satu kali layanan antar-jemput ke pusat Ubud.",
                'image'      => "../assets/images/Akomodasi_3.jpg",
                'harga'     => "IDR 870.000 (per kamar per malam)",
                'created_at'=> date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'updated_at'=> date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days"))
            ],
            [
                'nama'      => "Alam Sembuwuk Resort",
                'body'      => "Alam Sembuwuk Resort merupakan akomodasi yang berlokasi di Ubud dan hanya sejauh 15 menit berkendara dari Istana Ubud yang bersejarah. Kamu yang menginap di resor ini bisa memakai fasilitas 
                                seperti kolam renang outdoor, layanan antar-jemput gratis ke pusat Ubud dan akses WiFi gratis di semua kamar dan area publik dari properti ini.
                                Alam Sembuwuk Resort memiliki kamar dengan AC, lantai ubin dan pintu kaca yang menghadap balkon dengan pemandangan sekeliling yang hijau. Terdapat juga TV layar datar dengan saluran kabel, minibar, 
                                pembuat kopi/teh dan area tempat duduk di setiap kamar. Kamar mandi dalamnya memiliki fasilitas shower, handuk bersih dan peralatan mandi gratis. Unit vila juga memiliki beberapa kamar dengan kolam renang outdoor dan dapur.",
                'image'      => "../assets/images/Akomodasi_4.jpg",
                'harga'     => "IDR 650.000 (per kamar per malam)",
                'created_at'=> date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'updated_at'=> date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days"))
            ],
            [
                'nama'      => "The Kampung Ubud Villas",
                'body'      => "Terletak di tengah-tengah hamparan hijau di Ubud, Vila Kampung Ubud menawarkan gabungan arsitektur tradisional Bali dengan kenyamanan modern. 
                                Menyediakan kolam renang pribadi di setiap vila, kamu juga dapat menikmati fasilitas seperti hot tub dan spa. Vila ini juga menyediakan akses WiFi gratis di seluruh areanya
                                Menampilkan konsep tropis, kamu dapat menikmati pemandangan lembah dan sawah langsung dari kamarmu. Di setiap vila, kamu mendapatkan fasilitas TV layar datar, area tempat duduk, 
                                dan ruang makan terpisah. Kamar mandi pribadinya dilengkapi dengan bathtub dan shower, disertai dengan jubah mandi, handuk, dan peralatan mandi gratis.",
                'image'      => "../assets/images/Akomodasi_5.jpg",
                'harga'     => "IDR 967.999 (per kamar per malam)",
                'created_at'=> date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days")),
                'updated_at'=> date("Y-m-d H:i:s", strtotime("2021-05-03 10:00:00 + 1 days"))
            ],
            
        ]);
    }
}
