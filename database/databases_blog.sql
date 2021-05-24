-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2021 a las 21:10:09
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog_posts`
--
CREATE DATABASE IF NOT EXISTS `blog_posts` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blog_posts`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `id` int(11) NOT NULL,
  `Titulo` varchar(25) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Comentario` text NOT NULL,
  `Imagen` varchar(35) NOT NULL,
  `categoria` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`id`, `Titulo`, `Fecha`, `Comentario`, `Imagen`, `categoria`) VALUES
(1, 'Test', '2021-05-24 20:50:41', 'Texto de ejemplo.', '954742.jpg', 'noticias'),
(2, 'Segundo post de ejemplo', '2021-05-24 20:57:12', 'Ejemplo de texto 2.', 'wallpapertip_galaxy-note-3-wallpape', 'hardware');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Base de datos: `php_multiplelogin`
--
CREATE DATABASE IF NOT EXISTS `php_multiplelogin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `php_multiplelogin`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mainlogin`
--

CREATE TABLE `mainlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) CHARACTER SET latin1 NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 NOT NULL,
  `password` varchar(20) CHARACTER SET latin1 NOT NULL,
  `role` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `mainlogin`
--

INSERT INTO `mainlogin` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'papi', 'papi', 'admin', 'admin'),
(2, 'DrimTech', 'drimtech@drimtech.com', '123tamarindo', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mainlogin`
--
ALTER TABLE `mainlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mainlogin`
--
ALTER TABLE `mainlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
