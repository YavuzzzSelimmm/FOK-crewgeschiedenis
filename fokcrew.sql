-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Genereertijd: 12 Sept 2014 om 13:25
-- Serverversie: 5.5.35
-- PHP-Versie: 5.2.42-servage30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


--
-- Tabelstructuur voor tabel `Activiteit`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Gegevens worden uitgevoerd voor tabel `Activiteit`
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
-- Tabelstructuur voor tabel `Admin`
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
-- Gegevens worden uitgevoerd voor tabel `Admin`
--

INSERT INTO `Admin` (`id`, `username`, `password`, `salt`, `email`) VALUES
(1, 'admin', 'c78040f76ae23393d6009025f05c41324812ceb3597e379eaefa27eb0608e6ac', '675905e95b7cca30', 'ad@m.in');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Gebruiker`
--

CREATE TABLE IF NOT EXISTS `Gebruiker` (
  `PK_Gebruiker` int(11) NOT NULL AUTO_INCREMENT,
  `Gebruikersnaam` varchar(100) NOT NULL,
  `UserID` int(7) NOT NULL,
  `Registratiedatum` date NOT NULL,
  `UI` varchar(255) NOT NULL,
  PRIMARY KEY (`PK_Gebruiker`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=180 ;

--
-- Gegevens worden uitgevoerd voor tabel `Gebruiker`
--

INSERT INTO `Gebruiker` (`PK_Gebruiker`, `Gebruikersnaam`, `UserID`, `Registratiedatum`, `UI`) VALUES
(1, 'zarGon', 151187, '2006-06-10', 'http://i.fokzine.net/usericons/151187/CiplakBakire.gif'),
(2, 'Snakey', 5878, '2001-07-23', 'http://i.fokzine.net/usericons/58789/snakey_2.jpg'),
(3, 'Marie30', 308148, '2010-06-22', 'http://i.fokzine.net/usericons/308148/uiFOK.jpg'),
(4, 'Mike', 1212, '1999-10-24', 'http://i.fokzine.net/usericons/1212/burns2.jpg'),
(5, 'static', 15080, '2001-08-22', 'http://i.fokzine.net/usericons/15080/staticicon.gif'),
(30, '99.999', 372780, '2012-04-12', 'http://fok.zevkiselim.nl/crew/ui/99999.gif'),
(31, 'Anne', 50937, '2003-03-18', 'http://fok.zevkiselim.nl/crew/ui/Anne.gif'),
(32, 'APK', 6941, '2000-10-26', 'http://fok.zevkiselim.nl/crew/ui/APK.jpg'),
(33, 'arachide.', 364404, '2012-01-01', 'http://fok.zevkiselim.nl/crew/ui/arachide.gif'),
(34, 'Automatic_Rock', 36763, '2002-09-23', 'http://fok.zevkiselim.nl/crew/ui/Automatic_Rock.jpg'),
(35, 'Bart', 65252, '2003-08-24', 'http://fok.zevkiselim.nl/crew/ui/Bart.png'),
(36, 'belsen', 32436, '2002-07-16', 'http://fok.zevkiselim.nl/crew/ui/belsen.jpg'),
(37, 'boem-dikkie', 137776, '2005-12-30', 'http://fok.zevkiselim.nl/crew/ui/boem-dikkie.png'),
(38, 'Bosbeetle', 27682, '2002-05-06', 'http://fok.zevkiselim.nl/crew/ui/Bosbeetle.gif'),
(39, 'Brighteyes ', 4089, '2000-05-22', 'http://fok.zevkiselim.nl/crew/ui/Brighteyes.gif'),
(40, 'Cat22 ', 161975, '2006-11-17', 'http://fok.zevkiselim.nl/crew/ui/Cat22.png'),
(41, 'Cobra4', 168091, '2007-02-06', 'http://fok.zevkiselim.nl/crew/ui/Cobra4.jpg'),
(42, 'Copycat ', 61646, '2003-07-21', 'http://fok.zevkiselim.nl/crew/ui/Copycat.gif'),
(43, 'DaMart ', 42184, '2002-12-12', 'http://fok.zevkiselim.nl/crew/ui/DaMart.gif'),
(44, 'Dark_Angelus ', 132619, '2005-10-13', 'http://fok.zevkiselim.nl/crew/ui/Dark_Angelus.gif'),
(45, 'De_Taartjesfee ', 255392, '2009-05-11', 'http://fok.zevkiselim.nl/crew/ui/De_Taartjesfee.gif'),
(46, 'debuurvrouw ', 131983, '2005-10-05', 'http://fok.zevkiselim.nl/crew/ui/debuurvrouw.jpg'),
(47, 'du_ke ', 372780, '2012-04-12', 'http://fok.zevkiselim.nl/crew/ui/99999.gif'),
(48, 'Dubbeldrank ', 21530, '2002-01-22', 'http://fok.zevkiselim.nl/crew/ui/Dubbeldrank.gif'),
(49, 'Fendy ', 19529, '2001-01-08', 'http://fok.zevkiselim.nl/crew/ui/Fendy.jpg'),
(50, 'Ferdo', 16943, '2001-10-06', 'http://fok.zevkiselim.nl/crew/ui/Ferdo.jpg'),
(51, 'Five_Horizons ', 59763, '2003-07-01', 'http://fok.zevkiselim.nl/crew/ui/Five_Horizons.gif'),
(117, 'Fopje', 356028, '2011-09-16', 'http://i.fokzine.net/usericons/356028/GoedeUI.gif'),
(118, 'Frank_Drebin', 367594, '2012-02-11', 'http://i.fokzine.net/usericons/367594/FDReb.jpg'),
(119, 'Friek_', 107365, '2004-11-04', 'http://i.fokzine.net/usericons/107365/verhulst1.jpg'),
(120, 'Frutsel', 8781, '2001-01-05', 'http://i.fokzine.net/usericons/8781/Willie_Close1.jpg'),
(121, 'GGMM', 35723, '2002-09-06', 'http://i.fokzine.net/usericons/35723/nieuweui.jpg'),
(122, 'HeaN82', 279246, '2009-11-09', 'http://i.fokzine.net/usericons/279246/0001bbb.gif'),
(123, 'HeatWave', 6253, '2000-09-26', 'http://i.fokzine.net/usericons/6253/heatwave.jpg'),
(124, 'HetKlusKonijn', 323439, '2010-10-30', 'http://i.fokzine.net/usericons/323439/a3234489803_2-1.jpg'),
(125, 'Hexagon', 75043, '2003-11-22', 'http://i.fokzine.net/usericons/75043/avatar.JPG'),
(126, 'Houniet', 50634, '2003-03-15', 'http://i.fokzine.net/usericons/50634/fok_ui.jpg'),
(127, 'iBenny', 255123, '2009-05-08', 'http://i.fokzine.net/usericons/255123/tessa.png'),
(128, 'IHVK', 139371, '2006-01-18', 'http://i.fokzine.net/usericons/139371/vogel_normal.jpeg'),
(129, 'JDude', 74976, '2003-11-21', 'http://i.fokzine.net/usericons/74976/kat4.gif'),
(130, 'jitzzzze', 39093, '2002-10-30', 'http://i.fokzine.net/usericons/39093/Jitz4.png'),
(131, 'Kaas-', 289170, '2010-01-27', 'http://i.fokzine.net/usericons/289170/Piecedbanquet.jpg'),
(132, 'kanovinnie', 84430, '2004-02-09', 'http://i.fokzine.net/usericons/84430/fokava.jpg'),
(133, 'Karina', 9859, '2001-02-09', 'http://i.fokzine.net/usericons/9859/28vb034.png'),
(134, 'Lavenderr', 249559, '2009-03-22', 'http://i.fokzine.net/usericons/249559/naamlavender.jpg'),
(135, 'LethalNinja', 229247, '2008-09-23', 'http://i.fokzine.net/usericons/229247/pdAsu9k.gif'),
(136, 'liesje1979', 169210, '2007-02-16', 'http://i.fokzine.net/usericons/169210/cookie.jpg'),
(137, 'LittleBrownie', 379283, '2012-07-05', 'http://i.fokzine.net/usericons/379283/AngelKirby.gif'),
(138, 'Lois', 3660, '2000-05-05', 'http://i.fokzine.net/usericons/3660/lois.gif'),
(139, 'LompeHork', 280647, '2009-11-20', 'http://i.fokzine.net/usericons/280647/Chelios.gif'),
(140, 'Lotusss', 88561, '2004-03-12', 'http://i.fokzine.net/usericons/88561/mij_bruin.jpg'),
(141, 'Lutte', 316232, '2010-08-28', 'http://i.fokzine.net/usericons/316232/orange_blue.png'),
(142, 'Magneet', 33169, '2002-07-29', 'http://i.fokzine.net/usericons/33169/magneetlogo.jpg'),
(143, 'Maharbal', 128002, '2005-08-20', 'http://i.fokzine.net/usericons/128002/Fok.jpg'),
(144, 'Maisnon', 134410, '2005-11-07', 'http://i.fokzine.net/usericons/134410/fearl.gif'),
(145, 'MissBliss', 111829, '2005-01-13', 'http://i.fokzine.net/usericons/111829/MBestwelhip.gif'),
(146, 'Misstique', 127981, '2005-08-20', 'http://i.fokzine.net/usericons/127981/Tiek icon 10KB.jpg'),
(147, 'Ml-etje', 216210, '2008-05-25', 'http://i.fokzine.net/usericons/216210/lips.jpg'),
(148, 'Mortaxx', 206731, '2008-02-20', 'http://i.fokzine.net/usericons/206731/rsz_stalin_1902.gif'),
(149, 'motorbloempje', 162870, '2006-12-03', 'http://i.fokzine.net/usericons/162870/hetty_klein.png'),
(150, 'murp', 58651, '2003-06-21', 'http://i.fokzine.net/usericons/58651/2nut85v.gif'),
(151, 'Mylene', 16715, '2001-09-30', 'http://i.fokzine.net/usericons/16715/rain_04.gif'),
(152, 'Natalie', 28442, '2002-05-16', 'http://i.fokzine.net/usericons/28442/HowlingWolfUFO.gif'),
(153, 'Nibb-it', 304498, '2010-05-25', 'http://i.fokzine.net/usericons/304498/dewildt.jpg'),
(154, 'NJ', 24807, '2002-03-13', 'http://i.fokzine.net/usericons/24807/Rules.gif'),
(155, 'Oerbeer', 332000, '2011-01-16', 'http://i.fokzine.net/usericons/332000/GeenAnimatie.gif'),
(156, 'Ole', 22592, '2002-02-10', 'http://i.fokzine.net/usericons/22592/gatootje.jpg'),
(157, 'Opa.Bakkebaard', 240730, '2009-01-05', 'http://i.fokzine.net/usericons/240730/icon fixed.gif'),
(158, 'paddy', 92303, '2004-04-16', 'http://i.fokzine.net/usericons/92303/mssmack.gif'),
(159, 'Pharkus', 54263, '2003-04-29', 'http://i.fokzine.net/usericons/54263/Untitled.png'),
(160, 'Puala', 228500, '2008-09-16', 'http://i.fokzine.net/usericons/228500/ui2.gif'),
(161, 'Re', 262, '1999-09-26', 'http://i.fokzine.net/usericons/262/UI-clean.gif'),
(162, 'rene90', 177156, '2007-04-19', 'http://i.fokzine.net/usericons/177156/fok2.jpg'),
(163, 'Renesite', 72712, '2003-10-30', 'http://i.fokzine.net/usericons/72712/avak.jpg'),
(164, 'RockabeIIa', 190853, '2007-09-06', 'http://i.fokzine.net/usericons/190853/fokwoman.jpg'),
(165, 'rubbereend', 17650, '2001-10-22', 'http://i.fokzine.net/usericons/17650/femke.jpg'),
(166, 'Sack_Blabbath', 84117, '2004-02-06', 'http://i.fokzine.net/usericons/84117/bs2[1].gif'),
(167, 'SaintOfKillers', 67640, '2003-09-12', 'http://i.fokzine.net/usericons/67640/tool.jpg'),
(168, 'senesta', 121347, '2005-05-22', 'http://i.fokzine.net/usericons/121347/senesta.jpg'),
(169, 'SiIk', 349633, '2011-07-03', 'http://i.fokzine.net/usericons/349633/r7iNe.gif'),
(170, 'sitting_elfling', 114335, '2005-02-12', 'http://i.fokzine.net/usericons/114335/D2swO9M.gif'),
(171, 'Sjeen', 7020, '2000-10-28', 'http://i.fokzine.net/usericons/7020/sjeen-avatar.jpg'),
(172, 'shmoopy', 11324, '2001-04-05', 'http://i.fokzine.net/usericons/11324/shmodje7.jpg'),
(173, 'Sounddragon', 88754, '2004-03-14', 'http://i.fokzine.net/usericons/88754/sd4.gif'),
(174, 'sp3c', 14679, '2001-08-10', 'http://i.fokzine.net/usericons/14679/bluestuco.jpg'),
(175, 'Specularium', 232445, '2008-10-22', 'http://i.fokzine.net/usericons/232445/fireava.gif'),
(176, 'Tamashii', 193540, '2007-10-06', 'http://i.fokzine.net/usericons/193540/wauw..jpg'),
(177, 'timmmmm', 221644, '2008-07-15', 'http://i.fokzine.net/usericons/221644/eplso6.jpg'),
(178, 'UIO_AMS', 61302, '2003-07-16', 'http://i.fokzine.net/usericons/61302/tick.JPG'),
(179, 'Vonkenboer', 92034, '2004-04-13', 'http://i.fokzine.net/usericons/92034/fa1xky.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Rol`
--

CREATE TABLE IF NOT EXISTS `Rol` (
  `PK_Rol` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Subsite` int(11) NOT NULL,
  `Afkorting` varchar(50) NOT NULL,
  `Omschrijving` varchar(50) NOT NULL,
  PRIMARY KEY (`PK_Rol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Gegevens worden uitgevoerd voor tabel `Rol`
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
-- Tabelstructuur voor tabel `Subsite`
--

CREATE TABLE IF NOT EXISTS `Subsite` (
  `PK_Subsite` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(100) NOT NULL,
  PRIMARY KEY (`PK_Subsite`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `Subsite`
--

INSERT INTO `Subsite` (`PK_Subsite`, `Naam`) VALUES
(1, 'Forum'),
(2, 'Frontpage');
