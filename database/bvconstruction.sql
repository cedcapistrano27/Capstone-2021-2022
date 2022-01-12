-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 08:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

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
(7, 3010, '2022-01-13 13:39:00', 'asfdggg', 'Approved'),
(8, 3022, '2022-01-17 17:40:00', 'hatfdog ajsjhhajdshadpoj ', 'Approved'),
(9, 3022, '2022-01-12 04:00:00', 'adksjhguyoiyu  m;alsfj missyou', 'Approved'),
(10, 3010, '2022-01-16 17:00:00', 'for update of the ongoing project aka Payamansion 5.6', 'pending'),
(11, 3010, '2022-01-07 04:40:00', 'unang una dapat to', 'pending'),
(12, 3010, '2022-01-14 04:40:00', 'kasunod ng 13 po', 'pending'),
(13, 3010, '2022-01-20 02:08:00', 'Nasira ang double deck', 'pending'),
(14, 3024, '2022-01-12 00:38:00', 'kakakakakakakakakakakakakkakaka\r\nlalalalalalalallalalala\r\nhahahahahhahaha\r\npapapappaa', 'pending');

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

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PayID`, `UID`, `total_amount`, `payment_issued`, `project_name`, `receipt_details`) VALUES
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
  `project_info` text NOT NULL,
  `remarks` text NOT NULL,
  `Pdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`PID`, `UID`, `project_name`, `project_info`, `remarks`, `Pdate`) VALUES
(9, 3005, 'Reconstruction Of Bedroom', ' Project Name : Reconstruction Of Bedroom\n        Additional Request : - may sealing fan\n- mataas kama\n- d na alog kama\n', 'Processed', '2022-01-06'),
(10, 3022, 'teres ni marites', ' Project Name : teres ni marites\r\n        Additional Request :\r\n         \r\n        - sample\r\n- sample\r\n- sample\r\n- sample\r\n- sample\r\n- sample\r\n- sample', 'Processed', '2022-01-06'),
(11, 3022, 'sample', 'Project Name : sample\nAdditional Request : \nsample\nsample\nsample\nsample\nsample\nsample\nsample', 'Processed', '2022-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `TimeID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `ProjectName` varchar(250) NOT NULL,
  `ProjectInfo` text NOT NULL,
  `DateIssued` date NOT NULL DEFAULT current_timestamp(),
  `Remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`TimeID`, `UID`, `ProjectName`, `ProjectInfo`, `DateIssued`, `Remarks`) VALUES
(1, 3022, 'teres ni marites', 'Nalagyan na ang mga bakal sa pader', '2022-01-06', ''),
(2, 3022, 'sample', 'ASMASkasmdnasdA', '2022-01-07', ''),
(3, 3022, 'sample', 'ASMASkasmdnasdAvvvASMASkasmdnasdAASMASkasmdnasdA', '2022-01-07', ''),
(4, 3005, 'Reconstruction Of Bedroom', 'nasira yung double deck', '2022-01-07', ''),
(29, 3010, 'Pag gawa ng bubong', 'nagawa po ng bubong ng bahay. lahat ng lumang yero tinunaw para makagawa ng bago at mas pinatibay na bubong.', '2022-01-05', 'Finished'),
(30, 3010, 'Door Making', 'Puputol ng sampung puno galing sa Palawan para gawing pintuan.', '2022-01-05', 'Ongoing'),
(31, 3022, 'Floor Polishing', 'Aarkila ng mga bata para magbunot ng sahig at ng kumintab ito.', '2022-01-05', ''),
(32, 3010, 'Room Making', 'building new room from scratch', '2022-01-07', 'Ongoing');

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
(3010, 'Danielle', 'P', 'Capistrano', 'imus', 'maosdu@gmail.com', 102884, '', 'user3', 'qwerty', 'common'),
(3022, 'Bagong', 'N', 'User', 'Bagumbayan', 'bagong@email', 34735678, 'Drivers License', 'bagonguser', 'qwerty123', 'common'),
(3023, '', '', '', '', 'christiancullados73@gmail.com', 0, '', 'newuser2', '12345678', 'common'),
(3024, 'Mukbang', 'H', 'Pamore', 'Imus meow', 'test@gmail.com', 977283731, 'SSS ID', 'newuser', 'Manila123', 'common');

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
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`TimeID`);

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
  MODIFY `APPID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PayID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `TimeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3025;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
