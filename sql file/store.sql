-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2014 at 08:01 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` decimal(6,0) NOT NULL,
  `cat` text NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `name`, `description`, `price`, `cat`) VALUES
(3, 'Advances in CS', 'CS des 1', '45', 'cse'),
(4, 'CS Name 2', 'CS des 2', '58', 'cse'),
(5, 'CS Name 3', 'CS Des 3', '85', 'cse'),
(6, 'CS Name 4', 'CS Des 4', '45', 'cse'),
(7, 'CS Name 5', 'CS des 5', '87', 'cse'),
(8, 'CS Name 6', 'CS Des 6', '86', 'cse'),
(9, 'CS Name 7', 'CS Des 7', '96', 'cse'),
(10, 'CS Name 8', 'CS Des 8', '98', 'cse'),
(11, 'BT Name 1', 'BT Des 1', '85', 'biotech'),
(12, 'BT Name 2', 'BT Des 2', '89', 'biotech'),
(13, 'BT Name 3', 'BT Des 3', '85', 'biotech'),
(14, 'BT Name 4', 'BT Des 4', '65', 'biotech'),
(15, 'BT Name 5', 'BT Des  5', '89', 'biotech'),
(16, 'BT Name 6', 'BT Des 6', '32', 'biotech'),
(17, 'BT Name 7', 'BT Des 7', '21', 'biotech'),
(18, 'BT Name 8', 'BT Des 8', '34', 'biotech'),
(19, 'ECE Name 1', 'ECE Des 1', '65', 'ece'),
(20, 'ECE Name 2', 'ECE Des 2', '95', 'ece'),
(21, 'ECE Name 3', 'ECE Des 3', '56', 'ece'),
(22, 'ECE Name 4', 'ECE Des 4', '86', 'ece'),
(23, 'ECE Name 5', 'ECE Des 5', '35', 'ece'),
(24, 'ECE Name 6', 'ECE Des 6', '15', 'ece'),
(25, 'ECE Name 7', 'ECE Des 7', '16', 'ece'),
(26, 'ECE Name 8', 'ECE Des 8', '61', 'ece'),
(27, 'EEE Name 1', 'EEE Des 1', '69', 'eee'),
(28, 'EEE Name 2', 'EEE Des 2', '25', 'eee'),
(29, 'EEE Name 3', 'EEE Des 3', '35', 'eee'),
(30, 'EEE Name 4', 'EEE Des 4', '69', 'eee'),
(31, 'EEE Name 5', 'EEE Des 5', '96', 'eee'),
(32, 'EEE Name 6', 'EEE Des 6', '37', 'eee'),
(33, 'EEE Name 7', 'EEE Des 7', '65', 'eee'),
(34, 'EEE Name 8', 'EEE Des 8', '45', 'eee'),
(35, 'wy', 'owsgjso', '49', 'sg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(150) NOT NULL,
  `pincode` int(6) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `phone` (`phone`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `password`, `gender`, `dob`, `address`, `pincode`, `phone`, `email`, `uid`) VALUES
('Mahesh', 'Chowdam', 'mahi1506', 'male', '1994-06-15', 'Tirupati', 517501, 9502731362, 'mahesh.chowdam@gmail.com', 23);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
