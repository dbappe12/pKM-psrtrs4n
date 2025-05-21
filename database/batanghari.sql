-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 8.0.30 - MySQL Community Server - GPL
-- OS Server:                    Win64
-- HeidiSQL Versi:               12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk batan432_bthari
CREATE DATABASE IF NOT EXISTS `batan432_bthari` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `batan432_bthari`;

-- membuang struktur untuk table batan432_bthari.beritas
CREATE TABLE IF NOT EXISTS `beritas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `dibaca` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tittle_gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.beritas: ~2 rows (lebih kurang)
INSERT INTO `beritas` (`id`, `judul`, `isi`, `tanggal`, `gambar`, `dibaca`, `tittle_gambar`, `created_at`, `updated_at`) VALUES
	(1, 'Bupati Sampaikan LKPJ dan LKPD TA 2016', '<div style="text-align: justify;"><span style=\'color: rgb(255, 255, 255); background-color: rgb(255, 0, 0); font-family: "Times New Roman"; font-size: 16px;\'>MUARABULIAN,DISKOMINFO Rapat Paripurna DPRD Kabupaten Batanghari dalam rangka pembahasan Laporan Keterangan Pertanggung Jawaban Bupati dan Laporan Keuangan Pemerintah Daerah Kabupaten Batanghari Tahun 2016 berlangsung Sukses. Rapat Paripurna yang dihadiri langsung oleh Bupati Batanghari,Ir.H.Syahirsyah,Sy beserta Wakil Bupati Batanghari Hj.Sofia Joesoef berlangsung di ruang Rapat Gedung DPRD Kabupaten Batanghari. Acara yang dilaksanakan pada Selasa (11/04) pagi tadi juga dihadiri Plt.Sekda Batanghari,Seluruh Kepala OPD, Forkompinda dan seluruh anggota Dewan dan para tamu undangan lainnya.(omy/kim)</span><span style=\'font-family: "Times New Roman"; font-size: 16px; background-color: rgb(255, 0, 0);\'><p></p></span></div>\n', '2019-01-11', 'news-2-1.jpg', '1032', 'Bupati dan Wakil Bupati Bersama Pimpinan DPRD Kabupaten Batang Hari', '2023-12-28 05:21:31', '2024-01-03 03:53:13'),
	(2, 'Plt Sekretaris Daerah Buka Forum OPD Kabupaten Batang Hari Tahun 2017', '<p><span dir="rtl">DISKOMINFO, Plt.Sekda Batanghari,H.Bakhtiar,SP pada Tanggal 09 Maret 2017 secara resmi membuka acara Forum Organisasi Perangkat Daerah Kabupaten Batanghari Tahun 2017. Acara yang dilaksanakan di Ruang Aula Bappeda Batanghari ini dihadiri Para Asisten Setda, Kepala OPD,seluruh Kepala SKPD se-Kabupaten Batanghari,seluruh Camat se-Kabupaten Batanghari, Delegasi Kecamatan, Tenaga Ahli Pemberdayaan Masyarakat dan&nbsp;Para tamu undangan.</span><p>\\r\\n\\r\\n</p><p>&nbsp; &nbsp; &nbsp; &nbsp; Acara Forum Organisasi Perangkat Daerah ini bertemakan "Dengan Forum Organisasi Perangkat Daerah Kabupaten Batanghari Tahun 2017 kita Mewujudkan Konsistensi dan Sinkronisasi Perencanaan Pembangunan Kabupaten Batanghari dalam Rangka Mewujudkan Bangun Sumber Daya Manusia untuk menggerakkan Ekonomi Kerakyatan yang ditinjau dengan Infrastruktur.</p><p>\\r\\n\\r\\n</p><p>Bupati Batanghari yang diwakili Plt.Sekda Batanghari,dalam sambutannya menyampaikan Kepada seluruh Kepala OPD Kabupaten Batanghari untuk memperhatikan kegiatan prioritas Hasil Musrenbang Kecamatan yang diselaraskan dengan Renstra dan Rancangan Renja OPD dengan menggunakan data dan informasi yang lengkap dan akurat serta rencana tata ruang wilayah kabupaten Batanghari,sehingga tercapai sasaran yang ditetapkan sebagaimana tertuang dalam Visi dan Misi RPJMD Kabupaten Batanghari Tahun 2016-2021.</p></p>\n', '2024-07-13', 'DSCF0056.JPG', '843', 'PLT. Sekreatis Daerah Membuka Forum OPD Tahun 2017', '2023-12-28 05:21:31', '2024-01-08 04:31:21'),
	(19, 'Sebut Prabowo Punya Lahan 340 ribu Ha, Anies: Separuh Tentara', '<p>a</p>\n', '2024-01-08', 'news-2-1.jpg', NULL, 'Bupati dan Wakil Bupati Bersama Pimpinan DPRD Kabupaten Batang Hari', '2024-01-08 06:13:06', '2024-01-08 06:13:06'),
	(20, 'Duterte Ngamuk, Tuduh Marcos Jr Pecandu Narkoba-Mau Ubah Konstitusi Filipina', '<p class="news-details__text-1" style="text-align: justify;">Lorem ipsum dolor sit amet, cibo mundi ea duo, vim\r\n                                    exerci phaedrum. There are many variations of passages of Lorem Ipsum available, but\r\n                                    the majority have alteration in some injected or words which don\'t look even\r\n                                    slightly believable. If you are going to use a passage of Lorem Ipsum, you need to\r\n                                    be sure there isn\'t anything embarrang hidden in the middle of text. All the Lorem\r\n                                    Ipsum generators on the Internet tend to repeat predefined chunks as necessary,\r\n                                    making this the first true generator on the Internet. It uses a dictionary of over\r\n                                    200 Latin words, combined with a handful of model sentence structures, to generate\r\n                                    Lorem Ipsum which looks reasonable. <p class="news-details__text-2" style="text-align: justify;">Lorem Ipsum has been the industry\'s standard dummy text\r\n                                    ever since the 1500s, when an unknown printer took a galley of type and scrambled it\r\n                                    to make a type simen book. It has survived not only five centuries, but also the\r\n                                    leap into electronic typesetting.</p><p class="news-details__text-3" style="text-align: justify; ">Lorem Ipsum is simply dummy text of the printing and\r\n                                    typesetting industry. orem Ipsum has been the industry\'s standard dummy text ever\r\n                                    since the when an unknown printer took a galley of type and scrambled it to make a\r\n                                    type specimen book.</p><p></p></p>\n', '2024-01-18', 'news-2-1.jpg', NULL, 'adae', '2024-01-18 07:51:58', '2024-01-30 06:57:31'),
	(21, 'tes', '<div style="text-align: justify;"><span style="font-size: 0.875rem;">ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade adeade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade ade</span></div>\n', '2024-01-30', NULL, NULL, 'tes', '2024-01-30 07:06:20', '2024-01-30 07:06:20');

-- membuang struktur untuk table batan432_bthari.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.failed_jobs: ~0 rows (lebih kurang)

-- membuang struktur untuk table batan432_bthari.fileponds
CREATE TABLE IF NOT EXISTS `fileponds` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `extension` varchar(100) NOT NULL,
  `mimetypes` varchar(100) NOT NULL,
  `disk` varchar(100) NOT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.fileponds: ~8 rows (lebih kurang)
INSERT INTO `fileponds` (`id`, `filename`, `filepath`, `extension`, `mimetypes`, `disk`, `created_by`, `expires_at`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'DAFTAR ANGGOTA KS BARA1.pdf', 'filepond/temp/DUSRQZ00REytCDVR0Afoc9qi9aCRHFDRtidXNyb6.pdf', 'pdf', 'application/pdf', 'public', 1, '2024-01-18 12:14:46', '2024-01-18 04:44:48', '2024-01-18 04:44:46', '2024-01-18 04:44:48'),
	(2, 'DAFTAR ANGGOTA KS BARA1.pdf', 'filepond/temp/pvRtLVVuJtMdIdHGNRFF3oqBn8b5LUuek3KQXB74.pdf', 'pdf', 'application/pdf', 'public', 1, '2024-01-18 12:14:56', '2024-01-18 04:45:00', '2024-01-18 04:44:56', '2024-01-18 04:45:00'),
	(3, 'itsolutionstuff-pdf-file-1704802541 (2).pdf', 'filepond/temp/AB5JFXOFRjabuHIL1VrtfEvygZig85zp9hVTh9pF.pdf', 'pdf', 'application/pdf', 'public', 1, '2024-01-18 12:14:56', '2024-01-18 04:44:59', '2024-01-18 04:44:56', '2024-01-18 04:44:59'),
	(4, 'DAFTAR ANGGOTA KS BARA1.pdf', 'filepond/temp/zItoFaZEpm4kFBO4pGPr63PPXZn1QdWG5bzSfw8n.pdf', 'pdf', 'application/pdf', 'public', 1, '2024-01-18 12:15:28', '2024-01-18 04:45:30', '2024-01-18 04:45:28', '2024-01-18 04:45:30'),
	(5, 'PERDA_NOMOR_7_TAHUN_2018_TENTANG_ANGGARAN_PENDAPATAN_DAN_BELANJA_DAERAH_KOTA_JAMBI_TAHUN_ANGGARAN_2019.pdf', 'filepond/temp/ZuXvj68Qw2qF2P0yVaUXGHZxD0yLi0m13CbgbEot.pdf', 'pdf', 'application/pdf', 'public', 1, '2024-01-18 12:15:28', '2024-01-18 04:45:31', '2024-01-18 04:45:28', '2024-01-18 04:45:31'),
	(6, 'selamat.pdf', 'filepond/temp/ulej6JpbEKso2Q1tUIUs70zgb1IaBZCvZNf6XgTR.pdf', 'pdf', 'application/pdf', 'public', 1, '2024-01-18 12:21:42', '2024-01-18 04:52:44', '2024-01-18 04:51:42', '2024-01-18 04:52:44'),
	(7, 'PERDA_NOMOR_7_TAHUN_2018_TENTANG_ANGGARAN_PENDAPATAN_DAN_BELANJA_DAERAH_KOTA_JAMBI_TAHUN_ANGGARAN_2019.pdf', 'filepond/temp/aFV1rjvEfzPSiRFyBTqtlgk5cntITfS2juen7MaQ.pdf', 'pdf', 'application/pdf', 'public', 1, '2024-01-18 12:28:01', NULL, '2024-01-18 04:58:01', '2024-01-18 04:58:01'),
	(8, 'itsolutionstuff-pdf-file-1704802541.pdf', 'filepond/temp/bvnFMhQxBiTt7sQYftstdlWBvVIcldZ2ikOlhm1I.pdf', 'pdf', 'application/pdf', 'public', 1, '2024-01-18 12:31:53', NULL, '2024-01-18 05:01:53', '2024-01-18 05:01:53'),
	(9, 'PERDA_NOMOR_7_TAHUN_2018_TENTANG_ANGGARAN_PENDAPATAN_DAN_BELANJA_DAERAH_KOTA_JAMBI_TAHUN_ANGGARAN_2019.pdf', 'filepond/temp/bY2Eem1N6PAxWDW7sZ0wjrl3lKGjQM7E9kfGHVLn.pdf', 'pdf', 'application/pdf', 'public', 1, '2024-01-18 12:34:11', NULL, '2024-01-18 05:04:11', '2024-01-18 05:04:11'),
	(10, '416106109_433304865876998_2544762058179811229_n.jpg', 'filepond/temp/tx412XSBfuZfgovF52iDgJtgBSnQPeUgr2j3FzT8.jpg', 'jpg', 'image/jpeg', 'public', 1, '2024-01-30 14:42:45', NULL, '2024-01-30 07:12:45', '2024-01-30 07:12:45');

-- membuang struktur untuk table batan432_bthari.galeris
CREATE TABLE IF NOT EXISTS `galeris` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.galeris: ~8 rows (lebih kurang)
INSERT INTO `galeris` (`id`, `judul`, `foto`, `created_at`, `updated_at`) VALUES
	(6, 'Cover foto', 'contoh.jpg', '2023-12-28 04:09:26', '2024-01-12 15:07:14'),
	(12, 'Cover foto Ade', 'contoh.jpg', '2023-12-28 04:09:26', '2023-12-28 04:36:47'),
	(15, 'Cover foto Ade', 'contoh.jpg', '2023-12-28 04:09:26', '2023-12-28 04:36:47'),
	(20, 'Cover foto', 'contoh.jpg', '2024-01-16 14:54:29', '2024-01-16 14:54:29'),
	(21, 'Cover foto', '1706668345.jpg', '2024-01-31 02:32:25', '2024-01-31 02:32:25'),
	(22, 'Cover foto', '1706668452.jpg', '2024-01-31 02:34:12', '2024-01-31 02:34:12'),
	(23, 'Cover foto', '1706668588.jpg', '2024-01-31 02:36:28', '2024-01-31 02:36:28'),
	(24, 'Cover foto', '1706668975.jpg', '2024-01-31 02:42:55', '2024-01-31 02:42:55'),
	(25, 'Cover foto', '1706669280.jpg', '2024-01-31 02:48:00', '2024-01-31 02:48:00');

-- membuang struktur untuk table batan432_bthari.infografis
CREATE TABLE IF NOT EXISTS `infografis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `gambar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `file` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.infografis: ~4 rows (lebih kurang)
INSERT INTO `infografis` (`id`, `judul`, `tanggal`, `gambar`, `file`, `created_at`, `updated_at`) VALUES
	(1, 'Covid', '2024-01-09', 'contoh.jpg', 'file.pdf', '2024-01-09 07:21:14', '2024-01-09 07:21:15'),
	(2, 'Covid', '2024-01-09', 'tes.jpg', 'file.pdf', '2024-01-09 07:21:14', '2024-01-09 07:21:15'),
	(3, 'Covid', '2024-01-09', 'contoh.jpg', 'file.pdf', '2024-01-09 07:21:14', '2024-01-09 07:21:15'),
	(4, 'Covid', '2024-01-09', 'contoh.jpg', 'file.pdf', '2024-01-09 07:21:14', '2024-01-09 07:21:15');

-- membuang struktur untuk table batan432_bthari.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_menu_induk` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `active` varchar(255) NOT NULL,
  `permission` varchar(255) DEFAULT NULL,
  `id_permission` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.menu: ~16 rows (lebih kurang)
