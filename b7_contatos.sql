/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 5.7.24 : Database - b7_contatos
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`b7_contatos` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `b7_contatos`;

/*Table structure for table `contatos` */

DROP TABLE IF EXISTS `contatos`;

CREATE TABLE `contatos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `contatos` */

insert  into `contatos`(`id`,`nome`,`email`) values 
(1,'Suporte B7Webb','suporte@b7web.com.br'),
(5,'Fulano de tal','fulano@hotmail.com'),
(7,'Paulo Sem Tasso','paulo@yahoo.com.br'),
(8,'Daniel','daniel@b7web.com.br');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
