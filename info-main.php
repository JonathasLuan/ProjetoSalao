<div id="info">
    <div class="foto">
        <img src="img/img_avatar.png" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
            <div class="text"><button><i class="fa fa-eye"></i></button></div>
        </div>
    </div>
    <div id="tipo-user">
        <h3>
            <?php
            // Exibe o tipo
            $sql = "SELECT tipo FROM usuário WHERE id_usuario = 1";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Exibe as mensagens em uma lista
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row["tipo"];
                }
            } else {
                echo "Tipo-User";
            }
            ?>
        </h3>
    </div>
    <div id="nome">
        <h2 id="nomeperfil">
            <?php
            // Exibe o tipo
            $sql = "SELECT nome FROM usuário WHERE id_usuario = 1";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Exibe as mensagens em uma lista
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row["nome"];
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