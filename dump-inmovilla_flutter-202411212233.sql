-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: inmovilla_flutter
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.27-MariaDB

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
-- Table structure for table `inmueble`
--

DROP TABLE IF EXISTS `inmueble`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inmueble` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigoVivienda` varchar(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `cantidadCuartos` int(11) DEFAULT NULL,
  `tieneBanio` tinyint(1) DEFAULT NULL,
  `area` decimal(10,2) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inmueble`
--

LOCK TABLES `inmueble` WRITE;
/*!40000 ALTER TABLE `inmueble` DISABLE KEYS */;
INSERT INTO `inmueble` VALUES (1,'VIV001','Casa Familiar Moderna','Casa moderna con amplias habitaciones y jardín.','Calle 123, Ciudad X',250000.00,4,1,150.50,'https://via.placeholder.com/500'),(2,'VIV002','Apartamento Céntrico','Apartamento cerca de transporte y servicios.','Av. Principal 456, Ciudad Y',180000.00,2,1,80.00,'https://via.placeholder.com/500'),(3,'VIV003','Cabaña en el Bosque','Hermosa cabaña con vistas al bosque.','Camino Verde 789, Ciudad Z',120000.00,3,1,100.75,'https://via.placeholder.com/500'),(4,'VIV004','Penthouse de Lujo','Penthouse con vistas panorámicas.','Edificio Alto, Piso 30, Ciudad W',500000.00,5,1,200.00,'https://via.placeholder.com/500'),(5,'VIV005','Casa Colonial','Casa de estilo colonial con amplio terreno.','Calle Antigua 10, Ciudad Q',300000.00,4,1,180.00,'https://via.placeholder.com/500'),(6,'VIV006','Apartamento Estudio','Estudio perfecto para estudiantes o profesionales.','Zona Universitaria 12, Ciudad E',90000.00,1,1,45.00,'https://via.placeholder.com/500'),(7,'VIV007','Villa en la Playa','Villa frente al mar con piscina privada.','Playa Sol, Ciudad K',450000.00,4,1,250.00,'https://via.placeholder.com/500'),(8,'VIV008','Casa Campestre','Casa con un gran jardín en zona campestre.','Finca El Trébol, Ciudad L',200000.00,3,1,120.00,'https://via.placeholder.com/500'),(9,'VIV009','Apartamento Minimalista','Diseño minimalista con acabados de lujo.','Zona Exclusiva, Ciudad M',220000.00,2,1,90.00,'https://via.placeholder.com/500'),(10,'VIV010','Casa Rústica','Casa rústica con acabados de madera.','Camino Rural 23, Ciudad B',150000.00,3,1,110.00,'https://via.placeholder.com/500'),(11,'VIV011','Apartamento Económico','Apartamento económico cerca de transporte.','Calle Práctica 33, Ciudad F',80000.00,1,1,50.00,'https://via.placeholder.com/500'),(12,'VIV012','Mansión de Ensueño','Mansión con gran terreno y piscina.','Residencial Exclusiva, Ciudad N',750000.00,6,1,500.00,'https://via.placeholder.com/500'),(13,'VIV013','Casa en el Centro','Casa con fácil acceso al comercio.','Centro Histórico, Ciudad O',190000.00,3,1,95.00,'https://via.placeholder.com/500'),(14,'VIV014','Apartamento Nuevo','Apartamento en edificio recién construido.','Torre Alpha, Ciudad P',210000.00,2,1,85.00,'https://via.placeholder.com/500'),(15,'VIV015','Casa de Lujo','Casa con diseño moderno y domótica.','Barrio Privado, Ciudad R',500000.00,5,1,230.00,'https://via.placeholder.com/500'),(16,'VIV016','Apartamento Amueblado','Apartamento totalmente amueblado.','Zona Hotelera, Ciudad S',170000.00,2,1,75.00,'https://via.placeholder.com/500'),(17,'VIV017','Casa para Remodelar','Oportunidad para remodelar a tu gusto.','Barrio Tradicional, Ciudad T',100000.00,3,1,105.00,'https://via.placeholder.com/500'),(18,'VIV018','Casa con Piscina','Casa familiar con amplia piscina.','Zona Residencial, Ciudad U',350000.00,4,1,180.00,'https://via.placeholder.com/500'),(19,'VIV019','Departamento con Balcón','Departamento con vista a la ciudad.','Edificio Horizonte, Ciudad V',200000.00,3,1,95.00,'https://via.placeholder.com/500'),(22,'VIV021','Casa en La Francia','Casa esquinera en la La Francia','Cra 3 12 - 12',2500000.00,5,1,25.00,'test'),(77,'VIV023','Casa lujosa Cali Norte','casa esquinera lujosa para estrenar completamente','Calle falsa 123 - Springfield',2600000.00,6,0,95.00,'test2');
/*!40000 ALTER TABLE `inmueble` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personas`
--

DROP TABLE IF EXISTS `personas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identificacion` varchar(20) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `genero` varchar(10) DEFAULT NULL,
  `estado_civil` varchar(20) DEFAULT NULL,
  `ocupacion` varchar(50) DEFAULT NULL,
  `nacionalidad` varchar(30) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `codigo_postal` varchar(10) DEFAULT NULL,
  `nivel_educativo` varchar(50) DEFAULT NULL,
  `tipo_identificacion` varchar(20) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `notas` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personas`
--

LOCK TABLES `personas` WRITE;
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` VALUES (1,'123456789','Juan','Pérez','juan.perez@gmail.com','555-1234','Calle Falsa 123','1990-05-15','Masculino','Soltero','Ingeniero','Mexicana','Ciudad de México','01000','Universitario','DNI','2024-11-19 15:47:42','Cliente frecuente.'),(2,'987654321','María','González','maria.gonzalez@gmail.com','555-5678','Avenida Siempreviva 742','1988-08-22','Femenino','Casada','Doctora','Argentina','Buenos Aires','C1002','Posgrado','Pasaporte','2024-11-19 15:47:42','Prefiere contacto por email.'),(3,'456123789','Luis','Martínez','luis.martinez@yahoo.com','555-8765','Carrera 10 #45-67','1995-12-10','Masculino','Soltero','Abogado','Colombiana','Bogotá','110111','Universitario','Cédula','2024-11-19 15:47:42','Solicita información por WhatsApp.'),(4,'789456123','Ana','López','ana.lopez@hotmail.com','555-2345','Boulevard de los Sueños 89','1992-03-18','Femenino','Soltera','Diseñadora','Española','Madrid','28001','Universitario','NIE','2024-11-19 15:47:42','Cliente nuevo.'),(5,'321654987','Carlos','Gómez','carlos.gomez@gmail.com','555-3456','Plaza Mayor 12','1985-11-05','Masculino','Casado','Arquitecto','Mexicana','Guadalajara','44100','Universitario','INE','2024-11-19 15:47:42','Contactar solo en horario laboral.'),(6,'654987321','Laura','Díaz','laura.diaz@outlook.com','555-4567','Callejón del Gato 9','1998-07-27','Femenino','Soltera','Estudiante','Peruana','Lima','15001','Secundaria','Pasaporte','2024-11-19 15:47:42','Asiste a eventos frecuentes.'),(7,'987123654','Jorge','Hernández','jorge.hernandez@gmail.com','555-5678','Parque Central 7','1989-01-30','Masculino','Divorciado','Contador','Chilena','Santiago','8320000','Posgrado','Cédula','2024-11-19 15:47:42','Usuario premium.'),(8,'123789456','Lucía','Ramírez','lucia.ramirez@yahoo.com','555-6789','Alameda 33','1994-10-14','Femenino','Soltera','Periodista','Uruguaya','Montevideo','11000','Universitario','Cédula','2024-11-19 15:47:42','Requiere servicio urgente.'),(9,'456789123','Andrés','Torres','andres.torres@hotmail.com','555-7890','Pasaje de la Luna 15','1991-09-25','Masculino','Casado','Mecánico','Ecuatoriana','Quito','170150','Técnico','DNI','2024-11-19 15:47:42','Consulta sobre facturación.'),(10,'789123456','Sara','Jiménez','sara.jimenez@gmail.com','555-8901','Rinconada de la Paz 24','2000-04-02','Femenino','Soltera','Estudiante','Venezolana','Caracas','1010','Secundaria','Pasaporte','2024-11-19 15:47:42','Interesada en descuentos.'),(11,'112233445','Diego','Cruz','diego.cruz@gmail.com','555-9012','Colinas Verdes 8','1993-06-19','Masculino','Soltero','Programador','Mexicana','Monterrey','64000','Universitario','INE','2024-11-19 15:47:42','Consulta técnica pendiente.'),(12,'223344556','Claudia','Morales','claudia.morales@hotmail.com','555-0123','Urbanización Sol 3','1997-02-11','Femenino','Soltera','Enfermera','Paraguaya','Asunción','1208','Técnico','DNI','2024-11-19 15:47:42','Requiere seguimiento.'),(13,'334455667','Ricardo','Vega','ricardo.vega@yahoo.com','555-3456','Villa del Mar 16','1980-12-05','Masculino','Casado','Profesor','Mexicana','Cancún','77500','Maestría','INE','2024-11-19 15:47:42','Cliente habitual.'),(14,'445566778','Paula','Rojas','paula.rojas@gmail.com','555-4567','Residencial Los Álamos 21','1999-08-18','Femenino','Soltera','Artista','Boliviana','La Paz','1001','Técnico','Pasaporte','2024-11-19 15:47:42','Requiere cotización.'),(15,'556677889','Alberto','Mendoza','alberto.mendoza@gmail.com','555-5678','Zona Dorada 4','1983-03-09','Masculino','Viudo','Empresario','Mexicana','Tijuana','22000','Posgrado','INE','2024-11-19 15:47:42','Interesado en expansión de servicio.'),(16,'667788990','Verónica','Flores','veronica.flores@outlook.com','555-6789','Barrio Nuevo 14','1987-10-21','Femenino','Casada','Chef','Colombiana','Cali','760001','Técnico','Cédula','2024-11-19 15:47:42','Usuario VIP.'),(17,'778899001','Eduardo','Ortega','eduardo.ortega@gmail.com','555-7890','Vía Láctea 19','1990-01-12','Masculino','Soltero','Piloto','Mexicana','Querétaro','76000','Universitario','DNI','2024-11-19 15:47:42','Le interesa financiamiento.'),(18,'889900112','Sofía','Castillo','sofia.castillo@yahoo.com','555-8901','Estrella del Norte 5','1996-09-07','Femenino','Soltera','Fotógrafa','Española','Barcelona','08001','Universitario','Pasaporte','2024-11-19 15:47:42','Necesita consulta personalizada.'),(19,'990011223','Miguel','Reyes','miguel.reyes@gmail.com','555-9012','Camino Real 10','1992-05-04','Masculino','Casado','Veterinario','Mexicana','Mérida','97000','Universitario','INE','2024-11-19 15:47:42','Interesado en ofertas.'),(20,'331122334','Patricia','Luna','patricia.luna@hotmail.com','555-0123','Pueblo Viejo 2','1985-11-17','Femenino','Divorciada','Administradora','Venezolana','Maracaibo','4001','Maestría','Cédula','2024-11-19 15:47:42','Cliente recurrente.');
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'inmovilla_flutter'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-21 22:33:12
