-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-11-2016 a las 08:03:42
-- Versión del servidor: 5.5.53-0+deb8u1
-- Versión de PHP: 5.6.27-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pizzeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
`id_categoria` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `tipo` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`, `tipo`) VALUES
(1, 'hamburguesas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
`id_cliente` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `numero` varchar(8) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `existencias`
--

CREATE TABLE IF NOT EXISTS `existencias` (
`id_existencia` int(11) NOT NULL,
  `id_insumo` int(11) NOT NULL,
  `existencia` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `existencias`
--

INSERT INTO `existencias` (`id_existencia`, `id_insumo`, `existencia`) VALUES
(1, 1, 5.00),
(4, 3, 4.50),
(5, 4, 4.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumos`
--

CREATE TABLE IF NOT EXISTS `insumos` (
`id_insumo` int(11) NOT NULL,
  `insumo` varchar(100) NOT NULL,
  `id_unidad` varchar(10) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `insumos`
--

INSERT INTO `insumos` (`id_insumo`, `insumo`, `id_unidad`, `descripcion`) VALUES
(2, 'Refresco', '2', '2LT'),
(3, 'lechuga', '1', 'fresca'),
(9, 'carne', '1', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
`id` int(11) NOT NULL,
  `id_insumo` int(11) NOT NULL,
  `id_movimiento` int(100) NOT NULL,
  `cantidad` decimal(10,2) NOT NULL,
  `fecha_movimiento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `id_insumo`, `id_movimiento`, `cantidad`, `fecha_movimiento`) VALUES
(2, 4, 2, 44.00, '2016-11-13 19:24:26'),
(3, 5, 9, 10.23, '2016-11-13 19:26:40'),
(4, 0, 1, 0.00, '2016-11-17 04:02:44'),
(5, 0, 1, 0.00, '2016-11-17 04:03:50'),
(6, 1, 1, 2.00, '2016-11-17 04:08:55'),
(7, 1, 1, 2.00, '2016-11-17 04:10:57'),
(8, 1, 1, 2.00, '2016-11-17 04:18:32'),
(9, 1, 1, 2.00, '2016-11-17 04:21:05'),
(10, 1, 1, 2.00, '2016-11-17 04:23:09'),
(11, 3, 1, 10.00, '2016-11-17 04:23:28'),
(12, 3, 1, 1.00, '2016-11-17 04:33:45'),
(13, 1, 1, 1.00, '2016-11-17 04:44:29'),
(14, 4, 1, 4.00, '2016-11-17 04:45:00'),
(15, 1, 1, 1.00, '2016-11-17 04:45:55'),
(16, 1, 1, 1.00, '2016-11-17 04:47:00'),
(17, 1, 1, 1.00, '2016-11-17 04:47:11'),
(18, 0, 2, 0.00, '2016-11-17 05:00:35'),
(19, 0, 2, 0.00, '2016-11-17 05:01:03'),
(20, 1, 2, 2.00, '2016-11-17 05:03:49'),
(21, 1, 2, 6.00, '2016-11-17 05:04:08'),
(22, 3, 2, 30.00, '2016-11-17 05:12:30'),
(23, 1, 2, 2.00, '2016-11-17 05:15:12'),
(24, 1, 2, 3.00, '2016-11-17 05:15:31'),
(25, 3, 2, 1.50, '2016-11-17 05:16:05'),
(26, 1, 1, 5.00, '2016-11-17 06:49:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

CREATE TABLE IF NOT EXISTS `mesas` (
`id_mesa` int(11) NOT NULL,
  `mesa` varchar(100) NOT NULL,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mesas`
--

INSERT INTO `mesas` (`id_mesa`, `mesa`, `estado`) VALUES
(1, 'mesa 1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE IF NOT EXISTS `movimientos` (
`id` int(11) NOT NULL,
  `movimiento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
`id_pedido` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_mesa` int(11) NOT NULL,
  `id_plato` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
`id_persona` int(11) NOT NULL,
  `persona` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `persona`) VALUES
(1, 'V'),
(2, 'E'),
(3, 'J');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE IF NOT EXISTS `platos` (
`id_plato` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `plato` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `platos`
--

INSERT INTO `platos` (`id_plato`, `id_categoria`, `plato`, `precio`) VALUES
(1, 1, 'Hamburguesa de carne', 2500.00),
(4, 1, 'Hamburguesa de Pollo', 3000.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE IF NOT EXISTS `unidades` (
`id_unidad` int(11) NOT NULL,
  `unidad` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`id_unidad`, `unidad`) VALUES
(1, 'KG'),
(2, 'LT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id_usuario` int(11) NOT NULL,
  `cedula` varchar(8) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(8) NOT NULL,
  `nivel` int(2) NOT NULL,
  `activo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
 ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`id_cliente`), ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `existencias`
--
ALTER TABLE `existencias`
 ADD PRIMARY KEY (`id_existencia`), ADD KEY `id_insumo` (`id_insumo`);

--
-- Indices de la tabla `insumos`
--
ALTER TABLE `insumos`
 ADD PRIMARY KEY (`id_insumo`), ADD KEY `id_unidad` (`id_unidad`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
 ADD PRIMARY KEY (`id`), ADD KEY `id_insumo` (`id_insumo`,`id_movimiento`);

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
 ADD PRIMARY KEY (`id_mesa`);

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
 ADD PRIMARY KEY (`id_pedido`), ADD KEY `id_cliente` (`id_cliente`,`id_mesa`,`id_plato`), ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
 ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `platos`
--
ALTER TABLE `platos`
 ADD PRIMARY KEY (`id_plato`), ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `unidades`
--
ALTER TABLE `unidades`
 ADD PRIMARY KEY (`id_unidad`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id_usuario`), ADD UNIQUE KEY `cedula` (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `existencias`
--
ALTER TABLE `existencias`
MODIFY `id_existencia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `insumos`
--
ALTER TABLE `insumos`
MODIFY `id_insumo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `mesas`
--
ALTER TABLE `mesas`
MODIFY `id_mesa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `platos`
--
ALTER TABLE `platos`
MODIFY `id_plato` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `unidades`
--
ALTER TABLE `unidades`
MODIFY `id_unidad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
