create table cliente (
    id_cliente int not null auto_increment primary key,
    id_usuario_fk int not null,
    id_local_fk int not null,
    nome_completo varchar(200) not null,
    genero varchar(100),
    data_nascimento date null,
    telefone varchar(11) unique,
    foreign key (id_usuario_fk) references usuario (id_usuario),
    foreign key (id_local_fk) references local (id_local),
);

create table profissional (
    id_profissional int not null auto_increment primary key,
    id_usuario_fk int not null,
    id_local_fk int not null,
    id_especialidade_fk int not null,
    nome_completo varchar(200) not null,
    genero varchar(100),
    data_nascimento date null,
    telefone varchar(11) unique,
    foreign key (id_usuario_fk) references usuario (id_usuario),
    foreign key (id_local_fk) references local (id_local),
    foreign key (id_especialidade_fk) references especialidade (id_especialidade),
);

create table perfil (
    id_perfil int not null auto_increment primary key,
    id_usuario_fk int not null,
    tipo enum('cliente', 'profissional') not null,
    data_criacao date,
    foreign key (id_usuario_fk) references usuario (id_usuario),
);

create table servico (
    id_servico int not null auto_increment primary key,
    id_especialidade_fk int not null,
    nome varchar(200) not null,
    descricao varchar(200) null,
    preco decimal not null,
    categoria varchar(100) not null,
    subcategoria varchar(100) not null,
    tempo time null,
    foreign key (id_especialidade_fk) references especialidade (id_especialidade),
);

create table fatura (
    id_fatura int not null auto_increment primary key,
    id_transacao_fk int not null,
    id_cliente_fk int not null,
    id_profissional_fk int not null,
    valor decimal not null,
    data_criacao date not null,
    foreign key (id_transacao_fk) references transacao (id_transacao),
    foreign key (id_cliente_fk) references cliente (id_cliente),
    foreign key (id_profissional_fk) references profissional (id_profissional),
);

create table agendamento (
    id_agendamento int not null auto_increment primary key,
    id_cliente_fk int not null,
    id_profissional_fk int not null,
    id_servico_fk int not null,
    nome_cliente varchar(200) not null,
    nome_profissional varchar(200) not null,
    data_atendimento date not null,
    data_agendamento date not null,
    horario time not null,
    valor decimal not null,
    metodo_pagamento varchar(200) not null,
    local_atendimento status varchar(50) not null,
    foreign key (id_cliente_fk) references cliente (id_cliente),
    foreign key (id_profissional_fk) references profissional (id_profissional),
    foreign key (id_servico_fk) references servico (id_servico),
);

create table servicos_profissionais (
    id_servico_profissional int not null auto_increment primary key,
    id_profissional_fk int not null,
    id_servico_fk int not null,
    valores decimal not null,
    foreign key (id_profissional_fk) references profissional (id_profissional),
    foreign key (id_servico_fk) references servico (id_servico),
);

create table especialidade_profissional (
    id_especialidade_profissional int not null auto_increment primary key,
    id_especialidade_fk int,
    id_profissional_fk int,
    foreign key (id_especialidade_fk) references especialidade (id_especialidade),
    foreign key (id_profissional_fk) references profissional (id_profissional),
);

create table comentario (
    id_comentario int not null auto_increment primary key,
    id_usuario_fk int not null,
    data_coment date not null,
    comentario text not null,
);

create table avaliacao (
    id_avaliacao int not null auto_increment primary key,
    id_usuario_fk int not null,
    data_aval date null,
    avaliacao text not null,
    foreign key (id_usuario_fk) references usuario (id_usuario),
);

create table midia (
    id_midia int not null auto_increment primary key,
    id_pagina_fk int not null,
    tipo varchar(100) not null,
    src varchar(500),
    tamanho decimal not null,
    modificacao datetime not null,
    upload datetime not null,
    foreign key (id_pagina_fk) references pagina (id_pagina),
);

create table conversa (
    id_conversa int not null auto_increment primary key,
    id_cliente_fk int not null,
    id_profissional_fk int not null,
    foreign key (id_cliente_fk) references cliente (id_cliente),
    foreign key (id_profissional_fk) references profissional (id_profissional),
);

create table mensagem (
    id_mensagem int not null auto_increment primary key,
    id_conversa int not null,
    id_usuario_fk int not null,
    remetente varchar(100) not null,
    destinatario varchar(100) not null,
    mensagem text not null,
    tipo_mens varchar(100) not null,
    status_mens varchar(100) not null,
    envio datetime not null,
    foreign key (id_usuario_fk) references cliente (id_usuario),
    foreign key (id_conversa_fk) references cliente (id_conversa),
);

create table info (
    id_info int not null auto_increment primary key,
    id_link_fk int not null,
    id_caract_fk int not null,
    nomeperfil varchar(200) not null,
    fotoperfil tipo - user varchar(100) not null,
    sobre text null,
    id_preferencia_fk int not null,
    notificacao visibilidade
);

create table configurações (
    id_config int not null auto_increment primary key,
    id_perfil_fk int not null,
    id_conta_fk int not null,
    id_usuario_fk int not null,
    id_preferencia_fk int not null,
);