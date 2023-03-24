-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 24, 2023 at 04:40 AM
-- Server version: 10.11.2-MariaDB
-- PHP Version: 8.1.17


--
-- Database: "mini"
--

-- --------------------------------------------------------

--
-- Table structure for table "settings"
--

CREATE TABLE "settings" (
  "setting_id" serial NOT NULL,
  "station_id" varchar(500) DEFAULT NULL,
  "alarm_01h_status" int DEFAULT 0,
  "alarm_24h_status" int DEFAULT 0,
  "alarm_01h" int DEFAULT 0,
  "alarm_24h" int DEFAULT 100,
  "alarm_sms" bigint DEFAULT 0,
  "alarm" int DEFAULT 1,
  "protocol" varchar(100) DEFAULT 'socket',
  "interval" int DEFAULT 3,
  "instantaneous" int DEFAULT 1,
  "apn" varchar(900) DEFAULT NULL,
  "dns" varchar(900) DEFAULT '8.8.8.8',
  "password_gprs" varchar(900) DEFAULT NULL,
  "user" varchar(900) DEFAULT NULL,
  "address1" varchar(900) DEFAULT NULL,
  "passwd1" varchar(900) DEFAULT NULL,
  "path1" varchar(900) DEFAULT NULL,
  "user1" varchar(900) DEFAULT NULL,
  "port1" int DEFAULT 0,
  "address2" varchar(900) DEFAULT NULL,
  "passwd2" varchar(900) DEFAULT NULL,
  "path2" varchar(900) DEFAULT NULL,
  "user2" varchar(900) DEFAULT NULL,
  "port2" int DEFAULT 80,
  "version" bigint DEFAULT NULL,
  "created_at" timestamp NOT NULL DEFAULT NOW(),
  "updated_at" timestamp NOT NULL DEFAULT NOW()
)

--
-- Dumping data for table "settings"
--
;
INSERT INTO "settings" ("setting_id", "station_id", "alarm_01h_status", "alarm_24h_status", "alarm_01h", "alarm_24h", "alarm_sms", "alarm", "protocol", "interval", "instantaneous", "apn", "dns", "password_gprs", "user", "address1", "passwd1", "path1", "user1", "port1", "address2", "passwd2", "path2", "user2", "port2", "version", "created_at", "updated_at") VALUES
(6, '15', 0, 0, 20, 100, 81220888447, 0, 'socket', 7, 1, 'telkomsel', '2', 'bismillah', '1', 'pjb.hyd-ant.app', 'haidar', '', 'haidar', 443, 'mini.hyd-ant.app', 'bismillah', '/json', 'haidar', 443, NULL, '2022-04-02 00:15:42', '2023-03-23 08:10:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table "settings"

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
