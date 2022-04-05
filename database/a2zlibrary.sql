-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 03:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a2zlibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` int(14) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UserID`, `UserName`, `Email`, `PhoneNumber`, `FirstName`, `LastName`, `Password`) VALUES
(1, 'Tibex', 'tibesolomomn7@gmail.com', 923621874, 'Tibebe', 'solomon', '1234'),
(2, 'Tsion', 'tsion@gmail.com', 911111111, 'Tsion', 'Tesfaye', ''),
(3, 'Selina', 'selina@gmail.com', 911111111, 'Selina', 'lname', ''),
(4, 'Betty', 'betty@gmail.com', 911111111, 'Betty', 'lname', ''),
(5, 'Tesfa', 'tesfa@gmail.com', 911425020, 'Tesfa', 'Amsalu', '');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `BookID` int(11) NOT NULL,
  `Author` varchar(50) DEFAULT NULL,
  `Title` varchar(100) NOT NULL,
  `Year` year(4) NOT NULL,
  `Genre` tinytext NOT NULL,
  `Description` longtext NOT NULL,
  `Publisher` varchar(80) NOT NULL,
  `Language` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Author` varchar(50) DEFAULT NULL,
  `Title` varchar(100) NOT NULL,
  `Year` year(4) NOT NULL,
  `Genre` tinytext NOT NULL,
  `Description` longtext NOT NULL,
  `Publisher` varchar(80) NOT NULL,
  `Language` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` int(14) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `Email`, `PhoneNumber`, `FirstName`, `LastName`, `Password`) VALUES
(1, 'Tibex', 'tibesolomomn7@gmail.com', 923621874, 'Tibebe', 'solomon', ''),
(2, 'Tsion', 'tsion@gmail.com', 911111111, 'Tsion', 'Tesfaye', ''),
(3, 'Selina', 'selina@gmail.com', 911111111, 'Selina', 'lname', ''),
(4, 'Betty', 'betty@gmail.com', 911111111, 'Betty', 'lname', ''),
(5, 'Tesfa', 'tesfa@gmail.com', 911425020, 'Tesfa', 'Amsalu', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `Email_isAdmin` (`Email`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`BookID`),
  ADD KEY `Author` (`Author`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `Author` (`Author`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `Email_isAdmin` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
