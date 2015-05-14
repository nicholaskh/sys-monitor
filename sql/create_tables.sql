/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `contact_tel` varchar(20) NOT NULL,
  `biz_area` varchar(20) DEFAULT NULL,
  `coor` bigint(20) unsigned DEFAULT NULL,
  `contract_begin` date DEFAULT NULL,
  `contract_end` date DEFAULT NULL,
  `welfare` int(10) unsigned DEFAULT NULL,
  `login_name` varchar(100) DEFAULT NULL,
  `passwd` varchar(255) DEFAULT NULL,
  `ylsy_base` decimal(8,2) DEFAULT NULL,
  `ylgs_base` decimal(8,2) DEFAULT NULL,
  `gjj_per` decimal(5,2) DEFAULT NULL,
  `payroll` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `payroll`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payroll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `position`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0',
  `name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `shebao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shebao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `month` date DEFAULT NULL,
  `sbwx` decimal(10,2) DEFAULT NULL,
  `xcb` decimal(10,2) DEFAULT NULL,
  `bjzn` decimal(10,2) DEFAULT NULL,
  `gjjxj` decimal(10,2) DEFAULT NULL,
  `gjjbj` decimal(10,2) DEFAULT NULL,
  `gs` decimal(10,2) DEFAULT NULL,
  `da` decimal(10,2) DEFAULT NULL,
  `fwf` decimal(10,2) DEFAULT NULL,
  `op_stat` tinyint(4) DEFAULT '0',
  `fi_stat` tinyint(4) DEFAULT '0',
  `remark` varchar(1000) DEFAULT NULL,
  `op_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fi_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_uid_month` (`uid`,`month`),
  KEY `idx_uid_fi_stat` (`uid`,`fi_stat`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `sex` enum('男','女') DEFAULT NULL,
  `age` tinyint(3) unsigned DEFAULT NULL,
  `graduated` varchar(100) DEFAULT NULL,
  `edu_bg` varchar(30) DEFAULT NULL COMMENT 'education_background',
  `tel` varchar(100) DEFAULT NULL,
  `id_card` varchar(200) DEFAULT NULL,
  `reg_rdc` varchar(20) DEFAULT NULL COMMENT 'registered residence kind',
  `company_id` int(11) DEFAULT NULL,
  `en_time` date DEFAULT NULL COMMENT 'entry company time',
  `position_id` int(11) DEFAULT NULL,
  `en_region` varchar(30) DEFAULT NULL COMMENT 'entry company region',
  `wel_type` int(11) DEFAULT '0' COMMENT 'welfare',
  `wel_pay_date` date DEFAULT NULL,
  `wel_base_ss` decimal(8,2) DEFAULT NULL,
  `wel_base_med` decimal(8,2) DEFAULT NULL,
  `wel_base_fund` decimal(8,2) DEFAULT NULL,
  `wel_base_tax` decimal(8,2) DEFAULT NULL,
  `remark` varchar(512) DEFAULT NULL,
  `ctime` date DEFAULT NULL,
  `status` enum('已在职','求职中','面试','入职','转正','离职') DEFAULT NULL,
  `interview_time` date DEFAULT NULL,
  `hr` varchar(20) DEFAULT NULL,
  `passwd` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `depart` varchar(30) NOT NULL,
  `job` varchar(30) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `wage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `month` varchar(10) DEFAULT NULL,
  `moneys` blob,
  PRIMARY KEY (`id`),
  KEY `idx_uid_month` (`uid`,`month`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