INSERT INTO `menu` (`id`, `id_menu_induk`, `type`, `title`, `url`, `icon`, `active`, `permission`, `id_permission`, `created_at`, `updated_at`) VALUES
	(1, '0', 'header', 'App Settings', NULL, NULL, '[]', '["superadmin","admin","operator"]', '[1,2,3]', NULL, NULL),
	(2, '0', 'menu', 'Dashboard', 'dashboard', 'fas fa-tachometer-alt', 'dashboard', '["superadmin","admin","operator"]', '[1,2,3]', NULL, NULL),
	(3, '0', 'tree', 'Master Aplikasi', 'user.index', 'fas fa-user-shield', '', '["superadmin","admin","operator"]', '[1,2]', NULL, '2024-01-16 03:59:42'),
	(4, '3', 'menu', 'Master User', 'user.index', 'fas fa-user', 'user.*', '["superadmin","admin","operator"]', '[1,2,3]', NULL, NULL),
	(5, '3', 'menu', 'Role', 'role.index', 'fas fa-user-cog', 'role.index', '["superadmin","admin","operator"]', '[1,2]', NULL, NULL),
	(9, '3', 'menu', 'Menu', 'menu.index', 'fa fa-solid fa-list', 'menu.*', '["superadmin","admin","operator"]', '[1,2,3]', NULL, NULL),
	(74, '0', 'menu', 'Profil', 'profile.index', 'fas fa-user-alt', 'profile.index', '["superadmin","admin","operator"]', '[1, 2, 3]', '2023-12-12 15:39:07', '2024-01-18 03:21:38'),
	(78, '3', 'menu', 'Permission', 'permission.index', 'fas fa-unlock', 'permission.index', '["superadmin","admin","operator"]', '[1,2,3]', NULL, NULL),
	(82, '0', 'header', 'Master App', 'galeri.index', NULL, '["admin\\/#"]', '["superadmin","admin","operator"]', '[1, 2]', '2023-12-27 05:06:59', '2023-12-27 05:06:59'),
	(83, '0', 'tree', 'Batanghari', 'galeri.index', 'fa fa-solid fa-house-user', 'galeri.index', '["superadmin","admin"]', '[1, 2,3]', '2023-12-27 05:10:47', '2024-01-22 07:20:49'),
	(84, '83', 'menu', 'Galeri Foto', 'galeri.index', 'fa fa-solid fa-image', 'galeri.index', '["superadmin","admin","operator"]', '[1, 2,3]', '2023-12-27 05:16:31', '2024-01-16 14:01:18'),
	(85, '83', 'menu', 'Youtube', 'youtube.index', 'fa fas fa-video', 'youtube.index', '["superadmin","admin","operator"]', '[1, 2]', '2023-12-27 05:40:28', '2024-01-16 14:02:23'),
	(86, '83', 'menu', 'Berita', 'news.index', 'fa fa-solid fa-newspaper', 'news.*', '["superadmin","admin","operator"]', '[1, 2]', '2023-12-27 05:48:03', '2024-01-16 13:58:19'),
	(87, '83', 'menu', 'Web SKPD', 'skpd.index', 'fa fa-solid fa-window-restore', 'skpd.index', '["superadmin","admin","operator"]', '[1, 2]', '2024-01-02 04:46:05', '2024-01-16 14:00:49'),
	(88, '83', 'menu', 'Infografis', 'infografis.index', 'fa fas fa-info', 'infografis.index', '["superadmin","admin","operator"]', '[1, 2]', '2024-01-10 03:38:20', '2024-01-16 14:01:08');

