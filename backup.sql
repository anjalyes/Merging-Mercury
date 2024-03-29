-- MySQL dump 10.15  Distrib 10.0.11-MariaDB, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: Admin_Master
-- ------------------------------------------------------
-- Server version	10.0.11-MariaDB-1~trusty-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Admin_Log`
--

DROP TABLE IF EXISTS `Admin_Log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Admin_Log` (
  `LogID` int(10) DEFAULT NULL,
  `Uid` int(5) DEFAULT NULL,
  `Log` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Admin_Log`
--

LOCK TABLES `Admin_Log` WRITE;
/*!40000 ALTER TABLE `Admin_Log` DISABLE KEYS */;
/*!40000 ALTER TABLE `Admin_Log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Admin_users`
--

DROP TABLE IF EXISTS `Admin_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Admin_users` (
  `ID` int(5) NOT NULL DEFAULT '0',
  `Uname` varchar(25) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `PassHash` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Admin_users`
--

LOCK TABLES `Admin_users` WRITE;
/*!40000 ALTER TABLE `Admin_users` DISABLE KEYS */;
INSERT INTO `Admin_users` VALUES (20089,'AES','Anjaly Saju','SHASH'),(18315,'SM','Shilpa Menon','me');
/*!40000 ALTER TABLE `Admin_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PMF_MOV`
--

DROP TABLE IF EXISTS `PMF_MOV`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PMF_MOV` (
  `Mid` int(11) DEFAULT NULL,
  `Mov_Nam` varchar(50) NOT NULL,
  `Mov_Tag` varchar(120) DEFAULT NULL,
  `MOV_Des` varchar(1000) DEFAULT NULL,
  `Cov` longblob,
  `Pos` blob,
  `Url` varchar(100) DEFAULT NULL,
  `Rate` int(50) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `GENRE` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PMF_MOV`
--

LOCK TABLES `PMF_MOV` WRITE;
/*!40000 ALTER TABLE `PMF_MOV` DISABLE KEYS */;
INSERT INTO `PMF_MOV` VALUES (NULL,'How to train your dragon 2','animation','Set in the mythical world of burly Vikings and wild dragons, and based on the book by Cressida Cowell, the action comedy tells the story of Hiccup, a Viking teenager.','how-to-train-your-dragon-2.jpg','how-to-train-your-dragon-2.jpg',NULL,10,2014,'comedy,action');
/*!40000 ALTER TABLE `PMF_MOV` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-06-24  1:00:44
