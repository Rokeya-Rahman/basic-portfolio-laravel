-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 05:41 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basic_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `gallery_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `user_id`, `gallery_title`, `gallery_description`, `gallery_image`, `created_at`, `updated_at`) VALUES
(39, 1, 'PHP Projects', '<p>All PHP Projects is Here.</p>', 'gallery-images/PHP Projects.png', '2019-10-05 21:33:37', '2019-10-05 22:20:30'),
(40, 1, 'Laravel Projects', '<p>All Laravel Projects is Here.</p>', 'gallery-images/Laravel Projects.png', '2019-10-05 21:41:09', '2019-10-05 22:20:42'),
(41, 1, 'CodeIgniter Projects', '<p>All CodeIgniter Projects is Here.</p>', 'gallery-images/CodeIgniter Projects.jpg', '2019-10-05 21:43:30', '2019-10-05 22:20:53'),
(42, 1, 'WordPress Projects', '<p>All WordPress Projects is Here.</p>', 'gallery-images/WordPress Projects.png', '2019-10-05 22:18:27', '2019-10-05 22:21:05'),
(43, 1, 'Web Design Projects', '<p>All Web Design Projects is Here.</p>', 'gallery-images/Web Design Projects.jpg', '2019-10-05 22:20:08', '2019-10-05 22:20:08'),
(44, 1, 'Drupal Projects', '<p>All Drupal&nbsp;Projects is Here.</p>', 'gallery-images/Drupal Projects.jpg', '2019-10-05 22:22:45', '2019-10-05 22:25:45'),
(45, 1, 'Joomla', '<p>All Joomla Projects is Here.</p>', 'gallery-images/Joomla.png', '2019-10-05 22:25:25', '2019-10-05 22:25:25'),
(49, 1, 'Magento Projects', '<p>All Magento&nbsp;Projects is Here.</p>', 'gallery-images/Magento Projects.jpg', '2019-10-05 22:31:10', '2019-10-05 22:31:10'),
(50, 1, 'OsCommerce Projects', '<p>All OsCommerce&nbsp;Projects is Here.</p>', 'gallery-images/OsCommerce Projects.png', '2019-10-05 22:31:41', '2019-10-05 22:31:41'),
(51, 1, 'Smarty Projects', '<p>All Smarty&nbsp;Projects is Here.</p>', 'gallery-images/Smarty Projects.png', '2019-10-05 22:32:57', '2019-10-05 22:32:57');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_28_013303_create_galleries_table', 1),
(4, '2019_10_01_130653_create_portfolios_table', 2);

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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `portfolio_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `user_id`, `gallery_id`, `portfolio_title`, `portfolio_description`, `portfolio_image`, `created_at`, `updated_at`) VALUES
(1, 1, 39, 'CakePHP Project', '<p>CakePHP Project Description</p>', 'gallery-images/CakePHP Project.png', '2019-10-05 22:43:24', '2019-10-05 22:43:24'),
(2, 1, 39, 'FuelPHP Project', '<p>CakePHP Project Description</p>', 'gallery-images/FuelPHP Project.png', '2019-10-05 22:47:23', '2019-10-05 22:47:23'),
(3, 1, 39, 'Symfony Project', '<p>Symfony&nbsp;Project Description</p>', 'gallery-images/Symfony Project.png', '2019-10-05 22:51:28', '2019-10-05 22:52:37'),
(4, 1, 39, 'Yii Project', '<p>Yii&nbsp;Project Description</p>', 'gallery-images/Yii Project.jpg', '2019-10-06 03:32:50', '2019-10-06 03:32:50'),
(5, 1, 39, 'PHPixie Poject', '<p>PHPixie&nbsp;Project Description</p>', 'gallery-images/PHPixie Poject.png', '2019-10-06 03:36:26', '2019-10-06 03:36:26'),
(6, 1, 39, 'Zend Project', '<p>Zend&nbsp;Project Description</p>', 'gallery-images/Zend Project.png', '2019-10-06 03:38:33', '2019-10-06 03:38:33'),
(7, 1, 39, 'Phalcon Project', '<p>Phalcon&nbsp;Project Description</p>', 'gallery-images/Phalcon Project.png', '2019-10-06 03:41:42', '2019-10-06 03:41:42'),
(8, 1, 43, 'Vue Project', '<p>Vue Framework Web Design Project</p>', 'gallery-images/Vue Project.jpg', '2019-10-06 03:51:10', '2019-10-06 03:53:30'),
(9, 1, 43, 'React Project', '<p>React&nbsp;Framework Web Design Project</p>', 'gallery-images/React Project.png', '2019-10-06 03:54:33', '2019-10-06 03:54:33'),
(10, 1, 43, 'Angular Project', '<p>Vue Framework Web Design Project</p>', 'gallery-images/Angular Project.jpg', '2019-10-06 03:55:31', '2019-10-06 03:55:31'),
(11, 1, 43, 'Bootstrap Project', '<p>Bootstrap&nbsp;Framework Web Design Project</p>', 'gallery-images/Bootstrap Project.jpg', '2019-10-06 03:58:32', '2019-10-06 03:58:32'),
(12, 1, 43, 'Foundation Project', '<p>Foundation&nbsp;Framework Web Design Project</h2>', 'gallery-images/Foundation Project.png', '2019-10-06 04:01:26', '2019-10-06 04:07:18'),
(13, 1, 43, 'Bulma Project', '<p>Bulma&nbsp;Framework Web Design Project</h2>', 'gallery-images/Bulma Project.png', '2019-10-06 04:06:12', '2019-10-06 04:07:36'),
(14, 1, 43, 'UIkit Project', '<p>UIkit&nbsp;Bootstrap&nbsp;Framework Web Design Project</p>', 'gallery-images/UIkit Project.jpg', '2019-10-06 04:45:38', '2019-10-06 04:45:38'),
(15, 1, 43, 'Semantic UI Project', '<p>Semantic UI&nbsp;Framework Web Design Project</p>', 'gallery-images/Semantic UI Project.png', '2019-10-06 04:47:16', '2019-10-06 04:47:16'),
(17, 1, 43, 'Materialize Project', '<p>Materialize&nbsp;Bootstrap&nbsp;Framework Web Design Project</p>', 'gallery-images/Materialize Project.png', '2019-10-06 04:52:56', '2019-10-06 04:52:56'),
(19, 1, 43, 'Milligram Project', '<p>Milligram Framework Web Design Project</p>', 'gallery-images/Milligram Project.jpg', '2019-10-06 04:57:42', '2019-10-06 05:12:30'),
(20, 1, 42, 'WordPress Project One', '<p>WordPress Project One Description</p>', 'gallery-images/WordPress Project One.jpg', '2019-10-06 05:13:28', '2019-10-06 05:13:28'),
(21, 1, 42, 'WordPress Project Two', '<p>WordPress Project Two Description</p>', 'gallery-images/WordPress Project Two.jpg', '2019-10-06 05:14:15', '2019-10-06 05:14:15'),
(22, 1, 42, 'WordPress Project Three', '<p>WordPress Project Three Description</p>', 'gallery-images/WordPress Project Three.jpg', '2019-10-06 05:14:49', '2019-10-06 05:14:49'),
(23, 1, 42, 'WordPress Project Four', '<p>WordPress Project Four&nbsp;Description</p>', 'gallery-images/WordPress Project Four.jpg', '2019-10-06 05:15:43', '2019-10-06 05:15:43'),
(24, 1, 42, 'WordPress Project Five', '<p>WordPress Project Five&nbsp;Description</p>', 'gallery-images/WordPress Project Five.png', '2019-10-06 05:17:33', '2019-10-06 05:17:33'),
(25, 1, 42, 'WordPress Project Six', '<p>WordPress Project Six Description</p>', 'gallery-images/WordPress Project Six.jpg', '2019-10-06 05:18:16', '2019-10-06 05:18:16'),
(26, 1, 40, 'Laravel Project One', '<p>Laravel Project One&nbsp;Description</p>', 'gallery-images/Laravel Project One.png', '2019-10-06 06:24:08', '2019-10-06 06:24:08'),
(27, 1, 40, 'Laravel Project Two', '<p>Laravel Project Two Description</p>', 'gallery-images/Laravel Project Two.jpg', '2019-10-06 06:25:12', '2019-10-06 06:25:12'),
(28, 1, 40, 'Laravel Project Three', '<p>Laravel Project Three Description</p>', 'gallery-images/Laravel Project Three.png', '2019-10-06 06:25:45', '2019-10-06 06:25:45'),
(29, 1, 40, 'Laravel Project Four', '<p>Laravel Project Four Description</p>', 'gallery-images/Laravel Project Four.jpg', '2019-10-06 06:26:21', '2019-10-06 06:26:21'),
(30, 1, 40, 'Laravel Project Five', '<p>Laravel Project Five Description</p>', 'gallery-images/Laravel Project Five.jpg', '2019-10-06 06:26:55', '2019-10-06 06:26:55'),
(31, 1, 40, 'Laravel Project Six', '<p>Laravel Project Six Description</p>', 'gallery-images/Laravel Project Six.jpg', '2019-10-06 06:28:02', '2019-10-06 06:28:02'),
(32, 1, 40, 'Laravel Project Seven', '<p>Laravel Project Seven Description</p>', 'gallery-images/Laravel Project Seven.jpg', '2019-10-06 06:28:30', '2019-10-06 06:28:30'),
(40, 1, 41, 'CodeIgniter Project One', '<p>CodeIgniter Project One Description</p>', 'gallery-images/CodeIgniter Project One.png', '2019-10-06 06:41:30', '2019-10-06 06:41:30'),
(41, 1, 41, 'CodeIgniter Project Two', '<p>CodeIgniter Project Two Description</p>', 'gallery-images/CodeIgniter Project Two.png', '2019-10-06 06:41:57', '2019-10-06 06:41:57'),
(42, 1, 41, 'CodeIgniter Project Three', '<p>CodeIgniter Project Three Description</p>', 'gallery-images/CodeIgniter Project Three.png', '2019-10-06 06:42:21', '2019-10-06 06:42:21'),
(43, 1, 44, 'Drupal Project One', '<p>Drupal Project One&nbsp;Description</p>', 'gallery-images/Drupal Project One.png', '2019-10-06 06:47:05', '2019-10-06 06:47:05'),
(44, 1, 44, 'Drupal Project Two', '<p>Drupal Project Two Description</p>', 'gallery-images/Drupal Project Two.png', '2019-10-06 06:47:34', '2019-10-06 06:47:34'),
(45, 1, 44, 'Drupal Project Three', '<p>Drupal Project Three Description</p>', 'gallery-images/Drupal Project Three.jpg', '2019-10-06 06:47:59', '2019-10-06 06:47:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Basic Portfolio', 'basic@portfolio.com', NULL, '$2y$10$IdR1e9.tYYUl4WPvve8CWOMOfcYVBr9QG0XTGfIrjWrpKWTPqK6GG', NULL, '2019-09-27 23:21:18', '2019-09-27 23:21:18'),
(2, 'Portfolio Basic', 'portfolio@basic.com', NULL, '$2y$10$hqSh6pbqz7RMgyPbNmclvOwKQ0T8qwTGk6d9OxKD4MJRkTWruTqFa', NULL, '2019-09-28 08:34:56', '2019-09-28 08:34:56');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
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
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
