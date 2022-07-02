-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql202.epizy.com
-- Tempo de geração: 28/11/2021 às 12:28
-- Versão do servidor: 5.7.35-38
-- Versão do PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `epiz_30448384_db_projeto`
--
CREATE DATABASE IF NOT EXISTS `epiz_30448384_db_projeto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `epiz_30448384_db_projeto`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) DEFAULT NULL,
  `reg_admin` int(11) NOT NULL,
  `nome_admin` varchar(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `administrador`
--

INSERT INTO `administrador` (`id_admin`, `reg_admin`, `nome_admin`, `email_admin`, `senha`) VALUES
(NULL, 852, 'Beltrano', 'beltrano@beltrano.com', 'e9910cf6ea24255eff7066643c6cb145'),
(NULL, 963, 'Fulano', 'fulano@fulano.com', '3342949e2e99fc2f304de6fdd626a188');

-- --------------------------------------------------------

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`email_admin`);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
