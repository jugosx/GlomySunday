-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 06:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vetshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `parameter_layanan`
--

CREATE TABLE `parameter_layanan` (
  `id_param` int(11) NOT NULL,
  `nama_param` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_admin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(1, 'admin', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grommer`
--

CREATE TABLE `tbl_grommer` (
  `id_grommer` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` enum('selo','kerja') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_grommer`
--

INSERT INTO `tbl_grommer` (`id_grommer`, `nama`, `status`) VALUES
(1, 'Alexa', 'selo'),
(2, 'Alexis', 'kerja');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kandang`
--

CREATE TABLE `tbl_kandang` (
  `id_kandang` int(11) NOT NULL,
  `nama_kadang` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_layanan`
--

CREATE TABLE `tbl_layanan` (
  `id_layanan` int(11) NOT NULL,
  `nama_layanan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_layanan`
--

INSERT INTO `tbl_layanan` (`id_layanan`, `nama_layanan`, `keterangan`, `harga`, `gambar`) VALUES
(6, 'Grooming - Whitening', 'Grooming - Whitening', 20000, 'gambar/Balai Sarbini.PNG20200709043515'),
(7, 'Grooming - Kutu', 'Grooming - Kutu', 25000, 'gambar/BNI.PNG20200709043532'),
(8, 'Grooming - Jamur', 'Grooming - Jamur', 30000, 'gambar/Gumuk Pasir.PNG20200709043552'),
(9, 'Grooming - Komplit', 'Grooming - Komplit', 40000, 'gambar/POS.PNG20200709043626');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `notelp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `nama`, `alamat`, `notelp`, `email`, `password`) VALUES
(6, 'Wisnu', 'Jalan Kelana', '081222', 'budi@mail.com', '12345'),
(7, 'Anjani', 'Klaten', '08122222', 'anjani@mail.com', '12345'),
(8, 'adinda', 'cilacap', '09282828', 'adin@mail.com', '12345'),
(9, 'pras', 'mudi', '08122', 'mail@mail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan`
--

CREATE TABLE `tbl_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `id_layanan` int(11) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  `jenis_hewan` varchar(50) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `status_progress` varchar(50) DEFAULT NULL,
  `id_grommer` int(11) DEFAULT NULL,
  `checkin` datetime DEFAULT NULL,
  `checkout` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pemesanan`
--

INSERT INTO `tbl_pemesanan` (`id_pemesanan`, `id_pelanggan`, `tanggal`, `id_layanan`, `status`, `jenis_hewan`, `keterangan`, `gambar`, `status_progress`, `id_grommer`, `checkin`, `checkout`) VALUES
(5, 8, '2020-07-09 12:15:00', 7, 'Belum Bayar', 'Singa Laut', 'Belum', 'gambar/Pedestrian.PNG20200709071602', 'Pesanan Masuk', 2, '2020-07-09 12:15:00', '0000-00-00 00:00:00'),
(6, 7, NULL, 8, NULL, 'ayam', 'Dari depan', '', NULL, NULL, NULL, NULL),
(7, 8, NULL, 7, NULL, 'kucing garong', 'dari depan lagi', '', NULL, NULL, NULL, NULL),
(8, 8, NULL, 6, NULL, 'jaran', 'dari lagi', '', NULL, NULL, NULL, NULL),
(9, 8, NULL, 8, NULL, 'ayam jantan', 'dari belakang', '', NULL, NULL, NULL, NULL),
(10, 9, '2020-07-11 00:00:00', 7, '0', 'wkwkwkw', 'wkwkwkw', NULL, NULL, NULL, '2020-07-11 00:00:00', '2020-07-11 00:00:00'),
(11, 9, '2020-07-11 00:00:00', 7, '0', 'ehehehe', 'hehehe', NULL, NULL, NULL, '2020-07-11 00:00:00', '2020-07-11 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parameter_layanan`
--
ALTER TABLE `parameter_layanan`
  ADD PRIMARY KEY (`id_param`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_grommer`
--
ALTER TABLE `tbl_grommer`
  ADD PRIMARY KEY (`id_grommer`);

--
-- Indexes for table `tbl_kandang`
--
ALTER TABLE `tbl_kandang`
  ADD PRIMARY KEY (`id_kandang`);

--
-- Indexes for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `tbl_pemesanan_fk_0_id_pelanggan` (`id_pelanggan`),
  ADD KEY `tbl_pemesanan_fk_0_id_layanan` (`id_layanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parameter_layanan`
--
ALTER TABLE `parameter_layanan`
  MODIFY `id_param` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_grommer`
--
ALTER TABLE `tbl_grommer`
  MODIFY `id_grommer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_kandang`
--
ALTER TABLE `tbl_kandang`
  MODIFY `id_kandang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  ADD CONSTRAINT `tbl_pemesanan_fk_0_id_layanan` FOREIGN KEY (`id_layanan`) REFERENCES `tbl_layanan` (`id_layanan`),
  ADD CONSTRAINT `tbl_pemesanan_fk_0_id_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `tbl_pelanggan` (`id_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
