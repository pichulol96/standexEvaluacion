-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2021 a las 10:45:11
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `evaluacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(15) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `tarjeta` varchar(20) NOT NULL,
  `canal` varchar(300) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `fecha_nacimiento`, `tarjeta`, `canal`, `updated_at`, `created_at`) VALUES
(13, 'marco', '1996-10-12', '7280751075173455', 'http://youtube.com', '2021-07-09 13:07:00', NULL),
(14, 'jesus', '1996-12-14', '3480751075173455', 'http://youtube.com', '2021-07-09 07:15:31', NULL),
(15, 'jesus', '1996-12-14', '3480751075173455', 'http://youtube.com', '2021-07-09 07:15:46', NULL),
(16, 'adrian', '1996-11-14', '7480751075173455', 'http://youtube.com', '2021-07-09 07:18:07', NULL),
(17, 'Perla', '1996-09-17', '9480751075173455', 'http://youtube.com', '2021-07-09 07:18:07', NULL),
(18, 'adriana', '1997-12-14', '5480751075173455', 'http://youtube.com', '2021-07-09 07:18:07', NULL),
(19, 'karime', '1996-12-14', '3480751075173455', 'http://youtube.com', '2021-07-09 07:18:07', NULL),
(20, 'pedro', '1998-12-14', '6480751075173455', 'http://youtube.com', '2021-07-09 07:18:07', NULL),
(21, 'samuel', '1999-12-13', '9480751075173455', 'http://youtube.com', '2021-07-09 07:18:07', NULL),
(22, 'patricia', '1996-12-18', '2480751075173455', 'http://youtube.com', '2021-07-09 07:18:07', NULL),
(23, 'joseph', '1998-12-14', '7480751075173455', 'http://youtube.com', '2021-07-09 07:18:07', NULL),
(24, 'felipe', '1996-12-14', '2480751075173455', 'http://youtube.com', '2021-07-09 07:18:07', NULL),
(25, 'carlos', '1997-12-14', '1480751075173455', 'http://youtube.com', '2021-07-09 07:18:08', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
