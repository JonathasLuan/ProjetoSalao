<?php
session_start();
include_once("conexao.php");

// Manda para CONTINUAÇÃO DE CADASTRO 1 (contcad1)

$tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO usuário VALUES ('$tipo', '$nome', '$sobrenome', '$email', '$senha', '$telefone', '$genero')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

$_SESSION['id_usuario'] = "SELECT id_usuario WHERE email = $email";

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "Usuário cadastrado com sucesso";
    header("Location: contcad1cliente.php");
}else {
    header("Location: cadastro.php");
    echo "Falha ao cadastrar.";
}

$_SESSION['tipo'] = $tipo;
$_SESSION['nome'] = $nome;
$_SESSION['sobrenome'] = $sobrenome;
$_SESSION['email'] = $email;
$_SESSION['senha'] = $senha;
$_SESSION['telefone'] = $telefone;
$_SESSION['genero'] = $genero;
?>
