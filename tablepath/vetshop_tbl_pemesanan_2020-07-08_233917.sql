/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

# ------------------------------------------------------------
# SCHEMA DUMP FOR TABLE: tbl_pemesanan
# ------------------------------------------------------------

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
  `status_progress` varchar(50) DEFAULT NULL,
  `id_grommer` int(11) DEFAULT NULL,
  `checkin` datetime DEFAULT NULL,
  `checkout` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pemesanan`),
  KEY `tbl_pemesanan_fk_0_id_pelanggan` (`id_pelanggan`),
  KEY `tbl_pemesanan_fk_0_id_layanan` (`id_layanan`),
  CONSTRAINT `tbl_pemesanan_fk_0_id_layanan` FOREIGN KEY (`id_layanan`) REFERENCES `tbl_layanan` (`id_layanan`),
  CONSTRAINT `tbl_pemesanan_fk_0_id_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `tbl_pelanggan` (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
