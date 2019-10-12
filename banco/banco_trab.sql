-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Out-2019 às 23:28
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco_trab`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigo`
--

CREATE TABLE `artigo` (
  `artCodig` int(11) NOT NULL COMMENT 'Código',
  `artTitul` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Título',
  `artTexto` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Texto',
  `artImage` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Imagem',
  `artImpos` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'E' COMMENT 'E=à esquerda do texto, D=à direita do texto',
  `artData` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `artigo`
--

INSERT INTO `artigo` (`artCodig`, `artTitul`, `artTexto`, `artImage`, `artImpos`, `artData`) VALUES
(39, 'plopl', 'okoko', '39.jpeg', 'e', '2019-10-12 19:34:09'),
(40, 'plopl', 'okoko', '40.jpeg', '', '2019-10-12 19:34:38'),
(41, 'vo mata o vini', 'VO TE AZAZINA ', '41.jpeg', 'E', '2019-10-12 19:48:30'),
(42, 'plopl', 'okoko', '42.jpg', '', '2019-10-12 20:05:51');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `conNome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `conEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `conFone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conTexto` text COLLATE utf8_unicode_ci NOT NULL,
  `conCodig` int(11) NOT NULL,
  `conSobre` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artigo`
--
ALTER TABLE `artigo`
  ADD PRIMARY KEY (`artCodig`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`conCodig`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artigo`
--
ALTER TABLE `artigo`
  MODIFY `artCodig` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código', AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `conCodig` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
