/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.21-MariaDB : Database - unihealth
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`unihealth` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `unihealth`;

/*Table structure for table `uhe_catering` */

DROP TABLE IF EXISTS `uhe_catering`;

CREATE TABLE `uhe_catering` (
  `id_catering` int(10) NOT NULL AUTO_INCREMENT,
  `nama_paket` varchar(256) NOT NULL,
  `makanan` varchar(256) NOT NULL,
  `nasi` varchar(256) NOT NULL,
  `makanan_sop` varchar(256) NOT NULL,
  `minuman` varchar(256) NOT NULL,
  `harga` int(10) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  PRIMARY KEY (`id_catering`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

/*Data for the table `uhe_catering` */

insert  into `uhe_catering`(`id_catering`,`nama_paket`,`makanan`,`nasi`,`makanan_sop`,`minuman`,`harga`,`keterangan`,`gambar`) values 
(12,'Paket Isoman','Salad Sayur','Nasi Tim','Sayur Sop','Fruit Juice',30000,'Hidangan untuk Meningkatkan antioksidan agar tubuh terhindar dari penyakit','isoman.jpeg'),
(14,'Paket Healthy Box','Thai Crispy Chicken','Mixed Red & White Rice','Kaeng Liang','Fresh Juice',45000,'Ayam goreng tepung yang lezat dan renyah disiram saus gurih aromatik khas Thailand, disajikan bersama aneka sayuran segar dan mixed red & white rice.','healtybox.jpeg'),
(15,'Paket Snapper','Snapper & Union','White Red Rice','Gulai Labu Siam','Fresh Juice',50000,'Hidangan ikan snapper dan onion yang kaya akan asam lemak tak jenuh yang membantu mengatur kolesterol dalam tubuh dan juga mengandung DHA yang membantu perkembangan otak. Disajikan lengkap dengan Nasi Merah, Gulai Labu Siam, dan Blanched Shimeji','WhatsApp_Image_2021-08-01_at_12_23_30_PM.jpeg');

/*Table structure for table `uhe_invoice` */

DROP TABLE IF EXISTS `uhe_invoice`;

CREATE TABLE `uhe_invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_penerima` varchar(56) DEFAULT NULL,
  `kontak_penerima` varchar(11) DEFAULT NULL,
  `alamat_penerima` varchar(256) DEFAULT NULL,
  `tgl_pesan` datetime DEFAULT NULL,
  `batas_bayar` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `uhe_invoice` */

insert  into `uhe_invoice`(`id`,`nama_penerima`,`kontak_penerima`,`alamat_penerima`,`tgl_pesan`,`batas_bayar`) values 
(1,'adit','08912113501','Cimahi Tengah no.1','2021-08-01 22:18:10','2021-08-01 22:18:10'),
(2,'adittya Kamal','08191031665','Permata Cimahi E.5 No.1','2021-08-01 22:54:14','2021-08-01 22:54:14'),
(3,'adittya Kamal','08191031665','Permata Cimahi E.5 No.1','2021-08-01 22:56:45','2021-08-01 22:56:45');

/*Table structure for table `uhe_pesanan` */

DROP TABLE IF EXISTS `uhe_pesanan`;

CREATE TABLE `uhe_pesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_invoice` int(11) DEFAULT NULL,
  `id_catering` int(11) DEFAULT NULL,
  `nama_paket` varchar(256) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `kurir` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `uhe_pesanan` */

insert  into `uhe_pesanan`(`id`,`id_invoice`,`id_catering`,`nama_paket`,`jumlah`,`harga`,`kurir`) values 
(1,1,12,'Paket Isoman',1,30000,'Gojek'),
(2,3,12,'Paket Isoman',1,30000,'Gojek');

/*Table structure for table `uhe_user` */

DROP TABLE IF EXISTS `uhe_user`;

CREATE TABLE `uhe_user` (
  `user_name` varchar(30) DEFAULT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_phone` varchar(12) DEFAULT NULL,
  `user_address` varchar(254) DEFAULT NULL,
  `user_username` varchar(30) DEFAULT NULL,
  `user_photo` varchar(254) DEFAULT NULL,
  `user_password` varchar(254) DEFAULT NULL,
  `user_is_active` int(11) DEFAULT NULL,
  `user_role` int(11) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `uhe_user` */

insert  into `uhe_user`(`user_name`,`user_email`,`user_phone`,`user_address`,`user_username`,`user_photo`,`user_password`,`user_is_active`,`user_role`,`date_created`) values 
('Adittya Kamal M','10118337@gmail.com',NULL,NULL,'adittyak','default.jpg','$2y$10$ZjlIDalbyYah6tfGcRd9MObmeAg1AaEwVLQHQo8OyAyoAsTwCUMIe',1,NULL,NULL),
('adinda','adinda@gmail.com','1234567','aweu','luenatic','light_by_ryky_demu2w1-pre.png','$2y$10$QMqwdnFAhRD42pfezwH11upwDouqGARYel85FC5ZkS9TJQhRd5WZG',1,NULL,NULL),
('adit','adit@gmail.com','081910316658','Permata Cimahi','adit','663219154.png','$2y$10$aui9cnICruXiyNH7Aayr.efuE3wbNKBmsCjZdy3Prjuep0oUjpSxS',1,NULL,1627832867),
('Adittya Kamal','adittyakamalm@gmail.com','087822446882','Permata Cimahi Jln.Mutiara VIII Blok E.5 No.1','adittyakm','EkWRM4cUYAAPNc2.jpg','$2y$10$JbqwxMIG4KQZDiDPRn5fmOOQrlgfNyYiZHWeA/mSCGLhpuUAcaCxW',1,2,0),
('admin','admin@gmail.com',NULL,NULL,'admin','default.jpg','$2y$10$mkP6IZsQIZKuBOw/khzDuOTHhxAir03XXY5a8AiFHBeSK0kL7Eaae',1,1,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
