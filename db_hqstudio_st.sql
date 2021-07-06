-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 02:59 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hqstudio_st`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(16) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(64) NOT NULL,
  `nama_panjang` text,
  `no_hp` int(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nama_panjang`, `no_hp`) VALUES
(101, 'dinachan01', '123', 'Dina Fajriah', 88888888),
(102, 'danielbotax', 'istrisolehot', 'Daniel Hilmawan', 2198731);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_foto`
--

CREATE TABLE `tbl_foto` (
  `id_foto` int(16) NOT NULL,
  `nama_file_foto` text,
  `nama_user` text NOT NULL,
  `no_hp_user` varchar(128) DEFAULT NULL,
  `tgl_kirim` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_foto`
--

INSERT INTO `tbl_foto` (`id_foto`, `nama_file_foto`, `nama_user`, `no_hp_user`, `tgl_kirim`) VALUES
(100003, '08121453_bacf839.jpg', 'Ratna', '08121453', '27 - Jun - 2021 19:03:38'),
(100004, '0814503232_e2d63a7.jpg', 'Angga', '0814503232', '27 - Jun - 2021 19:04:22'),
(100005, '081212613428_bcedcc5.jpg', 'Angga Ajie', '081212613428', '29 - Jun - 2021 18:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(16) NOT NULL,
  `nama_produk` varchar(128) DEFAULT NULL,
  `jumlah_stok` int(19) DEFAULT NULL,
  `harga` int(128) DEFAULT NULL,
  `satuan` varchar(32) DEFAULT NULL,
  `file_foto_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nama_produk`, `jumlah_stok`, `harga`, `satuan`, `file_foto_produk`) VALUES
(20001, 'Buku Tulis Sidu (Isi 38 lembar)', 24, 4000, 'Pcs', 'use_fa3ecc20001_.jpg'),
(20003, 'Correction Tape', 12, 12000, 'Pcs', 'use_b73d2220003_.jpg'),
(20005, 'Kursi Gaming', 5, 1500000, 'Pcs', 'use_36d813_.jpg'),
(20006, 'Rompi anti peluru', 5, 750000, 'Pcs', 'use_96580f_.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `tbl_foto`
--
ALTER TABLE `tbl_foto`
  MODIFY `id_foto` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100006;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20009;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
