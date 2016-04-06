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
rol_id int(10) primary key not null auto_increment,
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
fecha date,
hora time,
paciente_id int(10),
estado varchar(25),
usuario_id int(10)
);

drop table Atencion;
create table Atencion(
atencion_id int(10) primary key not null auto_increment,
indicacion text,
fecha datetime,
estado varchar(25),
cita_id int(10),
usuario_id int(10)
);


insert into Usuario(nombre,apepat,apemat,username,password,telefono,celular,correo,estado,rol_id) values('ricardo','toledo','barria','rtoledo','1234','232323','88113436','ricardo.toledob@gmail.com','activo',1);
insert into Usuario(nombre,apepat,apemat,username,password,telefono,celular,correo,estado,rol_id) values('jaime','abarca','','jabarca','1234','232323','9988333','iandrade@gmail.com','activo',2);
insert into Usuario(nombre,apepat,apemat,username,password,telefono,celular,correo,estado,rol_id) values('secre','secre','','secre','1234','232323','9988333','valvarado@gmail.com','activo',3);

insert into Rol(tipo) values('administrador');
insert into Rol(tipo) values('medico');
insert into Rol(tipo) values('secretaria');

insert into Paciente(rut,nombre,apepat,apemat,telefono,celular,direccion,estado) values('15582517-0','ricardo','toledo','barria','612263970','88113436','pje pocuro #039','activo');
insert into Paciente(rut,nombre,apepat,apemat,telefono,celular,direccion,estado) values('15905884-0','ivan','andrade','cabrera','612231231','88113436','pje algo #022','activo');
insert into Paciente(rut,nombre,apepat,apemat,telefono,celular,direccion,estado) values('14226738-1','victor','alvarado','cardenas','612202020','88113436','pje algo #033','activo');

insert into Cita(fecha,hora,paciente_id,estado,usuario_id) values('2016-06-20','15:30',1,'activo',3);
insert into Cita(fecha,hora,paciente_id,estado,usuario_id) values('2016-07-31','10:30',2,'activo',3);
insert into Cita(fecha,hora,paciente_id,estado,usuario_id) values('2016-11-01','09:30',3,'activo',3);
insert into Cita(fecha,hora,paciente_id,estado,usuario_id) values('2015-07-31','09:30',1,'finalizado',3);


insert into Atencion(indicacion,fecha,estado,cita_id,usuario_id) values('crear algo 1ml x 2 dias etc..','2015/07/31','atendido',4,2);
