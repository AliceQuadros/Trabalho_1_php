-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Out-2019 às 02:10
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
  `artImage` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Imagem',
  `artImpos` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'E' COMMENT 'E=à esquerda do texto, D=à direita do texto',
  `artData` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `artigo`
--

INSERT INTO `artigo` (`artCodig`, `artTitul`, `artTexto`, `artImage`, `artImpos`, `artData`) VALUES
(51, 'plopl', 'ojhopihi', NULL, '', '2019-10-13 22:17:40'),
(52, 'plopl', 'asjozxjaspodc', '52.png', 'e', '2019-10-13 23:01:52'),
(53, 'plopl', 'jjsopajsdopas', '53.jpeg', 'E', '2019-10-14 00:06:13');

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
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`conNome`, `conEmail`, `conFone`, `conTexto`, `conCodig`, `conSobre`) VALUES
('SILVIA ELENA VIEIRA', 'alicequadros63@gmail.com', '53991076000', 'sdsadsdadsaasdads', 6, 'SILVA'),
('', '', '', '', 7, ''),
('', '', '', '', 8, ''),
('', '', '', '', 9, ''),
('', '', '', '', 10, ''),
('', '', '', '', 11, ''),
('', '', '', '', 12, ''),
('', '', '', '', 13, ''),
('', '', '', '', 14, ''),
('', '', '', '', 15, ''),
('SILVIA ELENA VIEIRA', 'alicequadros63@gmail.com', '53991076000', '', 16, 'SILVA'),
('Isabela', 'ismattos3@hotmail.com', '', '', 17, 'Mattos'),
('jhghj', '', '', '', 18, 'hgjgjhjhggjh'),
('SILVIA ELENA VIEIRA', 'alicequadros63@gmail.com', '53991076000', '', 19, 'SILVA'),
('SILVIA ELENA VIEIRA', 'alicequadros63@gmail.com', '53991076000', 'sdasdsadasdasd', 20, 'SILVA'),
('SILVIA ELENA VIEIRA', 'alicequadros63@gmail.com', '53991076000', 'ULTIMA', 21, 'SILVA');

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
  MODIFY `artCodig` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código', AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `conCodig` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
