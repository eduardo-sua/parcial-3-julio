-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2024 a las 21:51:03
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `papeleria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `papeleria`
--

CREATE TABLE `papeleria` (
  `id` int(11) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `papeleria`
--

INSERT INTO `papeleria` (`id`, `producto`, `categoria`, `precio`, `cantidad`) VALUES
(1, 'Lapiz ', 'Útiles Escolares', 5.00, 100),
(2, 'Cuaderno Profesional', 'Libretas', 30.00, 50),
(3, 'Borrador', 'Utiles escolares', 3.00, 200),
(4, 'Resaltador Amarillo', 'Útiles Escolares', 15.00, 80),
(5, 'Regla de 30 cm', 'Instrumentos de medicion', 20.00, 40),
(6, 'Marcadores de Colores', 'Arte y diseno', 120.00, 25),
(7, 'Hojas Blancas (paquete)', 'Papeleria general', 50.00, 60),
(8, 'Plumones para pizarron', 'Útiles Escolares', 25.00, 70),
(9, 'Carpeta de Anillos', 'Organizacion', 45.00, 30),
(10, 'Tijeras Escolares', 'Útiles Escolares', 20.00, 90);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `papeleria`
--
ALTER TABLE `papeleria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `papeleria`
--
ALTER TABLE `papeleria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
