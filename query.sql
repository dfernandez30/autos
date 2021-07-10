CREATE DATABASE EvUnidad2;
USE DATABASE EvUnidad2;

CREATE TABLE Color
(idColor int NOT NULL PRIMARY KEY,
nombre_color varchar(20) NOT NULL);

CREATE TABLE Marca
(idMarca int NOT NULL PRIMARY KEY,
nombre_marca varchar(20) NOT NULL);

CREATE TABLE Automovil
(patente varchar(6) NOT NULL PRIMARY KEY,
idMarca int NOT NULL FOREIGN KEY REFERENCES Marca(idMarca),
idColor int NOT NULL FOREIGN KEY REFERENCES Color(idColor),
annio int NOT NULL);