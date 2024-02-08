-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.36 - MySQL Community Server - GPL
-- SE du serveur:                Linux
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour alphabel
CREATE DATABASE IF NOT EXISTS `alphabel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `alphabel`;

-- Listage de la structure de table alphabel. commentaire
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_commentaire` int NOT NULL AUTO_INCREMENT,
  `texte` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `datePublication` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_feuille` int NOT NULL,
  `id_utilisateur` int NOT NULL,
  PRIMARY KEY (`id_commentaire`),
  KEY `id_feuille` (`id_feuille`),
  KEY `id_utilisateur` (`id_utilisateur`),
  CONSTRAINT `FK_commentaire_feuille` FOREIGN KEY (`id_feuille`) REFERENCES `feuille` (`id_feuille`) ON DELETE CASCADE,
  CONSTRAINT `FK_commentaire_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Listage des données de la table alphabel.commentaire : ~2 rows (environ)
INSERT INTO `commentaire` (`id_commentaire`, `texte`, `datePublication`, `id_feuille`, `id_utilisateur`) VALUES
	(1, 'mon commentaire', '2024-01-08 16:26:44', 20, 12),
	(4, 'Votre texte de commentaire ici', '2024-01-08 16:52:39', 3, 1),
	(10, 'okok', '2024-02-08 13:32:40', 27, 16);

