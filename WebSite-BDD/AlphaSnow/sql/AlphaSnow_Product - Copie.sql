-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.23 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour snows
-- CREATE DATABASE IF NOT EXISTS `snows` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `paulloup_snows`;

-- Listage de la structure de la table snows. snows
CREATE TABLE IF NOT EXISTS `snows` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(5) NOT NULL,
  `marque` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `description_grande` longtext NOT NULL,
  `price` float NOT NULL check (price>0),
  `photo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `snow_code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table snows.snows : ~9 rows (environ)
DELETE FROM `snows`;
/*!40000 ALTER TABLE `snows` DISABLE KEYS */;
INSERT INTO `snows` (`id`, `code`, `marque`, `model`, `description`, `description_grande`, `price`, `photo`) VALUES
	(1, 'A7648', 'Rossignol', 'SPLIT', 'Pour une glisse plus fraîche', 'Description_grande', 869.00, 'view/content/img/snow/Rossignol-SPLITBOARD/Rossignol-SPLIT(1).png'),
	(2, 'A3622', 'Salomon', 'GYPSY', 'Pour une glisse sans fin', 'Description_grande', 599.00, 'view/content/img/snow/salomon-GYPSY/Salomon-GYPSY(1).png'),
	(3, 'A3010', 'Head', 'DAY LYT', 'Pour une glisse de compétition', 'Description_grande', 799.00, 'view/content/img/snow/head-DAY LYT/day-lyt.png'),
	(4, 'A9852', 'Salomon', 'NO DRAMA', 'Pour une glisse plaine de sensation', 'Description_grande', 399.00, 'view/content/img/snow/salomon-NO DRAMA/no_drama.png');
-- Listage de la structure de la table snows. users

CREATE TABLE IF NOT EXISTS `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `userEmailAddress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `userHashPsw` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `userType` int DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `userEmailAddress` (`userEmailAddress`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table snows.users : ~1 rows (environ)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `userEmailAddress`, `userHashPsw`, `userType`) VALUES
	(12, 'admin@alphasnow.ch', '$2y$10$fbwm5whNrdFUu43gTlktMeh9xvX76UwzULrJroysDT9PcjInPJ/y6', 1),
	(13, 'client@alphasnow.ch', '$2y$10$acfJsRajk3e7yOWj33HhqO0/rjbeR7NqMLmOAW096iRUfqTSglQXS', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
