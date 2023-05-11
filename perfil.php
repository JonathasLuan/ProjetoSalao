<?php
session_start();
include('conexao.php');

$modo = 'light';

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
  <link rel="stylesheet" href="dark-mode.css">
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
  <main>
    <section id="sec1">
      <div class="sidebar sidebar-left">
        <div class="container-perfil">
          <div id="info">
            <div style="display: flex; align-items: center;">
              <div class="cont" style="margin-right: 20px;">
                <img id="foto-perfil" src="<?php
                $email = $_SESSION['email'];
                $sql = "SELECT genero FROM usuário WHERE id_usuario = 1";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                  $row = mysqli_fetch_assoc($result);
                  $genero = $row['genero'];

                  if ($genero == 'masculino') {
                    echo "img/img_avatar.png";
                  } else {
                    echo "img/img_avatar2.png";
                  }
                }
                ?>" alt="Avatar" class="image" style="width:100%">
                <div class="middle">
                  <div class="text" id="criar-btn"><button id="servico-btn"><i class="fa fa-eye"></i></button></div>
                  <div id="modal-servico" class="modal">
                    <div class="modal-content">
                      <span class="close">&times;</span>
                      <!-- aqui vai o conteúdo da janela modal -->
                      <div class="main">
                        <div class="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <script>
                    // Obtém a janela modal e o botão "SERVIÇO"
                    var modal = document.getElementById("modal-servico");
                    var btn = document.getElementById("servico-btn");

                    // Obtém o botão "Fechar" e adiciona um evento de clique
                    var span = document.getElementsByClassName("close")[0];
                    span.onclick = function () {
                      modal.style.display = "none";
                    }

                    // Adiciona um evento de clique para mostrar a janela modal quando o usuário clicar no botão "+"
                    btn.onclick = function () {
                      modal.style.display = "block";
                    }
                  </script>
                </div>
              </div>
              <div>
                <div id="botoes">
                  <button>seguir</button>
                  <button>mensagem</button>
                </div>
                <div id="tipo-user">
                  <h3>
                    <?php
                    // Exibe o tipo
                    $sql = "SELECT tipo FROM usuário WHERE id_usuario = 1";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                      // Exibe as mensagens em uma lista
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo $row["tipo"];
                      }
                    } else {
                      echo "Não há mensagens.";
                    }
                    ?>
                  </h3>
                </div>
                <div id="telefone">
                  <?php
                  // Exibe o tipo
                  $sql = "SELECT telefone FROM usuário WHERE id_usuario = 1";
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0 && !empty($result)) {
                    // Exibe as mensagens em uma lista
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo $row["telefone"];
                    }
                  } else {
                    echo "(11) 90000-0000";
                  }
                  ?>
                </div>
              </div>
            </div>
            <div id="name">
              <h2 id="nomeperfil">
                <?php
                // Exibe o tipo
                $sql = "SELECT nome FROM usuário WHERE id_usuario = 1";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0 && !empty($result)) {
                  // Exibe as mensagens em uma lista
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row["nome"];
                  }
                } else {
                  echo "Nome-User";
                }
                ?>
              </h2>
            </div>
            <div id="links">
              <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
              <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
          <hr>
          <div id="info">
            <div id="bio">
              <p id="sobre">
                <?php
                // Exibe o nome
                $sql = "SELECT bio FROM usuário WHERE id_usuario = 1";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0 && !empty($result)) {
                  // Exibe as mensagens em uma lista
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row["bio"];
                  }
                } else {
                  echo "Sobre-User";
                }
                ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="sec2">
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