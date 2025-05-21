<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $data= [
            [
                'judul' => 'Visi dan Misi',
                'slug' => 'visi-dan-misi',
                'isi' => '<p>VISI PEMBANGUNAN KABUPATEN BATANG HARI
    
                TAHUN 2021 -2026</p>
                
                 
                
                PERUBAHAN MENUJU ARAH BARU BATANGHARI TANGGUH
                
                (Terdepan, Agamis, Nyaman, Gotong Royong, Bermutu Dan Harmonis)
                
                 
                
                Tujuan Pembangunan Daerah Kabupaten Batang Hari :
                
                    Menjadi Basis Pengembangan Ekonomi Pertanian dan Agrowisata dikawasan Provinsi Jambi.
                    Mewujudkan Ketaatan dan Implementasi Nilai-Nilai Keagamaan ditengah Masyarakat.
                    Mewujudkan Pemberdayaan Masyarakat sebagai Agen Percepatan Pembangunan.
                    Mewujudkan Pemanfaatan Ruang untuk Kenyamanan, Keamanan dalam mendukung kelestarian   Lingkungan.
                    Mewujudkan Batang Hari sebagai tempat Investasi yang menguntungkan investor dan mensejahterakan Masyakarat.
                    Mewujudkan Sumber Daya Manusia yang Bermutu dan Kompetitif.
                    Mewujudkan Birokrasi yang Harmonis serta Sinergitas Pembangunan Daerah dan Desa.
                
                 
                
                Sasaran Pembangunan Daerah  Kabupaten Batang Hari :
                
                    Terwujudnya Penguatan Ekonomi berbasis Pertanian dengan menjamin terciptanya Skala Ekonomi dalam Peningkatan Kesejahteraan Petani.
                    Wirausaha Milenial dan Mewujudkan Industri Kreatif berbasis Agricultural-Ekowisata 
                    Kehidupan Masyarakat yang bertumpu pada Budi Pekerti yang Luhur, Toleransi Antar Umat beragama yang mengedepankan Etika dan Moral dalam tatanan Kehidupan Masyarakat
                    Menghidupkan Kembali Semangat Gotong Royong dan Kemandirian Masyarakat menuju Ketahanan Keluarga.
                    Meningkatkan Ruang Kota dan Ruang Terbuka yang Aman dan Nyaman.
                    Mewujudkan Lingkungan dan Kawasan Permukiman yang sehat.
                    Peningkatan dan Ketertiban Masyarakat.
                    Meningkatnya Nilai Investasi sebagai modal Pembangunan dan Mendorong Optimalisasi Pemanfaatan potensi sumber daya daerah.
                    Meningkatkan Kesehatan dan Status Gizi Masyarakat serta Peningkatan Aksesbilitas dan Mutu Pendidikan.
                    Mewujudkan Pembangunan Kualitas Sumber Daya Manusia yang Bermutu melalui Standarisasi Mutu Lulusan yang Merata dan Berdaya Saing.
                    Meningkatnya kinerja Instansi Pemerintah.
                    Meningkatnya kualitas Pelayanan Umum.
                    Pembangunan Daerah dan Desa yang Berorientasi Hasil.
                
                 
                
                Priotitas Pembangunan Kabupaten Batang Hari  Yaitu :
                
                    Pembangunan ekonomi berbasis pertanian.
                    Pembangunan etika dan moral, toleransi antar umat beragama dan nasionalisme Serta Menjadikan Masyarakat sebagai agent perubahan.
                    Pembangunan ruang kota yang nyaman, sehat dan investasi yang saling menguntungkan.
                    Pembangunan sumber daya manusia (SDM) yang bermutu dan kompetitif.
                    Pembangunan birokrasi yang handal dan sinergisitas pembangunan kabupaten dan desa.
                
                 
                
                MISI KABUPATEN BATANGHARI
                
                 
                
                    Misi Pertama : Terdepan Dalam Penguatan Ketahanan Ekonomi Berbasis Daya Saing Pertanian Dan Agrowisata Untuk Peningkatan Kesejahteraan Masyarakat yang Berkelanjutan.
                    Misi Kedua : Memperkuat Akhlaqul Karimah, Sinergitas Umaro dan Ulama, Semangat Gotong Royong dan Kemandirian Masyarakat sebagai Agen Perubahan dalam Mempercepat Pembangunan dan Tatanan Kehidupan Masyarakat yang Agamis.
                    Misi Ketiga : Menciptakan Ruang Kota yang Nyaman dan Aman, seta Menjamin Tumbuhnya Ruang Berusaha dan Iklim Investasi yang Sehat.
                    Misi Keempat : Mewujudkan Peningkatan Sumber Daya Manusia yang Bermutu dan Kompetitif.
                    Misi Kelima : Mengembangkan Budaya Birokrasi yang Harmonis serta Sinergitas Pembangunan Daerah dan Desa.',   ],[
                
            ],[
                'judul' => 'Profil Batanghari',
                'slug' => 'profil-batanghari',
                'isi'=>'isi konten'
            ],[
                'judul' => 'Pemerintah Batanghari',
                'slug' => 'pemerintah-batanghari',
                'isi'=>'isi konten'
            ],[
                'judul' => 'Akuntabiltas Pemerintahan',
                'slug' => 'akuntabiltas-pemerintahan',
                'isi'=>'isi konten'
            ],[
                'judul' => 'Akuntabiltas Pelaporan',
                'slug' => 'akuntabiltas-pelaporan',
                'isi'=>'isi konten'
            ],[
                'judul' => 'APBD Batanghari',
                'slug' => 'apbd-batanghari',
                'isi'=>'isi konten'
            ],[
                'judul' => 'Arti Lambang',
                'slug' => 'arti-lambang',
                'isi'=>'isi konten'
            ],[
                'judul' => 'Kondisi Demografi',
                'slug' => 'kondisi-demografi',
                'isi'=>'isi konten'
            ],[
                'judul' => 'Peta Batanghari',
                'slug' => 'peta-batanghari',
                'isi'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510429.6550669765!2d102.988379!3d-1.853121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2fa576b077d70b%3A0x3039d80b220cbc0!2sKabupaten%20Batang%20Hari%2C%20Jambi!5e0!3m2!1sid!2sid!4v1709586191712!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
            ]
            ];
        foreach($data as $row){
            Page::create($row);
        }
    }
}
