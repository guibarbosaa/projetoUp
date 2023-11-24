-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/11/2023 às 16:57
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mysql`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(40) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `razao` varchar(140) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `email` varchar(140) NOT NULL,
  `nacionalidade` varchar(100) NOT NULL,
  `site` varchar(200) NOT NULL,
  `numero_funcionarios` varchar(10) NOT NULL,
  `valor_compra` varchar(100) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `logadouro` varchar(100) NOT NULL,
  `numero` int(100) NOT NULL,
  `uf` varchar(4) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `tipo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `razao`, `cnpj`, `telefone`, `email`, `nacionalidade`, `site`, `numero_funcionarios`, `valor_compra`, `cep`, `logadouro`, `numero`, `uf`, `cidade`, `complemento`, `tipo`) VALUES
(6, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente_funcionario`
--

CREATE TABLE `cliente_funcionario` (
  `id_func` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` int(11) NOT NULL,
  `data_nasc` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `nome_mae` varchar(100) NOT NULL,
  `nome_pai` varchar(100) NOT NULL,
  `agencia` varchar(100) NOT NULL,
  `local_trabalho` int(40) NOT NULL,
  `truno` varchar(20) NOT NULL,
  `satatus` varchar(20) NOT NULL,
  `rg` int(7) NOT NULL,
  `data_admicao` date NOT NULL,
  `conta_corerente` varchar(20) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `matricula` varchar(30) NOT NULL,
  `genero` varchar(12) NOT NULL,
  `id_clientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `colsuta_cliente`
--

CREATE TABLE `colsuta_cliente` (
  `id_consulta` int(40) NOT NULL,
  `tipo` varchar(140) NOT NULL,
  `data_ulti` date NOT NULL,
  `cliente` varchar(60) NOT NULL,
  `status` varchar(10) NOT NULL,
  `boleto` varchar(60) NOT NULL,
  `data_libera` date NOT NULL,
  `id_clientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `fazerpedido`
--

CREATE TABLE `fazerpedido` (
  `id` int(11) NOT NULL,
  `nome_empresa` varchar(140) NOT NULL,
  `valor` varchar(10) NOT NULL,
  `vale_transporte` varchar(10) NOT NULL,
  `vale_alimentacao` varchar(10) NOT NULL,
  `vale_refeicao` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `fazerpedido`
--

INSERT INTO `fazerpedido` (`id`, `nome_empresa`, `valor`, `vale_transporte`, `vale_alimentacao`, `vale_refeicao`) VALUES
(1, '', '', '', '', ''),
(2, '', 'a', 'a', 'a', 'a'),
(3, '', '45000', '30', '30', '30'),
(4, 'brasil', 'aaa', '30', '30', '30'),
(5, '', '', '', '', ''),
(6, '', '', '', '', ''),
(7, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `gerente`
--

CREATE TABLE `gerente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(140) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `gerente`
--

INSERT INTO `gerente` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'rogerio', 'rogerio@gmail.com', '456');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(140) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(140) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'text', 'text@gmail.com', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cliente_funcionario`
--
ALTER TABLE `cliente_funcionario`
  ADD PRIMARY KEY (`id_func`),
  ADD KEY `relação` (`id_clientes`);

--
-- Índices de tabela `colsuta_cliente`
--
ALTER TABLE `colsuta_cliente`
  ADD PRIMARY KEY (`id_consulta`),
  ADD KEY `id_clientes` (`id_clientes`);

--
-- Índices de tabela `fazerpedido`
--
ALTER TABLE `fazerpedido`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `gerente`
--
ALTER TABLE `gerente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `cliente_funcionario`
--
ALTER TABLE `cliente_funcionario`
  MODIFY `id_func` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `colsuta_cliente`
--
ALTER TABLE `colsuta_cliente`
  MODIFY `id_consulta` int(40) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fazerpedido`
--
ALTER TABLE `fazerpedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `gerente`
--
ALTER TABLE `gerente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(140) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `cliente_funcionario`
--
ALTER TABLE `cliente_funcionario`
  ADD CONSTRAINT `relação` FOREIGN KEY (`id_clientes`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `colsuta_cliente`
--
ALTER TABLE `colsuta_cliente`
  ADD CONSTRAINT `colsuta_cliente_ibfk_1` FOREIGN KEY (`id_clientes`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
