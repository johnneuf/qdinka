-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: 192.168.2.6    Database: qdinka
-- ------------------------------------------------------
-- Server version	5.5.46-0+deb8u1

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
-- Table structure for table `ProductBoxContent`
--

DROP TABLE IF EXISTS `ProductBoxContent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ProductBoxContent` (
  `prodID` int(11) NOT NULL,
  `prodYear` int(11) NOT NULL,
  `field` varchar(255) NOT NULL,
  `cID` int(11) NOT NULL,
  `cYear` int(11) NOT NULL,
  `DTS` datetime NOT NULL,
  KEY `bcProd_idx` (`prodID`,`prodYear`),
  CONSTRAINT `bcProd` FOREIGN KEY (`prodID`, `prodYear`) REFERENCES `Products` (`prodID`, `prodYear`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ProductBoxContent`
--

LOCK TABLES `ProductBoxContent` WRITE;
/*!40000 ALTER TABLE `ProductBoxContent` DISABLE KEYS */;
/*!40000 ALTER TABLE `ProductBoxContent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ProductCategory`
--

DROP TABLE IF EXISTS `ProductCategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ProductCategory` (
  `catID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `cID` int(11) NOT NULL,
  `cYear` int(11) NOT NULL,
  `DTS` datetime NOT NULL,
  PRIMARY KEY (`catID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ProductCategory`
--

LOCK TABLES `ProductCategory` WRITE;
/*!40000 ALTER TABLE `ProductCategory` DISABLE KEYS */;
/*!40000 ALTER TABLE `ProductCategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ProductCondition`
--

DROP TABLE IF EXISTS `ProductCondition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ProductCondition` (
  `condID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `cID` int(11) NOT NULL,
  `cYear` int(11) NOT NULL,
  `DTS` datetime NOT NULL,
  PRIMARY KEY (`condID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ProductCondition`
--

LOCK TABLES `ProductCondition` WRITE;
/*!40000 ALTER TABLE `ProductCondition` DISABLE KEYS */;
/*!40000 ALTER TABLE `ProductCondition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ProductDetails`
--

DROP TABLE IF EXISTS `ProductDetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ProductDetails` (
  `prodID` int(11) NOT NULL,
  `prodYear` int(11) NOT NULL,
  `field` varchar(255) NOT NULL,
  `cID` int(11) NOT NULL,
  `cYear` int(11) NOT NULL,
  `DTS` datetime NOT NULL,
  KEY `detProd_idx` (`prodID`,`prodYear`),
  CONSTRAINT `detProd` FOREIGN KEY (`prodID`, `prodYear`) REFERENCES `Products` (`prodID`, `prodYear`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ProductDetails`
--

LOCK TABLES `ProductDetails` WRITE;
/*!40000 ALTER TABLE `ProductDetails` DISABLE KEYS */;
/*!40000 ALTER TABLE `ProductDetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ProductImages`
--

DROP TABLE IF EXISTS `ProductImages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ProductImages` (
  `prodID` int(11) NOT NULL,
  `prodYear` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `cID` int(11) NOT NULL,
  `cYear` int(11) NOT NULL,
  `DTS` datetime NOT NULL,
  KEY `iImages_idx` (`prodID`,`prodYear`),
  CONSTRAINT `iImages` FOREIGN KEY (`prodID`, `prodYear`) REFERENCES `Products` (`prodID`, `prodYear`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ProductImages`
--

LOCK TABLES `ProductImages` WRITE;
/*!40000 ALTER TABLE `ProductImages` DISABLE KEYS */;
/*!40000 ALTER TABLE `ProductImages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ProductOptions`
--

DROP TABLE IF EXISTS `ProductOptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ProductOptions` (
  `prodID` int(11) NOT NULL,
  `prodYear` int(11) NOT NULL,
  `data` text NOT NULL,
  `cID` int(11) NOT NULL,
  `cYear` int(11) NOT NULL,
  `DTS` datetime NOT NULL,
  KEY `Product_idx` (`prodID`,`prodYear`),
  CONSTRAINT `Product` FOREIGN KEY (`prodID`, `prodYear`) REFERENCES `Products` (`prodID`, `prodYear`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ProductOptions`
--

LOCK TABLES `ProductOptions` WRITE;
/*!40000 ALTER TABLE `ProductOptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ProductOptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ProductOverview`
--

DROP TABLE IF EXISTS `ProductOverview`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ProductOverview` (
  `prodID` int(11) NOT NULL,
  `prodYear` int(11) NOT NULL,
  `field` varchar(255) NOT NULL,
  `cID` int(11) NOT NULL,
  `cYear` int(11) NOT NULL,
  `DTS` datetime NOT NULL,
  KEY `overProd_idx` (`prodID`,`prodYear`),
  CONSTRAINT `overProd` FOREIGN KEY (`prodID`, `prodYear`) REFERENCES `Products` (`prodID`, `prodYear`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ProductOverview`
--

LOCK TABLES `ProductOverview` WRITE;
/*!40000 ALTER TABLE `ProductOverview` DISABLE KEYS */;
/*!40000 ALTER TABLE `ProductOverview` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ProductQuestions`
--

DROP TABLE IF EXISTS `ProductQuestions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ProductQuestions` (
  `prodID` int(11) NOT NULL,
  `prodYear` int(11) NOT NULL,
  `ownID` int(11) NOT NULL,
  `ownYear` int(11) NOT NULL,
  `postDate` datetime NOT NULL,
  `question` text NOT NULL,
  `answer` text,
  `answerDate` datetime DEFAULT NULL,
  `cID` int(11) NOT NULL,
  `cYear` int(11) NOT NULL,
  `DTS` datetime NOT NULL,
  KEY `queProd_idx` (`prodID`,`prodYear`),
  KEY `queOwn_idx` (`ownID`,`ownYear`),
  CONSTRAINT `queProd` FOREIGN KEY (`prodID`, `prodYear`) REFERENCES `Products` (`prodID`, `prodYear`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `queOwn` FOREIGN KEY (`ownID`, `ownYear`) REFERENCES `Users` (`id`, `year`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ProductQuestions`
--

LOCK TABLES `ProductQuestions` WRITE;
/*!40000 ALTER TABLE `ProductQuestions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ProductQuestions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ProductReviews`
--

DROP TABLE IF EXISTS `ProductReviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ProductReviews` (
  `prodID` int(11) NOT NULL,
  `prodYear` int(11) NOT NULL,
  `ownID` int(11) NOT NULL,
  `ownYear` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `postDate` datetime NOT NULL,
  `recomended` int(11) NOT NULL,
  `review` text NOT NULL,
  `cID` int(11) NOT NULL,
  `cYear` int(11) NOT NULL,
  `DTS` datetime NOT NULL,
  KEY `revProduct_idx` (`prodID`,`prodYear`),
  KEY `revOwner_idx` (`ownID`,`ownYear`),
  CONSTRAINT `revProduct` FOREIGN KEY (`prodID`, `prodYear`) REFERENCES `Products` (`prodID`, `prodYear`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `revOwner` FOREIGN KEY (`ownID`, `ownYear`) REFERENCES `Users` (`id`, `year`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ProductReviews`
--

LOCK TABLES `ProductReviews` WRITE;
/*!40000 ALTER TABLE `ProductReviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `ProductReviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Products`
--

DROP TABLE IF EXISTS `Products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Products` (
  `prodID` int(11) NOT NULL,
  `prodYear` int(11) NOT NULL,
  `ownID` int(11) NOT NULL,
  `ownYear` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `cost` decimal(9,2) NOT NULL,
  `count` int(11) NOT NULL,
  `condInd` int(11) NOT NULL,
  `catID` int(11) NOT NULL,
  `soldCount` int(11) NOT NULL,
  `viewedCount` int(11) NOT NULL,
  `subDate` date NOT NULL,
  `description` text NOT NULL,
  `cID` int(11) NOT NULL,
  `cYear` int(11) NOT NULL,
  `DTS` datetime NOT NULL,
  PRIMARY KEY (`prodID`,`prodYear`),
  KEY `Owner_idx` (`ownID`,`ownYear`),
  KEY `Category_idx` (`catID`),
  KEY `Condition_idx` (`condInd`),
  CONSTRAINT `Owner` FOREIGN KEY (`ownID`, `ownYear`) REFERENCES `Users` (`id`, `year`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Category` FOREIGN KEY (`catID`) REFERENCES `ProductCategory` (`catID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `Condition` FOREIGN KEY (`condInd`) REFERENCES `ProductCondition` (`condID`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Products`
--

LOCK TABLES `Products` WRITE;
/*!40000 ALTER TABLE `Products` DISABLE KEYS */;
/*!40000 ALTER TABLE `Products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `UserType`
--

DROP TABLE IF EXISTS `UserType`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `UserType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `cID` int(11) NOT NULL,
  `cYear` int(11) NOT NULL,
  `DTS` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UserType`
--

LOCK TABLES `UserType` WRITE;
/*!40000 ALTER TABLE `UserType` DISABLE KEYS */;
/*!40000 ALTER TABLE `UserType` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `type` int(11) NOT NULL,
  `company` varchar(60) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `zipCode` varchar(10) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `compAvatar` varchar(255) DEFAULT NULL,
  `cID` int(11) NOT NULL DEFAULT '0',
  `cYear` int(11) NOT NULL DEFAULT '0',
  `DTS` datetime NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`,`year`),
  KEY `UserType` (`type`),
  CONSTRAINT `userType` FOREIGN KEY (`type`) REFERENCES `UserType` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rt_data`
--

DROP TABLE IF EXISTS `rt_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rt_data` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `SData` text NOT NULL,
  `cID` int(11) NOT NULL DEFAULT '0',
  `cYear` int(11) NOT NULL DEFAULT '0',
  `cDTS` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Holds random information for population of various drop downs and options';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rt_data`
--

LOCK TABLES `rt_data` WRITE;
/*!40000 ALTER TABLE `rt_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `rt_data` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-05 19:20:35
