-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2022 pada 11.56
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_133`
--

CREATE TABLE `tbl_133` (
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_133`
--

INSERT INTO `tbl_133` (`kode_barang`, `nama_barang`, `satuan`, `qty`, `harga`) VALUES
(1, 'sprite', 'botol', 20, 3500),
(2, 'ale-ale', 'gelas', 8, 1000),
(3, 'pocari sweet', 'botol', 6, 5000),
(4, 'Teh Rio', 'gelas', 24, 1000),
(5, 'teh pucuk', 'botol', 5, 4000),
(6, 'aqua', 'botol', 5, 5000),
(7, 'Fanta', 'botol', 25, 7000),
(8, 'big cola', 'botol', 12, 20000),
(33, 'floridina', 'botol', 3, 3000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_133`
--
ALTER TABLE `tbl_133`
  ADD PRIMARY KEY (`kode_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_133`
--
ALTER TABLE `tbl_133`
  MODIFY `kode_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
