-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Feb 18, 2016 alle 14:36
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
-- Struttura della tabella `bloccati`
--

CREATE TABLE IF NOT EXISTS `bloccati` (
  `id_ordine` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `id_libro` int(11) NOT NULL,
  PRIMARY KEY (`id_ordine`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dump dei dati per la tabella `bloccati`
--

INSERT INTO `bloccati` (`id_ordine`, `email`, `id_libro`) VALUES
(1, 'piras993@gmail.com', 1),
(2, 'example@tiscali.it', 1),
(3, 'ciao@mail.com', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
