-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2021 a las 08:08:30
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
  `Titulo` varchar(50) DEFAULT NULL,
  `Fecha` datetime NOT NULL,
  `Comentario` text NOT NULL,
  `Imagen` varchar(30) DEFAULT NULL,
  `categoria` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`id`, `Titulo`, `Fecha`, `Comentario`, `Imagen`, `categoria`) VALUES
(1, 'El Wi-Fi 6E se acerca a México: el IFT quiere decl', '2021-05-31 07:47:18', 'La nueva generación de Wi-Fi se acerca. El Instituto Federal de Telecomunicaciones quiere declarar como \"espectro libre\" la banda de los 6 GHz, y que se utilice por los dispositivos que no necesitan una concesión para usarla, léase, nuestros smartphones, tablets, laptops, y cualquier otro gadget que tengamos con Wi-Fi compatible.\r\n\r\nPara dar una idea del tamaño de la decisión, Wi-Fi actualmente funciona en algo así como 400 MHz, pero con la liberación de la banda 6GHz, cuadriplicaría el espectro disponible. Su nombre es WiFi 6E, o también conocido por algunos como el WiFi de los 6GHz.\r\n\r\nSe trata en realidad de un movimiento mucho más global: al menos una decena de países están liberando la banda de 6 GHz para que fabricantes generen dispositivos compatibles con la banda en donde la transmisión sería más rápida, la latencia sería menor, pero también así lo sería el alcance.\r\n\r\nEsencialmente consiste en tener a disposición un gigantesco bloque de frecuencias, de manera que pueden usarse bloques de espectro contiguos adicionales, como 14 canales de 80 MhZ, o siete canales de 160 Mhz. Se trata de una variedad de canales que servirán en lugares donde hay alta densidad de señales.', '1366_2000.jpg', 'noticias'),
(2, 'WhatsApp: Así puedes agregar un contacto sin tener', '2021-05-31 07:52:56', 'Sigue estos pasos para poder agregar contactos a tu app de WhatsApp, es muy rápido y fácil:\r\n\r\nEn WhatsApp existen algunas funciones que pocos conocen y estas podrían ayudarte a aprovechar al máximo para que tu actividad en la app sea más fácil y rápida. Si crees que es mucho trabajo abril tus contactos para agregar el teléfono de una persona, lo que puedes hacer es usar el código QR.\r\n\r\n- Entra a tu app de WhatsApp.\r\n- Abre Ajustes.\r\n- Selecciona el código QR en la parte superior derecha.\r\n- Después se desplegará un código QR escaneable.\r\n- Finalmente de forma automática se abrirá en ambos smartphones una conversación.', 'WhatsApp-6.jpg', 'software'),
(3, 'Filtrados nuevos detalles de la Nintendo Switch ‘P', '2021-05-31 07:56:53', 'Para sorpresa de muchos, la presente semana ha estado rodeada de rumores sobre la Nintendo Switch ‘Pro’, la esperada revisión de la consola híbrida. Todo comenzó con un reporte de Bloomberg, el cual anticipó que el hardware será presentado incluso antes del E3 2021 (del 12 al 15 de junio). Ahora, sin embargo, un fabricante de accesorios reveló algunas características del producto. Al no ser información oficial, será mejor que lo tomemos con pinzas.\r\n\r\nDe acuerdo a la información de Vandal, se trata de un fabricante asiático que tuvo acceso a ciertas especificaciones de la Nintendo Switch ‘Pro’, la mayoría de ellas estéticas. Así pues, parece que la consola mantendrá un diseño y tamaño muy similar al modelo actual. De hecho, se menciona que será compatible con los Joy-Con que ya existen actualmente.\r\n\r\nEn lo que se refiere a la pantalla, esta crecería hasta las 7 pulgadas. Recordemos que el Nintendo Switch estándar integra un panel de 6.2″, por lo que al aumento será considerable. Según un reporte previo de Bloomberg, la pantalla de la Nintendo Switch ‘Pro’ adoptará el OLED, una tecnología bastante popular en los dispositivos móviles. Entre sus principales beneficios se encuentra un menor consumo de batería, además de un mayor contraste y mejor representación del color.\r\n\r\nAsimismo, la Nintendo Switch ‘Pro’ tendría un nuevo soporte para mejorar su apoyo en superficies. Sería más grande y robusto, aparentemente muy parecido al del Microsoft Surface. Este se extiende de lado a lado en la región trasera y puede guardarse sin ningún problema. Respecto a la ranura para la tarjeta microSD, parece que Nintendo cambió su ubicación a la parte trasera.\r\n\r\nEl fabricante afirma que el Dock de la Nintendo Switch ‘Pro’ será más ancho, aunque en términos generales mantiene casi las mismas dimensiones. En lo que corresponde a las conexiones, incorporaría dos puertos USB 3.0, un salto importante respecto al USB 2.0 de la base actual. Ojo, también un puerto Ethernet, un elemento que muchos recibirán con los brazos abiertos si se llega a concretar. Y es que nadie puede negar que el WiFi de la Nintendo Switch es bastante deficiente.\r\n\r\n¿Cuando veremos el nuevo Nintendo Switch ‘Pro’? No descartamos que los de Kioto lo presenten la próxima semana. El dispositivo ya apareció listado en Amazon México, aunque fue eliminado poco después. Más allá de las novedades descritas anteriormente, Bloomberg dijo en marzo que la consola será compatible con el DLSS de Nvidia, mientras que el Dock podrá alcanzar la resolución 4K. Muy pronto resolveremos nuestras dudas.', 'nintendo-switch-pro-scaled.jpg', 'otros'),
(4, 'Bienvenidos a la sección de noticias', '2021-05-31 08:07:20', 'gvrfedashbtgfdrshb', 'HDD.jpg', 'hardware');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
