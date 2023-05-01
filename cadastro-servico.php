<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Obtém os valores dos campos do formulário
    $id_especialidade_fk = $_POST['especialidade'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];
    $subcategoria = $_POST['subcategoria'];
    $tempo = $_POST['tempo'];

    // Conecta ao banco de dados (substitua os valores entre <> pelos seus dados de conexão)
    $servername = "localhost";
    $dbname = "projetosalao";
    $username = 'root';
    $password = '';
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica se houve erro na conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Prepara e executa a query SQL para inserir o novo serviço na tabela "servico"
    $sql = "INSERT INTO servico (id_especialidade_fk, nome, descricao, preco, categoria, subcategoria, tempo) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issssss", $id_especialidade_fk, $nome, $descricao, $preco, $categoria, $subcategoria, $tempo);

    if ($stmt->execute()) {
        // Se a query foi executada com sucesso, exibe mensagem de sucesso
        echo "Serviço cadastrado com sucesso!";
    } else {
        // Se houve erro na execução da query, exibe mensagem de erro
        echo "Erro ao cadastrar serviço: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>

<!-- Formulário de cadastro de serviço -->
<form method="POST" action="">
    <label for="especialidade">Especialidade:</label>
    <select name="especialidade" id="especialidade" required>
        <option value="">Selecione uma opção</option>
        <option value="1">Cabeleireiro</option>
        <option value="2">Barbeiro</option>
        <?php
        // Conecta ao banco de dados (substitua os valores entre <> pelos seus dados de conexão)
        $servername = "localhost";
        $dbname = "projetosalao";
        $username = 'root';
        $password = '';
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica se houve erro na conexão
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        // Busca as especialidades na tabela "especialidade"
        $sql = "SELECT id_especialidade, nome FROM especialidade";
        $result = $conn->query($sql);

        // Preenche as opções do select com os resultados da busca
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row["id_especialidade"] . '">' . $row["nome"] . '</option>';
            }
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
        ?>
    </select>

    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required>

    <label for="descricao">Descrição:</label>
    <textarea name="descricao" id="descricao" required></textarea>

    <label for="preco">Preço:</label>
    <input type="text" name="preco" id="preco" required>

    <label for="categoria">Categoria:</label>
    <input type="text" name="categoria" id="categoria" required>

    <label for="subcategoria">Subcategoria:</label>
    <input type="text" name="subcategoria" id="subcategoria" required>

    <label for="tempo">Tempo:</label>
    <input type="text" name="tempo" id="tempo" required>

    <button type="submit">Cadastrar</button>
</form>