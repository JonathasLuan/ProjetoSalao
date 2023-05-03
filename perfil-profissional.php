<?php
session_start();

/*echo $_SESSION['id'];
echo $_SESSION['senha'];
echo session_id();*/


if (session_id() != true) {
  header('Location: entrar.php');
  return;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil Profissional</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="perfil-profissional.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .agend-item {
      border: 1px solid gray;
      padding: 10px;
      display: flex;
      margin: 10px 0px;
    }

    .agend-item img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      border: 1px solid gray;
    }

    .agend-item:hover {
      background-color: #f2f2f2;
    }

    .name {
      margin-left: 20px;
    }

    .chat-item {
      border: 1px solid gray;
      padding: 10px;
      display: flex;
      margin: 10px 0px;
    }

    .chat-item img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      border: 1px solid gray;
    }

    .chat-item:hover {
      background-color: #f2f2f2;
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
    // Verifica se o usuário já fez login
    if (session_id() == true) {
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
          <?php
          include('info-prof.php')
            ?>
        </div>
      </div>
    </section>

    <section>
      <div class="sidebar sidebar-right">
        <?php
        include('menu-prof.php')
          ?>
        <div class="container-content">
          <div id="conteudos">
            <div class="content active" id="conteudo1">
              <div>
                <h2>Portifolio:</h2>
                <p>Aqui será uma área de visualizaçãoinicial do perfil do profissional, onde ele poderá exibir o que
                  quiser para chama a atenção de seus clientes, como um Portifolioaberto de vídeos, fotos e conteúdo
                  pessoal relacionado ao seu trabalho.</p>
              </div>
            </div>
            <div class="content hidden" id="conteudo2">
              <h2>Conversas:</h2>
              <p>Todas as conversas iniciadas entre o cliente e o profissional estarão nesta seção, onde ele poderá
                selecionar cada uma e responder às mensagens.</p>
              <?php
              include('chat-box.php')
                ?>
            </div>
            <div class="content hidden" id="conteudo3">
              <div id="agenda">
                <h2>Seus agendamentos:</h2>
                <p>Aqui ficará a exibição dos agendametos ou outros conteúdos que estão em andamento. A nav superior
                  controlará o que aparece, então é só clicar nos botões do menu para exibir o conteúdo dele.</p>
                <div id="agend-list">
                  <div id="todos">
                    <h4>todos</h4>
                    <div class="agend-element">
                      <div class="agend-item" id="agend-item-1">
                        <div class="cliente-avatar">
                          <img src="img/profile.webp" alt="user-avatar">
                        </div>
                        <div class="agend-info">
                          <div class="user-name">
                            <h5 class="name">Fulano</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="pendentes">
                    <h4>pendentes</h4>
                    <div class="agend-element">
                      <div class="agend-item" id="agend-item-1">
                        <div class="cliente-avatar">
                          <img src="img/profile.webp" alt="user-avatar">
                        </div>
                        <div class="agend-info">
                          <div class="user-name">
                            <h5 class="name">Fulano</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div is="concelados">
                    <h4>cancelados</h4>
                    <div class="agend-element">
                      <div class="agend-item" id="agend-item-1">
                        <div class="cliente-avatar">
                          <img src="img/profile.webp" alt="user-avatar">
                        </div>
                        <div class="agend-info">
                          <div class="user-name">
                            <h5 class="name">Fulano</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="content hidden" id="conteudo4">
              <h2>Networking:</h2>
              <p>Aqui ficará a exibição dos agendametos ou outros conteúdos que estão em andamento. A nav superior
                controlará o que aparece, então é só clicar nos botões do menu para exibir o conteúdo dele.</p>
            </div>
            <div class="content hidden" id="conteudo5">
              <h2>Mídias:</h2>
              <p>Aqui ficará a exibição dos agendametos ou outros conteúdos que estão em andamento. A nav superior
                controlará o que aparece, então é só clicar nos botões do menu para exibir o conteúdo dele.</p>
            </div>
            <div class="content hidden" id="conteudo6">
              <h2>Configurações:</h2>
              <div id="options">
                <ul class="accordion">
                  <li>
                    <h3>
                      <button id="accordion-btn" aria-expanded="false" aria-controls="content1">
                        <span class="menu-label">Gerais</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="feather feather-chevron-down">
                          <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                      </button>
                    </h3>
                    <div id="content1" class="content">
                      <h4>Modo de tela:</h4>
                      <span>light</span>
                      <label class="switch">
                        <input type="checkbox" id="dark-mode-switch">
                        <span class="slider round"></span>
                      </label>
                      <span>dark</span>
                    </div>
                  </li>
                  <li>
                    <h3>
                      <button id="accordion-btn" aria-expanded="false" aria-controls="content2">
                        <span class="menu-label">Preferências</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="feather feather-chevron-down">
                          <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                      </button>
                    </h3>
                    <div id="content2" class="content">
                      <p>Aqui serão escolhidas as preferências do usuário, como: visibilidade, notificações,
                        visualização e edição
                        do histórico de conversas e agendamentos feitos.</p>
                    </div>
                  </li>
                  <li>
                    <h3>
                      <button id="accordion-btn" aria-expanded="false" aria-controls="content3">
                        <span class="menu-label">Conta</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="feather feather-chevron-down">
                          <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                      </button>
                    </h3>
                    <div id="content3" class="content">
                      <p>Aqui ficarão configurações e ajustes da conta, como: nome, eimail, senha, e-mail reserva/de
                        recuperação,
                        etc.</p>
                    </div>
                  </li>
                  <li>
                    <h3>
                      <button id="accordion-btn" aria-expanded="false" aria-controls="content4">
                        <span class="menu-label">Informações Pessoais</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="feather feather-chevron-down">
                          <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                      </button>
                    </h3>
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
                            <button id="salvar-email" style="display:none"
                              onclick="salvarCampo('email')">Salvar</button>
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
                            <button id="salvar-estado" style="display:none"
                              onclick="salvarCampo('estado')">Salvar</button>
                          </div>
                          <div>
                            <span>Cidade:</span>
                            <span id="cidade">São Pailo</span>
                            <button id="edit-cidade" onclick="editarCampo('cidade')">Editar</button>
                            <button id="salvar-cidade" style="display:none"
                              onclick="salvarCampo('cidade')">Salvar</button>
                          </div>
                          <div>
                            <span>Bairro:</span>
                            <span id="bairro">Centro</span>
                            <button id="edit-bairro" onclick="editarCampo('bairro')">Editar</button>
                            <button id="salvar-bairro" style="display:none"
                              onclick="salvarCampo('bairro')">Salvar</button>
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
                  </li>
                  <li>
                    <h3>
                      <button id="accordion-btn" aria-expanded="false" aria-controls="content5">
                        <span class="menu-label">Perfil</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="feather feather-chevron-down">
                          <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                      </button>
                    </h3>
                    <div id="content5" class="content">
                      <h4>Informações de exibição</h4>
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
                      <div id="editnome" class="divs">
                        <div>
                          <span>Nickname:</span>
                          <span id="nick">João da Silva</span>
                          <button id="edit-nick" onclick="editarCampo('nick')">Editar</button>
                          <button id="salvar-nick" style="display:none" onclick="salvarCampo('nick')">Salvar</button>
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
                  </li>
                </ul>
              </div>
              <div id="salvar">
                <button type="submit" id="btn-salvar">Salvar alterações</button>
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
  <script src="perfil-profissionalJS.js"></script>
</body>

</html>