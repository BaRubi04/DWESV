-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:        8.4.11-0ubuntu0.26.04.1 - (Ubuntu)
-- SO del servidor:              Linux
-- HeidiSQL Versión:            12.21.1.1
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para horarios
CREATE DATABASE IF NOT EXISTS `horarios` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `horarios`;

-- Volcando estructura para tabla horarios.asignaturas
CREATE TABLE IF NOT EXISTS `asignaturas` (
  `idAsignatura` smallint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `color` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '#ff0000',
  `idProfesor` smallint unsigned NOT NULL,
  PRIMARY KEY (`idAsignatura`) USING BTREE,
  KEY `fk_idProfesorAsignaturas` (`idProfesor`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla horarios.asignaturas: ~18 rows (aproximadamente)
INSERT INTO `asignaturas` (`idAsignatura`, `nombre`, `color`, `idProfesor`) VALUES
	(1, 'IPP2', '#8ED4E8', 5),
	(2, 'DWES', '#977edb', 1),
	(3, 'DWENC', '#e88eb1', 2),
	(4, 'PIMOD', '#272585', 3),
	(5, 'DEAPW', '#4de0a8', 3),
	(6, 'SASP', '#cce445', 4),
	(7, 'DASP', '#a6df23', 2),
	(8, 'DIW', '#e46565', 1),
	(9, 'DIGI', '#c91515', 2),
	(10, 'TUTO', '#57010ac2', 2),
	(11, 'OPT1', '#9c6767', 5),
	(12, 'PRO', '#ff0000', 6),
	(13, 'ED', '#ff0000', 6),
	(14, 'LM', '#ff0000', 7),
	(15, 'ING', '#ff0000', 8),
	(16, 'BD', '#ff0000', 1),
	(17, 'SI', '#ff0000', 2),
	(18, 'IPE1', '#ff0000', 5);

-- Volcando estructura para tabla horarios.asignaturas-cursos
CREATE TABLE IF NOT EXISTS `asignaturas-cursos` (
  `idAsignatura` smallint unsigned NOT NULL,
  `idCurso` tinyint unsigned NOT NULL,
  PRIMARY KEY (`idAsignatura`,`idCurso`),
  KEY `fk_idCursoAsignaturasCursos` (`idCurso`),
  CONSTRAINT `fk_idAsignaturaAsignaturasCursos` FOREIGN KEY (`idAsignatura`) REFERENCES `asignaturas` (`idAsignatura`),
  CONSTRAINT `fk_idCursoAsignaturasCursos` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`idCurso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla horarios.asignaturas-cursos: ~18 rows (aproximadamente)
INSERT INTO `asignaturas-cursos` (`idAsignatura`, `idCurso`) VALUES
	(1, 2),
	(2, 2),
	(3, 2),
	(4, 2),
	(5, 2),
	(6, 2),
	(7, 2),
	(8, 2),
	(9, 2),
	(10, 2),
	(11, 2),
	(12, 1),
	(13, 1),
	(14, 1),
	(15, 1),
	(16, 1),
	(17, 1),
	(18, 1);

-- Volcando estructura para tabla horarios.cursos
CREATE TABLE IF NOT EXISTS `cursos` (
  `idCurso` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` char(5) NOT NULL,
  PRIMARY KEY (`idCurso`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla horarios.cursos: ~2 rows (aproximadamente)
INSERT INTO `cursos` (`idCurso`, `nombre`) VALUES
	(1, '1DAW'),
	(2, '2DAW');

-- Volcando estructura para tabla horarios.horario
CREATE TABLE IF NOT EXISTS `horario` (
  `dia` char(1) NOT NULL,
  `hora` tinyint unsigned NOT NULL,
  `idCurso` tinyint unsigned NOT NULL,
  `idProfesor` smallint unsigned NOT NULL,
  `idAsignatura` smallint unsigned NOT NULL,
  PRIMARY KEY (`dia`,`hora`,`idCurso`),
  UNIQUE KEY `dia` (`dia`,`hora`,`idProfesor`),
  KEY `fk_idCursoHorario` (`idCurso`),
  KEY `fk_idProfesorHorario` (`idProfesor`),
  KEY `fk_idAsignaturaHorario` (`idAsignatura`),
  CONSTRAINT `fk_idAsignaturaHorario` FOREIGN KEY (`idAsignatura`) REFERENCES `asignaturas` (`idAsignatura`),
  CONSTRAINT `fk_idCursoHorario` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`idCurso`),
  CONSTRAINT `fk_idProfesorHorario` FOREIGN KEY (`idProfesor`) REFERENCES `profesores` (`idProfesor`),
  CONSTRAINT `horario_chk_1` CHECK ((`dia` in (_utf8mb4'l',_utf8mb4'm',_utf8mb4'x',_utf8mb4'j',_utf8mb4'v'))),
  CONSTRAINT `horario_chk_2` CHECK ((`hora` in (1,2,3,4,5,6,7)))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla horarios.horario: ~0 rows (aproximadamente)

-- Volcando estructura para tabla horarios.profesores
CREATE TABLE IF NOT EXISTS `profesores` (
  `idProfesor` smallint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  PRIMARY KEY (`idProfesor`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla horarios.profesores: ~8 rows (aproximadamente)
INSERT INTO `profesores` (`idProfesor`, `nombre`) VALUES
	(1, 'Isabel'),
	(2, 'Alberto'),
	(3, 'Ernesto'),
	(4, 'Santiago'),
	(5, 'Luis'),
	(6, 'Paco'),
	(7, 'Tomás'),
	(8, 'Chema');

-- Volcando estructura para tabla horarios.profesores-cursos
CREATE TABLE IF NOT EXISTS `profesores-cursos` (
  `idProfesor` smallint unsigned NOT NULL,
  `idCurso` tinyint unsigned NOT NULL,
  PRIMARY KEY (`idProfesor`,`idCurso`),
  KEY `fk_idCursoProfesoresCursos` (`idCurso`),
  CONSTRAINT `fk_idCursoProfesoresCursos` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`idCurso`),
  CONSTRAINT `fk_idProfesorProfesoresCursos` FOREIGN KEY (`idProfesor`) REFERENCES `profesores` (`idProfesor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla horarios.profesores-cursos: ~11 rows (aproximadamente)
INSERT INTO `profesores-cursos` (`idProfesor`, `idCurso`) VALUES
	(1, 1),
	(1, 2),
	(2, 1),
	(2, 2),
	(3, 2),
	(4, 2),
	(5, 1),
	(5, 2),
	(6, 1),
	(7, 1),
	(8, 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
