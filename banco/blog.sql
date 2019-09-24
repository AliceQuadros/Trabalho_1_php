-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 10/04/2019 às 15:37
-- Versão do servidor: 10.1.37-MariaDB
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
-- Banco de dados: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE `posts` (
  `cdpost` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `resumo` text NOT NULL,
  `texto` text NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `posicao` varchar(5) NOT NULL DEFAULT 'right',
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `posts`
--

INSERT INTO `posts` (`cdpost`, `titulo`, `resumo`, `texto`, `imagem`, `posicao`, `data`) VALUES
(1, 'Teste sistema', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet ullamcorper augue. Etiam eu sollicitudin dui. In non vehicula libero. Praesent justo dui, blandit id tempor varius, luctus ut erat. Etiam pellentesque vulputate dui ut elementum. Quisque vitae euismod ante. Suspendisse dui tortor, sagittis vitae nisi a, tristique luctus dolor. Proin pretium mi a fermentum condimentum. Vestibulum quis ante ut mauris sodales tempus vestibulum non eros. Fusce id leo a metus ultricies lacinia. Curabitur egestas mi quis est pulvinar, et tincidunt diam volutpat. Aliquam orci orci, vehicula volutpat ex in, elementum placerat diam. Suspendisse rutrum ultrices libero. Pellentesque egestas leo sit amet urna consectetur, ut placerat erat tempus. Mauris posuere metus sed ex consectetur, cursus sagittis augue porttitor. Suspendisse magna ante, egestas id volutpat a, ornare vitae orci.\r\n\r\nPellentesque massa massa, imperdiet vel odio vel, feugiat varius odio. Nunc magna eros, cursus at velit non, hendrerit finibus leo. Proin id fringilla nisl, eu dapibus enim. Donec pellentesque gravida posuere. Sed in sollicitudin sapien. Quisque finibus est a mi ullamcorper accumsan. Quisque interdum mauris vel velit consectetur, in dictum mauris pharetra.\r\n\r\nNullam sed metus metus. Praesent non mauris fermentum, lacinia nisl eu, placerat ipsum. Cras porttitor lectus a augue aliquet, quis auctor enim bibendum. Proin dapibus maximus pretium. Vivamus dignissim accumsan augue, nec tempor urna vulputate vitae. Nulla facilisi. Maecenas est libero, egestas sit amet dolor non, pellentesque iaculis ipsum.\r\n\r\nNulla imperdiet orci quis magna semper imperdiet. Cras id ante consequat, fringilla ipsum vel, molestie sem. Aenean non velit aliquam, lacinia ex ac, venenatis nulla. Quisque vitae consequat augue, non auctor ante. Vestibulum non placerat nibh. Integer posuere tempus consequat. Sed vehicula ullamcorper tellus. Praesent consectetur ligula et pellentesque dignissim.\r\n\r\nProin ac fringilla ex, at blandit nulla. Donec eu mauris lobortis, consequat leo ut, pellentesque ex. In enim dolor, varius ac mauris quis, condimentum eleifend libero. Cras ullamcorper tellus nec est eleifend, vitae consectetur est vulputate. Etiam mi ex, accumsan vel eleifend id, fringilla eget libero. Mauris aliquam gravida efficitur. Praesent finibus sagittis nunc. Morbi erat urna, dapibus in finibus ac, pellentesque sed tellus. Integer feugiat, ipsum non consectetur fringilla, tortor nunc tincidunt arcu, in vehicula enim metus vel leo. Mauris euismod facilisis dignissim. Aliquam sit amet ex magna. Pellentesque mollis aliquam metus quis aliquet. Sed congue quam sit amet nulla dapibus, a volutpat ligula feugiat. ', 'fotinho.jpg', 'right', '2019-04-10'),
(2, 'Lorem lorem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet ullamcorper augue. Etiam eu sollicitudin dui. In non vehicula libero. Praesent justo dui, blandit id tempor varius, luctus ut erat. Etiam pellentesque', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet ullamcorper augue. Etiam eu sollicitudin dui. In non vehicula libero. Praesent justo dui, blandit id tempor varius, luctus ut erat. Etiam pellentesque vulputate dui ut elementum. Quisque vitae euismod ante. Suspendisse dui tortor, sagittis vitae nisi a, tristique luctus dolor. Proin pretium mi a fermentum condimentum. Vestibulum quis ante ut mauris sodales tempus vestibulum non eros. Fusce id leo a metus ultricies lacinia. Curabitur egestas mi quis est pulvinar, et tincidunt diam volutpat. Aliquam orci orci, vehicula volutpat ex in, elementum placerat diam. Suspendisse rutrum ultrices libero. Pellentesque egestas leo sit amet urna consectetur, ut placerat erat tempus. Mauris posuere metus sed ex consectetur, cursus sagittis augue porttitor. Suspendisse magna ante, egestas id volutpat a, ornare vitae orci.\r\n\r\nPellentesque massa massa, imperdiet vel odio vel, feugiat varius odio. Nunc magna eros, cursus at velit non, hendrerit finibus leo. Proin id fringilla nisl, eu dapibus enim. Donec pellentesque gravida posuere. Sed in sollicitudin sapien. Quisque finibus est a mi ullamcorper accumsan. Quisque interdum mauris vel velit consectetur, in dictum mauris pharetra.\r\n\r\nNullam sed metus metus. Praesent non mauris fermentum, lacinia nisl eu, placerat ipsum. Cras porttitor lectus a augue aliquet, quis auctor enim bibendum. Proin dapibus maximus pretium. Vivamus dignissim accumsan augue, nec tempor urna vulputate vitae. Nulla facilisi. Maecenas est libero, egestas sit amet dolor non, pellentesque iaculis ipsum.\r\n\r\nNulla imperdiet orci quis magna semper imperdiet. Cras id ante consequat, fringilla ipsum vel, molestie sem. Aenean non velit aliquam, lacinia ex ac, venenatis nulla. Quisque vitae consequat augue, non auctor ante. Vestibulum non placerat nibh. Integer posuere tempus consequat. Sed vehicula ullamcorper tellus. Praesent consectetur ligula et pellentesque dignissim.\r\n\r\nProin ac fringilla ex, at blandit nulla. Donec eu mauris lobortis, consequat leo ut, pellentesque ex. In enim dolor, varius ac mauris quis, condimentum eleifend libero. Cras ullamcorper tellus nec est eleifend, vitae consectetur est vulputate. Etiam mi ex, accumsan vel eleifend id, fringilla eget libero. Mauris aliquam gravida efficitur. Praesent finibus sagittis nunc. Morbi erat urna, dapibus in finibus ac, pellentesque sed tellus. Integer feugiat, ipsum non consectetur fringilla, tortor nunc tincidunt arcu, in vehicula enim metus vel leo. Mauris euismod facilisis dignissim. Aliquam sit amet ex magna. Pellentesque mollis aliquam metus quis aliquet. Sed congue quam sit amet nulla dapibus, a volutpat ligula feugiat. ', 'foto001.jpg', 'left', '2019-04-10');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`cdpost`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `cdpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
