-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2023 a las 15:39:04
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
-- Base de datos: `orlify`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grup`
--

CREATE TABLE `grup` (
  `idGrup` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `curs` varchar(150) NOT NULL,
  `idTeacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupuser`
--

CREATE TABLE `grupuser` (
  `idUser` int(11) NOT NULL,
  `idGrup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imgs`
--

CREATE TABLE `imgs` (
  `idImg` int(11) NOT NULL,
  `url` varchar(150) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idOrla` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orla`
--

CREATE TABLE `orla` (
  `idOrla` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `idGrup` int(11) NOT NULL,
  `idPlantilla` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantilla`
--

CREATE TABLE `plantilla` (
  `idPlantilla` int(11) NOT NULL,
  `url` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `avatar` varchar(150) NOT NULL,
  `rol` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`idUser`, `username`, `name`, `lastname`, `password`, `email`, `avatar`, `rol`) VALUES
(1, 'prova', 'prova', 'prova', '123', 'prova@gmail.com', 'prova', 'prova');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `grup`
--
ALTER TABLE `grup`
  ADD PRIMARY KEY (`idGrup`),
  ADD KEY `grup-teacher` (`idTeacher`);

--
-- Indices de la tabla `grupuser`
--
ALTER TABLE `grupuser`
  ADD KEY `iduser` (`idUser`),
  ADD KEY `idgrup` (`idGrup`);

--
-- Indices de la tabla `imgs`
--
ALTER TABLE `imgs`
  ADD PRIMARY KEY (`idImg`),
  ADD KEY `user-img` (`idUser`),
  ADD KEY `orla-img` (`idOrla`);

--
-- Indices de la tabla `orla`
--
ALTER TABLE `orla`
  ADD PRIMARY KEY (`idOrla`),
  ADD KEY `grup-orla` (`idGrup`),
  ADD KEY `plantilla-orla` (`idPlantilla`);

--
-- Indices de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  ADD PRIMARY KEY (`idPlantilla`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grup`
--
ALTER TABLE `grup`
  MODIFY `idGrup` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imgs`
--
ALTER TABLE `imgs`
  MODIFY `idImg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orla`
--
ALTER TABLE `orla`
  MODIFY `idOrla` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  MODIFY `idPlantilla` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `grup`
--
ALTER TABLE `grup`
  ADD CONSTRAINT `grup-teacher` FOREIGN KEY (`idTeacher`) REFERENCES `users` (`idUser`);

--
-- Filtros para la tabla `grupuser`
--
ALTER TABLE `grupuser`
  ADD CONSTRAINT `idgrup` FOREIGN KEY (`idGrup`) REFERENCES `grup` (`idGrup`),
  ADD CONSTRAINT `iduser` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Filtros para la tabla `imgs`
--
ALTER TABLE `imgs`
  ADD CONSTRAINT `orla-img` FOREIGN KEY (`idOrla`) REFERENCES `orla` (`idOrla`),
  ADD CONSTRAINT `user-img` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Filtros para la tabla `orla`
--
ALTER TABLE `orla`
  ADD CONSTRAINT `grup-orla` FOREIGN KEY (`idGrup`) REFERENCES `grup` (`idGrup`),
  ADD CONSTRAINT `plantilla-orla` FOREIGN KEY (`idPlantilla`) REFERENCES `plantilla` (`idPlantilla`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
