<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contate-nos</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./contatoCSS.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header>
    <?php
    include('header1.php');
    ?>
    <?php
    include('barra-pesquisa.php');
    ?>
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
  <div class="conteudo">
    <div id="contactform">
      <h2 style="text-align: center;">Contate-nos</h2>
      <div id="formulario-container">
        <form action="email.php" method="POST">
          <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="name" required><br>
          </div>

          <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="@" required><br>
          </div>

          <div>
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone">
          </div>
          <br>
          <div>
            <label for="assunto">Assunto:</label>
            <input id="assunto" name="assunto" required></input>
          </div>

          <div>
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="10" cols="50" required></textarea>
          </div>

          <div style="text-align: center;"><button type="submit" value="Enviar">Enviar</button></div>
        </form>
      </div>
    </div>
  </div>

  <?php
  include('footer.php');
  ?>
  </div>
</body>

</html>