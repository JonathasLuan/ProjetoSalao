<div class="element" id="element1">
    <div class="send-item">
        <div class="chat-content-box">
            <span class="chat-content">
            <?php echo "<div class=".$classeCSS.">" . $mensagem . "</div>"; ?>
            </span>
        </div>
    </div>
    <div style="display: block;
    width: 11%;
    font-size: 10px;">
        <a href="<?php
        $email = $_SESSION['email'];
        $sql = "SELECT tipo FROM usuário WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $tipo = $row['tipo'];

            if ($tipo == 'cliente') {
                echo "perfil-cliente.php";
            } else {
                echo "perfil-profissional.php";
            }
        }
        ?>"><img src="<?php
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
        ?>" id="profile-img" alt="profile-img"></a>
        <span class="date-time">
            <?php echo $date_time; ?>
        </span>
    </div>
</div>