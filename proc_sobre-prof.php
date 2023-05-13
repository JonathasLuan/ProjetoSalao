<?php
session_start();
include_once("conexao.php");

// Sobre
$bio = filter_input(INPUT_POST, 'bio', FILTER_SANITIZE_STRING);
$experiencia = filter_input(INPUT_POST, 'experiencia', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO endereco (bio, experiencia) VALUES ('$bio', '$experiencia')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "Infortmações cadastradas com sucesso";
    header("Location: perfil-profissional.php");
} else {
    header("Location: cadastro.php");
    echo "Falha ao cadastrar.";
}
?>