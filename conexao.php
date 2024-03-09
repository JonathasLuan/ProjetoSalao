<?php
// Configurações do banco de dados
$host = '127.0.0.1';        // Endereço do servidor MySQL
$username = 'root';  // Nome de usuário do MySQL
$password = '131544741Jl@';    // Senha do MySQL
$database = 'projetosalao';    // Nome do banco de dados

// Estabelece a conexão com o banco de dados
$conn = new mysqli($host, $username, $password, $database);

// Verifica se houve erros na conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

/*
$servidor = "localhost";
$usuario = "projetosalao";
$senha = "projetosalao";
$dbname = "projetosalao";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
?>


<?php

$usuario = 'projetosalao';
$senha = 'projetosalao';
$database = 'projetosalao';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("falha ao conectar ao banco de dados: " . $mysqli->error);
}
*/

?>
