<?php

// Verifica se o formulário foi enviado
if (isset($_GET['submit'])) {

    // Obtém o valor do input de busca
    $search = $_GET['search'];

    // Conecta ao banco de dados (substitua os valores entre <> pelos seus dados de conexão)
    $servername = "localhost";
    $dbname = "projetosalao";
    $pagina = "root";
    $conn = new mysqli($servername, $dbname, $pagina);

    // Verifica se houve erro na conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Executa a consulta SQL para buscar na tabela "pagina" pelos termos de busca
    $sql = "SELECT * FROM pagina WHERE titulo LIKE '%$search%'";
    $result = $conn->query($sql);

    // Verifica se foram encontrados resultados
    if ($result->num_rows > 0) {
        // Redireciona para a primeira página encontrada
        $pagina = $result->fetch_assoc();
        header('Location: ' . $pagina['url']);
        exit;
    } else {
        // Exibe mensagem de nenhum resultado encontrado
        echo "Nenhum resultado para " . $search;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}

?>
