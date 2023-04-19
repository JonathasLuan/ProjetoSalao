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
  <title>Feed</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="principal.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <main>
    <header>
      <div id="header1">
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
      <div class="menu">
        <ul>
          <li>
            <a href="home.php">home</a>
          </li>
          <li>
            <a href="serviços.html">serviços</a>
          </li>
          <li>
            <a href="sobre.html">sobre</a>
          </li>
          <li>
            <div class="dropdown">
              <a href="entrar.html" class="mainmenua">perfil</a>
              <div class="dropdown-child">
                <a href="favoritos.html">Favoritos</a>
                <form action="logout.php" method="POST">
                  <button type="submit" name="logout">Logout</button>
                </form>
              </div>
            </div>
          </li>
          <li>
            <a href="contato.html">contato</a>
          </li>
        </ul>
      </div>
    </header>

    <div id="sidebar1">
      <div class="sidebar" id="left">
        <div class="container-content" id="contato">
          <div id="info">
            <div id="foto">
              <img id="foto-perfil" src="img/profile.webp" alt="profile">
            </div>
            <div id="botoes">
              <button>btn 1</button>
              <button>btn 2</button>
            </div>
            <div id="tipo-user">
              <h3>tipo-user</h3>
            </div>
            <div id="nome">
              <h2 id="nomeperfil">Fulano da Silva</h2>
            </div>
            <div id="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="content">
      <div class="sidebar" id="center">
        <nav id="menu-content">
          <button id="botao1" class="menu-button active" data-target="content1">Btn1</button>
          <button id="botao2" class="menu-button active" data-target="content2">Btn2</button>
          <button id="botao3" class="menu-button" data-target="content3">Btn3</button>
          <button id="botao4" class="menu-button" data-target="content4">Btn4</button>
          <button id="botao5" class="menu-button" data-target="content5">Btn5</button>
        </nav>
        <br>
        <nav id="menu-content">
          <button id="botao6" class="menu-button" data-target="content6">Btn6</button>
          <button id="botao7" class="menu-button" data-target="content7">Btn7</button>
          <button id="botao8" class="menu-button" data-target="content8">Btn8</button>
          <div class="pesquisa2">
            <input type="text" placeholder="buscar...">
            <i class="fa fa-search"></i>
          </div>
          <button id="botao9" class="menu-button" data-target="content9">Btn9</button>
          <button id="botao10" class="menu-button" data-target="content10">Btn10</button>
          <div class="btn-dropdown">
            <button class="main-btn-a"><i class="fa fa-ellipsis-v"></i></button>
            <div class="btn-dropdown-child">
              <nav>
                <button id="botao11" class="menu-button" data-target="content11">Btn11</button>
                <button id="botao12" class="menu-button" data-target="content12">Btn12</button>
                <button id="botao13" class="menu-button" data-target="content13">Btn13</button>
              </nav>
            </div>
          </div>
        </nav>
        <div class="container-content" id="content-box">
          <div id="conteudo">
            <div class="content active" id="conteudo1">
              <h2>Mapa:</h2>
              <p>Aqui serão mostradas as mensagens de cada conversa. Clicando em cada uma, é possível visualizar as
                mensagens respectivas de cada bate-papo.</p>
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
            </div>

            <div class="content hidden" id="conteudo5">
              <h2>Conteúdo 5:</h2>
              <p>Aqui ficará a exibição do mapa da regiaão escolhida e os profissionais ou clientes em um raio de
                proximidade delimitado.</p>
            </div>
            <div class="content hidden" id="conteudo6">
              <h2>Conteúdo 6:</h2>
              <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
                mas sim botões que abrem conteúdo no espaço abaixo</p>
            </div>
            <div class="content hidden" id="conteudo7">
              <h2>Conteúdo 7:</h2>
              <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
                mas sim botões que abrem conteúdo no espaço abaixo</p>
            </div>
            <div class="content hidden" id="conteudo8">
              <h2>Conteúdo 8:</h2>
              <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
                mas sim botões que abrem conteúdo no espaço abaixo</p>
            </div>
          </div>
        </div>
      </div>
    </div>

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
                      <form>
                        <div>
                          <div class="divs">
                            <label for="especialidade">Especialidade(s):</label>
                            <div id="especialidade">
                              <div>
                                <input type="checkbox" class="entrada" id="cabeleireiro" name="cabeleireiro">
                                <label for="cabeleireiro">Cabeleireiro</label>
                              </div>
                              <div>
                                <input type="checkbox" class="entrada" id="barbeiro" name="barbeiro">
                                <label for="barbeiro">Barbeiro</label>
                              </div>
                              <div>
                                <input type="checkbox" class="entrada" id="maquiador" name="maquiador">
                                <label for="maquiador">Maquiador</label>
                              </div>
                              <div>
                                <input type="checkbox" class="entrada" id="manicure" name="manicure">
                                <label for="manicure">Manicure</label>
                              </div>
                              <div>
                                <input type="checkbox" class="entrada" id="pedicure" name="pedicure">
                                <label for="maquiador">Pedicure</label>
                              </div>
                            </div>
                            <div>
                              <label for="outro">Outra:</label>
                              <input type="tecxt" id="outro" class="entrada" name="outro"></input>
                            </div>
                            <br><br>
                            <label for="servico">Serviço(s):</label>
                            <div id="servico">
                              <div>
                                <input type="checkbox" class="entrada" id="corte" name="corte">
                                <label for="corte">Corte</label>
                              </div>
                              <div>
                                <input type="checkbox" class="entrada" id="coloracao" name="coloracao">
                                <label for="coloracao">Coloração</label>
                              </div>
                              <div>
                                <input type="checkbox" class="entrada" id="escova" name="escova">
                                <label for="escova">Escova</label>
                              </div>
                              <div>
                                <input type="checkbox" class="entrada" id="hidratacao" name="hidratacao">
                                <label for="hidratacao">Hidratação</label>
                              </div>
                              <div>
                                <input type="checkbox" class="entrada" id="reconstrucao" name="reconstrucao">
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
                              <label for="data">Data:</label>
                              <input type="date" id="data" name="data"><br>
                            </div>
                            <br>
                            <div>
                              <label for="hora">Hora:</label>
                              <input type="time" id="hora" name="hora"><br>
                            </div>
                          </div>
                        </div>
                        <br>
                        <h2 style="margin-bottom: 50px;">Local</h2>
                        <div class="divs">
                          <div id="endereco-div">
                            <div>
                              <label for="estado">Estado:</label>
                              <select id="estado" name="estado" class="entrada-endereco">
                                <option value="" selected disabled required>Selecione</option>
                                <option value="acre">Acre (AC)</option>
                                <option value="alagoas">Alagoas (AL)</option>
                                <option value="amapa">Amapá (AP)</option>
                                <option value="amazonas">Amazonas (AM)</option>
                                <option value="bahia">Bahia (BA)</option>
                                <option value="ceara">Ceará (CE)</option>
                                <option value="distritofederal">Distrito Federal (DF)</option>
                                <option value="espiritosanto">Espírito Santo (ES)</option>
                                <option value="goias">Goiás (GO)</option>
                                <option value="maranhao">Maranhão (MA)</option>
                                <option value="matogrosso">Mato Grosso (MT)</option>
                                <option value="matogrossodosul">Mato Grosso do Sul (MS)</option>
                                <option value="minasgerais">Minas Gerais (MG)</option>
                                <option value="para">Pará (PA)</option>
                                <option value="paraiba">Paraíba (PB)</option>
                                <option value="parana">Paraná (PR)</option>
                                <option value="pernambuco">Pernambuco (PE)</option>
                                <option value="piaui">Piauí (PI)</option>
                                <option value="riodejaneiro">Rio de Janeiro (RJ)</option>
                                <option value="riograndedonorte">Rio Grande do Norte (RN)</option>
                                <option value="riograndedosul">Rio Grande do Sul (RS)</option>
                                <option value="rondonia">Rondônia (RO)</option>
                                <option value="roraima">Roraima (RR)</option>
                                <option value="santacatarina">Santa Catarina (SC)</option>
                                <option value="saopaulo">São Paulo (SP)</option>
                                <option value="sergipe">Sergipe (SE)</option>
                                <option value="tocantins">Tocantins (TO)</option>
                              </select>
                            </div>

                            <div>
                              <label for="cidade">Cidade:</label>
                              <input type="text" id="cidade" class="entrada-endereco" name="cidade" required><br>
                            </div>

                            <div>
                              <label for="bairro">Bairro:</label>
                              <input type="text" id="bairro" class="entrada-endereco" name="bairro"><br>
                            </div>
                          </div>
                          <div style="display: flex; justify-content: space-around;">
                            <div>
                              <label for="rua">Rua:</label>
                              <input type="text" id="rua" class="entrada-endereco" name="rua"><br>
                            </div>
                            <div>
                              <label for="numero">Número:</label>
                              <input type="text" id="numero" class="entrada-endereco" name="numero"><br>
                            </div>
                            <div>
                              <label for="complemento">Complemento:</label>
                              <input type="text" id="complemento" class="entrada-endereco" name="complemento"><br>
                            </div>
                          </div>
                        </div>
                        <div style="text-align: center;">
                          <a href="#"><button type="submit">Criar</button></a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <script>
                // Obtém a janela modal e o botão "LOGIN"
                var modal = document.getElementById("modal-servico");
                var btn = document.getElementById("servico-btn");

                // Obtém o botão "Fechar" e adiciona um evento de clique
                var span = document.getElementsByClassName("close")[0];
                span.onclick = function () {
                  modal.style.display = "none";
                }

                // Adiciona um evento de clique para mostrar a janela modal quando o usuário clicar no botão "LOGIN"
                btn.onclick = function () {
                  modal.style.display = "block";
                }
              </script>
            </div>
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
            <h2>FAQ - Perguntas Frequentes:</h2>
            <p>Aqui ficará a exibição do mapa da regiaão escolhida e os profissionais ou clientes em um raio de
              proximidade delimitado.</p>
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
            <h2>Configurações:</h2>
            <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
              mas sim botões que abrem conteúdo no espaço abaixo</p>
          </div>
        </div>
      </div>
    </div>

    <footer id="footer">
      <p>&copy; 2023 Na Régua</p>
    </footer>
  </main>

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