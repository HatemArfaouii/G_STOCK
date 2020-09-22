-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 19 juil. 2020 à 17:01
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `stock`
--

-- --------------------------------------------------------

--
-- Structure de la table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  `brand_active` int(11) NOT NULL DEFAULT '0',
  `brand_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_active`, `brand_status`) VALUES
(1, 'Gap', 1, 2),
(2, 'Forever 21', 1, 2),
(3, 'Gap', 1, 2),
(4, 'Forever 21', 1, 2),
(5, 'Adidas', 1, 2),
(6, 'Gap', 1, 2),
(7, 'Forever 21', 1, 2),
(8, 'Adidas', 1, 2),
(9, 'Gap', 1, 2),
(10, 'Forever 21', 1, 2),
(11, 'Adidas', 1, 1),
(12, 'Gap', 1, 1),
(13, 'Forever 21', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `categories_id` int(11) NOT NULL AUTO_INCREMENT,
  `categories_name` varchar(255) NOT NULL,
  `categories_active` int(11) NOT NULL DEFAULT '0',
  `categories_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`categories_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_active`, `categories_status`) VALUES
(1, 'Sports ', 1, 2),
(2, 'Casual', 1, 2),
(3, 'Casual', 1, 2),
(4, 'Sport', 1, 2),
(5, 'Casual', 1, 2),
(6, 'Sport wear', 1, 2),
(7, 'Casual wear', 1, 1),
(8, 'Sports ', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `chaufeur`
--

DROP TABLE IF EXISTS `chaufeur`;
CREATE TABLE IF NOT EXISTS `chaufeur` (
  `id` int(110) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `adresse` varchar(155) NOT NULL,
  `mail` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chaufeur`
--

INSERT INTO `chaufeur` (`id`, `nom`, `tel`, `adresse`, `mail`) VALUES
(1, 'KHAYATI MONCEF', '93106378', 'Mnihla', '1637798/v/A/M/000');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(110) NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `adresse` varchar(155) NOT NULL,
  `mail` varchar(155) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `tel`, `adresse`, `mail`) VALUES
