<?php
session_start();
include('conexao.php');

$especialidade = filter_input(INPUT_POST, 'especialidade', FILTER_SANITIZE_STRING);
$outra = filter_input(INPUT_POST, 'outra', FILTER_SANITIZE_STRING);
$servico = filter_input(INPUT_POST, 'serviço', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$outro = filter_input(INPUT_POST, 'outro', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$data_pedido = filter_input(INPUT_POST, 'data_pedido', FILTER_SANITIZE_STRING);
$hora = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO pedido (id_servico_fk, id_especialidade_fk, outra, outro, descricao, data_pedido, hora, cidade, bairro, rua) VALUES ('$servico', '$especialidade', '$outra', '$outro', '$descricao', '$data_pedido', '$hora', '$cidade', '$bairro', '$rua')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

?>