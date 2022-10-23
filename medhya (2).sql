-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2022 at 11:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medhya`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `distid` int(11) NOT NULL,
  `district` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`distid`, `district`) VALUES
(1, 'Trivandrum'),
(2, 'Kollam');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `usertype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `status`, `usertype`) VALUES
('adhwaithashaji@gmail.com', '1234567', 1, 4),
('admin@gmail.com', 'admin123', 1, 0),
('ammini123@gmail.com', '09876', 1, 3),
('biby@gmail.com', '12312', 1, 1),
('jannu345@gmail.com', '45678', 1, 4),
('meerashajahan@gmail.com', '345678', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `dateofbirth` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `pic` varchar(100) NOT NULL DEFAULT 'default.png',
  `distid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`email`, `name`, `phone`, `dateofbirth`, `city`, `gender`, `pic`, `distid`) VALUES
('adhwaithashaji@gmail.com', 'adhwaitha', 954458281, '2022-10-06', 'ernakulam', 'female', 'default.png', 1),
('ammini123@gmail.com', 'ammini', 1234568789, '2018-11-09', 'perumbavoor', 'female', 'default.png', 1),
('biby@gmail.com', 'biby', 67890112, '2022-09-19', 'kothamangalam', 'male', 'default.png', 1),
('jannu345@gmail.com', 'jannu', 23456789, '2022-07-12', 'kottapady', 'female', 'default.png', 1),
('meerashajahan@gmail.com', 'meera', 34501976, '2022-05-10', 'muvatupuzha', 'female', 'default.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tailor details`
--

CREATE TABLE `tailor details` (
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `specilization` varchar(50) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `textile details`
--

CREATE TABLE `textile details` (
  `email` varchar(50) NOT NULL,
  `address of textiles` varchar(100) NOT NULL,
  `address of owner` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user address`
--

CREATE TABLE `user address` (
  `address-id` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `pincode` int(15) NOT NULL,
  `location` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `landmark` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`distid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tailor details`
--
ALTER TABLE `tailor details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `textile details`
--
ALTER TABLE `textile details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user address`
--
ALTER TABLE `user address`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
