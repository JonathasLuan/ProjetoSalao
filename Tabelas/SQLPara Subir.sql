create table fatura (
    id_fatura int not null auto_increment primary key,
    id_transacao_fk int not null,
    id_cliente_fk int not null,
    id_profissional_fk int not null,
    valor decimal not null,
    data_criacao date not null,
    foreign key (id_transacao_fk) references transacao (id_transacao),
    foreign key (id_cliente_fk) references cliente (id_cliente),
    foreign key (id_profissional_fk) references profissional (id_profissional)
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
    foreign key (id_servico_fk) references servico (id_servico)
);

create table servicos_profissional (
    id_servico_profissional int not null auto_increment primary key,
    id_profissional_fk int not null,
    id_servico_fk int not null,
    valores decimal not null,
    foreign key (id_profissional_fk) references profissional (id_profissional),
    foreign key (id_servico_fk) references servico (id_servico)
);

create table especialidade_profissional (
    id_especialidade_profissional int not null auto_increment primary key,
    id_especialidade_fk int,
    id_profissional_fk int,
    foreign key (id_especialidade_fk) references especialidade (id_especialidade),
    foreign key (id_profissional_fk) references profissional (id_profissional)
);

create table mensagem (
    id_mensagem int not null auto_increment primary key,
    id_conversa_fk int not null,
    id_usuario_fk int not null,
    remetente varchar(100) not null,
    destinatario varchar(100) not null,
    mensagem text not null,
    tipo_mens varchar(100) not null,
    status_mens varchar(100) not null,
    envio datetime not null,
    foreign key (id_usuario_fk) references usuário (id_usuario),
    foreign key (id_conversa_fk) references conversa (id_conversa)
);