-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 29, 2019 at 11:41 AM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trivia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super@admin.com', '$2y$04$xjUrUueX1ZrTGffLOvR4RuepA3JbmdmDItQXgx2BbDx5GJF4YkNHO', 1, 'sxPBQ1kOLB', '2019-06-28 12:42:14', '2019-06-28 12:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE IF NOT EXISTS `admin_role` (
  `id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `admin_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`id`, `role_id`, `admin_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(10) unsigned NOT NULL,
  `answer1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answer1`, `answer2`, `answer3`, `question_id`, `category_id`, `created_at`, `updated_at`) VALUES
(5, 'Personal Home Page', 'Hypertext Preprocessor', 'Pretext Hypertext Processor', 5, 1, '2019-06-28 21:38:44', '2019-06-28 21:38:44'),
(6, '.html', '.xml', '.php', 6, 1, '2019-06-28 21:39:29', '2019-06-28 21:39:29'),
(7, 'Notepad', 'Notepad++', 'Adobe Dreamweaver', 7, 1, '2019-06-28 21:40:25', '2019-06-28 21:40:25'),
(8, 'Cyper Security', 'Apache and PHP', 'Adobe Dreamweaver', 8, 1, '2019-06-28 21:41:59', '2019-06-28 21:41:59'),
(9, 'PHP 5 and later', 'PHP 5 only', 'PHP 4', 9, 1, '2019-06-28 21:42:51', '2019-06-28 21:42:51'),
(10, 'if statements', 'if-else statements', 'Both', 10, 1, '2019-06-28 21:44:13', '2019-06-28 21:44:13'),
(11, 'Action', 'Method', 'url', 11, 2, '2019-06-28 21:45:24', '2019-06-28 21:45:24'),
(12, 'SGML', 'SGMD', 'SGMT', 12, 2, '2019-06-28 21:46:15', '2019-06-28 21:46:15'),
(13, 'TITLE Tag', 'HEAD Tag', 'HTML Tag', 13, 2, '2019-06-28 21:48:29', '2019-06-28 21:48:29'),
(14, 'HTML File', 'Output Files', 'Input Files', 14, 2, '2019-06-28 21:49:20', '2019-06-28 21:49:20'),
(15, 'Title', 'Tooltip', 'Dir', 15, 2, '2019-06-28 21:50:29', '2019-06-28 21:50:29'),
(16, 'Scripting Language', 'Markup Language', 'Programming Language', 16, 2, '2019-06-28 21:51:55', '2019-06-28 21:51:55'),
(17, 'Id', 'text', 'classD', 17, 3, '2019-06-28 21:52:59', '2019-06-28 21:52:59'),
(18, 'margin', 'clear', 'float', 18, 3, '2019-06-28 21:53:49', '2019-06-28 21:53:49'),
(19, 's-index', 'd-index', 'z-index', 19, 3, '2019-06-28 21:54:21', '2019-06-28 21:54:21'),
(20, 'float', 'push', 'align', 20, 3, '2019-06-28 21:54:59', '2019-06-28 21:54:59'),
(21, 'pointer', 'default', 'arrow', 21, 3, '2019-06-28 21:55:43', '2019-06-28 21:55:43'),
(22, 'absolute', 'relative', 'fixed', 22, 3, '2019-06-28 21:56:51', '2019-06-28 21:56:51'),
(23, 'providing different icons', 'graphic images', 'Slideshow', 23, 4, '2019-06-28 21:58:13', '2019-06-28 21:58:13'),
(24, 'Fixed layout', 'Fluid layout', 'None of the above', 24, 4, '2019-06-28 21:58:50', '2019-06-28 21:58:50'),
(25, 'modal', 'window', 'dialog Box', 25, 4, '2019-06-28 21:59:39', '2019-06-28 21:59:39'),
(26, 'To create a Form', 'Full width container', 'Fixed width container', 26, 4, '2019-06-28 22:00:20', '2019-06-28 22:00:20'),
(27, 'scrollspy', 'slideshow', 'carousel', 27, 4, '2019-06-28 22:01:09', '2019-06-28 22:01:09'),
(28, 'phones', 'desktop', 'tablets', 28, 4, '2019-06-28 22:01:51', '2019-06-28 22:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PHP', 'PHP is a widely-used open source general-purpose scripting language', '1561738578thumnnail.jpg', '2019-06-28 13:16:18', '2019-06-28 14:18:59'),
(2, 'HTML', 'HTML is the standard markup language for creating Web pages.', '1561738709thumnnail.jpg', '2019-06-28 13:18:29', '2019-06-28 14:19:21'),
(3, 'CSS', 'Cascading Style Sheets is a language used for describing the presentation of HTML', '1561738736thumnnail.jpg', '2019-06-28 13:18:56', '2019-06-28 14:20:02'),
(4, 'Bootstrap', 'Bootstrap is a free and open-source framework for creating websites and web applications.', '1561738876thumnnail.jpg', '2019-06-28 13:21:16', '2019-06-28 14:20:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_03_06_023521_create_admins_table', 1),
(4, '2017_03_06_053834_create_admin_role_table', 1),
(5, '2018_03_06_023523_create_roles_table', 1),
(6, '2019_06_25_152616_create_categories_table', 1),
(7, '2019_06_26_142110_create_questions_table', 1),
(8, '2019_06_26_142115_create_answers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(10) unsigned NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rightAnswer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requiredTimeInSec` int(11) NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `rightAnswer`, `requiredTimeInSec`, `category_id`, `created_at`, `updated_at`) VALUES
(5, 'What does PHP stand for?', 'answer2', 30, 1, '2019-06-28 21:38:43', '2019-06-28 21:38:43'),
(6, 'PHP files have a default file extension of_______', 'answer3', 60, 1, '2019-06-28 21:39:29', '2019-06-28 21:39:29'),
(7, 'Which of the following is/are a PHP code editor?', 'answer2', 30, 1, '2019-06-28 21:40:25', '2019-06-28 21:40:25'),
(8, 'Which of the following must be installed on your computer so as to run PHP script?', 'answer2', 30, 1, '2019-06-28 21:41:59', '2019-06-28 21:41:59'),
(9, 'Which version of PHP introduced Try/catch Exception?', 'answer1', 30, 1, '2019-06-28 21:42:51', '2019-06-28 21:42:51'),
(10, 'Which of the conditional statements is/are supported by PHP?', 'answer3', 30, 1, '2019-06-28 21:44:13', '2019-06-28 21:44:13'),
(11, 'Which of following is not an attribute of <form> tag', 'answer3', 30, 2, '2019-06-28 21:45:24', '2019-06-28 21:45:24'),
(12, 'HTML Is A Subset Of', 'answer1', 30, 2, '2019-06-28 21:46:15', '2019-06-28 21:46:15'),
(13, 'The BODY Tag Is Usually Used In', 'answer3', 30, 2, '2019-06-28 21:48:29', '2019-06-28 21:48:29'),
(14, 'A Simple Text File Which Tells The Browser What To Cache Is Known As A ________.', 'answer1', 30, 2, '2019-06-28 21:49:20', '2019-06-28 21:49:20'),
(15, 'Which html attribute is used to provide an advisory text about an element or Its contents.', 'answer2', 30, 2, '2019-06-28 21:50:29', '2019-06-28 21:50:29'),
(16, 'HTML Is What Type Of Language ?', 'answer2', 30, 2, '2019-06-28 21:51:55', '2019-06-28 21:51:55'),
(17, 'If we want define style for an unique element, then which css selector will we use ?', 'answer1', 30, 3, '2019-06-28 21:52:59', '2019-06-28 21:52:59'),
(18, 'If we don''t want to allow a floating div to the left side of an element, which css property will we use ?', 'answer2', 30, 3, '2019-06-28 21:53:49', '2019-06-28 21:53:49'),
(19, 'Suppose we want to arragnge five nos. of DIVs so that DIV4 is placed above DIV1. Now, which css property will we use to control the order of stack?', 'answer3', 30, 3, '2019-06-28 21:54:21', '2019-06-28 21:54:21'),
(20, 'If we want to wrap a block of text around an image, which css property will we use ?', 'answer1', 30, 3, '2019-06-28 21:54:59', '2019-06-28 21:54:59'),
(21, 'If we want to show an Arrow as cursor, then which value we will use ?', 'answer2', 30, 3, '2019-06-28 21:55:43', '2019-06-28 21:55:43'),
(22, 'The default value of "position" attribute is _________.', 'answer2', 30, 3, '2019-06-28 21:56:51', '2019-06-28 21:56:51'),
(23, 'Glyphicons is mainly used for?', 'answer1', 50, 4, '2019-06-28 21:58:13', '2019-06-28 21:58:13'),
(24, 'What layout is used for providing 100% width in Bootstrap?', 'answer2', 30, 4, '2019-06-28 21:58:50', '2019-06-28 21:58:50'),
(25, 'Which plugin is used to create a modal window?', 'answer1', 30, 4, '2019-06-28 21:59:39', '2019-06-28 21:59:39'),
(26, 'The .container class provides', 'answer3', 30, 4, '2019-06-28 22:00:20', '2019-06-28 22:00:20'),
(27, 'Which plugin is used to cycle through elements, like a slideshow?', 'answer3', 30, 4, '2019-06-28 22:01:09', '2019-06-28 22:01:09'),
(28, 'The bootstrap class md means for', 'answer2', 30, 4, '2019-06-28 22:01:51', '2019-06-28 22:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'super', '2019-06-28 12:42:14', '2019-06-28 12:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` int(11) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `score`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ahmed', 'w2@gm.com', 0, NULL, '$2y$10$i2ZrbsppyBDfg1fODx/9H.3nM8k3NxY6UbJmnra9jJZna7jOC/gNS', NULL, '2019-06-28 14:04:50', '2019-06-28 14:04:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_role_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_question_id_foreign` (`question_id`),
  ADD KEY `answers_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_category_id_foreign` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD CONSTRAINT `admin_role_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
