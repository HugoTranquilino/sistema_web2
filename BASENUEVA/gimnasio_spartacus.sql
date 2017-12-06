-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2017 a las 07:08:37
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gimnasio_spartacus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administracion`
--

CREATE TABLE `administracion` (
  `id_admin` int(5) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido_p` varchar(30) NOT NULL,
  `apellido_m` varchar(30) NOT NULL,
  `tel` varchar(13) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contra` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administracion`
--

INSERT INTO `administracion` (`id_admin`, `nombre`, `apellido_p`, `apellido_m`, `tel`, `usuario`, `contra`) VALUES
(1, 'JUAN CARLOS', 'ANGUIANO', 'ROSAS', '785-101-32-50', 'kanito', '12345'),
(2, 'HUGO', 'TRANQUILINO', 'SANTIAGO', '785-830-52-02', 'hugo', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(5) NOT NULL,
  `nombre_cliente` varchar(30) NOT NULL,
  `ape_p_cliente` varchar(30) NOT NULL,
  `ape_m_cliente` varchar(30) NOT NULL,
  `telefono` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre_cliente`, `ape_p_cliente`, `ape_m_cliente`, `telefono`) VALUES
(17001, 'JUAN CARLOS', 'ANGUIANO', 'ROSAS', '785-101-32-50'),
(17002, 'HUGO', 'TRANQUILINO', 'SANTIAGO', '785-830-52-02'),
(17003, 'LUIS GABRIEL', 'VICENCIO', 'NAVA', '783-137-86-88');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_pago`
--

CREATE TABLE `control_pago` (
  `id_pago` int(5) NOT NULL,
  `id_cliente_p` int(5) NOT NULL,
  `fecha_pago` date NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `control_pago`
--

INSERT INTO `control_pago` (`id_pago`, `id_cliente_p`, `fecha_pago`, `fecha_inicio`, `fecha_fin`) VALUES
(1, 17001, '2017-12-01', '2017-12-05', '2018-01-05'),
(2, 17002, '2017-11-01', '2017-11-01', '2017-12-01'),
(3, 17003, '2017-12-05', '2017-12-05', '2018-01-05');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `lista_pagos`
--
CREATE TABLE `lista_pagos` (
`id_cliente` int(5)
,`nombre_cliente` varchar(30)
,`ape_p_cliente` varchar(30)
,`ape_m_cliente` varchar(30)
,`fecha_pago` date
,`fecha_inicio` date
,`fecha_fin` date
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripcion`
--

CREATE TABLE `suscripcion` (
  `id_suscripcion` int(5) NOT NULL,
  `id_cliente` int(5) NOT NULL,
  `tipo_suscripcion` int(1) NOT NULL,
  `cantidad` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `suscripcion`
--

INSERT INTO `suscripcion` (`id_suscripcion`, `id_cliente`, `tipo_suscripcion`, `cantidad`) VALUES
(1, 17001, 3, 1),
(2, 17002, 2, 100),
(3, 17003, 3, 250);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_suscripciones`
--

CREATE TABLE `tipos_suscripciones` (
  `id_tipo_suscripcion` int(1) NOT NULL,
  `tipo_suscripcion` varchar(20) NOT NULL,
  `valor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos_suscripciones`
--

INSERT INTO `tipos_suscripciones` (`id_tipo_suscripcion`, `tipo_suscripcion`, `valor`) VALUES
(1, 'DIA', 30),
(2, 'SEMANA', 100),
(3, 'MES', 250);

-- --------------------------------------------------------

--
-- Estructura para la vista `lista_pagos`
--
DROP TABLE IF EXISTS `lista_pagos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lista_pagos`  AS  select `cliente`.`id_cliente` AS `id_cliente`,`cliente`.`nombre_cliente` AS `nombre_cliente`,`cliente`.`ape_p_cliente` AS `ape_p_cliente`,`cliente`.`ape_m_cliente` AS `ape_m_cliente`,`control_pago`.`fecha_pago` AS `fecha_pago`,`control_pago`.`fecha_inicio` AS `fecha_inicio`,`control_pago`.`fecha_fin` AS `fecha_fin` from (`control_pago` join `cliente` on((`control_pago`.`id_cliente_p` = `cliente`.`id_cliente`))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `control_pago`
--
ALTER TABLE `control_pago`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `id_cliente` (`id_cliente_p`);

--
-- Indices de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  ADD PRIMARY KEY (`id_suscripcion`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `tipo_suscripcion` (`tipo_suscripcion`);

--
-- Indices de la tabla `tipos_suscripciones`
--
ALTER TABLE `tipos_suscripciones`
  ADD PRIMARY KEY (`id_tipo_suscripcion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `control_pago`
--
ALTER TABLE `control_pago`
  MODIFY `id_pago` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  MODIFY `id_suscripcion` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `control_pago`
--
ALTER TABLE `control_pago`
  ADD CONSTRAINT `control_pago_ibfk_1` FOREIGN KEY (`id_cliente_p`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  ADD CONSTRAINT `suscripcion_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `suscripcion_ibfk_2` FOREIGN KEY (`tipo_suscripcion`) REFERENCES `tipos_suscripciones` (`id_tipo_suscripcion`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
