-- creamos base de datos

CREATE DATABASE eventos;

USE eventos;

--creamos tablas con la informacion necesaria y le asignamos que tipo de dato va a tener
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
    telefono VARCHAR(10),
    horario VARCHAR (10) NOT NULL
);

CREATE TABLE zona_recintos (
    cod_recinto VARCHAR(15) NOT NULL,
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

-- se  deben nombrar las claves primarias de cada tabla con primay key(pk)

ALTER TABLE espectaculo ADD CONSTRAINT pk_espectaculos PRIMARY KEY (cod_espectaculo);
ALTER TABLE precios_espectaculos ADD CONSTRAINT pk_precioespect PRIMARY KEY (cod_espectaculo);
ALTER TABLE recintos ADD CONSTRAINT pk_recintos PRIMARY KEY (cod_recinto);
ALTER TABLE zona_recintos ADD CONSTRAINT pk_zonare PRIMARY KEY (cod_recinto);
ALTER TABLE asientos ADD CONSTRAINT pk_asientos PRIMARY KEY (cod_recinto);
ALTER TABLE representaciones ADD CONSTRAINT pk_precioespect PRIMARY KEY (cod_espectaculo);
ALTER TABLE entradas ADD CONSTRAINT pk_entradas PRIMARY KEY (cod_espectaculo);
ALTER TABLE espectadores ADD CONSTRAINT pk_espectadores PRIMARY KEY (dni_cliente);

-- nombramos las claves foraneas FOREIGN KEY

ALTER TABLE espectaculo ADD CONSTRAINT fk_recintos FOREIGN KEY (cod_recinto) REFERENCES recintos (cod_recinto);
ALTER TABLE precios_espectaculos ADD CONSTRAINT fk_codespectaculo FOREIGN KEY (cod_espectaculo) REFERENCES espectaculo (cod_espectaculo);
ALTER TABLE precios_espectaculos ADD CONSTRAINT fk_recinto FOREIGN KEY (cod_recinto) REFERENCES zona_recintos (cod_recinto);
ALTER TABLE asientos ADD CONSTRAINT fk_cod_asientos FOREIGN KEY (cod_recinto) REFERENCES zona_recintos (cod_recinto);
ALTER TABLE recintos ADD CONSTRAINT fk_cod_recinto FOREIGN KEY (cod_recinto) REFERENCES zona_recintos (cod_recinto);
ALTER TABLE representaciones ADD CONSTRAINT fk_cod_esp FOREIGN KEY (cod_espectaculo) REFERENCES espectaculo (cod_espectaculo);
ALTER TABLE entradas ADD CONSTRAINT fk_cod_espec FOREIGN KEY (cod_espectaculo) REFERENCES espectaculo (cod_espectaculo);
ALTER TABLE entradas ADD CONSTRAINT fk_cod_recintos FOREIGN KEY (cod_recinto) REFERENCES asientos (cod_recinto);
ALTER TABLE entradas ADD CONSTRAINT fk_dni_cliente FOREIGN KEY (dni_cliente) REFERENCES espectadores (dni_cliente);



