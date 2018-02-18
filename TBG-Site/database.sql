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

-- Structuur van  tabel tbg.aankondigingen wordt geschreven
CREATE TABLE IF NOT EXISTS `aankondigingen` (
  `aankonId` int(11) NOT NULL AUTO_INCREMENT,
  `aankondigingen` text,
  PRIMARY KEY (`aankonId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel tbg.aankondigingen: ~5 rows (ongeveer)
/*!40000 ALTER TABLE `aankondigingen` DISABLE KEYS */;
INSERT INTO `aankondigingen` (`aankonId`, `aankondigingen`) VALUES
	(1, '<p>Woensdag 14/02, 17h00: Cuberunner plugin tutorial.</p>\r'),
	(2, ' <p>Vrijdag 15/02, 17h00: Css video. Box model. We gaan eindelijk eens een echte site maken.</p>'),
	(3, '<p>Zaterdag 16/02, 17h00: Update video over de verleden snapshots.</p>'),
	(4, ' <p>Zondag 17/02, 17h00: Hoverloop. Een nieuw spel dat je zeker zal intreseren.</p>'),
	(5, '<p>Komende plugin tutorials over: Heb je zelf aanvragen laat het me maar weten via <a href="http://www.youtube.com/c/TheBelgiumGamesTBG" target="_blank">YouTube</a> of via <a href="mailto:the.belgiumg@gmail.com">Mail</a>.</p>');
/*!40000 ALTER TABLE `aankondigingen` ENABLE KEYS */;

-- Structuur van  tabel tbg.bericht wordt geschreven
CREATE TABLE IF NOT EXISTS `bericht` (
  `gegevensId` int(11) NOT NULL AUTO_INCREMENT,
  `berichten` text,
  PRIMARY KEY (`gegevensId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel tbg.bericht: ~6 rows (ongeveer)
/*!40000 ALTER TABLE `bericht` DISABLE KEYS */;
INSERT INTO `bericht` (`gegevensId`, `berichten`) VALUES
	(1, ' <p>Als eerste welkom en dat is het.</p>'),
	(2, '<p>De website wordt vernieuwd.  Eenmaal als deze klaar is komt er een video uit.</p>'),
	(3, ' <p>Deze pagina is geupdate op 13/02/18 om 09:36.</p>'),
	(4, ' <p>Ben je op een gsm scroll dan naar onder voor de planning.</p>'),
	(5, '  <p>Nieuwe banner vanaf 02/08/2017.</p>'),
	(6, ' <p>We hebben een domein (www.thebelgiumgames.be) :)</p>'),
	(7, '<p>De website heeft nu een Licentie. Juppie.</p>');
/*!40000 ALTER TABLE `bericht` ENABLE KEYS */;

-- Structuur van  tabel tbg.hoofdpag wordt geschreven
CREATE TABLE IF NOT EXISTS `hoofdpag` (
  `gegevensId` int(11) NOT NULL AUTO_INCREMENT,
  `vidLink` text NOT NULL,
  `tekstFrontPage` text NOT NULL,
  PRIMARY KEY (`gegevensId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel tbg.hoofdpag: ~0 rows (ongeveer)
/*!40000 ALTER TABLE `hoofdpag` DISABLE KEYS */;
INSERT INTO `hoofdpag` (`gegevensId`, `vidLink`, `tekstFrontPage`) VALUES
	(1, 'https://www.youtube.com/watch?v=d1bYO3uzs40', 'Hallo en welkom op de website van The BelgiumGames.<br/>\r\n                Deze website gaat over de YouTuber Jens en zijn video\'s.<br/><br/>\r\n                Wie is Jens? Hij is een Belgische YouTuber die voor jouw video\'s maakt over Minecraft en andere games.<br/>\r\n                Wat kun je verwachten op deze website? Meer info over de video\'s van Jens, zoals wanneer er een video uitkomt en dan ook nog meer info over Jens zelf.<br/>\r\n                <br/>\r\n                De video\'s die ik maak zijn vaak tutorials en behulpzame video\'s.<br/>\r\n                Geniet van de video\'s en ook van je dag.<br/><br/>\r\n                \r\n                Meer info over opkomende video\'s kan je vinden op de <a href="https://www.thebelgiumgames.be/extra.html">aankondigings</a> pagina.<br/><br/>\r\n                \r\n                Dit is de vernieuwde site van Thebelgiumgames gesponserd door Badskinsgarden.<br/><br/>');
/*!40000 ALTER TABLE `hoofdpag` ENABLE KEYS */;

-- Structuur van  tabel tbg.onlinevid wordt geschreven
CREATE TABLE IF NOT EXISTS `onlinevid` (
  `gegevensId` int(11) NOT NULL AUTO_INCREMENT,
  `onlineVidTekst` text,
  PRIMARY KEY (`gegevensId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel tbg.onlinevid: ~6 rows (ongeveer)
/*!40000 ALTER TABLE `onlinevid` DISABLE KEYS */;
INSERT INTO `onlinevid` (`gegevensId`, `onlineVidTekst`) VALUES
	(1, '<p><a href="https://www.youtube.com/watch?v=ljw6g1OMmks&t=1s" target="_blank">VOORRUITGANGEN (advancements) || tutorial</a></p>\r'),
	(2, '<p><a href="https://youtu.be/kO2ZmZrrgn4" target="_blank">DYNMAP PLUGIN || tutorial [Nederlands / Dutch]</a></p>'),
	(3, '<p><a href="https://www.youtube.com/watch?v=EphA8dKWM_0" target="_blank">WAAR BLIJVEN DE PLUGIN VIDEO\'S & lezen van reacties</a></p>'),
	(4, '<p><a href="https://youtu.be/oLCe-irFfWU" target="_blank">KINGDOMCRAFT PLUGIN || tutorial [Nederlands / Dutch]</a></p>'),
	(5, '<p><a href="https://youtu.be/R_FlnKmCjjs" target="_blank">CTSNC PLUGIN || Tablist, scoreboard Tutorial [Nederlands / Dutch]</a></p>'),
	(6, '<p><a href="https://youtu.be/rLMHgLDaXHQ" target="_blank">CUSTOM RECEPTEN || tutorial [Nederlands / Dutch]</a></p>');
/*!40000 ALTER TABLE `onlinevid` ENABLE KEYS */;

-- Structuur van  tabel tbg.video wordt geschreven
CREATE TABLE IF NOT EXISTS `video` (
  `VideoId` int(11) NOT NULL AUTO_INCREMENT,
  `VideoLink` text NOT NULL,
  PRIMARY KEY (`VideoId`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel tbg.video: ~44 rows (ongeveer)
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` (`VideoId`, `VideoLink`) VALUES
	(1, 'https://www.youtube.com/watch?v=d1bYO3uzs40'),
	(2, 'https://www.youtube.com/watch?v=eUfcjirD6RY'),
	(3, 'https://www.youtube.com/watch?v=pf8DSgO2ZpY'),
	(4, 'https://www.youtube.com/watch?v=DVvGPWVWWUI'),
	(5, 'https://www.youtube.com/watch?v=fLNXxHY4I8I'),
	(6, 'https://www.youtube.com/watch?v=73XkMcRup5s'),
	(7, 'https://www.youtube.com/watch?v=0Mbzt20lr6c&t=1s'),
	(8, 'https://www.youtube.com/watch?v=2p7qvjxCL-k'),
	(9, 'https://www.youtube.com/watch?v=4avmhJSpWZ0'),
	(10, 'https://www.youtube.com/watch?v=DVQiHg2TrHA&t=1s'),
	(11, 'https://www.youtube.com/watch?v=lgc8DmSjRGE&list=PLZDG9piGctYe1VLNPJTetWFpomJQKYkzB&index=5'),
	(12, 'https://www.youtube.com/watch?v=MPpMrL8iPhs&list=PLZDG9piGctYe1VLNPJTetWFpomJQKYkzB&index=3'),
	(13, 'https://www.youtube.com/watch?v=mm-1JPcc-eU&list=PLZDG9piGctYe1VLNPJTetWFpomJQKYkzB&index=2'),
	(14, 'https://www.youtube.com/watch?v=UmxxAVAVYNY&list=PLZDG9piGctYe1VLNPJTetWFpomJQKYkzB&index=1'),
	(15, 'https://www.youtube.com/watch?v=mdiTb07rDis&list=PLZDG9piGctYd8AoRZYRjSfRkR6yQU8UE1&index=4'),
	(16, 'https://www.youtube.com/watch?v=XuoXTfSDtJc&list=PLZDG9piGctYd8AoRZYRjSfRkR6yQU8UE1&index=2'),
	(17, 'https://www.youtube.com/watch?v=tGhj_oxL7e0&list=PLZDG9piGctYd8AoRZYRjSfRkR6yQU8UE1&index=1'),
	(18, 'https://www.youtube.com/watch?v=qLBSnXenLoc&list=PLZDG9piGctYdehjTgYJtSRQ_7YrYA_uSK&index=3'),
	(19, 'https://www.youtube.com/watch?v=BktjcMmzGg4&list=PLZDG9piGctYdehjTgYJtSRQ_7YrYA_uSK&index=2'),
	(20, 'https://www.youtube.com/watch?v=eUfcjirD6RY&list=PLZDG9piGctYdehjTgYJtSRQ_7YrYA_uSK&index=1'),
	(21, 'https://www.youtube.com/watch?v=cb7bmASw2rM&list=PLZDG9piGctYfVEPketZch5EdpdzQ_7NuL&index=21'),
	(22, 'https://www.youtube.com/watch?v=3OB3KhTfzVQ&list=PLZDG9piGctYfVEPketZch5EdpdzQ_7NuL&index=30'),
	(23, 'https://www.youtube.com/watch?v=zWz8P8GMtAo&list=PLZDG9piGctYfVEPketZch5EdpdzQ_7NuL&index=36'),
	(24, 'https://www.youtube.com/watch?v=ehnBVQ990hw&list=PLZDG9piGctYfVEPketZch5EdpdzQ_7NuL&index=47'),
	(25, 'https://www.youtube.com/watch?v=pbq0oMZ9u4A&index=1&list=PLZDG9piGctYe_jy1LNoCqSC3j_rrpEviz'),
	(26, 'https://www.youtube.com/watch?v=l5a7b1yWlKU&index=2&list=PLZDG9piGctYe_jy1LNoCqSC3j_rrpEviz'),
	(27, 'https://www.youtube.com/watch?v=yNQ_701uumU&index=3&list=PLZDG9piGctYe_jy1LNoCqSC3j_rrpEviz'),
	(28, 'https://www.youtube.com/watch?v=GcKLjHezuFs&index=4&list=PLZDG9piGctYe_jy1LNoCqSC3j_rrpEviz'),
	(29, 'https://www.youtube.com/watch?v=AZ6uEVWMHSM&index=4&list=PLZDG9piGctYd2mKfNbPFPRNaviYASzg-o'),
	(30, 'https://www.youtube.com/watch?v=rLM8x20wE1M&index=3&list=PLZDG9piGctYd2mKfNbPFPRNaviYASzg-o'),
	(31, 'https://www.youtube.com/watch?v=Ctsi2KeMD3k&index=2&list=PLZDG9piGctYd2mKfNbPFPRNaviYASzg-o'),
	(32, 'https://www.youtube.com/watch?v=DVvGPWVWWUI&index=1&list=PLZDG9piGctYd2mKfNbPFPRNaviYASzg-o'),
	(33, 'https://www.youtube.com/watch?v=Pwbn3UP77ls&index=9&list=PLZDG9piGctYc2_65oj6PDtY8N7Q2eVPpL'),
	(34, 'https://www.youtube.com/watch?v=S1iH78xMOUY&index=10&list=PLZDG9piGctYc2_65oj6PDtY8N7Q2eVPpL'),
	(35, 'https://www.youtube.com/watch?v=T0UgPPe698g&index=11&list=PLZDG9piGctYc2_65oj6PDtY8N7Q2eVPpL'),
	(36, 'https://www.youtube.com/watch?v=88tmbHtZ6LI&index=12&list=PLZDG9piGctYc2_65oj6PDtY8N7Q2eVPpL'),
	(37, 'https://www.youtube.com/watch?v=AFjqizmchmA&list=PLZDG9piGctYfDJvxS9r1eRWNAEERRmej5&index=7'),
	(38, 'https://www.youtube.com/watch?v=L0ONGri7Ezs&list=PLZDG9piGctYfDJvxS9r1eRWNAEERRmej5&index=8'),
	(39, 'https://www.youtube.com/watch?v=bPwDaZ7B3nQ&list=PLZDG9piGctYfDJvxS9r1eRWNAEERRmej5&index=9'),
	(40, 'https://www.youtube.com/watch?v=GPpUGRfaHqs&list=PLZDG9piGctYfDJvxS9r1eRWNAEERRmej5&index=10&t=1614s'),
	(41, 'https://www.youtube.com/watch?v=_8TzqQltQ3o&t=2s'),
	(42, 'https://www.youtube.com/watch?v=p44TszdiiA4'),
	(43, 'https://www.youtube.com/watch?v=fLNXxHY4I8I'),
	(44, 'https://www.youtube.com/watch?v=73XkMcRup5s');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
