<?php
// Inicia a sessão do PHP
session_start();

if (isset($_SESSION['id']) && session_id() == $_SESSION['id']) {
  header('Location: principal.php');
  return;
}

$step = 3;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre você</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="contcad.css">
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
    <div id="cadastroform">
      <?php
      include 'progressbar.php';
      ?>
      <div class="formulario-container">
        <h2>Fale sobre você</h2>
        <form method="POST" enctype="multipart/form-data" action="proc_sobre-cliente.php">
          <div class="divs">
            <h3>Escolha uma foto:</h3>
            <div class="modal-inner">
              <!-- aqui vai o conteúdo da janela modal -->
              <div id="modal-content">
                <div class="arquivo">
                  <label for="profile-image">Selecione o arquivo:</label>
                  <input type="hidden" name="MAX_FILE_SIZE" value="4194304">
                  <input type="file" name="arquivo" id="profile-image" name="profile-image">
                </div>
                <img id="profile-preview" src="img/img_avatar.png" alt="profile">
              </div>
            </div>
          </div>
          <br>
          <div class="divs">
            <h3>Fale sobre você:</h3>
            <textarea id="editsobre" name="bio" rows="10" cols="50"></textarea>
            <small>Isso será exibido em seu perfil</small>
          </div>

          <div style="text-align: center"><button id="btn-finalizar" type="submit">FINALIZAR</button></div>
        </form>
      </div>
    </div>
  </div>

  <?php
  include('footer.php');
  ?>
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