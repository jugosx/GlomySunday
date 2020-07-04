-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `parameter_layanan`;
CREATE TABLE `parameter_layanan` (
  `id_param` int(11) NOT NULL AUTO_INCREMENT,
  `nama_param` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_param`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_admin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `tbl_layanan`;
CREATE TABLE `tbl_layanan` (
  `id_layanan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_layanan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_layanan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `tbl_pelanggan`;
CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `notelp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `tbl_pemesanan`;
CREATE TABLE `tbl_pemesanan` (
  `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int(11) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `id_layanan` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `jenis_hewan` varchar(50) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `bukti_pembayaran` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_pemesanan`),
  KEY `tbl_pemesanan_fk_0_id_pelanggan` (`id_pelanggan`),
  KEY `tbl_pemesanan_fk_0_id_layanan` (`id_layanan`),
  CONSTRAINT `tbl_pemesanan_fk_0_id_layanan` FOREIGN KEY (`id_layanan`) REFERENCES `tbl_layanan` (`id_layanan`),
  CONSTRAINT `tbl_pemesanan_fk_0_id_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `tbl_pelanggan` (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- 2020-07-04 16:03:21