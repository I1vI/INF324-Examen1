
-- LDD
-- CREAR LA BDDWIN 
CREATE DATABASE IF NOT EXISTS BDEdwin;
USE BDEdwin;

-- Crear la tabla PROPIETARIO
CREATE TABLE PROPIETARIO (
  id_propietario INT AUTO_INCREMENT PRIMARY KEY,
  ci VARCHAR(20) NOT NULL UNIQUE,
  nombre VARCHAR(50) NOT NULL,
  paterno VARCHAR(50),
  materno VARCHAR(50),
  sexo ENUM('M', 'F') NOT NULL,
  fecha_nacimiento DATE,
  telefono VARCHAR(15),
  contrasena VARCHAR(255)
);

-- Crear la tabla CATASTRO
CREATE TABLE CATASTRO (
  id_catastro INT AUTO_INCREMENT PRIMARY KEY,
  codigo_catastral VARCHAR(30) NOT NULL UNIQUE,
  Xini DECIMAL(10, 2),
  Yini DECIMAL(10, 2),
  Xfin DECIMAL(10, 2),
  Yfin DECIMAL(10, 2),
  superficie DECIMAL(10, 2),
  distrito VARCHAR(50),
  zona VARCHAR(50)
);

-- Crear la tabla POSEE 
CREATE TABLE POSEE (
  id_propietario INT,
  id_catastro INT,
  PRIMARY KEY (id_propietario, id_catastro),
  FOREIGN KEY (id_propietario) REFERENCES PROPIETARIO(id_propietario) ON DELETE CASCADE,
  FOREIGN KEY (id_catastro) REFERENCES CATASTRO(id_catastro) ON DELETE CASCADE
);

-- LMD
-- Llenar la tabla PROPIETARIO con 12 propietarios, usando el campo 'ci' como contrasena
INSERT INTO PROPIETARIO (ci, nombre, paterno, materno, sexo, fecha_nacimiento, telefono, contrasena) VALUES
('1234567', 'Juan', 'Perez', 'Lopez', 'M', '1980-01-15', '789456123', '1234567'),
('2345678', 'Maria', 'Gomez', 'Fernandez', 'F', '1990-03-20', '789123456', '2345678'),
('3456789', 'Carlos', 'Sanchez', 'Rodriguez', 'M', '1975-05-10', '123789456', '3456789'),
('4567890', 'Ana', 'Torres', 'Martinez', 'F', '1985-07-25', '456123789', '4567890'),
('5678901', 'Luis', 'Garcia', 'Suarez', 'M', '1992-09-12', '789654123', '5678901'),
('6789012', 'Patricia', 'Lopez', 'Cruz', 'F', '1988-11-30', '321654987', '6789012'),
('7890123', 'Miguel', 'Vargas', 'Rojas', 'M', '1979-02-18', '987321654', '7890123'),
('8901234', 'Laura', 'Flores', 'Jimenez', 'F', '1995-04-10', '987654321', '8901234'),
('9012345', 'David', 'Morales', 'Pinto', 'M', '1983-06-22', '123456789', '9012345'),
('0123456', 'Angela', 'Castro', 'Alvarez', 'F', '1991-08-14', '654321987', '0123456'),
('9876543', 'Fernando', 'Gutierrez', 'Mendez', 'M', '1987-12-01', '852369741', '9876543'),
('8765432', 'Monica', 'Romero', 'Ortiz', 'F', '1993-03-30', '741258963', '8765432');

-- Llenar la tabla CATASTRO con 8 catastros
INSERT INTO CATASTRO (codigo_catastral, Xini, Yini, Xfin, Yfin, superficie, distrito, zona) VALUES
('12345', 10.00, 20.00, 30.00, 40.00, 400.00, 'Distrito 1', 'Zona A'),
('23456', 15.00, 25.00, 35.00, 45.00, 500.00, 'Distrito 2', 'Zona B'),
('34567', 12.00, 22.00, 32.00, 42.00, 450.00, 'Distrito 3', 'Zona C'),
('15678', 18.00, 28.00, 38.00, 48.00, 550.00, 'Distrito 4', 'Zona D'),
('26789', 11.00, 21.00, 31.00, 41.00, 420.00, 'Distrito 5', 'Zona E'),
('37890', 16.00, 26.00, 36.00, 46.00, 480.00, 'Distrito 1', 'Zona A'),
('18901', 14.00, 24.00, 34.00, 44.00, 470.00, 'Distrito 2', 'Zona B'),
('29012', 13.00, 23.00, 33.00, 43.00, 460.00, 'Distrito 3', 'Zona C');

-- Llenar la tabla POSEE con 20 filas
INSERT INTO POSEE (id_propietario, id_catastro) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 1),
(10, 2),
(11, 3),
(12, 4),
(1, 5),
(2, 6),
(3, 7),
(4, 8),
(5, 1),
(6, 2),
(7, 3),
(8, 4);
