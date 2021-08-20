-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 04:02 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetMembers` ()  SELECT * FROM customer$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetTrainers` ()  SELECT * FROM trainers$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SearchMemberById` (IN `ID` INT)  SELECT * FROM `customer` WHERE `Sno.` = ID$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SearchPaymentByID` (IN `ID` INT)  SELECT * FROM `payment` WHERE `Payment ID` = ID$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SearchTrainerById` (IN `ID` INT)  SELECT * FROM `trainers` WHERE `Trainers ID` = ID$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Sno.` int(3) NOT NULL,
  `Name` text NOT NULL,
  `Age` int(3) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `Email` text NOT NULL,
  `Phone Number` varchar(11) NOT NULL,
  `Date of Joining` datetime NOT NULL,
  `other` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Sno.`, `Name`, `Age`, `Gender`, `Email`, `Phone Number`, `Date of Joining`, `other`) VALUES
(1, 'Hassan Raza', 16, 'Male', '191159@students.au.edu.pk', '03359407692', '2021-05-31 16:46:28', ' fjfnfnfnkjnnsjknjfnkjnfnfnkfnjknfjnjfnejknfkjnjkfenjknfjnejfnkjfenkjefnkjnfekjnefjk'),
(2, 'Johny', 16, 'male', '191159@students.au.edu.pk', '03359407692', '2021-05-31 16:51:43', ' fjfnfnfnkjnnsjknjfnkjnfnfnkfnjknfjnjfnejknfkjnjkfenjknfjnejfnkjfenkjefnkjnfekjnefjk'),
(3, 'Salman Rashid', 23, 'Male', 'shiekhhassan1234draq@gmail.com', '03359407334', '2021-06-01 23:31:17', 'None'),
(4, 'Salman Khan', 50, 'Male', 'salman@gmail.com', '03359407442', '2021-06-02 20:25:57', 'None '),
(5, 'Saad Ali Khan', 25, 'Male', 'saad@gmail.com', '03335023120', '2021-06-13 21:49:10', 'None'),
(6, 'Afif Ahmed', 23, 'male', 'Afif@gmail.com', '03335023111', '2021-06-16 00:27:42', 'None'),
(7, 'yousf Raza', 20, 'Male', 'Raza@gmail.com', '03335023133', '2021-06-18 01:19:10', 'None'),
(8, 'Hassan Raza', 16, 'male', '191159@students.au.edu.pk', '03359407692', '2021-06-18 09:29:17', 'none'),
(9, 'Hassan Raza', 16, 'male', '191159@students.au.edu.pk', '03359407692', '2021-06-18 10:12:41', 'none'),
(10, 'Salman Khan', 23, 'male', '191159@students.au.edu.pk', '03359407692', '2021-06-20 01:47:51', 'none'),
(15, 'Salman Khan', 23, 'male', '191159@students.au.edu.pk', '03359407692', '2021-06-20 02:12:39', 'none'),
(16, '', 21, 'Male', 'Imram@gmail.com', '03335023111', '2021-07-19 23:43:23', 'None'),
(17, 'Imran Tahir', 21, 'Male', 'Imram@gmail.com', '03335023111', '2021-07-19 23:48:29', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `fitness diet plan`
--

CREATE TABLE `fitness diet plan` (
  `Diet ID` int(11) NOT NULL,
  `Member ID` int(11) NOT NULL,
  `Trainer ID` int(11) NOT NULL,
  `Fitness Diet` text NOT NULL,
  `Duration` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fitness diet plan`
--

INSERT INTO `fitness diet plan` (`Diet ID`, `Member ID`, `Trainer ID`, `Fitness Diet`, `Duration`) VALUES
(2, 1, 1, 'Keto Diet', '4 Weeks');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment ID` int(3) NOT NULL,
  `Customer ID` int(3) NOT NULL,
  `Trainer ID` int(3) NOT NULL,
  `Amount` int(4) NOT NULL,
  `Month` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Payment ID`, `Customer ID`, `Trainer ID`, `Amount`, `Month`) VALUES
(1, 0, 0, 2000, 'January'),
(2, 0, 0, 2000, 'January'),
(3, 1, 1, 2000, 'January'),
(4, 1, 1, 2000, 'January');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `Trainers ID` int(3) NOT NULL,
  `Name` text NOT NULL,
  `Phone Number` int(11) NOT NULL,
  `Email` text NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `Age` int(3) NOT NULL,
  `Address` text NOT NULL,
  `Date of Joining` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`Trainers ID`, `Name`, `Phone Number`, `Email`, `Gender`, `Age`, `Address`, `Date of Joining`) VALUES
(1, 'Hasseb', 2147483647, 'ahmed@gmail.com', 'Male', 30, 'Islamabad', '2021-06-18 11:29:37'),
(2, 'Ahmed Tahir', 2147483647, '191159@students.au.edu.pk', 'Male', 23, 'Islamabad', '2021-06-20 13:44:45'),
(4, 'Abdul Rehman', 2147483647, 'Rehman@gmail.com', 'Male', 27, 'Golra Mor', '2021-07-19 22:21:34'),
(5, 'Kainat Ahmed', 2147483647, 'Kainat@gmail.com', 'Female', 21, 'Islamabad I-8', '2021-07-19 22:47:55');

-- --------------------------------------------------------

--
-- Table structure for table `workout plan of week`
--

CREATE TABLE `workout plan of week` (
  `Plan ID` int(3) NOT NULL,
  `Customer ID` int(3) NOT NULL,
  `Trainer ID` int(3) NOT NULL,
  `Monday Plan` text NOT NULL,
  `Tuesday Plan` text NOT NULL,
  `Wednesday Plan` text NOT NULL,
  `Thursday Plan` text NOT NULL,
  `Friday Plan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workout plan of week`
--

INSERT INTO `workout plan of week` (`Plan ID`, `Customer ID`, `Trainer ID`, `Monday Plan`, `Tuesday Plan`, `Wednesday Plan`, `Thursday Plan`, `Friday Plan`) VALUES
(1, 1, 1, 'Dumbbell', 'Butterfly', 'Tridmill', 'Muscles', 'Pushups');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Sno.`);

--
-- Indexes for table `fitness diet plan`
--
ALTER TABLE `fitness diet plan`
  ADD PRIMARY KEY (`Diet ID`),
  ADD KEY `Member ID` (`Member ID`),
  ADD KEY `Trainer ID` (`Trainer ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment ID`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`Trainers ID`);

--
-- Indexes for table `workout plan of week`
--
ALTER TABLE `workout plan of week`
  ADD PRIMARY KEY (`Plan ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Sno.` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `fitness diet plan`
--
ALTER TABLE `fitness diet plan`
  MODIFY `Diet ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Payment ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `Trainers ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `workout plan of week`
--
ALTER TABLE `workout plan of week`
  MODIFY `Plan ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fitness diet plan`
--
ALTER TABLE `fitness diet plan`
  ADD CONSTRAINT `fitness diet plan_ibfk_1` FOREIGN KEY (`Member ID`) REFERENCES `customer` (`Sno.`),
  ADD CONSTRAINT `fitness diet plan_ibfk_2` FOREIGN KEY (`Trainer ID`) REFERENCES `trainers` (`Trainers ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
