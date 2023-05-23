-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Bulan Mei 2023 pada 18.47
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `user_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama`, `tmpt_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `alamat`, `email`, `telephone`, `foto`, `user_id`) VALUES
(4, 'administrator', 'Sidoarjo', '2023-05-13', 'P', 'islam', 'Puri\r\nDs Puri, Kec Puri, Kab Mojokerto', 'admin@gmail.com', '2147483647', '', '4'),
(6, 'Rollando Benzolino Lay', 'Sidoarjo', '2001-08-05', 'L', 'kristen', 'Bumi Intan Permai', 'llanlayy9@gmail.com', '089681549469', 'Rollando Benzolino Lay.jpeg', '6'),
(13, 'Soobin Fahrizal', 'Malang', '2000-03-16', 'L', 'islam', 'Malang', 'soobinisoobin12@gmail.com', '085335207080', 'Soobin Fahrizal.jpg', '13'),
(14, 'Adhika Fajar', 'Jombang', '2023-05-09', 'L', 'islam', 'Jombang', 'andhikafa12@gmail.com', '08739279739', 'Adhika Fajar.jpg', '14'),
(15, 'ANISA', 'Brazil', '2023-05-01', 'P', 'kristen', 'Jl.Purnama Indah', 'anisaanis1@gmail.com', '085667321445', 'ANISA.jpg', '15'),
(16, 'Rayhan Fajar', 'Semarang', '2002-01-17', 'L', 'islam', 'Kaliwiru,Kec. Candisari,Kota Semarang,Jawa Tengah', 'Rayhanabi06@gmail.com', '085667312209', 'Rayhan Fajar.jpeg', '16'),
(17, 'Syafira Zahra', 'Surabaya', '2000-12-28', 'P', 'islam', 'Ngagelrejo,Kec. Wonokromo,Surabaya,Jawa Timur', 'Zahra12@gmail.com', '085223009855', '', '17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `no_nik` varchar(20) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `status` int(1) NOT NULL,
  `pendaftar_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id`, `no_nik`, `no_kk`, `status`, `pendaftar_id`) VALUES
(8, '0005438866332', '1118895477556', 1, 6),
(15, '35-76-01-44-03-91-00', ' 31.01.02.03.000001', 1, 13),
(16, '35-76-01-44-03-91-01', '1118895477556', 1, 14),
(17, '35-76-01-44-03-88-00', ' 31.01.02.03.220001', 1, 15),
(18, '39-76-01-99-03-91-00', ' 31.11.02.03.000223', 0, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(34) NOT NULL,
  `level` enum('siswa','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `level`) VALUES
(3, 'Administrator', 'admin@gmail.com', 'a51e88648e976d08a804ffffc990f573', 'admin'),
(4, 'administrator', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(6, 'Rollando Benzolino Lay', 'llanlayy9@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'siswa'),
(11, 'Lutfia Febrianti', 'roselyna1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'siswa'),
(13, 'Soobin Fahrizal', 'soobinisoobin12@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'siswa'),
(14, 'Adhika Fajar', 'andhikafa12@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'siswa'),
(15, 'ANISA', 'anisaanis1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'siswa'),
(16, 'Rayhan Fajar', 'Rayhanabi06@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'siswa'),
(17, 'Syafira Zahra', 'Zahra12@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`user_id`),
  ADD KEY `email` (`email`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftar_id` (`pendaftar_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
