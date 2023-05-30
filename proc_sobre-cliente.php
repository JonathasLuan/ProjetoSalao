<?php
session_start();
include_once("conexao.php");

$foto = filter_input(INPUT_POST, 'foto', FILTER_SANITIZE_STRING);
$bio = filter_input(INPUT_POST, 'bio', FILTER_SANITIZE_STRING);

$id_usuario = $_SESSION['id_usuario'];

$sqlBio = "INSERT INTO cliente (id_usuario_fk, bio) VALUES ('$id_usuario', '$bio')";
$insert = mysqli_query($conn, $sqlBio);

if (mysqli_insert_id($conn)) {
    header("Location: perfil-cliente.php");
} else {
    header("Location: cadastro.php");
    echo "Falha ao cadastrar.";
}
?>