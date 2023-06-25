-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: Proyecto_final
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
-- Table structure for table `contra`
--

DROP TABLE IF EXISTS `contra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contra` (
  `Id_contra` int(11) NOT NULL,
  `Id_usuario` int(11) DEFAULT NULL,
  `Hash` varchar(100) DEFAULT NULL,
  `Sal` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Id_contra`),
  KEY `Id_usuario` (`Id_usuario`),
  CONSTRAINT `contra_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario` (`ID_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contra`
--

LOCK TABLES `contra` WRITE;
/*!40000 ALTER TABLE `contra` DISABLE KEYS */;
/*!40000 ALTER TABLE `contra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foros`
--

DROP TABLE IF EXISTS `foros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foros` (
  `ID_FORO` int(11) NOT NULL AUTO_INCREMENT,
  `Tema` varchar(50) DEFAULT NULL,
  `Visibilidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_FORO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foros`
--

LOCK TABLES `foros` WRITE;
/*!40000 ALTER TABLE `foros` DISABLE KEYS */;
/*!40000 ALTER TABLE `foros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `juegos`
--

DROP TABLE IF EXISTS `juegos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `juegos` (
  `Nombre_juego` varchar(50) DEFAULT NULL,
  `clasificacion` varchar(2) DEFAULT NULL,
  `fecha_lanzamiento` date DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `imagen` longblob DEFAULT NULL,
  `consola` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `juegos`
--

LOCK TABLES `juegos` WRITE;
/*!40000 ALTER TABLE `juegos` DISABLE KEYS */;
INSERT INTO `juegos` VALUES ('LOL','2','2009-10-27','juego de estrategia por equipos,dos equipos se enfrentan para destruir la base del otro','league-of-legends.avif','pc'),('HALO','3','2001-11-15','franquicia de videojuegos de ciencia ficci?nse centra en una guerra interestelar entre la humanidad y una alianza teocr?tica de alien?genas','1366_2000.JPEG','xbox'),('Spider-man','2','2018-09-07','videojuego de acci?n y aventura basado en el popular superh?roe','JXJMXBFFVRG3TNJEVOQ342VESE.JFIF','playstation');
/*!40000 ALTER TABLE `juegos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensajes` (
  `ID_mensaje` int(11) NOT NULL,
  `ID_usuario` int(11) DEFAULT NULL,
  `ID_foro` int(11) DEFAULT NULL,
  `Contenido` varchar(200) DEFAULT NULL,
  `Hora` int(6) DEFAULT NULL,
  `likes` int(5) DEFAULT NULL,
  PRIMARY KEY (`ID_mensaje`),
  KEY `ID_usuario` (`ID_usuario`),
  KEY `ID_foro` (`ID_foro`),
  CONSTRAINT `mensajes_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuario` (`ID_usuario`),
  CONSTRAINT `mensajes_ibfk_2` FOREIGN KEY (`ID_foro`) REFERENCES `foros` (`ID_FORO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensajes`
--

LOCK TABLES `mensajes` WRITE;
/*!40000 ALTER TABLE `mensajes` DISABLE KEYS */;
/*!40000 ALTER TABLE `mensajes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publicar_perdido`
--

DROP TABLE IF EXISTS `publicar_perdido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publicar_perdido` (
  `ID_usuario` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Imagen` longblob DEFAULT NULL,
  `Fecha_recuperacion` date DEFAULT NULL,
  `recompensa` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_usuario`),
  CONSTRAINT `publicar_perdido_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuario` (`ID_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publicar_perdido`
--

LOCK TABLES `publicar_perdido` WRITE;
/*!40000 ALTER TABLE `publicar_perdido` DISABLE KEYS */;
/*!40000 ALTER TABLE `publicar_perdido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `ID_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `PASS` int(11) DEFAULT NULL,
  `numero_cuenta` int(15) DEFAULT NULL,
  `grupo` int(11) DEFAULT NULL,
  `num_telefono` int(15) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `nivel` int(5) DEFAULT NULL,
  PRIMARY KEY (`ID_usuario`),
  KEY `PASS` (`PASS`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`PASS`) REFERENCES `contra` (`Id_contra`)
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
  `ID_usuario` int(11) NOT NULL,
  `Nombre_producto` varchar(50) DEFAULT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL,
  `Tipo_producto` varchar(50) DEFAULT NULL,
  `Fecha_disponibilidad` date DEFAULT NULL,
  `Lugar_entrega` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_usuario`),
  CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuario` (`ID_usuario`)
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

-- Dump completed on 2023-06-19 22:01:59
