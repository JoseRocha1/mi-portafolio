-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2022 a las 19:37:23
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rincon_bebidas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
  `id` int(11) NOT NULL,
  `nombre_bebida` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo_bebida` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ingredientes` text COLLATE utf8_spanish_ci NOT NULL,
  `receta` text COLLATE utf8_spanish_ci NOT NULL,
  `video_ilu` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `thumb` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`id`, `nombre_bebida`, `descripcion`, `tipo_bebida`, `ingredientes`, `receta`, `video_ilu`, `thumb`, `fecha`) VALUES
(1, 'Vampiro', 'Para esas noches de fiesta necesitas una receta de cocteles originales, sorprende a todos tus amigos con un delicioso vampiro bebida.', 'Tequila', ' 1 caballito de tequila blanco\r\n<i class=\"fas fa-check-circle\"></i> 2 caballitos de sangrita\r\n<i class=\"fas fa-check-circle\"></i> 1 caballito de refresco de toronja\r\n<i class=\"fas fa-check-circle\"></i> 1/2 limón sin semilla\r\n<i class=\"fas fa-check-circle\"></i> 1 pizca de sal\r\n<i class=\"fas fa-check-circle\"></i> Rodajas de limón para servir', 'Mezcla todo dentro de una coctelera.\r\n2. Sirve y acompaña con una rodaja de limón.', '89XMH9wPWeg', 'vampiro.jpg', '2022-06-27 15:56:45'),
(2, 'Paloma', 'La Paloma tequila es un cóctel clásico mexicano, ideal para festejar las fiestas patrias. Ésta bebida es muy sencilla de preparar, solo necesitas: tequila, refresco, hielo, sal y limón.', 'Tequila', ' 2 onzas de tequila\r\n<i class=\"fas fa-check-circle\"></i> 2 Latas de refresco, de toronja\r\n<i class=\"fas fa-check-circle\"></i> Hielos\r\n<i class=\"fas fa-check-circle\"></i> Sal\r\n<i class=\"fas fa-check-circle\"></i> Limones', 'Escarchar los dos vasos con el limón y la sal.\r\n2. Agregar los hielos a los vasos y a cada vaso la onza de tequila.\r\n3. Luego agregar el refresco y listo.', 'U9Yib86KQ6Y', 'paloma.jpg', '2022-06-27 16:19:25'),
(3, 'Cuba libre', 'Este clásico cóctel cubano con ron y cola lleva décadas deleitando los paladares.', 'Ron', ' 1/2 Jugo de 1/2 lima\r\n<i class=\"fas fa-check-circle\"></i> 2 onzas de ron blanco\r\n<i class=\"fas fa-check-circle\"></i> 6 onzas de soda', 'Pon hielo en un vaso. Llena el vaso con ron y cola. Agrega el jugo de lima y mezcla bien.', '1xyLICHsR9U', 'cuba.jpg', '2022-06-27 16:25:40'),
(4, 'Mojito cubano', 'Este cóctel tan famoso a nivel mundial hace patria de Cuba, el país que lo vio nacer. El mojito es uno de las bebidas más populares en la coctelería y desde su invención han surgido numerosas versiones que varían del original.', 'Ron', ' 2  cucharaditas de azúcar blanco\r\n<i class=\"fas fa-check-circle\"></i> 8 hojas de hierbabuena (2 ramitas de menta)\r\n<i class=\"fas fa-check-circle\"></i> 30 ml de zumo de lima\r\n<i class=\"fas fa-check-circle\"></i> 60 ml. de ron cubano.\r\n<i class=\"fas fa-check-circle\"></i> 1/2 lima en rodajas o cuartos\r\n<i class=\"fas fa-check-circle\"></i> 120 ml. de Soda (Agua con gas con sifón)\r\n<i class=\"fas fa-check-circle\"></i> Hielo picado o pilé\r\n<i class=\"fas fa-check-circle\"></i> Unas gotas de angostura (opcional)', 'Gran parte del secreto de un mojito es la hierbabuena o menta (la hierbabuena es un tipo de menta), aunque me gusta más el sabor y aroma que le da la hierbabuena.\r\n2. Durante la maceración ten cuidado y no destruyas las hojas, la idea es que se desprendan sus aromas y sus esencias.\r\n3. Ponemos azúcar al fondo del vaso. El vaso debe ser de cristal, tipo Collins o tipo Fizz (como el de la foto). Los mojitos se elaboran directamente sobre el vaso, sin necesidad de coctelera. Vertemos el zumo de la lima y con la mano de mortero o con una cuchara de bar, diluimos el zumo con el azúcar.\r\n4. Damos unos pequeños golpecitos a las hojas de menta para que liberen su aroma y las majamos un poco con una mano de mortero, apretándolas contra el azúcar en el fondo. No deben quedar totalmente rotas y machacadas, porque entonces el mojito resulta desagradable de beber.\r\n5. Añadimos los trozos de lima en el fondo del mojito y le damos unos toques de mortero para que libere un poco su zumo. Estos trozos de lima le darán un toque más ácido y aún más aromático, pero se debe ser cuidadoso ya que para muchos puede ser demasiado ácido.\r\n6. Vertemos el ron y llenamos el vaso con hielo picado. Utilizar abundante hielo picado es la mejor opción pues el hielo ocupa mayores dimensiones en el vaso y lo hace más fresco. Rellenamos el cóctel con soda hasta completar, unas gotas de angostura (opcionales) y removemos con suavidad. \r\n7. Nunca agregues bitter, ni ginger ale, limonada o tónica a la preparación, no estropees el mojito (sino tuvieses mejor que vaya sin soda). La soda enfriará el mojito más rápidamente. Decoramos con una rama de hierbabuena o menta, una rodaja de lima y servimos con una pajita.', 'egrpO5NUGnU', 'mojito.jpg', '2022-06-27 16:36:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `description` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `description`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ine` text COLLATE utf8_spanish_ci NOT NULL,
  `id_rol` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `first_name`, `last_name`, `email`, `password`, `birthday`, `gender`, `ine`, `id_rol`, `fecha`) VALUES
(1, 'José', 'Rocha', 'saul_rayados@live.com.mx', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86', '04/07/1999', 'Hombre', '', 1, '2022-05-19 05:46:33'),
(2, 'benito', 'Juarez', 'ejemplo@admin.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '1800-07-04', 'hombre', 'WhatsApp Image 2022-01-12 at 3.33.38 PM.jpeg', 2, '2022-05-19 14:21:23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `rol_usuario` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
