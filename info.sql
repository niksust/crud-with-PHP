-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2016 at 02:08 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `reg` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `email`, `dept`, `reg`) VALUES
(1, 'Muhammad Mahir hasan Chowdhury', 'mahirhasancse@gmail.com', 'CSE', '2013331028'),
(2, 'Mahir Hasan', 'mahirhasancse@gmail.com', 'CSE', '2013331028'),
(3, 'tyht', 'htgh@hyoadks.vdkv', 'dfvdf', 'dfdf'),
(4, 'Palak', 'palak@gmail.com', 'CSE', '2013331006'),
(5, 'Shadman', 'shadman@gmail.com', 'CSE', '2013331026'),
(6, 'ewfef', 'fdr@dfgd.bf', 'dgd', 'dgd'),
(7, 'Tarif', 'tarif@gmail.com', 'CSE', '2013331067'),
(8, 'Nitesh Khadka', 'nik@gmail.com', 'CSE', '2013331065'),
(9, 'Meem', 'meemnishat@gmail.com', 'CSE', '2013331009');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
