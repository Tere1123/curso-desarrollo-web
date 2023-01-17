
-- creamos la base de datos
CREATE DATABASE pubs;

use pubs;

-- creamos las tablas con la inf requerida
--valores tipo caracter VARCHAR
-- valores numericos INT
-- valor de precios DECIMAL
-- campos obligatorios NOT NULL
CREATE TABLE
    empleado(
        dni_empleado VARCHAR(10) NOT NULL,
        nombre VARCHAR(11) NOT NULL,
        domicilio VARCHAR(15)
    );

CREATE TABLE
    pub_empleado(
        cod_pub VARCHAR(5) NOT NULL,
        dni_empleado VARCHAR(10) NOT NULL,
        funcion VARCHAR(10) NOT NULL
    );

CREATE TABLE
    titular(
        dni_titular VARCHAR(10) NOT NULL,
        nombre VARCHAR(11) NOT NULL,
        domicilio VARCHAR(15),
        cod_pub VARCHAR(5) NOT NULL
    );

CREATE TABLE
    localidad(
        cod_localidad INT NOT NULL,
        nombre VARCHAR(11) NOT NULL
    );

CREATE TABLE
    existencias(
        cod_articulo VARCHAR(5) NOT NULL,
        nombre VARCHAR(11) NOT NULL,
        cantidad INT NOT NULL,
        precio DECIMAL NOT NULL,
        cod_pub VARCHAR(5) NOT NULL
    );

CREATE TABLE
    pub(
        cod_pub varchar(10) NOT NULL,
        nombre VARCHAR(15) NOT NULL,
        licencia_fiscal VARCHAR(10) NOT NULL,
        domicilio VARCHAR(10),
        fecha_apertura DATE NOT NULL,
        horario VARCHAR(10) NOT NULL,
        cod_localidad INT NOT NULL
    );

-- primero de deben nombrar las claves primarias de cada tabla con primay key(pk)

ALTER TABLE pub ADD CONSTRAINT pk_pub PRIMARY KEY (cod_pub);

ALTER TABLE existencias
ADD
    CONSTRAINT pk_existencias PRIMARY KEY(cod_articulo);

ALTER TABLE localidad
ADD
    CONSTRAINT pk_localidad PRIMARY KEY(cod_localidad);

ALTER TABLE titular
ADD
    CONSTRAINT pk_titular PRIMARY KEY(dni_titular);

ALTER TABLE pub_empleado
ADD
    CONSTRAINT pk_pub_empleado PRIMARY KEY(cod_pub, dni_empleado, funcion);

ALTER TABLE empleado
ADD
    CONSTRAINT pk_empleado PRIMARY KEY(dni_empleado);

-- para despues enlazar las tablas con datos en comun FOREIGN KEY(fk)(foraneo)

ALTER TABLE pub
ADD
    CONSTRAINT fk_pub_codlocal FOREIGN KEY (cod_localidad) REFERENCES localidad (cod_localidad);

ALTER TABLE titular
ADD
    CONSTRAINT fk_pub_codpub FOREIGN KEY (cod_pub) REFERENCES pub (cod_pub);

ALTER TABLE existencias
ADD
    CONSTRAINT fk_existencias_codpub FOREIGN KEY (cod_pub) REFERENCES pub (cod_pub);

ALTER TABLE pub_empleado
ADD
    CONSTRAINT fk_pubempleado_dniempleado FOREIGN KEY (dni_empleado) REFERENCES empleado (dni_empleado);

ALTER TABLE pub_empleado
ADD
    CONSTRAINT fk_pubempleado_pub FOREIGN KEY (cod_pub) REFERENCES pub (cod_pub);

-- creamos restricciones

ALTER TABLE pub_empleado
ADD
    CONSTRAINT CHECK (
        funcion in (
            'camarero',
            'seguridad',
            'limpieza'
        )
    );

ALTER TABLE pub
ADD
    CONSTRAINT CHECK (
        horario in ('hor1', 'hor2', 'hor3')
    );

ALTER TABLE existencias ADD CONSTRAINT CHECK (precio <> 0);



