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
-- Table structure for table `nepworld_image`
--

DROP TABLE IF EXISTS `nepworld_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nepworld_image` (
  `imageId` int(11) NOT NULL,
  `npw_image_name` varchar(200) DEFAULT NULL,
  `npw_imageUrl` varchar(200) DEFAULT NULL,
  `npw_image_caption` text,
  `npw_image_description` text,
  `npw_image_pageId` int(11) DEFAULT NULL,
  `npw_image_countryId` int(11) DEFAULT NULL,
  `npw_image_businessId` int(11) DEFAULT NULL,
  `npw_image_adId` int(11) DEFAULT NULL,
  `npw_image_docId` int(11) DEFAULT NULL,
  `npw_image_albumId` int(11) DEFAULT NULL,
  `npw_image_contactId` int(11) DEFAULT NULL,
  `npw_image_userId` int(11) DEFAULT NULL,
  `npw_image_uploaded_date` datetime NOT NULL,
  PRIMARY KEY (`imageId`),
  KEY `fk_image_page_idx` (`npw_image_pageId`),
  KEY `fk_image_country_idx` (`npw_image_countryId`),
  KEY `fk_image_business_idx` (`npw_image_businessId`),
  KEY `fk_image_ad_idx` (`npw_image_adId`),
  KEY `fk_image__idx` (`npw_image_docId`),
  KEY `fk_image_album_idx` (`npw_image_albumId`),
  KEY `fk_image_contact_idx` (`npw_image_contactId`),
  KEY `fk_image_user_idx` (`npw_image_userId`),
  CONSTRAINT `fk_image_page` FOREIGN KEY (`npw_image_pageId`) REFERENCES `nepworld_page` (`pageId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_image_country` FOREIGN KEY (`npw_image_countryId`) REFERENCES `nepworld_country` (`countryId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_image_business` FOREIGN KEY (`npw_image_businessId`) REFERENCES `nepworld_business` (`businessId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_image_ad` FOREIGN KEY (`npw_image_adId`) REFERENCES `nepworld_advertisement` (`adId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_image_document` FOREIGN KEY (`npw_image_docId`) REFERENCES `nepworld_document` (`docId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_image_album` FOREIGN KEY (`npw_image_albumId`) REFERENCES `nepworld_album` (`albumId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_image_contact` FOREIGN KEY (`npw_image_contactId`) REFERENCES `nepworld_contact` (`contactId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_image_user` FOREIGN KEY (`npw_image_userId`) REFERENCES `nepworld_user` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nepworld_image`
--

LOCK TABLES `nepworld_image` WRITE;
/*!40000 ALTER TABLE `nepworld_image` DISABLE KEYS */;
/*!40000 ALTER TABLE `nepworld_image` ENABLE KEYS */;
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
