-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/06/2024 às 06:02
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
(50, 13, 7, 'B2', 10),
(55, 13, 9, 'D3', 10),
(56, 13, 9, 'C2', 10),
(57, 13, 9, 'D4', 10),
(58, 13, 9, 'B1', 10),
(59, 13, 9, 'B5', 10),
(60, 13, 9, 'C4', 10),
(61, 13, 9, 'D5', 10),
(62, 13, 9, 'C3', 10),
(63, 13, 9, 'C4', 10),
(64, 13, 9, 'D3', 10),
(65, 13, 9, 'D4', 10),
(66, 8, 6, 'A8', 10),
(67, 8, 6, 'B8', 10),
(68, 8, 6, 'C8', 10),
(69, 8, 6, 'D8', 10),
(70, 8, 6, 'A1', 10),
(71, 8, 6, 'A2', 10),
(72, 8, 6, 'A3', 10),
(73, 8, 6, 'A4', 10),
(74, 8, 6, 'A5', 10),
(75, 8, 6, 'A6', 10),
(76, 8, 6, 'A7', 10),
(77, 8, 6, 'B1', 10),
(78, 8, 6, 'C1', 10),
(79, 8, 6, 'C2', 10),
(80, 8, 6, 'C3', 10),
(81, 8, 6, 'D1', 10),
(82, 8, 6, 'D2', 10),
(83, 8, 6, 'D3', 10),
(84, 8, 6, 'C5', 10),
(85, 8, 6, 'D4', 10),
(86, 8, 6, 'D5', 10),
(87, 8, 6, 'B6', 10),
(88, 8, 6, 'B7', 10),
(89, 8, 6, 'C6', 10),
(90, 8, 6, 'C7', 10),
(91, 8, 6, 'D6', 10),
(92, 8, 8, 'A5', 10),
(93, 8, 8, 'B5', 10),
(94, 8, 8, 'C4', 10),
(95, 8, 8, 'C5', 10),
(96, 8, 8, 'C6', 10),
(98, 8, 7, 'A3', 10),
(99, 8, 7, 'B5', 10),
(100, 8, 7, 'B6', 10),
(102, 8, 7, 'A2', 10),
(103, 8, 7, 'A3', 10),
(104, 8, 7, 'A4', 10),
(105, 8, 7, 'A6', 10),
(106, 8, 7, 'D10', 10),
(107, 8, 7, 'C10', 10),
(108, 8, 7, 'B8', 10),
(109, 8, 7, 'A6', 10),
(110, 8, 7, 'A7', 10),
(111, 8, 7, 'A8', 10),
(112, 8, 7, 'D12', 10),
(113, 8, 7, 'C12', 10),
(114, 8, 7, 'D12', 10),
(115, 8, 7, 'C11', 10),
(116, 8, 7, 'C12', 10),
(117, 8, 7, 'A5', 10),
(118, 18, 6, 'D12', 10);

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
(4, 'Dune: Part One', 'Em um futuro distante, Paul Atreides e sua família se envolvem em uma batalha pelo controle do planeta deserto Arrakis, conhecido como Duna, a única fonte da substância mais valiosa do universo, a \"melange\" ou \"especiaria\".', ' 22/10/2021', '155 minutos', 'Ficção Científica, Aventura, Drama', 'Denis Villeneuve', 'Timothée Chalamet, Rebecca Ferguson, Oscar Isaac, Jason Momoa, Zendaya', 'PG-13', 'https://m.media-amazon.com/images/I/41MRn6hy8-L._SY445_SX342_.jpg', 'https://www.youtube.com/watch?v=n9xhJrPXop4'),
(6, 'Spider-Man: No Way Home', 'Peter Parker enfrenta novos desafios quando sua identidade como Homem-Aranha é revelada ao mundo. Ele busca ajuda do Doutor Estranho para restaurar sua vida secreta, mas isso desencadeia perigosos inimigos de outras realidades.', '2021-12-17', '148', 'Ação, Aventura, Ficção Científica', 'Jon Watts', 'Tom Holland, Zendaya, Benedict Cumberbatch, Jacob Batalon, Alfred Molina', 'PG-13', 'https://m.media-amazon.com/images/I/51pET33H7+L._SY445_SX342_.jpg', 'https://www.youtube.com/watch?v=JfVOs4VSpmA'),
(7, 'The Batman', 'Bruce Wayne, também conhecido como Batman, enfrenta a corrupção de Gotham City e um serial killer conhecido como The Riddler, que desafia o herói a resolver enigmas e mistérios para salvar a cidade.', '2022-03-04', '176', 'Ação, Crime, Drama', 'Matt Reeves', 'Robert Pattinson, Zoë Kravitz, Jeffrey Wright, Colin Farrell, Paul Dano', 'PG-13', 'https://m.media-amazon.com/images/I/91KkWf50SoL._AC_SY679_.jpg', 'https://www.youtube.com/watch?v=mqqft2x_Aa4'),
(8, 'No Time to Die', 'James Bond deixou o serviço ativo, mas sua paz é interrompida quando um velho amigo da CIA pede sua ajuda, levando Bond a confrontar um vilão armado com uma nova e perigosa tecnologia.', '2021-10-08', '163', 'Ação, Aventura, Thriller', 'Cary Joji Fukunaga', 'Daniel Craig, Léa Seydoux, Rami Malek, Lashana Lynch, Ralph Fiennes', 'PG-13', 'https://m.media-amazon.com/images/I/61VeYZhXKPL.__AC_SX300_SY300_QL70_ML2_.jpg', 'https://www.youtube.com/watch?v=BIhNsAtPbPI'),
(9, 'Encanto', 'A jovem Mirabel Madrigal luta para encontrar seu lugar em sua família mágica, quando descobre que a magia da Encanto está em perigo, e ela pode ser a única esperança para salvar sua família e sua casa.', '2021-11-24', '102', 'Animação, Comédia, Família', 'Byron Howard, Jared Bush, Charise Castro Smith', 'Stephanie Beatriz, María Cecilia Botero, John Leguizamo, Mauro Castillo, Jessica Darrow', 'PG', 'https://m.media-amazon.com/images/I/91sfHsI1p4L._AC_SY550_.jpg', 'https://www.youtube.com/watch?v=CaimKeDcudo'),
(85, 'Divergente', 'Nesta versão futurista da cidade de Chicago, a sociedade se divide em cinco facções dedicadas ao cultivo de uma virtude – a Abnegação, a Amizade, a Audácia, a Franqueza e a Erudição. Aos dezesseis anos, numa grande cerimônia de iniciação, os jovens são su', '30 julho 2015', '2h 19m', 'Ação, Ficção Científica', 'Neil Burger', 'Shailene Woodley, Theo James, Miles Teller', '4,6', 'https://upload.wikimedia.org/wikipedia/pt/8/8e/Divergent.png', 'https://www.youtube.com/watch?v=B_fty0k6SNI'),
(86, 'Insurgente', 'Uma escolha pode te destruir  Uma escolha pode te transformar - ou destruir. Mas toda escolha carrega consequências, e, enquanto uma sensação de inquietação assola as facções ao seu redor, Tris Prior precisa persistir em sua tentativa de salvar as pessoas', '19 de março de 2015', '1h 19m', 'Ação, Ficção Científica', 'Neil Burger', 'Shailene Woodley, Theo James, Miles Teller', '4,6', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSw47qWTtxlEpd3-CPlUEdfZD8Px_3KldYdXg&s', 'https://www.youtube.com/watch?v=trbNyR8MHOs'),
(87, 'Convergente', 'Tris e Quatro embarcam em uma jornada além da cerca ao redor de Chicago em busca de uma solução pacífica para a sua cidade, e acabam descobrindo a existência de uma nova sociedade.', '10 de março de 2016', '2h', 'Ação, Ficção Científica', 'Neil Burger', 'Shailene Woodley, Theo James, Miles Teller', '4,7', 'https://m.media-amazon.com/images/I/81yUSgsppWL._AC_UL320_.jpg', 'https://www.youtube.com/watch?v=ttdRr-Hw01g'),
(88, 'Harry Potter e a Pedra Filosofal', 'Harry Potter é um garoto órfão que vive infeliz com seus tios, os Dursleys. Ele recebe uma carta contendo um convite para ingressar em Hogwarts, uma famosa escola especializada em formar jovens bruxos. Inicialmente, Harry é impedido de ler a carta por seu', ' 23 de novembro de 2001', '2h 32m', 'Ação, Fantasia, Ficcção', 'Chris Columbus', 'Daniel Radcliffe, Emma Watson, Rupert Grint, Alan Rickman, Robbie Coltrane, Tom Felton, Richard Harris', '5', 'https://m.media-amazon.com/images/I/A1NW0ocUylL._AC_UL320_.jpg', 'https://www.youtube.com/watch?v=P1BGgqhVGAI'),
(89, 'Harry Potter e a Câmara Secreta', 'Após as sofríveis férias na casa dos tios, Harry Potter se prepara para voltar a Hogwarts e começar seu segundo ano na escola de bruxos. Na véspera do início das aulas, a estranha criatura Dobby aparece em seu quarto e o avisa de que voltar é um erro e qu', '2002', ' 2h 41m', 'Ação, Fantasia, Ficcção', 'Chris Columbus', 'Daniel Radcliffe, Emma Watson, Rupert Grint, Alan Rickman, Robbie Coltrane, Tom Felton, Richard Harris', '5', 'https://br.web.img3.acsta.net/medias/nmedia/18/93/01/50/20230712.jpg', 'https://www.youtube.com/watch?v=cf0rRYvDuys'),
(90, 'Harry Potter e o Prisioneiro de Azkaban', 'É o início do terceiro ano na escola de bruxaria Hogwarts. Harry, Ron e Hermione têm muito o que aprender. Mas uma ameaça ronda a escola e ela se chama Sirius Black. Após doze anos encarcerado na prisão de Azkaban, ele consegue escapar e volta para vingar', '2004', '2h 27m', 'Ação, Fantasia, Ficcção', 'Chris Columbus', 'Daniel Radcliffe, Emma Watson, Rupert Grint, Alan Rickman, Robbie Coltrane, Tom Felton, Richard Harris', '4,7', 'https://br.web.img2.acsta.net/medias/nmedia/18/93/88/04/20282944.jpg', 'https://www.youtube.com/watch?v=lAxgztbYDbs'),
(91, 'Harry Potter e o Cálice de Fogo', 'Harry retorna para seu quarto ano na Escola de Magia e Bruxaria de Hogwarts, junto com os seus amigos Ron e Hermione. Desta vez, acontece um torneio entre as três maiores escola de magia, com um participante selecionado de cada escola, pelo Cálice de Fogo', '2005', '2h 37m', 'Ação, Fantasia, Ficcção', 'Chris Columbus', 'Daniel Radcliffe, Emma Watson, Rupert Grint, Alan Rickman, Robbie Coltrane, Tom Felton, Richard Harris', '4,7', 'https://m.media-amazon.com/images/I/81jwDWnAmUL._AC_UL320_.jpg', 'https://www.youtube.com/watch?v=cVKkL4O60IM');

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
(14, 'asdsa', '3434343'),
(15, 'asda', 'asdasd'),
(16, 'asda', 'asdasd'),
(17, 'Britoca', '122'),
(18, 'DinarteSeretni', 'DinarteSeretni'),
(19, 'Jean', 'jean');

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT de tabela `listafilmes`
--
ALTER TABLE `listafilmes`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de tabela `login-adm`
--
ALTER TABLE `login-adm`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `login-usuario`
--
ALTER TABLE `login-usuario`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
