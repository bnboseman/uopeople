# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.10)
# Database: database
# Generation Time: 2016-01-29 21:56:52 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table areas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `areas`;

CREATE TABLE `areas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `areas` WRITE;
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;

INSERT INTO `areas` (`id`, `name`)
VALUES
	(1103,'Programming 2'),
	(2203,'Databases 1');

/*!40000 ALTER TABLE `areas` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table questions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `questions`;

CREATE TABLE `questions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `quiz_id` int(11) DEFAULT NULL,
  `area_id` int(11) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;

INSERT INTO `questions` (`id`, `quiz_id`, `area_id`, `question`, `answer`)
VALUES
	(1,1,2203,'The number of attributes in a relation is known as:','The relation degree '),
	(2,1,2203,'A foreign key must always be a candidate key.','false'),
	(3,1,2203,'What is a field that uniquely describes each record?','Primary Key'),
	(4,1,2203,'A set of atomic values that are all of the same type is called:','domain'),
	(5,1,2203,'The network model (CODASYL) was released in what year?','1969'),
	(6,1,2203,'A characteristic of data, a real-world data feature modeled in the database is called:\r\n','attribute'),
	(7,1,2203,'The cardinality of a relation is equivalent to the number of tuples in the relation.\r\n','true'),
	(8,1,2203,'In the evolution of database management systems, what does optimization refer to?\r\n','Performance'),
	(9,1,2203,'The surrogate key provides a unique alternate for using a foreign key that is used to save space.\r\n','False'),
	(10,1,2203,'Which term describes each two-dimensional table or file in the relational model?\r\n',' None of the Above'),
	(11,1,2203,'Which of the following is NOT a valid relationship for an entity relationship model?','n-to-n'),
	(12,1,2203,'The role that is responsible for the maintenance, performance, integrity, and security of a database is.\r\n','DBA (Database Administrator)'),
	(13,1,2203,'An information model is an abstract, formal representation of entities that includes their properties, relationships and the operations that can be performed on them.','True'),
	(14,1,2203,'Which of the following is NOT an information model?','pureXML model'),
	(15,1,2203,'A tuple is an ordered set of values that describe data characteristics at one moment in time. An informal term for tuple is:','record'),
	(16,1,2203,'The first hierarchial DBMS was ____ and was released by IBM in 1968?','IMS (Information Management System)'),
	(17,1,2203,'Which term describes each two-dimensional table or file in the relational model?','None of the Above'),
	(18,1,2203,'A candidate key cannot also be the primary key of a relation.','false'),
	(19,1,2203,'A primary key does not have to be unique.','false'),
	(20,1,2203,'A unique KEY field','Is a special field that identifies a particular record in a data table '),
	(21,1,2203,'A database management system (DBMS) allows you to specify the logical organization for a database and access and use the information within a database.','True');

/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
