<?php
session_start();
include_once("conexao.php");

// Sobre
$bio = filter_input(INPUT_POST, 'bio', FILTER_SANITIZE_STRING);
$experiencia = filter_input(INPUT_POST, 'experiencia', FILTER_SANITIZE_STRING);

$id_usuario = $_SESSION['id_usuario'];

$sqlBio = "INSERT INTO x (id_usuario, bio, experiencia) VALUES ('$id_usuario', '$bio', '$experiencia')";
$insert = mysqli_query($conn, $sqlBio);

if (mysqli_insert_id($conn)) {
    header("Location: perfil-profissional.php");
} else {
    header("Location: cadastro.php");
    echo "Falha ao cadastrar.";
}
?>