<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('Location: entrar.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agedamentos</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    main {
      padding: 0px 40px;
    }

    p,
    h1 {
      margin: 50px;
    }

    #servico-btn {
      bottom: 15px;
      right: 7px;
      background-color: #51b4f1;
      color: #fefefe;
      border-radius: 50%;
      border: 0;
      width: 40px;
      height: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
      cursor: pointer;
      font-size: 30px;
    }

    #servico-btn:hover {
      background-color: #51d9f1;
    }

    /* Estilos para a janela modal */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
      background-color: #fefefe;
      margin: 10% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      max-width: 50%;
    }

    .modal-content .main h2 {
      text-align: center;
    }

    /* Estilos para o botão "Fechar" */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
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
  <main>
    <h1>Aqui ficarão os agendamentos</h1>
    <p>Nesta página serão exibidos os serviços agendados pelo cliente e seu status, com todas as informações referentes
      a
      ele e o profissional envolvido, bem como as formas de pagamento escolhidas e termos de direitos de ambas as
      partes,
      com opções de contato com a equipe para resolver problemas.</p>

    </div>

  </main>

</body>

</html>