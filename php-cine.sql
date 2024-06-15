-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/06/2024 às 23:23
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `php-cine`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ingressos`
--

CREATE TABLE `ingressos` (
  `Id` int(11) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `Id_filme` int(11) NOT NULL,
  `Assentos` varchar(10) NOT NULL,
  `Preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ingressos`
--

INSERT INTO `ingressos` (`Id`, `Id_usuario`, `Id_filme`, `Assentos`, `Preco`) VALUES
(2, 8, 4, 'A1', 10),
(3, 8, 4, 'A2', 10),
(4, 8, 4, 'A8', 10),
(5, 8, 4, 'B1', 10),
(6, 8, 4, 'A1', 10),
(7, 8, 4, 'A2', 10),
(8, 8, 4, 'A3', 10),
(9, 8, 4, 'A1', 10),
(10, 8, 4, 'B1', 10),
(11, 8, 4, 'C1', 10),
(12, 8, 4, 'A1', 10),
(13, 8, 4, 'B1', 10),
(14, 8, 4, 'A2', 10),
(15, 8, 4, 'D5', 10),
(16, 8, 4, 'D5', 10),
(17, 8, 4, 'D8', 10),
(18, 8, 4, 'A3', 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `listafilmes`
--

CREATE TABLE `listafilmes` (
  `Id` int(50) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Descricao` varchar(255) NOT NULL,
  `Lancamento` varchar(255) NOT NULL,
  `Duracao` varchar(255) NOT NULL,
  `Genero` varchar(255) NOT NULL,
  `Diretor` varchar(255) NOT NULL,
  `Elenco` varchar(255) NOT NULL,
  `Nota` varchar(255) NOT NULL,
  `Poster` varchar(255) NOT NULL,
  `Trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `listafilmes`
--

INSERT INTO `listafilmes` (`Id`, `Titulo`, `Descricao`, `Lancamento`, `Duracao`, `Genero`, `Diretor`, `Elenco`, `Nota`, `Poster`, `Trailer`) VALUES
(4, 'Dune: Part One', 'Em um futuro distante, Paul Atreides e sua família se envolvem em uma batalha pelo controle do planeta deserto Arrakis, conhecido como Duna, a única fonte da substância mais valiosa do universo, a \"melange\" ou \"especiaria\".', ' 22/10/2021', '155 minutos', 'Ficção Científica, Aventura, Drama', 'Denis Villeneuve', 'Timothée Chalamet, Rebecca Ferguson, Oscar Isaac, Jason Momoa, Zendaya', 'PG-13', 'imagesduna_part_one.jpeg', 'https://www.youtube.com/watch?v=n9xhJrPXop4'),
(5, 'Dune: Part One', 'Em um futuro distante, Paul Atreides e sua família se envolvem em uma batalha pelo controle do planeta deserto Arrakis, conhecido como Duna, a única fonte da substância mais valiosa do universo, a \"melange\" ou \"especiaria\".', '2021-10-22', '155', 'Ficção Científica, Aventura, Drama', 'Denis Villeneuve', 'Timothée Chalamet, Rebecca Ferguson, Oscar Isaac, Jason Momoa, Zendaya', 'PG-13', 'https://m.media-amazon.com/images/I/71q5fvd6HPL._AC_SY679_.jpg', 'https://www.youtube.com/watch?v=n9xhJrPXop4'),
(6, 'Spider-Man: No Way Home', 'Peter Parker enfrenta novos desafios quando sua identidade como Homem-Aranha é revelada ao mundo. Ele busca ajuda do Doutor Estranho para restaurar sua vida secreta, mas isso desencadeia perigosos inimigos de outras realidades.', '2021-12-17', '148', 'Ação, Aventura, Ficção Científica', 'Jon Watts', 'Tom Holland, Zendaya, Benedict Cumberbatch, Jacob Batalon, Alfred Molina', 'PG-13', 'https://m.media-amazon.com/images/I/81lc5zT7JSL._AC_SY679_.jpg', 'https://www.youtube.com/watch?v=JfVOs4VSpmA'),
(7, 'The Batman', 'Bruce Wayne, também conhecido como Batman, enfrenta a corrupção de Gotham City e um serial killer conhecido como The Riddler, que desafia o herói a resolver enigmas e mistérios para salvar a cidade.', '2022-03-04', '176', 'Ação, Crime, Drama', 'Matt Reeves', 'Robert Pattinson, Zoë Kravitz, Jeffrey Wright, Colin Farrell, Paul Dano', 'PG-13', 'https://m.media-amazon.com/images/I/91KkWf50SoL._AC_SY679_.jpg', 'https://www.youtube.com/watch?v=mqqft2x_Aa4'),
(8, 'No Time to Die', 'James Bond deixou o serviço ativo, mas sua paz é interrompida quando um velho amigo da CIA pede sua ajuda, levando Bond a confrontar um vilão armado com uma nova e perigosa tecnologia.', '2021-10-08', '163', 'Ação, Aventura, Thriller', 'Cary Joji Fukunaga', 'Daniel Craig, Léa Seydoux, Rami Malek, Lashana Lynch, Ralph Fiennes', 'PG-13', 'https://m.media-amazon.com/images/I/81W+OEZUk2L._AC_SY679_.jpg', 'https://www.youtube.com/watch?v=BIhNsAtPbPI'),
(9, 'Encanto', 'A jovem Mirabel Madrigal luta para encontrar seu lugar em sua família mágica, quando descobre que a magia da Encanto está em perigo, e ela pode ser a única esperança para salvar sua família e sua casa.', '2021-11-24', '102', 'Animação, Comédia, Família', 'Byron Howard, Jared Bush, Charise Castro Smith', 'Stephanie Beatriz, María Cecilia Botero, John Leguizamo, Mauro Castillo, Jessica Darrow', 'PG', 'https://m.media-amazon.com/images/I/81QXkX91icL._AC_SY679_.jpg', 'https://www.youtube.com/watch?v=CaimKeDcudo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `login-adm`
--

CREATE TABLE `login-adm` (
  `Id` int(11) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Senha` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `login-adm`
