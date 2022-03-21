-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: s681.loopia.se
-- Generation Time: Jun 11, 2019 at 08:01 PM
-- Server version: 10.2.24-MariaDB-log
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmelektronik_net`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `password`, `role`) VALUES
(6, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cenovnik`
--

CREATE TABLE `cenovnik` (
  `cenovnikid` int(11) NOT NULL,
  `polazak` varchar(11) DEFAULT NULL,
  `stanicaod` varchar(11) DEFAULT NULL,
  `stanicado` varchar(11) DEFAULT NULL,
  `kola` varchar(11) DEFAULT NULL,
  `cena` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cenovnik`
--

INSERT INTO `cenovnik` (`cenovnikid`, `polazak`, `stanicaod`, `stanicado`, `kola`, `cena`) VALUES
(16, '1', 'Krusevac AS', 'Krusevac NP', 'ks-03777', '50'),
(17, '1', 'Krusevac AS', 'Cicevac AS', 'ks-03777', '180'),
(18, '1', 'Krusevac AS', 'Beograd AS', 'ks-03777', '1000'),
(19, '1', 'Krusevac NP', 'Cicevac AS', 'ks-03777', '150'),
(20, '1', 'Krusevac NP', 'Beograd AS', 'ks-03777', '950'),
(21, '1', 'Cicevac AS', 'Beograd AS', 'ks-03777', '800'),
(22, '2', 'Krusevac AS', 'Krusevac NP', 'ks-03789', '50'),
(23, '2', 'Krusevac AS', 'Cicevac AS', 'ks-03789', '180'),
(24, '2', 'Krusevac AS', 'Beograd AS', 'ks-03789', '1000'),
(25, '2', 'Krusevac NP', 'Cicevac AS', 'ks-03789', '150'),
(26, '2', 'Krusevac NP', 'Beograd AS', 'ks-03789', '950'),
(27, '2', 'Cicevac AS', 'Beograd AS', 'ks-03789', '800'),
(28, '3', 'Krusevac AS', 'Krusevac NP', 'ks-03777', '50'),
(29, '3', 'Krusevac AS', 'Cicevac AS', 'ks-03777', '180'),
(30, '3', 'Krusevac AS', 'Beograd AS', 'ks-03777', '1000'),
(31, '3', 'Krusevac NP', 'Cicevac AS', 'ks-03777', '150'),
(32, '3', 'Krusevac NP', 'Beograd AS', 'ks-03777', '950'),
(33, '3', 'Cicevac AS', 'Beograd AS', 'ks-03777', '800');

-- --------------------------------------------------------

--
-- Table structure for table `datumpolaska`
--

CREATE TABLE `datumpolaska` (
  `datumpolaskaid` int(11) NOT NULL,
  `datum` date NOT NULL,
  `polazakid` int(11) NOT NULL,
  `kolaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datumpolaska`
--

INSERT INTO `datumpolaska` (`datumpolaskaid`, `datum`, `polazakid`, `kolaid`) VALUES
(1, '2019-04-05', 1, 2),
(2, '2019-06-05', 2, 1),
(3, '2019-06-12', 1, 1),
(5, '2019-06-15', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `drzava`
--

CREATE TABLE `drzava` (
  `drzavaid` int(11) NOT NULL,
  `nazivd` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drzava`
--

INSERT INTO `drzava` (`drzavaid`, `nazivd`) VALUES
(1, 'Srbija'),
(2, 'Å vajcarska'),
(3, 'Crna Gora'),
(4, 'Makedonija'),
(5, 'MaÄ‘arska'),
(6, 'Bugarska'),
(7, 'Slovenija'),
(8, 'NemaÄka'),
(9, 'Å panija'),
(10, 'Italija'),
(11, 'Å vedska');

-- --------------------------------------------------------

--
-- Table structure for table `karta`
--

CREATE TABLE `karta` (
  `kartaid` int(11) NOT NULL,
  `datumpolaska` date NOT NULL,
  `cenovnikid` int(11) NOT NULL,
  `korisnikid` int(11) NOT NULL,
  `sedistebr` int(12) NOT NULL,
  `datumkupovine` date NOT NULL,
  `kola` varchar(12) NOT NULL,
  `brpol` int(12) NOT NULL,
  `racun` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karta`
--

INSERT INTO `karta` (`kartaid`, `datumpolaska`, `cenovnikid`, `korisnikid`, `sedistebr`, `datumkupovine`, `kola`, `brpol`, `racun`) VALUES
(11, '2019-06-08', 21, 3, 1, '2019-06-07', 'ks-03777', 1, '1'),
(12, '2019-06-08', 21, 3, 2, '2019-06-07', 'ks-03777', 1, '2'),
(13, '2019-06-08', 21, 3, 3, '2019-06-07', 'ks-03777', 1, '3'),
(14, '2019-06-08', 21, 3, 4, '2019-06-07', 'ks-03777', 1, '4'),
(15, '2019-06-08', 21, 3, 5, '2019-06-07', 'ks-03777', 1, '5'),
(16, '2019-06-08', 21, 3, 6, '2019-06-07', 'ks-03777', 1, '6'),
(17, '2019-06-09', 21, 3, 1, '2019-06-07', 'ks-03777', 1, '1'),
(18, '2019-06-15', 18, 2, 1, '2019-06-07', 'ks-03777', 1, '3682424242'),
(19, '2019-06-15', 18, 2, 2, '2019-06-07', 'ks-03777', 1, '3682424242'),
(20, '2019-06-12', 24, 1, 1, '2019-06-08', 'ks-03789', 2, '987987987985754'),
(21, '2019-06-12', 24, 1, 2, '2019-06-08', 'ks-03789', 2, '345325325324532'),
(22, '2019-06-12', 24, 1, 3, '2019-06-08', 'ks-03789', 2, '444444444535345'),
(23, '2019-06-12', 24, 1, 4, '2019-06-08', 'ks-03789', 2, '345345345'),
(24, '2019-06-10', 30, 1, 1, '2019-06-09', 'ks-03777', 3, '55555555'),
(25, '2019-06-10', 30, 1, 2, '2019-06-09', 'ks-03777', 3, '5555555555555'),
(26, '2019-06-10', 21, 3, 2, '2019-06-09', 'ks-03777', 1, '1'),
(27, '2019-06-18', 18, 8, 1, '2019-06-09', 'ks-03777', 1, '123'),
(28, '0000-00-00', 18, 10, 1, '2019-06-10', 'ks-03777', 1, ''),
(29, '2019-06-09', 18, 10, 1, '2019-06-10', 'ks-03777', 1, '44444444444444'),
(30, '2019-06-18', 18, 10, 1, '2019-06-10', 'ks-03777', 1, '777777777777'),
(31, '2019-06-18', 18, 10, 1, '2019-06-10', 'ks-03777', 1, '777777777777'),
(32, '2019-06-17', 18, 10, 1, '2019-06-10', 'ks-03777', 1, '555555'),
(33, '2019-06-17', 18, 10, 1, '2019-06-10', 'ks-03777', 1, '66666'),
(34, '2019-06-17', 18, 10, 1, '2019-06-10', 'ks-03777', 1, '34534535'),
(35, '0000-00-00', 18, 10, 1, '2019-06-10', 'ks-03777', 1, ''),
(36, '2019-06-17', 18, 10, 2, '2019-06-10', 'ks-03777', 1, '999999'),
(37, '2019-06-17', 18, 10, 2, '2019-06-10', 'ks-03777', 1, '84'),
(38, '2019-06-17', 18, 10, 2, '2019-06-10', 'ks-03777', 1, '84'),
(39, '2019-06-17', 18, 10, 3, '2019-06-10', 'ks-03777', 1, '84'),
(40, '2019-06-17', 18, 10, 4, '2019-06-10', 'ks-03777', 1, '345345345'),
(41, '2019-06-17', 18, 10, 4, '2019-06-10', 'ks-03777', 1, '34534535'),
(42, '2019-06-17', 18, 10, 6, '2019-06-10', 'ks-03777', 1, ''),
(43, '2019-06-17', 18, 16, 6, '2019-06-10', 'ks-03777', 1, '4444444444'),
(44, '2019-06-18', 18, 16, 1, '2019-06-10', 'ks-03777', 1, '222222222'),
(45, '2019-06-18', 18, 16, 1, '2019-06-10', 'ks-03777', 1, 'ggggggg'),
(46, '2019-06-18', 18, 16, 2, '2019-06-10', 'ks-03777', 1, '444444444444'),
(47, '2019-06-13', 18, 8, 1, '2019-06-11', 'ks-03777', 1, '123'),
(48, '2019-06-13', 18, 8, 1, '2019-06-11', 'ks-03777', 1, '123'),
(49, '2019-06-13', 18, 8, 2, '2019-06-11', 'ks-03777', 1, '123'),
(50, '2019-06-13', 18, 18, 2, '2019-06-11', 'ks-03777', 1, '456'),
(51, '2019-06-13', 18, 18, 2, '2019-06-11', 'ks-03777', 1, '456'),
(52, '2019-06-13', 18, 18, 3, '2019-06-11', 'ks-03777', 1, '456'),
(53, '2019-06-13', 18, 8, 3, '2019-06-11', 'ks-03777', 1, '123'),
(54, '2019-06-13', 18, 8, 4, '2019-06-11', 'ks-03777', 1, '123'),
(55, '2019-06-16', 18, 8, 2, '2019-06-11', 'ks-03777', 1, '123'),
(56, '2019-06-16', 18, 18, 3, '2019-06-11', 'ks-03777', 1, '456'),
(57, '2019-06-16', 18, 8, 3, '2019-06-11', 'ks-03777', 1, '123'),
(58, '2019-06-12', 18, 4, 1, '2019-06-11', 'ks-03777', 1, '3682424242'),
(59, '2019-06-12', 18, 2, 1, '2019-06-11', 'ks-03777', 1, '463185'),
(60, '2019-06-12', 18, 2, 1, '2019-06-11', 'ks-03777', 1, '463185'),
(61, '2019-06-12', 18, 2, 1, '2019-06-11', 'ks-03777', 1, '43737'),
(62, '2019-06-26', 18, 10, 1, '2019-06-11', 'ks-03777', 1, '8458458485'),
(63, '2019-06-26', 18, 10, 2, '2019-06-11', 'ks-03777', 1, '23232323'),
(64, '2019-06-26', 18, 10, 2, '2019-06-11', 'ks-03777', 1, '4545454545'),
(65, '2019-06-17', 18, 4, 6, '2019-06-11', 'ks-03777', 1, '43737'),
(66, '2019-06-17', 18, 4, 6, '2019-06-11', 'ks-03777', 1, '43737'),
(68, '2019-06-17', 18, 4, 6, '2019-06-11', 'ks-03777', 1, '43737'),
(69, '2019-06-17', 18, 4, 6, '2019-06-11', 'ks-03777', 1, '463185'),
(70, '2019-06-24', 30, 11, 1, '2019-06-11', 'ks-03777', 3, '333333333333'),
(71, '2019-06-24', 30, 10, 1, '2019-06-11', 'ks-03777', 3, '6666666666666'),
(72, '2019-06-17', 18, 2, 6, '2019-06-11', 'ks-03777', 1, '222222'),
(73, '2019-06-26', 30, 10, 2, '2019-06-11', 'ks-03777', 3, '4444'),
(74, '2019-06-26', 30, 10, 2, '2019-06-11', 'ks-03777', 3, '8888'),
(75, '2019-06-26', 30, 10, 2, '2019-06-11', 'ks-03777', 3, '555'),
(76, '2019-06-26', 30, 10, 3, '2019-06-11', 'ks-03777', 3, '45645646'),
(77, '2019-06-26', 30, 10, 3, '2019-06-11', 'ks-03777', 3, '6757567'),
(78, '2019-06-26', 30, 10, 3, '2019-06-11', 'ks-03777', 3, '6757567'),
(79, '2019-06-26', 30, 10, 3, '2019-06-11', 'ks-03777', 3, '777'),
(80, '2019-06-26', 30, 10, 3, '2019-06-11', 'ks-03777', 3, '8888'),
(81, '2019-06-26', 30, 10, 2, '2019-06-11', 'ks-03777', 3, '8888'),
(82, '2019-06-26', 30, 10, 2, '2019-06-11', 'ks-03777', 3, '5555'),
(83, '2019-06-26', 30, 10, 2, '2019-06-11', 'ks-03777', 3, '555'),
(84, '2019-06-26', 30, 10, 2, '2019-06-11', 'ks-03777', 3, '5'),
(85, '2019-06-26', 30, 10, 2, '2019-06-11', 'ks-03777', 3, '57'),
(86, '2019-06-26', 30, 10, 2, '2019-06-11', 'ks-03777', 3, '57'),
(87, '2019-06-26', 30, 10, 2, '2019-06-11', 'ks-03777', 3, '5'),
(88, '2019-06-26', 30, 10, 2, '2019-06-11', 'ks-03777', 3, '888'),
(89, '2019-06-26', 30, 10, 2, '2019-06-11', 'ks-03777', 3, '888'),
(90, '2019-06-26', 30, 10, 2, '2019-06-11', 'ks-03777', 3, '77'),
(91, '2019-06-26', 30, 10, 2, '2019-06-11', 'ks-03777', 3, '88'),
(92, '2019-06-26', 30, 10, 3, '2019-06-11', 'ks-03777', 3, '45'),
(93, '2019-06-26', 30, 10, 3, '2019-06-11', 'ks-03777', 3, '66'),
(94, '2019-06-26', 30, 10, 3, '2019-06-11', 'ks-03777', 3, '88'),
(95, '0000-00-00', 30, 10, 1, '2019-06-11', 'ks-03777', 3, '3453535'),
(96, '2019-06-26', 30, 10, 4, '2019-06-11', 'ks-03777', 3, '8'),
(97, '2019-06-26', 30, 10, 5, '2019-06-11', 'ks-03777', 3, '4'),
(98, '2019-06-29', 30, 10, 1, '2019-06-11', 'ks-03777', 3, '1'),
(99, '2019-06-29', 30, 10, 1, '2019-06-11', 'ks-03777', 3, '1'),
(100, '2019-06-29', 30, 10, 1, '2019-06-11', 'ks-03777', 3, '1'),
(101, '2019-06-12', 18, 10, 1, '2019-06-11', 'ks-03777', 1, '4'),
(102, '2019-06-12', 18, 10, 1, '2019-06-11', 'ks-03777', 1, '4'),
(103, '2019-06-12', 18, 10, 6, '2019-06-11', 'ks-03777', 1, '4'),
(104, '2019-06-12', 18, 10, 7, '2019-06-11', 'ks-03777', 1, '4'),
(105, '2019-06-12', 18, 10, 8, '2019-06-11', 'ks-03777', 1, '4'),
(106, '2019-07-16', 18, 10, 1, '2019-06-11', 'ks-03777', 1, '5'),
(107, '2019-07-16', 18, 10, 2, '2019-06-11', 'ks-03777', 1, '5'),
(108, '2019-06-16', 18, 10, 4, '2019-06-11', 'ks-03777', 1, '5'),
(109, '2019-07-16', 18, 10, 3, '2019-06-11', 'ks-03777', 1, '5'),
(110, '2019-07-16', 18, 10, 4, '2019-06-11', 'ks-03777', 1, '5'),
(111, '2019-06-16', 18, 10, 5, '2019-06-11', 'ks-03777', 1, '5'),
(112, '2019-06-30', 18, 10, 1, '2019-06-11', 'ks-03777', 1, '1'),
(113, '2019-06-30', 18, 10, 2, '2019-06-11', 'ks-03777', 1, '1'),
(114, '2019-06-30', 18, 10, 3, '2019-06-11', 'ks-03777', 1, '555'),
(115, '2019-06-30', 18, 10, 4, '2019-06-11', 'ks-03777', 1, '5'),
(116, '2019-06-30', 18, 10, 5, '2019-06-11', 'ks-03777', 1, '5'),
(117, '2019-06-30', 18, 10, 6, '2019-06-11', 'ks-03777', 1, '56'),
(118, '2019-06-30', 18, 10, 7, '2019-06-11', 'ks-03777', 1, '5'),
(119, '2019-06-30', 18, 10, 8, '2019-06-11', 'ks-03777', 1, '6'),
(120, '2019-06-30', 18, 10, 9, '2019-06-11', 'ks-03777', 1, '1111111111'),
(121, '2019-06-30', 18, 10, 10, '2019-06-11', 'ks-03777', 1, '3333'),
(122, '2019-06-30', 18, 10, 11, '2019-06-11', 'ks-03777', 1, '1'),
(123, '2019-07-01', 18, 10, 1, '2019-06-11', 'ks-03777', 1, '000'),
(124, '2019-06-01', 18, 10, 1, '2019-06-11', 'ks-03777', 1, '001'),
(125, '2019-07-01', 18, 10, 2, '2019-06-11', 'ks-03777', 1, '000'),
(126, '2019-06-01', 18, 10, 2, '2019-06-11', 'ks-03777', 1, '000'),
(127, '2019-07-01', 18, 10, 3, '2019-06-11', 'ks-03777', 1, '000'),
(128, '2019-07-01', 18, 10, 4, '2019-06-11', 'ks-03777', 1, '000'),
(129, '2019-08-06', 18, 10, 1, '2019-06-11', 'ks-03777', 1, '123'),
(130, '2019-08-06', 18, 10, 2, '2019-06-11', 'ks-03777', 1, '123'),
(131, '2019-08-06', 18, 10, 3, '2019-06-11', 'ks-03777', 1, '123'),
(132, '2019-08-06', 18, 10, 4, '2019-06-11', 'ks-03777', 1, '123'),
(133, '2019-06-30', 18, 10, 12, '2019-06-11', 'ks-03777', 1, '12'),
(134, '2019-06-30', 18, 10, 13, '2019-06-11', 'ks-03777', 1, '12');

-- --------------------------------------------------------

--
-- Table structure for table `kola`
--

CREATE TABLE `kola` (
  `kolaid` int(11) NOT NULL,
  `registracija` varchar(45) NOT NULL,
  `brojsedista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kola`
--

INSERT INTO `kola` (`kolaid`, `registracija`, `brojsedista`) VALUES
(1, 'ks-03789', 58),
(2, 'ks-03777', 66),
(4, 'ks-04563', 54),
(5, 'ks-05555', 50);

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(32) NOT NULL,
  `korisnicko` varchar(32) NOT NULL,
  `ime` varchar(32) NOT NULL,
  `prezime` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `telefon` varchar(32) NOT NULL,
  `grad` varchar(32) NOT NULL,
  `sifra` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `korisnicko`, `ime`, `prezime`, `email`, `telefon`, `grad`, `sifra`) VALUES
(2, 'nadja', 'Nadja', 'Miletic', 'nadjanet@mmelektronik.net', '12345678987', 'Nis', '7b5d5ba2931542c307e327133b4ec9dd'),
(3, 'maja', 'Marija', 'Miletic', 'maja@gmail.com', '12345678', 'Krusevac', '0cc45c9b2fc35c72a5fae9a682d630e3'),
(4, 'sara', 'Sara', 'Milosevic', 'sara@gmail.com', '1231231', 'Nis', '5bd537fc3789b5482e4936968f0fde95'),
(6, 'mihajlo', 'Mihajlo', 'Miletic', 'mihajlo@gmail.com', '05418866', 'Krusevac', '5719653167e4bf18835628a260276a10'),
(8, 'Jovana', 'Jovana', 'Nikolic', 'jocikanik@gmail.com', '225555555', 'Paracin', '067a9d48f2884037e1320ac03b18e86f'),
(9, 'test', 'test', 'test', 'test@test.test', '018018018', 'Belmopan', '098f6bcd4621d373cade4e832627b4f6'),
(10, 'Nemanja', 'Nemanja', 'Nikolic', 'nemanjanikolic@email.com', '03203423423424', 'Belmopan', '0d4e3eb97b434fce188ce85215f875db'),
(18, 'Luka', 'Luka', 'Nikolic', 'luka.nikolic@gmail.com', '123456', 'Paracin', 'bec170723ab9c6edef68f03efd40da96');

-- --------------------------------------------------------

--
-- Table structure for table `linija`
--

CREATE TABLE `linija` (
  `linijaid` int(11) NOT NULL,
  `vrstalid` int(11) NOT NULL,
  `imel` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `polaznas` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `krajnjas` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `linija`
--

INSERT INTO `linija` (`linijaid`, `vrstalid`, `imel`, `polaznas`, `krajnjas`) VALUES
(1, 3, 'Krusevac AS-Cicevac AS-Beograd AS', 'Krusevac AS', 'Beograd AS'),
(2, 3, 'Kopaonik-Krusevac AS-Beograd AS-Novi Sad AS', 'Kopaonik', 'Novi Sad AS'),
(3, 3, 'Krusevac AS-Beograd AS-Novi Sad AS', 'Krusevac AS', 'Novi Sad AS'),
(4, 3, 'Rib.Banja-Krusevac AS-Beograd AS', 'Rib.Banja ', 'Beograd AS'),
(5, 3, 'Aleksandrovac AS-Krusevac AS-Beograd AS', 'Aleksandrovac AS', 'Beograd AS'),
(6, 3, 'Aleksandrovac AS-Sljivovo-Brus AS', 'Aleksandrovac AS', 'Brus AS'),
(7, 3, 'Beograd AS-Krusevac AS-Aleksandrovac AS-Brus AS', 'Beograd AS', 'Brus AS'),
(8, 3, 'Krusevac AS-Brus AS-Brzece', 'Krusevac AS', 'Brzece'),
(9, 3, 'Krusevac AS-Mrzenica-Stalac IG', 'Krusevac AS', 'Stalac IG'),
(10, 3, 'Stalac IG-Lucina-Beograd AS', 'Stalac AS', 'Beograd AS'),
(11, 3, 'Krusevac AS-Rekovac AS-Kragujevac AS', 'Krusevac AS', 'Kragujevac AS'),
(12, 3, 'Nis AS-Krusevac AS-Uzice AS-Zlatibor ', 'Nis AS', 'Zlatibor'),
(13, 3, 'Krusevac AS-Kraljevo AS-Cacak AS', 'Krusevac AS', 'Cacak AS'),
(14, 3, 'Nis AS-Djunis-krusevac AS-Cacak AS', 'Nis AS', 'Cacak AS'),
(15, 3, 'Nis As-Djunis-Krusevac AS', 'Nis AS', 'Krusevac AS'),
(16, 3, 'Cacak AS-Prokuplje AS-Nis AS', 'Cacak AS', 'Nis AS'),
(17, 3, 'Nis AS-Prokuplje AS-Krusevac AS', 'Nis AS', 'Krusevac AS'),
(18, 3, 'Krusevac AS-Djunis-Aleksinac AS', 'Krusevac AS', 'Aleksinac AS'),
(19, 3, 'Aleksinac AS-Nis AS', 'Aleksinac AS', 'Nis AS'),
(20, 3, 'Nis AS-Leskovac AS', 'Nis AS', 'Leskovac AS'),
(21, 3, 'Nis AS-Drazevac-Aleksinac AS', 'Nis AS', 'Aleksinac AS'),
(22, 3, 'Aleksinac AS-Djunis-Krusevac AS', 'Aleksinac AS', 'Krusevac AS'),
(23, 3, 'Krusevac AS-Velika Vrbnica-Aleksandrovac AS', 'Krusevac AS', 'Aleksandrovac AS'),
(24, 3, 'Krusevac AS-Brus AS-Kopaonik', 'Krusevac AS', 'Kopaonik'),
(25, 3, 'Krusevac AS-Ravni-Blace AS', 'Krusevac AS', 'Blace AS'),
(35, 2, 'jhn', 'Krusevac AS', 'Krusevac AS'),
(36, 1, 'dgd', 'Beograd AS', 'Krusevac AS');

-- --------------------------------------------------------

--
-- Table structure for table `mesto`
--

CREATE TABLE `mesto` (
  `mestoid` int(11) NOT NULL,
  `nazivm` varchar(45) NOT NULL,
  `drzavaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mesto`
--

INSERT INTO `mesto` (`mestoid`, `nazivm`, `drzavaid`) VALUES
(1, 'KruÅ¡evac', 1),
(2, 'Kopaonik', 1),
(3, 'Novi Sad', 1),
(4, 'Beograd', 1),
(5, 'Ä†iÄ‡evac', 1),
(6, 'Aleksandrovac', 1),
(7, 'Å ljivovo', 1),
(8, 'Mrezenica', 1),
(9, 'StalaÄ‡', 1),
(10, 'Rekovac', 1),
(11, 'Kragujevac', 1),
(12, 'NiÅ¡', 1),
(13, 'LuÄina', 1),
(14, 'Brus', 1),
(15, 'BrzeÄ‡e', 1),
(16, 'Ravni', 1),
(17, 'Zlatari', 1),
(18, 'Kupci', 1),
(19, 'Majdevo', 1),
(20, 'Zemun', 1),
(21, 'Batajnica', 1),
(22, 'Nova Pazova', 1),
(23, 'Stara Pazova', 1),
(24, 'InÄ‘ija', 1),
(25, 'Sremski Karlovci', 1),
(26, 'Petrovaradin', 1),
(27, 'Blace', 1),
(28, 'Å umice', 1),
(30, 'Trst', 10),
(31, 'Rim', 10);

-- --------------------------------------------------------

--
-- Table structure for table `polazak`
--

CREATE TABLE `polazak` (
  `polazakid` int(11) NOT NULL,
  `oznakap` varchar(45) NOT NULL,
  `prevoznikid` int(11) NOT NULL,
  `linijaid` int(11) NOT NULL,
  `redovnost` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polazak`
--

INSERT INTO `polazak` (`polazakid`, `oznakap`, `prevoznikid`, `linijaid`, `redovnost`) VALUES
(1, '1', 1, 1, 'Svaki dan'),
(2, '2', 1, 1, 'Svaki dan'),
(3, '3', 1, 1, 'Svaki dan'),
(4, '1', 1, 2, 'Svaki dan'),
(5, '2', 1, 2, 'Svaki dan'),
(6, '1', 1, 3, 'Svaki dan'),
(7, '2', 1, 3, 'Svaki dan'),
(8, '1', 1, 4, 'Svaki dan'),
(9, '2', 1, 4, 'Svaki dan'),
(10, '1', 1, 5, 'Svaki dan'),
(11, '1', 1, 5, 'Svaki dan'),
(12, '1', 1, 6, 'Svaki dan'),
(13, '1', 1, 8, 'Svaki dan'),
(14, '1', 1, 11, 'Svaki dan');

-- --------------------------------------------------------

--
-- Table structure for table `prevoznik`
--

CREATE TABLE `prevoznik` (
  `prevoznikid` int(11) NOT NULL,
  `nazivp` varchar(45) NOT NULL,
  `pib` varchar(45) NOT NULL,
  `maticnibroj` varchar(45) NOT NULL,
  `adresa` varchar(45) DEFAULT NULL,
  `mestoid` int(11) NOT NULL,
  `drzavaid` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefon` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prevoznik`
--

INSERT INTO `prevoznik` (`prevoznikid`, `nazivp`, `pib`, `maticnibroj`, `adresa`, `mestoid`, `drzavaid`, `email`, `telefon`) VALUES
(1, 'Jugoprevoz', '100477562', '07292660', 'Jug Bogdanova 45', 1, NULL, 'adjugoprevozks@gmail.com', '037 421 555'),
(2, 'Nis Ekspres', '100615493', '07133731', 'ÄŒamurlija 160', 12, NULL, 'marketing@nis-ekspres.rs', '018 255 177');

-- --------------------------------------------------------

--
-- Table structure for table `radnik`
--

CREATE TABLE `radnik` (
  `radnikid` int(11) NOT NULL,
  `ime` varchar(45) NOT NULL,
  `prezime` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radnik`
--

INSERT INTO `radnik` (`radnikid`, `ime`, `prezime`) VALUES
(2, 'Marko', 'Markovic'),
(6, 'Sara', 'Milosevic');

-- --------------------------------------------------------

--
-- Table structure for table `redvoznje`
--

CREATE TABLE `redvoznje` (
  `redvoznjeid` int(11) NOT NULL,
  `stanicaid` int(11) NOT NULL,
  `linijaid` int(11) NOT NULL,
  `brojpolaska` int(11) NOT NULL,
  `vreme` time DEFAULT NULL,
  `dani` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Km` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `redvoznje`
--

INSERT INTO `redvoznje` (`redvoznjeid`, `stanicaid`, `linijaid`, `brojpolaska`, `vreme`, `dani`, `Km`) VALUES
(1, 1, 1, 1, '05:30:00', '3', 0),
(2, 1, 1, 1, '05:32:00', '3', 1),
(3, 3, 1, 1, '05:55:00', '3', 19),
(4, 2, 1, 1, '08:15:00', '3', 201),
(5, 1, 1, 2, '07:45:00', '3', 0),
(6, 4, 1, 2, '07:47:00', '3', 1),
(7, 3, 1, 2, '08:10:00', '3', 19),
(8, 2, 1, 2, '10:30:00', '3', 201),
(9, 1, 1, 3, '12:00:00', '3', 0),
(10, 4, 1, 3, '12:02:00', '3', 1),
(11, 3, 1, 3, '12:25:00', '3', 19),
(12, 2, 1, 3, '14:45:00', '3', 201),
(15, 1, 1, 4, '13:15:00', '1', 0),
(16, 4, 1, 4, '13:17:00', '1', 1),
(17, 3, 1, 4, '13:40:00', '1', 19),
(18, 2, 1, 4, '16:00:00', '1', 201),
(19, 1, 1, 5, '14:45:00', '1', 0),
(20, 4, 1, 5, '14:47:00', '1', 1),
(21, 3, 1, 5, '15:25:00', '1', 19),
(22, 2, 1, 5, '17:15:00', '1', 201),
(24, 1, 1, 6, '17:30:00', '1', 0),
(25, 4, 1, 6, '17:32:00', '1', 1),
(26, 3, 1, 6, '17:55:00', '1', 19),
(27, 2, 1, 6, '20:15:00', '1', 201),
(29, 14, 2, 1, '16:00:00', '1', 0),
(30, 11, 2, 1, '16:45:00', '1', 19),
(31, 7, 2, 1, '17:15:00', '1', 38),
(32, 29, 2, 1, '17:39:00', '1', 55),
(33, 31, 2, 1, '17:43:00', '1', 58),
(34, 32, 2, 1, '17:56:00', '1', 66),
(35, 33, 2, 1, '18:02:00', '1', 70),
(36, 34, 2, 1, '18:12:00', '1', 78),
(37, 1, 2, 1, '18:30:00', '1', 89),
(38, 3, 2, 1, '19:12:00', '1', 90),
(39, 2, 2, 1, '21:45:00', '1', 290),
(40, 5, 2, 1, '23:00:00', '1', 365),
(41, 1, 3, 1, '05:15:00', '1', 0),
(42, 4, 3, 1, '05:17:00', '1', 1),
(43, 3, 3, 1, '05:40:00', '1', 19),
(44, 2, 3, 1, '08:00:00', '1', 201),
(45, 35, 3, 1, '08:25:00', '1', 207),
(46, 36, 3, 1, '08:40:00', '1', 221),
(47, 37, 3, 1, '08:50:00', '1', 227),
(48, 38, 3, 1, '08:55:00', '1', 234),
(49, 39, 3, 1, '09:05:00', '1', 244),
(50, 40, 3, 1, '09:13:00', '1', 254),
(51, 41, 3, 1, '09:17:00', '1', 258),
(52, 42, 3, 1, '09:21:00', '1', 261),
(53, 43, 3, 1, '09:30:00', '1', 268),
(54, 44, 3, 1, '09:38:00', '1', 275),
(55, 5, 3, 1, '09:45:00', '1', 281),
(56, 1, 3, 2, '16:30:00', '1', 0),
(57, 4, 3, 2, '16:32:00', '1', 1),
(58, 3, 3, 2, '16:55:00', '1', 19),
(59, 2, 3, 2, '19:15:00', '1', 201),
(60, 35, 3, 2, '19:30:00', '1', 207),
(61, 36, 3, 2, '19:45:00', '1', 221),
(62, 37, 3, 2, '19:55:00', '1', 227),
(63, 38, 3, 2, '20:00:00', '1', 234),
(64, 39, 3, 2, '20:10:00', '1', 244),
(65, 40, 3, 2, '20:18:00', '1', 254),
(66, 41, 3, 2, '20:22:00', '1', 258),
(67, 42, 3, 2, '20:26:00', '1', 261),
(68, 43, 3, 2, '20:35:00', '1', 268),
(69, 44, 3, 2, '20:43:00', '1', 275),
(70, 5, 3, 2, '20:50:00', '1', 281),
(71, 45, 4, 1, '07:45:00', '1', 0),
(72, 46, 4, 1, '07:50:00', '1', 3),
(73, 47, 4, 1, '07:54:00', '1', 5),
(74, 48, 4, 1, '07:56:00', '1', 8),
(75, 49, 4, 1, '08:05:00', '1', 12),
(76, 50, 4, 1, '08:12:00', '1', 16),
(77, 51, 4, 1, '08:15:00', '1', 18),
(78, 52, 4, 1, '08:17:00', '1', 20),
(79, 53, 4, 1, '08:20:00', '1', 21),
(80, 54, 4, 1, '08:26:00', '1', 24),
(81, 55, 4, 1, '08:30:00', '1', 26),
(82, 56, 4, 1, '08:35:00', '1', 29),
(83, 57, 4, 1, '08:38:00', '1', 31),
(84, 58, 4, 1, '08:40:00', '1', 32),
(85, 4, 4, 1, '08:43:00', '1', 34),
(86, 1, 4, 1, '08:45:00', '1', 35),
(87, 3, 4, 1, '09:25:00', '1', 53),
(88, 2, 4, 1, '11:45:00', '1', 236),
(89, 6, 5, 1, '05:40:00', '1', 0),
(90, 59, 5, 1, '05:45:00', '1', 4),
(91, 60, 5, 1, '05:46:00', '1', 5),
(92, 61, 5, 1, '05:47:00', '1', 6),
(93, 62, 5, 1, '05:50:00', '1', 8),
(94, 63, 5, 1, '05:52:00', '1', 9),
(95, 64, 5, 1, '05:54:00', '1', 10),
(96, 65, 5, 1, '05:56:00', '1', 11),
(97, 66, 5, 1, '05:58:00', '1', 13),
(98, 67, 5, 1, '06:02:00', '1', 17),
(99, 68, 5, 1, '06:04:00', '1', 18),
(100, 69, 5, 1, '00:00:06', '1', 21),
(101, 70, 5, 1, '06:15:00', '1', 27),
(102, 1, 5, 1, '06:30:00', '1', 34),
(103, 4, 5, 1, '06:32:00', '1', 35),
(104, 3, 5, 1, '06:55:00', '1', 53),
(105, 2, 5, 1, '09:15:00', '1', 235),
(106, 6, 6, 1, '05:45:00', '1', 0),
(107, 71, 6, 1, '05:48:00', '1', 2),
(108, 72, 6, 1, '05:50:00', '1', 3),
(109, 59, 6, 1, '05:52:00', '1', 4),
(110, 60, 6, 1, '05:53:00', '1', 5),
(111, 73, 6, 1, '05:54:00', '1', 5),
(112, 74, 6, 1, '05:56:00', '1', 6),
(113, 75, 6, 1, '05:57:00', '1', 7),
(114, 76, 6, 1, '05:58:00', '1', 7),
(115, 77, 6, 1, '06:00:00', '1', 8),
(116, 12, 6, 1, '06:05:00', '1', 11),
(117, 79, 6, 1, '06:07:00', '1', 11),
(118, 80, 6, 1, '06:12:00', '1', 13),
(119, 81, 6, 1, '06:18:00', '1', 15),
(120, 82, 6, 1, '06:24:00', '1', 18),
(121, 83, 6, 1, '06:27:00', '1', 20),
(122, 7, 6, 1, '06:30:00', '1', 21),
(123, 6, 6, 2, '14:15:00', '1', 0),
(124, 71, 6, 2, '14:18:00', '1', 2),
(126, 72, 6, 2, '14:20:00', '1', 3),
(127, 59, 6, 2, '14:22:00', '1', 4),
(129, 60, 6, 2, '14:23:00', '1', 5),
(130, 73, 6, 2, '14:24:00', '1', 5),
(131, 74, 6, 2, '14:26:00', '1', 6),
(132, 75, 6, 2, '14:27:00', '1', 7),
(133, 76, 6, 2, '14:28:00', '1', 7),
(134, 77, 6, 2, '14:30:00', '1', 8),
(135, 12, 6, 2, '14:35:00', '1', 11),
(136, 79, 6, 2, '14:37:00', '1', 11),
(137, 80, 6, 2, '14:42:00', '1', 13),
(138, 81, 6, 2, '14:48:00', '1', 15),
(139, 82, 6, 2, '14:54:00', '1', 18),
(142, 83, 6, 2, '00:00:14', '1', 20),
(145, 7, 6, 2, '15:00:00', '1', 21),
(148, 1, 1, 20, '23:23:00', '1', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

CREATE TABLE `rezervacija` (
  `rezervacijaid` int(11) NOT NULL,
  `korisnikid` int(11) NOT NULL,
  `datumpolaska` date NOT NULL,
  `vremeidatumotkaza` datetime DEFAULT NULL,
  `cenovnikid` int(11) NOT NULL,
  `datumrezervacije` date NOT NULL,
  `sedistebr` int(12) NOT NULL,
  `kola` varchar(12) NOT NULL,
  `brpol` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rezervacija`
--

INSERT INTO `rezervacija` (`rezervacijaid`, `korisnikid`, `datumpolaska`, `vremeidatumotkaza`, `cenovnikid`, `datumrezervacije`, `sedistebr`, `kola`, `brpol`) VALUES
(1, 3, '2019-06-02', NULL, 18, '2019-06-01', 0, '', 0),
(2, 2, '0000-00-00', NULL, 24, '2019-06-01', 0, '', 0),
(3, 1, '2019-06-02', NULL, 18, '2019-06-01', 0, '', 0),
(4, 4, '0000-00-00', NULL, 18, '2019-06-05', 0, '', 0),
(5, 1, '2019-06-12', NULL, 24, '2019-06-08', 0, '', 0),
(6, 1, '2019-06-12', NULL, 24, '2019-06-08', 0, '', 0),
(7, 1, '2019-06-12', NULL, 24, '2019-06-08', 0, '', 0),
(8, 1, '2019-06-10', NULL, 30, '2019-06-09', 0, '', 0),
(9, 3, '2019-06-10', NULL, 21, '2019-06-09', 1, 'ks-03777', 1),
(10, 8, '2019-06-11', NULL, 18, '2019-06-09', 1, 'ks-03777', 1),
(11, 10, '2019-06-17', NULL, 18, '2019-06-10', 1, 'ks-03777', 1),
(12, 10, '2019-06-17', NULL, 18, '2019-06-10', 2, 'ks-03777', 1),
(13, 10, '0000-00-00', NULL, 18, '2019-06-10', 1, 'ks-03777', 1),
(14, 10, '0000-00-00', NULL, 18, '2019-06-10', 1, 'ks-03777', 1),
(15, 10, '2019-06-17', NULL, 18, '2019-06-10', 3, 'ks-03777', 1),
(16, 10, '2019-06-17', NULL, 18, '2019-06-10', 4, 'ks-03777', 1),
(17, 10, '2019-06-17', NULL, 18, '2019-06-10', 5, 'ks-03777', 1),
(18, 16, '2019-06-18', NULL, 18, '2019-06-10', 1, 'ks-03777', 1),
(19, 8, '2019-06-13', NULL, 18, '2019-06-11', 1, 'ks-03777', 1),
(20, 18, '0000-00-00', NULL, 18, '2019-06-11', 1, 'ks-03777', 1),
(21, 18, '2019-06-13', NULL, 18, '2019-06-11', 2, 'ks-03777', 1),
(22, 8, '0000-00-00', NULL, 18, '2019-06-11', 1, 'ks-03777', 1),
(23, 8, '2019-06-13', NULL, 18, '2019-06-11', 3, 'ks-03777', 1),
(24, 8, '2019-06-16', NULL, 18, '2019-06-11', 1, 'ks-03777', 1),
(25, 8, '2019-06-16', NULL, 18, '2019-06-11', 2, 'ks-03777', 1),
(26, 10, '2019-06-26', NULL, 18, '2019-06-11', 1, 'ks-03777', 1),
(27, 2, '2019-06-17', NULL, 18, '2019-06-11', 6, 'ks-03777', 1),
(28, 2, '2019-06-17', NULL, 18, '2019-06-11', 7, 'ks-03777', 1),
(29, 10, '2019-06-26', NULL, 30, '2019-06-11', 1, 'ks-03777', 3),
(30, 10, '2019-06-26', NULL, 30, '2019-06-11', 2, 'ks-03777', 3),
(31, 10, '2019-06-24', NULL, 30, '2019-06-11', 1, 'ks-03777', 3),
(32, 10, '2019-06-26', NULL, 30, '2019-06-11', 3, 'ks-03777', 3),
(33, 10, '2019-06-26', NULL, 30, '2019-06-11', 4, 'ks-03777', 3),
(34, 10, '2019-06-16', NULL, 18, '2019-06-11', 3, 'ks-03777', 1),
(35, 10, '2019-06-16', NULL, 18, '2019-06-11', 4, 'ks-03777', 1),
(36, 10, '2019-06-16', NULL, 18, '2019-06-11', 4, 'ks-03777', 1),
(37, 10, '2019-06-16', NULL, 18, '2019-06-11', 4, 'ks-03777', 1),
(38, 10, '2019-07-16', NULL, 18, '2019-06-11', 2, 'ks-03777', 1),
(39, 10, '2019-07-16', NULL, 18, '2019-06-11', 4, 'ks-03777', 1),
(40, 10, '2019-06-16', NULL, 18, '2019-06-11', 5, 'ks-03777', 1),
(41, 10, '2019-06-30', NULL, 18, '2019-06-11', 1, 'ks-03777', 1),
(42, 10, '2019-06-30', NULL, 18, '2019-06-11', 2, 'ks-03777', 1),
(43, 10, '2019-06-30', NULL, 18, '2019-06-11', 3, 'ks-03777', 1),
(44, 10, '2019-06-30', NULL, 18, '2019-06-11', 6, 'ks-03777', 1),
(45, 10, '2019-06-30', NULL, 18, '2019-06-11', 10, 'ks-03777', 1),
(46, 10, '2019-06-30', NULL, 18, '2019-06-11', 10, 'ks-03777', 1),
(47, 10, '2019-06-30', NULL, 18, '2019-06-11', 10, 'ks-03777', 1),
(48, 10, '2019-06-30', NULL, 18, '2019-06-11', 12, 'ks-03777', 1),
(49, 10, '2019-06-30', NULL, 18, '2019-06-11', 12, 'ks-03777', 1),
(50, 10, '2019-06-30', NULL, 18, '2019-06-11', 12, 'ks-03777', 1),
(51, 10, '2019-07-01', NULL, 18, '2019-06-11', 3, 'ks-03777', 1),
(52, 10, '2019-08-06', NULL, 18, '2019-06-11', 3, 'ks-03777', 1),
(53, 10, '2019-08-06', NULL, 18, '2019-06-11', 3, 'ks-03777', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stanica`
--

CREATE TABLE `stanica` (
  `stanicaid` int(11) NOT NULL,
  `imes` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresas` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lat` float DEFAULT NULL,
  `lng` float DEFAULT NULL,
  `tip` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stanica`
--

INSERT INTO `stanica` (`stanicaid`, `imes`, `adresas`, `lat`, `lng`, `tip`) VALUES
(1, 'Krusevac AS', 'Jug Bogdanova bb', 43.5863, 21.3289, 'Glavna AS'),
(2, 'Beograd AS', 'Zeleznicka 4', 44.8097, 20.455, 'Glavna AS'),
(3, 'Cicevac AS', 'Cicevac', 43.72, 21.4436, 'Glavna AS'),
(4, 'Krusevac NP', 'Vece Korcagina', 43.578, 21.3393, 'Stajaliste'),
(5, 'Novi Sad AS', 'Bulevar Jase Tomica 6', 45.2645, 19.8285, 'Glavna AS'),
(6, 'Aleksandrovac AS', 'Aleksandrovac bb', 43.4581, 21.071, 'Glavna AS'),
(7, 'Brus AS', 'Kralja Petra I bb', 43.3823, 21.0394, 'Glavna AS'),
(8, 'Stalac IG', 'Stalac Igraliste', 43.6814, 21.4151, 'Stajaliste'),
(9, 'Mrzenica', 'Mrzenica  bb', 43.6567, 21.3844, 'Stajaliste'),
(11, 'Brzece', 'Brzece bb', 43.3, 20.8833, 'Stajaliste'),
(12, 'Sljivovo', 'Sljivovo bb', 43.4089, 21.0719, 'Stajaliste'),
(13, 'Ribarska Banja', 'Ribarska Banja bb', 43.4253, 21.5069, 'Stajaliste'),
(14, 'Kopaonik', 'Kopaonik bb', 43.25, 20.8333, 'Stajaliste'),
(15, 'Lucina', 'Lucina bb', 43.6919, 21.4486, 'Stajaliste'),
(16, 'Rekovac AS', 'Rekovac bb', 43.87, 21.0689, 'Glavna AS'),
(17, 'Kragujevac AS', 'Sumadijska bb', 44.0111, 20.9281, 'Glavna AS'),
(18, 'Nis AS', 'Bulevar 12. februara bb', 43.324, 21.89, 'Glavna AS'),
(19, 'Uzice AS', 'Mihajla Pupina 1 ', 43.8537, 19.8416, 'Glavna AS'),
(20, 'Zlatibor', 'stajaliste preko puta pijace', 43.6556, 19.6633, 'Stajaliste'),
(21, 'Kraljevo AS', 'Oktobarskih zrtava bb ', 43.7284, 20.6897, 'Glavna AS'),
(22, 'Cacak AS', 'Lomina 67', 43.8913, 20.3544, 'Glavna AS'),
(23, 'Djunis ', 'Djunis bb', 43.5839, 21.5072, 'Stajaliste'),
(24, 'Prokuplje AS', 'Prokuplje bb', 43.2314, 21.592, 'Glavna AS'),
(25, 'Aleksinac AS', '22. decembra bb', 43.5087, 21.6936, 'Glavna AS'),
(26, 'Leskovac AS', 'Vilema PuÅ¡mana 33', 42.996, 21.9556, 'Glavna AS'),
(27, 'Drazevac ', 'Drazevac bb', 44.5772, 20.2311, 'Stajaliste'),
(28, 'Velika Vrbnica', 'Velika Vrbnica bb', 43.5251, 21.1916, 'Stajaliste'),
(29, 'Ravni', 'Ravni bb', 43.7184, 19.9056, 'Stajaliste'),
(30, 'Blace AS', 'Radosa Jovanovica Selje 37', 43.2945, 21.2924, 'Glavna AS'),
(31, 'Zlatari', 'Zlatari BB', 11.11, 21.11, 'Stajaliste'),
(32, 'Majdevo', 'Majdevo bb', 11.11, 21.11, 'Stajaliste'),
(33, 'Kupci', 'Kupci bb', 11.11, 21.11, 'Stajaliste'),
(34, 'G.Stepos', 'G.Stepos bb', 11.11, 21.11, 'Stajaliste'),
(35, 'Zemun', 'Zemun bb', 11.11, 21.222, 'Stajaliste'),
(36, 'Batajnica', 'Batajnica bb', 11.11, 21.222, 'Stajaliste'),
(37, 'N.Pazova AS', 'N.Pazova bb', 11.11, 21.222, 'Glavna AS'),
(38, 'St.Pazova AS', 'St.Pazova bb', 11.11, 21.222, 'Glavna AS'),
(39, 'Indjija AS', 'Indjija AS', 11.11, 21.11, 'Glavna AS'),
(40, 'Maradik', 'Maradik bb', 11.11, 21.11, 'Stajaliste'),
(41, 'Gladnos', 'Gladnos bb', 11.11, 21.222, 'Stajaliste'),
(42, 'Banstol', 'Banstol bb', 11.11, 21.222, 'Stajaliste'),
(43, 'Srem.Karlovci', 'Srem.Karlovci bb', 11.11, 21.11, 'Stajaliste'),
(44, 'Petrovaradin ', 'Petrovaradin bb', 11.11, 21.11, 'Stajaliste'),
(45, 'Rib. Banja', 'Rib. Banja bb', 43.426, 21.5086, 'Stajaliste'),
(46, 'Ribare', 'Ribare bb', 43.4384, 21.5352, 'Stajaliste'),
(47, 'M. Krusinci', 'M. Krusinci bb', 43.4582, 21.5347, 'Stajaliste'),
(48, 'Grevci', 'Grevci bb', 43.4804, 21.5394, 'Stajaliste'),
(49, 'V. Siljegovac', 'V. Siljegovac bb', 43.5173, 21.5301, 'Stajaliste'),
(50, 'Kaonik ZD', 'Kaonik ZD bb', 43.5603, 21.4964, 'Stajaliste'),
(51, 'Kaonik R', 'Kaonik R bb', 43.57, 21.5002, 'Stajaliste'),
(52, 'Jos. put', 'Jos. put bb', 43.5711, 21.4922, 'Stajaliste'),
(53, 'Cok. grob', 'Cok. grob bb', 43.5623, 21.4624, 'Stajaliste'),
(54, 'Novo selo', 'Novo selo bb', 43.5647, 21.4493, 'Stajaliste'),
(55, 'Gaglovo', 'Gaglovo bb', 43.5707, 21.4242, 'Stajaliste'),
(56, 'Kapidzija ', 'Kapidzija bb', 43.5735, 21.3856, 'Stajaliste'),
(57, 'Parunovac', 'Parunovac bb', 43.5756, 21.3627, 'Stajaliste'),
(58, 'Miloje Zakic', 'Miloje Zakic bb', 43.5799, 21.3308, 'Stajaliste'),
(59, 'Vitkovo', 'Vitkovo bb', 11.11, 21.11, 'Stajaliste'),
(60, 'Bruski put', 'Bruski put bb', 11.11, 21.11, 'Stajaliste'),
(61, 'Bobote', 'Bobote bb', 11.11, 21.11, 'Stajaliste'),
(62, 'Novaci', 'Novaci bb', 11.11, 21.11, 'Stajaliste'),
(63, 'Dasnica', 'Dasnica bb', 11.11, 21.11, 'Stajaliste'),
(64, 'Begovac', 'Begovac bb', 11.11, 21.11, 'Stajaliste'),
(65, 'D. Stupanj R', 'D. Stupanj R bb', 11.11, 21.11, 'Stajaliste'),
(66, 'Lacisled', 'Lacisled bb', 11.11, 21.11, 'Stajaliste'),
(67, 'Mrmos', 'Mrmos bb', 11.11, 21.11, 'Stajaliste'),
(68, 'V. Vrbnica', 'V. Vrbnica bb', 11.11, 21.11, 'Stajaliste'),
(69, 'Zabare', 'Zabare bb', 11.11, 21.11, 'Stajaliste'),
(70, 'Pepeljevac', 'Pepeljevac bb', 11.11, 21.11, 'Stajaliste'),
(71, 'Vino Zupa', 'Vino Zupa bb', 11.11, 21.11, 'Stajaliste'),
(72, 'Stanjevo', 'Stanjevo bb', 11.11, 21.11, 'Stajaliste'),
(73, 'Vencac 1', 'Vencac 1 bb', 11.11, 21.11, 'Stajaliste'),
(74, 'Vencac 2', 'Vencac 2 bb', 11.11, 21.11, 'Stajaliste'),
(75, 'Ljubinci R', 'Ljubinci R bb', 11.11, 21.11, 'Stajaliste'),
(76, 'Stubal 2', 'Stubal 2 bb', 11.11, 21.11, 'Stajaliste'),
(77, 'Stubal 1', 'Stubal 1 bb', 11.11, 21.11, 'Stajaliste'),
(78, 'Sljivovo', 'Sljivovo bb', 11.11, 21.11, 'Stajaliste'),
(79, 'Grabak', 'Grabak bb', 11.11, 21.11, 'Stajaliste'),
(80, 'Botunja', 'Botunja bb', 11.11, 21.11, 'Stajaliste'),
(81, 'M. Vrbnica', 'M. Vrbnica bb', 11.11, 21.11, 'Stajaliste'),
(82, 'Slava', 'Slava bb', 11.11, 21.11, 'Stajaliste'),
(83, 'Brus M', 'Brus M bb', 11.11, 21.11, 'Stajaliste'),
(84, 'Brus AS', 'Brus AS bb', 11.11, 21.11, 'Glavna AS'),
(85, 'Malo Golovode', 'Rasinska 38', 44, 21, 'Stajaliste');

-- --------------------------------------------------------

--
-- Table structure for table `vrstalinije`
--

CREATE TABLE `vrstalinije` (
  `vrstalinijeid` int(11) NOT NULL,
  `nazivvl` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vrstalinije`
--

INSERT INTO `vrstalinije` (`vrstalinijeid`, `nazivvl`) VALUES
(1, 'Gradska'),
(2, 'Prigradska'),
(3, 'MeÄ‘ugradska');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cenovnik`
--
ALTER TABLE `cenovnik`
  ADD PRIMARY KEY (`cenovnikid`);

--
-- Indexes for table `datumpolaska`
--
ALTER TABLE `datumpolaska`
  ADD PRIMARY KEY (`datumpolaskaid`);

--
-- Indexes for table `drzava`
--
ALTER TABLE `drzava`
  ADD PRIMARY KEY (`drzavaid`);

--
-- Indexes for table `karta`
--
ALTER TABLE `karta`
  ADD PRIMARY KEY (`kartaid`);

--
-- Indexes for table `kola`
--
ALTER TABLE `kola`
  ADD PRIMARY KEY (`kolaid`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linija`
--
ALTER TABLE `linija`
  ADD PRIMARY KEY (`linijaid`);

--
-- Indexes for table `mesto`
--
ALTER TABLE `mesto`
  ADD PRIMARY KEY (`mestoid`);

--
-- Indexes for table `polazak`
--
ALTER TABLE `polazak`
  ADD PRIMARY KEY (`polazakid`);

--
-- Indexes for table `prevoznik`
--
ALTER TABLE `prevoznik`
  ADD PRIMARY KEY (`prevoznikid`);

--
-- Indexes for table `radnik`
--
ALTER TABLE `radnik`
  ADD PRIMARY KEY (`radnikid`);

--
-- Indexes for table `redvoznje`
--
ALTER TABLE `redvoznje`
  ADD PRIMARY KEY (`redvoznjeid`);

--
-- Indexes for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD PRIMARY KEY (`rezervacijaid`);

--
-- Indexes for table `stanica`
--
ALTER TABLE `stanica`
  ADD PRIMARY KEY (`stanicaid`);

--
-- Indexes for table `vrstalinije`
--
ALTER TABLE `vrstalinije`
  ADD PRIMARY KEY (`vrstalinijeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cenovnik`
--
ALTER TABLE `cenovnik`
  MODIFY `cenovnikid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `datumpolaska`
--
ALTER TABLE `datumpolaska`
  MODIFY `datumpolaskaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drzava`
--
ALTER TABLE `drzava`
  MODIFY `drzavaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `karta`
--
ALTER TABLE `karta`
  MODIFY `kartaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `kola`
--
ALTER TABLE `kola`
  MODIFY `kolaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `linija`
--
ALTER TABLE `linija`
  MODIFY `linijaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `mesto`
--
ALTER TABLE `mesto`
  MODIFY `mestoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `polazak`
--
ALTER TABLE `polazak`
  MODIFY `polazakid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `prevoznik`
--
ALTER TABLE `prevoznik`
  MODIFY `prevoznikid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `radnik`
--
ALTER TABLE `radnik`
  MODIFY `radnikid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `redvoznje`
--
ALTER TABLE `redvoznje`
  MODIFY `redvoznjeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `rezervacija`
--
ALTER TABLE `rezervacija`
  MODIFY `rezervacijaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `stanica`
--
ALTER TABLE `stanica`
  MODIFY `stanicaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `vrstalinije`
--
ALTER TABLE `vrstalinije`
  MODIFY `vrstalinijeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
