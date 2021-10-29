-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 05:08 PM
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
-- Database: `account`
--
CREATE DATABASE IF NOT EXISTS `account` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `account`;

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `Rname_ID` int(15) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `Mname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Database: `bvconstruction`
--
CREATE DATABASE IF NOT EXISTS `bvconstruction` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bvconstruction`;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `APPID` int(255) NOT NULL,
  `UID` int(255) NOT NULL,
  `date` int(255) NOT NULL,
  `a_type` varchar(50) NOT NULL,
  `a_details` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PayID` int(255) NOT NULL,
  `UID` int(255) NOT NULL,
  `payment` int(255) NOT NULL
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
  `pupdates` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_request`
--

CREATE TABLE `project_request` (
  `PRID` int(255) NOT NULL,
  `UID` int(255) NOT NULL,
  `Rtype` varchar(50) NOT NULL,
  `PR_details` varchar(50) NOT NULL
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
  `password` varchar(50) NOT NULL,
  `usertype` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `UID` int(255) NOT NULL AUTO_INCREMENT;
--
-- Database: `finance`
--
CREATE DATABASE IF NOT EXISTS `finance` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `finance`;
--
-- Database: `financial_processing_system`
--
CREATE DATABASE IF NOT EXISTS `financial_processing_system` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `financial_processing_system`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(11) NOT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `Fname` varchar(50) NOT NULL,
  `mname` varchar(10) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `posi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `uname`, `pass`, `Fname`, `mname`, `lname`, `posi`) VALUES
(1, 'admin', 'admin123', '', '', '', ''),
(2, 'ben', 'admin', 'benedict', 'g', 'bautista', 'treasurer'),
(3, 'darusername', 'darpassword', 'dar', 'dave', 'proceso', 'pres');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `EID` int(11) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `particular` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `etotal` int(11) NOT NULL,
  `a_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`EID`, `event_name`, `date`, `particular`, `cost`, `quantity`, `etotal`, `a_name`) VALUES
(1, 'Basketball Summer Cup', 'May 1, 2021', 'Referees', 500, 2, 1000, 'admin'),
(2, 'Basketball Summer Cup', 'May 1, 2021', 'Basketbal court', 500, 3, 1500, 'admin'),
(3, 'clean-up drive', '04-19-2021', 'walis tambo', 30, 4, 120, 'ben'),
(5, 'clean-up drive', '04-20-2021', 'Walis Tingting', 30, 10, 300, 'ben'),
(10, '', '04-23-2021', 'blue book', 250, 3, 750, 'ben'),
(11, '', '04-23-2021', 't-shirt', 30, 50, 1500, 'admin'),
(12, '', '04-23-2021', 'sando', 30, 50, 1500, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PID` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(10) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `blk` int(11) NOT NULL,
  `lot` int(11) NOT NULL,
  `street` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `a_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PID`, `fname`, `mname`, `lname`, `blk`, `lot`, `street`, `date`, `amount`, `a_name`) VALUES
(1, 'angelica', 'd', 'cruz', 24, 35, 'camio', '03-24-2021', 300, 'ben'),
(2, 'benedict', 'g', 'bautista', 23, 17, 'camio', '01-25-2021', 300, 'admin'),
(3, 'rachel', 'd', 'villigracia', 36, 17, 'manggo', '01-6-2021', 300, 'admin'),
(4, 'dariel', 'p', 'proceso', 34, 23, 'kaliwa', '01-27-2021', 300, 'admin'),
(5, 'jerilaine', 'd', 'chan', 24, 31, 'liwat', '02-17-2021', 300, 'admin'),
(6, 'angelina', 'g', 'bautista', 22, 32, 'lanete', '02-17-2021', 300, 'ben'),
(7, 'moy', 'P', 'capistrano', 23, 42, 'kaligtasan', '02-17-2021', 300, 'ben'),
(8, 'angelo', 'd', 'cumbao', 34, 23, '42', '02-17-2021', 300, 'admin'),
(9, 'benedict', 'g', 'bautista', 44, 23, 'lante', '02-17-2021', 300, 'ben'),
(11, 'camille', 'e', 'lustre', 33, 22, '12', '02-17-2021', 300, 'ben'),
(12, 'paulmer', 's', 'alcantara', 33, 23, '24', '02-17-2021', 300, 'ben'),
(13, 'angelina', 'g', 'bautista', 54, 34, 'camio', '02-17-2021', 300, 'ben'),
(14, 'sonia', 'r', 'dela cruz', 65, 34, 'kanete', '17-00-2021', 300, 'ben'),
(15, 'darius', 'e', 'salmero', 12, 32, 'langas', '02-17-2021', 300, 'ben'),
(16, 'jose', 'r', 'somio', 23, 12, 'luan', '04-14-2021', 300, 'ben'),
(17, 'paolo', 'd', 'santo', 12, 32, 'luan', '04-18-2021', 300, 'ben'),
(18, 'vince', 'd', 'palarca', 43, 23, 'street', '04-18-2021', 300, 'ben'),
(19, 'dar', 'dar', 'dar', 1, 2, 'santol', '04-18-2021', 500, 'admin'),
(20, 'roger', 'w', 'raker', 42, 23, 'santol', '04-14-2021', 1200, 'ben');

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE `personnel` (
  `PID` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(10) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `con_num` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `AID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`PID`, `fname`, `mname`, `lname`, `con_num`, `address`, `AID`) VALUES
