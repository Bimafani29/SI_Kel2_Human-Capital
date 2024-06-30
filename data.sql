-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2024 pada 10.13
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `waktu_kehadiran` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id`, `nama`, `prodi`, `waktu_kehadiran`) VALUES
(17, '0', '0', '2024-06-27 13:15:22'),
(18, '0', '0', '2024-06-27 13:15:29'),
(19, 'BIMA', 'Sistem_Informasi', '2024-06-27 13:23:23'),
(20, 'BIMA', 'Sistem_Informasi', '2024-06-27 13:27:40'),
(21, '', '#', '2024-06-27 13:27:43'),
(22, 'fajar', 'Sistem_komputer', '2024-06-27 13:27:56'),
(23, 'Fajar', 'Management', '2024-06-27 13:28:15'),
(24, 'Fajar', 'Management', '2024-06-27 13:28:22'),
(25, 'Fajar', 'Management', '2024-06-27 14:55:39'),
(26, 'Fajar', 'Management', '2024-06-27 15:45:51'),
(27, 'Fajar', 'Management', '2024-06-27 15:47:58'),
(28, 'Fajar', 'Management', '2024-06-27 15:49:23'),
(30, '', '#', '2024-06-27 16:02:35'),
(31, '', '#', '2024-06-27 16:02:37'),
(32, '', '#', '2024-06-27 16:02:38'),
(33, 'jariah', 'Sistem Informasi', '2024-06-27 16:21:13'),
(34, 'fajar malkan', 'Management', '2024-06-30 07:57:10'),
(35, 'fajar malkan', 'Sistem_komputer', '2024-06-30 07:57:52');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
