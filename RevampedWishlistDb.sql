-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: 127.0.0.1    Database: RevampedWishlistDb
-- ------------------------------------------------------
-- Server version	5.5.38

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
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(45) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'Mint-chocolate Chicken Nuggets',1),(2,'Wightless Aluminum Mug',2),(3,'Limitless Flask of Holding',2),(4,'Shiny Ninja Forehead Protector',1),(24,'Great Staff of Ages',2),(25,'Interplanar Tablet',2),(26,'Neurolizer',2),(27,'Radioactive Potato',1),(28,'Portable Teleporter',1),(29,'MIkasa Ackerman Figma',1),(30,'Jamaican Glass Bong',3),(31,'Cleanest Angular Code',3),(32,'3D Printer',10);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Fortis','Kurogane','fortis','69634935c406c6bcd62662add18637ad','fortis@fortis.com','2015-09-01'),(2,'Jaina','Watcher','theSorceress','8e18187e5e6dcdf714a1c37ddc1259b3','jaina@magic.com','2015-09-14'),(3,'Christophe','Commander','ccchristophe','bd148981b8caadda003c8bd62586b46f','ccc@ccc.com','2015-06-29'),(8,'Lorem','Ipsum','Lipsum','fc968f59ec7d00aef3d3b14fce9fa88a','lipsum@theipsums.net','2015-06-29'),(9,'Shain','Lafazan','iAmShain','7a3af604e52e2577b3f5b77e96f3e01d','shain@shain.com','2015-06-29'),(10,'Hareesh','PuliyedathUmdubath','vimMaster','522a914beeabb55f5ee7544758839104','hareesh@hareesh.com','2015-06-29'),(11,'Paula','Chojnacki','paula','482c811da5d5b4bc6d497ffa98491e38','paula@paula.com','2015-06-29');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wishlists`
--

DROP TABLE IF EXISTS `wishlists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wishlists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) DEFAULT NULL,
  `item_id` varchar(45) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wishlists`
--

LOCK TABLES `wishlists` WRITE;
/*!40000 ALTER TABLE `wishlists` DISABLE KEYS */;
INSERT INTO `wishlists` VALUES (2,'1','4','2015-09-02'),(3,'2','2','2015-09-20'),(4,'2','3','2015-09-20'),(5,'1','3','2015-09-21'),(9,'2','24','2015-06-28'),(10,'2','25','2015-06-28'),(11,'2','26','2015-06-28'),(13,'1','28','2015-06-29'),(14,'1','29','2015-06-29'),(15,'3','30','2015-06-29'),(16,'3','31','2015-06-29'),(20,'9','1','2015-06-29'),(21,'9','4','2015-06-29'),(22,'9','31','2015-06-29'),(23,'10','31','2015-06-29'),(24,'10','4','2015-06-29'),(25,'10','32','2015-06-29'),(26,'11','1','2015-06-29'),(27,'11','4','2015-06-29'),(30,'10','1','2015-06-29'),(31,'10','25','2015-06-29'),(33,'1','2','2015-06-29'),(34,'3','32','2015-06-30'),(35,'3','1','2015-06-30');
/*!40000 ALTER TABLE `wishlists` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-30 15:56:02
