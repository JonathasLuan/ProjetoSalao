<?php

function selectUser()
{
    include_once('conexao.php');
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM usuário WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
}

function pegarId()
{
    include_once('conexao.php');
    $email = $_SESSION['email'];
    $sql = "SELECT id_usuario FROM usuário WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id_usuario'];
        return $id; // Retorna o valor do ID
    }
}

function selectProfile($id)
{
    include_once('conexao.php');
    $sql = "SELECT * FROM arquivos WHERE id_usuario_fk = '$id'";
    // Execute a consulta SQL para recuperar o arquivo do banco de dados
    $query = $mysqli->query($sql);
}

include_once('functions.php');
$id = pegarId(); // Captura o valor retornado pela função

selectProfile($id);

// Verificar se a consulta retornou algum resultado
if ($resultado = $query->fetch_assoc()) {
    $caminhoArquivo = $resultado['caminho'];
    echo $caminhoArquivo;
} else {
    echo "ERRO!!!";
}

?>