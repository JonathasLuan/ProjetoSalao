<?php
$servidor = "192.168.8.211";
$usuario = "jonathas@professor";
$senha = "";
$dbname = "projetosalao";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
?>


<?php

$usuario = 'jonathas@professor';
$senha = '';
$database = 'projetosalao';
$host = '192.168.8.211';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("falha ao conectar ao banco de dados: " . $mysqli->error);
}
