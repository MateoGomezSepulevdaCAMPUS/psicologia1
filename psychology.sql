CREATE DATABASE psychology;
USE psychology;
CREATE TABLE psicologa(
    id_psicologa INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    edad INT,
    especialidad VARCHAR(50)
);