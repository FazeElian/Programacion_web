-- Creación de la base de datos --
CREATE DATABASE CRUD_PHP;

-- Eliminación de la base de datos --
-- DROP DATABASE CRUD_PHP; --

-- Usando la base de datos --
USE CRUD_PHP;

-- Creación de tabla USUARIOS --
CREATE TABLE USUARIOS(
    idUsuario int NOT NULL AUTO_INCREMENT,
    correo varchar(100) NOT NULL,
    nombreUsuario varchar(30) NOT NULL,
    contraseña varchar(30) NOT NULL,

    PRIMARY KEY (idUsuario)
);

-- Creación de tabla ROLES --
CREATE TABLE ROLES (
  idRol int NOT NULL AUTO_INCREMENT,
  nombreRol varchar(30) NOT NULL,

  PRIMARY KEY(idRol)
);