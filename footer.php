<footer id="footer">
    <p>&copy; 2023 SalonSet</p>
    <?php
    if (isset($_SESSION['id']) && session_id() == $_SESSION['id']) {
        echo "Senha: " . $_SESSION['senha'] . "<br>";
        echo "E-mail: " . $_SESSION['email'] . "<br>" . "<br>";
        echo "\$_SESSION['id']: " . $_SESSION['id'] . "<br>";
        echo "session_id: " . session_id() . "<br>";
        echo $_SESSION['tipo'];
    }
    ?>

    <?php
    /*
    if (isset($_SESSION['id']) && session_id() != $_SESSION['id']) {
    echo "Id_usuario: " . $_SESSION['id'] . "<br>";
    echo "Senha: " . $_SESSION['senha'] . "<br>";
    echo "E-mail: " . $_SESSION['email'] . "<br>" . "<br>";
    echo session_id();
    } else {
    return;
    }
    */
    ?>
</footer>