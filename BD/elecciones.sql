-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2015 a las 00:43:21
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `elecciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatos`
--

CREATE TABLE IF NOT EXISTS `candidatos` (
`idcandidatos` int(11) NOT NULL,
  `nomCandidato` varchar(45) NOT NULL,
  `apellCandidato` varchar(45) NOT NULL,
  `edadCandidato` int(2) NOT NULL,
  `imagenCandidato` varchar(45) DEFAULT NULL,
  `votos` int(11) DEFAULT NULL,
  `costoCampania` float(6,2) DEFAULT NULL,
  `partidoPol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `candidatos`
--

INSERT INTO `candidatos` (`idcandidatos`, `nomCandidato`, `apellCandidato`, `edadCandidato`, `imagenCandidato`, `votos`, `costoCampania`, `partidoPol`) VALUES
(1, 'juan', 'Guzman', 26, 'logo.png', 0, 0.00, 'Conservador'),
(2, 'Camilo', 'Santos', 30, 'Camilo.png', 0, 0.00, 'liberal');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidatos`
--
ALTER TABLE `candidatos`
 ADD PRIMARY KEY (`idcandidatos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `candidatos`
--
ALTER TABLE `candidatos`
MODIFY `idcandidatos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
