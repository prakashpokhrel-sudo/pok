-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2020 at 10:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(141) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_02_074622_create_services_table', 1),
(5, '2020_02_03_083737_create_products_table', 2),
(6, '2020_02_03_092024_create_purchases_table', 3),
(7, '2020_02_04_074924_create_orders_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` int(11) NOT NULL,
  `total_cost` int(11) NOT NULL,
  `status` varchar(141) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `code`, `total_cost`, `status`, `created_at`, `updated_at`) VALUES
(1, 4181, 0, 'P', '2020-02-04 02:15:48', '2020-02-04 02:15:48'),
(2, 1584, 4500, 'P', '2020-02-04 02:20:22', '2020-02-04 02:20:22'),
(3, 1346, 4500, 'P', '2020-02-04 02:57:14', '2020-02-04 02:57:14'),
(4, 7423, 4000, 'P', '2020-02-04 03:07:36', '2020-02-04 03:07:36'),
(5, 7423, 4000, 'P', '2020-02-04 03:17:12', '2020-02-04 03:17:12'),
(6, 7423, 4000, 'P', '2020-02-04 03:18:20', '2020-02-04 03:18:20'),
(7, 9474, 2000, 'P', '2020-02-04 03:19:12', '2020-02-04 03:19:12'),
(8, 9457, 1500, 'P', '2020-02-04 03:20:28', '2020-02-04 03:20:28'),
(9, 9457, 1500, 'P', '2020-02-04 03:23:56', '2020-02-04 03:23:56'),
(10, 9457, 1500, 'P', '2020-02-04 03:25:00', '2020-02-04 03:25:00'),
(11, 9457, 1500, 'P', '2020-02-04 03:25:33', '2020-02-04 03:25:33'),
(12, 4596, 4500, 'P', '2020-02-04 03:27:04', '2020-02-04 03:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(141) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(141) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(141) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(141) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `photo`, `cost`, `detail`, `stock`, `created_at`, `updated_at`) VALUES
(2, 'sdkjfnsdjkf', 'ca21ec0c26ed4ecc04fcf96d96f5b3d53a6d795e.jpg', 500, 'kjsndfkj', 100, '2020-02-03 03:01:18', '2020-02-03 03:01:18'),
(3, 'RiceCooker', '6973f4c6a4c9e0af08e8db3cfe2ddb3021299b11.jpg', 4000, 'dskjfn asdkfjnsdfksdnf', 20, '2020-02-03 03:18:44', '2020-02-03 03:18:44'),
(4, 'Pressure Cooker', 'd57a7028bd1878956c8becfd1e640b48a0e4d6b7.jpg', 3000, 'dkjfnsdfkj', 10, '2020-02-03 03:19:25', '2020-02-03 03:19:25');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(141) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `totalcost` int(11) NOT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `code`, `mobile`, `product_id`, `cost`, `qty`, `totalcost`, `status`, `created_at`, `updated_at`) VALUES
(5, '4987', '0', 3, 4000, 2, 8000, 'N', '2020-02-03 04:04:55', '2020-02-03 04:04:55'),
(6, '4987', '0', 4, 3000, 4, 12000, 'N', '2020-02-03 04:05:18', '2020-02-03 04:05:18'),
(7, '4987', '0', 2, 500, 1, 500, 'N', '2020-02-03 04:15:33', '2020-02-03 04:15:33'),
(8, '4987', '0', 3, 4000, 12, 48000, 'N', '2020-02-03 04:15:46', '2020-02-03 04:15:46'),
(9, '6956', '0', 3, 4000, 23, 92000, 'N', '2020-02-04 01:37:08', '2020-02-04 01:37:08'),
(10, '6956', '0', 3, 4000, 12, 48000, 'N', '2020-02-04 01:37:24', '2020-02-04 01:37:24'),
(11, '4181', '0', 3, 4000, 2, 8000, 'N', '2020-02-04 01:38:34', '2020-02-04 01:38:34'),
(12, '4181', '0', 3, 4000, 1, 4000, 'N', '2020-02-04 01:41:23', '2020-02-04 01:41:23'),
(13, '1584', '0', 2, 500, 1, 500, 'N', '2020-02-04 02:20:04', '2020-02-04 02:20:04'),
(14, '1584', '0', 3, 4000, 1, 4000, 'N', '2020-02-04 02:20:12', '2020-02-04 02:20:12'),
(15, '1817', '0', 3, 4000, 3, 12000, 'N', '2020-02-04 02:33:07', '2020-02-04 02:33:07'),
(16, '1346', '0', 2, 500, 1, 500, 'N', '2020-02-04 02:56:48', '2020-02-04 02:56:48'),
(17, '1346', '0', 3, 4000, 1, 4000, 'N', '2020-02-04 02:56:58', '2020-02-04 02:56:58'),
(18, '7423', '9806778313', 3, 4000, 1, 4000, 'N', '2020-02-04 03:07:28', '2020-02-04 03:07:28'),
(19, '9474', '9804117638', 2, 500, 4, 2000, 'N', '2020-02-04 03:19:04', '2020-02-04 03:19:04'),
(20, '9457', '9856038358', 2, 500, 3, 1500, 'N', '2020-02-04 03:20:17', '2020-02-04 03:20:17'),
(21, '4596', '9804117638', 2, 500, 1, 500, 'N', '2020-02-04 03:26:40', '2020-02-04 03:26:40'),
(22, '4596', '9804117638', 3, 4000, 1, 4000, 'N', '2020-02-04 03:26:53', '2020-02-04 03:26:53'),
(23, '6729', '9856038358', 2, 500, 1, 500, 'N', '2020-02-04 03:28:41', '2020-02-04 03:28:41');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(141) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(141) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `detail`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'ghjk', 'vbn', 'C:\\xampp\\tmp\\phpBCF1.tmp', '2020-02-03 02:00:15', '2020-02-03 02:00:15'),
(2, 'ghjk', 'vbn', 'C:\\xampp\\tmp\\php808B.tmp', '2020-02-03 02:02:10', '2020-02-03 02:02:10'),
(3, 'dfgh', 'vbnm', 'C:\\xampp\\tmp\\php6B1.tmp', '2020-02-03 02:07:07', '2020-02-03 02:07:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(141) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(141) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(141) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'prakash pokhrel', 'pokhrelprakash643@gmail.com', NULL, '$2y$10$mfirpGsj.ulC23XXAV1m1OEtAle7Si6pJR4U5wWK/lkSTnBy8o8q2', NULL, '2020-02-03 01:44:16', '2020-02-03 01:44:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
