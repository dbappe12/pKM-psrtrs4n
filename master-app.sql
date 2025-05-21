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

-- Membuang data untuk tabel master-app.failed_jobs: ~0 rows (lebih kurang)

-- Membuang data untuk tabel master-app.fileponds: ~27 rows (lebih kurang)
INSERT INTO `fileponds` (`id`, `filename`, `filepath`, `extension`, `mimetypes`, `disk`, `created_by`, `expires_at`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'novri.png', 'filepond/temp/jtI6bjuC0PWtecYR6Js1h200a9NlorDKZiemfemO.png', 'png', 'image/png', 'public', 1, '2023-11-21 12:24:49', '2023-11-21 04:55:00', '2023-11-21 04:54:49', '2023-11-21 04:55:00'),
	(2, '18 APRIL 2023 DSH.png', 'filepond/temp/8grURVM4FN7EEueIUJEFmWdMDaYQCi1zwcGtQnq7.png', 'png', 'image/png', 'public', 1, '2023-11-21 12:31:00', '2023-11-21 05:01:05', '2023-11-21 05:01:00', '2023-11-21 05:01:05'),
	(3, 'WhatsApp Image 2022-12-29 at 08.12.14.jpeg', 'filepond/temp/9K8vjEpcKt60avzyKs2pGXlEkvJ5y5V7J7XKR0Hc.jpg', 'jpeg', 'image/jpeg', 'public', 1, '2023-11-21 13:05:08', NULL, '2023-11-21 05:35:08', '2023-11-21 05:35:08'),
	(4, 'WhatsApp Image 2023-04-10 at 13.49.55.jpeg', 'filepond/temp/2VShRQUqjkdpEijU6BaktQnKpfENqovEZMBcws6w.jpg', 'jpeg', 'image/jpeg', 'public', 1, '2023-11-21 13:06:47', '2023-11-21 05:37:00', '2023-11-21 05:36:47', '2023-11-21 05:37:00'),
	(5, 'WhatsApp Image 2023-04-10 at 13.49.55.jpeg', 'filepond/temp/9DFtx6PINZjzAqDdr0FHgmiqan4oLvZPXHRtpP1d.jpg', 'jpeg', 'image/jpeg', 'public', 1, '2023-11-21 13:09:51', NULL, '2023-11-21 05:39:51', '2023-11-21 05:39:51'),
	(6, 'adi .png', 'filepond/temp/cY8IITRwjDwgerjcaqTaN7kxZv0qnVg9QwEjDzoq.png', 'png', 'image/png', 'public', 1, '2023-11-21 13:11:39', NULL, '2023-11-21 05:41:39', '2023-11-21 05:41:39'),
	(7, 'WhatsApp Image 2023-04-10 at 13.49.55.jpeg', 'filepond/temp/vwlrY0NcMVHUqflMTvo8rBiSL012XwjPevJ4Bw8H.jpg', 'jpeg', 'image/jpeg', 'public', 1, '2023-11-21 13:14:47', NULL, '2023-11-21 05:44:47', '2023-11-21 05:44:47'),
	(8, 'Starter-Dev.pdf', 'filepond/temp/uSfUQm51vvIMijc4SW7LFwSu2Oloty94dEudFHqP.pdf', 'pdf', 'application/pdf', 'public', 1, '2023-11-21 13:17:47', '2023-11-21 05:48:43', '2023-11-21 05:47:47', '2023-11-21 05:48:43'),
	(9, '3504765670.jpg', 'filepond/temp/Dx2GCMUuiol2tUtLrnR0DQb6hSIWvEHDh0inHNLn.jpg', 'jpg', 'image/jpeg', 'public', 1, '2023-11-21 13:22:08', NULL, '2023-11-21 05:52:08', '2023-11-21 05:52:08'),
	(10, 'IMG20221118115402.jpg', 'filepond/temp/s3OWO39Y7r4KFXC2hz3G3zqTI3Xd4prlFFEAhvEY.jpg', 'jpg', 'image/jpeg', 'public', 1, '2023-11-21 15:37:57', NULL, '2023-11-21 08:07:57', '2023-11-21 08:07:57'),
	(11, 'WhatsApp Image 2023-02-21 at 11.25.38.jpeg', 'filepond/temp/heNsndOao35E29hqQkGfK9c3MN5WWeSeFJkFtRTd.jpg', 'jpeg', 'image/jpeg', 'public', 1, '2023-11-22 23:03:16', NULL, '2023-11-22 15:33:16', '2023-11-22 15:33:16'),
	(12, 'WhatsApp Image 2022-12-11 at 10.50.04 (1).jpeg', 'filepond/temp/henPtcgRj4ivTA9HUaXqSuP5gSKZWKBey0pE5248.jpg', 'jpeg', 'image/jpeg', 'public', 1, '2023-11-22 23:05:33', NULL, '2023-11-22 15:35:33', '2023-11-22 15:35:33'),
	(13, 'WhatsApp Image 2023-03-13 at 13.38.52.jpeg', 'filepond/temp/re1uQlnYO5WYx44AvdAM4FyKJbuDaCLSvx3OdsVl.jpg', 'jpeg', 'image/jpeg', 'public', 1, '2023-11-22 23:05:54', NULL, '2023-11-22 15:35:54', '2023-11-22 15:35:54'),
	(14, 'WhatsApp Image 2022-12-27 at 16.47.05.jpeg', 'filepond/temp/WxmVSeNB8AkUdGDk6KbHsiZLG5XkTeW95rT09S5M.jpg', 'jpeg', 'image/jpeg', 'public', 1, '2023-11-22 23:08:37', NULL, '2023-11-22 15:38:37', '2023-11-22 15:38:37'),
	(15, 'WhatsApp Image 2023-03-13 at 13.38.52.jpeg', 'filepond/temp/gwdxRW8MnMXZS5u1hfplElTO9g871VAdfBKhB7aR.jpg', 'jpeg', 'image/jpeg', 'public', 1, '2023-11-22 23:18:43', NULL, '2023-11-22 15:48:43', '2023-11-22 15:48:43'),
	(16, 'WhatsApp Image 2022-12-25 at 21.41.42.jpeg', 'filepond/temp/KUJNH5s8cdkwteQay7TLlUJSd236pM8mJD03VOZX.jpg', 'jpeg', 'image/jpeg', 'public', 1, '2023-11-22 23:19:57', NULL, '2023-11-22 15:49:57', '2023-11-22 15:49:57'),
	(17, 'yadi.png', 'filepond/temp/sRlafmkBjtSJHQihypcgJ4EVJOQ50dEMcYxywmH1.png', 'png', 'image/png', 'public', 1, '2023-11-22 23:20:42', NULL, '2023-11-22 15:50:42', '2023-11-22 15:50:42'),
	(18, '18 APRIL 2023 DSH.png', 'filepond/temp/999sWGAgra5YR6DxHJTP1Ofw3oTnKLNjndbo4qTa.png', 'png', 'image/png', 'public', 1, '2023-11-22 23:37:23', NULL, '2023-11-22 16:07:23', '2023-11-22 16:07:23'),
	(19, 'WhatsApp Image 2022-12-23 at 13.28.33.jpeg', 'filepond/temp/6qPV9BO2sniHWiLD03lkZmceUdGXZLUEvzNcLjkt.jpg', 'jpeg', 'image/jpeg', 'public', 1, '2023-11-22 23:41:47', NULL, '2023-11-22 16:11:47', '2023-11-22 16:11:47'),
	(20, 'BRECKET BUPATI DAN WAKIL BUPATI CUP.jpg', 'filepond/temp/DcnqedWfkKkZWFPo87VKKttkckBIN6jLjPgFXV7v.jpg', 'jpg', 'image/jpeg', 'public', 1, '2023-11-22 23:48:50', NULL, '2023-11-22 16:18:50', '2023-11-22 16:18:50'),
	(21, 'WhatsApp Image 2022-12-27 at 20.01.11.jpeg', 'filepond/temp/HszapNrGuXuufXHDrHD5Z8kOqiLngoPJqvIechLM.jpg', 'jpeg', 'image/jpeg', 'public', 1, '2023-11-22 23:49:48', NULL, '2023-11-22 16:19:48', '2023-11-22 16:19:48'),
	(22, 'WhatsApp Image 2022-12-27 at 16.48.25.jpeg', 'filepond/temp/G5nc6yB2BWQOcX6U9i2xSub8RjPphayLpMhfSUIL.jpg', 'jpeg', 'image/jpeg', 'public', 1, '2023-11-22 23:59:54', NULL, '2023-11-22 16:29:54', '2023-11-22 16:29:54'),
	(23, 'WhatsApp Image 2022-12-02 at 10.06.54 (1).jpeg', 'filepond/temp/MNS0duPmdCs2XvIMUm8a3tw2Z7rciIHi1sZvPpIC.jpg', 'jpeg', 'image/jpeg', 'public', 1, '2023-11-23 00:03:15', '2023-11-22 16:33:17', '2023-11-22 16:33:15', '2023-11-22 16:33:17'),
	(24, 'WhatsApp Image 2022-12-28 at 17.56.13.jpeg', 'filepond/temp/5UWINrZBRy8w1YX7RANXuMHtSoRS17Ba7gJgtR5s.jpg', 'jpeg', 'image/jpeg', 'public', 1, '2023-11-23 10:54:51', NULL, '2023-11-23 03:24:51', '2023-11-23 03:24:51'),
	(25, 'WhatsApp Image 2022-12-28 at 17.54.12.jpeg', 'filepond/temp/SoX5BIEbUTGRG5LCudyN33nni278vz6r85lVcFvk.jpg', 'jpeg', 'image/jpeg', 'public', 1, '2023-11-23 11:06:13', NULL, '2023-11-23 03:36:13', '2023-11-23 03:36:13'),
	(26, '2 (1).jpg', 'filepond/temp/5SZTFRZQXhdP6FM9LKI0SrquaAtcYyWDp9x6wKAv.jpg', 'jpg', 'image/jpeg', 'public', 1, '2023-11-23 11:06:40', NULL, '2023-11-23 03:36:40', '2023-11-23 03:36:40'),
	(27, 'WhatsApp Image 2022-12-26 at 12.28.47.jpeg', 'filepond/temp/6u5QHlZgMypZhP0o7fFpR6EiJfQiXei2uOXwBImQ.jpg', 'jpeg', 'image/jpeg', 'public', 1, '2023-11-23 11:07:15', NULL, '2023-11-23 03:37:15', '2023-11-23 03:37:15'),
	(28, 'WhatsApp Image 2022-12-27 at 20.01.11.jpeg', 'filepond/temp/N6bkHsMALvDe49abbJhX0V1aHjoXEvAAQ84MXBqC.jpg', 'jpeg', 'image/jpeg', 'public', 1, '2023-11-23 11:17:46', NULL, '2023-11-23 03:47:46', '2023-11-23 03:47:46'),
	(29, 'dokterTangguh2.png', 'filepond/temp/iFRnRLJflkFZ2zJgehk4Uvrodt30m9S6wrPE1qSV.png', 'png', 'image/png', 'public', 1, '2023-11-24 15:22:34', NULL, '2023-11-24 07:52:34', '2023-11-24 07:52:34'),
	(30, 'yadi.png', 'filepond/temp/hfoTiz3MsiEDsEhR81owSHwg3ctBHbvzvPnngVO3.png', 'png', 'image/png', 'public', 1, '2023-11-24 17:28:45', NULL, '2023-11-24 09:58:45', '2023-11-24 09:58:45');

