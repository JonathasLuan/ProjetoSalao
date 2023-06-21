<?php
session_start();
include_once('conexao.php');

// Verifica se o valor do nome e da bio foram enviados via POST
if (isset($_POST['nome'])) {
    $novoNome = $_POST['nome'];

    // Realiza as atualizações no banco de dados
    $email = $_SESSION['email'];
    $sql = "UPDATE usuário SET nome = '$novoNome' WHERE email = '$email'";
    $resultado = mysqli_query($conn, $sql);

    if ($resultado) {
        header('Location: principal.php');
    } else {
        header('Location: principal.php');
    }
}

if (isset($_POST['editsobre'])) {
    $novaBio = $_POST['editsobre'];

    // Realiza as atualizações no banco de dados
    $email = $_SESSION['email'];
    $sql = "UPDATE usuário SET bio = '$novaBio' WHERE email = '$email'";
    $resultado = mysqli_query($conn, $sql);

    if ($resultado) {
        header('Location: principal.php');
    } else {
        header('Location: principal.php');
    }
}
?>

<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetosalao";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem sucedida
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_SESSION['email'];
$sql = "SELECT id_usuario FROM usuário WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $id = $row['id_usuario'];
}

if (isset($_POST['acao'])) {
    function realizarUpload($id, $conn)
    {
        $arquivo = $_FILES['file'];
        $arquivoNovo = explode('.', $arquivo['name']);

        if ($arquivoNovo[sizeof($arquivoNovo) - 1] != 'jpg' && $arquivoNovo[sizeof($arquivoNovo) - 1] != 'png') {
            die('Você não pode fazer upload deste tipo de arquivo.');
        } else {
            move_uploaded_file($arquivo['tmp_name'], 'uploads/' . $arquivo['name']);
            $sqlSelect = "SELECT id_usuario_fk FROM arquivos WHERE id_usuario_fk = '$id'";
            $result = mysqli_query($conn, $sqlSelect);
            if (mysqli_num_rows($result) > 0) {
                // Salvar o arquivo no banco de dados
                $nomeArquivo = $conn->real_escape_string($arquivo['name']);
                $caminhoArquivo = 'uploads/' . $arquivo['name'];
                $sql = "UPDATE arquivos SET nome = '$nomeArquivo', caminho = '$caminhoArquivo' WHERE id_usuario_fk = '$id'";
                // Execute a consulta SQL para atualizar o arquivo no banco de dados
                $conn->query($sql);
            } else {
                // Salvar o arquivo no banco de dados
                $nomeArquivo = $conn->real_escape_string($arquivo['name']);
                $caminhoArquivo = 'uploads/' . $arquivo['name'];
                $sql = "INSERT INTO arquivos (nome, caminho, id_usuario_fk) VALUES ('$nomeArquivo', '$caminhoArquivo', '$id')";
                // Execute a consulta SQL para inserir o arquivo no banco de dados
                $conn->query($sql);
            }
        }
    }

    realizarUpload($id, $conn);
}

?>