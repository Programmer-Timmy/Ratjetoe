-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 13 sep 2023 om 19:42
-- Serverversie: 5.7.36
-- PHP-versie: 8.2.6

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ratjetoe`
--
CREATE
DATABASE IF NOT EXISTS `ratjetoe` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE
`ratjetoe`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country`
(
    `id` int
(
    11
) NOT NULL AUTO_INCREMENT,
    `name` varchar
(
    45
) NOT NULL,
    PRIMARY KEY
(
    `id`
)
    ) ENGINE=InnoDB AUTO_INCREMENT=253 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `country`
--

INSERT INTO `country` (`id`, `name`)
VALUES (1, 'Afghanistan'),
       (2, 'Aland Islands'),
       (3, 'Albania'),
       (4, 'Algeria'),
       (5, 'American Samoa'),
       (6, 'Andorra'),
       (7, 'Angola'),
       (8, 'Anguilla'),
       (9, 'Antarctica'),
       (10, 'Antigua and Barbuda'),
       (11, 'Argentina'),
       (12, 'Armenia'),
       (13, 'Aruba'),
       (14, 'Australia'),
       (15, 'Austria'),
       (16, 'Azerbaijan'),
       (17, 'Bahamas'),
       (18, 'Bahrain'),
       (19, 'Bangladesh'),
       (20, 'Barbados'),
       (21, 'Belarus'),
       (22, 'Belgium'),
       (23, 'Belize'),
       (24, 'Benin'),
       (25, 'Bermuda'),
       (26, 'Bhutan'),
       (27, 'Bolivia'),
       (28, 'Bonaire, Sint Eustatius and Saba'),
       (29, 'Bosnia and Herzegovina'),
       (30, 'Botswana'),
       (31, 'Bouvet Island'),
       (32, 'Brazil'),
       (33, 'British Indian Ocean Territory'),
       (34, 'Brunei Darussalam'),
       (35, 'Bulgaria'),
       (36, 'Burkina Faso'),
       (37, 'Burundi'),
       (38, 'Cambodia'),
       (39, 'Cameroon'),
       (40, 'Canada'),
       (41, 'Cape Verde'),
       (42, 'Cayman Islands'),
       (43, 'Central African Republic'),
       (44, 'Chad'),
       (45, 'Chile'),
       (46, 'China'),
       (47, 'Christmas Island'),
       (48, 'Cocos (Keeling) Islands'),
       (49, 'Colombia'),
       (50, 'Comoros'),
       (51, 'Congo'),
       (52, 'Congo, Democratic Republic of the Congo'),
       (53, 'Cook Islands'),
       (54, 'Costa Rica'),
       (55, 'Cote D\'Ivoire'),
(56, 'Croatia'),
(57, 'Cuba'),
(58, 'Curacao'),
(59, 'Cyprus'),
(60, 'Czech Republic'),
(61, 'Denmark'),
(62, 'Djibouti'),
(63, 'Dominica'),
(64, 'Dominican Republic'),
(65, 'Ecuador'),
(66, 'Egypt'),
(67, 'El Salvador'),
(68, 'Equatorial Guinea'),
(69, 'Eritrea'),
(70, 'Estonia'),
(71, 'Ethiopia'),
(72, 'Falkland Islands (Malvinas)'),
(73, 'Faroe Islands'),
(74, 'Fiji'),
(75, 'Finland'),
(76, 'France'),
(77, 'French Guiana'),
(78, 'French Polynesia'),
(79, 'French Southern Territories'),
(80, 'Gabon'),
(81, 'Gambia'),
(82, 'Georgia'),
(83, 'Germany'),
(84, 'Ghana'),
(85, 'Gibraltar'),
(86, 'Greece'),
(87, 'Greenland'),
(88, 'Grenada'),
(89, 'Guadeloupe'),
(90, 'Guam'),
(91, 'Guatemala'),
(92, 'Guernsey'),
(93, 'Guinea'),
(94, 'Guinea-Bissau'),
(95, 'Guyana'),
(96, 'Haiti'),
(97, 'Heard Island and Mcdonald Islands'),
(98, 'Holy See (Vatican City State)'),
(99, 'Honduras'),
(100, 'Hong Kong'),
(101, 'Hungary'),
(102, 'Iceland'),
(103, 'India'),
(104, 'Indonesia'),
(105, 'Iran, Islamic Republic of'),
(106, 'Iraq'),
(107, 'Ireland'),
(108, 'Isle of Man'),
(109, 'Israel'),
(110, 'Italy'),
(111, 'Jamaica'),
(112, 'Japan'),
(113, 'Jersey'),
(114, 'Jordan'),
(115, 'Kazakhstan'),
(116, 'Kenya'),
(117, 'Kiribati'),
(118, 'Korea, Democratic People\'s Republic of'),
       (119, 'Korea, Republic of'),
       (120, 'Kosovo'),
       (121, 'Kuwait'),
       (122, 'Kyrgyzstan'),
       (123, 'Lao People\'s Democratic Republic'),
