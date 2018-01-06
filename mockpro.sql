-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2017 at 03:29 PM
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
-- Table structure for table `consultancy_ans`
--

CREATE TABLE `consultancy_ans` (
  `QuizID` int(11) NOT NULL,
  `ques_no` int(11) NOT NULL,
  `choice` varchar(255) NOT NULL,
  `is_correct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `consultancy_quiz`
--

CREATE TABLE `consultancy_quiz` (
  `QuizID` int(11) NOT NULL,
  `ques_no` int(11) NOT NULL,
  `ques` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `core_ans`
--

CREATE TABLE `core_ans` (
  `QuizID` int(11) NOT NULL,
  `ques_no` int(11) NOT NULL,
  `choice` varchar(255) NOT NULL,
  `is_correct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `core_quiz`
--

CREATE TABLE `core_quiz` (
  `QuizID` int(11) NOT NULL,
  `ques_no` int(11) NOT NULL,
  `ques` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `finance_ans`
--

CREATE TABLE `finance_ans` (
  `QuizID` int(11) NOT NULL,
  `ques_no` int(11) NOT NULL,
  `choice` varchar(255) NOT NULL,
  `is_correct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `finance_quiz`
--

CREATE TABLE `finance_quiz` (
  `QuizID` int(11) NOT NULL,
  `ques_no` int(11) NOT NULL,
  `ques` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `soft_ans`
--

CREATE TABLE `soft_ans` (
  `QuizID` int(11) NOT NULL,
  `ques_no` int(11) NOT NULL,
  `choice` varchar(255) NOT NULL,
  `is_correct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soft_ans`
--

INSERT INTO `soft_ans` (`QuizID`, `ques_no`, `choice`, `is_correct`) VALUES
(1, 1, 'Hypertext Preprocessor', 1),
(2, 1, 'Prepared Hpertext', 0),
(3, 1, 'Preprocessed Hperlink', 0),
(4, 1, 'Preprocessing Hypertext', 0);

-- --------------------------------------------------------

--
-- Table structure for table `soft_quiz`
--

CREATE TABLE `soft_quiz` (
  `QuizID` int(11) NOT NULL,
  `ques_no` bigint(20) NOT NULL,
  `ques` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soft_quiz`
--

INSERT INTO `soft_quiz` (`QuizID`, `ques_no`, `ques`) VALUES
(1, 1, 'What does PHP stands for?'),
(1, 2, 'Which one is Object oriented language?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultancy_ans`
--
ALTER TABLE `consultancy_ans`
  ADD PRIMARY KEY (`QuizID`),
  ADD UNIQUE KEY `choice` (`choice`);

--
-- Indexes for table `consultancy_quiz`
--
ALTER TABLE `consultancy_quiz`
  ADD PRIMARY KEY (`QuizID`);

--
-- Indexes for table `core_ans`
--
ALTER TABLE `core_ans`
  ADD PRIMARY KEY (`QuizID`),
  ADD UNIQUE KEY `choice` (`choice`);

--
-- Indexes for table `core_quiz`
--
ALTER TABLE `core_quiz`
  ADD PRIMARY KEY (`QuizID`);

--
-- Indexes for table `finance_ans`
--
ALTER TABLE `finance_ans`
  ADD PRIMARY KEY (`QuizID`),
  ADD UNIQUE KEY `choice` (`choice`);

--
-- Indexes for table `finance_quiz`
--
ALTER TABLE `finance_quiz`
  ADD PRIMARY KEY (`QuizID`);

--
-- Indexes for table `soft_ans`
--
ALTER TABLE `soft_ans`
  ADD PRIMARY KEY (`QuizID`),
  ADD UNIQUE KEY `choice` (`choice`);

--
-- Indexes for table `soft_quiz`
--
ALTER TABLE `soft_quiz`
  ADD PRIMARY KEY (`ques_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultancy_ans`
--
ALTER TABLE `consultancy_ans`
  MODIFY `QuizID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `consultancy_quiz`
--
ALTER TABLE `consultancy_quiz`
  MODIFY `QuizID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `core_ans`
--
ALTER TABLE `core_ans`
  MODIFY `QuizID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `core_quiz`
--
ALTER TABLE `core_quiz`
  MODIFY `QuizID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `finance_ans`
--
ALTER TABLE `finance_ans`
  MODIFY `QuizID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `finance_quiz`
--
ALTER TABLE `finance_quiz`
  MODIFY `QuizID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `soft_ans`
--
ALTER TABLE `soft_ans`
  MODIFY `QuizID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `soft_quiz`
--
ALTER TABLE `soft_quiz`
  MODIFY `ques_no` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
