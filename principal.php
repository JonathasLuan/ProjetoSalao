<?php
session_start();
include('conexao.php');

if (session_id() != $_SESSION['id']) {
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
  <title>Página Principal</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="principal.css">
  <link rel="stylesheet" href="dark-mode.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <main>
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

    <div id="sidebar1">
      <div class="sidebar" id="left">
        <div class="container-content" id="contato">
          <?php include('info-main.php'); ?>
          <hr>
          <br>
          <nav id="navbar">
            <ul>
              <li><a href="conversas.php">Conversas</a></li>
              <li><a href="perfil.php">Perfil</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>

    <?php
    include('serviços-list.php');
    ?>

    <div id="sidebar2">
      <div class="sidebar" id="right">
        <div class="chat-list">
          <nav id="menu-chat">
            <div class="btn-dropdown">
              <button class="main-btn-a"><i class="fa fa-ellipsis-v" style="font-size: 20px;"></i></button>
              <div class="btn-dropdown-child">
                <nav id="">
                  <button id="chatbotao6" class="chat-menu-button" data-target="chatcontent2">Btn 6</button>
                  <button id="chatbotao7" class="chat-menu-button" data-target="chatcontent3">Btn 7</button>
                </nav>
              </div>
            </div>
            <button id="chatbotao1" class="chat-menu-button active" data-target="chatcontent1"><i
                class="fa fa-home"></i></button>
            <button id="chatbotao2" class="chat-menu-button active" data-target="chatcontent2"><i
                class="fa fa-bell"></i></button>
            <button id="chatbotao3" class="chat-menu-button" data-target="chatcontent3"><i
                class="fa fa-comments"></i></button>
            <button id="chatbotao4" class="chat-menu-button" data-target="chatcontent4"><i
                class="fa fa-calendar"></i></button>
            <button id="chatbotao5" class="chat-menu-button" data-target="chatcontent5"><i
                class="fa fa-question"></i></button>
            <button id="chatbotao8" class="chat-menu-button" data-target="chatcontent4"><i class="fa fa-gear"
                aria-hidden="true"></i></button>
          </nav>
        </div>
        <div id="chatconteudo">
          <div class="chatcontent active" id="chatconteudo1">
            <h2>Criar pedido:</h2>
            <p>Nesta área você pode criar um pedido de serviço, especificando as informações relevantes para encontrar
              profissionais adequados às suas necessidades.</p>
            <div id="chat-box">
              <div id="criar-btn"><button id="servico-btn">+</button></div>
              <div id="modal-servico" class="modal">
                <div class="modal-content">
                  <span class="close">&times;</span>
                  <!-- aqui vai o conteúdo da janela modal -->
                  <div class="main">
                    <div class="formulario-container">
                      <h2>Criar pedido de serviço</h2>
                      <form action="processar_servico.php" method="POST">
                        <div>
                          <div class="divs">
                            <label for="especialidade">Especialidade(s):</label>
                            <div id="especialidade">
                              <div>
                                <input type="checkbox" name="especialidade" class="entrada" id="cabeleireiro"
                                  value="cabeleireiro">
                                <label for="cabeleireiro">Cabeleireiro</label>
                              </div>
                              <div>
                                <input type="checkbox" name="especialidade" class="entrada" id="barbeiro"
                                  value="barbeiro">
                                <label for="barbeiro">Barbeiro</label>
                              </div>
                              <div>
                                <input type="checkbox" name="especialidade" class="entrada" id="maquiador"
                                  value="maquiador">
                                <label for="maquiador">Maquiador</label>
                              </div>
                              <div>
                                <input type="checkbox" name="especialidade" class="entrada" id="manicure"
                                  value="manicure">
                                <label for="manicure">Manicure</label>
                              </div>
                              <div>
                                <input type="checkbox" name="especialidade" class="entrada" id="pedicure"
                                  value="pedicure">
                                <label for="maquiador">Pedicure</label>
                              </div>
                            </div>
                            <div>
                              <label for="outro">Outra:</label>
                              <input type="tecxt" id="outra" class="entrada" name="outra"></input>
                            </div>
                            <br><br>
                            <label for="servico">Serviço(s):</label>
                            <div id="servico">
                              <div>
                                <input type="checkbox" name="servico" class="entrada" id="corte" value="corte">
                                <label for="corte">Corte</label>
                              </div>
                              <div>
                                <input type="checkbox" name="servico" class="entrada" id="coloracao" value="coloracao">
                                <label for="coloracao">Coloração</label>
                              </div>
                              <div>
                                <input type="checkbox" name="servico" class="entrada" id="escova" value="escova">
                                <label for="escova">Escova</label>
                              </div>
                              <div>
                                <input type="checkbox" name="servico" class="entrada" id="hidratacao"
                                  value="hidratacao">
                                <label for="hidratacao">Hidratação</label>
                              </div>
                              <div>
                                <input type="checkbox" name="servico" class="entrada" id="reconstrucao"
                                  value="reconstrucao">
                                <label for="reconstrucao">Reconstrução</label>
                              </div>
                            </div>
                            <div>
                              <label for="outro">Outro:</label>
                              <input type="tecxt" id="outro" class="entrada" name="outro"></input>
                            </div>
                          </div>
                          <br>
                          <div class="divs">
                            <div>
                              <label for="descricao">Descrição do serviço:</label>
                              <textarea id="descricao" name="descricao" rows="5" cols="50"></textarea>
                            </div>
                            <div>
                              <div>
                                <label for="data">Data:</label>
                                <input type="date" id="data" name="data_pedido"><br>
                              </div>
                              <br>
                              <div>
                                <label for="hora">Hora:</label>
                                <input type="time" id="hora" name="hora"><br>
                              </div>
                            </div>
                          </div>
                        </div>
                        <br>
                        <h2 style="margin-bottom: 50px;">Local</h2>
                        <div class="divs">
                          <div id="endereco-div">
                            <div>
                              <label for="cidade">Cidade:</label>
                              <input type="text" id="cidade" class="entrada-endereco" name="cidade" required><br>
                            </div>

                            <div>
                              <label for="bairro">Bairro:</label>
                              <input type="text" id="bairro" class="entrada-endereco" name="bairro"><br>
                            </div>

                            <div>
                              <label for="rua">Rua:</label>
                              <input type="text" id="rua" class="entrada-endereco" name="rua"><br>
                            </div>
                          </div>
                        </div>
                        <div style="text-align: center;">
                          <button id="btn-criar" type="submit">Criar</button>
                        </div>
                      </form>
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
            <br>
            <hr>
          </div>
          <div class="chatcontent hidden" id="chatconteudo2">
            <h2>Notificações:</h2>
            <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
              mas sim botões que abrem conteúdo no espaço abaixo</p>
          </div>
          <div class="chatcontent hidden" id="chatconteudo3">
            <h2>Comentários:</h2>
            <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
              mas sim botões que abrem conteúdo no espaço abaixo</p>
          </div>
          <div class="chatcontent hidden" id="chatconteudo4">
            <h2>Agendamentos:</h2>
            <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
              mas sim botões que abrem conteúdo no espaço abaixo</p>
          </div>

          <div class="chatcontent hidden" id="chatconteudo5">
            <div style="color: white;">
              <h2>FAQ - Perguntas Frequentes:</h2>
              <p>Aqui ficará a exibição do accordion de perguntas e suas respostas, como um "manual" do site.</p>
              <style>
                .collapsible {
                  background-color: #9E9E9E;
                  color: white;
                  cursor: pointer;
                  padding: 18px;
                  width: 100%;
                  border: none;
                  text-align: left;
                  outline: none;
                  font-size: 15px;
                }

                .collapsible:after {
                  content: '\002B';
                  color: white;
                  font-weight: bold;
                  float: right;
                  margin-left: 5px;
                }

                .conten {
                  padding: 0 18px;
                  max-height: 0;
                  overflow: hidden;
                  transition: max-height 0.2s ease-out;
                  background-color: #9E9E9E;
                }
              </style>
              <button class="collapsible">Open Collapsible</button>
              <div class="conten">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip
                  ex ea commodo consequat.</p>
              </div>
              <p>Collapsible Set:</p>
              <button class="collapsible">Open Section 1</button>
              <div class="conten">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip
                  ex ea commodo consequat.</p>
              </div>
              <button class="collapsible">Open Section 2</button>
              <div class="conten">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip
                  ex ea commodo consequat.</p>
              </div>
              <button class="collapsible">Open Section 3</button>
              <div class="conten">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip
                  ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
          <div class="chatcontent hidden" id="chatconteudo6">
            <h2>Conteúdo 6:</h2>
            <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
              mas sim botões que abrem conteúdo no espaço abaixo</p>
          </div>
          <div class="chatcontent hidden" id="chatconteudo7">
            <h2>Conteúdo 7:</h2>
            <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
              mas sim botões que abrem conteúdo no espaço abaixo</p>
          </div>
          <div class="chatcontent hidden" id="chatconteudo8">
            <h2>Configurações de conversas:</h2>
            <p>Aqui o usuáriopoderá configuras as conversas e definir preferências.</p>
            <h4>Modo de tela:</h4>
            <span>light</span>
            <label class="switch">
              <input type="checkbox" id="theme-toggle-btn">
              <span class="slider round"></span>
            </label>
            <span>dark</span>
            <?php
            // Verifica se a variável de sessão está definida
            if (isset($_SESSION['darkMode'])) {
              // Exibe o valor da variável de sessão
              echo $_SESSION['darkMode'];
            } else {
              // Valor padrão caso a variável de sessão não esteja definida
              echo "darkMode não definido";
            }
            ?>
          </div>
        </div>
      </div>
    </div>

    <?php
    include('footer.php');
    include('set_theme_session.php');
    ?>
  </main>
  <script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight) {
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        }
      });
    }
  </script>
  <script>

    // Código do botão switch de cor de fundo
    const switchBtn = document.querySelector('#dark-mode-switch');
    switchBtn.addEventListener('change', () => {
      document.body.classList.toggle('dark-mode');
    });

  </script>
  <script>
    // Obtém os botões do menu e o conteúdo correspondente
    const botao1 = document.getElementById("botao1");
    const botao2 = document.getElementById("botao2");
    const botao3 = document.getElementById("botao3");
    const botao4 = document.getElementById("botao4");
    const botao5 = document.getElementById("botao5");
    const botao6 = document.getElementById("botao6");
    const botao7 = document.getElementById("botao7");
    const botao8 = document.getElementById("botao8");
    const conteudo1 = document.getElementById("conteudo1");
    const conteudo2 = document.getElementById("conteudo2");
    const conteudo3 = document.getElementById("conteudo3");
    const conteudo4 = document.getElementById("conteudo4");
    const conteudo5 = document.getElementById("conteudo5");
    const conteudo6 = document.getElementById("conteudo6");
    const conteudo7 = document.getElementById("conteudo7");
    const conteudo8 = document.getElementById("conteudo8");

    // Adiciona a classe "active" ao primeiro botão do menu e ao primeiro conteúdo
    botao1.classList.add("active");
    conteudo1.classList.add("active");

    // Adiciona um ouvinte de evento de clique em cada botão
    botao1.addEventListener("click", function () {
      // Altera a exibição do conteúdo correspondente
      conteudo1.style.display = "block";
      conteudo2.style.display = "none";
      conteudo3.style.display = "none";
      conteudo4.style.display = "none";
      conteudo5.style.display = "none";
      conteudo6.style.display = "none";
      conteudo7.style.display = "none";
      conteudo8.style.display = "none";
    });

    botao2.addEventListener("click", function () {
      // Altera a exibição do conteúdo correspondente
      conteudo1.style.display = "none";
      conteudo2.style.display = "block";
      conteudo3.style.display = "none";
      conteudo4.style.display = "none";
      conteudo5.style.display = "none";
      conteudo6.style.display = "none";
      conteudo7.style.display = "none";
      conteudo8.style.display = "none";
    });

    botao3.addEventListener("click", function () {
      // Altera a exibição do conteúdo correspondente
      conteudo1.style.display = "none";
      conteudo2.style.display = "none";
      conteudo3.style.display = "block";
      conteudo4.style.display = "none";
      conteudo5.style.display = "none";
      conteudo6.style.display = "none";
      conteudo7.style.display = "none";
      conteudo8.style.display = "none";
    });

    botao4.addEventListener("click", function () {
      // Altera a exibição do conteúdo correspondente
      conteudo1.style.display = "none";
      conteudo2.style.display = "none";
      conteudo3.style.display = "none";
      conteudo4.style.display = "block";
      conteudo5.style.display = "none";
      conteudo6.style.display = "none";
      conteudo7.style.display = "none";
      conteudo8.style.display = "none";
    });

    botao5.addEventListener("click", function () {
      // Altera a exibição do conteúdo correspondente
      conteudo1.style.display = "none";
      conteudo2.style.display = "none";
      conteudo3.style.display = "none";
      conteudo4.style.display = "none";
      conteudo5.style.display = "block";
      conteudo6.style.display = "none";
      conteudo7.style.display = "none";
      conteudo8.style.display = "none";
    });

    botao6.addEventListener("click", function () {
      // Altera a exibição do conteúdo correspondente
      conteudo1.style.display = "none";
      conteudo2.style.display = "none";
      conteudo3.style.display = "none";
      conteudo4.style.display = "none";
      conteudo5.style.display = "none";
      conteudo6.style.display = "block";
      conteudo7.style.display = "none";
      conteudo8.style.display = "none";
    });

    botao7.addEventListener("click", function () {
      // Altera a exibição do conteúdo correspondente
      conteudo1.style.display = "none";
      conteudo2.style.display = "none";
      conteudo3.style.display = "none";
      conteudo4.style.display = "none";
      conteudo5.style.display = "none";
      conteudo6.style.display = "none";
      conteudo7.style.display = "block";
      conteudo8.style.display = "none";


    });

    botao8.addEventListener("click", function () {
      // Altera a exibição do conteúdo correspondente
      conteudo1.style.display = "none";
      conteudo2.style.display = "none";
      conteudo3.style.display = "none";
      conteudo4.style.display = "none";
      conteudo5.style.display = "none";
      conteudo6.style.display = "none";
      conteudo7.style.display = "none";
      conteudo8.style.display = "block";


    });
    // Obtém todos os botões do menu
    var buttons = document.querySelectorAll('.menu-button');

    // Adiciona um evento de clique para cada botão
    for (var i = 0; i < buttons.length; i++) {
      buttons[i].addEventListener('click', function () {
        // Remove a classe "active" de todos os botões e conteúdos
        for (var j = 0; j < buttons.length; j++) {
          buttons[j].classList.remove('active');
          document.getElementById(buttons[j].getAttribute('data-target')).classList.remove('active');
        }

        // Adiciona a classe "active" no botão clicado e no conteúdo correspondente
        this.classList.add('active');
        document.getElementById(this.getAttribute('data-target')).classList.add('active');
      });
    }

    // Exibe o primeiro conteúdo por padrão
    document.querySelector('.content.active').style.display = "block";

  </script>


  <!-- JavaScript para Menu de Conversas -->

  <script>
    // Obtém os botões do menu e o conteúdo correspondente
    const chatbotao1 = document.getElementById("chatbotao1");
    const chatbotao2 = document.getElementById("chatbotao2");
    const chatbotao3 = document.getElementById("chatbotao3");
    const chatbotao4 = document.getElementById("chatbotao4");
    const chatbotao5 = document.getElementById("chatbotao5");
    const chatbotao6 = document.getElementById("chatbotao6");
    const chatbotao7 = document.getElementById("chatbotao7");
    const chatbotao8 = document.getElementById("chatbotao8");
    const chatconteudo1 = document.getElementById("chatconteudo1");
    const chatconteudo2 = document.getElementById("chatconteudo2");
    const chatconteudo3 = document.getElementById("chatconteudo3");
    const chatconteudo4 = document.getElementById("chatconteudo4");
    const chatconteudo5 = document.getElementById("chatconteudo5");
    const chatconteudo6 = document.getElementById("chatconteudo6");
    const chatconteudo7 = document.getElementById("chatconteudo7");
    const chatconteudo8 = document.getElementById("chatconteudo8");

    // Adiciona a classe "active" ao primeiro botão do menu e ao primeiro conteúdo
    chatbotao1.classList.add("active");
    chatconteudo1.classList.add("active");

    // Adiciona um ouvinte de evento de clique em cada botão
    chatbotao1.addEventListener("click", function () {
      // Altera a exibição do conteúdo correspondente
      chatconteudo1.style.display = "block";
      chatconteudo2.style.display = "none";
      chatconteudo3.style.display = "none";
      chatconteudo4.style.display = "none";
      chatconteudo5.style.display = "none";
      chatconteudo6.style.display = "none";
      chatconteudo7.style.display = "none";
      chatconteudo8.style.display = "none";
    });

    chatbotao2.addEventListener("click", function () {
      // Altera a exibição do conteúdo correspondente
      chatconteudo1.style.display = "none";
      chatconteudo2.style.display = "block";
      chatconteudo3.style.display = "none";
      chatconteudo4.style.display = "none";
      chatconteudo5.style.display = "none";
      chatconteudo6.style.display = "none";
      chatconteudo7.style.display = "none";
      chatconteudo8.style.display = "none";
    });

    chatbotao3.addEventListener("click", function () {
      // Altera a exibição do conteúdo correspondente
      chatconteudo1.style.display = "none";
      chatconteudo2.style.display = "none";
      chatconteudo3.style.display = "block";
      chatconteudo4.style.display = "none";
      chatconteudo5.style.display = "none";
      chatconteudo6.style.display = "none";
      chatconteudo7.style.display = "none";
      chatconteudo8.style.display = "none";
    });

    chatbotao4.addEventListener("click", function () {
      // Altera a exibição do conteúdo correspondente
      chatconteudo1.style.display = "none";
      chatconteudo2.style.display = "none";
      chatconteudo3.style.display = "none";
      chatconteudo4.style.display = "block";
      chatconteudo5.style.display = "none";
      chatconteudo6.style.display = "none";
      chatconteudo7.style.display = "none";
      chatconteudo8.style.display = "none";
    });

    chatbotao5.addEventListener("click", function () {
      // Altera a exibição do conteúdo correspondente
      chatconteudo1.style.display = "none";
      chatconteudo2.style.display = "none";
      chatconteudo3.style.display = "none";
      chatconteudo4.style.display = "none";
      chatconteudo5.style.display = "block";
      chatconteudo6.style.display = "none";
      chatconteudo7.style.display = "none";
      chatconteudo8.style.display = "none";
    });

    chatbotao6.addEventListener("click", function () {
      // Altera a exibição do conteúdo correspondente
      chatconteudo1.style.display = "none";
      chatconteudo2.style.display = "none";
      chatconteudo3.style.display = "none";
      chatconteudo4.style.display = "none";
      chatconteudo5.style.display = "none";
      chatconteudo6.style.display = "block";
      chatconteudo7.style.display = "none";
      chatconteudo8.style.display = "none";
    });

    chatbotao7.addEventListener("click", function () {
      // Altera a exibição do conteúdo correspondente
      chatconteudo1.style.display = "none";
      chatconteudo2.style.display = "none";
      chatconteudo3.style.display = "none";
      chatconteudo4.style.display = "none";
      chatconteudo5.style.display = "none";
      chatconteudo6.style.display = "none";
      chatconteudo7.style.display = "block";
      chatconteudo8.style.display = "none";


    });

    chatbotao8.addEventListener("click", function () {
      // Altera a exibição do conteúdo correspondente
      chatconteudo1.style.display = "none";
      chatconteudo2.style.display = "none";
      chatconteudo3.style.display = "none";
      chatconteudo4.style.display = "none";
      chatconteudo5.style.display = "none";
      chatconteudo6.style.display = "none";
      chatconteudo7.style.display = "none";
      chatconteudo8.style.display = "block";


    });
    // Obtém todos os botões do menu
    var buttons = document.querySelectorAll('.chat-menu-button');

    // Adiciona um evento de clique para cada botão
    for (var i = 0; i < buttons.length; i++) {
      buttons[i].addEventListener('click', function () {
        // Remove a classe "active" de todos os botões e conteúdos
        for (var j = 0; j < buttons.length; j++) {
          buttons[j].classList.remove('active');
          document.getElementById(buttons[j].getAttribute('data-target')).classList.remove('active');
        }

        // Adiciona a classe "active" no botão clicado e no conteúdo correspondente
        this.classList.add('active');
        document.getElementById(this.getAttribute('data-target')).classList.add('active');
      });
    }

    // Exibe o primeiro conteúdo por padrão
    document.querySelector('.chat-content.active').style.display = "block";

  </script>
</body>

</html>