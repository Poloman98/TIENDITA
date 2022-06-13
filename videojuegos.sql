-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2017 a las 16:42:42
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `videojuegos`
--

DELIMITER $$
--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `f_consbitacora` () RETURNS INT(11) begin
declare cont int;
select count(bit_id) into cont from bitacora;
return cont+1;
end$$

CREATE DEFINER=`root`@`localhost` FUNCTION `f_id_juego` () RETURNS INT(11) begin 
declare id int;
select MAX(jue_id) into id from juego;
return id;
end$$

CREATE DEFINER=`root`@`localhost` FUNCTION `f_id_usuario` () RETURNS INT(11) begin 
declare id int;
select MAX(usu_id) into id from usuario;
return id;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `bit_id` int(11) NOT NULL,
  `bit_fecha` datetime NOT NULL,
  `bit_user` varchar(30) NOT NULL,
  `bit_tabla` varchar(30) NOT NULL,
  `bit_descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`bit_id`, `bit_fecha`, `bit_user`, `bit_tabla`, `bit_descripcion`) VALUES
(1, '2017-11-19 17:22:44', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 0 en la plataforma 1'),
(2, '2017-11-19 17:22:44', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 0 en la plataforma 2'),
(3, '2017-11-19 17:30:43', 'root@localhost', 'juego', 'Se inserto el juego Uncharted 4'),
(4, '2017-11-19 17:30:43', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 1 en la plataforma 1'),
(5, '2017-11-19 17:30:43', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 1 en la plataforma 2'),
(6, '2017-11-19 17:30:44', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 1 de la casa 5'),
(7, '2017-11-19 17:35:44', 'root@localhost', 'juego', 'Se inserto el juego GTA V'),
(8, '2017-11-19 17:35:44', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 2 de la casa 2'),
(9, '2017-11-19 17:36:11', 'root@localhost', 'juego', 'Se inserto el juego GTA V'),
(10, '2017-11-19 17:36:11', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 3 en la plataforma 1'),
(11, '2017-11-19 17:36:11', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 3 en la plataforma 2'),
(12, '2017-11-19 17:36:11', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 3 en la plataforma 3'),
(13, '2017-11-19 17:36:11', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 3 en la plataforma 4'),
(14, '2017-11-19 17:36:11', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 3 en la plataforma 6'),
(15, '2017-11-19 17:36:11', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 3 de la casa 2'),
(16, '2017-11-28 21:07:44', 'root@localhost', 'plataforma', 'Se inserto la plataforma '),
(17, '2017-11-28 21:07:53', 'root@localhost', 'plataforma', 'Se inserto la plataforma '),
(18, '2017-12-03 16:23:35', 'root@localhost', 'departamento', 'Se inserto el departamento asdasdas'),
(19, '2017-12-03 16:53:09', 'root@localhost', 'plataforma', 'Se inserto la plataforma '),
(20, '2017-12-04 18:47:42', 'root@localhost', 'departamento', 'Se inserto el departamento Bogota'),
(21, '2017-12-04 18:59:14', 'root@localhost', 'ciudad', 'Se inserto la ciudad Bogota'),
(22, '2017-12-04 19:20:32', 'root@localhost', 'pais', 'Se inserto el pais '),
(23, '2017-12-04 19:25:00', 'root@localhost', 'pais', 'Se inserto el pais Prueba'),
(24, '2017-12-04 21:39:50', 'root@localhost', 'cliente', 'Se inserto el cliente Nicolas Riascos'),
(25, '2017-12-04 22:46:39', 'root@localhost', 'pais', 'Se inserto el pais Japón'),
(26, '2017-12-04 22:48:30', 'root@localhost', 'juego', 'Se inserto el juego PES 2018'),
(27, '2017-12-04 22:48:30', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 4 en la plataforma 1'),
(28, '2017-12-04 22:48:30', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 4 en la plataforma 2'),
(29, '2017-12-04 22:48:30', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 4 en la plataforma 3'),
(30, '2017-12-04 22:48:30', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 4 en la plataforma 4'),
(31, '2017-12-04 22:48:30', 'root@localhost', 'genero_juego', 'Se inserto el juego 4 en el genero 8'),
(32, '2017-12-04 22:48:30', 'root@localhost', 'idioma_juego', 'Se inserto el juego 4 con el idioma 1'),
(33, '2017-12-04 22:48:30', 'root@localhost', 'idioma_juego', 'Se inserto el juego 4 con el idioma 2'),
(34, '2017-12-04 22:48:30', 'root@localhost', 'idioma_juego', 'Se inserto el juego 4 con el idioma 3'),
(35, '2017-12-04 22:48:31', 'root@localhost', 'idioma_juego', 'Se inserto el juego 4 con el idioma 4'),
(36, '2017-12-04 22:48:31', 'root@localhost', 'idioma_juego', 'Se inserto el juego 4 con el idioma 5'),
(37, '2017-12-04 22:48:40', 'root@localhost', 'juego', 'Se inserto el juego PES 2018'),
(38, '2017-12-04 22:48:41', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 5 en la plataforma 1'),
(39, '2017-12-04 22:48:41', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 5 en la plataforma 2'),
(40, '2017-12-04 22:48:41', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 5 en la plataforma 3'),
(41, '2017-12-04 22:48:41', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 5 en la plataforma 4'),
(42, '2017-12-04 22:48:41', 'root@localhost', 'genero_juego', 'Se inserto el juego 5 en el genero 8'),
(43, '2017-12-04 22:48:41', 'root@localhost', 'idioma_juego', 'Se inserto el juego 5 con el idioma 1'),
(44, '2017-12-04 22:48:41', 'root@localhost', 'idioma_juego', 'Se inserto el juego 5 con el idioma 2'),
(45, '2017-12-04 22:48:41', 'root@localhost', 'idioma_juego', 'Se inserto el juego 5 con el idioma 3'),
(46, '2017-12-04 22:48:41', 'root@localhost', 'idioma_juego', 'Se inserto el juego 5 con el idioma 4'),
(47, '2017-12-04 22:48:41', 'root@localhost', 'idioma_juego', 'Se inserto el juego 5 con el idioma 5'),
(48, '2017-12-04 22:53:35', 'root@localhost', 'juego', 'Se inserto el juego PES 2018 Limited Edition'),
(49, '2017-12-04 22:53:35', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 6 en la plataforma 1'),
(50, '2017-12-04 22:53:35', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 6 en la plataforma 2'),
(51, '2017-12-04 22:53:35', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 6 en la plataforma 3'),
(52, '2017-12-04 22:53:35', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 6 en la plataforma 4'),
(53, '2017-12-04 22:53:35', 'root@localhost', 'genero_juego', 'Se inserto el juego 6 en el genero 8'),
(54, '2017-12-04 22:53:35', 'root@localhost', 'idioma_juego', 'Se inserto el juego 6 con el idioma 1'),
(55, '2017-12-04 22:53:36', 'root@localhost', 'idioma_juego', 'Se inserto el juego 6 con el idioma 2'),
(56, '2017-12-04 22:53:36', 'root@localhost', 'idioma_juego', 'Se inserto el juego 6 con el idioma 3'),
(57, '2017-12-04 22:53:36', 'root@localhost', 'idioma_juego', 'Se inserto el juego 6 con el idioma 4'),
(58, '2017-12-04 22:53:36', 'root@localhost', 'idioma_juego', 'Se inserto el juego 6 con el idioma 5'),
(59, '2017-12-04 22:53:42', 'root@localhost', 'juego', 'Se inserto el juego PES 2018 Limited Edition'),
(60, '2017-12-04 22:53:42', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 7 en la plataforma 1'),
(61, '2017-12-04 22:53:42', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 7 en la plataforma 2'),
(62, '2017-12-04 22:53:42', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 7 en la plataforma 3'),
(63, '2017-12-04 22:53:42', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 7 en la plataforma 4'),
(64, '2017-12-04 22:53:42', 'root@localhost', 'genero_juego', 'Se inserto el juego 7 en el genero 8'),
(65, '2017-12-04 22:53:42', 'root@localhost', 'idioma_juego', 'Se inserto el juego 7 con el idioma 1'),
(66, '2017-12-04 22:53:42', 'root@localhost', 'idioma_juego', 'Se inserto el juego 7 con el idioma 2'),
(67, '2017-12-04 22:53:42', 'root@localhost', 'idioma_juego', 'Se inserto el juego 7 con el idioma 3'),
(68, '2017-12-04 22:53:42', 'root@localhost', 'idioma_juego', 'Se inserto el juego 7 con el idioma 4'),
(69, '2017-12-04 22:53:42', 'root@localhost', 'idioma_juego', 'Se inserto el juego 7 con el idioma 5'),
(70, '2017-12-04 22:53:47', 'root@localhost', 'juego', 'Se inserto el juego PES 2018 Limited Edition'),
(71, '2017-12-04 22:53:47', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 8 en la plataforma 1'),
(72, '2017-12-04 22:53:47', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 8 en la plataforma 2'),
(73, '2017-12-04 22:53:47', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 8 en la plataforma 3'),
(74, '2017-12-04 22:53:47', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 8 en la plataforma 4'),
(75, '2017-12-04 22:53:47', 'root@localhost', 'genero_juego', 'Se inserto el juego 8 en el genero 8'),
(76, '2017-12-04 22:53:47', 'root@localhost', 'idioma_juego', 'Se inserto el juego 8 con el idioma 1'),
(77, '2017-12-04 22:53:47', 'root@localhost', 'idioma_juego', 'Se inserto el juego 8 con el idioma 2'),
(78, '2017-12-04 22:53:47', 'root@localhost', 'idioma_juego', 'Se inserto el juego 8 con el idioma 3'),
(79, '2017-12-04 22:53:47', 'root@localhost', 'idioma_juego', 'Se inserto el juego 8 con el idioma 4'),
(80, '2017-12-04 22:53:47', 'root@localhost', 'idioma_juego', 'Se inserto el juego 8 con el idioma 5'),
(81, '2017-12-04 22:53:50', 'root@localhost', 'juego', 'Se inserto el juego PES 2018 Limited Edition'),
(82, '2017-12-04 22:53:50', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 9 en la plataforma 1'),
(83, '2017-12-04 22:53:50', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 9 en la plataforma 2'),
(84, '2017-12-04 22:53:50', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 9 en la plataforma 3'),
(85, '2017-12-04 22:53:50', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 9 en la plataforma 4'),
(86, '2017-12-04 22:53:50', 'root@localhost', 'genero_juego', 'Se inserto el juego 9 en el genero 8'),
(87, '2017-12-04 22:53:50', 'root@localhost', 'idioma_juego', 'Se inserto el juego 9 con el idioma 1'),
(88, '2017-12-04 22:53:51', 'root@localhost', 'idioma_juego', 'Se inserto el juego 9 con el idioma 2'),
(89, '2017-12-04 22:53:51', 'root@localhost', 'idioma_juego', 'Se inserto el juego 9 con el idioma 3'),
(90, '2017-12-04 22:53:51', 'root@localhost', 'idioma_juego', 'Se inserto el juego 9 con el idioma 4'),
(91, '2017-12-04 22:53:51', 'root@localhost', 'idioma_juego', 'Se inserto el juego 9 con el idioma 5'),
(92, '2017-12-04 22:58:27', 'root@localhost', 'juego', 'Se inserto el juego PES 2018 LE'),
(93, '2017-12-04 22:58:27', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 10 en la plataforma 1'),
(94, '2017-12-04 22:58:27', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 10 en la plataforma 2'),
(95, '2017-12-04 22:58:27', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 10 en la plataforma 3'),
(96, '2017-12-04 22:58:27', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 10 en la plataforma 4'),
(97, '2017-12-04 22:58:27', 'root@localhost', 'genero_juego', 'Se inserto el juego 10 en el genero 8'),
(98, '2017-12-04 22:58:27', 'root@localhost', 'idioma_juego', 'Se inserto el juego 10 con el idioma 1'),
(99, '2017-12-04 22:58:27', 'root@localhost', 'idioma_juego', 'Se inserto el juego 10 con el idioma 2'),
(100, '2017-12-04 22:58:27', 'root@localhost', 'idioma_juego', 'Se inserto el juego 10 con el idioma 3'),
(101, '2017-12-04 22:58:27', 'root@localhost', 'idioma_juego', 'Se inserto el juego 10 con el idioma 4'),
(102, '2017-12-04 22:58:27', 'root@localhost', 'idioma_juego', 'Se inserto el juego 10 con el idioma 5'),
(103, '2017-12-04 22:58:27', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 10 en la plataforma 7'),
(104, '2017-12-04 22:59:50', 'root@localhost', 'juego', 'Se inserto el juego PES 2018 LE'),
(105, '2017-12-04 22:59:50', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 11 en la plataforma 1'),
(106, '2017-12-04 22:59:50', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 11 en la plataforma 2'),
(107, '2017-12-04 22:59:50', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 11 en la plataforma 3'),
(108, '2017-12-04 22:59:50', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 11 en la plataforma 4'),
(109, '2017-12-04 22:59:50', 'root@localhost', 'genero_juego', 'Se inserto el juego 11 en el genero 8'),
(110, '2017-12-04 22:59:50', 'root@localhost', 'idioma_juego', 'Se inserto el juego 11 con el idioma 1'),
(111, '2017-12-04 22:59:50', 'root@localhost', 'idioma_juego', 'Se inserto el juego 11 con el idioma 2'),
(112, '2017-12-04 22:59:50', 'root@localhost', 'idioma_juego', 'Se inserto el juego 11 con el idioma 3'),
(113, '2017-12-04 22:59:50', 'root@localhost', 'idioma_juego', 'Se inserto el juego 11 con el idioma 4'),
(114, '2017-12-04 22:59:51', 'root@localhost', 'idioma_juego', 'Se inserto el juego 11 con el idioma 5'),
(115, '2017-12-04 22:59:51', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 11 en la plataforma 7'),
(116, '2017-12-04 23:00:03', 'root@localhost', 'juego', 'Se inserto el juego PES 2018 LE'),
(117, '2017-12-04 23:00:03', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 12 en la plataforma 1'),
(118, '2017-12-04 23:00:03', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 12 en la plataforma 2'),
(119, '2017-12-04 23:00:03', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 12 en la plataforma 3'),
(120, '2017-12-04 23:00:03', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 12 en la plataforma 4'),
(121, '2017-12-04 23:00:03', 'root@localhost', 'genero_juego', 'Se inserto el juego 12 en el genero 8'),
(122, '2017-12-04 23:00:03', 'root@localhost', 'idioma_juego', 'Se inserto el juego 12 con el idioma 1'),
(123, '2017-12-04 23:00:03', 'root@localhost', 'idioma_juego', 'Se inserto el juego 12 con el idioma 2'),
(124, '2017-12-04 23:00:03', 'root@localhost', 'idioma_juego', 'Se inserto el juego 12 con el idioma 3'),
(125, '2017-12-04 23:00:03', 'root@localhost', 'idioma_juego', 'Se inserto el juego 12 con el idioma 4'),
(126, '2017-12-04 23:00:03', 'root@localhost', 'idioma_juego', 'Se inserto el juego 12 con el idioma 5'),
(127, '2017-12-04 23:00:03', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 12 en la plataforma 7'),
(128, '2017-12-05 20:12:08', 'root@localhost', 'juego', 'Se inserto el juego FIFA 18'),
(129, '2017-12-05 20:12:08', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 13 en la plataforma 1'),
(130, '2017-12-05 20:12:08', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 13 en la plataforma 2'),
(131, '2017-12-05 20:12:08', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 13 en la plataforma 3'),
(132, '2017-12-05 20:12:08', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 13 en la plataforma 4'),
(133, '2017-12-05 20:12:08', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 13 en la plataforma 7'),
(134, '2017-12-05 20:12:08', 'root@localhost', 'genero_juego', 'Se inserto el juego 13 en el genero 8'),
(135, '2017-12-05 20:12:08', 'root@localhost', 'idioma_juego', 'Se inserto el juego 13 con el idioma 1'),
(136, '2017-12-05 20:12:08', 'root@localhost', 'idioma_juego', 'Se inserto el juego 13 con el idioma 2'),
(137, '2017-12-05 20:12:08', 'root@localhost', 'idioma_juego', 'Se inserto el juego 13 con el idioma 3'),
(138, '2017-12-05 20:12:08', 'root@localhost', 'idioma_juego', 'Se inserto el juego 13 con el idioma 4'),
(139, '2017-12-05 20:12:08', 'root@localhost', 'idioma_juego', 'Se inserto el juego 13 con el idioma 5'),
(140, '2017-12-05 20:12:08', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 13 en la plataforma 4'),
(141, '2017-12-06 08:10:39', 'root@localhost', 'juego', 'Se inserto el juego Uncharted 4: A ThiefÂ´s End'),
(142, '2017-12-06 08:10:39', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 5 en la plataforma 2'),
(143, '2017-12-06 08:10:39', 'root@localhost', 'genero_juego', 'Se inserto el juego 5 en el genero 2'),
(144, '2017-12-06 08:10:39', 'root@localhost', 'genero_juego', 'Se inserto el juego 5 en el genero 10'),
(145, '2017-12-06 08:10:39', 'root@localhost', 'idioma_juego', 'Se inserto el juego 5 con el idioma 1'),
(146, '2017-12-06 08:10:39', 'root@localhost', 'idioma_juego', 'Se inserto el juego 5 con el idioma 2'),
(147, '2017-12-06 08:10:39', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 5 en la plataforma 5'),
(148, '2017-12-06 08:32:40', 'root@localhost', 'juego', 'Se inserto el juego Uncharted 4: A ThiefÂ´s End'),
(149, '2017-12-06 08:32:40', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 6 en la plataforma 2'),
(150, '2017-12-06 08:32:40', 'root@localhost', 'genero_juego', 'Se inserto el juego 6 en el genero 2'),
(151, '2017-12-06 08:32:40', 'root@localhost', 'genero_juego', 'Se inserto el juego 6 en el genero 10'),
(152, '2017-12-06 08:32:40', 'root@localhost', 'idioma_juego', 'Se inserto el juego 6 con el idioma 1'),
(153, '2017-12-06 08:32:40', 'root@localhost', 'idioma_juego', 'Se inserto el juego 6 con el idioma 2'),
(154, '2017-12-06 08:32:40', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 6 de la casa desarrolladora 5'),
(155, '2017-12-06 08:53:06', 'root@localhost', 'juego', 'Se inserto el juego '),
(156, '2017-12-06 08:53:06', 'root@localhost', 'genero_juego', 'Se inserto el juego 7 en el genero 2'),
(157, '2017-12-06 08:53:06', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 7 de la casa desarrolladora 5'),
(158, '2017-12-06 09:04:20', 'root@localhost', 'juego', 'Se inserto el juego FIFA 18'),
(159, '2017-12-06 09:04:20', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 8 en la plataforma 1'),
(160, '2017-12-06 09:04:20', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 8 en la plataforma 2'),
(161, '2017-12-06 09:04:20', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 8 en la plataforma 3'),
(162, '2017-12-06 09:04:20', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 8 en la plataforma 4'),
(163, '2017-12-06 09:04:20', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 8 en la plataforma 5'),
(164, '2017-12-06 09:04:20', 'root@localhost', 'genero_juego', 'Se inserto el juego 8 en el genero 8'),
(165, '2017-12-06 09:04:20', 'root@localhost', 'idioma_juego', 'Se inserto el juego 8 con el idioma 1'),
(166, '2017-12-06 09:04:20', 'root@localhost', 'idioma_juego', 'Se inserto el juego 8 con el idioma 2'),
(167, '2017-12-06 09:04:20', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 8 de la casa desarrolladora 4'),
(168, '2017-12-06 09:11:40', 'root@localhost', 'juego', 'Se inserto el juego Uncharted 4: A ThiefÂ´s End'),
(169, '2017-12-06 09:11:41', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 9 en la plataforma 1'),
(170, '2017-12-06 09:11:41', 'root@localhost', 'genero_juego', 'Se inserto el juego 9 en el genero 1'),
(171, '2017-12-06 09:11:41', 'root@localhost', 'idioma_juego', 'Se inserto el juego 9 con el idioma 1'),
(172, '2017-12-06 09:11:41', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 9 de la casa desarrolladora 5'),
(173, '2017-12-06 09:14:15', 'root@localhost', 'juego', 'Se inserto el juego FIFA'),
(174, '2017-12-06 09:14:15', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 10 en la plataforma 1'),
(175, '2017-12-06 09:14:15', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 10 en la plataforma 2'),
(176, '2017-12-06 09:14:15', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 10 en la plataforma 3'),
(177, '2017-12-06 09:14:15', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 10 en la plataforma 4'),
(178, '2017-12-06 09:14:15', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 10 en la plataforma 5'),
(179, '2017-12-06 09:14:15', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 10 en la plataforma 7'),
(180, '2017-12-06 09:14:15', 'root@localhost', 'genero_juego', 'Se inserto el juego 10 en el genero 8'),
(181, '2017-12-06 09:14:15', 'root@localhost', 'idioma_juego', 'Se inserto el juego 10 con el idioma 1'),
(182, '2017-12-06 09:14:16', 'root@localhost', 'idioma_juego', 'Se inserto el juego 10 con el idioma 2'),
(183, '2017-12-06 09:14:16', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 10 de la casa desarrolladora 4'),
(184, '2017-12-06 09:25:11', 'root@localhost', 'juego', 'Se inserto el juego FIFA 18'),
(185, '2017-12-06 09:25:11', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 11 en la plataforma 1'),
(186, '2017-12-06 09:25:11', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 11 en la plataforma 2'),
(187, '2017-12-06 09:25:12', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 11 en la plataforma 3'),
(188, '2017-12-06 09:25:12', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 11 en la plataforma 4'),
(189, '2017-12-06 09:25:12', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 11 en la plataforma 5'),
(190, '2017-12-06 09:25:12', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 11 en la plataforma 7'),
(191, '2017-12-06 09:25:12', 'root@localhost', 'genero_juego', 'Se inserto el juego 11 en el genero 8'),
(192, '2017-12-06 09:25:12', 'root@localhost', 'idioma_juego', 'Se inserto el juego 11 con el idioma 1'),
(193, '2017-12-06 09:25:12', 'root@localhost', 'idioma_juego', 'Se inserto el juego 11 con el idioma 2'),
(194, '2017-12-06 09:25:12', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 11 de la casa desarrolladora 4'),
(195, '2017-12-06 09:25:46', 'root@localhost', 'juego', 'Se inserto el juego FIFA 18'),
(196, '2017-12-06 09:25:46', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 12 en la plataforma 1'),
(197, '2017-12-06 09:25:46', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 12 en la plataforma 2'),
(198, '2017-12-06 09:25:46', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 12 en la plataforma 3'),
(199, '2017-12-06 09:25:46', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 12 en la plataforma 4'),
(200, '2017-12-06 09:25:46', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 12 en la plataforma 5'),
(201, '2017-12-06 09:25:46', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 12 en la plataforma 7'),
(202, '2017-12-06 09:25:46', 'root@localhost', 'genero_juego', 'Se inserto el juego 12 en el genero 8'),
(203, '2017-12-06 09:25:46', 'root@localhost', 'idioma_juego', 'Se inserto el juego 12 con el idioma 1'),
(204, '2017-12-06 09:25:46', 'root@localhost', 'idioma_juego', 'Se inserto el juego 12 con el idioma 2'),
(205, '2017-12-06 09:25:46', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 12 de la casa desarrolladora 4'),
(206, '2017-12-06 09:38:27', 'root@localhost', 'casa_desarrolladora', 'Se inserto la casa desarrolladora Naughty Dog'),
(207, '2017-12-06 09:39:39', 'root@localhost', 'juego', 'Se inserto el juego Uncharted 4: A ThiefÂ´s End'),
(208, '2017-12-06 09:39:39', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 13 en la plataforma 2'),
(209, '2017-12-06 09:39:39', 'root@localhost', 'genero_juego', 'Se inserto el juego 13 en el genero 2'),
(210, '2017-12-06 09:39:39', 'root@localhost', 'genero_juego', 'Se inserto el juego 13 en el genero 9'),
(211, '2017-12-06 09:39:39', 'root@localhost', 'idioma_juego', 'Se inserto el juego 13 con el idioma 1'),
(212, '2017-12-06 09:39:39', 'root@localhost', 'idioma_juego', 'Se inserto el juego 13 con el idioma 2'),
(213, '2017-12-06 09:39:39', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 13 de la casa desarrolladora 9'),
(214, '2017-12-06 09:43:16', 'root@localhost', 'juego', 'Se inserto el juego PES 2018'),
(215, '2017-12-06 09:43:16', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 14 en la plataforma 1'),
(216, '2017-12-06 09:43:16', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 14 en la plataforma 2'),
(217, '2017-12-06 09:43:16', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 14 en la plataforma 3'),
(218, '2017-12-06 09:43:16', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 14 en la plataforma 4'),
(219, '2017-12-06 09:43:17', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 14 en la plataforma 7'),
(220, '2017-12-06 09:43:17', 'root@localhost', 'genero_juego', 'Se inserto el juego 14 en el genero 8'),
(221, '2017-12-06 09:43:17', 'root@localhost', 'idioma_juego', 'Se inserto el juego 14 con el idioma 1'),
(222, '2017-12-06 09:43:17', 'root@localhost', 'idioma_juego', 'Se inserto el juego 14 con el idioma 2'),
(223, '2017-12-06 09:43:17', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 14 de la casa desarrolladora 9'),
(224, '2017-12-06 09:44:08', 'root@localhost', 'juego', 'Se inserto el juego FIFA 18'),
(225, '2017-12-06 09:44:08', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 15 en la plataforma 1'),
(226, '2017-12-06 09:44:08', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 15 en la plataforma 2'),
(227, '2017-12-06 09:44:08', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 15 en la plataforma 3'),
(228, '2017-12-06 09:44:08', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 15 en la plataforma 4'),
(229, '2017-12-06 09:44:09', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 15 en la plataforma 5'),
(230, '2017-12-06 09:44:09', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 15 en la plataforma 7'),
(231, '2017-12-06 09:44:09', 'root@localhost', 'genero_juego', 'Se inserto el juego 15 en el genero 8'),
(232, '2017-12-06 09:44:09', 'root@localhost', 'idioma_juego', 'Se inserto el juego 15 con el idioma 1'),
(233, '2017-12-06 09:44:09', 'root@localhost', 'idioma_juego', 'Se inserto el juego 15 con el idioma 2'),
(234, '2017-12-06 09:44:09', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 15 de la casa desarrolladora 4'),
(235, '2017-12-06 09:49:14', 'root@localhost', 'casa_desarrolladora', 'Se inserto la casa desarrolladora Dice'),
(236, '2017-12-06 09:51:57', 'root@localhost', 'juego', 'Se inserto el juego Battlefield 1'),
(237, '2017-12-06 09:51:57', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 16 en la plataforma 2'),
(238, '2017-12-06 09:51:57', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 16 en la plataforma 4'),
(239, '2017-12-06 09:51:58', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 16 en la plataforma 5'),
(240, '2017-12-06 09:51:58', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 16 en la plataforma 7'),
(241, '2017-12-06 09:51:58', 'root@localhost', 'genero_juego', 'Se inserto el juego 16 en el genero 1'),
(242, '2017-12-06 09:51:58', 'root@localhost', 'genero_juego', 'Se inserto el juego 16 en el genero 9'),
(243, '2017-12-06 09:51:58', 'root@localhost', 'idioma_juego', 'Se inserto el juego 16 con el idioma 1'),
(244, '2017-12-06 09:51:58', 'root@localhost', 'idioma_juego', 'Se inserto el juego 16 con el idioma 2'),
(245, '2017-12-06 09:51:58', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 16 de la casa desarrolladora 4'),
(246, '2017-12-06 10:00:10', 'root@localhost', 'casa_desarrolladora', 'Se inserto la casa desarrolladora Sledgehammer Games'),
(247, '2017-12-06 10:03:18', 'root@localhost', 'juego', 'Se inserto el juego Call of Duty: Advanced Warfare'),
(248, '2017-12-06 10:03:18', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 17 en la plataforma 1'),
(249, '2017-12-06 10:03:18', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 17 en la plataforma 2'),
(250, '2017-12-06 10:03:18', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 17 en la plataforma 3'),
(251, '2017-12-06 10:03:18', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 17 en la plataforma 4'),
(252, '2017-12-06 10:03:18', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 17 en la plataforma 7'),
(253, '2017-12-06 10:03:18', 'root@localhost', 'genero_juego', 'Se inserto el juego 17 en el genero 1'),
(254, '2017-12-06 10:03:18', 'root@localhost', 'genero_juego', 'Se inserto el juego 17 en el genero 9'),
(255, '2017-12-06 10:03:18', 'root@localhost', 'idioma_juego', 'Se inserto el juego 17 con el idioma 1'),
(256, '2017-12-06 10:03:18', 'root@localhost', 'idioma_juego', 'Se inserto el juego 17 con el idioma 2'),
(257, '2017-12-06 10:03:18', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 17 de la casa desarrolladora 6'),
(258, '2017-12-06 10:06:43', 'root@localhost', 'juego', 'Se inserto el juego Resident Evil 7: Biohazard'),
(259, '2017-12-06 10:06:43', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 18 en la plataforma 2'),
(260, '2017-12-06 10:06:43', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 18 en la plataforma 4'),
(261, '2017-12-06 10:06:43', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 18 en la plataforma 7'),
(262, '2017-12-06 10:06:43', 'root@localhost', 'genero_juego', 'Se inserto el juego 18 en el genero 20'),
(263, '2017-12-06 10:06:43', 'root@localhost', 'genero_juego', 'Se inserto el juego 18 en el genero 9'),
(264, '2017-12-06 10:06:43', 'root@localhost', 'idioma_juego', 'Se inserto el juego 18 con el idioma 1'),
(265, '2017-12-06 10:06:43', 'root@localhost', 'idioma_juego', 'Se inserto el juego 18 con el idioma 2'),
(266, '2017-12-06 10:06:43', 'root@localhost', 'idioma_juego', 'Se inserto el juego 18 con el idioma 4'),
(267, '2017-12-06 10:06:43', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 18 de la casa desarrolladora 8'),
(268, '2017-12-06 10:09:08', 'root@localhost', 'pais', 'Se inserto el pais canada'),
(269, '2017-12-06 10:10:34', 'root@localhost', 'juego', 'Se inserto el juego AssassinÂ´s Creed: Unity '),
(270, '2017-12-06 10:10:34', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 19 en la plataforma 2'),
(271, '2017-12-06 10:10:34', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 19 en la plataforma 4'),
(272, '2017-12-06 10:10:34', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 19 en la plataforma 7'),
(273, '2017-12-06 10:10:34', 'root@localhost', 'genero_juego', 'Se inserto el juego 19 en el genero 1'),
(274, '2017-12-06 10:10:34', 'root@localhost', 'genero_juego', 'Se inserto el juego 19 en el genero 4'),
(275, '2017-12-06 10:10:35', 'root@localhost', 'genero_juego', 'Se inserto el juego 19 en el genero 18'),
(276, '2017-12-06 10:10:35', 'root@localhost', 'idioma_juego', 'Se inserto el juego 19 con el idioma 1'),
(277, '2017-12-06 10:10:35', 'root@localhost', 'idioma_juego', 'Se inserto el juego 19 con el idioma 2'),
(278, '2017-12-06 10:10:35', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 19 de la casa desarrolladora 3'),
(279, '2017-12-06 10:14:01', 'root@localhost', 'juego', 'Se inserto el juego GTA V'),
(280, '2017-12-06 10:14:01', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 20 en la plataforma 1'),
(281, '2017-12-06 10:14:01', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 20 en la plataforma 2'),
(282, '2017-12-06 10:14:01', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 20 en la plataforma 3'),
(283, '2017-12-06 10:14:02', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 20 en la plataforma 4'),
(284, '2017-12-06 10:14:02', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 20 en la plataforma 7'),
(285, '2017-12-06 10:14:02', 'root@localhost', 'genero_juego', 'Se inserto el juego 20 en el genero 2'),
(286, '2017-12-06 10:14:02', 'root@localhost', 'idioma_juego', 'Se inserto el juego 20 con el idioma 1'),
(287, '2017-12-06 10:14:02', 'root@localhost', 'idioma_juego', 'Se inserto el juego 20 con el idioma 2'),
(288, '2017-12-06 10:14:02', 'root@localhost', 'idioma_juego', 'Se inserto el juego 20 con el idioma 5'),
(289, '2017-12-06 10:14:02', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 20 de la casa desarrolladora 2'),
(290, '2017-12-06 10:17:34', 'root@localhost', 'juego', 'Se inserto el juego Mario Kart'),
(291, '2017-12-06 10:17:34', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 21 en la plataforma 6'),
(292, '2017-12-06 10:17:35', 'root@localhost', 'genero_juego', 'Se inserto el juego 21 en el genero 5'),
(293, '2017-12-06 10:17:35', 'root@localhost', 'idioma_juego', 'Se inserto el juego 21 con el idioma 1'),
(294, '2017-12-06 10:17:35', 'root@localhost', 'idioma_juego', 'Se inserto el juego 21 con el idioma 2'),
(295, '2017-12-06 10:17:35', 'root@localhost', 'idioma_juego', 'Se inserto el juego 21 con el idioma 4'),
(296, '2017-12-06 10:17:35', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 21 de la casa desarrolladora 1'),
(297, '2017-12-06 10:18:30', 'root@localhost', 'juego', 'Se inserto el juego Mario Kart'),
(298, '2017-12-06 10:18:30', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 22 en la plataforma 5'),
(299, '2017-12-06 10:18:30', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 22 en la plataforma 6'),
(300, '2017-12-06 10:18:30', 'root@localhost', 'genero_juego', 'Se inserto el juego 22 en el genero 5'),
(301, '2017-12-06 10:18:30', 'root@localhost', 'idioma_juego', 'Se inserto el juego 22 con el idioma 1'),
(302, '2017-12-06 10:18:30', 'root@localhost', 'idioma_juego', 'Se inserto el juego 22 con el idioma 2'),
(303, '2017-12-06 10:18:30', 'root@localhost', 'idioma_juego', 'Se inserto el juego 22 con el idioma 4'),
(304, '2017-12-06 10:18:30', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 22 de la casa desarrolladora 1'),
(305, '2017-12-06 10:21:29', 'root@localhost', 'juego', 'Se inserto el juego Call of Duty: Black Ops III'),
(306, '2017-12-06 10:21:29', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 23 en la plataforma 1'),
(307, '2017-12-06 10:21:29', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 23 en la plataforma 2'),
(308, '2017-12-06 10:21:29', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 23 en la plataforma 3'),
(309, '2017-12-06 10:21:29', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 23 en la plataforma 4'),
(310, '2017-12-06 10:21:29', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 23 en la plataforma 7'),
(311, '2017-12-06 10:21:29', 'root@localhost', 'genero_juego', 'Se inserto el juego 23 en el genero 1'),
(312, '2017-12-06 10:21:29', 'root@localhost', 'genero_juego', 'Se inserto el juego 23 en el genero 9'),
(313, '2017-12-06 10:21:29', 'root@localhost', 'idioma_juego', 'Se inserto el juego 23 con el idioma 1'),
(314, '2017-12-06 10:21:29', 'root@localhost', 'idioma_juego', 'Se inserto el juego 23 con el idioma 2'),
(315, '2017-12-06 10:21:30', 'root@localhost', 'idioma_juego', 'Se inserto el juego 23 con el idioma 3'),
(316, '2017-12-06 10:21:30', 'root@localhost', 'idioma_juego', 'Se inserto el juego 23 con el idioma 4'),
(317, '2017-12-06 10:21:30', 'root@localhost', 'idioma_juego', 'Se inserto el juego 23 con el idioma 5'),
(318, '2017-12-06 10:21:30', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 23 de la casa desarrolladora 6'),
(319, '2017-12-06 10:24:07', 'root@localhost', 'juego', 'Se inserto el juego Mario Kart'),
(320, '2017-12-06 10:24:08', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 24 en la plataforma 5'),
(321, '2017-12-06 10:24:08', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 24 en la plataforma 6'),
(322, '2017-12-06 10:24:08', 'root@localhost', 'genero_juego', 'Se inserto el juego 24 en el genero 5'),
(323, '2017-12-06 10:24:08', 'root@localhost', 'idioma_juego', 'Se inserto el juego 24 con el idioma 1'),
(324, '2017-12-06 10:24:08', 'root@localhost', 'idioma_juego', 'Se inserto el juego 24 con el idioma 2'),
(325, '2017-12-06 10:24:08', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 24 de la casa desarrolladora 1'),
(326, '2017-12-06 10:27:19', 'root@localhost', 'juego', 'Se inserto el juego Wii Sports'),
(327, '2017-12-06 10:27:19', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 25 en la plataforma 6'),
(328, '2017-12-06 10:27:19', 'root@localhost', 'genero_juego', 'Se inserto el juego 25 en el genero 8'),
(329, '2017-12-06 10:27:19', 'root@localhost', 'idioma_juego', 'Se inserto el juego 25 con el idioma 1'),
(330, '2017-12-06 10:27:19', 'root@localhost', 'idioma_juego', 'Se inserto el juego 25 con el idioma 2'),
(331, '2017-12-06 10:27:19', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 25 de la casa desarrolladora 1'),
(332, '2017-12-06 10:29:25', 'root@localhost', 'juego', 'Se inserto el juego Super Mario 3D World'),
(333, '2017-12-06 10:29:25', 'root@localhost', 'plataforma_juego', 'Se inserto el juego 26 en la plataforma 6'),
(334, '2017-12-06 10:29:25', 'root@localhost', 'genero_juego', 'Se inserto el juego 26 en el genero 4'),
(335, '2017-12-06 10:29:25', 'root@localhost', 'idioma_juego', 'Se inserto el juego 26 con el idioma 1'),
(336, '2017-12-06 10:29:25', 'root@localhost', 'idioma_juego', 'Se inserto el juego 26 con el idioma 2'),
(337, '2017-12-06 10:29:25', 'root@localhost', 'casa_desarrolladora_juego', 'Se inserto el juego 26 de la casa desarrolladora 1'),
(338, '2017-12-06 10:30:22', 'root@localhost', 'ciudad', 'Se inserto la ciudad Buga'),
(339, '2017-12-06 10:30:52', 'root@localhost', 'ciudad', 'Se inserto la ciudad Tulua'),
(340, '2017-12-06 10:31:18', 'root@localhost', 'departamento', 'Se inserto el departamento Bolivar'),
(341, '2017-12-06 10:37:55', 'root@localhost', 'ciudad', 'Se inserto la ciudad Medellin'),
(342, '2017-12-06 10:38:07', 'root@localhost', 'ciudad', 'Se inserto la ciudad Bello'),
(343, '2017-12-06 10:38:15', 'root@localhost', 'ciudad', 'Se inserto la ciudad Itagui'),
(344, '2017-12-06 10:38:37', 'root@localhost', 'departamento', 'Se inserto el departamento Atlantico'),
(345, '2017-12-06 10:38:53', 'root@localhost', 'ciudad', 'Se inserto la ciudad Barranquilla'),
(346, '2017-12-06 10:39:31', 'root@localhost', 'ciudad', 'Se inserto la ciudad Soledad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `car_id` int(11) NOT NULL,
  `cli_id` int(11) NOT NULL,
  `car_total` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Disparadores `carrito`
--
DELIMITER $$
CREATE TRIGGER `t_insertar_carrito` AFTER INSERT ON `carrito` FOR EACH ROW begin
declare cont int;
set cont=f_consbitacora();
insert into bitacora values(cont,now(),current_user(),'carrito',concat('Se registro carrito de cliente',new.cli_id));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_desarrolladora`
--

