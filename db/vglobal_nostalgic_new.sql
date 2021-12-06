-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2021 at 07:36 AM
-- Server version: 10.2.41-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `music_categories_id` bigint(20) NOT NULL,
  `description` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `artist_pic`, `artist_name`, `music_categories_id`, `description`, `created_at`, `updated_at`) VALUES
(2, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/Cecil-Jones-Photo2.JPG', 'Cecil Jones', 5, 'Cecil Eugene Jones Jr. was born in Chicago, Illinois on June 16, 1991. He is an Actor, Singer, Songwriter, and Model.\r\n\r\nHe grew up singing in church since he was the age of 5. His grandmother, Carolyn Bennett, is the main influence as to why he loves performing. \r\n\r\nShe saw in him as a toddler how much love and passion he had for entertainment. She encouraged, told him, and still tells him every day that he is “the best” at whatever he does and he always believed that.\r\n\r\nShe entered her grandson in every talent show and venue that she heard about that would get her grandson exposure. She was consistent in doing this throughout his high school years.\r\n\r\nIn 2010, he attended and graduated in 2014 from Manley Career Academy High School. At Manley, he graduated in the top of his class with a 3.5 GPA. \r\n                                        After Manley, He enrolled at Luther College in Decorah, Iowa where he furthered his education in communications, and performed in a number of talent shows and night clubs making a name for himself. Wanting to follow his dreams of being an entertainer, he took time off of school to pursue those dreams. His latest works are short films Sunshine Day written by April Tylon and directed by Lawrence Lee Wallace and Fortunate written and directed by Darryl Kimbrough. He also has a background in theater in which he performed all at The Black Ensemble Theater in plays “Howl in Wolf” as Young Wolf, It’s alright to have a good time: The story of Curtis May field as Young Curtis, and Chicago’s Golden Soul As Curtis Mayfield. \r\n                                        He electrified the stage night after night with his acting and singing ability. Now that Cecil has experience performing in front of 300 plus people every night. He looks to take his gifts and talents that God has blessed him with a step further.\r\n                                        Currently auditioning for television series and more movies. Now with the opportunity and motivation that he has in becoming a major recording artist and acting on the big screen, his potential for greatness is limitless.', NULL, NULL),
(3, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/2 (1).jpg', 'Mike Jones', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n                Architecto atque aut blanditiis consectetur', '2021-06-05 06:59:49', '2021-06-05 06:59:49'),
(4, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/u7.jpg', 'JXXIII', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n                Architecto atque aut blanditiis consectetur', '2021-06-05 06:59:49', '2021-06-05 06:59:49'),
(5, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/u4.jpg', 'Nyce Jewel Avery', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicin...', NULL, NULL),
(6, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/u5.jpg', '', 6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n                Architecto atque aut blanditiis consectetur', '2021-06-05 06:59:49', '2021-06-05 06:59:49'),
(10, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/u4.jpg', 'Jamaal Marvel', 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\r\n                Architecto atque aut blanditiis consectetur', NULL, NULL),
(11, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/u5.jpg', 'Sydney Jules', 4, NULL, NULL, NULL);

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
(1, 'rock', '2021-06-05 06:59:48', '2021-06-05 06:59:48'),
(2, 'classic', '2021-06-05 06:59:48', '2021-06-05 06:59:48'),
(3, 'jazz', '2021-06-05 06:59:48', '2021-06-05 06:59:48'),
(4, 'hip hop', '2021-06-05 06:59:48', '2021-06-05 06:59:48'),
(5, 'pop', '2021-06-05 06:59:48', '2021-06-05 06:59:48');

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
(1, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/current-state-art.jpeg', 'Current State Art', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Dont-Judge-Me-feat.-James-Worthy.mp3', '00:03:04', 4, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\n                Architecto atque aut blanditiis consectetur', '2021-06-07 02:50:56', '2021-06-07 02:50:56'),
(2, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/Cecil-Validity-Album-Cover.png', 'Blind-Listen', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Blind-Listen-Track1.mp3', '03:07:00', 11, 2, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto atque aut blanditiis consectetur', '2021-08-13 17:41:35', '2021-08-13 17:41:53'),
(3, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/Cecil-Validity-Album-Cover.png', 'Face-The-Truth-Listen2', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Face-The-Truth-Listen2-Track2.mp3', '03:51:00', 11, 2, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto atque aut blanditiis consectetur', '2021-08-13 17:41:45', '2021-08-13 17:42:00'),
(4, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/Cecil-Validity-Album-Cover.png', 'Give It To Me', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Give-It-To-Me_Track6.mp3', '03:09:00', 11, 2, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto atque aut blanditiis consectetur', '2021-08-13 17:41:49', '2021-08-13 17:42:06'),
(5, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/Cecil-Validity-Album-Cover.png', 'Have No Fear Listen', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Have-No-Fear-Listen_Track6A.mp3', '01:51:00', 11, 2, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto atque aut blanditiis consectetur', '2021-08-13 17:42:19', '2021-08-13 17:42:19'),
(6, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/Cecil-Validity-Album-Cover.png', 'Hell Of A Night', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Hell-Of-A-Night-Track4.mp3', '03:56:00', 11, 2, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto atque aut blanditiis consectetur', '2021-08-13 17:43:45', '2021-08-13 17:43:45'),
(7, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/Cecil-Validity-Album-Cover.png', 'Jealousy Listen', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Jealousy-Listen-Track3.mp3', '03:23:00', 11, 2, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto atque aut blanditiis consectetur', '2021-08-13 17:45:11', '2021-08-13 17:45:11'),
(8, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/Cecil-Validity-Album-Cover.png', 'Masterpiece', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Masterpiece_Track9.mp3', '02:23:00', 11, 2, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto atque aut blanditiis consectetur', '2021-08-13 17:47:13', '2021-08-13 17:47:13'),
(9, 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/Cecil-Validity-Album-Cover.png', 'Measures', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/MeasuresMSTR6721_Track10.mp3', '03:07:00', 11, 2, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto atque aut blanditiis consectetur', '2021-08-13 17:49:43', '2021-08-13 17:49:43'),
(10, '', 'Current State', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Jxxiii - Current State .mp3', '02:22:00', 1, 4, 3, NULL, '2021-08-20 13:42:04', '2021-08-20 13:42:04'),
(11, '', 'Go', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Jxxiii - Go .mp3', '01:38:00', 1, 4, 3, NULL, '2021-08-20 13:43:58', '2021-08-20 13:43:58'),
(12, '', 'In Due Time', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Jxxiii - In Due Time.mp3', '03:39:00', 1, 4, 3, NULL, '2021-08-20 13:43:58', '2021-08-20 13:43:58'),
(13, '', 'On My Vegan', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Jxxiii - On My Vegan.mp3', '02:48:00', 1, 4, 3, NULL, '2021-08-20 13:46:51', '2021-08-20 13:46:51'),
(14, '', 'Right Around', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Jxxiii - Right Around.mp3', '03:23:00', 1, 4, 3, NULL, '2021-08-20 13:46:51', '2021-08-20 13:46:51'),
(15, '', 'Sucker', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Music/Sucker.mp3', '03:54:00', 2, 10, 4, NULL, '2021-08-20 13:56:30', '2021-08-20 13:56:30'),
(16, '', 'Mastered', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/Sydney Vintage Mastered_1.mp3', '02:27:00', 3, 11, 4, NULL, '2021-08-20 13:58:23', '2021-08-20 13:58:23'),
(17, '', 'Feel The Vibes', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/FEEL THE VIBES NEW.mp3', '04:09:00', 5, 5, 3, NULL, '2021-08-20 14:04:55', '2021-08-20 14:04:55'),
(18, '', 'Beautiful', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/1 Crisis - Beautiful (finalfinal).mp3', '03:12:00', 7, 8, 7, NULL, '2021-08-20 14:06:33', '2021-08-20 14:06:33'),
(19, '', 'What we doing', 'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/What we doing NYCE ft Avery.mp3', '03:20:00', 8, 5, 3, NULL, '2021-08-20 14:09:33', '2021-08-20 14:09:33');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
