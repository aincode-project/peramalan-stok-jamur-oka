-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 11:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_peramalan_jamur_oka`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_peramalans`
--

CREATE TABLE `detail_peramalans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `peramalan_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `nilai_x` int(11) NOT NULL,
  `nilai_y` int(11) NOT NULL,
  `nilai_xx` int(11) NOT NULL,
  `nilai_xy` int(11) NOT NULL,
  `hasil_prediksi` int(11) DEFAULT NULL,
  `nilai_pe` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_peramalans`
--

INSERT INTO `detail_peramalans` (`id`, `peramalan_id`, `tanggal`, `nilai_x`, `nilai_y`, `nilai_xx`, `nilai_xy`, `hasil_prediksi`, `nilai_pe`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-03-31', 771, 853, 594441, 657663, 839, 1.60, '2023-12-07 08:29:26', '2023-12-07 08:29:26'),
(2, 1, '2022-04-30', 873, 915, 762129, 798795, 925, 1.08, '2023-12-07 08:29:26', '2023-12-07 08:29:26'),
(3, 1, '2022-05-31', 920, 1010, 846400, 929200, 964, 4.53, '2023-12-07 08:29:26', '2023-12-07 08:29:26'),
(4, 1, '2022-06-30', 936, 944, 876096, 883584, 978, 3.57, '2023-12-07 08:29:26', '2023-12-07 08:29:26'),
(5, 1, '2022-07-31', 820, 912, 672400, 747840, 880, 3.46, '2023-12-07 08:29:26', '2023-12-07 08:29:26'),
(6, 1, '2022-08-31', 864, 943, 746496, 814752, 917, 2.72, '2023-12-07 08:29:26', '2023-12-07 08:29:26'),
(7, 1, '2022-09-30', 969, 1008, 938961, 976752, 1005, 0.27, '2023-12-07 08:29:26', '2023-12-07 08:29:26'),
(8, 1, '2022-10-31', 857, 922, 734449, 790154, 911, 1.15, '2023-12-07 08:29:26', '2023-12-07 08:29:26'),
(9, 1, '2022-11-30', 801, 854, 641601, 684054, 864, 1.23, '2023-12-07 08:29:26', '2023-12-07 08:29:26'),
(10, 1, '2022-12-31', 831, 858, 690561, 712998, 890, 3.69, '2023-12-07 08:29:26', '2023-12-07 08:29:26'),
(11, 1, '2023-01-31', 815, 878, 664225, 715570, 876, 0.20, '2023-12-07 08:29:26', '2023-12-07 08:29:26'),
(12, 1, '2023-02-28', 847, 857, 717409, 725879, 903, 5.37, '2023-12-07 08:29:26', '2023-12-07 08:29:26'),
(13, 2, '2022-03-31', 771, 853, 594441, 657663, 816, 4.39, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(14, 2, '2022-04-30', 873, 915, 762129, 798795, 924, 0.95, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(15, 2, '2022-05-31', 920, 1010, 846400, 929200, 973, 3.62, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(16, 2, '2022-06-30', 936, 944, 876096, 883584, 990, 4.92, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(17, 2, '2022-07-31', 820, 912, 672400, 747840, 868, 4.88, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(18, 2, '2022-08-31', 864, 943, 746496, 814752, 914, 3.06, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(19, 2, '2022-09-30', 969, 1008, 938961, 976752, 1025, 1.72, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(20, 2, '2022-10-31', 857, 922, 734449, 790154, 907, 1.66, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(21, 2, '2022-11-30', 801, 854, 641601, 684054, 847, 0.78, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(22, 2, '2022-12-31', 831, 858, 690561, 712998, 879, 2.47, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(23, 2, '2023-01-31', 815, 878, 664225, 715570, 862, 1.80, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(24, 2, '2023-02-28', 847, 857, 717409, 725879, 896, 4.56, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(25, 2, '2020-03-31', 896, 920, 802816, 824320, 948, 3.05, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(26, 2, '2020-04-30', 846, 871, 715716, 736866, 895, 2.76, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(27, 2, '2020-05-31', 766, 840, 586756, 643440, 810, 3.54, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(28, 2, '2020-06-30', 963, 1015, 927369, 977445, 1019, 0.40, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(29, 2, '2020-07-31', 827, 910, 683929, 752570, 875, 3.85, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(30, 2, '2020-08-31', 883, 915, 779689, 807945, 934, 2.10, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(31, 2, '2020-09-30', 817, 870, 667489, 710790, 864, 0.65, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(32, 2, '2020-10-31', 853, 890, 727609, 759170, 902, 1.40, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(33, 2, '2020-11-30', 927, 975, 859329, 903825, 981, 0.60, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(34, 2, '2020-12-31', 843, 843, 710649, 710649, 892, 5.80, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(35, 2, '2021-01-31', 714, 781, 509796, 557634, 755, 3.31, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(36, 2, '2021-02-28', 727, 795, 528529, 577965, 769, 3.28, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(37, 2, '2021-03-31', 831, 874, 690561, 726294, 879, 0.59, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(38, 2, '2021-04-30', 842, 856, 708964, 720752, 891, 4.07, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(39, 2, '2021-05-31', 779, 832, 606841, 648128, 824, 0.95, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(40, 2, '2021-06-30', 753, 797, 567009, 600141, 797, 0.06, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(41, 2, '2021-07-31', 768, 835, 589824, 641280, 812, 2.71, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(42, 2, '2021-08-31', 781, 821, 609961, 641201, 826, 0.63, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(43, 2, '2021-09-30', 818, 878, 669124, 718204, 865, 1.44, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(44, 2, '2021-10-31', 939, 975, 881721, 915525, 994, 1.91, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(45, 2, '2021-11-30', 821, 873, 674041, 716733, 869, 0.51, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(46, 2, '2021-12-31', 783, 865, 613089, 677295, 828, 4.24, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(47, 2, '2022-01-31', 851, 873, 724201, 742923, 900, 3.13, '2023-12-08 02:40:02', '2023-12-08 02:40:02'),
(48, 2, '2022-02-28', 729, 778, 531441, 567162, 771, 0.89, '2023-12-08 02:40:02', '2023-12-08 02:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_10_112613_create_stoks_table', 1),
(6, '2023_10_10_113810_create_penjualans_table', 1),
(7, '2023_11_05_103116_create_peramalans_table', 1),
(8, '2023_11_05_103141_create_detail_peramalans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penjualans`
--

