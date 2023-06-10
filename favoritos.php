<?php
session_start();

if (session_id() != $_SESSION['id']) {
  header('Location: entrar.php');
  return;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serviços favoritos</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="dark-mode.css">
  <link rel="stylesheet" href="conversas.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    #conteudo {
      display: flex;
    }

    .mensagem-direita {
      float: right;
    }

    .mensagem-esquerda {
      float: left;
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
  <main>
    <div id="conteudo">
      <?php
      include_once("conexao.php");

      $email = $_SESSION['email'];
      $sql = "SELECT id_usuario FROM usuário WHERE email = '$email'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id_usuario'];
        echo "<h1> Id de usuário: " . $id . "</h1>";
      }

      $sql = "SELECT id_endereco FROM endereco WHERE id_usuario = '$id'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id_end = $row['id_endereco'];
        echo "<h1> Id de endereço: " . $id_end . "</h1>";
      }
      ?>
    </div>
  </main>
  <?php
  // Exibe as mensagens na tela
  $sql = "SELECT * FROM mensagens";
  // Aqui deverá ser puxado do id referente ao destinatário
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $mensagens = array();
    $date_time = array();

    // Exibe as mensagens
    while ($row = mysqli_fetch_assoc($result)) {
      $mensagem = $row['conteudo'];
      $reme = $row['remetente'];

      // Adiciona uma classe CSS baseada no remetente da mensagem
      $classeCSS = ($reme == $id) ? 'mensagem-direita' : 'mensagem-esquerda';

      // Exibe a mensagem com a classe CSS apropriada
      echo '<div class="' . $classeCSS . '">' . $mensagem . '</div><br>';
    }
  } else {
    echo "Não há mensagens.";
  }
  ?>

  <?php
  include('footer.php');
  include('set_theme_session.php');
  ?>

  <div class="element" id="element2">
    <div style="display: block;
    width: 11%;
    font-size: 10px;">
      <img src="<?php ?>img/img_avatar.png" id="profile-img" alt="profile-img">
      <span class="date-time">
        <?php echo $date_time ?>
      </span>
    </div>
    <div class="send-item">
      <div class="chat-content-box">
        <span class="chat-content">
          <?php echo "<div class='bloco-texto'>" . $mensagem . "</div>"; ?>
        </span>
      </div>
    </div>
  </div>

</body>

</html>