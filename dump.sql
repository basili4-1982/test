-- MySQL dump 10.15  Distrib 10.0.31-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: test
-- ------------------------------------------------------
-- Server version	10.0.31-MariaDB-0ubuntu0.16.04.2

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
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
INSERT INTO `tasks` VALUES (1,'Текст задачи №0','email0@domen.ru','username0',1),(2,'Текст задачи №1','email1@domen.ru','username1',1),(3,'Текст задачи №2','email2@domen.ru','username2',1),(4,'Текст задачи №3','email3@domen.ru','username3',0),(5,'Текст задачи №4','email4@domen.ru','username4',0),(6,'Текст задачи №5','email5@domen.ru','username5',0),(7,'Текст задачи №6','email6@domen.ru','username6',0),(8,'Текст задачи №7','email7@domen.ru','username7',0),(9,'Текст задачи №8','email8@domen.ru','username8',0),(10,'Текст задачи №9','email9@domen.ru','username9',0),(11,'Текст задачи №10','email10@domen.ru','username10',0),(12,'Текст задачи №11','email11@domen.ru','username11',0),(13,'Текст задачи №12','email12@domen.ru','username12',0),(14,'Текст задачи №13','email13@domen.ru','username13',0),(15,'Текст задачи №14','email14@domen.ru','username14',0),(16,'Текст задачи №15','email15@domen.ru','username15',0),(17,'Текст задачи №16','email16@domen.ru','username16',0),(18,'Текст задачи №17','email17@domen.ru','username17',0),(19,'Текст задачи №18','email18@domen.ru','username18',0),(20,'Текст задачи №19','email19@domen.ru','username19',0),(21,'Текст задачи №20','email20@domen.ru','username20',0),(22,'Текст задачи №21','email21@domen.ru','username21',0),(23,'Текст задачи №22','email22@domen.ru','username22',0),(24,'Текст задачи №23','email23@domen.ru','username23',0),(25,'Текст задачи №24','email24@domen.ru','username24',0),(26,'Текст задачи №25','email25@domen.ru','username25',0),(27,'Текст задачи №26','email26@domen.ru','username26',0),(28,'Текст задачи №27','email27@domen.ru','username27',0),(29,'Текст задачи №28','email28@domen.ru','username28',0),(30,'Текст задачи №29','email29@domen.ru','username29',0),(31,'Текст задачи №30','email30@domen.ru','username30',0),(32,'Текст задачи №31','email31@domen.ru','username31',0),(33,'Текст задачи №32','email32@domen.ru','username32',0),(34,'Текст задачи №33','email33@domen.ru','username33',0),(35,'Текст задачи №34','email34@domen.ru','username34',0),(36,'Текст задачи №35','email35@domen.ru','username35',0),(37,'Текст задачи №36','email36@domen.ru','username36',0),(38,'Текст задачи №37','email37@domen.ru','username37',0),(39,'Текст задачи №38','email38@domen.ru','username38',0),(40,'Текст задачи №39','email39@domen.ru','username39',0),(41,'Текст задачи №40','email40@domen.ru','username40',0),(42,'Текст задачи №41','email41@domen.ru','username41',0),(43,'Текст задачи №42','email42@domen.ru','username42',0),(44,'Текст задачи №43','email43@domen.ru','username43',0),(45,'Текст задачи №44','email44@domen.ru','username44',0),(46,'Текст задачи №45','email45@domen.ru','username45',0),(47,'Текст задачи №46','email46@domen.ru','username46',0),(48,'Текст задачи №47','email47@domen.ru','username47',0),(49,'Текст задачи №48','email48@domen.ru','username48',0),(50,'Текст задачи №49','email49@domen.ru','username49',0),(51,'Текст задачи №50','email50@domen.ru','username50',0),(52,'Текст задачи №51','email51@domen.ru','username51',0),(53,'Текст задачи №52','email52@domen.ru','username52',0),(54,'Текст задачи №53','email53@domen.ru','username53',0),(55,'Текст задачи №54','email54@domen.ru','username54',0),(56,'Текст задачи №55','email55@domen.ru','username55',0),(57,'Текст задачи №56','email56@domen.ru','username56',0),(58,'Текст задачи №57','email57@domen.ru','username57',0),(59,'Текст задачи №58','email58@domen.ru','username58',0),(60,'Текст задачи №59','email59@domen.ru','username59',0),(61,'Текст задачи №60','email60@domen.ru','username60',0),(62,'Текст задачи №61','email61@domen.ru','username61',0),(63,'Текст задачи №62','email62@domen.ru','username62',0),(64,'Текст задачи №63','email63@domen.ru','username63',0),(65,'Текст задачи №64','email64@domen.ru','username64',0),(66,'Текст задачи №65','email65@domen.ru','username65',0),(67,'Текст задачи №66','email66@domen.ru','username66',0),(68,'Текст задачи №67','email67@domen.ru','username67',0),(69,'Текст задачи №68','email68@domen.ru','username68',0),(70,'Текст задачи №69','email69@domen.ru','username69',0),(71,'Текст задачи №70','email70@domen.ru','username70',0),(72,'Текст задачи №71','email71@domen.ru','username71',0),(73,'Текст задачи №72','email72@domen.ru','username72',0),(74,'Текст задачи №73','email73@domen.ru','username73',0),(75,'Текст задачи №74','email74@domen.ru','username74',0),(76,'Текст задачи №75','email75@domen.ru','username75',0),(77,'Текст задачи №76','email76@domen.ru','username76',0),(78,'Текст задачи №77','email77@domen.ru','username77',0),(79,'Текст задачи №78','email78@domen.ru','username78',0),(80,'Текст задачи №79','email79@domen.ru','username79',0),(81,'Текст задачи №80','email80@domen.ru','username80',0),(82,'Текст задачи №81','email81@domen.ru','username81',0),(83,'Текст задачи №82','email82@domen.ru','username82',0),(84,'Текст задачи №83','email83@domen.ru','username83',0),(85,'Текст задачи №84','email84@domen.ru','username84',0),(86,'Текст задачи №85','email85@domen.ru','username85',0),(87,'Текст задачи №86','email86@domen.ru','username86',0),(88,'Текст задачи №87','email87@domen.ru','username87',0),(89,'Текст задачи №88','email88@domen.ru','username88',0),(90,'Текст задачи №89','email89@domen.ru','username89',0),(91,'Текст задачи №90','email90@domen.ru','username90',0),(92,'Текст задачи №91','email91@domen.ru','username91',0),(93,'Текст задачи №92','email92@domen.ru','username92',0),(94,'Текст задачи №93','email93@domen.ru','username93',0),(95,'Текст задачи №94','email94@domen.ru','username94',0),(96,'Текст задачи №95','email95@domen.ru','username95',0),(97,'Текст задачи №96','email96@domen.ru','username96',0),(98,'Текст задачи №97','email97@domen.ru','username97',0),(99,'Текст задачи №98','email98@domen.ru','username98',0),(100,'Текст задачи №99','email99@domen.ru','username99',0);
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-21  0:32:09
