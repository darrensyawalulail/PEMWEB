-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Okt 2024 pada 09.24
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_pemweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(3) NOT NULL,
  `namapendek` varchar(20) NOT NULL,
  `tentangme` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='tabel about';

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `namapendek`, `tentangme`) VALUES
(1, 'Darren', 'halo, perkenalkan nama saya darren alfarrel syawaluail, saat ini saya sedang melanjutkan pendidikan S1 jurusan Informatika di Universitas Pembangunan Jaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `created_at`) VALUES
(1, 'uts', 'darrensyawalulail28@gmail.com', '028308203', 'tes', '2024-10-28 04:54:19'),
(2, 'uts', 'darrensyawalulail28@gmail.com', '1435678900', 'dddd', '2024-10-28 04:54:36'),
(3, 'ijadpi', 'darrensyawalulail28@gmail.com', '654684', 'ac eda', '2024-10-28 23:06:02'),
(4, 'ijadpi', 'darrensyawalulail28@gmail.com', '654684', 'ac eda', '2024-10-28 23:06:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `experience`
--

CREATE TABLE `experience` (
  `id` int(3) NOT NULL,
  `pengalaman` varchar(50) NOT NULL,
  `isipengalaman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='tabel experience';

--
-- Dumping data untuk tabel `experience`
--

INSERT INTO `experience` (`id`, `pengalaman`, `isipengalaman`) VALUES
(1, 'MC LOMBA SP 2023', 'saya terlibat sebagai panitia sumpah pemuda 2023 salah satu proker himaforka dan menjadi MC lomba untuk mensukseskan dan memeriahkan acara '),
(2, 'Anggota Hima DIvisi Pestasi', 'Saat ini, saya bergabung dengan Himpunan Mahasiswa Informatika periode 2024 sebagai anggota divisi prestasi ketua bidang non-akademik.'),
(3, 'PANITIA LKMM 2024', 'saya terlibat sebagai panitia LKMM 2024 salah satu proker himaforka dan menjadi koordinator keamanan untuk memastikan acara berjalan dengan lancar dan kondusif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hobby`
--

CREATE TABLE `hobby` (
  `id` int(3) NOT NULL,
  `jenishobi` varchar(50) NOT NULL,
  `isihobi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='tabel hobby';

--
-- Dumping data untuk tabel `hobby`
--

INSERT INTO `hobby` (`id`, `jenishobi`, `isihobi`) VALUES
(1, 'Karate', 'Karate adalah hobi saya yang paling saya suka, saya memulai karate sejak kelas 2 SD sampai saat ini, saya sudah mengikuti berbagai macam kejuaraan'),
(2, 'SEPAK BOLA', 'saya memulai bermain bola sejak kelas 5 SD dan mulai menjadikan bola sebagai hobi baru pada kelas 2 SMP'),
(3, 'VOLLY', 'saya bermain volly semenjak kelas 3 SMP yang awalnya hanya ikut bermain bersama abang di rumah, namun seiring waktu berjalan saya mulai suka dan mulai serius dalam volly sampai ikut sebuah club dan pada kelas 1 SMK saya mewakili sekolah dan juara pada tingkat kota Jakarta Selatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id` int(3) NOT NULL,
  `namaa` varchar(50) NOT NULL,
  `tentangsaya` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='tabel home';

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id`, `namaa`, `tentangsaya`) VALUES
(1, 'DARREN ALFARREL SYAWALULAIL', '\"Selamat datang di web saya! Di sini, kalian akan menemukan pengalaman, dan hobi yang sudah saya lalui. Mari menjelajahi bersama!\"');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hobby`
--
ALTER TABLE `hobby`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `hobby`
--
ALTER TABLE `hobby`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