(1, 'kamel magraoui', '0', 'BOUSALEM', '125006/V/A/000'),
(2, 'OMAR AYADI ', '41130206', 'GARDIMAOU .JENDOUBA', '0'),
(3, 'NACER BOUALI', '22367592', ' JENDOUBA.8100', '0'),
(4, 'MHADEB SLAYMIA', '96006545', 'FERNANA.JENDOUBA', '0'),
(5, 'FOUED HANNACHI', '0', 'JENDOUBA', '0'),
(6, 'NOURDINE FERCHICHI', '98824203', 'JENDOUBA.8100', '1134108/K/A/M'),
(7, 'STE.SONOMAR', '98824203', 'ZONE INDUSTRIEL .JENDOUBA', '1134108/K/A/M'),
(8, 'HATEM ABIDI', '53792350', '', ''),
(9, 'JAMEL ABIDI', '50090004', '', ''),
(10, 'FETHI BALTI', '22462976', 'BOUSALEM .JENDOUBA', '0'),
(11, 'AYMEN GAZOUANI', '0', 'JENDOUBA', '0'),
(12, 'ANIS KWALDIA', '54386585', 'TABARKA.JENDOUBA', '95256/Z/C/A/000'),
(13, 'KMAIS HASSNAOUI', '58695593', 'TABARKA.JENDOUBA', '0'),
(14, 'WAHID SNOUSSI', '96723449', 'TABARKA.JENDOUBA', '0'),
(15, 'SABER KHIMIRI', '97655501', 'TABARKA.JENDOUBA', '0'),
(16, 'SALAH GADGADI', '26932180', 'FERNANA JENDOUBA', '0'),
(17, 'SAMIR ABIDI', '24879077', 'R.LE KEF JENDOUBA', '0'),
(18, 'ZIED HWIMLI', '0', 'BOUSALEM .JENDOUBA', '0'),
(19, 'YOUNESS ABIDI', '97686780', 'BOUSALEM .JENDOUBA', '0'),
(20, 'NAWFEL SALLAMI', '27628926', 'BOUSALEM .JENDOUBA', '0'),
(21, '0', '0', '0', '0 '),
(22, 'SOUHEIL ', '0', 'JENDOUBA', '0'),
(23, 'SAMI SONOMAR', '0', 'JENDOUBA.8100', '0'),
(24, 'BILEL SDIRI', '0', 'WED MLIZ', '0'),
(25, 'MOHSSEN HICHRI', '0', 'GARDIMAOU .JENDOUBA', '0'),
(26, 'HAYKEL HERZI', '98690880', 'GARDIMAOU .JENDOUBA', '0'),
(27, 'SOCIETE THALA MARBRE', '25083714', 'EL MOUROUJ .TUNIS', '1082614/L/A/M/000'),
(28, 'BILEL GASRINI', '23863347', 'SIDI HSSIN.TUNIS', '0'),
(29, 'NORDIN MEZZI', '50637576', 'SIDI HSSIN.TUNIS', '0'),
(30, 'SOCIETE ESBP', '20285353', 'NASSEN.TUNIS', '0'),
(31, 'FEHEM', '97783073', 'FOUCHANA.TUNIS', '0'),
(32, 'SOCIETE .CO GE MAR', '98717058', 'SIDI HSSIN.TUNIS', '1442690/D/M/B/000'),
(33, 'YOUNESS ELLOUZ', '22276339', 'NASSEN.TUNIS', '0'),
(34, 'ABDELHMID RAHMOUNI', '98965267', 'MHAMDIA.TUNIS', '0'),
(35, 'ALI RAHMOUNI', '95569885', 'R.MOURNAGUIA.TUNIS', '0'),
(36, 'SALEM GASRINI', '98356583', 'SIDI HSSIN.TUNIS', '0'),
(37, 'MORSSI GASSRINI', '21898923', 'SIDI HSSIN.TUNIS', '0'),
(38, 'MORAD JBALI', '95252044', 'SLOUGUIA.TESTOUR.BEJA', '1169373/P/N/C/000'),
(39, 'SABER LOUBIRI', '98728055', 'TEBOURSOUK.BEJA', '0'),
(40, 'SOCIETE EL JAWDA', '97684724', 'TEBOURSOUK.BEJA', '1314874/W/A/M/000'),
(41, 'SOCIETE HANNIBAL MARBRE', '0', 'CITE ETTAHRIR.TUNIS', '555008/Q/A/M/000'),
(42, 'SALHI MONGI', '0', 'EL BASSATINE.TUNIS', '0'),
(43, 'NOURI MARBRE', '22505940', 'EL BASSATINE.TUNIS', '0'),
(44, 'ZOUGLAMI MARBRE', '0', 'CITE ETTAHRIR.TUNIS', '0'),
(45, 'RAMZI HZAMI', '0', 'RAOUED.ARIANA', '0'),
(46, 'ALI HZAMI', '0', 'RAOUED.ARIANA', '0'),
(47, 'MARBRERIE NOURANE', '0', 'RAOUED.ARIANA', '0'),
(48, 'SOCIETE .HANA MARBRE', '0', 'RAOUED.ARIANA', '0'),
(49, 'SOCIETE  NEW MODE', '72994240', 'Z.I.UTIQUE BIZERTE', '358168/G/A/M/000'),
(50, '??? ?????? ??????', '0', 'RAOUED.ARIANA', '0'),
(51, 'WALID BJAOUI', '0', 'BJAOUA 1.MANNOUBA', '0'),
(52, 'SAMI FERCHICHI', '0', 'JDAYDA.MANOUBA.', '0'),
(53, 'SAHBI MEJRI', '0', 'MENZEL BOURGUIBA .BIZERTE', '0'),
(54, 'MAHJOUB ELLAFI', '0', 'TINJA.BIZERTE', '0'),
(55, 'ABBASSI ADEL', '0', 'BIZERTE', '0'),
(56, 'ALI HAMDI', '0', 'BIR CHALLOUF.BIZERTE', '0'),
(57, 'TEMRI MOHAMED FEYEZ', '0', 'BORJ CHALLOUF.BIZERTE', '0'),
(58, 'AHMED SAIDI ', '0', 'EL ALIA BIZERTE', '1118122/P/A/C/000'),
(59, 'SADOK SAHLI', '0', 'MENZEL JMIL.BIZERTE', '0'),
(60, 'MARBRERIE NEW MODE', '72494240', 'Z.I.UTIQUE BIZERTE', '358168/G/A/M/000'),
(61, 'KAMEL HDIRI', '0', 'JARZOUNA.BIZERTE', '0'),
(62, 'KARIM BEN BELGASEM', '0', 'TINJA.BIZERTE', '0'),
(63, 'MECHRGUI MARBRE', '97949526', 'BIR MASSYOUGA.BIZERTE', '1458595/M/A/C/000'),
(64, 'STE PIERRE DE CARTHAGE SARL', '72453330', 'ROUTE DE BIZERTE KM 1.5 7016 EL ALIA', '980057/W/A/M/000*VENTE EN SUSPENSION DE LA TVA .suivant decret n*039201600003'),
(65, 'BILEL BOUSELMI', '0', 'EL AZIB.BIZERTE', '0'),
(66, 'ADEL BJAOUI', '0', 'MENZEL BOURGUIBA .BIZERTE', '0'),
(67, 'MISTRI MOHAMED HBIB ', '0', 'BIZERTE', '1465827/B/A/C/000'),
(68, 'SABER BOUSELMI', '0', 'MENZEL JMIL.BIZERTE', '0'),
(69, 'KAYRI HAGGARI', '0', 'BIZERTE', '0'),
(70, 'MEKDED MRAYDI', '0', 'MENZEL JMIL.BIZERTE', '0'),
(71, '0', '0   ', '0', '0'),
(72, 'BOUGANMI MARBRE ', '0', 'MENZEL JMIL.BIZERTE', '1045569/Q/A/M/000'),
(73, 'NAWFEL BJAOUI  ', '0 ', 'MENZEL BOURGUIBA .BIZERTE ', '1461447/A/N/C/000'),
(74, '  MARBRERIE EL JAWDA', ' 0 ', '  TEBOURSOUK .BEJA', '  1314874/W/A/M/000'),
(75, '0', ' 0  ', '0', '0'),
(76, 'AMOR .DESIGN MARBRE  ', '  0', ' SIDI HSIN .SIJOUMI.TUNIS ', '  16374048/Q/A/M/000'),
(77, ' ANIS KWALDIA ', ' 0', '   ZI.TABARKA .JENDOUBA', ' 95256/Z/C/A/000'),
(78, ' SALAH GUNMIE ', '  0', '  MENZEL JMIL .BIZERTE', ' 1623983/W/A/C/000'),
(79, '  MARBRERIE EL  BARAKA-MOURAD JBALI', '  0', '  SLOUGUIA.TESTOUR .BEJA', '  1169373/PN/C/000'),
(80, ' TAWFIK X ', '0', '  ROUTE JDAYDA.TEBOURBA.MANNOUBA', '  0');

-- --------------------------------------------------------

--
-- Structure de la table `comfact`
--