-- membuang struktur untuk table batan432_bthari.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.migrations: ~0 rows (lebih kurang)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2022_03_29_105225_create_settings_table', 1),
	(7, '2023_11_02_093734_create_permission_tables', 1),
	(8, '2023_11_02_093821_create_products_table', 1),
	(9, '2023_11_21_000000_create_fileponds_table', 1),
	(10, '2023_12_12_031359_create_berita_table', 1),
	(11, '2023_12_12_032848_create_galeri_table', 1),
	(12, '2023_12_12_040524_create_sliders_table', 1),
	(13, '2023_12_12_040938_create_video_kegiatans_table', 1),
	(14, '2023_12_20_055129_create_pages_table', 1),
	(15, '2023_12_20_164655_create_menus_table', 1);

-- membuang struktur untuk table batan432_bthari.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.model_has_permissions: ~0 rows (lebih kurang)

-- membuang struktur untuk table batan432_bthari.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.model_has_roles: ~3 rows (lebih kurang)
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1),
	(2, 'App\\Models\\User', 2),
	(3, 'App\\Models\\User', 3);

-- membuang struktur untuk table batan432_bthari.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.pages: ~11 rows (lebih kurang)
INSERT INTO `pages` (`id`, `judul`, `isi`, `created_at`, `updated_at`, `slug`) VALUES
	(1, 'Visi dan Misi', '<p style="text-align: center; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px 5px 8px; color: rgb(37, 33, 33); line-height: 17px; font-family: sans-serif; font-size: 11.583px;"><span style="font-size: 16px;"><strong>VISI PEMBANGUNAN KABUPATEN BATANG HARI</strong></span><p style="text-align: center; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px 5px 8px; color: rgb(37, 33, 33); line-height: 17px; font-family: sans-serif; font-size: 11.583px;"><span style="font-size: 16px;"><strong>TAHUN 2021 -2026</strong></span></p><p style="text-align: center; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px 5px 8px; color: rgb(37, 33, 33); line-height: 17px; font-family: sans-serif; font-size: 11.583px;"><span style="font-size: 16px;"><strong><br></strong></span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 7.1pt; padding: 5px 0px 5px 8px; color: rgb(37, 33, 33); line-height: 17px; font-family: sans-serif; font-size: 11.583px; text-align: center;"><span style="font-size: 16px;"><strong>PERUBAHAN MENUJU ARAH BARU BATANGHARI TANGGUH</strong></span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px 5px 8px; color: rgb(37, 33, 33); line-height: 17px; font-family: sans-serif; font-size: 11.583px; text-align: center;"><span style="font-size: 16px;"><strong>(Terdepan, Agamis, Nyaman, Gotong Royong, Bermutu Dan Harmonis)</strong></span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px 5px 8px; color: rgb(37, 33, 33); line-height: 17px; font-family: sans-serif; font-size: 11.583px; text-align: center;"><span style="font-size: 16px;"><strong><br></strong></span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px 5px 8px; color: rgb(37, 33, 33); line-height: 17px; font-family: sans-serif; font-size: 11.583px;"><strong>Tujuan</strong><strong>&nbsp;</strong><strong>Pembangunan</strong><strong>&nbsp;</strong><strong>Daerah</strong><strong>&nbsp;Kabupaten Batang Hari :</strong></p><ol style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 11.583px;"><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Menjadi&nbsp;Basis Pengembangan Ekonomi Pertanian dan Agrowisata dikawasan Provinsi Jambi.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Mewujudkan&nbsp;Ketaatan dan Implementasi Nilai-Nilai Keagamaan ditengah Masyarakat.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Mewujudkan&nbsp;Pemberdayaan Masyarakat sebagai Agen Percepatan Pembangunan.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Mewujudkan&nbsp;Pemanfaatan Ruang untuk Kenyamanan, Keamanan dalam mendukung kelestarian&nbsp;&nbsp; Lingkungan.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Mewujudkan&nbsp;Batang Hari sebagai tempat Investasi yang menguntungkan investor dan mensejahterakan Masyakarat.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Mewujudkan&nbsp;Sumber Daya Manusia yang Bermutu dan Kompetitif.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Mewujudkan&nbsp;Birokrasi yang Harmonis serta Sinergitas Pembangunan Daerah dan Desa.</li></ol><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px 5px 8px; color: rgb(37, 33, 33); line-height: 17px; font-family: sans-serif; font-size: 11.583px;">&nbsp;<strong>Sasaran Pembangunan Daerah&nbsp; Kabupaten Batang Hari :</strong></p><ol style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 11.583px;"><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Terwujudnya Penguatan Ekonomi berbasis Pertanian dengan menjamin terciptanya Skala Ekonomi dalam Peningkatan Kesejahteraan Petani.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Wirausaha Milenial dan Mewujudkan Industri Kreatif berbasis Agricultural-Ekowisata&nbsp;</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Kehidupan Masyarakat yang bertumpu pada Budi Pekerti yang Luhur, Toleransi Antar Umat beragama yang mengedepankan Etika dan Moral dalam tatanan Kehidupan Masyarakat</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Menghidupkan&nbsp;Kembali Semangat Gotong Royong dan Kemandirian Masyarakat menuju Ketahanan Keluarga.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Meningkatkan Ruang Kota dan Ruang Terbuka yang Aman dan Nyaman.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Mewujudkan&nbsp;Lingkungan dan Kawasan Permukiman yang sehat.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Peningkatan&nbsp;dan Ketertiban Masyarakat.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Meningkatnya Nilai Investasi sebagai modal Pembangunan dan Mendorong&nbsp;Optimalisasi Pemanfaatan potensi sumber daya daerah.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Meningkatkan&nbsp;Kesehatan dan Status Gizi Masyarakat serta Peningkatan Aksesbilitas dan Mutu Pendidikan.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Mewujudkan&nbsp;Pembangunan Kualitas Sumber Daya Manusia yang Bermutu melalui Standarisasi Mutu Lulusan yang Merata dan Berdaya Saing.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Meningkatnya&nbsp;kinerja Instansi Pemerintah.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Meningkatnya&nbsp;kualitas Pelayanan Umum.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Pembangunan Daerah dan Desa yang Berorientasi Hasil.</li></ol><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px 5px 8px; color: rgb(37, 33, 33); line-height: 17px; font-family: sans-serif; font-size: 11.583px;"><strong>Priotitas Pembangunan Kabupaten Batang Hari&nbsp; Yaitu :</strong></p><ol style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 11.583px;"><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Pembangunan&nbsp;ekonomi berbasis pertanian.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Pembangunan etika dan moral, toleransi antar umat beragama dan nasionalisme Serta Menjadikan Masyarakat sebagai agent perubahan.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Pembangunan ruang kota yang nyaman, sehat dan investasi yang saling menguntungkan.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Pembangunan&nbsp;sumber daya manusia (SDM) yang bermutu dan kompetitif.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Pembangunan birokrasi yang handal dan sinergisitas pembangunan kabupaten dan desa.</li></ol><p style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;"><strong style="color: rgb(37, 33, 33); font-family: sans-serif; font-size: 16px; text-align: center;"><br></strong></p><p style="text-align: justify; border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;"><span style="font-weight: bolder; color: rgb(37, 33, 33); font-family: sans-serif; font-size: 16px; text-align: center;">VISI PEMBANGUNAN KABUPATEN BATANG HARI</span><br></p><ol style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 11.583px;"><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Misi&nbsp;Pertama : Terdepan Dalam Penguatan Ketahanan Ekonomi Berbasis Daya Saing Pertanian Dan Agrowisata Untuk Peningkatan Kesejahteraan Masyarakat yang Berkelanjutan.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Misi&nbsp;Kedua : Memperkuat Akhlaqul Karimah, Sinergitas Umaro dan Ulama, Semangat Gotong Royong dan Kemandirian Masyarakat sebagai Agen Perubahan dalam Mempercepat Pembangunan dan Tatanan Kehidupan Masyarakat yang Agamis.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Misi&nbsp;Ketiga : Menciptakan Ruang Kota yang Nyaman dan Aman, seta Menjamin Tumbuhnya Ruang Berusaha dan Iklim Investasi yang Sehat.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Misi&nbsp;Keempat : Mewujudkan Peningkatan Sumber Daya Manusia yang Bermutu dan Kompetitif.</li><li style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;">Misi&nbsp;Kelima : Mengembangkan Budaya Birokrasi yang Harmonis serta Sinergitas Pembangunan Daerah dan Desa.</li></ol><p style="border-bottom: 1px dotted rgb(204, 204, 204); line-height: 17.3745px;"><br></p><p></p><p></p><p></p><p></p><p></p><p></p></p>\r\n', '2024-01-30 03:20:21', '2024-01-30 03:20:21', 'visi-dan-misi'),
	(3, 'Sejarah', '<p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px 5px 8px; color: rgb(37, 33, 33); line-height: 17px; font-family: sans-serif; font-size: 11.583px; text-align: justify;"><strong><span style="font-family: &quot;Segoe UI&quot;; font-size: 14px;">KABUPATEN</span></strong><span style="font-family: &quot;Segoe UI&quot;; font-size: 14px;">&nbsp;Batang Hari dengan FILOSOFI “ Serentak Bak Regam “ beribukota Muara Bulian dibentuk Tanggal&nbsp; 1 Desember 1948 melalui Peraturan Komisaris Pemerintah RI di Bukit Tinggi No.81/Kom/U tanggal 30 Nopember 1948 dengan Pusat Pemerintahan waktu itu&nbsp; di Jambi, Sekarang kota Jambi,&nbsp; dan merupakan satu dari 11 Kabupaten/Kota dalam Provinsi Jambi,&nbsp; sedang Provinsi Jambi dibentuk dengan UU&nbsp; Darurat&nbsp; No.19 tahun 1957 bersamaan dengan pembentukan Provinsi Sumatera Barat dan Riau.</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px 5px 8px; color: rgb(37, 33, 33); line-height: 17px; font-family: sans-serif; font-size: 11.583px; text-align: justify;"><span style="font-family: &quot;Segoe UI&quot;; font-size: 14px;">Secara historis, pada masa pemerintahan Nurdin sebagai Bupati Pertama&nbsp; 1950 -1952 kawasan Batang Hari masih belum memiliki otonomi&nbsp; dan kedudukan pusat pemerintahan sebagai Daerah Tk. II secara pasti, ini berlangsung hingga masa kepemimpinan M.Djamin Datuk Bagindo 1952-1963,&nbsp;&nbsp; dan Abdul Manaf Bupati ketiga&nbsp; 1953-1954.</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px 5px 8px; color: rgb(37, 33, 33); line-height: 17px; font-family: sans-serif; font-size: 11.583px; text-align: justify;"><span style="font-family: &quot;Segoe UI&quot;; font-size: 14px;">Namun demikian pembangunan di kawasan Kabupaten Batang Hari terus&nbsp; berjalan. Sejak tahun 1954 cikal bakal pemimpin-pemimpin wilayah Batang Hari dalam hal memperbaiki mekanisme pemerintahan daerah serta mewujudkan berbagai apek pembangunan mulai dirintis sebagai langkah awal menuju pembangunan berikutnya.</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px 5px 8px; color: rgb(37, 33, 33); line-height: 17px; font-family: sans-serif; font-size: 11.583px; text-align: justify;"><span style="font-family: &quot;Segoe UI&quot;; font-size: 14px;">Tahun 1954-1956 Batanghari dipimpin oleh Bupati Madolangeng, Tahun 1956-1957&nbsp; R. Sunarto, tahun 1957-1958 dipimpin oleh Ali Sudin, dan Tahun 1958-1966 saat dipimpin oleh H. Bakri Sulaiman terjadi perubahan otoritas pemerintahan. Tahun 1963 Pusat pemerintahan&nbsp; Kabupaten Batang Hari dipindah ke KM.10 Kenali Asam (saat ini masuk wilayah Kota Jambi).&nbsp; Tahun&nbsp; 1965 sesuai&nbsp; UU No.7 Tahun 1965, Kabupaten Batang Hari&nbsp;&nbsp; dimekarkan menjadi 2 Daerah Tingkat II yakni Kabupaten Dati II Batang Hari yang beribukota KM. 10 Kenali Asam dan Kabupaten&nbsp; Tanjung Jabung yang beribukota Kuala Tungkal.</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px 5px 8px; color: rgb(37, 33, 33); line-height: 17px; font-family: sans-serif; font-size: 11.583px; text-align: justify;"><span style="font-family: &quot;Segoe UI&quot;; font-size: 14px;">Tahun 1966-1968 Kabupaten Batang Hari dipimpin Drs. H.Z. Muchtar DM dan tahun 1968-1979 dilanjutkan oleh Rd. Syuhur. Tahun 1979 Pusat Pemerintahan Kabupaten Batang Hari dipindahkan&nbsp; dari Km. 10 Kenali Asam ke Muara Bulian berdasarkan&nbsp; UU NO. 12 Tahun 1979 dan diresmikan oleh Mendagri&nbsp;&nbsp; Bapak Amir Machmud&nbsp; tanggal&nbsp; 21 Juli 1979.</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px 5px 8px; color: rgb(37, 33, 33); line-height: 17px; font-family: sans-serif; font-size: 11.583px; text-align: justify;"><span style="font-family: &quot;Segoe UI&quot;; font-size: 14px;">Tahun 1981-1991 Kabupaten Batanghari dipimpin oleh Drs.H. Hasip Kalimuddinsyam. Tahun 1991-2001 Batanghari dipimpin oleh Bupati H.M. Saman Chatib, SH.&nbsp; sejalan dengan era reformasi dan tuntutan otonomi daerah Kabupaten Batang Hari. Berdasarkan&nbsp;&nbsp; UU. No. 54 tahun&nbsp; 1999 dimekarkan kembali menjadi 2, yakni&nbsp; Kabupaten Batang Hari yang beribukota Muara Bulian dan Kabupaten Muaro Jambi yang beribukota&nbsp; Sengeti yang peresmian dilakukan oleh Mendagri di Jakarta bulan Oktober 1999, sehingga saat ini Kabupaten Batanghari memiliki luas wilayah 5.809,43 Km persegi, berpenduduk sampai Desember 2010&nbsp; sebanyak 240.763 jiwa tersebar pada 8 Kecamatan&nbsp; dengan 100 Desa dan 13 Kelurahan.</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px 5px 8px; color: rgb(37, 33, 33); line-height: 17px; font-family: sans-serif; font-size: 11.583px; text-align: justify;"><span style="font-family: &quot;Segoe UI&quot;; font-size: 14px;">Tahun 2001-2006 Kabupaten Batang Hari dipimpin oleh H. Abdul Fattah, SH dengan Wakilnya Ir. Syahirsah, Sy yang menjadi Wakil Bupati pertama sejak Batang Hari berdiri. Tahun 2006-2011 Kabupaten Batanghari dipimpin oleh Bupati Ir. Syahirsah, Sy dengan Wakil Bupati H. Ardian Faisal, SE, MSi (Putra HM. Saman Chatib, SH), sebagai Bupati dan Wakil Bupati yang dipilih langsung oleh rakyat untuk yang pertama kali melalui proses Pilkada Langsung.</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px 5px 8px; color: rgb(37, 33, 33); line-height: 17px; font-family: sans-serif; font-size: 11.583px; text-align: justify;"><span style="font-family: &quot;Segoe UI&quot;; font-size: 14px;">Tahun 2011 Kabupaten Batang Hari dipimpin oleh H. Abdul Fattah, SH dan Sinwan, SH yang menjadi Bupati dan wakil Bupati&nbsp; Batang Hari periode 2011-2016. Pada periode Tahun 2013-2016Kabupaten Batanghari dipimpin oleh Sinwan ,SH sebagai Bupati.</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px 5px 8px; color: rgb(37, 33, 33); line-height: 17px; font-family: sans-serif; font-size: 11.583px; text-align: justify;"><span style="font-family: &quot;Segoe UI&quot;; font-size: 14px;">Periode baru saat ini dengan mengusung slogan "Batang Hari BERSATU", pasangan Ir. H. Syahirsah. SY &nbsp;dan Hj.Sofia Joesoef, SH terpilih&nbsp;sebagai Bupati dan Wakil Bupati Kabupaten Batang Hari untuk&nbsp;tahun pengabdian 2016-2021.</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px 5px 8px; color: rgb(37, 33, 33); line-height: 17px; font-family: sans-serif; font-size: 11.583px; text-align: justify;"><span style="font-family: &quot;Segoe UI&quot;; font-size: 14px;">Kabupaten Batang Hari&nbsp; mengalami dua kali pemekaran, yang pertama sesuai&nbsp; UU No.7 Tahun 1965 Kabupaten Batang Hari&nbsp; dimekarkan menjaddi dua Daerah Tingkat II, yakni Kabupaten Batang Hari&nbsp; beribukota Kenali Asam dan Kabupaten Tanjung Jabung yang beribukota Kuala Tungkal, Kedua,&nbsp; sesuai dengan&nbsp; UU No. 54 Tahun 1999 Kabupaten BatangHari kembvali dimekarkan menjadi Dua Kabupaten yakni Kabupaten Batang Hari dengan Ibukota Muara Bulian dan Kabupaten Muaro Jambi beribukota Sengeti.</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px 5px 8px; color: rgb(37, 33, 33); line-height: 17px; font-family: sans-serif; font-size: 11.583px; text-align: justify;"><span style="font-family: &quot;Segoe UI&quot;; font-size: 14px;">Saat ini&nbsp; Kabupaten Batang Hari memiliki luas wilayah 5.804,83 Km Bujur sangkar dengan&nbsp; penduduk Sampai Desember 2010 berjumlah 241.334 jiwa tersebar di 8 Kecamatan atau 100 Desa dan 13 Kelurahan.</span></p> \r\n         \r\n    ', '2024-01-30 03:21:04', '2024-01-30 03:21:04', 'sejarah'),
	(4, 'Profil Batanghari', 'isi konten', '2024-01-30 03:21:04', '2024-01-30 03:21:04', 'profil-batanghari'),
	(5, 'Pemerintah Batanghari', 'isi konten', '2024-01-30 03:21:04', '2024-01-30 03:21:04', 'pemerintah-batanghari'),
	(6, 'Akuntabiltas Pemerintahan', 'isi konten', '2024-01-30 03:21:04', '2024-01-30 03:21:04', 'akuntabiltas-pemerintahan'),
	(7, 'Akuntabiltas Pelaporan', 'isi konten', '2024-01-30 03:21:04', '2024-01-30 03:21:04', 'akuntabiltas-pelaporan'),
	(8, 'APBD Batanghari', 'isi konten', '2024-01-30 03:21:04', '2024-01-30 03:21:04', 'apbd-batanghari'),
	(9, 'Arti Lambang', 'isi konten', '2024-01-30 03:21:04', '2024-01-30 03:21:04', 'arti-lambang'),
	(10, 'Kondisi Demografi', 'isi konten', '2024-01-30 03:21:04', '2024-01-30 03:21:04', 'kondisi-demografi'),
	(11, 'Peta Batanghari', 'isi konten', '2024-01-30 03:21:04', '2024-01-30 03:21:04', 'peta-batanghari');