(124, 'Latvia'),
(125, 'Lebanon'),
(126, 'Lesotho'),
(127, 'Liberia'),
(128, 'Libyan Arab Jamahiriya'),
(129, 'Liechtenstein'),
(130, 'Lithuania'),
(131, 'Luxembourg'),
(132, 'Macao'),
(133, 'Macedonia, the Former Yugoslav Republic of'),
(134, 'Madagascar'),
(135, 'Malawi'),
(136, 'Malaysia'),
(137, 'Maldives'),
(138, 'Mali'),
(139, 'Malta'),
(140, 'Marshall Islands'),
(141, 'Martinique'),
(142, 'Mauritania'),
(143, 'Mauritius'),
(144, 'Mayotte'),
(145, 'Mexico'),
(146, 'Micronesia, Federated States of'),
(147, 'Moldova, Republic of'),
(148, 'Monaco'),
(149, 'Mongolia'),
(150, 'Montenegro'),
(151, 'Montserrat'),
(152, 'Morocco'),
(153, 'Mozambique'),
(154, 'Myanmar'),
(155, 'Namibia'),
(156, 'Nauru'),
(157, 'Nepal'),
(158, 'Netherlands'),
(159, 'Netherlands Antilles'),
(160, 'New Caledonia'),
(161, 'New Zealand'),
(162, 'Nicaragua'),
(163, 'Niger'),
(164, 'Nigeria'),
(165, 'Niue'),
(166, 'Norfolk Island'),
(167, 'Northern Mariana Islands'),
(168, 'Norway'),
(169, 'Oman'),
(170, 'Pakistan'),
(171, 'Palau'),
(172, 'Palestinian Territory, Occupied'),
(173, 'Panama'),
(174, 'Papua New Guinea'),
(175, 'Paraguay'),
(176, 'Peru'),
(177, 'Philippines'),
(178, 'Pitcairn'),
(179, 'Poland'),
(180, 'Portugal'),
(181, 'Puerto Rico'),
(182, 'Qatar'),
(183, 'Reunion'),
(184, 'Romania'),
(185, 'Russian Federation'),
(186, 'Rwanda'),
(187, 'Saint Barthelemy'),
(188, 'Saint Helena'),
(189, 'Saint Kitts and Nevis'),
(190, 'Saint Lucia'),
(191, 'Saint Martin'),
(192, 'Saint Pierre and Miquelon'),
(193, 'Saint Vincent and the Grenadines'),
(194, 'Samoa'),
(195, 'San Marino'),
(196, 'Sao Tome and Principe'),
(197, 'Saudi Arabia'),
(198, 'Senegal'),
(199, 'Serbia'),
(200, 'Serbia and Montenegro'),
(201, 'Seychelles'),
(202, 'Sierra Leone'),
(203, 'Singapore'),
(204, 'Sint Maarten'),
(205, 'Slovakia'),
(206, 'Slovenia'),
(207, 'Solomon Islands'),
(208, 'Somalia'),
(209, 'South Africa'),
(210, 'South Georgia and the South Sandwich Islands'),
(211, 'South Sudan'),
(212, 'Spain'),
(213, 'Sri Lanka'),
(214, 'Sudan'),
(215, 'Suriname'),
(216, 'Svalbard and Jan Mayen'),
(217, 'Swaziland'),
(218, 'Sweden'),
(219, 'Switzerland'),
(220, 'Syrian Arab Republic'),
(221, 'Taiwan, Province of China'),
(222, 'Tajikistan'),
(223, 'Tanzania, United Republic of'),
(224, 'Thailand'),
(225, 'Timor-Leste'),
(226, 'Togo'),
(227, 'Tokelau'),
(228, 'Tonga'),
(229, 'Trinidad and Tobago'),
(230, 'Tunisia'),
(231, 'Turkey'),
(232, 'Turkmenistan'),
(233, 'Turks and Caicos Islands'),
(234, 'Tuvalu'),
(235, 'Uganda'),
(236, 'Ukraine'),
(237, 'United Arab Emirates'),
(238, 'United Kingdom'),
(239, 'United States'),
(240, 'United States Minor Outlying Islands'),
(241, 'Uruguay'),
(242, 'Uzbekistan'),
(243, 'Vanuatu'),
(244, 'Venezuela'),
(245, 'Viet Nam'),
(246, 'Virgin Islands, British'),
(247, 'Virgin Islands, U.s.'),
(248, ' Wallis and Futuna '),
(249, ' Western Sahara '),
(250, ' Yemen '),
(251, ' Zambia '),
(252, ' Zimbabwe ');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `premium_member` tinyint(1) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_customer_country_idx` (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `lastname`, `email`, `premium_member`, `country_id`) VALUES
(1, ' tim ', ' van der kloet ', ' tim.vanderkloet@gmail.com ', 0, 158),
(3, ' jan ', ' pietje ', ' jan@pietje ', 0, 83);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `customer_game`
--

DROP TABLE IF EXISTS `customer_game`;
CREATE TABLE IF NOT EXISTS `customer_game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_customer_game_customer1_idx` (`customer_id`),
  KEY `fk_customer_game_game1_idx` (`game_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `customer_game`
