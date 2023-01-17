CREATE DATABASE eventos;

USE eventos;

CREATE TABLE
espectaculo (
    cod_espectaculo VARCHAR(15) NOT NULL,
    nombre VARCHAR(15) NOT NULL,
    tipo VARCHAR(10) NOT NULL,
    fecha_inicial DATE,
    fecha_final DATE,
    interprete VARCHAR(15) NOT NULL,
    cod_recinto VARCHAR(15)NOT NULL
);

CREATE TABLE precios_espectaculos (
    cod_espectaculo VARCHAR(15) NOT NULL,
    cod_recinto VARCHAR(15)NOT NULL,
    zona VARCHAR(10)NOT NULL,
    precio DECIMAL NOT NULL
);

CREATE TABLE recintos (
    cod_recinto VARCHAR(15) NOT NULL,
    nombre VARCHAR(10) NOT NULL,
    direccion VARCHAR(10) NOT NULL, 
    ciudad VARCHAR(10) NOT NULL, 
    telefono INT,
    horario VARCHAR (10) NOT NULL
);

CREATE TABLE zona_recintos (
    cod_recintos VARCHAR(15) NOT NULL,--eliminar tabla
    zona VARCHAR(10),
    capacidad INT NOT NULL
);

CREATE TABLE asientos ( 
    cod_recinto VARCHAR(15) NOT NULL, 
    zona VARCHAR(10) NOT NULL, 
    fila VARCHAR(5) NOT NULL,
    numero VARCHAR(5) NOT NULL
);

CREATE TABLE representaciones (
    cod_espectaculo VARCHAR(15) NOT NULL,
    fecha DATE NOT NULL,
    hora TIME NOT NULL
);

CREATE TABLE entradas(
    cod_espectaculo VARCHAR(15) NOT NULL,
    fecha DATE NOT NULL,
    hora TIME NOT NULL,
    cod_recinto VARCHAR(15) NOT NULL,
    zona VARCHAR(10) NOT NULL, 
    fila VARCHAR(5) NOT NULL,
    numero VARCHAR(5) NOT NULL,
    dni_cliente VARCHAR(10) NOT null

);

CREATE TABLE espectadores (
    dni_cliente VARCHAR(10)NOT NULL,
    nombre VARCHAR(15) NOT NULL,
    direccion VARCHAR(20) NOT NULL,
    telefono INT,
    ciudad VARCHAR(10),
    ntarjeta INT
);

DROP Table zona_resintos;