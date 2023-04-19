<?php
session_start();
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
  <div class="conteudo">
    <div class="container-central">
      <h1>Como gostaria de se cadastrar?</h1>
      <div class="btn-container">
        <div id="cliente-btn">
          <button id="botao-formulario-1">CLIENTE</button>
        </div>
        <div id="prof-btn">
          <button id="botao-formulario-2">PROFISSIONAL</button>
          <img src="img/profile.webp">
        </div>
      </div>
      <div class="formulario-container">
        <form id="formulario-1" method="POST" action="processar_cadastro.php" style="display: none;">
          <input type="hidden" name="tipo" value="cliente">
          <div id="nomesobrenome">
            <div>
              <label for="nome">Nome:</label>
              <input type="text" id="nome" name="nome" required><br>
            </div>
            <div>
              <label for="sobrenome">Sobrenome:</label>
              <input type="text" id="sobrenome" name="sobrenome" required><br>
            </div>
          </div>

          <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="@" required><br>
          </div>

          <div>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
          </div>

          <div>
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" pattern="[0-9]{10,11}"><br>
            <small>Digite somente números (10 ou 11 dígitos).</small>
          </div>

          <div>
            <label for="genero">Gênero:</label>
            <select id="genero" name="genero">
              <option value="" selected disabled>Selecione</option>
              <option value="masculino">Masculino</option>
              <option value="feminino">Feminino</option>
            </select>
          </div>
          <div>
            <a href="contcad1cliente.html"><button type="submit">Continuar</button></a>
          </div>
        </form>

        <form id="formulario-2" method="POST" action="processar_cadastro.php" style="display: none;">
          <select name="tipo" style="display: none;">
            <option value="profissional" selected>profissional</option>
          </select>
          <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br>
          </div>

          <div>
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" required><br>
          </div>

          <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="@" required><br>
          </div>

          <div>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
          </div>

          <div>
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" pattern="[0-9]{10,11}"><br>
            <small>Digite somente números (10 ou 11 dígitos).</small>
          </div>

          <div>
            <label for="genero">Gênero:</label>
            <select id="genero" name="genero">
              <option value="" selected disabled>Selecione</option>
              <option value="masculino">Masculino</option>
              <option value="feminino">Feminino</option>
            </select>
          </div>
          <div>
            <a href="contcad1prof.html"><button type="submit">Continuar</button></a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <footer>
    <p>&copy; 2023 Na Régua</p>
  </footer>

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