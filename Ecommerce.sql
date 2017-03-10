-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2017 at 04:56 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `categories_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories_name`, `created_at`, `updated_at`) VALUES
(1, 'Product1', '2017-03-03 18:37:20', '2017-03-10 10:56:54'),
(2, 'TEst', '2017-03-08 20:00:00', '2017-03-08 20:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2017_02_25_111603_users', 1),
(3, '2017_02_25_111616_categories', 1),
(4, '2017_02_25_111626_products', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_category` int(10) UNSIGNED NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_count` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_category`, `product_image`, `product_details`, `product_count`, `created_at`, `updated_at`) VALUES
(4, 'Test', '90', 1, '/opt/lampp/temp/phpkDjTFH', 'asdsadsadsaqqasdsadsadsaqqasdsadsadsaqqasdsadsadsaqqasdsadsadsaqqasdsadsadsaqqasdsadsadsaqqasdsadsadsaqqasdsadsadsaqqasdsadsadsaqqasdsadsadsaqqasdsadsadsaqqasdsadsadsaqqasdsadsadsaqqasdsadsad', 1, '2017-03-08 20:01:46', '2017-03-08 20:01:46'),
(5, 'asdsadsad', '30', 1, '/opt/lampp/temp/phpNRVhR5', 'sazzxzxz', 1, '2017-03-08 20:05:04', '2017-03-08 20:05:04'),
(6, 'qqqq', '90', 2, '/opt/lampp/temp/php6g4LaX', 'wwwwww', 1, '2017-03-08 20:05:15', '2017-03-08 20:05:15'),
(7, 'xxxxxxxxxx', '20', 2, '/opt/lampp/temp/phplpUfNV', 'bbbbbbb', 1, '2017-03-08 20:05:24', '2017-03-08 20:05:24'),
(8, 'nnnnnnn', '20', 2, '/opt/lampp/temp/php4cZ9Jv', 'hhhhh', 1, '2017-03-08 20:05:32', '2017-03-08 20:05:32'),
(9, 'ffffffff', '10', 2, '/opt/lampp/temp/php8awANS', 'qqwe', 1, '2017-03-08 20:05:46', '2017-03-08 20:05:46'),
(10, ',,,,,,,,', '65', 2, '/opt/lampp/temp/phpEly4Gy', 'ftu', 1, '2017-03-08 20:06:02', '2017-03-08 20:06:02'),
(11, 'qweqwewq', '30$', 1, '/opt/lampp/temp/phprY5s1B', 'zzzzzz', 1, '2017-03-10 13:24:11', '2017-03-10 13:24:11'),
(13, 'Mostafarabia', '450$', 1, '1489159628.png', 'asdweqweqw', 1, '2017-03-10 13:27:08', '2017-03-10 13:27:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_addres` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_code` int(10) DEFAULT NULL,
  `user_phone_number` int(11) DEFAULT NULL,
  `user_prices` int(11) NOT NULL,
  `user_admin` int(11) NOT NULL,
  `user_confirmation` int(11) NOT NULL,
  `user_banned` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `user_name`, `user_addres`, `user_country`, `user_city`, `user_code`, `user_phone_number`, `user_prices`, `user_admin`, `user_confirmation`, `user_banned`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mostafarabia64@gmail.com', '$2y$10$VeQ2eOkM9HFUJcxktUs3g.L2MXIr4ahYqFR3QAFokpLgkkU/PluGK', 'MostafaRabia', 'a', 'a', 'a', 0, 1146568373, 1, 1, 1, 0, 'QrWuNStGp00YN1HZoFkQS35w7bV7OtbiFt1IeHGmOtNkxfimW13xancvDQy5', '2017-03-03 17:56:57', '2017-03-10 13:52:18'),
(2, 'rabiamostafa00@gmail.com', '$2y$10$d9JvB1Yxv6wi7.Z6lhRo6ODkKtCP1epsfX.D5/xqKpKulqnwiAQKq', 'rabia', 'EL-garhy', 'EG', 'cairo', 2, 1118449590, 0, 0, 0, 0, 'xbFCjOwnhVmbsfgN4JurLmoKOD7FX7Bl9d1JLnIhWiil6ysicBtDJnopBv1W', '2017-03-10 09:52:59', '2017-03-10 13:51:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_categories_name_unique` (`categories_name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_name_unique` (`product_name`),
  ADD UNIQUE KEY `products_product_image_unique` (`product_image`),
  ADD KEY `products_product_category_foreign` (`product_category`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1456061391084793;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_category_foreign` FOREIGN KEY (`product_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
