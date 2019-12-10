-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2019 a las 00:05:39
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clean_contacts`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `descripcion`) VALUES
(1, 'Mantenimiento', 'Mantenimientos generales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellido` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `correo` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_empresa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `apellido`, `telefono`, `correo`, `id_empresa`) VALUES
(1, 'Eduardo ', 'Garcia', '22145820', 'eduajos@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` longtext COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anios_cliente` int(11) NOT NULL,
  `estado` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nombre`, `direccion`, `anios_cliente`, `estado`) VALUES
(1, 'Chiltex', 'Col. Escalon Pasaje santa monica', 1, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_servicio`
--

CREATE TABLE `historial_servicio` (
  `id_historial_servicio` int(11) NOT NULL,
  `id_contacto` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `comentario` varchar(350) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_realizado` date DEFAULT NULL,
  `n_factura` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_servicio` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `precio` decimal(11,2) DEFAULT NULL,
  `descripcion` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `nombre`, `descripcion`) VALUES
(1, 'Administrador', 'X'),
(2, 'Tecnicox', 'x');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellido` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `correo` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `pass` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_tipo_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `telefono`, `correo`, `pass`, `estado`, `id_tipo_usuario`) VALUES
(5, 'Eduardo Josue', 'Garcia', '73670806', 'josue.garpe96@gmail.com', '58e6c99ea950d207e1f3efbac9ff5b6be8b1e196f171badcd5b9441d946dad16', 'Activo', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`),
  ADD KEY `servicio_ibfk_1` (`id_empresa`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `historial_servicio`
--
ALTER TABLE `historial_servicio`
  ADD PRIMARY KEY (`id_historial_servicio`),
  ADD KEY `historial_servicio_ibfk_1` (`id_contacto`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `usuario_ibfk_1` (`id_tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `historial_servicio`
--
ALTER TABLE `historial_servicio`
  MODIFY `id_historial_servicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`);

--
-- Filtros para la tabla `historial_servicio`
--
ALTER TABLE `historial_servicio`
  ADD CONSTRAINT `historial_servicio_ibfk_1` FOREIGN KEY (`id_contacto`) REFERENCES `contacto` (`id_contacto`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
