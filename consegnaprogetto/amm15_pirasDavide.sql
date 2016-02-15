-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Creato il: Feb 15, 2016 alle 11:10
-- Versione del server: 5.6.27-0ubuntu1
-- Versione PHP: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amm15_pirasDavide`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `autori`
--

CREATE TABLE IF NOT EXISTS `autori` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `autori`
--

INSERT INTO `autori` (`id`, `nome`) VALUES
(1, 'Cuncordu Sas Enas'),
(2, 'Su Rosariu'),
(5, 'Cuncordu de Orosei'),
(6, 'Curcordu de Bosa'),
(7, 'Cuncordu sos Cunfrades');

-- --------------------------------------------------------

--
-- Struttura della tabella `brani`
--

CREATE TABLE IF NOT EXISTS `brani` (
  `id` int(11) NOT NULL,
  `titolo` varchar(100) NOT NULL,
  `autore` varchar(100) NOT NULL,
  `id_autore` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `brani`
--

INSERT INTO `brani` (`id`, `titolo`, `autore`, `id_autore`) VALUES
(1, 'La me brunedda', 'Cuncordu Sas Enas', 1),
(2, 'Kirie', 'Cuncordu Sas Enas', 1),
(3, 'Miserere', 'Cuncordu Sas Enas', 1),
(4, 'Ottava Trista', 'Cuncordu Sas Enas', 1),
(5, 'Stabat Mater', 'Cuncordu Sas Enas', 1),
(8, 'S''acchettuzzedda', 'Cuncordu Sas Enas', 1),
(24, 'Miserere', 'Su Rosariu', 2),
(26, 'Ballu Turturinu', 'Cuncordu de Orosei', 5),
(27, 'Sos frores de Bosa', 'Curcordu de Bosa', 6),
(28, 'Amigu meu', 'Cuncordu sos Cunfrades', 7),
(29, 'Una notte tempestosa', 'Cuncordu Sas Enas', 1),
(30, 'Sa bella anima mia', 'Cuncordu Seneghesu', 9);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `autori`
--
ALTER TABLE `autori`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `brani`
--
ALTER TABLE `brani`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `autori`
--
ALTER TABLE `autori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT per la tabella `brani`
--
ALTER TABLE `brani`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
