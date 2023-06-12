<?php
session_start();
include_once('conexao.php');

// Verifica se o valor do nome foi enviado via POST
if (isset($_POST['nome'])) {
    $novoNome = $_POST['nome'];

    // Realiza a atualização no banco de dados
    $email = $_SESSION['email'];
    $sql = "UPDATE usuário SET nome = '$novoNome' WHERE email = '$email'";
    $resultado = mysqli_query($conn, $sql);

    if ($resultado) {
        header('Location: principal.php');
        echo "Nome atualizado com sucesso.";
    } else {
        echo "Erro ao atualizar o nome.";
    }
}
?>