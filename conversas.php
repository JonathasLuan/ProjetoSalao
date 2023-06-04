<?php
session_start();

if (session_id() != $_SESSION['id']) {
  header('Location: entrar.php');
  return;
}
?>
<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetosalao";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem sucedida
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$email = $_SESSION['email'];
$sql = "SELECT id_usuario FROM usuário WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $id = $row['id_usuario'];
}

// Insere mensagem no banco de dados
if (isset($_POST['mensagem']) && !empty($_POST['mensagem'])) {
  $mensagem = $_POST['mensagem'];
  //  $id_rem = $_SESSION['email'];
  $sql = "INSERT INTO mensagens (conteudo, remetente) VALUES ('$mensagem', '$id')";
  if (mysqli_query($conn, $sql)) {
    /*echo "Mensagem adicionada com sucesso!";*/
  } else {
    echo "Erro ao adicionar mensagem: " . mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversas</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="conversas.css">
  <link rel="stylesheet" href="dark-mode.css">
  <script src="https://kit.fontawesome.com/233e5ce955.js" crossorigin="anonymous"></script>
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
      if (session_id() == $_SESSION['id']) {
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
        <div class="chat-list">
          <nav id="menu-chat">
            <button id="chatbotao1" class="chat-menu-button active" data-target="chatcontent1" title="conversas"><i
                class="fa fa-comments"></i></button>
            <div class="pesquisa3">
              <input type="text" placeholder="buscar...">
              <i class="fa fa-search"></i>
            </div>
            <div class="btn-dropdown">
              <button class="main-btn-a"><i class="fa fa-ellipsis-v"></i></button>
              <div class="btn-dropdown-child">
                <nav>
                  <button id="chatbotao2" class="chat-menu-button active" data-target="chatcontent2"
                    title="marcadas"><span style="font-family: 'Font Awesome 5 Free';">&#xf08d;</span></button>
                  <button id="chatbotao3" class="chat-menu-button" data-target="chatcontent3" title="arquivadas"><i
                      class="fa fa-folder"></i></button>
                  <button id="chatbotao4" class="chat-menu-button" data-target="chatcontent4" title="bloqueados"><i
                      class="fa fa-lock"></i></button>
                  <button id="chatbotao5" class="chat-menu-button" data-target="chatcontent5">Btn 5</button>
                  <button id="chatbotao6" class="chat-menu-button" data-target="chatcontent2">Btn 6</button>
                  <!-- btn7 -->
                  <button id="chatbotao8" class="chat-menu-button" data-target="chatcontent4" title="configurações"><i
                      class="fa fa-gear" aria-hidden="true"></i></button>
                </nav>
              </div>
            </div>
          </nav>
        </div>
        <div id="chatconteudo">
          <div class="chatcontent active" id="chatconteudo1">
            <h2>Conversas:</h2>
            <?php
            include('chat-box.php');
            ?>
          </div>
          <div class="chatcontent hidden" id="chatconteudo2">
            <h2>Conversas Marcadas</h2>
            <div id="chat-box">
              <div class="chat-element">
                <div class="chat-item" id="chat-item-1">
                  <div class="user-avatar">
                    <img src="img/avatar5.png" alt="user-avatar">
                  </div>
                  <div class="chat-info">
                    <div class="user-name">
                      <h5 class="name">Kevelyn</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="chat-element">
                <div class="chat-item" id="chat-item-2">
                  <div class="user-avatar">
                    <img src="img/avatar2.png" alt="user-avatar">
                  </div>
                  <div class="chat-info">
                    <div class="user-name">
                      <h5 class="name">Josney</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="chat-element">
                <div class="chat-item" id="chat-item-3">
                  <div class="user-avatar">
                    <img src="img/avatar6.png" alt="user-avatar">
                  </div>
                  <div class="chat-info">
                    <div class="user-name">
                      <h5 class="name">Fábia</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="chatcontent hidden" id="chatconteudo3">
            <h2>Conversas Arquivadas</h2>
            <div id="chat-box">
              <div class="chat-element">
                <div class="chat-item" id="chat-item-1">
                  <div class="user-avatar">
                    <img src="img/avatar5.png" alt="user-avatar">
                  </div>
                  <div class="chat-info">
                    <div class="user-name">
                      <label for="">
                        <h5 for="chatbotao7" class="name">Kevelyn</h5>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="chat-element">
                <div class="chat-item" id="chat-item-2">
                  <div class="user-avatar">
                    <img src="img/avatar2.png" alt="user-avatar">
                  </div>
                  <div class="chat-info">
                    <div class="user-name">
                      <h5 class="name">Josney</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="chat-element">
                <div class="chat-item" id="chat-item-3">
                  <div class="user-avatar">
                    <img src="img/avatar6.png" alt="user-avatar">
                  </div>
                  <div class="chat-info">
                    <div class="user-name">
                      <h5 class="name">Fábia</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="chatcontent hidden" id="chatconteudo4">
            <h2>Contatos Bloqueados</h2>
            <div id="chat-box">
              <div class="chat-element">
                <div class="chat-item" id="chat-item-1">
                  <div class="user-avatar">
                    <img src="img/img_avatar.png" alt="user-avatar">
                  </div>
                  <div class="chat-info">
                    <div class="user-name">
                      <h5 class="name">Fulano</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="chat-element">
                <div class="chat-item" id="chat-item-2">
                  <div class="user-avatar">
                    <img src="img/img_avatar2.png" alt="user-avatar">
                  </div>
                  <div class="chat-info">
                    <div class="user-name">
                      <h5 class="name">Ciclano</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="chat-element">
                <div class="chat-item" id="chat-item-3">
                  <div class="user-avatar">
                    <img src="img/img_avatar.png" alt="user-avatar">
                  </div>
                  <div class="chat-info">
                    <div class="user-name">
                      <h5 class="name">Beltrano</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="chatcontent hidden" id="chatconteudo5">
            <h2>Conteúdo 5:</h2>
          </div>
          <div class="chatcontent hidden" id="chatconteudo6">
            <h2>Conteúdo 6:</h2>
          </div>
          <!-- chatconteudo7 -->
          <div class="chatcontent hidden" id="chatconteudo8">
            <h2>Configurações de conversas:</h2>
            <h4>Modo de tela:</h4>
            <span>light</span>
            <label class="switch">
              <input type="checkbox" id="theme-toggle-btn">
              <span class="slider round"></span>
            </label>
            <span>dark</span>
          </div>
        </div>
      </div>
    </div>

    <div id="content">
      <div class="sidebar" id="center">
        <nav id="menu-content">
          <button id="botao1" class="menu-button active" data-target="content1" title="mensagens"><i
              class="fa fa-comment"></i></button>
          <div class="pesquisa2">
            <input type="text" placeholder="buscar...">
            <i class="fa fa-search"></i>
          </div>
          <div class="btn-dropdown">
            <button class="main-btn-a"><i class="fa fa-ellipsis-v"></i></button>
            <div class="btn-dropdown-child">
              <nav id="">
                <button id="botao2" class="menu-button active" data-target="content2"><span
                    style="font-family: 'Font Awesome 5 Free';">&#xf08d;</span> Marcar</button>
                <button id="botao3" class="menu-button" data-target="content3"><i
                    class="fa fa-folder"></i>Arquivar</button>
                <button id="botao4" class="menu-button" data-target="content4"><i class="fa fa-file"></i>
                  Mídias</button>
                <button id="botao5" class="menu-button" data-target="content5"><i
                    class="fa fa-bell-slash"></i>Silenciar</button>
                <button id="botao6" class="menu-button" data-target="content6"><i
                    class="fas fa-broom"></i>Limpar</button>
                <button id="botao7" class="menu-button" data-target="content7" title="Configurações"><i
                    class="fa fa-gear" aria-hidden="true"></i>Config.</button>
                <button id="botao8" class="menu-button" data-target="content8"><i class="fa fa-trash"
                    aria-hidden="true"></i>Apagar</button>
              </nav>
            </div>
          </div>
        </nav>
        <div class="container-content" id="content-box">
          <div id="conteudo">
            <div class="content active" id="conteudo1">
              <div id="chat-area">
                <div id="chat-displayer">
                  <!--<button >Btn 7</button>-->
                  <div class="chatcontent hidden" id="chatconteudo7">
                    <?php
                    // Exibe as mensagens na tela
                    $sql = "SELECT * FROM mensagens WHERE remetente != $id";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                      $mensagens = array();
                      $date_time = array();
                      // Exibe as mensagens em uma lista
                      while ($row = mysqli_fetch_assoc($result)) {
                        $mensagens[] = $row['conteudo'];
                        $date_time = $row['date_time'];
                        $remetente = $row['remetente'];
                      }
                      foreach ($mensagens as $mensagem) {
                        include('send-item2.php');
                      }
                    } else {
                      echo "Não há mensagens.";
                    }
                    ?>

                    <?php
                    // Exibe as mensagens na tela
                    $sql = "SELECT * FROM mensagens WHERE remetente = $id";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                      $mensagens = array();
                      // Exibe as mensagens em uma lista
                      while ($row = mysqli_fetch_assoc($result)) {
                        $mensagens[] = $row['conteudo'];
                      }
                      foreach ($mensagens as $mensagem) {
                        include('send-item.php');
                      }
                    } else {
                      echo "Não há mensagens.";
                    }

                    // Fecha a conexão com o banco de dados
                    /*mysqli_close($conn);*/

                    ?>
                  </div>
                </div>
                <div id="send-area">
                  <div id="text">
                    <form action="" method="POST">
                      <input type="text" name="mensagem" id="send-text">
                  </div>
                  <div id="enviar">
                    <button type="submit">Enviar</button>
                  </div>
                  </form>
                </div>
              </div>
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
              <h2>Documentos compartilhados:</h2>
              <p>Nesta área serão exibidos todos os arquivos de mídia enviados pelos usuários no bate-papo. Eles poderão
                ser visualisados, compartilhados para outros lugares, baixados ou apagados.</p>
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
              <h2>Configurações:</h2>
              <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
                mas sim botões que abrem conteúdo no espaço abaixo</p>
            </div>
            <div class="content hidden" id="conteudo8">
              <h2>Apagar conversa:</h2>
              <p>Aqui será um botão de apagar, não para exibir conteúdo (isso será mudado), mas para mostrar opções de
                confirmação da ação: "Deseja mesmo apagar esta conversa? [sim] [não].</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="sidebar2">
      <div class="sidebar" id="right">
        <div class="container-content" id="contato">
          <div id="info">
            <div class="cont">
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
                <div class="text"><button><i class="fa fa-eye"></i></button></div>
              </div>
            </div>
            <div id="tipo-user">
              <h3>
                <?php
                include('conexao.php');
                // Exibe o tipo
                $sql = "SELECT tipo FROM usuário WHERE id_usuario = 1";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                  // Exibe as mensagens em uma lista
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row["tipo"];
                  }
                } else {
                  echo "Tipo-User";
                }
                ?>
              </h3>
            </div>
            <div id="nome">
              <h2 id="nomeperfil">
                <?php
                // Exibe o tipo
                $sql = "SELECT nome FROM usuário WHERE id_usuario = 1";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                  // Exibe as mensagens em uma lista
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row["nome"];
                  }
                } else {
                  echo "Nome-User.";
                }
                ?>
              </h2>
            </div>
            <div id="botoes">
              <button><i class="fa fa-lock"></i>&nbsp;&nbsp;Bloquear</button>
              <button><i class="fa fa-user"></i>&nbsp;&nbsp;Ver Perfil</button>
            </div>
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