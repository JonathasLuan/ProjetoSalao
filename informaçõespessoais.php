<?php
// Inicia a sessão do PHP
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informações Pessoais</title>
  <link rel="stylesheet" href="./index.css">
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
    // usuário já fez login, exibe o menu de sessão iniciada
    include('menu-logado.php');
    ?>
  </header>
  <main>
    <div id="conteudo">
      <h1></h1>
      <p>Aqui ficarão as informações pessoais do usuario/profissional</p>
    </div>
  </main>
</body>

</html>