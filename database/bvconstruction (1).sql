-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 11:51 AM
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
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `atype` varchar(255) NOT NULL,
  `a_details` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`APPID`, `UID`, `date`, `time`, `atype`, `a_details`, `status`) VALUES
(7, 3010, '2022-01-13', '', '', 'asfdggg', 'Approved'),
(8, 3022, '2022-01-17', '', 'Follow-up', 'hatfdog ajsjhhajdshadpoj ', 'Approved'),
(9, 3022, '2022-01-12', '', 'New Project', 'adksjhguyoiyu  m;alsfj missyou', 'Approved'),
(10, 3010, '2022-01-16', '', '', 'for update of the ongoing project aka Payamansion 5.6', 'pending'),
(11, 3010, '2022-01-07', '', '', 'unang una dapat to', 'pending'),
(12, 3010, '2022-01-14', '', '', 'kasunod ng 13 po', 'pending'),
(13, 3010, '2022-01-20', '', '', 'Nasira ang double deck', 'pending'),
(14, 3024, '2022-01-12', '', '', 'kakakakakakakakakakakakakkakaka\r\nlalalalalalalallalalala\r\nhahahahahhahaha\r\npapapappaa', 'pending'),
(15, 3010, '2022-01-19', '', '', 'hahahaha hatdog na may cheese', 'pending'),
(23, 0, '0000-00-00', '', '', 'appoinment ako', 'Approved'),
(24, 3023, '2022-01-12', '', '', 'appoinment ako', 'Approved'),
(25, 3022, '2022-01-05', '8:00', 'New Project', 'flooring and tiles', 'pending'),
(27, 3022, '2022-01-20', '', 'Follow-up', 'Demon slayer season 2', 'pending'),
(28, 3022, '2022-01-25', '', '', 'New design and build kitchen', 'pending'),
(29, 3022, '2022-01-26', '10:00 PM', '', 'design new bedroom and lighting works', 'pending'),
(30, 3022, '2022-01-26', '10:00', '', 'dhagahgahg', 'pending'),
(31, 3022, '2022-01-26', '10:00 AM', '', 'utkky', 'pending'),
(32, 3022, '2022-01-26', '3:00 PM', '', 'slp dip low', 'pending'),
(33, 3022, '2022-01-27', '10:00 AM', '', 'asfwww', 'pending'),
(34, 3022, '2022-01-26', '4:00 PM', '', 'ehtrh', 'pending');

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
  `downpayment` int(11) NOT NULL,
  `balance` decimal(65,2) NOT NULL,
  `total_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PayID`, `UID`, `payment_issued`, `project_name`, `payment_type`, `reference_no`, `downpayment`, `balance`, `total_cost`) VALUES
(2, 3005, '2022-01-06', 'Reconstruction Of Bedroom', 'Fully-paid', 0, 0, '120000.00', 120000),
(3, 3022, '2022-01-06', 'teres ni marites', 'Downpayment ', 0, 5000, '32450.00', 32450),
(4, 3022, '2022-01-06', 'sample', 'Downpayment ', 0, 7700, '77000.00', 15000),
(5, 3005, '2022-01-21', 'motor chris', 'Fully-Paid', 0, 0, '190000.00', 190000),
(6, 3005, '2022-01-21', 'motor chris', 'Fully-Paid', 0, 0, '190000.00', 190000),
(7, 3022, '2022-01-22', 'Paa ni Ben', 'Downpayment', 0, 5000, '120000.00', 120000),
(8, 0, '2022-01-25', '', 'Downpayment', 16798527, 0, '0.00', 0),
(9, 3022, '2022-01-25', 'ben project', 'Downpayment', 7502740, 5000, '30000.00', 30000);

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
  `Pdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`PID`, `UID`, `project_name`, `scope`, `project_info`, `remarks`, `Pdate`) VALUES
(9, 3005, 'Reconstruction Of Bedroom', 'build', ' Project Name : Reconstruction Of Bedroom\n        Additional Request : - may sealing fan\n- mataas kama\n- d na alog kama\n', 'Processed', '2022-01-06'),
(10, 3022, 'teres ni marites', 'design and build', ' Project Name : teres ni marites\r\n        Additional Request :\r\n        - sample\r\n- sample\r\n- sample\r\n- sample\r\n- sample\r\n- sample\r\n- sample', 'Processed', '2022-01-06'),
(11, 3022, 'sample', 'design', 'Project Name : sample\nAdditional Request : \nsample\nsample\nsample\nsample\nsample\nsample\nsample', 'Processed', '2022-01-06'),
(12, 3010, 'Dream house of Henry Sy', 'design and build', 'Creating foundations in a 3000 acres and checking all of the possible builds we can provide to the client.', 'Ongoing', '0000-00-00'),
(13, 3022, 'cr ni moy', 'design', 'nasira eh ', 'Ongoing', '0000-00-00');

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
(1, 10, 3022, 'Design', 'Nalagyan na ang mga bakal sa pader', '2022-01-06', 'Ongoing'),
(2, 11, 3022, 'Installation', 'ASMASkasmdnasdA', '2022-01-07', 'Ongoing'),
(3, 11, 3022, 'Build', 'ASMASkasmdnasdAvvvASMASkasmdnasdAASMASkasmdnasdA', '2022-01-07', 'Cancelled'),
(4, 0, 3005, 'Reconstruction Of Bedroom', 'nasira yung double deck', '2022-01-07', ''),
(29, 0, 3010, 'Pag gawa ng bubong', 'nagawa po ng bubong ng bahay. lahat ng lumang yero tinunaw para makagawa ng bago at mas pinatibay na bubong.', '2022-01-05', 'Finished'),
(30, 0, 3010, 'Door Making', 'Puputol ng sampung puno galing sa Palawan para gawing pintuan.', '2022-01-05', 'Ongoing'),
(31, 12, 3022, 'Floor Polishing', 'Aarkila ng mga bata para magbunot ng sahig at ng kumintab ito.', '2022-01-05', 'Finished'),
(32, 0, 3010, 'Room Making', 'building new room from scratch', '2022-01-07', 'Ongoing'),
(33, 13, 3022, 'Build', 'House Walls', '0000-00-00', 'Ongoing');

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
(3005, 'chris', 'g', 'cullados', 'tanzang luma 6', 'gogo@gmail.com', 922278489, 'sss id, umid id, philhealth id, national id', 'xtianpuh', '12345678', 'admin', '', ''),
(3010, 'Danielle', 'P', 'Capistrano', 'imus', 'maosdu@gmail.com', 102884, '', 'user3', 'qwerty', 'common', 'uploads/profic1.jpg', ''),
(3022, 'benedict', 'gutierrez', 'bautista', 'Springville Ave', 'bbendict08@gmail.com', 456456, 'Passport', 'bagonguser', '12345678', 'common', 'uploads/gaston-dualan-assassin-enemy-run.gif', ''),
(3023, '', '', '', '', 'christiancullados73@gmail.com', 0, '', 'newuser2', '12345678', 'common', '', ''),
(3024, 'Mukbang', 'H', 'Pamore', 'Imus meow', 'test@gmail.com', 977283731, 'SSS ID', 'newuser', 'Manila123', 'common', '', ''),
(3025, '', '', '', '', 'christiancullados@yahoo.com', 0, '', 'chris', '12345678', 'common', '', '');

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
  MODIFY `APPID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `PID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3026;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
