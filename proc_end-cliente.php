<?php
session_start();
include_once("conexao.php");

$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_EMAIL);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_EMAIL);
$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);

$id_usuario = $_SESSION['id_usuario'];

$result_end = "INSERT INTO endereco (id_usuario, estado, cidade, bairro, rua, numero, complemento) VALUES ('$id_usuario', '$estado', '$cidade', '$bairro', '$rua', '$numero', '$complemento')";
$resultado_end = mysqli_query($conn, $result_end);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "Endereço cadastrado com sucesso";
    header("Location: cad_sobre-cliente.php");
} else {
    header("Location: cadastro.php");
    echo "Falha ao cadastrar.";
}
?>