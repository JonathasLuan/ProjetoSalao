<?php
include_once("conexao.php");

if (isset($_POST['email']) || isset($_POST['senha'])) {
    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if ((strlen($_POST['senha']) == 0)) {
        echo "Preencha sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuário WHERE email = '$email' AND senha = '$senha'";
        $mysqli_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $mysqli_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $mysqli_query->fetch_assoc();

            $tipo_sql_code = "SELECT tipo FROM usuário WHERE email = '$email' AND senha = '$senha'";
            $tipo_query = $mysqli->query($tipo_sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
            $tipo = $tipo_query->fetch_assoc()['tipo'];
            $_SESSION['tipo'] = $tipo;


            if (session_id() == '') {
                session_start();
            }

            $_SESSION['id'] = session_id();
            $_SESSION['senha'] = $usuario['senha'];
            $_SESSION['email'] = $usuario['email'];

            header("Location: principal.php");

        } else {
            echo "<p style='color:red; text-align: center; font-weight: bold;'>" . "Falha ao logar! E-mail ou Senha incorretos." . "</p>";
        }
    }
}
?>