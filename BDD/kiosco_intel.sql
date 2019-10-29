-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2019 a las 21:36:49
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

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
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `publicacionID` int(6) UNSIGNED NOT NULL,
  `contenido` varchar(65) NOT NULL,
  `propietarioID` int(6) UNSIGNED NOT NULL,
  `fechaINI` date NOT NULL,
  `fechaFIN` date NOT NULL,
  `titulo` varchar(25) DEFAULT NULL,
  `horaINI` time NOT NULL,
  `horaFin` time NOT NULL,
  `precio` double NOT NULL,
  `lugar` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`publicacionID`, `contenido`, `propietarioID`, `fechaINI`, `fechaFIN`, `titulo`, `horaINI`, `horaFin`, `precio`, `lugar`) VALUES
(1, 'El viernes próximo habrá venta de pasteles', 1, '2018-05-01', '2018-07-10', 'Venta en la Vecindad', '00:00:00', '00:00:00', 0, ''),
(2, 'Mañana pizza para todos los niños mayores a tres años', 1, '2018-05-02', '2018-07-11', 'Pizza Gratis', '00:00:00', '00:00:00', 0, ''),
(3, 'Habrá junta de maestros el ultimo viernes del mes', 1, '2018-05-04', '2018-07-13', 'Aviso Escolar', '00:00:00', '00:00:00', 0, ''),
(4, '¿Cuántas mascotas tienes?', 1, '2018-05-04', '2018-07-13', 'Pregunta Curiosa', '00:00:00', '00:00:00', 0, ''),
(5, '¿Quién te gustaría como representante de barrio?', 1, '2018-05-04', '2018-07-13', 'Nuevo Representante', '00:00:00', '00:00:00', 0, ''),
(6, 'Este domingo se convoca una junta de vecinos', 1, '2018-05-04', '2018-07-13', 'Junta de Vecinos', '00:00:00', '00:00:00', 0, ''),
(7, 'Habrá un nuevo sistema para anunciar ventas', 1, '2018-05-04', '2018-07-13', 'Mercadito', '00:00:00', '00:00:00', 0, ''),
(8, '¿Margarita salió de las elecciones?', 2, '2018-05-20', '2018-08-10', 'Pregunta Presidencial', '00:00:00', '00:00:00', 0, ''),
(9, 'Vamos todos al restaurante Wok', 1, '2018-05-20', '2018-07-29', 'Comida Coreana', '00:00:00', '00:00:00', 0, ''),
(10, 'El Starnucks tiene promociones del 50% en frappes este mes', 1, '2018-05-20', '2018-08-09', 'Ofertas Starbucks', '00:00:00', '00:00:00', 0, ''),
(11, 'Inicia temporada de disertaciones de alumnos próximos a graduarse', 1, '2018-05-22', '2018-08-09', 'Disertaciones UDEM', '00:00:00', '00:00:00', 0, ''),
(12, 'Te invito a la disertación de Juan en el 4402 ... habrán dulces', 1, '2018-05-22', '2018-08-01', 'Disertación Juan Colinas', '00:00:00', '00:00:00', 0, ''),
(13, '¿Irías a una competencia de natación UDEM? Comida incluida', 1, '2018-05-22', '2018-08-03', 'Evento de natación', '00:00:00', '00:00:00', 0, ''),
(14, '¿Cuál color prefieres?', 1, '2018-05-22', '2018-08-02', 'Color favorito', '00:00:00', '00:00:00', 0, ''),
(15, '¿Piensas votar este período electoral?', 1, '2018-05-22', '2018-08-01', 'Votaciones', '00:00:00', '00:00:00', 0, ''),
(16, '¿Margarita salió de las elecciones?', 2, '2018-05-31', '2018-08-10', 'Pregunta Presidencial', '00:00:00', '00:00:00', 0, ''),
(17, '¿Cuál es tu comida preferida?', 1, '2018-05-31', '2018-07-27', 'Comida', '00:00:00', '00:00:00', 0, ''),
(18, 'comida', 1, '2018-06-01', '2018-07-31', 'Que haremos hoy', '00:00:00', '00:00:00', 0, ''),
(19, 'Habrá un convivio de comida sana, entrada abierta', 1, '2018-06-08', '2018-08-18', 'Avena y Galletas', '00:00:00', '00:00:00', 0, ''),
(20, '¿Qué color prefieres?', 1, '2018-06-08', '2018-08-17', 'Colores', '00:00:00', '00:00:00', 0, ''),
(21, '¿Qué película verías el sábado?', 1, '2018-06-08', '2018-08-18', 'Cine', '00:00:00', '00:00:00', 0, ''),
(22, 'Vamos a realizar un certamen de belleza donde todos puedan ir', 4, '2018-07-21', '2018-09-19', 'Concurso de belleza', '00:00:00', '00:00:00', 0, ''),
(23, 'Se va a exponer la plataforma COMUNA', 3, '2018-07-23', '2018-10-03', 'Presentacion de plataform', '00:00:00', '00:00:00', 0, ''),
(24, '¿Cuál es tu color favorito?', 3, '2018-07-25', '2018-10-09', 'Color Favorito', '00:00:00', '00:00:00', 0, ''),
(25, 'Se van a renovar los parques de la colonia', 3, '2018-07-25', '2018-10-08', 'Renovación de parques', '00:00:00', '00:00:00', 0, ''),
(27, 'Habrá un convivio por el dia de muertos !los espero!', 16, '2018-10-05', '2018-11-02', 'Convivio día de muertos', '00:00:00', '00:00:00', 0, ''),
(28, 'bailongo', 12, '2020-12-12', '2020-12-12', 'Baile', '12:12:00', '12:12:00', 12.5, ''),
(29, '', 12, '0000-00-00', '0000-00-00', 'Baile', '00:00:00', '00:00:00', 0, ''),
(30, 'as', 12, '2019-10-26', '2019-10-28', 'Baile', '01:12:00', '12:12:00', 0, ''),
(40, 'was', 24, '2020-12-12', '2021-12-12', 'Cazar mamuts', '12:12:00', '12:12:00', 0, 'Monterrey'),
(41, 'Es un baile', 40, '2019-10-29', '2019-10-30', 'Baile Regional', '12:12:00', '12:12:00', 12.5, 'Monterrey');

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
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ventaID` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL,
  `usuarioID` int(11) DEFAULT NULL,
  `telefono` text NOT NULL,
  `precio` int(11) NOT NULL,
  `fecha_ini` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `hora` time NOT NULL,
  `hora_fin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ventaID`, `nombre`, `descripcion`, `usuarioID`, `telefono`, `precio`, `fecha_ini`, `fecha_fin`, `hora`, `hora_fin`) VALUES
(2, 'Tamales', 'vendo ricos tamales', 12, '83333333', 100, '2016-09-29', '2018-10-30', '22:54:00', '00:00:00'),
(13, 'Cartas', 'cartas de yugioh en venta', 14, '123467890', 345, '2015-10-30', '2018-07-30', '00:58:00', '00:00:00'),
(15, 'espiritu de faraon', 'esta en un antiguo rompecabezas atado a una cadena para que sea la cosa mas pesada del mundo', 14, '456789', 6, '2013-07-28', '2016-07-26', '23:59:00', '00:00:00'),
(17, 'Flautas', 'Orden de 5 flautas doradas con guacamole', 10, '83538510', 40, '2018-05-06', '2018-05-08', '14:00:00', '00:00:00'),
(18, 'Masajes', 'Masajes terapéuticos con música relajante.', 3, '83538510', 300, '2018-03-07', '2018-03-07', '16:00:00', '00:00:00'),
(19, 'Tortas', 'ricas tortas', 3, '12332344', 10, '2018-12-31', '2019-12-31', '10:01:00', '00:00:00'),
(20, 'Pizza', 'Pizza horneada al sol de Mty', 3, '83538510', 100, '2017-03-01', '2019-03-01', '16:00:00', '00:00:00'),
(21, 'Café', 'Café de fresa con fruta', 3, '83538510', 80, '2018-07-07', '2018-07-30', '10:00:00', '00:00:00'),
(22, 'Ropa Usada', 'Ropa en buenas condiciones a partir de 50 pesos', 11, '8110448787', 50, '2018-07-08', '2018-07-31', '14:00:00', '00:00:00'),
(23, 'Masajes', 'Masajes de 15 minutos. Soy quiropráctico.', 12, '8116848484', 200, '2018-08-02', '2018-08-05', '16:00:00', '00:00:00'),
(24, '', '', NULL, '', 0, '0000-00-00', '0000-00-00', '00:00:00', '00:00:00'),
(25, 'hola', 'hola', 12, '123343', 122, '2019-10-24', '2019-10-26', '00:00:00', '00:00:00'),
(26, 'Chocolate caliente', 'asas', 12, '121323', 120, '2019-10-24', '2019-12-12', '00:12:00', '00:00:00'),
(27, 'Un fantasma', 'Es un fantasmita', 0, '8112092105', 13, '2019-10-29', '2020-12-12', '12:12:00', '00:12:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `dob` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `contrasena` varchar(100) NOT NULL,
  `nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `dob`, `contrasena`, `nacimiento`) VALUES
