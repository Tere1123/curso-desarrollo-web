use empleados_departamentos;
-- 1. Obtener los datos completos de los empleados.
select * from empleados;

-- 2. Obtener los datos completos de los departamentos.
select * from departamentos;

-- 3.Obtener los datos de los empleados con cargo ‘Secretaria’
select * from empleados where lower(cargoE) = 'secretaria';

-- 4. Obtener el nombre y salario de los empleados
select nomEmp salEmp  from empleados;

-- 5.Obtener los datos de los empleados vendedores, ordenado por nombre.
select * from empleados where lower(cargoE) = 'vendedor' order by nomEmp asc;

-- 6.Listar el nombre de los departamentos
select nombreDpto  from departamentos;

-- 7. Obtener el nombre y cargo de todos los empleados, ordenado por salario
select nomEmp, cargoE, salEmp from empleados order by salEmp asc;

-- 8. Listar los salarios y comisiones de los empleados del departamento 2000, ordenado por comisión
select comisionE, salEmp from empleados where codDepto = '2000' order by comisionE asc;

-- 9. Listar todas las comisiones.
select comisionE from empleados;

-- 10. Obtener el valor total a pagar que resulta de sumar a los empleados del departamento 3000 una bonificación de 500.000, en orden alfabético del empleado
select nomEmp, salEmp, (salemp+500000) as 'pago estimado' from empleados where codDepto = '3000' order by nomEmp asc;

-- 11. Obtener la lista de los empleados que ganan una comisión superior a su sueldo.
select nomEmp, salEmp, comisionE from empleados where comisionE > salEmp;

-- 12. Listar los empleados cuya comisión es menor o igual que el 30% de su sueldo
select nomEmp, salEmp, comisionE from empleados where comisionE <= (salEmp*0.3);

-- 13.Elabore un listado donde para cada fila, figure ‘Nombre’ y ‘Cargo’ antes del valor respectivo para cada empleado
select nomEmp 'Nombre', cargoE 'cargo' from empleados;

-- 14. Hallar el salario y la comisión de aquellos empleados cuyo número de documento de identidad es superior al ‘19.709.802’
select nDIemp, salEmp, comisionE from empleados where nDIemp > '19.709.802';

-- 15. Muestra los empleados cuyo nombre empiece entre las letras J y Z (rango).
-- Liste estos empleados y su cargo por orden alfabético

select nomEmp, cargoE from empleados where lower(nomemp) > 'j' and lower(nomemp) < 'z' 
order by nomEmp;

-- 16. Listar el salario, la comisión, el salario total (salario + comisión), documento de identidad 
-- del empleado y nombre, de aquellos empleados que tienen comisión superior a 1.000.000, ordenar el 
-- informe por el número del documento de identidad.

select salEmp, comisionE, (salEmp + comisionE) as 'salio total' , nDIEmp, nomEmp from empleados where comisionE > '1.000.000' order by nDIemp asc;


 -- 17. Obtener un listado similar al anterior, pero de aquellos empleados que NO tienen comisión
 select salEmp, comisionE, (salEmp + comisionE) as 'salio total' , nDIEmp, nomEmp from empleados where comisionE = '0' order by nDIemp asc;
 
 -- 18. Hallar los empleados cuyo nombre no contiene la cadena «MA»
 
 select nomEmp from empleados where lower (nomEmp) not like 'MA'; -- PENDIENTE ------
 

-- 19. Obtener los nombres de los departamentos que no sean “Ventas” ni “Investigación” NI
-- ‘MANTENIMIENTO’

select nombreDpto from departamentos where lower(nombreDpto) not in ('ventas','investigacion', 'mantenimiento');


-- 20. Obtener el nombre y el departamento de los empleados con cargo ‘Secretaria’ o ‘Vendedor’, que no trabajan en el
--  departamento de “PRODUCCION”, cuyo salario es superior a $1.000.000, ordenados por fecha de incorporación

select nomEmp, nombreDpto from departamentos d
 join empleados e on e.codDepto = e.codDepto
 where cargoE in ('Secretaria', 'Vendedor')  -- PENDIENTE
