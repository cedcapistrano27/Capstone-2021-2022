-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 05:28 PM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UID` int(255) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cnumber` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `picpath` text NOT NULL,
  `pic_filename` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UID`, `fname`, `mname`, `lname`, `address`, `email`, `cnumber`, `username`, `password`, `usertype`, `picpath`, `pic_filename`) VALUES
(3005, 'chris', 'g', 'cullados', 'tanzang luma 6', 'gogo@gmail.com', '922278489', 'xtianpuh', '12345678', 'admin', '', ''),
(3010, 'Danielle', 'P', 'Capistrano', 'imus', 'maosdu@gmail.com', '102884', 'user3', 'qwerty', 'common', 'uploads/profic1.jpg', ''),
(3022, 'benedict', 'gutierrez', 'bautista', 'Springville Ave', 'bbendict08@gmail.com', '456456', 'bagonguser', '12345678', 'common', 'uploads/appoinmetheader.png', ''),
(3023, '', '', '', '', 'christiancullados73@gmail.com', '0', 'newuser2', '12345678', 'common', '', ''),
(3024, 'Mukbang', 'H', 'Pamore', 'Imus meow', 'test@gmail.com', '977283731', 'newuser', 'Manila123', 'common', '', ''),
(3025, '', '', '', '', 'christiancullados@yahoo.com', '0', 'chris', '12345678', 'common', '', ''),
(3026, 'Nelson', 'G', 'Canlas', '', 'icebuko781@gmail.com', '9876546578', 'nelson', '12345678', 'common', '', ''),
(3027, 'Mike', 'G', 'Enriquez', '', 'icebuko781@gmail.com', '9155346789', 'mikeGMA7', '12345678', 'common', '', ''),
(3028, 'Piolo', 'L', 'Pascual', '', 'icebuko781@gmail.com', '9867345433', 'piolo', '12345678', 'common', '', ''),
(3029, 'Andrea', 'L', 'Aquino', '', 'icebuko781@gmail.com', '9928736455', 'andrea', '12345678', 'common', '', ''),
(3030, 'Narah', 'g', 'Geronimo', '', 'icebuko781@gmail.com', '9876654321', 'maria', '12345678', 'common', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3031;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
