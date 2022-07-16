/* 
SQL: Structure Query Language - Lenguaje Estructurado de Consulta

Base de datos: una colección de datos que están organizados

Una Sentencia SQL es una línea de código para trabajar con nuestra BD 

Existen 2 tipos de sentencias SQL:

1-. Sentencias Estructurales: son las que nos permitirán crear, modificar o eliminar objetos, usuarios y propiedades de nuestra BD 

2-. Sentencias de Datos: son las que nos permitirán insertar, eliminar, modificar y buscar información en nuestra BD
*/

/*
En MySQL existen 2 tipos de Engine para tablas: 

1-. MyISAM - Tablas planas como Excel
2-. InnoDB - Tablas relacionales como Access
*/

CREATE DATABASE mis_contactos;

USE mis_contactos;

CREATE TABLE contactos(
    email VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    sexo CHAR(1),
    nacimiento DATE,
    telefono VARCHAR(13),
    pais VARCHAR(50) NOT NULL,
    imagen VARCHAR(50),
    PRIMARY KEY(email),
    FULLTEXT KEY buscador(email, nombre, sexo, telefono, pais)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE pais(
  id_pais INT NOT NULL AUTO_INCREMENT,
  pais VARCHAR(50) NOT NULL,
  PRIMARY KEY(id_pais)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO pais (id_pais,pais) VALUES 
(1,"Venezuela"),
(2,"México"),
(3,"Colombia"),
(4,"Guatemala"),
(5,"España"),
(6,"Brasil"),
(7,"Paraguay"),
(8,"Uruguay"),
(9,"Perú"),
(10,"Argentina"),
(11,"Chile"),
(12,"Honduras"),
(13,"El Salvador"),
(14,"Nicaragua"),
(15,"Costa Rica"),
(16,"Panamá"),
(17,"Ecuador"),
(18,"Bolivia"),
(19,"Cánada"),
(20,"Estados Unidos"),
(21,"Groenlandia"),
(22,"República Dominicana"),
(23,"Haití"),
(24,"Cuba"),
(25,"Belice"),
(26,"Inglaterra"),
(27,"Francia"),
(28,"Alemania"),
(29,"Italia"),
(30,"Japón"),
(31,"China"),
(32,"Egipto"),
(33,"Sudáfrica"),
(34,"Australia"),
(35,"Nueva Zelanda");