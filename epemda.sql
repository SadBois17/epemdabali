-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2022 pada 04.28
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epemda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nik` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(99) NOT NULL,
  `tgl-daftar` timestamp NOT NULL DEFAULT current_timestamp(),
  `level` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `nama`, `nik`, `username`, `pass`, `tgl-daftar`, `level`) VALUES
(1, '', 0, 'admin', 'admin', '2022-06-03 07:57:22', 'admin'),
(2, '', 0, 'coba', 'coba123', '2022-06-03 08:19:39', 'user'),
(4, '', 0, 'user22', 'user233', '2022-06-04 01:11:54', 'user'),
(5, '', 0, 'alfian', 'alfian', '2022-06-04 05:26:39', 'user'),
(6, '', 0, 'user', 'user', '2022-06-04 05:31:57', 'user'),
(7, '', 0, 'halo', 'halo', '2022-06-04 07:17:56', 'user'),
(8, '', 0, 'wira', 'wiea', '2022-06-04 12:38:12', 'user'),
(9, '', 0, 'jisoo', 'jisoo', '2022-06-04 12:44:37', 'user'),
(10, '', 0, 'tes', 'tes', '2022-06-24 18:24:40', 'user'),
(11, '', 0, 'tes123', 'tes123', '2022-06-25 00:35:37', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(150) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `text` varchar(500) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `nama`, `text`, `tanggal`) VALUES
(38, 'jeremia', 'Selamat pagi saya adalah pegawai seni di institut seni indonesia ingin melapor bahwa kegiatan hari ini telah selesai dalam rangka melaksanakan tugas presiden', '2022-06-25 00:22:31'),
(39, 'jeremia', 'sudah kerja', '2022-06-25 00:32:33');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
