-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2021 a las 01:28:12
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
  `Titulo` varchar(30) DEFAULT NULL,
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
(2, 'Segundo post de ejemplo', '2021-05-24 20:57:12', 'Ejemplo de texto 2.', 'wallpapertip_galaxy-note-3-wallpape', 'hardware'),
(3, '¡INCREÍBLE! Condena de mu', '2021-05-29 23:44:44', 'La mujer fue sentenciada a seis meses de cárcel por delito contra la propiedad intelectual y una multa de 3,600 euros (alrededor de US$ 4,400) al cambio.\r\n\r\nEl Tribunal Supremo ratificó en tercera instancia la pena, primero dictada por un juzgado de Madrid y luego confirmada por una Audiencia Provincial.\r\n\r\n', 'Windows.jpg', 'noticias'),
(4, 'Georgia y Alabama bajo alerta ', '2021-05-30 00:44:20', 'Autoridades han emitido emitido una advertencia de tornado en Georgia y Alabama. La alarma también incluye el centro de Atlanta. Alrededor de 450.000 personas se encuentran en el camino potencial de la tormenta, según el Servicio Meteorológico Nacional.', 'FIE LOGO Sin fondo.png', 'noticias'),
(5, 'Bienvenidos a la sección de no', '2021-05-30 01:08:15', 'nfhiwebqhjfibewrhjiqbfhuiwerbjiqfgbrheuwqbl', 'UdeC Abajo_Blanco.png', 'noticias'),
(6, 'Segundo post de ejemplo', '2021-05-30 01:10:25', 'debwhqifdbheuwqyigfbyurweqipbfghurwqegifrweq', 'logo_negro80.jpg', 'noticias'),
(7, 'Segundo post de ejemplo', '2021-05-30 01:13:21', 'fheuibwerihufgblhierwogert', 'UdeC Abajo_Blanco.png', 'noticias'),
(8, 'Segundo post de ejemploxxxxx', '2021-05-30 01:18:53', 'dnewuqifbyeriqwgofbyirhewuobgirtgew', 'FIE LOGO.jpg', 'noticias'),
(9, 'Este es un titulo de ejemplo x', '2021-05-30 01:23:16', 'fdregfnuirewbgirtbeiwgtrehgtrewh', 'UdeC Abajo_Blanco.png', 'noticias'),
(10, 'Segundo post de ejemploxdsgfvr', '2021-05-30 01:25:53', 'rebnwhiuqfbrhuiewqbfhuirevbwhfguivbrewuhibghiur', 'Windows.jpg', 'noticias');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
