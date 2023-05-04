create table agendamento (
    id_agendamento int not null auto_increment primary key,
    id_cliente_fk int not null,
    id_profissional_fk int not null,
    id_servico_fk int not null,
    nome_cliente varchar(100) not null,
    nome_profissional varchar(100) not null,
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

create table pedido (
    id_pedido int not null auto_increment primary key,
    id_usuario_fk int not null,
    id_especialidade_fk int not null,
    outra varchar(100) null,
    id_serviço_fk int not null,
    outro varchar(100) null,
    descricao text null,
    data_pedido date not null,
    hora time null,
    cidade varchar(50) not null,
    bairro varchar(50) null,
    rua varchar(50) null,
    foreign key (id_usuario_fk) references usuário (id_usuario),
    foreign key (id_servico_fk) references servico (id_servico),
    foreign key (id_especialidade_fk) references especialidade (id_especialidade)
);