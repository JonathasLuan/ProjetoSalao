<?php

include("conexao.php");

/*if(isset($_FILES) && count($_FILES) > 0) {
var_dump($_FILES);
die();
}*/

if (isset($_FILES['arquivo'])) {
    echo "arquivo enviado";
    $arquivo = $_FILES['arquivo'];

    if ($arquivo['error'])
        die("Falha ao enviar arquivo");

    if ($arquivo['size'] > 2097152)
        die("Arquivo muito grande. Máximo: 2MB");

    $pasta = "PHP/Upload/arquivos/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

    if ($extensao != "jpg" && $extensao != 'png')
        die("Tipo de arquivo não aceito.");

    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
    $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path);
    if ($deu_certo) {
        $mysqli->query("INSERT INTO arquivos (nome, path) VALUES('$nomeDoArquivo', '')") or die($mysqli->error);
        echo "<p>Arquivo enviado com sucesso!</p>";
    } else
        echo "<p>Falha ao enviar o arquivo.</p>";
}

$sql_query = $mysqli->query("SELECT * FROM arquivos") or die($mysqli->error);

?>