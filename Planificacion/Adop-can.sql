create database ADOPT_CAN default character set utf8 collate utf8_unicode_ci;
use ADOPT_CAN;

DROP TABLE IF EXISTS Perro;

CREATE TABLE Perro (
  id int NOT NULL AUTO_INCREMENT,
  idCan int NULL,
  nombre varchar(45)  NULL,
  edad varchar(3)  NULL,
  peso double(4,2) null,
  descripcion varchar(255)  NULL,
  imgs longblob,
  PRIMARY KEY (id)
);


DROP TABLE IF EXISTS Cliente;

CREATE TABLE Cliente (
  id_cliente int NOT NULL AUTO_INCREMENT,
  cedula varchar(45)  NULL,
  nombres varchar(45)  NULL,
  apellidos varchar(45)  NULL,
  correo varchar(60)  NULL,
  direcion varchar(45)  NULL,
  telefono varchar(45)  NULL,
  PRIMARY KEY (id_cliente)
  );
  
DROP TABLE IF EXISTS Tipo_raza;

CREATE TABLE Tipo_raza (
  id_raza int NOT NULL AUTO_INCREMENT,
  nombre_raza varchar(100)  NULL,
  PRIMARY KEY (id_raza)
  );
  
DROP TABLE IF EXISTS Tamaño;

 CREATE TABLE Tamaño (
  id_tamaño int NOT NULL AUTO_INCREMENT,
  tamaño varchar(20)  NULL,
  PRIMARY KEY (id_tamaño)
  ); 
  
DROP TABLE IF EXISTS Salud;

 CREATE TABLE Salud (
  id_salud int NOT NULL AUTO_INCREMENT,
  estado_salud varchar(50)  NULL,
  PRIMARY KEY (id_salud)
  );
  
  DROP TABLE IF EXISTS Solicitud_Adopcion;
  
   CREATE TABLE Solicitud_Adopcion (
  id_solicitud int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (id_solicitud)
  );
  
  alter table Tipo_raza add constraint R_1 foreign key (id_raza) references Perro(id);
  alter table Tamaño add constraint R_2 foreign key (id_tamaño) references Perro(id);
  alter table Salud add constraint R_3 foreign key (id_salud) references Perro(id);
  alter table perro add constraint R_4 foreign key (idCan) references Solicitud_Adopcion(id_solicitud);
  alter table cliente add constraint R_5 foreign key (id_cliente) references Solicitud_Adopcion(id_solicitud);