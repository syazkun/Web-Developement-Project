-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2022 at 02:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `paymentdetail`
--

CREATE TABLE `paymentdetail` (
  `Id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cardnumber` bigint(11) NOT NULL,
  `expmonth` int(11) NOT NULL,
  `expyear` int(11) NOT NULL,
  `ccv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentdetail`
--

INSERT INTO `paymentdetail` (`Id`, `firstname`, `email`, `address`, `city`, `state`, `zip`, `name`, `cardnumber`, `expmonth`, `expyear`, `ccv`) VALUES
(1, 'Mei', 'syazkun193@gmail.com', ' 30 Jln Mutiara Raya Taman Mutiara', ' Kuala Lumpur', ' Wilayah Persekutuan', 56000, 'Mei', 4518508871283, 3, 2027, 524);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paymentdetail`
--
ALTER TABLE `paymentdetail`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paymentdetail`
--
ALTER TABLE `paymentdetail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
