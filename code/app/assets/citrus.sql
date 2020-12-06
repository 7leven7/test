-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: citrus
-- ------------------------------------------------------
-- Server version       5.7.23

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
-- Current Database: `citrus`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `citrus` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `citrus`;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin@example.com','admin123','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `citruses`
--

DROP TABLE IF EXISTS `citruses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `citruses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  `desc` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `citruses`
--

LOCK TABLES `citruses` WRITE;
/*!40000 ALTER TABLE `citruses` DISABLE KEYS */;
INSERT INTO `citruses` VALUES (1,'app/assets/images/image-1.jpg','Citrus','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel velit viverra, ornare massa non, venenatis mauris. Sed id finibus est. Suspendisse potenti. Vestibulum vitae tincidunt nisi. Maecenas pharetra sollicitudin enim sit amet tristique. '),(2,'app/assets/images/image-2.jpg','Citrus1','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel velit viverra, ornare massa non, venenatis mauris. Sed id finibus est. Suspendisse potenti. Vestibulum vitae tincidunt nisi. Maecenas pharetra sollicitudin enim sit amet tristique. '),(3,'app/assets/images/image-3.jpg','Citrus2','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel velit viverra, ornare massa non, venenatis mauris. Sed id finibus est. Suspendisse potenti. Vestibulum vitae tincidunt nisi. Maecenas pharetra sollicitudin enim sit amet tristique. '),(4,'app/assets/images/image-4.jpg','Citrus3','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel velit viverra, ornare massa non, venenatis mauris. Sed id finibus est. Suspendisse potenti. Vestibulum vitae tincidunt nisi. Maecenas pharetra sollicitudin enim sit amet tristique. '),(5,'app/assets/images/image-5.jpg','Citrus3','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel velit viverra, ornare massa non, venenatis mauris. Sed id finibus est. Suspendisse potenti. Vestibulum vitae tincidunt nisi. Maecenas pharetra sollicitudin enim sit amet tristique. '),(6,'app/assets/images/image-6.jpg','Citrus3','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel velit viverra, ornare massa non, venenatis mauris. Sed id finibus est. Suspendisse potenti. Vestibulum vitae tincidunt nisi. Maecenas pharetra sollicitudin enim sit amet tristique. '),(7,'app/assets/images/image-7.jpg','Citrus3','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel velit viverra, ornare massa non, venenatis mauris. Sed id finibus est. Suspendisse potenti. Vestibulum vitae tincidunt nisi. Maecenas pharetra sollicitudin enim sit amet tristique. '),(8,'app/assets/images/image-8.jpg','Citrus3','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel velit viverra, ornare massa non, venenatis mauris. Sed id finibus est. Suspendisse potenti. Vestibulum vitae tincidunt nisi. Maecenas pharetra sollicitudin enim sit amet tristique. '),(9,'app/assets/images/image-9.jpg','Citrus3','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel velit viverra, ornare massa non, venenatis mauris. Sed id finibus est. Suspendisse potenti. Vestibulum vitae tincidunt nisi. Maecenas pharetra sollicitudin enim sit amet tristique. ');
/*!40000 ALTER TABLE `citruses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `comment` longtext NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'Branko','test@gmail.com','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel velit viverra, ornare massa non, venenatis mauris.',1),(2,'Branko1','test1@gmail.com','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel velit viverra, ornare massa non, venenatis mauris.',0),(3,'Branko2','test2@gmail.com','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel velit viverra, ornare massa non, venenatis mauris.',0),(4,'Branko3','test3@gmail.com','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel velit viverra, ornare massa non, venenatis mauris.\r\n',1);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-06 21:47:16
