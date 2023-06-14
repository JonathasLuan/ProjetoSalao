<?php
session_start();
include_once('conexao.php');

// Verifica se o valor do nome e da bio foram enviados via POST
if (isset($_POST['nome'])) {
    $novoNome = $_POST['nome'];

    // Realiza as atualizações no banco de dados
    $email = $_SESSION['email'];
    $sql = "UPDATE usuário SET nome = '$novoNome' WHERE email = '$email'";
    $resultado = mysqli_query($conn, $sql);

    if ($resultado) {
        header('Location: principal.php');
    } else {
        header('Location: principal.php');
    }
}

if (isset($_POST['editsobre'])) {
    $novaBio = $_POST['editsobre'];

    // Realiza as atualizações no banco de dados
    $email = $_SESSION['email'];
    $sql = "UPDATE usuário SET bio = '$novaBio' WHERE email = '$email'";
    $resultado = mysqli_query($conn, $sql);

    if ($resultado) {
        header('Location: principal.php');
    } else {
        header('Location: principal.php');
    }
}
?>
