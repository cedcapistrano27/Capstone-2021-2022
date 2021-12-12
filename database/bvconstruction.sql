-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 08:21 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bvconstruction`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `APPID` int(255) NOT NULL,
  `UID` int(255) NOT NULL,
  `date` date NOT NULL,
  `a_type` varchar(50) NOT NULL,
  `a_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PayID` int(255) NOT NULL,
  `UID` int(255) NOT NULL,
  `payment_amount` decimal(10,2) NOT NULL,
  `payment_issued` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `PID` int(255) NOT NULL,
  `UID` int(255) NOT NULL,
  `Pdate` int(255) NOT NULL,
  `ptype` varchar(50) NOT NULL,
  `pupdates` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_request`
--

CREATE TABLE `project_request` (
  `PRID` int(255) NOT NULL,
  `UID` int(255) NOT NULL,
  `Rtype` varchar(50) NOT NULL,
  `PR_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UID` int(255) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cnumber` int(255) NOT NULL,
  `ID_proof` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UID`, `fname`, `mname`, `lname`, `address`, `email`, `cnumber`, `ID_proof`, `username`, `password`, `usertype`) VALUES
(3005, 'chris', 'g', 'cullados', 'tanzang luma 6', 'gogo@gmail.com', 922278489, 'sss id, umid id, philhealth id, national id', 'xtianpuh', '12345678', 'admin'),
(3007, '', '', '', '', '', 0, '', 'haha', 'xd', 'common'),
(3009, '', '', '', '', 'afdy@gmail.com', 0, '', 'newuser2', '87654321', 'common'),
(3010, 'mang', 'g', 'tomas', 'none', 'maosdu@gmail.com', 102884, 'SSS', 'user3', 'qwerty', 'common'),
(3022, 'asdgeee', 'qwrrrt', 'sddf', 'afdd2', 'bagong@email.com', 456456, '', 'bagonguser', '12345678', 'common');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PayID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `project_request`
--
ALTER TABLE `project_request`
  ADD PRIMARY KEY (`PRID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PayID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `PID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_request`
--
ALTER TABLE `project_request`
  MODIFY `PRID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3023;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