DROP TABLE IF EXISTS `comfact`;
CREATE TABLE IF NOT EXISTS `comfact` (
  `idfact` varchar(255) NOT NULL,
  `idprod` varchar(150) NOT NULL,
  `qtprod` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` varchar(150) NOT NULL,
  `client_name` varchar(155) NOT NULL,
  `client_contact` varchar(155) NOT NULL,
  `sub_total` varchar(155) NOT NULL,
  `vat` varchar(155) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `detfact`
--

DROP TABLE IF EXISTS `detfact`;
CREATE TABLE IF NOT EXISTS `detfact` (
  `idfact` varchar(255) NOT NULL,
  `idprod` varchar(150) NOT NULL,
  `qtprod` varchar(155) NOT NULL,
  `client` varchar(255) NOT NULL,
  `stat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `detfact`
--

INSERT INTO `detfact` (`idfact`, `idprod`, `qtprod`, `client`, `stat`) VALUES
('9', '  F-400-GR', '1', '95256/Z/C/A/000', '1'),
('9', '  040002', '17', '95256/Z/C/A/000', '1'),
('9', '  040004', '10', '95256/Z/C/A/000', '1'),
('9', '070011  ', '1', '95256/Z/C/A/000', '1'),
('9', 'ABRAPR018 ', '5', '95256/Z/C/A/000', '1'),
('9', '  030006', '3', '95256/Z/C/A/000', '1'),
('9', '  DS-230-SP', '1', '95256/Z/C/A/000', '1'),
('9', '  040003', '5', '95256/Z/C/A/000', '1'),
('10', 'DS-122-X-D  ', '1', '1134108/K/A/M', '1'),
('10', '  DS-230-SP', '2', '1134108/K/A/M', '1'),
('10', '  040002', '10', '1134108/K/A/M', '1'),
('10', '  040004', '8', '1134108/K/A/M', '1'),
('10', '  DR00003', '1', '1134108/K/A/M', '1'),
('10', '070011  ', '6', '1134108/K/A/M', '1'),
('10', '  110002', '15', '1134108/K/A/M', '1'),
('10', '  040003', '8', '1134108/K/A/M', '1'),
('10', '  F-400-GR', '1', '1134108/K/A/M', '1'),
('10', '  040005', '2', '1134108/K/A/M', '1'),
('10', 'FEUTR1802A', '3', '1134108/K/A/M', '1'),
('10', 'ABRAPR019', '25', '1134108/K/A/M', '1'),
('11', '030003', '80', '358168/G/A/M/000', '1'),
('11', '030003A', '80', '358168/G/A/M/000', '1'),
('11', '  FRF-N-5 EXT', '36', '358168/G/A/M/000', '1'),
('11', 'ABRAPR018 ', '50', '358168/G/A/M/000', '1'),
('11', '070011  ', '5', '358168/G/A/M/000', '1'),
('11', 'FEUTR1802A', '2', '358168/G/A/M/000', '1'),
('11', '  110002', '5', '358168/G/A/M/000', '1'),
('11', '  RES0003', '4', '358168/G/A/M/000', '1'),
('11', '  7000', '1', '358168/G/A/M/000', '1'),
('11', '  040002', '2', '358168/G/A/M/000', '1'),
('11', '  040003', '2', '358168/G/A/M/000', '1'),
('11', '  040001', '2', '358168/G/A/M/000', '1'),
('11', '  040005', '1', '358168/G/A/M/000', '1'),
('11', '  DR00003', '1', '358168/G/A/M/000', '1'),
('12', ' ML B ', '1', '358168/G/A/M/000', '1'),
('12', '  TBL ART', '5', '358168/G/A/M/000', '1'),
('13', '  DS-230-SP', '1', '0', '1'),
('13', '  FRF-N-5 EXT', '3', '0', '1'),
('13', 'ABRAPR018 ', '50', '0', '1'),
('13', '  040001', '5', '0', '1'),
('13', '  040003', '5', '0', '1'),
('13', '  7000', '1', '0', '1'),
('13', '  110002', '5', '0', '1'),
('13', '  F-400-GR', '1', '0', '1'),
('14', '  040002', '5', '  16374048/Q/A/M/000', '1'),
('14', '  040001', '5', '  16374048/Q/A/M/000', '1'),
('14', '  040003', '5', '  16374048/Q/A/M/000', '1'),
('14', '  7000', '1', '  16374048/Q/A/M/000', '1'),
('14', 'FEUTR1802A', '2', '  16374048/Q/A/M/000', '1'),
('14', 'ABRAPR018 ', '10', '  16374048/Q/A/M/000', '1'),
('14', '  040005', '2', '  16374048/Q/A/M/000', '1'),
('15', '  DS-230-SP', '1', '95256/Z/C/A/000', '1'),
('15', '  040002', '17', '95256/Z/C/A/000', '1'),
('15', '  040003', '5', '95256/Z/C/A/000', '1'),
('15', '  FRF-N-5 EXT', '3', '95256/Z/C/A/000', '1'),
('15', '070011  ', '1', '95256/Z/C/A/000', '1'),
('15', 'ABRAPR018 ', '5', '95256/Z/C/A/000', '1'),
('15', '  110002', '1', '95256/Z/C/A/000', '1'),
('15', '', '', '95256/Z/C/A/000', '1'),
('15', '  F-400-GR', '1', '95256/Z/C/A/000', '1'),
('16', '  040005', '5', '0', '1'),
('16', '  F-350-GRS', '1', '0', '1'),
('16', '  DS-230-SP', '1', '0', '1'),
('16', '  040002', '5', '0', '1'),
('16', '  040003', '5', '0', '1'),
('16', '070011  ', '2', '0', '1'),
('16', 'FEUTR1802A', '1', '0', '1'),
('16', 'FEUTR1802', '1', '0', '1'),
('17', '  040005', '5', ' 1623983/W/A/C/000', '1'),
('17', '  F-350-GRS', '1', ' 1623983/W/A/C/000', '1'),
('17', '  DS-230-SP', '1', ' 1623983/W/A/C/000', '1'),
('17', '  040002', '5', ' 1623983/W/A/C/000', '1'),
('17', '  040003', '5', ' 1623983/W/A/C/000', '1'),
('17', '070011  ', '2', ' 1623983/W/A/C/000', '1'),
('17', 'ABRAPR018 ', '5', ' 1623983/W/A/C/000', '1'),
('17', 'FEUTR1802', '1', ' 1623983/W/A/C/000', '1'),
('17', 'FEUTR1802A', '1', ' 1623983/W/A/C/000', '1'),
('18', '  040002', '15', '1465827/B/A/C/000', '1'),
('18', '  040001', '10', '1465827/B/A/C/000', '1'),
('18', '  040003', '15', '1465827/B/A/C/000', '1'),
('18', '  040005', '6', '1465827/B/A/C/000', '1'),
('18', '  110002', '10', '1465827/B/A/C/000', '1'),
('18', 'ABRAPR018 ', '25', '1465827/B/A/C/000', '1'),
('18', '070011  ', '4', '1465827/B/A/C/000', '1'),
('18', 'FEUTR1802A', '2', '1465827/B/A/C/000', '1'),
('18', '  TBL ART', '2', '1465827/B/A/C/000', '1'),
('18', '  FOG 40', '1', '1465827/B/A/C/000', '1'),
('18', '  RES0002', '1', '1465827/B/A/C/000', '1'),
('18', '', '', '1465827/B/A/C/000', '1'),
('19', '  110002', '5', '1118122/P/A/C/000', '1'),
('19', '  DR10050', '1', '1118122/P/A/C/000', '1'),
('19', '  DR100100', '1', '1118122/P/A/C/000', '1'),
('19', '  DR100300', '1', '1118122/P/A/C/000', '1'),
('19', '  DR100400', '1', '1118122/P/A/C/000', '1'),
('19', '070011  ', '4', '1118122/P/A/C/000', '1'),
('19', '  F-400-GR', '1', '1118122/P/A/C/000', '1'),
('19', '  DS-180 ', '1', '1118122/P/A/C/000', '1'),
('19', '  DS-230-SP', '1', '1118122/P/A/C/000', '1'),
('19', 'FEUTR1802', '1', '1118122/P/A/C/000', '1'),
('19', '  FRF-N-5 EXT', '6', '1118122/P/A/C/000', '1'),
('19', '  110002', '5', '1118122/P/A/C/000', '1'),
('19', 'ABRAPR018 ', '25', '1118122/P/A/C/000', '1'),
('19', '  040002', '5', '1118122/P/A/C/000', '1'),
('19', '070011  ', '2', '1118122/P/A/C/000', '1'),
('19', 'FEUTR1802A', '1', '1118122/P/A/C/000', '1'),
('19', '  030006', '3', '1118122/P/A/C/000', '1'),
('19', '  110002', '5', '1118122/P/A/C/000', '1'),
('19', 'FEUTR1802A', '1', '1118122/P/A/C/000', '1'),
('19', '', '', '1118122/P/A/C/000', '1'),
('20', '070011  ', '1', '1045569/Q/A/M/000', '1'),
('20', ' ML B ', '1', '1045569/Q/A/M/000', '1'),
('20', '  110002', '5', '1045569/Q/A/M/000', '1'),
('20', '  F-350-GRS', '1', '1045569/Q/A/M/000', '1'),
('20', '  7000', '1', '1045569/Q/A/M/000', '1'),
('20', 'ABRAPR018 ', '25', '1045569/Q/A/M/000', '1'),
('20', '  RES0002', '1', '1045569/Q/A/M/000', '1'),
('20', '  040005', '1', '1045569/Q/A/M/000', '1'),
('20', '  040002', '2', '1045569/Q/A/M/000', '1'),
('20', '  040004', '2', '1045569/Q/A/M/000', '1'),
('20', '  07002', '5', '1045569/Q/A/M/000', '1'),
('21', '  040005', '1', '1461447/A/N/C/000', '1'),
('21', '070011  ', '1', '1461447/A/N/C/000', '1'),
('21', '  040004', '1', '1461447/A/N/C/000', '1'),
('21', '  040002', '1', '1461447/A/N/C/000', '1'),
('21', '  040005', '1', '1461447/A/N/C/000', '1'),
('21', '  110002', '5', '1461447/A/N/C/000', '1'),
('21', '  040002', '2', '1461447/A/N/C/000', '1'),
('21', '  040005', '1', '1461447/A/N/C/000', '1'),
('21', '  F-400-GR', '1', '1461447/A/N/C/000', '1'),
('21', '  DS-180 ', '1', '1461447/A/N/C/000', '1'),
('21', '070011  ', '2', '1461447/A/N/C/000', '1'),
('21', '  TBL ART', '2', '1461447/A/N/C/000', '1'),
('21', ' ML B ', '1', '1461447/A/N/C/000', '1'),
('21', 'ABRAPR018 ', '25', '1461447/A/N/C/000', '1'),
('21', 'FEUTR1802A', '1', '1461447/A/N/C/000', '1'),
('21', '  040005', '1', '1461447/A/N/C/000', '1'),
('21', '  DS-230-SP', '1', '1461447/A/N/C/000', '1'),
('21', '070011  ', '2', '1461447/A/N/C/000', '1'),
('22', '  F-400-GR', '1', '  1169373/PN/C/000', '1'),
('22', '  030006', '6', '  1169373/PN/C/000', '1'),
('22', '  110002', '5', '  1169373/PN/C/000', '1'),
('22', 'FEUTR1802A', '1', '  1169373/PN/C/000', '1'),
('22', ' DUR-250-G ', '1', '  1169373/PN/C/000', '1'),
('22', '  DS-230-SP', '1', '  1169373/PN/C/000', '1'),
('22', '  040001', '5', '  1169373/PN/C/000', '1'),
('22', '  DS-180 ', '1', '  1169373/PN/C/000', '1'),
('22', '  RES0002', '1', '  1169373/PN/C/000', '1'),
('22', 'FEUTR1802A', '1', '  1169373/PN/C/000', '1'),
('22', 'FOG 60 ', '1', '  1169373/PN/C/000', '1'),
('22', '  F-400-GR', '1', '  1169373/PN/C/000', '1'),
('22', '  040003', '5', '  1169373/PN/C/000', '1'),
('22', 'ABRAPR018 ', '25', '  1169373/PN/C/000', '1'),
('23', '  040002', '25', '0 ', '1'),
('23', '  040003', '25', '0 ', '1'),
('23', '  040001', '25', '0 ', '1'),
('23', '  040005', '10', '0 ', '1'),
('23', '  010000', '30', '0 ', '1'),
('23', '  010007', '30', '0 ', '1'),
('23', '010001  ', '30', '0 ', '1'),
('23', '  010003', '30', '0 ', '1'),
('23', '  010004', '30', '0 ', '1'),
('23', '070011  ', '20', '0 ', '1'),
('23', '  07002', '26', '0 ', '1'),
('23', '  DR10050', '10', '0 ', '1'),
('23', '  DR100100', '10', '0 ', '1'),
('23', '  DR1001000', '10', '0 ', '1'),
('23', '  DR100400', '10', '0 ', '1'),
('23', '  DR100800', '10', '0 ', '1'),
('23', '  DR100500', '10', '0 ', '1'),
('23', '  040004', '20', '0 ', '1'),
('23', '  070028', '3', '0 ', '1'),
('23', '  070028', '3', '0 ', '1'),
('23', '  MG10001', '3', '0 ', '1'),
('23', '  7000', '3', '0 ', '1'),
('23', '030003', '32', '0 ', '1'),
('23', 'FEUTR1802A', '5', '0 ', '1'),
('23', 'ABRAPR018 ', '100', '0 ', '1'),
('23', '  DS-230-SP', '3', '0 ', '1'),
('23', '  DR100400', '1', '0 ', '1'),
('23', '  FOG 30', '3', '0 ', '1'),
('23', '', '', '0 ', '1'),
('23', '', '', '0 ', '1'),
('23', '', '', '0 ', '1'),
('24', '  PL-3/4', '1', '0', '1'),
('24', '  FOG 20', '3', '0', '1'),
('24', '  FOG 25', '2', '0', '1'),
('24', '  TBL ART', '1', '0', '1'),
('24', ' ML B ', '1', '0', '1'),
('24', '  FRF-N-5 EXT', '25', '0', '1'),
('24', '  F-400-GR', '1', '0', '1'),
('24', '  DR100100', '10', '0', '1'),
('24', '  RES0003', '1', '0', '1'),
('24', '', '', '0', '1'),
('24', '', '', '0', '1'),
('25', '  040002', '5', '  0', '1'),
('25', '  040003', '5', '  0', '1'),
('25', '  040005', '5', '  0', '1'),
('25', 'FEUTR1802', '1', '  0', '1'),
('25', 'FEUTR1802', '1', '  0', '1'),
('25', '', '', '  0', '1'),
('26', '  040002', '10', '  1169373/PN/C/000', '1'),
('26', '  040003', '10', '  1169373/PN/C/000', '1'),
('26', '  040001', '10', '  1169373/PN/C/000', '1'),
('26', '  040005', '20', '  1169373/PN/C/000', '1'),
('26', '  F-400-GR', '2', '  1169373/PN/C/000', '1'),
('26', '  DS-230-SP', '2', '  1169373/PN/C/000', '1'),
('26', '  ABRAPRO019', '50', '  1169373/PN/C/000', '1'),
('26', '  FRF-N-5 EXT', '36', '  1169373/PN/C/000', '1'),
('27', '  040002', '5', '0', '1'),
('27', '  TBL ART', '1', '0', '1'),
('27', '  ABRAPRO019', '5', '0', '1'),
('27', '  040004', '5', '0', '1'),
('27', '', '', '0', '1'),
('28', '070011  ', '2', '0', '1'),
('29', '  F-350-GRS', '10', '0', '1'),
('30', '  F-350-GRS', '2', '358168/G/A/M/000', '1'),
('30', '  030016', '36', '358168/G/A/M/000', '1'),
('30', '  BR-24', '4', '358168/G/A/M/000', '1'),
('30', '  BR-120', '4', '358168/G/A/M/000', '1'),
('30', '  BR-60', '4', '358168/G/A/M/000', '1'),
('30', '  BR-36', '4', '358168/G/A/M/000', '1'),
('30', '  BR-24', '4', '358168/G/A/M/000', '1'),
('31', '  030006', '12', '555008/Q/A/M/000', '1'),
('31', 'ABRAPR018 ', '25', '555008/Q/A/M/000', '1'),
('31', 'FEUTR1802', '1', '555008/Q/A/M/000', '1'),
('32', '  F-400-GR', '1', '  1314874/W/A/M/000', '0'),
('32', '  FOG 45', '1', '  1314874/W/A/M/000', '0'),
('32', 'FEUTR1802A', '1', '  1314874/W/A/M/000', '0'),
('33', '030003', '40', '358168/G/A/M/000', '1'),
('33', '  010009', '36', '358168/G/A/M/000', '1'),
('33', '  FRF-N-5 EXT', '30', '358168/G/A/M/000', '1'),
('33', '030003A', '40', '358168/G/A/M/000', '1'),
('33', '  040001', '1', '358168/G/A/M/000', '1'),
('33', '  040003', '2', '358168/G/A/M/000', '1'),
('33', '070011  ', '4', '358168/G/A/M/000', '1'),
('33', '  7000', '1', '358168/G/A/M/000', '1'),
('33', '  110002', '10', '358168/G/A/M/000', '1'),
('33', 'ABRAPR018 ', '50', '358168/G/A/M/000', '1'),
('33', 'FEUTR1802', '1', '358168/G/A/M/000', '1');

-- --------------------------------------------------------

--
-- Structure de la table `detvoiture`
--

DROP TABLE IF EXISTS `detvoiture`;
CREATE TABLE IF NOT EXISTS `detvoiture` (
  `idfact` varchar(255) NOT NULL,
  `idprod` varchar(150) NOT NULL,
  `qtprod` varchar(155) NOT NULL,
  `client` varchar(255) NOT NULL,
  `stat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `detvoiture`
--

INSERT INTO `detvoiture` (`idfact`, `idprod`, `qtprod`, `client`, `stat`) VALUES
('10', '  010000', '20', '', '0'),
('10', '  110002', '1', '', '0'),
('10', '010001  ', '50', '', '0'),
('10', '  RES0002', '10', '', '0'),
('10', '  030006', '100', '', '0'),
('10', '  010004', '1', '', '0'),
('10', '  07002', '5', '', '0'),
('10', '  070028', '1', '', '0'),
('10', '  MG10002', '1', '', '0'),
('10', '  7000', '6', '', '0'),
('10', '  RES0003', '4', '', '0'),
('10', '  DR100100', '2', '', '0'),
('10', '  010007', '5', '', '0'),
('10', '070011  ', '3', '', '0');

-- --------------------------------------------------------

--
-- Structure de la table `devfact`
--

DROP TABLE IF EXISTS `devfact`;
CREATE TABLE IF NOT EXISTS `devfact` (
  `idfact` varchar(255) NOT NULL,
  `idprod` varchar(150) NOT NULL,
  `qtprod` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

DROP TABLE IF EXISTS `devis`;
CREATE TABLE IF NOT EXISTS `devis` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` varchar(150) NOT NULL,
  `client_name` varchar(155) NOT NULL,
  `client_contact` varchar(155) NOT NULL,
  `sub_total` varchar(155) NOT NULL,
  `vat` varchar(155) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) NOT NULL,
  `tel` varchar(155) NOT NULL,
  `adresse` varchar(155) NOT NULL,
  `mail` varchar(155) NOT NULL,
  `matricule` varchar(155) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`id`, `nom`, `tel`, `adresse`, `mail`, `matricule`) VALUES
