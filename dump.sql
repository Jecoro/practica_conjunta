-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2021 a las 19:18:46
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_conjunta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `id` int(4) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `modelo` varchar(60) NOT NULL,
  `puertas` int(4) NOT NULL,
  `combustible` tinyint(1) NOT NULL,
  `ordenador` tinyint(1) NOT NULL,
  `cilindradas` int(4) NOT NULL,
  `elevalunas` tinyint(1) NOT NULL,
  `cierre_centralizado` tinyint(1) NOT NULL,
  `matriculacion` date NOT NULL,
  `pintura_metalizada` tinyint(1) NOT NULL,
  `color` varchar(30) NOT NULL,
  `automatico` tinyint(1) NOT NULL,
  `precio` float NOT NULL,
  `km_cero` tinyint(1) NOT NULL,
  `path_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`id`, `marca`, `modelo`, `puertas`, `combustible`, `ordenador`, `cilindradas`, `elevalunas`, `cierre_centralizado`, `matriculacion`, `pintura_metalizada`, `color`, `automatico`, `precio`, `km_cero`, `path_foto`) VALUES
(1234, 'ford', 'dodo', 3, 1, 1, 123, 1, 1, '1999-12-12', 0, 'verde', 0, 4.7, 0, 'el rafita'),
(2, 'mercedes', 'q7', 3, 0, 0, 3000, 1, 1, '2020-12-23', 1, 'blanquiverde', 0, 17700, 0, 'hrmotor.com/media/coches/u7ngswvh6er93p1t7l7npqetknbvyyx6vgevyvq-ampoid00d2x000000t2v2uai-910x682.jp');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
