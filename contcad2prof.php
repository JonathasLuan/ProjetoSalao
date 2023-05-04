<?php

include("conexao.php");

/*if(isset($_FILES) && count($_FILES) > 0) {
var_dump($_FILES);
die();
}*/

if (isset($_FILES['arquivo'])) {
  echo "arquivo enviado";
  $arquivo = $_FILES['arquivo'];

  if ($arquivo['error'])
    die("Falha ao enviar arquivo");

  if ($arquivo['size'] > 2097152)
    die("Arquivo muito grande. Máximo: 2MB");

  $pasta = "PHP/Upload/arquivos/";
  $nomeDoArquivo = $arquivo['name'];
  $novoNomeDoArquivo = uniqid();
  $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

  if ($extensao != "jpg" && $extensao != 'png')
    die("Tipo de arquivo não aceito.");

  $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
  $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path);
  if ($deu_certo) {
    $mysqli->query("INSERT INTO arquivos (nome, path) VALUES('$nomeDoArquivo', '')") or die($mysqli->error);
    echo "<p>Arquivo enviado com sucesso!</p>";
  } else
    echo "<p>Falha ao enviar o arquivo.</p>";
}

$sql_query = $mysqli->query("SELECT * FROM arquivos") or die($mysqli->error);

?>

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
  <style>
    p,
    label {
      font: 1rem 'Fira Sans', sans-serif;
    }

    input {
      margin: 0.4rem;
    }

    #check {
      display: flex;
      justify-content: space-around;
    }
  </style>
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
  <div class="conteudo">
    <div id="cadastroform">
      <div class="formulario-container">
        <h2>Fale sobre você</h2>
        <form method="POST" enctype="multipart/form-data" action="">
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

          <div style="text-align: center"><button type="submit">Continuar</button></div>
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