-- membuang struktur untuk table batan432_bthari.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.password_resets: ~0 rows (lebih kurang)

-- membuang struktur untuk table batan432_bthari.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.password_reset_tokens: ~0 rows (lebih kurang)

-- membuang struktur untuk table batan432_bthari.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.permissions: ~27 rows (lebih kurang)
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'filemanager', 'web', '2023-12-27 04:47:48', '2023-12-27 04:47:48'),
	(2, 'read module', 'web', '2023-12-27 04:47:48', '2023-12-27 04:47:48'),
	(3, 'delete setting', 'web', '2023-12-27 04:47:48', '2023-12-27 04:47:48'),
	(4, 'update setting', 'web', '2023-12-27 04:47:48', '2023-12-27 04:47:48'),
	(5, 'read setting', 'web', '2023-12-27 04:47:48', '2023-12-27 04:47:48'),
	(6, 'create setting', 'web', '2023-12-27 04:47:48', '2023-12-27 04:47:48'),
	(7, 'delete user', 'web', '2023-12-27 04:47:48', '2023-12-27 04:47:48'),
	(8, 'update user', 'web', '2023-12-27 04:47:48', '2023-12-27 04:47:48'),
	(9, 'read user', 'web', '2023-12-27 04:47:48', '2023-12-27 04:47:48'),
	(10, 'create user', 'web', '2023-12-27 04:47:48', '2023-12-27 04:47:48'),
	(11, 'delete role', 'web', '2023-12-27 04:47:48', '2023-12-27 04:47:48'),
	(12, 'update role', 'web', '2023-12-27 04:47:48', '2023-12-27 04:47:48'),
	(13, 'read role', 'web', '2023-12-27 04:47:48', '2023-12-27 04:47:48'),
	(14, 'create role', 'web', '2023-12-27 04:47:48', '2023-12-27 04:47:48'),
	(15, 'delete permission', 'web', '2023-12-27 04:47:48', '2023-12-27 04:47:48'),
	(16, 'update permission', 'web', '2023-12-27 04:47:48', '2023-12-27 04:47:48'),
	(17, 'read permission', 'web', '2023-12-27 04:47:48', '2023-12-27 04:47:48'),
	(18, 'create permission', 'web', '2023-12-27 04:47:48', '2023-12-27 04:47:48'),
	(23, 'create galeri', 'web', '2023-12-28 03:51:47', '2023-12-28 03:51:47'),
	(24, 'delete galeri', 'web', '2023-12-28 03:52:03', '2023-12-28 03:52:03'),
	(25, 'update galeri', 'web', '2023-12-28 03:52:20', '2023-12-28 03:52:20'),
	(26, 'read galeri', 'web', '2023-12-29 04:45:13', '2023-12-29 04:45:13'),
	(27, 'delete news', 'web', '2023-12-29 04:45:42', '2023-12-29 04:45:42'),
	(28, 'update news', 'web', '2023-12-29 04:45:56', '2023-12-29 04:45:56'),
	(29, 'read news', 'web', '2023-12-29 04:46:07', '2023-12-29 04:46:07');