CREATE TABLE `penjualans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `tanggal_catat` date NOT NULL DEFAULT current_timestamp(),
  `tanggal_penjualan` date NOT NULL,
  `jumlah_stok_terjual` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualans`
--

INSERT INTO `penjualans` (`id`, `nama_barang`, `tanggal_catat`, `tanggal_penjualan`, `jumlah_stok_terjual`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Jamur Tiram', '2023-11-08', '2022-03-31', 771, 1, '2023-11-08 05:53:59', '2023-11-08 05:53:59'),
(2, 'Jamur Tiram', '2023-11-08', '2022-04-30', 873, 1, '2023-11-08 05:54:08', '2023-11-08 05:54:08'),
(3, 'Jamur Tiram', '2023-11-08', '2022-05-31', 920, 1, '2023-11-08 05:54:20', '2023-11-08 05:54:20'),
(4, 'Jamur Tiram', '2023-11-08', '2022-06-30', 936, 1, '2023-11-08 05:54:44', '2023-11-08 05:54:44'),
(5, 'Jamur Tiram', '2023-11-08', '2022-07-31', 820, 1, '2023-11-08 05:54:55', '2023-11-08 05:55:02'),
(6, 'Jamur Tiram', '2023-11-08', '2022-08-31', 864, 1, '2023-11-08 05:55:15', '2023-11-08 05:55:15'),
(7, 'Jamur Tiram', '2023-11-08', '2022-09-30', 969, 1, '2023-11-08 05:55:28', '2023-11-08 05:55:28'),
(8, 'Jamur Tiram', '2023-11-08', '2022-10-31', 857, 1, '2023-11-08 05:55:43', '2023-11-08 05:55:43'),
(9, 'Jamur Tiram', '2023-11-08', '2022-11-30', 801, 1, '2023-11-08 05:55:58', '2023-11-08 05:55:58'),
(10, 'Jamur Tiram', '2023-11-08', '2022-12-31', 831, 1, '2023-11-08 05:56:10', '2023-11-08 05:56:10'),
(11, 'Jamur Tiram', '2023-11-08', '2023-01-31', 815, 1, '2023-11-08 05:56:28', '2023-11-08 05:56:28'),
(12, 'Jamur Tiram', '2023-11-08', '2023-02-28', 847, 1, '2023-11-08 05:56:39', '2023-11-08 05:56:39'),
(15, 'Jamur Tiram', '2023-12-08', '2020-03-31', 896, 2, '2023-12-08 02:33:29', '2023-12-08 02:33:29'),
(16, 'Jamur Tiram', '2023-12-08', '2020-04-30', 846, 2, '2023-12-08 02:33:42', '2023-12-08 02:33:42'),
(17, 'Jamur Tiram', '2023-12-08', '2020-05-31', 766, 2, '2023-12-08 02:33:56', '2023-12-08 02:33:56'),
(18, 'Jamur Tiram', '2023-12-08', '2020-06-30', 963, 2, '2023-12-08 02:34:33', '2023-12-08 02:34:33'),
(19, 'Jamur Tiram', '2023-12-08', '2020-07-31', 827, 2, '2023-12-08 02:34:44', '2023-12-08 02:34:44'),
(20, 'Jamur Tiram', '2023-12-08', '2020-08-31', 883, 2, '2023-12-08 02:34:57', '2023-12-08 02:34:57'),
(21, 'Jamur Tiram', '2023-12-08', '2020-09-30', 817, 2, '2023-12-08 02:35:10', '2023-12-08 02:35:10'),
(22, 'Jamur Tiram', '2023-12-08', '2020-10-31', 853, 2, '2023-12-08 02:35:20', '2023-12-08 02:35:20'),
(23, 'Jamur Tiram', '2023-12-08', '2020-11-30', 927, 2, '2023-12-08 02:35:32', '2023-12-08 02:35:32'),
(24, 'Jamur Tiram', '2023-12-08', '2020-12-31', 843, 2, '2023-12-08 02:35:46', '2023-12-08 02:35:46'),
(25, 'Jamur Tiram', '2023-12-08', '2021-01-31', 714, 2, '2023-12-08 02:36:11', '2023-12-08 02:36:11'),
(26, 'Jamur Tiram', '2023-12-08', '2021-02-28', 727, 2, '2023-12-08 02:36:23', '2023-12-08 02:36:23'),
(27, 'Jamur Tiram', '2023-12-08', '2021-03-31', 831, 2, '2023-12-08 02:36:36', '2023-12-08 02:36:36'),
(28, 'Jamur Tiram', '2023-12-08', '2021-04-30', 842, 2, '2023-12-08 02:36:54', '2023-12-08 02:36:54'),
(29, 'Jamur Tiram', '2023-12-08', '2021-05-31', 779, 2, '2023-12-08 02:37:13', '2023-12-08 02:37:13'),
(30, 'Jamur Tiram', '2023-12-08', '2021-06-30', 753, 2, '2023-12-08 02:37:25', '2023-12-08 02:37:25'),
(31, 'Jamur Tiram', '2023-12-08', '2021-07-31', 768, 2, '2023-12-08 02:37:47', '2023-12-08 02:37:47'),
(32, 'Jamur Tiram', '2023-12-08', '2021-08-31', 781, 2, '2023-12-08 02:38:01', '2023-12-08 02:38:01'),
(33, 'Jamur Tiram', '2023-12-08', '2021-09-30', 818, 2, '2023-12-08 02:38:14', '2023-12-08 02:38:14'),
(34, 'Jamur Tiram', '2023-12-08', '2021-10-31', 939, 2, '2023-12-08 02:38:33', '2023-12-08 02:38:33'),
(35, 'Jamur Tiram', '2023-12-08', '2021-11-30', 821, 2, '2023-12-08 02:38:54', '2023-12-08 02:38:54'),
(36, 'Jamur Tiram', '2023-12-08', '2021-12-31', 783, 2, '2023-12-08 02:39:08', '2023-12-08 02:39:08'),
(37, 'Jamur Tiram', '2023-12-08', '2022-01-31', 851, 2, '2023-12-08 02:39:23', '2023-12-08 02:39:23'),
(38, 'Jamur Tiram', '2023-12-08', '2022-02-28', 729, 2, '2023-12-08 02:39:40', '2023-12-08 02:39:40');

-- --------------------------------------------------------

--
-- Table structure for table `peramalans`
--

CREATE TABLE `peramalans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_peramalan` date NOT NULL DEFAULT current_timestamp(),
  `tanggal_awal_data` date NOT NULL,
  `tanggal_akhir_data` date NOT NULL,
  `jumlah_data` int(11) NOT NULL,
  `total_x` int(11) DEFAULT NULL,
  `total_y` int(11) DEFAULT NULL,
  `total_xx` int(11) DEFAULT NULL,
  `total_xy` int(11) DEFAULT NULL,
  `nilai_a` double(8,2) DEFAULT NULL,
  `nilai_b` double(8,2) DEFAULT NULL,
  `nilai_mape` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peramalans`
--

INSERT INTO `peramalans` (`id`, `user_id`, `tanggal_peramalan`, `tanggal_awal_data`, `tanggal_akhir_data`, `jumlah_data`, `total_x`, `total_y`, `total_xx`, `total_xy`, `nilai_a`, `nilai_b`, `nilai_mape`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-12-07', '2022-03-01', '2023-02-28', 12, 10304, 10954, 8885168, 9437241, 193.06, 0.84, 2.41, '2023-12-07 08:29:26', '2023-12-07 08:29:26'),
(2, 2, '2023-12-08', '2020-03-01', '2023-02-28', 12, 30061, 31836, 25251621, 26715498, -1.36, 1.06, 7.22, '2023-12-08 02:40:02', '2023-12-08 02:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stoks`
--

CREATE TABLE `stoks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `tanggal_catat` date NOT NULL DEFAULT current_timestamp(),
  `tanggal_stok` date NOT NULL,
  `jumlah_stok` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stoks`
--

INSERT INTO `stoks` (`id`, `nama_barang`, `tanggal_catat`, `tanggal_stok`, `jumlah_stok`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Jamur Tiram', '2023-11-08', '2022-03-31', 853, 1, '2023-11-08 05:50:04', '2023-11-08 05:50:04'),
(2, 'Jamur Tiram', '2023-11-08', '2022-04-30', 915, 1, '2023-11-08 05:50:20', '2023-11-08 05:50:20'),
(3, 'Jamur Tiram', '2023-11-08', '2022-05-31', 1010, 1, '2023-11-08 05:50:36', '2023-11-08 05:50:36'),
(4, 'Jamur Tiram', '2023-11-08', '2022-06-30', 944, 1, '2023-11-08 05:50:49', '2023-11-08 05:50:49'),
(5, 'Jamur Tiram', '2023-11-08', '2022-07-31', 912, 1, '2023-11-08 05:51:02', '2023-11-08 05:51:02'),
(6, 'Jamur Tiram', '2023-11-08', '2022-08-31', 943, 1, '2023-11-08 05:51:21', '2023-11-08 05:51:21'),
(7, 'Jamur Tiram', '2023-11-08', '2022-09-30', 1008, 1, '2023-11-08 05:51:35', '2023-11-08 05:51:35'),
(8, 'Jamur Tiram', '2023-11-08', '2022-10-31', 922, 1, '2023-11-08 05:51:47', '2023-11-08 05:51:47'),
(9, 'Jamur Tiram', '2023-11-08', '2022-11-30', 854, 1, '2023-11-08 05:51:58', '2023-11-08 05:51:58'),
(10, 'Jamur Tiram', '2023-11-08', '2022-12-31', 858, 1, '2023-11-08 05:52:11', '2023-11-08 05:52:11'),
(11, 'Jamur Tiram', '2023-11-08', '2023-01-31', 878, 1, '2023-11-08 05:52:23', '2023-11-08 05:52:23'),
(12, 'Jamur Tiram', '2023-11-08', '2023-02-28', 857, 1, '2023-11-08 05:52:42', '2023-11-08 05:52:42'),
(13, 'Jamur Tiram', '2023-12-08', '2020-03-31', 920, 2, '2023-12-08 02:15:34', '2023-12-08 02:15:34'),
(14, 'Jamur Tiram', '2023-12-08', '2020-04-30', 871, 2, '2023-12-08 02:16:05', '2023-12-08 02:16:05'),
(15, 'Jamur Tiram', '2023-12-08', '2020-05-31', 840, 2, '2023-12-08 02:16:18', '2023-12-08 02:16:18'),
(16, 'Jamur Tiram', '2023-12-08', '2020-06-30', 1015, 2, '2023-12-08 02:16:31', '2023-12-08 02:16:31'),
(17, 'Jamur Tiram', '2023-12-08', '2020-07-31', 910, 2, '2023-12-08 02:24:04', '2023-12-08 02:24:04'),
(18, 'Jamur Tiram', '2023-12-08', '2020-08-31', 915, 2, '2023-12-08 02:24:27', '2023-12-08 02:24:27'),
(19, 'Jamur Tiram', '2023-12-08', '2020-09-30', 870, 2, '2023-12-08 02:24:41', '2023-12-08 02:24:41'),
(20, 'Jamur Tiram', '2023-12-08', '2020-10-31', 890, 2, '2023-12-08 02:24:59', '2023-12-08 02:24:59'),
(21, 'Jamur Tiram', '2023-12-08', '2020-11-30', 975, 2, '2023-12-08 02:25:11', '2023-12-08 02:25:11'),
(22, 'Jamur Tiram', '2023-12-08', '2020-12-31', 843, 2, '2023-12-08 02:25:31', '2023-12-08 02:25:31'),
(23, 'Jamur Tiram', '2023-12-08', '2021-01-31', 781, 2, '2023-12-08 02:26:39', '2023-12-08 02:26:39'),
(24, 'Jamur Tiram', '2023-12-08', '2021-02-28', 795, 2, '2023-12-08 02:26:51', '2023-12-08 02:26:51'),
(25, 'Jamur Tiram', '2023-12-08', '2021-03-31', 874, 2, '2023-12-08 02:27:05', '2023-12-08 02:27:05'),
(26, 'Jamur Tiram', '2023-12-08', '2021-04-30', 856, 2, '2023-12-08 02:27:17', '2023-12-08 02:27:17'),
(27, 'Jamur Tiram', '2023-12-08', '2021-05-31', 832, 2, '2023-12-08 02:27:30', '2023-12-08 02:27:30'),
(28, 'Jamur Tiram', '2023-12-08', '2021-06-30', 797, 2, '2023-12-08 02:27:45', '2023-12-08 02:27:45'),
(29, 'Jamur Tiram', '2023-12-08', '2021-07-31', 835, 2, '2023-12-08 02:28:03', '2023-12-08 02:28:03'),
(30, 'Jamur Tiram', '2023-12-08', '2021-08-31', 821, 2, '2023-12-08 02:28:33', '2023-12-08 02:28:33'),
(31, 'Jamur Tiram', '2023-12-08', '2021-09-30', 878, 2, '2023-12-08 02:28:51', '2023-12-08 02:28:51'),
(32, 'Jamur Tiram', '2023-12-08', '2021-10-31', 975, 2, '2023-12-08 02:29:04', '2023-12-08 02:29:04'),
(33, 'Jamur Tiram', '2023-12-08', '2021-11-30', 873, 2, '2023-12-08 02:29:15', '2023-12-08 02:29:15'),
(34, 'Jamur Tiram', '2023-12-08', '2021-12-31', 865, 2, '2023-12-08 02:29:46', '2023-12-08 02:29:46'),
(35, 'Jamur Tiram', '2023-12-08', '2022-01-31', 873, 2, '2023-12-08 02:30:06', '2023-12-08 02:30:06'),
(36, 'Jamur Tiram', '2023-12-08', '2022-02-28', 778, 2, '2023-12-08 02:30:28', '2023-12-08 02:30:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hak_akses` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `no_telp`, `alamat`, `hak_akses`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ni Putu Eka Nita Yanti', 'nita@gmail.com', NULL, '$2y$10$z1RExXbpa66St10bMhWn/.XwbY0ZZTPMP8mRb3ehtIvNzZGtZA6vm', '081234567890', 'Denpasar', 'Pemilik', 'foto_user/EQ23sR5iKyzWHhQ3XDyVoMXCmlzPKHAoIxnXd8W2.png', NULL, '2023-11-08 05:45:37', '2023-12-07 08:23:43'),
(2, 'Ayu', 'ayu@gmail.com', NULL, '$2y$10$P0QQ0VR5PwCEx2VaNrsy6uM1CTVXqHLKNLaVXNT2x2J.8GudrH4FS', '081234567890', 'Denpasar', 'Pegawai', 'foto_user/XCw1qxr2zPk2DjCX4QEeUm0qAPX1NPeoysrh8MxN.png', NULL, '2023-12-08 00:39:29', '2023-12-08 00:39:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_peramalans`
--
ALTER TABLE `detail_peramalans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_peramalans_peramalan_id_foreign` (`peramalan_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penjualans`
--
ALTER TABLE `penjualans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penjualans_tanggal_penjualan_unique` (`tanggal_penjualan`),
  ADD KEY `penjualans_user_id_foreign` (`user_id`);

--
-- Indexes for table `peramalans`
--
ALTER TABLE `peramalans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peramalans_user_id_foreign` (`user_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `stoks`
--
ALTER TABLE `stoks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stoks_tanggal_stok_unique` (`tanggal_stok`),
  ADD KEY `stoks_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_peramalans`
--
ALTER TABLE `detail_peramalans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penjualans`
--
ALTER TABLE `penjualans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `peramalans`
--
ALTER TABLE `peramalans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stoks`
--
ALTER TABLE `stoks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_peramalans`
--
ALTER TABLE `detail_peramalans`
  ADD CONSTRAINT `detail_peramalans_peramalan_id_foreign` FOREIGN KEY (`peramalan_id`) REFERENCES `peramalans` (`id`);

--
-- Constraints for table `penjualans`
--
ALTER TABLE `penjualans`
  ADD CONSTRAINT `penjualans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `peramalans`
--
ALTER TABLE `peramalans`
  ADD CONSTRAINT `peramalans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `stoks`
--
ALTER TABLE `stoks`
  ADD CONSTRAINT `stoks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
