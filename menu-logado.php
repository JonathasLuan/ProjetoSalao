<style>
  .menu {
    margin-left: 100px;
    display: flex;
  }

  .mainmenua {
    background-color: rgb(255, 0, 0) !important;
    color: rgb(255, 255, 255) !important;
    border: none;
    cursor: pointer;
    display: contents;
    padding: 20px;
  }

  .dropdown {
    position: relative;
    display: flex;
    z-index: 1;
  }

  #img-user-profile {
    width: 40px;
    height: 40px;
    border-color: #000000;
    border-radius: 50%;
    border: 1px solid grey;
  }

  .dropdown-child {
    display: none;
    min-width: 150px;
    position: absolute;
    margin-top: 0px !important;
    top: 100%;
    z-index: 1;
    box-shadow: 0px 0px 5px #ccc;
  }
</style>
<div class="menu" id="logged">
  <ul style="display: flex; align-items: center;">
    <li>
      <a href="principal.php">principal</a>
    </li>
    <li>
      <a href="serviços.php">serviços</a>
    </li>
    <li>
      <a href="sobre.php">sobre</a>
    </li>
    <li>
      <a href="contato.php">contato</a>
    </li>
    <li>
      <div class="dropdown">
        <a href="<?php
        if ($_SESSION['tipo'] == 'cliente') {
          echo "perfil-cliente.php";
        } else {
          echo "perfil-profissional.php";
        }
        ?>" class="mainmenua"><img id="img-user-profile" src="./img/avatar2.png"></a>
        <div class="dropdown-child">
          <a href="favoritos.php">Favoritos</a>
          <form action="logout.php" method="POST">
            <button type="submit" name="logout" id="logout-btn">Logout</button>
          </form>
        </div>
      </div>
    </li>
  </ul>
</div>