and nombreDpto != 'PRODUCCION'
 and salEmp > 1000000 
order by fecIncorporacion;

-- 21. Obtener información de los empleados cuyo nombre tiene exactamente 11 caracteres
select * from empleados where  char_length(nomEmp) = 11 ;

-- 22. Obtener información de los empleados cuyo nombre tiene al menos 11 caracteres

select * from empleados where char_length(nomEmp) < 11 ;

-- 23. Listar los datos de los empleados cuyo nombre inicia por la letra ‘M’, su salario es mayor a $800.000 o reciben comisión y trabajan para el departamento de ‘VENTAS’

select e. * from departamentos d
 join empleados e on e.codDepto = d.codDepto
 where nomEmp like 'M%'
 and (salEmp > 800000 or comisionE > 0)
 and nombreDpto = 'VENTAS';
 
 -- 24. Obtener los nombres, salarios y comisiones de los empleados que reciben un salario situado entre la mitad de la comisión la propia comisión.
 
 select nomEmp, salEmp, comisionE from empleados where salEmp between(comisionE/2) and comisionE;
 
 -- 25. Mostrar el salario más alto de la empresa
 
 select nomEmp, salEmp from empleados order by salEmp desc limit 1;
 
 -- 26. Mostrar cada una de las comisiones y el número de empleados que las reciben. Solo si tiene comisión
 
 select comisionE, count(*) as 'numero de empleados' from empleados group by comisionE having comisionE > 0 ; 
 
 -- 27. Mostrar el nombre del último empleado de la lista por orden alfabético.
 select nomEmp from empleados order by nomEmp desc limit 1 ;
 
 -- 28. Hallar el salario más alto, el más bajo y la diferencia entre ellos.
 select min(salEmp), max(salEmp), max(salEmp)-min(salEmp) as 'difertencia' from empleados;
 
 -- 29. Mostrar el número de empleados de sexo femenino y de sexo masculino, por departamento.
 
 select codDepto, sexEmp, count(*)  from  empleados group by codDepto,sexEmp;
 
 -- 30. Hallar el salario promedio por departamento
 select codDepto, avg(salEmp) as 'pro.salario' from empleados group by codDepto;
 
 -- 31. Mostrar la lista de los empleados cuyo salario es mayor o igual que el promedio de la empresa. Ordenarlo por departamento
 select * from empleados where salEmp >= (select avg(salEmp) from empleados) order by codDepto;
 
 -- 32. Hallar los departamentos que tienen más de tres empleados. Mostrar el número de empleados de esos departamentos
 
 select d.codDepto, d.nombreDpto, count(*) as 'N emp' from departamentos d
  join empleados e on e.codDepto = d.codDepto
  where d.codDepto = e.codDepto group by d.codDepto having count(*) >= 3;
  
  -- 33. Mostrar el código y nombre de cada jefe, junto al número de empleados que dirige. Solo los que tengan mas de dos empleados (2 incluido)
  
 select jefeID ID, (select nomEmp from empleados where nDIEmp = ID) 'numero de jefe', count(*)'nomero de empleados' from empleados
 group by jefeID having count(*) >= 2;
 
 -- 34. Hallar los departamentos que no tienen empleados
 
 select  e.codDepto, d.nombreDpto from departamentos d
 join empleados e on e.codDepto = d.codDepto 
 group by d.codDepto having count(*) = 0;
 
-- 35. Mostrar el nombre del departamento cuya suma de salarios sea la más alta, indicando el valor de la suma.

select d.nombreDpto, sum(e.salEmp) from departamentos d
  join empleados e on e.codDepto = d.codDepto 
  group by d.nombreDpto 
  order by sum(e.salEmp) 
  desc limit 1;
  
-- ejercicio adicional: empleados por departamentos
select count(e.nomEmp),d.nombreDpto from departamentos d
join empleados e on e.codDepto = d.codDepto
group by nombreDpto;

 






















-- Ejercicios Propuestos Y Resueltos De Consultas MySQL (Empleados Y Departamentos)21/08/201720 Comentarios

