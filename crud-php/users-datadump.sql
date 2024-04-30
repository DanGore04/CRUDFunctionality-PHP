-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Generation Time: Apr 03, 2024 at 12:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_address`
--

CREATE TABLE `home_address` (
  `ID` int(8) NOT NULL,
  `Address1` varchar(50) NOT NULL,
  `Address2` varchar(50) NOT NULL,
  `City` varchar(20) NOT NULL,
  `County` varchar(20) NOT NULL,
  `Eircode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_address`
--

INSERT INTO `home_address` (`ID`, `Address1`, `Address2`, `City`, `County`, `Eircode`) VALUES
(1, '11 boxdone park', 'lu', 'tallaght', 'dublin', 'd22f345'),
(2, '12 foxdeen road', '', 'lucan', 'dublin', 'k63k243'),
(4, '56 earlsfort grove', '', 'lucan', 'dublin', 'd22w543');

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `ID` int(8) NOT NULL,
  `Title` varchar(6) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Mobile` int(12) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`ID`, `Title`, `Firstname`, `Surname`, `Mobile`, `Email`) VALUES
(1, 'Mr', 'Daniel', 'Gore', 856321034, 'dangore04@gmail.com'),
(2, 'Mr', 'Jacob', 'Moshi', 837195323, 'jacmosh02@gmail.com'),
(4, 'Mrs', 'Shauna', 'Niel', 874325362, 'shaundsheep@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `ID` int(8) NOT NULL,
  `Address1` varchar(50) NOT NULL,
  `Address2` varchar(50) NOT NULL,
  `City` varchar(20) NOT NULL,
  `County` varchar(20) NOT NULL,
  `Eircode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`ID`, `Address1`, `Address2`, `City`, `County`, `Eircode`) VALUES
(1, '18 Abbeyw', 'lu', 'tallaght', 'dublin', 'd22f345'),
(2, '13 mayfeild', 'park', 'clondalkin', 'dublin', 'd12k643'),
(4, '21 Ryemont Abbey', '', 'Leixlip', 'kildare', 'W23Y653');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_address`
--
ALTER TABLE `home_address`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Mobile` (`Mobile`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_address`
--
ALTER TABLE `home_address`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shipping_address`
--
ALTER TABLE `shipping_address`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
