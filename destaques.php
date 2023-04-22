<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Destaques</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./destaquesCSS.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header>
    <div class="header1">
      <div class="logo">
        <div><img src="./img/tesourapentepretos.jpg"></div>
        <div>
          <span>NaRégua</span>
        </div>
      </div>
    </div>
    <div class="pesquisa">
      <input type="text" placeholder="buscar...">
      <i class="fa fa-search"></i>
    </div>
    <?php
    // Inicia a sessão do PHP
    session_start();

    // Verifica se o usuário já fez login
    if (isset($_SESSION['usuario']) && $_SESSION['usuario'] === true) {
      // usuário já fez login, exibe o menu de sessão iniciada
      include('menu-logado.php');
    } else {
      // usuário não fez login, exibe o menu padrão
      include('menu-padrao.php');
    }
    ?>
  </header>
  <main>
    <div id="conteudo">
      <p></p>
      <button onclick="goBack()">Voltar</button>

      <button id="btn-prev">Anterior</button>
      <button id="btn-next">Próximo</button>

      <div id="conteudo">
        <div class="secao" id="secao-1">
          <h2>Seção 1</h2>
          <p>Conteúdo da seção 1.</p>
        </div>
        <div class="secao" id="secao-2">
          <h2>Seção 2</h2>
          <p>Conteúdo da seção 2.</p>
        </div>
        <div class="secao" id="secao-3">
          <h2>Seção 3</h2>
          <p>Conteúdo da seção 3.</p>
        </div>
      </div>

      <div class="switch__container">
        <input id="switch-shadow" class="switch switch--shadow" type="checkbox" />
        <label for="switch-shadow"></label>
      </div>

      <div id="conversas">
        <!-- A lista de conversas será adicionada aqui -->
      </div>
      <button id="adicionarConversa">Adicionar Conversa</button>
      <div id="conteudo">
        <p>Nesta página serão exibidos os serviços de cabeleireiro.</p>
      </div>
      <div>
        <h2>Informações Pessoais</h2>
        <div>
          <span>Nome:</span>
          <span id="nome">João da Silva</span>
          <button id="edit-nome" onclick="editarCampo('nome')">Editar</button>
          <button id="salvar-nome" style="display:none" onclick="salvarCampo('nome')">Salvar</button>
        </div>
        <div>
          <span>Email:</span>
          <span id="email">joao.silva@gmail.com</span>
          <button id="edit-email" onclick="editarCampo('email')">Editar</button>
          <button id="salvar-email" style="display:none" onclick="salvarCampo('email')">Salvar</button>
        </div>
      </div>

      <div>
        <h2>Endereço</h2>
        <div class="data">
          <span>Estado:</span>
          <span id="estado">São Paulo</span>
          <button id="edit-estado" onclick="editarCampo('estado')">Editar</button>
          <button id="salvar-estado" style="display:none" onclick="salvarCampo('estado')">Salvar</button>
        </div>
        <div>
          <span>Cidade:</span>
          <span id="cidade">São Pailo</span>
          <button id="edit-cidade" onclick="editarCampo('cidade')">Editar</button>
          <button id="salvar-cidade" style="display:none" onclick="salvarCampo('cidade')">Salvar</button>
        </div>
        <div>
          <span>Bairro:</span>
          <span id="bairro">Centro</span>
          <button id="edit-bairro" onclick="editarCampo('bairro')">Editar</button>
          <button id="salvar-beirro" style="display:none" onclick="salvarCampo('bairro')">Salvar</button>
        </div>
        <div>
          <span>Rua:</span>
          <span id="rua">Av. Paulista</span>
          <button id="edit-rua" onclick="editarCampo('rua')">Editar</button>
          <button id="salvar-rua" style="display:none" onclick="salvarCampo('rua')">Salvar</button>
        </div>
        <div>
          <span>Complemento:</span>
          <span id="complemento">''</span>
          <button id="edit-complemento" onclick="editarCampo('complemento')">Editar</button>
          <button id="salvar-complemento" style="display:none" onclick="salvarCampo('complemento')">Salvar</button>
        </div>
      </div>
      <script>
        function editarCampo(campo) {
          var elemento = document.getElementById(campo);
          var valorAntigo = elemento.innerText;
          elemento.innerHTML = '<input type="text" id="campo-editar" value="' + valorAntigo + '">';
          document.getElementById('edit-' + campo).style.display = 'none';
          document.getElementById('salvar-' + campo).style.display = 'inline';
        }

        function salvarCampo(campo) {
          var valorNovo = document.getElementById('campo-editar').value;
          document.getElementById(campo).innerHTML = valorNovo;
          document.getElementById('edit-' + campo).style.display = 'inline';
          document.getElementById('salvar-' + campo).style.display = 'none';
        }
      </script>

      <script>
        // Obtém a referência do botão e do elemento que irá conter a lista de conversas
        const btnAdicionarConversa = document.getElementById("adicionarConversa");
        const divConversas = document.getElementById("conversas");

        // Função para adicionar um novo item na lista de conversas
        function adicionarConversa() {
          // Cria um novo elemento div e define suas propriedades
          const novaConversa = document.createElement("div");
          novaConversa.classList.add("item");
          novaConversa.textContent = "Nova Conversa";

          // Adiciona o novo elemento div na lista de conversas
          divConversas.appendChild(novaConversa);
        }

        // Adiciona um listener de evento para o botão "Adicionar Conversa"
        btnAdicionarConversa.addEventListener("click", adicionarConversa);
      </script>
      <script>
        function goBack() {
          window.history.back();
        }
      </script>

      <script>
        // Seleciona os botões de voltar e avançar
        var btnPrev = document.getElementById("btn-prev");
        var btnNext = document.getElementById("btn-next");

        // Seleciona as seções de conteúdo
        var secoes = document.getElementsByClassName("secao");

        // Inicializa o estado atual da navegação
        var estadoAtual = 0;

        // Função para atualizar o estado da navegação
        function atualizarNavegacao(estado) {
          // Oculta todas as seções de conteúdo
          for (var i = 0; i < secoes.length; i++) {
            secoes[i].style.display = "none";
          }

          // Exibe a seção correspondente ao estado atual
          secoes[estado].style.display = "block";
        }

        // Função para avançar na navegação
        function avancar() {
          // Verifica se há um próximo estado na navegação
          if (estadoAtual < secoes.length - 1) {
            // Incrementa o estado atual
            estadoAtual++;

            // Adiciona uma nova entrada no histórico de navegação
            history.pushState({ estado: estadoAtual }, null, null);

            // Atualiza a navegação
            atualizarNavegacao(estadoAtual);
          }
        }

        // Função para voltar na navegação
        function voltar() {
          // Verifica se há um estado anterior na navegação
          if (estadoAtual > 0) {
            // Decrementa o estado atual
            estadoAtual--;

            // Remove a última entrada do histórico de navegação
            history.go(-1);

            // Atualiza a navegação
            atualizarNavegacao(estadoAtual);
          }
        }

        // Adiciona os eventos de clique nos
        const backButton = document.getElementById('backButton');

        backButton.addEventListener('click', function () {
          window.history.back();
        });

      </script>
    </div>
  </main>
</body>

</html>