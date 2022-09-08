-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Set-2021 às 16:32
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema de apontamento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apontamento`
--

CREATE TABLE `apontamento` (
  `id` int(11) NOT NULL,
  `nome_projeto` varchar(50) NOT NULL,
  `nome_tecnico` varchar(50) NOT NULL,
  `hora_dia` time NOT NULL,
  `at_data` date NOT NULL,
  `atividade` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `contato` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `id` int(11) NOT NULL,
  `nome_projeto` varchar(50) NOT NULL,
  `nome_cliente` varchar(50) NOT NULL,
  `total_horas` decimal(6,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnico`
--

CREATE TABLE `tecnico` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` char(60) NOT NULL,
  `situacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `apontamento`
--
ALTER TABLE `apontamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nome_projeto_fk` (`nome_projeto`),
  ADD KEY `nome_tecnico_fk` (`nome_tecnico`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nome` (`nome`);

--
-- Índices para tabela `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nome_cliente_fk` (`nome_cliente`),
  ADD KEY `nome_projeto` (`nome_projeto`);

--
-- Índices para tabela `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nome` (`nome`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `apontamento`
--
ALTER TABLE `apontamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `projeto`
--
ALTER TABLE `projeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tecnico`
--
ALTER TABLE `tecnico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `apontamento`
--
ALTER TABLE `apontamento`
  ADD CONSTRAINT `nome_projeto_fk` FOREIGN KEY (`nome_projeto`) REFERENCES `projeto` (`nome_projeto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nome_tecnico_fk` FOREIGN KEY (`nome_tecnico`) REFERENCES `tecnico` (`nome`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `projeto`
--
ALTER TABLE `projeto`
  ADD CONSTRAINT `nome_cliente_fk` FOREIGN KEY (`nome_cliente`) REFERENCES `cliente` (`nome`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
