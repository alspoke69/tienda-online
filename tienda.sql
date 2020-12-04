-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2020 a las 01:18:23
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(10) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `precio` int(10) NOT NULL,
  `imagen` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `idusuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `nombre`, `precio`, `imagen`, `idusuario`) VALUES
(0, 'nombre=', 0, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(10) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `precio` int(10) NOT NULL,
  `imagen` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `precio`, `imagen`) VALUES
(1, 'Tenis Jordan Jumpman', 2399, 'https://www.innovasport.com/medias/tenis-jordan-jumpman-2021-is-CQ4021-006-1.png?context=bWFzdGVyfGltYWdlc3wxMDY4MjN8aW1hZ2UvcG5nfGltYWdlcy9oMDAvaDdmLzk2ODQ1MzU2NDAwOTQucG5nfDY4ZWFjY2QzZWJkZTNlOTA3MGQzNjE2YzY3MWZjMmVmNTJhNDcwZTZjMWU3NGIyMDJkZmI5NjdkNjliMzk3YmI'),
(2, 'Nike Air', 2199, 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/2cede278-d385-424c-ba20-bfd4d4361b0c/calzado-air-max-97-essential-XD9m01.jpg'),
(3, 'Adidas Rufalcon azul', 1299, 'https://assets.adidas.com/images/w_600,f_auto,q_auto/ad48f2a387064b08a7b2abd400f44f08_9366/RUNFALCON_Azul_EG8633_06_standard.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(5) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `rol` int(5) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `correo`, `contrasena`, `rol`, `usuario`) VALUES
(5, 'fs', 'jorge123@fds', '21', 1, 'fs'),
(6, 'fs', 'jorge123@fds', '123', 1, 'fs'),
(8, 'fs', 'jorge123@fds', '21', 1, 'fs'),
(9, 'fs', 'jorge123@fds', '123', 1, 'fs'),
(11, 'jorge', 'jorge@gmail.com', '123', 1, ''),
(12, 'jorge', 'jorge@gmail.com', '123', 1, ''),
(13, 'ljlkj', 'kljj@fsd', '123', 1, 'ljkl'),
(14, 'ljlkj', 'kljj@fsd', '', 1, 'ljkl'),
(15, 'ljlkj', 'kljj@fsd', '123', 1, 'ljkl'),
(16, 'ljlkj', 'kljj@fsd', '23', 1, 'ljkl'),
(17, 'ljlkj', 'kljj@fsd', '123', 1, 'ljkl'),
(18, 'jorge', 'jor@gmail', 'l3j', 1, 'rwer'),
(19, 'qwe', 'jkldfjq@f', 'kald', 1, 'ewqe'),
(20, 'jorge', 'jorge@gm', '123', 1, 'jorge1'),
(21, 'jo', 'jor12@f', 'jsl', 1, 'jore'),
(23, 'jorge', 'aaron@gmail.com', '123', 2, 'jorgea'),
(24, 'jorge', 'jorge@fad', '123', 1, 'jl'),
(25, 'jorgecarlos', 'j@afds', '1234', 1, 'jore');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