Hola a todos, hoy os dejo una serie de ejercicios de consultas MySQL de la base de datos Empleados y departamentos que hemos hecho en el canal de Youtube.

Todos los ejercicios que proponemos están resueltos en este mismo post, intenta hacerlo por ti mismo y si te quedas atascado puedes mirar la solución.

Recuerda, que no tiene por que estar igual tu solución con la del post, el objetivo es que aprendas no que me copies la solución.

Si tienes alguna duda, recuerda que puedes consultarnos escribiendo un comentario en este post o enviándonos un e-mail a administrador@discoduroderoer.es

Aquí os dejo la base de datos con la que vamos a trabajar.

Aquí te dejo un manual sobre como importar la base de datos.



Os dejo el modelo Entidad – Relación de la base de datos.



Al final de cada ejercicio, os muestro una foto con el resultado esperado.

1. Obtener los datos completos de los empleados.

Spoiler Inside	SelectShow>
 



2. Obtener los datos completos de los departamentos.

Spoiler Inside	SelectShow>
 


3. Obtener los datos de los empleados con cargo ‘Secretaria’.

Spoiler Inside	SelectShow>
 

4. Obtener el nombre y salario de los empleados.

Spoiler Inside	SelectShow>
 


5. Obtener los datos de los empleados vendedores, ordenado por nombre.

Spoiler Inside	SelectShow>
 



6. Listar el nombre de los departamentos.

Spoiler Inside	SelectShow>
 



7. Obtener el nombre y cargo de todos los empleados, ordenado por salario.

Spoiler Inside	SelectShow>
 


8. Listar los salarios y comisiones de los empleados del departamento 2000, ordenado por comisión.

Spoiler Inside	SelectShow>
 


9. Listar todas las comisiones.

Spoiler Inside	SelectShow>
 


10. Obtener el valor total a pagar que resulta de sumar a los empleados del departamento 3000 una bonificación de 500.000, en orden alfabético del empleado

Spoiler Inside	SelectShow>
 


11. Obtener la lista de los empleados que ganan una comisión superior a su sueldo.

Spoiler Inside	SelectShow>
 



12. Listar los empleados cuya comisión es menor o igual que el 30% de su sueldo.

Spoiler Inside	SelectShow>
 



13.Elabore un listado donde para cada fila, figure ‘Nombre’ y ‘Cargo’ antes del valor respectivo para cada empleado.

Spoiler Inside	SelectShow>
 



14. Hallar el salario y la comisión de aquellos empleados cuyo número de documento de identidad es superior al ‘19.709.802’.

Spoiler Inside	SelectShow>
 


15. Muestra los empleados cuyo nombre empiece entre las letras J y Z (rango).
Liste estos empleados y su cargo por orden alfabético.

Spoiler Inside	SelectShow>
 



16. Listar el salario, la comisión, el salario total (salario + comisión), documento de identidad del empleado y nombre, de aquellos empleados que tienen comisión superior a 1.000.000, ordenar el informe por el número del documento de identidad

Spoiler Inside	SelectShow>
 



17. Obtener un listado similar al anterior, pero de aquellos empleados que NO tienen comisión

Spoiler Inside	SelectShow>
 



18. Hallar los empleados cuyo nombre no contiene la cadena «MA»


Spoiler Inside	SelectShow
 



19. Obtener los nombres de los departamentos que no sean “Ventas” ni “Investigación” NI
‘MANTENIMIENTO’.

Spoiler Inside	SelectShow
 



20. Obtener el nombre y el departamento de los empleados con cargo ‘Secretaria’ o ‘Vendedor’, que no trabajan en el departamento de “PRODUCCION”, cuyo salario es superior a $1.000.000, ordenados por fecha de incorporación.

Spoiler Inside	SelectHide
1
2
3
4
5
select e.nomemp, d.nombreDpto 
from empleados e, departamentos d 
where e.codDepto=d.codDepto and (lower(e.cargoE)='secretaria' or lower(e.cargoE)='vendedor')
and lower(d.nombreDpto)<>'produccción' and e.salEmp > 1000000 
order by e.fecIncorporacion;
 


select


