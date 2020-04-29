DROP SCHEMA IF EXISTS rentapp ;
CREATE DATABASE rentapp;
use rentapp;


-- Base de datos: 'rentapp'

-- ---------------------------------------------------------
-- Estructura de tabla para la tabla usuarios
CREATE TABLE usuarios (
  id_user bigint NOT NULL PRIMARY KEY,
  nombres_user varchar(40) NOT NULL,
  edad_user varchar(20) NOT NULL,
  sexo_user varchar(20) NOT NULL,
  tipo_user varchar(1) NOT NULL,
  tel_user varchar(10) NOT NULL,
  dir_user varchar(20) NOT NULL,
  correo_user varchar(30) NOT NULL,
  password_user varchar(30) NOT NULL
);
-- Volcado de datos para la tabla usuarios
INSERT INTO usuarios VALUES
(1022408489, 'nodier vasquez', '23', 'masculino', '1', '3143212611', 'cll 60 # 1w - 20', 'nodiervasquez@hotmail.com', '1234'),
(1098777877, 'Diana chacon', '29', 'Femenino', '2', '3143345611', 'cll 60 # 1w - 20', 'diana@hotmail.com', '1234'),
(1098777878, 'Cristian Prieto', '23', 'masculino', '1', '3123338580', 'cll 60 # 1w - 20', 'cprieto380@hotmail.com', '1234'),
(1234567890, 'Andres Rincon', '22', 'masculino', '3', '3112312611', 'cll 60 # 1w - 20', 'camilo@hotmail.com', '1234');
-- ---------------------------------------------------------
-- Estructura de tabla para la tabla equipos
CREATE TABLE equipos (
  id_eq smallint NOT NULL PRIMARY KEY,
  talla_eq varchar(30) NOT NULL,
  color_eq varchar(10),
  descripcion varchar(250)
);
-- Volcado de datos para la tabla equipos
INSERT INTO equipos (id_eq, talla_eq, color_eq, descripcion) VALUES
(1, '10', 'rojo', 'casco, guantes'),
(2, '20', 'negro', 'casco, guantes'),
(3, '10', 'rojo', 'casco, guantes'),
(4, '20', 'rojo', 'casco, guantes'),
(5, '10', 'rojo', 'casco, guantes, rodilleras'),
(6, '20', 'azul', 'casco, guantes, rodilleras'),
(7, '10', 'rojo', 'casco, guantes, rodilleras'),
(8, '20', 'rojo', 'casco, guantes, rodilleras'),
(9, '20', 'rojo', 'casco, guantes, rodilleras'),
(10, '20', 'verde', 'casco, guantes, rodilleras'),
(11, '20', 'rojo', 'casco, guantes, rodilleras'),
(12, '20', 'rojo', 'casco, guantes, rodilleras');
-- ---------------------------------------------------------
-- Estructura de tabla para la tabla parqueaderos
CREATE TABLE parqueaderos (
  id_pq varchar(10) NOT NULL PRIMARY KEY,
  nombre_pq varchar(25) NOT NULL,
  tel_pq bigint NOT NULL,
  dir_pq varchar(20) NOT NULL,
  long_pq varchar(100),
  lati_pa varchar(100)
);
-- Volcado de datos para la tabla parqueaderos
INSERT INTO parqueaderos (id_pq, nombre_pq, tel_pq, dir_pq, long_pq, lati_pa) VALUES
('1', 'Éxito Cabecera', 3124563456, 'Cra. 35a #49-27', '-73.109071', '7.114591'),
('2', 'San francisco', 3129873456, 'Cra. 22 #17-40', '-73.124129', '7.130848'),
('3', 'La isla', 3128453456, 'Cll. 56 #22-16', '-73.115568', '7.108747'),
('4', 'Real de minas', 3143212611, 'Cll 60#1w-20', '-73.128956', '7.100545');
-- ---------------------------------------------------------
-- Estructura de tabla para la tabla tipovehiculos
CREATE TABLE tipovehiculos (
  tipo_vh smallint NOT NULL PRIMARY KEY,
  vehiculo varchar(30) NOT NULL
);
-- Volcado de datos para la tabla tipovehiculos
INSERT INTO tipovehiculos (tipo_vh, vehiculo) VALUES
(1, 'Automovil'),
(2, 'Motocicleta'),
(3, 'Bicicleta'),
(4, 'patineta');
-- ---------------------------------------------------------
-- Estructura de tabla para la tabla vehiculos
CREATE TABLE vehiculos (
  id_vh smallint NOT NULL PRIMARY KEY auto_increment,
  placa_vh varchar(6),
  modelo_vh varchar(30),
  color_vh varchar(20) NOT NULL,
  tipo_vh smallint NOT NULL,
  puestos_vh int(11) NOT NULL,
  transmision_vh varchar(20),
  combustible_vh varchar(20),
  kilometraje_vh int(11),
  estado_vh varchar(20) NOT NULL,
  valorDia_vh bigint NOT NULL,
  seguro_vh varchar(30),
  observaciones_vh varchar(250) NOT NULL,
  parqueadero smallint,
  FOREIGN KEY (tipo_vh) REFERENCES tipovehiculos (tipo_vh)
);
-- Volcado de datos para la tabla vehiculos
INSERT INTO vehiculos VALUES
(1, 'abc123', 'audi e-tron', 'rojo', 1, 2, '', '', 12345, 'Ocupado', 2000000, '2000000', '', 0),
(2, 'fbg657', 'Bentley Flying Spur', 'azul', 1, 4, '', '', 12345, 'Ocupado', 1000000, '2000000', '', 0),
(3, 'wec113', 'bugatti divon', 'rojo', 1, 2, '', '', 12345, 'Disponible', 1500000, '2000000', '', 3),
(4, 'cdf003', 'BYD E6', 'negro', 1, 2, '', '', 12345, 'mantenimiento', 1200000, '2000000', '', 1),
(5, 'cdf00d', 'AKT TT3 200', 'blanco', 2, 2, '', '', 12345, 'Ocupado', 500000, '2000000', '', 0),
(6, 'vhf34a', 'AKT TT3 200', 'blanco', 2, 2, '', '', 12345, 'Ocupado', 500000, '2000000', '', 0),
(7, 'efg40g', 'AKT TT3 200', 'rojo', 2, 2, '', '', 12345, 'Disponible', 500000, '2000000', '', 2),
(8, 'rgt56h', 'AKT TT3 200', 'negro', 2, 2, '', '', 12345, 'Disponible', 500000, '2000000', '', 1),
(9, '', 'bmw Welly', 'negro', 3, 1, '', '', 0, 'Ocupado', 200000, '2000000', '', 0),
(10, '', 'bmw Welly', 'negro', 3, 1, '', '', 0, 'Ocupado', 200000, '2000000', '', 0),
(11, '', 'bmw Welly', 'verde', 3, 1, '', '', 0, 'Disponible', 200000, '2000000', '', 3),
(12, '', 'bmw Welly', 'negro', 3, 1, '', '', 0, 'Disponible', 200000, '2000000', '', 2),
(13, '', 'penny', 'negro', 4, 1, '', '', 0, 'Disponible', 100000, '2000000', '', 2),
(14, '', 'penny', 'rojo', 4, 1, '', '', 0, 'Ocupado', 100000, '2000000', '', 0),
(15, '', 'penny', 'amarillo', 4, 1, '', '', 0, 'Disponible', 100000, '2000000', '', 2),
(16, '', 'penny', 'azul', 4, 1, '', '', 0, 'Disponible', 100000, '2000000', '', 1);

