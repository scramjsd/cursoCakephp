-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2019 a las 17:13:45
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asistance`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesionales`
--

CREATE TABLE `profesionales` (
  `id` int(11) NOT NULL COMMENT 'identificador de la tabla',
  `rut` varchar(12) NOT NULL COMMENT 'identificador del profesional',
  `nombres` varchar(60) NOT NULL COMMENT 'nombre del profesional',
  `apellidos` varchar(60) NOT NULL COMMENT 'apellidos del profesional',
  `telefono` varchar(20) DEFAULT NULL COMMENT 'telefono del profesional',
  `email` varchar(150) DEFAULT NULL COMMENT 'email del profesional',
  `curriculum` varchar(255) DEFAULT NULL COMMENT 'directorio donde se alla el archivo con el curriculum del profesional',
  `fec_nac` date NOT NULL COMMENT 'fecha de nacimiento del profesional',
  `created` date DEFAULT NULL COMMENT 'fecha en la que el profesional se integro al sistema',
  `modified` date DEFAULT NULL COMMENT 'ultima modificacion de los datos dentro del sistema',
  `activo` tinyint(1) NOT NULL COMMENT 'si el profesional sigue trabajando dentro de la empresa',
  `cargo_id` int(11) NOT NULL COMMENT 'el cargo que tiene dentro de la empresa'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `profesionales`
--
ALTER TABLE `profesionales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `profesionales`
--
ALTER TABLE `profesionales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador de la tabla';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
