<?php
session_start();
include_once("conexao.php");

$foto = filter_input(INPUT_POST, 'foto', FILTER_SANITIZE_STRING);
$bio = filter_input(INPUT_POST, 'bio', FILTER_SANITIZE_STRING);
$experiencia = filter_input(INPUT_POST, 'experiencia', FILTER_SANITIZE_STRING);

$email = $_SESSION['email'];
$sql = "SELECT id_usuario FROM usuário WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $id = $row['id_usuario'];
}

$sql = "SELECT id_endereco FROM endereco WHERE id_usuario = '$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $id_end = $row['id_endereco'];
}

$sqlBio = "INSERT INTO profissional (id_usuario_fk, id_local_fk, id_especialidade_fk, bio, experiencia) VALUES ('$id', '$id_end', 1, '$bio', '$experiencia')";
$insert = mysqli_query($conn, $sqlBio);

if (mysqli_insert_id($conn)) {
    header("Location: perfil-profissional.php");
} else {
    header("Location: cadastro.php");
    echo "Falha ao cadastrar.";
}
?>