CREATE TABLE `casa_desarrolladora` (
  `cas_des_id` int(11) NOT NULL,
  `cas_des_descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_desarrolladora`
--

INSERT INTO `casa_desarrolladora` (`cas_des_id`, `cas_des_descripcion`) VALUES
(1, 'Nintendo'),
(2, 'Rockstar Games'),
(3, 'Ubisoft'),
(4, 'Electronic Arts'),
(5, 'Sony Computer Entertainment'),
(6, 'Activision'),
(7, 'Konami'),
(8, 'Capcom'),
(9, 'Naughty Dog'),
(11, 'Sledgehammer Games');

--
-- Disparadores `casa_desarrolladora`
--
DELIMITER $$
CREATE TRIGGER `t_insertar_casa_desarrolladora` AFTER INSERT ON `casa_desarrolladora` FOR EACH ROW begin
declare cont int;
set cont=f_consbitacora();
insert into bitacora values(cont,now(),current_user(),'casa_desarrolladora',concat('Se inserto la casa desarrolladora ',new.cas_des_descripcion));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_desarrolladora_juego`
--

CREATE TABLE `casa_desarrolladora_juego` (
  `cas_des_jue_id` int(11) NOT NULL,
  `cas_des_id` int(11) NOT NULL,
  `jue_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_desarrolladora_juego`
--

INSERT INTO `casa_desarrolladora_juego` (`cas_des_jue_id`, `cas_des_id`, `jue_id`) VALUES
(7, 5, 9),
(11, 9, 13),
(12, 9, 14),
(13, 4, 15),
(14, 4, 16),
(15, 6, 17),
(16, 8, 18),
(17, 3, 19),
(18, 2, 20),
(21, 6, 23),
(22, 1, 24),
(23, 1, 25),
(24, 1, 26);

--
-- Disparadores `casa_desarrolladora_juego`
--
DELIMITER $$
CREATE TRIGGER `t_insertar_casa_desarrolladora_juego` AFTER INSERT ON `casa_desarrolladora_juego` FOR EACH ROW begin
declare cont int;
set cont=f_consbitacora();
insert into bitacora values(cont,now(),current_user(),'casa_desarrolladora_juego',concat('Se inserto el juego ',new.jue_id,' de la casa desarrolladora ',new.cas_des_id));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `ciu_id` int(11) NOT NULL,
  `ciu_descripcion` varchar(30) NOT NULL,
  `dep_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`ciu_id`, `ciu_descripcion`, `dep_id`) VALUES
