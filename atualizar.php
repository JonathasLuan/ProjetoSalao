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
<?php

if (isset($_POST['acao'])) {
    function realizarUpload()
    {
        global $mysqli;

        $arquivo = $_FILES['file'];
        $arquivoNovo = explode('.', $arquivo['name']);

        if ($arquivoNovo[sizeof($arquivoNovo) - 1] != 'jpg' && $arquivoNovo[sizeof($arquivoNovo) - 1] != 'png') {
            die('Você não pode fazer upload deste tipo de arquivo.');
        } else {
            echo 'Upload feito com sucesso.';
            echo "<img src='uploads/" . $arquivo['name'] . "'>";
            move_uploaded_file($arquivo['tmp_name'], 'uploads/' . $arquivo['name']);

            // Salvar o arquivo no banco de dados
            $nomeArquivo = $mysqli->real_escape_string($arquivo['name']);
            $caminhoArquivo = 'uploads/' . $arquivo['name'];
            $sql = "INSERT INTO arquivos (nome, caminho) VALUES ('$nomeArquivo', '$caminhoArquivo')";
            // Execute a consulta SQL para salvar o arquivo no banco de dados
            $mysqli->query($sql);
        }
    }

    realizarUpload();
}
?>