-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2021 a las 12:49:15
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
  `Titulo` varchar(85) DEFAULT NULL,
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
(6, 'El 30% de los usuarios de Steam ya usa CPU AMD, <br>¿seguirá la tendencia?', '2021-06-03 20:35:06', 'Valve ha publicado la actualización mensual de las estadísticas de uso de hardware en su plataforma de juegos Steam, y la noticia en esta ocasión es que por primera vez en la historia más de un 30% de los usuarios ya utiliza una CPU de AMD. Esto confirma la tendencia que llevamos viendo ya unos cuantos meses, en la que cada vez más usuarios están pasándose a una plataforma AMD en detrimento de Intel; ¿seguirá esta tendencia en los próximos meses?\r\n<br>\r\nSteam es un indicativo claro del hardware que los usuarios de PC utilizamos para jugar, ya que desde hace muchísimos años es la plataforma de juegos para PC más utilizada en todo el mundo. Desde hace también muchos años, Steam actualiza la estadística de uso de hardware todos los meses, y en la actualización del mes de mayo hemos visto cómo AMD le ha comido cuota de mercado a Intel hasta superar por primera vez el 30% de los usuarios.\r\n<br>\r\n<h3>AMD vs Intel: estadísticas de uso de CPU en Steam</h3>\r\n<p class =\"text-justify\">En los últimos meses hemos visto cómo la hegemonía de Intel en cuanto al uso de CPU en Steam ha ido en detrimento, y si apenas hace un año y seis meses (en diciembre de 2019) los de azul superaban la cuota del 80% de uso en Steam, ahora se ha visto reducido a menos de un 70%. Poco a poco, pasito a pasito, AMD va comiéndole terreno al gigante y cada vez más usuarios utilizan sus procesadores en la plataforma de juegos de Valve.</p>\r\n<img src=\"https://hardzone.es/app/uploads-hardzone.es/2021/06/Uso-CPU-AMD-Intel-Steam.jpg\" class=\"img-responsive center-block d-block mx-auto\"style=\"width: 70%; height: 70%; object-fit:scale-down;\">\r\n<br>\r\nEsta tendencia va subiendo poco a poco, y de hecho la diferencia entre abril y mayo es de tan solo un 0,65%, pero ha sido suficiente para llegar al hito de que más del 30% de los usuarios de Steam ya utilizan CPU de AMD. Es cierto que en los últimos meses esta tendencia se ha ido ralentizando un poco, y prueba de ello es que desde el mes de enero, en la que AMD tenía un 28% de cuota hasta el mes de mayo donde han alcanzado un 30,13%, la diferencia apenas supera el 2%.\r\n<br><br>\r\n<img src=\"https://hardzone.es/app/uploads-hardzone.es/2021/06/Estadisticas-CPU-Intel-AMD-Steam.jpg\" class=\"img-responsive center-block d-block mx-auto\"style=\"width: 70%; height: 70%; object-fit:scale-down;\">\r\n<br><br>\r\nLa conclusión que podemos sacar de esto es que sí, cada vez más usuarios usan CPU de AMD en Steam, pero la tendencia esa cada vez más lenta y aunque Intel ha bajado un 10% de cuota en 18 meses, siguen dominando el mercado de los PC gaming de manera todavía bastante holgada, ya que como os hemos comentado la tendencia va ralentizándose.', 'intel-vs-amd-800x419.webp', 'hardware'),
(7, '¿Por qué el hardware está al alza en el mundo gaming?', '2021-06-03 23:41:53', 'La industria del gaming es cada vez más grande a nivel mundial y genera una actividad económica cuya importancia sobre el PIB es cada vez mayor. El gaming ya no es un reducto en el que algunos jóvenes dedican su tiempo libre, sino que ha ido mucho más allá y ahora seduce a todo tipo de sectores de la población que necesitan nuevas formas de entretenimiento.\r\n<br><br>\r\nEl gamer necesita de elementos y complementos informáticos con los que hacer más interesante y amena su experiencia de juego. El grado de especialización es absoluto y existen todo tipo de accesorios con los que disfrutar de una experiencia de juego mucho más inmersiva. Es tan importante el hardware como los accesorios, pero vamos a ver qué es imprescindible en el mundo del gamer.\r\n<br><br>\r\n<img src=\"https://blog.soltekonline.com/content/images/size/w2000/2019/08/00000.jpg\" class=\"img-responsive center-block d-block mx-auto\"style=\"width: 70%; height: 70%; object-fit:scale-down;\">\r\n<br><br>', 'hardware-gaming.jpg', 'hardware'),
(8, 'La escasez de chips podría afectar<br>  a los compradores de hardware durante años', '2021-06-04 11:32:26', 'Según diversos analistas, la escasez de chips y los problemas que están teniendo las cadenas de suministro podrían tener un impacto a largo plazo en el precio y la disponibilidad de hardware. Una situación que podría alargarse incluso durante años.\r\n<br>\r\nLa escasez de chips y otros componentes podría afectar la disponibilidad y el precio del hardware de TI durante los próximos 12 a 18 meses. Esta es al menos la previsión que manejan algunos de los máximos responsables de las principales empresas tecnológicas como Cisco, Extreme Networks, IBM, Intel o Juniper.\r\n<br>\r\nTras la fuerte demanda de nuevos equipos y dispositivos para afrontar el auge del trabajo en remoto como consecuencia de la pandemia de la COVID-19, el cierre de fábricas ha conllevado un gran esfuerzo posterior en volver a ponerlas en marcha e intentar dar respuesta a la fuerte demanda. Sin embargo renovar las cadenas de suministro para afrontar estos retos será un proceso que requerirá tiempo.\r\n<br>\r\nDesde la consultora Gartner apuntan que la escasez de semiconductores interrumpirá la cadena de suministro y limitará la producción de muchos equipos electrónicos a lo largo de este 2021. A esto se le une que muchas fábricas están incrementando los precios de las obleas y, al mismo tiempo, las empresas de chips aumentan los precios de los dispositivos.\r\n<br>\r\nY es que cada vez más, la escasez de componentes se amplía a más productos que dependen de industrias altamente mercantilizadas con mínima flexibilidad y capacidad para invertir agresivamente en poco tiempo.\r\n<br><br>\r\n<h3>¿Cuándo terminará la escasez de chips?</h3>\r\n<br>\r\nEn el mundo de las tecnologías de la información, existe cierta controversia sobre cuánto durará la escasez. El presidente de IBM, Jim Whitehurst, apuntaba recientemente en una entrevista para la BBC que la escasez global de semiconductores podría tardar un «par de años» en desaparecer por completo.\r\n\r\nEn su opinión, hay un gran desfase entre el momento en que se desarrolla una tecnología y cuando una planta de fabricación entra en construcción y salen los chips.\r\n\r\nPor su parte, el CEO de Intel, Pat Gelsinger, se hizo eco de ese sentimiento a principios de este mes y dijo que la escasez global de semiconductores probablemente no se resolverá hasta dentro de unos años.\r\n\r\nOtros proveedores sostienen que el mayor impacto entre seis meses y un año.\r\nEl CEO de Extreme Networks, Ed Meyercord, explicaba recientemente que la demanda actual supera la oferta de ciertos productos, como la plataforma Universal de Extreme, algo en lo que su relación estratégica con Broadcom les está ayudando para sortear las limitaciones de productos como consecuencia de la escasez de chips y otros componentes. Para el directivo, las limitaciones en la cadena de suministro podrían prolongarse a lo largo de entre 9 y 12 meses.\r\n\r\nDesde Cisco, su CEO, Chuck Robbins, se mostraba confiado el pasado mes de abril en el desarrollo de las capacidades de producción de los proveedores, algo que espera que mejore de cara a los próximos 12 a 18 meses.', 'escasez_chips.jpg', 'hardware'),
(9, '¿Por qué el hardware se degrada y pierde rendimien', '2021-06-04 11:57:14', 'En el mundo del hardware la palabra optimización suele estar a la orden del día, pero todos somos conscientes de que cuando se trata de hardware que ya tiene unos años, por mucho que tratemos de optimizarlo al final su rendimiento se ve mermado con el tiempo. En este artículo te vamos a contar por qué se va degradando el rendimiento del hardware con el paso del tiempo, y por qué por mucha optimización que le metas, un PC viejo nunca funcionará como el primer día.\r\n<br>\r\n<h3>El paso del tiempo y el rendimiento del hardware van de la mano</h3>\r\n<br>\r\nLas buenas prácticas y un correcto mantenimiento pueden hacer que tu PC dure en buenas condiciones durante muchos años, pero por mucho que hagas, un equipo que tiene ya cierto tiempo de uso nunca volverá a funcionar como si fuera nuevo. Esto es así porque el paso del tiempo hace que los componentes tengan cierto desgaste, incluso en componentes como la CPU o un SSD que no tienen partes móviles, algo que definitivamente va mermando poco a poco su rendimiento.<br>\r\n<br>\r\n<img src=\"https://hardzone.es/app/uploads-hardzone.es/2021/03/Reloj-CPU.jpg\" class=\"img-responsive center-block d-block mx-auto\"style=\"width: 70%; height: 70%; object-fit:scale-down;\">\r\n<br><br>', 'PC-Gaming-antiguo-800x419.webp', 'hardware'),
(10, 'Este es el Hardware que llevarán los Tesla para ejecutar juegos como en una PS5', '2021-06-04 12:47:13', 'Hace ya unos meses Tesla dio a conocer los detalles de los nuevos modelos de 2021 de sus Model S y Model X, sus dos coches de alta gama que contarán con un apartado de entretenimiento sobresaliente. Tanto que en la pantalla de estos vehículos podremos jugar a juegos con la misma potencia que podremos disfrutar en una PS5. Entonces ya muchos se preguntaron qué hardware podría generar estos gráficos tan poderosos en un coche. Y es que no hablamos de jugarlos en streaming, sino de generarlos con el propio hardware que monta Tesla en sus coches.\r\n<br>\r\n<h3>AMD Entra en juego</h3>\r\n<br>\r\nAunque era algo que se había venido rumoreando, ahora AMD ha confirmado que entra de lleno en los Tesla con su propio hardware para poder ejecutar juegos con esta gran potencia. Hoy en día hablar de Teraflops se ha convertido en algo habitual cuando se habla de medir la potencia de un hardware para generar gráficos en tiempo real. Para hacernos una idea, las nuevas Xbox Series X son capaces de entregar hasta 12 teraflops de potencia, mientras que la codiciada PS5 puede ofrecer hasta 10 teraflops. Y precisamente esta última es la misma potencia que pueden entregar estos modelos de Tesla para jugar en su pantalla.\r\n<br>\r\n', 'Tesla.jpg', 'hardware');

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
