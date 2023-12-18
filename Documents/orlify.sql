-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2023 a las 16:20:16
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
(1, '2 DAW', '2021/2022', 4),
(3, '4 ESO', '2023/2024', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupuser`
--

CREATE TABLE `grupuser` (
  `idUser` int(11) NOT NULL,
  `idGrup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grupuser`
--

INSERT INTO `grupuser` (`idUser`, `idGrup`) VALUES
(9, 1),
(43, 1),
(44, 1),
(45, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imgs`
--

CREATE TABLE `imgs` (
  `idImg` int(11) NOT NULL,
  `url` varchar(150) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idOrla` int(11) NOT NULL,
  `Selecionada` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imgs`
--

INSERT INTO `imgs` (`idImg`, `url`, `idUser`, `idOrla`, `Selecionada`) VALUES
(2, '\\usersimg\\2\\orla\\avatar.jpg', 9, 2, 0),
(58, './usersimg/1/orla/4.jpg', 1, 2, 0),
(59, './usersimg/1/orla/5.jpg', 1, 2, 1),
(61, './usersimg/1/orla/5.png', 1, 2, 0),
(62, './usersimg/1/orla/6.png', 1, 2, 0),
(63, './usersimg/1/orla/7.png', 1, 2, 0),
(64, './usersimg/9/orla/3.jpg', 9, 2, 1),
(65, './usersimg/43/orla/0.jpg', 43, 2, 1),
(66, './usersimg/44/orla/0.jpg', 44, 2, 1),
(67, './usersimg/45/orla/0.jpg', 45, 2, 1);

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

--
-- Volcado de datos para la tabla `orla`
--

INSERT INTO `orla` (`idOrla`, `name`, `keyOrla`, `public`, `idGrup`, `idPlantilla`) VALUES
(2, 'Orla 2021/2022 Rico Pato', '123', 1, 1, 2),
(5, 'Orla de prova amb plantilla 1', '123456', 1, 3, 1);

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
  `avatar` varchar(150) NOT NULL,
  `rol` varchar(150) NOT NULL,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`idUser`, `username`, `name`, `lastname`, `password`, `email`, `avatar`, `rol`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(1, 'prova', 'prova', 'prova', '$2y$12$rGbqwuvOQLowOTsQSX.WBuwPalhSW/.mH4Y8qwM4TpFVLq2SjHv2G', 'prova@gmail.com', './usersimg/1/avatar.png', 'administrador', NULL, NULL),
(4, 'RPato', 'Rico', 'MacPato', '$2y$12$rGbqwuvOQLowOTsQSX.WBuwPalhSW/.mH4Y8qwM4TpFVLq2SjHv2G', 'larauz@cendrassos.net', './usersimg/4/avatar.jpg', 'professor', 'dc77293a87a1dd6aacc5873b8acc4704a053d8840b40d8c2d8312497be8880fe', '2023-12-14 15:46:59'),
(9, 'MB', 'Mr', 'Boombastic', '$2y$12$rGbqwuvOQLowOTsQSX.WBuwPalhSW/.mH4Y8qwM4TpFVLq2SjHv2G', 'MB@is.com', './usersimg/9/avatar.jpg', 'alumne', NULL, NULL),
(43, 'beautifulzebra538', 'Gregory', 'Ellis', '$2y$12$rGbqwuvOQLowOTsQSX.WBuwPalhSW/.mH4Y8qwM4TpFVLq2SjHv2G', 'gregory.ellis@example.com', '', 'alumne', NULL, NULL),
(44, 'whitefish644', 'Deborah', 'Washington', '$2y$12$rGbqwuvOQLowOTsQSX.WBuwPalhSW/.mH4Y8qwM4TpFVLq2SjHv2G', 'deborah.washington@example.com', '', 'alumne', NULL, NULL),
(45, 'crazyladybug756', 'Kate', 'Taylor', '$2y$12$rGbqwuvOQLowOTsQSX.WBuwPalhSW/.mH4Y8qwM4TpFVLq2SjHv2G', 'kate.taylor@example.com', '', 'alumne', NULL, NULL);

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
  MODIFY `idGrup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de la tabla `imgs`
--
ALTER TABLE `imgs`
  MODIFY `idImg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `orla`
--
ALTER TABLE `orla`
  MODIFY `idOrla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  MODIFY `idPlantilla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
