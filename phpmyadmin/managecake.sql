-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2022 at 02:38 AM
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
-- Table structure for table `managecake`
--

CREATE TABLE `managecake` (
  `Id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managecake`
--

INSERT INTO `managecake` (`Id`, `name`, `branch`, `price`, `quantity`) VALUES
(1, 'Heavenly Chocolate Cake', 'Setia Alam City Mall', 100, 5),
(2, 'Heavenly Chocolate Cake', 'SACC Mall in Shah Alam', 100, 3),
(3, 'Heavenly Chocolate Cake', 'AEON Shah Alam', 100, 2),
(4, 'Red Velvet Standard', 'Setia Alam City Mall', 50, 5),
(5, 'Red Velvet Standard', 'SACC Mall in Shah Alam', 50, 3),
(6, 'Red Velvet Standard', 'AEON Shah Alam', 50, 2),
(7, 'Pandan Gula Melaka', 'Setia Alam City Mall', 130, 5),
(8, 'Pandan Gula Melaka', 'SACC Mall in Shah Alam', 130, 3),
(9, 'Pandan Gula Melaka', 'AEON Shah Alam', 130, 1),
(10, 'Nutella Cheese Tart', 'Setia Alam City Mall', 80, 5),
(11, 'Nutella Cheese Tart', 'SACC Mall in Shah Alam', 80, 1),
(12, 'Nutella Cheese Tart', 'AEON Shah Alam', 80, 2),
(13, 'Pecan ButterscotchCake', 'Setia Alam City Mall', 40, 5),
(14, 'Pecan ButterscotchCake', 'SACC Mall in Shah Alam', 40, 3),
(15, 'Pecan ButterscotchCake', 'AEON Shah Alam', 40, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `managecake`
--
ALTER TABLE `managecake`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `managecake`
--
ALTER TABLE `managecake`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
