-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for batan432_bthari
CREATE DATABASE IF NOT EXISTS `batan432_bthari` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `batan432_bthari`;

-- Dumping structure for table batan432_bthari.berita
CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(350) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(350) NOT NULL,
  `dibaca` int(11) NOT NULL,
  `title_gambar` varchar(350) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table batan432_bthari.berita: ~2 rows (approximately)
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
REPLACE INTO `berita` (`id`, `judul`, `isi`, `tanggal`, `gambar`, `dibaca`, `title_gambar`, `created_at`, `updated_at`) VALUES
	(1, 'Bupati Sampaikan LKPJ dan LKPD TA 2016 Pada Paripurna DPRD', 'MUARABULIAN,DISKOMINFO\r\nRapat Paripurna DPRD Kabupaten Batanghari dalam rangka pembahasan Laporan Keterangan Pertanggung Jawaban Bupati dan Laporan Keuangan Pemerintah Daerah Kabupaten Batanghari Tahun 2016 berlangsung Sukses. Rapat Paripurna yang dihadiri langsung oleh Bupati Batanghari,Ir.H.Syahirsyah,Sy beserta Wakil Bupati Batanghari Hj.Sofia Joesoef berlangsung di ruang Rapat Gedung DPRD Kabupaten Batanghari. Acara yang dilaksanakan pada Selasa (11/04) pagi tadi juga dihadiri Plt.Sekda Batanghari,Seluruh Kepala OPD, Forkompinda dan seluruh anggota Dewan dan para tamu undangan lainnya.(omy/kim)</p>\r\n', '2017-04-11', '1493040115.jpg', 1032, 'Bupati dan Wakil Bupati Bersama Pimpinan DPRD Kabupaten Batang Hari', '2023-12-08 15:08:52', '2023-12-08 15:08:52'),
	(2, 'Plt Sekretaris Daerah Buka Forum OPD Kabupaten Batang Hari Tahun 2017', '<p><span dir="rtl">DISKOMINFO, Plt.Sekda Batanghari,H.Bakhtiar,SP pada Tanggal 09 Maret 2017 secara resmi membuka acara Forum Organisasi Perangkat Daerah Kabupaten Batanghari Tahun 2017. Acara yang dilaksanakan di Ruang Aula Bappeda Batanghari ini dihadiri Para Asisten Setda, Kepala OPD,seluruh Kepala SKPD se-Kabupaten Batanghari,seluruh Camat se-Kabupaten Batanghari, Delegasi Kecamatan, Tenaga Ahli Pemberdayaan Masyarakat dan&nbsp;Para tamu undangan.</span></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; Acara Forum Organisasi Perangkat Daerah ini bertemakan &quot;Dengan Forum Organisasi Perangkat Daerah Kabupaten Batanghari Tahun 2017 kita Mewujudkan Konsistensi dan Sinkronisasi Perencanaan Pembangunan Kabupaten Batanghari dalam Rangka Mewujudkan Bangun Sumber Daya Manusia untuk menggerakkan Ekonomi Kerakyatan yang ditinjau dengan Infrastruktur.</p>\r\n\r\n<p>Bupati Batanghari yang diwakili Plt.Sekda Batanghari,dalam sambutannya menyampaikan Kepada seluruh Kepala OPD Kabupaten Batanghari untuk memperhatikan kegiatan prioritas Hasil Musrenbang Kecamatan yang diselaraskan dengan Renstra dan Rancangan Renja OPD dengan menggunakan data dan informasi yang lengkap dan akurat serta rencana tata ruang wilayah kabupaten Batanghari,sehingga tercapai sasaran yang ditetapkan sebagaimana tertuang dalam Visi dan Misi RPJMD Kabupaten Batanghari Tahun 2016-2021.</p>', '2017-03-13', '1493040346.jpg', 843, 'PLT. Sekreatis Daerah Membuka Forum OPD Tahun 2017', '2023-12-08 15:09:58', '2023-12-08 15:09:58'),
	(3, 'Tabligh Akbar', 'Pemerintah Kabupaten Batang Hari bersama Badan Kontak Majelis Taklim (BKMT) Kabupaten Batang Hari Dalam Rangka HUT Kabupaten Batang Hari Ke-75 Tahun 2023.\n\nBupati Batang Hari Mhd Fadhil Arief memberikan sambutan pada acara Tabligh Akbar Dalam Rangka HUT Kabupaten Batang Hari ke-75 Tahun 2023. Pada sambutannya Bupati menyampaikan dan berharap bahwa kegiatan Tabligh Akbar ini dapat mempererat tali silaturahmi sekaligus mengoptimalkan peran aktif para ulama dan organisasi keagamaan yang ada di Kabupaten Batang Hari. \n\n"Bahwa untuk meningkatkan kualitas Sumber Daya Manusia di Kabupaten Batang Hari tidak hanya dilakukan melalui bidang Akademik saja tetapi juga pada kualitas spiritual. Karena kita tahu SDM yang baik itu yang otaknya baik, badannya sehat dan imannya kuat". \n\nDalam kesempatan tersebut, Pemerintah Kabupaten Batang Hari mengundang Ustadz H. Irfan Yusuf atau lebih dikenal Ustadz Rahul untuk mengisi tausiyah pada kegiatan Tabligh Akbar Peringatan HUT Kabupaten Batang Hari Ke-75 Tahun 2023.\n\nBupati menjelaskan bahwa saat ini, setelah dijalan program Guru Ngaji Tangguh di Desa dan sekolah. Terjadi peningkatan anak-anak yang mampu membaca Al-Quran di Kabupaten Batang Hari.\n"Dari 7.412 tinggal 700 orang yang belum belajar baca tulis Al-Quran. Dengan program Guru Ngaji Tangguh yang masuk ke dalam sekolah kita harapkan anak-anak kita semua bisa membaca Al-Quran," jelasnya.\n\nDalam kesempatan tersebut, Bupati juga memohon Doa kepada Masyarakat Kabupaten Batang Hari untuk dapat istiqomah memimpin Kabupaten Batang Hari. Ia berharap, dengan bertambahnya usia Kabupaten Batang Hari. Peningkatan kesejahteraan dan kualitas Sumber Daya Manusia di Kabupaten Batang Hari juga dapat meningkat.\n\n"Kami mohon Doanya kepada ibu-ibu, saya dan Wakil Bupati Batang Hari H. Bakhtiar tolong di Doakan agar tetap Istiqomah memimpin Kabupaten Batang Hari,"\n\nTurut Hadir Kapolres Batang Hari, Kepala Pengadilan Agama Muara Bulian, Ketua TP.PKK Kab. Batang Hari, Ketua BKMT Kab. Batang Hari, Kepala OPD Pemkab Bantang Hari, Para Ulama, Da\'i, dan Ibuk-ibuk BKMT Se-Kabupaten Batang Hari.', '2023-11-15', '.jpg', 0, 'Tabliq Akbar', '2023-11-15 15:29:44', '2023-11-15 15:29:50');
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;

