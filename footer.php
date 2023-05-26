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
    <br>
    <div id="switch">
        <span>light</span>
        <label class="switch">
            <input type="checkbox" id="theme-toggle-btn">
            <span class="slider round"></span>
        </label>
        <span>dark</span>
        <?php
        // Verifica se a variável de sessão está definida
        if (isset($_SESSION['darkMode'])) {
            // Exibe o valor da variável de sessão
            echo $_SESSION['darkMode'];
        } else {
            // Valor padrão caso a variável de sessão não esteja definida
            echo "darkMode não definido";
        }
        ?>
    </div>

</footer>