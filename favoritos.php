<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('Location: entrar.php');
  exit();
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
    <div class="menu">
      <ul>
        <li>
          <a href="home.php">home</a>
        </li>
        <li>
          <a href="serviços.html">serviços</a>
        </li>
        <li>
          <a href="sobre.html">sobre</a>
        </li>
        <li>
          <div class="dropdown">
            <a href="entrar.html" class="mainmenua">perfil</a>
            <div class="dropdown-child">
              <a href="#">sub menu 1</a>
              <a href="#">sub menu 2</a>
              <form action="logout.php" method="POST">
                <button type="submit" name="logout">Logout</button>
              </form>
            </div>
          </div>
        </li>
        <li>
          <a href="contato.html">contato</a>
        </li>
      </ul>
    </div>
  </header>
  <main>
    <div id="conteudo">
      <p></p>
    </div>
  </main>
</body>

</html>