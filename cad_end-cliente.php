<?php
// Inicia a sessão do PHP
session_start();

if (isset($_SESSION['id']) && session_id() == $_SESSION['id']) {
  header('Location: principal.php');
  return;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seu endereço</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="contcad.css">
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
    if (isset($_SESSION['id']) && session_id() == $_SESSION['id']) {
      // usuário já fez login, exibe o menu de sessão iniciada
      include('menu-logado.php');
    } else {
      // usuário não fez login, exibe o menu padrão
      include('menu-padrao.php');
    }
    ?>
  </header>
  <div class="conteudo">
    <div id="cadastroform">
      <div class="formulario-container">
        <h2 style="margin-bottom: 50px;">Endereço Pessoal</h2>
        <form action="proc_end-cliente.php" method="POST">
          <div class="divs">
            <div id="endereco-div">
              <div>
                <label for="estado">Estado:</label>
                <select id="estado" name="estado" class="entrada-endereco">
                  <option value="" selected disabled>Selecione</option>
                  <option value="acre">Acre (AC)</option>
                  <option value="alagoas">Alagoas (AL)</option>
                  <option value="amapa">Amapá (AP)</option>
                  <option value="amazonas">Amazonas (AM)</option>
                  <option value="bahia">Bahia (BA)</option>
                  <option value="ceara">Ceará (CE)</option>
                  <option value="distritofederal">Distrito Federal (DF)</option>
                  <option value="espiritosanto">Espírito Santo (ES)</option>
                  <option value="goias">Goiás (GO)</option>
                  <option value="maranhao">Maranhão (MA)</option>
                  <option value="matogrosso">Mato Grosso (MT)</option>
                  <option value="matogrossodosul">Mato Grosso do Sul (MS)</option>
                  <option value="minasgerais">Minas Gerais (MG)</option>
                  <option value="para">Pará (PA)</option>
                  <option value="paraiba">Paraíba (PB)</option>
                  <option value="parana">Paraná (PR)</option>
                  <option value="pernambuco">Pernambuco (PE)</option>
                  <option value="piaui">Piauí (PI)</option>
                  <option value="riodejaneiro">Rio de Janeiro (RJ)</option>
                  <option value="riograndedonorte">Rio Grande do Norte (RN)</option>
                  <option value="riograndedosul">Rio Grande do Sul (RS)</option>
                  <option value="rondonia">Rondônia (RO)</option>
                  <option value="roraima">Roraima (RR)</option>
                  <option value="santacatarina">Santa Catarina (SC)</option>
                  <option value="saopaulo">São Paulo (SP)</option>
                  <option value="sergipe">Sergipe (SE)</option>
                  <option value="tocantins">Tocantins (TO)</option>
                </select>
              </div>

              <div>
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" class="entrada-endereco" name="cidade" required><br>
              </div>

              <div>
                <label for="bairro">Bairro:</label>
                <input type="text" id="bairro" class="entrada-endereco" name="bairro" required><br>
              </div>
            </div>
            <div style="display: flex; justify-content: space-around;">
              <div>
                <label for="rua">Rua:</label>
                <input type="text" id="rua" class="entrada-endereco" name="rua" required><br>
              </div>
              <div>
                <label for="numero">Número:</label>
                <input type="text" id="numero" class="entrada-endereco" name="numero" required><br>
              </div>
              <div>
                <label for="complemento">Complemento:</label>
                <input type="text" id="complemento" class="entrada-endereco" name="complemento"><br>
              </div>
            </div>
          </div>
          <div style="text-align: center;">
            <button type="submit">Continuar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php
  include('footer.php');
  ?>
  </div>
</body>

</html>
