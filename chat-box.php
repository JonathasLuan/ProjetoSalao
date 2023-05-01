<div id="chat-box">
    <div class="chat-element">
        <div class="chat-item" id="chat-item-1">
            <div class="user-avatar">
                <img src="img/profile.webp" alt="user-avatar">
            </div>
            <div class="chat-info">
                <div class="user-name">
                    <h5 class="name">Fulano</h5>
                </div>
                <div class="preview">
                    <?php
                    // Exibe as mensagens na tela
                    $sql = "SELECT conteudo FROM mensagens";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // Exibe as mensagens em uma lista
                        echo "<ul>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<li>" . $row["conteudo"] . "</li>";
                        }
                        echo "</ul>";
                    } else {
                        echo "Não há mensagens.";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="chat-element">
    <div class="chat-item" id="chat-item-2">
        <div class="user-avatar">
            <img src="img/profile.webp" alt="user-avatar">
        </div>
        <div class="chat-info">
            <div class="user-name">
                <h5 class="name">Ciclano</h5>
            </div>
            <div class="preview">
            </div>
        </div>
    </div>
</div>
</div>
<div class="chat-element">
    <div class="chat-item" id="chat-item-3">
        <div class="user-avatar">
            <img src="img/profile.webp" alt="user-avatar">
        </div>
        <div class="chat-info">
            <div class="user-name">
                <h5 class="name">Beltrano</h5>
            </div>
            <div class="preview">
            </div>
        </div>
    </div>
</div>
</div>
</div>