-- Membuang data untuk tabel master-app.menu: ~14 rows (lebih kurang)
INSERT INTO `menu` (`id`, `id_menu_induk`, `type`, `title`, `url`, `icon`, `active`, `permission`, `id_permission`, `created_at`, `updated_at`) VALUES
	(1, 0, 'header', 'App Settings', NULL, NULL, '[]', '["superadmin","admin","operator"]', '[1,2,3]', NULL, NULL),
	(2, 0, 'menu', 'Dashboard', 'http://master-app.test/admin/dashboard', 'fas fa-tachometer-alt', '["admin/dashboard"]', '["superadmin","admin","operator"]', '[1,2,3]', NULL, NULL),
	(3, 0, 'tree', 'Master Aplikasi', '#', 'fas fa-user-shield', '["admin\\/user","admin\\/role","admin\\/permission","admin\\/setting","admin\\/menu","admin\\/slider"]', '["superadmin","admin"]', '[1,2]', NULL, '2023-12-12 10:42:14'),
	(4, 3, 'menu', 'Master User', 'user', 'fas fa-user', '["admin/user"]', '["superadmin","admin","operator"]', '[1,2,3]', NULL, NULL),
	(5, 3, 'menu', 'Role', 'role', 'fas fa-user-cog', '["admin/role"]', '["superadmin","admin","operator"]', '[1,2,3]', NULL, NULL),
	(7, 0, 'tree', 'Sample Data', '#', 'fa fa-folder-open', '["admin\\/form","admin\\/pegawai","admin\\/slider","admin\\/slider","admin\\/slider","admin\\/slider","admin\\/slider"]', '["superadmin","admin","operator"]', '[1,2,3]', NULL, '2023-12-19 11:31:48'),
	(8, 7, 'menu', 'Form', 'form', 'fa fa-folder-open', '["admin/form"]', '["superadmin","admin","operator"]', '[1,2,3]', NULL, NULL),
	(9, 7, 'menu', 'Pegawai', 'pegawai', 'fa fa-folder-open', '["admin/pegawai"]', '["superadmin","admin","operator"]', '[1,2,3]', NULL, NULL),
	(22, 3, 'menu', 'Menu', 'menu', 'fa fa-folder-open', '["admin/menu"]', '["superadmin","admin","operator"]', '[1,2,3]', NULL, NULL),
	(74, 0, 'menu', 'Profil', 'http://master-app.test/admin/user/show', 'fas fa-user-alt', '["admin\\/user\\/show"]', NULL, '[1, 2, 3]', '2023-12-12 22:39:07', '2023-12-12 22:39:07'),
	(77, 7, 'menu', 'xxx', 'http://master-app.test/admin/slider', 'fas fa-user-shield', '["admin\\/slider"]', NULL, '[1, 2, 3]', '2023-12-13 13:39:59', '2023-12-13 13:39:59'),
	(78, 3, 'menu', 'Permission', 'permission', 'fas fa-unlock', '["admin/permission"]', '["superadmin","admin","operator"]', '[1,2,3]', NULL, NULL),
	(79, 7, 'menu', 'ade', 'http://master-app.test/admin/slider', 'fas fa-user-shield', '["admin\\/slider"]', NULL, '[1, 2, 3]', '2023-12-19 11:31:48', '2023-12-19 11:31:48'),
	(80, 0, 'menu', 'MUL', 'http://master-app.test/admin/slider', 'fas fa-user-shield', '["admin\\/slider"]', NULL, '[1, 2, 3]', '2023-12-20 12:47:35', '2023-12-20 12:47:35');

