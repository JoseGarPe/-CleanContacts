
DROP TABLE IF EXISTS `tipo_usuario`;
CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8_spanish2_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellido` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `correo` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `pass` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_tipo_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`);

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8_spanish2_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

DROP TABLE IF EXISTS `servicio`;
CREATE TABLE `servicio` (
  `id_servicio` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `precio` decimal(11,2) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

  DROP TABLE IF EXISTS `contacto`;
CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellido` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `correo` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `años_cliente` int(11) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombre_empresa` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

DROP TABLE IF EXISTS `historial_servicio`;
CREATE TABLE `historial_servicio` (
  `id_historial_servicio` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  
  `id_contacto` int(11) NOT NULL COLLATE utf8_spanish2_ci DEFAULT NOT NULL,
  `id_servicio` int(11) COLLATE utf8_spanish2_ci DEFAULT NOT NULL,
  `comentario` varchar(350) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_realizado` date COLLATE utf8_spanish2_ci DEFAULT NULL,
  `n_factura` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

ALTER TABLE `historial_servicio`
  ADD CONSTRAINT `historial_servicio_ibfk_1` FOREIGN KEY (`id_contacto`) REFERENCES `contacto` (`id_contacto`);
ALTER TABLE `historial_servicio`
  ADD CONSTRAINT `historial_servicio_ibfk_2` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`);