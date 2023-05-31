-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Maio-2023 às 17:38
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aplicativo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `Email` varchar(60) NOT NULL,
  `Senha` varchar(10) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `Telefone` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Cep` int(11) NOT NULL,
  `Rua` varchar(60) NOT NULL,
  `Bairro` varchar(45) NOT NULL,
  `Número` int(11) NOT NULL,
  `Estado` varchar(60) NOT NULL,
  `Complemento` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`Email`, `Senha`, `Nome`, `Telefone`, `Data`, `Cep`, `Rua`, `Bairro`, `Número`, `Estado`, `Complemento`) VALUES
('andrebahttp@gmail', '2908', 'André Baschirotto Alexandre', 988033125, '2005-08-29', 89206230, 'São Viscente', 'Boa Vista', 323, 'Santa Catarina', '0'),
('kauamira2512@gmail', 'mira123', 'Kauã henrique', 2147483647, '2005-12-26', 89211460, 'Antonio Ramos', 'Floresta', 1044, 'Santa Catarina', '2:305');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_adm`
--

CREATE TABLE `login_adm` (
  `Email` varchar(45) NOT NULL,
  `Senha` varchar(45) NOT NULL,
  `Admin` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `login_adm`
--

INSERT INTO `login_adm` (`Email`, `Senha`, `Admin`) VALUES
('andrebahttp@gmail', '2908', 's'),
('kauamira2512@gmai', 'mira123', 's');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`Email`);

--
-- Índices para tabela `login_adm`
--
ALTER TABLE `login_adm`
  ADD PRIMARY KEY (`Senha`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
