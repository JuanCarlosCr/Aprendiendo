create table usuarios(
     
    idusuario int(11) not null auto_increment primary key,
    usuario varchar(40) not null,	
    password varchar(40) not null 	
);

create table comentarios(
     
    id_comentario int(11) not null auto_increment primary key,
    nombre_persona varchar(40) not null,	
    comentario varchar(400) not null 	
);

create table cliente(

    Documento_Cliente int not null primary key,
    Nombre_Cliente varchar(40) not null,
    Apellido_Cliente varchar(40) not null,
    Genero_Cliente varchar(20) not null,
    Edad_Cliente varchar(40) not null,
    Direccion_Cliente varchar(40) not null,
    Telefono_Cliente varchar(40) not null,
    Celular_Cliente varchar(40) not null
);

create table cotizacion(
    
    Id_Cotizacion int not null auto_increment primary key,
    Categoria_Curso varchar(40) not null,
    Tipo_Curso varchar(40) not null,
    Idioma_Curso varchar(40) not null,
    Tipo_Alojamiento varchar(40) not null,
    Pais_Curso varchar(40) not null,
    Ciudad_Curso varchar(40) not null,
    Fecha_Inicio varchar(40) not null,		
    Duracion_Curso varchar(40) not null
);

create table Genero_Cliente (
    
    id_Genero_Cliente int not null auto_increment primary key,
    nombre varchar(40) not null
);

create table Categoria_Curso (
    
    id_Categoria_Curso int not null auto_increment primary key,
    nombre varchar(40) not null
);

create table Tipo_Curso (

    id_Tipo_Curso int not null auto_increment primary key,
    nombre varchar(40) not null
);

create table Idioma_Curso (
    id_Idioma_Curso int not null auto_increment primary key,
    nombre varchar(40) not null
);

create table Tipo_Alojamiento (
   
    id_Tipo_Alojamiento int not null auto_increment primary key,
    nombre varchar(40) not null
);

create table Pais_Curso (

    id_Pais_Curso int not null auto_increment primary key,
    nombre varchar(40) not null
);

create table Ciudad_Curso (

    id_Ciudad_Curso int not null auto_increment primary key,
    nombre varchar(40) not null
);

create table Duracion_Curso ( 
   
    id_Duracion_Curso int not null auto_increment primary key,
    nombre varchar(40) not null
);