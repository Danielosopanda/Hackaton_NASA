-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.28-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para hackaton_nasa
CREATE DATABASE IF NOT EXISTS `hackaton_nasa` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `hackaton_nasa`;

-- Volcando estructura para tabla hackaton_nasa.atraccion
CREATE TABLE IF NOT EXISTS `atraccion` (
  `idAtraccion` int(11) NOT NULL AUTO_INCREMENT,
  `nombreAtraccion` varchar(100) NOT NULL,
  `descripcionAtraccion` varchar(500) NOT NULL,
  `idDestino` int(11) NOT NULL,
  PRIMARY KEY (`idAtraccion`),
  KEY `idDestino` (`idDestino`),
  CONSTRAINT `atraccion_ibfk_1` FOREIGN KEY (`idDestino`) REFERENCES `destino` (`idDestino`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla hackaton_nasa.atraccion: ~24 rows (aproximadamente)
INSERT INTO `atraccion` (`idAtraccion`, `nombreAtraccion`, `descripcionAtraccion`, `idDestino`) VALUES
	(1, 'Mount Olimpus', 'The biggest volcano of the Solar System.', 2),
	(2, 'Elysium Mons', 'Visit one of the most impressive volcanoes on the red planet. With an altitude of 14.1 km above the martian datum, you can see the surroundings and get an amazing view of the city of Elysium.', 2),
	(3, 'Noctis Labyrinthus', 'Explore the most astonishing valleys you have ever seen. These natural maze-like rifts span across 1190 km and multiple points of interest can be visited.', 2),
	(4, 'The Great Red Spot', 'An iconic view and element of this gigantic planet, observe from a shuttle the enormous storm that has reigned the surface of the planet the for hundreds of years. With its stunning size of 16,350 km wide and winds peaking up to 645 km/h, this is a must-see of the planet.', 4),
	(5, 'The Galilean Satellites', 'Make a short stop in each of these historical satellites which where first observed by astronomer Galileo Galilei and are the 4 biggest moon of this planet.', 4),
	(6, 'Volcanoes of Io', 'Go sightseeing to the most volcanically active body in the entire solar system, behold the mayhem running this planet, as well as the lakes and rivers of laca flowing through its surface.', 4),
	(8, 'Rings of the Giant', 'Visit the rings that surrounds this enormous planet and admire its one of a kind system which consists of 8 icy rings, its complexity distinguishes it from all other in the solar system.', 5),
	(9, 'Moon Marathon', 'Can\'t go without touring on the most famous moons of the vast array this planet has to offer. With its 146 variety of moons, you\'ll have the opportunity to experience 20 of the 80 available from our catalogue.', 5),
	(10, 'Cassini Division', 'Discover the largest gap of the 8 rings of this planet. With a width of 4700 km, you\'ll find yourself between the third and forth rings (known as B and A respectively), and admire a complete new view', 5),
	(11, 'Auroras', 'Delight your eyes with the vision of the unusual Auroras, which unlike in most planets, they are not in line with the poles, this given the lopside magnetic field characteristic of the planet.', 6),
	(12, 'Visist Ariel', 'You could visit the brightness and youngest moon of Uranus. You will observe how its brightness changes dramatically when it is in opposite side', 6),
	(13, 'Moons', 'Visit the two moons of the red planet, in both you will see mars from different distances and you can apreciate the immensity of the planet', 2),
	(14, 'Maat Mons', 'In a spaceship you will visit the highest volcano in the planet, but you wont be able to leave the ship, becasue of the high temperatures', 3),
	(15, 'The Marriage Room', 'Venus is the name of the god of love, so as the names says you will have the chance to propose marriage to your next fiancee. The room will have top romantic things that you can use to decorate as you wish', 3),
	(16, 'The Alps', 'Discover the chain of mountains that reigns Europe, with a length of 1200 kilometres and its highest peek at 4809 m.a.s.l., this dumbfounding mountain system has multiples landmarks, as well as activities to do as you delight yourself with the amazing views it offers.', 1),
	(17, 'Angkor', 'In southeast Asia, rises the Kingdom of Cambodia, where hidden in the middle of its jungles, you\'ll find the temples of Angkor, majestic monuments consisting of temples and scultures built over centuries ago, which nowadays trees have covered part of it with its roors. This historical site is a true sight to behold', 1),
	(18, 'Amazonia', 'By far the biggest tropical rainforest, and considered as the lung of the Earth, this gigantic forest located in South America covers over 6 million square kilometres and is home to an enormous amount of species from Earth. During your visit, you\'ll take a journey along part of its one of a kind river.', 1),
	(19, 'Great Barrier Reef', 'The most extensive coral reef ecosystem locates itself in the northeast of Australia, covering an area of 348,000 square kilometres, and contains the world\'s largest collection of caral reefs, as well as thousands of fish and mollusc species. You\'ll be able the swim and witness first handed the beauty this place beholds.', 1),
	(20, 'Ice Continent', 'It is Earth\'s fifth-largest continent and as it\'s name says is covered almost completely in ice. It has six months of daylight in it\'s summer and six months of darkness in winter. Also you could have a great experience with whales, seals and penguins', 1),
	(22, 'Northern Lights', 'Visit the most wonderful thing on earth, watch them from the nordic countries and enjoy an incredible climate and view', 1),
	(23, 'The Sea', 'If you don\'t visit the sea, it\'s like you didn\'t come to earth', 1),
	(30, 'Mount Everest', 'The tallest and most imponent mountain in the earth. You will be able to climb this impressive monster, only if you dare and you are not afraid of cold', 1),
	(31, 'The Nordic', 'An island nation located in Northern Europe between the Greenland Sea and the Northern Atlantic Ocean. You could visit Northern Lights, waterfalls, glaciers, and volcanoes', 1),
	(32, 'First Lunar Landing Spot', 'The location where Neil Armstrong, the first astronaut on the Moon landed in 1969.', 7);

-- Volcando estructura para tabla hackaton_nasa.destino
CREATE TABLE IF NOT EXISTS `destino` (
  `idDestino` int(11) NOT NULL AUTO_INCREMENT,
  `nombreDestino` varchar(100) NOT NULL,
  `descripcionDestino` varchar(500) NOT NULL,
  `gravedadDestino` float NOT NULL,
  `temperaturaDestino` float NOT NULL,
  `tiempoRotacionDestino` float NOT NULL DEFAULT 0,
  `tiempoTraslacionDestino` float NOT NULL DEFAULT 0,
  `distanciaDestino` float NOT NULL DEFAULT 0,
  `ordenDestino` int(11) NOT NULL,
  PRIMARY KEY (`idDestino`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla hackaton_nasa.destino: ~7 rows (aproximadamente)
INSERT INTO `destino` (`idDestino`, `nombreDestino`, `descripcionDestino`, `gravedadDestino`, `temperaturaDestino`, `tiempoRotacionDestino`, `tiempoTraslacionDestino`, `distanciaDestino`, `ordenDestino`) VALUES
	(1, 'The Earth', 'The planet where human life started. It has a diverse range of ecosystems, including oceans, forests, and deserts, and is characterized by its unique blue appearance from space.', 9.81, 14, 1, 365, 1, 3),
	(2, 'Mars', 'It has a diverse range of ecosystems, including oceans, forests, and deserts, and is characterized by its unique blue appearance from space.', 3.71, 14, 1.02, 687, 1.524, 5),
	(3, 'Venus', 'Venus is often called Earth\'s "sister planet" due to its similar size and composition. However, it has a thick, toxic atmosphere that traps heat, making it the hottest planet in our solar system.', 8.87, 453, 243, 225, 0.723, 2),
	(4, 'Jupiter', 'Jupiter is the largest planet in our solar system and is famous for its immense size and colorful cloud bands. It also hosts the Great Red Spot, a massive storm system.', 24.79, 800, 0.42, 4307, 5.205, 6),
	(5, 'Saturn', 'Saturn is known for its stunning ring system, which consists of icy particles and rocks. It is a gas giant with a unique, hexagonal-shaped storm at its north pole.', 10.44, 180.15, 0.45, 10585, 9.5, 7),
	(6, 'Uranus', 'Uranus is an ice giant with a bluish-green hue. It rotates on its side, making it unique in the solar system, and it has a faint ring system.', 8.87, -218, 71.8, 30660, 20, 8),
	(7, 'The Moon', 'The Moon is Earth\'s natural satellite, with a cratered surface and no atmosphere. It affects Earth\'s tides and has been a target for human exploration, including the Apollo missions.', 1.625, -173, 27.3, 27.3, 1, 4);

-- Volcando estructura para tabla hackaton_nasa.estacion
CREATE TABLE IF NOT EXISTS `estacion` (
  `idEstacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombreEstacion` varchar(100) NOT NULL,
  `descripcionEstacion` varchar(500) NOT NULL,
  `poblacionEstacion` int(11) NOT NULL,
  `tipoEstacion` varchar(1) NOT NULL,
  `idDestino` int(11) NOT NULL,
  PRIMARY KEY (`idEstacion`),
  KEY `idDestino` (`idDestino`),
  CONSTRAINT `estacion_ibfk_1` FOREIGN KEY (`idDestino`) REFERENCES `destino` (`idDestino`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla hackaton_nasa.estacion: ~21 rows (aproximadamente)
INSERT INTO `estacion` (`idEstacion`, `nombreEstacion`, `descripcionEstacion`, `poblacionEstacion`, `tipoEstacion`, `idDestino`) VALUES
	(1, 'Olympus City', 'A city on the base of Mount Olympus, with the highest population on Mars.', 2750000, 'S', 2),
	(2, 'Tharsis', 'Located near Olympus City, Tharsis is the second largest city in the planet. It is named after the largest volcanic region in the Solar System.', 1896432, 'S', 2),
	(3, 'Valles Marineris', 'This city is located near the largest canyon of the Solar System. A perfect destination for those who enjoy marvelous landscapes.', 376541, 'S', 2),
	(4, 'Acidalia', 'The only big city near the north pole. It is believed that there once was an ocean in the Acidalia Planitia', 650087, 'S', 2),
	(5, 'Elysium', 'Famous for its meteorite crash sites, Elysium is one of the most developed cities in the red planet. It\'s home to one of the largest spaceports outside of the Earth.', 1089542, 'S', 2),
	(6, 'Prometheus', 'It is the only habitable station in the orbit of Venus. Its main purpose is to observe the surface of the planet.', 3125, 'O', 3),
	(7, 'Europa', 'This station is in the moon from which its name gas given, this giant celestial body is the sixth largest moon in the solar system, and is the smoothest solid object as well. Its frosty surface is a main atraction as it\'s distinctive over all known.', 4500, 'S', 4),
	(8, 'Ganymede', 'Being on the largest moon in the solar system, through this station it is possible to observe auroras and bright ribbons of glowing glass due to its unique magnetic field in the icy moon.', 4500, 'S', 4),
	(9, 'Vulcano', 'Orbiting the moon of Io, the most volcanically active body in the Solar System, from the telescopes in this station, it is possible to see in high resolution the fountains and lakes of lava.', 6519, 'O', 4),
	(10, 'Glacies', 'Through this station orbiting the planet, observe its dazzling ring system, being the most extensive and complexive in the solar system.', 4631, 'O', 5),
	(11, 'Titan', 'In the only moon with substantial atmosphere in the solar system, this station allows to observe a cycle of liquids astonishingly similar as that in Earth, providing this moon with rivers, lakes and oceans in its surface.', 14782, 'S', 5),
	(12, 'Monaxia', 'The sole station in this ice giant, orbits it allowing the traveler to observe the faint rings surrounding the planet, as well as the unusual auroras caused by its magnetic field.', 428, 'O', 6),
	(13, 'North America Spaceport', 'Specialized in R&D for the spacecraft of the future. This was the first ever spaceport in the planet.', 0, 'S', 1),
	(14, 'South America Spaceport', 'One of the most important ports on Earth. It works as a link for all the trade and tourism of the Americas.', 0, 'S', 1),
	(15, 'Europe Spaceport', 'The main hub of the Earth\'s economy. This is one of the oldest working ports.', 0, 'S', 1),
	(16, 'South Asia Spaceport', 'Covers most of the commerce in the southern region of Asia.', 0, 'S', 1),
	(17, 'East Asia Spaceport', 'Most technologically advanced region in the world. The majority of companies have their headquarters near this port.', 0, 'S', 1),
	(18, 'South Africa Spaceport', 'Main port for all the trading across the african continent. This port receives the most tourists every year due to all the nearby locations for vacationing.', 0, 'S', 1),
	(19, 'Oceania Spaceport', 'World\'s main hub for genetic and biological research.', 0, 'S', 1),
	(20, 'Middle East Spaceport', 'Main desalination facilities on Earth. Most of the trading here involves fresh water for space tourism and special missions.', 0, 'S', 1),
	(21, 'Siberia Spaceport', 'Focused on raw material trading across Eurasia. Not recommended for tourism.', 0, 'S', 1),
	(22, 'Apollo', 'The closest station to the Earth, and the main port of departures and arrivals, this was the first station built, and despite being so close to Earth, it isn\'t one of the biggest.', 65812, 'S', 7);

-- Volcando estructura para tabla hackaton_nasa.servicio
CREATE TABLE IF NOT EXISTS `servicio` (
  `idServicio` int(11) NOT NULL AUTO_INCREMENT,
  `nombreServicio` varchar(100) NOT NULL,
  `idEstacion` int(11) NOT NULL,
  PRIMARY KEY (`idServicio`),
  KEY `idEstacion` (`idEstacion`),
  CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`idEstacion`) REFERENCES `estacion` (`idEstacion`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla hackaton_nasa.servicio: ~76 rows (aproximadamente)
INSERT INTO `servicio` (`idServicio`, `nombreServicio`, `idEstacion`) VALUES
	(1, 'Market', 1),
	(2, 'Restaurant', 1),
	(3, 'Museum', 1),
	(4, 'Cinema', 1),
	(5, 'Art Gallery', 1),
	(6, 'Market', 2),
	(7, 'Restaurant', 2),
	(8, 'Museum', 2),
	(9, 'Observatory', 2),
	(10, 'Cinema', 3),
	(11, 'Restaurant', 3),
	(12, 'Museum', 3),
	(13, 'Restaurant', 16),
	(14, 'Observatory', 16),
	(15, 'Museum', 16),
	(16, 'Restaurant', 17),
	(17, 'Observatory', 17),
	(18, 'Market', 17),
	(19, 'Restaurant', 18),
	(20, 'Art Gallery', 18),
	(21, 'Observatory', 18),
	(22, 'Restaurant', 19),
	(23, 'Observatory', 19),
	(24, 'Cinema', 19),
	(25, 'Restaurant', 20),
	(26, 'Observatory', 20),
	(27, 'Market', 20),
	(28, 'Museum', 20),
	(29, 'Market', 21),
	(30, 'Restaurant', 21),
	(31, 'Art Gallery', 21),
	(32, 'Observatory', 21),
	(33, 'Restaurant', 4),
	(34, 'Museum', 4),
	(35, 'Observatory', 4),
	(36, 'Restaurant', 5),
	(37, 'Market', 5),
	(38, 'Art Gallery', 5),
	(39, 'Observatory', 5),
	(40, 'Restaurant', 6),
	(41, 'Observatory', 6),
	(42, 'Space Walk', 6),
	(43, 'Museum', 6),
	(44, 'Cinema', 7),
	(45, 'Restaurant', 7),
	(46, 'Museum', 7),
	(47, 'Observatory', 7),
	(48, 'Market', 7),
	(49, 'Restaurant', 8),
	(50, 'Art Gallery', 8),
	(51, 'Observatory', 8),
	(52, 'Restaurant', 9),
	(53, 'Observatory', 9),
	(54, 'Space Walk', 9),
	(55, 'Market', 9),
	(56, 'Restaurant', 10),
	(57, 'Observatory', 10),
	(58, 'Space Walk', 10),
	(59, 'Market', 10),
	(60, 'Museum', 10),
	(61, 'Market', 11),
	(62, 'Restaurant', 11),
	(63, 'Art Gallery', 11),
	(64, 'Observatory', 11),
	(65, 'Restaurant', 12),
	(66, 'Observatory', 12),
	(67, 'Space Walk', 12),
	(68, 'Cinema', 13),
	(69, 'Restaurant', 13),
	(70, 'Museum', 13),
	(71, 'Observatory', 13),
	(72, 'Art Gallery', 13),
	(73, 'Restaurant', 14),
	(74, 'Museum', 14),
	(75, 'Observatory', 14),
	(76, 'Market', 14),
	(77, 'Restaurant', 15),
	(78, 'Market', 15),
	(79, 'Cinema', 15),
	(80, 'Observatory', 15);

-- Volcando estructura para tabla hackaton_nasa.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombreUsuario` varchar(100) NOT NULL,
  `claveUsuario` varchar(8) NOT NULL,
  `passwordUsuario` varchar(16) NOT NULL,
  `edadUsuario` int(11) NOT NULL,
  `procedenciaUsuario` varchar(200) NOT NULL,
  `creditoUsuario` int(11) NOT NULL,
  `destinoActualUsuario` int(11) NOT NULL DEFAULT 0,
  `estacionActualUsuario` varchar(100) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla hackaton_nasa.usuario: ~102 rows (aproximadamente)
INSERT INTO `usuario` (`idUsuario`, `nombreUsuario`, `claveUsuario`, `passwordUsuario`, `edadUsuario`, `procedenciaUsuario`, `creditoUsuario`, `destinoActualUsuario`, `estacionActualUsuario`) VALUES
	(1, 'Daniel Martínez Guerrero', 'AAAAAAAA', 'AAAAAAAA', 7797, 'Terrestrial', 397000, 7, 'Apollo'),
	(2, 'Gonzalo Martínez Guerrero', 'AAAAAAAB', '', 7373, 'Martian', 500000, 2, 'Tharsis'),
	(3, 'Nikolao Makelina', 'DWBJHANC', '', 8537, 'Terrestrial', 792293, 1, 'Oceania Spaceport'),
	(4, 'Jimmie Mack', 'FQGZZFUH', '', 8857, 'Terrestrial', 245029, 1, 'Siberia Spaceport'),
	(5, 'Allyson Petty', 'WZJFUFTB', '', 8340, 'Terrestrial', 553705, 1, 'Oceania Spaceport'),
	(6, 'Christine Hale', 'TEWDPFXS', '', 7515, 'Terrestrial', 382091, 1, 'Siberia Spaceport'),
	(7, 'Beatrice Franco', 'JRRTKSXP', '', 7296, 'Terrestrial', 792763, 1, 'Siberia Spaceport'),
	(8, 'Jo Flores', 'RAZNXGBQ', '', 7483, 'Terrestrial', 99724, 1, 'East Asia Spaceport'),
	(9, 'Curtis Schaefer', 'CQNDCTNR', '', 6179, 'Terrestrial', 768179, 1, 'South America Spaceport'),
	(10, 'Millicent Berger', 'GXKCFRNG', '', 8211, 'Terrestrial', 448395, 1, 'Oceania Spaceport'),
	(11, 'Long Hunt', 'LJGEJUGF', '', 9315, 'Terrestrial', 79257, 1, 'South America Spaceport'),
	(12, 'Bruce Peck', 'XRXVCKPH', '', 6480, 'Terrestrial', 486196, 1, 'Oceania Spaceport'),
	(13, 'Alfonso Branch', 'CWYHPEEN', '', 9494, 'Terrestrial', 378232, 1, 'South America Spaceport'),
	(14, 'Erin Prince', 'BEPBNFMR', '', 9148, 'Terrestrial', 407166, 1, 'Siberia Spaceport'),
	(15, 'Jamel Patel', 'AQJPZTCB', '', 9209, 'Terrestrial', 168456, 1, 'Oceania Spaceport'),
	(16, 'Irwin Bowen', 'ENLYKKXV', '', 8547, 'Terrestrial', 274489, 1, 'South America Spaceport'),
	(17, 'Salvador Singleton', 'KFRZTTUZ', '', 6284, 'Terrestrial', 171024, 1, 'South America Spaceport'),
	(18, 'Jessica Boyle', 'HRGWRFHX', '', 8460, 'Terrestrial', 351195, 1, 'East Asia Spaceport'),
	(19, 'Arden Hawkins', 'PCHPCYRY', '', 8656, 'Terrestrial', 568641, 1, 'South America Spaceport'),
	(20, 'Tasha English', 'DGJQCZKS', '', 8904, 'Terrestrial', 988146, 1, 'South America Spaceport'),
	(21, 'Lola Salazar', 'ZXQBDTWC', '', 7001, 'Terrestrial', 524339, 1, 'Oceania Spaceport'),
	(22, 'Carlo Mccormick', 'FYCZMFEV', '', 5607, 'Terrestrial', 200513, 1, 'South America Spaceport'),
	(23, 'Madeleine Tucker', 'KKFKKEPD', '', 8551, 'Terrestrial', 276515, 1, 'East Asia Spaceport'),
	(24, 'Amber Chan', 'YAAWBBXS', '', 9767, 'Terrestrial', 858047, 1, 'South America Spaceport'),
	(25, 'Natalie Sanders', 'JRPMTTUG', '', 7377, 'Terrestrial', 271608, 1, 'East Asia Spaceport'),
	(26, 'Diane Jones', 'ATSBTDXG', '', 6641, 'Terrestrial', 113798, 1, 'East Asia Spaceport'),
	(27, 'Andre Figueroa', 'ZNDVBYTC', '', 6740, 'Terrestrial', 547492, 1, 'South America Spaceport'),
	(28, 'Derick Case', 'QUJHWKRN', '', 6657, 'Terrestrial', 163635, 1, 'East Asia Spaceport'),
	(29, 'Marion Greer', 'HAGVDHVZ', '', 9482, 'Terrestrial', 460938, 1, 'South America Spaceport'),
	(30, 'Rhonda Norris', 'VTXQZJLK', '', 7284, 'Terrestrial', 44479, 1, 'South America Spaceport'),
	(31, 'Selma Hutchinson', 'GZQNJVWD', '', 6735, 'Terrestrial', 630453, 1, 'South America Spaceport'),
	(32, 'Virginia Mcclain', 'MTFQRUWD', '', 5973, 'Terrestrial', 475198, 1, 'Siberia Spaceport'),
	(33, 'Nestor Rios', 'DBBVKUFM', '', 5201, 'Terrestrial', 43973, 1, 'South America Spaceport'),
	(34, 'Duncan Fitzgerald', 'FFTMXSKK', '', 7612, 'Terrestrial', 767210, 1, 'South America Spaceport'),
	(35, 'Rosanne Brock', 'WKBBBPNF', '', 5405, 'Terrestrial', 621585, 1, 'Siberia Spaceport'),
	(36, 'Cornelius Townsend', 'BMVLVRQA', '', 6084, 'Terrestrial', 204191, 1, 'Siberia Spaceport'),
	(37, 'Beatriz Lucero', 'CEEJVTNR', '', 9645, 'Terrestrial', 520018, 1, 'South Asia Spaceport'),
	(38, 'Sam Mata', 'BBKZPVJB', '', 8774, 'Terrestrial', 190356, 1, 'Siberia Spaceport'),
	(39, 'Drew Taylor', 'DYCMXQPQ', '', 7964, 'Terrestrial', 313749, 1, 'East Asia Spaceport'),
	(40, 'Ashley Colon', 'SEDPJXCR', '', 5921, 'Terrestrial', 566423, 1, 'South Asia Spaceport'),
	(41, 'Bruno Pierce', 'UKBEBYSW', '', 5466, 'Terrestrial', 586232, 1, 'South Asia Spaceport'),
	(42, 'Alma Escobar', 'LWSERHUV', '', 5243, 'Terrestrial', 87138, 1, 'South Asia Spaceport'),
	(43, 'Mattie Valentine', 'SCXWLNXJ', '', 6471, 'Terrestrial', 517978, 1, 'East Asia Spaceport'),
	(44, 'Bernice Michael', 'MQFZVFKV', '', 5666, 'Terrestrial', 265263, 1, 'South Asia Spaceport'),
	(45, 'Ahmad Frank', 'VGAPMRDX', '', 7757, 'Terrestrial', 760849, 1, 'South Asia Spaceport'),
	(46, 'Trenton Hamilton', 'YCVTPQAF', '', 5549, 'Terrestrial', 872043, 1, 'South Asia Spaceport'),
	(47, 'Tanner Stout', 'ZBWATFYJ', '', 8667, 'Terrestrial', 922112, 1, 'South Asia Spaceport'),
	(48, 'Phil Collier', 'CNMLPLMK', '', 8688, 'Terrestrial', 974001, 1, 'South Asia Spaceport'),
	(49, 'Darryl Montoya', 'WKJXHXSU', '', 7904, 'Terrestrial', 63322, 1, 'East Asia Spaceport'),
	(50, 'Zelma Coffey', 'RYHEZKWC', '', 5298, 'Terrestrial', 665167, 1, 'Middle East Spaceport'),
	(51, 'Janie Weeks', 'JVRTVLCX', '', 7224, 'Terrestrial', 303317, 1, 'Middle East Spaceport'),
	(52, 'Toney Simpson', 'YAMHBABJ', '', 7304, 'Terrestrial', 602817, 1, 'East Asia Spaceport'),
	(53, 'Efren Hensley', 'EMUJKYBM', '', 8811, 'Terrestrial', 888026, 1, 'Middle East Spaceport'),
	(54, 'Myrtle Olsen', 'PRRXDGHH', '', 8564, 'Terrestrial', 590265, 1, 'Middle East Spaceport'),
	(55, 'Edmund Avila', 'PSCZTXLP', '', 5368, 'Terrestrial', 441186, 1, 'Middle East Spaceport'),
	(56, 'Zelma Chan', 'GWTVBLYU', '', 7304, 'Terrestrial', 586890, 1, 'East Asia Spaceport'),
	(57, 'Julio Peterson', 'HNRQYMAV', '', 7957, 'Terrestrial', 386611, 1, 'Middle East Spaceport'),
	(58, 'Santiago Welch', 'KPUDLXRA', '', 7422, 'Terrestrial', 292309, 1, 'Middle East Spaceport'),
	(59, 'Noreen Casey', 'RMJLVJNQ', '', 8412, 'Terrestrial', 296388, 1, 'Middle East Spaceport'),
	(60, 'Branden Medina', 'UGCLKDEB', '', 7421, 'Terrestrial', 27580, 1, 'East Asia Spaceport'),
	(61, 'Daniel Simmons', 'VDLKFFFK', '', 9034, 'Martian', 488446, 2, 'Olympus City'),
	(62, 'Russ Randolph', 'FWVDEDCT', '', 9451, 'Martian', 212568, 2, 'Elysium'),
	(63, 'Margery Perez', 'UTZBGAMM', '', 6947, 'Martian', 41408, 2, 'Elysium'),
	(64, 'Vito Morrow', 'KTVYUAXL', '', 5102, 'Martian', 308691, 2, 'Elysium'),
	(65, 'Sharron Parks', 'SSNKDYZV', '', 7338, 'Martian', 393581, 2, 'Olympus City'),
	(66, 'Darius Irwin', 'ATCPAWXD', '', 9544, 'Martian', 888332, 2, 'Olympus City'),
	(67, 'Morris Page', 'FKRMVEGX', '', 6312, 'Martian', 109721, 2, 'Elysium'),
	(68, 'Michael Ashley', 'JWGRNPLJ', '', 8996, 'Martian', 809370, 2, 'Elysium'),
	(69, 'Dollie Castillo', 'AXGXKGVS', '', 8637, 'Martian', 83569, 2, 'Elysium'),
	(70, 'Marion Benson', 'UXASBLXY', '', 5262, 'Martian', 980624, 2, 'Olympus City'),
	(71, 'Beau Tran', 'RMSNYMYL', '', 8488, 'Martian', 707869, 2, 'Elysium'),
	(72, 'Barton Cameron', 'RWLQQFMC', '', 6533, 'Martian', 934262, 2, 'Olympus City'),
	(73, 'Stella Terry', 'KLTJVCJS', '', 6000, 'Martian', 772067, 2, 'Olympus City'),
	(74, 'Winifred Lawson', 'DRLCFDFU', '', 9244, 'Martian', 551472, 2, 'Olympus City'),
	(75, 'Gladys Swanson', 'QDJRBZPY', '', 6736, 'Martian', 456280, 2, 'Olympus City'),
	(76, 'Nona Stanton', 'NLLRYMKJ', '', 6896, 'Martian', 935196, 2, 'Olympus City'),
	(77, 'Virginia Leonard', 'VUQVXBCM', '', 8944, 'Martian', 784559, 2, 'Olympus City'),
	(78, 'Lino Thomas', 'XGLXUBNP', '', 7918, 'Martian', 522569, 2, 'Olympus City'),
	(79, 'Drew Davis', 'KDKUTEPA', '', 5185, 'Lunar', 359390, 7, 'Europa'),
	(80, 'Ola Heath', 'PGXHMYYR', '', 5411, 'Lunar', 586792, 7, 'Europa'),
	(81, 'Hollis Ortega', 'TDHWYRMG', '', 9282, 'Lunar', 909757, 7, 'Europa'),
	(82, 'Brandie Hickman', 'UBDSKFNC', '', 7880, 'Lunar', 529417, 7, 'Europa'),
	(83, 'Irma Keller', 'XVQBTGPG', '', 5006, 'Lunar', 768510, 7, 'Europa'),
	(84, 'Edmundo Brewer', 'ZPMUESEW', '', 5118, 'Lunar', 166079, 7, 'Europa'),
	(85, 'Louella Mcguire', 'SCMMZNRF', '', 8305, 'Lunar', 584143, 7, 'Europa'),
	(86, 'Collin Booker', 'KAUCGWSY', '', 9777, 'Lunar', 79419, 7, 'Europa'),
	(87, 'Della Frazier', 'SFGZGZQQ', '', 6008, 'Lunar', 387190, 7, 'Europa'),
	(88, 'Nettie Hampton', 'GXJDLBPN', '', 9868, 'Lunar', 553421, 7, 'Europa'),
	(89, 'Ryan Levine', 'NTLNPCXV', '', 5234, 'Saturnian', 600949, 5, 'Titan'),
	(90, 'Isabella Mcknight', 'JFWDLLLH', '', 9534, 'Saturnian', 58690, 5, 'Titan'),
	(91, 'Giovanni Montes', 'QFNBMAJX', '', 7294, 'Saturnian', 698296, 5, 'Titan'),
	(92, 'Darlene Simpson', 'FPBZQXKT', '', 5797, 'Uranian', 288786, 6, 'Monaxia'),
	(93, 'Joe Sherman', 'PFJALYUZ', '', 7420, 'Uranian', 340316, 6, 'Monaxia'),
	(94, 'Frederic Mora', 'PUBHRNMA', '', 8023, 'Uranian', 940771, 6, 'Monaxia'),
	(95, 'Joan Scott', 'SSPYLFRS', '', 8073, 'Venusian', 254827, 3, 'Prometheus'),
	(96, 'Guadalupe Weaver', 'VJNTZUPW', '', 9452, 'Venusian', 38688, 3, 'Prometheus'),
	(97, 'Stan Bullock', 'EZXHUNKY', '', 8430, 'Venusian', 88772, 3, 'Prometheus'),
	(98, 'Otha Cortez', 'EJTSEKVT', '', 8070, 'Jovian', 530818, 4, 'Titan'),
	(99, 'Jennie Hatfield', 'KJPUWJPM', '', 9842, 'Jovian', 22608, 4, 'Titan'),
	(100, 'Andrea Guerra', 'BWMTWQXM', '', 6113, 'Jovian', 889902, 4, 'Titan'),
	(101, 'Pearlie Travis', 'LTMASXMU', '', 5991, 'Jovian', 248196, 4, 'Titan'),
	(102, 'Marlin Briggs', 'QYWARFZS', '', 6793, 'Jovian', 836329, 4, 'Titan');

-- Volcando estructura para tabla hackaton_nasa.viaje
CREATE TABLE IF NOT EXISTS `viaje` (
  `idViaje` int(11) NOT NULL AUTO_INCREMENT,
  `fechaViaje` timestamp NULL DEFAULT NULL,
  `estacionOrigenViaje` varchar(50) DEFAULT NULL,
  `idUsuario` int(11) NOT NULL,
  `idEstacion` int(11) NOT NULL,
  PRIMARY KEY (`idViaje`),
  KEY `idEstacion` (`idEstacion`),
  KEY `idUsuario` (`idUsuario`),
  CONSTRAINT `viaje_ibfk_1` FOREIGN KEY (`idEstacion`) REFERENCES `estacion` (`idEstacion`),
  CONSTRAINT `viaje_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla hackaton_nasa.viaje: ~22 rows (aproximadamente)
INSERT INTO `viaje` (`idViaje`, `fechaViaje`, `estacionOrigenViaje`, `idUsuario`, `idEstacion`) VALUES
	(1, '2023-10-08 05:12:27', 'Titan', 1, 5),
	(2, '2023-10-08 05:12:44', 'Europa', 2, 5),
	(3, '2023-11-08 11:26:18', 'South Asia Spaceport', 2, 3),
	(4, '2023-10-08 11:26:33', 'Glacies', 5, 3),
	(5, '2023-10-08 15:39:39', 'Titan', 70, 9),
	(6, '2023-10-08 15:39:56', 'South America Spaceport', 70, 9),
	(7, '2023-10-08 15:41:13', 'South Asia Spaceport', 70, 9),
	(8, '2023-10-08 15:44:16', 'South America Spaceport', 1, 6),
	(9, '2023-10-08 15:45:42', 'Europa', 1, 9),
	(10, '2023-10-08 16:56:40', 'Titan', 1, 12),
	(11, '2023-10-08 18:35:17', 'Monaxia', 1, 15),
	(12, '2023-10-08 19:32:01', 'Europe Spaceport', 1, 10),
	(13, '2023-10-08 19:40:23', 'Glacies', 1, 2),
	(14, '2023-10-08 20:05:33', 'Tharsis', 1, 14),
	(15, '2023-10-08 20:13:30', 'South America Spaceport', 1, 15),
	(16, '2023-10-08 20:13:40', 'Europe Spaceport', 1, 12),
	(17, '2023-10-08 20:52:48', 'Monaxia', 1, 17),
	(18, '2023-10-08 21:06:19', 'East Asia Spaceport', 1, 13),
	(19, '2023-10-08 21:40:59', 'North America Spaceport', 1, 15),
	(20, '2023-10-08 21:41:18', 'Europe Spaceport', 1, 12),
	(21, '2023-10-08 23:56:54', 'Monaxia', 1, 13),
	(22, '2023-10-10 15:13:40', 'North America Spaceport', 1, 22);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