(1, 'john', 'paulmer', 'alcantara', '09123456789', 'B-14 L-15 GwapoSiPaulmer Street ', '2'),
(2, 'moy', 'moy', 'capistrano', '09501234567', 'B-20 L-25 GwapoSiPaulmer Street ', '3');

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `RID` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `blk` int(11) DEFAULT NULL,
  `lot` int(11) DEFAULT NULL,
  `street` varchar(20) DEFAULT NULL,
  `contnum` varchar(20) DEFAULT NULL,
  `acc_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`RID`, `fname`, `mname`, `lname`, `blk`, `lot`, `street`, `contnum`, `acc_num`) VALUES
(1, 'benedict', 'g', 'bautista', 33, 17, 'lanete', '09292859961', 0),
(2, 'christian ', 'd', 'cullados', 24, 12, 'caimito', '09292895961', 0),
(3, 'System.Windows.Forms', 'System.Windows.Forms', 'System.Windows.Forms', 0, 0, 'System.Windows.Forms', 'System.Windows.Forms', 0),
(4, 'Dariel', 'Dave', 'Proceso', 1, 2, 'Street1', '09123456789', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `SID` int(11) NOT NULL,
  `AID` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `date` varchar(11) NOT NULL,
  `hours` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `total_sal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`SID`, `AID`, `fname`, `mname`, `lname`, `date`, `hours`, `days`, `total_sal`) VALUES
