-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2022 às 12:10
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `faleconosco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dadosusuario`
--

CREATE TABLE `dadosusuario` (
  `nome` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `endereço` varchar(200) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dadosusuario`
--

INSERT INTO `dadosusuario` (`nome`, `age`, `email`, `telefone`, `sexo`, `endereço`, `comentario`) VALUES
('oi', 0, '', '', '', '', ''),
('oi', 0, '', '', '', '', ''),
('João Victor Queiroz de Araújo', 18, 'joaovictorqueiroz39@gmail.com', '123456432', 'M', 'dfdssghtyjyrtered', '            oi'),
('Eike', 18, 'eikejoao@gmail.com', '83986468000', 'M', 'Rua Fulaninho 230', '       N da pra ver'),
('Stela', 23, 'stelajoaoeike@gmail.com', '3456787654', 'F', 'erwerwer', '            '),
('RAFA', 18, 'qualqueremail@gmail.com', '3456787654', 'M', 'erwerwer', '            '),
('RAFA', 18, 'qualqueremail@gmail.com', '3456787654', 'M', 'erwerwer', '            '),
('Vitor', 20, 'qualqueremail2@gmail.com', '839999999', 'M', 'Rua Fulaninho 230', '            ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
