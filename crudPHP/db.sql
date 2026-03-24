-- Crear la base de datos 
CREATE DATABASE crud_app

-- Selecionar la base de datos
USE crud_app

-- Crear una tabla
CREATE TABLE usuarios(
id INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
telefono VARCHAR(15) NOT NULL,



);