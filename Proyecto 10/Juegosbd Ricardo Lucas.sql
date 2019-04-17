-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.34-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando datos para la tabla juegosbd.juego: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `juego` DISABLE KEYS */;
INSERT INTO `juego` (`id`, `nombre`) VALUES
	(1, 'Microrrobots'),
	(2, 'Parchis');
/*!40000 ALTER TABLE `juego` ENABLE KEYS */;

-- Volcando datos para la tabla juegosbd.usuario: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `edad`, `curso`, `puntuacion`) VALUES
	(1, 'David', 'Victoria Martinez', 300, 1, 50),
	(2, 'Borja', 'Hervas Carapollo', 80, 3, 100),
	(3, 'Ricardo', 'Lucas Asins', 19, 1, 80),
	(4, 'Alberto', 'Salinas Asins', 50, 4, 42),
	(12, 'David', 'Lucas Asins', 19, 5, 4);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

-- Volcando datos para la tabla juegosbd.usuariojuego: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuariojuego` DISABLE KEYS */;
INSERT INTO `usuariojuego` (`id_usuario`, `id_juego`, `puntuacion`) VALUES
	(1, 1, 0),
	(1, 2, 0),
	(3, 1, 0),
	(4, 1, 56);
/*!40000 ALTER TABLE `usuariojuego` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
