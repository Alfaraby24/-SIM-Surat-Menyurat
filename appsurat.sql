-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 04:48 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ngulik`
--

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `id` int(11) NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `isi_disposisi` text NOT NULL,
  `sifat` varchar(100) NOT NULL,
  `batas_waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `catatan` varchar(200) NOT NULL,
  `id_surat` varchar(11) NOT NULL,
  `id_user` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`id`, `tujuan`, `isi_disposisi`, `sifat`, `batas_waktu`, `catatan`, `id_surat`, `id_user`, `created_at`, `updated_at`) VALUES
(2, 'pak pak', 'kepentingan sendiri', 'penting', '2020-04-07 14:47:50', 'ini penting', '12', '1', '2020-04-07 07:47:50', '2020-04-07 07:47:50'),
(3, 'asd', 'asd', 'asd', '2020-04-08 06:57:16', 'asd', '12', '34', '2020-04-07 23:57:15', '2020-04-07 23:57:15');

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id` int(11) NOT NULL,
  `institusi` varchar(100) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `kepsek` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `website` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `id_user` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id`, `institusi`, `nama`, `status`, `alamat`, `kepsek`, `nip`, `website`, `email`, `logo`, `id_user`, `created_at`, `updated_at`) VALUES
(2, 'asd', 'asd', 'asd', 'asd', 'asd', '12121', 'asd', 'asd@gmail.com', 'blog1.png', '900', '2020-04-09 08:28:08', '2020-04-09 08:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `klarifikasi`
--

CREATE TABLE `klarifikasi` (
  `id` int(11) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `uraian` text NOT NULL,
  `id_user` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klarifikasi`
--

INSERT INTO `klarifikasi` (`id`, `kode`, `nama`, `uraian`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'asd', 'asd', 'asd', '12', '2020-04-09 02:44:36', '2020-04-09 02:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sett`
--

CREATE TABLE `sett` (
  `id` int(11) NOT NULL,
  `surat_masuk` varchar(250) NOT NULL,
  `surat_keluar` varchar(250) NOT NULL,
  `referensi` text NOT NULL,
  `id_user` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sett`
--

INSERT INTO `sett` (`id`, `surat_masuk`, `surat_keluar`, `referensi`, `id_user`, `created_at`, `updated_at`) VALUES
(2, 'ads', 'asd`', 'asd', '23`', '2020-04-08 23:46:24', '2020-04-08 23:46:24');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama_depan`, `nama_belakang`, `jenis_kelamin`, `agama`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Ardi firdaussssss', 'firdauss', 'L', 'Islam', 'Bogor', '2020-04-06 10:27:28', '2020-04-06 03:27:28'),
(2, 'firdaus', 'Ardi', 'P', 'Islam', 'Bogor', '2019-12-30 04:55:39', '2019-12-29 21:55:39'),
(5, 'brian', 'rich', 'P', 'Islam', 'Jakarta', '2019-12-30 04:58:21', '2019-12-29 21:58:21'),
(6, 'yas', 'sir', 'L', 'ISLAM', 'BOGOR', '2020-04-06 03:40:20', '2020-04-06 03:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id` int(11) NOT NULL,
  `no_agenda` varchar(50) NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `kode` varchar(20) NOT NULL,
  `tgl_surat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tgl_catat` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `id_user` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id`, `no_agenda`, `tujuan`, `no_surat`, `isi`, `kode`, `tgl_surat`, `tgl_catat`, `file`, `keterangan`, `id_user`, `created_at`, `updated_at`) VALUES
(1, '1233', 'asddd', 'a12333`', 'asdadadasd', 'sd90', '2020-04-10 13:59:04', '2020-04-10', 'Laporan Kuisioner Kel 1 (1).docx', 'sssf', '122', '2020-04-10 06:59:04', '2020-04-10 06:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id` int(11) NOT NULL,
  `no_agenda` varchar(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `asal_surat` varchar(250) NOT NULL,
  `isi` text NOT NULL,
  `kode` varchar(30) NOT NULL,
  `indeks` varchar(100) NOT NULL,
  `tgl_surat` varchar(100) NOT NULL,
  `tgl_diterima` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `file` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `id_user` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id`, `no_agenda`, `no_surat`, `asal_surat`, `isi`, `kode`, `indeks`, `tgl_surat`, `tgl_diterima`, `file`, `keterangan`, `id_user`, `created_at`, `updated_at`) VALUES
(2, 'q3423', '3439', 'asdjh', 'adad', 'asd', 'asd', '123', '2020-04-10 10:46:12', 'Salinan School - Dibuat dengan PosterMyWall.jpg', 'asd', '134', '2020-04-10 03:46:12', '2020-04-10 03:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ardi', 'ardhyfirdaus1939@gmail.com', NULL, '$2y$10$mk5odNQpAtWUSgJMKbGkVOSz3xaOamtlpjATXc02eVMc3.Yh8kotK', '0Or9ZrTopBydcHBZD7c3ahekCfEZIMXOsd1wL9TP7bgKP1UcwlwJVdEGjjdw', '2020-01-06 21:55:48', '2020-01-06 21:55:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klarifikasi`
--
ALTER TABLE `klarifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sett`
--
ALTER TABLE `sett`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `klarifikasi`
--
ALTER TABLE `klarifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sett`
--
ALTER TABLE `sett`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
