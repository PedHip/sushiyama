-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Dez-2023 às 23:08
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sushiyama`
--
CREATE DATABASE IF NOT EXISTS `sushiyama` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sushiyama`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `cod_produto` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `preco` decimal(6,2) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`cod_produto`, `nome`, `descricao`, `preco`, `imagem`, `tipo`) VALUES
(3, 'Ceviche 2', 'Polvo marinado no suco de limão', '12.95', 'ceviche2.png', 'Entrada'),
(4, 'Tirashi', 'Arroz de sushi acompanhado de fatias de legumes e peixe cru', '18.99', 'tirashi.png', 'Entrada'),
(5, 'Temaki', 'Cone de alga recheado com gohan e salmão', '22.99', 'temaki.png', 'Entrada'),
(6, 'Shimeji', 'Shimeji grelhado na chapa', '12.99', 'Shimeji.png', 'Entrada'),
(7, 'Lamem de porco', 'Macarrão acompanhado de carne de porco legumes e caldo', '44.99', 'Lamem1.png', 'Principal'),
(8, 'Lamem de porco empanado', 'Macarrão acompanhado de carne de porco empanada legumes e caldo', '45.99', 'Lamem2.png', 'Principal'),
(9, 'Robata', 'Legumes grelhados servidos num prato', '25.00', 'Robata.png', 'Principal'),
(10, 'Combo Sushi', '35 peças de sushi', '75.99', 'Sushi1.png', 'Principal'),
(11, 'Combo sushi 2', '15 peças de sushi', '31.99', 'Sushi2.png', 'Principal'),
(12, 'Combo sushi 3', '20 peças de sushi', '38.00', 'Sushi3.png', 'Principal'),
(13, 'Barca', '40 peças de sushi', '80.00', 'Barca.png', 'Principal'),
(14, 'Curry', 'Carne ao molho picante com arroz', '28.99', 'Curry.png', 'Principal'),
(15, 'Katsudon', 'Carne de porco empanada com gohan', '35.00', 'Katsudon.png', 'Principal'),
(16, 'Mochi', 'Bolinho de massa de arroz doce', '10.00', 'Mochi.png', 'Sobremesa'),
(17, 'Crepe', 'Massa recheada com chocolate', '17.99', 'Crepe.png', 'Sobremesa'),
(18, 'Anmitsu', 'Pequenos cubos de açucar com frutas variadas', '14.00', 'Anmitsu.png', 'Sobremesa'),
(19, 'Dango', 'Bolinhos doce servidos no palito', '16.00', 'Dango.png', 'Sobremesa'),
(20, 'Wagashi', 'Massa de feijão com farinha de arroz', '26.00', 'Wagashi.png', 'Sobremesa'),
(21, 'Taiyaki', 'Massa rechada com doce de feijão', '20.00', 'Taiyaki.png', 'Sobremesa'),
(22, 'Sunomono ', 'Sunomono acompanhado com atum grelhado', '10.99', 'sunomono2.png', 'Entrada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `email`, `senha`) VALUES
('vini', 'vini@gmail.com', '$2y$10$a2lv5i11Z73C8mwzEKBVyOwOf3lyQ0FfQl7c2o4Vb35hH4sYteBEu');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`cod_produto`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `cod_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
