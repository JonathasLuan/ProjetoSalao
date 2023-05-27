<?php
session_start();

if (isset($_SESSION['id']) && session_id() == $_SESSION['id']) {
  header('Location: principal.php');
  return;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="cadastroCSS.css">
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
    // usuário não fez login, exibe o menu padrão
    include('menu-padrao.php');
    ?>
  </header>
  <div class="conteudo">
    <div class="container-central">
      <h1>Como gostaria de se cadastrar?</h1>
      <div class="btn-container">
        <div id="cliente-btn">
          <button id="botao-formulario-1">CLIENTE</button>
        </div>
        <div id="prof-btn">
          <button id="botao-formulario-2">PROFISSIONAL</button>
        </div>
      </div>
      <div class="formulario-container">
        <form id="formulario-1" method="POST" action="proc_cad_cliente.php" style="display: none;">
          <input type="hidden" name="tipo" value="cliente">
          <div id="nomesobrenome">
            <div>
              <input type="text" id="nome" name="nome" placeholder="Nome" required><br>
            </div>
            <div>
              <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome" required><br>
            </div>
          </div>

          <div>
            <input type="email" id="email" name="email" placeholder="@ E-mail" required><br>
          </div>

          <div>
            <input type="password" id="senha" name="senha" placeholder="Senha" required>
          </div>
          <br>
          <div>
            <input type="tel" id="telefone" name="telefone" placeholder="Telefone" pattern="[0-9]{10,11}"><br>
            <small>Digite somente números (10 ou 11 dígitos).</small>
          </div>
          <br>
          <div>
            <select id="genero" name="genero">
              <option value="" selected disabled>Gênero:</option>
              <option value="masculino">Masculino</option>
              <option value="feminino">Feminino</option>
            </select>
          </div>
          <div>
            <button type="submit">Continuar</button>
          </div>
        </form>

        <form id="formulario-2" method="POST" action="proc_cad_prof.php" style="display: none;">
          <input type="hidden" name="tipo" value="profissional">
          <div id="nomesobrenome">
            <div>
              <input type="text" id="nome" name="nome" placeholder="Nome" required><br>
            </div>
            <div>
              <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome" required><br>
            </div>
          </div>

          <div>
            <input type="email" id="email" name="email" placeholder="@ E-mail" required><br>
          </div>

          <div>
            <input type="password" id="senha" name="senha" placeholder="Senha" required>
          </div>
          <br>
          <div>
            <input type="tel" id="telefone" name="telefone" placeholder="Telefone" pattern="[0-9]{10,11}"><br>
            <small>Digite somente números (10 ou 11 dígitos).</small>
          </div>
          <br>
          <div>
            <select id="genero" name="genero">
              <option value="" selected disabled>Gênero:</option>
              <option value="masculino">Masculino</option>
              <option value="feminino">Feminino</option>
            </select>
          </div>
          <div>
            <button type="submit">Continuar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php
  include('footer.php');
  include('set_theme_session.php');
  ?>

  <script>
    const botaoFormulario1 = document.getElementById("botao-formulario-1");
    const botaoFormulario2 = document.getElementById("botao-formulario-2");
    const formulario1 = document.getElementById("formulario-1");
    const formulario2 = document.getElementById("formulario-2");

    botaoFormulario1.addEventListener("click", () => {
      formulario1.style.display = "block";
      formulario2.style.display = "none";
    });

    botaoFormulario2.addEventListener("click", () => {
      formulario1.style.display = "none";
      formulario2.style.display = "block";
    });
  </script>
</body>

</html>