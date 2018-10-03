# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.41)
# Database: portfolioProject
# Generation Time: 2018-10-03 10:19:44 +0000
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
	(1,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `aboutMe` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `fillText` varchar(1000) NOT NULL DEFAULT '',
  `url` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;

INSERT INTO `projects` (`id`, `title`, `fillText`, `url`)
VALUES
	(1,'Pilot Shop','Our first browser responsive project. We copied as closely as possible a template website and tried to imitate how it adapted to changing screen sizes. This was the third project that we carried out during our time here at Mayden.','file:///Users/academy/Documents/portfolioProject/portfolioPage/pilotShop/index.html'),
	(2,'First Project','This was, as you can see, our first project at Mayden. It was our first introduction to CSS combined with html.','file:///Users/academy/Documents/portfolioProject/portfolioPage/cssProject/index.html'),
	(3,'Second Project','The second project we created here at Mayden. This was called hello world and was our first real introduction to page structure and features.','file:///Users/academy/Documents/portfolioProject/portfolioPage/helloWorldProject/index.html');

/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
