<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if((strlen($_POST['senha']) == 0)) {
        echo "Preensha sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
        $mysql_query = $mysqli->query($mysql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $mysql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $mysql_query->fetch_assoc();
            
            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou Senha incorretos";
        }
    }
}
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
    <h1>Acessar conta:</h1>
    <form action="" method="POST"></form>
    <p>
        <label for="">E-mail</label>
        <input type="text" name="email">
    </p>
    <p>
        <label for="">Senha</label>
        <input type="password" name="email">
    </p>
    <p>
        <button type="submit">Entrar</button>
    </p>
</body>

</html>