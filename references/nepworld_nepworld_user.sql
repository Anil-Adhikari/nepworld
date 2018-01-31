CREATE DATABASE  IF NOT EXISTS `nepworld` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `nepworld`;
-- MySQL dump 10.13  Distrib 5.5.59, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: nepworld
-- ------------------------------------------------------
-- Server version	5.5.59-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `nepworld_user`
--

DROP TABLE IF EXISTS `nepworld_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nepworld_user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `npw_user_firstname` varchar(100) NOT NULL,
  `npw_user_lastname` varchar(100) NOT NULL,
  `npw_user_address` varchar(250) NOT NULL,
  `npw_user_email` varchar(255) NOT NULL,
  `npw_user_username` varchar(100) NOT NULL,
  `npw_user_authkey` varchar(32) NOT NULL,
  `npw_user_password` varchar(255) NOT NULL,
  `npw_user_password_hash` varchar(255) DEFAULT NULL,
  `npw_user_password_reset_token` varchar(255) DEFAULT NULL,
  `npw_user_status` smallint(6) NOT NULL,
  `npw_user_created_at` datetime NOT NULL,
  `npw_user_updated_at` datetime NOT NULL,
  `npw_user_geolocation` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nepworld_user`
--

LOCK TABLES `nepworld_user` WRITE;
/*!40000 ALTER TABLE `nepworld_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `nepworld_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-31 14:19:12
