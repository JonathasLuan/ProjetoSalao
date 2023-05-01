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
        <a href="perfil.php" class="mainmenua">perfil</a>
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