-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2024 a las 10:30:56
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `deli-house`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `ID` int(10) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `TELÉFONO` varchar(15) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `MENSAJE` text NOT NULL,
  `FECHA` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`ID`, `NOMBRE`, `TELÉFONO`, `EMAIL`, `MENSAJE`, `FECHA`) VALUES
(5, 'Adrian', '+51 989 674 154', 'U22200665@utp.edu.pe', 'HOLA', '2024-07-10'),
(6, 'Adrian Fajardo', '+51 989 674 154', 'U22200665@utp.edu.pe', 'HOLA', '2024-07-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `ID` int(10) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `TELÉFONO` varchar(15) NOT NULL,
  `ENVÍO` varchar(20) NOT NULL,
  `DIRECCIÓN` text DEFAULT NULL,
  `PRODUCTOS` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `FECHA` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`ID`, `NOMBRE`, `TELÉFONO`, `ENVÍO`, `DIRECCIÓN`, `PRODUCTOS`, `FECHA`) VALUES
(1, 'Adrian Fajardo', '+51 989 674 154', 'delivery', 'Av. Ica', 'null', '2024-07-10'),
(2, 'Adrian Fajardo', '+51 989 674 154', 'delivery', 'Av. Ica', '\"\"', '2024-07-10'),
(3, 'Adrian Fajardo', '+51 989 674 154', 'delivery', 'Av. Ica', '\"\"', '2024-07-10'),
(4, 'Adrian Fajardo', '+51 989 674 154', 'delivery', 'Av. Ica', '\"\"', '2024-07-10'),
(5, 'Adrian Fajardo', '+51 989 674 154', 'recojo', 'Av. Ica', '\"\"', '2024-07-10'),
(6, 'Adrian Fajardo', '+51 989 674 154', 'recojo', '', '\"\"', '2024-07-10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
