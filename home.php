<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SalonSet</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./homeCSS.css">
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
    // usuário não fez login, exibe o menu padrão
    include('menu-padrao.php');
    ?>
  </header>
  <div class="conteudo">
    <section id="section-one">
      <div id="banner">
        <div>
          <h1>Serviços de Beleza</h1>
        </div>
        <div class="slider">
          <div class="slider-wrapper">
            <div class="slider-item">
              <img src="img/cabelo.jpg" alt="Imagem 1">
            </div>
            <div class="slider-item">
              <img src="img/barbearia.png" alt="Imagem 2">
            </div>
            <div class="slider-item">
              <img src="img/maquiagem.jpg" alt="Imagem 3">
            </div>
          </div>
          <div class="slider-controls">
            <button class="prev-slide"><i class="fa fa-chevron-left"></i></button>
            <button class="next-slide"><i class="fa fa-chevron-right"></i></button>
          </div>
        </div>
      </div>
      <div class="campologin">
        <h2>LOGIN</h2>
        <div class="formulario-container">
          <h3>Entre com sua conta!</h3>
          <form action="" method="POST">
            <div>
              <label for="email">E-mail:</label>
              <input type="email" id="email" name="email" placeholder="@" required><br>
            </div>

            <div>
              <label for="senha">Senha:</label>
              <input type="password" id="senha" name="senha" required>
            </div>
            <?php
            include_once("conexao.php");

            if (isset($_POST['email']) || isset($_POST['senha'])) {
              if (strlen($_POST['email']) == 0) {
                echo "Preencha seu e-mail";
              } else if ((strlen($_POST['senha']) == 0)) {
                echo "Preencha sua senha";
              } else {
                $email = $mysqli->real_escape_string($_POST['email']);
                $senha = $mysqli->real_escape_string($_POST['senha']);

                $sql_code = "SELECT * FROM usuário WHERE email = '$email' AND senha = '$senha'";
                $mysqli_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

                $quantidade = $mysqli_query->num_rows;

                if ($quantidade == 1) {

                  $usuario = $mysqli_query->fetch_assoc();

                  if (session_id() == '') {
                    session_start();
                  }

                  $_SESSION['id'] = session_id();
                  $_SESSION['senha'] = $usuario['senha'];

                  header("Location: perfil.php");

                } else {
                  echo "<p style='color:red;'>" . "Falha ao logar! E-mail ou Senha incorretos." . "</p>";
                }
              }
            }
            ?>
            <div>
              <button type="submit">Entrar</button>
            </div>
          </form>
        </div>
        <div id="cadastro" style="font-size: 16px;">
          <h3>Ainda não tem uma conta? <a href='cadastro.php'>Cadastre-se</a></h3>
        </div>
      </div>
    </section>
    <section id="section-two">
      <div id="cabeca">
        <article id="bemvindo">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-chevron-down">
            <polyline points="6 9 12 15 18 9"></polyline>
          </svg>
          <br><br>
          <div>
            <p> Bem-vindo à nossa plataforma de serviços de beleza! Aqui você pode encontrar profissionais de várias
              áreas para
              te ajudar a ficar ainda mais bonito ou bonita. De cabeleireiros a barbeiros, maquiadores e manicures,
              temos uma
              ampla gama de serviços para escolher. Navegue pelo nosso catálogo abaixo e encontre o serviço perfeito
              para
              você.</p>
          </div>
        </article>
      </div>
      <div id="cabeca">
        <article id="explore-article">
          <div>
            <h2>Explore</h2>
            <p>Veja tudo o que pode fazer em sua página de serviços de beleza.</p>
          </div>
        </article>
      </div>
      <div class="article-list" id="apresentacao">
        <div id="div-article">
          <article>
            <div>
              <h3>Busque o que precisa</h3>
              <p>Aqui você pode buscar e encontrar os mais variados serviços para atender às suas necessidades
                estéticas, com
                profissionais qualificados de especialidades variadas, a qualquer momento e por um preço negociável.</p>
            </div>
          </article>
          <article>
            <div>
              <h3>Ofereça seus serviços</h3>
              <p>Use suas habilidades e conhecimentos para prestar serviços dos mais variados tipos para o publico, crie
                seu
                portifólio e deixe que seus clientes possam ver seu potencial. Você pode conseguir cada vez mais
                clientes
                gerar renda online com seu salão.</p>
            </div>
          </article>
        </div>
      </div>
      <div class="article-list" id="apresentacao">
        <div id="div-article">
          <article>
            <div>
              <img src="img/svg/client-svgrepo-com.svg" alt="">
              <h3>Cadastre-se como CLIENTE</h3>
              <p>.</p>
            </div>
          </article>
          <article>
            <div>
              <img src="img/svg/hairdresser-svgrepo-com.svg" alt="">
              <h3>Cadastre-se como PROFISSIONAL</h3>
              <p>.</p>
            </div>
          </article>
        </div>
      </div>
    </section>
    <section id="section-three">
      <div class="article-list" id="catalogo">
        <article>
          <div>
            <img src="img/svg/hairdresser-washing-the-hair-of-a-client-with-bubbles-shampoo-svgrepo-com.svg" alt="">
            <h2>Serviços de Cabeleireiro</h2>
            <p>
              Oferecemos cortes de cabelo para homens e mulheres, coloração, tratamentos capilares, penteados e muito
              mais.
              Nossos cabeleireiros experientes irão ajudá-lo a encontrar o visual perfeito para o seu estilo de vida.
            </p>
          </div>
        </article>
        <article>
          <div>
            <img src="img/svg/makeup-woman-svgrepo-com.svg" alt="">
            <h2>Serviços de Maquiagem</h2>
            <p>
              Nossa equipe de maquiadores profissionais irá te ajudar a obter a aparência perfeita para qualquer
              ocasião. De
              maquiagem natural a maquiagem para casamentos e eventos especiais, nossos maquiadores irão trabalhar com
              você
              para obter o visual que você deseja.</p>
          </div>
        </article>
        <article>
          <div>
            <img src="img/svg/razors-svgrepo-com.svg" alt="">
            <h2>Serviços de Barbeiro</h2>
            <p>
              Nossos barbeiros são especialistas em cortes de cabelo masculinos e barba. Oferecemos cortes de cabelo
              clássicos
              e modernos, barbas bem cuidadas e muito mais.</p>
          </div>
        </article>
        <article>
          <div>
            <img src="img/svg/nail-polish-svgrepo-com.svg" alt="">
            <h2>Serviços de Manicure e Pedicure</h2>
            <p>
              Nossos profissionais de manicure e pedicure são especialistas em fazer suas mãos e pés ficarem lindos.
              Oferecemos serviços de manicure e pedicure, aplicação de unhas postiças, esmaltação e muito mais.
            </p>
          </div>
        </article>
        <div class="separator"></div>
      </div>
      <div id="consulta-article">
        <article>
          <div>
            <img src="img/icons8-calendar-96.png" alt="">
            <h2>Marque uma Consulta</h2>
            <p>
              Estamos sempre prontos para atendê-lo! Marque uma consulta hoje mesmo e deixe nossa equipe de
              profissionais de
              beleza cuidar de você.
            </p>
          </div>
        </article>
      </div>
      <br><br>
      <br><br>
    </section>
    <img src="img/icons8-slide-up-64.png" id="scrollBtn" onclick="topFunction()" alt="Voltar ao topo">
  </div>
  <script src="homeJS.js"></script>
  <script>
    // Mostra o botão de rolagem quando o usuário rola a página em 20px
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scrollBtn").style.display = "block";
      } else {
        document.getElementById("scrollBtn").style.display = "none";
      }
    }

    // Quando o usuário clica no botão, volta para o topo da página
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

  </script>

  <?php
  include('footer.php');
  ?>
</body>

</html>