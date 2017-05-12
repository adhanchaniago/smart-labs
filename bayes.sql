-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2016 at 02:23 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bayes`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_training`
--

CREATE TABLE `data_training` (
  `id` int(2) NOT NULL,
  `radig` varchar(2) NOT NULL,
  `orkom` varchar(2) NOT NULL,
  `so` varchar(2) NOT NULL,
  `komdat` varchar(2) NOT NULL,
  `rpl` varchar(2) NOT NULL,
  `si` varchar(2) NOT NULL,
  `imk` varchar(2) NOT NULL,
  `metkuan` varchar(2) NOT NULL,
  `ai` varchar(2) NOT NULL,
  `daming` varchar(2) NOT NULL,
  `sispak` varchar(2) NOT NULL,
  `lab` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_training`
--

INSERT INTO `data_training` (`id`, `radig`, `orkom`, `so`, `komdat`, `rpl`, `si`, `imk`, `metkuan`, `ai`, `daming`, `sispak`, `lab`) VALUES
(1, 'BC', 'C', 'C', 'C', 'AB', 'AB', 'B', 'A', 'B', 'A', 'B', 'SEIS'),
(2, 'B', 'B', 'B', 'BC', 'A', 'A', 'A', 'A', 'AB', 'A', 'AB', 'ACI'),
(3, 'A', 'B', 'A', 'A', 'A', 'A', 'A', 'A', 'B', 'A', 'AB', 'SEIS'),
(4, 'B', 'C', 'BC', 'BC', 'A', 'AB', 'AB', 'A', 'B', 'B', 'A', 'SEIS'),
(5, 'AB', 'BC', 'A', 'B', 'AB', 'A', 'B', 'A', 'AB', 'A', 'B', 'SEIS'),
(6, 'A', 'BC', 'B', 'AB', 'A', 'A', 'AB', 'A', 'BC', 'A', 'A', 'ACI'),
(7, 'A', 'A', 'A', 'AB', 'A', 'A', 'B', 'A', 'A', 'A', 'AB', 'SEIS'),
(8, 'B', 'BC', 'A', 'B', 'AB', 'AB', 'AB', 'AB', 'BC', 'B', 'BC', 'SEIS'),
(9, 'A', 'B', 'B', 'AB', 'A', 'B', 'B', 'AB', 'AB', 'A', 'A', 'ACI'),
(10, 'A', 'B', 'A', 'A', 'A', 'A', 'A', 'A', 'AB', 'A', 'A', 'ACI'),
(11, 'AB', 'B', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'AB', 'ACI'),
(12, 'AB', 'B', 'AB', 'BC', 'A', 'A', 'A', 'A', 'B', 'A', 'AB', 'SEIS'),
(13, 'B', 'BC', 'AB', 'AB', 'A', 'A', 'AB', 'A', 'AB', 'AB', 'A', 'NCC'),
(14, 'AB', 'B', 'A', 'A', 'AB', 'AB', 'BC', 'A', 'AB', 'A', 'AB', 'ACI'),
(15, 'A', 'C', 'AB', 'A', 'B', 'AB', 'AB', 'A', 'AB', 'A', 'AB', 'SEIS'),
(16, 'AB', 'C', 'C', 'C', 'AB', 'AB', 'AB', 'AB', 'C', 'B', 'C', 'NCC'),
(17, 'B', 'BC', 'BC', 'BC', 'AB', 'B', 'AB', 'A', 'AB', 'A', 'C', 'SEIS'),
(18, 'AB', 'D', 'B', 'BC', 'B', 'BC', 'B', 'BC', 'BC', 'B', 'B', 'ACI'),
(19, 'A', 'C', 'B', 'B', 'B', 'B', 'B', 'AB', 'BC', 'AB', 'AB', 'SEIS'),
(20, 'A', 'C', 'A', 'A', 'A', 'A', 'AB', 'A', 'B', 'AB', 'AB', 'SEIS'),
(21, 'B', 'B', 'B', 'BC', 'AB', 'B', 'AB', 'B', 'BC', 'B', 'BC', 'SEIS'),
(22, 'BC', 'B', 'BC', 'BC', 'A', 'AB', 'AB', 'B', 'C', 'B', 'AB', 'SEIS'),
(23, 'A', 'BC', 'AB', 'AB', 'AB', 'B', 'B', 'A', 'BC', 'A', 'A', 'SEIS'),
(24, 'B', 'BC', 'B', 'B', 'A', 'AB', 'B', 'B', 'AB', 'B', 'B', 'ACI'),
(25, 'B', 'B', 'BC', 'C', 'AB', 'B', 'A', 'B', 'B', 'B', 'BC', 'ACI');

-- --------------------------------------------------------

--
-- Table structure for table `data_training2`
--

CREATE TABLE `data_training2` (
  `id` int(2) NOT NULL,
  `radig` varchar(2) NOT NULL,
  `orkom` varchar(2) NOT NULL,
  `so` varchar(2) NOT NULL,
  `komdat` varchar(2) NOT NULL,
  `rpl` varchar(2) NOT NULL,
  `si` varchar(2) NOT NULL,
  `imk` varchar(2) NOT NULL,
  `metkuan` varchar(2) NOT NULL,
  `ai` varchar(2) NOT NULL,
  `daming` varchar(2) NOT NULL,
  `sispak` varchar(2) NOT NULL,
  `lab` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_training2`
--

INSERT INTO `data_training2` (`id`, `radig`, `orkom`, `so`, `komdat`, `rpl`, `si`, `imk`, `metkuan`, `ai`, `daming`, `sispak`, `lab`) VALUES
(1, 'BC', 'C', 'C', 'C', 'AB', 'AB', 'B', 'A', 'B', 'A', 'B', 'SEIS'),
(2, 'B', 'B', 'B', 'BC', 'A', 'A', 'A', 'A', 'AB', 'BC', 'AB', 'SEIS'),
(3, 'C', 'B', 'BC', 'A', 'A', 'A', 'A', 'A', 'B', 'A', 'AB', 'SEIS'),
(4, 'B', 'C', 'BC', 'BC', 'A', 'AB', 'AB', 'A', 'B', 'B', 'A', 'SEIS'),
(5, 'AB', 'BC', 'B', 'B', 'AB', 'A', 'B', 'A', 'AB', 'A', 'B', 'SEIS'),
(6, 'B', 'BC', 'B', 'AB', 'A', 'A', 'AB', 'A', 'BC', 'AB', 'A', 'SEIS'),
(7, 'B', 'A', 'AB', 'AB', 'A', 'A', 'B', 'A', 'A', 'A', 'AB', 'SEIS'),
(8, 'B', 'BC', 'A', 'B', 'AB', 'AB', 'AB', 'AB', 'BC', 'B', 'BC', 'SEIS'),
(9, 'A', 'B', 'B', 'AB', 'A', 'B', 'B', 'AB', 'AB', 'BC', 'A', 'SEIS'),
(10, 'BC', 'B', 'A', 'AB', 'A', 'A', 'A', 'A', 'AB', 'B', 'AB', 'SEIS'),
(11, 'AB', 'B', 'B', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'AB', 'ACI'),
(12, 'AB', 'B', 'AB', 'BC', 'A', 'B', 'A', 'AB', 'B', 'A', 'AB', 'ACI'),
(13, 'B', 'BC', 'AB', 'AB', 'BC', 'A', 'AB', 'A', 'AB', 'AB', 'A', 'ACI'),
(14, 'AB', 'B', 'BC', 'AB', 'AB', 'AB', 'BC', 'A', 'AB', 'A', 'AB', 'ACI'),
(15, 'A', 'C', 'AB', 'A', 'B', 'AB', 'AB', 'A', 'AB', 'A', 'AB', 'ACI'),
(16, 'AB', 'C', 'C', 'C', 'AB', 'AB', 'AB', 'AB', 'A', 'B', 'B', 'ACI'),
(17, 'B', 'BC', 'BC', 'BC', 'AB', 'B', 'AB', 'A', 'AB', 'A', 'B', 'ACI'),
(18, 'AB', 'D', 'B', 'BC', 'B', 'BC', 'B', 'A', 'AB', 'B', 'B', 'ACI'),
(19, 'AB', 'C', 'B', 'B', 'B', 'B', 'B', 'AB', 'A', 'AB', 'AB', 'ACI'),
(20, 'B', 'C', 'A', 'AB', 'A', 'A', 'AB', 'A', 'B', 'AB', 'AB', 'ACI'),
(21, 'B', 'AB', 'B', 'A', 'AB', 'B', 'AB', 'B', 'BC', 'B', 'BC', 'NCC'),
(22, 'AB', 'B', 'A', 'B', 'A', 'AB', 'AB', 'B', 'C', 'B', 'AB', 'NCC'),
(23, 'A', 'B', 'AB', 'AB', 'AB', 'B', 'B', 'A', 'BC', 'A', 'A', 'NCC'),
(24, 'AB', 'A', 'AB', 'B', 'A', 'AB', 'B', 'B', 'AB', 'B', 'B', 'NCC'),
(25, 'A', 'AB', 'A', 'AB', 'AB', 'B', 'A', 'B', 'B', 'B', 'BC', 'NCC'),
(26, 'A', 'AB', 'A', 'B', 'B', 'AB', 'A', 'AB', 'C', 'BC', 'BC', 'NCC'),
(28, 'AB', 'A', 'AB', 'B', 'A', 'AB', 'B', 'BC', 'C', 'B', 'C', 'NCC'),
(29, 'A', 'AB', 'AB', 'A', 'A', 'B', 'A', 'A', 'C', 'B', 'C', 'NCC'),
(30, 'AB', 'A', 'AB', 'AB', 'A', 'B', 'AB', 'BC', 'BC', 'A', 'B', 'NCC');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id` int(2) NOT NULL,
  `peluang_seis` float NOT NULL,
  `peluang_aci` float NOT NULL,
  `peluang_ncc` float NOT NULL,
  `lab` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id`, `peluang_seis`, `peluang_aci`, `peluang_ncc`, `lab`) VALUES
