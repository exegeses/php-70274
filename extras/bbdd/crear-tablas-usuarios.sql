# Creación de tablas usuarios y roles

## creación de tabla roles
create table roles
(
    idRol tinyint unsigned auto_increment primary key not null,
    rol varchar(30) unique not null
);

-- inserción de datos en tabla roles
insert into roles
    values
        ( DEFAULT, 'Administrador' ),
        ( DEFAULT, 'Supervisor' ),
        ( DEFAULT, 'Empleado' ),
        ( DEFAULT, 'Invitado' );

## creación de tabla usuarios
create table usuarios
(
    idUsuario smallint unsigned auto_increment primary key not null,
    usuNombre varchar(45) not null,
    usuApellido varchar(45) not null,
    usuEmail varchar(45) unique not null,
    usuClave varchar(72) not null,
    idRol tinyint unsigned not null default (3),
        foreign key ( idRol ) references roles ( idRol ),
    usuActivo boolean not null default (1)
);