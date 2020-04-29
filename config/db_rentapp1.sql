DROP SCHEMA IF EXISTS rentapp ;
CREATE SCHEMA if not exists rentapp;
use rentapp;

create table tipoVehiculos
(
 tipo_vh smallint not null,
 vehiculo varchar(30) not null,
 primary key(tipo_vh)
);


insert into tipoVehiculos values (1,'Automovil');
insert into tipoVehiculos values (2,'Motocicleta');
insert into tipoVehiculos values (3,'Bicicleta');
insert into tipoVehiculos values (4,'patineta');

create table usuarios(
  id_user bigint not null primary key,
  nombres_user varchar(40) not null,
  edad_user varchar(20) not null,
  sexo_user varchar(20) not null,
  tipo_user varchar(1) not null,
  tel_user varchar(10) not null,
  dir_user varchar(20) not null,
  correo_user varchar(30) not null,
  password_user varchar(30) not null
);

INSERT INTO usuarios VALUES (1022408489, 'nodier vasquez', '23', 'masculino', '1', '3143212611', 'cll 60 # 1w - 20', 'nodiervasquez@hotmail.com', '1234');
INSERT INTO usuarios VALUES (1098777878, 'Cristian Prieto', '23', 'masculino', '1', '3123338580', 'cll 60 # 1w - 20', 'cprieto380@hotmail.com', '1234');
INSERT INTO usuarios VALUES (1234567890, 'Andres Rincon', '22', 'masculino', '2', '3112312611', 'cll 60 # 1w - 20', 'camilo@hotmail.com', '1234');
INSERT INTO usuarios VALUES (1098777877, 'Diana chacon', '29', 'Femenino', '2', '3143345611', 'cll 60 # 1w - 20', 'diana@hotmail.com', '1234');

create table parqueaderos(
  id_pq varchar(10) not null,
  nombre_pq varchar(25) not null,
  tel_pq bigint not null,
  dir_pq varchar(20) not null,
  long_pq varchar(100),
  lati_pa varchar(100),

  primary key(id_pq)
);

insert into parqueaderos values (1,'Las palmas',3124563456,'calle 31#33-13','','');
insert into parqueaderos values (2,'San francisco',3129873456,'carrera 31#33-13','','');
insert into parqueaderos values (3,'parquito',3128453456,'calle 45#33-23','','');

create table vehiculos
	(
  id_vh smallint not null,
  placa_vh varchar(6) null,
  modelo_vh varchar(30) null,
  color_vh varchar(20) not null,
  tipo_vh smallint not null,
  puestos_vh integer not null,
  transmisi0n_vh varchar(20) null,
  combustible_vh varchar(20) null,
  kilometraje_vh integer null,
  estado_vh varchar(20) not null,
  valorDia_vh bigint not null,
  seguro_vh varchar(30),
  observaciones_vh varchar(250) not null,
  parqueadero smallint,

 primary key(id_vh),
 CONSTRAINT fk_tipoVehiculos_vehiculos FOREIGN KEY (tipo_vh) REFERENCES tipoVehiculos(tipo_vh)
  );

insert into vehiculos values (1,'abc123','audi e-tron','rojo','1',2,'','',12345,'Ocupado',2000000,'2000000','rayon puerta derecha',0);
insert into vehiculos values (2,'fbg657','Bentley Flying Spur','azul','1',4,'','',12345,'Ocupado',1000000,'2000000','',0);
insert into vehiculos values (3,'wec113','bugatti divon','rojo','1',2,'','',12345,'Disponible',1500000,'2000000','',3);
insert into vehiculos values (4,'cdf003','BYD E6','negro','1',2,'','',12345,'Mantenimiento',1200000,'2000000','',1);
insert into vehiculos values (5,'cdf00d','AKT TT3 200','blanco','2',2,'','',12345,'Ocupado',500000,'2000000','',0);
insert into vehiculos values (6,'vhf34a','AKT TT3 200','blanco','2',2,'','',12345,'Ocupado',500000,'2000000','',0);
insert into vehiculos values (7,'efg40g','AKT TT3 200','rojo','2',2,'','',12345,'Disponible',500000,'2000000','',2);
insert into vehiculos values (8,'rgt56h','AKT TT3 200','negro','2',2,'','',12345,'Disponible',500000,'2000000','',1);
insert into vehiculos values (9,'','bmw Welly','negro','3',1,'','',0,'Ocupado',200000,'2000000','',0);
insert into vehiculos values (10,'','bmw Welly','negro','3',1,'','',0,'Ocupado',200000,'2000000','',0);
insert into vehiculos values (11,'','bmw Welly','verde','3',1,'','',0,'Disponible',200000,'2000000','',3);
insert into vehiculos values (12,'','bmw Welly','negro','3',1,'','',0,'Disponible',200000,'2000000','',2);
insert into vehiculos values (13,'','penny','negro','4',1,'','',0,'Disponible',100000,'2000000','',2);
insert into vehiculos values (14,'','penny','negro','4',1,'','',0,'Ocupado',100000,'2000000','',0);
insert into vehiculos values (15,'','penny','negro','4',1,'','',0,'Disponible',100000,'2000000','',2);
insert into vehiculos values (16,'','penny','negro','4',1,'','',0,'Disponible',100000,'2000000','',1);


