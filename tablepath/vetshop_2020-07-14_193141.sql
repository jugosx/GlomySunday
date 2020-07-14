/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

# ------------------------------------------------------------
# SCHEMA DUMP FOR TABLE: parameter_layanan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `parameter_layanan`;
CREATE TABLE `parameter_layanan` (
  `id_param` int(11) NOT NULL AUTO_INCREMENT,
  `nama_param` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `id_layanan` int(11) NOT NULL,
  PRIMARY KEY (`id_param`),
  KEY `id_layanan` (`id_layanan`),
  CONSTRAINT `parameter_layanan_ibfk_1` FOREIGN KEY (`id_layanan`) REFERENCES `tbl_layanan` (`id_layanan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

# ------------------------------------------------------------
# SCHEMA DUMP FOR TABLE: tbl_admin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_admin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

# ------------------------------------------------------------
# SCHEMA DUMP FOR TABLE: tbl_grommer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_grommer`;
CREATE TABLE `tbl_grommer` (
  `id_grommer` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `status` enum('selo','kerja') NOT NULL,
  PRIMARY KEY (`id_grommer`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

# ------------------------------------------------------------
# SCHEMA DUMP FOR TABLE: tbl_kandang
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_kandang`;
CREATE TABLE `tbl_kandang` (
  `id_kandang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kandang` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id_kandang`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

# ------------------------------------------------------------
# SCHEMA DUMP FOR TABLE: tbl_layanan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_layanan`;
CREATE TABLE `tbl_layanan` (
  `id_layanan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_layanan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_layanan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

# ------------------------------------------------------------
# SCHEMA DUMP FOR TABLE: tbl_pelanggan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_pelanggan`;
CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `notelp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

# ------------------------------------------------------------
# SCHEMA DUMP FOR TABLE: tbl_pemesanan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_pemesanan`;
CREATE TABLE `tbl_pemesanan` (
  `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `id_layanan` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `jenis_hewan` varchar(50) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `bukti_pembayaran` varchar(100) DEFAULT NULL,
  `status_progress` varchar(50) DEFAULT NULL,
  `id_grommer` int(11) DEFAULT NULL,
  `checkin` datetime DEFAULT NULL,
  `checkout` datetime DEFAULT NULL,
  `id_kandang` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pemesanan`),
  KEY `tbl_pemesanan_fk_0_id_pelanggan` (`id_pelanggan`),
  KEY `tbl_pemesanan_fk_0_id_layanan` (`id_layanan`),
  CONSTRAINT `tbl_pemesanan_fk_0_id_layanan` FOREIGN KEY (`id_layanan`) REFERENCES `tbl_layanan` (`id_layanan`),
  CONSTRAINT `tbl_pemesanan_fk_0_id_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `tbl_pelanggan` (`id_pelanggan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
