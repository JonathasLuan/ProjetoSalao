<div id="info">
    <div class="foto">
        <img id="myImg" src="<?php
        $email = $_SESSION['email'];
        $sql = "SELECT id_usuario FROM usuario WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $id = $row['id_usuario'];
        }

        include_once('conexao.php');
        $sql = "SELECT * FROM arquivos WHERE id_usuario_fk = '$id'";
        // Execute a consulta SQL para recuperar o arquivo do banco de dados
        $query = $mysqli->query($sql);

        // Verificar se a consulta retornou algum resultado
        if ($resultado = $query->fetch_assoc()) {
            $caminhoArquivo = $resultado['caminho'];
            echo $caminhoArquivo;
        } else {
            echo "ERRO!!!";
        }
        ?>" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
            <div class="text"><button><i class="fa fa-eye"></i></button></div>
        </div>
    </div>

    <?php
    include('modal-profile.php');
    ?>

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
            // Seleciona o nome
            $sql = "SELECT nome, sobrenome FROM usuario WHERE email = '{$_SESSION['email']}'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Exibe o nome
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
            // Seleciona a bio
            $sql = "SELECT bio FROM usuario WHERE email = '{$_SESSION['email']}'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Exibe a bio
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row["bio"];
                }
            } else {
                echo "Sobre-User";
            }
            ?>
        </p>
    </div>
</div>
