-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-09-2017 a las 14:02:37
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistra_ceet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

DROP TABLE IF EXISTS `departamento`;
CREATE TABLE IF NOT EXISTS `departamento` (
  `id_departamento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_departamento`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `nombre`) VALUES
(1, 'ANTIOQUIA'),
(2, 'ATLANTICO'),
(3, 'BOGOTA'),
(4, 'BOLIVAR'),
(5, 'BOYACA'),
(6, 'CALDAS'),
(7, 'CAQUETA'),
(8, 'CAUCA'),
(9, 'CESAR'),
(10, 'CORDOBA'),
(11, 'CUNDINAMARCA'),
(12, 'CHOCO'),
(13, 'HUILA'),
(14, 'LA GUAJIRA'),
(15, 'MAGDALENA'),
(16, 'META'),
(17, 'NARIÑO'),
(18, 'N. DE SANTANDER'),
(19, 'QUINDIO'),
(20, 'RISARALDA'),
(21, 'SANTANDER'),
(22, 'SUCRE'),
(23, 'TOLIMA'),
(24, 'VALLE DEL CAUCA'),
(25, 'ARAUCA'),
(26, 'CASANARE'),
(27, 'PUTUMAYO'),
(28, 'SAN ANDRES'),
(29, 'AMAZONAS'),
(30, 'GUAINIA'),
(31, 'GUAVIARE'),
(32, 'VAUPES'),
(33, 'VICHADA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
