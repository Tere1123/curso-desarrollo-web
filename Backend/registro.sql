CREATE DATABASE registro;

use registro;

CREATE TABLE usuarios (
    
    email VARCHAR(50) NOT NULL,
    contraseña VARCHAR(8) NOT NULL

);

ALTER TABLE usuarios ADD CONSTRAINT pk_email PRIMARY KEY (email);
ALTER TABLE usuarios ADD CONSTRAINT uk_email UNIQUE KEY (email); --mo es necesario por que ya tien pk