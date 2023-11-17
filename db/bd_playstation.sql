-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2023 a las 18:45:00
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_playstation`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(10) NOT NULL,
  `nom_cliente` varchar(100) NOT NULL,
  `tipo_tarjeta` varchar(100) NOT NULL,
  `pago` decimal(10,2) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `ciudad` varchar(200) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `num_exterior` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nom_cliente`, `tipo_tarjeta`, `pago`, `calle`, `ciudad`, `pais`, `num_exterior`) VALUES
(1, 'Edgar Meraz', 'HSBC', '399.00', 'Uva', 'Ciudad Juarez', 'Mexico', 6542),
(2, 'Isaac Chavez', 'PayPal', '499.00', 'pradera del angel ', 'Ciudad Juarez', 'Mexico', 7654);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(10) NOT NULL,
  `id_producto` int(10) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `repartidor` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `num_envio` int(10) NOT NULL,
  `gmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `id_producto`, `id_cliente`, `fecha_entrega`, `repartidor`, `telefono`, `num_envio`, `gmail`) VALUES
(1, 2, 1, '2023-11-29', 'TRES GUERRAS', '656 432 6534', 963, 'asdf@gmail.com'),
(2, 2, 2, '2023-11-30', 'TRES GUERRAS', '656 737 6346', 654, 'tresguerras@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(10) NOT NULL,
  `nom_producto` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `desarolladora` varchar(100) NOT NULL,
  `fecha_salida` date NOT NULL,
  `edi_fisicas` int(10) NOT NULL,
  `tip_prod` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nom_producto`, `descripcion`, `desarolladora`, `fecha_salida`, `edi_fisicas`, `tip_prod`, `precio`) VALUES
(1, 'Bloodborne', 'Juego souls de horror cosmico', 'FromSoftware', '2016-11-17', 0, 'JUEGO DIGITAL', '399.00'),
(2, 'Mando Playstation 5', 'mando ligero de color blanco', 'Sony', '2023-11-16', 754, 'Mando ', '499.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
