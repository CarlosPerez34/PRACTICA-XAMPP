-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2025 a las 20:04:23
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `basetalk`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blackops`
--

CREATE TABLE `blackops` (
  `ID` int(10) NOT NULL,
  `Perks` text NOT NULL,
  `Finales` text NOT NULL,
  `Guns` text NOT NULL,
  `Especials` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `blackops`
--

INSERT INTO `blackops` (`ID`, `Perks`, `Finales`, `Guns`, `Especials`) VALUES
(2, 'hdhsa', 'Hola', '10', '1010'),
(3, 'Quick revive', 'gaurdia', 'rpk', 'Ray gun'),
(4, 'Stamin up', 'citadelle', 'mp', 'thunder'),
(5, 'Jugger \r\n\r\n', 'ORIGIN', 'M810', 'BASTON'),
(6, 'Flopper', 'Claymore', 'Rayo', 'Escudo'),
(7, 'visom', 'Maxis', 'Fuego', 'Generador'),
(8, 'Speed cola', 'Richtofen', 'Hielo', 'Blood z'),
(9, 'vultureaid', 'Takeo', 'Electrico', 'Ya se acabo'),
(10, 'Php Slyder', 'Dempsey', 'mauser', 'Doble point '),
(11, 'Vacio', 'Shadow', 'DRON', 'Insta kill');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blackops`
--
ALTER TABLE `blackops`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blackops`
--
ALTER TABLE `blackops`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
