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
-- Table structure for table `skincare`
--

DROP TABLE IF EXISTS `skincare`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skincare` (
  `skincare_id` int NOT NULL,
  `skincare_code` varchar(10) NOT NULL,
  `skincare_name` varchar(255) NOT NULL,
  `skincare_description` text NOT NULL,
  `skincare_brand` varchar(50) NOT NULL,
  `skincare_dosage_form` varchar(60) NOT NULL,
  `skincare_type_id` int DEFAULT '0',
  `skincare_buy_price` decimal(10,2) NOT NULL,
  `skincare_sell_price` decimal(10,2) NOT NULL,
  `date_time_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_time_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`skincare_id`),
  UNIQUE KEY `skincare_code` (`skincare_code`),
  KEY `skincare_type_id` (`skincare_type_id`),
  CONSTRAINT `skincare_ibfk_1` FOREIGN KEY (`skincare_type_id`) REFERENCES `skincare_types` (`skincare_type_id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skincare`
--

LOCK TABLES `skincare` WRITE;
/*!40000 ALTER TABLE `skincare` DISABLE KEYS */;
INSERT INTO `skincare` VALUES (1,'MOIS','CeraVe Moisturizing Cream','A lightweight moisturizer that provides long-lasting hydration for all skin types.','CeraVe','Cream',1,1.00,5.00,'2026-03-12 04:15:30','2026-03-12 04:15:30'),(2,'SERN','The Ordinary Niacinamide 10% + Zinc 1%','A serum that helps reduce the appearance of blemishes and congestion.','The Ordinary','Serum',2,2.00,10.00,'2026-03-12 04:15:31','2026-03-12 04:15:31'),(3,'MOIS1','Neutrogena Hydro Boost Water Gel','A lightweight gel moisturizer that absorbs quickly and leaves the skin feeling smooth and refreshed. It contains hyaluronic acid to support hydration without feeling heavy.','Neutrogena','Gel',1,11.25,15.49,'2026-03-12 07:18:19','2026-03-12 07:18:19'),(4,'MOIS2','La Roche-Posay Toleriane Double Repair Face Moisturizer','This daily moisturizer is made to hydrate sensitive skin while helping repair the moisture barrier. Its formula feels gentle on the skin and is suitable for everyday use.','La Roche-Posay','Lotion',1,14.75,19.99,'2026-03-12 07:18:22','2026-03-12 07:18:22'),(5,'MOIS3','Vanicream Daily Facial Moisturizer','A simple moisturizer created for sensitive skin and daily hydration. It is free of many common irritants and helps support a soft and balanced skin feel.','Vanicream','Cream',1,10.00,13.95,'2026-03-12 07:18:24','2026-03-12 07:18:24'),(6,'MOIS4','First Aid Beauty Ultra Repair Cream','This moisturizer helps calm dry and uncomfortable skin with a rich and soothing formula. It is often used for intense hydration and works well in colder weather.','First Aid Beauty','Cream',1,18.40,24.50,'2026-03-12 07:18:27','2026-03-12 07:18:27'),(7,'SERN1','Good Molecules Hyaluronic Acid Serum','This hydrating serum helps attract moisture to the skin and gives it a smoother appearance. It works especially well when applied before moisturizer on damp skin.','Good Molecules','Serum',2,5.95,8.75,'2026-03-12 07:18:31','2026-03-12 07:18:31'),(8,'SERN2','La Roche-Posay Pure Vitamin C10 Serum','This brightening serum is designed to improve skin radiance and support a more even-looking complexion. It can also help reduce the look of dullness over time.','La Roche-Posay','Serum',2,22.30,29.99,'2026-03-12 07:18:32','2026-03-12 07:18:32'),(9,'SERN3','The Inkey List Retinol Serum','This serum is used at night to support smoother-looking skin and improve the appearance of fine lines. It should be introduced gradually to help skin adjust to retinol.','The Inkey List','Serum',2,9.40,13.60,'2026-03-12 07:18:35','2026-03-12 07:18:35'),(10,'SERN4','Vichy Minéral 89 Hydrating Serum','This serum is made to strengthen hydration and leave the skin feeling plump and refreshed. Its gel-like texture feels light and layers easily with other skincare products.','Vichy','Serum',2,19.85,26.40,'2026-03-12 07:18:37','2026-03-12 07:18:37'),(11,'SUNS1','Black Girl Sunscreen SPF 30','This sunscreen is known for leaving little to no white cast and giving the skin a moisturized finish. It is made for daily use and works well on a range of skin tones.','Black Girl Sunscreen','Lotion',3,13.10,18.25,'2026-03-12 07:18:39','2026-03-12 07:18:39'),(12,'SUNS2','EltaMD UV Clear Broad-Spectrum SPF 46','This sunscreen is popular for acne-prone and sensitive skin because of its lightweight and calming formula. It provides daily sun protection without feeling overly greasy.','EltaMD','Lotion',3,28.50,36.99,'2026-03-12 07:18:40','2026-03-12 07:18:40'),(13,'SUNS3','La Roche-Posay Anthelios Melt-In Milk Sunscreen SPF 60','This sunscreen offers broad-spectrum protection with a creamy texture that spreads easily on the skin. It is made for face and body use and is suitable for outdoor wear.','La Roche-Posay','Cream',3,21.75,29.50,'2026-03-12 07:18:42','2026-03-12 07:18:42'),(14,'SUNS4','Neutrogena Ultra Sheer Dry-Touch Sunscreen SPF 55','This sunscreen is designed to feel lightweight while still providing strong UV protection. Its dry-touch finish makes it useful for people who prefer a less shiny look.','Neutrogena','Lotion',3,9.95,14.20,'2026-03-12 07:18:43','2026-03-12 07:18:43'),(15,'SUNS5','Biore UV Aqua Rich Watery Essence SPF 50 ','This sunscreen has a lightweight watery texture that absorbs quickly into the skin. It provides strong sun protection while feeling breathable and comfortable for daily wear.','Biore','Essence',3,10.50,16.75,'2026-03-12 07:20:16','2026-03-12 07:20:16');
/*!40000 ALTER TABLE `skincare` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skincare_types`
--

DROP TABLE IF EXISTS `skincare_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skincare_types` (
  `skincare_type_id` int NOT NULL,
  `skincare_type_code` varchar(255) NOT NULL,
  `skincare_type_name` varchar(255) NOT NULL,
  `skincare_shelfnumber` int NOT NULL,
  `date_time_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_time_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`skincare_type_id`),
  UNIQUE KEY `skincare_type_code` (`skincare_type_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skincare_types`
--

LOCK TABLES `skincare_types` WRITE;
/*!40000 ALTER TABLE `skincare_types` DISABLE KEYS */;
INSERT INTO `skincare_types` VALUES (1,'MOIS','Moisturizer',1,'2026-03-12 04:15:17','2026-03-12 04:15:17'),(2,'SERN','Serum',2,'2026-03-12 04:15:19','2026-03-12 04:15:19'),(3,'SUNS','Sunscreen',3,'2026-03-12 04:15:20','2026-03-12 04:15:20');
/*!40000 ALTER TABLE `skincare_types` ENABLE KEYS */;
UNLOCK TABLES;

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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-03-12  3:24:14
