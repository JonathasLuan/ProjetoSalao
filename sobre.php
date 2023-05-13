<?php
session_start();
include('conexao.php');
/*echo $_SESSION['id'];
echo $_SESSION['senha'];
echo session_id();*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre nós</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./sobre.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <div id="conteudo">
    <div id="sobreprojeto">
      <p><b>
          <ul>
            <li>JONATHAS LUAN (github_JonathasLuan)</li>
            <li>THIAGO CAVALCANTI ALVES (github_devthiaguinho)</li>
            <li>HAROLD
              (github_deeljusti)</li>
            <li>GABRIELLA (github_gabi8086)</li>
          </ul>
        </b>
        <br>
      </p>
      <p>
      <h1>SalonSet</h1>
      O NaRégua é uma plataforma online que conecta profissionais da área de estética e clientes que buscam
      serviços
      dos mais gerais aos especializados. Nela é possível criar um perfil de cliente ou profissional, cada um
      com
      funcionalidades diferentes e próprias. As especialidades poodem ser: cabeleireiro, manicure e pedicure,
      barbeiro, maquiador, esteticista, dermatologista e até profissionais da plástica.<br> No perfil de profissional, é
      possível exibir sua experiência, criar um portifolio, fazer networking, descrever seu salão ou negócio,
      especificar sua especialidade e o que sabe fazer, além de mostrar tabelas de valores, produtos e uma agênda com
      suas disponibilidades de dia e horário para agendamentos. Um cliente pode criar um serviço a partir de página
      principal, onde descreve o que procura com todas as informações possíveis de: localidade atual (seu endereço ou
      localização), raio de acesso para escolhar o que fica mais perto, faixa de orçamento e mais. O pedido é gerado e
      é disponibilizado para visualização do lado dos profissionais, que podem buscar serviços para fazer. Ele pode
      ler o que o cliente escreveu e enviar uma solicitação.<br> O cliete verá em sua tela um raio no mapa de seu local
      com todos os profissionais disponíveis e seus endereços, onde pode clicar e ver seus perfis, ernviando também
      uma solicitação. Quando uma solicitação aceita em qualquer dos lados, um match é feito e um chat é aperto para
      conversa e negociação, onde podem combinar todos os detalhes do serviço.<br> A forma de pagamento pode ser
      escolhida
      e o profissional pode delimitar como aceita o pagamento. Uma vez salva a transação, uma fatura é gerada com
      todas as infomações pertinentes para controlar a segurança da operação. Se o serviço for prestado em domicílio,
      uma taxa a mais pode ser cobrada pelo profissional que se locomoveu. Já se é em um endereço comercial, um
      desconto pode ser dado para o cliente.<br> É possível também pedir reembolso ou cobrança, caso um golpe ou fraude
      seja cometida. Será enviada uma especificação de protocolo para quem denunciou e um pedido de autorização para
      iniciar uma investigação e análise do caso. Se aceita, a privacidade será quebrada e todos os dados e metadados
      serão acessados pela equipe: conversas, datas e horários, informações pessoais e endereços IP.<br> Os serviços
      podem
      ser cancelados por ambas as partes a qualquer momento, abrindo automaticamente uma vaga na tabela de horários do
      profissional. Também é possível que o cliente deixe um comentário ou avaliação no perfil do profissional após o
      serviço, isso será contabilizado e definirá quem aparecerá na página de destaques.<br> O cliente terá acesso a uma
      página onde escolherá todas as suas características físicas e isso poderá ser visualizado pela outra parte. Mas
      também poderá usar o "provador", uma funcionalidade que recomenda o que mais combina com seu tipo de cabelo,
      formato de rosto e muito mais, tudo para ajudar clientes que querem renovar seu visual, mas ainda não decidiram
      o que fazer.<br><br>
      Alguns dos serviços disponíveis são:
      <li>Cabelo</li>
      <li>Barba</li>
      <li>Unhas</li>
      <li>Maquiagem</li>
      </p>
    </div>
    <?php
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

  <?php
  include('footer.php');
  ?>
</body>

</html>