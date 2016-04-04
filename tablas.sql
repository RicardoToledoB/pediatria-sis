drop table Usuario;
create table Usuario(
usuario_id int(10) primary key not null auto_increment,
nombre varchar(25),
apepat varchar(25),
apemat varchar(25),
rol_id int(10),
username varchar(25),
password varchar(25),
telefono varchar(25),
celular varchar(25),
correo varchar(25),
estado varchar(25)
);

drop table Rol;
create table Rol(
rol_int int(10) primary key not null auto_increment,
tipo varchar(25)
);

drop table Paciente;
create table Paciente(
paciente_id int(10) primary key not null auto_increment,
rut varchar(25),
nombre varchar(25),
apepat varchar(25),
apemat varchar(25),
telefono varchar(25),
celular varchar(25),
direccion varchar(25),
estado varchar(25)
);

drop table Cita;
create table Cita(
cita_id int(10) primary key not null auto_increment,
fecha varchar(25),
hora varchar(25),
paciente_id int(10),
estado varchar(25),
usuario_id int(10)
);

drop table Receta;
create table Receta(
receta_id int(10) primary key not null auto_increment,
texto text,
fecha varchar(25),
estado varchar(25),
cita_id int(10)
);