--

INSERT INTO `login-adm` (`Id`, `Usuario`, `Senha`) VALUES
(1, 'Brito', 122),
(2, 'Jean', 133),
(3, 'Thiago', 111);

-- --------------------------------------------------------

--
-- Estrutura para tabela `login-usuario`
--

CREATE TABLE `login-usuario` (
  `Id` int(50) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `login-usuario`
--

INSERT INTO `login-usuario` (`Id`, `Usuario`, `Senha`) VALUES
(8, 'Brito', '123'),
(9, 'Brito', '123'),
(10, 'Brito', '123'),
(11, 'Brito', '123'),
(12, 'Brito', '123'),
(13, 'thiagato', '3434'),
(14, 'asdsa', '3434343');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `ingressos`
--
ALTER TABLE `ingressos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_filme` (`Id_filme`),
  ADD KEY `Id_usuario` (`Id_usuario`);

--
-- Índices de tabela `listafilmes`
--
ALTER TABLE `listafilmes`
  ADD PRIMARY KEY (`Id`);

--
-- Índices de tabela `login-adm`
--
ALTER TABLE `login-adm`
  ADD PRIMARY KEY (`Id`);

--
-- Índices de tabela `login-usuario`
--
ALTER TABLE `login-usuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ingressos`
--
ALTER TABLE `ingressos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `listafilmes`
--
ALTER TABLE `listafilmes`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `login-adm`
--
ALTER TABLE `login-adm`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `login-usuario`
--
ALTER TABLE `login-usuario`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `ingressos`
--
ALTER TABLE `ingressos`
  ADD CONSTRAINT `ingressos_ibfk_1` FOREIGN KEY (`Id_filme`) REFERENCES `listafilmes` (`Id`),
  ADD CONSTRAINT `ingressos_ibfk_2` FOREIGN KEY (`Id_usuario`) REFERENCES `login-usuario` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
