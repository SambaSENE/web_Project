-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
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


-- Listage de la structure de la base pour db_ville
CREATE DATABASE IF NOT EXISTS `db_ville` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_ville`;

-- Listage de la structure de table db_ville. doctrine_migration_versions
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Listage des données de la table db_ville.doctrine_migration_versions : ~0 rows (environ)
DELETE FROM `doctrine_migration_versions`;
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
	('DoctrineMigrations\\Version20240220082630', '2024-02-20 08:26:57', 90);

-- Listage de la structure de table db_ville. pays
CREATE TABLE IF NOT EXISTS `pays` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code_pays` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table db_ville.pays : ~125 rows (environ)
DELETE FROM `pays`;
INSERT INTO `pays` (`id`, `code_pays`, `nom_pays`) VALUES
	(1, 'US', 'United States'),
	(2, 'RU', 'Russian Federation'),
	(3, 'NL', 'Netherlands'),
	(4, 'AD', 'Andorra'),
	(5, 'AE', 'United Arab Emirates'),
	(6, 'AF', 'Afghanistan'),
	(7, 'AG', 'Antigua and Barbuda'),
	(8, 'AI', 'Anguilla'),
	(9, 'AL', 'Albania'),
	(10, 'AM', 'Armenia'),
	(11, 'AO', 'Angola'),
	(12, 'AQ', 'Antarctica'),
	(13, 'AR', 'Argentina'),
	(14, 'AS', 'American Samoa'),
	(15, 'AT', 'Austria'),
	(16, 'AU', 'Australia'),
	(17, 'AW', 'Aruba'),
	(18, 'AX', 'Åland Islands'),
	(19, 'AZ', 'Azerbaijan'),
	(20, 'BA', 'Bosnia and Herzegovina'),
	(21, 'BB', 'Barbados'),
	(22, 'BD', 'Bangladesh'),
	(23, 'BE', 'Belgium'),
	(24, 'BF', 'Burkina Faso'),
	(25, 'BG', 'Bulgaria'),
	(26, 'BH', 'Bahrain'),
	(27, 'BI', 'Burundi'),
	(28, 'BJ', 'Benin'),
	(29, 'BL', 'Saint Barthélemy'),
	(30, 'BM', 'Bermuda'),
	(31, 'BN', 'Brunei Darussalam'),
	(32, 'BO', 'Bolivia, Plurinational State of'),
	(33, 'BQ', 'Bonaire, Sint Eustatius and Saba'),
	(34, 'BR', 'Brazil'),
	(35, 'BS', 'Bahamas'),
	(36, 'BT', 'Bhutan'),
	(37, 'BV', 'Bouvet Island'),
	(38, 'BW', 'Botswana'),
	(39, 'BY', 'Belarus'),
	(40, 'BZ', 'Belize'),
	(41, 'CA', 'Canada'),
	(42, 'CC', 'Cocos (Keeling) Islands'),
	(43, 'CD', 'Congo, the Democratic Republic of the'),
	(44, 'CF', 'Central African Republic'),
	(45, 'CG', 'Congo'),
	(46, 'CH', 'Switzerland'),
	(47, 'CI', 'Côte d\'Ivoire'),
	(48, 'CK', 'Cook Islands'),
	(49, 'CL', 'Chile'),
	(50, 'CM', 'Cameroon'),
	(51, 'CN', 'China'),
	(52, 'CO', 'Colombia'),
	(53, 'CR', 'Costa Rica'),
	(54, 'CU', 'Cuba'),
	(55, 'CV', 'Cape Verde'),
	(56, 'CW', 'Curaçao'),
	(57, 'CX', 'Christmas Island'),
	(58, 'CY', 'Cyprus'),
	(59, 'CZ', 'Czech Republic'),
	(60, 'DE', 'Germany'),
	(61, 'DJ', 'Djibouti'),
	(62, 'DK', 'Denmark'),
	(63, 'DM', 'Dominica'),
	(64, 'DO', 'Dominican Republic'),
	(65, 'DZ', 'Algeria'),
	(66, 'EC', 'Ecuador'),
	(67, 'EE', 'Estonia'),
	(68, 'EG', 'Egypt'),
	(69, 'EH', 'Western Sahara'),
	(70, 'ER', 'Eritrea'),
	(71, 'ES', 'Spain'),
	(72, 'ET', 'Ethiopia'),
	(73, 'FI', 'Finland'),
	(74, 'FJ', 'Fiji'),
	(75, 'FK', 'Falkland Islands (Malvinas)'),
	(76, 'FM', 'Micronesia, Federated States of'),
	(77, 'FO', 'Faroe Islands'),
	(78, 'FR', 'France'),
	(79, 'GA', 'Gabon'),
	(80, 'GB', 'United Kingdom'),
	(81, 'GD', 'Grenada'),
	(82, 'GE', 'Georgia'),
	(83, 'GF', 'French Guiana'),
	(84, 'GG', 'Guernsey'),
	(85, 'GH', 'Ghana'),
	(86, 'GI', 'Gibraltar'),
	(87, 'GL', 'Greenland'),
	(88, 'GM', 'Gambia'),
	(89, 'GN', 'Guinea'),
	(90, 'GP', 'Guadeloupe'),
	(91, 'GQ', 'Equatorial Guinea'),
	(92, 'GR', 'Greece'),
	(93, 'GS', 'South Georgia and the South Sandwich Islands'),
	(94, 'GT', 'Guatemala'),
	(95, 'GU', 'Guam'),
	(96, 'GW', 'Guinea-Bissau'),
	(97, 'GY', 'Guyana'),
	(98, 'HK', 'Hong Kong'),
	(99, 'HM', 'Heard Island and McDonald Islands'),
	(100, 'HN', 'Honduras'),
	(101, 'HR', 'Croatia'),
	(102, 'HT', 'Haiti'),
	(103, 'HU', 'Hungary'),
	(104, 'ID', 'Indonesia'),
	(105, 'IE', 'Ireland'),
	(106, 'IL', 'Israel'),
	(107, 'IM', 'Isle of Man'),
	(108, 'IN', 'India'),
	(109, 'IO', 'British Indian Ocean Territory'),
	(110, 'IQ', 'Iraq'),
	(111, 'IR', 'Iran, Islamic Republic of'),
	(112, 'IS', 'Iceland'),
	(113, 'IT', 'Italy'),
	(114, 'JE', 'Jersey'),
	(115, 'JM', 'Jamaica'),
	(116, 'JO', 'Jordan'),
	(117, 'JP', 'Japan'),
	(118, 'KE', 'Kenya'),
	(119, 'KG', 'Kyrgyzstan'),
	(120, 'KH', 'Cambodia'),
	(121, 'KI', 'Kiribati'),
	(122, 'KM', 'Comoros'),
	(123, 'KN', 'Saint Kitts and Nevis'),
	(124, 'KP', 'Korea, Democratic People\'s Republic of'),
	(125, 'KR', 'Korea, Republic of');

