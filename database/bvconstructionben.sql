-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 11:10 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(7, 3010, '2022-01-13 13:39:00', 'asfdggg', 'Approved'),
(8, 3022, '2022-01-17 17:40:00', 'hatfdog ajsjhhajdshadpoj ', 'Approved'),
(9, 3022, '2022-01-12 04:00:00', 'adksjhguyoiyu  m;alsfj missyou', 'Approved'),
(10, 3010, '2022-01-16 17:00:00', 'for update of the ongoing project aka Payamansion 5.6', 'pending'),
(0, 0, '0000-00-00 00:00:00', 'appoinment ako', 'Approved'),
(0, 3023, '2022-01-12 05:37:00', 'appoinment ako', 'Approved'),
(0, 3022, '2022-01-05 05:34:00', 'flooring and tiles', 'pending'),
(0, 3022, '0000-00-00 00:00:00', '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PayID` int(255) NOT NULL,
  `UID` int(255) NOT NULL,
  `total_amount` decimal(12,2) NOT NULL,
  `payment_issued` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `project_name` text NOT NULL,
  `receipt_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PayID`, `UID`, `total_amount`, `payment_issued`, `project_name`, `receipt_details`) VALUES
(0, 0, '12000.00', '2022-01-07 21:44:30', 'ben project', 'Payment-Type : Downpayment \r\nDownpayment Cost : 5000 \r\nTotal Cost : 12000'),
(2, 3005, '120000.00', '2022-01-06 22:10:52', 'Reconstruction Of Bedroom', 'Payment-Type : Fully-Paid \n       Downpayment Cost : 0 \n       Total Cost : 120000'),
(3, 3022, '32450.00', '2022-01-06 22:35:52', 'teres ni marites', 'Payment-Type : Downpayment \r\n       Downpayment Cost : 32450 \r\n       Total Cost : 32450'),
(4, 3022, '77000.00', '2022-01-06 22:38:19', 'sample', 'Payment-Type : Downpayment \r\n       Downpayment Cost : 77000 \r\n       Total Cost : 77000');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `PID` int(255) NOT NULL,
  `UID` int(11) NOT NULL,
  `project_name` varchar(250) NOT NULL,
  `scope` varchar(255) NOT NULL,
  `project_info` text NOT NULL,
  `remarks` text NOT NULL,
  `Pdate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`PID`, `UID`, `project_name`, `scope`, `project_info`, `remarks`, `Pdate`) VALUES
(0, 0, 'ben project', 'design', 'Project Name : ben project\r\nAdditional Request : \r\n', 'Processed', '2022-01-07 21:44:30'),
(9, 3005, 'Reconstruction Of Bedroom', 'build', ' Project Name : Reconstruction Of Bedroom\n        Additional Request : - may sealing fan\n- mataas kama\n- d na alog kama\n', 'Processed', '2022-01-06'),
(10, 3022, 'teres ni marites', 'design and build', ' Project Name : teres ni marites\r\n        Additional Request :\r\n         \r\n        - sample\r\n- sample\r\n- sample\r\n- sample\r\n- sample\r\n- sample\r\n- sample', 'Processed', '2022-01-06'),
(11, 3022, 'sample', 'design', 'Project Name : sample\nAdditional Request : \nsample\nsample\nsample\nsample\nsample\nsample\nsample', 'Processed', '2022-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `TimeID` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `ProjectName` varchar(250) NOT NULL,
  `ProjectInfo` text NOT NULL,
  `DateIssued` date NOT NULL,
  `Remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`TimeID`, `PID`, `UID`, `ProjectName`, `ProjectInfo`, `DateIssued`, `Remarks`) VALUES
(1, 10, 3022, 'teres ni marites', 'Nalagyan na ang mga bakal sa pader', '2022-01-06', ''),
(2, 11, 3022, 'sample', 'ASMASkasmdnasdA', '2022-01-07', ''),
(3, 11, 3022, 'sample', 'ASMASkasmdnasdAvvvASMASkasmdnasdAASMASkasmdnasdA', '2022-01-07', ''),
(30, 0, 3010, 'Door Making', 'Puputol ng sampung puno galing sa Palawan para gawing pintuan.', '2022-01-05', 'Ongoing'),
(31, 10, 3022, 'Floor Polishing', 'Aarkila ng mga bata para magbunot ng sahig at ng kumintab ito.', '2022-01-05', '');

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
(0, 'benedict', 'gutierrez', 'bautista', 'Springville Ave', 'bbendict08@gmail.com', 4353534, 'Barangay ID', 'ben', 'benbendict', 'common'),
(3005, 'chris', 'g', 'cullados', 'tanzang luma 6', 'gogo@gmail.com', 922278489, 'sss id, umid id, philhealth id, national id', 'xtianpuh', '12345678', 'admin'),
(3007, '', '', '', '', '', 0, '', 'haha', 'xd', 'common'),
(3009, '', '', '', '', 'afdy@gmail.com', 0, '', 'newuser2', '87654321', 'common'),
(3010, 'mang', 'L', 'tomas', 'none', 'maosdu@gmail.com', 102884, '', 'user3', 'qwerty', 'common'),
(3022, 'benedict', 'gutierrez', 'bautista', 'Springville Ave', 'bbendict08@gmail.com', 456456, 'Passport', 'bagonguser', '12345678', 'common'),
(3023, '', '', '', '', 'christiancullados73@gmail.com', 0, '', 'newuser2', '12345678', 'common');

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
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`TimeID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
