-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2017 at 02:51 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finaldata`
--

-- --------------------------------------------------------

--
-- Table structure for table `1`
--

CREATE TABLE IF NOT EXISTS `1` (
  `section` varchar(255) NOT NULL,
  `QuizID` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `attempt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1`
--

INSERT INTO `1` (`section`, `QuizID`, `score`, `wrong`, `attempt`) VALUES
('Core', 1, 3, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `consultancy_ans`
--

CREATE TABLE IF NOT EXISTS `consultancy_ans` (
  `QuizID` int(11) NOT NULL,
  `ques_no` int(11) NOT NULL,
  `option_no` int(11) NOT NULL,
  `choice` varchar(255) NOT NULL,
  `is_correct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultancy_ans`
--

INSERT INTO `consultancy_ans` (`QuizID`, `ques_no`, `option_no`, `choice`, `is_correct`) VALUES
(1, 1, 1, '1', 0),
(2, 4, 3, '10', 0),
(2, 1, 3, '100', 0),
(3, 2, 3, '1000', 0),
(2, 3, 3, '110', 0),
(3, 1, 2, '120', 0),
(2, 3, 3, '130', 0),
(3, 3, 3, '160', 0),
(2, 4, 3, '180', 0),
(3, 3, 1, '190', 0),
(1, 1, 2, '2', 1),
(2, 1, 3, '200', 0),
(1, 3, 2, '21', 0),
(3, 2, 1, '220', 0),
(1, 3, 3, '23', 0),
(3, 3, 2, '230', 0),
(3, 1, 0, '234', 0),
(1, 2, 3, '3', 1),
(3, 3, 2, '30', 0),
(2, 1, 3, '300', 0),
(1, 4, 2, '333', 0),
(1, 1, 3, '37', 0),
(2, 3, 3, '38', 0),
(1, 3, 4, '4', 1),
(2, 1, 3, '400', 0),
(2, 2, 3, '420', 0),
(1, 2, 1, '45', 0),
(1, 1, 4, '46', 0),
(2, 2, 3, '480', 0),
(1, 4, 1, '5', 1),
(3, 2, 3, '50', 0),
(1, 3, 1, '54', 0),
(1, 4, 4, '544', 0),
(1, 4, 3, '5453', 0),
(2, 4, 3, '60', 0),
(1, 2, 2, '67', 0),
(3, 2, 2, '70', 0),
(2, 3, 3, '80', 0),
(1, 2, 4, '88', 0),
(3, 2, 0, '89', 0),
(3, 2, 1, '90', 0),
(3, 2, 3, '900', 0);

-- --------------------------------------------------------

--
-- Table structure for table `consultancy_quiz`
--

CREATE TABLE IF NOT EXISTS `consultancy_quiz` (
  `QuizID` int(11) NOT NULL,
  `ques_no` int(11) NOT NULL,
  `ques` varchar(255) NOT NULL,
  `time` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultancy_quiz`
--

INSERT INTO `consultancy_quiz` (`QuizID`, `ques_no`, `ques`, `time`) VALUES
(1, 1, '1+1+?', 30),
(1, 2, '1+2=?', 30),
(1, 3, '1+3=?', 30),
(1, 4, '1+4=?', 30),
(2, 1, '10*10+100=?', 0),
(2, 3, '50+80=?', 0),
(2, 2, '500-80=?', 0),
(3, 1, '60+60=', 0),
(3, 3, '70+10=?', 0),
(3, 2, '80=', 0),
(2, 4, '90+90=?', 0);

-- --------------------------------------------------------

--
-- Table structure for table `core_ans`
--

