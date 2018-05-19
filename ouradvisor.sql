-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 04-Maio-2018 às 20:21
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ouradvisor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
--

DROP TABLE IF EXISTS `avaliacao`;
CREATE TABLE IF NOT EXISTS `avaliacao` (
  `idAvaliacao` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idEstabelecimento` int(6) NOT NULL,
  `idUtilizador` int(6) NOT NULL,
  `classificacao` int(1) NOT NULL,
  `comentario` varchar(400) NOT NULL,
  `dataAvaliacao` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idAvaliacao`),
  KEY `idEstabelecimento` (`idEstabelecimento`),
  KEY `idUtilizador` (`idUtilizador`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `avaliacao`
--

INSERT INTO `avaliacao` (`idAvaliacao`, `idEstabelecimento`, `idUtilizador`, `classificacao`, `comentario`, `dataAvaliacao`) VALUES
(1, 1, 1, 3, 'Comentário de teste', '2018-05-01 02:16:00'),
(2, 1, 3, 5, 'Cometario de teste 2', '2018-05-01 11:10:00'),
(3, 4, 1, 1, 'teste i', '2018-05-04 14:41:26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estabelecimento`
--

DROP TABLE IF EXISTS `estabelecimento`;
CREATE TABLE IF NOT EXISTS `estabelecimento` (
  `idEstabelecimento` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `preco` float(4,2) NOT NULL,
  `morada` varchar(200) NOT NULL,
  `codPostal` varchar(8) NOT NULL,
  `idLocalidade` int(6) NOT NULL,
  `idTipoEstabelecimento` int(6) NOT NULL,
  `idUtilizador` int(6) DEFAULT NULL,
  PRIMARY KEY (`idEstabelecimento`),
  KEY `idLocalidade` (`idLocalidade`),
  KEY `idTipoEstabelecimento` (`idTipoEstabelecimento`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estabelecimento`
--

INSERT INTO `estabelecimento` (`idEstabelecimento`, `nome`, `preco`, `morada`, `codPostal`, `idLocalidade`, `idTipoEstabelecimento`, `idUtilizador`) VALUES
(1, 'Restaurante do Chiado', 20.00, 'Rua Augusta', '2600-300', 1, 2, 2),
(2, 'Hotel Pestana', 20.00, 'Rua de PortimÃ£o', '2600-300', 5, 1, 2),
(4, 'Hotel XPTO', 20.00, 'Rua de Alvalade', '2986', 1, 1, 6),
(5, 'Pizzaria Dominus', 30.00, 'Rua de Praceta', '2360-360', 3, 2, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

DROP TABLE IF EXISTS `fotos`;
CREATE TABLE IF NOT EXISTS `fotos` (
  `idFoto` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idEstabelecimento` int(6) NOT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `fotos` blob,
  PRIMARY KEY (`idFoto`),
  KEY `idEstabelecimento` (`idEstabelecimento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `localidade`
--

DROP TABLE IF EXISTS `localidade`;
CREATE TABLE IF NOT EXISTS `localidade` (
  `idlocalidade` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `localidade` varchar(50) NOT NULL,
  PRIMARY KEY (`idlocalidade`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `localidade`
--

INSERT INTO `localidade` (`idlocalidade`, `localidade`) VALUES
(1, 'Lisboa'),
(2, 'Almada'),
(3, 'Setubal'),
(4, 'Porto'),
(5, 'Albufeira');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

DROP TABLE IF EXISTS `reserva`;
CREATE TABLE IF NOT EXISTS `reserva` (
  `idReserva` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idEstabelecimento` int(6) NOT NULL,
  `idUtilizador` int(6) NOT NULL,
  `dataEntrada` date DEFAULT NULL,
  `dataSaida` date DEFAULT NULL,
  `dataHora` timestamp NULL DEFAULT NULL,
  `estado` varchar(10) NOT NULL,
  `precoTotal` float(5,2) NOT NULL,
  `dataReserva` date DEFAULT NULL,
  `nmrPessoas` int(4) DEFAULT NULL,
  PRIMARY KEY (`idReserva`),
  KEY `idEstabelecimento` (`idEstabelecimento`),
  KEY `idUtilizador` (`idUtilizador`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`idReserva`, `idEstabelecimento`, `idUtilizador`, `dataEntrada`, `dataSaida`, `dataHora`, `estado`, `precoTotal`, `dataReserva`, `nmrPessoas`) VALUES
(1, 1, 1, NULL, NULL, '2018-05-02 17:00:00', 'CONFIRMADA', 2.00, '2018-05-01', 2),
(2, 5, 1, NULL, NULL, '2018-05-02 05:29:00', 'PENDENTE', 30.00, '2018-05-04', 1),
(10, 2, 1, '2018-05-01', '2018-05-10', NULL, 'PENDENTE', 180.00, '2018-05-04', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoestabelecimento`
--

DROP TABLE IF EXISTS `tipoestabelecimento`;
CREATE TABLE IF NOT EXISTS `tipoestabelecimento` (
  `idTipoEstabelecimento` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL,
  PRIMARY KEY (`idTipoEstabelecimento`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipoestabelecimento`
--

INSERT INTO `tipoestabelecimento` (`idTipoEstabelecimento`, `tipo`) VALUES
(1, 'Hotel'),
(2, 'Restaurante');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoutilizador`
--

DROP TABLE IF EXISTS `tipoutilizador`;
CREATE TABLE IF NOT EXISTS `tipoutilizador` (
  `idTipoUtilizador` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL,
  PRIMARY KEY (`idTipoUtilizador`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipoutilizador`
--

INSERT INTO `tipoutilizador` (`idTipoUtilizador`, `tipo`) VALUES
(1, 'Cliente'),
(2, 'Empresa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

DROP TABLE IF EXISTS `utilizador`;
CREATE TABLE IF NOT EXISTS `utilizador` (
  `idUtilizador` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `morada` varchar(200) NOT NULL,
  `codPostal` varchar(8) NOT NULL,
  `telemovel` int(9) NOT NULL,
  `idLocalidade` int(6) NOT NULL,
  `idTipoUtilizador` int(6) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idUtilizador`),
  KEY `idLocalidade` (`idLocalidade`),
  KEY `idTipoUtilizador` (`idTipoUtilizador`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `utilizador`
--

INSERT INTO `utilizador` (`idUtilizador`, `nome`, `email`, `morada`, `codPostal`, `telemovel`, `idLocalidade`, `idTipoUtilizador`, `password`) VALUES
(1, 'Ricardo Morais', 'rmorais91@gmail.com', 'fef', '222222d', 910000000, 1, 1, '12345'),
(2, 'ouradvisor', 'ouradvisor@gmail.com', 'fef', '222222d', 910000000, 1, 2, '12345'),
(3, 'ouradvisor', 'isac@gmail.com', 'fef', '222222d', 910000000, 1, 1, '12345'),
(4, 'ouradivisor2', 'ouradivisor2@gmail.com', 'Rua bla', '2830-310', 91236587, 2, 2, '12345'),
(5, 'ouradvisor2', 'ouradvisor2@gmail.com', 'Rua de PortimÃ£o', '2986', 910000000, 2, 2, '12345'),
(6, 'ouradvisor2', 'ouradvisor2@gmail.com', 'Rua de PortimÃ£o', '2986', 910000000, 2, 2, '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
