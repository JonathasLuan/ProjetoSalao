<?php
$servidor = "192.168.8.211";
$usuario = "jonathas@professor";
$senha = "";
$dbname = "projetosalao";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
?>


<?php

$usuario = 'root';
$senha = '';
$database = 'projetosalao';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("falha ao conectar ao banco de dados: " . $mysqli->error);
}