-- membuang struktur untuk table batan432_bthari.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.personal_access_tokens: ~0 rows (lebih kurang)

-- membuang struktur untuk table batan432_bthari.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.products: ~0 rows (lebih kurang)

-- membuang struktur untuk table batan432_bthari.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.roles: ~2 rows (lebih kurang)
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'superadmin', 'web', '2023-12-27 04:13:32', '2023-12-27 04:13:32'),
	(2, 'admin', 'web', '2023-12-27 04:13:32', '2023-12-27 04:13:32'),
	(3, 'operator', 'web', '2023-12-27 04:13:32', '2023-12-27 04:13:32');

-- membuang struktur untuk table batan432_bthari.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.role_has_permissions: ~19 rows (lebih kurang)
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(6, 2),
	(7, 2),
	(9, 2),
	(10, 2),
	(11, 2),
	(12, 2),
	(13, 2),
	(14, 2),
	(18, 2),
	(23, 2),
	(26, 2),
	(27, 2),
	(28, 2),
	(29, 2),
	(24, 3),
	(25, 3),
	(26, 3);

-- membuang struktur untuk table batan432_bthari.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `ext` varchar(255) DEFAULT NULL,
  `category` enum('information','contact','payment','email','api') DEFAULT 'information',
  `alamat` text,
  `telepon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.settings: ~6 rows (lebih kurang)
INSERT INTO `settings` (`id`, `key`, `value`, `name`, `type`, `ext`, `category`, `alamat`, `telepon`, `email`, `twitter`, `facebook`, `created_at`, `updated_at`) VALUES
	(1, 'app_name', 'Laravel RBAC Starter', 'Application Short Name', 'text', NULL, 'information', 'Jln. Jenderal Sudirman No 1 Muara Bulian Perkantoran Kantor Bupati Kab. Batang Hari Kode Pos: 36613', '(0743) 21402, 21403 Fax. (0743) 21058', 'info@batangharikab.go.id', '', 'diskominfo_bth@yahoo.com', '2023-12-27 04:18:55', '2023-12-27 04:18:55'),
	(2, 'app_short_name', 'Laravel', 'Application Name', 'text', NULL, 'information', NULL, NULL, NULL, NULL, NULL, '2023-12-27 04:18:55', '2023-12-27 04:18:55'),
	(3, 'app_logo', 'storage/logo.png', 'Application Logo', 'file', 'png', 'information', NULL, NULL, NULL, NULL, NULL, '2023-12-27 04:18:55', '2023-12-27 04:18:55'),
	(4, 'app_favicon', 'storage/favicon.png', 'Application Favicon', 'file', 'png', 'information', NULL, NULL, NULL, NULL, NULL, '2023-12-27 04:18:55', '2023-12-27 04:18:55'),
	(5, 'app_loading_gif', 'storage/loading.gif', 'Application Loading Image', 'file', 'gif', 'information', NULL, NULL, NULL, NULL, NULL, '2023-12-27 04:18:55', '2023-12-27 04:18:55'),
	(6, 'app_map_loaction', 'https://www.google.com/maps/place/Kajen,+Kec.+Kajen,+Kabupaten+Pekalongan,+Jawa+Tengah/@-7.0319606,109.5291791,13z/data=!3m1!4b1!4m5!3m4!1s0x2e6fe01fab873f61:0xc109484cee38731e!8m2!3d-7.0269252!4d109.5811772', 'Application Map Location', 'textarea', NULL, 'contact', NULL, NULL, NULL, NULL, NULL, '2023-12-27 04:18:55', '2023-12-27 04:18:55');

-- membuang struktur untuk table batan432_bthari.sliders
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.sliders: ~2 rows (lebih kurang)
INSERT INTO `sliders` (`id`, `judul`, `foto`, `created_at`, `updated_at`) VALUES
	(1, 'Kabupaten Batanghari', 'tes.jpg', NULL, NULL),
	(2, 'Foto Bersama', 'slider.jpg', NULL, NULL);

-- membuang struktur untuk table batan432_bthari.type_menu
CREATE TABLE IF NOT EXISTS `type_menu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.type_menu: ~2 rows (lebih kurang)
INSERT INTO `type_menu` (`id`, `type`) VALUES
	(1, 'tree'),
	(2, 'menu'),
	(3, 'header');