(1, 'SOCIETE INDUSTRUELLE DE L ABRASIF CHEYLUS', '71940399', 'CHARGUIA 2 .ARIANA.TUNIS', '', '785842Y/A/M/000'),
(2, 'LA MAISON DE L ABRASIF', '71940399', 'CHARGUIA 2 .ARIANA.TUNIS', '0', '785842Y/A/M/000'),
(3, 'SOCIETE BACCOUCHE NEGOCE', '29625230', 'N5 RUE EL KAHNA-ROUTE X DENDEN', 'sbn@hexabyte.tn', '1370092M/A/M/000'),
(4, 'CONTINONTAL DISTRIBUTION', '70836665', '29 RUE DE L ARTISANAT.ZI.CHARGUIA 2.20350.ARIANA.TUNIS', 'WWW.CONTINONTAL.COM.TN', '015070S/A/M/000');

-- --------------------------------------------------------

--
-- Structure de la table `matricule`
--

DROP TABLE IF EXISTS `matricule`;
CREATE TABLE IF NOT EXISTS `matricule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `matricule`
--

INSERT INTO `matricule` (`id`, `mat`) VALUES
(1, '4423 TU 189'),
(2, '4423 TU 189');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `client_name`, `client_contact`, `sub_total`, `vat`, `total_amount`, `discount`, `grand_total`, `paid`, `due`, `payment_type`, `payment_status`, `order_status`) VALUES
(9, '2020-05-02', 'ANIS KWALDIA', '95256/Z/C/A/000', '613.516', '116.568', '730.084', '0', '730.084', '0', '730.084', 1, 1, 1),
(10, '2020-05-03', 'STE.SONOMAR', '1134108/K/A/M', '2583.624', '490.889', '3074.513', '0', '3074.513', '0', '3074.513', 1, 1, 1),
(11, '2020-05-12', 'SOCIETE  NEW MODE', '358168/G/A/M/000', '1238.731', '235.359', '1474.090', '0', '1474.090', '0', '1474.090', 1, 1, 1),
(12, '2020-05-12', 'SOCIETE  NEW MODE', '358168/G/A/M/000', '175.840', '33.410', '209.250', '0', '209.250', '0', '209.250', 1, 1, 1),
(13, '2020-05-14', 'RAMZI HZAMI', '0', '580.810', '110.354', '691.164', '0', '691.164', '0', '691.164', 1, 1, 1),
(14, '2020-05-16', 'AMOR .DESIGN MARBRE  ', '  16374048/Q/A/M/000', '316.031', '60.046', '376.077', '0', '376.077', '0', '376.077', 1, 1, 1),
(15, '2020-05-15', 'ANIS KWALDIA', '95256/Z/C/A/000', '545.566', '103.658', '649.224', '0', '649.224', '0', '649.224', 1, 1, 1),
(16, '2020-05-18', 'SALAH GUENMIE', '0', '666.795', '126.691', '793.486', '0', '793.486', '0', '793.486', 1, 1, 1),
(17, '2020-05-18', ' SALAH GUNMIE ', ' 1623983/W/A/C/000', '675.395', '128.325', '803.720', '0', '803.720', '0', '803.720', 1, 1, 1),
(18, '2020-05-20', 'MISTRI MOHAMED HBIB ', '1465827/B/A/C/000', '884.878', '168.127', '1053.005', '0', '1053.005', '0', '1053.005', 1, 1, 1),
(19, '2020-05-22', 'AHMED SAIDI ', '1118122/P/A/C/000', '835.385', '158.723', '994.108', '0', '994.108', '0', '994.108', 1, 1, 1),
(20, '2020-05-30', 'BOUGANMI MARBRE ', '1045569/Q/A/M/000', '565.685', '107.480', '673.165', '0', '673.165', '0', '673.165', 1, 1, 1),
(21, '2020-06-05', 'NAWFEL BJAOUI  ', '1461447/A/N/C/000', '859.364', '163.279', '1022.643', '0', '1022.643', '0', '1022.643', 1, 1, 1),
(22, '2020-06-09', '  MARBRERIE EL  BARAKA-MOURAD JBALI', '  1169373/PN/C/000', '995.030', '189.056', '1184.086', '0', '1184.086', '0', '1184.086', 1, 1, 1),
(23, '2020-06-21', '0', '0 ', '3024.705', '574.694', '3599.399', '0', '3599.399', '0', '3599.399', 1, 1, 1),
(24, '2020-06-21', 'OMAR AYADI ', '0', '1023.640', '194.492', '1218.132', '0', '1218.132', '0', '1218.132', 1, 1, 1),
(25, '2020-06-23', ' TAWFIK X ', '  0', '343.595', '65.283', '408.878', '0', '408.878', '0', '408.878', 1, 1, 1),
(26, '2020-06-23', '  MARBRERIE EL  BARAKA-MOURAD JBALI', '  1169373/PN/C/000', '2063.910', '392.143', '2456.053', '0', '2456.053', '0', '2456.053', 1, 1, 1),
(27, '2020-06-23', 'ABDELHMID RAHMOUNI', '0', '106.730', '20.279', '127.009', '0', '127.009', '0', '127.009', 1, 1, 1),
(28, '2020-06-24', 'ABDELHMID RAHMOUNI', '0', '20.200', '3.838', '24.038', '0', '24.038', '0', '24.038', 1, 1, 1),
(29, '2020-07-03', 'OMAR AYADI ', '0', '2230.000', '423.700', '2653.700', '0', '2653.700', '0', '2653.700', 1, 1, 1),
(30, '2020-07-12', 'SOCIETE  NEW MODE', '358168/G/A/M/000', '1571.720', '298.627', '1870.347', '0', '1870.347', '0', '1870.347', 1, 1, 1),
(31, '2020-07-12', 'SOCIETE HANNIBAL MARBRE', '555008/Q/A/M/000', '164.800', '31.312', '196.112', '0', '196.112', '0', '196.112', 1, 1, 1),
(32, '2020-07-12', '  MARBRERIE EL JAWDA', '  1314874/W/A/M/000', '219.000', '41.610', '260.610', '0', '260.610', '0', '260.610', 1, 1, 0),
(33, '2020-07-15', 'SOCIETE  NEW MODE', '358168/G/A/M/000', '921.226', '175.033', '1096.259', '0', '1096.259', '0', '1096.259', 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `order_item`
--

DROP TABLE IF EXISTS `order_item`;
CREATE TABLE IF NOT EXISTS `order_item` (
  `order_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL DEFAULT '0',
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `brand_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `fornisseur` varchar(255) NOT NULL,
  `ref` varchar(150) NOT NULL,
  `des` varchar(255) NOT NULL,
  `qt` varchar(155) NOT NULL,
  `prix` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`fornisseur`, `ref`, `des`, `qt`, `prix`) VALUES
('    SOCIETE INDUSTRUELLE DE L ABRASIF CHEYLUS    ', '  010000', '    SEGMENT CASSANI N00       ', '2', '      1.000     '),
(' SOCIETE INDUSTRUELLE DE L ABRASIF CHEYLUS ', '  010007', '   SEGMENT CASSANI N1B  ', '3', ' 1.000    '),
(' SOCIETE INDUSTRUELLE DE L ABRASIF CHEYLUS ', '010001  ', '    SEGMENT CASSANI N1 ', '-20', '    1.000 '),
(' SOCIETE INDUSTRUELLE DE L ABRASIF CHEYLUS ', '  010003', ' CASSANI N3    ', '30', '    1.000 '),
(' SOCIETE INDUSTRUELLE DE L ABRASIF CHEYLUS ', '  010004', '    SEGMENT CASSANI N4 ', '29', '    1.000 '),
('    SOCIETE INDUSTRUELLE DE L ABRASIF CHEYLUS    ', '070011  ', '       PATE A POLYRE MARBRE MIR 9    ', '77', '       10.100    '),
('  LA MAISON DE L ABRASIF  ', '  110002', '    DISQUE ZEC/ COD 180*22 C36   ', '5', '   6.800    '),
(' LA MAISON DE L ABRASIF ', '  DR00003', '    DURCISSEUR 1KG ', '1', '    48.000 '),
(' LA MAISON DE L ABRASIF ', '  DR10050', '    DISQUE RESINE DIAMANT SUPERPADS STD 100 P50 ', '8', '    6.450 '),
(' LA MAISON DE L ABRASIF ', '  DR100100', '    DISQUE RESINE DIAMANT SUPERPADS STD 100 P100 ', '6', '   6.280 '),
(' LA MAISON DE L ABRASIF ', '  DR100300', '    DISQUE RESINE DIAMANT SUPERPADS STD 100 P300 ', '8', '    6.290 '),
('   LA MAISON DE L ABRASIF   ', '  DR100400', '      DISQUE RESINE DIAMANT SUPERPADS STD 100 P400   ', '8', '      6.290   '),
(' LA MAISON DE L ABRASIF ', '  DR100500', '    DISQUE RESINE DIAMANT SUPERPADS STD 100 P500 ', '-114', '   6.290  '),
('  inconuu   ', '  DR100800', '    DISQUE RESINE DIAMANT SUPERPADS STD 100 P800 ', '-12', '    6.290 '),
(' LA MAISON DE L ABRASIF ', '  DR1001000', '    DISQUE RESINE DIAMANT SUPERPADS STD 100 P1000 ', '-114', ' 6.290    '),
('  LA MAISON DE L ABRASIF  ', '  RES0003', '     RESINE DE COLLAGE R033049 BIDON DE 5KG  ', '6', '     64.000  '),
(' LA MAISON DE L ABRASIF ', '  040004', '    PLATEAUX 250 N4 ', '80', '    8.063 '),
('   LA MAISON DE L ABRASIF   ', '  030006', '      SEGMENT FRUNKFURT 5 EXTRA   ', '-80', '      7.600'),
(' SOCIETE INDUSTRUELLE DE L ABRASIF CHEYLUS ', '  070028', '    RESINE VERTICALE 1KG SIAC ', '0', '    15.200 '),
('  LA MAISON DE L ABRASIF  ', '  RES0002', '     RESINE DE COLLAGE R033049 1KG   ', '15', '  12.800     '),
('   LA MAISON DE L ABRASIF   ', '  MG10001', '      MEULFLEX CONIQUE 110*90*55 G24 M14 MARBRE ET GRANITE   ', '10', '   17.500      '),
('  LA MAISON DE L ABRASIF  ', '  MG10002', '     MEULFLEX CONIQUE 110*90*55 G36 M14 MARBRE ET GRANITE  ', '9', '     17.200  '),
('   LA MAISON DE L ABRASIF   ', '  7000', '      VERNIS EXTRA LUX 750   ', '6', '      37.500   '),
('   SOCIETE INDUSTRUELLE DE L ABRASIF CHEYLUS   ', '  07002', '      DISQUE REGIDFLEX 180*22 C36 SF MARBRE    ', '55', '      6.800   '),
('  SOCIETE BACCOUCHE NEGOCE  ', '  KR-5', '     CRISTALLISANT KRISTALLUX 1 LITRE  ', '5', '     15.800  '),
('  SOCIETE INDUSTRUELLE DE L ABRASIF CHEYLUS  ', '030003', '  SEGMENT FRUNKFURT N 2	  ', '64', ' 1.800 '),
('  inconuu   ', '030003A', '  SEGMENT FRUNKFURT N 3 ', '168', '1.800'),
('  LA MAISON DE L ABRASIF  ', 'FEUTR1802A', '  FEUTERMA 180*20*22  ', '30', '29.000'),
(' LA MAISON DE L ABRASIF ', 'FEUTR1802', ' FEUTERMA 180*25*22 ', '8', ' 36.000 '),
('  LA MAISON DE L ABRASIF  ', 'ABRAPR018 ', '  DISQUE DE POLISSAGE 180*22 C120  ', '75', '  1.720  '),
(' SOCIETE BACCOUCHE NEGOCE ', 'DS-122-X-D  ', '    DISQUE DIAMANT 1200 X DIAMANT ', '0', '   1550.000 '),
(' SOCIETE BACCOUCHE NEGOCE ', ' DUR-250-G ', ' DURCISSEUR 250 G    ', '0', ' 8.500    '),
('   SOCIETE BACCOUCHE NEGOCE   ', '  DS-180 ', '      DISQUE 180 AVEC FLASQUE   ', '25', '      70.000   '),
('   SOCIETE BACCOUCHE NEGOCE   ', '  PL-3/4', '      PLATEAU DIAMETRE 250 VERT 3/4   ', '1', '      27.000   '),
('    SOCIETE BACCOUCHE NEGOCE    ', '  F-350-GRS', '       DISQUE 350 GRANITE SILENCIEUX     ', '10', '    223.000       '),
('     SOCIETE BACCOUCHE NEGOCE     ', '  TBL ART', '     TABLIER ARTIMAG        ', '80', ' 17.500 '),
('  SOCIETE BACCOUCHE NEGOCE  ', ' ML B ', '    MEULE ABORN DIAMENTEE   ', '1', '     100.840  '),
('  SOCIETE BACCOUCHE NEGOCE  ', '  REG 1', '   REGLETTE INOX 1M    ', '15', '     31.500  '),
('  SOCIETE BACCOUCHE NEGOCE  ', '  FOG 20', '     FORET GRANITE DIAMETRE 20  ', '10', '     55.000  '),
('  SOCIETE BACCOUCHE NEGOCE  ', '  FOG 25', '     FORET GRANITE DIAMETRE 25  ', '2', '     60.000  '),
('  SOCIETE BACCOUCHE NEGOCE  ', '  FOG 30', '  FORET GRANITE DIAMETRE 30     ', '20', '     65.000  '),
('  SOCIETE BACCOUCHE NEGOCE  ', '  FOG 35', '     FORET GRANITE DIAMETRE 35  ', '20', '     70.000  '),
('  SOCIETE BACCOUCHE NEGOCE  ', '  FOG 40', '   FORET GRANITE DIAMETRE 40    ', ' 0 ', '95.000  '),
('  SOCIETE BACCOUCHE NEGOCE  ', '  FOG 45', '     FORET DIAMETRE 45 GRANITE  ', '10', '     75.000  '),
('  SOCIETE BACCOUCHE NEGOCE  ', '  FOG 50', '     FORET GRANITE DIAMETRE 50  ', '10', '     75.000  '),
('  SOCIETE BACCOUCHE NEGOCE  ', 'FOG 60 ', '     FORET GRANITE DIAMETRE 60  ', '10', '     92.500  '),
('  SOCIETE BACCOUCHE NEGOCE  ', '  FOG 70', '     FORET GRANITE DIAMETRE 70  ', '10', '     100.000  '),
('  SOCIETE BACCOUCHE NEGOCE  ', '  FOG 80', '     FORET GRANITE DIAMETRE 80  ', '5', '     114.000  '),
('  SOCIETE BACCOUCHE NEGOCE  ', '  FOG 100', '   FORET GRANITE DIAMETRE 100    ', '10', '   180.000   '),
(' SOCIETE BACCOUCHE NEGOCE ', '  PLSB5EX', '      PLATEAU DIAM 250 N5/ EXTRA SOTUMAB ', '14', '    32.400 '),
('SOCIETE INDUSTRUELLE DE L ABRASIF CHEYLUS', '  DZEC125', '   DISQUE ZEC 36-125 SF', '0', '   5.000'),
(' SOCIETE BACCOUCHE NEGOCE ', '  SUPP125', '    SUPPORT PLASTIQUE POUR DISQUE FIBRE ', '3', '    4.950 '),
('LA MAISON DE L ABRASIF', '  040003', '   PLATEAUX 250 N3', '   125', '   8.063'),
(' LA MAISON DE L ABRASIF ', '  040001', '    PLATEAUX 250 N1 ', '    37 ', '8.063'),
('LA MAISON DE L ABRASIF', '  040002', '   PLATEAUX 250 N2', '   25', '   8.063'),
('LA MAISON DE L ABRASIF', '  040005', '   PLATEAUX 250 5 EXTRA', '   45', '   38.193'),
('  SOCIETE BACCOUCHE NEGOCE  ', '  F-400-GR', '     DISQUE 400 GRANITE SILENCIEUX  ', ' 10 ', '223.000   '),
(' SOCIETE BACCOUCHE NEGOCE ', '  DS-230-SP', '    DISQUE 230 TURBO FLASQUE ', '30', '  84.000   '),
(' SOCIETE BACCOUCHE NEGOCE ', '  FRF-N-5 EXT', '    SEGMENT FK EXTRA RESINE SB ', '120', '    8.700 '),
('SOCIETE INDUSTRUELLE DE L ABRASIF CHEYLUS', '  030016', 'SEGMENT FRUNKFURT N5 EXTRA SUPPORT RESINE   ', '   30', '   9.770'),
('LA MAISON DE L ABRASIF', '  AC1002014', '   PEAU DE MOUTON AUTO-AGRIPPANT 180 CONCAVE', '   5', '   28.536'),
('LA MAISON DE L ABRASIF', '  AC3002059', '   PLATEAU NORGRIP POUR PEAU DE MOUTON 180 M14', '   5', '   28.440'),
('SOCIETE BACCOUCHE NEGOCE', '  BR-24', '   BROSSE ANTIQUITE N500', '   10', '   38.700'),
('SOCIETE BACCOUCHE NEGOCE', '  BR-320', '   BROSSE ANTIQUITE N320', '   10', '   38.700'),
('SOCIETE BACCOUCHE NEGOCE', '  BR-120', '   BROSSE ANTIQUITE N120', '   10', '   38.700'),
('SOCIETE BACCOUCHE NEGOCE', '  BR-60', '   BROSSE ANTIQUITE N60', '   10', ' 38.700  '),
('SOCIETE BACCOUCHE NEGOCE', '  BR-36', '   BROSSE ANTIQUITE N36', '   10', '   38.700'),
('SOCIETE BACCOUCHE NEGOCE', '  BR-24', '   BROSSE ANTIQUITE N24', '  10', '   38.700'),
('SOCIETE BACCOUCHE NEGOCE', '  BR-46', '   BROSSE ANTIQUITE N46', '   10', '   38.700'),
('CONTINONTAL DISTRIBUTION', '  AT/230-2400S', '  MEULEUSE TORNADO 230MM.2400W ', '24', '   380.000'),
('SOCIETE INDUSTRUELLE DE L ABRASIF CHEYLUS', '  010009', '   SEGMENT SYNTHETIQUE VEERT 3/4', '164', '   5.200'),
('SOCIETE INDUSTRUELLE DE L ABRASIF CHEYLUS', '  ccc', '   cc', '   cc', '   cc');

-- --------------------------------------------------------

--
-- Structure de la table `retour`
--

DROP TABLE IF EXISTS `retour`;
CREATE TABLE IF NOT EXISTS `retour` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` varchar(150) NOT NULL,
  `client_name` varchar(155) NOT NULL,
  `client_contact` varchar(155) NOT NULL,
  `sub_total` varchar(155) NOT NULL,
  `vat` varchar(155) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `routourfact`
