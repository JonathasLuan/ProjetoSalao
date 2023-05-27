<div class="menu" id="logged">
  <ul>
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
        ?>" class="mainmenua">perfil <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-chevron-down">
            <polyline points="6 9 12 15 18 9"></polyline>
          </svg></a>
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