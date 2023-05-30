<?php
session_start();

if (session_id() != $_SESSION['id']) {
    header('Location: entrar.php');
    return;
}
?>

<?php
// Caracteristicas:
$cabelo = filter_input(INPUT_POST, 'cabelo', FILTER_SANITIZE_STRING);
$pele = filter_input(INPUT_POST, 'pele', FILTER_SANITIZE_STRING);
$unhas = filter_input(INPUT_POST, 'unhas', FILTER_SANITIZE_STRING);
$rosto = filter_input(INPUT_POST, 'rosto', FILTER_SANITIZE_STRING);

$sqlBio = "UPDATE usuário SET bio = ''";
$insert = mysqli_query($conn, $sqlBio);

$id_usuario = $_SESSION['id_usuario'];


if (isset($_POST['textura']) && ($_POST['tamanho']) && ($_POST['cor']) && ($_POST['tipo'])) {
    $textura = $mysqli->real_escape_string($_POST['textura']);
    $tamanho = $mysqli->real_escape_string($_POST['tamanho']);
    $cor = $mysqli->real_escape_string($_POST['cor']);
    $tipo = $mysqli->real_escape_string($_POST['tipo']);

    $sqlCabelo = "INSERT INTO cabelo (id_caract_fk, cor, tipo, cor, textura, tamanho) VALUES ('', )";
    $insert = mysqli_query($conn, $sqlCabelo);
}

$id_cabelo = "SELECT id_cabelo FROM cabelo";

$sqlCaract = "INSERT INTO caracteristicas (id_usuario_fk, id_cabelo_fk, id_pele_fk, id_unhas_fk, id_rosto_fk) VALUES ('$id_usuario', '$id_cabelo', '$id_pele', '$id_unhas', '$id_rosto')";
$insert = mysqli_query($conn, $sqlCaract);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Características</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="contcad.css">
    <link rel="stylesheet" href="dark-mode.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/233e5ce955.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <?php
        include('header1.php');
        ?>
        <?php
        include('barra-pesquisa.php');
        ?>
        <?php
        // Verifica se o usuário já fez login
        if (session_id() == true) {
            // usuário já fez login, exibe o menu de sessão iniciada
            include('menu-logado.php');
        } else {
            // usuário não fez login, exibe o menu padrão
            include('menu-padrao.php');
        }
        ?>
    </header>

    <div id="caract-list" class="divs">
        <h3>Características:</h3>
        <div class="caract">
            <h4>Cabelo</h4>
            <div style="display: flex; justify-content: space-around;">
                <label for="tipo">Tipo:</label>
                <select id="tipo" name="tipo">
                    <option value="" selected disabled>Selecione</option>
                    <option value="">Liso</option>
                    <option value="">Ondulado</option>
                    <option value="">Cacheado</option>
                    <option value="">Crespo</option>
                </select>
                <label for="tamanho-cabelo">Tamanho:</label>
                <select id="tamanho-cabelo" name="tamanho">
                    <option value="" selected disabled>Selecione</option>
                    <option value="">Careca</option>
                    <option value="">Calvo</option>
                    <option value="">Curto</option>
                    <option value="">Médio</option>
                    <option value="">Longo</option>
                </select>
            </div>
        </div>
        <div class="caract">
            <h4>Rosto</h4>
            <div style="display: flex; justify-content: space-around;">
                <label for="tamanho-rosto">Tamanho:</label>
                <select id="tamanho-rosto" name="tamanho">
                    <option value="" selected disabled>Selecione</option>
                    <option value="">Curto</option>
                    <option value="">Médio</option>
                    <option value="">Longo</option>
                </select>
                <label for="formato">Formato:</label>
                <select id="formato" name="formato">
                    <option value="" selected disabled>Selecione</option>
                    <option value="">Fino</option>
                    <option value="">Redondo</option>
                    <option value="">Quadrado</option>
                    <option value="">Triangular</option>
                </select>
            </div>
        </div>
        <div class="caract">
            <h4>Pele</h4>
            <label for="etnia">Etinia:</label>
            <select id="etnia" name="carac">
                <option value="" selected disabled>Selecione</option>
                <option value="">Curtas</option>
                <option value="">Médias</option>
                <option value="">Longas</option>
            </select>
        </div>
        <div class="caract" style="border-bottom: 0;">
            <h4>Unhas</h4>
            <label for="tamanho-unhas">Tamanho:</label>
            <select id="tamanho-unhas" name="tamanho">
                <option value="" selected disabled>Selecione</option>
                <option value="">Curtas</option>
                <option value="">Médias</option>
                <option value="">Longas</option>
            </select>
        </div>
    </div>
</body>

</html>