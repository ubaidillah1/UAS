-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 10:45 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `bagian_pg`
--

CREATE TABLE `bagian_pg` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_bagian_pg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bagian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bagian_pg`
--

INSERT INTO `bagian_pg` (`id`, `id_bagian_pg`, `nama_bagian`, `created_at`, `updated_at`) VALUES
(1, 'BGPG01', 'Apoteker', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'BGPG02', 'Asisten Apoteker', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'BGPG03', 'Seksi Pembelian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'BGPG04', 'Seksi Gudang', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'BGPG05', 'Seksi Penjualan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'BGPG06', 'Seksi Peracikan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'BGPG07', 'Seksi Tata Usaha', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL,
  `id_pegawai` varchar(255) DEFAULT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `id_obat` varchar(255) DEFAULT NULL,
  `nama_obat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `kategori_obat`
--

CREATE TABLE `kategori_obat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kgr_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_obat`
--

INSERT INTO `kategori_obat` (`id`, `id_kgr_obat`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'KTGR01', 'Obat Bebas Terbatas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'KTGR02', 'Obat Bebas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'KTGR03', 'Obat Keras', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'KTGR04', 'Obat Golongan Narkotika', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'KTGR05', 'Obat Psikotropika', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'KTGR06', 'Obat Herbal', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(4, '2020_12_15_233619_create_supplier_table', 1),
(5, '2020_12_15_234201_create_transaksi_table', 1),
(6, '2020_12_15_234415_create_obat_table', 1),
(7, '2020_12_15_234518_create_pegawai_table', 1),
(8, '2020_12_18_000443_create_kategori_obat_table', 2),
(9, '2020_12_18_002738_create_tipe_obat_table', 2),
(10, '2020_12_18_010544_create_bagian_pg_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_expired` date NOT NULL,
  `hrg_beli` int(11) NOT NULL,
  `hrg_jual` int(11) NOT NULL,
  `id_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `id_obat`, `nama`, `id_tipe`, `id_kategori`, `tgl_expired`, `hrg_beli`, `hrg_jual`, `id_supplier`, `stok`, `created_at`, `updated_at`) VALUES
(1, 'OB01', 'Paramex', 'TPOB03', 'KTGR03', '2021-01-01', 5000, 7000, 'SUP01', 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'OB02', 'Panadol', 'TPOB03', 'KTGR02', '2022-09-12', 6000, 7000, 'SUP03', 5, '2020-12-18 20:26:48', '2020-12-18 20:26:48'),
(4, 'OB03', 'Paracetamol', 'TPOB01', 'KTGR01', '2022-12-19', 5000, 10000, 'SUP06', 30, '2020-12-19 08:52:19', '2020-12-19 08:52:19'),
(5, 'OB04', 'Konidin', 'TPOB03', 'KTGR02', '2021-12-25', 4000, 6000, 'SUP04', 23, '2020-12-19 08:53:33', '2020-12-19 08:53:33'),
(6, 'OB05', 'Adem Sari', 'TPOB05', 'KTGR02', '2021-10-12', 2000, 3000, 'SUP04', 5, '2020-12-19 18:17:48', '2020-12-19 18:17:48'),
(7, 'OB06', 'Antangin', 'TPOB01', 'KTGR02', '2020-12-24', 1500, 4000, 'SUP08', 20, '2020-12-19 18:18:49', '2020-12-19 18:18:49'),
(8, 'OB07', 'Kalpanax Krim', 'TPOB02', 'KTGR02', '2023-10-31', 5000, 10000, 'SUP04', 20, '2020-12-19 18:20:34', '2020-12-19 18:20:34'),
(9, 'OB08', 'Diapet Herbal', 'TPOB04', 'KTGR06', '2022-10-10', 5000, 10000, 'SUP06', 5, '2020-12-19 18:21:26', '2020-12-19 18:21:26'),
(10, 'OB09', 'Komix', 'TPOB01', 'KTGR02', '2022-10-10', 4000, 7000, 'SUP05', 60, '2020-12-19 18:22:44', '2020-12-19 18:22:44'),
(11, 'OB10', 'Mixagrip Flu', 'TPOB03', 'KTGR02', '2021-09-13', 3500, 5000, 'SUP03', 10, '2020-12-19 18:23:56', '2020-12-19 18:23:56'),
(12, 'OB11', 'Mixagrip Flu & Batuk', 'TPOB03', 'KTGR01', '2022-09-12', 4500, 8000, 'SUP03', 10, '2020-12-19 18:24:44', '2020-12-19 18:24:44'),
(13, 'OB12', 'Promag', 'TPOB03', 'KTGR01', '2021-10-04', 6000, 11000, 'SUP01', 21, '2020-12-19 18:25:57', '2020-12-19 18:25:57'),
(14, 'OB13', 'Sangobion', 'TPOB04', 'KTGR01', '2022-02-01', 10000, 13000, 'SUP04', 40, '2020-12-19 18:27:17', '2020-12-19 18:27:17'),
(15, 'OB14', 'Stimuno Anak', 'TPOB01', 'KTGR02', '2021-10-19', 12000, 14000, 'SUP02', 30, '2020-12-19 18:28:30', '2020-12-19 18:28:30'),
(16, 'OB15', 'Super Tetra', 'TPOB04', 'KTGR01', '2020-01-22', 15000, 19000, 'SUP05', 30, '2020-12-19 18:31:15', '2020-12-19 18:31:15');

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
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_bagian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `id_pg`, `nama`, `jk`, `tempat_lahir`, `tgl_lahir`, `alamat`, `telp`, `id_bagian`, `created_at`, `updated_at`) VALUES
(1, 'PG01', 'Siano', 'Laki-laki', 'Kediri', '2000-12-01', 'Jl Pandan Aran', '087789009876', 'BGPG01', NULL, NULL),
(2, 'PG02', 'Ahmad Jaluli', 'Perempuan', 'Kediri', '2020-12-08', 'Jl Pandan Aran', '089976480981', 'BGPG06', '2020-12-18 00:01:32', '2020-12-18 23:34:01'),
(3, 'PG03', 'Qowwim', 'Laki-laki', 'Kediri', '2020-12-03', 'Jl Pandan Aran', '089976548721', 'BGPG02', '2020-12-18 05:23:04', '2020-12-18 05:23:28'),
(5, 'PG04', 'Fina Anti', 'Perempuan', 'Blitar', '2000-12-07', 'Jl Diponegoro', '0897898765675', 'BGPG06', '2020-12-19 08:48:46', '2020-12-19 08:48:46'),
(6, 'PG05', 'Hilda Aswa', 'Perempuan', 'Jakarta', '1999-12-19', 'Jl Hasyim', '0897898767585', 'BGPG04', '2020-12-19 08:50:12', '2020-12-19 08:50:12');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_sup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `id_sup`, `nama`, `alamat`, `kota`, `telp`, `created_at`, `updated_at`) VALUES
(5, 'SUP01', 'CV Cinita', 'Jl Lampersari 57 Semarang', 'Semarang', '( 024 ) 8313757', '2020-12-18 21:50:35', '2020-12-18 21:50:35'),
(6, 'SUP02', 'PT Daya Sembada', 'Jl Simpang Lima 1 Mal Ciputra 66 Lt UG Semarang', 'Semarang', '( 024 ) 8449568', '2020-12-18 21:52:24', '2020-12-18 21:52:24'),
(7, 'SUP03', 'CV Eka Jaya Sakti', 'Jl Berdikari Raya 1 Semarang', 'Semarang', '( 024 ) 7471786', '2020-12-18 21:53:45', '2020-12-18 21:53:45'),
(8, 'SUP04', 'PT Interbat', 'Jl Imam Bonjol Kompl Ligamas Bl A-2/21 Tangerang', 'Tangerang', '( 021 ) 55768884', '2020-12-18 21:54:37', '2020-12-18 21:54:37'),
(9, 'SUP05', 'Obat Sehat dot Com', 'Jl Ruhui Rahayu 4 RT 022 Tangerang', 'Tangerang', '( 0542 ) 877784', '2020-12-18 21:58:38', '2020-12-18 21:58:38'),
(10, 'SUP06', 'PT Metro Pillars Group', 'Jl Cempaka Km 37 Bl B/6 Kompl Niaga Kalimas Bekasi', 'Bekasi', '( 021 ) 88357528', '2020-12-18 21:59:44', '2020-12-18 21:59:44'),
(11, 'SUP07', 'PT Panca Kebacita', 'Kompl Taman Narogong Indah Bl TA/27 Bekasi', 'Bekasi', '( 021 ) 8211008', '2020-12-18 22:00:41', '2020-12-18 22:00:41'),
(12, 'SUP08', 'PT Bekapai', 'Jl Bandar Balikpapan A-3 Balikpapan', 'Balikpapan', '( 0542 ) 739074', '2020-12-18 22:02:05', '2020-12-18 22:02:05');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_obat`
--

CREATE TABLE `tipe_obat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tp_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tipe_obat`
--

INSERT INTO `tipe_obat` (`id`, `id_tp_obat`, `tipe`, `created_at`, `updated_at`) VALUES
(1, 'TPOB01', 'Sirup', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'TPOB02', 'Salep', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'TPOB03', 'Tablet', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'TPOB04', 'Kapsul', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'TPOB05', 'Serbuk', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_trx` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_pembeli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_obat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_jual` date NOT NULL,
  `id_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `kode_trx`, `nama_pembeli`, `id_obat`, `jumlah`, `tgl_jual`, `id_pegawai`, `created_at`, `updated_at`) VALUES
(1, 'TR01', 'Ubaidillah', 'OB02', 5, '2020-12-01', 'PG01', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'TR02', 'Gina', 'OB02', 6, '2020-12-23', 'PG02', '2020-12-19 02:04:51', '2020-12-19 02:04:51'),
(4, 'TR03', 'Sina', 'OB01', 7, '2020-12-31', 'PG03', '2020-12-19 02:05:24', '2020-12-19 02:05:24'),
(5, 'TR04', 'Tina', 'OB04', 20, '2020-12-19', 'PG03', '2020-12-19 08:56:00', '2020-12-19 08:56:00'),
(6, 'TR05', 'Bina', 'OB14', 8, '2020-12-20', 'PG03', '2020-12-19 18:32:16', '2020-12-19 18:32:16'),
(7, 'TR06', 'Bina', 'OB07', 19, '2020-12-20', 'PG03', '2020-12-19 18:32:49', '2020-12-19 18:32:49'),
(8, 'TR07', 'Faza', 'OB03', 10, '2020-12-20', 'PG03', '2020-12-19 18:33:24', '2020-12-19 18:33:24'),
(9, 'TR08', 'Fika Almira', 'OB11', 14, '2020-12-20', 'PG03', '2020-12-19 18:33:59', '2020-12-19 18:33:59'),
(10, 'TR09', 'Kiano Elin', 'OB15', 7, '2020-12-20', 'PG01', '2020-12-19 18:35:11', '2020-12-19 18:35:11'),
(11, 'TR10', 'Faza', 'OB06', 12, '2020-12-20', 'PG04', '2020-12-19 18:35:45', '2020-12-19 18:35:45'),
(12, 'TR11', 'Ubaidillah', 'OB04', 11, '2020-12-20', 'PG04', '2020-12-19 18:37:06', '2020-12-19 18:37:06'),
(13, 'TR12', 'Cinta Aka', 'OB08', 4, '2020-12-20', 'PG05', '2020-12-19 18:38:06', '2020-12-19 18:38:06'),
(14, 'TR13', 'Bina', 'OB13', 10, '2020-12-20', 'PG05', '2020-12-19 18:38:36', '2020-12-19 18:38:36'),
(15, 'TR14', 'Gina', 'OB10', 9, '2020-12-20', 'PG05', '2020-12-19 18:39:17', '2020-12-19 18:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'QOWWIM \'UBAIDILLAH', 'admin', 'ubayyubaid@gmail.com', NULL, '$2y$10$9bUyIsCdw2NrEd7rUGNHx./ipxu/cGKJJxzi.rkkH43cc11F8MuAq', NULL, '2020-12-15 17:08:04', '2020-12-15 17:08:04'),
(2, 'Roni Ahmadi', 'supplier', 'roni@gmail.com', NULL, '$2y$10$mmnz9ldoOdNKOzxoP7vIkel02JcNyKAr5LYoMGVdgLaLC.Oml1niq', NULL, '2020-12-19 07:46:51', '2020-12-19 07:46:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagian_pg`
--
ALTER TABLE `bagian_pg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori_obat`
--
ALTER TABLE `kategori_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `TPobat` (`id_tipe`),
  ADD KEY `ktgrob` (`id_kategori`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawai_telp_unique` (`telp`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `supplier_telp_unique` (`telp`);

--
-- Indexes for table `tipe_obat`
--
ALTER TABLE `tipe_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `TPobat` (`id_tp_obat`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
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
-- AUTO_INCREMENT for table `bagian_pg`
--
ALTER TABLE `bagian_pg`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_obat`
--
ALTER TABLE `kategori_obat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tipe_obat`
--
ALTER TABLE `tipe_obat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