--

INSERT INTO `customer_game` (`id`, `customer_id`, `game_id`) VALUES
(5, 1, 16),
(6, 1, 11),
(7, 1, 7),
(8, 1, 19),
(9, 1, 9),
(10, 1, 12);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `game`
--

DROP TABLE IF EXISTS `game`;
CREATE TABLE IF NOT EXISTS `game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `platform_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_game_platform1_idx` (`platform_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `game`
--

INSERT INTO `game` (`id`, `name`, `platform_id`) VALUES
(1, ' The Witcher 3: Wild Hunt ', 1),
(2, ' Minecraft ', 2),
(3, ' Among Us ', 3),
(4, ' Angry Birds ', 4),
(5, ' Candy Crush Saga ', 5),
(6, ' Demon\'s Souls', 6),
       (7, 'Halo Infinite', 7),
       (8, 'The Legend of Zelda: Breath of the Wild', 8),
       (9, 'Red Dead Redemption 2', 9),
       (10, 'Gears 5', 10),
       (11, 'Super Mario 64', 11),
       (12, 'The Legend of Zelda: A Link to the Past', 12),
       (13, 'Grand Theft Auto V', 1),
       (14, 'Overwatch', 2),
       (15, 'Counter-Strike: Global Offensive', 1),
       (16, 'Fortnite', 7),
       (17, 'FIFA 22', 9),
       (18, 'The Elder Scrolls V: Skyrim', 1),
       (19, 'Call of Duty: Warzone', 10),
       (20, 'Animal Crossing: New Horizons', 8),
       (21, 'Super Mario World', 12),
       (22, 'Final Fantasy VII', 6);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `platform`
--

DROP TABLE IF EXISTS `platform`;
CREATE TABLE IF NOT EXISTS `platform`
(
    `id` int
(
    11
) NOT NULL AUTO_INCREMENT,
    `name` varchar
(
    45
) NOT NULL,
    PRIMARY KEY
(
    `id`
)
    ) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `platform`
--

INSERT INTO `platform` (`id`, `name`)
VALUES (1, 'Windows'),
       (2, 'macOS'),
       (3, 'Linux'),
       (4, 'iOS'),
       (5, 'Android'),
       (6, 'PlayStation 5'),
       (7, 'Xbox Series X/S'),
       (8, 'Nintendo Switch'),
       (9, 'PlayStation 4'),
       (10, 'Xbox One'),
       (11, 'Nintendo 64'),
       (12, 'Super Nintendo Entertainment System (SNES)');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user`
(
    `id` int
(
    11
) NOT NULL AUTO_INCREMENT,
    `email` varchar
(
    45
) NOT NULL,
    `password_hash` varchar
(
    100
) NOT NULL,
    PRIMARY KEY
(
    `id`
)
    ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password_hash`)
VALUES (1, 'root@gmail.com', '$2y$10$XOWhFK6HP4Uie9I4crZRV.om1D.3cLPJ44rgQBxBzSxsIAjlhWYgi');

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `customer`
--
ALTER TABLE `customer`
    ADD CONSTRAINT `fk_customer_country` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `customer_game`
--
ALTER TABLE `customer_game`
    ADD CONSTRAINT `fk_customer_game_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_customer_game_game1` FOREIGN KEY (`game_id`) REFERENCES `game` (`id`) ON
DELETE
NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `game`
--
ALTER TABLE `game`
    ADD CONSTRAINT `fk_game_platform1` FOREIGN KEY (`platform_id`) REFERENCES `platform` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