create table reservas
	(
		id_res smallint not null,
		id_vh smallint not null,
		id_user bigint not null,
		fechaRecibido date,
		fechaDevolucion date,
		valor_res bigint,

	primary key(id_res),
	FOREIGN KEY(id_vh) REFERENCES vehiculos(id_vh),
	FOREIGN KEY(id_user) REFERENCES usuarios(id_user)
		);

insert into reservas values (1,1,1234567890,'2019-5-13','2019-5-16',6000000,1,4);
insert into reservas values (2,2,1234567890,'2019-5-13','2019-5-16',3000000,2,1);
insert into reservas values (3,5,1234567890,'2019-5-13','2019-5-16',1500000,3,1);
insert into reservas values (4,6,1234567890,'2019-5-13','2019-5-16',1500000,4,2);
insert into reservas values (5,9,1098777877,'2019-5-13','2019-5-16',600000,1,4);
insert into reservas values (6,10,1098777877,'2019-5-13','2019-5-16',600000,2,3);
insert into reservas values (7,14,1098777877,'2019-5-13','2019-5-16',300000,4,1);

create table equipos
(
 id_eq smallint not null,
 talla_eq varchar(30) not null,
 color_eq varchar(10),
 descripcion varchar(250),
 primary key(id_eq)
);

insert into equipos values (1,'10','rojo','casco, guantes');
insert into equipos values (2,'20','negro','casco, guantes');
insert into equipos values (3,'10','rojo','casco, guantes');
insert into equipos values (4,'20','rojo','casco, guantes');
insert into equipos values (5,'10','rojo','casco, guantes, rodilleras');
insert into equipos values (6,'20','azul','casco, guantes, rodilleras');
insert into equipos values (7,'10','rojo','casco, guantes, rodilleras');
insert into equipos values (8,'20','rojo','casco, guantes, rodilleras');
insert into equipos values (9,'20','rojo','casco, guantes, rodilleras');
insert into equipos values (10,'20','verde','casco, guantes, rodilleras');
insert into equipos values (11,'20','rojo','casco, guantes, rodilleras');
insert into equipos values (12,'20','rojo','casco, guantes, rodilleras');


create table equipoReserva
(
id_equipoReserva smallint not null,
id_eq smallint not null,
id_res smallint not null,
cantidad smallint,

primary key(id_equipoReserva),
CONSTRAINT fk_equipos_equipoReserva
FOREIGN KEY (id_eq) REFERENCES equipos(id_eq),
CONSTRAINT fk_reservas_equipoReserva
FOREIGN KEY (id_res) REFERENCES reservas(id_res)
);

insert into equipoReserva values (1,1,3,2);
insert into equipoReserva values (2,7,4,1);
insert into equipoReserva values (3,8,5,1);
insert into equipoReserva values (4,9,6,1);
insert into equipoReserva values (5,12,7,1);


create table mantenimiento
(
 id_mant smallint not null,
 id_vh smallint not null,
 tipo_mant varchar(20),
 fecha date,
 observaciones varchar(250),

 primary key (id_mant),
 CONSTRAINT fk_vehiculos_mantenimiento
FOREIGN KEY (id_vh) REFERENCES vehiculos(id_vh)

);

insert into mantenimiento values (1,4,'Preventivo','2019-05-14','Problemas con los frenos');
