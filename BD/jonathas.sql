create table cliente (
    id_cliente int not null auto_increment primary key,
    id_usuario int not null,
    id_local varchar(100) not null,
    nome_completo varchar(200) not null,
    genero varchar(100),
    telefone varchar(11) unique,
    
);

create table perfil (
    id_perfil int not null auto_increment primary key,
    id_usuario_fk int not null,
    tipo varchar(50) not null,
    data_criação date,
    foreign key (id_usuario_fk) references usuario (id_usuario),
);
create table usuario (
    id_usuario int not null auto_increment primary key,
    nome varchar(200) not null,
    email varchar(200) not null unique,
    senha varchar(200) not null unique,
    tipo varchar(100) not null,
);
create table local (
    id_local varchar(100) not null primary key,
    estado varchar(100) not null,
    cidade varchar(100) not null,
    bairro varchar(100) not null,
    rua varchar(100) not null,
    numero int not null,
    cep int not null,
    complemento varchar(100) null,
    tipo_local varchar(100) not null,
);
create table servico (
    id_servico int not null auto_increment primary key,
    id_especialidade_fk varchar(100) not null,
    nome varchar(200) not null,
    descricao varchar(200) null,
    preco decimal not null,
    categoria  varchar(100) not null,
    subcategoria  varchar(100) not null,
    tempo datetime null,
    foreign key (id_especialidade_fk) references especialidade (id_especialidade),
);
create table especialidade (
    id_especialidade int not null auto_increment primary key,
    nome varchar(200) not null,
    descricao varchar(200) not null,
    categoria  varchar(100) not null,
    subcategoria  varchar(100) not null,
);
create table transacao (
    id_transacao varchar(200) not null auto_increment primary key,
    tipo
    data date not null,
    valor decimal not null,
    status varchar(100) not null,
);
