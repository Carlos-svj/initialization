-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-01-2021 a las 03:43:59
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_personal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombres`, `email`, `fecha`) VALUES
(1, 'jiten', 'Jiten singh	', 'jiten93@gmail.com', '2021-01-23 02:15:01'),
(2, 'kuldeep', 'Kuldeep', 'kuldeep@gmail.com', '2021-01-23 02:15:01'),
(3, 'mayank', 'Mayank', 'mayank@yahoo.com', '2021-01-23 02:15:01'),
(4, 'dcarpio', 'Daniel carpio', 'ysdeerh@gmail.com', '2021-01-23 02:15:01'),
(5, 'vijay', 'Vijay', 'vijayec@gmai.com', '2021-01-23 02:15:01'),
(6, 'nitin', 'Nitin', 'nitin@gmail.com', '2021-01-23 02:15:01'),
(7, 'rahul', 'Rahul singh', 'rahul@gmail.com', '2021-01-23 02:15:01'),
(8, 'shreya', 'Shreya', 'shreya@yahoo.com', '2021-01-23 02:15:01'),
(9, 'mohit', 'Mohit', 'mohit@gmail.com', '2021-01-23 02:15:01'),
(10, 'rohit', 'Rohit singh', 'rohit@gmail.com', '2021-01-23 02:15:01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
