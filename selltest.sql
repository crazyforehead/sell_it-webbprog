-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 08 apr 2014 kl 08:17
-- Serverversion: 5.6.14
-- PHP-version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `selltest`
--
CREATE DATABASE IF NOT EXISTS `selltest` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `selltest`;

-- --------------------------------------------------------

--
-- Tabellstruktur `bild`
--

CREATE TABLE IF NOT EXISTS `bild` (
  `bildId` int(11) NOT NULL AUTO_INCREMENT,
  `bildNamn` varchar(100) NOT NULL,
  PRIMARY KEY (`bildId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Tabellstruktur `kund`
--

CREATE TABLE IF NOT EXISTS `kund` (
  `kundId` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `ename` varchar(20) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `pnr` int(10) NOT NULL,
  `stad` varchar(40) NOT NULL,
  `tel` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `bildNamn` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kundId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=137 ;

--
-- Dumpning av Data i tabell `kund`
--

INSERT INTO `kund` (`kundId`, `fname`, `ename`, `adress`, `pnr`, `stad`, `tel`, `email`, `password`, `bildNamn`) VALUES
(130, 'a', 'a', 'a', 5, '5', 5, 'joakim-wallin@hotmail.com', 'a', ''),
(131, 'a', 'a', 'a', 5, 's', 8, 'joa@gmail.com', 'a', ''),
(133, 'Jonny', 'Hoff', 'Gatan', 5, 'Halmstad', 555, 'joakim.j.wallin@gmail.com', 'a', ''),
(134, 'martina', 'lundgren', 'vÃ¤gen 20', 654, 'Halmstad', 55555, 'martina85.lundgren@gmail.com', 'a', ''),
(135, 'viktor', 'ballesson', 'gatan', 20, 'Halmstad', 5555, 'viktor@hotmail.com', 'a', ''),
(136, 'Crille', 'SVENSSON', 'a', 5, 'a', 55, 'aaa@gmail.com', 'a', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
