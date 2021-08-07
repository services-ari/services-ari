-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2021 a las 22:01:46
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `olweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_test`
--

DROP TABLE IF EXISTS `cc_test`;
CREATE TABLE `cc_test` (
  `id` int(11) NOT NULL,
  `cc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identificador` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gate` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config_ckh`
--

DROP TABLE IF EXISTS `config_ckh`;
CREATE TABLE `config_ckh` (
  `id` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `key_captche` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deads`
--

DROP TABLE IF EXISTS `deads`;
CREATE TABLE `deads` (
  `id` int(11) NOT NULL,
  `idkey` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cc` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gates`
--

DROP TABLE IF EXISTS `gates`;
CREATE TABLE `gates` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `link` text NOT NULL,
  `costo` int(11) NOT NULL,
  `activo` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gates`
--

INSERT INTO `gates` (`id`, `nombre`, `descripcion`, `link`, `costo`, `activo`) VALUES
(1, 'ARTEMISA', 'AMEX - VISA - MC', '', 5, 1),
(2, 'DIONISIO', 'MC - DISCOVER', '', 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `keys_chk`
--

DROP TABLE IF EXISTS `keys_chk`;
CREATE TABLE `keys_chk` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creditos` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `keys_chk`
--

INSERT INTO `keys_chk` (`id`, `usuario`, `clave`, `creditos`, `fecha`, `valor`) VALUES
(1, 'danny', 'danny123', 100, '2021-06-19', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lives`
--

DROP TABLE IF EXISTS `lives`;
CREATE TABLE `lives` (
  `id` int(11) NOT NULL,
  `idkey` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cc` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `desc` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `olympus`
--

DROP TABLE IF EXISTS `olympus`;
CREATE TABLE `olympus` (
  `id` int(11) NOT NULL,
  `cc` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mes` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anio` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ccv` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proxy`
--

DROP TABLE IF EXISTS `proxy`;
CREATE TABLE `proxy` (
  `id` int(11) NOT NULL,
  `list_ip` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list_port` int(11) DEFAULT NULL,
  `list_protocol` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list_anonymity` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cc_test`
--
ALTER TABLE `cc_test`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `config_ckh`
--
ALTER TABLE `config_ckh`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `deads`
--
ALTER TABLE `deads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gates`
--
ALTER TABLE `gates`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `keys_chk`
--
ALTER TABLE `keys_chk`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lives`
--
ALTER TABLE `lives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkey` (`idkey`);

--
-- Indices de la tabla `olympus`
--
ALTER TABLE `olympus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proxy`
--
ALTER TABLE `proxy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cc_test`
--
ALTER TABLE `cc_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `config_ckh`
--
ALTER TABLE `config_ckh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `deads`
--
ALTER TABLE `deads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gates`
--
ALTER TABLE `gates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `keys_chk`
--
ALTER TABLE `keys_chk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `lives`
--
ALTER TABLE `lives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `olympus`
--
ALTER TABLE `olympus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proxy`
--
ALTER TABLE `proxy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
