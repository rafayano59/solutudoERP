-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Nov-2020 às 21:51
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solutudo_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `id_empresa` int(11) NOT NULL,
  `nome_empresa` varchar(255) NOT NULL,
  `telefone_empresa` bigint(14) NOT NULL,
  `endereco_empresa` varchar(150) NOT NULL,
  `email_empresa` varchar(100) NOT NULL,
  `estado_empresa` varchar(2) NOT NULL,
  `cidade_empresa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`id_empresa`, `nome_empresa`, `telefone_empresa`, `endereco_empresa`, `email_empresa`, `estado_empresa`, `cidade_empresa`) VALUES
(5, 'Alucard SA', 14, 'rua solimoes, 55', 'alucard@empresa.com.br', 'SP', 'sao paulo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos`
--

CREATE TABLE `planos` (
  `id_plano` int(11) NOT NULL,
  `nome_plano` varchar(255) NOT NULL,
  `valor_plano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `planos`
--

INSERT INTO `planos` (`id_plano`, `nome_plano`, `valor_plano`) VALUES
(3, 'Plano Bronze', 450),
(4, 'Plano Prata', 600),
(5, 'Plano Ouro', 900);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `USUARIO` varchar(22) NOT NULL,
  `SENHA` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `USUARIO`, `SENHA`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_venda` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_plano` int(11) NOT NULL,
  `valor_plano` int(10) NOT NULL,
  `data_venda` varchar(14) NOT NULL,
  `usuario` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indexes for table `planos`
--
ALTER TABLE `planos`
  ADD PRIMARY KEY (`id_plano`),
  ADD KEY `valor_plano` (`valor_plano`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `USUARIO` (`USUARIO`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id_venda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `planos`
--
ALTER TABLE `planos`
  MODIFY `id_plano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
