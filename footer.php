<footer id="footer">
    <p>&copy; 2023 SalonSet</p>
    <?php
    if (isset($_SESSION['id']) && session_id() == $_SESSION['id']) {
        echo "session_id: " . session_id() . "<br>";

        include_once("conexao.php");

        $email = $_SESSION['email'];
        $sql = "SELECT id_usuario FROM usuário WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $id = $row['id_usuario'];
            echo "Id de usuário: " . $id . "<br>";
        }

        $sql = "SELECT id_endereco FROM endereco WHERE id_usuario = '$id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $id_end = $row['id_endereco'];
            echo "Id de endereço: " . $id_end . "<br>";
        }
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