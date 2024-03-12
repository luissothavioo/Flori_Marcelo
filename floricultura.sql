-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 12/03/2024 às 15:25
-- Versão do servidor: 8.0.35-0ubuntu0.22.04.1
-- Versão do PHP: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `floricultura`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Cliente`
--

CREATE TABLE `Cliente` (
  `id` int NOT NULL,
  `Nome` varchar(200) NOT NULL,
  `CPF` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Plantas`
--

CREATE TABLE `Plantas` (
  `id` int NOT NULL,
  `Nome` varchar(200) NOT NULL,
  `Preco` float NOT NULL,
  `id_Planta` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `Cliente`
--
ALTER TABLE `Cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `Plantas`
--
ALTER TABLE `Plantas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Planta` (`id_Planta`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Cliente`
--
ALTER TABLE `Cliente`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `Plantas`
--
ALTER TABLE `Plantas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `Plantas`
--
ALTER TABLE `Plantas`
  ADD CONSTRAINT `fk_Planta` FOREIGN KEY (`id_Planta`) REFERENCES `Plantas` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
