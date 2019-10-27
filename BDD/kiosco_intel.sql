-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2019 a las 18:21:15
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kiosco_intel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `publicacionID` int(6) UNSIGNED NOT NULL,
  `usuarioID` int(6) UNSIGNED NOT NULL,
  `participacion` enum('true','false') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`publicacionID`, `usuarioID`, `participacion`) VALUES
(12, 9, 'true'),
(13, 9, 'true'),
(6, 11, 'true'),
(19, 4, 'true'),
(12, 4, 'true'),
(19, 3, 'true'),
(23, 3, 'true'),
(22, 11, 'true'),
(22, 9, 'true'),
(19, 9, 'true'),
(12, 3, 'true'),
(13, 3, 'true'),
(22, 3, 'true'),
(23, 11, 'true'),
(19, 11, 'true'),
(23, 4, 'true'),
(23, 12, 'true');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favor`
--

CREATE TABLE `favor` (
  `favorID` int(6) UNSIGNED NOT NULL,
  `propietarioID` int(6) UNSIGNED NOT NULL,
  `voluntarioID` int(6) UNSIGNED DEFAULT NULL,
  `titulo` varchar(25) NOT NULL,
  `contenido` varchar(65) NOT NULL,
  `lugar` varchar(65) NOT NULL,
  `categoria` enum('fisico','tecnologia','bienestar','hogar','otros') DEFAULT NULL,
  `fechaINI` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `favor`
--

INSERT INTO `favor` (`favorID`, `propietarioID`, `voluntarioID`, `titulo`, `contenido`, `lugar`, `categoria`, `fechaINI`) VALUES
(1, 3, NULL, 'Tutor Matemáticas', 'ayudame a estudiar fracciones', 'email: andrea.puente@mail.com', 'otros', '2018-07-09'),
(2, 3, 4, 'Mover Muebles', 'Necesito ayuda moviendo mi sillón de habitación', 'cel: 8116838766', 'fisico', '2018-07-09'),
(3, 4, 3, 'Instalación Televisor', 'Necesito ayuda instalando el cable en la TV.', 'Mi casa (la roja)', 'tecnologia', '2018-07-14'),
(4, 9, NULL, 'Planchar camisas', 'Mi plancha no funciona y quisiera pedir prestada una', 'Casa roja', 'hogar', '2018-07-15'),
(5, 3, 4, 'Comida', 'Necesito ayuda preparando tamales. ¡Les voy a pagar 200 pesos!', 'Estoy en la escuela 7 ', 'hogar', '2018-07-22'),
(6, 4, NULL, 'Hacer tamales ', 'Necesito ayuda preparando 200 tamales para la liga de la colonia', 'La casa de la esquina, después de las 4:00 PM', 'hogar', '2018-07-22'),
(7, 14, NULL, 'Ayuda con estufa', 'Mi estufa se descompuso ¿alguien me podria prestar la suya?', 'Teléfono: 8117651005', 'hogar', '2018-10-05'),
(8, 17, NULL, '', '', '', '', '2019-09-16'),
(9, 1, 2, ' JIJIJIJI', 'KMKMKM', '', '', '2019-10-26'),
(10, 1, 2, ' a', 'asasas', '', 'fisico', '2019-10-26'),
(11, 1, 2, ' Karen CastaÃ±eda', 'as', '', '', '2019-10-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `dob` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `dob`, `contrasena`) VALUES
(1, 'Alicia', '1989-06-01 06:00:00', '123456'),
(2, 'Mario', '1989-06-01 06:00:00', '123456'),
(3, 'Andrea', '1996-02-09 06:00:00', '$2y$10$hqninAbZYP9ppEpe/9/U8ugX7u2BQCeoLHXYLb0R0vBwLsYrjvh12'),
(4, 'Andy', '1996-02-09 06:00:00', '$2y$10$J6Mq1tRbGjcw9Zb20fQQDOe4Uq1A3N9hRvcK/0UcLbFOjF.2JQ79u'),
(9, 'Alicia', '1998-02-05 06:00:00', '$2y$10$3SSS6CUVuDdelICjV2yo0uaO2tkYWphpjyhki4I5Ixc53K7DXoVm6'),
(10, 'Tino', '1996-05-04 05:00:00', '$2y$10$9GXtEPmSZxMhhZtqtqwpLunbshELh9ork4sz5XdoCBRF7WTpCM5kK'),
(11, 'Diego', '1998-04-20 05:00:00', '$2y$10$guFT9aB0LjELGbtJSUJ5I.GWtsw8WTJdsBt0AUxijPpvepkT/laVa'),
(12, 'Constantino', '1993-07-07 06:00:00', '$2y$10$2SMOlS10xqMjTuV3LZjbiO7gIgP/Y8tWVmpzujDqa2idqpyNQLZ9u'),
(13, 'David', '1996-06-26 05:00:00', '$2y$10$vBtpN5Z7NXqrtzCn9KyjjuXYxVu8Vg8CMpnlhdgN/P4/oNIr/fK0u'),
(14, 'Karla', '1980-01-06 06:00:00', '$2y$10$.sIsHMdo8vQV5jR0LUiC1.BZYGsg3.1ijJcoVTFbPDopeyk19XQDy'),
(16, 'Mariana', '1978-04-03 05:00:00', '$2y$10$My44bAL1l8ut3VBWxQLrVurf35z7VRanSMnPWgVKVSHJDjSIJ8ppi'),
(17, 'Irasema', '1995-10-01 05:00:00', '$2y$10$gwtubMjpt5V2tEPFgmyso.8brCd/Uss.NN94xYCCXlnfDjQg4IL9O'),
(18, 'Jose', '1998-09-17 05:00:00', '$2y$10$gzNkvNLzpDMF9j6.JNBUle19CfNKuVPnc7d0J.NMs40GV3K1jC05S'),
(19, 'Vanessa', '2019-09-23 01:14:13', '$2y$10$dtpWnLh8buKc8UcJ8PuFi.gyayXtM7Hf0ET9gfdzHeGo.aCD/a2sS'),
(20, 'Karen', '2019-09-24 16:03:24', '$2y$10$YWo0ckqWUT4TsOvGY093ve6wfyKUGq2cWvYR9cZ3lQOJdGDQ245CC'),
(21, 'Jimena Gonzalez', '2019-09-24 16:05:37', '$2y$10$QExTWZYjAxCDIjzEIGKOiuT/jWVoySsRLQtc.B9iAsePU7nyI.Gqi'),
(22, 'Alonso Castaneda', '2019-09-28 20:41:50', '$2y$10$OLGx.iFzPZ.5D/TnFcqn5uCINF0yLkVLuVDAPD3oFpwzzeYOGia2W'),
(23, 'Jose Manuel ', '2019-09-28 20:44:34', '$2y$10$2bBKCgT.hBfRRlua9lsyruLJZ7WagWfoC7csQjmnyhSSB3gIsV2jy'),
(24, 'Karen Irasema', '2019-09-28 20:45:30', '$2y$10$SRbiESZWkjsVbYJuYpR7Y.1HRtofRQFBTPFaCMIXp3ue3/agU.gli'),
(25, 'David Alejandra', '2019-09-28 20:46:27', '$2y$10$UBCMop8bspUc0sZn2DkQTe3lnrJ9cMisVAJWz1UmijZmn1HfpvefO'),
(26, 'Arely Valdes', '2019-09-28 20:48:08', '$2y$10$GW..3uKwRO5UMSpsK3vyfel3jVGZUEUVz7uWfZhTVor5UdzWnFkEa'),
(27, '', '2019-09-28 20:53:06', '$2y$10$PpJz.6JEfGAweMp2cCfQeOoSm/i4hozg6q/.MnABCqPxkTuNcBgIC'),
(28, 'Lorena Salas', '2019-09-28 20:55:17', '$2y$10$mqTna9yRX5RjewvBGD7uz.Gtv3I.V46e5YLrflu2v.9fwzDXEvETq'),
(29, 'Viviana Daniela', '2019-09-28 20:57:49', '$2y$10$bwkfWU0qEtdxWt/AllIKauXwRan.bpdZMEt.ecVQ.76fdpaiIK6ci'),
(30, 'Viviana Azucena', '2019-09-28 21:11:47', '$2y$10$m/bz.oEmRDOXBYvsjstcnOaCsSly3ZZZIVn7iHq.kQnxUCpPZc7J2'),
(31, 'Josefa Ortiz', '2019-09-28 21:37:19', '$2y$10$qwn7uRXETasB1oOakPk2X.I0AvHUoZDJ8/a6LRdBihFFFzRKaqf8O'),
(32, 'Hugo Mendoza', '2019-09-28 21:40:22', '$2y$10$TEOAPH/B6U9oiw8R6feDKuSK17gqnVa1l3aeaTsJgFuUwwDES9xZ6'),
(33, 'Clau', '2019-09-28 21:42:39', '$2y$10$dPzulQjaRmDdvFtEiCbTAuJMFhQnPGZ6fMYg2F/UHONg2GWaAtylW'),
(34, '12as', '2019-09-28 21:45:34', '$2y$10$09rzJkSyIEv53pFuHX.DTek8bsvw0rxYJ502.0iLWqT/jGsk13HSu'),
(35, 'as', '2019-09-28 21:46:56', '$2y$10$0bb5bNiERkQNI2p2o9EUnOaEObIRENmJVvaLd9KNlsubqveyDtf92'),
(36, 'Alie Perez', '2019-09-28 22:20:27', '$2y$10$GTOYQcaEOBd8F2cJczVnaOvMRTbNKubEfi1kv5V3zvYqLfkn.gh3C'),
(37, 'Claudia Treviño', '2019-10-01 15:32:56', '$2y$10$D//v5VEn8T/nyPYA3Jf7aOxpv304qbw5StdWFyLxIW8kw1P8GgJNC'),
(38, 'Gladys Garza', '2019-10-01 16:46:45', '$2y$10$KzjffW8XNr/TWe5McT57H.cUe8xepmvdqHEdcF2T/63rk7fGNJbye'),
(39, 'Daniela Andrade', '2019-10-22 21:07:41', '$2y$10$xGfFtRntb7GZsbGnjawaSumfFRWGkC9LQ3h5zxNe.fRJypOi5TKw2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntario`
--

