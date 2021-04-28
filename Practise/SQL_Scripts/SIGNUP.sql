-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2021 at 01:06 AM
-- Server version: 10.3.25-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msabbani_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `SIGNUP`
--

CREATE TABLE `SIGNUP` (
  `USERNAME` varchar(50) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(50) NOT NULL,
  `MIDDLENAME` varchar(100) NOT NULL,
  `PHONE` varchar(15) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Signup table';

--
-- Dumping data for table `SIGNUP`
--

INSERT INTO `SIGNUP` (`USERNAME`, `FIRSTNAME`, `LASTNAME`, `MIDDLENAME`, `PHONE`, `EMAIL`, `ADDRESS`) VALUES
('$username', '$firstname', '$lastname', '$fullname', '$phone', '$email', '$address'),
('admin', 'admin', 'user', 's', '845-978-8523', 'admin.user@gmail.com', 'cbkbcwdl'),
('ak22', 'ak22', '22', 'none', '459-879-9651', 'hvbhvhkwh', 'bwkjbvksd'),
('fat', 'asda', 'sdfs', 'sdfsd', '1423', 'dsfsddrg', 'dfgbhrt'),
('Jim', 'Jim', 'Peters', 'Jim Peters', '1231231234', 'jim@gmail.com', 'Chicago'),
('John', 'John', 'Peters', 'John Peters', '1231231234', 'john@gmail.com', 'Chicago'),
('kandem', 'rrrr', 'A', 'rrrr A', '1234567891', 'kk@gmail.com', '101 NE st carmel IN'),
('kav', 'Kav', 'Kavi', 'K', '317-123-1234', 'kandem@iu.edu', 'NA'),
('kavitha', 'kavitha', 'kavitha', 'kavitha', '317-123-1234', 'kk@gmail.com', 'NA'),
('kavitha1', 'Kav', 'Kavi', 'K', '317-123-1234', 'kandem@iu.edu', 'NA'),
('kavitha2', 'Kav', 'Kavi', 'A', '317-123-1234', 'kandem@iu.edu', 'NA'),
('kavitha5', 'Kav', 'kavi', 'K', '317-123-1234', 'kandem@iu.edu', 'NA'),
('nag', 'szcfsd', 'xdvgds', 'sdvgdsfr', '1445', 'xvgd', 'dsfe'),
('naga', 'sdfs', 'sdfds', 'dvfdtrg', '13342', 'fdbbfgnb', 'asfedfb'),
('sid', 'sid', 'sid', 'sid', '317-123-1234', 'kandem@iu.edu', 'NA'),
('sri', 'dhsrgfhesgf', 'ssdnfhsv', 'sdgchgsf', '235462', 'hhfdvgdhsgg', 'sdfef'),
('steve111', 'Steve', 'Perkins', 'Steve Perkins', '1231231234', 'steve@gmail.com', 'Indiana'),
('Tom', 'Tom', 'Admin', 'S', '879-985-6214', 'tom.admin@user.com', 'Indianapolis'),
('vandana', 'sfs', 'dsfsa', 'dsfs', '3435', 'vbfdf', 'dfgd'),
('yamini', 'yamini sri vandana', 'penamakuru', 'yamini sri vandana', '4638671663', 'ypenamak@iu.edu', '7415 montgomery road');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `SIGNUP`
--
ALTER TABLE `SIGNUP`
  ADD PRIMARY KEY (`USERNAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