(1, 0.00000000000345716, 0.00000000000345716, 0.00000000000345716, ''),
(2, 0.00000000000345716, 0.00000000000345716, 0.00000000000345716, ''),
(3, 0.00000000000345716, 0.00000000000345716, 0.00000000000345716, ''),
(4, 0.00000000000024694, 0.00000000000024694, 0.00000000000024694, ''),
(5, 0.00000000000345716, 0.00000000000345716, 0.00000000000345716, ''),
(6, 0.00000000000345716, 0.00000000000345716, 0.00000000000345716, ''),
(7, 0.00000000000345716, 0.00000000000345716, 0.00000000000345716, ''),
(8, 0.00000000000345716, 0.00000000000345716, 0.00000000000345716, ''),
(9, 0.00000000000345716, 0.00000000000345716, 0.00000000000345716, ''),
(10, 0.00000000000345716, 0.00000000000345716, 0.00000000000345716, ''),
(11, 0.00000000000345716, 0.00000000000345716, 0.00000000000345716, ''),
(12, 0.00000000000345716, 0.00000000000345716, 0.00000000000345716, ''),
(13, 0.00000000000345716, 0.00000000000345716, 0.00000000000345716, ''),
(14, 0.00000000000345716, 0.00000000000345716, 0.00000000000345716, ''),
(15, 0.00000000000345716, 0.00000000000345716, 0.00000000000345716, ''),
(16, 0.00000000000345716, 0.00000000000345716, 0.00000000000345716, ''),
(17, 0.0000000000484003, 0.00000000000345716, 0.00000000000345716, ''),
(18, 0.0000000000484003, 0.000000000286797, 0.000976562, ''),
(19, 0.0000000000484003, 0.000000000286797, 0.000976562, ''),
(20, 0.0000000000484003, 0.000000000286797, 0.000976562, ''),
(21, 0.0000000000484003, 0.000000000286797, 0.000976562, ''),
(22, 0.0000000000484003, 0.000000000286797, 0.000976562, 'NCC'),
(23, 0.00000000000345716, 0.000000000286797, 0.000976562, 'NCC'),
(24, 329.701, 27351.1, 93132300000, 'NCC'),
(25, 329.701, 27351.1, 93132300000, 'NCC'),
(26, 329.701, 27351.1, 93132300000, 'NCC'),
(27, 329.701, 27351.1, 93132300000, 'NCC'),
(28, 329.701, 27351.1, 93132300000, 'NCC'),
(29, 329.701, 27351.1, 93132300000, 'NCC'),
(30, 329.701, 27351.1, 93132300000, 'NCC'),
(31, 329.701, 27351.1, 93132300000, 'NCC'),
(32, 329.701, 27351.1, 93132300000, 'NCC'),
(33, 329.701, 27351.1, 93132300000, 'NCC'),
(34, 0, 0, 0, 'ACI'),
(35, 0, 0, 0, 'ACI'),
(36, 0, 0, 0, 'ACI'),
(37, 0, 0, 0, 'ACI'),
(38, 0, 0, 0, 'ACI'),
(39, 0, 0, 0, 'ACI'),
(40, 0, 0, 0, 'ACI'),
(41, 0, 0, 0, 'ACI'),
(42, 0, 0, 0, 'ACI'),
(43, 0, 0, 0, 'ACI'),
(44, 0, 0, 0, 'ACI'),
(45, 0, 0, 0, 'ACI'),
(46, 0, 0, 0, 'ACI'),
(47, 0.0000001301, 0.000585277, 0.005, 'NCC'),
(48, 0.0000001301, 0.000585277, 0.005, 'NCC'),
(49, 0.0000001301, 0.000585277, 0.005, 'NCC'),
(50, 0, 0, 0, '$hasi'),
(51, 0.0000001301, 0.000585277, 0.005, 'NCC'),
(52, 0.0000001301, 0.000585277, 0.005, 'NCC'),
(53, 0.000000000145201, 0.000658436, 0.04, 'NCC'),
(54, 0.0000000024, 0.001728, 0.0000121933, 'ACI'),
(55, 0.0000000024, 0.001728, 0.0000121933, 'ACI'),
(56, 0.0000000024, 0.001728, 0.0000121933, 'ACI'),
(57, 0.00036, 0.0032, 0.0000812884, 'ACI'),
(58, 0.00036, 0.0032, 0.0000812884, 'ACI'),
(59, 0.0000108, 0.00000096, 0.00000903205, 'SEIS'),
(60, 0.00000072, 0.00096, 0.0000270961, 'ACI'),
(61, 0.4, 0.0000004, 0.36, 'SEIS'),
(62, 0.04, 0.0000006, 0.00592593, 'SEIS'),
(63, 0.008, 0.00000024, 0.00131687, 'SEIS'),
(64, 0.0008, 0.0000024, 0.000438957, 'SEIS'),
(65, 0.0008, 0.000024, 0.0000975461, 'SEIS'),
(66, 0.000016, 0.000096, 0.0000162577, 'ACI'),
(67, 0.000008, 0.0000576, 0.0000365798, 'ACI'),
(68, 0.0000032, 0.0001728, 0.0000162577, 'ACI'),
(69, 0.00001152, 0.0000486, 0.000000713643, 'ACI'),
(70, 0.0000003072, 0.00000432, 0.00000198234, 'ACI'),
(71, 0.0000004096, 0.0000972, 0.000000535232, 'ACI'),
(72, 0, 0, 0, 'ACI'),
(73, 0.0000666389, 0.000243865, 0.04, 'NCC'),
(74, 0.0000424993, 0.0000812884, 0.0025, 'NCC'),
(75, 0.0000849986, 0.000325154, 0.005, 'NCC'),
(76, 0.0000333195, 0.00000451602, 0.04, 'NCC'),
(77, 0, 0, 0, 'ACI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_training`
--
ALTER TABLE `data_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_training2`
--
ALTER TABLE `data_training2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_training`
--
ALTER TABLE `data_training`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `data_training2`
--
ALTER TABLE `data_training2`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
