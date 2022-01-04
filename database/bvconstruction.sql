-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 07:01 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

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
  `date` datetime NOT NULL,
  `a_details` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`APPID`, `UID`, `date`, `a_details`, `status`) VALUES
(1, 0, '0000-00-00 00:00:00', 'ahhahahahhahahaha hatdog', ''),
(2, 0, '2021-12-27 00:00:00', 'hatdog talaga', ''),
(3, 0, '2021-12-30 14:00:00', 'hatdog na hatdog ang usapan', ''),
(4, 0, '0000-00-00 00:00:00', 'Gujasuuy  als;kdjuiy lorem lorem lored\r\n', 'pending'),
(5, 0, '2022-01-07 02:35:00', 'hatdog hatdog hatdog hatdog', 'pending'),
(6, 0, '2022-01-06 14:43:00', 'haha hatdog na bitin', 'pending'),
(7, 3010, '2022-01-13 13:39:00', 'asfdggg', 'pending'),
(8, 3022, '2022-01-17 17:40:00', 'hatfdog ajsjhhajdshadpoj ', 'pending'),
(9, 3022, '2022-01-12 04:00:00', 'adksjhguyoiyu  m;alsfj missyou', 'pending'),
(10, 3010, '2022-01-16 17:00:00', 'for update of the ongoing project aka Payamansion 5.6', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PayID` int(255) NOT NULL,
  `UID` int(255) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `payment_issued` datetime NOT NULL DEFAULT current_timestamp(),
  `project_name` text NOT NULL,
  `receipt_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `PID` int(255) NOT NULL,
  `UID` int(255) NOT NULL,
  `Pdate` date NOT NULL,
  `ptype` varchar(50) NOT NULL,
  `project_info` text NOT NULL,
  `p_percentage` varchar(255) NOT NULL,
  `remarks` text NOT NULL
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
(3010, 'mang', 'L', 'tomas', 'none', 'maosdu@gmail.com', 102884, '', 'user3', 'qwerty', 'common'),
(3022, 'asdgeee', 'qwrrrt', 'sddf', 'afdd2', 'bagong@email.com', 456456, '', 'bagonguser', '12345678', 'common'),
(3023, '', '', '', '', 'christiancullados73@gmail.com', 0, '', 'newuser2', '12345678', 'common');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`APPID`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `APPID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3024;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
