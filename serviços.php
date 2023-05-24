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
  <title>Serviços</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./serviçosCSS.css">
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
  <nav>
    <a href="agendamentos.php">AGENDADOS</a>
    <a href="destaques.php">DESTAQUES</a>
    <a href="favoritos.php">FAVORITOS</a>
    <a href="provador.php">PROVADOR</a>
  </nav>
  <main>
    <article>
      <a href="cabeleireiro.php"><img src="img/cabelo.jpg" alt="Image 1" /></a>
      <a href="cabeleireiro.php">
        <h2>Cabeleireiro(a)</h2>
      </a>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </article>
    <article>
      <a href="barbeiro.php"><img src="img/barbearia.png" alt="Image 2" /></a>
      <a href="barbeiro.php">
        <h2>Barbeiro(a)</h2>
      </a>
      <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </article>
    <article>
      <a href="maquiador.php"><img src="img/maquiagem.jpg" alt="Image 3" /></a>
      <a href="maquiador.php">
        <h2>Maquiador(a)</h2>
      </a>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </article>
    <article>
      <a href="manicure.php"><img src="img/manicure.jpg" alt="Image 4" /></a>
      <a href="manicure.php">
        <h2>Manicure</h2>
      </a>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </article>
    <article>
      <a href="pedicure.php"><img src="img/pedicure.jpg" alt="Image 5" /></a>
      <a href="pedicure.php">
        <h2>Pedicure</h2>
      </a>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </article>
    <article>
      <a href="coloração.php"><img src="img/coloracao.jpg" alt="Image 6" /></a>
      <a href="coloração.php">
        <h2>Coloração</h2>
      </a>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </article>
  </main>
  <?php
  include('footer.php');
  ?>
</body>

</html>
</body>

</html>