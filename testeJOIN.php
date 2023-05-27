<div>
    <?php
    include('conexao.php');

    // Consulta por SQL com INNER JOIN:
    $sql = "SELECT cabelo.*, caracteristica.tipo
        FROM cabelo 
        INNER JOIN caracteristica ON cabelo.id_caract_fk = caracteristica.id_caract";
    $resultado = mysqli_query($conn, $sql);

    // Exibe os resultados no HTML:
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<p>Tipo: " . $row["tipo"] . "</p>";
        echo "<p>Cor: " . $row["cor"] . "</p>";
    }
    ?>
</div>