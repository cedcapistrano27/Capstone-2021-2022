-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 04:24 PM
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
(14, 3024, '2022-01-12 00:38:00', '', 'kakakakakakakakakakakakakkakaka\r\nlalalalalalalallalalala\r\nhahahahahhahaha\r\npapapappaa', 'Approved'),
(15, 3010, '2022-01-19 06:14:00', '', 'hahahaha hatdog na may cheese', 'Approved'),
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
  `UID` int(11) NOT NULL,
  `project_name` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `payment_type` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `balance` decimal(15,2) NOT NULL,
  `reference_no` int(11) NOT NULL,
  `remarks` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `targetdate` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`inID`, `UID`, `project_name`, `payment_type`, `balance`, `reference_no`, `remarks`, `targetdate`) VALUES
(9, 3005, 'Sample01', 'Downpayment', '292400.00', 88841339, 'Ongoing', '2026-11-26');

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
  `amount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PayID`, `UID`, `payment_issued`, `project_name`, `payment_type`, `reference_no`, `amount`) VALUES
(36, 3005, '2022-02-05', 'Sample01', 'Downpayment', 88841339, '292400.00');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `PID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `project_name` varchar(250) NOT NULL,
  `Location` varchar(250) NOT NULL,
  `scope` varchar(250) NOT NULL,
  `remarks` varchar(250) NOT NULL,
  `TargetDate` date NOT NULL,
  `Pdate` date NOT NULL DEFAULT current_timestamp(),
  `MD_quantity` int(11) NOT NULL,
  `MD_cost` decimal(15,2) NOT NULL,
  `MD_total` decimal(15,2) NOT NULL,
  `PM_quantity` int(11) NOT NULL,
  `PM_cost` decimal(15,2) NOT NULL,
  `PM_total` decimal(15,2) NOT NULL,
  `HK_quantity` int(11) NOT NULL,
  `HK_cost` decimal(15,2) NOT NULL,
  `HK_total` decimal(15,2) NOT NULL,
  `delivery_quantity` int(11) NOT NULL,
  `delivery_cost` decimal(15,2) NOT NULL,
  `delivery_total` decimal(15,2) NOT NULL,
  `MISC_quantity` int(11) NOT NULL,
  `MISC_cost` decimal(15,2) NOT NULL,
  `MISC_total` decimal(15,2) NOT NULL,
  `noteGR` text NOT NULL,
  `totalGR` decimal(15,2) NOT NULL,
  `FC_quanity` int(11) NOT NULL,
  `FC_cost` decimal(15,2) NOT NULL,
  `FC_total` decimal(15,2) NOT NULL,
  `totalCW` decimal(15,2) NOT NULL,
  `PFC_quantity` int(11) NOT NULL,
  `PFC_cost` decimal(15,2) NOT NULL,
  `PFC_total` decimal(15,2) NOT NULL,
  `WALL_quantity` int(11) NOT NULL,
  `WALL_cost` decimal(15,2) NOT NULL,
  `WALL_total` decimal(15,2) NOT NULL,
  `notePW` text NOT NULL,
  `totalPW` decimal(15,2) NOT NULL,
  `EW_quantity` int(11) NOT NULL,
  `EW_cost` decimal(15,2) NOT NULL,
  `EW_total` decimal(15,2) NOT NULL,
  `noteEW` text NOT NULL,
  `totalEW` decimal(15,2) NOT NULL,
  `TWD_quantity` int(11) NOT NULL,
  `TWD_cost` decimal(15,2) NOT NULL,
  `TWD_total` decimal(15,2) NOT NULL,
  `TWB_quantity` int(11) NOT NULL,
  `TWB_cost` decimal(15,2) NOT NULL,
  `TWB_total` decimal(15,2) NOT NULL,
  `noteTW` text NOT NULL,
  `totalTW` decimal(15,2) NOT NULL,
  `FWL_quantity` int(11) NOT NULL,
  `FWL_cost` decimal(15,2) NOT NULL,
  `FWL_total` decimal(15,2) NOT NULL,
  `totalFW` decimal(15,2) NOT NULL,
  `OtherA_quantity` int(11) NOT NULL,
  `OtherA_cost` decimal(15,2) NOT NULL,
  `OtherA_total` decimal(15,2) NOT NULL,
  `OtherB_quantity` int(11) NOT NULL,
  `OtherB_cost` decimal(15,2) NOT NULL,
  `OtherB_total` decimal(15,2) NOT NULL,
  `OtherC_quantity` int(11) NOT NULL,
  `OtherC_cost` decimal(15,2) NOT NULL,
  `OtherC_total` decimal(15,2) NOT NULL,
  `OtherD_quantity` int(11) NOT NULL,
  `OtherD_cost` decimal(15,2) NOT NULL,
  `OtherD_total` decimal(15,2) NOT NULL,
  `OtherE_quantity` int(11) NOT NULL,
  `OtherE_cost` decimal(15,2) NOT NULL,
  `OtherE_total` decimal(15,2) NOT NULL,
  `totalOther` decimal(15,2) NOT NULL,
  `totalAmount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`PID`, `UID`, `project_name`, `Location`, `scope`, `remarks`, `TargetDate`, `Pdate`, `MD_quantity`, `MD_cost`, `MD_total`, `PM_quantity`, `PM_cost`, `PM_total`, `HK_quantity`, `HK_cost`, `HK_total`, `delivery_quantity`, `delivery_cost`, `delivery_total`, `MISC_quantity`, `MISC_cost`, `MISC_total`, `noteGR`, `totalGR`, `FC_quanity`, `FC_cost`, `FC_total`, `totalCW`, `PFC_quantity`, `PFC_cost`, `PFC_total`, `WALL_quantity`, `WALL_cost`, `WALL_total`, `notePW`, `totalPW`, `EW_quantity`, `EW_cost`, `EW_total`, `noteEW`, `totalEW`, `TWD_quantity`, `TWD_cost`, `TWD_total`, `TWB_quantity`, `TWB_cost`, `TWB_total`, `noteTW`, `totalTW`, `FWL_quantity`, `FWL_cost`, `FWL_total`, `totalFW`, `OtherA_quantity`, `OtherA_cost`, `OtherA_total`, `OtherB_quantity`, `OtherB_cost`, `OtherB_total`, `OtherC_quantity`, `OtherC_cost`, `OtherC_total`, `OtherD_quantity`, `OtherD_cost`, `OtherD_total`, `OtherE_quantity`, `OtherE_cost`, `OtherE_total`, `totalOther`, `totalAmount`) VALUES
