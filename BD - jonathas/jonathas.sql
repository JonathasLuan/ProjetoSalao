create table cliente (
    id int not null auto_increment primary key,
    nome varchar(200) not null,
    telefone varchar(11) unique,
);