(1, 'Cali', 1),
(2, 'Bogota', 3),
(3, 'Buga', 1),
(4, 'Tulua', 1),
(5, 'Medellin', 2),
(6, 'Bello', 2),
(7, 'Itagui', 2),
(8, 'Barranquilla', 6),
(9, 'Soledad', 6);

--
-- Disparadores `ciudad`
--
DELIMITER $$
CREATE TRIGGER `t_insertar_ciudad` AFTER INSERT ON `ciudad` FOR EACH ROW begin
declare cont int;
set cont=f_consbitacora();
insert into bitacora values(cont,now(),current_user(),'ciudad',concat('Se inserto la ciudad ',new.ciu_descripcion));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cli_id` int(11) NOT NULL,
  `cli_nombre` varchar(30) NOT NULL,
  `cli_apellido` varchar(30) DEFAULT NULL,
  `cli_celular` varchar(15) NOT NULL,
  `cli_direccion` varchar(50) NOT NULL,
  `cli_telefono` varchar(20) NOT NULL,
  `ciu_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cli_id`, `cli_nombre`, `cli_apellido`, `cli_celular`, `cli_direccion`, `cli_telefono`, `ciu_id`, `usu_id`) VALUES
(1151970276, 'Nicolas', 'Riascos', '3162780616', 'Cra 7C Bis 72a 37', '3162780616', 1, 1);

--
-- Disparadores `cliente`
--
DELIMITER $$
CREATE TRIGGER `t_insertar_cliente` AFTER INSERT ON `cliente` FOR EACH ROW begin
declare cont int;
set cont=f_consbitacora();
insert into bitacora values(cont,now(),current_user(),'cliente',concat('Se inserto el cliente ',new.cli_nombre,' ',new.cli_apellido));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compania_envio`
--

