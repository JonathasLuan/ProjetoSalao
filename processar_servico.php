<?php
session_start();
include('conexao.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_EMAIL);

$result_usuario = "INSERT INTO pedido (id_especialidade_fk, nome, descricao, preco) VALUES ('1', '$nome', '$descricao', '$preco')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

?>