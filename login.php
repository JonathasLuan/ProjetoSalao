<?php
include('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {
    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if ((strlen($_POST['senha']) == 0)) {
        echo "Preencha sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuario2 WHERE email = '$email' AND senha = '$senha'";
        $mysqli_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $mysqli_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $mysqli_query->fetch_assoc();

            if (session_id() == '') {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: perfil.html");

        } else {
            echo "Falha ao logar! E-mail ou Senha incorretos";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./loginCSS.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header>
    <div class="header1">
      <div class="logo">
        <div><img src="./img/tesourapentepretos.jpg"></div>
        <div>
          <span>NaRégua</span>
        </div>
      </div>
    </div>
    <div class="pesquisa">
      <input type="text" placeholder="buscar...">
      <i class="fa fa-search"></i>
    </div>
    <div class="menu">
      <ul>
        <li>
          <a href="home.php">home</a>
        </li>
        <li>
          <a href="serviços.html">serviços</a>
        </li>
        <li>
          <a href="sobre.html">sobre</a>
        </li>
        <li>
          <div class="dropdown">
            <a href="perfil.html" class="mainmenua">perfil</a>
            <div class="dropdown-child">
              <a href="cadastro.php">Cadastro</a>
            </div>
          </div>
        </li>
        <li>
          <a href="contato.html">contato</a>
        </li>
      </ul>
    </div>
  </header>
  <div class="campologin">
    <h1>LOGIN</h1>
    <div class="formulario-container">
      <h3>Entre com sua conta!</h3>
      <form action="" method="POST">
        <div>
          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email" placeholder="@" required><br>
        </div>

        <div>
          <label for="senha">Senha:</label>
          <input type="password" id="senha" name="senha" required>
          <div>
            <button type="submit">Entrar</button>
          </div>
      </form>
    </div>
    <div id="cadastro" style="font-size: 16px;">
      <h3>Ainda não tem uma conta? <a href='cadastro.php'>Cadastre-se</a></h3>
    </div>
  </div>
</body>

</html>