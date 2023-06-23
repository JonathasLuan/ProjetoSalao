<?php
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
