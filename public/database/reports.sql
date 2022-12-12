-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2022 a las 16:16:13
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stellarcommander`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `spaceship` varchar(30) NOT NULL,
  `commander` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `sector` varchar(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reports`
--

INSERT INTO `reports` (`id`, `spaceship`, `commander`, `message`, `sector`, `date`) VALUES
(3, 'SSV Normandy', 'Commander Shepard', 'Life has been purged', 'Hawking Eta', '2022-11-29'),
(4, 'Sputnik 2', 'Laika the Dog', 'Woof woof; ruff ruff; arf arf; bow wow.\r\n(Barking from the space)', 'Earth orbit', '2022-11-29'),
(15, 'Millennium  Falcon', 'Rey Skywalker', 'c3po', 'Jakku', '2022-12-12'),
(16, 'Nostromo', 'LTE. Ripley', 'Alien found on board', 'Planet LV-426', '2022-12-12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
