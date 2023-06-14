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
        <form method="POST" enctype="multipart/form-data" action="proc_sobre-prof.php">
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
                <!-- criar um código PHP para verificar o gênero iserido anteriormente e mostrar a foto de acordo -->
                <img id="profile-preview" src="img/img_avatar.png" alt="profile">
              </div>
            </div>
          </div>
          <br>
          <div class="divs">
            <h3>Fale sobre você:</h3>
            <textarea id="editsobre" name="editsobre" rows="10" cols="50"></textarea>
            <small>Isso será exibido em seu perfil</small>
          </div>

          <div class="divs">
            <h3>Sua experiência:</h3>
            <textarea id="editexper" name="editexper" rows="10" cols="50"></textarea>
            <small>Isso será exibido em seu perfil</small>
          </div>

          <div class="divs">
            <h3>Com o que trabalha?</h3>
            <div id="check">
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
              <div>
                <label for="outro">Outro:</label>
                <input type="tecxt" class="entrada" id="outro" name="outro">
              </div>
            </div>
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