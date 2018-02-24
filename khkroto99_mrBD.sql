-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2018 at 07:37 PM
-- Server version: 10.0.34-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khkroto99_mrBD`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `ID` int(11) NOT NULL,
  `Full_Name` varchar(256) CHARACTER SET utf8 NOT NULL,
  `email` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `phone_number` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `district` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `feedback` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `total_score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`ID`, `Full_Name`, `email`, `phone_number`, `district`, `feedback`, `total_score`) VALUES
(20, 'Ahmad Sharif', 'ahmadsharif@gmail.com', '1711820236', 'Chittagong', '456', 1),
(32, 'Ahmad', 'ahmadttttttttttttt@gmail.com', '88888888888', 'Gazipur', '9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999', 2),
(33, 'a', 'a@b.com', '55555555555', 'Joypurhat', '', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
