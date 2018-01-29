-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Versie:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Databasestructuur van tbg wordt geschreven
CREATE DATABASE IF NOT EXISTS `tbg` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tbg`;

-- Structuur van  tabel tbg.hoofdpag wordt geschreven
CREATE TABLE IF NOT EXISTS `hoofdpag` (
  `gegevensId` int(11) NOT NULL AUTO_INCREMENT,
  `vidLink` text NOT NULL,
  `tekstFrontPage` text NOT NULL,
  PRIMARY KEY (`gegevensId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel tbg.hoofdpag: ~1 rows (ongeveer)
/*!40000 ALTER TABLE `hoofdpag` DISABLE KEYS */;
INSERT INTO `hoofdpag` (`gegevensId`, `vidLink`, `tekstFrontPage`) VALUES
	(1, 'https://www.youtube.com/watch?v=GPpUGRfaHqs&t=1781s', '<strong>! Nieuwe website in aanbouw !</strong><br/><br/>\r\n                Hallo en welkom op de website van The BelgiumGames.<br/>\r\n                Deze website gaat over de YouTuber Jens en zijn video\'s.<br/><br/>\r\n                Wie is Jens? Hij is een Belgische YouTuber die voor jouw video\'s maakt over Minecraft en andere games.<br/>\r\n                Wat kun je verwachten op deze website? Meer info over de video\'s van Jens, zoals wanneer er een video uitkomt en dan ook nog meer info over Jens zelf.<br/>\r\n                <br/>\r\n                De video\'s die ik maak zijn vaak tutorials en behulpzame video\'s.<br/>\r\n                Geniet van de video\'s en ook van je dag.<br/><br/>\r\n                \r\n                Meer info over opkomende video\'s kan je vinden op de <a href="https://www.thebelgiumgames.be/extra.html">aankondigings</a> pagina.<br/><br/>\r\n                \r\n                Dit is de vernieuwde site van Thebelgiumgames gesponserd door Badskinsgarden.<br/><br/>');
/*!40000 ALTER TABLE `hoofdpag` ENABLE KEYS */;

-- Structuur van  tabel tbg.video wordt geschreven
CREATE TABLE IF NOT EXISTS `video` (
  `VideoId` int(11) NOT NULL AUTO_INCREMENT,
  `VideoLink` text NOT NULL,
  PRIMARY KEY (`VideoId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel tbg.video: ~6 rows (ongeveer)
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` (`VideoId`, `VideoLink`) VALUES
	(1, 'https://www.youtube.com/watch?v=DVQiHg2TrHA&t=403s'),
	(2, 'https://www.youtube.com/watch?v=PGQM4rQp73Y'),
	(3, 'https://www.youtube.com/watch?v=XOur7W3xfJE&t=695s'),
	(4, 'https://www.youtube.com/watch?v=fLNXxHY4I8I'),
	(5, 'https://www.youtube.com/watch?v=p44TszdiiA4'),
	(6, 'https://www.youtube.com/watch?v=GPpUGRfaHqs&t=1614s');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
