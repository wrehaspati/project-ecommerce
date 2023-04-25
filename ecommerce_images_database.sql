/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 10.9.3-MariaDB : Database - ecommerce
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ecommerce` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ecommerce`;

/*Data for the table `images` */

insert  into `images`(`id`,`image`,`item_id`,`created_at`,`updated_at`) values 
(1,'silver-class-7.jpg',1,NULL,NULL),
(2,'silver-class-6.jpg',2,NULL,NULL),
(3,'silver-class-4.jpg',3,NULL,NULL),
(4,'silver-class-5.jpg',3,NULL,NULL),
(5,'silver-class-3.jpg',4,NULL,NULL),
(6,'silver-class-9.jpg',5,NULL,NULL),
(7,'silver-class-12.jpg',6,NULL,NULL),
(8,'silver-class-23-(2).jpg',6,NULL,NULL),
(9,'silver-class-11.jpg',7,NULL,NULL),
(10,'silver-class-10.jpg',8,NULL,NULL),
(11,'silver-class-2.jpg',9,NULL,NULL),
(12,'silver-class.jpg',10,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
