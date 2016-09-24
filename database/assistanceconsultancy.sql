-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2016 at 08:22 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assistanceconsultancy`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_post_table', 1),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `opt_id` bigint(20) NOT NULL,
  `opt_name` varchar(512) NOT NULL,
  `opt_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`opt_id`, `opt_name`, `opt_value`) VALUES
(1, 'menu', 'Main Menu');

-- --------------------------------------------------------

--
-- Table structure for table `option_meta`
--

CREATE TABLE `option_meta` (
  `meta_id` bigint(20) NOT NULL,
  `opt_id` bigint(20) NOT NULL,
  `meta_key` varchar(512) NOT NULL,
  `meta_value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `option_meta`
--

INSERT INTO `option_meta` (`meta_id`, `opt_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'menu_page_ids', 'a:3:{i:0;s:1:"4";i:1;s:1:"4";i:2;s:1:"2";}');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `post_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `post_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_status` tinyint(1) NOT NULL DEFAULT '1',
  `post_datetime` datetime NOT NULL,
  `post_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_name`, `post_title`, `post_type`, `post_content`, `post_slug`, `post_status`, `post_datetime`, `post_author`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'About Us', 'Assistance in Bangladesh', '1', 'We are professional step by step guidance through the flat buy or sale or rent or management in Bangladesh. We are also able to assistant with Birth Certificate, Passport, National ID card, Power of attorney and Open a bank account in Bangladesh', 'About-Us', 1, '2016-09-24 05:18:20', '1', 'nbQStiJwbAOf15olLhp0Do9JAvgYD8KK8PNEx4YO', NULL, NULL),
(3, 'Protfolio', 'Protfolio', '1', 'We are professional step by step guidance through the flat buy or sale or rent or management in Bangladesh. We are also able to assistant with Birth Certificate, Passport, National ID card, Power of attorney and Open a bank account in Bangladesh', 'Protfolio', 1, '2016-09-24 05:56:33', '1', 'nbQStiJwbAOf15olLhp0Do9JAvgYD8KK8PNEx4YO', NULL, NULL),
(4, 'plan-one', 'dfdfdfdfdfdf', '1', 'dfdfd', 'plan-one', 1, '2016-09-24 09:53:33', '1', 'nbQStiJwbAOf15olLhp0Do9JAvgYD8KK8PNEx4YO', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rashed', 'cse.rashed91@gmail.com', '$2y$10$nYXzcUpq1I0VSXGXtR8l4eLWXDxrfUUNTAb2YNuDjOdv40MyLFySK', NULL, '2016-09-22 11:43:52', '2016-09-22 11:43:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`opt_id`);

--
-- Indexes for table `option_meta`
--
ALTER TABLE `option_meta`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_post_name_unique` (`post_name`);

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
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `opt_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `option_meta`
--
ALTER TABLE `option_meta`
  MODIFY `meta_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
