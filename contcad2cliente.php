<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre você</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="contcadCSS.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header>
    <div class="header1">
      <div class="logo">
        <div><img src="./img/tesoura.png"></div>
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
  <div class="conteudo">
    <div id="cadastroform">
      <div class="formulario-container">
        <h2>Fale sobre você</h2>
        <form>
          <div class="divs">
            <h3>Escolha uma foto</h3>
            <div class="modal-inner">
              <!-- aqui vai o conteúdo da janela modal -->
              <div id="modal-content">
                <div class="arquivo">
                  <label for="profile-image">Escolha o arquivo</label>
                  <input type="hidden" name="MAX_FILE_SIZE" value="4194304">
                  <input type="file" id="profile-image" name="profile-image">
                </div>
                <img id="profile-preview" src="img/profile.webp" alt="profile">
              </div>
            </div>
          </div>
          <br>
          <div class="divs">
            <h3>Fale sobre você:</h3>
            <textarea id="editsobre" name="editsobre" rows="10" cols="50"></textarea>
            <small>Isso será exibido em seu perfil</small>
          </div>
          <div id="caract-list" class="divs">
            <h3>Características</h3>
            <div class="caract">
              <h4>Cabelo</h4>
<div style="display: flex; justify-content: space-around;">
              <label for="tipo">Tipo:</label>
              <select id="tipo" name="tipo">
                <option value="" selected disabled>Selecione</option>
                <option value="">Liso</option>
                <option value="">Ondulado</option>
                <option value="">Cacheado</option>
                <option value="">Crespo</option>
              </select>
              <label for="tamanho-cabelo">Tamanho:</label>
              <select id="tamanho-cabelo" name="tamanho">
                <option value="" selected disabled>Selecione</option>
                <option value="">Careca</option>
                <option value="">Calvo</option>
                <option value="">Curto</option>
                <option value="">Médio</option>
                <option value="">Longo</option>
              </select>
</div>
            </div>
            <div class="caract">
              <h4>Rosto</h4>
<div style="display: flex; justify-content: space-around;">
              <label for="tamanho-rosto">Tamanho:</label>
              <select id="tamanho-rosto" name="tamanho">
                <option value="" selected disabled>Selecione</option>
                <option value="">Curto</option>
                <option value="">Médio</option>
                <option value="">Longo</option>
              </select>
              <label for="formato">Formato:</label>
              <select id="formato" name="formato">
                <option value="" selected disabled>Selecione</option>
                <option value="">Fino</option>
                <option value="">Redondo</option>
                <option value="">Quadrado</option>
                <option value="">Triangular</option>
              </select>
            </div>
</div>
            <div class="caract">
              <h4>Pele</h4>
              <label for="etnia">Etinia:</label>
              <select id="etnia" name="carac">
                <option value="" selected disabled>Selecione</option>
                <option value="">Curtas</option>
                <option value="">Médias</option>
                <option value="">Longas</option>
              </select>
            </div>
            <div class="caract" style="border-bottom: 0;">
              <h4>Unhas</h4>
              <label for="tamanho-unhas">Tamanho:</label>
              <select id="tamanho-unhas" name="tamanho">
                <option value="" selected disabled>Selecione</option>
                <option value="">Curtas</option>
                <option value="">Médias</option>
                <option value="">Longas</option>
              </select>
            </div>
          </div>

          <div style="text-align: center"><button type="submit">Continuar</button></div>
        </form>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2023 Na Régua</p>
  </footer>
  </div>
  <script>
    const fileInput = document.getElementById('profile-image');

    fileInput.addEventListener('change', function () {
      const file = fileInput.files[0];
      const reader = new FileReader();

      reader.addEventListener('load', function () {
        const image = new Image();
        image.src = reader.result;

        const preview = document.getElementById('profile-preview');
        preview.src = reader.result;
        preview.appendChild(image);
      });

      if (file) {
        reader.readAsDataURL(file);
      }
    });
  </script>
</body>

</html>