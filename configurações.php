<?php
/*session_start();
echo $_SESSION['id'];
echo $_SESSION['usuario'];
if (!isset($_SESSION['usuario'])) {
header('Location: entrar.php');
exit();
}*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Configurações</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="perfil-profissionalCSS.css">
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
    <style>
      main {
        width: 70%;
        margin: auto;
        margin-top: 20px;
        padding: 20px 40px;
        background-color: #fff;
      }

      .accordion {
        background-color: #eee;
        color: #000;
        font-weight: bold;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
        margin-bottom: 10px;
      }

      .active,
      .accordion:hover {
        background-color: #ccc;
      }

      .accordion:after {
        content: '\002B';
        color: #777;
        font-weight: bold;
        float: right;
        margin-left: 5px;
      }

      .active:after {
        content: "\2212";
      }

      .panel {
        padding: 0 18px;
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
      }
    </style>
    <h2>Configurações</h2>
    <button class="accordion">Gerais</button>
    <div class="panel">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat.</p>
      <div id="content1" class="content">
        <h4>Modo de tela:</h4>
        <span>light</span>
        <label class="switch">
          <input type="checkbox" id="dark-mode-switch">
          <span class="slider round"></span>
        </label>
        <span>dark</span>
      </div>
      <p>Aqui serão escolhidas as preferências do usuário, como: visibilidade, notificações,
        visualização e edição
        do histórico de conversas e agendamentos feitos.</p>
    </div>

    <button class="accordion">Informações Pessoais</button>
    <div class="panel">
      <div id="content4" class="content">
        <div id="nome-sobrenome" class="divs">
          <div>
            <h3>Usuário e E-mail</h3>
            <div>
              <span>Nome:</span>
              <span id="nome">João da Silva</span>
              <button id="edit-nome" onclick="editarCampo('nome')">Editar</button>
              <button id="salvar-nome" style="display:none" onclick="salvarCampo('nome')">Salvar</button>
            </div>
            <div>
              <span>Email:</span>
              <span id="email">joao.silva@gmail.com</span>
              <button id="edit-email" onclick="editarCampo('email')">Editar</button>
              <button id="salvar-email" style="display:none" onclick="salvarCampo('email')">Salvar</button>
            </div>
          </div>
        </div>
        <br>
        <div id="endereco" class="divs">
          <h3 style="text-align: center;">Endereço</h3>
          <div id="info-endereco">
            <div class="data">
              <span>Estado:</span>
              <span id="estado">São Paulo</span>
              <button id="edit-estado" onclick="editarCampo('estado')">Editar</button>
              <button id="salvar-estado" style="display:none" onclick="salvarCampo('estado')">Salvar</button>
            </div>
            <div>
              <span>Cidade:</span>
              <span id="cidade">São Pailo</span>
              <button id="edit-cidade" onclick="editarCampo('cidade')">Editar</button>
              <button id="salvar-cidade" style="display:none" onclick="salvarCampo('cidade')">Salvar</button>
            </div>
            <div>
              <span>Bairro:</span>
              <span id="bairro">Centro</span>
              <button id="edit-bairro" onclick="editarCampo('bairro')">Editar</button>
              <button id="salvar-bairro" style="display:none" onclick="salvarCampo('bairro')">Salvar</button>
            </div>
            <div>
              <span>Rua:</span>
              <span id="rua">Av. Paulista</span>
              <button id="edit-rua" onclick="editarCampo('rua')">Editar</button>
              <button id="salvar-rua" style="display:none" onclick="salvarCampo('rua')">Salvar</button>
            </div>
            <div>
              <span>Complemento:</span>
              <span id="complemento">''</span>
              <button id="edit-complemento" onclick="editarCampo('complemento')">Editar</button>
              <button id="salvar-complemento" style="display:none" onclick="salvarCampo('complemento')">Salvar</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <button class="accordion">Conta</button>
    <div class="panel">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <button class="accordion">Perfil</button>
    <div class="panel">
      <div id="editnome" class="divs">
        <div>
          <h4>Informações de exibição</h4>
          <div>
            <span>Nickname:</span>
            <span id="nick">João da Silva</span>
            <button id="edit-nick" onclick="editarCampo('nick')">Editar</button>
            <button id="salvar-nick" style="display:none" onclick="salvarCampo('nick')">Salvar</button>
          </div>
        </div>
      </div>
      <br>
      <div id="editbio" class="divs" style="border-bottom: 0;">
        <h3>Sobre</h3>
        <div>
          <p id="sobreperfil">Aqui será um pequeno texto sobre o usuário (cliente ou profissional).
            Poderá
            fornecer
            informações
            adicionais além das especificadas abaixo, como sua vida profissional e características mais
            pessoais de
            seu trabalho.</p>
          <button class="edit-btn">Editar</button>
        </div>
        <br>
        <div>
          <textarea id="editsobre" name="editsobre" rows="10" cols="50"></textarea>
          <button class="btn-salvar-edit btn">Salvar</button>
        </div>
      </div>
    </div>

    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          }
        });
      }
    </script>
  </main>
  <?php
  include('footer.php');
  ?>
  <script src="perfil-profissionalJS.js"></script>
</body>

</html>