-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2020 a las 06:17:47
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `coolkicks_3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `names` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name_usu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `addres` text COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `names`, `apellido`, `name_usu`, `email`, `phone`, `addres`, `contrasena`) VALUES
(2, 'ximena', 'garcia', 'xime', 'xime@gmail.com', '3213452133', 'niños heroes', '1234'),
(3, 'sofia', 'suarez', 'sofi', 'sofia@gmail.com', '7682213422', '1 de mayo', '000000'),
(4, 'cristobal', 'diaz', 'diaz', 'cristo@gmail.com', '4432213344', '1 de mayo', '0987'),
(5, 'cristobal', 'diaz', 'diaz', 'cristo@gmail.com', '4432213344', '1 de mayo', '0987'),
(6, 'cristobal', 'diaz', 'diaz', 'cristo@gmail.com', '4432213344', '1 de mayo', '0987'),
(7, 'orlando', 'gomez', 'gomez', 'orlando@gmail.com', '8874432343', 'juarez', '77777');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `tel` int(11) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`nombre`, `correo`, `tel`, `mensaje`) VALUES
('ximena', 'ximena@gmail.com', 2147483647, 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mis_productos`
--

CREATE TABLE `mis_productos` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mis_productos`
--

INSERT INTO `mis_productos` (`id`, `name`, `description`, `price`, `img`, `created`, `modified`, `status`) VALUES
(0, '', '', 0.00, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(1, 'NIKE AIR MAX 90', 'Nada como volar, nada más cómodo, nada como probado. El Nike Air Max 90 se mantiene fiel a sus raíces originales de running con la icónica suela tipo wafle, los revestimientos cosidos y los detalles clásicos de TPU. Los colores clásicos rinden homenaje a tu look fresco y la amortiguación Max Air agrega comodidad al trayecto.', 2343.00, 'calzado-air-max-90-2399.jpg', '2020-12-03 23:25:45', '2020-12-03 23:25:45', '1'),
(2, 'NIKE AIR MAX 90', 'Nada como volar, nada más cómodo, nada como probado. El Nike Air Max 90 se mantiene fiel a sus raíces originales de running con la icónica suela tipo wafle, los revestimientos cosidos y los detalles clásicos de TPU. Los colores clásicos rinden homenaje a tu look fresco y la amortiguación Max Air agrega comodidad al trayecto.', 2346.00, 'calzado-air-max-90-hombre-2699.jpg', '2020-12-03 23:27:18', '2020-12-03 23:27:18', '1'),
(3, 'NIKE AIR MAX 90', 'Nada como volar, nada más cómodo, nada como probado. El Nike Air Max 90 se mantiene fiel a sus raíces originales de running con la icónica suela tipo wafle, los revestimientos cosidos y los detalles clásicos de TPU. Los colores clásicos rinden homenaje a tu look fresco y la amortiguación Max Air agrega comodidad al trayecto.', 2343.00, 'calzado-air-max-90-hombre-2899.jpg', '2020-12-03 23:27:41', '2020-12-03 23:27:41', '1'),
(4, 'AIR MAX COMMAND', 'Un estilo clásico de Air Max, son los Tenis Nike Air Max Command para hombre. Construidos para aportar un aspecto casual a tu camino y a tu outfit. Conserva detalles retros en su parte superior de cuero y cuero sintético para dar una apariencia única y durable. La suela de goma es la encargada de crear pasos suaves, además su de contar con amortiguación Max Air para una amortiguación ligera.', 2099.00, 'Nike-air-max-command-2099.jpg', '2020-12-03 23:27:41', '2020-12-03 23:29:47', '1'),
(5, 'NIKE AIR FORCE 1 BETRUE', 'Hechos por NIKE, tienen una construcción de cuero que los hacen tener una mayor durabilidad y resistencia. Tienen orificios frontales que los hacen frescos y cómodos de usar. Podrás ajustarlos sencillamente gracias a sus cordones y lengüeta que tienen. La suela hecha de goma que tiene un patrón grabado en el exterior y la Unidad Air Sole te ofrecen tener pisadas muy suaves junto con una excelente tracción, sin importar la superficie.', 2399.00, 'Nike-air-force-1-betrue-2399.jpg', '2020-12-03 23:32:26', '2020-12-05 05:37:24', '1'),
(6, 'NIKE AIR MAX PLUS', '¿Listo para atrapar miradas? Los Air Max Plus de Nike se encuentran listos para acompañarte con su diseño único, conservando la legendaria silueta de 1998. Han sido construidos con una parte superior de malla que permite el flujo de aire y cuenta con un recubrimiento de jaula de TPU para una mayor estabilidad. Recorrer la ciudad será una experiencia cómoda con su entresuela de PU con unidad Air-Sole.', 3549.00, 'Nike-air-max-plus-3549.jpg', '2020-12-05 12:31:24', '2020-12-05 18:31:24', '1'),
(7, 'NIKE AIR MAX 270 REACT', 'Conoce la espuma más suave, tersa y resistente hasta la fecha con la Nike Air Max 270 React. Su diseño, uno de los primeros modelos del estilo de vida Air Max de Nike, se inspira en el panteón Nike. El calzado ofrece una de las mayores innovaciones de Nike, gracias a su gran ventana y sus nuevos colores.', 3149.00, 'Nike-air-max-270-react-3149.jpg', '2020-12-06 14:35:25', '2020-12-05 18:26:32', '1'),
(8, 'NIKE RUNNING REACT INFINITY', 'El Nike React Infinity Run Flyknit está diseñado para ayudar a reducir las lesiones, así puedes seguir corriendo. Más espuma y detalles en la parte superior mejorada brindan una sensación de seguridad y amortiguación. Póntelo y siente el potencial a medida que sumas más y más kilómetros.', 2999.00, 'Nike-de-running-react-infinity-run-flyknit-2999.jpg', '2020-12-06 12:29:28', '2020-12-06 19:32:36', '1'),
(9, 'NIKE AIR MAX 95 SP', 'Hace décadas, las Air Max 95 dejaron huella por ser las primeras zapatillas en presentar la amortiguación Nike Air visible en el antepié. Ahora, las Nike Air Max 95 OG MC SP \"ERDL Party\" revitalizan el icono para el verano con una combinación de colores y estampados de camuflaje impresos digitalmente en el tejido de lona. Los detalles de piel completan el diseño único.', 2399.00, 'Nike-air-max-95-sp-2399.jpg', '2020-12-07 10:33:25', '2020-12-07 15:32:45', '1'),
(10, 'NIKE COURT AIR ZOOM GB TURBO', 'Los partidos de tenis son rápidos, feroces y largos. Las Nike Court Air Zoom GP Turbo combinan una unidad Zoom Air integral increíblemente reactiva con zonas de resistencia para que la fatiga no haga mella en ti.', 2999.00, 'NikeCourt-air-zoom-gp-turbo-2999.jpg', '2020-12-07 09:33:44', '2020-12-07 18:28:39', '1'),
(11, 'NIKE AIR MAX 270 REACT', 'Conoce la espuma más suave, tersa y resistente hasta la fecha con la Nike Air Max 270 React. Su diseño, uno de los primeros modelos del estilo de vida Air Max de Nike, se inspira en el panteón Nike. El calzado ofrece una de las mayores innovaciones de Nike, gracias a su gran ventana y sus nuevos colores.', 3149.00, 'Nike-air-max-270-react-3149.jpg', '2020-12-03 17:41:36', '2020-12-03 19:20:33', '1'),
(12, 'NIKE AIR MAX 270 SE', 'Los tenis Nike Air Max 270 SE llevan la unidad de talón Max Air más grande que se ha visto, además han sido inspirados en los Air Max de principios de los 90. Su diseño eleva el estilo, además la unidad Max Air es un elemento dentro de la cultura sneaker por su incomparable confort al pisar y estilo. Sobresale con la combinación de dos colores de manera degradado. La construcción superior de malla y revestimientos de material sintético brindan frescura, además de llevar logotipos sutiles del Air Max 270.', 3349.00, 'Nike-air-max-270-react-se-3349.jpg', '2020-12-01 09:21:08', '2020-12-03 17:29:21', '1'),
(13, 'NIKE COURT TECH CHALLENGE 20', 'Con motivo del 30 aniversario de las Nike Air Tech Challenge 2, las NikeCourt Tech Challenge 20 dan un giro actual a las icónicas zapatillas. Tendrás los mismos estampados brillantes que el diseño original con la mayor comodidad de los últimos materiales.', 2549.00, 'NikeCourt-tech-challenge-20-2549.jpg', '2020-12-04 10:08:48', '2020-12-04 10:08:48', '1'),
(14, 'NIKE REACT MILER', 'Mide tus triunfos en kilómetros recorridos con los React Miler, han sido creados para darte la confianza al correr largas distancias de manera cómoda gracias al ajuste ideal. El diseño te brinda un estilo innovador y moderno.', 2599.00, 'Nike-react-miler-2599.jpg', '2020-12-04 10:08:48', '2020-12-04 10:08:48', '1'),
(15, 'NIKE AIR MAX 270 REACT SE', 'Tenis para correr Nike Air Max 270 React SE elaborado en textil multicolor con punta redondeada, cordón en empeine, logotipo de la marca en costado y suela antiderrapante. Cuenta con tecnología Nike React que brinda una mejor amortiguación y la unidad Max Air 270 que brinda comodidad sin igual durante todo el día.', 3349.00, 'Nike-air-max-270-react-se-3349.jpg', '2020-12-04 17:46:26', '2020-12-05 17:46:26', '1'),
(16, 'Nike Air Force 1 \'07 LV8', 'El fulgor vive en el Nike Air Force 1 ’07 LV8, el modelo original del básquetbol que le da un toque fresco 3M™ a las características más recordadas: cuero reluciente, colores llamativos y la cantidad perfecta de destellos para que brilles. La parte superior 3M™ mejorada, duradera y cómoda te permite mantener tu estilo en invierno.', 2199.00, 'calzado-air-force-1-07-lv8-M7DjfN.jpg', '2020-12-05 20:40:58', '2020-12-05 21:40:58', '1'),
(17, 'Nike Zoom Pegasus Turbo 2', 'El Nike Zoom Pegasus Turbo 2 se actualiza con una parte superior ligera como una pluma, al tiempo que la innovadora espuma aporta una eficacia revolucionaria a tu entrenamiento de larga distancia.', 2449.00, 'calzado-de-running-zoom-pegasus-turbo-2-Fm6sb6.jpg', '2020-12-04 20:40:58', '2020-12-04 21:40:58', '1'),
(18, 'Jordan \"Why Not?\" Zer0.3', 'Russell Westbrook es uno de los competidores más duros, una verdadera máquina de fabricar triples-dobles. Cuenta con un motor, unos músculos y una mentalidad acordes a su valentía, con unas estadísticas que lo respaldan. El Jordan \"Why Not?\" El Zer0.3 está diseñado para adaptarse al caos que genera Russ en la cancha, ya que cuenta con una correa en el mediopié para brindar un ajuste firme y una unidad de amortiguación grande que genera firmeza y rapidez hacia la canasta.', 2239.00, 'jordan-why-not-calzado-de-básquetbol-zer0-3-9VT80b.jpg', '2020-12-05 20:43:21', '2020-12-05 20:43:29', '1'),
(19, 'Jordan Zoom Trunner Ultimate', 'El Jordan Zoom Trunner Ultimate está diseñado para atletas que quieren un calzado en el que puedan correr o entrenar. Transpirable y ultraligero, cuenta con una amortiguación completa y una unidad adicional en el antepié para brindarte mayor capacidad de respuesta. La estructura tipo diamante proporciona estabilidad lateral y trabaja con la amortiguación para que puedas sentirte más veloz.', 2559.00, 'calzado-de-running-jordan-zoom-trunner-ultimate-lFFZkl.jpg', '2020-12-06 20:43:21', '2020-12-06 20:43:21', '1'),
(20, 'Nike Air Max 270 React', 'El Jordan Zoom Trunner Ultimate está diseñado para atletas que quieren un calzado en el que puedan correr o entrenar. Transpirable y ultraligero, cuenta con una amortiguación completa y una unidad adicional en el antepié para brindarte mayor capacidad de respuesta. La estructura tipo diamante proporciona estabilidad lateral y trabaja con la amortiguación para que puedas sentirte más veloz.', 3149.00, 'calzado-air-max-270-react-2LDsVK.jpg', '2020-12-04 20:45:49', '2020-12-04 20:45:49', '1'),
(21, 'Nike Air Max 270 React', 'El primer Air Max de Nike para el día a día se combina con la espuma más suave, agradable y resistente hasta el momento en el Nike Air Max 270 React. El diseño se inspira en el clásico Air Max y muestra la innovación más grande de Nike con su gran ventana y su nueva variedad de colores.', 3149.00, 'calzado-air-max-270-react-2LDsVK (1).jpg', '2020-12-05 20:45:49', '2020-12-06 20:45:49', '1'),
(22, 'Nike air max 95 Essencial ', 'Ajusta el calzado para todo el día. Ofrece el icónico diseño de cuero con colores llamativos para que los detalles se destaquen cuando golpeas el pavimento con comodidad.', 2213.00, 'calzado-air-max-95-essential-6bWv7X (1).jpg', '2020-12-07 20:48:52', '2020-12-07 20:59:52', '1'),
(23, 'Nike Quest 2', 'Destaca tu presencia con el Nike Air Quest, una experiencia Tuned Air que ofrece estabilidad premium y amortiguación increíble. Con colores degradados y los dedos de TPU ondulados del modelo original, celebra su estilo desafiante.', 2112.00, 'nike quest 2.jpg', '2020-12-04 13:28:38', '2020-12-04 16:44:31', '1'),
(24, 'Nike Air Max Plus ', 'Ajusta el calzado para todo el día. Ofrece el icónico diseño de cuero con colores llamativos para que los detalles se destaquen cuando golpeas el pavimento con comodidad.', 1433.00, 'calzado-air-max-plus-Rn4KdC.jpg', '2020-12-04 12:45:39', '2020-12-04 18:53:51', '1'),
(25, 'Nike Air Force 1 sahwdow', 'Con su ventana abierta, la amortiguación Air con doble pila y la parte superior minimalista. El cuello del tobillo y la lengüeta acolchados agregan comodidad,  mientras que una mezcla de texturas crean un estilo expresivo y artesanal hecho para perdurar.', 2213.00, 'calzado-air-force-1-shadow-n7WF4B.jpg', '2020-12-04 14:32:51', '2020-12-09 18:53:51', '1'),
(26, 'Nike React Element 55', 'Con su ventana abierta, la amortiguación Air con doble pila y la parte superior minimalista. El cuello del tobillo y la lengüeta acolchados agregan comodidad,  mientras que una mezcla de texturas crean un estilo expresivo y artesanal hecho para perdurar.', 3221.00, 'calzado-air-max-2x-3hqsQl.jpg', '2020-12-04 20:56:57', '2020-12-04 20:56:57', '1'),
(27, 'Nike air max 200', 'Destaca tu presencia con el Nike Air Max , una experiencia Tuned Air que ofrece estabilidad premium y amortiguación increíble. Con colores degradados y los dedos de TPU ondulados del modelo original, celebra su estilo desafiante.', 2211.00, 'calzado-air-max-200-SvktZ0.jpg', '2020-12-04 20:56:57', '2020-12-04 20:56:57', '1'),
(28, 'Nike revolition 5 ', 'El Nike Revolution 5 captura la magia de las microesferas con la amortiguación liviana y transparente de Max Air. Detalles iridiscentes que te destacan. La unidad Max Air más alta de Nike hasta la fecha y la espuma elástica Nike React te dan una comodidad que no puedes pasar por alto.', 2343.00, 'calzado-de-running-revolution-5-sPNBBL.jpg', '2020-12-03 23:27:41', '2020-12-05 18:26:32', '1'),
(29, 'Nike Air max 95 Essential ', 'Nike Air Max 95 Essential, inspirado en el cuerpo humano y el ADN del running, combina una increíble comodidad con un estilo que se lleva todas las miradas. Los icónicos paneles laterales representan los músculos, mientras que el sistema Nike Air visible en el talón y el antepié amortigua cada pisada.</', 2999.00, 'calzado-air-max-95-essential-6bWv7X.jpg', '2020-12-03 23:27:41', '2020-12-05 18:31:24', '1'),
(30, 'Nike Air Force 1 \'07', 'El fulgor vive en Nike Air Force 1 ’07, el ícono del básquetbol que le da un toque fresco a las características más recordadas: cuero reluciente, colores audaces y la cantidad perfecta de destellos para que brilles.', 1999.00, 'calzado-air-force-1-07-rgJQ9F.jpg', '2020-12-04 21:02:40', '2020-12-04 21:02:40', '1'),
(31, 'Nike Air Max 97 Essential', 'Con el mismo diseño de ondas del modelo original, inspirado en los trenes bala de Japón, el Nike Air Max 97 Essential brinda un look que impulsará tu estilo y le dará máxima velocidad. Con la revolucionaria unidad Nike Air larga que sacudió el mundo del running y nuevos estampados de pitón y detalles reflectantes, este calzado te permite pisar con comodidad de primer nivel.', 3549.00, 'calzado-air-max-97-essential-gZlTdH.jpg', '2020-12-05 21:02:40', '2020-12-06 21:02:40', '1'),
(32, 'Nike Reposto', 'El calzado Nike reposto está diseñado para que tu atuendo brille en cualquier ocasión. La entresuela de espuma gruesa es excelente en comodidad y estilo. El gráfico \"NKE 72\" en el costado y la suela tipo wafle modificada toman su inspiración de la herencia del calzado Nike. Las costuras en zigzag agregan un acabado artesanal a un calzado con un estilo de herencia y una máxima versatilidad.', 1799.00, 'calzado-reposto-lwXzpV.jpg', '2020-12-03 23:27:41', '2020-12-07 15:32:45', '1'),
(33, 'Nike Air Max 270 React', 'El primer Air Max de Nike para el día a día se combina con la espuma más suave, agradable y resistente hasta el momento en el Nike Air Max 270 React. El diseño se inspira en el clásico Air Max y muestra la innovación más grande de Nike con su gran ventana y su nueva variedad de colores.', 3299.00, 'calzado-air-max-270-react-BbZhTk.jpg', '2020-12-05 12:31:24', '2020-12-08 17:29:21', '1'),
(34, 'Nike Air Max Excee', 'Inspirado por el modelo Nike Air Max 90, el Nike Air Max Excee celebra un clásico bajo una nueva óptica. Las líneas de diseño alargadas y las proporciones distorsionadas en la parte superior eleva a un ícono a un espacio moderno.', 1139.00, 'calzado-air-max-excee-kG4Tjc.jpg', '2020-12-07 16:22:20', '2020-12-08 16:21:20', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`id`, `customer_id`, `total_price`, `created`, `modified`, `status`) VALUES
(18, 2, 2343.00, '2020-12-05 21:01:34', '2020-12-05 21:01:34', '1'),
(19, 2, 2343.00, '2020-12-05 21:02:57', '2020-12-05 21:02:57', '1'),
(20, 2, 4455.00, '2020-12-05 21:07:29', '2020-12-05 21:07:29', '1'),
(21, 7, 8194.00, '2020-12-06 00:12:09', '2020-12-06 00:12:09', '1'),
(22, 7, 2346.00, '2020-12-06 00:12:40', '2020-12-06 00:12:40', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_articulos`
--

CREATE TABLE `orden_articulos` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `orden_articulos`
--

INSERT INTO `orden_articulos` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(1, 18, 3, 1),
(2, 19, 3, 1),
(3, 20, 23, 1),
(4, 20, 3, 1),
(5, 21, 2, 1),
(6, 21, 33, 1),
(7, 21, 13, 1),
(8, 22, 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mis_productos`
--
ALTER TABLE `mis_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indices de la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  ADD CONSTRAINT `orden_articulos_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orden` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