CREATE TABLE `compania_envio` (
  `com_env_id` int(11) NOT NULL,
  `com_env_descripcion` varchar(30) NOT NULL,
  `com_env_telefono` varchar(20) NOT NULL,
  `com_env_correo` varchar(50) NOT NULL,
  `com_env_nit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Disparadores `compania_envio`
--
DELIMITER $$
CREATE TRIGGER `t_insertar_compania_envio` AFTER INSERT ON `compania_envio` FOR EACH ROW begin
declare cont int;
set cont=f_consbitacora();
insert into bitacora values(cont,now(),current_user(),'compania_envio',concat('Se inserto la compania de envio ',new.com_env_descripcion));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `dep_id` int(11) NOT NULL,
  `dep_descripcion` varchar(30) NOT NULL,
  `pai_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`dep_id`, `dep_descripcion`, `pai_id`) VALUES
(1, 'Valle del Cauca', 5),
(2, 'Antioquia', 5),
(3, 'Cundinamarca', 5),
(4, 'Bolivar', 5),
(6, 'Atlantico', 5);

--
-- Disparadores `departamento`
--
DELIMITER $$
CREATE TRIGGER `t_insertar_departamento` AFTER INSERT ON `departamento` FOR EACH ROW begin
declare cont int;
set cont=f_consbitacora();
insert into bitacora values(cont,now(),current_user(),'departamento',concat('Se inserto el departamento ',new.dep_descripcion));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_carrito`
--

CREATE TABLE `detalle_carrito` (
  `det_car_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `jue_id` int(11) NOT NULL,
  `det_car_cantidad` varchar(10) NOT NULL,
  `det_car_subtotal` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `det_ven_id` int(11) NOT NULL,
  `ven_id` int(11) NOT NULL,
  `jue_id` int(11) NOT NULL,
  `det_ven_cantidad` varchar(5) NOT NULL,
  `det_ven_subtotal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distribuidor`
