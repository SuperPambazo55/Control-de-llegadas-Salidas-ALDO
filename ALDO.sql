CREATE DATABASE ALDO;
USE ALDO;
CREATE TABLE Datos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tracto VARCHAR(50) NOT NULL,
    remolque VARCHAR(50) NOT NULL,
    operador VARCHAR(100) NOT NULL,
    fecha_salida DATE NOT NULL,
    fecha_llegada DATE NOT NULL,
    cliente VARCHAR(100) NOT NULL,
    ruta VARCHAR(255) NOT NULL
    );
INSERT INTO datos (tracto, remolque, operador, fecha_salida, fecha_llegada, cliente, ruta, kilometraje) VALUES
("T-51", "R-101", "MANUEL ZACARIAS","2024-12-09","2024-12-11", "TARAHUMARA", "MEXICALI - GUADALAJARA", "123456789");

SELECT * FROM Datos;
    