CREATE TABLE `voluntario` (
  `favorID` int(6) UNSIGNED NOT NULL,
  `voluntarioID` int(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `voluntario`
--

INSERT INTO `voluntario` (`favorID`, `voluntarioID`) VALUES
(1, 9),
(4, 3),
(1, 12),
(6, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voto`
--

CREATE TABLE `voto` (
  `publicacionID` int(6) UNSIGNED NOT NULL,
  `usuarioID` int(6) UNSIGNED NOT NULL,
  `voto` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `voto`
--

INSERT INTO `voto` (`publicacionID`, `usuarioID`, `voto`) VALUES
(16, 9, 1),
(17, 4, 1),
(8, 4, 2),
(4, 4, 2),
(16, 4, 2),
(14, 4, 3),
(20, 4, 4),
(4, 3, 2),
(8, 3, 1),
(5, 3, 2),
(24, 4, 3),
(24, 11, 4),
(21, 3, 3),
(20, 3, 1),
(21, 11, 2),
(16, 11, 1),
(21, 4, 2),
(24, 12, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD KEY `publicacionID` (`publicacionID`),
  ADD KEY `usuarioID` (`usuarioID`);

--
-- Indices de la tabla `favor`
--
ALTER TABLE `favor`
  ADD KEY `favorID` (`favorID`),
  ADD KEY `favor_ibfk_1` (`propietarioID`),
  ADD KEY `favor_ibfk_2` (`voluntarioID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `voluntario`
--
ALTER TABLE `voluntario`
  ADD KEY `favorID` (`favorID`),
  ADD KEY `voluntarioID` (`voluntarioID`);

--
-- Indices de la tabla `voto`
--
ALTER TABLE `voto`
  ADD KEY `publicacionID` (`publicacionID`),
  ADD KEY `usuarioID` (`usuarioID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `favor`
--
ALTER TABLE `favor`
  MODIFY `favorID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`publicacionID`) REFERENCES `evento` (`publicacionID`),
  ADD CONSTRAINT `asistencia_ibfk_2` FOREIGN KEY (`usuarioID`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `favor`
--
ALTER TABLE `favor`
  ADD CONSTRAINT `favor_ibfk_1` FOREIGN KEY (`propietarioID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favor_ibfk_2` FOREIGN KEY (`voluntarioID`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `voluntario`
--
ALTER TABLE `voluntario`
  ADD CONSTRAINT `voluntario_ibfk_1` FOREIGN KEY (`favorID`) REFERENCES `favor` (`favorID`),
  ADD CONSTRAINT `voluntario_ibfk_2` FOREIGN KEY (`voluntarioID`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `voto`
--
ALTER TABLE `voto`
  ADD CONSTRAINT `voto_ibfk_1` FOREIGN KEY (`publicacionID`) REFERENCES `evento` (`publicacionID`),
  ADD CONSTRAINT `voto_ibfk_2` FOREIGN KEY (`usuarioID`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
