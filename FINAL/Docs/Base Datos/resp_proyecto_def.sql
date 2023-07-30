-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: resp_proyecto_def
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
-- Table structure for table `foro`
--

DROP TABLE IF EXISTS `foro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foro` (
  `ID_foro` int(11) NOT NULL AUTO_INCREMENT,
  `ID_usuario` int(11) DEFAULT NULL,
  `Titulo` varchar(70) DEFAULT NULL,
  `Tema` varchar(150) DEFAULT NULL,
  `Descripcion` varchar(250) DEFAULT NULL,
  `Preguntas` varchar(200) DEFAULT NULL,
  `Img` varchar(200) DEFAULT NULL,
  `Likes` int(20) DEFAULT NULL,
  PRIMARY KEY (`ID_foro`),
  KEY `ID_usuario` (`ID_usuario`),
  CONSTRAINT `foro_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuario` (`ID_usuario`)
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
  `ID_juego` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_juego` varchar(100) DEFAULT NULL,
  `clasificacion` varchar(20) DEFAULT NULL,
  `fecha_lanzamiento` varchar(50) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `consola` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_juego`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `juegos`
--

LOCK TABLES `juegos` WRITE;
/*!40000 ALTER TABLE `juegos` DISABLE KEYS */;
INSERT INTO `juegos` VALUES (1,'League of Legends(LOL)','TEEN','Lanzamiento: 27 de octubre de 2009','Es un juego de estrategia por equipos en el que dos equipos conformados por cinco poderosos campeones se enfrentan para destruir la base del otro.','Consola: PC');
/*!40000 ALTER TABLE `juegos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensajes` (
  `ID_mensaje` int(11) NOT NULL AUTO_INCREMENT,
  `ID_usuario` int(11) DEFAULT NULL,
  `ID_foro` int(11) DEFAULT NULL,
  `Contenido` varchar(500) DEFAULT NULL,
  `Likes` int(10) DEFAULT NULL,
  `FechaHora` char(50) NOT NULL,
  PRIMARY KEY (`ID_mensaje`),
  KEY `ID_usuario` (`ID_usuario`),
  KEY `ID_foro` (`ID_foro`),
  CONSTRAINT `mensajes_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuario` (`ID_usuario`),
  CONSTRAINT `mensajes_ibfk_2` FOREIGN KEY (`ID_foro`) REFERENCES `foro` (`ID_foro`)
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
-- Table structure for table `mensajes_perdidos`
--

DROP TABLE IF EXISTS `mensajes_perdidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensajes_perdidos` (
  `ID_mensajeP` int(11) NOT NULL AUTO_INCREMENT,
  `ID_usuario` int(11) DEFAULT NULL,
  `ID_perdido` int(11) DEFAULT NULL,
  `contenido` char(250) NOT NULL,
  `FechaHora` char(50) NOT NULL,
  PRIMARY KEY (`ID_mensajeP`),
  KEY `ID_usuario` (`ID_usuario`),
  KEY `ID_perdido` (`ID_perdido`),
  CONSTRAINT `mensajes_perdidos_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuario` (`ID_usuario`),
  CONSTRAINT `mensajes_perdidos_ibfk_2` FOREIGN KEY (`ID_perdido`) REFERENCES `publicar_perdido` (`ID_perdido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensajes_perdidos`
--

LOCK TABLES `mensajes_perdidos` WRITE;
/*!40000 ALTER TABLE `mensajes_perdidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `mensajes_perdidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensajes_ventas`
--

DROP TABLE IF EXISTS `mensajes_ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensajes_ventas` (
  `ID_mensajeV` int(11) NOT NULL AUTO_INCREMENT,
  `ID_usuario` int(11) DEFAULT NULL,
  `ID_venta` int(11) DEFAULT NULL,
  `contenido` char(250) NOT NULL,
  `FechaHora` char(50) NOT NULL,
  PRIMARY KEY (`ID_mensajeV`),
  KEY `ID_usuario` (`ID_usuario`),
  KEY `ID_venta` (`ID_venta`),
  CONSTRAINT `mensajes_ventas_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuario` (`ID_usuario`),
  CONSTRAINT `mensajes_ventas_ibfk_2` FOREIGN KEY (`ID_venta`) REFERENCES `ventas` (`ID_venta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensajes_ventas`
--

LOCK TABLES `mensajes_ventas` WRITE;
/*!40000 ALTER TABLE `mensajes_ventas` DISABLE KEYS */;
/*!40000 ALTER TABLE `mensajes_ventas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensajesj`
--

DROP TABLE IF EXISTS `mensajesj`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensajesj` (
  `ID_mensajej` int(11) NOT NULL AUTO_INCREMENT,
  `ID_usuario` int(11) DEFAULT NULL,
  `ID_juego` int(11) DEFAULT NULL,
  `Contenido` varchar(500) DEFAULT NULL,
  `Likes` int(10) DEFAULT NULL,
  `Usuario` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`ID_mensajej`),
  KEY `ID_usuario` (`ID_usuario`),
  KEY `ID_juego` (`ID_juego`),
  CONSTRAINT `mensajesj_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuario` (`ID_usuario`),
  CONSTRAINT `mensajesj_ibfk_2` FOREIGN KEY (`ID_juego`) REFERENCES `juegos` (`ID_juego`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensajesj`
--

LOCK TABLES `mensajesj` WRITE;
/*!40000 ALTER TABLE `mensajesj` DISABLE KEYS */;
/*!40000 ALTER TABLE `mensajesj` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publicar_perdido`
--

DROP TABLE IF EXISTS `publicar_perdido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publicar_perdido` (
  `ID_perdido` int(11) NOT NULL AUTO_INCREMENT,
  `ID_usuario` int(11) DEFAULT NULL,
  `Titulo` varchar(70) DEFAULT NULL,
  `Descripcion` varchar(250) DEFAULT NULL,
  `Lugar` varchar(100) DEFAULT NULL,
  `Recompensa` varchar(70) DEFAULT NULL,
  `Img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID_perdido`),
  KEY `ID_usuario` (`ID_usuario`),
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
  `Hashe` varchar(500) DEFAULT NULL,
  `Sal` varchar(50) DEFAULT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `num_cuenta` int(15) DEFAULT NULL,
  `num_telefono` int(15) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `grupo` int(10) DEFAULT NULL,
  `f_perfil` varchar(250) DEFAULT NULL,
  `f_portada` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`ID_usuario`)
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
  `ID_venta` int(11) NOT NULL AUTO_INCREMENT,
  `ID_usuario` int(11) DEFAULT NULL,
  `Descripcion` varchar(250) DEFAULT NULL,
  `Precio` varchar(70) DEFAULT NULL,
  `Lugar` varchar(70) DEFAULT NULL,
  `Img` varchar(200) DEFAULT NULL,
  `Usuario` varchar(20) DEFAULT NULL,
  `Hora1` varchar(20) DEFAULT NULL,
  `Hora2` varchar(20) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Nombre_producto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_venta`),
  KEY `ID_usuario` (`ID_usuario`),
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

-- Dump completed on 2023-07-30 14:32:22
