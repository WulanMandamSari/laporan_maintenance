-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 05:37 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laporan_maintenance_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `id_lokasi` varchar(100) NOT NULL,
  `kd_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stock` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_lokasi`, `kd_barang`, `nama_barang`, `stock`) VALUES
(38, '212346', 'B-0001', 'AC', '2'),
(39, '212363', 'B-0002', 'Mesin Printer Canon', '2'),
(40, '212368', 'B-0003', 'Mesin Printer Epson', '1'),
(42, '212369', 'B-0004', 'Laptop', '3');

-- --------------------------------------------------------

--
-- Table structure for table `kerusakan`
--

CREATE TABLE `kerusakan` (
  `id_kerusakan` int(11) NOT NULL,
  `nama_pelapor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` time NOT NULL,
  `id_lokasi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kd_barang` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kerusakan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kerusakan`
--

INSERT INTO `kerusakan` (`id_kerusakan`, `nama_pelapor`, `no_telepon`, `id_barang`, `tanggal`, `waktu`, `id_lokasi`, `kd_barang`, `jenis_kerusakan`, `keterangan`, `upload_foto`) VALUES
(102, 'Bayu', '089738862267', 38, '2022-11-14', '09:00:00', '212346', 'B-0006', 'Mati', 'Coba di nyalakan, tidak mau menyala', '1668423647521.Ac1.jpg'),
(103, 'Nayla', '089743563202', 38, '2022-11-14', '07:00:00', '212346', 'B-0004', 'Kebocoran AC', 'Keluar air dengan takaran yang lebih banyak', 'ac bocor.jpg'),
(105, 'Ani', '081345677978', 38, '2022-12-03', '21:00:00', '212346', 'B-0001', 'Mati', 'Coba di nyalakan, tidak mau menyala', '1670061910911.laptop4.jpg'),
(106, 'Wulan Mandam', '081345678653', 42, '2022-12-03', '21:12:00', '212363', 'B-0009', 'Mati', 'Coba di nyalakan, tidak mau menyala', '1670062431884.laptop4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`) VALUES
(212346, 'Ruang Administrasi'),
(212363, 'Ruang Staff Karyawan'),
(212368, 'Ruang Manager'),
(212369, 'Ruang Meeting'),
(212385, 'Ruang Resepsionis');

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
(1, '2022_09_05_025707_create_table_users', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `nama_pelapor` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `kd_barang` varchar(20) NOT NULL,
  `jenis_kerusakan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `upload_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `nama_pelapor`, `no_telepon`, `id_barang`, `tanggal`, `waktu`, `id_lokasi`, `kd_barang`, `jenis_kerusakan`, `keterangan`, `upload_foto`) VALUES
(15, 'Bayu', '089738862267', 38, '2022-11-14', '09:00:00', 212346, 'B-0003', 'Mati', 'Coba di nyalakan, tidak mau menyala', '1668423647521.Ac1.jpg'),
(16, 'Nayla', '089743563202', 38, '2022-11-14', '07:00:00', 212346, 'B-0004', 'Kebocoran Ac', 'Keluar air dengan takaran yang lebih banyak', '1668426987675.Ac2.jpg'),
(18, 'Ani', '081345677978', 38, '2022-12-03', '21:00:00', 212346, 'B-0001', 'Mati', 'Coba di nyalakan, tidak mau menyala', '1670061910911.laptop4.jpg'),
(19, 'Wulan Mandam', '081345678653', 42, '2022-12-03', '21:12:00', 212363, 'B-0005', 'Mati', 'Coba di nyalakan, tidak mau menyala', '1670062431884.laptop4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `penyelesaian`
--

CREATE TABLE `penyelesaian` (
  `id_penyelesaian` int(11) NOT NULL,
  `id_kerusakan` int(11) NOT NULL,
  `nama_barang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_teknisi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date DEFAULT NULL,
  `lama_pengerjaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solusi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyelesaian`
--

INSERT INTO `penyelesaian` (`id_penyelesaian`, `id_kerusakan`, `nama_barang`, `nama_teknisi`, `no_telepon`, `tanggal`, `lama_pengerjaan`, `solusi`) VALUES
(277, 102, 'AC', 'Anto', '089743563202', '2022-11-15', '1 Hari', 'Ganti kabel power supplay-nya'),
(278, 103, 'AC', 'Jono', '089738862267', '2022-11-15', '1 Hari', 'Mengganti filter AC yang bocor');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Wulan Mandam', 'admin', 'wulanmandam@gmail.com', NULL, '$2y$10$GsmMHgNPAtHb../gsMtGlO34eWqJahnahobHg3xWG.5KJCyjYh3kO', 'NrxpyBo9ATdXpmd4Ehul7iDkm92xnyKbgKEu3kFHfhrB4uMot1Dc91qk66vD', '2022-12-05 04:28:37.703778', '2022-10-01 05:45:19.000000'),
(3, 'teknisi', 'teknisi', 'teknisi@gmail.com', NULL, '$2y$10$mfJe.l9qjktVobHn1eaqSu4lgm5fA9SChCtMfxSoE5pwpqKAOnrrW', 'LcjsA2GeAKdv1ygcLYBOi7YIEkThknd5HTt3FYyClJMeDu4kh22Y9ZyDrnsQ', '2022-12-05 04:26:52.850592', '2022-11-08 19:38:27.000000'),
(4, 'karyawan', 'karyawan', 'karyawan@gmail.com', NULL, '$2y$10$M8eXLAGrWhCekQ07NGbf1uSHikLsfU1F97EnU6MVx8CYtdmfsjd4W', '0U74mpHm01Uah6MfEG3szjBfrdmCejtakJY5tjHEwSNp2vmHdXObYQOYt5Vi', '2022-12-05 04:26:05.962820', '2022-11-11 21:25:21.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `penyelesaian`
--
ALTER TABLE `penyelesaian`
  ADD PRIMARY KEY (`id_penyelesaian`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `kerusakan`
--
ALTER TABLE `kerusakan`
  MODIFY `id_kerusakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212388;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `penyelesaian`
--
ALTER TABLE `penyelesaian`
  MODIFY `id_penyelesaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
