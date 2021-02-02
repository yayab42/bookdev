-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

INSERT INTO `products` (`id`, `title`, `description`, `price_ht`, `weight`, `vat`, `stock`, `categories_id`) VALUES
(1,	'PHP pour les noobies',	'Devenez un vrai crack du PHP, en lisant ce livre conçut et écrit par des développeurs qui utilisent PHP au quotidien, vous deviendrez bientôt la star de l\'open space',	34,	150,	20,	34,	4),
(2,	'HTML',	NULL,	33,	120,	20,	3,	4),
(3,	'CSS',	'Pour faire de joli site,avec CSS rien de plus simple',	13,	100,	20,	32,	4),
(4,	'JS',	'Le javascript expliqué aux plus grands nombres',	23,	140,	20,	45,	4),
(5,	'Les disques SSD',	NULL,	20,	200,	20,	23,	1),
(6,	'Les routeurs',	NULL,	34,	200,	20,	12,	1),
(7,	'Les serveurs web',	'Apprenez le fonctionnement et la configuration d\'un serveur web de A à Z',	45,	240,	20,	13,	1),
(8,	'Les Macs',	'L\'univers merveilleux des ordinateurs à la pomme',	50,	150,	20,	56,	1),
(9,	'VS CODE',	'L\'ide gratuite pour tous et très puissante',	24,	120,	20,	54,	3),
(10,	'PHP STORM',	NULL,	60,	300,	20,	46,	3),
(11,	'Android studio',	'Créer vos propres applications pour smartphone et tablettes android',	35,	230,	20,	21,	3),
(12,	'ECLIPSE',	'L\'ide pour programmer en JAVA',	43,	350,	20,	43,	3),
(13,	'Windows 10',	NULL,	56,	500,	20,	67,	5),
(14,	'LINUX',	'L\'os libre et puissant par excellence',	12,	360,	20,	54,	5),
(15,	'OS X',	'l\'os de la pomme',	51,	400,	20,	56,	5),
(16,	'OPEN BSD',	'Les base de l\'unix',	32,	200,	20,	52,	5),
(17,	'GIMP',	'Le logiciel de retouche photo libre',	32,	250,	20,	43,	2),
(18,	'Firefox',	'Le navigateur open source',	45,	400,	20,	67,	2),
(19,	'Libre office',	'La suite de bureautique à la portée de toutes les bourses',	16,	150,	20,	43,	2),
(20,	'Inkscape',	'Logiciel pour faire du vectoriel',	33,	240,	20,	34,	2);

-- 2021-02-02 21:50:11
