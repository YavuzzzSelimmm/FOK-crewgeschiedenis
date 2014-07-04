-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2014 at 04:24 AM
-- Server version: 5.5.32-31.0-log
-- PHP Version: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Table structure for table `Activiteit`
--

CREATE TABLE IF NOT EXISTS `Activiteit` (
  `PK_Activiteit` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Gebruiker` int(11) NOT NULL,
  `FK_Rol` int(11) NOT NULL,
  `Startdatum` date NOT NULL,
  `Einddatum` date DEFAULT NULL,
  `StartURL` varchar(255) NOT NULL,
  `EindURL` varchar(255) NOT NULL,
  PRIMARY KEY (`PK_Activiteit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `Activiteit`
--

INSERT INTO `Activiteit` (`PK_Activiteit`, `FK_Gebruiker`, `FK_Rol`, `Startdatum`, `Einddatum`, `StartURL`, `EindURL`) VALUES
(1, 1, 3, '2007-12-25', '2008-12-24', 'http://forum.fok.nl/topic/1108813', 'http://forum.fok.nl/topic/1233907'),
(2, 1, 1, '2012-08-11', NULL, 'http://forum.fok.nl/topic/1856153', ''),
(3, 2, 3, '2004-11-22', '2004-12-10', 'http://forum.fok.nl/topic/630545', 'http://forum.fok.nl/topic/637884'),
(4, 2, 3, '2005-09-19', '2008-07-14', 'http://forum.fok.nl/topic/756168', 'http://forum.fok.nl/topic/1176119'),
(5, 2, 5, '2008-07-14', NULL, 'http://forum.fok.nl/topic/1176119', ''),
(6, 2, 4, '2012-09-12', NULL, 'http://forum.fok.nl/topic/1871497', ''),
(7, 3, 2, '2013-02-02', NULL, 'http://forum.fok.nl/topic/1929012', ''),
(8, 4, 5, '2008-11-05', '2009-11-01', 'http://forum.fok.nl/topic/1216636', 'http://forum.fok.nl/topic/1362333'),
(9, 4, 6, '2002-07-21', NULL, 'http://forum.fok.nl/topic/165826', ''),
(10, 5, 7, '2003-09-07', '2005-04-15', 'http://forum.fok.nl/topic/381955', 'http://forum.fok.nl/topic/689529'),
(11, 5, 7, '2005-04-24', '2005-07-04', 'http://forum.fok.nl/topic/693180', 'http://forum.fok.nl/topic/722977'),
(12, 5, 7, '2006-08-16', NULL, 'http://forum.fok.nl/topic/899750', ''),
(13, 5, 8, '2008-05-09', '2012-12-25', 'http://forum.fok.nl/topic/1152979', 'http://forum.fok.nl/topic/1911042'),
(14, 5, 8, '2013-06-06', NULL, 'http://forum.fok.nl/topic/1981112', ''),
(15, 5, 9, '2005-01-04', '2005-04-12', '', ''),
(16, 5, 9, '2008-09-18', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Gebruiker`
--

CREATE TABLE IF NOT EXISTS `Gebruiker` (
  `PK_Gebruiker` int(11) NOT NULL AUTO_INCREMENT,
  `Gebruikersnaam` varchar(100) NOT NULL,
  `UserID` int(7) NOT NULL,
  `Registratiedatum` date NOT NULL,
  `UI` varchar(255) NOT NULL,
  PRIMARY KEY (`PK_Gebruiker`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `Gebruiker`
--

INSERT INTO `Gebruiker` (`PK_Gebruiker`, `Gebruikersnaam`, `UserID`, `Registratiedatum`, `UI`) VALUES
(1, 'zarGon', 151187, '2006-06-10', 'http://i.fokzine.net/usericons/151187/CiplakBakire.gif'),
(2, 'Snakey', 58789, '2003-07-23', 'http://i.fokzine.net/usericons/58789/snakey_2.jpg'),
(3, 'Marie30', 308148, '2010-06-22', 'http://i.fokzine.net/usericons/308148/uiFOK.jpg'),
(4, 'Mike', 1212, '1999-10-24', 'http://i.fokzine.net/usericons/1212/burns2.jpg'),
(5, 'static', 15080, '2001-08-22', 'http://i.fokzine.net/usericons/15080/staticicon.gif');

-- --------------------------------------------------------

--
-- Table structure for table `Rol`
--

CREATE TABLE IF NOT EXISTS `Rol` (
  `PK_Rol` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Subsite` int(11) NOT NULL,
  `Afkorting` varchar(50) NOT NULL,
  `Omschrijving` varchar(50) NOT NULL,
  PRIMARY KEY (`PK_Rol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `Rol`
--

INSERT INTO `Rol` (`PK_Rol`, `FK_Subsite`, `Afkorting`, `Omschrijving`) VALUES
(1, 1, 'R&P', 'Relaties & Psychologie'),
(2, 1, 'KLB', 'Klaagbaak'),
(3, 1, 'ONZ', 'Onzin voor je leven!'),
(4, 1, 'SPT', 'Sport'),
(5, 1, 'FA', 'Forum Admin'),
(6, 1, 'TV', 'Film, Tv & Radio'),
(7, 1, 'SHO', 'Soaps, Showbizz & Sterren'),
(8, 1, 'KAA', 'Kaaskoppen in het Buitenland'),
(9, 2, 'Redactie FP', 'Redactie FP');

-- --------------------------------------------------------

--
-- Table structure for table `Subsite`
--

CREATE TABLE IF NOT EXISTS `Subsite` (
  `PK_Subsite` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(100) NOT NULL,
  PRIMARY KEY (`PK_Subsite`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Subsite`
--

INSERT INTO `Subsite` (`PK_Subsite`, `Naam`) VALUES
(1, 'Forum'),
(2, 'Frontpage');

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE IF NOT EXISTS `Admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(64) COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`id`, `username`, `password`, `salt`, `email`) VALUES
(1, 'admin', 'c78040f76ae23393d6009025f05c41324812ceb3597e379eaefa27eb0608e6ac', '675905e95b7cca30', 'ad@m.in');