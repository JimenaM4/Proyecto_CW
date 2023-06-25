-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: proyecto
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

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
-- Table structure for table `compra`
--

DROP TABLE IF EXISTS `compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compra` (
  `ID_USUARIO` int(11) DEFAULT NULL,
  `ID_ARTICULO` int(11) DEFAULT NULL,
  `cantidad` int(4) DEFAULT NULL,
  KEY `ID_USUARIO` (`ID_USUARIO`),
  KEY `ID_ARTICULO` (`ID_ARTICULO`),
  CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID_USUARIO`),
  CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`ID_ARTICULO`) REFERENCES `ventas` (`ID_ARTICULO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compra`
--

LOCK TABLES `compra` WRITE;
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foro`
--

DROP TABLE IF EXISTS `foro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foro` (
  `ID_FORO` int(5) NOT NULL AUTO_INCREMENT,
  `tema` char(50) DEFAULT NULL,
  `tipo` char(8) NOT NULL,
  PRIMARY KEY (`ID_FORO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foro`
--

LOCK TABLES `foro` WRITE;
/*!40000 ALTER TABLE `foro` DISABLE KEYS */;
/*!40000 ALTER TABLE `foro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `juegos`
--

DROP TABLE IF EXISTS `juegos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `juegos` (
  `ID_JUEGO` int(5) NOT NULL AUTO_INCREMENT,
  `nombre_juego` char(50) NOT NULL,
  `consola` char(20) DEFAULT NULL,
  PRIMARY KEY (`ID_JUEGO`),
  UNIQUE KEY `nombre_juego` (`nombre_juego`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `juegos`
--

LOCK TABLES `juegos` WRITE;
/*!40000 ALTER TABLE `juegos` DISABLE KEYS */;
/*!40000 ALTER TABLE `juegos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `obj_encontrado`
--

DROP TABLE IF EXISTS `obj_encontrado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `obj_encontrado` (
  `ID_OBJETO` int(11) DEFAULT NULL,
  `ID_USUARIO` int(11) DEFAULT NULL,
  `lugar` char(50) DEFAULT NULL,
  KEY `ID_OBJETO` (`ID_OBJETO`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  CONSTRAINT `obj_encontrado_ibfk_1` FOREIGN KEY (`ID_OBJETO`) REFERENCES `obj_perdido` (`ID_OBJETO`),
  CONSTRAINT `obj_encontrado_ibfk_2` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `obj_encontrado`
--

LOCK TABLES `obj_encontrado` WRITE;
/*!40000 ALTER TABLE `obj_encontrado` DISABLE KEYS */;
/*!40000 ALTER TABLE `obj_encontrado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `obj_perdido`
--

DROP TABLE IF EXISTS `obj_perdido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `obj_perdido` (
  `ID_OBJETO` int(10) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` int(11) DEFAULT NULL,
  `lugar` char(50) DEFAULT NULL,
  PRIMARY KEY (`ID_OBJETO`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  CONSTRAINT `obj_perdido_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `obj_perdido`
--

LOCK TABLES `obj_perdido` WRITE;
/*!40000 ALTER TABLE `obj_perdido` DISABLE KEYS */;
/*!40000 ALTER TABLE `obj_perdido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unirse_juego`
--

DROP TABLE IF EXISTS `unirse_juego`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unirse_juego` (
  `ID_USUARIO` int(11) DEFAULT NULL,
  `ID_JUEGO` int(11) DEFAULT NULL,
  `ID_FORO` int(11) DEFAULT NULL,
  KEY `ID_USUARIO` (`ID_USUARIO`),
  KEY `ID_JUEGO` (`ID_JUEGO`),
  KEY `ID_FORO` (`ID_FORO`),
  CONSTRAINT `unirse_juego_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID_USUARIO`),
  CONSTRAINT `unirse_juego_ibfk_2` FOREIGN KEY (`ID_JUEGO`) REFERENCES `juegos` (`ID_JUEGO`),
  CONSTRAINT `unirse_juego_ibfk_3` FOREIGN KEY (`ID_FORO`) REFERENCES `foro` (`ID_FORO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unirse_juego`
--

LOCK TABLES `unirse_juego` WRITE;
/*!40000 ALTER TABLE `unirse_juego` DISABLE KEYS */;
/*!40000 ALTER TABLE `unirse_juego` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `ID_USUARIO` int(10) NOT NULL AUTO_INCREMENT,
  `no_cuenta` int(9) NOT NULL,
  `nombre` char(50) NOT NULL,
  `grupo` int(3) NOT NULL,
  `telefono` int(10) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `contrasena` varchar(8) NOT NULL,
  PRIMARY KEY (`ID_USUARIO`),
  UNIQUE KEY `no_cuenta` (`no_cuenta`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ventas` (
  `ID_ARTICULO` int(10) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` int(11) DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `precio` int(5) NOT NULL,
  `punto_venta` char(50) DEFAULT NULL,
  `especificaciones` text DEFAULT NULL,
  PRIMARY KEY (`ID_ARTICULO`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-13 15:01:39
