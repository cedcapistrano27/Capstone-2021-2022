-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 11:32 AM
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
  `atype` varchar(255) NOT NULL,
  `a_details` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`APPID`, `UID`, `date`, `atype`, `a_details`, `status`) VALUES
(7, 3010, '2022-01-13 13:39:00', '', 'asfdggg', 'Approved'),
(8, 3022, '2022-01-17 17:40:00', 'Follow-up', 'hatfdog ajsjhhajdshadpoj ', 'Approved'),
(9, 3022, '2022-01-12 04:00:00', 'New Project', 'adksjhguyoiyu  m;alsfj missyou', 'Approved'),
(10, 3010, '2022-01-16 17:00:00', '', 'for update of the ongoing project aka Payamansion 5.6', 'Approved'),
(11, 3010, '2022-01-07 04:40:00', '', 'unang una dapat to', 'Approved'),
(12, 3010, '2022-01-14 04:40:00', '', 'kasunod ng 13 po', 'Approved'),
(13, 3010, '2022-01-20 02:08:00', '', 'Nasira ang double deck', 'pending'),
(14, 3024, '2022-01-12 00:38:00', '', 'kakakakakakakakakakakakakkakaka\r\nlalalalalalalallalalala\r\nhahahahahhahaha\r\npapapappaa', 'pending'),
(15, 3010, '2022-01-19 06:14:00', '', 'hahahaha hatdog na may cheese', 'pending'),
(23, 0, '0000-00-00 00:00:00', '', 'appoinment ako', 'Approved'),
(24, 3023, '2022-01-12 05:37:00', '', 'appoinment ako', 'Approved'),
(25, 3022, '2022-01-05 05:34:00', 'New Project', 'flooring and tiles', 'pending'),
(27, 3022, '2022-01-20 21:00:00', 'Follow-up', 'Demon slayer season 2', 'Approved'),
(28, 3022, '2022-01-26 00:00:00', '', 'home and design', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `inID` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `balance` int(11) NOT NULL,
  `remarks` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `targetdate` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PayID` int(255) NOT NULL,
  `UID` int(255) NOT NULL,
  `payment_issued` date NOT NULL,
  `project_name` text NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `reference_no` int(11) NOT NULL,
  `total_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PayID`, `UID`, `payment_issued`, `project_name`, `payment_type`, `reference_no`, `total_cost`) VALUES
(2, 3005, '2022-01-06', 'Reconstruction Of Bedroom', 'Fully-paid', 0, 120000),
(3, 3022, '2022-01-06', 'teres ni marites', 'Downpayment ', 0, 32450),
(4, 3022, '2022-01-06', 'sample', 'Downpayment ', 0, 15000),
(5, 3005, '2022-01-21', 'motor chris', 'Fully-Paid', 0, 190000),
(6, 3005, '2022-01-21', 'motor chris', 'Fully-Paid', 0, 190000),
(7, 3022, '2022-01-22', 'Paa ni Ben', 'Downpayment', 0, 120000),
(8, 0, '2022-01-25', '', 'Downpayment', 16798527, 0),
(9, 3022, '2022-01-25', 'ben project', 'Downpayment', 7502740, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `PID` int(255) NOT NULL,
  `UID` int(11) NOT NULL,
  `project_name` varchar(250) NOT NULL,
  `Location` text NOT NULL,
  `scope` varchar(255) NOT NULL,
  `project_info` text NOT NULL,
  `remarks` text NOT NULL,
  `TargetDate` varchar(250) NOT NULL,
  `Pdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`PID`, `UID`, `project_name`, `Location`, `scope`, `project_info`, `remarks`, `TargetDate`, `Pdate`) VALUES
