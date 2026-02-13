-- MySQL dump 10.13  Distrib 8.0.44, for Win64 (x86_64)
--
-- Host: localhost    Database: skincare
-- ------------------------------------------------------
-- Server version	8.0.44

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `skincare_users`
--

DROP TABLE IF EXISTS `skincare_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skincare_users` (
  `skincare_user_id` int NOT NULL AUTO_INCREMENT,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `pronouns` varchar(60) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `date_time_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_time_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`skincare_user_id`),
  UNIQUE KEY `email_address` (`email_address`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skincare_users`
--

LOCK TABLES `skincare_users` WRITE;
/*!40000 ALTER TABLE `skincare_users` DISABLE KEYS */;
INSERT INTO `skincare_users` VALUES (1,'emily@skincare.com','fc65a57999f865235da9f128157457f6a3b8b9da45924d72216f59dda112a241','she/her','Emily','Villanueva','123-456-7890','2026-02-13 18:58:58','2026-02-13 18:58:58'),(2,'mimi@skincare.com','baf980e6f1583cad6a6cce026cedbe495e70e56f467c8eda80ed05c38b9a837d','she/her','Mimi','Valentines','234-567-8901','2026-02-13 18:59:00','2026-02-13 18:59:00'),(3,'luna@skincare.com','de450c1d837dffd0b8aff61cfe702b33c2e0d1d6e57500d4589845a7ff27b002','she/her','Luna','Soleil','345-678-9012','2026-02-13 18:59:01','2026-02-13 18:59:01');
/*!40000 ALTER TABLE `skincare_users` ENABLE KEYS */;
UNLOCK TABLES;
