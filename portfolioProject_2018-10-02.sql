# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.41)
# Database: portfolioProject
# Generation Time: 2018-10-02 09:27:33 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table aboutMe
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aboutMe`;

CREATE TABLE `aboutMe` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `aboutMeText` varchar(1000) DEFAULT '',
  `technologiesText` varchar(800) DEFAULT '',
  `prevExpText` varchar(800) DEFAULT '',
  `otherExpText` varchar(800) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `aboutMe` WRITE;
/*!40000 ALTER TABLE `aboutMe` DISABLE KEYS */;

INSERT INTO `aboutMe` (`id`, `aboutMeText`, `technologiesText`, `prevExpText`, `otherExpText`)
VALUES
	(1,'Once completed I will have the fundamentals of coding, software design and agile project management. Complimented by my previous experience in other industries I will have the ability to apply these skills in real world programming situations.','I will be able to successfully handle and apply the following technologies:','I have experience working in other industries. I spent some time working for a Executive Recruitment firm based in Westminster that mainly operated in the charity and education sectors.','I attained a BA in History from Royal Holloway, University of London. I also have experience working in the Army Reserves where I qualified as a trooper in the Honourable Artillery Company.');

/*!40000 ALTER TABLE `aboutMe` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
