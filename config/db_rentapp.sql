DROP SCHEMA IF EXISTS rentapp ;
create schema if not exists rentapp;
use rentapp;

create table usuarios(
  id_user varchar(10) not null primary key,
  nombres_user varchar(40) not null,
  edad_user varchar(20) not null,
  sexo_user varchar(20) not null,
  tipo_user varchar(1) not null,
  tel_user varchar(10) not null,
  dir_user varchar(20) not null,
  correo_user varchar(30) not null,
  password_user varchar(30) not null
);

INSERT INTO `usuarios` VALUES ('1022408489', 'nodier vasquez', '23', 'masculino', '1', '3143212611', 'cll 60 # 1w - 20', 'nodiervasquez@hotmail.com', 'noledigo');
INSERT INTO `usuarios` VALUES ('1022408490', 'alexander vasquez', '23', 'masculino', '2', '3143212611', 'cll 60 # 1w - 30', 'nvasquez280@unab.edu.co', 'noledigo');
INSERT INTO `usuarios` VALUES ('1022408491', 'nodier pavas', '23', 'masculino', '3', '3143212611', 'cll 60 # 1w - 20', 'nodiervasquez41@gmail.com', 'noledigo');


create table vehiculos(
  id_vh varchar(10) not null primary key,
  placa_vh varchar(6) null,
  modelo_vh varchar(4) null,
  color_vh varchar(20) not null,
  tipo_vh varchar(10) not null,
  puestos_vh int(1) not null,
  transmisión_vh varchar(20) null,
  combustible_vh varchar(20) null,
  kilometraje_vh int(6) null,
  estado_vh varchar(10) not null,
  valorhora_vh int(7) not null,
  seguro_vh varchar(20),
  observaciones_vh varchar(250) not null
  );

  create table reservas(
  id_res varchar(10) not null primary key,
  id_vh_res varchar(10) not null,
  id_user_res varchar(10) not null,
  fechaRecibo_res date not null,
  fechaDevolu_res date not null,
  valor_res int (10) not null,
  foreign key (id_vh_res) references vehiculos(id_vh),
  foreign key (id_user_res) references usuarios(id_user)
  );

create table parqueaderos(
  id_pq varchar(10) not null primary key,
  id_vh_pq varchar(10) not null,
  nombre_pq varchar(25) not null,
  tel_pq varchar(10) not null,
  dir_pq varchar(20) not null,
  long_pq varchar(100) not null,
  lati_pq varchar(100) not null,
  foreign key (id_vh_pq) references vehiculos(id_vh)
);

create table mantenimientos(
  id_mant varchar(10) not null primary key,
  id_vh_mant varchar(10) not null,
  tipo_mant varchar(20) not null,
  observaciones_mant varchar(250) not null
);

create table tiene(
id_mant_t varchar(10) not null,
id_vh_t varchar(10) not null,
fecha_t date not null,
foreign key (id_mant_t) references mantenimientos(id_mant),
foreign key (id_vh_t) references vehiculos(id_vh));

create table equipos(
  id_eq varchar(10) not null primary key,
  talla_eq varchar(30) null,
  color_eq varchar(10) not null,
  descr_eq varchar(250) not null
);

create table posee(
id_eq_pos varchar(10),
id_vh_pos varchar(10),
cant_eq int(3) not null,
foreign key (id_eq_pos) references equipos(id_eq),
foreign key (id_vh_pos) references vehiculos(id_vh)
);