(9, 3005, 'Reconstruction Of Bedroom', '', 'build', ' Project Name : Reconstruction Of Bedroom\n        Additional Request : - may sealing fan\n- mataas kama\n- d na alog kama\n', 'Completed', '', '2022-01-06'),
(10, 3022, 'Renovation', '', 'design and build', ' Project Name : teres ni marites\r\n        Additional Request :\r\n        - sample\r\n- sample\r\n- sample\r\n- sample\r\n- sample\r\n- sample\r\n- sample', 'completed', '', '2022-01-06'),
(11, 3022, 'ceiling and Electrical improvements', '', 'build and repair', 'Project Name : sample\nAdditional Request : \nsample\nsample\nsample\nsample\nsample\nsample\nsample', 'Completed', '', '2022-01-06'),
(12, 3010, 'Dream house of Henry Sy', '', 'design and build', 'Creating foundations in a 3000 acres and checking all of the possible builds we can provide to the client.', 'Ongoing', '', '0000-00-00'),
(14, 3005, 'motor chris', 'makati', 'Build', '', 'Processed', '2022-01-16', '2022-01-21'),
(15, 3022, 'ben project', 'manila', 'Build', '', 'Processed', '2022-02-23', '2022-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `TimeID` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `Uscope` varchar(250) NOT NULL,
  `ProjectInfo` text NOT NULL,
  `DateIssued` date NOT NULL,
  `Remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`TimeID`, `PID`, `UID`, `Uscope`, `ProjectInfo`, `DateIssued`, `Remarks`) VALUES
(1, 10, 3022, 'Estimation', 'Landfill and lot ', '2022-01-06', 'Ongoing'),
(2, 11, 3022, 'Ceiling Works', 'False Ceiling', '2022-01-06', 'Complete'),
(3, 11, 3022, 'Electrical Works', 'Wire Installation\r\n', '2022-01-07', 'Ongoing'),
(4, 0, 3005, 'Reconstruction Of Bedroom', 'nasira yung double deck', '2022-01-07', ''),
(29, 0, 3010, 'Pag gawa ng bubong', 'nagawa po ng bubong ng bahay. lahat ng lumang yero tinunaw para makagawa ng bago at mas pinatibay na bubong.', '2022-01-05', 'Finished'),
(30, 0, 3010, 'Door Making', 'Puputol ng sampung puno galing sa Palawan para gawing pintuan.', '2022-01-05', 'Ongoing'),
(31, 12, 3022, 'Floor Polishing', 'Aarkila ng mga bata para magbunot ng sahig at ng kumintab ito.', '2022-01-05', 'Finished'),
(32, 0, 3010, 'Room Making', 'building new room from scratch', '2022-01-07', 'Ongoing'),
(34, 14, 3005, 'Electrical Works', 'D pa tapos', '2022-01-21', 'Ongoing'),
(35, 14, 3005, 'Electrical Works', 'tapos na', '2022-01-21', 'Completed'),
(36, 11, 3022, 'Electrical Works', 'Lighting Installation\r\n', '2022-01-08', 'Completed'),
(37, 11, 3022, 'Flooring Works', 'finish cements', '2022-01-25', 'Ongoing');

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
  `usertype` varchar(255) NOT NULL,
  `picpath` text NOT NULL,
  `pic_filename` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UID`, `fname`, `mname`, `lname`, `address`, `email`, `cnumber`, `ID_proof`, `username`, `password`, `usertype`, `picpath`, `pic_filename`) VALUES
(0, '', '', '', '', 'benbendict08@gmail.com', 0, '', 'bagonguser1', '12345678', 'common', '', ''),
(3005, 'chris', 'g', 'cullados', 'tanzang luma 6', 'gogo@gmail.com', 922278489, 'sss id, umid id, philhealth id, national id', 'xtianpuh', '12345678', 'admin', '', ''),
(3010, 'Danielle', 'P', 'Capistrano', 'imus', 'maosdu@gmail.com', 102884, '', 'user3', 'qwerty', 'common', '', ''),
(3023, '', '', '', '', 'christiancullados73@gmail.com', 0, '', 'newuser2', '12345678', 'common', '', ''),
(3024, 'Mukbang', 'H', 'Pamore', 'Imus meow', 'test@gmail.com', 977283731, 'SSS ID', 'newuser', 'Manila123', 'common', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `web_images`
--

CREATE TABLE `web_images` (
  `ImgID` int(11) NOT NULL,
  `filename` varchar(250) NOT NULL,
  `image_info` text NOT NULL,
  `picpath` text NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_images`
--

INSERT INTO `web_images` (`ImgID`, `filename`, `image_info`, `picpath`, `status`) VALUES
(23, '1.jpg', 'Carousel', 'uploads/1.jpg', 'SET'),
(24, '2.jpg', 'Carousel', 'uploads/2.jpg', 'SET'),
(25, '3.jpg', 'Carousel', 'uploads/3.jpg', 'SET'),
(26, '4.jpg', 'Carousel', 'uploads/4.jpg', 'UNSET'),
(27, 'cover.jpg', 'Carousel', 'uploads/cover.jpg', 'SET');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`APPID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`inID`);

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

--
-- Indexes for table `web_images`
--
ALTER TABLE `web_images`
  ADD PRIMARY KEY (`ImgID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `APPID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PayID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `PID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `TimeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `web_images`
--
ALTER TABLE `web_images`
  MODIFY `ImgID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
