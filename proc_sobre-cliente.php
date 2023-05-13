<?php
session_start();
include_once("conexao.php");

// Sobre:
$bio = filter_input(INPUT_POST, 'bio', FILTER_SANITIZE_STRING);

$result = "INSERT INTO usuário (bio) VALUES ('$bio')";
$resultado = mysqli_query($conn, $result);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "Endereço cadastrado com sucesso";
    header("Location: perfil-cliente.php");
} else {
    header("Location: cadastro.php");
    echo "Falha ao cadastrar.";
}

// Caracteristicas:
$cabelo = filter_input(INPUT_POST, 'cabelo', FILTER_SANITIZE_STRING);
$pele = filter_input(INPUT_POST, 'pele', FILTER_SANITIZE_STRING);
$unhas = filter_input(INPUT_POST, 'unhas', FILTER_SANITIZE_STRING);
$barba = filter_input(INPUT_POST, 'barba', FILTER_SANITIZE_STRING);

$result = "INSERT INTO caracteristicas (cabelo, pele, unhas, barba) VALUES ('$cabelo', '$pele', '$unhas', '$barba')";
$resultado = mysqli_query($conn, $result);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "Endereço cadastrado com sucesso";
    header("Location: perfil-cliente.php");
} else {
    header("Location: cadastro.php");
    echo "Falha ao cadastrar.";
}
?>