--

CREATE TABLE `distribuidor` (
  `dis_id` int(11) NOT NULL,
  `dis_descripcion` varchar(30) NOT NULL,
  `dis_nit` varchar(20) NOT NULL,
  `dis_direccion` varchar(50) NOT NULL,
  `dis_telefono` varchar(20) NOT NULL,
  `dis_correo` varchar(50) NOT NULL,
  `ciu_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Disparadores `distribuidor`
--
DELIMITER $$
CREATE TRIGGER `t_insertar_distribuidor` AFTER INSERT ON `distribuidor` FOR EACH ROW begin
declare cont int;
set cont=f_consbitacora();
insert into bitacora values(cont,now(),current_user(),'distribuidor',concat('Se inserto el distribuidor ',new.dis_descripcion));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distribuidor_juego`
--

CREATE TABLE `distribuidor_juego` (
  `dis_pro_id` int(11) NOT NULL,
  `dis_id` int(11) NOT NULL,
  `jue_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `env_id` int(11) NOT NULL,
  `com_env_id` int(11) NOT NULL,
  `ven_id` int(11) NOT NULL,
  `env_fecha_despacho` varchar(15) NOT NULL,
  `env_fecha_entrega` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `gen_id` int(11) NOT NULL,
  `gen_descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`gen_id`, `gen_descripcion`) VALUES
(1, 'Accion'),
(2, 'Accion-Arcade'),
(3, 'Arcade'),
(4, 'Aventura'),
(5, 'Carrera'),
(6, 'Cartas'),
(7, 'Casino'),
(8, 'Deportes'),
(9, 'Disparos Primera Persona'),
(10, 'Disparos Tercera Persona'),
(11, 'Educativo'),
(12, 'Estrategia'),
(13, 'Lucha'),
(14, 'Musica'),
(15, 'Plataformas'),
(16, 'Puzle'),
(17, 'Rol'),
(18, 'Sigilo'),
(19, 'Simulacion'),
(20, 'Survival-Horror');

--
-- Disparadores `genero`
--
DELIMITER $$
CREATE TRIGGER `t_insertar_genero` AFTER INSERT ON `genero` FOR EACH ROW begin
declare cont int;
set cont=f_consbitacora();
insert into bitacora values(cont,now(),current_user(),'genero',concat('Se inserto el genero ',new.gen_descripcion));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero_juego`
--

CREATE TABLE `genero_juego` (
  `gen_jue_id` int(11) NOT NULL,
  `gen_id` int(11) NOT NULL,
  `jue_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `genero_juego`
--

INSERT INTO `genero_juego` (`gen_jue_id`, `gen_id`, `jue_id`) VALUES
(14, 1, 9),
(18, 2, 13),
(19, 9, 13),
(20, 8, 14),
(21, 8, 15),
(22, 1, 16),
(23, 9, 16),
(24, 1, 17),
(25, 9, 17),
(26, 20, 18),
(27, 9, 18),
(28, 1, 19),
(29, 4, 19),
(30, 18, 19),
(31, 2, 20),
(34, 1, 23),
(35, 9, 23),
(36, 5, 24),
(37, 8, 25),
(38, 4, 26);

--
-- Disparadores `genero_juego`
--
DELIMITER $$
CREATE TRIGGER `t_insertar_genero_juego` AFTER INSERT ON `genero_juego` FOR EACH ROW begin
declare cont int;
set cont=f_consbitacora();
insert into bitacora values(cont,now(),current_user(),'genero_juego',concat('Se inserto el juego ',new.jue_id,' en el genero ',new.gen_id));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `idi_id` int(11) NOT NULL,
  `idi_descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`idi_id`, `idi_descripcion`) VALUES
(1, 'Español'),
(2, 'Ingles'),
(3, 'Frances'),
(4, 'Japones'),
(5, 'Portugués');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma_juego`
--

CREATE TABLE `idioma_juego` (
  `idi_jue_id` int(11) NOT NULL,
  `idi_id` int(11) NOT NULL,
  `jue_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `idioma_juego`
--

INSERT INTO `idioma_juego` (`idi_jue_id`, `idi_id`, `jue_id`) VALUES
(43, 1, 9),
(50, 1, 13),
(51, 2, 13),
(52, 1, 14),
(53, 2, 14),
(54, 1, 15),
(55, 2, 15),
(56, 1, 16),
(57, 2, 16),
(58, 1, 17),
(59, 2, 17),
(60, 1, 18),
(61, 2, 18),
(62, 4, 18),
(63, 1, 19),
(64, 2, 19),
(65, 1, 20),
(66, 2, 20),
(67, 5, 20),
(74, 1, 23),
(75, 2, 23),
(76, 3, 23),
(77, 4, 23),
(78, 5, 23),
(79, 1, 24),
(80, 2, 24),
(81, 1, 25),
(82, 2, 25),
(83, 1, 26),
(84, 2, 26);

--
-- Disparadores `idioma_juego`
--
DELIMITER $$
CREATE TRIGGER `t_insertar_idioma_juego` AFTER INSERT ON `idioma_juego` FOR EACH ROW begin
declare cont int;
set cont=f_consbitacora();
insert into bitacora values(cont,now(),current_user(),'idioma_juego',concat('Se inserto el juego ',new.jue_id,' con el idioma ',new.idi_id));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE `juego` (
  `jue_id` int(11) NOT NULL,
  `jue_nombre` varchar(30) NOT NULL,
  `jue_anio` varchar(4) NOT NULL,
  `jue_imagen` varchar(200) NOT NULL,
  `jue_precio` varchar(10) NOT NULL,
  `jue_cantidad` varchar(10) NOT NULL,
  `jue_descripcion` varchar(1200) NOT NULL,
  `pai_id` int(11) NOT NULL,
  `jue_jugadores` varchar(4) NOT NULL,
  `jue_votacion` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `juego`
--

INSERT INTO `juego` (`jue_id`, `jue_nombre`, `jue_anio`, `jue_imagen`, `jue_precio`, `jue_cantidad`, `jue_descripcion`, `pai_id`, `jue_jugadores`, `jue_votacion`) VALUES
(13, 'Uncharted 4: A ThiefÂ´s End', '2016', 'juegos/uncharted_ps4.png', '215000', '150', 'Cronológicamente el juego toma lugar cuatro años después de Uncharted 3: La traición de Drake. El retirado cazafortunas Nathan Drake vive felizmente su vida junto con su esposa Elena Fisher, pero todo se derrumba cuando aparece su hermano Sam, a quien Nathan daba por muerto. Sam necesita su ayuda para desenmascarar una conspiración histórica pirata del famoso aventurero Henry Avery y su legendario tesoro pirata. Además, no son los únicos que buscan el tesoro, ya que Rafe Adler, multimillonario y ex socio de los hermanos mientras estuvieron en una prisión, está buscándolo, con la ayuda de Nadine Ross, la líder de la red de mercenarios Shoreline. Debido a que Nathan se siente culpable por haber dado por muerto a su hermano en el pasado, tiene que volver al mundo de los ladrones. Durante el viaje, Drake irá por suburbios y zonas cubiertas de nieve, pero la localización principal será Libertalia, una ciudad perdida en Madagascar.', 8, '1', '5'),
(14, 'PES 2018', '2017', 'juegos/pes_2018.png', '199990', '215', 'Es un videojuego de fútbol de la serie Pro Evolution Soccer desarrollado y publicado por Konami. Fue anunciado el 17 de mayo de 2017 y fue lanzado a la venta el 12 de septiembre de 2017 en América y el 14 de septiembre de 2017 en Europa para las plataformas PC, Xbox 360, Xbox One, PlayStation 3, PlayStation 4. Contará con dos diferentes versiones, la edición estándar y la edición legendaria. El paquete de la edición legendaria incluye una caja metálica, un pendrive y acceso a varios artículos dentro de PES, también elementos para myClub y a Usain Bolt.', 19, '4', '5'),
(15, 'FIFA 18', '2017', 'juegos/fifa_18.png', '199000', '250', 'FIFA 18 es un videojuego de fÃƒÂºtbol, desarrollado por Electronic Arts y publicado por EA Sports CanadÃƒÂ¡ y EA Sports Rumania. Es el 25.Ã‚Âº de la serie de videojuegos de la FIFA. SaliÃƒÂ³ a la venta el 29 de septiembre de 2017, siendo la portada del mismo Cristiano Ronaldo. Asimismo, cuenta con una ediciÃƒÂ³n con Ronaldo en la portada. Este es el segundo juego de la FIFA en la serie, tras el anterior FIFA 17, en emplear el motor de juego Frostbite, con excepciÃƒÂ³n de las versiones para Play Station 3, Xbox 360 y Nintendo Switch.', 8, '4', '5'),
(16, 'Battlefield 1', '2016', 'juegos/battlefield_5.png', '169000', '150', 'Durante la campaña un jugador, el jugador controla seis diferentes personajes desde una vista en primera persona en seis capítulos diferentes. A diferencia de campañas anteriores, la historia del modo un jugador de Battlefield 1 está compuesta por seis separadas historias de guerra, cada una enseñándolo desde los ojos de soldados separados de diferentes nacionalidades, Tormenta de Acero- el prólogo del juego está basado en Francia desde los ojos de diferentes Harlem Hellfighters, Barro y sangre - basado en Francia desde los ojos de un conductor de tanques británico, ?Amigos de altos vuelos? - Francia e Inglaterra como un piloto de combate del Real Cuerpo del Aire, Avanti Savoia - en Italia como un triste superviviente y miembro de los Arditi, avanzando ante las posiciones austrohúngaras al pie del Monte Grappa. ?El mensajero? - en la Península de Gallipoli (la parte europea de Turquía) como un corredor ANZAC, y Nada está escrito - basado en Mesopotamia desde los ojos de un guerrero Beduino bajo el mando de Lawrence de Arabia.3', 8, '1', '5'),
(17, 'Call of Duty: Advanced Warfare', '2014', 'juegos/Call_of_Duty_Advanced_Warfare.png', '135000', '135', ' videojuego de disparos en primera persona desarrollado por Sledgehammer Games y High Moon Studios, distribuido por Activision, perteneciente a la franquicia Call of Duty. Es la undécima entrega numérica dentro de la misma saga. Fue lanzado el 4 de noviembre de 2014 para PlayStation 4, Xbox One, Xbox 360, PlayStation 3 y Microsoft Windows.', 8, '1', '5'),
(18, 'Resident Evil 7: Biohazard', '2017', 'juegos/resident-evil-7.png', '18900', '170', 'Videojuego de survival horror desarrollado por la empresa Capcom, lanzado el 24 de enero de 2017 para Microsoft Windows, PlayStation 4 y Xbox One, con una versión de PlayStation 4 con soporte completo para el PlayStation VR. Es el undécimo título de la serie principal de Resident Evil, y, a diferencia de los otros juegos de la franquicia, es en primera persona.', 19, '1', '5'),
(19, 'AssassinÂ´s Creed: Unity ', '2014', 'juegos/assassins-creed-unity.jpg', '165000', '200', 'El juego se centra en París, durante la Revolución Francesa. El asesino protagonista es un nuevo personaje llamado Arno Dorian, un francés nacido en Versalles.? Después de la muerte de su padre, Arno es adoptado por una familia de la Orden de los Templarios. Su padre adoptivo (el maestro Templario) es asesinado, lo que lleva a Arno a unirse a la Hermandad de los Asesinos, donde irá ascendiendo progresivamente hasta alcanzar el rango de Asesino. Arno contará con una aliada llamada Elise de LaSerre, (la hija de su padre adoptivo) con la cual desarrolla una relación romántica. Ella también desea vengarse de la muerte de su padre uniéndose a los Asesinos.', 20, '1', '5'),
(20, 'GTA V', '2013', 'juegos/gta_ps4.png', '155000', '165', 'Es un videojuego de acción-aventura de mundo abierto desarrollado por la compañía británica Rockstar North y distribuido por Rockstar Games. Fue lanzado el 17 de septiembre de 2013 para las consolas PlayStation 3 y Xbox 360.5 Posteriormente, fue lanzado el 18 de noviembre de 2014 para las consolas de nueva generación PlayStation 4 y Xbox One con mejores gráficos y novedades interesantes como la vista en primera persona y finalmente para Microsoft Windows el 14 de abril de 2015. Se trató del primer gran título en la serie Grand Theft Auto desde el lanzamiento de Grand Theft Auto IV en 2008, el cual estrenó la de la mencionada serie de videojuegos.', 8, '1', '5'),
(23, 'Call of Duty: Black Ops III', '2015', 'juegos/call-of-duty-black-ops-3.png', '175000', '250', '40 años después de los acontecimientos en Call of Duty: Black Ops II, el mundo tiene lugar en un futuro distópico, situado en 2065, donde la ciencia y la tecnología han cambiado radicalmente a la especie humana, con la sociedad violenta y las protestas y el intento de detener el progreso de la tecnología. La tecnología militar ha avanzado hasta el punto que la robótica juega un papel principal, y se han desarrollado supersoldados. Los seres humanos están llegando al punto en el que son más máquinas que seres humanos de carne y hueso y hay muchas especulaciones sobre algún tipo de adquisición por robots. ¿Hasta dónde podremos hacer uso de la tecnología antes de que se vuelva en nuestra contra?.', 8, '2', '5'),
(24, 'Mario Kart', '2008', 'juegos/mario_kart.png', '99000', '100', 'En este juego, Mario y compañía compiten en carreras alocadas, divertidas y concurridas en el Reino Champiñón, esta vez con un gameplay muy similar al del anterior juego, Mario Kart DS lanzado en la consola Nintendo DS. Una novedad en Mario Kart Wii es que, en el juego, también se pueden usar motocicletas, además de los karts. El juego fue presentado durante la conferencia E3 2007 para Wii, mostrándose en un tráiler con el que aparecen ciertos personajes típicos de las series, nuevas pistas y otros detalles referentes a series pasadas.', 19, '4', '5'),
(25, 'Wii Sports', '2006', 'juegos/wii_sports.png', '80000', '50', 'El juego es un simulador de cinco deportes, diseñado para demostrar las capacidades inalámbricas y sensoriales del mando de Wii a los nuevos jugadores. Los cinco deportes incluidos son tenis, béisbol, bolos, golf y boxeo. Los jugadores usan el mando de la consola para imitar los movimientos hechos en la vida real en esos deportes, como mover una raqueta de tenis.  Las reglas de los juegos están simplificadas para hacerlas más accesibles a los nuevos jugadores.  El juego también incluye un modo de entrenamiento que monitoriza el progreso del jugador en los deportes.', 19, '2', '5'),
(26, 'Super Mario 3D World', '2013', 'juegos/Super_Mario_3D_World.png', '125000', '100', 'Mario y sus amigos están disfrutando de una fastástica noche de fuegos artificiales en el Reino Champiñón cuando se encuentran con una misteriosa tubería de cristal, ¡y una princesa hada muy nerviosa!.\r\n\r\nPoco tardan en enterarse de que Bowser ha hecho de las suyas. Esta vez se está dedicando a embotellar hadas y luego se las queda como presas. Cuando Bowser vuelve a hacer acto de presencia y se lleva a su nueva amiga en sus narices, Mario, Luigi, la princesa Peach y Toad se lanzan por la tubería hasta el Reino Feri para salvarla y para truncar una vez más los planes de Bowser.', 19, '4', '5');

--
-- Disparadores `juego`
--
DELIMITER $$
CREATE TRIGGER `t_insertar_juego` AFTER INSERT ON `juego` FOR EACH ROW begin
declare cont int;
set cont=f_consbitacora();
insert into bitacora values(cont,now(),current_user(),'juego',concat('Se inserto el juego ',new.jue_nombre));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `pai_id` int(11) NOT NULL,
  `pai_descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`pai_id`, `pai_descripcion`) VALUES
(1, 'Argentina'),
(2, 'Bolivia'),
(3, 'Brasil'),
(4, 'Chile'),
(5, 'Colombia'),
(6, 'Ecuador'),
(7, 'España'),
(8, 'Estados Unidos'),
(9, 'Francia'),
(10, 'Italia'),
(11, 'Mexico'),
(12, 'Panama'),
(13, 'Paraguay'),
(14, 'Peru'),
(15, 'Uruguay'),
(16, 'Venezuela'),
(19, 'Japón'),
(20, 'Canada');

--
-- Disparadores `pais`
--
DELIMITER $$
CREATE TRIGGER `t_insertar_pais` AFTER INSERT ON `pais` FOR EACH ROW begin
declare cont int;
set cont=f_consbitacora();
insert into bitacora values(cont,now(),current_user(),'pais',concat('Se inserto el pais ',new.pai_descripcion));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plataforma`
--

CREATE TABLE `plataforma` (
  `pla_id` int(11) NOT NULL,
  `pla_descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plataforma`
--

INSERT INTO `plataforma` (`pla_id`, `pla_descripcion`) VALUES
(1, 'PlayStation 3'),
(2, 'PlayStation 4'),
(3, 'XBOX 360'),
(4, 'XBOX ONE'),
(5, 'Nintendo Switch'),
(6, 'Nintendo Wii U'),
(7, 'PC');

--
-- Disparadores `plataforma`
--
DELIMITER $$
CREATE TRIGGER `t_insertar_plataforma` AFTER INSERT ON `plataforma` FOR EACH ROW begin
declare cont int;
set cont=f_consbitacora();
insert into bitacora values(cont,now(),current_user(),'plataforma',concat('Se inserto la plataforma ',new.pla_descripcion));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plataforma_juego`
--

CREATE TABLE `plataforma_juego` (
  `pla_jue_id` int(11) NOT NULL,
  `pla_id` int(11) NOT NULL,
  `jue_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plataforma_juego`
--

INSERT INTO `plataforma_juego` (`pla_jue_id`, `pla_id`, `jue_id`) VALUES
(30, 1, 9),
(31, 2, 9),
(32, 3, 9),
(33, 4, 9),
(34, 2, 5),
(35, 5, 5),
(36, 2, 6),
(42, 1, 9),
(61, 2, 13),
(62, 1, 14),
(63, 2, 14),
(64, 3, 14),
(65, 4, 14),
(66, 7, 14),
(67, 1, 15),
(68, 2, 15),
(69, 3, 15),
(70, 4, 15),
(71, 5, 15),
(72, 7, 15),
(73, 2, 16),
(74, 4, 16),
(75, 5, 16),
(76, 7, 16),
(77, 1, 17),
(78, 2, 17),
(79, 3, 17),
(80, 4, 17),
(81, 7, 17),
(82, 2, 18),
(83, 4, 18),
(84, 7, 18),
(85, 2, 19),
(86, 4, 19),
(87, 7, 19),
(88, 1, 20),
(89, 2, 20),
(90, 3, 20),
(91, 4, 20),
(92, 7, 20),
(96, 1, 23),
(97, 2, 23),
(98, 3, 23),
(99, 4, 23),
(100, 7, 23),
(101, 5, 24),
(102, 6, 24),
(103, 6, 25),
(104, 6, 26);

--
-- Disparadores `plataforma_juego`
--
DELIMITER $$
CREATE TRIGGER `t_insertar_plataforma_juego` AFTER INSERT ON `plataforma_juego` FOR EACH ROW begin
declare cont int;
set cont=f_consbitacora();
insert into bitacora values(cont,now(),current_user(),'plataforma_juego',concat('Se inserto el juego ',new.jue_id,' en la plataforma ',new.pla_id));
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recomendacion`
--

CREATE TABLE `recomendacion` (
  `rec_id` int(11) NOT NULL,
  `cli_id` int(11) NOT NULL,
  `jue_id` int(11) NOT NULL,
  `rec_correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rol_id` int(11) NOT NULL,
  `rol_descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_id`, `rol_descripcion`) VALUES
(1, 'comun'),
(2, 'admin'),
(3, 'master');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pago`
--

CREATE TABLE `tipo_pago` (
  `tip_pag_id` int(11) NOT NULL,
  `tip_pag_descripcion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

CREATE TABLE `transaccion` (
  `tra_id` int(11) NOT NULL,
  `tra_numero` varchar(20) NOT NULL,
  `ven_id` int(11) NOT NULL,
  `tip_pag_id` int(11) NOT NULL,
  `tra_cuotas` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_correo` varchar(50) NOT NULL,
  `usu_clave` varchar(20) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_id`, `usu_correo`, `usu_clave`, `rol_id`) VALUES
(1, 'nicolas@gmail.com', '123', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `val_id` int(11) NOT NULL,
  `jue_id` int(11) NOT NULL,
  `val_cantidad_valoraciones` int(11) NOT NULL,
  `val_total_valoraciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `ven_id` int(11) NOT NULL,
  `cli_id` int(11) NOT NULL,
  `ven_total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Disparadores `venta`
--
DELIMITER $$
CREATE TRIGGER `t_insertar_venta` AFTER INSERT ON `venta` FOR EACH ROW begin
declare cont int;
set cont=f_consbitacora();
insert into bitacora values(cont,now(),current_user(),'venta',concat('INSERTAR','Se realizo venta, cliente',new.cli_id,' por ',new.ven_total));
end
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`bit_id`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `cli_id` (`cli_id`);

--
-- Indices de la tabla `casa_desarrolladora`
--
ALTER TABLE `casa_desarrolladora`
  ADD PRIMARY KEY (`cas_des_id`);

--
-- Indices de la tabla `casa_desarrolladora_juego`
--
ALTER TABLE `casa_desarrolladora_juego`
  ADD PRIMARY KEY (`cas_des_jue_id`),
  ADD KEY `cas_des_id` (`cas_des_id`),
  ADD KEY `jue_id` (`jue_id`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`ciu_id`),
  ADD KEY `dep_id` (`dep_id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cli_id`),
  ADD KEY `ciu_id` (`ciu_id`),
  ADD KEY `usu_id` (`usu_id`);

--
-- Indices de la tabla `compania_envio`
--
ALTER TABLE `compania_envio`
  ADD PRIMARY KEY (`com_env_id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`dep_id`),
  ADD KEY `pai_id` (`pai_id`);

--
-- Indices de la tabla `detalle_carrito`
--
ALTER TABLE `detalle_carrito`
  ADD PRIMARY KEY (`det_car_id`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `jue_id` (`jue_id`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`det_ven_id`),
  ADD KEY `ven_id` (`ven_id`),
  ADD KEY `jue_id` (`jue_id`);

--
-- Indices de la tabla `distribuidor`
--
ALTER TABLE `distribuidor`
  ADD PRIMARY KEY (`dis_id`),
  ADD KEY `usu_id` (`usu_id`),
  ADD KEY `ciu_id` (`ciu_id`);

--
-- Indices de la tabla `distribuidor_juego`
--
ALTER TABLE `distribuidor_juego`
  ADD PRIMARY KEY (`dis_pro_id`),
  ADD KEY `dis_id` (`dis_id`),
  ADD KEY `jue_id` (`jue_id`);

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`env_id`),
  ADD KEY `com_env_id` (`com_env_id`),
  ADD KEY `ven_id` (`ven_id`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`gen_id`);

--
-- Indices de la tabla `genero_juego`
--
ALTER TABLE `genero_juego`
  ADD PRIMARY KEY (`gen_jue_id`),
  ADD KEY `gen_id` (`gen_id`),
  ADD KEY `jue_id` (`jue_id`);

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`idi_id`);

--
-- Indices de la tabla `idioma_juego`
--
ALTER TABLE `idioma_juego`
  ADD PRIMARY KEY (`idi_jue_id`),
  ADD KEY `idi_id` (`idi_id`),
  ADD KEY `jue_id` (`jue_id`);

--
-- Indices de la tabla `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`jue_id`),
  ADD KEY `pai_id` (`pai_id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`pai_id`);