-- Membuang data untuk tabel master-app.migrations: ~9 rows (lebih kurang)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2022_03_29_105225_create_settings_table', 1),
	(7, '2023_11_02_093734_create_permission_tables', 1),
	(8, '2023_11_02_093821_create_products_table', 1),
	(9, '2023_11_21_000000_create_fileponds_table', 2);

-- Membuang data untuk tabel master-app.model_has_permissions: ~0 rows (lebih kurang)

-- Membuang data untuk tabel master-app.model_has_roles: ~16 rows (lebih kurang)
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1),
	(2, 'App\\Models\\User', 4),
	(2, 'App\\Models\\User', 5),
	(3, 'App\\Models\\User', 5),
	(3, 'App\\Models\\User', 6),
	(2, 'App\\Models\\User', 7),
	(3, 'App\\Models\\User', 7),
	(3, 'App\\Models\\User', 8),
	(3, 'App\\Models\\User', 9),
	(1, 'App\\Models\\User', 10),
	(2, 'App\\Models\\User', 11),
	(2, 'App\\Models\\User', 12),
	(2, 'App\\Models\\User', 13),
	(1, 'App\\Models\\User', 14),
	(3, 'App\\Models\\User', 18),
	(2, 'App\\Models\\User', 19);

-- Membuang data untuk tabel master-app.password_resets: ~0 rows (lebih kurang)

