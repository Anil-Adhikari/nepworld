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
-- Table structure for table `nepworld_business`
--

DROP TABLE IF EXISTS `nepworld_business`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nepworld_business` (
  `businessId` int(11) NOT NULL,
  `npw_business_slug` varchar(400) DEFAULT NULL,
  `npw_business_countryId` int(11) DEFAULT NULL,
  `npw_business_userId` int(11) DEFAULT NULL,
  `npw_business_name` varchar(400) DEFAULT NULL,
  `npw_business_address` varchar(400) DEFAULT NULL,
  `npw_business_description` text,
  `npw_business_type` varchar(400) DEFAULT NULL,
  `npw_business_remarks` varchar(400) DEFAULT NULL,
  `npw_business_map` text,
  `npw_business_created_date` datetime DEFAULT NULL,
  `npw_business_isPublished` varchar(10) DEFAULT NULL,
  `npw_business_published_date` datetime DEFAULT NULL,
  `npw_business_isUpdated` varchar(10) DEFAULT NULL,
  `npw_business_updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`businessId`),
  UNIQUE KEY `npw_business_slug_UNIQUE` (`npw_business_slug`),
  KEY `fk_business_country_idx` (`npw_business_countryId`),
  KEY `fk_business_user_idx` (`npw_business_userId`),
  CONSTRAINT `fk_business_country` FOREIGN KEY (`npw_business_countryId`) REFERENCES `nepworld_country` (`countryId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_business_user` FOREIGN KEY (`npw_business_userId`) REFERENCES `nepworld_user` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nepworld_business`
--

LOCK TABLES `nepworld_business` WRITE;
/*!40000 ALTER TABLE `nepworld_business` DISABLE KEYS */;
/*!40000 ALTER TABLE `nepworld_business` ENABLE KEYS */;
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