(1, 'Alicia', '1989-06-01 06:00:00', '123456', '0000-00-00'),
(2, 'Mario', '1989-06-01 06:00:00', '123456', '0000-00-00'),
(3, 'Andrea', '1996-02-09 06:00:00', '$2y$10$hqninAbZYP9ppEpe/9/U8ugX7u2BQCeoLHXYLb0R0vBwLsYrjvh12', '0000-00-00'),
(4, 'Andy', '1996-02-09 06:00:00', '$2y$10$J6Mq1tRbGjcw9Zb20fQQDOe4Uq1A3N9hRvcK/0UcLbFOjF.2JQ79u', '0000-00-00'),
(9, 'Alicia', '1998-02-05 06:00:00', '$2y$10$3SSS6CUVuDdelICjV2yo0uaO2tkYWphpjyhki4I5Ixc53K7DXoVm6', '0000-00-00'),
(10, 'Tino', '1996-05-04 05:00:00', '$2y$10$9GXtEPmSZxMhhZtqtqwpLunbshELh9ork4sz5XdoCBRF7WTpCM5kK', '0000-00-00'),
(11, 'Diego', '1998-04-20 05:00:00', '$2y$10$guFT9aB0LjELGbtJSUJ5I.GWtsw8WTJdsBt0AUxijPpvepkT/laVa', '0000-00-00'),
(12, 'Constantino', '1993-07-07 06:00:00', '$2y$10$2SMOlS10xqMjTuV3LZjbiO7gIgP/Y8tWVmpzujDqa2idqpyNQLZ9u', '0000-00-00'),
(13, 'David', '1996-06-26 05:00:00', '$2y$10$vBtpN5Z7NXqrtzCn9KyjjuXYxVu8Vg8CMpnlhdgN/P4/oNIr/fK0u', '0000-00-00'),
(14, 'Karla', '1980-01-06 06:00:00', '$2y$10$.sIsHMdo8vQV5jR0LUiC1.BZYGsg3.1ijJcoVTFbPDopeyk19XQDy', '0000-00-00'),
(16, 'Mariana', '1978-04-03 05:00:00', '$2y$10$My44bAL1l8ut3VBWxQLrVurf35z7VRanSMnPWgVKVSHJDjSIJ8ppi', '0000-00-00'),
(17, 'Irasema', '1995-10-01 05:00:00', '$2y$10$gwtubMjpt5V2tEPFgmyso.8brCd/Uss.NN94xYCCXlnfDjQg4IL9O', '0000-00-00'),
(18, 'Jose', '1998-09-17 05:00:00', '$2y$10$gzNkvNLzpDMF9j6.JNBUle19CfNKuVPnc7d0J.NMs40GV3K1jC05S', '0000-00-00'),
(19, 'Vanessa', '2019-09-23 01:14:13', '$2y$10$dtpWnLh8buKc8UcJ8PuFi.gyayXtM7Hf0ET9gfdzHeGo.aCD/a2sS', '0000-00-00'),
(20, 'Karen', '2019-09-24 16:03:24', '$2y$10$YWo0ckqWUT4TsOvGY093ve6wfyKUGq2cWvYR9cZ3lQOJdGDQ245CC', '0000-00-00'),
(21, 'Jimena Gonzalez', '2019-09-24 16:05:37', '$2y$10$QExTWZYjAxCDIjzEIGKOiuT/jWVoySsRLQtc.B9iAsePU7nyI.Gqi', '0000-00-00'),
(22, 'Alonso Castaneda', '2019-09-28 20:41:50', '$2y$10$OLGx.iFzPZ.5D/TnFcqn5uCINF0yLkVLuVDAPD3oFpwzzeYOGia2W', '0000-00-00'),
(23, 'Jose Manuel ', '2019-09-28 20:44:34', '$2y$10$2bBKCgT.hBfRRlua9lsyruLJZ7WagWfoC7csQjmnyhSSB3gIsV2jy', '0000-00-00'),
(24, 'Karen Irasema', '2019-09-28 20:45:30', '$2y$10$SRbiESZWkjsVbYJuYpR7Y.1HRtofRQFBTPFaCMIXp3ue3/agU.gli', '0000-00-00'),
(25, 'David Alejandra', '2019-09-28 20:46:27', '$2y$10$UBCMop8bspUc0sZn2DkQTe3lnrJ9cMisVAJWz1UmijZmn1HfpvefO', '0000-00-00'),
(26, 'Arely Valdes', '2019-09-28 20:48:08', '$2y$10$GW..3uKwRO5UMSpsK3vyfel3jVGZUEUVz7uWfZhTVor5UdzWnFkEa', '0000-00-00'),
(27, '', '2019-09-28 20:53:06', '$2y$10$PpJz.6JEfGAweMp2cCfQeOoSm/i4hozg6q/.MnABCqPxkTuNcBgIC', '0000-00-00'),
(28, 'Lorena Salas', '2019-09-28 20:55:17', '$2y$10$mqTna9yRX5RjewvBGD7uz.Gtv3I.V46e5YLrflu2v.9fwzDXEvETq', '0000-00-00'),
(29, 'Viviana Daniela', '2019-09-28 20:57:49', '$2y$10$bwkfWU0qEtdxWt/AllIKauXwRan.bpdZMEt.ecVQ.76fdpaiIK6ci', '0000-00-00'),
(30, 'Viviana Azucena', '2019-09-28 21:11:47', '$2y$10$m/bz.oEmRDOXBYvsjstcnOaCsSly3ZZZIVn7iHq.kQnxUCpPZc7J2', '0000-00-00'),
(31, 'Josefa Ortiz', '2019-09-28 21:37:19', '$2y$10$qwn7uRXETasB1oOakPk2X.I0AvHUoZDJ8/a6LRdBihFFFzRKaqf8O', '0000-00-00'),
(32, 'Hugo Mendoza', '2019-09-28 21:40:22', '$2y$10$TEOAPH/B6U9oiw8R6feDKuSK17gqnVa1l3aeaTsJgFuUwwDES9xZ6', '0000-00-00'),
(33, 'Clau', '2019-09-28 21:42:39', '$2y$10$dPzulQjaRmDdvFtEiCbTAuJMFhQnPGZ6fMYg2F/UHONg2GWaAtylW', '0000-00-00'),
(34, '12as', '2019-09-28 21:45:34', '$2y$10$09rzJkSyIEv53pFuHX.DTek8bsvw0rxYJ502.0iLWqT/jGsk13HSu', '0000-00-00'),
(35, 'as', '2019-09-28 21:46:56', '$2y$10$0bb5bNiERkQNI2p2o9EUnOaEObIRENmJVvaLd9KNlsubqveyDtf92', '0000-00-00'),
(36, 'Alie Perez', '2019-09-28 22:20:27', '$2y$10$GTOYQcaEOBd8F2cJczVnaOvMRTbNKubEfi1kv5V3zvYqLfkn.gh3C', '0000-00-00'),
(37, 'Claudia Treviño', '2019-10-01 15:32:56', '$2y$10$D//v5VEn8T/nyPYA3Jf7aOxpv304qbw5StdWFyLxIW8kw1P8GgJNC', '0000-00-00'),
(39, 'Daniela Andrade', '2019-10-22 21:07:41', '$2y$10$xGfFtRntb7GZsbGnjawaSumfFRWGkC9LQ3h5zxNe.fRJypOi5TKw2', '0000-00-00'),
(41, 'Gladys Garza', '2019-10-28 18:06:21', '$2y$10$UQOsakq2e4.5G/gaN2gey.eebV9m5H4cJseF6of2Z01hvRCjATKVu', '0000-00-00'),
(42, 'aaa', '2019-10-29 20:11:27', '$2y$10$XRr9k.IFi7O0VkYFU6w8ou/3o/ZMp7tDuuXK8QabpSQ0Cn0tRdFnm', '0000-00-00');

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
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`publicacionID`),
  ADD KEY `propietarioID` (`propietarioID`),
  ADD KEY `publicacionID` (`publicacionID`,`contenido`,`propietarioID`,`fechaINI`,`fechaFIN`,`titulo`),
  ADD KEY `publicacionID_2` (`publicacionID`,`contenido`,`propietarioID`,`fechaINI`,`fechaFIN`,`titulo`);

--
-- Indices de la tabla `favor`
--
ALTER TABLE `favor`
  ADD KEY `favorID` (`favorID`),
  ADD KEY `favor_ibfk_1` (`propietarioID`),
  ADD KEY `favor_ibfk_2` (`voluntarioID`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ventaID`);

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
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `publicacionID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `favor`
--
ALTER TABLE `favor`
  MODIFY `favorID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ventaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