-- membuang struktur untuk table batan432_bthari.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `last_login_at` varchar(255) NOT NULL,
  `last_login_ip` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `status` enum('AKTIF','NONAKTIF') DEFAULT NULL,
  `kontak` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `foto_path` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.users: ~3 rows (lebih kurang)
INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `last_login_at`, `last_login_ip`, `remember_token`, `created_at`, `updated_at`, `alamat`, `status`, `kontak`, `foto`, `foto_path`) VALUES
	(1, 'superadmin', 'superadmin', 'superadmin@superadmin.com', NULL, '$2y$12$x3GI9VFjZ1FcCEt8qa9WnefIhWQnGEVBgDDh3.RFs948OJ0Q4LGv2', '2024-02-20 09:41:27', '127.0.0.1', 'ELGCzcDDQVvhTAdNQmtnfHz2XoIxAd56iz39Cy87k3QSB8OwcC4m3HNasbeC', '2023-12-27 04:14:24', '2024-02-20 02:41:27', 'Jambi', 'AKTIF', '081272168388', NULL, NULL),
	(2, 'admin', 'admin', 'admin@admin.com', NULL, '$2y$12$DUBIN9bmTbPVaaLZEwgyg.WCpfa4BS1WHSN5psgKQAE3Qr1StKHVa', '2024-01-22 10:57:43', '127.0.0.1', 'TsnDE8p6sUYfpq5fzugdPXD9tJvlAinC4WwPFjNIkYdrK9zuuh2JsvB7jeiO', '2023-12-27 04:14:24', '2024-01-22 03:57:43', 'ampelu', 'AKTIF', '098', NULL, NULL),
	(3, 'operator', 'operator', 'operator@operator.com', NULL, '$2y$12$O0eF92gJ7oNDUAzoQzybvekHaD5sGmf5W7SrdEDXXr0m1ug4da6X.', '2024-01-12 22:08:10', '127.0.0.1', 'E10ikbniekZLiF5TZhJ1nvWSZCLhqj9vviNAecJ1Vb26c7Ef3D7k2KthA70l', '2023-12-27 04:14:25', '2024-02-15 03:53:20', 'ampelu', 'AKTIF', '11111', NULL, NULL);

