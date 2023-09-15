-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: bd_emporio
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `vinho`
--

DROP TABLE IF EXISTS `vinho`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vinho` (
  `vin_idVinho` int NOT NULL AUTO_INCREMENT,
  `vin_nome` varchar(255) NOT NULL,
  `vin_ano` int DEFAULT NULL,
  `vin_cor` varchar(255) DEFAULT NULL,
  `vin_grau` float DEFAULT NULL,
  `vin_preco` float DEFAULT NULL,
  `vin_foto_vinho` varchar(255) DEFAULT NULL,
  `FK_pro_idProdutor` int DEFAULT NULL,
  PRIMARY KEY (`vin_idVinho`),
  KEY `FK_pro_idProdutor` (`FK_pro_idProdutor`),
  CONSTRAINT `vinho_ibfk_1` FOREIGN KEY (`FK_pro_idProdutor`) REFERENCES `produtor` (`pro_idProdutor`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vinho`
--

LOCK TABLES `vinho` WRITE;
/*!40000 ALTER TABLE `vinho` DISABLE KEYS */;
INSERT INTO `vinho` VALUES (1,'Farone Lopes',2022,'Tinto',10.5,15.6,'faroni-lopes.jpg',2),(2,'Santa Helena',2021,'Branco',11,21,'santa-helena.jpg',1),(3,'Toro Concha',2020,'Tinto',13.5,55,'toro-concha.jpg',1),(4,'Periquita',2020,'Tinto',12.5,40,'periquita.jpg',4),(5,'Velho da Lancha',2022,'Branco',11,40,'velho-da-lancha.jpg',3),(6,'Toro Concha',2021,'Branco',12.5,65,'toro-concha.jpg',1),(7,'Pérgola',2019,'Tinto',12.5,21,'pergola.jpg',5),(8,'Casillero del Diablo',2015,'Tinto',14,49,'casillero-del-diablo.jpg',6),(9,'Porto',2010,'Tinto',14,99,'porto.jpg',11),(10,'Viñapeña',2017,'Rose',10.5,60,'Viñapeña.jpg',8),(11,'Passione',2019,'Branco',12.5,45,'passione.jpg',7),(12,'Ancellotta',2015,'Tinto',13,80,'ancellotta.jpg',7),(13,'Assemblase',2016,'Tinto',13,75,'assemblase.jpg',7),(14,'Duas Quintanas',2015,'Rose',11,89,'duas-quintas.jpg',9),(15,'Pera Manca',2014,'Tinto',12,77,'pera-manca.jpg',10),(31,'Odfjell Armador Syrah',2018,'Tinto',12,116.9,'odfjell-armador-syrah.jpg',6),(32,'Foral de Cantanhede',2022,'Tinto',17.5,49.9,'ForalCatanhedeTinto.jpg',4),(33,'3 Vinhos Italianos',2004,'Tinto, Branco e Rosé',17,136.9,'4e24c0da7d.webp',3);
/*!40000 ALTER TABLE `vinho` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-15 16:41:03
