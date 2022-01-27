-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 05:02 AM
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
-- Table structure for table `scopeofwork`
--

CREATE TABLE `scopeofwork` (
  `SID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `project_name` text NOT NULL,
  `scope_of_work` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scopeofwork`
--

INSERT INTO `scopeofwork` (`SID`, `UID`, `project_name`, `scope_of_work`) VALUES
(41, 3023, 'samplewithlove', 'Project Management/Supervision'),
(42, 3023, 'samplewithlove', 'Material Delivery'),
(43, 3023, 'samplewithlove', 'Interior Wall'),
(44, 3023, 'samplewithlove', 'Lighting Installation'),
(45, 3023, 'samplewithlove', 'Baluster and Handrail Repaint');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scopeofwork`
--
ALTER TABLE `scopeofwork`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scopeofwork`
--
ALTER TABLE `scopeofwork`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
