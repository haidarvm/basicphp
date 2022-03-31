-- MariaDB dump 10.19  Distrib 10.5.13-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: mini
-- ------------------------------------------------------
-- Server version	10.5.13-MariaDB-log

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
-- Table structure for table `post_data`
--

DROP TABLE IF EXISTS `post_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` text NOT NULL,
  `headers` text DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_data`
--

LOCK TABLES `post_data` WRITE;
/*!40000 ALTER TABLE `post_data` DISABLE KEYS */;
INSERT INTO `post_data` VALUES (1,'Array','','2022-03-23 06:59:54'),(2,'{\"message\":\"bebas\"}','','2022-03-23 07:00:22'),(3,'{\"message\":\"bebas\"}','Array','2022-03-23 07:32:48'),(4,'{\"message\":\"bebas\"}','{\"content-length\":[\"20\"],\"connection\":[\"keep-alive\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"host\":[\"mini.test\"],\"postman-token\":[\"ef93ede8-9771-4233-aa65-251147eeeb2e\"],\"accept\":[\"*\\/*\"],\"user-agent\":[\"PostmanRuntime\\/7.29.0\"],\"content-type\":[\"application\\/json\"],\"name\":[\"riqi\"]}','2022-03-23 07:32:58'),(5,'{\"message\":\"bebas\"}','{\"content-length\":[\"20\"],\"connection\":[\"keep-alive\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"host\":[\"mini.test\"],\"postman-token\":[\"8c572266-905c-49a2-8ee8-1cadfccfb1e6\"],\"accept\":[\"*\\/*\"],\"user-agent\":[\"PostmanRuntime\\/7.29.0\"],\"content-type\":[\"application\\/json\"],\"name\":[\"riqi\"]}','2022-03-23 07:33:43'),(6,'{\"username\":\"xyz\",\"password\":\"xyz\"}','{\"content-length\":[\"35\"],\"content-type\":[\"application\\/json\"],\"accept\":[\"*\\/*\"],\"user-agent\":[\"curl\\/7.79.1\"],\"host\":[\"mini.test\"]}','2022-03-23 07:36:53'),(7,'{\"message\":\"bebas\"}',NULL,'2022-03-24 10:13:34'),(8,'{\"message\":\"bebas\"}',NULL,'2022-03-31 03:39:35'),(9,'{\"message\":\"bebas\"}',NULL,'2022-03-31 03:40:47'),(10,'{\"message\":\"bebas\"}',NULL,'2022-03-31 03:41:16'),(11,'{\"message\":\"bismillah\"}','{\"content-length\":[\"24\"],\"connection\":[\"keep-alive\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"host\":[\"basic.test\"],\"postman-token\":[\"2435b8a1-5890-41c0-9c01-3dfe80f3aa96\"],\"accept\":[\"*\\/*\"],\"user-agent\":[\"PostmanRuntime\\/7.29.0\"],\"content-type\":[\"application\\/json\"],\"name\":[\"riqi\"]}','2022-03-31 03:42:05');
/*!40000 ALTER TABLE `post_data` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-31 10:47:40