(1, 'ben', 'christian', 's', 'cullados', '2021', 23, 12, 24),
(2, 'ben', 'paulmer', 'g', 'alcantara', '42', 43, 23, 10000),
(3, 'ben', 'louis', 'd', 'moya', '44', 34, 10, 12000),
(4, 'ben', 'benedict', 'g', 'bautista', '52-17-2021', 23, 10, 8000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`EID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `AID` (`a_name`);

--
-- Indexes for table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `EID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Database: `midterm`
--
CREATE DATABASE IF NOT EXISTS `midterm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `midterm`;

-- --------------------------------------------------------

--
-- Table structure for table `sales_bautista`
--

CREATE TABLE `sales_bautista` (
  `employee_no` int(11) NOT NULL,
  `employee_last` varchar(50) DEFAULT NULL,
  `emp_first` varchar(50) DEFAULT NULL,
  `product` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_bautista`
--

INSERT INTO `sales_bautista` (`employee_no`, `employee_last`, `emp_first`, `product`, `price`, `quantity`, `age`) VALUES
(1, 'lacuesta', 'rosalina', 'bag', 1500, 3, NULL),
(2, 'ibanez', 'grace', 'perfume', 2500, 5, NULL),
(3, 'apostol', 'mildred', 'dress', 2000, 2, NULL),
(4, 'malabanan', 'karlo', 'polo', 1300, 5, NULL),
(5, 'batula', 'leno', 'pants', 2700, 4, NULL),
(6, 'obon', 'anna marie', 'cosmetics', 1000, 3, NULL),
(8, 'tepora', 'ricky', 'short', 500, 7, NULL);
--
-- Database: `my_db`
--
CREATE DATABASE IF NOT EXISTS `my_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `my_db`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `password`) VALUES
(1, 'jordanie', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"snap_to_grid\":\"off\",\"relation_lines\":\"true\",\"small_big_all\":\">\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'system', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"structure_or_data_forced\":\"0\",\"table_select[]\":[\"grade\",\"prof\",\"schedule\",\"student\",\"subj\"],\"table_structure[]\":[\"grade\",\"prof\",\"schedule\",\"student\",\"subj\"],\"table_data[]\":[\"grade\",\"prof\",\"schedule\",\"student\",\"subj\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@DATABASE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"structure_and_data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"structure_and_data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_procedure_function\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_create_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"bvconstruction\",\"table\":\"user\"},{\"db\":\"bvconstruction\",\"table\":\"payment\"},{\"db\":\"bvconstruction\",\"table\":\"appointment\"},{\"db\":\"bvconstruction\",\"table\":\"project\"},{\"db\":\"bvconstruction\",\"table\":\"project_request\"},{\"db\":\"financial_processing_system\",\"table\":\"resident\"},{\"db\":\"financial_processing_system\",\"table\":\"payment\"},{\"db\":\"financial_processing_system\",\"table\":\"personnel\"},{\"db\":\"financial_processing_system\",\"table\":\"admin\"},{\"db\":\"my_db\",\"table\":\"users\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

--
-- Dumping data for table `pma__table_info`
--

INSERT INTO `pma__table_info` (`db_name`, `table_name`, `display_field`) VALUES
('grading', 'student', 'result'),
('system', 'grade', 'unit'),
('system', 'grades', 'fname'),
('system', 'schedule', 'sched'),
('system', 'student', 'lastname'),
('system', 'subj', 'subject name');

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'system', 'grade', '[]', '2019-11-25 01:46:30'),
('root', 'system', 'student', '[]', '2019-11-17 18:41:47');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2021-10-29 14:48:06', '{\"Console\\/Mode\":\"collapse\",\"Console\\/Height\":0}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `system`
--
CREATE DATABASE IF NOT EXISTS `system` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `system`;

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `stud_ID` varchar(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `subj_code` varchar(11) NOT NULL,
  `yr` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `sched_ID` varchar(50) DEFAULT NULL,
  `prof_ID` varchar(11) NOT NULL,
  `grading` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`stud_ID`, `fname`, `lname`, `subj_code`, `yr`, `semester`, `unit`, `sched_ID`, `prof_ID`, `grading`) VALUES
('3', 'moy', 'capistrano', '102', '1st yr', '1st sem', '2', '10:00-12:00', '116', 0),
('4', 'paulmer', 'alcantara', 'GNED 44', '2nd yr', '1st sem', '3', '1:00-12:00', '2012346', 4),
('4', 'paulmer', 'alcantara', 'GNED 14', '2nd yr', '1st sem', '3', '11:00-6:00', '201810556', 5),
('4', 'paulmer', 'alcantara', 'GNED 70', '2nd yr', '1st sem', '3', '8:00-12:00', '201810556', 1),
('4', 'paulmer', 'alcantara', 'GNED 34', '2nd yr', '1st sem', '3', '11:00-12:00', '201810556', 2),
('4', 'paulmer', 'alcantara', 'GNED 23', '2nd yr', '1st sem', '3', '11:00-12:00', '23433246', 1.5),
('4', 'paulmer', 'alcantara', 'GNED 101', '2nd yr', '1st sem', '3', '8:00-9:00', '201810556', 1.5),
('4', 'paulmer', 'alcantara', 'GNED 101', '2nd yr', '1st sem', '3', '8:00-9:00', '201810556', 1.5),
('4', 'paulmer', 'alcantara', 'GNED 99', '2nd yr', '1st sem', '2', '9:00-12:00', '201810556', 0),
('1', 'benedict', 'bautista', 'DCIT 2', '2nd yr', '1st sem', '2', '1:00-5:00', '2013434', 1.5),
('1', 'benedict', 'bautista', 'ICT 88', '2nd yr', '1st sem', '2', '3:00-6:00', '2018532', 0),
('1', 'benedict', 'bautista', 'ICT 35', '2nd yr', '1st sem', '2', '11:00-4:00', '2018532', 1.5),
('1', 'benedict', 'bautista', 'ICT 99', '2nd yr', '1st sem', '2', '3:00-4:00', '2018532', 0),
('1', 'benedict', 'bautista', 'ICT 55', '2nd yr', '1st sem', '2', '8:00-12:00', '2018532', 0),
('1', 'benedict', 'bautista', 'GNED 44', '2nd year', '1st sem', '3', '9:00-10:00', '2014553', 0),
('', '', '', '', '', '', '', NULL, '', 0),
('', '', '', '', '', '', '', NULL, '', 0),
('', '', '', '', '', '', '', NULL, '', 0),
('', '', '', '', '', '', '', NULL, '', 0),
('', '', '', '', '', '', '', NULL, '', 0),
('', '', '', '', '', '', '', NULL, '', 0),
('', '', '', '', '', '', '', NULL, '', 0),
('', '', '', '', '', '', '', NULL, '', 0),
('', '', '', '', '', '', '', NULL, '', 0),
('', '', '', '', '', '', '', NULL, '', 0),
('', '', '', '', '', '', '', NULL, '', 0),
('', '', '', '', '', '', '', NULL, '', 0),
('', '', '', '', '', '', '', NULL, '', 0),
('', '', '', '', '', '', '', NULL, '', 0),
('', '', '', '', '', '', '', NULL, '', 0),
('', '', '', '', '', '', '', NULL, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prof`
--

CREATE TABLE `prof` (
  `profID` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prof`
--

INSERT INTO `prof` (`profID`, `fname`, `lname`, `department`) VALUES
(112, 'lorenze', 'v', 'villanueva'),
(113, 'grace', 'g', 'ibanez'),
(114, 'wyett', 'd', 'lumabon'),
(115, 'carlo', 'p', 'malabanan'),
(116, 'margarette', 'g', 'soberano');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `sched_ID` int(50) NOT NULL,
  `sched` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sched_ID`, `sched`) VALUES
(111, 'eleven'),
(121, 'twleve');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_ID` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_ID`, `firstname`, `middlename`, `lastname`) VALUES
(1, 'benedict', 'g ', 'bautista'),
(2, 'christian ', 'f', 'cullados'),
(3, 'moy', 'e', 'capistrano'),
(4, 'paulmer', 'a', 'alcantara'),
(5, 'patrick', 'r', 'cunanan'),
(111, 'hazel', 'd', 'taguinod'),
(112, 'lee ann', 'd', 'delgado'),
(113, 'sophia', 'd', 'martinez'),
(114, 'rachel', 'e', 'villiagracia'),
(115, 'carlo ', 'e', 'desola');

