-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-11-2022 a las 01:30:30
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `spending_tracker`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Cantidad` float(8,2) NOT NULL,
  `Categoria` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`ID`, `Cantidad`, `Categoria`, `fecha`, `descripcion`) VALUES
(4, 134.00, 4, '2022-10-24 20:13:14', 'cine'),
(6, 45.00, 5, '2022-10-31 22:28:28', 'antro'),
(8, 34.00, 5, '2022-11-03 17:01:35', 'garnacha'),
(10, 45.00, 3, '2022-11-07 14:06:01', 'flaiuta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos_categoria`
--

CREATE TABLE `gastos_categoria` (
  `ID` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gastos_categoria`
--

INSERT INTO `gastos_categoria` (`ID`, `nombre`) VALUES
(1, 'sin categoria'),
(2, 'viaticos'),
(3, 'despensa'),
(4, 'gastos fijos'),
(5, 'diversion'),
(6, 'transporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `correo` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `telefono` varchar(15) NOT NULL DEFAULT '',
  `nombre` varchar(100) NOT NULL DEFAULT '',
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `password`, `telefono`, `nombre`, `status`) VALUES
(1, 'andrikadrian@outlook.com', '123123', '1231231', 'andrik', 1),
(2, 'andrikadrian@outlook.es', '121212', '9984604069', 'joseluis', 1),
(3, 'pepito12@outlook.com', 'pepino12', '9984604069', 'pepinaso', 1),
(4, 'andrik33@outlook.com', '1223', '9985342434', 'lolito', 1),
(5, 'andrikfuego200@gmail.com', '13131', '9984604078', 'lolitott', 1),
(7, '00676185@red.unid.mx', '1234', '1234567', 'kev', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_status`
--

CREATE TABLE `usuarios_status` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_status`
--

INSERT INTO `usuarios_status` (`id`, `nombre`) VALUES
(0, 'desactivado'),
(1, 'activado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `gastos_categoria`
--
ALTER TABLE `gastos_categoria`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_status`
--
ALTER TABLE `usuarios_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `gastos_categoria`
--
ALTER TABLE `gastos_categoria`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
