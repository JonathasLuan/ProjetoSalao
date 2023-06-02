<?php

$dsn = "mysql:host=localhost; dbname=projetosalao";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password, );

$stmt = $pdo->query("SELECT * FROM usuário");
while ($user = $stmt->fetch()) {
    echo $user['nome'] . "-" . $user['email'] . "<br>";
}

?>