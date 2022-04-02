SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(100) NOT NULL,
  `post_content` varchar(250) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `posts` (`post_id`, `post_title`, `post_content`) VALUES
(1,	'First Title',	'First\r\nContent'),
(2,	'Second Title',	'Second\r\nContent'),
(3,	'Third Title',	'Third\r\nContent');


-- {"station_id":"STAL999","alarm_01h_status":"0","alarm_24h_status":"0","alarm_01h":"20","alarm_24h":"100","alarm_sms":"081395349147","alarm":"1","protocol":"socket","interval":"3","instantaneous":"1"}
-- {"apn":"indosatgprs","dns":"8.8.8.8","password":"indosatgprs","user":"indosatgprs"}
-- {"address":"ds.manvis.web.id","passwd":"pass","path":"\/json","user":"haidar","port":"80"}
-- {"address2":"ds.manvis.web.id","passwd2":"pass2","path2":"\/json\/https","user2":"uwais","port2":"443"}
CREATE TABLE settings (
  setting_id int NOT NULL AUTO_INCREMENT,
  station_id varchar(500) NULL,
  alarm_01h_status mediumint(5) DEFAULT 0,
  alarm_24h_status mediumint(5) DEFAULT 0,
  alarm_01h mediumint(5) DEFAULT 0,
  alarm_24h mediumint(5) DEFAULT 100,
  alarm_sms BIGINT(15) DEFAULT 0,
  alarm mediumint(5) DEFAULT 1,
  protocol varchar(100) DEFAULT 'socket',
  `interval` mediumint(5) DEFAULT 3,
  instantaneous mediumint(5) DEFAULT 1,
  apn varchar(900)  NULL,
  dns varchar(900)  DEFAULT '8.8.8.8',
  password_gprs varchar(900)  NULL,
  user varchar(900)  NULL,
  address1 varchar(900)  NULL,
  passwd1 varchar(900)  NULL,
  path1 varchar(900)  NULL,
  user1 varchar(900)  NULL,
  port1 mediumint(7)  DEFAULT 00,
  address2 varchar(900)  NULL,
  passwd2 varchar(900)  NULL,
  path2 varchar(900)  NULL,
  user2 varchar(900)  NULL,
  port2 mediumint(7)  DEFAULT 80,
  version varchar(100)  DEFAULT 1,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (setting_id)
);
