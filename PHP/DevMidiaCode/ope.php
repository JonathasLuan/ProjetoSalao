<?php
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];
$servidor = "localhost";
$usuario = "root";
$dbname = "projetosalao";

$conn = mysqli_connect($servidor, $usuario, $login, $senha, $dbname) or die
  ("Sem conexão com o servidor");
$select = mysql_select_db("server") or die("Sem acesso ao DB");

$result = mysql_query("SELECT * FROM `usuario2` WHERE `nome` = '$login' AND `senha`= '$senha'");

if (mysql_num_rows($result) > 0) {
  $_SESSION['login'] = $login;
  $_SESSION['senha'] = $senha;
  header('location:site.php');
} else {
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:index.php');

}
?>