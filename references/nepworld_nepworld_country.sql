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
-- Table structure for table `nepworld_country`
--

DROP TABLE IF EXISTS `nepworld_country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nepworld_country` (
  `countryId` int(11) NOT NULL,
  `npw_country_slug` varchar(400) DEFAULT NULL,
  `npw_country_name` varchar(400) DEFAULT NULL,
  `npw_country_title` varchar(1000) DEFAULT NULL,
  `npw_country_description` text,
  `npw_country_externalLink` varchar(400) DEFAULT NULL,
  `npw_country_remarks` text,
  `npw_country_created_date` datetime NOT NULL,
  `npw_country_isPublished` varchar(10) DEFAULT NULL,
  `npw_country_published_date` datetime DEFAULT NULL,
  `npw_country_isUpdated` varchar(10) DEFAULT NULL,
  `npw_country_updated_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`countryId`),
  UNIQUE KEY `npw_country_slug_UNIQUE` (`npw_country_slug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nepworld_country`
--

LOCK TABLES `nepworld_country` WRITE;
/*!40000 ALTER TABLE `nepworld_country` DISABLE KEYS */;
/*!40000 ALTER TABLE `nepworld_country` ENABLE KEYS */;
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
