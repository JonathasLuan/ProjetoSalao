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
  <title>Perfil</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="perfilCSS.css">
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
  <main>
    <section>
      <div class="sidebar sidebar-left">
        <div class="container-perfil">
          <div id="info">
            <div id="foto">
              <img id="foto-perfil" src="img/profile.webp" alt="profile">
              <button id="editar-foto"><i class="fa fa-pencil"></i></button>
            </div>
            <div id="modal-foto" class="modal">
              <div class="modal-inner">
                <span class="close">&times;</span>
                <!-- aqui vai o conteúdo da janela modal -->
                <div id="modal-content">
                  <h2>Editar Foto</h2>
                  <div class="arquivo">
                    <label for="profile-image">Escolha uma Imagem</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="4194304">
                    <input type="file" id="profile-image" name="profile-image">
                  </div>
                  <img id="profile-preview" src="img/profile.webp" alt="profile">
                  <button id="salvar-foto" type="submit">Salvar</button>
                </div>
              </div>
            </div>
            <div id="botoes">
              <button>seguir</button>
              <button>mensagem</button>
            </div>
            <div id="tipo-user">
              <h3>tipo-user</h3>
            </div>
            <div id="name">
              <h2 id="nomeperfil">Fulano da Silva</h2>
            </div>
            <div id="links">
              <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
              <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
            </div>
            <div id="bio">
              <p id="sobre">Aqui será um pequeno texto sobre o usuário (cliente ou profissional). Poderá fornecer
                informações
                adicionais além das especificadas abaixo, como sua vida profissional e características mais pessoais de
                seu trabalho.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="sidebar sidebar-right">
        <nav id="menu-content">
          <button id="botao1" class="menu-button active" data-target="content1">Botão 1</button>
          <button id="botao2" class="menu-button" data-target="content2">Botão 2</button>
          <button id="botao3" class="menu-button" data-target="content3">Botão 3</button>
          <button id="botao4" class="menu-button" data-target="content4">Botão 4</button>
        </nav>
        <div class="container-content">
          <div id="conteudo">
            <div class="content active" id="conteudo1">
              <h2>Conteúdo 1:</h2>
              <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
                mas sim botões que abrem conteúdo no espaço abaixo</p>
            </div>
            <div class="content hidden" id="conteudo2">
              <h2>Conteúdo 2:</h2>
              <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
                mas sim botões que abrem conteúdo no espaço abaixo</p>
            </div>
            <div class="content hidden" id="conteudo3">
              <h2>Conteúdo 3:</h2>
              <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
                mas sim botões que abrem conteúdo no espaço abaixo</p>
            </div>
            <div class="content hidden" id="conteudo4">
              <h2>Conteúdo 4:</h2>
              <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
                mas sim botões que abrem conteúdo no espaço abaixo</p>
              <div>
                <h2>Informações Pessoais</h2>
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
              <div>
                <h2>Endereço</h2>
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
                  <button id="salvar-complemento" style="display:none"
                    onclick="salvarCampo('complemento')">Salvar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script>
    function editarCampo(campo) {
      var elemento = document.getElementById(campo);
      var valorAntigo = elemento.innerText;
      elemento.innerHTML = '<input type="text" id="campo-editar" value="' + valorAntigo + '">';
      document.getElementById('edit-' + campo).style.display = 'none';
      document.getElementById('salvar-' + campo).style.display = 'inline';
    }

    function salvarCampo(campo) {
      var valorNovo = document.getElementById('campo-editar').value;
      document.getElementById(campo).innerHTML = valorNovo;
      document.getElementById('edit-' + campo).style.display = 'inline';
      document.getElementById('salvar-' + campo).style.display = 'none';
    }
  </script>

  <script>
    function editarCampo(campo) {
      var elemento = document.getElementById(campo);
      var valorAntigo = elemento.innerText;
      elemento.innerHTML = '<input type="text" id="campo-editar" value="' + valorAntigo + '">';
      document.getElementById('edit-' + campo).style.display = 'none';
      document.getElementById('salvar-' + campo).style.display = 'inline';
    }

    function salvarCampo(campo) {
      var valorNovo = document.getElementById('campo-editar').value;
      document.getElementById(campo).innerHTML = valorNovo;
      document.getElementById('edit-' + campo).style.display = 'inline';
      document.getElementById('salvar-' + campo).style.display = 'none';
    }
  </script>
  <script src="perfilJS.js"></script>
</body>

</html>