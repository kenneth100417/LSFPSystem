-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 01:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsfpsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 - not visible | 1 - visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Cacao Products', 'cacao-products', 'Cacao products are made from roasted original cacao beans.', '1691080059.jpg', 'Cacao Products', 'Cacao Products', 'Cacao products are made from roasted original cacao beans.', 1, '2023-08-03 08:27:39', '2023-08-03 08:27:39'),
(7, 'Cacao Products', 'cacao-products', 'Products made from roasted cacao beans.', '1691499097.jpg', 'Cacao Products', 'Cacao Products', 'Products made from roasted cacao beans.', 1, '2023-08-08 04:51:37', '2023-08-08 04:51:37');

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
(28, '2014_10_12_000000_create_users_table', 1),
(29, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(30, '2019_08_19_000000_create_failed_jobs_table', 1),
(31, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(32, '2023_06_27_162749_verification_code', 1),
(33, '2023_07_22_171614_create_products_table', 2),
(35, '2023_07_30_162459_create_categories_table', 3),
(37, '2023_08_01_184454_create_product_variation_table', 5),
(38, '2023_08_01_181941_create_products_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `quantity_sold` int(11) NOT NULL DEFAULT 0,
  `trending` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1 - top | 0 - not',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 - available | 0 - archived',
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `image`, `slug`, `description`, `original_price`, `selling_price`, `quantity`, `quantity_sold`, `trending`, `status`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(10, 6, 'Tablea Chocolate Bars', '1691084994.png', 'tablea-chocolate-bars', 'Tablea Chocolate bars 100grams is made from roasted original cacao beans.', 100, 80, 100, 0, 0, 1, 'Tablea Chocolate Bars', 'Tablea Chocolate Bars', 'Tablea Chocolate bars 100grams is made from roasted original cacao beans.', '2023-08-03 09:24:46', '2023-08-03 09:49:54'),
(11, 6, 'Chocolate Sweets update', '1691087267.jpg', 'chocolate-sweets', 'Crispy Pili Nuts 100grams is made from original pili nuts.', 75, 65, 400, 0, 0, 1, 'Chocolate Sweets', 'Chocolate Sweets', 'cvsxdfzs d', '2023-08-03 09:54:38', '2023-08-03 10:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `access` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `birthdate`, `address`, `mobile_number`, `email`, `email_verified_at`, `password`, `access`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kenneth', 'Lotino', 'Gisalan', '10/05/2000', 'Purok 2 E.Quirino, Bulan, Sorsogon, Philippines, 4706', '09510126952', 'kenneth05@user.com', NULL, '$2y$10$Q5s8We9.dqreENTKP.U7DON/.kB5k4qp3iEXxhtNZ/rFfwNiqI.SS', '0', '/storage/images/1692119474342167071_1034506970861011_1279402419337246219_n.jpg', NULL, '2023-07-20 10:49:59', '2023-08-15 09:11:14'),
(4, 'Kenneth', NULL, 'Gisalan', '10/05/2000', 'Purok 2, E.Quirino, Bulan, Sorsogon, Philippines, 4706', '09510126952', 'LSFPAdmin@gmail.com', NULL, '$2y$10$MTWIXVF1yespey7RQkdsOOHaLcUaF6nTF9p6x.mjLP3QFwJ40srfO', '1', '/img/Profile_pic/Profile_temp.png', NULL, '2023-08-15 19:44:24', '2023-08-15 19:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `verification_codes`
--

CREATE TABLE `verification_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `expire_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verification_codes`
--

INSERT INTO `verification_codes` (`id`, `mobile_number`, `otp`, `expire_at`, `created_at`, `updated_at`) VALUES
(1, '09510126952', '174814', '2023-07-20 10:59:59', '2023-07-20 10:49:59', '2023-07-20 10:49:59'),
(2, '09510126952', '446938', '2023-07-20 11:40:23', '2023-07-20 11:30:23', '2023-07-20 11:30:23'),
(3, '09510126952', '424969', '2023-07-21 04:30:41', '2023-07-21 04:20:41', '2023-07-21 04:20:41'),
(4, '09510126952', '201925', '2023-07-21 05:19:52', '2023-07-21 05:09:52', '2023-07-21 05:09:52'),
(5, '09510126952', '424119', '2023-07-22 08:23:29', '2023-07-22 08:13:29', '2023-07-22 08:13:29'),
(6, '09510126952', '612089', '2023-07-22 08:36:37', '2023-07-22 08:26:37', '2023-07-22 08:26:37'),
(7, '09510126952', '845527', '2023-07-22 09:21:46', '2023-07-22 09:11:46', '2023-07-22 09:11:46'),
(8, '09510126952', '873523', '2023-07-27 06:52:14', '2023-07-27 06:42:14', '2023-07-27 06:42:14'),
(9, '09510126952', '683453', '2023-07-27 08:32:25', '2023-07-27 08:22:25', '2023-07-27 08:22:25'),
(10, '09510126952', '213621', '2023-07-28 09:47:44', '2023-07-28 09:37:44', '2023-07-28 09:37:44'),
(11, '09510126952', '751802', '2023-07-30 04:25:58', '2023-07-30 04:15:58', '2023-07-30 04:15:58'),
(12, '09510126952', '676160', '2023-07-30 10:29:32', '2023-07-30 10:19:32', '2023-07-30 10:19:32'),
(13, '09510126952', '510524', '2023-08-07 02:50:15', '2023-08-07 02:40:15', '2023-08-07 02:40:15'),
(14, '09510126952', '630956', '2023-08-07 07:35:01', '2023-08-07 07:25:01', '2023-08-07 07:25:01'),
(15, '09510126952', '747164', '2023-08-07 08:33:12', '2023-08-07 08:23:12', '2023-08-07 08:23:12'),
(16, '09510126952', '898250', '2023-08-07 08:54:07', '2023-08-07 08:44:07', '2023-08-07 08:44:07'),
(17, '09510126952', '291348', '2023-08-07 09:10:54', '2023-08-07 09:00:54', '2023-08-07 09:00:54'),
(18, '09510126952', '271053', '2023-08-07 09:55:15', '2023-08-07 09:45:15', '2023-08-07 09:45:15'),
(19, '09510126952', '755557', '2023-08-07 10:06:22', '2023-08-07 09:56:22', '2023-08-07 09:56:22'),
(20, '09510126952', '201007', '2023-08-09 10:15:52', '2023-08-09 10:05:52', '2023-08-09 10:05:52'),
(21, '09510126952', '273544', '2023-08-10 10:12:01', '2023-08-10 10:02:01', '2023-08-10 10:02:01'),
(22, '09510126952', '649797', '2023-08-10 10:31:06', '2023-08-10 10:21:06', '2023-08-10 10:21:06'),
(23, '09510126952', '252355', '2023-08-14 10:35:49', '2023-08-14 10:25:49', '2023-08-14 10:25:49'),
(24, '09510126952', '787872', '2023-08-15 08:03:58', '2023-08-15 07:53:58', '2023-08-15 07:53:58'),
(25, '09510126952', '331347', '2023-08-15 09:08:31', '2023-08-15 08:58:31', '2023-08-15 08:58:31'),
(26, '09510126952', '764737', '2023-08-15 19:36:51', '2023-08-15 19:26:51', '2023-08-15 19:26:51'),
(27, '09510126952', '291690', '2023-08-15 19:54:24', '2023-08-15 19:44:24', '2023-08-15 19:44:24'),
(28, '09510126952', '253381', '2023-08-16 02:14:04', '2023-08-16 02:04:04', '2023-08-16 02:04:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verification_codes`
--
ALTER TABLE `verification_codes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `verification_codes`
--
ALTER TABLE `verification_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
