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

-- Volcando datos para la tabla prueba_tecnica_pasantia.productos: ~6 rows (aproximadamente)
REPLACE INTO `productos` (`Id`, `Nombre_producto`, `Descripcion`, `Unidades_existencia`, `Precio_unitario`, `Costo`) VALUES
	(2, 'agua', 'agua mineral', 66, 5, 4),
	(3, 'carne', 'carne de vaca', 232, 22, 12),
	(4, 'soda', 'soda', 22, 3, 2),
	(5, 'agua', 'agua mineral', 55, 3, 8),
	(8, 'zanahoria', 'zanahria', 5, 7, 4),
	(9, 'pasta', 'pasta ', 33, 3, 2);

-- Volcando datos para la tabla prueba_tecnica_pasantia.usuarios: ~1 rows (aproximadamente)
REPLACE INTO `usuarios` (`Id`, `Nombre`, `Contra`) VALUES
	(1, 'Manuel', 'pruebatecnica023');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
