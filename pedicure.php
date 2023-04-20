<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pedicure</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    p {
      margin: 50px;
      font-size: 20px;
    }
  </style>
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
  <p>Nesta página serão exibidos os serviços de pedicure</p>
</body>

</html>