(21, 3005, 'Sample01', 'Sample01', 'Design', 'Contract', '2026-11-26', '2022-02-05', 10, '10.00', '100.00', 20, '20.00', '400.00', 40, '30.00', '1200.00', 50, '440.00', '22000.00', 60, '10.00', '600.00', 'Sample01', '24300.00', 10, '20.00', '200.00', '200.00', 220, '150.00', '33000.00', 240, '120.00', '28800.00', 'Sample01', '61800.00', 170, '110.00', '18700.00', 'Sample01', '18700.00', 1700, '20.00', '34000.00', 510, '220.00', '112200.00', 'Sample01', '146200.00', 120, '20.00', '2400.00', '2400.00', 440, '40.00', '17600.00', 220, '30.00', '6600.00', 110, '20.00', '2200.00', 140, '10.00', '1400.00', 550, '20.00', '11000.00', '38800.00', '292400.00');

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
  `Remarks` text NOT NULL,
  `picpath` text NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`TimeID`, `PID`, `UID`, `Uscope`, `ProjectInfo`, `DateIssued`, `Remarks`, `picpath`, `filename`) VALUES
(1, 10, 3022, 'Estimation', 'Landfill and lot ', '2022-01-06', 'Ongoing', '', ''),
(2, 11, 3022, 'Ceiling Works', 'False Ceiling', '2022-01-06', 'Complete', '', ''),
(3, 11, 3022, 'Electrical Works', 'Wire Installation\r\n', '2022-01-07', 'Ongoing', '', ''),
(4, 0, 3005, 'Reconstruction Of Bedroom', 'nasira yung double deck', '2022-01-07', '', '', ''),
(29, 0, 3010, 'Pag gawa ng bubong', 'nagawa po ng bubong ng bahay. lahat ng lumang yero tinunaw para makagawa ng bago at mas pinatibay na bubong.', '2022-01-05', 'Finished', '', ''),
(30, 0, 3010, 'Door Making', 'Puputol ng sampung puno galing sa Palawan para gawing pintuan.', '2022-01-05', 'Ongoing', '', ''),
(31, 12, 3022, 'Floor Polishing', 'Aarkila ng mga bata para magbunot ng sahig at ng kumintab ito.', '2022-01-05', 'Finished', '', ''),
(32, 0, 3010, 'Room Making', 'building new room from scratch', '2022-01-07', 'Ongoing', '', ''),
(34, 14, 3005, 'Electrical Works', 'D pa tapos', '2022-01-21', 'Ongoing', '', ''),
(35, 14, 3005, 'Electrical Works', 'tapos na', '2022-01-21', 'Completed', '', ''),
(36, 11, 3022, 'Electrical Works', 'Lighting Installation\r\n', '2022-01-08', 'Completed', '', ''),
(37, 11, 3022, 'Flooring Works', 'finish cements', '2022-01-25', 'Ongoing', '', ''),
(39, 23, 3010, 'General Works', 'demobilization', '2022-01-27', 'Ongoing', 'uploads/4.jpg', '4.jpg'),
(40, 21, 3005, 'General Works', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2022-02-05', 'Ongoing', 'uploads/5.jpg', '5.jpg'),
(41, 21, 3005, 'General Works', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2022-02-05', 'Completed', 'uploads/3.jpg', '3.jpg'),
(42, 21, 3005, 'Ceiling Works', 'ffffffff', '2022-02-05', 'Ongoing', 'uploads/2.jpg', '2.jpg'),
(43, 21, 3005, 'Electrical Works', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2022-02-05', 'Ongoing', 'uploads/anime-naruto-itachi-uchiha-madara-uchiha-wallpaper-preview.jpg', 'anime-naruto-itachi-uchiha-madara-uchiha-wallpaper-preview.jpg');

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
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `picpath` text NOT NULL,
  `pic_filename` mediumtext NOT NULL,
  `remarks` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UID`, `fname`, `mname`, `lname`, `address`, `email`, `cnumber`, `username`, `password`, `usertype`, `picpath`, `pic_filename`, `remarks`) VALUES
(3005, 'chris', 'g', 'cullados', 'tanzang luma 6', 'gogo@gmail.com', 922278489, 'xtianpuh', '12345678', 'admin', '', '', ''),
(3010, 'Danielle', 'P', 'Capistrano', 'imus', 'maosdu@gmail.com', 2147483647, 'user3', 'qwerty', 'common', 'uploads/profic1.jpg', '', ''),
(3022, 'benedict', 'gutierrez', 'bautista', 'Springville Ave', 'bbendict08@gmail.com', 2147483647, 'bagonguser', '12345678', 'common', 'uploads/appoinmetheader.png', '', ''),
(3024, 'Mukbang', 'H', 'Pamore', 'Imus meow', 'test@gmail.com', 977283731, 'newuser', 'Manila123', 'common', '', '', ''),
(3026, 'Nelson', 'G', 'Canlas', 'Imus Cavite', 'icebuko781@gmail.com', 2147483647, 'nelson', '12345678', 'common', '', '', ''),
(3027, 'Mike', 'G', 'Enriquez', 'GMA Cavite', 'icebuko781@gmail.com', 2147483647, 'mikeGMA7', '12345678', 'common', '', '', ''),
(3028, 'Piolo', 'L', 'Pascual', 'Tondo, Manila', 'icebuko781@gmail.com', 2147483647, 'piolo', '12345678', 'common', '', '', ''),
(3029, 'Andrea', 'L', 'Aquino', 'Tarlac City', 'icebuko781@gmail.com', 2147483647, 'andrea', '12345678', 'common', '', '', ''),
(3030, 'Narah', 'g', 'Geronimo', 'Alfonso, Cavite', 'icebuko781@gmail.com', 2147483647, 'maria', '12345678', 'common', '', '', '');

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
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `inID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PayID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `TimeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `web_images`
--
ALTER TABLE `web_images`
  MODIFY `ImgID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