--
-- Indices de la tabla `plataforma`
--
ALTER TABLE `plataforma`
  ADD PRIMARY KEY (`pla_id`);

--
-- Indices de la tabla `plataforma_juego`
--
ALTER TABLE `plataforma_juego`
  ADD PRIMARY KEY (`pla_jue_id`),
  ADD KEY `pla_id` (`pla_id`),
  ADD KEY `jue_id` (`jue_id`);

--
-- Indices de la tabla `recomendacion`
--
ALTER TABLE `recomendacion`
  ADD PRIMARY KEY (`rec_id`),
  ADD KEY `cli_id` (`cli_id`),
  ADD KEY `jue_id` (`jue_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  ADD PRIMARY KEY (`tip_pag_id`);

--
-- Indices de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD PRIMARY KEY (`tra_id`),
  ADD KEY `ven_id` (`ven_id`),
  ADD KEY `tip_pag_id` (`tip_pag_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`val_id`),
  ADD KEY `jue_id` (`jue_id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`ven_id`),
  ADD KEY `cli_id` (`cli_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `casa_desarrolladora`
--
ALTER TABLE `casa_desarrolladora`
  MODIFY `cas_des_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `casa_desarrolladora_juego`
--
ALTER TABLE `casa_desarrolladora_juego`
  MODIFY `cas_des_jue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `ciu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1151970277;
--
-- AUTO_INCREMENT de la tabla `compania_envio`
--
ALTER TABLE `compania_envio`
  MODIFY `com_env_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `detalle_carrito`
--
ALTER TABLE `detalle_carrito`
  MODIFY `det_car_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `det_ven_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `distribuidor`
--
ALTER TABLE `distribuidor`
  MODIFY `dis_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `distribuidor_juego`
--
ALTER TABLE `distribuidor_juego`
  MODIFY `dis_pro_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `envio`
--
ALTER TABLE `envio`
  MODIFY `env_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `gen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `genero_juego`
--
ALTER TABLE `genero_juego`
  MODIFY `gen_jue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `idi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `idioma_juego`
--
ALTER TABLE `idioma_juego`
  MODIFY `idi_jue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT de la tabla `juego`
--
ALTER TABLE `juego`
  MODIFY `jue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `pai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `plataforma`
--
ALTER TABLE `plataforma`
  MODIFY `pla_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `plataforma_juego`
--
ALTER TABLE `plataforma_juego`
  MODIFY `pla_jue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT de la tabla `recomendacion`
--
ALTER TABLE `recomendacion`
  MODIFY `rec_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  MODIFY `tra_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `val_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `ven_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`cli_id`) REFERENCES `cliente` (`cli_id`);

--
-- Filtros para la tabla `casa_desarrolladora_juego`
--
ALTER TABLE `casa_desarrolladora_juego`
  ADD CONSTRAINT `casa_desarrolladora_juego_ibfk_3` FOREIGN KEY (`cas_des_id`) REFERENCES `casa_desarrolladora` (`cas_des_id`);

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`dep_id`) REFERENCES `departamento` (`dep_id`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`ciu_id`) REFERENCES `ciudad` (`ciu_id`),
  ADD CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`usu_id`) REFERENCES `usuario` (`usu_id`);

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `departamento_ibfk_1` FOREIGN KEY (`pai_id`) REFERENCES `pais` (`pai_id`);

--
-- Filtros para la tabla `detalle_carrito`
--
ALTER TABLE `detalle_carrito`
  ADD CONSTRAINT `detalle_carrito_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `carrito` (`car_id`);

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`ven_id`) REFERENCES `venta` (`ven_id`);

