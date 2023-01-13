-- Active: 1673602448012@@127.0.0.1@3306@sakila

USE sakila;

-- 1. Actores que tienen de primer nombre ‘Scarlett’.

SELECT * FROM actor where first_name = 'Scarlett';

-- 2.Actores que tienen de apellido ‘Johansson’.

SELECT * FROM actor where last_name = 'johansson';

--3. Actores que contengan una ‘O’ en su nombre

SELECT * FROM actor where LOWER(first_name) like '%o%';

--4.Actores que contengan una ‘O’ en su nombre y en una ‘A’ en su apellido

SELECT *
FROM actor
WHERE
    LOWER(first_name) like '%o%'
    and LOWER(last_name) LIKE '%a%';

--5. Actores que contengan dos ‘O’ en su nombre y en una ‘A’ en su apellido

SELECT *
FROM actor
WHERE
    LOWER(first_name) like '%o%o%'
    and LOWER(last_name) LIKE '%a%';

--6.Actores donde su tercera letra sea ‘B’

SELECT * FROM actor WHERE LOWER(first_name) like '__b%';

--7. Ciudades que empiezan por ‘a’.

SELECT * from city where LOWER(city) like 'a%';

-- 8. Ciudades que acaban por ‘s’.

SELECT * from city where LOWER(city) like '%s';

--9.Ciudades del country 61

SELECT * from city WHERE country_id = 61;

-- 10. Ciudades del country ‘Spain’.

SELECT city
from city
    join country on city.country_id = country.country_id
WHERE country = 'spain';

--11. Ciudades con nombres compuestos

SELECT * FROM city WHERE LOWER(city) like '% %';

--12. Películas con una duración entre 80 y 100

SELECT *
from film
WHERE
    length >= 80
    and length <= 100;

 --14. Películas con un titulo de más de 12 letras.
 SELECT*
 from film
 WHERE char_length(title) >= 12;

 --15. Peliculas con un rating de PG o G
 SELECT*
 FROM film
 WHERE rating IN ('pg','g');

 -- rating = 'pg' or rating = 'g'; otra solucion.


   --16. Peliculas que no tengan un rating de NC-17.
 SELECT*
 FROM film
 WHERE rating not like  'NC-17';

 --17. Peliculas con un rating PG y duracion de más de 120.

SELECT title, rating,length
 from film
 WHERE rating = 'PG' and length >= 120;

 --18. ¿Cuantos actores hay?
 SELECT COUNT(*) as 'N actores'FROM actor;

 --20. ¿Cuántos countries hay que empiezan por ‘a’?
 SELECT COUNT(*) as 'paises con A' FROM country
 WHERE country  like 'a%';

 --21. Media de duración de peliculas con PG.

 SELECT AVG(length) as 'media' FROM film
 WHERE rating = 'PG';

 --22. Suma de rental_rate de todas las peliculas.
 SELECT SUM(RENTAL_RATE) AS 'TOTAL' FROM film;

 --23. Pelicula con mayor duración
 SELECT MAX(length) as 'max duaracion'
 FROM film;
 
 --24. Película con menor duración.

 SELECT MIN(length) as 'min duaracion'
 FROM film;

 --25. Mostrar las ciudades del country Spain (multitabla).

SELECT city
from city
    join country on city.country_id = country.country_id
WHERE country = 'spain';

--26. Mostrar el nombre de la película y el nombre de los actores
SELECT title, first_name,last_name from film, actor ;













