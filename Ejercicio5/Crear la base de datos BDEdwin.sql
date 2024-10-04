-- Crear la base de datos BDEdwin
CREATE DATABASE BDEdwin;
GO

-- Usar la base de datos
USE BDEdwin;
GO

-- Crear la tabla PROPIETARIO
CREATE TABLE PROPIETARIO (
  id_propietario INT IDENTITY(1,1) PRIMARY KEY,
  ci NVARCHAR(20),
  nombre NVARCHAR(50) NOT NULL,
  paterno NVARCHAR(50),
  materno NVARCHAR(50),
  sexo CHAR(1) CHECK (sexo IN ('M', 'F')) NOT NULL,
  fecha_nacimiento DATE,
  telefono NVARCHAR(15),
  contrasena NVARCHAR(255)
);
GO

-- Crear la tabla CATASTRO
CREATE TABLE CATASTRO (
  id_catastro INT IDENTITY(1,1) PRIMARY KEY,
  codigo_catastral NVARCHAR(30),
  Xini INT,
  Yini INT,
  Xfin INT,
  Yfin INT,
  superficie INT,
  distrito NVARCHAR(50),
  zona NVARCHAR(50)
);
GO

-- Crear la tabla POSEE
CREATE TABLE POSEE (
  id_propietario INT,
  id_catastro INT,
  PRIMARY KEY (id_propietario, id_catastro),
  FOREIGN KEY (id_propietario) REFERENCES PROPIETARIO(id_propietario) ON DELETE CASCADE,
  FOREIGN KEY (id_catastro) REFERENCES CATASTRO(id_catastro) ON DELETE CASCADE
);
GO

-- Insertar datos en PROPIETARIO
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
GO

-- Insertar datos en CATASTRO
INSERT INTO CATASTRO (codigo_catastral, Xini, Yini, Xfin, Yfin, superficie, distrito, zona) VALUES
('12345', 10, 20, 30, 40, 400, 'Distrito 1', 'Zona A'),
('23456', 15, 25, 35, 45, 500, 'Distrito 2', 'Zona B'),
('34567', 12, 22, 32, 42, 450, 'Distrito 3', 'Zona C'),
('15678', 18, 28, 38, 48, 550, 'Distrito 4', 'Zona D'),
('26789', 11, 21, 31, 41, 420, 'Distrito 5', 'Zona E'),
('37890', 16, 26, 36, 46, 480, 'Distrito 1', 'Zona A'),
('18901', 14, 24, 34, 44, 470, 'Distrito 2', 'Zona B'),
('29012', 13, 23, 33, 43, 460, 'Distrito 3', 'Zona C');
GO

-- Insertar datos en POSEE
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
GO
