-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2017 at 07:03 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `buynow`
--

CREATE TABLE `buynow` (
  `address` varchar(50) NOT NULL,
  `cardno` bigint(16) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `expirydate` varchar(5) NOT NULL,
  `payment` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buynow`
--

INSERT INTO `buynow` (`address`, `cardno`, `cvv`, `expirydate`, `payment`) VALUES
('', 12336554, '111', '2', 'Debit Card'),
('ku bdh tdjykutkutcgh', 0, '0', '', 'COD'),
('101, Vrindavan towers, Mahavir Nagar, Kandivali we', 2147483647, '89', '04/21', 'Debit Card'),
('', 8765097834651233, '080', '01/24', 'Debit Card'),
('nrydnugvitucbudygyvghbj', 1234567891234567, '112', '01/22', 'Debit Card'),
('FBTFTFTBTGYGBYGYGYHHHHH', 8808159315790036, '118', '02/19', 'Debit Card'),
('fhjnhgddthnbb', 0, '', '', 'COD'),
('mepfimeofnewofin', 12345678911123654, '621', '12/20', 'Debit Card'),
('jeevantara chs,203,beside talvalkar gym', 2013201620172018, '018', '02/18', 'Debit Card'),
('dtyuiiioiiiuu', 0, '', '', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `model_number` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`email`, `password`) VALUES
('panhaleaishwarya18@gmail.com', 'tttttttttt'),
('isha@gmail.com', '123456789'),
('panhale@gmail.com', '123456789'),
('sa78dsa', 'samskaks'),
('harshkansara@gmail.com', '123456'),
('neil.shringarpure@gmail.com', '123456'),
('isha18@gmail.com', '111111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
