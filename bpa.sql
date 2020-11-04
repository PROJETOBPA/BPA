-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Out-2020 às 16:52
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bpa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

CREATE TABLE `candidato` (
  `idusuario` int(11) DEFAULT NULL,
  `idprofissional` int(11) DEFAULT NULL,
  `iddemanda` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `demanda`
--

CREATE TABLE `demanda` (
  `iddemanda` int(11) NOT NULL,
  `estado` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `cidade` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `descricao` varchar(150) COLLATE utf8_bin NOT NULL,
  `data` date NOT NULL,
  `categoria` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `servico` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `demanda`
--

INSERT INTO `demanda` (`iddemanda`, `estado`, `cidade`, `descricao`, `data`, `categoria`, `servico`, `idusuario`) VALUES
(10, NULL, NULL, 'aaaa', '2020-10-13', 'designTecnologia', 'desenvolvimentoSites', 7),
(11, NULL, NULL, '1111', '2020-10-15', 'designTecnologia', 'webDesign', NULL),
(12, NULL, NULL, 'aaaaa', '2020-10-15', 'designTecnologia', 'webDesign', NULL),
(13, NULL, NULL, 'aaaa', '2020-10-15', 'servicosDomesticos', 'cozinheiro', NULL),
(14, NULL, NULL, '11111', '2020-10-15', 'servicosDomesticos', 'baba', NULL),
(17, NULL, NULL, '1111', '2020-10-15', 'servicosDomesticos', 'diarista', 8),
(18, NULL, NULL, '1456', '2020-10-16', 'designTecnologia', 'webDesign', 8),
(19, NULL, NULL, '', '2020-10-16', '', '', 8),
(20, NULL, NULL, '6666', '2020-10-17', 'assistenciaTecnica', 'notebook', 7),
(21, NULL, NULL, '1rdrrhfb', '2020-10-16', 'assistenciaTecnica', 'notebook', 8),
(22, NULL, NULL, '1111', '2020-10-17', 'assistenciaTecnica', 'notebook', 9),
(23, NULL, NULL, '66666', '2020-10-17', 'assistenciaTecnica', 'notebook', 6),
(24, NULL, NULL, 'tentando\r\n', '2020-10-17', 'assistenciaTecnica', 'notebook', 8),
(25, NULL, NULL, 'fddcd', '2020-10-17', 'designTecnologia', 'desenvolvimentoSites', 8),
(26, NULL, NULL, 'fddcd', '2020-10-17', 'assistenciaTecnica', 'notebook', 8),
(27, NULL, NULL, 'fddcd', '2020-10-17', 'assistenciaTecnica', 'notebook', 8),
(34, NULL, NULL, 'Preciso de sua ajuda!', '2020-10-18', 'assistenciaTecnica', 'notebook', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissional`
--

CREATE TABLE `profissional` (
  `idprofissional` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `iddemanda` int(11) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `profissional`
--

INSERT INTO `profissional` (`idprofissional`, `status`, `iddemanda`, `idusuario`) VALUES
(1, 1, 20, 8),
(2, 1, 27, 8),
(3, 1, 27, 8),
(4, 1, 27, 8),
(5, 0, 34, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `senha` varchar(45) COLLATE utf8_bin NOT NULL,
  `tipo` int(1) NOT NULL,
  `telefone` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `categoria` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `servico` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `email`, `senha`, `tipo`, `telefone`, `categoria`, `servico`) VALUES
(6, 'aaa', 'aaa@gmail.com', '123', 1, '', 'assistenciaTecnica', 'notebook'),
(7, 'aaaa', 'aa@gmail.com', '111', 0, NULL, 'assistenciaTecnica', 'notebook'),
(8, 'a1', 'a1@gmail.com', '123', 0, NULL, 'assistenciaTecnica', 'notebook'),
(9, 'a2', 'a2@gmail.com', '111', 1, NULL, 'designTecnologia', 'webDesign'),
(10, 'john', 'john@gmail.com', '555', 0, NULL, 'asssitenciaTecnica', 'notebook'),
(11, 'julio', 'julio@gmail.com', '123', 0, NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `candidato`
--
ALTER TABLE `candidato`
  ADD KEY `idusuario2` (`idusuario`),
  ADD KEY `iddemanda2` (`iddemanda`),
  ADD KEY `idprofissional2` (`idprofissional`);

--
-- Índices para tabela `demanda`
--
ALTER TABLE `demanda`
  ADD PRIMARY KEY (`iddemanda`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Índices para tabela `profissional`
--
ALTER TABLE `profissional`
  ADD PRIMARY KEY (`idprofissional`),
  ADD KEY `iddemanda` (`iddemanda`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `demanda`
--
ALTER TABLE `demanda`
  MODIFY `iddemanda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `profissional`
--
ALTER TABLE `profissional`
  MODIFY `idprofissional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `candidato`
--
ALTER TABLE `candidato`
  ADD CONSTRAINT `iddemanda2` FOREIGN KEY (`iddemanda`) REFERENCES `demanda` (`iddemanda`),
  ADD CONSTRAINT `idprofissional2` FOREIGN KEY (`idprofissional`) REFERENCES `profissional` (`idprofissional`),
  ADD CONSTRAINT `idusuario2` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Limitadores para a tabela `demanda`
--
ALTER TABLE `demanda`
  ADD CONSTRAINT `FK_idusuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`),
  ADD CONSTRAINT `idusuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Limitadores para a tabela `profissional`
--
ALTER TABLE `profissional`
  ADD CONSTRAINT `iddemanda` FOREIGN KEY (`iddemanda`) REFERENCES `demanda` (`iddemanda`),
  ADD CONSTRAINT `profissional_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
