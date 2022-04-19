-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Abr-2022 às 11:17
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `compradores`
--

DROP TABLE IF EXISTS `compradores`;
CREATE TABLE IF NOT EXISTS `compradores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `cpf` int(11) NOT NULL,
  `grupoderisco` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `endereco` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `cidade` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `estado` varchar(2) COLLATE utf8mb4_bin NOT NULL,
  `telefone` int(15) NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_bin NOT NULL,
  `senha` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `compradores`
--

INSERT INTO `compradores` (`id`, `nome`, `cpf`, `grupoderisco`, `endereco`, `cidade`, `estado`, `telefone`, `email`, `senha`) VALUES
(1, 'userum', 0, 'hipertenso', 'R. B 1000', 'SRS', 'MG', 359999999, 'teste@teste', '1111');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

DROP TABLE IF EXISTS `fornecedores`;
CREATE TABLE IF NOT EXISTS `fornecedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CNPJ` int(11) NOT NULL,
  `senha` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`id`, `CNPJ`, `senha`) VALUES
(1, 11, '1111');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(12) COLLATE utf8mb4_bin NOT NULL,
  `peso` varchar(16) COLLATE utf8mb4_bin NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `peso`, `valor`) VALUES
(1, 'alcoolfull', '60g', 6),
(2, 'alcooltop', '200g', 14),
(3, 'alcoolhappy', '400g', 28);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
