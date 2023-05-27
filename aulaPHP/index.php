<?php

include_once 'pessoa.php';
include_once 'endereco.php';
include_once 'cliente.php';

$obj_end = new Endereco();
$obj_end->cep = '12454584';
$obj_end->rua = 'Rua Guarani';
$obj_end->numero = '735';
$obj_end->cidade = 'Diadema';
$obj_end->bairro = 'Serraria';
$obj_end->estado = 'SP';
$obj_pessoa = new Pessoa;
$obj2 = new Pessoa;
$obj_pessoa->endereco = $obj_end;
$obj_pessoa->nome = "Galder";
echo $obj_pessoa->nome . "<br>";
$obj2->nome = "Rincewind";
echo $obj2->nome;
$obj_pessoa->idade = 100;
$obj_pessoa->cadastrarCpf(54564541);
$obj_pessoa->mostrarCpf();
echo $obj_pessoa->endereco;
$cliente1 = new Cliente();
$cliente1->nome = 'Duasflor';
?>