-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2023 a las 16:48:44
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
(1, '4 ESO', '2022/2023', 1),
(2, '4 ESO', '2023/2024', 1),
(3, '4 ESO', '2023/2024', 1),
(4, '4 ESO', '2023/2024', 1),
(5, '4 ESO', '2023/2024', 1),
(6, '4 ESO', '2023/2024', 2),
(7, '4 ESO', '2023/2024', 2),
(8, '4 ESO', '2023/2024', 2),
(9, '2 SMX', '2022/2023', 3),
(10, '2 DAW', '2022/2023', 3),
(11, '2 DAW', '2022/2023', 3),
(12, '2 DAW', '2022/2023', 3),
(13, '2 DAW', '2022/2023', 1),
(14, '4 ESO', '2023/2024', 1),
(15, '4 ESO', '2022/2023', 1),
(16, '4 ESO', '2022/2023', 1),
(17, '4 ESO', '2022/2023', 1),
(18, '4 ESO', '2021/2022', 1),
(19, '4 ESO', '2021/2022', 1),
(20, '4 ESO', '2023/2024', 1),
(21, '4 ESO', '2023/2024', 3),
(22, '4 ESO', '2022/2023', 1),
(23, '4 ESO', '2020/2021', 1),
(24, '4 ESO', '2020/2021', 1),
(25, '4 ESO', '2023/2024', 1),
(26, '4 ESO', '2023/2024', 1),
(27, '4 ESO', '2023/2024', 1),
(28, '4 ESO', '2021/2022', 1),
(29, '4 ESO', '2023/2024', 1),
(30, '2 SMX', '2023/2024', 1),
(31, '2 AFI', '2023/2024', 1),
(32, '4 ESO', '2023/2024', 1),
(33, '4 ESO', '2021/2022', 1),
(34, '4 ESO', '2021/2022', 1),
(35, '4 ESO', '2023/2024', 1),
(36, '4 ESO', '2023/2024', 1),
(37, '4 ESO', '2023/2024', 1),
(38, '4 ESO', '2022/2023', 1),
(39, '4 ESO', '2021/2022', 1),
(40, '4 ESO', '2020/2021', 1),
(41, '4 ESO', '2023/2024', 1),
(42, '4 ESO', '2023/2024', 1),
(43, '4 ESO', '2023/2024', 1),
(44, '4 ESO', '2023/2024', 1),
(45, '4 ESO', '2023/2024', 1),
(46, '4 ESO', '2020/2021', 1),
(47, '4 ESO', '2023/2024', 1),
(48, '4 ESO', '2023/2024', 1),
(49, '4 ESO', '2021/2022', 1),
(50, '4 ESO', '2023/2024', 1),
(51, '4 ESO', '2023/2024', 1),
(52, '4 ESO', '2021/2022', 1),
(53, '4 ESO', '2023/2024', 1),
(54, '4 ESO', '2021/2022', 1),
(55, '4 ESO', '2023/2024', 1),
(56, '4 ESO', '2023/2024', 1),
(57, '4 ESO', '2022/2023', 1),
(58, '4 ESO', '2022/2023', 1),
(59, '4 ESO', '2022/2023', 1),
(60, '4 ESO', '2022/2023', 1),
(61, '4 ESO', '2022/2023', 1),
(62, '4 ESO', '2022/2023', 1),
(63, '4 ESO', '2023/2024', 1),
(64, '4 ESO', '2023/2024', 1),
(65, '4 ESO', '2023/2024', 1),
(66, '4 ESO', '2020/2021', 1),
(67, '4 ESO', '2020/2021', 3),
(68, '4 ESO', '2023/2024', 1),
(69, '4 ESO', '2022/2023', 1),
(70, '4 ESO', '2020/2021', 1),
(71, '2 SMX', '2023/2024', 1),
(72, '4 ESO', '2023/2024', 1),
(73, '4 ESO', '2021/2022', 1),
(74, '4 ESO', '2023/2024', 1),
(75, '4 ESO', '2022/2023', 1),
(76, '4 ESO', '2020/2021', 1),
(77, '4 ESO', '2023/2024', 1),
(78, '4 ESO', '2023/2024', 1),
(79, '4 ESO', '2023/2024', 1),
(80, '4 ESO', '2023/2024', 1),
(81, '4 ESO', '2023/2024', 1),
(82, '4 ESO', '2023/2024', 1),
(83, '4 ESO', '2023/2024', 1),
(84, '4 ESO', '2023/2024', 1),
(85, '4 ESO', '2023/2024', 1),
(86, '2 SMX', '2021/2022', 3),
(87, '2 SMX', '2021/2022', 3),
(88, '2 SMX', '2021/2022', 3),
(89, '2 SMX', '2021/2022', 3),
(90, '2 SMX', '2021/2022', 3);

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
(1, 1),
(10, 10);

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
(63, './usersimg/1/orla/7.png', 1, 2, 0);

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
(2, 'Pep', 1, 1),
(3, 'Map', 1, 1);

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
(1, '', 'Pep');

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
(1, 'prova', 'prova', 'prova', '$2y$12$rGbqwuvOQLowOTsQSX.WBuwPalhSW/.mH4Y8qwM4TpFVLq2SjHv2G', 'prova@gmail.com', 'prova', 'alumne', NULL, NULL),
(2, 'PepGamer', 'Pep', 'Guardiola', '123', '1@1.com', '', 'alumne', NULL, NULL),
(3, 'PepGamer', 'Pep', 'Guardiola', '123', '1@1.com', '', 'alumne', NULL, NULL),
(4, 'RPato', 'Rico', 'MacPato', '$2y$12$rGbqwuvOQLowOTsQSX.WBuwPalhSW/.mH4Y8qwM4TpFVLq2SjHv2G', 'larauz@cendrassos.net', './usersimg/4/avatar.jpg', 'professor', 'dc77293a87a1dd6aacc5873b8acc4704a053d8840b40d8c2d8312497be8880fe', '2023-12-14 15:46:59'),
(8, 'MR', 'Mariano', 'Rajoy', '123', 'mr@is.com', './usersimg/8/avatar.jpg', 'alumne', NULL, NULL),
(9, 'MB', 'Mr', 'Boombastic', '$2y$12$rGbqwuvOQLowOTsQSX.WBuwPalhSW/.mH4Y8qwM4TpFVLq2SjHv2G', 'MB@is.com', './usersimg/9/avatar.jpg', 'alumne', NULL, NULL),
(10, 'Rajoy2', 'Rajoy', 'M', '$2y$12$iYFEzKjZNRomuJ81K2IaQ.OUL2PdWIW5R3tbz4lb.Girk56ehPrt2', '1@2.com', './usersimg/10/avatar.jpg', 'alumne', NULL, NULL),
(11, 'Nom', 'Usuari', 'Awd', '$2y$12$iivyoBBNKK5n3g9J/kdn5OXLMB.LYWaYSvBEPmqxv1mE4/nHFo/6G', 'K@k.com', './usersimg/11/avatar.jpg', 'alumne', NULL, NULL),
(12, 'MrMaca', 'Maca', 'Rones', '$2y$12$KCX1rVc2M2yAT3.tZ95wBO81RVkQprNTQZcuzf6dzw51uUjYNmxWK', 'mrones@cendrassos.net', './usersimg/12/avatar.jpg', 'alumne', NULL, NULL),
(13, 'AE', 'Alex', 'Escribano', '$2y$12$PFoazn5gCG/4Gz1zH2tlbeNiL/N8Ji.xdmvJGm/.N2qhAauv9Godi', 'alex@e.com', './usersimg/13/avatar.jpg', 'alumne', NULL, NULL),
(15, 'RC', 'Rc', 'rc', '$2y$12$43d7kddjGstUDEuQ6OnPbeOdSmFFYD5XE7HGKwoa5M8wjK7C.7bci', 'pep@v.com', './usersimg/15/avatar.', 'alumne', NULL, NULL),
(16, 'RC2', 'RC2', 'rc', '$2y$12$jZ2aQNq7RltY4tD07tCFZesSn5Q25CU9mfbMcBzjkdB7MRWZ7EvYe', 'pep@v.com', '', 'alumne', NULL, NULL),
(17, 'RC2', 'RC2', 'rc', '$2y$12$C6k29XZlImgtCZN2vT4HAO1aePE9vTeoHvrY0q75jHOZtz5aclQvm', 'pep@v.com', '', 'alumne', NULL, NULL),
(18, 'RC2', 'RC2', 'rc', '$2y$12$U2SrYYwbE/eOxU8/fuMgw.g6AiZwWwEynDAWErKJ6MCAe98skuHGi', 'pep@v.com', '', 'alumne', NULL, NULL),
(19, 'RC2', 'RC2', 'rc', '$2y$12$kqJXefzvhCxnrFLJStihmeimuC5KO9NBM6z7sAKihe9KhNafxcX1y', 'pep@v.com', '', 'alumne', NULL, NULL),
(20, 'RC2', 'RC2', 'rc', '$2y$12$ZMD4bMURJUk60R4UEcgfKuFutT6KlCuKbd42gjcNdrYXbc4UxVyNG', 'pep@v.com', '', 'alumne', NULL, NULL),
(21, 'RC2', 'RC2', 'rc', '$2y$12$jNeAxIRzvNY38jyw/u700.WwTqlmxftvGcjy8dQ.vw68MhRng.qbS', 'pep@v.com', '', 'alumne', NULL, NULL),
(22, 'RC2', 'RC2', 'rc', '$2y$12$nrr6yY3cEl2QIZ3//dyuAe288zVYXlrl1nJr2rY.py.t6RiyQbBDa', 'pep@v.com', '', 'alumne', NULL, NULL),
(23, 'RC2', 'RC2', 'rc', '$2y$12$06Jbcny2ZLUI7Mn9ITXAa.0o7e268DTJPiYzuJjZFZl3uyRA.OORe', 'pep@v.com', '', 'alumne', NULL, NULL),
(24, 'RC2', 'RC2', 'rc', '$2y$12$VINAaS135o0jSP2gpYrhgexRzj4Tlz6VO/j8aWezqkAtalOIJNrsy', 'pep@v.com', '', 'alumne', NULL, NULL),
(25, 'RC2', 'RC2', 'rc', '$2y$12$kN87kQfJHGA/O9GsMGFl8O8x1hwyTiGhcc1Z8zdqmrKAf5L2n6JLy', 'pep@v.com', '', 'alumne', NULL, NULL),
(26, 'RC2', 'RC2', 'rc', '$2y$12$iM5kJu7BM/hL.xyOyk/D5OKvoiwG0zsPLypHBircEgNeyfe9ZPjOW', 'pep@v.com', '', 'alumne', NULL, NULL),
(27, 'RC3', '123', '123', '$2y$12$0scrqpAZyLVcSUMTRMAfZeOuMWo5cYagyYWenQV0fDQpxPjH/56OG', 'pep@v.com', '', 'alumne', NULL, NULL),
(28, 'RC3', '123', '123', '$2y$12$ntwUeIlNyZ9X/kAKNGyX0OzMmBecKKl//OH47KUx.rgUKr4X3HH/S', 'pep@v.com', '', 'alumne', NULL, NULL),
(29, 'Pep', '123', '123', '$2y$12$WnhGTVsTzKVU/P.Hz46fX.Dv80e4fAVGYGKfLsqdSesNc.y4wv/Wu', 'pep@v.com', './usersimg/29/avatar.jpg', 'alumne', NULL, NULL),
(30, 'Pep2', 'p', 'p', '$2y$12$z/oF.U.FxPapOObM0OgNWuLAGjc7NmuCc3L2ZBrBA1togMoZ9.1gu', 'pep@v.com', './usersimg/30/avatar.jpg', 'alumne', NULL, NULL),
(31, '', '', '', '$2y$12$OUlet4Wtj/tST1OJm2/euOtH2mde9sz6mXSYWB89p.cC741TD3zGi', '', '', 'alumne', NULL, NULL),
(32, 'orangekoala219', 'Silolyub', 'Shvidkiy', '$2y$12$WocqpcCWbbvCpBYaX/ViZulMAQY5BloJF1FJLO1xYfRO7EgCpCqOO', 'silolyub.shvidkiy@example.com', '', 'alumne', NULL, NULL),
(33, 'greenduck679', 'Pep', 'Čabarkapa', '$2y$12$hvjhKUXA3o2m.8b4USRuLOOa1i9JpXmZHCS28K3pv80V16XkM5mja', 'aleksije.cabarkapa@example.com', '', 'alumne', NULL, NULL),
(34, 'goldendog423', 'Kübra', 'Abanuz', '$2y$12$eF/6lZYTMDF3wIlEoe21Tuje35XE1F.BIAIbAb4X6ud7Mu3e85yQS', 'kubra.abanuz@example.com', '', 'alumne', NULL, NULL),
(35, 'beautifulgoose510', 'Leo', 'Tuomi', '$2y$12$8ppyB0Q7sUBrDUfnb9JgEe0aeWhpGvZKLL7LMYc95nuEw32WgDMsa', 'leo.tuomi@example.com', '', 'alumne', NULL, NULL),
(36, 'smallostrich312', 'Olga', 'Navarrete', '$2y$12$1Ebtje0U5RO/H/OIbmfP/.gE3T8xZbLIIZABwXcGN6/ah1Q6Z.ndG', 'olga.navarrete@example.com', '', 'alumne', NULL, NULL),
(37, 'purplerabbit841', 'Raphaël', 'Menard', '$2y$12$dHu5aKM3j594xH8lUXPd1uKam0VWlGPx2501sLSUfq9KsaNrqMmQi', 'raphael.menard@example.com', './usersimg/37/avatar.jpg', 'alumne', NULL, NULL),
(38, 'lazykoala130', 'Chaitra', 'Tipparti', '$2y$12$9zsttDr4qTUpKdcrpQuXkeUeC.o9oTN5eM3y5ZElyBLVOjBc2xjMG', 'chaitra.tipparti@example.com', './usersimg/38/avatar.jpg', 'alumne', NULL, NULL),
(39, 'greenwolf279', 'Indie', 'Walker', '$2y$12$cHxxD0mcTrwxOL5nHU2GTOpBLeXiVMRfvCdTcuZ/8RQtmt02hZYNm', 'indie.walker@example.com', './usersimg/39/avatar.jpg', 'alumne', NULL, NULL),
(40, '', '', '', '$2y$12$6C5hOo3v5H7L/LJ3bttlVONbFKLxC.Elr9uH95exaWm8Njm2iBvnS', '', './usersimg/40/avatar.jpg', 'alumne', NULL, NULL);

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
  MODIFY `idGrup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `imgs`
--
ALTER TABLE `imgs`
  MODIFY `idImg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `orla`
--
ALTER TABLE `orla`
  MODIFY `idOrla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  MODIFY `idPlantilla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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
