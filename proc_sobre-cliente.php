<?php
session_start();
include_once("conexao.php");

// Sobre:
$bio = filter_input(INPUT_POST, 'bio', FILTER_SANITIZE_STRING);
// Caracteristicas:
$cabelo = filter_input(INPUT_POST, 'cabelo', FILTER_SANITIZE_STRING);
$pele = filter_input(INPUT_POST, 'pele', FILTER_SANITIZE_STRING);
$unhas = filter_input(INPUT_POST, 'unhas', FILTER_SANITIZE_STRING);
$rosto = filter_input(INPUT_POST, 'rosto', FILTER_SANITIZE_STRING);

$sqlBio = "UPDATE usuário SET bio = '$bio'";
$insert = mysqli_query($conn, $sqlBio);

$id_usuario = $_SESSION['id_usuario'];
$id_cabelo = ;
$id_pele = ;
$id_unhas = ;
$id_rosto = ;

$sqlCaract = "INSERT INTO caracteristicas (id_usuario_fk, id_cabelo_fk, id_pele_fk, id_unhas_fk, id_rosto_fk) VALUES ('$id_usuario', '$id_cabelo', '$id_pele', '$id_unhas', '$id_rosto')";
$insert = mysqli_query($conn, $sqlCaract);

if (mysqli_insert_id($conn)) {
    header("Location: perfil-cliente.php");
} else {
    header("Location: cadastro.php");
    echo "Falha ao cadastrar.";
}

?>
