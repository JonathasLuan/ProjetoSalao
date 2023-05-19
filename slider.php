<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
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
        // usuário não fez login, exibe o menu padrão
        include('menu-padrao.php');
        ?>
    </header>
    <div class="slider">
        <figure>
            <div class="slide">
                <img src="img/cabelo.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/barbearia.png" alt="">
            </div>
            <div class="slide">
                <img src="img/maquiagem.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/manicure.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/pedicure.jpg" alt="">
            </div>
        </figure>
        <div class="campologin">
            <h2>LOGIN</h2>
            <div class="formulario-container">
                <h3>Entre com sua conta!</h3>
                <form action="" method="POST">
                    <div>
                        <input type="email" id="email" name="email" placeholder="@ E-mail" required><br>
                    </div>

                    <div>
                        <input type="password" id="senha" name="senha" placeholder="Senha" required>
                    </div>
                    <a style="color: black;" href="">Esqueci minha senha</a>
                    <?php
                    include_once("conexao.php");

                    if (isset($_POST['email']) || isset($_POST['senha'])) {
                        if (strlen($_POST['email']) == 0) {
                            echo "Preencha seu e-mail";
                        } else if ((strlen($_POST['senha']) == 0)) {
                            echo "Preencha sua senha";
                        } else {
                            $email = $mysqli->real_escape_string($_POST['email']);
                            $senha = $mysqli->real_escape_string($_POST['senha']);

                            $sql_code = "SELECT * FROM usuário WHERE email = '$email' AND senha = '$senha'";
                            $mysqli_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

                            $quantidade = $mysqli_query->num_rows;

                            if ($quantidade == 1) {

                                $usuario = $mysqli_query->fetch_assoc();

                                $tipo_sql_code = "SELECT tipo FROM usuário WHERE email = '$email' AND senha = '$senha'";
                                $tipo_query = $mysqli->query($tipo_sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
                                $tipo = $tipo_query->fetch_assoc()['tipo'];
                                $_SESSION['tipo'] = $tipo;


                                if (session_id() == '') {
                                    session_start();
                                }

                                $_SESSION['id'] = session_id();
                                $_SESSION['senha'] = $usuario['senha'];
                                $_SESSION['email'] = $usuario['email'];

                                header("Location: principal.php");

                            } else {
                                echo "<p style='color:red; text-align: center; font-weight: bold;'>" . "Falha ao logar! E-mail ou Senha incorretos." . "</p>";
                            }
                        }
                    }
                    ?>
                    <div>
                        <button type="submit">Entrar</button>
                    </div>
                </form>
            </div>
            <div id="cadastro" style="font-size: 16px;">
                <h3>Ainda não tem uma conta? <a href='cadastro.php'>Cadastre-se</a></h3>
            </div>
        </div>
    </div>

</body>

</html>