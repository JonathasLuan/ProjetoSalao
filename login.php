
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
    <?php
    // Inicia a sessão do PHP
    session_start();

    // Verifica se o usuário já fez login
    if (isset($_SESSION['usuario']) && $_SESSION['usuario'] === true) {
      // usuário já fez login, exibe o menu de sessão iniciada
      include('menu-logado.php');
    } else {
      // usuário não fez login, exibe o menu padrão
      include('menu-padrao.php');
    }
    ?>
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