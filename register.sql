-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2017 at 11:00 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mockpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Name` text NOT NULL,
  `Reg no.` varchar(10) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Father's name` text NOT NULL,
  `Gender` text NOT NULL,
  `Contact` int(15) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Course` varchar(255) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `CPI` float NOT NULL,
  `Register time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Name`, `Reg no.`, `Password`, `Father's name`, `Gender`, `Contact`, `Email`, `Course`, `Year`, `CPI`, `Register time`) VALUES
('Arjita Chaurasia', '20152041', 'arjita_03', 'Mr. Kishan Chaurasia', 'Female', 972171683, 'arjitachaurasia@gmail.com', 'B.tech', '2', 8.41, '2017-03-17 00:00:00'),
('Arjita Chaurasia', '20152041', 'arjita_03', 'Mr. Kishan Chaurasia', 'Female', 972171683, 'arjitachaurasia@gmail.com', 'B.tech', '2', 8.41, '2017-03-17 00:00:00'),
('Saumya Chaurasia', '201609', '3a9dd71e7a4349ae474d86a6d', 'Mr. kishan Chaurasia', 'female', 2147483647, 'samya11@gmail.com', 'M.TECH', '1st year', 8, '2017-03-17 15:26:57'),
('Saumya Chaurasia', '201609', '25f9e794323b453885f5181f1', 'Mr kishan Chaurasia', 'female', 2147483647, 'samya11@gmail.com', 'M.TECH', '1st year', 8, '2017-03-17 15:27:44'),
('Saumya Chaurasia', '201609', '9f4b01563b81eb1b114365270', 'Mr kishan Chaurasia', 'female', 2147483647, 'samya11@gmail.com', 'M.TECH', '1st year', 8, '2017-03-17 15:28:07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
