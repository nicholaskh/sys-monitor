/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

LOCK TABLES `area` WRITE;
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
INSERT INTO `area` VALUES (1,'北京'),(2,'上海'),(3,'广州'),(4,'深圳');
/*!40000 ALTER TABLE `area` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (1,'万达集团','李俊良','13511111111','北京',137,'2015-03-03','2015-03-28',14,'zcc','123456',1000.00,1200.00,0.12,'[\"\\u5e95\\u85aa\",\"\\u63d0\\u6210\",\"\\u5956\\u91d1\"]'),(2,'安泰-个代','aaa','1123421321','',NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `payroll` WRITE;
/*!40000 ALTER TABLE `payroll` DISABLE KEYS */;
INSERT INTO `payroll` VALUES (1,'底薪'),(2,'提成'),(3,'绩效'),(4,'奖金');
/*!40000 ALTER TABLE `payroll` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `position` WRITE;
/*!40000 ALTER TABLE `position` DISABLE KEYS */;
INSERT INTO `position` VALUES (1,0,'客服类'),(2,0,'销售类'),(3,2,'电话销售'),(4,2,'大客户销售'),(5,1,'电话客服'),(6,1,'在线客服'),(7,2,'电销主管');
/*!40000 ALTER TABLE `position` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `shebao` WRITE;
/*!40000 ALTER TABLE `shebao` DISABLE KEYS */;
INSERT INTO `shebao` VALUES (1,1,'2015-05-00',100.00,12.00,123.00,388.00,1234.00,11.00,22.00,33.00,1,1,'滚蛋','2015-05-10 22:11:00','2015-05-02 16:00:00','2015-05-11 06:05:30'),(2,1,'2015-04-00',100.00,NULL,NULL,NULL,1234.00,NULL,NULL,NULL,-1,1,'阿斯顿发送','2015-05-10 22:11:04','2015-05-02 16:00:00','2015-05-11 06:05:30'),(3,1,'2015-03-00',100.00,NULL,123.00,133.00,NULL,NULL,NULL,33.00,0,0,NULL,'2015-03-02 16:00:00','2015-05-02 16:00:00','2015-05-11 06:05:30');
/*!40000 ALTER TABLE `shebao` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES (1,'张宏艳','女',40,'北京交通大学','大专','13321179286','42230219830505444X1','农业非农',1,'2015-03-01',2,'北京',1027,'2014-02-00',1235.00,1111.00,4.00,3.00,'住在昌平西关，上午上班1小时f',NULL,'转正',NULL,'张凯宏','123'),(2,'张宏艳2','女',40,'北京交通大学','大专','13321179286','42230219830505444X','农业非农',1,'2015-03-01',0,'北京',1027,'2014-02-00',1235.00,1111.00,4.00,3.00,'住在昌平西关，上午上班1小时',NULL,'已在职',NULL,NULL,'123'),(3,'张宏艳3','女',40,'北京交通大学','大专','13321179286','422302198305054441','农业非农',1,'2015-03-01',3,'北京',1027,'2014-02-00',1235.00,1111.00,4.00,3.00,'住在昌平西关，上午上班1小时',NULL,'入职',NULL,'张凯宏','123'),(4,'张三','男',30,'北京理工大学','本科','13566666666','','',1,NULL,0,'',0,'0000-00-00',NULL,NULL,NULL,NULL,'发发发',NULL,'已在职','2015-03-27','张凯宏','123'),(5,'李四','男',32,'北京大学','本科','13899999999',NULL,NULL,1,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'发发发',NULL,'面试','2015-03-18',NULL,'123'),(7,'王五',NULL,30,'北京交通大学','本科','15666666666',NULL,NULL,1,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'发发发','2015-03-08','求职中',NULL,'李俊良','123'),(8,'abc','男',33,'哈工大','本科','13011111111','123456789','农村',1,'2015-03-19',0,'北京',1796,'2013-11-00',155.00,55555.00,33.00,22.00,'发fff','2015-03-18','入职',NULL,'李俊良','abc'),(9,'fff',NULL,111,'dasfa','初中','123123213','123213213',NULL,NULL,NULL,NULL,'',0,NULL,NULL,NULL,NULL,NULL,'132213','2015-05-01','面试','2015-05-02','hr','fff');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` VALUES ('bbb'),('bbb');
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'李俊良','超级管理员','高级经理','1234567'),(2,'张凯宏','超级管理员','高级经理','123456'),(3,'赵一','财务','财务专员','123456'),(4,'大白','劳动关系部门','商务专员','123'),(5,'小白','YYGLB-运营管理部','人事主管','123'),(6,'admin','超级管理员','高级经理','123456'),(7,'hr','RPO部门','招聘顾问','hr'),(8,'hrzy','YYGLB-运营管理部','人事专员','123456'),(9,'swzg','劳动关系部门','商务主管','123');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `wage` WRITE;
/*!40000 ALTER TABLE `wage` DISABLE KEYS */;
INSERT INTO `wage` VALUES (1,1,'0000-00-00','[{\"name\":\"底薪\",\"val\":\"10000\"},{\"name\":\"提成\",\"val\":\"10000\"},{\"name\":\"奖金\",\"val\":\"10000\"}]'),(2,1,'201502','[{\"name\":\"底薪\",\"val\":\"5000\"},{\"name\":\"提成\",\"val\":\"5000\"},{\"name\":\"奖金\",\"val\":\"5000\"}]');
/*!40000 ALTER TABLE `wage` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