--

DROP TABLE IF EXISTS `routourfact`;
CREATE TABLE IF NOT EXISTS `routourfact` (
  `idfact` varchar(255) NOT NULL,
  `idprod` varchar(150) NOT NULL,
  `qtprod` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `mobile`) VALUES
(1, 'admin', '08121971', '', '123456789');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`order_id`, `order_date`, `client_name`, `client_contact`, `sub_total`, `vat`, `total_amount`, `discount`, `grand_total`, `paid`, `due`, `payment_type`, `payment_status`, `order_status`) VALUES
(1, '0000-00-00', '', '', '4302.655', '817.504', '5120.159', '0', '5120.159', '0', '5120.159', 1, 1, 0),
(2, '0000-00-00', '', '', '51.890', '9.859', '61.749', '0', '61.749', '0', '61.749', 1, 1, 0),
(3, '0000-00-00', '', '', '4483.450', '851.856', '5335.306', '0', '5335.306', '0', '5335.306', 1, 1, 0),
(4, '0000-00-00', '', '', '176.800', '33.592', '210.392', '0', '210.392', '0', '210.392', 1, 1, 0),
(5, '0000-00-00', '', '', '2886.150', '548.369', '3434.519', '0', '3434.519', '0', '3434.519', 1, 1, 0),
(6, '0000-00-00', '', '', '344.160', '65.390', '409.550', '0', '409.550', '0', '409.550', 1, 1, 0),
(7, '0000-00-00', '', '', '6234.000', '1184.460', '7418.460', '0', '7418.460', '0', '7418.460', 1, 1, 0),
(8, '0000-00-00', '', '', '2230.000', '423.700', '2653.700', '0', '2653.700', '0', '2653.700', 1, 1, 0),
(9, '0000-00-00', '', '', '614.000', '116.660', '730.660', '0', '730.660', '0', '730.660', 1, 1, 0),
(10, '0000-00-00', '', '', '2467.200', '468.768', '2935.968', '0', '2935.968', '0', '2935.968', 1, 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
