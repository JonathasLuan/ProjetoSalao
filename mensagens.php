<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mensagens</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./mensagens.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header>
    <div class="header1">
      <div class="logo">
        <div><img src="./img/tesoura.png"></div>
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
  <h1>aqui ficarão as mensagens</h1>
  <button id="login-btn">LOGIN</button>
  </div>
  <div id="modal-login" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <!-- aqui vai o conteúdo da janela modal -->
      <div class="main">
        <h1>LOGIN</h1>
        <h2>Entre com sua conta!</h2>
        <form>
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
    </div>
  </div>
  <script>
    // Obtém a janela modal e o botão "LOGIN"
    var modal = document.getElementById("modal-login");
    var btn = document.getElementById("login-btn");

    // Obtém o botão "Fechar" e adiciona um evento de clique
    var span = document.getElementsByClassName("close")[0];
    span.onclick = function () {
      modal.style.display = "none";
    }

    // Adiciona um evento de clique para mostrar a janela modal quando o usuário clicar no botão "LOGIN"
    btn.onclick = function () {
      modal.style.display = "block";
    }
  </script>
</body>

</html>