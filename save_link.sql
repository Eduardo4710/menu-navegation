-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-12-2020 a las 20:23:42
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `3622290_pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `save_link`
--

CREATE TABLE `save_link` (
  `id` int(10) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `save_link`
--

INSERT INTO `save_link` (`id`, `titulo`, `link`) VALUES
(8, 'Klipartz : imagenes PNG', 'https://www.klipartz.com/'),
(9, 'Tutsplus : imagenes', 'https://tutsplus.com/?_ga=2.162721982.389107884.1609122757-1064583578.1609122757'),
(13, 'Wallpaper flare', 'https://www.wallpaperflare.com/'),
(14, 'Freepik', 'https://www.freepik.es/');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `save_link`
--
ALTER TABLE `save_link`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `save_link`
--
ALTER TABLE `save_link`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
