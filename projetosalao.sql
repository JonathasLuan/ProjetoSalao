-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Jun-2023 às 08:23
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetosalao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `id_agendamento` int(11) NOT NULL,
  `id_cliente_fk` int(11) NOT NULL,
  `id_profissional_fk` int(11) NOT NULL,
  `id_servico_fk` int(11) NOT NULL,
  `nome_cliente` varchar(200) NOT NULL,
  `nome_profissional` varchar(200) NOT NULL,
  `data_atendimento` date NOT NULL,
  `data_agendamento` date NOT NULL,
  `horario` time NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `metodo_pagamento` varchar(200) NOT NULL,
  `id_local_fk` int(11) NOT NULL,
  `status_agend` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `caminho` varchar(100) NOT NULL,
  `data_upload` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `nome`, `caminho`, `data_upload`) VALUES
(1, 'scissors-badge-svgrepo-com.png', '', '2023-04-26 02:52:51'),
(2, 'barbearia.png', '', '2023-04-26 02:53:10'),
(3, 'maquiagem.jpg', '', '2023-04-26 05:07:23'),
(6, 'coloração.jpg', '', '2023-04-26 05:47:49'),
(15, 'wallpaper-mania.com_High_resolution_wallpaper_background_ID_77700257950.jpg', '', '2023-05-01 03:15:31'),
(16, 'gg.png', '', '2023-05-01 03:17:15'),
(17, 'githublogo.png', '', '2023-05-14 23:57:01'),
(18, 'githublogo.png', '', '2023-05-14 23:59:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `id_avaliacao` int(11) NOT NULL,
  `id_usuario_fk` int(11) NOT NULL,
  `data_aval` date DEFAULT NULL,
  `avaliacao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `barba`
--

CREATE TABLE `barba` (
  `id_barba` int(11) NOT NULL,
  `id_caract_fk` int(11) NOT NULL,
  `cor` char(100) DEFAULT NULL,
  `textura` char(100) DEFAULT NULL,
  `tamanho` varchar(100) DEFAULT NULL,
  `tratamento` varchar(200) DEFAULT NULL,
  `condicao` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cabelo`
--

CREATE TABLE `cabelo` (
  `id_cabelo` int(11) NOT NULL,
  `id_caract_fk` int(11) NOT NULL,
  `cor` char(100) DEFAULT NULL,
  `tipo` char(100) DEFAULT NULL,
  `textura` char(100) DEFAULT NULL,
  `tamanho` varchar(100) DEFAULT NULL,
  `tratamento` varchar(200) DEFAULT NULL,
  `condicao` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cabelo`
--

INSERT INTO `cabelo` (`id_cabelo`, `id_caract_fk`, `cor`, `tipo`, `textura`, `tamanho`, `tratamento`, `condicao`) VALUES
(1, 1, NULL, 'Liso', NULL, 'Longo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `caracteristica`
--

CREATE TABLE `caracteristica` (
  `id_caract` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `subcategoria` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `caracteristica`
--

INSERT INTO `caracteristica` (`id_caract`, `nome`, `categoria`, `subcategoria`) VALUES
(1, 'cabelo', 'cabeleireiro', 'estética'),
(2, 'pele', 'maquiagem', 'estética'),
(3, 'unhas', 'maquiagem', 'estética'),
(4, 'rosto', 'maquiagem', 'estética');

-- --------------------------------------------------------

--
-- Estrutura da tabela `caracteristicas`
--

CREATE TABLE `caracteristicas` (
  `id_caracts` int(50) NOT NULL,
  `cabelo` varchar(50) NOT NULL,
  `pele` varchar(50) NOT NULL,
  `unhas` varchar(50) NOT NULL,
  `rosto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `id_usuario_fk` int(11) NOT NULL,
  `id_local_fk` int(11) NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `bio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `id_usuario_fk` int(11) NOT NULL,
  `data_coment` date NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `configuracoes`
--

CREATE TABLE `configuracoes` (
  `id_config` int(11) NOT NULL,
  `id_perfil_fk` int(11) NOT NULL,
  `id_conta_fk` int(11) NOT NULL,
  `id_usuario_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `conta`
--

CREATE TABLE `conta` (
  `id_conta` int(11) NOT NULL,
  `id_usuario_fk` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `emailreserva` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `conversa`
--

CREATE TABLE `conversa` (
  `id_conversa` int(11) NOT NULL,
  `id_cliente_fk` int(11) NOT NULL,
  `id_profissional_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `id_endereco` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `estado` int(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `complemento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id_endereco`, `id_usuario`, `estado`, `cidade`, `bairro`, `rua`, `numero`, `complemento`) VALUES
(1, 1, 0, 'Diadema', 'Campanário', 'Gema', '205', 'Jardim São Judas'),
(2, 2, 0, 'Diadema', 'Campanário', 'Gema', '205', ''),
(3, 9, 0, 'Diadema', 'Campanário', 'Gema', '205', ''),
(20, 34, 0, 'Diadema', 'Campanário', 'Gema', '205', 'Casa do Metaforando'),
(21, 36, 0, 'Umacidade', 'Umbairro', 'Umarua', '666', 'Longe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade`
--

CREATE TABLE `especialidade` (
  `id_especialidade` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `descricao` text NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `subcategoria` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `especialidade`
--

INSERT INTO `especialidade` (`id_especialidade`, `nome`, `descricao`, `categoria`, `subcategoria`) VALUES
(1, 'Cabeleireiro', 'Todos os procedimentos envolvidos nos cuidados dos cabelos.', 'cabelos', 'cuidados');

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade_profissional`
--

CREATE TABLE `especialidade_profissional` (
  `id_especialidade_profissional` int(11) NOT NULL,
  `id_especialidade_fk` int(11) DEFAULT NULL,
  `id_profissional_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fatura`
--

CREATE TABLE `fatura` (
  `id_fatura` int(11) NOT NULL,
  `id_transacao_fk` int(11) NOT NULL,
  `id_cliente_fk` int(11) NOT NULL,
  `id_profissional_fk` int(11) NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `data_criacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `info`
--

CREATE TABLE `info` (
  `id_info` int(11) NOT NULL,
  `id_usuario_fk` int(11) NOT NULL,
  `id_link_fk` int(11) DEFAULT NULL,
  `id_caract_fk` int(11) DEFAULT NULL,
  `nomeperfil` varchar(200) NOT NULL,
  `foto` blob NOT NULL,
  `tipo_user` varchar(100) NOT NULL,
  `sobre` text DEFAULT NULL,
  `id_preferencia_fk` int(11) NOT NULL,
  `notificacao` char(20) DEFAULT NULL,
  `visibilidade` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `links`
--

CREATE TABLE `links` (
  `id_link` int(11) NOT NULL,
  `pagina` varchar(100) DEFAULT NULL,
  `endereco` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `local`
--

CREATE TABLE `local` (
  `id_local` int(11) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `cep` varchar(30) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `tipo_local` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id_mensagem` int(11) NOT NULL,
  `id_conversa_fk` int(11) NOT NULL,
  `id_usuario_fk` int(11) NOT NULL,
  `remetente` varchar(100) NOT NULL,
  `destinatario` varchar(100) NOT NULL,
  `conteudo` text NOT NULL,
  `tipo_mens` varchar(100) NOT NULL,
  `status_mens` varchar(100) NOT NULL,
  `envio` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL,
  `conteudo` text NOT NULL,
  `remetente` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `conteudo`, `remetente`, `date_time`) VALUES
(1, 'Simulação de registro.', '', '2023-05-28 23:25:03'),
(2, '\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"', '', '2023-05-28 23:25:03'),
(3, 'Olá, mundo.', '', '2023-05-28 23:25:03'),
(4, 'Sumimasen deshita', '', '2023-05-28 23:25:03'),
(5, 'Esse é um exemplo de mensagem para testar a exibição e o padding do texto, bem como o encaixe das letras no quadro.', '', '2023-05-28 23:25:03'),
(6, 'Teste de texto dentro do chat-displayer.', '', '2023-05-28 23:25:03'),
(11, 'Testando a inserção de id de usuário na mensagem.', 'cleusu.pires@gmail.com', '2023-05-28 23:25:03'),
(13, '28/05/2023', 'cleusu.pires@gmail.com', '2023-05-28 23:25:03'),
(14, 'Teste de inserção de id.', '9', '2023-06-03 21:41:37'),
(15, 'Teste de id para Clésu Pires', '32', '2023-06-03 22:18:44'),
(16, 'Mensagem da Neide.', '33', '2023-06-03 22:41:35'),
(17, 'Oi, eu sou a Patrícia.', '1', '2023-06-03 23:11:23'),
(18, 'Oi, eu sou o Lucas.', '30', '2023-06-06 14:44:20'),
(19, 'Eu sou o Victor Santos.', '34', '2023-06-10 05:40:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `midia`
--

CREATE TABLE `midia` (
  `id_midia` int(11) NOT NULL,
  `id_pagina_fk` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `src` varchar(500) DEFAULT NULL,
  `tamanho` decimal(10,0) NOT NULL,
  `modificacao` datetime NOT NULL,
  `upload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina`
--

CREATE TABLE `pagina` (
  `id_pagina` int(11) NOT NULL,
  `url` varchar(200) NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pagina`
--

INSERT INTO `pagina` (`id_pagina`, `url`, `titulo`) VALUES
(1, 'sobre.php', 'Sobre'),
(3, 'home.php', 'Home'),
(4, 'perfil.php', 'Perfil'),
(5, 'contato.php', 'Contato'),
(6, 'serviços.php', 'Serviços'),
(7, 'cabeleireiro.php', 'Cabeleireiro'),
(8, 'coloração.php', 'Coloração'),
(9, 'pedicure.php', 'Pedicure'),
(10, 'manicure.php', 'Manicure'),
(11, 'barbeiro.php', 'Barbeiro'),
(12, 'principal.php', 'Principal'),
(13, 'conversas.php', 'Conversas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_usuario_fk` int(11) NOT NULL,
  `id_servico_fk` int(11) NOT NULL,
  `id_especialidade_fk` int(11) NOT NULL,
  `outra` varchar(100) DEFAULT NULL,
  `outro` varchar(100) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `data_pedido` date NOT NULL,
  `hora` time DEFAULT NULL,
  `cidade` varchar(50) NOT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `especialidade` varchar(50) NOT NULL,
  `outra` varchar(50) NOT NULL,
  `servico` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `outro` int(50) NOT NULL,
  `descricao` text NOT NULL,
  `data_pedido` date NOT NULL,
  `hora` time(4) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `especialidade`, `outra`, `servico`, `nome`, `outro`, `descricao`, `data_pedido`, `hora`, `cidade`, `bairro`, `rua`) VALUES
(2, 'barbeiro', '', '', '', 0, 'Raspar a barba.', '2023-05-21', '00:00:00.0000', '', '', ''),
(3, 'maquiador', '', '', '', 0, 'Maquiagem.', '2023-05-23', '00:00:00.0000', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pele`
--

CREATE TABLE `pele` (
  `id_pele` int(11) NOT NULL,
  `id_caract_fk` int(11) NOT NULL,
  `cor` char(100) DEFAULT NULL,
  `etnia` char(100) DEFAULT NULL,
  `textura` char(100) DEFAULT NULL,
  `tratamento` varchar(200) DEFAULT NULL,
  `condicao` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `id_usuario_fk` int(11) NOT NULL,
  `tipo` enum('cliente','profissional') NOT NULL,
  `data_criacao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissional`
--

CREATE TABLE `profissional` (
  `id_profissional` int(11) NOT NULL,
  `id_usuario_fk` int(11) NOT NULL,
  `id_local_fk` int(11) NOT NULL,
  `id_especialidade_fk` int(11) NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `bio` text NOT NULL,
  `experiencia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rosto`
--

CREATE TABLE `rosto` (
  `id_rosto` int(11) NOT NULL,
  `id_caract_fk` int(11) NOT NULL,
  `formato` varchar(100) DEFAULT NULL,
  `textura` char(100) DEFAULT NULL,
  `tamanho` varchar(100) DEFAULT NULL,
  `condicao` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id_servico` int(11) NOT NULL,
  `id_especialidade_fk` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `descricao` text DEFAULT NULL,
  `preco` decimal(10,0) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `subcategoria` varchar(100) DEFAULT NULL,
  `tempo` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id_servico`, `id_especialidade_fk`, `nome`, `descricao`, `preco`, `categoria`, `subcategoria`, `tempo`) VALUES
(1, 1, 'Corte', 'Envolve o aparamento do comprimento dos fios para atender às metricas e desejos estéticos e/ou funcionais do cliente.', '0', 'cabelos', 'cuidados', '00:00:00'),
(9, 1, 'Corte', 'nhmhm,k', '25', 'Cabelo', 'Estética', '00:00:30'),
(13, 1, '', 'Tinturab simples em azul.', '0', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos_profissionais`
--

CREATE TABLE `servicos_profissionais` (
  `id_servico_profissional` int(11) NOT NULL,
  `id_profissional_fk` int(11) NOT NULL,
  `id_servico_fk` int(11) NOT NULL,
  `valores` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `transacao`
--

CREATE TABLE `transacao` (
  `id_transacao` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `data_criacao` date NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `unhas`
--

CREATE TABLE `unhas` (
  `id_unhas` int(11) NOT NULL,
  `id_caract_fk` int(11) NOT NULL,
  `cor` char(100) DEFAULT NULL,
  `tipo` char(100) DEFAULT NULL,
  `tamanho` varchar(100) DEFAULT NULL,
  `tratamento` varchar(200) DEFAULT NULL,
  `condicao` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuário`
--

CREATE TABLE `usuário` (
  `id_usuario` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `sobrenome` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `cor` varchar(50) NOT NULL,
  `bio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuário`
--

INSERT INTO `usuário` (`id_usuario`, `tipo`, `nome`, `sobrenome`, `email`, `senha`, `telefone`, `genero`, `cor`, `bio`) VALUES
(1, 'cliente', 'Patrícia Lima de', 'Souza', 'patricia_souza@hotmail.com', 'senha123', '11900000000', 'feminino', 'light', ''),
(2, 'cliente', 'Victor', 'Hugo', 'victor_hugo@hotmail.com', 'senhateste', '11954435948', 'masculino', 'dark', ''),
(9, 'profissional', 'Jonathas Luan', 'Cavalcanti Araujo', 'jonathas_luan.17@hotmail.com', 'senhateste', '11954435948', 'masculino', 'light', ''),
(10, 'profissional', 'Maria', 'Lúcia', 'maria_lucia@hotmail.com', 'senhateste', '11954435948', 'feminino', '', ''),
(11, 'profissional', 'Jão', 'Pedro', 'joão_pedro@hotmail.com', 'senhateste', '11954435948', 'masculino', '', ''),
(30, 'profissional', 'Lucas', 'Lima', 'lucas_lima@hotmail.com', 'senhateste', '11954435948', 'masculino', '', 'Olá, eu sou o Lucas Lima.'),
(32, 'cliente', 'Cléusu', 'Pires', 'cleusu.pires@gmail.com', 'senhateste', '11954435948', 'masculino', '', 'Olá, eu sou o Cléusu Pires.'),
(33, 'cliente', 'Neide', 'Nunes', 'neide.nunes@gmail.com', 'senhateste', '11954435948', 'feminino', '', ''),
(34, 'cliente', 'Victor', 'Santos', 'victor_santos@hotmail.com', 'senhateste', '11954435948', 'masculino', '', 'Olá, eu sou o Vitor Metaforando, e você está no maior canal de linguagem corporal da galáxia.'),
(35, '', '', NULL, '', '', '', NULL, '', ''),
(36, 'profissional', 'Jair Messias', 'Lula da Silva', 'jair_lula@hotmail.com', 'senhateste', '11954435948', 'masculino', '', 'Companheiros e companheiras, sobre esta questão, pergunta Paulo Guedes.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`id_agendamento`),
  ADD KEY `id_cliente_fk` (`id_cliente_fk`),
  ADD KEY `id_profissional_fk` (`id_profissional_fk`),
  ADD KEY `id_servico_fk` (`id_servico_fk`),
  ADD KEY `id_local_fk` (`id_local_fk`);

--
-- Índices para tabela `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`id_avaliacao`),
  ADD KEY `id_usuario_fk` (`id_usuario_fk`);

--
-- Índices para tabela `barba`
--
ALTER TABLE `barba`
  ADD PRIMARY KEY (`id_barba`),
  ADD KEY `id_caract_fk` (`id_caract_fk`);

--
-- Índices para tabela `cabelo`
--
ALTER TABLE `cabelo`
  ADD PRIMARY KEY (`id_cabelo`),
  ADD KEY `id_caract_fk` (`id_caract_fk`);

--
-- Índices para tabela `caracteristica`
--
ALTER TABLE `caracteristica`
  ADD PRIMARY KEY (`id_caract`);

--
-- Índices para tabela `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`id_caracts`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_usuario_fk` (`id_usuario_fk`),
  ADD KEY `id_local_fk` (`id_local_fk`);

--
-- Índices para tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_usuario_fk` (`id_usuario_fk`);

--
-- Índices para tabela `configuracoes`
--
ALTER TABLE `configuracoes`
  ADD PRIMARY KEY (`id_config`),
  ADD KEY `id_perfil_fk` (`id_perfil_fk`),
  ADD KEY `id_conta_fk` (`id_conta_fk`),
  ADD KEY `id_usuario_fk` (`id_usuario_fk`);

--
-- Índices para tabela `conta`
--
ALTER TABLE `conta`
  ADD PRIMARY KEY (`id_conta`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `emailreserva` (`emailreserva`),
  ADD KEY `id_usuario_fk` (`id_usuario_fk`);

--
-- Índices para tabela `conversa`
--
ALTER TABLE `conversa`
  ADD PRIMARY KEY (`id_conversa`),
  ADD KEY `id_cliente_fk` (`id_cliente_fk`),
  ADD KEY `id_profissional_fk` (`id_profissional_fk`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id_endereco`),
  ADD KEY `id_usuario_fk` (`id_usuario`);

--
-- Índices para tabela `especialidade`
--
ALTER TABLE `especialidade`
  ADD PRIMARY KEY (`id_especialidade`);

--
-- Índices para tabela `especialidade_profissional`
--
ALTER TABLE `especialidade_profissional`
  ADD PRIMARY KEY (`id_especialidade_profissional`),
  ADD KEY `id_especialidade_fk` (`id_especialidade_fk`),
  ADD KEY `id_profissional_fk` (`id_profissional_fk`);

--
-- Índices para tabela `fatura`
--
ALTER TABLE `fatura`
  ADD PRIMARY KEY (`id_fatura`),
  ADD KEY `id_transacao_fk` (`id_transacao_fk`),
  ADD KEY `id_cliente_fk` (`id_cliente_fk`),
  ADD KEY `id_profissional_fk` (`id_profissional_fk`);

--
-- Índices para tabela `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id_info`),
  ADD KEY `id_link_fk` (`id_link_fk`),
  ADD KEY `id_caract_fk` (`id_caract_fk`),
  ADD KEY `id_usuario_fk` (`id_usuario_fk`);

--
-- Índices para tabela `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id_link`);

--
-- Índices para tabela `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`id_local`);

--
-- Índices para tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id_mensagem`),
  ADD KEY `id_usuario_fk` (`id_usuario_fk`),
  ADD KEY `id_conversa_fk` (`id_conversa_fk`);

--
-- Índices para tabela `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `midia`
--
ALTER TABLE `midia`
  ADD PRIMARY KEY (`id_midia`),
  ADD KEY `id_pagina_fk` (`id_pagina_fk`);

--
-- Índices para tabela `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`id_pagina`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_usuario_fk` (`id_usuario_fk`),
  ADD KEY `id_servico_fk` (`id_servico_fk`),
  ADD KEY `id_especialidade_fk` (`id_especialidade_fk`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pele`
--
ALTER TABLE `pele`
  ADD PRIMARY KEY (`id_pele`),
  ADD KEY `id_caract_fk` (`id_caract_fk`);

--
-- Índices para tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`),
  ADD KEY `id_usuario_fk` (`id_usuario_fk`);

--
-- Índices para tabela `profissional`
--
ALTER TABLE `profissional`
  ADD PRIMARY KEY (`id_profissional`),
  ADD KEY `id_usuario_fk` (`id_usuario_fk`),
  ADD KEY `id_local_fk` (`id_local_fk`),
  ADD KEY `id_especialidade_fk` (`id_especialidade_fk`);

--
-- Índices para tabela `rosto`
--
ALTER TABLE `rosto`
  ADD PRIMARY KEY (`id_rosto`),
  ADD KEY `id_caract_fk` (`id_caract_fk`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id_servico`),
  ADD KEY `id_especialidade_fk` (`id_especialidade_fk`);

--
-- Índices para tabela `servicos_profissionais`
--
ALTER TABLE `servicos_profissionais`
  ADD PRIMARY KEY (`id_servico_profissional`),
  ADD KEY `id_profissional_fk` (`id_profissional_fk`),
  ADD KEY `id_servico_fk` (`id_servico_fk`);

--
-- Índices para tabela `transacao`
--
ALTER TABLE `transacao`
  ADD PRIMARY KEY (`id_transacao`);

--
-- Índices para tabela `unhas`
--
ALTER TABLE `unhas`
  ADD PRIMARY KEY (`id_unhas`),
  ADD KEY `id_caract_fk` (`id_caract_fk`);

--
-- Índices para tabela `usuário`
--
ALTER TABLE `usuário`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `id_agendamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `id_avaliacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `barba`
--
ALTER TABLE `barba`
  MODIFY `id_barba` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cabelo`
--
ALTER TABLE `cabelo`
  MODIFY `id_cabelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `caracteristica`
--
ALTER TABLE `caracteristica`
  MODIFY `id_caract` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `id_caracts` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `configuracoes`
--
ALTER TABLE `configuracoes`
  MODIFY `id_config` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `conta`
--
ALTER TABLE `conta`
  MODIFY `id_conta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `conversa`
--
ALTER TABLE `conversa`
  MODIFY `id_conversa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `especialidade`
--
ALTER TABLE `especialidade`
  MODIFY `id_especialidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `especialidade_profissional`
--
ALTER TABLE `especialidade_profissional`
  MODIFY `id_especialidade_profissional` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fatura`
--
ALTER TABLE `fatura`
  MODIFY `id_fatura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `info`
--
ALTER TABLE `info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `links`
--
ALTER TABLE `links`
  MODIFY `id_link` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id_mensagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `midia`
--
ALTER TABLE `midia`
  MODIFY `id_midia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pagina`
--
ALTER TABLE `pagina`
  MODIFY `id_pagina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `pele`
--
ALTER TABLE `pele`
  MODIFY `id_pele` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `profissional`
--
ALTER TABLE `profissional`
  MODIFY `id_profissional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `rosto`
--
ALTER TABLE `rosto`
  MODIFY `id_rosto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `servicos_profissionais`
--
ALTER TABLE `servicos_profissionais`
  MODIFY `id_servico_profissional` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `transacao`
--
ALTER TABLE `transacao`
  MODIFY `id_transacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `unhas`
--
ALTER TABLE `unhas`
  MODIFY `id_unhas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuário`
--
ALTER TABLE `usuário`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD CONSTRAINT `agendamento_ibfk_1` FOREIGN KEY (`id_cliente_fk`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `agendamento_ibfk_2` FOREIGN KEY (`id_profissional_fk`) REFERENCES `profissional` (`id_profissional`),
  ADD CONSTRAINT `agendamento_ibfk_3` FOREIGN KEY (`id_servico_fk`) REFERENCES `servico` (`id_servico`),
  ADD CONSTRAINT `agendamento_ibfk_4` FOREIGN KEY (`id_local_fk`) REFERENCES `local` (`id_local`);

--
-- Limitadores para a tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD CONSTRAINT `avaliacao_ibfk_1` FOREIGN KEY (`id_usuario_fk`) REFERENCES `usuário` (`id_usuario`);

--
-- Limitadores para a tabela `barba`
--
ALTER TABLE `barba`
  ADD CONSTRAINT `barba_ibfk_1` FOREIGN KEY (`id_caract_fk`) REFERENCES `caracteristica` (`id_caract`);

--
-- Limitadores para a tabela `cabelo`
--
ALTER TABLE `cabelo`
  ADD CONSTRAINT `cabelo_ibfk_1` FOREIGN KEY (`id_caract_fk`) REFERENCES `caracteristica` (`id_caract`);

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_usuario_fk`) REFERENCES `usuário` (`id_usuario`),
  ADD CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`id_local_fk`) REFERENCES `local` (`id_local`);

--
-- Limitadores para a tabela `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_usuario_fk`) REFERENCES `usuário` (`id_usuario`);

--
-- Limitadores para a tabela `configuracoes`
--
ALTER TABLE `configuracoes`
  ADD CONSTRAINT `configuracoes_ibfk_1` FOREIGN KEY (`id_perfil_fk`) REFERENCES `perfil` (`id_perfil`),
  ADD CONSTRAINT `configuracoes_ibfk_2` FOREIGN KEY (`id_conta_fk`) REFERENCES `conta` (`id_conta`),
  ADD CONSTRAINT `configuracoes_ibfk_3` FOREIGN KEY (`id_usuario_fk`) REFERENCES `usuário` (`id_usuario`);

--
-- Limitadores para a tabela `conta`
--
ALTER TABLE `conta`
  ADD CONSTRAINT `conta_ibfk_1` FOREIGN KEY (`id_usuario_fk`) REFERENCES `usuário` (`id_usuario`);

--
-- Limitadores para a tabela `conversa`
--
ALTER TABLE `conversa`
  ADD CONSTRAINT `conversa_ibfk_1` FOREIGN KEY (`id_cliente_fk`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `conversa_ibfk_2` FOREIGN KEY (`id_profissional_fk`) REFERENCES `profissional` (`id_profissional`);

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `id_usuario_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuário` (`id_usuario`);

--
-- Limitadores para a tabela `especialidade_profissional`
--
ALTER TABLE `especialidade_profissional`
  ADD CONSTRAINT `especialidade_profissional_ibfk_1` FOREIGN KEY (`id_especialidade_fk`) REFERENCES `especialidade` (`id_especialidade`),
  ADD CONSTRAINT `especialidade_profissional_ibfk_2` FOREIGN KEY (`id_profissional_fk`) REFERENCES `profissional` (`id_profissional`);

--
-- Limitadores para a tabela `fatura`
--
ALTER TABLE `fatura`
  ADD CONSTRAINT `fatura_ibfk_1` FOREIGN KEY (`id_transacao_fk`) REFERENCES `transacao` (`id_transacao`),
  ADD CONSTRAINT `fatura_ibfk_2` FOREIGN KEY (`id_cliente_fk`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `fatura_ibfk_3` FOREIGN KEY (`id_profissional_fk`) REFERENCES `profissional` (`id_profissional`);

--
-- Limitadores para a tabela `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`id_link_fk`) REFERENCES `links` (`id_link`),
  ADD CONSTRAINT `info_ibfk_2` FOREIGN KEY (`id_caract_fk`) REFERENCES `caracteristica` (`id_caract`),
  ADD CONSTRAINT `info_ibfk_3` FOREIGN KEY (`id_usuario_fk`) REFERENCES `usuário` (`id_usuario`);

--
-- Limitadores para a tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD CONSTRAINT `mensagem_ibfk_1` FOREIGN KEY (`id_usuario_fk`) REFERENCES `usuário` (`id_usuario`),
  ADD CONSTRAINT `mensagem_ibfk_2` FOREIGN KEY (`id_conversa_fk`) REFERENCES `conversa` (`id_conversa`);

--
-- Limitadores para a tabela `midia`
--
ALTER TABLE `midia`
  ADD CONSTRAINT `midia_ibfk_1` FOREIGN KEY (`id_pagina_fk`) REFERENCES `pagina` (`id_pagina`);

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_usuario_fk`) REFERENCES `usuário` (`id_usuario`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`id_servico_fk`) REFERENCES `servico` (`id_servico`),
  ADD CONSTRAINT `pedido_ibfk_3` FOREIGN KEY (`id_especialidade_fk`) REFERENCES `especialidade` (`id_especialidade`);

--
-- Limitadores para a tabela `pele`
--
ALTER TABLE `pele`
  ADD CONSTRAINT `pele_ibfk_1` FOREIGN KEY (`id_caract_fk`) REFERENCES `caracteristica` (`id_caract`);

--
-- Limitadores para a tabela `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`id_usuario_fk`) REFERENCES `usuário` (`id_usuario`);

--
-- Limitadores para a tabela `profissional`
--
ALTER TABLE `profissional`
  ADD CONSTRAINT `profissional_ibfk_1` FOREIGN KEY (`id_usuario_fk`) REFERENCES `usuário` (`id_usuario`),
  ADD CONSTRAINT `profissional_ibfk_2` FOREIGN KEY (`id_local_fk`) REFERENCES `local` (`id_local`),
  ADD CONSTRAINT `profissional_ibfk_3` FOREIGN KEY (`id_especialidade_fk`) REFERENCES `especialidade` (`id_especialidade`);

--
-- Limitadores para a tabela `rosto`
--
ALTER TABLE `rosto`
  ADD CONSTRAINT `rosto_ibfk_1` FOREIGN KEY (`id_caract_fk`) REFERENCES `caracteristica` (`id_caract`);

--
-- Limitadores para a tabela `servico`
--
ALTER TABLE `servico`
  ADD CONSTRAINT `servico_ibfk_1` FOREIGN KEY (`id_especialidade_fk`) REFERENCES `especialidade` (`id_especialidade`);

--
-- Limitadores para a tabela `servicos_profissionais`
--
ALTER TABLE `servicos_profissionais`
  ADD CONSTRAINT `servicos_profissionais_ibfk_1` FOREIGN KEY (`id_profissional_fk`) REFERENCES `profissional` (`id_profissional`),
  ADD CONSTRAINT `servicos_profissionais_ibfk_2` FOREIGN KEY (`id_servico_fk`) REFERENCES `servico` (`id_servico`);

--
-- Limitadores para a tabela `unhas`
--
ALTER TABLE `unhas`
  ADD CONSTRAINT `unhas_ibfk_1` FOREIGN KEY (`id_caract_fk`) REFERENCES `caracteristica` (`id_caract`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