-- membuang struktur untuk table batan432_bthari.video_kegiatans
CREATE TABLE IF NOT EXISTS `video_kegiatans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.video_kegiatans: ~3 rows (lebih kurang)
INSERT INTO `video_kegiatans` (`id`, `judul`, `link`, `created_at`, `updated_at`, `foto`) VALUES
	(2, 'Kegiatan HUT Kabupaten Batanghari 2023', 'https://www.youtube.com/watch?v=Je7tICQ8hRE', '2024-01-03 04:44:46', '2024-01-03 04:44:46', 'contoh.jpg'),
	(4, 'tablig akbar', 'https://www.youtube.com/watch?v=Je7tICQ8hRE', '2024-01-03 04:48:51', '2024-01-03 04:52:19', 'contoh.jpg');

-- membuang struktur untuk table batan432_bthari.website_skpds
CREATE TABLE IF NOT EXISTS `website_skpds` (
  `id` int NOT NULL AUTO_INCREMENT,
  `foto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `link` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `judul` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `keterangan` text,
  `opd` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel batan432_bthari.website_skpds: ~6 rows (lebih kurang)
INSERT INTO `website_skpds` (`id`, `foto`, `link`, `updated_at`, `created_at`, `judul`, `keterangan`, `opd`) VALUES
	(1, 'testimonial-1-1.jpg', 'https://ppid.batangharikab.go.id/', '2024-01-02 03:33:06', '2024-01-02 03:33:06', 'PPID', 'Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di bidang penyimpanan, pendokumentasian, penyediaan dan/ atau pelayanan informasi di badan publik.', 'DISKOMINFO'),
	(4, 'testimonial-1-1.jpg', 'https://ppid.batangharikab.go.id/', '2024-01-03 03:45:17', '2024-01-02 09:52:53', 'E-LPPK', 'Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di bidang penyimpanan, pendokumentasian, penyediaan dan/ atau pelayanan informasi di badan publik.', 'DISKOMINFO'),
	(16, 'testimonial-1-1.jpg', 'https://ppid.batangharikab.go.id/', '2024-01-03 03:45:17', '2024-01-02 09:52:53', 'E-LPPK', 'Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di bidang penyimpanan, pendokumentasian, penyediaan dan/ atau pelayanan informasi di badan publik.', 'DISKOMINFO'),
	(17, 'testimonial-1-1.jpg', 'https://ppid.batangharikab.go.id/', '2024-01-03 03:45:17', '2024-01-02 09:52:53', 'E-LPPK', 'Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di bidang penyimpanan, pendokumentasian, penyediaan dan/ atau pelayanan informasi di badan publik.', 'DISKOMINFO'),
	(18, 'testimonial-1-1.jpg', 'https://ppid.batangharikab.go.id/', '2024-01-03 03:45:17', '2024-01-02 09:52:53', 'E-LPPK', 'Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di bidang penyimpanan, pendokumentasian, penyediaan dan/ atau pelayanan informasi di badan publik.', 'DISKOMINFO'),
	(19, 'testimonial-1-1.jpg', 'https://ppid.batangharikab.go.id/', '2024-01-03 03:45:17', '2024-01-02 09:52:53', 'E-LPPK', 'Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di bidang penyimpanan, pendokumentasian, penyediaan dan/ atau pelayanan informasi di badan publik.', 'DISKOMINFO'),
	(20, 'testimonial-1-1.jpg', 'https://ppid.batangharikab.go.id/', '2024-01-05 07:57:56', '2024-01-05 07:57:56', 'ADE', 'PPID adalah kepanjangan dari Pejabat Pengelola Informasi dan Dokumentasi, dimana PPID berfungsi sebagai pengelola dan penyampai dokumen yang dimiliki oleh badan publik sesuai dengan amanat UU 14/2008 tentang Keterbukaan Informasi Publik.', 'BKD');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
