CREATE DATABASE Adop_can default character set utf8 collate utf8_unicode_ci;

use Adop_can;

CREATE TABLE Animal (
id int not null auto_increment,
id_animal int null,
nombre varchar(50) null,
peso double(4,2) null,
edad int null,
descripcion varchar(255) null,
imagen longblob,

PRIMARY KEY (id));


CREATE TABLE Usuario (
id_usuario int not null auto_increment,
cedula varchar(10) null,
nombres varchar(60) null,
apellidos varchar(60) null,
direccion varchar(100) null,
correo varchar(100) null,
telefono varchar(10) null,

PRIMARY KEY (id_usuario));

CREATE TABLE Salud1 (
id_salud int not null auto_increment,
estado_salud varchar(100) null,
primary key (id_salud));


CREATE TABLE TamaÃ±o1 (
id_tamaÃ±o int not null auto_increment,
tamaÃ±o varchar(20) null,
primary key (id_tamaÃ±o));



Create table Tipo_raza1(
id_raza int not null auto_increment,
nombre_raza varchar(50) null,
primary key(id_raza));


Create table Solicitud_Adopcion1(
id_solicitud int not null auto_increment,
primary key (id_solicitud));


create table Tipo_mascota1(
id_tipo_mascota int not null auto_increment,
mascota varchar(100) null,
primary key(id_tipo_mascota));

alter table salud1 add constraint R_1 foreign key (id_salud) references animal(id);
alter table tamaÃ±o1 add constraint R_2 foreign key (id_tamaÃ±o) references animal(id);
alter table tipo_raza1 add constraint R_3 foreign key (id_raza) references animal(id);
alter table animal add constraint R_4 foreign key (id_animal) references solicitud_adopcion1(id_solicitud);
alter table usuario add constraint R_5 foreign key (id_usuario) references solicitud_adopcion1(id_solicitud);
alter table tipo_mascota1 add constraint R_6 foreign key (id_tipo_mascota) references tipo_raza1(id_raza);
