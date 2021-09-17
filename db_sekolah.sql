/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.20-MariaDB : Database - db_sekolah
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_sekolah` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_sekolah`;

/*Table structure for table `tbl_kelas` */

DROP TABLE IF EXISTS `tbl_kelas`;

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(20) DEFAULT NULL,
  `kompetensi_keahlian` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_kelas` */

insert  into `tbl_kelas`(`id_kelas`,`nama_kelas`,`kompetensi_keahlian`) values 
(1001,'Regular','Sistem Informasi'),
(1002,'Regular','Teknik Informasi'),
(2001,'Regular Malam','Sistem Informasi'),
(2002,'Regular Malam','Teknik Informasi'),
(3001,'Karyawan','Sistem Informasi'),
(3002,'Karyawan','Teknik Informasi');

/*Table structure for table `tbl_pembayaran` */

DROP TABLE IF EXISTS `tbl_pembayaran`;

CREATE TABLE `tbl_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) DEFAULT NULL,
  `nisn` char(10) DEFAULT NULL,
  `tgl_bayar` int(2) DEFAULT NULL,
  `bulan_bayar` varchar(10) DEFAULT NULL,
  `tahun_bayar` int(4) DEFAULT NULL,
  `id_spp` int(11) DEFAULT NULL,
  `jumlah_bayar` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pembayaran`),
  KEY `nisn` (`nisn`),
  KEY `id_spp` (`id_spp`),
  KEY `id_petugas` (`id_petugas`),
  CONSTRAINT `tbl_pembayaran_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `tbl_siswa` (`nisn`),
  CONSTRAINT `tbl_pembayaran_ibfk_2` FOREIGN KEY (`id_spp`) REFERENCES `tbl_siswa` (`id_spp`),
  CONSTRAINT `tbl_pembayaran_ibfk_3` FOREIGN KEY (`id_petugas`) REFERENCES `tbl_petugas` (`id_petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_pembayaran` */

/*Table structure for table `tbl_petugas` */

DROP TABLE IF EXISTS `tbl_petugas`;

CREATE TABLE `tbl_petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `nama_petugas` varchar(20) DEFAULT NULL,
  `level` enum('Administrator','Petugas') DEFAULT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_petugas` */

insert  into `tbl_petugas`(`id_petugas`,`username`,`password`,`nama_petugas`,`level`) values 
(11197001,'admin','admin','admin','Administrator'),
(11197002,'user','user','user','Petugas');

/*Table structure for table `tbl_siswa` */

DROP TABLE IF EXISTS `tbl_siswa`;

CREATE TABLE `tbl_siswa` (
  `nisn` char(10) NOT NULL,
  `nis` int(10) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `id_spp` int(11) DEFAULT NULL,
  PRIMARY KEY (`nisn`),
  KEY `id_kelas` (`id_kelas`),
  KEY `id_spp` (`id_spp`),
  CONSTRAINT `tbl_siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id_kelas`),
  CONSTRAINT `tbl_siswa_ibfk_2` FOREIGN KEY (`id_spp`) REFERENCES `tbl_spp` (`id_spp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_siswa` */

insert  into `tbl_siswa`(`nisn`,`nis`,`nama`,`id_kelas`,`alamat`,`no_telp`,`id_spp`) values 
('100000001',14197001,'Novaldy',1001,'Kota Tajur','62846464646',102021);

/*Table structure for table `tbl_spp` */

DROP TABLE IF EXISTS `tbl_spp`;

CREATE TABLE `tbl_spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` int(4) DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_spp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_spp` */

insert  into `tbl_spp`(`id_spp`,`tahun`,`nominal`) values 
(102021,2021,5000000);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
