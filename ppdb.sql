-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 14 Jun 2023 pada 16.44
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aksi`
--

CREATE TABLE `aksi` (
  `id` int NOT NULL,
  `nama_aksi` varchar(50) NOT NULL,
  `status_aksi` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `aksi`
--

INSERT INTO `aksi` (`id`, `nama_aksi`, `status_aksi`) VALUES
(1, 'pendaftaran', 1),
(2, 'edit-pendaftaran', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `nisn` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`nisn`, `password`) VALUES
('21081010089', '111111'),
('21081010087', '222222'),
('21081010088', '333333'),
('admin', 'admin'),
('21081010090', '777777');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pendaftar`
--

CREATE TABLE `data_pendaftar` (
  `nisn` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `nama_file_kk` varchar(100) NOT NULL,
  `nama_file_ijazah` varchar(100) NOT NULL,
  `rerata` int NOT NULL,
  `nama_file_rapor` varchar(100) NOT NULL,
  `nama_file_foto` varchar(100) NOT NULL,
  `tgl_submit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `data_pendaftar`
--

INSERT INTO `data_pendaftar` (`nisn`, `nama`, `provinsi`, `kabupaten`, `kecamatan`, `desa`, `nama_file_kk`, `nama_file_ijazah`, `rerata`, `nama_file_rapor`, `nama_file_foto`, `tgl_submit`) VALUES
('21081010088', 'Marchelina', 'Jawa Timur', 'Sidoarjo', 'Sidoarjo', '-', '21081010088_kk.pdf', '21081010088_ijazah.pdf', 96, '21081010088_rapor.pdf', '21081010088_foto.png', '2023-06-11'),
('21081010041', 'Exgy Sulistiyanto', 'Jawa Timur', 'Jombang', 'sumobito', 'Mentoro', '21081010041_kk.pdf', '21081010041_ijazah.pdf', 89, '21081010041_rapor.pdf', '21081010041_foto.png', '2023-06-06'),
('21081010212', 'Albert Vincentius S.', 'Jawa Barat', 'Bekasi', '-', '-', '21081010212_kk.pdf', '21081010212_ijazah.pdf', 88, '21081010212_rapor.pdf', '21081010212_foto.png', '2023-06-02'),
('21081010077', 'Mahardika Virgo Wuryantoro', 'Jawa Timur', 'Pacitan', 'Pacitan', 'Pacitan', '21081010077_kk.pdf', '21081010077_ijazah.pdf', 91, '21081010077_rapor.pdf', '21081010077_foto.png', '2023-06-04'),
('21081010294', 'Edi Sudrajat', 'Jawa Tengah', 'Banyumas', 'Banyumas', '-', '21081010294_kk.pdf', '21081010294_ijazah.pdf', 92, '21081010294_rapor.pdf', '21081010294_foto.png', '2023-06-01'),
('21081010311', 'Joko Pambudi', 'Jawa Tengah', 'Batang', 'Batang', '-', '21081010311_kk.pdf', '21081010311_ijazah.pdf', 86, '21081010311_rapor.pdf', '21081010311_foto.png', '2023-06-07'),
('21081010315', 'Cantika Elizabeth', 'Jawa Barat', 'Bandung', 'Bandung', '-', '21081010315_kk.pdf', '21081010315_ijazah.pdf', 93, '21081010315_rapor.pdf', '21081010315_foto.png', '2023-06-08'),
('21081010322', 'Tio Aminullah', 'Jawa Barat', 'Ciamis', 'Ciamis', '-', '21081010322_kk.pdf', '21081010322_ijazah.pdf', 85, '21081010322_rapor.pdf', '21081010322_foto.png', '2023-06-12'),
('21081010323', 'Siti Nurmala', 'Jawa Tengah', 'Banjanegara', 'Banjanegara', '-', '21081010323_kk.pdf', '21081010323_ijazah.pdf', 94, '21081010323_rapor.pdf', '21081010323_foto.png', '2023-06-07'),
('21081010087', 'Izzul Ramadhani', 'Jawa Barat', 'Bekasi', 'Kaliabang Tengah', '-', '21081010087_kk.pdf', '21081010087_ijazah.pdf', 89, '21081010087_rapor.pdf', '21081010087_foto.png', '2023-06-11'),
('21081010089', 'Abdullah Al Fatih', 'Jawa Timur', 'Sidoarjo', 'Sidoarjo', '-', '21081010089_kk.pdf', '21081010089_ijazah.pdf', 90, '21081010089_rapor.pdf', '21081010089_foto.png', '2023-06-14');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
