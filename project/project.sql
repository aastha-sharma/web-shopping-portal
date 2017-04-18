-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2016 at 06:45 AM
-- Server version: 5.5.45
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcategory`
--

CREATE TABLE IF NOT EXISTS `addcategory` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `addcategory`
--

INSERT INTO `addcategory` (`id`, `category`) VALUES
(1, 'Tables'),
(2, 'Chairs'),
(3, 'Housing'),
(4, 'Office');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `o_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(150) NOT NULL,
  `type` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL,
  `price` int(150) NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`o_id`, `product_id`, `type`, `image`, `price`) VALUES
(1, 'AE107', 'Tables', 't5.jpg', 1200),
(2, 'AE108', 'Tables', 't4.jpg', 800),
(3, 'AE109', 'Tables', 't2.jpg', 1500),
(4, 'AE110', 'Tables', 't1.jpg', 1000),
(5, 'AE111', 'Tables', 't3.jpg', 800),
(6, 'AC123', 'Chairs', 'c2.jpg', 2480),
(7, 'AC124', 'Chairs', 'c4.jpg', 4000),
(8, 'AC125', 'Chairs', 'c1.jpg', 1000),
(9, 'AC126', 'Chairs', 'c3.jpg', 5000),
(10, 'AC127', 'Chairs', 'c5.jpg', 3200),
(11, 'AO132', 'Office', 'o1.jpg', 5000),
(12, 'AO133', 'Office', 'o4.jpg', 1200),
(13, 'AO134', 'Office', 'o2.jpg', 6000),
(14, 'AO135', 'Office', 'o3.jpg', 14999),
(15, 'AO136', 'Office', 'o5.jpg', 7645),
(16, 'AH211', 'Housing', 'h1.jpg', 12000),
(17, 'AH212', 'Housing', 'h2.jpg', 20000),
(18, 'AH213', 'Housing', 'h3.jpg', 25000),
(19, 'AH214', 'Housing', 'h4.jpg', 8000),
(20, 'AH215', 'Housing', 'h5.jpg', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `Name` varchar(100) NOT NULL,
  `Age` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`Name`, `Age`, `Email`, `Username`, `password`) VALUES
('Aastha Sharma', 19, 'aastha@gmail.com', 'admin', 'aas');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Dob` date NOT NULL,
  `City` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Id`, `Name`, `Username`, `Gender`, `Password`, `Dob`, `City`, `Address`) VALUES
(1, 'aastha sharma', 'aas333', 'Female', 'aasthas123', '1996-03-08', 'chd', 'asd5tyt'),
(5, 'Udit Sharma', 'udit123', 'Male', 'xyz', '1992-02-10', 'chd', 'kkkjm56'),
(6, 'deepansh', 'deep123', 'Male', 'newpass', '1996-02-29', 'chd', 'ahhshhd'),
(7, 'Dhriti Gupta', 'dh123', 'Female', 'xyz', '1996-01-18', 'amr', 'ghy78'),
(8, 'saras', 'saras walia', 'Male', 'qwerty', '2016-06-28', 'chd', 'dfghg'),
(9, 'Kriti Vaidya', 'kriti', 'Female', 'asd', '1996-03-09', 'amr', 'qwertyu');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `Name` varchar(100) NOT NULL,
  `Card_Number` int(100) NOT NULL,
  `CVV` int(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Name`, `Card_Number`, `CVV`, `product_id`, `Price`) VALUES
('Aastha Sharma', 12345, 987, 'AE107', 1200),
('Rahul', 5670, 435, 'AE110', 1000),
('Jon Snow', 4327, 123, 'AC124', 4000),
('Sansa Stark', 7906, 123, 'AH212', 20000),
('Cersi Lannister', 2356, 987, 'AO136', 7645);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
