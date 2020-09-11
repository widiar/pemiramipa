-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2020 at 06:09 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `presma`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `udahVoting` smallint(6) NOT NULL DEFAULT 0,
  `waktuVoting` smallint(6) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `prodi`, `ktm`, `udahVoting`, `waktuVoting`, `created_at`, `updated_at`) VALUES
(1, '1808561010', 'Ari Widiarsana', 'Informatika', '5f44a2cda7c4d.jpeg', 0, 1, '2020-08-25 05:34:05', '2020-08-25 05:34:05'),
(6, '1808561011', 'aku', 'Fisika', '5f4500fb2accc.png', 1, 2, '2020-08-25 12:15:55', '2020-08-30 02:31:55'),
(7, '1234567890', 'Hotel Mawar', 'Informatika', '5f469a5ec44c6.jpeg', 0, 1, '2020-08-26 17:22:38', '2020-08-30 02:37:39'),
(8, '1808561012', 'Ari', 'Informatika', '5f4b0fd395544.jpeg', 0, 1, '2020-08-30 02:32:51', '2020-08-30 02:32:51'),
(9, '1808561015', 'Lina', 'Fisika', '5f4b10448ed6d.png', 0, 2, '2020-08-30 02:34:44', '2020-08-30 02:38:56');

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
(1, '2020_07_25_032958_create_mahasiswa_table', 1),
(2, '2020_08_01_164219_create_tokenusers_table', 1),
(3, '2020_08_24_223423_create_users_table', 1),
(4, '2020_08_25_215127_create_voting_table', 2),
(6, '2020_08_25_224834_add_udah_voting_and_waktu_voting_to_mahasiswa_tables', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tokenusers`
--

CREATE TABLE `tokenusers` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `verif` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nim`, `email`, `password`, `role`, `verif`, `created_at`, `updated_at`) VALUES
(1, '1808561010', 'admin@admin.com', '$2y$10$zQbqYNCJD7nYjZIjPcwRs.UHIYG4JNlb.u3c.3y02fUx1CEJ5FqoG', 1, 1, '2020-08-25 05:34:05', '2020-08-25 13:29:16'),
(6, '1808561011', 'widiarsanaari8@gmail.com', '$2y$10$MoA8Mq8W8ryFzfmY8ag3dOL7B1jgaHcYmCwmHR.wLd8r3UuQyZm8S', 0, 1, '2020-08-25 12:15:55', '2020-08-26 17:19:46'),
(7, '1234567890', 'disana@as.com', '$2y$10$nMIAMaHEitZN/JWZFTasZObHWgNENf7zA6mWanSuhyoNQ.jEnj6q6', 0, 1, '2020-08-26 17:22:38', '2020-08-26 17:23:24'),
(8, '1808561012', 'ari@gmail.com', '$2y$10$CEZhKPa/IE67zSn018BD/ewe7Ap2jp0OBAUcaZjB4hoq4WCDzb72m', 0, 0, '2020-08-30 02:32:51', '2020-08-30 02:32:51'),
(9, '1808561015', 'lina@gmail.com', '$2y$10$BMFasNehM417CQsSabbExOf8TJcQxMzX5rslRIORTwMVYuMqC30ky', 0, 0, '2020-08-30 02:34:44', '2020-08-30 02:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE `voting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bem1` int(11) NOT NULL DEFAULT 0,
  `bem2` int(11) NOT NULL DEFAULT 0,
  `matik1` int(11) NOT NULL DEFAULT 0,
  `matik2` int(11) NOT NULL DEFAULT 0,
  `fisika1` int(11) NOT NULL DEFAULT 0,
  `fisika2` int(11) NOT NULL DEFAULT 0,
  `bio1` int(11) NOT NULL DEFAULT 0,
  `bio2` int(11) NOT NULL DEFAULT 0,
  `ilkom1` int(11) NOT NULL DEFAULT 0,
  `ilkom2` int(11) NOT NULL DEFAULT 0,
  `farmasi1` int(11) NOT NULL DEFAULT 0,
  `farmasi2` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `voting`
--

INSERT INTO `voting` (`id`, `bem1`, `bem2`, `matik1`, `matik2`, `fisika1`, `fisika2`, `bio1`, `bio2`, `ilkom1`, `ilkom2`, `farmasi1`, `farmasi2`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2020-08-25 14:57:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokenusers`
--
ALTER TABLE `tokenusers`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voting`
--
ALTER TABLE `voting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `voting`
--
ALTER TABLE `voting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
