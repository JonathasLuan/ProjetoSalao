<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entrar</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      background-color: #f2f2f2;
    }

    h1 {
      text-align: center;
      margin-top: 70px;
    }

    h3 {
      margin-bottom: 40px;
    }

    .container-central {
      background-color: #ffffff;
      color: #000000;
      padding: 14px;
      border-radius: 5px;
      margin: 0 auto;
      width: 25%;
      margin-top: 50px;
      font-family: "Nunito Sans", sans-serif;
      box-shadow: 0px 0px 5px #ccc;
    }

    .container-central h2 {
      font-weight: bold;
      text-align: center;
      font-size: 35px;
    }

    .container-central h3 {
      text-align: center;
      font-size: 20px;
    }

    button {
      background-color: #484848;
      color: #FFFFFF;
      border-radius: 4px;
      display: block;
      margin: 0 auto;
      padding: 10px;
      font-size: 20px;
      margin-bottom: 20px;
      width: 200px;
      cursor: pointer;
      border: none;
    }

    button:hover {
      background-color: #a9a9a9;
    }

    a {
      text-decoration: none;
    }
  </style>
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
  <h1>Você ainda não está logado?</h1>
  <div class="container-central">
    <h2>Comece já!</h2>
    <h3>Entre com sua conta ou crie uma:</h3>
    <div class="button-container" style="text-align: center; justify-content: center;">
      <a href='login.php'><button>LOGIN</button></a>
      <a href='cadastro.php'><button>CADASTRO</button></a>
    </div>
  </div>
</body>

</html>