CREATE TABLE IF NOT EXISTS `core_ans` (
  `QuizID` int(11) NOT NULL,
  `ques_no` int(11) NOT NULL,
  `option_no` int(11) NOT NULL,
  `choice` varchar(255) NOT NULL,
  `is_correct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `core_ans`
--

INSERT INTO `core_ans` (`QuizID`, `ques_no`, `option_no`, `choice`, `is_correct`) VALUES
(1, 5, 1, '1', 0),
(1, 1, 3, '109', 0),
(1, 1, 1, '110', 1),
(1, 1, 2, '111', 0),
(1, 1, 4, '112', 0),
(1, 5, 2, '2', 0),
(1, 5, 3, '3', 0),
(1, 5, 4, '4', 1),
(1, 3, 1, 'AND Gate', 0),
(1, 2, 3, 'Marginal Semiconductor FET', 0),
(1, 2, 4, 'Metal FET', 0),
(1, 2, 1, 'Metal Oxide Semiconductor FET', 1),
(1, 2, 2, 'Metal Semiconductor FET', 0),
(1, 3, 2, 'NAND Gate', 1),
(1, 4, 4, 'None of these', 0),
(1, 3, 4, 'NOT gate', 0),
(1, 3, 3, 'OR gate', 0),
(1, 4, 3, 'PAL', 1),
(1, 4, 1, 'PLA', 0),
(1, 4, 2, 'PLDs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `core_quiz`
--

CREATE TABLE IF NOT EXISTS `core_quiz` (
  `QuizID` int(11) NOT NULL,
  `ques_no` int(11) NOT NULL,
  `ques` varchar(255) NOT NULL,
  `time` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `core_quiz`
--

INSERT INTO `core_quiz` (`QuizID`, `ques_no`, `ques`, `time`) VALUES
(1, 1, '20+90', 30),
(1, 4, 'In which design logic one array is fixed?', 30),
(1, 5, 'MOD-4 counter has states?', 30),
(1, 2, 'MOSFET is an acronym for?', 30),
(1, 3, 'Which one is the universal gate?', 30);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `Section` varchar(20) NOT NULL,
  `quiz_id` int(100) NOT NULL,
  `question` varchar(300) NOT NULL,
  `answer` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`Section`, `quiz_id`, `question`, `answer`) VALUES
('software', 1, 'Which branch students are eligible for this test?', 'All circuit branch students are eligible for this test!'),
('software', 1, 'What is the duration of this test?', '1:30 hours!'),
('software', 2, 'Can we give this quiz twice?', 'No you can''t!'),
('core', 1, 'Which branch students are eligible for giving this test?', 'Civil, Mechanical and PIE!'),
('core', 2, 'I''m from chemical engineering. Can I give this test?', 'No! Only Ece and Electrical Engineering students!'),
('consultancy', 1, 'I''m from chemical engineering. Can I give this test?', 'Yes!All branches are eligible');

-- --------------------------------------------------------

--
-- Table structure for table `finance_ans`
--

CREATE TABLE IF NOT EXISTS `finance_ans` (
  `QuizID` int(11) NOT NULL,
  `ques_no` int(11) NOT NULL,
  `option_no` int(11) NOT NULL,
  `choice` varchar(255) NOT NULL,
  `is_correct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance_ans`
--

INSERT INTO `finance_ans` (`QuizID`, `ques_no`, `option_no`, `choice`, `is_correct`) VALUES
(2, 4, 1, '10', 1),
(2, 1, 1, '100', 1),
(1, 1, 1, '128', 0),
(1, 1, 2, '129', 1),
(1, 1, 3, '130', 0),
(1, 1, 4, '131', 0),
(2, 2, 2, '180', 1),
(1, 2, 2, '18th century', 1),
(1, 2, 3, '19th century', 0),
(2, 2, 1, '20', 0),
(2, 1, 2, '200', 0),
(2, 1, 3, '300', 0),
(2, 4, 2, '40', 0),
(2, 1, 4, '400', 0),
(2, 3, 2, '45', 1),
(2, 2, 3, '56', 0),
(2, 4, 3, '60', 0),
(2, 2, 4, '600', 0),
(2, 3, 4, '66', 0),
(2, 3, 1, '78', 0),
(2, 4, 4, '80', 0),
(1, 5, 2, 'Central Banks', 1),
(1, 4, 4, 'Credit Schemes Generation', 0),
(1, 2, 4, 'Golden age', 0),
(1, 3, 4, 'Infrastructure', 0),
(1, 4, 1, 'Insurance Policy', 0),
(1, 3, 1, 'Investement', 0),
(1, 5, 3, 'Investment Bank', 0),
(1, 3, 3, 'Loan giving functionality', 1),
(1, 4, 2, 'Loans', 0),
(1, 4, 3, 'M&A advices', 1),
(1, 2, 1, 'Middle age', 0),
(1, 5, 4, 'Monetary Bank', 1),
(1, 3, 2, 'Monetary funds', 1),
(1, 5, 1, 'Traditional Banks', 0);

-- --------------------------------------------------------

--
-- Table structure for table `finance_quiz`
--

CREATE TABLE IF NOT EXISTS `finance_quiz` (
  `QuizID` int(11) NOT NULL,
  `ques_no` int(11) NOT NULL,
  `ques` varchar(255) NOT NULL,
  `time` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance_quiz`
--

INSERT INTO `finance_quiz` (`QuizID`, `ques_no`, `ques`, `time`) VALUES
(2, 1, '10*10+100=?', 0),
(1, 1, '29+100?', 30),
(2, 4, '40-30', 0),
(2, 3, '45=', 0),
(2, 2, '90+90=?', 0),
(1, 3, 'Central banks have different functions such as?', 30),
(1, 4, 'Commerical banks offer all of the following except:', 30),
(1, 2, 'Merchant Banks were first established during?', 30),
(1, 5, 'Which financial institutions offer the best result? ', 30);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_details`
--

CREATE TABLE IF NOT EXISTS `quiz_details` (
  `Section` varchar(255) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `quiz_description` varchar(255) NOT NULL,
  `test_admin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `conduct_date` date NOT NULL,
  `conduct_time` time NOT NULL,
  `duration` time NOT NULL,
  `no_question` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_details`
--

INSERT INTO `quiz_details` (`Section`, `quiz_id`, `quiz_description`, `test_admin`, `email`, `conduct_date`, `conduct_time`, `duration`, `no_question`) VALUES
('', 0, '', '', '', '0000-00-00', '00:00:00', '01:30:00', NULL),
('finance', 2, 'Maths Quiz!', 'Aman', 'aman@gmail.com', '2017-05-08', '07:09:00', '00:00:00', 4),
('consultancy', 3, 'Maths Quiz!', 'Anthony', 'anthony@gmail.com', '2017-02-06', '20:00:00', '00:00:00', 4),
('core', 1, 'Quiz testing basic knowledge of strength of material!For students from Mechanical, Civil and Production and Industrial Engineering!', 'Jack Sparrow', 'jacksparrow@gmail.com', '2017-04-13', '20:15:00', '00:02:30', 1),
('software', 1, 'Quiz testing basic software knowledge?', 'John Doe', 'johndoe@gmail.com', '2017-04-11', '19:45:00', '00:02:45', 5),
('software', 2, 'Quiz testing basic knowledge of Algorithms!', 'Mike Knowles', 'mikeknowles@gmail.com', '2017-04-14', '14:00:00', '00:02:00', 4),
('consultancy', 2, 'Basic consultancy quiz! Open for all branches!', 'Abhinav Rathore', 'rathore2015@gmail.com', '2017-02-06', '08:30:00', '00:00:00', 4),
('consultancy', 1, 'Quiz testing basic knowledge of Consultancy!', 'Sachin Sharma', 'sachinsharma@gmail.com', '2017-04-24', '06:30:00', '00:02:30', 4),
('finance', 1, 'Quiz Testing basic knowledge of finance!', 'Steve Johnsson', 'stevejohnsson@gmail.com', '2017-04-20', '19:00:00', '00:02:30', 5);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `UID` int(11) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`UID`, `Name`, `Reg no.`, `Password`, `Father's name`, `Gender`, `Contact`, `Email`, `Course`, `Year`, `CPI`, `Register time`) VALUES
(1, 'Saumya Chaurasia', '201609', '3a9dd71e7a4349ae474d86a6d', 'Mr. kishan Chaurasia', 'female', 2147483647, 'samya11@gmail.com', 'M.TECH', '1st year', 8, '2017-03-17 15:26:57'),
(2, 'ARJITA CHAURASIA', '20152041', 'arjita', 'Mr. Kishan Chaurasia', 'female', 972171683, 'arjitachaurasia@gmail.com', 'B.Tech', '2nd Year', 8.41, '2017-04-07 07:02:41'),
(3, 'Abhinav Singh Rathore', '20156006', 'abhinav_rathore', 'Mr A.K.Singh', 'Male', 2147483647, 'rathore2015@gmail.com', 'Btech', '2nd', 8.47, '2017-04-07 15:07:39');

-- --------------------------------------------------------

--
-- Table structure for table `soft_ans`
--

CREATE TABLE IF NOT EXISTS `soft_ans` (
  `QuizID` int(11) NOT NULL,
  `ques_no` int(11) NOT NULL,
  `option_no` int(11) NOT NULL,
  `choice` varchar(255) NOT NULL,
  `is_correct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soft_ans`
--

INSERT INTO `soft_ans` (`QuizID`, `ques_no`, `option_no`, `choice`, `is_correct`) VALUES
(2, 3, 4, 'Adam', 0),
(2, 2, 4, 'all of above', 0),
(1, 5, 2, 'application programs', 1),
(1, 3, 1, 'applications programs', 0),
(1, 3, 4, 'both a and b', 1),
(2, 4, 2, 'c', 0),
(2, 4, 3, 'c#', 0),
(2, 4, 4, 'c++', 0),
(2, 2, 2, 'compiler', 0),
(1, 4, 1, 'database packages', 0),
(1, 2, 4, 'English', 0),
(2, 1, 1, 'experimental programs', 0),
(1, 4, 2, 'file package', 0),
(1, 2, 2, 'Hindi', 0),
(1, 1, 1, 'Hypertext Preprocessor', 1),
(2, 3, 1, 'James Gosling', 1),
(1, 2, 1, 'Java', 1),
(2, 4, 1, 'JJava', 1),
(2, 3, 2, 'Leonardo De Caprio', 0),
(2, 3, 3, 'Mark', 0),
(1, 3, 3, 'mathematical operations', 0),
(2, 2, 1, 'operating system of computer', 0),
(2, 1, 4, 'organized programs', 0),
(1, 1, 2, 'Prepared Hpertext', 0),
(1, 1, 3, 'Preprocessed Hperlink', 0),
(1, 1, 4, 'Preprocessing Hypertext', 0),
(1, 5, 3, 'relative program', 0),
(1, 5, 1, 'relative programs', 0),
(1, 5, 4, 'replicate program', 0),
(1, 3, 2, 'replicate programs', 0),
(1, 4, 3, 'software', 0),
(1, 4, 4, 'software packages', 1),
(1, 2, 3, 'Spanish', 0),
(2, 1, 3, 'specialized program', 0),
(2, 1, 2, 'system programs', 1),
(2, 2, 3, 'trace program', 0);

-- --------------------------------------------------------

--
-- Table structure for table `soft_quiz`
--

CREATE TABLE IF NOT EXISTS `soft_quiz` (
  `QuizID` int(11) NOT NULL,
  `ques_no` bigint(20) NOT NULL,
  `ques` varchar(255) NOT NULL,
  `time` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soft_quiz`
--

INSERT INTO `soft_quiz` (`QuizID`, `ques_no`, `ques`, `time`) VALUES
(3, 1, 'CISCO is related to ?', 30),
(2, 4, 'James Gosling developed______?', 30),
(2, 3, 'Java was developed by?', 30),
(2, 1, 'Programs used to control system performances are classified as', 30),
(1, 4, 'Set of programs with full set of documentation is considered as', 30),
(1, 5, 'Specialized program that allows users to utilize in specific application is classified as', 30),
(2, 2, 'System program examples includes', 30),
(1, 3, 'Types of software programs usually includes?', 30),
(1, 1, 'What does PHP stands for?', 45),
(1, 2, 'Which one is Object oriented language?', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultancy_ans`
--
ALTER TABLE `consultancy_ans`
  ADD UNIQUE KEY `choice` (`choice`);

--
-- Indexes for table `consultancy_quiz`
--
ALTER TABLE `consultancy_quiz`
  ADD PRIMARY KEY (`ques`);

--
-- Indexes for table `core_ans`
--
ALTER TABLE `core_ans`
  ADD UNIQUE KEY `choice` (`choice`);

--
-- Indexes for table `core_quiz`
--
ALTER TABLE `core_quiz`
  ADD PRIMARY KEY (`ques`);

--
-- Indexes for table `finance_ans`
--
ALTER TABLE `finance_ans`
  ADD UNIQUE KEY `choice` (`choice`);

--
-- Indexes for table `finance_quiz`
--
ALTER TABLE `finance_quiz`
  ADD PRIMARY KEY (`ques`);

--
-- Indexes for table `quiz_details`
--
ALTER TABLE `quiz_details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `soft_ans`
--
ALTER TABLE `soft_ans`
  ADD UNIQUE KEY `choice` (`choice`),
  ADD UNIQUE KEY `choice_2` (`choice`);

--
-- Indexes for table `soft_quiz`
--
ALTER TABLE `soft_quiz`
  ADD PRIMARY KEY (`ques`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