--
-- Filtros para la tabla `distribuidor`
--
ALTER TABLE `distribuidor`
  ADD CONSTRAINT `distribuidor_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `usuario` (`usu_id`),
  ADD CONSTRAINT `distribuidor_ibfk_2` FOREIGN KEY (`ciu_id`) REFERENCES `ciudad` (`ciu_id`);

--
-- Filtros para la tabla `distribuidor_juego`
--
ALTER TABLE `distribuidor_juego`
  ADD CONSTRAINT `distribuidor_juego_ibfk_1` FOREIGN KEY (`dis_id`) REFERENCES `distribuidor` (`dis_id`);

--
-- Filtros para la tabla `envio`
--
ALTER TABLE `envio`
  ADD CONSTRAINT `envio_ibfk_1` FOREIGN KEY (`com_env_id`) REFERENCES `compania_envio` (`com_env_id`),
  ADD CONSTRAINT `envio_ibfk_2` FOREIGN KEY (`ven_id`) REFERENCES `venta` (`ven_id`);

--
-- Filtros para la tabla `genero_juego`
--
ALTER TABLE `genero_juego`
  ADD CONSTRAINT `genero_juego_ibfk_1` FOREIGN KEY (`gen_id`) REFERENCES `genero` (`gen_id`);

--
-- Filtros para la tabla `idioma_juego`
--
ALTER TABLE `idioma_juego`
  ADD CONSTRAINT `idioma_juego_ibfk_1` FOREIGN KEY (`idi_id`) REFERENCES `idioma` (`idi_id`);

--
-- Filtros para la tabla `juego`
--
ALTER TABLE `juego`
  ADD CONSTRAINT `juego_ibfk_1` FOREIGN KEY (`pai_id`) REFERENCES `pais` (`pai_id`);

--
-- Filtros para la tabla `plataforma_juego`
--
ALTER TABLE `plataforma_juego`
  ADD CONSTRAINT `plataforma_juego_ibfk_2` FOREIGN KEY (`pla_id`) REFERENCES `plataforma` (`pla_id`);

--
-- Filtros para la tabla `recomendacion`
--
ALTER TABLE `recomendacion`
  ADD CONSTRAINT `recomendacion_ibfk_1` FOREIGN KEY (`cli_id`) REFERENCES `cliente` (`cli_id`);

--
-- Filtros para la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD CONSTRAINT `transaccion_ibfk_1` FOREIGN KEY (`ven_id`) REFERENCES `venta` (`ven_id`),
  ADD CONSTRAINT `transaccion_ibfk_2` FOREIGN KEY (`tip_pag_id`) REFERENCES `tipo_pago` (`tip_pag_id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rol_id`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`cli_id`) REFERENCES `cliente` (`cli_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
