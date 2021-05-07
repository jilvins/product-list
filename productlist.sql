-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 07, 2021 at 08:48 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productlist`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `sku` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `height` varchar(10) NOT NULL,
  `width` varchar(10) NOT NULL,
  `length` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `name`, `price`, `type`, `size`, `weight`, `height`, `width`, `length`) VALUES
(2, 'BOK100000', 'Homo Sapiens book', '12', 'book', '', '0.4', '', '', ''),
(13, 'FRN000004', 'Wardrobe', '250', 'furniture', '0', '0', '200', '80', '180'),
(12, 'BOK000001', 'Harry Potter', '10', 'book', '', '1', '', '', ''),
(8, 'BOK123400', 'Great successs', '8', 'book', '0', '0.3', '0', '0', '0'),
(10, 'FRN123453', 'Desk', '130', 'furniture', '0', '0', '100', '130', '120'),
(11, 'BOK234567', 'Hobbit', '7', 'book', '0', '0.4', '0', '0', '0'),
(14, 'BOK010101', 'Learn PHP', '12', 'book', '0', '0.7', '0', '0', '0'),
(56, 'DVD111111', 'Harry Potter', '9', 'DVD', '4000', '0', '0', '0', '0'),
(16, 'DVD123456', 'There and back again', '13', 'DVD', '4000', '0', '0', '0', '0'),
(17, 'FRN123456', 'Black chair', '40', 'furniture', '0', '0', '50', '50', '50'),
(57, 'DVD123456', 'test dvd', '8', 'DVD', '4000', '0', '0', '0', '0'),
(21, 'FRN123000', 'new chair', '34', 'furniture', '0', '0', '40', '40', '40'),
(58, 'DVD000000', 'test dvd', '8', 'DVD', '4000', '0', '0', '0', '0'),
(59, 'BOK000000', 'test book', '12', 'book', '0', '0.5', '0', '0', '0'),
(60, 'FRN000000', 'test furniture', '34', 'furniture', '0', '0', '120', '40', '50'),
(53, 'FRN123456', 'black table', '18', 'furniture', '0', '0', '120', '40', '50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
