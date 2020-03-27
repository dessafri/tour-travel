-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 05:13 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nomads`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `travel_packages_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `travel_packages_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, 6, 'assets/Gallery/7t302zEhsjbrw4GVQzq9xf0u6h7xhuiyIrfEmxeQ.jpeg', NULL, '2020-01-11 04:30:01', '2020-01-11 04:30:01'),
(8, 6, 'assets/Gallery/kcOIAgfw1evNSiISylKlRnT5GqfA3xD9jzP5ndwH.jpeg', NULL, '2020-01-11 04:30:11', '2020-01-11 04:30:11'),
(9, 6, 'assets/Gallery/VAfmS7AnroPF7UI8EecEQcG5ItmULPvQtp9MBmeq.jpeg', NULL, '2020-01-11 04:30:20', '2020-01-11 04:30:20'),
(10, 7, 'assets/Gallery/j5zUEF7C3r9NGtaPOyw1L4ZzNqORy40AhVgqeHBq.jpeg', '2020-01-11 04:37:36', '2020-01-11 04:31:23', '2020-01-11 04:37:36'),
(11, 7, 'assets/Gallery/S1pvfvGKQbBmDDcv3KFZHWhzqDZTayX1VkDu0jsW.jpeg', '2020-01-11 04:37:40', '2020-01-11 04:31:31', '2020-01-11 04:37:40'),
(12, 7, 'assets/Gallery/DwnLSUtAfCXZEizV3ttEYKlzt1b6bTKvzJWwkw6p.jpeg', '2020-01-11 04:37:43', '2020-01-11 04:31:39', '2020-01-11 04:37:43'),
(13, 8, 'assets/Gallery/p4U8441zT9LxSOPqqyVHsNXv57ANhoSAoeu9Kko0.jpeg', NULL, '2020-01-11 04:33:05', '2020-01-11 04:33:05'),
(14, 8, 'assets/Gallery/hhinYBZuj887lGV6EbubeoPFd6hoGZS4MBtibBaz.jpeg', NULL, '2020-01-11 04:33:15', '2020-01-11 04:33:15'),
(15, 8, 'assets/Gallery/PEIiKWSxGqQxY8vB0DJYg5WFzK8plUQpGQ8EQu8E.jpeg', NULL, '2020-01-11 04:33:25', '2020-01-11 04:33:25'),
(16, 9, 'assets/Gallery/DBqR0A0fdTmaSzfoUXb8ndP8ueqMjUudM22KisDs.jpeg', NULL, '2020-01-11 04:34:49', '2020-01-11 04:34:49'),
(17, 9, 'assets/Gallery/qRw74iscbom3xO6MdZZGtjor1jsS4MgE0ui9DN58.jpeg', NULL, '2020-01-11 04:34:59', '2020-01-11 04:34:59'),
(18, 9, 'assets/Gallery/uyWzjDeoyorjHXSbyyBzx7cuW3lJKYKrM1CzJgN0.jpeg', NULL, '2020-01-11 04:35:08', '2020-01-11 04:35:08'),
(19, 10, 'assets/Gallery/8UJlYlUtWd0FJFIVfEZiY5ytG42Or18fPXqUIeDX.jpeg', NULL, '2020-01-11 04:36:19', '2020-01-11 04:36:19'),
(20, 10, 'assets/Gallery/7DrkgNhLMD2oLqw12JD1XyWc3yqQGOv32K7M7KSn.jpeg', NULL, '2020-01-11 04:36:27', '2020-01-11 04:36:27'),
(21, 10, 'assets/Gallery/bnIonU5qyD4IYWxuwhhhGBCnanv8oDz2l9696bxE.jpeg', NULL, '2020-01-11 04:36:37', '2020-01-11 04:36:37'),
(22, 11, 'assets/Gallery/Uxv4UoKdmKmOCRMmxROqXirc8jSwDNLfSmVQ9T7s.webp', NULL, '2020-01-11 23:14:03', '2020-01-11 23:14:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_01_034135_create_travel_packages_table', 1),
(5, '2020_01_01_064753_create_galleries_table', 2),
(6, '2020_01_01_065547_create_transactions_table', 3),
(7, '2020_01_01_071022_create_transaction_detail_table', 3),
(8, '2020_01_02_053528_add_roles_field_to_users_table', 4),
(9, '2020_01_02_082002_add_username_to_users_table', 5),
(10, '2020_01_06_032040_create_transaction_details', 6),
(11, '2020_01_06_032404_create_transaction_details', 7),
(13, '2020_02_06_022013_cretae_photo_profile_table', 8),
(14, '2020_02_06_140630_add_image_field_to_users_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `travel_packages_id` int(11) NOT NULL,
  `users_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_total` int(11) NOT NULL,
  `transaction_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `travel_packages_id`, `users_id`, `transaction_total`, `transaction_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(30, 8, '4', 30, 'PENDING', NULL, '2020-01-11 04:47:21', '2020-01-11 04:47:30'),
(31, 9, '6', 350000, 'IN_CART', NULL, '2020-01-14 01:56:49', '2020-01-14 02:11:54'),
(32, 6, '6', 350000, 'IN_CART', NULL, '2020-01-14 02:20:11', '2020-01-14 02:20:11'),
(33, 6, '6', 350000, 'IN_CART', NULL, '2020-01-14 02:21:58', '2020-01-14 02:27:07'),
(34, 8, '5', 300000, 'IN_CART', '2020-03-09 02:59:48', '2020-01-14 02:30:20', '2020-03-09 02:59:48'),
(35, 8, '5', 300000, 'IN_CART', '2020-03-09 02:59:50', '2020-01-14 02:37:32', '2020-03-09 02:59:50'),
(36, 6, '4', 350000, 'PENDING', NULL, '2020-01-14 02:38:23', '2020-01-14 02:43:26'),
(37, 9, '4', 700000, 'IN_CART', NULL, '2020-01-14 03:15:56', '2020-01-14 03:16:01'),
(38, 10, '7', 500000, 'SUCCESS', NULL, '2020-01-16 06:40:01', '2020-01-16 06:40:09'),
(39, 9, '7', 700000, 'PENDING', NULL, '2020-01-16 07:23:17', '2020-01-16 07:23:33'),
(40, 6, '7', 350000, 'PENDING', '2020-02-10 21:17:31', '2020-01-16 20:09:01', '2020-02-10 21:17:31'),
(41, 9, '7', 350000, 'IN_CART', '2020-02-10 21:16:02', '2020-02-10 21:14:28', '2020-02-10 21:16:02'),
(42, 9, '7', 1050000, 'PENDING', NULL, '2020-02-23 22:47:06', '2020-02-23 22:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transactions_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `transactions_id`, `username`, `deleted_at`, `created_at`, `updated_at`) VALUES
(26, 20, 'mamal', NULL, '2020-01-07 03:38:14', '2020-01-07 03:38:14'),
(27, 21, 'dessafri', NULL, '2020-01-07 03:38:36', '2020-01-07 03:38:36'),
(28, 21, 'mamal', NULL, '2020-01-07 03:38:49', '2020-01-07 03:38:49'),
(29, 21, 'mamal', NULL, '2020-01-07 03:51:33', '2020-01-07 03:51:33'),
(30, 22, 'dessafri', NULL, '2020-01-07 03:53:09', '2020-01-07 03:53:09'),
(31, 22, 'mamal', NULL, '2020-01-07 03:53:22', '2020-01-07 03:53:22'),
(32, 23, 'dessafri', NULL, '2020-01-07 03:55:06', '2020-01-07 03:55:06'),
(33, 23, 'mamal', '2020-01-07 03:56:37', '2020-01-07 03:55:32', '2020-01-07 03:56:37'),
(34, 24, 'mamal', NULL, '2020-01-07 03:58:51', '2020-01-07 03:58:51'),
(35, 24, 'mamal', '2020-01-07 03:59:54', '2020-01-07 03:59:04', '2020-01-07 03:59:54'),
(36, 25, 'dessafri', '2020-01-07 04:01:14', '2020-01-07 04:00:25', '2020-01-07 04:01:14'),
(37, 25, 'mamal', '2020-01-07 04:00:49', '2020-01-07 04:00:43', '2020-01-07 04:00:49'),
(38, 25, 'mamal', '2020-01-07 04:01:04', '2020-01-07 04:01:01', '2020-01-07 04:01:04'),
(39, 26, 'dessafri', NULL, '2020-01-07 04:02:04', '2020-01-07 04:02:04'),
(40, 26, 'mamal', '2020-01-07 04:02:24', '2020-01-07 04:02:20', '2020-01-07 04:02:24'),
(41, 27, 'dessafri', NULL, '2020-01-07 04:07:54', '2020-01-07 04:07:54'),
(42, 27, 'mamal', '2020-01-07 04:08:07', '2020-01-07 04:08:04', '2020-01-07 04:08:07'),
(43, 28, 'dessafri', NULL, '2020-01-07 04:09:37', '2020-01-07 04:09:37'),
(44, 28, 'mamal', '2020-01-07 04:10:28', '2020-01-07 04:09:50', '2020-01-07 04:10:28'),
(45, 29, 'dessafri', '2020-01-07 04:11:54', '2020-01-07 04:11:22', '2020-01-07 04:11:54'),
(46, 29, 'mamal', '2020-01-07 04:11:46', '2020-01-07 04:11:36', '2020-01-07 04:11:46'),
(47, 30, 'dessafri', NULL, '2020-01-11 04:47:22', '2020-01-11 04:47:22'),
(48, 31, 'fajar', NULL, '2020-01-14 01:56:49', '2020-01-14 01:56:49'),
(49, 31, 'fajar', '2020-01-14 02:09:08', '2020-01-14 02:09:00', '2020-01-14 02:09:08'),
(50, 31, 'mamal', '2020-01-14 02:10:09', '2020-01-14 02:10:04', '2020-01-14 02:10:09'),
(51, 31, 'des safri', '2020-01-14 02:11:54', '2020-01-14 02:11:47', '2020-01-14 02:11:54'),
(52, 33, 'fajar', NULL, '2020-01-14 02:21:58', '2020-01-14 02:21:58'),
(53, 33, 'des safri', '2020-01-14 02:27:07', '2020-01-14 02:27:00', '2020-01-14 02:27:07'),
(54, 34, 'dessafri', NULL, '2020-01-14 02:30:20', '2020-01-14 02:30:20'),
(55, 35, 'dessafri', NULL, '2020-01-14 02:37:33', '2020-01-14 02:37:33'),
(56, 36, 'dessafri', NULL, '2020-01-14 02:38:23', '2020-01-14 02:38:23'),
(57, 36, 'riko', '2020-01-14 02:39:59', '2020-01-14 02:39:39', '2020-01-14 02:39:59'),
(58, 37, 'dessafri', NULL, '2020-01-14 03:15:56', '2020-01-14 03:15:56'),
(59, 37, 'fajar', NULL, '2020-01-14 03:16:01', '2020-01-14 03:16:01'),
(60, 38, 'aunty', NULL, '2020-01-16 06:40:02', '2020-01-16 06:40:02'),
(61, 39, 'aunty', NULL, '2020-01-16 07:23:17', '2020-01-16 07:23:17'),
(62, 39, 'Fajri', NULL, '2020-01-16 07:23:30', '2020-01-16 07:23:30'),
(63, 40, 'aunty', NULL, '2020-01-16 20:09:01', '2020-01-16 20:09:01'),
(64, 41, 'aunta', NULL, '2020-02-10 21:14:29', '2020-02-10 21:14:29'),
(65, 42, 'aunta', NULL, '2020-02-23 22:47:06', '2020-02-23 22:47:06'),
(66, 42, 'risky', NULL, '2020-02-23 22:47:19', '2020-02-23 22:47:19'),
(67, 42, 'fajar', NULL, '2020-02-23 22:47:26', '2020-02-23 22:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `travel_packages`
--

CREATE TABLE `travel_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `languages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foods` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_date` date NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `price_detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_packages`
--

INSERT INTO `travel_packages` (`id`, `title`, `slug`, `location`, `about`, `featured_event`, `languages`, `foods`, `departure_date`, `duration`, `type`, `price`, `price_detail`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'Liburan Bersama Abi dan Ekuk', 'liburan-bersama-abi-dan-ekuk', 'Lamongan', 'Fasilitas :\r\n\r\n- Bis Gratis\r\n- makan Gratis\r\n-Minum Gratis\r\n- Semuanya Gratis Gaesss', 'Tari Boranan', 'Indonesia', 'Boranan', '2020-01-05', '3D', 'Open Trip', 50, '', '2020-01-11 03:21:28', '2020-01-04 07:40:12', '2020-01-11 03:21:28'),
(4, 'Liburan Nikmat', 'liburan-nikmat', 'Malang, East Java', 'Liburan santuy aja', 'None', 'Indonesia', 'None', '2020-01-08', '3D 4N', 'Open Trip', 40, '', '2020-01-11 03:21:31', '2020-01-05 22:53:54', '2020-01-11 03:21:31'),
(5, 'LIBURAN KE BROMO', 'liburan-ke-bromo', 'BROMO', 'Liburan bareng kita ke bromo mountain', 'none', 'Indonesia', 'Local Foods', '2020-01-13', '3D 4N', 'Open Trip', 36, '', '2020-01-11 03:34:16', '2020-01-11 03:23:50', '2020-01-11 03:34:16'),
(6, 'Liburan Ke Pulau Komodo', 'liburan-ke-pulau-komodo', 'Komodo Island, Indonesia', '<p>Liburan ke pulau komodo</p>\r\n\r\n<p>Fasilitas :</p>\r\n\r\n<ul>\r\n	<li>1</li>\r\n	<li>2</li>\r\n	<li>3</li>\r\n	<li>4</li>\r\n</ul>', 'None', 'Indonesia', 'Local Foods', '2020-01-13', '3D 4N', 'Open Trip', 350000, 'Orang', NULL, '2020-01-11 04:24:15', '2020-01-13 23:51:24'),
(7, 'Trip To Bromo', 'trip-to-bromo', 'Bromo, Indonesia', 'Liburan Ke Bromo', 'None', 'Indonesia', 'Local Foods', '2020-01-14', '2D', 'Open Trip', 20, '', '2020-01-11 04:37:48', '2020-01-11 04:25:38', '2020-01-11 04:37:48'),
(8, 'Trip To Malang', 'trip-to-malang', 'Malang, East Java', '<p>Liburan Ke malang</p>', 'None', 'Indonesia', 'Local Foods', '2020-01-15', '3D 2N', 'Open Trip', 300000, 'Orang', NULL, '2020-01-11 04:27:04', '2020-01-13 23:51:38'),
(9, 'Trip To Semeru', 'trip-to-semeru', 'Malang, Indonesia', '<p>Liburan Ke malang</p>', 'None', 'Indonesia', 'Local Foods', '2020-01-17', '3D 2N', 'Open Trip', 350000, 'Orang', NULL, '2020-01-11 04:27:55', '2020-01-13 23:51:51'),
(10, 'Trip To Yogyakarta', 'trip-to-yogyakarta', 'Yogyakarta, Indonesia', '<p>Liburan Ke Yogyakarta</p>', 'None', 'Indonesia', 'Local Foods', '2020-01-18', '4D 3N', 'Open Trip', 500000, 'Orang', NULL, '2020-01-11 04:28:59', '2020-01-13 23:52:05'),
(11, 'Liburan Ke Jakarta', 'liburan-ke-jakarta', 'Jakarta, Indonesia', '<p>Liburan Santai Ke jakarta</p>', 'Ondel - Ondel', 'Indonesia', 'Local Foods', '2020-01-14', '5D', 'Open Trip', 600000, 'Orang', NULL, '2020-01-11 23:13:17', '2020-01-13 23:52:17'),
(12, 'tes', 'tes', 'lraknfak', '<p><strong>Liburan bersama kita</strong></p>\r\n\r\n<ul>\r\n	<li>- 1</li>\r\n	<li>- 2</li>\r\n</ul>', 'lamongan', 'djash', 'asdhasjh', '2020-01-09', '4d', 'open', 50000, 'Orang', '2020-01-13 23:52:19', '2020-01-12 08:48:46', '2020-01-13 23:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER.JPG'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `username`, `handphone`, `image`) VALUES
(3, 'Des Safri', 'des@gmail.com', '2020-01-01 23:27:20', '$2y$10$ZtyPOw8Cg75L4lIi4w85aODcrnSSgv5SSWM0D097JVPWCjU5NeBRe', NULL, '2020-01-01 23:27:08', '2020-01-01 23:27:20', 'USER', 'des', '', 'USER.JPG'),
(4, 'Des Safri', 'dessafri@gmail.com', '2020-01-02 01:03:14', '$2y$10$NZmRzwITiHQKSK5uMBrlJe6D1o/4wFpuKja4qjaCPMxUEHGb5wPEe', NULL, '2020-01-02 01:02:57', '2020-01-02 01:03:14', 'ADMIN', 'dessafri', '', 'USER.JPG'),
(5, 'malinda', 'mamal@gmail.com', '2020-01-02 01:28:47', '$2y$10$M6Jw98ot.bSQYboZ9JmAYOWHO5qF1Mjc1CqUhTegP6jkwyefkOsL2', NULL, '2020-01-02 01:28:33', '2020-01-02 01:28:47', 'USER', 'mamal', '', 'USER.JPG'),
(6, 'Fajar', 'fajar@gmail.com', NULL, '$2y$10$imElI6lRpDiKJuZD6mvnnuSdAsMOQMjh2CJAd29s0Hrn57fi5LoGi', NULL, '2020-01-14 01:46:17', '2020-01-14 01:46:17', 'USER', 'fajar', '', 'USER.JPG'),
(7, 'rini', 'aunty@gmail.com', NULL, '$2y$10$c3zXymO8Lx0APpsnsbdO0ORogM8t8iiZlB4tFOZ/ZM85cOSE8Y5S6', NULL, '2020-01-16 06:39:31', '2020-02-10 21:55:57', 'USER', 'aunta', '088632468273', '02dda6311ac75b67e019e813a2acb098.png'),
(8, 'ayu', 'ayu@gmail.com', NULL, '$2y$10$Qa1NPW5uNTI9y6zLS/6kt.ZW30ujo8Nr4H.Jb/oDVdyR8QGnfaGPy', NULL, '2020-01-16 07:53:59', '2020-01-16 07:53:59', 'USER', 'ayu', '082233111310', 'USER.JPG'),
(9, 'Fajar Andaru', 'fajarandaru11@gmail.com', NULL, '$2y$10$eRXkWWWYd2nE/RsWEjopue4XOCUrYGHOed5WtTxTIHfzzoeRbI8vm', NULL, '2020-01-16 19:52:39', '2020-01-16 19:52:39', 'ADMIN', 'fajarandaru', '081335156892', 'USER.JPG'),
(10, 'des', 'desi@gmail.com', NULL, '$2y$10$D7ocP2xBCL49/SGyXtFX/eKAIcBjpDSuW1UF.10bKlREMEJ0tIP.q', NULL, '2020-03-26 21:05:44', '2020-03-26 21:05:44', 'USER', 'desi', '082233111340', 'USER.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_packages`
--
ALTER TABLE `travel_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `travel_packages`
--
ALTER TABLE `travel_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
