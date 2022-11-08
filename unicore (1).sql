-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Nov-2022 às 18:14
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `unicore`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroempresa`
--

DROP TABLE IF EXISTS `cadastroempresa`;
CREATE TABLE IF NOT EXISTS `cadastroempresa` (
  `idemp` int(11) NOT NULL AUTO_INCREMENT,
  `razao` varchar(50) NOT NULL,
  `cnpj` varchar(15) NOT NULL,
  `contas` varchar(50) NOT NULL,
  PRIMARY KEY (`idemp`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastroempresa`
--

INSERT INTO `cadastroempresa` (`idemp`, `razao`, `cnpj`, `contas`) VALUES
(10, 'KANAKA FRUTAS', '20000000000', 'BANCO BRASIL'),
(11, 'Kanaka Frutas', '000000000000', 'BANCO BRASIL'),
(9, 'QUELFRUT ', '34516213000192', 'SAFRA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fluxodecheque`
--

DROP TABLE IF EXISTS `fluxodecheque`;
CREATE TABLE IF NOT EXISTS `fluxodecheque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destino` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `vencimento` date NOT NULL,
  `conta` varchar(80) NOT NULL,
  `numero` varchar(15) NOT NULL,
  `valor` double NOT NULL,
  `compensado` varchar(10) NOT NULL,
  `obeservacao` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fluxodecheque`
--

INSERT INTO `fluxodecheque` (`id`, `destino`, `data`, `vencimento`, `conta`, `numero`, `valor`, `compensado`, `obeservacao`) VALUES
(36, 'ODAIR MELANCIA', '2022-11-08', '2023-01-02', '/', '5462', 5255, 'nao', 'parcela 1 da CARGA 233');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas fiscais`
--

DROP TABLE IF EXISTS `notas fiscais`;
CREATE TABLE IF NOT EXISTS `notas fiscais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Remente` varchar(50) NOT NULL,
  `destino` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `chave` varchar(80) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `inclusao` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
