<?php
session_start();

/*echo $_SESSION['id'];
echo $_SESSION['senha'];
echo session_id();*/

?>

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
    // Verifica se o usuário já fez login
    if (isset($_SESSION['id']) && session_id() == $_SESSION['id']) {
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
      <div id="f">
        <h2>Contate-nos</h2>
      </div>
      <div style="padding: 40px;">
        <h2>Contate-nos</h2>
        <div id="formulario-container">
          <form action="email.php" method="POST">
            <div>
              <input type="text" id="nome" name="name" placeholder="Nome" required><br>
            </div>

            <div>
              <input type="email" id="email" name="email" placeholder="@ E-mail" required><br>
            </div>

            <div>
              <input type="tel" id="telefone" name="telefone" placeholder="Telefone">
            </div>
            <br>
            <div>
              <input id="assunto" name="assunto" placeholder="Assunto" required></input>
            </div>

            <div>
              <textarea id="mensagem" name="mensagem" rows="10" cols="50" placeholder="Digite sua mensagem aqui..."
                required></textarea>
            </div>
            <div id="contact-btn"><button type="submit" value="Enviar">Enviar</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
  include('footer.php');
  ?>
  </div>
</body>

</html>