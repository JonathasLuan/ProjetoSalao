<style>
    input:hover {
        background-color: #eee;
    }

    input[type='text']:focus {
        background-color: #eee;
    }

    input[type='text'] {
        border-radius: 25px;
        padding: 10px;
    }

    input[type='submit'] {
        cursor: pointer;
        padding: 5px;
    }

    input[type='submit']:hover {
        background-color: lightblue;
    }
</style>

<fieldset>
    <h2>Suas informações:</h2>
    <form action="" method="POST">
        <input type="text" name="nome" placeholder="seu nome"><br><br>
        <input type="text" name="idade" placeholder="sua idade"><br><br>
        <input type="text" name="cidade" placeholder="sua cidade">
        <input type="submit">
    </form>

    <?php

    if (isset($_POST['nome']) && ($_POST['idade']) && ($_POST['cidade'])) {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $cidade = $_POST['cidade'];

        echo "<h3>$nome tem $idade anos e mora em $cidade.</h3>";
    } else {
        echo "Digite suas informações";
    }

    $info = array("Jonathas", $idade, $cidade);
    if (in_array($nome, $info)) {
        echo "Você existe, " . $info[0] . ".";
    }
    else {
        echo "Você não existe, " . $nome . ".";
    }

    ?>
</fieldset>