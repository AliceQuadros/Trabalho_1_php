-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 03/09/2019 às 19:29
-- Versão do servidor: 10.1.38-MariaDB
-- Versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `conCodig` int(11) NOT NULL COMMENT 'código',
  `conEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'e-mail',
  `conNome` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'nome',
  `conSobre` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'sobrenome',
  `conEstad` varchar(2) COLLATE utf8_unicode_ci NOT NULL COMMENT 'estado',
  `conCidad` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'cidade',
  `conDdd` varchar(3) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ddd',
  `conFone` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'telefone',
  `conFixo` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT 'fixo (1), cel (0)',
  `conMensa` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'mensagem',
  `conData` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'data e hora'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`conCodig`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `conCodig` int(11) NOT NULL AUTO_INCREMENT COMMENT 'código', AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
