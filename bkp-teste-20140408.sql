-- MySQL dump 10.13  Distrib 5.6.16, for osx10.9 (x86_64)
--
-- Host: localhost    Database: teste
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `fornecedores`
--

DROP TABLE IF EXISTS `fornecedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fornecedores` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nomraz` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fornecedores`
--

LOCK TABLES `fornecedores` WRITE;
/*!40000 ALTER TABLE `fornecedores` DISABLE KEYS */;
INSERT INTO `fornecedores` VALUES (1,'Fornecetudo LTDA'),(2,'Fornecetudo LTDA2');
/*!40000 ALTER TABLE `fornecedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fornecedores_produtos`
--

DROP TABLE IF EXISTS `fornecedores_produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fornecedores_produtos` (
  `produto_id` int(11) unsigned NOT NULL,
  `fornecedor_id` int(10) unsigned NOT NULL,
  KEY `fk_produtos` (`produto_id`),
  KEY `fk_fornecedor` (`fornecedor_id`),
  CONSTRAINT `fk_fornecedor` FOREIGN KEY (`fornecedor_id`) REFERENCES `fornecedores` (`id`),
  CONSTRAINT `fk_produtos` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fornecedores_produtos`
--

LOCK TABLES `fornecedores_produtos` WRITE;
/*!40000 ALTER TABLE `fornecedores_produtos` DISABLE KEYS */;
INSERT INTO `fornecedores_produtos` VALUES (1,1),(2,1),(3,2),(3,2);
/*!40000 ALTER TABLE `fornecedores_produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupos`
--

DROP TABLE IF EXISTS `grupos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `datcad` datetime DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `mesref` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupos`
--

LOCK TABLES `grupos` WRITE;
/*!40000 ALTER TABLE `grupos` DISABLE KEYS */;
INSERT INTO `grupos` VALUES (1,'2014-03-19 00:00:00','Comida','2014-04-01 00:00:00'),(2,'2014-03-19 10:07:26','Alimentos','2014-04-01 00:00:00'),(3,'2014-04-01 00:00:00','teste','2014-04-01 00:00:00'),(4,'2014-04-08 00:00:00','teste','2014-04-01 00:00:00'),(5,'2014-04-01 00:00:00','teste','2014-04-01 00:00:00'),(6,'2014-04-01 00:00:00','teste','2014-04-01 00:00:00'),(7,'2014-04-08 14:57:31','teste','2014-04-01 00:00:00');
/*!40000 ALTER TABLE `grupos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `datcad` datetime DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `grupo_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `grupo_id` (`grupo_id`),
  CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'2014-03-19 10:37:11','Arroz Prime',4.45,2),(2,'2014-03-19 10:37:11','Arroz Quebrado',5.5,1),(3,'2014-03-19 10:37:11','Produto 0',0,2),(4,'2014-03-19 10:37:11','Produto 1',1.5,1),(5,'2014-03-19 10:37:11','Produto 2',3,1),(6,'2014-03-19 10:37:11','Produto 3',4.5,2),(7,'2014-03-19 10:37:11','Produto 4',6,2),(8,'2014-03-19 10:37:11','Produto 5',7.5,1),(9,'2014-03-19 10:37:11','Produto 6',9,1),(10,'2014-03-19 10:37:11','Produto 7',10.5,2),(11,'2014-03-19 10:37:11','Produto 8',12,1),(12,'2014-03-19 10:37:11','Produto 9',13.5,2);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'teste'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-04-08 15:46:08
