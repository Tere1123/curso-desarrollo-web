-- creamos base de datos

CREATE DATABASE empleados;

use empleados;

CREATE TABLE empleados (

    dni INT(8),
    nombre VARCHAR(10) NOT NULL,
    apellido1 VARCHAR(15) NOT NULL,
    apellido2 VARCHAR(15),
    direcc1 VARCHAR(25),
    direcc2 VARCHAR(20),
    ciudad VARCHAR (20),
    provincia VARCHAR(20),
    cod_postal VARCHAR(5),
    sexo VARCHAR(1),
    fecha_nac DATE

    );

    CREATE TABLE historial_laboral (

        empleado_dni INT(8),
        trabajo_cod int(5),
        fecha_inicio DATE,
        fecha_fin DATE,
        dpto_cod INT(5),
        supervisor_dni INT(8)

    );

    CREATE TABLE historial_salarial (
        empleado_dni INT(8),
        salario DECIMAL(5,2),
        fecha_comienzo DATE,
        fecha_fin DATE
    );

    CREATE TABLE departamentos (
        dpto_cod INT(5),
        nombre_dpto VARCHAR(30),
        dpto_padre INT(5),
        presupuesto DECIMAL(5,2) NOT NULL,
        pres_actual DECIMAL(5,2)

    );
    CREATE TABLE estudios (
        empleado_dni INT(8),
        universidad INT(5),
        año INT(4), -- pendiente por asignar restriccion desde 1940
        grado VARCHAR(3),
        especialidad varchar(20)
    
    );
    CREATE Table universidades (
        univ_cod INT(5),
        nombre_univ VARCHAR(25),
        ciudad VARCHAR(20),
        municipio VARCHAR(2),
        cod_postal VARCHAR(5)
    );

    CREATE TABLE trabajos (
        trabajo_cod INT(5),
        nombre_trab VARCHAR(20),
        salario_min DECIMAL(5,2),
        salio_max DECIMAL(5,2)
    );

    -- agregamos restricciones

--2. atributo sexo
    ALTER TABLE empleados ADD CONSTRAINT ck_sexo CHECK (sexo = 'h' or 'm');
--3. departamentos con unico nombre.
    ALTER TABLE departamentos ADD CONSTRAINT uk_dep_nombre UNIQUE(nombre_dpto);

    ALTER TABLE trabajos ADD CONSTRAINT uk_tra_nombre UNIQUE (nombre_trab); -- utilizo unique para que el dato sea unico y no se repita

--4. cada empleado con salario en unico momento,con unico trabajo.
 ALTER TABLE historial_salarial ADD CONSTRAINT pk_salario_unico PRIMARY KEY ( empleado_dni, fecha_comienzo);

 ALTER TABLE historial_laboral ADD CONSTRAINT pk_trabajo_unico PRIMARY KEY ( empleado_dni,fecha_inicio);

 --5. estblecer claves primarias

 ALTER TABLE empleados ADD CONSTRAINT pk_empleados PRIMARY KEY (dni);

 ALTER TABLE departamentos ADD CONSTRAINT pk_dpto PRIMARY KEY (dpto_cod);

 ALTER TABLE estudios ADD CONSTRAINT pk_emp_dni PRIMARY KEY (empleado_dni);

 ALTER TABLE universidades ADD CONSTRAINT pk_cod_uni PRIMARY KEY (univ_cod);
 ALTER TABLE trabajos ADD CONSTRAINT pk_trabajo_cod PRIMARY KEY ( trabajo_cod);

 

