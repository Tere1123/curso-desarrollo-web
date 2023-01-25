CREATE DATABASE registro;

use registro;

CREATE TABLE usuarios (
    
    email VARCHAR(50) NOT NULL,
    clave VARCHAR(8) NOT NULL

);

ALTER TABLE usuarios ADD CONSTRAINT pk_email PRIMARY KEY (email);