-- Listage de la structure de table alphabel. feuille
CREATE TABLE IF NOT EXISTS `feuille` (
  `id_feuille` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(355) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `descriptionLettre` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `id_lettre` int NOT NULL,
  `id_utilisateur` int NOT NULL,
  PRIMARY KEY (`id_feuille`),
  KEY `id_lettre` (`id_lettre`),
  KEY `id_utilisateur` (`id_utilisateur`),
  CONSTRAINT `feuille_ibfk_1` FOREIGN KEY (`id_lettre`) REFERENCES `lettre` (`id_lettre`),
  CONSTRAINT `feuille_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Listage des données de la table alphabel.feuille : ~15 rows (environ)
INSERT INTO `feuille` (`id_feuille`, `nom`, `img`, `descriptionLettre`, `id_lettre`, `id_utilisateur`) VALUES
	(3, 'rzq', 'rzqr', 'rzqr', 30, 1),
	(6, 'feuille 10', 'dé.jpg', 'descroption de l&#039;image', 14, 1),
	(7, 'tst uniq id', '5341478456554c1d54eea8lettre kef.jpg', 'test', 6, 1),
	(8, 'aaa', '844975096554c2007a0calettre kef.jpg', 'aaa', 21, 1),
	(15, 'feuille de test', '106284117965797505b725115336072186554cb2a91472lettre kef.jpg', 'yuy-j', 30, 6),
	(16, 'aaaa', '200710847657ffd82f076acode.png', 'aaaa', 8, 6),
	(17, 'test feuille micka', '41473772065c3ac231792176459507865ba5252453f4111248936657b1ae568d37869192909657adddfef628piano.jpg', 'aaaa ', 10, 16),
	(18, 'bhjjjk', '971458876582ec0a05e751461148161657c65a06ea71156688376579c343388065341478456554c1d54eea8lettre kef.jpg', 'hjuhjlm ', 3, 11),
	(19, 'FERRADJI Elie', '44562856597e0e9bbf7c869192909657adddfef628piano.jpg', 'erffe   aaaa test ', 5, 13),
	(20, 'test feuille', '15160283936597e153cef39869192909657adddfef628piano.jpg', 'aaa  test aaa', 6, 13),
	(21, 'rtyhuj aaazzz', '877545905659bccb7b84a4686643421659bcc49998c81166684832659ba8ad37e63844975096554c2007a0calettre kef.jpg', 'exemple   aaaa zzz', 2, 16),
	(22, 'nom feuille zdfe', '1312731879659bf4c863600446547135659bd01da3d1c388417331657ad9a80c3e3chat.jpg', 'hyjyjy ', 1, 16),
	(23, '5454rrr', '734704733659bd533445351305220749659bcd74bf87d829711160659bcd2fb20aa971458876582ec0a05e751461148161657c65a06ea71156688376579c343388065341478456554c1d54eea8lettre kef.jpg', 'hj t&#039;rt rrr', 1, 16),
	(27, 'test ajout feuille', '196706133265c4d7d0958c255961588765ae67958d3f2mime image.jpg', 'test desc', 26, 16),
	(28, 'test 2e feuille', '53620707765c4d7e1d8ba868372584665c3a28ae2393loup.jpg', 'desc', 26, 16);

-- Listage de la structure de table alphabel. langue
CREATE TABLE IF NOT EXISTS `langue` (
  `id_langue` int NOT NULL AUTO_INCREMENT,
  `nomLangue` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `alphabet` varchar(580) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id_langue`),
  UNIQUE KEY `nomLangue` (`nomLangue`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Listage des données de la table alphabel.langue : ~2 rows (environ)
INSERT INTO `langue` (`id_langue`, `nomLangue`, `alphabet`) VALUES
	(1, 'arabe', 'ا ب ت ث ج ح خ د ذ ر ز س ش ص ض ط ظ ع غ ف ق ك ل م ن ه و ي'),
	(2, 'russe', 'А Б В Г Д Е Ё Ж З И Й К Л М Н О П Р С Т У Ф Х Ц Ч Ш Щ Ъ Ы Ь Э Ю Я');

-- Listage de la structure de table alphabel. lettre
CREATE TABLE IF NOT EXISTS `lettre` (
  `id_lettre` int NOT NULL AUTO_INCREMENT,
  `nomLettre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `id_langue` int NOT NULL,
  `enregistrement` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id_lettre`),
  UNIQUE KEY `lettre` (`nomLettre`),
  KEY `id_langue` (`id_langue`),
  CONSTRAINT `lettre_ibfk_1` FOREIGN KEY (`id_langue`) REFERENCES `langue` (`id_langue`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Listage des données de la table alphabel.lettre : ~61 rows (environ)
INSERT INTO `lettre` (`id_lettre`, `nomLettre`, `id_langue`, `enregistrement`) VALUES
	(1, 'ا', 1, '1058146192655767536e0b1alif.mp3'),
	(2, 'ب', 1, '101694773865576d6fbeec9ب.mp3'),
	(3, 'ت', 1, '57409331865576d8b73ba5ت.mp3'),
	(4, 'ث', 1, '173330056265576db00b049ث.mp3'),
	(5, 'ج', 1, '161967074365576dc6a3a77ج.mp3'),
	(6, 'ح', 1, '82752572865576dfaba3a8ح.mp3'),
	(7, 'خ', 1, '213657594165576e1536982خ.mp3'),
	(8, 'د', 1, '81786199465576e3895946د.mp3'),
	(9, 'ذ', 1, '11678588146557731bcaf91ذ.mp3'),
	(10, 'ر', 1, '62308060765576e63d50e6ر.mp3'),
	(11, 'ز', 1, '127114886765577ea114a07zay.mp3'),
	(12, 'س', 1, '194708953565576ea9715ebس.mp3'),
	(13, 'ش', 1, '125697845865576ee024821ش.mp3'),
	(14, 'ص', 1, '24570779965576f1929dbaص.mp3'),
	(15, 'ض', 1, '64772669765576f2cde216ض.mp3'),
	(16, 'ط', 1, '117858210065576f3e16f09ط.mp3'),
	(17, 'ظ', 1, '84685824765576f5423eb9ظ.mp3'),
	(18, 'ع', 1, '24353879865576fdcc139bع.mp3'),
	(19, 'غ', 1, '44577176765576ffc9de79غ.mp3'),
	(20, 'ف', 1, '1320990428655770a3408ffف.mp3'),
	(21, 'ق', 1, '1247183449655770bc429d5ق.mp3'),
	(22, 'ك', 1, '1112144895655770cf8a418ك.mp3'),
	(23, 'ل', 1, '16312885976557712bdc6e4ل.mp3'),
	(24, 'م', 1, '28728384665577139cf1dfم.mp3'),
	(25, 'ن', 1, '7425776426557714abee89ن.mp3'),
	(26, 'ه', 1, '1844613376655771625f596ه.mp3'),
	(27, 'و', 1, '11542097836557717141ebcو.mp3'),
	(28, 'ي', 1, '3215123086557717f6eaedي.mp3'),
	(29, 'A', 2, '125135992165b950a6d52b2A.mp3'),
	(30, 'Б', 2, '19952288565b950c041954B.mp3'),
	(31, 'B', 2, '183286722165b950dd0d8afV.mp3'),
	(32, 'Г', 2, '138299915565b950fb9bf1cGai.mp3'),
	(33, 'Д', 2, '13333268365b95110ef8a5D.mp3'),
	(34, 'Е', 2, '161661694865b9512e19672Yé.mp3'),
	(35, 'Ё', 2, '104967357265b9513fbf8b3Yoo.mp3'),
	(36, 'Ж', 2, '4900893465b951610c3faG.mp3'),
	(37, 'З', 2, '160354563965b951741ed87Zee.mp3'),
	(38, 'И', 2, '1779130465b9518de4825I.mp3'),
	(39, 'Й', 2, '6538875265b951a7c37e7Ikrat kaya.mp3'),
	(40, 'К', 2, '100338198365b951b8eced2K.mp3'),
	(41, 'Л', 2, '14893063565b951c8423fdL.mp3'),
	(42, 'М', 2, '92695283365b951d94b0ddM.mp3'),
	(43, 'Н', 2, '192903315865b951ee282e0N.mp3'),
	(44, 'О', 2, '62022056565b95204a0c94O.mp3'),
	(45, 'П', 2, '193999889665b9521362c84P.mp3'),
	(46, 'Р ', 2, '140501340165b952db15f38Nouvel-enregistrement-3.mp3'),
	(47, 'С ', 2, '109292590865b953304ef10S.mp3'),
	(48, 'Т', 2, '65204376965b953420913aT.mp3'),
	(49, 'У', 2, '178727808265b95360cdd30OU.mp3'),
	(50, 'Ф', 2, '164813129665b95384ca6a3F.mp3'),
	(51, 'Х', 2, '61267142465b953b06affdHa.mp3'),
	(52, 'Ц ', 2, '11501761065b9541b2c92aNouvel-enregistrement.mp3'),
	(53, 'Ч', 2, '198220424265b9670ea9508Tche.mp3'),
	(54, 'Ш', 2, '53884034565c4d85d7deb41779130465b9518de4825I.mp3'),
	(55, 'Щ ', 2, '9520962765b9674ef20deSha.mp3'),
	(56, 'Ъ', 2, NULL),
	(57, 'Ы ', 2, NULL),
	(58, 'Ь ', 2, NULL),
	(59, 'Э', 2, '197237409865b967704f0b3Ai.mp3'),
	(60, 'Ю', 2, '137109237265b96785135c5You.mp3'),
	(61, 'Я', 2, '157863272465b9679fc4544Ya.mp3');

-- Listage de la structure de table alphabel. utilisateur
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `pseudo` varchar(140) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id_utilisateur`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Listage des données de la table alphabel.utilisateur : ~15 rows (environ)
INSERT INTO `utilisateur` (`id_utilisateur`, `email`, `pseudo`, `password`, `role`) VALUES
	(1, 'oooaa@gmail.com', 'toto21', '1234', 'ROLE_USER'),
	(2, 'test1@gmail.com', 'elietest', '$2y$10$4llNqTAmYVosFl/F5ObsgelZW2Mi1HZKS2sCIjTggHA0beB5uaR56', 'ROLE_USER'),
	(3, 'testelie13@gmail.com', 'testelie13', '$2y$10$7a1Ig21QjN7WimRbsv4ChexxMgHjtq8CIYyCjgjCQzK/CXZfmt5CS', 'ROLE_USER'),
	(6, 'elietest@gmail.com', 'elietest123', '$2y$10$FE/EwHbRWOIIzJnmdOTfy.aqhj4TT3seYCn41vZepBGgnN6s/rRp.', 'ROLE_ADMIN'),
	(7, 'micka@exemple.com', 'micka', '$2y$10$iuS98OVPquasqRlkWOw0We2A5KJVP25h5lsXHD7tjnBHv2Vel6GZK', 'ROLE_USER'),
	(8, 'stephane@exemple.com', 'stephane', '$2y$10$iMCrs3nz9NkioXCMpHvKC.YCOv7O3O4qVAfZ6M6TrakI7saqYX8Am', 'ROLE_USER'),
	(9, 'quentin@exemple.com', 'quentin', '$2y$10$Vhi/Sy3u0BpwvVinIRJulOzfqIiHKHd7TNucq9ixfhClJCzGlGuUC', 'ROLE_USER'),
	(10, 'elie@mail.fr', 'elie', '$2y$10$FyLs4U5pUFOJqoPr1MhsR.AwE68z7Yj/972LackZpm/aO5MmUMAhK', 'ROLE_USER'),
	(11, 'elienewtest@gmail.com', 'elienewtest', '$2y$10$ZUm//iVhq30nhqLHfQoQo.OFRPDKXkXNSVDJ/bYx5Eds.1JrQJ30q', 'ROLE_USER'),
	(12, 'elie.aa@gmail.com', 'pseudo222', 'Aaaa111!', 'ROLE_USER'),
	(13, 'mmm@gmail.com', 'aaaaaa', '$2y$10$/yRqMhnFHFUv9EkP7zjbkOSmgLobTp8zwt5aPyO6hhjne3R2tj3ZG', 'ROLE_USER'),
	(14, 'wawa.@gmail.com', 'ddeede', 'Wawa456!', 'ROLE_USER'),
	(15, 'z@gmail.com', 'rggtg', '$2y$10$xbplai48XgXnDdJ3GYRfpu890WKZpv63nLmOCK/BuEvrvUg2xyIIG', 'ROLE_USER'),
	(16, 'lundi@gmail.com', 'aaaaaazd', '$2y$10$sARbEfLpwq/9HS9ZIdZ6Nu1TFvzqYi6b1ItXvxOxKtHpGT56kMQIW', 'ROLE_ADMIN'),
	(17, 'hehe@gmail.com', 'hehe123', '$2y$10$RKB2Ba4ofxKwCKsuYt6mgOCMvPXZpAqlphWW0tARYLrWDuj5I46pK', 'ROLE_USER');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
