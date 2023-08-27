-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2023 a las 03:50:53
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
-- Base de datos: `tallergk`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `v_regUsuario` (IN `email` VARCHAR(70))   BEGIN
    	SELECT `id_usuario`, `correo_Usuario`, `password_usuario`, `estado_usuario` FROM `usuario` WHERE 			`correo_Usuario` = email and `estado_usuario` = 1;
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `idDetallepedido` int(11) NOT NULL,
  `idproductoFK` int(11) DEFAULT NULL,
  `cantidadproducto` int(11) DEFAULT NULL,
  `precioproducto` double DEFAULT NULL,
  `subtotalproducto` double DEFAULT NULL,
  `idpedidoFK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio`
--

CREATE TABLE `domicilio` (
  `idDomicilio` int(11) NOT NULL,
  `horaDomicilio` time DEFAULT NULL,
  `estadoDomicilio` varchar(30) DEFAULT NULL,
  `idpedidoFK` int(11) DEFAULT NULL,
  `idDomicilioFK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `estado_id` int(11) NOT NULL,
  `estado_name` varchar(20) DEFAULT NULL,
  `estado_dsc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`estado_id`, `estado_name`, `estado_dsc`) VALUES
(1, 'Activo', 'Este estado es de un usuario activo'),
(2, 'Inativo', 'Este usuario esta inactivo por cualquier situacion en la plataforma');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL,
  `fechapedido` date DEFAULT NULL,
  `horapedido` time DEFAULT NULL,
  `totalpedido` double DEFAULT NULL,
  `estadopedido` varchar(30) DEFAULT NULL,
  `pedidoadomicilio` char(3) DEFAULT NULL,
  `idusuarioFK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idproducto` int(11) NOT NULL,
  `descripProducto` varchar(100) DEFAULT NULL,
  `precioproducto` double DEFAULT NULL,
  `categoriaproducto` varchar(40) DEFAULT NULL,
  `estadoproducto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_usuario`
--

CREATE TABLE `rol_usuario` (
  `idRolusuario` int(11) NOT NULL,
  `descripRolusuario` varchar(30) DEFAULT NULL,
  `estadoRolusuario` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `tipo_DocUsuario` varchar(30) DEFAULT NULL,
  `no_DocUsuario` varchar(20) DEFAULT NULL,
  `nombre_usuario` varchar(50) DEFAULT NULL,
  `apellido_usuario` varchar(50) DEFAULT NULL,
  `direccion_usuario` varchar(80) DEFAULT NULL,
  `telefono_Usuario` varchar(20) DEFAULT NULL,
  `correo_Usuario` varchar(70) DEFAULT NULL,
  `password_usuario` varchar(20) DEFAULT NULL,
  `foto_usuario` tinyblob DEFAULT NULL,
  `estado_usuario` int(11) DEFAULT NULL,
  `idRolusuarioFK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `tipo_DocUsuario`, `no_DocUsuario`, `nombre_usuario`, `apellido_usuario`, `direccion_usuario`, `telefono_Usuario`, `correo_Usuario`, `password_usuario`, `foto_usuario`, `estado_usuario`, `idRolusuarioFK`) VALUES
(0, NULL, NULL, 'juana', 'perez', 'askjldfadslk', '12312312', 'juana@gmail.com', '123123', NULL, 2, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD PRIMARY KEY (`idDetallepedido`),
  ADD KEY `idpedidoFK` (`idpedidoFK`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`estado_id`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `idusuarioFK` (`idusuarioFK`);

--
-- Indices de la tabla `rol_usuario`
--
ALTER TABLE `rol_usuario`
  ADD PRIMARY KEY (`idRolusuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `idRolusuarioFK` (`idRolusuarioFK`),
  ADD KEY `estado_usuario` (`estado_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `estado_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD CONSTRAINT `detallepedido_idpedidoFK_pedido_idpedidoPK` FOREIGN KEY (`idpedidoFK`) REFERENCES `pedido` (`idpedido`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_idusuarioFK_usuario_idusuarioPK` FOREIGN KEY (`idusuarioFK`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idRolusuarioFK`) REFERENCES `rol_usuario` (`idRolusuario`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`estado_usuario`) REFERENCES `estado` (`estado_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
