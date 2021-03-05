-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: cucaimis
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

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
-- Table structure for table `banco_tejido`
--

DROP TABLE IF EXISTS `banco_tejido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banco_tejido` (
  `id_banco` int(11) NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_banco`),
  KEY `fk_banco_tejido_provincias_idx` (`id_provincia`),
  CONSTRAINT `fk_banco_tejido_provincias` FOREIGN KEY (`id_provincia`) REFERENCES `provincias` (`id_prov`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banco_tejido`
--

LOCK TABLES `banco_tejido` WRITE;
/*!40000 ALTER TABLE `banco_tejido` DISABLE KEYS */;
/*!40000 ALTER TABLE `banco_tejido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contraindicaciones`
--

DROP TABLE IF EXISTS `contraindicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contraindicaciones` (
  `id_contraindicacion` int(11) NOT NULL,
  `detalle` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_contraindicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contraindicaciones`
--

LOCK TABLES `contraindicaciones` WRITE;
/*!40000 ALTER TABLE `contraindicaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `contraindicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donacion_1`
--

DROP TABLE IF EXISTS `donacion_1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donacion_1` (
  `id_proceso` int(11) NOT NULL,
  `cuil_ablacionista` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `cert_defuncion` tinyint(4) DEFAULT NULL,
  `contraindicaciones` int(11) NOT NULL,
  `manifestacion_vol` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `viabilidad` tinyint(4) DEFAULT NULL,
  `coordinacion` tinyint(4) DEFAULT NULL,
  `deteccion` tinyint(4) DEFAULT NULL,
  `ev_hc_globo` tinyint(4) DEFAULT NULL,
  `id_inst_donante` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_proceso`),
  KEY `fk_donacion_1_usuarios1_idx` (`cuil_ablacionista`),
  KEY `fk_donacion_1_contraindicaciones1_idx` (`contraindicaciones`),
  KEY `fk_donacion_1_institucion_donante1_idx` (`id_inst_donante`),
  CONSTRAINT `fk_donacion_1_contraindicaciones1` FOREIGN KEY (`contraindicaciones`) REFERENCES `contraindicaciones` (`id_contraindicacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_donacion_1_institucion_donante1` FOREIGN KEY (`id_inst_donante`) REFERENCES `institucion_donante` (`id_institucion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_donacion_1_usuarios1` FOREIGN KEY (`cuil_ablacionista`) REFERENCES `usuarios` (`cuil`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donacion_1`
--

LOCK TABLES `donacion_1` WRITE;
/*!40000 ALTER TABLE `donacion_1` DISABLE KEYS */;
/*!40000 ALTER TABLE `donacion_1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donacion_2`
--

DROP TABLE IF EXISTS `donacion_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donacion_2` (
  `id_proceso` int(11) NOT NULL,
  `entrevista_fam` tinyint(4) DEFAULT NULL,
  `orden_judicial` tinyint(4) DEFAULT NULL,
  `disp_ablacionista` tinyint(4) DEFAULT NULL,
  `envio` tinyint(4) DEFAULT NULL,
  `fecha_ablacion` date DEFAULT NULL,
  `logistica` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `distribucion` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_proceso`),
  CONSTRAINT `fk_donacion_2_donacion_11` FOREIGN KEY (`id_proceso`) REFERENCES `donacion_1` (`id_proceso`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donacion_2`
--

LOCK TABLES `donacion_2` WRITE;
/*!40000 ALTER TABLE `donacion_2` DISABLE KEYS */;
/*!40000 ALTER TABLE `donacion_2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institucion_donante`
--

DROP TABLE IF EXISTS `institucion_donante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `institucion_donante` (
  `id_institucion` int(11) NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_institucion`),
  KEY `fk_institucion_donante_provincias1_idx` (`id_provincia`),
  CONSTRAINT `fk_institucion_donante_provincias1` FOREIGN KEY (`id_provincia`) REFERENCES `provincias` (`id_prov`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institucion_donante`
--

LOCK TABLES `institucion_donante` WRITE;
/*!40000 ALTER TABLE `institucion_donante` DISABLE KEYS */;
/*!40000 ALTER TABLE `institucion_donante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provincias`
--

DROP TABLE IF EXISTS `provincias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provincias` (
  `id_prov` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_prov`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provincias`
--

LOCK TABLES `provincias` WRITE;
/*!40000 ALTER TABLE `provincias` DISABLE KEYS */;
/*!40000 ALTER TABLE `provincias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `cuil` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cargo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`cuil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `valoracion`
--

DROP TABLE IF EXISTS `valoracion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `valoracion` (
  `id_proceso` int(11) NOT NULL,
  `id_banco` int(11) NOT NULL,
  `estado` int(11) DEFAULT NULL,
  `asignacion` tinyint(4) DEFAULT NULL,
  `fecha_implante` date DEFAULT NULL,
  PRIMARY KEY (`id_proceso`),
  KEY `fk_valoracion_banco_tejido1_idx` (`id_banco`),
  CONSTRAINT `fk_valoracion_banco_tejido1` FOREIGN KEY (`id_banco`) REFERENCES `banco_tejido` (`id_banco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_valoracion_donacion_11` FOREIGN KEY (`id_proceso`) REFERENCES `donacion_1` (`id_proceso`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `valoracion`
--

LOCK TABLES `valoracion` WRITE;
/*!40000 ALTER TABLE `valoracion` DISABLE KEYS */;
/*!40000 ALTER TABLE `valoracion` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-04 21:24:09
