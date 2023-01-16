CREATE DATABASE Pubs;
use Pubs;

CREATE TABLE empleado(
    dni_empleado VARCHAR(10),
    nombre VARCHAR(11),
    domicilio VARCHAR(15) 
);
CREATE TABLE pub_empleado(
    cod_pub VARCHAR(5),
    dni_empleado VARCHAR(10),
    funcion VARCHAR(10)
);

CREATE TABLE titular( 
    dni_titular VARCHAR(10),
    nombre VARCHAR(11),
    domicilio VARCHAR(15),
    cod_pub VARCHAR(5)

);

CREATE TABLE localidad( 
    cod_localidad INT,
    nombre VARCHAR(11)
);

CREATE TABLE existencias(
    cod_articulo VARCHAR(5),
    nombre VARCHAR(11),
    cantidad INT,
    precio INT,
    cod_pub VARCHAR(5)
);

CREATE TABLE Pub(
    cod_pub varchar(10),
    nombre VARCHAR(15),
    licencia_fiscal VARCHAR(10),
    domicilio VARCHAR(10),
    fecha_apertura DATE,
    horario VARCHAR(10),
    cod_localidad INT
);


ALTER TABLE empleado, pub_empleado,titular,localidad, existencias,Pub