-- ---------------------------------------------------------
-- Estructura de tabla para la tabla mantenimiento
CREATE TABLE mantenimiento (
  id_mant smallint NOT NULL PRIMARY KEY,
  id_vh smallint NOT NULL,
  tipo_mant varchar(20),
  fecha date,
  observaciones varchar(250),
  FOREIGN KEY (id_vh) REFERENCES vehiculos (id_vh)
);
-- Volcado de datos para la tabla mantenimiento
INSERT INTO mantenimiento VALUES
(1, 4, 'Preventivo', '2019-05-14', 'Problemas con los frenos');

-- ---------------------------------------------------------
-- Estructura de tabla para la tabla reservas
CREATE TABLE reservas (
  id_res smallint NOT NULL PRIMARY KEY auto_increment,
  id_vh smallint NOT NULL,
  id_user bigint NOT NULL,
  fechaRecibido date,
  fechaDevolucion date,
  valor_res bigint,
  id_pi varchar(10) NOT NULL,
  id_pf varchar(10) NOT NULL,
  FOREIGN KEY (id_vh) REFERENCES vehiculos (id_vh),
  FOREIGN KEY (id_user) REFERENCES usuarios (id_user)
);
-- Volcado de datos para la tabla reservas
insert into reservas values (1,1,1234567890,'2019-5-13','2019-5-16',6000000,1,4);
insert into reservas values (2,2,1234567890,'2019-5-13','2019-5-16',3000000,2,1);
insert into reservas values (3,5,1234567890,'2019-5-13','2019-5-16',1500000,3,1);
insert into reservas values (4,6,1234567890,'2019-5-13','2019-5-16',1500000,4,2);
insert into reservas values (5,9,1098777877,'2019-5-13','2019-5-16',600000,1,4);
insert into reservas values (6,10,1098777877,'2019-5-13','2019-5-16',600000,2,3);
insert into reservas values (7,14,1098777877,'2019-5-13','2019-5-16',300000,4,1);
-- ---------------------------------------------------------
-- Estructura de tabla para la tabla equiporeserva
CREATE TABLE equiporeserva (
  id_equipoReserva smallint NOT NULL PRIMARY KEY auto_increment,
  id_eq smallint NOT NULL,
  id_res smallint NOT NULL,
  cantidad smallint,
  FOREIGN KEY (id_eq) REFERENCES equipos (id_eq),
  FOREIGN KEY (id_res) REFERENCES reservas (id_res)
); 
-- Volcado de datos para la tabla equiporeserva
INSERT INTO equiporeserva (id_equipoReserva, id_eq, id_res, cantidad) VALUES
(1, 1, 3, 2),
(2, 7, 4, 1),
(3, 8, 5, 1),
(4, 9, 6, 1),
(5, 12, 7, 1);
