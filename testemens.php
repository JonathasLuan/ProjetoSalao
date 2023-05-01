<?php

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetosalao";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem sucedida
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insere mensagem no banco de dados
if (isset($_POST['mensagem']) && !empty($_POST['mensagem'])) {
    $mensagem = $_POST['mensagem'];
    $sql = "INSERT INTO mensagens (conteudo) VALUES ('$mensagem')";
    if (mysqli_query($conn, $sql)) {
        echo "Mensagem adicionada com sucesso!";
    } else {
        echo "Erro ao adicionar mensagem: " . mysqli_error($conn);
    }
}

// Exibe as mensagens na tela
$sql = "SELECT conteudo FROM mensagens";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Exibe as mensagens em uma lista
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>" . $row["conteudo"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Não há mensagens.";
}

// Exibe as mensagens na tela
$sql = "SELECT conteudo FROM mensagens WHERE id = 2";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Exibe as mensagens em uma lista
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>" . $row["conteudo"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Não há mensagens.";
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);


?>

<form action="" method="POST">
    <input type="text" name="mensagem">
    <input type="submit" value="Enviar">
</form>