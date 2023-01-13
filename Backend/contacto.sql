CREATE DATABASE Agenda;

CREATE DATABASE IF NOT EXISTS Agenda;

use Agenda;

drop table if exists contacto;
create table contacto ( 
Nombre varchar (20),
Domicilio varchar(30),
Telefono varchar(11)
); 

insert into contacto values
('Tere','lezeaga 19', 688687232),
('camilo', 'zabalburu', 6588745);

 SELECT * FROM contacto;