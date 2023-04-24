<?php
/*session_start();
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
  <title>Busca de Serviços</title>
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

    <div id="content">
      <div class="sidebar" id="center">
        <br>
        <nav id="menu-content">
          <button id="botao1" class="menu-button active" data-target="content1">Btn1</button>
          <button id="botao2" class="menu-button" data-target="content2">Btn2</button>
          <div class="pesquisa2">
            <input type="text" placeholder="buscar...">
            <i class="fa fa-search"></i>
          </div>
          <button id="botao3" class="menu-button" data-target="content3">Btn3</button>
          <div class="btn-dropdown">
            <button class="main-btn-a">Filtrar busca</button>
            <div class="btn-dropdown-child">
              <nav>
                <button id="botao4" class="menu-button" data-target="content4">Local</button>
                <button id="botao5" class="menu-button" data-target="content5">Preço</button>
                <button id="botao6" class="menu-button" data-target="content6">Experiência</button>
                <button id="botao7" class="menu-button" data-target="content7">Btn7</button>
                <button id="botao8" class="menu-button" data-target="content8">Btn8</button>
              </nav>
            </div>
          </div>
        </nav>
        <div class="container-content" id="content-box">
          <div id="conteudo">
            <div class="content active" id="conteudo1">
              <h2>Lista de Serviços:</h2>
              <p>Aqui serão mostrados os serviços para cada especialidade.</p>
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