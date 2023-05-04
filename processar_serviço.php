<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$bd = "projetosalao";

$mysqli = new mysqli($host, $user, $pass, $bd);

if ($mysqli->connect_errno) {
    echo "Connect failed: " . $mysqli->connect_error;
    exit();
}

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_EMAIL);

$result_usuario = "INSERT INTO servico (nome, descricao, preco) VALUES ('$nome', '$descricao', '$preco')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

?>