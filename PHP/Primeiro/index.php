<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cadastro:</h1>
    <form method="POST" action="processa.php">
        <label for="">Nome:</label>
        <input type="text" name="nome">
        <br><br>
        <label for="">E-mail:</label>
        <input type="email" name="email">
        <br><br>
        <label for="">Senha:</label>
        <input type="password" name="senha">
        <br><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>