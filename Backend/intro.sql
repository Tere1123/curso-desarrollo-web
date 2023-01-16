-- Esto es un comentario (Ctrl + /)

-- Seleccionar o extraer datos de una tabla
SELECT * FROM world.country;

-- Actualizar o modificar datos existentes de una tabla;
UPDATE academia.alumnos SET poblacion = 'Barakaldo' WHERE dni = '12345678F';
-- Es importante recordar integrar un WHERE al usar UPDATE. Ya que sin este, se actualizarán TODOS los datos de la tabla

-- Borrar datos de una tabla
DELETE FROM nombre_de_tabla WHERE condicion;
-- Sin el WHERE, se borrarán TODOS los datos de la tabla!

-- Añadir datos a una tabla
INSERT INTO academia.alumnos (dni, nombre, apellido1, apellido2, tlf) 
	VALUES ('78945612A', 'Victoria', 'Pérez', 'García', 645781212);
-- Una query puede contener tantas líneas como sean necesarias, pero al final siempre deben llevar ;
-- Si se van a agregar valores para todas las columnas de una tabla, no es necesario indicar las columnas:
INSERT INTO academia.alumnos
	VALUES ('45678923B', 'Armando', 'Casas', 'Rodríguez', 963852741, 'Portugalete', 42521);
   
-- SELECT DISTINCT
-- Se usa cuando queremos mostrar datos NO DUPLICADOS de una tabla
SELECT DISTINCT(language), continent FROM world.country c 
	JOIN world.countrylanguage l ON c.Code = l.CountryCode
    WHERE continent NOT IN ('south america', 'asia')
    ORDER BY Continent, language DESC; 


-- min() y max()
-- funciones que recogen lo minimo y maximo del valor de un acolumna

select name, min(population) from world.city;
select name, max(population) from world.city;

-- count(),avg(),sum()

-- count : tiene encuenta no el numero de filas si no el valorque hay en de la fila
select count(*) from world.city
where population >150000;

-- avg :retorna el promedio de la columna

select avg(city.population)'media de habitantes de españa' from world.city
join world.country on country.code = city.contrycode
where country.name = 'spain';

-- in not in
-- se utiliza para indicar varias opciones una clausula de where 

-- between
-- se usa para buscar resultados que esten entre dos valores se puede usar con el not tambien

select name, population from world.city
where population between 250000 and 500000
or Population between 750000 and 850000;

-- ALIAS (AS)
select concat(nombre,'',apellido) as 'Nombre completo' from academia.alumnos;

-- group by
-- Agrupar columnas calculadas avg-count,sumj,max
select count(city.name),country.name from world.city
join world.country on city.countrycode = country.Code
where continent = 'africa'
group by country.name
-- si queremos añadir una condicion a un grupo que queramos visualizar usamos el havig
HAVING count(city.NAME) >= 5;

-- having
-- es el condicional para el group by ya que la clausula where no se puede usar despues de esta,si queremos añadir una condicion a un grupo que queramos visualizar usamos el havig

-- EXISTS
-- Sub query, se usa con el where y una sub query cuyo resultado retorna true o false dependiendo si se cumple o no, sirve para filtra datos

select name, CountryCode from world.city
where exists (select name from world.country where city.CountryCode = country.code and LifeExpectancy >= 75 and Continent = 'asia' )
order by countrycode;

-- any, all
select name from world.country
where code = any( select CountryCode from city where Population > 2000000);
-- any si alguna cumple la condicion el retorno es true

-- insert select
-- Es un insert con una subquery,copia los resultados de esta y los introduce en la tabla que le indicamos

-- creamos una tabla de ejemplo

create table ejercicios.ciudades(
id int primary key,
nombre varchar(50),
pais varchar (50),
continente varchar(50));

-- insertamos la tabla con respectivo pais y continente
insert into ejercicios.ciudades
select c.id, c.name, p.name, p.continent from world.city c 
join world.country p on c.countrycode = p.code
where continent in ('south america','africa','oceania');

select* from ejercicios.ciudades order by pais;

-- case 
-- Es el if o else de MYSQL,retorna un dato que podemos mostrar en una columna

select name, LifeExpectancy,  
CASE
when LifeExpectancy < 50 then 'lo tienen jodido'
when LifeExpectancy between 50 and 70 then 'es aceptable'
when LifeExpectancy > 70 then 'viven bien'
else 'no hay info'
end as 'calidad de vida'
from world.country;

-- ifnull(), coalesce ()
-- sirve para manejar resultados cuando nos encontramos resultados nulos
select concat(nombre,'',apellido) as 'Nombre completo' from academia.alumnos;
-- if null retorna el segundo parametro cuando el primero es null
-- coalesce retorna hasta que encuentre un valor no null











