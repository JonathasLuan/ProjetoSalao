<?php
session_start();
include_once("conexao.php");

// Manda para CONTINUAÇÃO DE CADASTRO 1 (cad_end-cliente)

$tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);

/*
//Código para testar verificação de usuário (e-mail) já cadastrado:
$verify = "SELECT * FROM usuário WHERE email = '$email'");
$mysqli_query = $mysqli->query($verify) or die("Falha na execução do código SQL: " . $mysqli->error);

$quantidade = $mysqli_query->num_rows;

if ($quantidade > 0) {
    echo "Esse e-mail já está registrado.";
    } else {
        $result_usuario = "INSERT INTO usuário (tipo, nome, sobrenome, email, senha, telefone, genero) VALUES ('$tipo', '$nome', '$sobrenome', '$email', '$senha', '$telefone', '$genero')";
$resultado_usuario = mysqli_query($conn, $result_usuario);
    }
*/

$result_usuario = "INSERT INTO usuario (tipo, nome, sobrenome, email, senha, telefone, genero) VALUES ('$tipo', '$nome', '$sobrenome', '$email', '$senha', '$telefone', '$genero')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

$_SESSION['id_usuario'] = mysqli_insert_id($conn);

if (mysqli_insert_id($conn)) {
    header("Location: cad_end-cliente.php");
} else {
    header("Location: cadastro.php");
    echo "Falha ao cadastrar.";
}
?>
