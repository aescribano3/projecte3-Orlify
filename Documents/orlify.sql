-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2023 a las 16:25:25
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

--
-- Volcado de datos para la tabla `grup`
--

INSERT INTO `grup` (`idGrup`, `name`, `curs`, `idTeacher`) VALUES
(1, '4 ESO', '2023/2024', 10),
(2, '2 DAW', '2023/2024', 4),
(3, '2 SMX', '2022/2023', 1),
(5, '2 AFI', '2023/2024', 1),
(6, '2 AFI', '2022/2023', 1),
(7, '2 DAW', '2023/2024', 1),
(8, '4 ESO', '2023/2024', 10),
(9, '2 SMX', '2023/2024', 10),
(10, '2 SMX', '2023/2024', 10),
(11, '2 DAW', '2023/2024', 10),
(13, '4 ESO', '2023/2024', 10),
(14, '4 ESO', '2022/2023', 10);

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

--
-- Volcado de datos para la tabla `orla`
--

INSERT INTO `orla` (`idOrla`, `name`, `idGrup`, `idPlantilla`) VALUES
(7, 'waquitipasa', 14, 1),
(8, 'Alex', 1, 1),
(9, 'Luis', 1, 1),
(10, 'Prova', 1, 1),
(11, 'prova2', 2, 1),
(12, 'Prova3', 1, 1),
(13, 'Prova4', 1, 1),
(14, 'Prova5', 1, 1),
(15, 'Prova6', 1, 1),
(16, 'prova7', 1, 1),
(17, 'Prova8', 1, 1),
(18, 'Prova9', 1, 1),
(19, 'Prova10', 1, 1),
(20, 'defwte5', 1, 1),
(21, 'Amine', 1, 1),
(22, 'Prova 11', 1, 1),
(23, 'Prova 12', 1, 1),
(24, 'Prova 13', 1, 1),
(25, 'PROVA14', 2, 1),
(26, 'dfewr', 2, 1),
(27, 'dfewr', 2, 1),
(28, 'dfewr', 2, 1),
(30, 'fgrht', 2, 1),
(34, 'amineProva', 1, 1),
(36, 'Prova2Amine', 1, 1),
(38, 'fgrth65', 1, 1),
(40, 'casfewgre', 1, 1),
(41, 'fdgffghfhtf', 1, 1),
(42, 'fdgffghfhtf', 1, 1),
(45, 'fdsgrehtj65j67k', 2, 1),
(46, 'csfegreh65', 1, 1),
(47, 'fegrhtj67k8l98', 1, 1),
(49, 'fegrhtj67k8l98', 1, 1),
(51, 'fegrhtj67k8l98g', 1, 1),
(52, 'cfgretrh', 1, 1),
(56, 'dfewmgo54ih5mhko5t', 1, 1),
(58, 'demgrekh4 65ko', 1, 1),
(60, 'kvdmdrionbriunbm', 1, 1),
(64, 'ññññññ', 1, 1),
(65, 'ññññññcsrge', 2, 1),
(67, 'SDFEWG43', 1, 1),
(69, 'aminfewgjh4nbor', 1, 1),
(70, '34t54hj', 1, 1),
(72, 'af43', 1, 1),
(75, 'sdgreh', 1, 1),
(76, 'sagreh', 1, 1),
(78, 'cafevr5h', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantilla`
--

CREATE TABLE `plantilla` (
  `idPlantilla` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `url` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `plantilla`
--

INSERT INTO `plantilla` (`idPlantilla`, `name`, `url`) VALUES
(1, 'Plantilla 1', 'https://www.orlaonline.es/files/plantillas/web/ORLA-2_web.jpg?70');

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
  `rol` varchar(150) NOT NULL,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`idUser`, `username`, `name`, `lastname`, `password`, `email`, `avatar`, `rol`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(1, 'prova', 'prova', 'prova', '123', 'prova@gmail.com', 'prova', 'prova', NULL, NULL),
(4, 'profeamine', 'Amine', 'Ryouch', '$2y$12$M9.tP0j11VCADgfR3Q5Z/uK3ssVdRR7OAhwUE.wkVsza4/S.RIvGO', 'aminery@gmail.com', './usersimg/3/avatar.png', 'profesor', NULL, NULL),
(10, 'profesoramine', 'Amine', 'Ryouch', '$2y$12$DKVkPBxmodq.NMmcFj/WXuolafcsh952nAQnktNy1LQYibt1Q1aRO', 'amineryouch@gmail.com', '', 'professor', '38d23e9c4a47e178b7987ac04e6166767d1e5f9330f8945acf8b3c8f90506b7c', '2023-12-12 19:00:02'),
(14, 'amineBest5', 'Amine', 'Ryouch', '$2y$12$30RWmmR/QcjW6UUii46WMOvnha6mS3xgubqV3b/iL2YtE3VlnZWua', 'amineryouch868@gmail.com', './usersimg/14/avatar.jpg', 'alumne', 'bce26e96532669dbd60bdea4001cd803a97d078f22fb6e0de854f5318d2cf3e1', '2023-12-13 15:27:03');

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
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grup`
--
ALTER TABLE `grup`
  MODIFY `idGrup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `imgs`
--
ALTER TABLE `imgs`
  MODIFY `idImg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orla`
--
ALTER TABLE `orla`
  MODIFY `idOrla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  MODIFY `idPlantilla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
