-- MariaDB dump 10.19  Distrib 10.6.7-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mini
-- ------------------------------------------------------
-- Server version	10.6.7-MariaDB-2ubuntu1

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
  `body` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`body`)),
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
INSERT INTO `post_data` VALUES (1,'{\"message\":\"innalillahi\"}','{\"content-length\":[\"26\"],\"connection\":[\"keep-alive\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"host\":[\"basic.test\"],\"postman-token\":[\"51b52a80-1662-4f21-93da-3d67dafd2727\"],\"accept\":[\"*\\/*\"],\"user-agent\":[\"PostmanRuntime\\/7.29.0\"],\"content-type\":[\"application\\/json\"],\"name\":[\"riqi\"]}','2022-04-01 04:29:09'),(2,'{\"zikir\":\"astagfirullah\",\"status\":200}','{\"content-length\":[\"41\"],\"connection\":[\"keep-alive\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"host\":[\"basic.test\"],\"postman-token\":[\"7af371d7-9f03-4c7a-9655-176480bc9b2b\"],\"accept\":[\"*\\/*\"],\"user-agent\":[\"PostmanRuntime\\/7.29.0\"],\"content-type\":[\"application\\/json\"],\"name\":[\"riqi\"]}','2022-04-01 04:31:22'),(3,'{\"zikir\":\"innalillahi\",\"status\":300}','{\"content-length\":[\"39\"],\"connection\":[\"keep-alive\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"host\":[\"basic.test\"],\"postman-token\":[\"1d7ac963-341f-49f9-aee6-a4b5e4792c68\"],\"accept\":[\"*\\/*\"],\"user-agent\":[\"PostmanRuntime\\/7.29.0\"],\"content-type\":[\"application\\/json\"],\"name\":[\"riqi\"]}','2022-04-01 04:31:36'),(4,'{\"zikir\":\"innalillahi\",\"status\":300}','{\"content-length\":[\"39\"],\"connection\":[\"keep-alive\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"host\":[\"basic.test\"],\"postman-token\":[\"f252d293-d1f5-40b4-8ac1-e12d8a1d84a5\"],\"accept\":[\"*\\/*\"],\"user-agent\":[\"PostmanRuntime\\/7.29.0\"],\"content-type\":[\"application\\/json\"],\"name\":[\"riqi\"]}','2022-04-01 20:17:47'),(5,'{\"zikir\":\"SubhanAllah\",\"status\":300}','{\"content-length\":[\"39\"],\"connection\":[\"keep-alive\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"host\":[\"basic.test\"],\"postman-token\":[\"ad6ebe9a-0ee9-4f10-bc34-11cb938ff087\"],\"accept\":[\"*\\/*\"],\"user-agent\":[\"PostmanRuntime\\/7.29.0\"],\"content-type\":[\"application\\/json\"],\"name\":[\"riqi\"]}','2022-04-01 20:17:58'),(6,'{\"zikir\":\"SubhanAllah\",\"status\":300}','{\"content-length\":[\"39\"],\"connection\":[\"keep-alive\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"host\":[\"basic.test\"],\"postman-token\":[\"3ba863b8-ae01-413c-b5cb-942ca4086481\"],\"accept\":[\"*\\/*\"],\"user-agent\":[\"PostmanRuntime\\/7.29.0\"],\"content-type\":[\"application\\/json\"],\"name\":[\"riqi\"]}','2022-04-01 20:24:14'),(7,'{\"body\":{\"apn\":\"indosatgprs\",\"dns\":\"8.8.8.8\",\"password\":\"indosatgprs\",\"user\":\"indosatgprs\"}}',NULL,'2022-04-01 20:34:14'),(8,'{\"apn\":\"indosatgprs\",\"dns\":\"8.8.8.8\",\"password\":\"indosatgprs\",\"user\":\"indosatgprs\"}',NULL,'2022-04-01 20:34:58'),(9,'{\"station_id\":\"STAL999\",\"alarm_01h_status\":\"0\",\"alarm_24h_status\":\"0\",\"alarm_01h\":\"20\",\"alarm_24h\":\"100\",\"alarm_sms\":\"081395349147\",\"alarm\":\"1\",\"protocol\":\"socket\",\"interval\":\"3\",\"instantaneous\":\"1\"}',NULL,'2022-04-01 20:41:39'),(10,'{\"address\":\"ds.manvis.web.id\",\"passwd\":\"pass\",\"path\":\"\\/json\",\"user\":\"haidar\",\"port\":\"80\"}',NULL,'2022-04-01 20:42:21'),(11,'{\"address2\":\"ds.manvis.web.id\",\"passwd2\":\"pass2\",\"path2\":\"\\/json\\/https\",\"user2\":\"uwais\",\"port2\":\"443\"}',NULL,'2022-04-01 20:42:22');
/*!40000 ALTER TABLE `post_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `setting_id` int(11) NOT NULL AUTO_INCREMENT,
  `station_id` varchar(500) DEFAULT NULL,
  `alarm_01h_status` mediumint(5) DEFAULT 0,
  `alarm_24h_status` mediumint(5) DEFAULT 0,
  `alarm_01h` mediumint(5) DEFAULT 0,
  `alarm_24h` mediumint(5) DEFAULT 100,
  `alarm_sms` bigint(15) DEFAULT 0,
  `alarm` mediumint(5) DEFAULT 1,
  `protocol` varchar(100) DEFAULT 'socket',
  `interval` mediumint(5) DEFAULT 3,
  `instantaneous` mediumint(5) DEFAULT 1,
  `apn` varchar(900) DEFAULT NULL,
  `dns` varchar(900) DEFAULT '8.8.8.8',
  `password_gprs` varchar(900) DEFAULT NULL,
  `user` varchar(900) DEFAULT NULL,
  `address1` varchar(900) DEFAULT NULL,
  `passwd1` varchar(900) DEFAULT NULL,
  `path1` varchar(900) DEFAULT NULL,
  `user1` varchar(900) DEFAULT NULL,
  `port1` mediumint(7) DEFAULT 0,
  `address2` varchar(900) DEFAULT NULL,
  `passwd2` varchar(900) DEFAULT NULL,
  `path2` varchar(900) DEFAULT NULL,
  `user2` varchar(900) DEFAULT NULL,
  `port2` mediumint(7) DEFAULT 80,
  `version` int(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`setting_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (6,'HY108',0,0,20,100,81220888447,0,'socket',3,1,'dini','2','bismillah','1','ini.hyd-ant.app','bismillah','','haidar',1,'mini.hyd-ant.app','bismillah','/json','haidar',443,NULL,'2022-04-02 00:15:42','2022-04-04 01:24:31');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(400) NOT NULL,
  `fullname` varchar(400) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `is_active` enum('0','1') DEFAULT '0',
  `level` enum('1','2') NOT NULL DEFAULT '2',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','d033e22ae348aeb5660fc2140aec35850c4da997','haidar','haidarvm@gmail.com','08996834021','12313123123','0','1','2022-04-03 22:37:45','2022-04-03 22:37:58');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-04 12:32:32
