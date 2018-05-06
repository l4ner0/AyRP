-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2018 a las 23:47:44
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ayrp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `degradado_materia`
--

CREATE TABLE IF NOT EXISTS `degradado_materia` (
`id_degradado` int(11) NOT NULL,
  `nombre_materia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `preg_correctas` int(11) NOT NULL,
  `pre_incorrectas` int(11) NOT NULL,
  `pre_nc` int(11) NOT NULL,
  `id_info` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_degradado`
--

CREATE TABLE IF NOT EXISTS `info_degradado` (
`id_info` int(11) NOT NULL,
  `universidad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ano_examen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `puntaje_final` int(11) NOT NULL,
  `total_preg_correctas` int(11) NOT NULL,
  `total_preg_incorrectas` int(11) NOT NULL,
  `total_preg_nc` int(11) NOT NULL,
  `fecha_degradado` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hora_degradado` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
`id_materia` int(11) NOT NULL,
  `nombre_materia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cant_preguntas` int(11) NOT NULL,
  `id_perfil` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=85 ;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `nombre_materia`, `cant_preguntas`, `id_perfil`) VALUES
(80, 'CIENCIAS', 40, 40),
(81, 'LETRAS', 30, 40),
(82, 'RV', 20, 41),
(83, 'RM', 20, 41),
(84, 'CIENCIAS', 60, 41);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles_examen`
--

CREATE TABLE IF NOT EXISTS `perfiles_examen` (
`id_perfil` int(11) NOT NULL,
  `nombre_perfil` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cant_materias` int(11) NOT NULL,
  `opciones_pregunta` int(11) NOT NULL,
  `fecha` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42 ;

--
-- Volcado de datos para la tabla `perfiles_examen`
--

INSERT INTO `perfiles_examen` (`id_perfil`, `nombre_perfil`, `cant_materias`, `opciones_pregunta`, `fecha`, `id_usuario`) VALUES
(40, 'unfv', 2, 5, '26-4-2018', 13),
(41, 'unac', 3, 5, '5-5-2018', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id_usuario` int(11) NOT NULL,
  `foto_usuario` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nick` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ap_paterno` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `ap_materno` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `permiso` int(1) NOT NULL DEFAULT '0',
  `estado_cuenta` int(1) NOT NULL DEFAULT '0',
  `key_reg` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `foto_usuario`, `nick`, `nombres`, `ap_paterno`, `ap_materno`, `correo`, `password`, `permiso`, `estado_cuenta`, `key_reg`) VALUES
(13, '', 'l4ner0', 'Diego Alejandro', 'Urbina', 'Sante', 'diegourbina_10@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 0, ''),
(15, '', 'Monis', 'Rodrigo Alonso', 'Urbina', 'Sante', 'diegourbina1284@gmail.com', 'c33367701511b4f6020ec61ded352059', 0, 0, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `degradado_materia`
--
ALTER TABLE `degradado_materia`
 ADD PRIMARY KEY (`id_degradado`), ADD KEY `id_info` (`id_info`);

--
-- Indices de la tabla `info_degradado`
--
ALTER TABLE `info_degradado`
 ADD PRIMARY KEY (`id_info`), ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
 ADD PRIMARY KEY (`id_materia`), ADD KEY `id_perfil` (`id_perfil`);

--
-- Indices de la tabla `perfiles_examen`
--
ALTER TABLE `perfiles_examen`
 ADD PRIMARY KEY (`id_perfil`), ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id_usuario`), ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `degradado_materia`
--
ALTER TABLE `degradado_materia`
MODIFY `id_degradado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `info_degradado`
--
ALTER TABLE `info_degradado`
MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT de la tabla `perfiles_examen`
--
ALTER TABLE `perfiles_examen`
MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `degradado_materia`
--
ALTER TABLE `degradado_materia`
ADD CONSTRAINT `degradado_materia_ibfk_1` FOREIGN KEY (`id_info`) REFERENCES `info_degradado` (`id_info`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `info_degradado`
--
ALTER TABLE `info_degradado`
ADD CONSTRAINT `info_degradado_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
ADD CONSTRAINT `materias_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `perfiles_examen` (`id_perfil`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `perfiles_examen`
--
ALTER TABLE `perfiles_examen`
ADD CONSTRAINT `perfiles_examen_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
