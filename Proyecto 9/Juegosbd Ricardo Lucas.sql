-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para juegosbd
CREATE DATABASE IF NOT EXISTS `juegosbd` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `juegosbd`;

-- Volcando estructura para tabla juegosbd.juego
CREATE TABLE IF NOT EXISTS `juego` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla juegosbd.juego: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `juego` DISABLE KEYS */;
INSERT IGNORE INTO `juego` (`id`, `nombre`) VALUES
	(1, 'Microrrobots'),
	(2, 'Parchis');
/*!40000 ALTER TABLE `juego` ENABLE KEYS */;

-- Volcando estructura para tabla juegosbd.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(3) NOT NULL,
  `curso` int(5) NOT NULL,
  `puntuacion` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla juegosbd.usuario: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT IGNORE INTO `usuario` (`id`, `nombre`, `apellidos`, `edad`, `curso`, `puntuacion`) VALUES
	(1, 'David', 'Victoria Martinez', 300, 1, 50),
	(2, 'Borja', 'Hervas Carapollo', 80, 3, 100),
	(3, 'Ricardo', 'Lucas Asins', 19, 1, 80),
	(4, 'Alberto', 'Salinas Asins', 50, 4, 42),
	(58, 'edf', 'asd', 45, 3, 5),
	(59, 'edf', 'asd', 45, 3, 5),
	(60, 'edf', 'asd', 45, 3, 5),
	(61, 'PACO', 'Perez', 22, 3, 50),
	(62, 'atun', 'salmon salmon', 45, 3, 41),
	(63, 'Paco', 'Sanz', 33, 2, 20),
	(64, 'Ricardo', 'Lucas Asins', 12, 2, 0),
	(65, 'Ricardo', 'Lucas Asins', 123, 3, 0),
	(66, 'sdfhi', 'as', 4, 5, 0),
	(67, 'ss', 'ss', 12, 32, 0);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

-- Volcando estructura para tabla juegosbd.usuariojuego
CREATE TABLE IF NOT EXISTS `usuariojuego` (
  `id_usuario` int(11) DEFAULT NULL,
  `id_juego` int(11) DEFAULT NULL,
  `puntuacion` int(11) DEFAULT '0',
  KEY `id_usuario` (`id_usuario`),
  KEY `id_juego` (`id_juego`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla juegosbd.usuariojuego: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuariojuego` DISABLE KEYS */;
INSERT IGNORE INTO `usuariojuego` (`id_usuario`, `id_juego`, `puntuacion`) VALUES
	(1, 1, 0),
	(1, 2, 0);
/*!40000 ALTER TABLE `usuariojuego` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
