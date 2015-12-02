--Creación de la base de datos;
CREATE DATABASE `TuPortalPersonal` /*!40100 DEFAULT CHARACTER SET latin1 */;
--Creación tabla Curso;
CREATE TABLE `Curso` (
  `idCurso` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `FechaInicio` date DEFAULT NULL,
  `FechaFin` date DEFAULT NULL,
  `Horas` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCurso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--Crear tabla usuario;
CREATE TABLE `Usuario` (
  `nombreUsuario` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`nombreUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Creación tabla Tareas;
CREATE TABLE `Tareas` (
  `idTareas` int(11) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Curso_idCurso` int(11) NOT NULL,
  PRIMARY KEY (`idTareas`),
  KEY `fk_Tareas_curso_idx` (`Curso_idCurso`),
  CONSTRAINT `fk_Tareas_curso` FOREIGN KEY (`Curso_idCurso`) REFERENCES `Curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Creación tabla imparte curso.;

CREATE TABLE `ImparteCurso` (
  `Curso_idCurso` int(11) NOT NULL,
  `Usuarios_nombreUsuario` varchar(45) NOT NULL,
  KEY `fk_Curso_impartir_idx` (`Curso_idCurso`),
  KEY `fk_Maestro_idx` (`Usuarios_nombreUsuario`),
  CONSTRAINT `fk_Curso_impartir` FOREIGN KEY (`Curso_idCurso`) REFERENCES `Curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Maestro` FOREIGN KEY (`Usuarios_nombreUsuario`) REFERENCES `Usuario` (`nombreUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--Creación tabla alumno curso;
CREATE TABLE `AlumnoCurso` (
  `Curso_idCurso` int(11) NOT NULL,
  `Usuarios_nombreUsuario` varchar(45) NOT NULL,
  KEY `FK_Curso_idx` (`Curso_idCurso`),
  KEY `FK_Alumno_idx` (`Usuarios_nombreUsuario`),
  CONSTRAINT `FK_Alumno` FOREIGN KEY (`Usuarios_nombreUsuario`) REFERENCES `Usuario` (`nombreUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_Curso` FOREIGN KEY (`Curso_idCurso`) REFERENCES `Curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

