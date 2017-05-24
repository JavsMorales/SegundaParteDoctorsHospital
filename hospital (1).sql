-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-05-2017 a las 13:39:56
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospital`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `Num_Ingreso` int(10) NOT NULL,
  `FIngreso` datetime DEFAULT NULL,
  `FAlta` datetime DEFAULT NULL,
  `Planta` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Cama` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Alergico` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Diagnostico` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Coste` decimal(19,4) DEFAULT NULL,
  `Num_Historial` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Num_Colegiado` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`Num_Ingreso`, `FIngreso`, `FAlta`, `Planta`, `Cama`, `Alergico`, `Diagnostico`, `Coste`, `Num_Historial`, `Num_Colegiado`) VALUES
(1, '2002-01-23 00:00:00', '2002-02-23 00:00:00', '13', '121', '1', 'Amputación', '600.0000', '12342-F', '1010'),
(2, '2002-05-15 00:00:00', '2002-05-20 00:00:00', '1', '12 ', '1', 'Depresión', '120.5000', '15343-D', '3655'),
(3, '2002-06-20 00:00:00', '2002-06-22 00:00:00', '1', '15 ', '1', 'Esquizofrenia', '53.6000', '13131-P', '3655'),
(4, '2002-07-01 00:00:00', '2002-07-01 00:00:00', '3', '22 ', '1', 'Fractura', '32.4000', '15343-D', '2121'),
(6, '2002-09-28 00:00:00', '2002-10-03 00:00:00', '1', '31 ', '1', 'Depresión', '120.5000', '13131-P', '2020'),
(7, '2003-01-01 00:00:00', '2003-01-04 00:00:00', '3', '26 ', '1', 'Fractura', '47.3600', '52140-K', '2121'),
(8, '2003-01-19 00:00:00', '2003-01-20 00:00:00', '1', '27 ', '1', 'Doble Personalidad', '93.5100', '52140-K', '3655');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `Num_Colegiado` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `Nom_Medico` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Apell_Medico` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Especialidad` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Antiguedad` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`Num_Colegiado`, `Nom_Medico`, `Apell_Medico`, `Especialidad`, `Antiguedad`) VALUES
('1231', 'Sebastián', 'Esteban Muñoz', 'Psiquiatra', 5),
('2020', 'Antonio', 'Vidal Torres', 'Psiquiatra', 2),
('2121', 'Eva', 'Pons Prats', 'Radiólogo', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `Num_Historial` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `Nom_Paciente` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Apell_Paciente` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FNacimiento` datetime DEFAULT NULL,
  `Domicilio` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Poblacion` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sexo` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`Num_Historial`, `Nom_Paciente`, `Apell_Paciente`, `FNacimiento`, `Domicilio`, `Poblacion`, `Sexo`) VALUES
('12342-F  ', 'Enrique    ', 'Morales López    ', '1975-01-03 00:00:00', 'Pº de la Castellana, 133    ', 'Madrid    ', 'M'),
('13131-P  ', 'Jaime    ', 'Flores Sancho    ', '1970-12-15 00:00:00', 'c/ Trujillo, 13    ', 'Leganés    ', 'H'),
('15343-D  ', 'Rogelia  aaa  ', 'Martínez Lozano    ', '1956-04-01 00:00:00', 'c/ Versalles, 17    ', 'Fuenlabrada    ', 'M'),
('32154-I  ', 'Carlos    ', 'Jimenez Blanco    ', '1955-12-15 00:00:00', 'c/ Gran Vía, 34    ', 'Madrid    ', 'H'),
('52140-K  ', 'Mónica    ', 'Armengol Prats    ', '1970-06-21 00:00:00', 'c/ Doce de Octubre, 25    ', 'Madrid    ', 'M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `user` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`user`, `pwd`, `email`) VALUES
('Javi', '123', 'javi@hospital.com'),
('kiko', '123', 'kiko@hospital.com'),
('Manolo', '456', 'manolo@hospital.com'),
('rafa', '456', 'rafa@hospital.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`Num_Ingreso`),
  ADD KEY `Num_Ingreso` (`Num_Ingreso`),
  ADD KEY `Num_Historial` (`Num_Historial`),
  ADD KEY `Num_Colegiado` (`Num_Colegiado`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`Num_Colegiado`),
  ADD KEY `Num_Colegiado` (`Num_Colegiado`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`Num_Historial`),
  ADD KEY `Num_Historial` (`Num_Historial`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
