-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 11, 2019 at 02:05 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshopdemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studentdata`
--

DROP TABLE IF EXISTS `tbl_studentdata`;
CREATE TABLE IF NOT EXISTS `tbl_studentdata` (
  `studentId` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `emailId` varchar(60) NOT NULL,
  `rollNo` int(4) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` enum('student','admin') NOT NULL DEFAULT 'student',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`studentId`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_studentdata`
--

INSERT INTO `tbl_studentdata` (`studentId`, `name`, `emailId`, `rollNo`, `password`, `userType`, `createdAt`) VALUES
(10, 'harshad', 'harshad@gmail.com', 32, '25d55ad283aa400af464c76d713c07ad', 'student', '2019-07-11 13:41:59'),
(9, 'Bhavin Harish Kalal', 'bhavinkalal21@gmail.com', 12, '25d55ad283aa400af464c76d713c07ad', 'admin', '2019-07-11 13:35:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studentmarks`
--

DROP TABLE IF EXISTS `tbl_studentmarks`;
CREATE TABLE IF NOT EXISTS `tbl_studentmarks` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `studentId` int(3) NOT NULL,
  `english` int(4) NOT NULL,
  `science` int(4) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `studentId` (`studentId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_studentmarks`
--

INSERT INTO `tbl_studentmarks` (`Id`, `studentId`, `english`, `science`, `createdAt`) VALUES
(4, 9, 58, 68, '2019-07-11 13:43:04'),
(3, 10, 40, 48, '2019-07-11 13:42:47');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
