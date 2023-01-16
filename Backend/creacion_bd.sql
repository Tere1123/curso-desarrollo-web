-- crear una base de Datos llamada 'Tienda' para utilizarla

-- crear una tabla que se llame 'productos'
-- clave primaria:codigo de tres caracteres
-- nombre
-- precio con 2 decimales
-- fecha alta tipo fecha

CREATE DATABASE Tienda;

use Tienda;
CREATE TABLE productos(
    codigo VARCHAR(3),
    Nombre VARCHAR(20),
    precio INT,
    fecha_alta DATE
);

-- corregimos y añadimos restricciones a la tabla

ALTER Table productos
MODIFY COLUMN fecha_alta DATETIME DEFAULT CURRENT_TIMESTAMP;
MODIFY COLUMN precio DECIMAL(6,2),
ADD constraint pk_productos PRIMARY key(codigo);

INSERT INTO productos(codigo,nombre,precio) VALUES ( 'a01','Afilador',2.50);
INSERT INTO productos(codigo,nombre,precio) VALUES ( 's01','Silla mod ZAZ',20);
INSERT INTO productos(codigo,nombre,precio) VALUES ( 's02','Silla mod XAX',25);


SELECT*FROM PRODUCTOS;

-- añadir una nueva columna con una nueva categoria de os productos

ALTER TABLE productos ADD COLUMN categoria VARCHAR(15);

-- ahora todas la categorias tienen valor NULL,se corrige añadiendo un valor a todos lo productos

UPDATE productos SET categoria = 'herramienta' where categoria IS NULL;

-- nodificamos la categoria de las sillas a un termino corecto
UPDATE productos SET categoria = 'silla' WHERE codigo LIKE 's%';

-- ejercicios de repaso:
-- datos del producto 'afilador'
SELECT * from productos where nombre = 'afilador'; 

-- productos cullo nombre inicia por 's'

SELECT * FROM productos WHERE nombre like 's%';

-- nombre y precio de los productos con valor a 22
SELECT nombre, precio FROM productos WHERE precio > 22;

-- precio medio de las silla
SELECT AVG(precio)  from productos WHERE categoria = 'silla';

-- listado de categorias sin duplicados

SELECT distinct(categoria) from productos; 

-- cantidad de productos por categoria

select COUNT(*), categoria from productos GROUP BY categoria;
-- productos cuyo valor es inferior a la media del precio de la silla

SELECT nombre, precio 
FROM productos 
where precio < (select avg(precio) from productos where categoria = 'silla');