-- Membuang data untuk tabel master-app.password_reset_tokens: ~0 rows (lebih kurang)

-- Membuang data untuk tabel master-app.pegawai: ~1 rows (lebih kurang)
INSERT INTO `pegawai` (`id`, `nip`, `nama`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `foto`, `created_at`, `updated_at`) VALUES
	(1, '198709102011011006', 'ADE SUKRON', '2023-11-24', 'OKE', 'Laki-Laki', 'https://storage.googleapis.com/storage-batangharikab.appspot.com/www.batangharikab.go.id/1701317409_01-WAKIL-7119.jpg', '2023-11-24 10:47:24', '2023-11-30 11:10:11');

-- Membuang data untuk tabel master-app.permissions: ~39 rows (lebih kurang)
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'filemanager', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41'),
	(2, 'read module', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41'),
	(3, 'delete setting', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41'),
	(4, 'update setting', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41'),
	(5, 'read setting', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41'),
	(6, 'create setting', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41'),
	(7, 'delete user', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41'),
	(8, 'update user', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41'),
	(9, 'read user', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41'),
	(10, 'create user', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41'),
	(11, 'delete role', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41'),
	(12, 'update role', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41'),
	(13, 'read role', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41'),
	(14, 'create role', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41'),
	(15, 'delete permission', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41'),
	(16, 'update permission', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41'),
	(17, 'read permission', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41'),
	(18, 'create permission', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41'),
	(20, 'read pegawai', 'web', '2023-11-06 06:13:55', '2023-11-06 06:14:17'),
	(21, 'create pegawai', 'web', '2023-11-06 06:14:49', '2023-11-06 06:14:49'),
	(22, 'delete pegawai', 'web', '2023-11-06 07:08:17', '2023-11-06 07:08:17'),
	(23, 'update pegawai', 'web', '2023-11-06 07:08:30', '2023-11-06 07:08:30'),
	(24, 'read form', 'web', '2023-11-07 04:07:18', '2023-11-09 06:11:03'),
	(25, 'create form', 'web', '2023-11-09 06:12:36', '2023-11-09 06:12:36'),
	(26, 'delete form', 'web', '2023-11-09 06:25:12', '2023-11-09 06:25:12'),
	(27, 'update form', 'web', '2023-11-09 06:25:28', '2023-11-09 06:25:28'),
	(28, 'create slider', 'web', '2023-11-19 02:32:07', '2023-11-19 02:32:07'),
	(29, 'read slider', 'web', '2023-11-19 02:32:17', '2023-11-19 02:32:17'),
	(30, 'delete slider', 'web', '2023-11-19 02:34:06', '2023-11-19 02:34:06'),
	(31, 'update slider', 'web', '2023-11-19 02:35:55', '2023-11-19 02:35:55'),
	(32, 'delete menu', 'web', '2023-12-05 07:35:25', '2023-12-05 07:35:25'),
	(33, 'update menu', 'web', '2023-12-05 07:35:39', '2023-12-05 07:35:39'),
	(34, 'read menu', 'web', '2023-12-05 07:35:50', '2023-12-05 07:35:50'),
	(35, 'create menu', 'web', '2023-12-05 07:35:59', '2023-12-05 07:35:59'),
	(36, 'tes', 'web', '2023-12-18 03:22:42', '2023-12-18 03:22:42'),
	(37, 'hapus role', 'web', '2023-12-18 16:56:03', '2023-12-18 16:56:55'),
	(38, 'hapus user', 'web', '2023-12-18 16:58:45', '2023-12-18 16:58:45'),
	(39, 'ubah user', 'web', '2023-12-18 17:00:12', '2023-12-18 17:00:12'),
	(40, 'okeoke', 'web', '2023-12-19 04:21:33', '2023-12-19 04:28:37');

-- Membuang data untuk tabel master-app.personal_access_tokens: ~0 rows (lebih kurang)

-- Membuang data untuk tabel master-app.products: ~0 rows (lebih kurang)

-- Membuang data untuk tabel master-app.roles: ~4 rows (lebih kurang)
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'superadmin', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41'),
	(2, 'admin', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41'),
	(3, 'operator', 'web', '2023-11-05 17:12:41', '2023-11-05 17:12:41');

-- Membuang data untuk tabel master-app.role_has_permissions: ~38 rows (lebih kurang)
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(1, 2),
	(2, 2),
	(3, 2),
	(4, 2),
	(5, 2),
	(6, 2),
	(8, 2),
	(9, 2),
	(10, 2),
	(13, 2),
	(15, 2),
	(16, 2),
	(17, 2),
	(20, 2),
	(21, 2),
	(22, 2),
	(23, 2),
	(24, 2),
	(25, 2),
	(26, 2),
	(27, 2),
	(28, 2),
	(29, 2),
	(30, 2),
	(31, 2),
	(32, 2),
	(33, 2),
	(35, 2),
	(11, 3),
	(15, 3),
	(20, 3),
	(24, 3),
	(28, 3),
	(29, 3),
	(30, 3),
	(31, 3);

-- Membuang data untuk tabel master-app.settings: ~6 rows (lebih kurang)
INSERT INTO `settings` (`id`, `key`, `value`, `name`, `type`, `ext`, `category`, `created_at`, `updated_at`) VALUES
	(1, 'app_name', 'Laravel RBAC Starter', 'Application Short Name', 'text', NULL, 'information', '2023-11-05 17:12:42', '2023-11-05 17:12:42'),
	(2, 'app_short_name', 'Laravel', 'Application Name', 'text', NULL, 'information', '2023-11-05 17:12:42', '2023-11-05 17:12:42'),
	(3, 'app_logo', 'storage/logo.png', 'Application Logo', 'file', 'png', 'information', '2023-11-05 17:12:42', '2023-11-05 17:12:42'),
	(4, 'app_favicon', 'storage/favicon.png', 'Application Favicon', 'file', 'png', 'information', '2023-11-05 17:12:42', '2023-11-05 17:12:42'),
	(5, 'app_loading_gif', 'storage/loading.gif', 'Application Loading Image', 'file', 'gif', 'information', '2023-11-05 17:12:42', '2023-11-05 17:12:42'),
	(6, 'app_map_loaction', 'https://www.google.com/maps/place/Kajen,+Kec.+Kajen,+Kabupaten+Pekalongan,+Jawa+Tengah/@-7.0319606,109.5291791,13z/data=!3m1!4b1!4m5!3m4!1s0x2e6fe01fab873f61:0xc109484cee38731e!8m2!3d-7.0269252!4d109.5811772', 'Application Map Location', 'textarea', NULL, 'contact', '2023-11-05 17:12:42', '2023-11-05 17:12:42');

-- Membuang data untuk tabel master-app.slider: ~2 rows (lebih kurang)
INSERT INTO `slider` (`id`, `foto`, `keterangan`, `teks`, `created_at`, `updated_at`) VALUES
	(3, 'https://storage.googleapis.com/storage-batangharikab.appspot.com/www.batangharikab.go.id/1700809654_WhatsApp-Image-2022-12-27-at-17.40.12-2074.jpeg', 'mantap', '<b>ade&nbsp;</b>\n', '2023-11-24 14:07:34', '2023-11-24 14:07:34'),
	(5, 'https://storage.googleapis.com/storage-batangharikab.appspot.com/www.batangharikab.go.id/1701314933_TEMPLATE-5-2736.jpg', 'ok mantap', '<b><u>oke mantap</u></b>\n', '2023-11-30 10:28:55', '2023-11-30 10:28:55');

-- Membuang data untuk tabel master-app.type_menu: ~3 rows (lebih kurang)
INSERT INTO `type_menu` (`id`, `type`) VALUES
	(1, 'header'),
	(2, 'menu'),
	(3, 'tree');

-- Membuang data untuk tabel master-app.users: ~3 rows (lebih kurang)
INSERT INTO `users` (`id`, `username`, `name`, `email`, `kontak`, `foto`, `foto_path`, `alamat`, `password`, `remember_token`, `last_login_at`, `last_login_ip`, `created_at`, `updated_at`, `status`) VALUES
	(14, 'superadmin', 'ADE SUKRON', 'superadmin@superadmin.com', '1234', NULL, NULL, 'Jambi', '$2y$12$CSmrs4PrzqQZ4eX.Fi4O6eKosDL72/Yehaqi87EWn2Q8gVmLTxZKK', '6qtnRDOkqwhqvyBqlSKfl2nAJYNCz2rv1OUvP2n6L0QV0txpNfnzQ5NbNL7V', '2023-12-20 05:05:08', '127.0.0.1', '2023-12-18 05:59:16', '2023-12-20 05:05:08', 'AKTIF'),
	(18, 'budi', 'budi anduk', NULL, '123456', NULL, NULL, 'Jambi baru', '$2y$12$7wZ56tfxJ/dtdaPRsGfRaecvSRGHThkrVq7rqwW7zfp/8pszDW7fu', 'PInUTHt8RDbD46etKTGWHvdj7HYu6sVkAsAMcdPzDXQCSeQ0o6bEz13n6k4T', '2023-12-20 06:56:31', '127.0.0.1', '2023-12-18 07:58:55', '2023-12-20 06:56:31', 'AKTIF'),
	(19, 'operator', 'FAJAR', NULL, '123456', NULL, NULL, 'ampelu', '$2y$12$DyvDoIv6dGvO7Nlifm8SJ.zKeMiTodQtL08GTy//uOv7uQTL0xUju', NULL, NULL, NULL, '2023-12-19 03:45:21', '2023-12-19 05:01:13', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
