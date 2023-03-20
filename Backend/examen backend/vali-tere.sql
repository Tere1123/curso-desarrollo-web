CREATE DATABASE  IF NOT EXISTS `validacion` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `validacion`;
-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: validacion
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empleados` (
  `id` int NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `clave` varchar(10) DEFAULT NULL,
  `user_type` varchar(20) DEFAULT NULL,
  `dni` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `biometrica` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `n_mac` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `ck_estado` CHECK ((`estado` in (_utf8mb4'ok',_utf8mb4'pe',_utf8mb4'nd')))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES (123410,'Angela','Herrera','ah@lush.com','1234','usuario','https://album.mediaset.es/eimg/2020/02/27/pFxLMsHaCFEQsqYNmZtmz.jpg?w=1024','https://album.mediaset.es/eimg/2020/02/27/pFxLMsHaCFEQsqYNmZtmz.jpg?w=1024','123456','ok'),(123411,'Gabriel','Arango','ga@lush.com','123411','usuario','https://emtstatic.com/2019/06/dni.jpg',NULL,'123451','pe'),(123412,'Gorka','Gomez','gg@lush.com','123412','usuario',NULL,'https://1.bp.blogspot.com/-I5BxC1AZips/XwQi2PJCPqI/AAAAAAAAR_U/mq-y1AXMJiwFpahq28-ut4neP92Ep6eAQCLcBGAsYHQ/s1600/DNI.jpg','123452','pe'),(123413,'Juan','Olmos','jo@lush.com','123413','usuario','https://developers.mobbeel.com/docs/assets/mobbscan/documenttypes/ESPIDCardV2-front.png','https://developers.mobbeel.com/docs/assets/mobbscan/documenttypes/ESPIDCardV2-front.png','123453','ok'),(123414,'Santiago','Martinez','sm@lush.com','123414','usuario','https://developers.mobbeel.com/docs/assets/mobbscan/documenttypes/ESPIDCardV2-front.png','https://developers.mobbeel.com/docs/assets/mobbscan/documenttypes/ESPIDCardV2-front.png',NULL,'pe'),(123415,'Elena','Castro','ec@lush.com','123415','usuario','https://miracomohacerlo.com/wp-content/uploads/2016/10/documento-espanola-768x476.jpg','https://miracomohacerlo.com/wp-content/uploads/2016/10/documento-espanola-768x476.jpg','123454','ok'),(123416,'Carmen','Martinez','cm@lush.com','123416','usuario','https://miracomohacerlo.com/wp-content/uploads/2016/10/documento-espanola-768x476.jpg','https://miracomohacerlo.com/wp-content/uploads/2016/10/documento-espanola-768x476.jpg','123455','ok'),(123417,'Andres','Diaz','ad@lush.com','123417','usuario','https://developers.mobb','https://developers.mobb',NULL,'pe'),(123418,'Sofia','Mantilla','soma@lush.com','123418','admin','https://miracomohacerlo.com/wp-content/uploads/2016/10/documento-espanola-768x476.jpg','https://miracomohacerlo.com/wp-content/uploads/2016/10/documento-espanola-768x476.jpg','1236546','ok'),(123456,'Jose','Lopez','jl@lush.com','123456','usuario',NULL,'','','nd'),(123457,'ana','Fernandez','af@lush.com','123457','colaborador','https://miracomohacerlo.com/wp-content/uploads/2016/10/documento-espanola-768x476.jpg','https://miracomohacerlo.com/wp-content/uploads/2016/10/documento-espanola-768x476.jpg','123456','ok'),(123458,'Arturo','Perez','ap@lush.com','123458','usuario','https://developers.mobb','https://developers.mobb',NULL,'pe'),(123459,'Fernana','Campos','fc@lush.com','123459','colaborador','https://miracomohacerlo.com/wp-content/uploads/2016/10/documento-espanola-768x476.jpg','https://miracomohacerlo.com/wp-content/uploads/2016/10/documento-espanola-768x476.jpg','1234569','ok');
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'validacion'
--

--
-- Dumping routines for database 'validacion'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-20 13:04:03
