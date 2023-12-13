-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-12-2023 a las 18:18:02
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
-- Base de datos: `integrador_cac`
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `timestamp_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_type` varchar(20) DEFAULT 'user',
  `user_validate` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `email`, `password_hash`, `nombre`, `apellido`, `fecha_nacimiento`, `timestamp_registro`, `user_type`, `user_validate`) VALUES
(1, 'keshishian.marcos@gmail.com', '$2y$10$NdVSNr.aAW7fkonwA6X2BO7x.Wp36syeARIoofqsAY9gg/adJOx0i', 'Marcos', 'Keshi', '1987-12-12', '2023-12-08 23:40:03', 'user', 1),
(2, 'd@a', '$2y$10$ZU8uBcTyOv/TwIU5fv.DReOT6SeFRWlD6IIPo7CdvxvM38oRZ8.OO', 'a', 'a', '2023-12-09', '2023-12-08 23:41:23', 'user', 0),
(3, 'marcos@gmail.com', '$2y$10$xrVXldTREYxV.6puHP5NXOOEudVhuZTXfNXBpKg.tTpiZLuK4Ou7.', 'Mar', 'Cos', '1987-12-12', '2023-12-09 00:03:42', 'user', 0),
(4, 'kechi99@gmail.com', '$2y$10$mGPc.ub3g/30Np6R2fL03eYAHblte4LWS0xvIuTZ.DvNTMbhCclei', 'Rata', 'Tuille', '1999-11-11', '2023-12-09 14:44:36', 'user', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oradores`
--
ALTER TABLE `oradores`
  ADD PRIMARY KEY (`id_orador`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oradores`
--
ALTER TABLE `oradores`
  MODIFY `id_orador` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
