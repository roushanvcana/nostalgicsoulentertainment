-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 06:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vglobal_nostalgic_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `album_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `album_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artists_id` bigint(20) NOT NULL,
  `music_categories_id` bigint(20) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `album_pic`, `album_name`, `artists_id`, `music_categories_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/CURRENT STATE ART.jpeg', 'Current State Art', 4, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n                Architecto atque aut blanditiis consectetur', '2021-06-05 06:59:50', '2021-06-05 06:59:50'),
(2, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/Sucker.jpg', 'Sucker', 10, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n                Architecto atque aut blanditiis consectetur', '2021-06-05 06:59:50', '2021-06-05 06:59:50'),
(3, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/Vintage1.jpg', 'Vintage', 11, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n                Architecto atque aut blanditiis consectetur', '2021-06-05 06:59:50', '2021-06-05 06:59:50'),
(5, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/feel-da-vibes.png', 'Feel Da Vibes', 5, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n                Architecto atque aut blanditiis consectetur', '2021-06-05 06:59:50', '2021-06-05 06:59:50'),
(7, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/crisis.jpeg', 'Beautiful', 8, 7, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n                Architecto atque aut blanditiis consectetur', '2021-06-05 06:59:50', '2021-06-05 06:59:50'),
(8, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/what-we-doing.png', 'What we Doing', 5, 6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n                Architecto atque aut blanditiis consectetur', '2021-06-05 06:59:50', '2021-06-05 06:59:50'),
(11, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/Cecil-Validity-Album-Cover.png', 'Validity', 2, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicin...', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `artist_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `music_categories_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `artist_pic`, `artist_name`, `music_categories_id`, `description`, `created_at`, `updated_at`) VALUES
(2, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/Cecil-Jones-Photo2.JPG', 'Cecil Jones', '5', 'Cecil Eugene Jones Jr. was born in Chicago, Illinois on June 16, 1991.', NULL, NULL),
(4, '', 'Sydney Jules', '4', NULL, '2021-06-05 06:59:49', '2021-12-14 01:58:49'),
(10, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/u4.jpg', 'Jamaal Marvel', '4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', NULL, NULL),
(11, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/u5.jpg', 'Sydney Jules', '4', NULL, NULL, NULL),
(12, '', 'ce', '3', 'dcsesdfe', '2021-12-13 04:00:38', '2021-12-13 04:00:38'),
(13, '', 'abcd', '4', 'new-album', '2021-12-13 06:03:46', '2021-12-13 06:03:46'),
(14, '', 'Sydney Jules', '2', 'Musician', '2021-12-14 02:05:58', '2021-12-14 02:05:58'),
(15, '', 'Cecil Jones', '5', 'ghftyfygy', '2021-12-14 02:08:09', '2021-12-14 02:08:09'),
(16, '', 'defertdd', '1', NULL, '2021-12-14 03:42:00', '2021-12-14 03:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2021_06_03_102058_create_artists_table', 1),
(12, '2021_06_03_105337_create_albums_table', 1),
(13, '2021_06_03_110325_create_tracks_table', 1),
(14, '2021_06_03_110617_create_music_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `music_categories`
--

CREATE TABLE `music_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `music_categories`
--

INSERT INTO `music_categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(3, 'jazz', '2021-06-05 06:59:48', '2021-06-05 06:59:48'),
(4, 'hip hop', '2021-06-05 06:59:48', '2021-06-05 06:59:48'),
(5, 'pop', '2021-06-05 06:59:48', '2021-06-05 06:59:48'),
(6, 'soulful', '2021-12-14 06:04:27', '2021-12-14 06:04:27'),
(8, 'slowmo', '2021-12-14 06:09:33', '2021-12-14 06:09:33'),
(9, 'classic', '2021-12-14 06:42:11', '2021-12-14 06:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE `tracks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `track_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `track_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `track` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `track_time` time NOT NULL,
  `albums_id` bigint(20) NOT NULL,
  `artists_id` bigint(20) NOT NULL,
  `music_categories_id` bigint(20) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tracks`
--

INSERT INTO `tracks` (`id`, `track_pic`, `track_name`, `track`, `track_time`, `albums_id`, `artists_id`, `music_categories_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/current-state-art.jpeg', 'Current State Art', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Dont-Judge-Me-feat.-James-Worthy.mp3', '00:03:04', 4, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n        ', '2021-06-07 02:50:56', '2021-06-07 02:50:56'),
(2, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/Cecil-Validity-Album-Cover.png', 'Blind-Listen', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Blind-Listen-Track1.mp3', '03:07:00', 11, 2, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n        ', '2021-08-13 17:41:35', '2021-08-13 17:41:53'),
(3, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/Cecil-Validity-Album-Cover.png', 'Face-The-Truth-Listen2', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Face-The-Truth-Listen2-Track2.mp3', '03:51:00', 11, 2, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n        ', '2021-08-13 17:41:45', '2021-08-13 17:42:00'),
(4, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/Cecil-Validity-Album-Cover.png', 'Give It To Me', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Give-It-To-Me_Track6.mp3', '03:09:00', 11, 2, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n        ', '2021-08-13 17:41:49', '2021-08-13 17:42:06'),
(5, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/Cecil-Validity-Album-Cover.png', 'Have No Fear Listen', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Have-No-Fear-Listen_Track6A.mp3', '01:51:00', 11, 2, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n        ', '2021-08-13 17:42:19', '2021-08-13 17:42:19'),
(6, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/Cecil-Validity-Album-Cover.png', 'Hell Of A Night', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Hell-Of-A-Night-Track4.mp3', '03:56:00', 11, 2, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n        ', '2021-08-13 17:43:45', '2021-08-13 17:43:45'),
(7, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/Cecil-Validity-Album-Cover.png', 'Jealousy Listen', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Jealousy-Listen-Track3.mp3', '03:23:00', 11, 2, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n        ', '2021-08-13 17:45:11', '2021-08-13 17:45:11'),
(8, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/Cecil-Validity-Album-Cover.png', 'Masterpiece', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Masterpiece_Track9.mp3', '02:23:00', 11, 2, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n        ', '2021-08-13 17:47:13', '2021-08-13 17:47:13'),
(9, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/Cecil-Validity-Album-Cover.png', 'Measures', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/MeasuresMSTR6721_Track10.mp3', '03:07:00', 11, 2, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n        ', '2021-08-13 17:49:43', '2021-08-13 17:49:43'),
(10, '', 'Current State', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Jxxiii - Current State .mp3', '02:22:00', 1, 4, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n        ', '2021-08-20 13:42:04', '2021-08-20 13:42:04'),
(11, '', 'Go', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Jxxiii - Go .mp3', '01:38:00', 1, 4, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n        ', '2021-08-20 13:43:58', '2021-08-20 13:43:58'),
(12, '', 'In Due Time', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Jxxiii - In Due Time.mp3', '03:39:00', 1, 4, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n        ', '2021-08-20 13:43:58', '2021-08-20 13:43:58'),
(13, '', 'On My Vegan', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Jxxiii - On My Vegan.mp3', '02:48:00', 1, 4, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n        ', '2021-08-20 13:46:51', '2021-08-20 13:46:51'),
(14, '', 'Right Around', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Jxxiii - Right Around.mp3', '03:23:00', 1, 4, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n        ', '2021-08-20 13:46:51', '2021-08-20 13:46:51'),
(15, '', 'Sucker', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Sucker.mp3', '03:54:00', 2, 10, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n        ', '2021-08-20 13:56:30', '2021-08-20 13:56:30'),
(16, '', 'Mastered', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/Sydney Vintage Mastered_1.mp3', '02:27:00', 3, 11, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n        ', '2021-08-20 13:58:23', '2021-08-20 13:58:23'),
(17, '', 'Feel The Vibes', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/FEEL THE VIBES NEW.mp3', '04:09:00', 5, 5, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n        ', '2021-08-20 14:04:55', '2021-08-20 14:04:55'),
(18, '', 'Beautiful', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/1 Crisis - Beautiful (finalfinal).mp3', '03:12:00', 7, 8, 7, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n        ', '2021-08-20 14:06:33', '2021-08-20 14:06:33'),
(19, '', 'What we doing', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/What we doing NYCE ft Avery.mp3', '03:20:00', 8, 5, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n        ', '2021-08-20 14:09:33', '2021-08-20 14:09:33');

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
  `is_admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Corrine Koss', 'eleanore88@example.net', '2021-06-05 06:59:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'LjoHe6eexgMfd5Y6JbDOceHP4qeRTLYxj5jkoEI8toAHxic0qei0Nb6JiL92', '2021-06-05 06:59:47', '2021-06-05 06:59:47'),
(2, 'Dr. Vivien Kautzer', 'drunolfsson@example.net', '2021-06-05 06:59:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'VGG7WCLCzNY1pqFdzsq3ntAiVWeCovQ63yCdapU8NLOPcdwDaYeXZJoQvDKj', '2021-06-05 06:59:47', '2021-06-05 06:59:47'),
(3, 'Pierre Ryan', 'wilma44@example.org', '2021-06-05 06:59:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'Jkya5sMQNl', '2021-06-05 06:59:47', '2021-06-05 06:59:47'),
(4, 'Jairo Hermiston', 'bfay@example.org', '2021-06-05 06:59:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'nqCVZsuL2N', '2021-06-05 06:59:47', '2021-06-05 06:59:47'),
(5, 'Dr. Marielle Botsford', 'vilma.carroll@example.org', '2021-06-05 06:59:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'w17R3sZzKD', '2021-06-05 06:59:47', '2021-06-05 06:59:47'),
(6, 'Ms. Ethelyn Schowalter', 'gerhold.colin@example.org', '2021-06-05 06:59:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'TnoEArgOzO', '2021-06-05 06:59:47', '2021-06-05 06:59:47'),
(7, 'Eugene Johns', 'kamille.lynch@example.net', '2021-06-05 06:59:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'VpsqT9uxvJ', '2021-06-05 06:59:48', '2021-06-05 06:59:48'),
(8, 'Leta Gaylord', 'shaina21@example.org', '2021-06-05 06:59:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'peyJbyMvSv', '2021-06-05 06:59:48', '2021-06-05 06:59:48'),
(9, 'Mr. Sylvester Harvey', 'qpacocha@example.org', '2021-06-05 06:59:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'VULdUxkrrW', '2021-06-05 06:59:48', '2021-06-05 06:59:48'),
(10, 'Regan Flatley', 'adella.hammes@example.org', '2021-06-05 06:59:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'gk5PTuRePf', '2021-06-05 06:59:48', '2021-06-05 06:59:48'),
(11, 'Jaspreet Singh', 'developwithjaspreet@gmail.com', NULL, '$2y$10$VN6.SGteXQh/3lQq7F1zY.devqH.cjB9ByOKqOJW8Oj2Rm0AU3Kwm', NULL, NULL, '2021-08-17 16:30:32', '2021-08-17 16:30:32'),
(12, 'Roushan', 'roushan@vcanaglobal.com', NULL, '$2y$10$3pyGy7db4Jp/tR5FFhrqTuPvypBn0of9uiv.E2M2Lw6Vb658.2ZX6', 1, NULL, '2021-12-02 13:17:45', '2021-12-02 13:17:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
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
-- Indexes for table `music_categories`
--
ALTER TABLE `music_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tracks`
--
ALTER TABLE `tracks`
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
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `music_categories`
--
ALTER TABLE `music_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
