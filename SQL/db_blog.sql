/*
SQLyog Community v13.1.5  (32 bit)
MySQL - 10.4.6-MariaDB : Database - db_blog
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_blog` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_blog`;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

/*Table structure for table `tb_absensi` */

DROP TABLE IF EXISTS `tb_absensi`;

CREATE TABLE `tb_absensi` (
  `id_absensi` int(11) NOT NULL AUTO_INCREMENT,
  `id_guru_walas` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `alpa` int(11) DEFAULT NULL,
  `ijin` int(11) DEFAULT NULL,
  `sakit` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_absensi`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tb_absensi` */

insert  into `tb_absensi`(`id_absensi`,`id_guru_walas`,`id_siswa`,`alpa`,`ijin`,`sakit`,`created_at`,`updated_at`) values 
(1,44,35,2,1,7,'2019-11-16 06:44:12','2019-11-16 06:59:50'),
(3,44,31,1,2,0,'2019-11-16 07:41:24','2019-11-16 07:41:42'),
(4,44,45,3,2,1,'2019-12-20 20:32:56','2019-12-20 20:33:02');

/*Table structure for table `tb_guru_kelas` */

DROP TABLE IF EXISTS `tb_guru_kelas`;

CREATE TABLE `tb_guru_kelas` (
  `id_guru_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `id_guru_mapel` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_guru_kelas`),
  KEY `id_guru_kelas` (`id_guru_kelas`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `tb_guru_kelas` */

insert  into `tb_guru_kelas`(`id_guru_kelas`,`id_guru_mapel`,`id_kelas`,`id_mapel`,`created_at`,`updated_at`) values 
(26,38,18,20,'2019-11-10 11:06:49','2019-11-10 12:27:07'),
(27,39,17,21,'2019-11-10 11:09:48','2019-11-10 11:10:27');

/*Table structure for table `tb_guru_mapel` */

DROP TABLE IF EXISTS `tb_guru_mapel`;

CREATE TABLE `tb_guru_mapel` (
  `id_guru_mapel` int(11) NOT NULL AUTO_INCREMENT,
  `nama_guru_mapel` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `id_mapel` varchar(50) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_guru_mapel`),
  KEY `id_guru_mapel` (`id_guru_mapel`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

/*Data for the table `tb_guru_mapel` */

insert  into `tb_guru_mapel`(`id_guru_mapel`,`nama_guru_mapel`,`jenis_kelamin`,`tempat_lahir`,`tanggal_lahir`,`id_mapel`,`agama`,`alamat`,`telepon`,`email`,`password`,`created_at`,`updated_at`) values 
(39,'Puji Astuti, S.Pd','Perempuan','Denpasar','1990-01-09','21','Hindu','Jl Tukad Pakerisan','086526357562','puji@puji.com','pujiastuti123','2019-11-09 17:41:42','2019-11-09 17:47:36'),
(38,'Tuti Istiqomah, S.Pd.','Perempuan','Denpasar','1990-11-01','20','Kristen','Jl Mataram','08664546689','tuti@tuti.com','tutiistiqomah','2019-11-09 17:16:21','2019-11-09 17:39:38');

/*Table structure for table `tb_jadwal` */

DROP TABLE IF EXISTS `tb_jadwal`;

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengajar` varchar(50) DEFAULT NULL,
  `nama_kelas` varchar(30) DEFAULT NULL,
  `nama_mapel` varchar(50) DEFAULT NULL,
  `hari` varchar(20) DEFAULT NULL,
  `dari_jam` time DEFAULT NULL,
  `sampai_jam` time DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_jadwal`),
  KEY `id_jadwal` (`id_jadwal`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `tb_jadwal` */

insert  into `tb_jadwal`(`id_jadwal`,`nama_pengajar`,`nama_kelas`,`nama_mapel`,`hari`,`dari_jam`,`sampai_jam`,`created_at`,`updated_at`) values 
(15,'39','17','20','Senin','09:00:00','10:00:00','2019-11-14 11:23:02','2019-11-14 11:23:02'),
(14,'39','17','21','Selasa','09:00:00','10:00:00','2019-11-10 11:44:45','2019-11-10 11:44:45'),
(13,'38','16','20','Rabu','10:00:00','11:00:00','2019-11-10 11:43:00','2019-11-10 11:48:24');

/*Table structure for table `tb_kelas` */

DROP TABLE IF EXISTS `tb_kelas`;

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_kelas`),
  KEY `id_kelas` (`id_kelas`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kelas` */

insert  into `tb_kelas`(`id_kelas`,`nama_kelas`,`created_at`,`updated_at`) values 
(19,'XI IPA PA','2019-11-16 08:52:55','2019-11-16 08:52:55'),
(18,'X IPS PA','2019-11-09 13:25:06','2019-11-09 13:26:16'),
(17,'X IPA PI','2019-11-09 13:24:55','2019-11-09 13:24:55'),
(16,'X IPA PA','2019-11-09 13:24:46','2019-11-09 13:24:46');

/*Table structure for table `tb_laporan_leger` */

DROP TABLE IF EXISTS `tb_laporan_leger`;

CREATE TABLE `tb_laporan_leger` (
  `id_laporan_leger` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_laporan_leger` */

/*Table structure for table `tb_mapel` */

DROP TABLE IF EXISTS `tb_mapel`;

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(50) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_guru_mapel` int(11) DEFAULT NULL,
  `kkm` int(5) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_mapel`),
  KEY `id_mapel` (`id_mapel`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `tb_mapel` */

insert  into `tb_mapel`(`id_mapel`,`nama_mapel`,`id_kelas`,`id_guru_mapel`,`kkm`,`created_at`,`updated_at`) values 
(21,'Biologi',16,39,75,'2019-11-09 13:37:15','2019-11-09 13:37:29'),
(20,'Bahasa Inggris',17,38,80,'2019-11-09 13:29:26','2019-11-09 13:36:42');

/*Table structure for table `tb_nilai` */

DROP TABLE IF EXISTS `tb_nilai`;

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `id_guru_mapel` int(11) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `tahun_ajaran` varchar(255) DEFAULT NULL,
  `tugas_1` double DEFAULT NULL,
  `tugas_2` double DEFAULT NULL,
  `ulangan_harian_1` double DEFAULT NULL,
  `ulangan_harian_2` double DEFAULT NULL,
  `uts` double DEFAULT NULL,
  `uas` double DEFAULT NULL,
  `deskripsi_keterampilan` varchar(500) DEFAULT NULL,
  `deskripsi_pengetahuan` varchar(500) DEFAULT NULL,
  `nilai_raport` double DEFAULT NULL,
  `nilai_keterampilan` double DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_nilai`),
  KEY `id_nilai` (`id_nilai`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `tb_nilai` */

insert  into `tb_nilai`(`id_nilai`,`id_guru_mapel`,`id_mapel`,`id_kelas`,`id_siswa`,`tahun_ajaran`,`tugas_1`,`tugas_2`,`ulangan_harian_1`,`ulangan_harian_2`,`uts`,`uas`,`deskripsi_keterampilan`,`deskripsi_pengetahuan`,`nilai_raport`,`nilai_keterampilan`,`created_at`,`updated_at`) values 
(22,39,20,17,31,'2019/2020',80,67,78,65,90,90,'Nice','Good',90,89,'2019-11-14 11:24:33','2019-11-14 11:24:33'),
(21,39,21,17,31,'2019/2020',80,90,78,65,89,90,'Nice','Good',75,70,'2019-11-14 11:22:04','2019-11-14 11:22:04'),
(20,39,21,17,35,'2019/2020',100,100,100,100,100,100,'Nice','Good',100,100,'2019-11-13 15:02:06','2019-11-13 15:02:34'),
(23,39,20,17,35,'2019/2020',75,89,90,87,98,78,'Good','Nice',78,70,'2019-12-05 13:30:52','2019-12-05 13:30:52'),
(24,39,20,17,45,'2019/2020',75,90,90,67,89,90,'jhjg','fgfj',90,89,'2019-12-15 07:52:29','2019-12-15 07:52:29'),
(25,39,21,17,45,'2019/2020',80,67,90,80,80,89,'sjdsfsjf','sfsfsd',78,80,'2019-12-20 12:17:14','2019-12-20 12:17:14'),
(27,39,21,17,46,'2019/2020',100,100,100,100,100,100,'sfkshdfhskdf','asbfmnbsfmnsdf',100,100,'2019-12-20 13:14:11','2019-12-20 13:14:11'),
(28,39,20,17,46,'2019/2020',100,100,100,100,100,100,'sfksjkfdsf','kfjksfs',100,100,'2019-12-20 21:53:19','2019-12-20 21:53:26'),
(29,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `tb_nilai_extrakurikuler` */

DROP TABLE IF EXISTS `tb_nilai_extrakurikuler`;

CREATE TABLE `tb_nilai_extrakurikuler` (
  `id_nilai_extrakurikuler` int(11) NOT NULL AUTO_INCREMENT,
  `id_guru_walas` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `nama_extrakurikuler` varchar(255) DEFAULT NULL,
  `nilai_extrakurikuler` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_nilai_extrakurikuler`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tb_nilai_extrakurikuler` */

insert  into `tb_nilai_extrakurikuler`(`id_nilai_extrakurikuler`,`id_guru_walas`,`id_siswa`,`nama_extrakurikuler`,`nilai_extrakurikuler`,`created_at`,`updated_at`) values 
(1,44,31,'Renang',78,NULL,'2019-11-18 05:21:26'),
(5,44,31,'Sepak Bola',78,'2019-11-16 07:36:50','2019-11-16 07:37:10');

/*Table structure for table `tb_nilai_sikap` */

DROP TABLE IF EXISTS `tb_nilai_sikap`;

CREATE TABLE `tb_nilai_sikap` (
  `id_nilai_sikap` int(11) NOT NULL AUTO_INCREMENT,
  `id_guru_walas` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `nilai_sikap` int(11) DEFAULT NULL,
  `nilai_spiritual` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_nilai_sikap`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tb_nilai_sikap` */

insert  into `tb_nilai_sikap`(`id_nilai_sikap`,`id_guru_walas`,`id_siswa`,`nilai_sikap`,`nilai_spiritual`,`created_at`,`updated_at`) values 
(1,44,35,78,90,NULL,'2019-11-16 07:31:33'),
(6,44,31,89,78,'2019-11-16 05:14:33','2019-11-16 05:14:33'),
(7,44,31,90,78,'2019-11-16 07:30:26','2019-11-16 07:30:26');

/*Table structure for table `tb_siswa` */

DROP TABLE IF EXISTS `tb_siswa`;

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` int(20) DEFAULT NULL,
  `nama_kelas` varchar(30) DEFAULT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_siswa`),
  KEY `id_siswa` (`id_siswa`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

/*Data for the table `tb_siswa` */

insert  into `tb_siswa`(`id_siswa`,`nis`,`nama_kelas`,`nama_siswa`,`jenis_kelamin`,`tempat_lahir`,`tanggal_lahir`,`agama`,`alamat`,`nama_ayah`,`pekerjaan`,`telepon`,`email`,`password`,`created_at`,`updated_at`) values 
(35,9842078,'17','Komang','Laki-Laki','Denpasar','1996-02-01','Hindu','Gianyar','qwerty','mlklp','085337663493','komang@komang.com','komang','2019-11-09 13:53:55','2019-11-09 17:35:23'),
(31,9842078,'17','Kristin','Perempuan','Denpasar','1998-02-13','Katolik','Jl Tukad Pakerisan No 40','Beni','Petani','085337663493',NULL,NULL,'2019-11-09 13:27:27','2019-11-09 13:27:27'),
(45,123456,'17','Deta','Laki-Laki','Denpasar','1991-11-11','Hindu','khhjjj','ljkjggfgc','hjgkhgk','085317376381','deta@gmail.com','deta','2019-12-15 07:17:34','2019-12-15 07:17:34'),
(46,987687,'17','Yuditha','Perempuan','Denpasar','2019-12-20','-Pilih Agama-','denpasar','gvhb','skjsfk','823723','tintin@gmail.com','123','2019-12-20 12:41:36','2019-12-20 12:41:36');

/*Table structure for table `tb_walas` */

DROP TABLE IF EXISTS `tb_walas`;

CREATE TABLE `tb_walas` (
  `id_guru_walas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_guru_walas` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_guru_walas`),
  KEY `id_guru_walas` (`id_guru_walas`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

/*Data for the table `tb_walas` */

insert  into `tb_walas`(`id_guru_walas`,`nama_guru_walas`,`jenis_kelamin`,`tempat_lahir`,`tanggal_lahir`,`id_kelas`,`agama`,`alamat`,`telepon`,`email`,`password`,`created_at`,`updated_at`) values 
(44,'Dina Kirana, S.Pd','Perempuan','Denpasar','1997-01-02',17,'Hindu','Jl Bedugul','085337663493','dina123@dina.com','dinakirana123','2019-11-10 11:35:26','2019-11-10 11:39:22');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`level_user`,`created_at`,`updated_at`) values 
(2,'Tata Usaha','admin@admin.com',NULL,'$2y$10$muWqzvpBgx84r2XGrcGi2O/P0SevA0rJw2S4xY5YvjVMCK/1rVl46','oqFfyway2LHEBraJS68Aw9yjV3eNmapimOS8m5iulOAzOVug0gYuh9yMotQv','admin','2019-04-08 03:55:04',NULL),
(3,'Guru Mata Pelajaran','guru@guru.com',NULL,'$2y$10$i4qV.7z8nl.FZlBt6hCMiu5HZySUk9Hvqrn8I/IMmd2kDWntKiiJG','8RsbKhhjKDM0lAHUVe2tCgYD1Uyuj4GLsJlgKpCB5X1uUtqUrRbxRdfoge30','guru','2019-10-13 12:03:35','2019-10-13 12:03:35'),
(5,'Guru Wali Kelas','walas@walas.com',NULL,'$2y$10$i4qV.7z8nl.FZlBt6hCMiu5HZySUk9Hvqrn8I/IMmd2kDWntKiiJG','pxpkIMQS4O30zXT3LHieXzs9rDx6zEQcCNiiUzJOJjxCFSvVz1utedfFPrHu','walas','2019-10-14 12:10:30','2019-10-14 12:10:30'),
(6,'Siswa','siswa@siswa.com',NULL,'$2y$10$y0Z7QxyXHSvLRgp1eNA6EOtd.ycQyoL8.iqnljXklJIavMw6VIvMO','4lXJMZGGWDu9QPmeRPrQT9X7Uzs4fnK2YMyK03h5BJILdQSNW1ThyX2s7SCx','siswa','2019-10-14 12:19:53','2019-10-14 12:19:53'),
(38,'Tuti Istiqomah, S.Pd.','tuti@tuti.com',NULL,'$2y$10$MyJmrL7D1hQ5YCt/g7ILKeC04FlUXj/0ouqy/Txi6F1Pms8RHQxWi',NULL,'guru','2019-11-09 17:16:21','2019-11-09 17:39:39'),
(36,'Billy Iskandar, S.Pd','billy@billy.com',NULL,'$2y$10$Rr3SaTE.0V5Lb8KI5QQvjOR1t/rI7VqXliNyJ40vMF3VUnYVIpLua',NULL,'guru','2019-11-09 17:00:24','2019-11-09 17:00:24'),
(39,'Puji Astuti, S.Pd','puji@puji.com',NULL,'$2y$10$WmD1SIEAoDANj8.bOZUmqutGpaPCP2o/CzlDy4nW9H37FvdzToa1O','ADhmSh92tUxkuXmLdauMhDc5X6C2MIS4WdHj90oHJNz2u3BAfvD9ttPi692r','guru','2019-11-09 17:41:42','2019-11-09 17:47:36'),
(35,'Komang','komang@komang.com',NULL,'$2y$10$Dnydp7PcpXIQ.Hge5Grn1OK5LjUnnkZF7irxUq3Lga76z6H1MNtaO',NULL,'siswa','2019-11-09 13:53:55','2019-11-09 17:35:24'),
(44,'Dina Kirana, S.Pd','dina123@dina.com',NULL,'$2y$10$9.lcxkiD2L6ghb0PxX4MpuaaCfzjhYvacJqiCS0VN.BaAOtP5AvyC','FNPBXyko2zGslIZZaaGiwDyS28kqnCQCAsfAFnrdaFDEl3xF0HTlzQ1Y1uh0','walas','2019-11-10 11:35:26','2019-11-10 11:39:23'),
(31,'Kristin','kristin@kristin.com',NULL,'$2y$10$t56fkJXkRFuVdsUA/o2E0.17vMQlibfzykBVD9iEqLiJSpKmH7U8C',NULL,'siswa','2019-11-09 13:27:27','2019-11-09 13:27:27'),
(45,'Deta','deta@gmail.com',NULL,'$2y$10$SNyc4nBMLj3LaNFjl23On.0GZp0aoW0MCSfu/P4/vcnsxYUUsgCd6',NULL,'siswa','2019-12-15 07:17:34','2019-12-15 07:17:34'),
(46,'Yuditha','tintin@gmail.com',NULL,'$2y$10$JprMP/Vd0Vcg5yyBRheFIuK6xpPz2NdXZCPS1Ir7dw19Boy/HgJ4S',NULL,'siswa','2019-12-20 12:41:36','2019-12-20 12:41:36');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
