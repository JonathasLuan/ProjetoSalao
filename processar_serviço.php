<?php
session_start();
include_once("conexao-serviço.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_EMAIL);

$result_usuario = "INSERT INTO servico (nome, descricao, preco) VALUES ('$nome', '$descricao', '$preco')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "Usuário cadastrado com sucesso";
    header("Location: login.php");
}else {
    header("Location: cadastro.php");
    echo "Falha ao cadastrar.";
}
?>