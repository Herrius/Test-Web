-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2021 a las 01:08:48
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblrespuestas`
--

CREATE TABLE `tblrespuestas` (
  `codestudiante` int(8) NOT NULL,
  `pregunta 1` int(1) DEFAULT NULL,
  `pregunta 2` int(1) DEFAULT NULL,
  `pregunta 3` int(1) DEFAULT NULL,
  `pregunta 4` int(1) DEFAULT NULL,
  `pregunta 5` int(1) DEFAULT NULL,
  `pregunta 6` int(1) DEFAULT NULL,
  `pregunta 7` int(1) DEFAULT NULL,
  `pregunta 8` int(1) DEFAULT NULL,
  `pregunta 9` int(1) DEFAULT NULL,
  `pregunta 10` int(1) DEFAULT NULL,
  `pregunta 11` int(1) DEFAULT NULL,
  `pregunta 12` int(1) DEFAULT NULL,
  `pregunta 13` int(1) DEFAULT NULL,
  `pregunta 14` int(1) DEFAULT NULL,
  `pregunta 15` int(1) DEFAULT NULL,
  `pregunta 16` int(1) DEFAULT NULL,
  `pregunta 17` int(1) DEFAULT NULL,
  `pregunta 18` int(1) DEFAULT NULL,
  `pregunta 19` int(1) DEFAULT NULL,
  `pregunta 20` int(1) DEFAULT NULL,
  `pregunta 21` int(1) DEFAULT NULL,
  `pregunta 22` int(1) DEFAULT NULL,
  `pregunta 23` int(1) DEFAULT NULL,
  `pregunta 24` int(1) DEFAULT NULL,
  `pregunta 25` int(1) DEFAULT NULL,
  `pregunta 26` int(1) DEFAULT NULL,
  `pregunta 27` int(1) NOT NULL,
  `pregunta 28` int(1) NOT NULL,
  `pregunta 29` int(1) NOT NULL,
  `pregunta 30` int(1) NOT NULL,
  `pregunta 31` int(1) NOT NULL,
  `pregunta 32` int(1) NOT NULL,
  `pregunta 33` int(1) NOT NULL,
  `pregunta 34` int(1) NOT NULL,
  `pregunta 35` int(1) NOT NULL,
  `pregunta 36` int(1) NOT NULL,
  `pregunta 37` int(1) NOT NULL,
  `pregunta 38` int(1) NOT NULL,
  `pregunta 39` int(1) NOT NULL,
  `pregunta 40` int(1) NOT NULL,
  `pregunta 41` int(1) NOT NULL,
  `pregunta 42` int(1) NOT NULL,
  `pregunta 43` int(1) NOT NULL,
  `pregunta 44` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblrespuestas`
--

INSERT INTO `tblrespuestas` (`codestudiante`, `pregunta 1`, `pregunta 2`, `pregunta 3`, `pregunta 4`, `pregunta 5`, `pregunta 6`, `pregunta 7`, `pregunta 8`, `pregunta 9`, `pregunta 10`, `pregunta 11`, `pregunta 12`, `pregunta 13`, `pregunta 14`, `pregunta 15`, `pregunta 16`, `pregunta 17`, `pregunta 18`, `pregunta 19`, `pregunta 20`, `pregunta 21`, `pregunta 22`, `pregunta 23`, `pregunta 24`, `pregunta 25`, `pregunta 26`, `pregunta 27`, `pregunta 28`, `pregunta 29`, `pregunta 30`, `pregunta 31`, `pregunta 32`, `pregunta 33`, `pregunta 34`, `pregunta 35`, `pregunta 36`, `pregunta 37`, `pregunta 38`, `pregunta 39`, `pregunta 40`, `pregunta 41`, `pregunta 42`, `pregunta 43`, `pregunta 44`) VALUES
(76927894, 1, 2, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblrespuestas`
--
ALTER TABLE `tblrespuestas`
  ADD PRIMARY KEY (`codestudiante`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblrespuestas`
--
ALTER TABLE `tblrespuestas`
  ADD CONSTRAINT `tblrespuestas_ibfk_1` FOREIGN KEY (`idpregunta`) REFERENCES `tblpreguntas` (`idpregunta`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
