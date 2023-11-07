CREATE DATABASE TravelControl_DB;
USE TravelControl_DB;

CREATE TABLE Area(
	id int primary key auto_increment NOT NULL,
	codigo longtext NOT NULL,
	descripcion longtext NOT NULL
);
CREATE TABLE Empleado(
	id int primary key auto_increment NOT NULL,
	nombreCompleto longtext NOT NULL,
	identificacion longtext NOT NULL,
	area int NOT NULL,
    constraint FK_Empleado_Area foreign key(area) references Area(id)
);
CREATE TABLE EstadoViaje(
	id int primary key auto_increment NOT NULL,
	codigo varchar(6) NOT NULL,
	estado varchar(50) NOT NULL
);
CREATE TABLE Presupuesto(
	id int primary key auto_increment NOT NULL,
	presupuesto float NOT NULL,
	saldo float NOT NULL
);
CREATE TABLE HistorialGastos(
	id int primary key auto_increment NOT NULL,
	fecha datetime NOT NULL,
	descripcion longtext NOT NULL,
	proveedor varchar(50) NOT NULL,
	alimentacion bit NOT NULL,
	transporte bit NOT NULL,
	hotel bit NOT NULL,
	otros longtext NOT NULL,
	cliente longtext NOT NULL,
	total float NOT NULL,
	presupuesto int NOT NULL,
    constraint FK_HistorialGastos_Presupuesto foreign key(presupuesto) references Presupuesto(id)
);
CREATE TABLE TipoViaje(
	id int auto_increment Primary Key NOT NULL,
	codigo longtext NOT NULL,
	descripcion longtext NOT NULL
);
CREATE TABLE Viaje(
	id int primary key auto_increment NOT NULL,
	tipoViaje int NOT NULL,
	empleado int NOT NULL,
	asuncionGastos longtext NOT NULL,
	presupuesto int NOT NULL,
	estado int NOT NULL,
    constraint FK_Viaje_Empleado foreign key(empleado) references Empleado(id),
    constraint FK_Viaje_EstadoViaje foreign key(estado) references EstadoViaje(id),
    constraint FK_Viaje_Presupuesto foreign key(presupuesto) references Presupuesto(id),
    constraint FK_Viaje_TipoViaje foreign key(tipoViaje) references TipoViaje(id)
);

INSERT INTO Presupuesto (presupuesto,saldo) VALUES (15000,50000);

