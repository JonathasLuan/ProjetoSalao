<div>
    <?php
    include('conexao.php');

    // Consulta por SQL com INNER JOIN:
    $sql = "SELECT cabelo.*, caracteristica.nome
        FROM cabelo 
        INNER JOIN caracteristica ON cabelo.id_caract_fk = caracteristica.id_caract";
    $resultado = mysqli_query($conn, $sql);

    // Exibe os resultados no HTML:
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<p>Tipo: " . $row["tipo"] . "</p>";
        echo "<p>Cor: " . $row["cor"] . "</p>";
        echo "<p>Cor: " . $row["tamanho"] . "</p>";
    }
    ?>

    <?php
    // Consulta por SQL com INNER JOIN:
    $sql = "SELECT pedidos.*, endereco.cidade, servico.nome
        FROM pedidos 
        INNER JOIN endereco ON pedidos.endereco = endereco.id_endereco
        INNER JOIN servico ON pedidos.servico = servico.id_servico";
    $resultado = mysqli_query($conn, $sql);

    // Exibe os resultados no HTML:
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<p>Serviço: " . $row["nome"] . "</p>";
        echo "<p>Cidade: " . $row["cidade"] . "</p>";
    }
    ?>
</div>