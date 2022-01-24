-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 08:05 AM
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
(26, '4.jpg', 'Carousel', 'uploads/4.jpg', 'UNSET');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `web_images`
--
ALTER TABLE `web_images`
  ADD PRIMARY KEY (`ImgID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `web_images`
--
ALTER TABLE `web_images`
  MODIFY `ImgID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
