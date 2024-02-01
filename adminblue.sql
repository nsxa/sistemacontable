-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: sistemacontable
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `registros`
--

DROP TABLE IF EXISTS `registros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Digito` int(100) NOT NULL,
  `codigo` int(11) NOT NULL,
  `cuenta` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debito` int(11) DEFAULT NULL,
  `credito` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registros`
--

LOCK TABLES `registros` WRITE;
/*!40000 ALTER TABLE `registros` DISABLE KEYS */;
INSERT INTO `registros` VALUES (137,1,1105,'Caja',14875000,0),(138,4,4135,'Comercio al por mayor y nebir',0,12500000),(139,2,2408,'Iva generado',0,2375000),(140,6,6135,'Costo de venta ',11900000,0),(141,1,1435,'Inventario',0,11900000),(142,1,1435,'Mercan no fabricadas por la empresa',15000000,0),(143,4,4135,'Comercio al por mayor menor',0,15000000),(144,2,2408,'Iva descontable',2850000,0),(145,2,2408,'Iva generado',0,2850000),(146,2,2367,'Reteiva',0,427500),(147,1,135517,'Reteiva',427500,0),(148,2,2365,'Retefuente',0,375000),(149,1,135515,'Retefuente',375000,0),(150,2,2368,'ICA',0,52500),(151,1,135518,'ICA',52500,0),(152,1,1110,'Bancos',0,16995000),(153,1,1110,'Bancos',16995000,0),(154,1,1435,'Mercan no fabricadas por la empresa',15000000,0),(155,4,4135,'Comercio al por mayor menor',0,15000000),(156,2,2408,'Iva descontable',2850000,0),(157,2,2408,'Iva generado',0,2850000),(158,2,2367,'Reteiva',0,427500),(159,1,135517,'Reteiva',427500,0),(160,2,2365,'Retefuente',0,375000),(161,1,135515,'Retefuente',375000,0),(162,2,2368,'ICA',0,52500),(163,1,135518,'ICA',52500,0),(164,1,1110,'Bancos',0,16995000),(165,1,1110,'Bancos',16995000,0);
/*!40000 ALTER TABLE `registros` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-29 17:47:48
