-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-12-2023 a las 18:31:46
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
-- Base de datos: `integradorcac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oradores`
--

CREATE TABLE `oradores` (
  `id_orador` tinyint(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `tema` varchar(50) NOT NULL,
  `descripcion_tema` longtext NOT NULL,
  `foto` varchar(100) NOT NULL,
  `aproved` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `oradores`
--

INSERT INTO `oradores` (`id_orador`, `nombre`, `apellido`, `tema`, `descripcion_tema`, `foto`, `aproved`) VALUES
(7, 'Marcos', 'Gomez', 'Quimica', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, quaerat, nam provident praesentium assumenda ullam quia quae nesciunt aut perferendis nulla recusandae sunt odit blanditiis fugit placeat quo ad repudiandae.', '6571fe06ca9c70.03320390.jpeg', 1),
(8, 'Macarena', 'Meyer', 'El imputado', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, quaerat, nam provident praesentium assumenda ullam quia quae nesciunt aut perferendis nulla recusandae sunt odit blanditiis fugit placeat quo ad repudiandae.', '65725ea134c0a9.00691734.jpeg', 1),
(9, 'Marcos', 'Keshi', 'Boca Juniors', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, quaerat, nam provident praesentium assumenda ullam quia quae nesciunt aut perferendis nulla recusandae sunt odit blanditiis fugit placeat quo ad repudiandae.', '657260152c1089.69707757.jpeg', 1),
(10, 'Anton', 'Meyer', 'El superviviente', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, quaerat, nam provident praesentium assumenda ullam quia quae nesciunt aut perferendis nulla recusandae sunt odit blanditiis fugit placeat quo ad repudiandae.', '65726050296243.24003499.jpeg', 1),
(11, 'Ana', 'Donda', 'La vida después de la muerte', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, quaerat, nam provident praesentium assumenda ullam quia quae nesciunt aut perferendis nulla recusandae sunt odit blanditiis fugit placeat quo ad repudiandae.', '65734453dccb21.14659333.jpeg', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oradores`
--
ALTER TABLE `oradores`
  ADD PRIMARY KEY (`id_orador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oradores`
--
ALTER TABLE `oradores`
  MODIFY `id_orador` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
