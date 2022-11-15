-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2022 at 07:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan_kel1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `ID_BUKU` bigint(20) NOT NULL,
  `ID_KATEGORI` bigint(20) NOT NULL,
  `NAMA_BUKU` varchar(100) DEFAULT NULL,
  `DESKRIPSI_BUKU` varchar(1000) NOT NULL,
  `NAMA_PENERBIT` varchar(100) DEFAULT NULL,
  `TAHUN_TERBIT` varchar(20) DEFAULT NULL,
  `JUMLAH_BUKU` varchar(100) DEFAULT NULL,
  `files` varchar(255) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`ID_BUKU`, `ID_KATEGORI`, `NAMA_BUKU`, `DESKRIPSI_BUKU`, `NAMA_PENERBIT`, `TAHUN_TERBIT`, `JUMLAH_BUKU`, `files`, `updated`) VALUES
(46, 3, 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '2020', '19', '1668058433.png', '2022-11-15 06:23:48'),
(47, 3, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '2020', '10', '1668266582.png', '2022-11-15 06:22:29'),
(48, 4, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '2022', '5', '3748Screen Shot 2022-11-09 at 18.35.13.png', '2022-11-12 15:42:47'),
(49, 4, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '2022', '20', '5352Screen Shot 2022-11-09 at 18.35.13.png', '2022-11-12 15:45:40'),
(50, 3, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '2015', '20', '5061Screen Shot 2022-11-09 at 18.35.13.png', '2022-11-12 15:46:20'),
(51, 4, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '2019', '5', '7897Screen Shot 2022-11-09 at 18.35.13.png', '2022-11-12 15:47:06'),
(52, 5, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '2018', '4', '6254Screen Shot 2022-11-09 at 18.35.13.png', '2022-11-12 15:51:51'),
(53, 6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '2014', '1', '5522Screen Shot 2022-11-09 at 18.35.13.png', '2022-11-12 15:52:57'),
(54, 6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '2022', '20', '4218Screen Shot 2022-11-09 at 18.35.13.png', '2022-11-12 15:53:30'),
(55, 7, 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '2018', '20', '8477Screen Shot 2022-11-09 at 18.35.13.png', '2022-11-12 15:54:12'),
(56, 6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil aut ad tempore neque perspiciatis temporibus rem amet, veritatis magni. Excepturi perspiciatis aliquam dolor illum a corrupti nemo repellat vero aliquid!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '2018', '4', '3455Screen Shot 2022-11-09 at 18.35.13.png', '2022-11-12 15:54:46');

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
-- Table structure for table `header_transaksi`
--

CREATE TABLE `header_transaksi` (
  `id_header_transaksi` bigint(20) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jurusans`
--

CREATE TABLE `jurusans` (
  `ID_JURUSAN` bigint(20) NOT NULL,
  `NAMA_JURUSAN` varchar(85) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusans`
--

INSERT INTO `jurusans` (`ID_JURUSAN`, `NAMA_JURUSAN`) VALUES
(1, 'TEKNIK INFORMATIKA'),
(2, 'AKUNTASI'),
(3, 'TEKNIK KOMPUTER'),
(4, 'DATA SCIENCE'),
(5, 'TEKNIK SIPIL');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `ID_KATEGORI` bigint(20) NOT NULL,
  `KATEGORI` varchar(300) NOT NULL,
  `STOCK` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`ID_KATEGORI`, `KATEGORI`, `STOCK`) VALUES
(3, 'PROGRAMMING', 49),
(4, 'SCIENCE', 30),
(5, 'CYBER SECURITY', 4),
(6, 'DEVELOPMENT', 25),
(7, 'TECHNOLOGY', 20);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id_transaksi` bigint(20) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `id_buku` bigint(20) NOT NULL,
  `status` varchar(3) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id_transaksi`, `id_user`, `tanggal_pinjam`, `tanggal_pengembalian`, `id_buku`, `status`, `jumlah`, `created_at`, `updated_at`) VALUES
(21, 15, '2022-11-14', '2022-11-16', 46, '3', 1, '2022-11-14 09:34:58', '2022-11-14 11:52:50'),
(22, 15, '2022-11-14', '2022-11-17', 46, '3', 1, '2022-11-14 11:52:14', '2022-11-14 11:58:51'),
(23, 15, '2022-11-14', '2022-11-19', 47, '3', 1, '2022-11-14 12:12:21', '2022-11-14 23:22:27'),
(24, 16, '2022-10-15', '2022-10-17', 46, '3', 1, '2022-10-14 21:29:10', '2022-11-14 23:22:28'),
(25, 16, '2022-11-15', '2022-11-25', 47, '3', 1, '2022-11-14 23:17:31', '2022-11-14 23:22:29'),
(26, 15, '2022-11-15', '2022-11-17', 46, '3', 1, '2022-11-14 23:18:20', '2022-11-14 23:22:30'),
(27, 15, '2022-11-15', '2022-11-17', 46, '1', 1, '2022-11-14 23:23:48', '2022-11-14 23:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jurusan` bigint(20) NOT NULL,
  `nrp` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_jurusan`, `nrp`, `name`, `role`, `status`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 1, 1, 'Admin', 'admin', 'active', 'vikisahputra123@gmail.com', NULL, '$2y$10$7zCMaIX2pLt4H4.qgIsc5uGkg7FGyNb3YHOsUiI7xgZHvacbkIj.K', NULL, '2022-11-08 08:55:03', '2022-11-08 09:36:28'),
(15, 1, 12343, 'test', 'mahasiswa', 'active', 'test123@gmail.com', NULL, '$2y$10$wPFI2QSWtBH9GHFsBY./OO3JgXTwFV717qQLpM/hHDEVpPfSCZ99e', NULL, '2022-10-09 02:16:48', '2022-11-09 03:13:07'),
(16, 1, 12345, 'test', 'mahasiswa', 'active', 'test@gmail.com', NULL, '$2y$10$AkBuuBLNR.lsmWbbjrg4cehV9etqPdFhLvpNuF20dmXEM2PCQ1AX6', NULL, '2022-11-10 01:31:53', '2022-11-14 21:28:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`ID_BUKU`),
  ADD KEY `ID_KATEGORI` (`ID_KATEGORI`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
  ADD PRIMARY KEY (`id_header_transaksi`);

--
-- Indexes for table `jurusans`
--
ALTER TABLE `jurusans`
  ADD PRIMARY KEY (`ID_JURUSAN`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`ID_KATEGORI`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `ID_BUKU` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
  MODIFY `id_header_transaksi` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusans`
--
ALTER TABLE `jurusans`
  MODIFY `ID_JURUSAN` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `ID_KATEGORI` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id_transaksi` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bukus`
--
ALTER TABLE `bukus`
  ADD CONSTRAINT `bukus_ibfk_1` FOREIGN KEY (`ID_KATEGORI`) REFERENCES `kategoris` (`ID_KATEGORI`);

--
-- Constraints for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `transaksis_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transaksis_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `bukus` (`ID_BUKU`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusans` (`ID_JURUSAN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
