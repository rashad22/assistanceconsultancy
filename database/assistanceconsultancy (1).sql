-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2016 at 09:58 PM
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
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `med_id` bigint(20) NOT NULL,
  `med_caption` varchar(1000) NOT NULL,
  `med_description` text NOT NULL,
  `med_path` varchar(500) NOT NULL,
  `med_name` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`med_id`, `med_caption`, `med_description`, `med_path`, `med_name`, `created_at`) VALUES
(1, '', '', 'uploads/', '8v48m4Za2TYU5ac.jpg', '2016-09-26 05:34:06'),
(2, '', '', 'uploads/', 'k2Ky7myA6OQyMCE.jpg', '2016-09-26 06:41:40'),
(3, '', '', 'uploads/', 'nSQouiJHk7cpOE4.jpg', '2016-09-26 06:42:26'),
(4, '', '', 'uploads/', 'AaSJbzMqEMdVe8y.jpg', '2016-09-26 06:42:41'),
(5, '', '', 'uploads/', 'SWcFhiBmh1ad2KG.jpg', '2016-09-26 06:43:19'),
(6, '', '', 'uploads/', 'OQNz0ZXLoWseEyI.jpg', '2016-09-26 06:43:42'),
(7, '', '', 'uploads/', 'qzUMasgKuLGm05j.jpg', '2016-09-26 06:44:10'),
(8, '', '', 'uploads/', 'ecIkmtVFNrv3Hvr.jpg', '2016-09-26 06:51:38'),
(9, '', '', 'uploads/', 'Qb2ncMGfoaTlZaM.jpg', '2016-09-26 07:20:10'),
(10, '', '', 'uploads/', 'wu0cKTX1DAOgekY.jpg', '2016-09-26 07:28:49');

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
(1, 1, 'menu_page_ids', 'a:4:{i:0;s:2:"14";i:1;s:2:"14";i:2;s:2:"14";i:3;s:2:"14";}');

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
(2, 'About Us', 'Assistance in Bangladesh', '1', 'We are professional step by step guidance through the flat buy or sale or rent or management in Bangladesh. We are also able to assistant with Birth Certificate, Passport, National ID card, Power of attorney and Open a bank account in Bangladesh', 'Assistance in Bangladesh', 1, '2016-09-26 06:43:42', '1', 'LdxrhuMEBsvB4Xylwo3C27rFZy98hIIGE9g4XioE', NULL, NULL),
(3, 'Protfolio', 'Protfolio', '1', 'We are professional step by step guidance through the flat buy or sale or rent or management in Bangladesh. We are also able to assistant with Birth Certificate, Passport, National ID card, Power of attorney and Open a bank account in Bangladesh', 'Protfolio', 1, '2016-09-26 06:44:10', '1', 'LdxrhuMEBsvB4Xylwo3C27rFZy98hIIGE9g4XioE', NULL, NULL),
(4, 'plan-one', 'dfdfdfdfdfdf', '2', 'dfdfd', 'dfdfdfdfdfdf', 1, '2016-09-26 07:28:49', '1', 'LdxrhuMEBsvB4Xylwo3C27rFZy98hIIGE9g4XioE', NULL, NULL),
(5, 'plan-onetyty', 'new changestytyt', '1', 'tytytyty', 'plan-onetyty', 1, '2016-09-25 05:10:35', '1', 'KOZzv1Z8g5Dyu4nyrh1esyyZiO8YeeeaMZfdLT8u', NULL, NULL),
(6, 'about usdfdf', 'dfdfdf', '1', 'dfdfdfd', 'about-usdfdf', 1, '2016-09-25 05:11:24', '1', 'KOZzv1Z8g5Dyu4nyrh1esyyZiO8YeeeaMZfdLT8u', NULL, NULL),
(7, 'dd', 'dd', '1', 'ddd', 'dd', 1, '2016-09-25 05:12:01', '1', 'KOZzv1Z8g5Dyu4nyrh1esyyZiO8YeeeaMZfdLT8u', NULL, NULL),
(8, 'sdsdsds', 'sdsds', '1', 'dsdsdsdsd', 'sdsdsds', 1, '2016-09-25 05:13:25', '1', 'KOZzv1Z8g5Dyu4nyrh1esyyZiO8YeeeaMZfdLT8u', NULL, NULL),
(9, 'plan-one5555', 'fgfgf', '1', 'fgfg', 'plan-one5555', 1, '2016-09-26 05:19:10', '1', 'LdxrhuMEBsvB4Xylwo3C27rFZy98hIIGE9g4XioE', NULL, NULL),
(10, 'about usdfdfdfdfdfdfd', 'fdfdf', '1', 'dfdfdfdfdf', 'about-usdfdfdfdfdfdfd', 1, '2016-09-26 05:19:53', '1', 'LdxrhuMEBsvB4Xylwo3C27rFZy98hIIGE9g4XioE', NULL, NULL),
(11, 'dsdsdsd', 'sdsdsds', '1', 'dsdsdsd', 'dsdsdsd', 1, '2016-09-26 05:22:29', '1', 'LdxrhuMEBsvB4Xylwo3C27rFZy98hIIGE9g4XioE', NULL, NULL),
(12, 'New post ', 'new post ', '1', 'post with image', 'new post ', 1, '2016-09-26 06:39:06', '1', 'LdxrhuMEBsvB4Xylwo3C27rFZy98hIIGE9g4XioE', NULL, NULL),
(13, 'post no image', 'post no image', '1', 'post no image', 'post no image', 1, '2016-09-26 06:40:31', '1', 'LdxrhuMEBsvB4Xylwo3C27rFZy98hIIGE9g4XioE', NULL, NULL),
(14, 'DISPUTES WITH DEVELOPERS', 'DISPUTES WITH DEVELOPERS', '2', '<ol><li>Assist if there is any dispute between buyer and seller even after the agreement is made.</li><li>Assist our Clint to ensure sell and purchase as per the agreement between both parties.</li></ol>', 'DISPUTES-WITH-DEVELOPERS', 1, '2016-09-26 06:51:38', '1', 'LdxrhuMEBsvB4Xylwo3C27rFZy98hIIGE9g4XioE', NULL, NULL),
(15, 'ACCURATE DOCUMENTATION', 'ACCURATE DOCUMENTATION', '2', 'Assist with sequence of step to be taken before making any agreement.<br>Assist with sequence of step to be taken after deal is made.<br>', 'ACCURATE-DOCUMENTATION', 1, '2016-09-26 07:20:10', '1', 'LdxrhuMEBsvB4Xylwo3C27rFZy98hIIGE9g4XioE', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_meta`
--

CREATE TABLE `post_meta` (
  `meta_id` bigint(20) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `meta_key` varchar(500) NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post_meta`
--

INSERT INTO `post_meta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(2, 2, 'post_featured_image', '6'),
(3, 3, 'post_featured_image', '7'),
(4, 14, 'post_featured_image', '8'),
(5, 15, 'post_featured_image', '9'),
(6, 4, 'post_featured_image', '10');

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
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`med_id`);

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
-- Indexes for table `post_meta`
--
ALTER TABLE `post_meta`
  ADD PRIMARY KEY (`meta_id`);

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
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `med_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `post_meta`
--
ALTER TABLE `post_meta`
  MODIFY `meta_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
