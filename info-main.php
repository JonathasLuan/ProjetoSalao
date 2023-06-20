<div id="info">
    <div class="foto">
        <img src="<?php
        $email = $_SESSION['email'];
        $sql = "SELECT id_usuario FROM usuário WHERE email = '$email'";
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
    <div id="tipo-user">
        <h3>
            <?php
            // Exibe o tipo
            echo $_SESSION['tipo'];
            ?>
        </h3>
    </div>
    <div id="nome">
        <h2 id="nomeperfil" style="text-align: center;">
            <?php
            // Seleciona o nome
            $sql = "SELECT * FROM usuário WHERE email = '{$_SESSION['email']}'";
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
    <div id="">
    </div>
</div>