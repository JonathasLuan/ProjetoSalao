<?php
include("conexao.php");

if (isset($_FILES['arquivo'])) {
    echo "arquivo enviado";
    $arquivo = $_FILES['arquivo'];

    if ($arquivo['error'])
        die("Falha ao enviar arquivo");

    if ($arquivo['size'] > 2097152)
        die("Arquivo muito grande. Máximo: 2MB");

    $pasta = "./php/upload/arquivos/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

    if ($extensao != "jpg" && $extensao != 'png')
        die("Tipo de arquivo não aceito.");

    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
    $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path);
    if ($deu_certo) {
        $mysqli->query("INSERT INTO arquivos (nome, caminho) VALUES('$nomeDoArquivo', '$path')") /* or die($mysqli->error)*/;
        echo "<p>Arquivo enviado com sucesso!</p>";
    } else {
        echo "<p>Falha ao enviar o arquivo.</p>";
    }
}
$sql_query = $mysqli->query("SELECT * FROM arquivos") /* or die($mysqli->error)*/;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivos</title>
</head>

<body>
    <div>
        <fieldset>
            <form method="POST" enctype="multipart/form-data" action="">
                <p><label for="">Selecione o arquivo</label>
                    <input multiple name="arquivo" type="file">
                </p>
                <button type="submit">Enviar arquivo</button>
            </form>
        </fieldset>
        <br>
        <fieldset>
            <h1>Lista de Arquivos</h1>
            <table border="1" cellpadding="10">
                <thead>
                    <th>Preview</th>
                    <th>Arquivo</th>
                    <th>Data de Envio</th>
                </thead>
                <tbody>
                    <?php
                    while ($arquivo = $sql_query->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><img height="50" src="<?php echo !empty($arquivo['caminho']) ? $arquivo['caminho'] : ''; ?>"
                                    alt=""></td>

                            <td><a target="_blank" href="<?php echo $arquivo['caminho']; ?>">
                                    <?php echo $arquivo['nome']; ?></a>
                            </td>
                            <td>
                                <?php echo date("d/m/Y H:i", strtotime($arquivo['data_upload'])); ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </fieldset>
    </div>
</body>

</html>