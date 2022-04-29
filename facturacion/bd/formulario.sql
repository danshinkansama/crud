-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-04-2022 a las 20:40:55
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id` int(11) NOT NULL,
  `codigoC` int(11) DEFAULT 0,
  `nombreC` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nombres`
--

CREATE TABLE `nombres` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nombres`
--

INSERT INTO `nombres` (`id`, `nombre`, `correo`, `telefono`) VALUES
(1, 'Rolin', 'rolinchavez15@gmail.com', '1234567890'),
(2, 'Rolin Roldan', 'rolinroldan64@gmail.com', '98754321'),
(3, 'pa palo', 'palitoelcabezon@gmail.com', '987654321'),
(4, 'Lolito el 14', 'lolocomemocos@gmail.com', '213131213'),
(5, 'Ana Joana Alama Vilela', 'alamana01@gmail.com', '56789456'),
(6, 'ejemplo 1', 'alamana01ss@gmail.com', '1234567890'),
(7, 'nombre 2', 'sda@gmail.com', '1234567890'),
(8, 'Adriano Chavez Carmen', 'adriano@gmail.com', '987654321'),
(9, 'Juan Luis Guerra', 'juan@gmail.com', '987654321'),
(10, 'palo el xabezon', 'pedro@gmail.com', '098748372'),
(11, 'Rolin vue', 'vue@ncv.com', '1234567890'),
(12, 'melva', 'belida@gmail.com', '12426738'),
(13, 'Mary', 'mary@gmail.com', '987654321'),
(14, 'pedro', 'Goof@gmail.com', '1234567890'),
(15, 'carlos', 'carlos@gmail.com', '123456789');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nombres`
--
ALTER TABLE `nombres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nombres`
--
ALTER TABLE `nombres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
