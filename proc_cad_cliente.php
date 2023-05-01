<?php
session_start();
include_once("conexao.php");

$tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO usuário (tipo, nome, sobrenome, email, senha, telefone, genero) VALUES ('$tipo', '$nome', '$sobrenome', '$email', '$senha', '$telefone', '$genero')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "Usuário cadastrado com sucesso";
    header("Location: contcad1cliente.php");
}else {
    header("Location: cadastro.php");
    echo "Falha ao cadastrar.";
}
?>