-- Listage de la structure de table db_ville. ville
CREATE TABLE IF NOT EXISTS `ville` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_pays_id` int DEFAULT NULL,
  `code_postal_ville` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_43C3D9C37879EB34` (`id_pays_id`),
  CONSTRAINT `FK_43C3D9C37879EB34` FOREIGN KEY (`id_pays_id`) REFERENCES `pays` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table db_ville.ville : ~24 rows (environ)
DELETE FROM `ville`;
INSERT INTO `ville` (`id`, `id_pays_id`, `code_postal_ville`, `nom_ville`) VALUES
	(1, 75, '75000', 'Paris'),
	(2, 75, '59000', 'Lille'),
	(3, 75, '68100', 'Mulhouse'),
	(4, 75, '31000', 'Toulouse'),
	(5, 75, '69000', 'Lyon'),
	(14, 75, '06100', 'Nice'),
	(15, 75, '33800', 'Bordeaux'),
	(51, 20, '1000', 'Bruxelles'),
	(52, 20, '5004', 'Namur'),
	(53, 20, '8200', 'Brugges'),
	(100, 123, '90001', 'Los Angeles'),
	(101, 123, '20001', 'Washington'),
	(102, 123, '10001', 'New York'),
	(103, 123, '02110', 'Boston'),
	(110, 124, '102301', 'Moscow'),
	(111, 124, '187015', 'Saint-Pétersbourg'),
	(120, 77, 'WC1B', 'London'),
	(121, 77, 'L73', 'Liverpool'),
	(130, 125, '1058', 'Amsterdam'),
	(140, 57, '10115', 'Berlin'),
	(150, 110, '00042', 'Rome'),
	(160, 68, '28001', 'Madrid'),
	(170, 68, '08001', 'Barcelone'),
	(180, 43, '1201', 'Genève');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
