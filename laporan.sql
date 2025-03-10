-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: localhost    Database: laporan
-- ------------------------------------------------------
-- Server version	8.0.39

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pemasukan`
--

DROP TABLE IF EXISTS `pemasukan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pemasukan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `bulan` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `total` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pemasukan`
--

LOCK TABLES `pemasukan` WRITE;
/*!40000 ALTER TABLE `pemasukan` DISABLE KEYS */;
INSERT INTO `pemasukan` VALUES (1,'Januari','01-01-2024',90000),(2,'Januari','15-01-2024',120000),(3,'Januari','25-01-2024',150000),(4,'Januari','31-01-2024',230000),(5,'Februari','02-02-2024',100000),(6,'Februari','12-02-2024',110000),(7,'Februari','20-02-2024',140000),(8,'Februari','28-02-2024',210000),(9,'Maret','03-03-2024',95000),(10,'Maret','15-03-2024',130000),(11,'Maret','25-03-2024',160000),(12,'Maret','31-03-2024',240000),(13,'April','04-04-2024',98000),(14,'April','15-04-2024',140000),(15,'April','25-04-2024',170000),(16,'April','30-04-2024',260000),(17,'Mei','05-05-2024',101000),(18,'Mei','15-05-2024',145000),(19,'Mei','25-05-2024',175000),(20,'Mei','31-05-2024',270000),(21,'Juni','06-06-2024',103000),(22,'Juni','15-06-2024',150000),(23,'Juni','25-06-2024',180000),(24,'Juni','30-06-2024',280000),(25,'Juli','07-07-2024',105000),(26,'Juli','15-07-2024',155000),(27,'Juli','25-07-2024',185000),(28,'Juli','31-07-2024',290000),(29,'Agustus','08-08-2024',108000),(30,'Agustus','15-08-2024',160000),(31,'Agustus','25-08-2024',190000),(32,'Agustus','31-08-2024',300000),(33,'September','09-09-2024',110000),(34,'September','15-09-2024',165000),(35,'September','25-09-2024',195000),(36,'September','30-09-2024',310000),(37,'Oktober','10-10-2024',112000),(38,'Oktober','15-10-2024',170000),(39,'Oktober','25-10-2024',200000),(40,'Oktober','31-10-2024',320000),(41,'November','11-11-2024',115000),(42,'November','15-11-2024',175000),(43,'November','25-11-2024',205000),(44,'November','30-11-2024',330000),(45,'Desember','12-12-2024',118000),(46,'Desember','15-12-2024',180000),(47,'Desember','25-12-2024',210000),(48,'Desember','31-12-2024',340000);
/*!40000 ALTER TABLE `pemasukan` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-05 21:53:26
