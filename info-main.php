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
    </div>

    <!-- The Modal -->
    <div id="myModa" class="moda">
        <span class="clos">&times;</span>
        <img class="modal-conten" id="img01">
        <div id="caption"></div>
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
            $sql = "SELECT * FROM usuario WHERE email = '{$_SESSION['email']}'";
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
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    #myImg {
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {
        opacity: 0.7;
    }

    /* The Modal (background) */
    .moda {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-conten {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation */
    .modal-conten,
    #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* The Close Button */
    .clos {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .clos:hover,
    .clos:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
        .modal-conten {
            width: 100%;
        }
    }
</style>
<script>
    // Get the modal
    var moda = document.getElementById("myModa");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modaImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function () {
        moda.style.display = "block";
        modaImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("clos")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        moda.style.display = "none";
    }
</script>
