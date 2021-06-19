/*
SQLyog Enterprise - MySQL GUI v8.02 RC
MySQL - 5.6.20 : Database - anjalu
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`anjalu` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `anjalu`;

/*Table structure for table `adminreg` */

DROP TABLE IF EXISTS `adminreg`;

CREATE TABLE `adminreg` (
  `name` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `contact` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `adminreg` */

insert  into `adminreg`(`name`,`address`,`contact`,`email`) values ('Anjali hada','borkheda','',''),('anjali','nayapura','7845122356','anjali@gmail.com'),('Anjali hada','borkheda','9116380335','anjalihada@gmail.com'),('lokesh','nayapura','7845122356','lokesh@gmail.com');

/*Table structure for table `logindata` */

DROP TABLE IF EXISTS `logindata`;

CREATE TABLE `logindata` (
  `email` varchar(200) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  `usertype` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `logindata` */

insert  into `logindata`(`email`,`password`,`usertype`) values ('','','admin'),('anjali@gmail.com','22','admin'),('anjalihada@gmail.com','77','admin'),('lokesh@gmail.com','22','admin');

/*Table structure for table `medicalestore` */

DROP TABLE IF EXISTS `medicalestore`;

CREATE TABLE `medicalestore` (
  `medical store name` varchar(200) DEFAULT NULL,
  `owner` varchar(200) DEFAULT NULL,
  `id` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `contact` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `medicalestore` */

/*Table structure for table `mystoredata` */

DROP TABLE IF EXISTS `mystoredata`;

CREATE TABLE `mystoredata` (
  `name` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `contact` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mystoredata` */

insert  into `mystoredata`(`name`,`address`,`contact`,`email`,`password`) values ('anjali','Kethun','7845122356','lokesh@gmail.com','22'),('mohit','borkheda','9116380335','Mohit@gmail.com','77');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