-- --------------------------------------------------------

--
-- Table structure for table `subj`
--

CREATE TABLE `subj` (
  `subj_code` int(50) NOT NULL,
  `subject name` varchar(50) NOT NULL,
  `yr` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `unit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subj`
--

INSERT INTO `subj` (`subj_code`, `subject name`, `yr`, `semester`, `unit`) VALUES
(10, 'english', '1st yr', '1st sem', 2),
(101, 'pe', '2nd yr', '2nd sem', 3),
(102, 'filipino', '1st yr', '1st sem', 2),
(104, 'math', '3rd yr', '2nd sem', 3),
(105, 'history', '2nd yr', '1st sem', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD KEY `fname` (`fname`),
  ADD KEY `lname` (`lname`),
  ADD KEY `prof_ID` (`prof_ID`),
  ADD KEY `sched_ID` (`sched_ID`),
  ADD KEY `unit` (`unit`),
  ADD KEY `semester` (`semester`),
  ADD KEY `yr` (`yr`),
  ADD KEY `subj_code` (`subj_code`);

--
-- Indexes for table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`profID`);
ALTER TABLE `prof` ADD FULLTEXT KEY `fname` (`fname`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sched_ID`);
ALTER TABLE `schedule` ADD FULLTEXT KEY `sched` (`sched`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD KEY `fname` (`firstname`),
  ADD KEY `lname` (`lastname`),
  ADD KEY `stud_ID` (`stud_ID`);

--
-- Indexes for table `subj`
--
ALTER TABLE `subj`
  ADD PRIMARY KEY (`subj_code`),
  ADD KEY `unit` (`unit`),
  ADD KEY `yr` (`yr`),
  ADD KEY `semester` (`semester`);
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
