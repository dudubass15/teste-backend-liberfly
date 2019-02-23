-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 23/02/2019 às 01:04
-- Versão do servidor: 5.7.21-1
-- Versão do PHP: 7.2.4-1+b1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `liberfly`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `passagens`
--

CREATE TABLE `passagens` (
  `id` int(11) NOT NULL,
  `nome_passageiro` varchar(220) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `aeroporto_origem` varchar(220) NOT NULL,
  `aeroporto_destino` varchar(220) NOT NULL,
  `numero_voo` varchar(50) NOT NULL,
  `data_ida` varchar(100) NOT NULL,
  `data_volta` varchar(100) DEFAULT NULL,
  `criado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `passagens`
--

INSERT INTO `passagens` (`id`, `nome_passageiro`, `cpf`, `telefone`, `email`, `aeroporto_origem`, `aeroporto_destino`, `numero_voo`, `data_ida`, `data_volta`, `criado`) VALUES
(4, 'Carlos Eduardo Santos de Oliveira', '000.000.000-00', '(27) 99842-4596', 'carlos.contato00@gmail.com', 'VitÃ³ria', 'SÃ£o Paulo', '124578', '22/02/2019', '23/02/2019', '2019-02-22 23:40:12');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `passagens`
--
ALTER TABLE `passagens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `passagens`
--
ALTER TABLE `passagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
