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
-- Table structure for table `produtor`
--

DROP TABLE IF EXISTS `produtor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produtor` (
  `pro_idProdutor` int NOT NULL AUTO_INCREMENT,
  `pro_nome` varchar(255) NOT NULL,
  `pro_morada` varchar(255) DEFAULT NULL,
  `pro_telefone` bigint DEFAULT NULL,
  `pro_email` varchar(255) DEFAULT NULL,
  `FK_reg_idRegiao` int DEFAULT NULL,
  PRIMARY KEY (`pro_idProdutor`),
  KEY `FK_reg_idRegiao` (`FK_reg_idRegiao`),
  CONSTRAINT `produtor_ibfk_1` FOREIGN KEY (`FK_reg_idRegiao`) REFERENCES `regiao` (`reg_idRegiao`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtor`
--

LOCK TABLES `produtor` WRITE;
/*!40000 ALTER TABLE `produtor` DISABLE KEYS */;
INSERT INTO `produtor` VALUES (1,'QT.Vallado','Régua',351253456765498,'vallado@gmail.com',1),(2,'QT.Valado','Régua',3512533336666,'vallado@gmail.com',1),(3,'QT.Pacheca','Lamego',3512566663333,'pacheca@gmail.com',1),(4,'Finagra','Reguemos',3512531324565,'finagra@hotmail.com',2),(5,'Dão Sul','Carregal do Sal',351265652424,'daosul@daosul.com',3),(6,'Fund.Eng.Almeida','',3512523258799,'',2),(7,'Kolheita Ideias','',3512574628632,'',5),(8,'Anselmo Mendes','Gaia',3512532536425,'',4),(9,'Fund.Ramos','Gaia',3512637235521,'ramos@bol.com',6),(10,'Provam','',3512312134895,'provam@hotmail.com',4),(11,'Domingo Alves','Cumieira',3512733216612,'alves@gmail.com',4),(12,'Sogrape','',3512966123322,'sog@gmail.com',5);
/*!40000 ALTER TABLE `produtor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-15 16:41:02
