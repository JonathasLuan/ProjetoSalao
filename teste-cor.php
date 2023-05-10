<?php
session_start();
include('conexao.php');

if (isset($_POST['modo'])) {
    $modo = $_POST['modo'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="
    <?php
    //conecte-se ao banco de dados aqui
    
    $email = $_SESSION['email'];
    $sql = "SELECT cor FROM usuário WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // a consulta retornou um resultado
        $row = mysqli_fetch_assoc($result);
        $cor = $row['cor'];

        if ($cor == 'vermelho') {
            echo "teste-vermelho.css";
        }
        if ($cor == 'azul') {
            echo "teste-azul.css";
        }
    }

    //feche a conexão com o banco de dados aqui
    ?>">
    <title>Document</title>
</head>

<body>
    <div id="ex">
    </div>
    <form action="" method="POST">
        <label>
            <input type="radio" name="modo" value="vermelho">> Modo Vermelho
        </label>
        <label>
            <input type="radio" name="modo" value="azul"> Modo Azul
        </label>
        <button type="submit">Aplicar</button>
    </form>

    <img src="<?php
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
    ?>" alt="user-avatar">
</body>

</html>