-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-12-2023 a las 14:53:25
-- Versión del servidor: 10.6.12-MariaDB-0ubuntu0.22.04.1
-- Versión de PHP: 8.1.2-1ubuntu2.14

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
  `idOrla` int(11) NOT NULL,
  `Selecionada` int(1) NOT NULL,
  `Informada` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orla`
--

CREATE TABLE `orla` (
  `idOrla` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `keyOrla` varchar(150) NOT NULL,
  `public` int(1) NOT NULL DEFAULT 0,
  `idGrup` int(11) NOT NULL,
  `idPlantilla` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantilla`
--

CREATE TABLE `plantilla` (
  `idPlantilla` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `url` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `plantilla`
--

INSERT INTO `plantilla` (`idPlantilla`, `name`, `url`) VALUES
(1, 'Plantilla Fondo Rojo', 'plantilla1.php'),
(2, 'Plantilla Fondo Amarillo', 'plantilla2.php');

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
  `avatar` varchar(150) NOT NULL DEFAULT './usersimg/default.png',
  `rol` varchar(150) NOT NULL,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`idUser`, `username`, `name`, `lastname`, `password`, `email`, `avatar`, `rol`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(1, 'prova', 'prova', 'prova', '$2y$12$rGbqwuvOQLowOTsQSX.WBuwPalhSW/.mH4Y8qwM4TpFVLq2SjHv2G', 'prova@gmail.com', './usersimg/1/avatar.png', 'administrador', NULL, NULL),
(46, 'user1', 'user1', 'user1', '$2y$12$g5JKeNDmqK4VU0Glu.G2JeD2JPe7oGVu9RmpTa13qQTXT2hoqG4CG', 'user1@gmail.com', './usersimg/default.png', 'alumne', NULL, NULL),
(47, 'user1', 'user1', 'user1', '$2y$12$vHRna3LDRQ0G2wFmV/Z/h.f2eXtaJPE3P.x3ueh9GH59Tpneit9Qu', 'user1@gmail.com', './usersimg/default.png', 'alumne', NULL, NULL);

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
  MODIFY `idPlantilla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
