create table "usuario"(
    id_usuario int,
    nome varchar(200),
    email varchar(200),
    tipo varchar (200),
    foto varchar (200)
    primary key (id_usuario));

create table "perfil"(
     id_perfil int,
     tipo varchar (200),
     data_criação varchar (8)
     primary key (id_perfil));

create table "comentario"(
    id_comentario int,
    data varchar (8),
    texto varchar (200),
    primary key (id_comentario));

create table "perfil_usuario"(
    id perfil_usuario,
    data varchar (8),
    primary key (perfil_usuario));

create table "cliente"(
    id_cliente int,
    nome_completo varchar (200),
    sexo varchar (200),
    data_nascimento varchar (200),
    telefone varchar (200)
    primary key (id_cliente));


    
    

    
