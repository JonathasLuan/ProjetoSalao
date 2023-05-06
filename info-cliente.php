<div id="info">
    <style>
        .foto {
            position: relative;
            border-radius: 50%;
            width: 150px;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
            border-radius: 50%;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .foto:hover .image {
            opacity: 0.3;
        }

        .foto:hover .middle {
            opacity: 1;
        }

        .text {
            background-color: #04AA6D;
            color: white;
            padding: 0px 0px;
            cursor: pointer;
            border-radius: 50%;
        }

        .text button {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 15px;
            text-align: center;
            color: white;
        }
    </style>
    <div class="foto">
        <img id="foto-perfil" src="img/img_avatar.png" alt="Avatar" class="image" style="width:100%">
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
    <div id="name">
        <h2 id="nameperfil">
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
    <div id="links">
        <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
        <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
    </div>
</div>
<hr>
<div id="info">
    <div id="bio">
        <p id="sobre">Aqui será um pequeno texto sobre o usuário (cliente ou profissional). Poderá fornecer
            informações
            adicionais além das especificadas abaixo, como sua vida profissional e características mais pessoais de
            seu trabalho.</p>
    </div>
</div>