-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Feb 15, 2016 alle 00:56
-- Versione del server: 5.5.41-0ubuntu0.14.04.1
-- Versione PHP: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `negozio`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `autori`
--

CREATE TABLE IF NOT EXISTS `autori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dump dei dati per la tabella `autori`
--

INSERT INTO `autori` (`id`, `nome`) VALUES
(10, 'Cuncordu Sas Enas'),
(2, 'Su Rosariu'),
(5, 'Cuncordu de Orosei'),
(6, 'Curcordu de Bosa'),
(7, 'Cuncordu sos Cunfrades');

-- --------------------------------------------------------

--
-- Struttura della tabella `brani`
--

CREATE TABLE IF NOT EXISTS `brani` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titolo` varchar(100) NOT NULL,
  `autore` varchar(100) NOT NULL,
  `id_autore` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_autore` (`id_autore`),
  KEY `id_autore_3` (`id_autore`),
  KEY `id_autore_2` (`id_autore`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
