-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2023 a las 01:18:23
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name_admin` varchar(200) NOT NULL,
  `last_name_admin` varchar(200) NOT NULL,
  `email_admin` varchar(200) NOT NULL,
  `user_admin` varchar(100) NOT NULL,
  `password_admin` varchar(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `name_admin`, `last_name_admin`, `email_admin`, `user_admin`, `password_admin`, `fecha`) VALUES
(5, 'José', 'Rocha', 'saul_rayados@live.com.mx', 'admin', 'password', '2023-07-11 23:17:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name_client` varchar(200) NOT NULL,
  `last_name_client` varchar(200) NOT NULL,
  `email_client` varchar(200) NOT NULL,
  `method_client` varchar(100) NOT NULL,
  `type_plan` varchar(100) NOT NULL,
  `user_client` varchar(100) NOT NULL,
  `password_client` varchar(100) NOT NULL,
  `status_client` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movements`
--

CREATE TABLE `movements` (
  `id` int(11) NOT NULL,
  `user_client` varchar(100) NOT NULL,
  `password_client` varchar(100) NOT NULL,
  `entrance_movements` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `exit_movements` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pay`
--

CREATE TABLE `pay` (
  `id` int(11) NOT NULL,
  `name_client` varchar(200) NOT NULL,
  `type_plan` varchar(100) NOT NULL,
  `price_plan` int(11) NOT NULL,
  `card_pay` int(11) NOT NULL,
  `expiration_pay` varchar(50) NOT NULL,
  `cvv_pay` int(11) NOT NULL,
  `fecha_pay` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `plan_plan` varchar(100) NOT NULL,
  `price_plan` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_plan_plan` (`type_plan`),
  ADD KEY `user_client` (`user_client`,`password_client`),
  ADD KEY `name_client` (`name_client`);

--
-- Indices de la tabla `movements`
--
ALTER TABLE `movements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_client` (`user_client`,`password_client`);

--
-- Indices de la tabla `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_client` (`name_client`,`type_plan`,`price_plan`,`fecha_pay`),
  ADD KEY `precio_plan` (`price_plan`),
  ADD KEY `plan` (`type_plan`);

--
-- Indices de la tabla `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plan_plan` (`plan_plan`),
  ADD KEY `price_plan` (`price_plan`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `movements`
--
ALTER TABLE `movements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `pay`
--
ALTER TABLE `pay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
