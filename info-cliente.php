<div id="info">
    <div class="foto">
        <img id="foto-perfil" src="<?php
        $email = $_SESSION['email'];
        $sql = "SELECT genero FROM usuário WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $genero = $row['genero'];

            if ($genero == 'masculino') {
                echo "img/img_avatar.png";
            } else {
                echo "img/img_avatar2.png";
            }
        }
        ?>" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
            <div class="text"><button><i class="fa fa-eye"></i></button></div>
        </div>
    </div>
    <div id="tipo-user">
        <h3>
            <?php
            // Exibe o tipo
            echo $_SESSION['tipo'];
            ?>
        </h3>
    </div>
    <div id="name">
        <h2 id="nameperfil" style="text-align: center;">
            <?php
            // Exibe o nome
            $email = $_SESSION['email'];
            $sql = "SELECT nome, sobrenome FROM usuário WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Exibe as mensagens em uma lista
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row["nome"] . " " . $row["sobrenome"];
                }
            } else {
                echo "Nome-User";
            }
            ?>
        </h2>
    </div>
    <div id="links">
        <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
        <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
    </div>
</div>
<hr>
<div id="info">
    <div id="bio">
        <p id="sobre">
            <?php
            // Exibe o nome
            $sql = "SELECT bio FROM usuário WHERE email = '{$_SESSION['email']}'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Exibe as mensagens em uma lista
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row["bio"];
                }
            } else {
                echo "Nome-User";
            }
            ?>
        </p>
    </div>
</div>