-- Dumping structure for table batan432_bthari.galeri
CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(350) CHARACTER SET latin1 NOT NULL,
  `foto` varchar(350) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Dumping data for table batan432_bthari.galeri: 2 rows
/*!40000 ALTER TABLE `galeri` DISABLE KEYS */;
REPLACE INTO `galeri` (`id`, `judul`, `foto`) VALUES
	(1, 'tablig akbar 4', 'tablig_akbar4.jpg'),
	(2, 'tablig akbar', 'tablig_akbar1.jpg');
/*!40000 ALTER TABLE `galeri` ENABLE KEYS */;

-- Dumping structure for table batan432_bthari.setting
CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(11) NOT NULL,
  `alamat` varchar(350) NOT NULL,
  `telepon` varchar(350) NOT NULL,
  `email` varchar(350) NOT NULL,
  `twitter` varchar(350) NOT NULL,
  `facebook` varchar(350) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table batan432_bthari.setting: ~0 rows (approximately)
/*!40000 ALTER TABLE `setting` DISABLE KEYS */;
REPLACE INTO `setting` (`id`, `alamat`, `telepon`, `email`, `twitter`, `facebook`, `created_at`, `updated_at`) VALUES
	(1, 'Jln. Jenderal Sudirman No 1 Muara Bulian Perkantoran Kantor Bupati Kab. Batang Hari Kode Pos: 36613', '0743 21282 Fax: 0743 21282 / 0821 7932 8999', 'ppidbatangharikab@gmail.com/ ppid@batangarikab.go.id', '', 'diskominfo_bth@yahoo.com', '2020-07-14 01:47:39', '2020-07-14 01:47:39');
/*!40000 ALTER TABLE `setting` ENABLE KEYS */;

-- Dumping structure for table batan432_bthari.slider
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(350) CHARACTER SET latin1 NOT NULL,
  `foto` varchar(350) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Dumping data for table batan432_bthari.slider: 2 rows
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
REPLACE INTO `slider` (`id`, `judul`, `foto`) VALUES
	(1, 'foto', 'home-bg.jpg'),
	(2, 'foto', 'home-bg.jpg');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;

-- Dumping structure for table batan432_bthari.video_kegiatan
CREATE TABLE IF NOT EXISTS `video_kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(350) NOT NULL,
  `link` varchar(350) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table batan432_bthari.video_kegiatan: ~2 rows (approximately)
/*!40000 ALTER TABLE `video_kegiatan` DISABLE KEYS */;
REPLACE INTO `video_kegiatan` (`id`, `judul`, `link`) VALUES
	(1, 'VIDEO: BUPATI BATANGHARI HADIRI HUT PGRI TINGKAT KAB. BATANG HARI', 'https://www.youtube.com/watch?v=w-sms6ItKew'),
	(2, 'VIDEO: BUPATI BATANGHARI TINJAU PELAKSANAAN PILKADES SERENTAK 2021', 'https://www.facebook.com/100063944693939/videos/pcb.257073556434132/412033597102535'),
	(3, 'VIDEO: BUPATI BATANGHARI MENYERAHKAN RUMAH PROGRAM BAZNAS BATANGHARI KEPADA MUSTAHIQ DI DESA TELUK', 'https://www.facebook.com/pemkab.batanghari/videos/1463888344011718');
/*!40000 ALTER TABLE `video_kegiatan` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
