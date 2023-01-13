
-- create database ejercicios;
-- la misma orden enviando errores
create database if not exists ejercicios;

-- selecionar base de datos
use ejercicios; 

-- crear una tabla
drop table if exists usuario;
create table usuarios(
usuario varchar(15),
contraseña varchar(15)
);
-- se crea entre parentesis y se separan por comas cada columna

-- modificar una tabla
 -- añadir una restriccion
ALTER TABLE usuarios ADD PRIMARY KEY (USUARIO);
 -- Añadir una columna
 ALTER TABLE usuarios ADD email VARCHAR (15);
  -- modificar columnas
 ALTER TABLE usuarios MODIFY email TEXT(15);
  -- Eliminar una columna
 ALTER TABLE usuarios DROP COLUMN email; 
 
 -- insertar datos en la tabla
 
 INSERT INTO usuarios VALUES
 ('Torta16','papapa'),
 ('Terere', 'tere8221');
 
-- extraer datos de una tabla 
 
 SELECT * FROM usuarios;
 
 
 
 


