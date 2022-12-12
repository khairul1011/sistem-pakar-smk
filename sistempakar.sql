-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Mar 2022 pada 05.55
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
-- Database: `sistempakar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilihanjurusan`
--

CREATE TABLE `pilihanjurusan` (
  `id_pilihan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` varchar(50) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pilihanjurusan`
--

INSERT INTO `pilihanjurusan` (`id_pilihan`, `nama`, `umur`, `asal_sekolah`, `jurusan`, `waktu`) VALUES
(29, 'khairul', '6', 'smp', 'Teknik Sepeda motor', '2022-03-14 00:00:00'),
(30, 'zikri', '15', 'smp 1', 'tptu', '2022-03-14 00:00:00'),
(31, 'zikra', '14', 'smpn 1 air tiris', 'Rekayasa Perangkat Lunak', '2022-03-14 00:00:00'),
(32, 'amin', '15', 'smpn 1 rumbio', 'Rekayasa Perangkat Lunak', '2022-03-14 00:00:00'),
(33, 'khairul', '11', 'smp', 'Teknik Kenderaan Ringan', '2022-03-14 00:00:00'),
(34, 'akil', '15', 'smpn 1 rumbio', 'dpib', '2022-03-14 09:24:54'),
(35, 'rio', '18', 'bangkinang', 'tptu', '2022-03-14 09:36:00'),
(36, 'aa', '11', 'smp', 'Rekayasa Perangkat Lunak', '2022-03-14 09:36:58'),
(37, 'abdi', '17', 'smp', 'Teknik Komputer Jaringan', '2022-03-14 11:52:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jawaban`
--

CREATE TABLE `tb_jawaban` (
  `kode_jawaban` varchar(50) NOT NULL,
  `jawaban` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jawaban`
--

INSERT INTO `tb_jawaban` (`kode_jawaban`, `jawaban`) VALUES
('j-1', 'Multimedia'),
('j-10', 'tptu'),
('j-2', 'Rekayasa Perangkat Lunak'),
('j-3', 'Teknik Komputer Jaringan'),
('j-4', 'Teknik Audio Video'),
('j-5', 'Teknik Sepeda motor'),
('j-6', 'Teknik Kenderaan Ringan'),
('j-7', 'Teknik Permesinan'),
('j-8', 'titl'),
('j-9', 'dpib');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `kode_pertanyaan` varchar(50) NOT NULL,
  `jawaban_pertanyaan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`kode_pertanyaan`, `jawaban_pertanyaan`) VALUES
('b-1', 'Apakah Anda bingung Memilih Jurusan di SMKN 1 BANGKINANG ?'),
('b-2', 'Maaf Jurusan Yang Anda Cari Belum Ada Di SMKN 1 Bangkinang'),
('bs-1', 'Apakah Anda Kurang Yakin Dengan Kemampuan Anda?'),
('bs-2', 'Apakah Anda Mengetahui, Jurusan Apa Aja Yang Ada Di SMKN 1 BANGKINANG?'),
('bs-3', 'Apakah Anda Ingin Masuk SMA?'),
('m', 'Jangan Ragu Dengan Kemampuan Anda?'),
('p-1', 'Apakah anda tertarik untuk mengedit media'),
('p-1-1', 'Apakah Anda Suka Mengedit Video?'),
('p-1-2', 'Apakah Anda Suka Mengedit foto?'),
('p-2', 'Apakah anda tertarik untuk membuat sebuah apk atau game'),
('p-2-1', 'Apakah Anda Tau Dengan HTML?'),
('p-2-2', 'Apakah Anda Tau Dengan Koding?'),
('p-3', 'Apakah Anda Ingin Belajar Hacking'),
('p-3-1', 'Apakah Anda Tau Dengan HTTPS?'),
('p-3-2', 'Apakah Anda Tau Dengan Server?'),
('p-4', 'Apakah Anda Membuat Robot'),
('p-4-1', 'Apakah Anda Tau Dengan Arduino?'),
('p-4-2', 'Apakah Anda Tau Dengan Resistor?'),
('p-5', 'Apakah Anda Tertarik Dengan Sepeda Motor?'),
('p-5-1', 'Apakah Anda Tau Dengan Piston?'),
('p-5-2', 'Apakah Anda Tau Dengan Head?'),
('p-6', 'Apakah Anda Tertarik Dengan Kenderaan Ringan?'),
('p-6-1', 'Apakah Anda Tau Dengan Block Pada Mesin?'),
('p-6-2', 'Apakah Anda Tau Dengan Velting?'),
('p-7', 'Apakah Anda Tertarik Dengan Mesin?'),
('p-7-1', 'Apakah Anda Ingin Belajar Membuat Mesin?'),
('p-7-2', 'Apakah Anda Tau Dengan Mesin Bubut?'),
('pu-1', 'Apakah anda tertarik dengan teknologi informasi ?'),
('pu-2', 'Apakah ANda Senang Dengan Otomotif?'),
('pu-3', 'Apakah Anda Tertarik Dengan Listrik?'),
('pu-4', 'Apakah Anda Tertarik Untuk Mendesain Sebuah Bangunan?'),
('pu-5', 'Apakah Anda Tertarik Dengan AC?'),
('tm', 'Anda Tidak Membaca Pertanyaan / Anda Ngasal Menjawab!!!'),
('u-1', 'Apakah anda ingin masuk SMKN 1 BANGKINANG ?');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pilihanjurusan`
--
ALTER TABLE `pilihanjurusan`
  ADD PRIMARY KEY (`id_pilihan`);

--
-- Indeks untuk tabel `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  ADD PRIMARY KEY (`kode_jawaban`);

--
-- Indeks untuk tabel `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`kode_pertanyaan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pilihanjurusan`
--
ALTER TABLE `pilihanjurusan`
  MODIFY `id_pilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
