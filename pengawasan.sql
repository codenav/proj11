-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2017 at 07:08 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perizinandb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengawasan`
--

CREATE TABLE `pengawasan` (
  `id` int(11) NOT NULL,
  `id_puskesmas` varchar(10) NOT NULL,
  `klinik` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `periode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengawasan`
--

INSERT INTO `pengawasan` (`id`, `id_puskesmas`, `klinik`, `tanggal`, `periode`) VALUES
(1, '1 ', '1 ', '2017-06-10', '1'),
(3, '1 ', '1 ', '2017-06-10', '1'),
(4, '1 ', '1 ', '2017-06-10', '1'),
(5, '1 ', '1 ', '2017-06-10', '1'),
(6, '1 ', '1 ', '2017-06-10', '1'),
(7, '234234 ', '234234 ', '2017-06-10', '2'),
(8, '234234 ', '234234 ', '2017-06-10', '2'),
(9, '234234 ', '234234 ', '2017-06-10', '2'),
(10, '234234 ', '234234 ', '2017-06-10', '2'),
(11, '234234 ', '234234 ', '2017-06-10', '2'),
(12, '234234 ', '234234 ', '2017-06-10', '2'),
(13, '1 ', '1 ', '2017-06-11', '2'),
(14, '1 ', '1 ', '2017-06-11', '2'),
(15, '1 ', '1 ', '2017-06-11', '2'),
(16, '1 ', '1 ', '2017-06-11', '2'),
(17, '1 ', '1 ', '2017-06-11', '2'),
(18, '1 ', '1 ', '2017-06-11', '2'),
(19, '1 ', '1 ', '2017-06-11', '2'),
(20, '1 ', '1 ', '2017-06-11', '2'),
(21, '1 ', '1 ', '2017-06-11', '2'),
(22, '0', '1 ', '2017-06-11', '2'),
(23, '0', '1 ', '2017-06-11', '2'),
(24, '0', '1 ', '2017-06-11', '2'),
(25, '0', '1 ', '2017-06-11', '2'),
(26, '1 ', '1 ', '2017-06-11', '2'),
(27, '1 ', '1 ', '2017-06-11', '2'),
(28, '1 ', '1 ', '2017-06-11', '2'),
(29, '1 ', '1 ', '2017-06-11', '2'),
(30, '1 ', '1 ', '2017-06-11', '2'),
(31, '1 ', '1 ', '2017-06-11', '2'),
(32, '1 ', '1 ', '2017-06-11', '2'),
(33, '1 ', '1 ', '2017-06-11', '2'),
(34, '1 ', '1 ', '2017-06-11', '2'),
(35, '1 ', '1 ', '2017-06-11', '2'),
(36, '1 ', '234234 ', '2017-06-11', '2'),
(37, '1 ', '234234 ', '2017-06-11', '2'),
(38, '1 ', '234234 ', '2017-06-11', '2'),
(39, '1 ', '1 ', '2017-06-11', '2'),
(40, '1 ', '1 ', '2017-06-11', '2'),
(41, '1 ', '1 ', '2017-06-11', '2'),
(42, '1 ', '234234 ', '2017-06-11', '1'),
(43, '1 ', '234234 ', '2017-06-11', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengawasan`
--
ALTER TABLE `pengawasan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengawasan`
--
ALTER TABLE `pengawasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
