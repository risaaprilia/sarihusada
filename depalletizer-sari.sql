-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2018 at 04:58 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `depalletizer-sari`
--

-- --------------------------------------------------------

--
-- Table structure for table `datacamera`
--

CREATE TABLE `datacamera` (
  `id` int(3) NOT NULL,
  `idCamera` varchar(255) NOT NULL,
  `timestamp` datetime DEFAULT NULL,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `operation_task`
--

CREATE TABLE `operation_task` (
  `PrO` varchar(30) NOT NULL,
  `Operation` varchar(30) NOT NULL,
  `LOTRUN` varchar(30) NOT NULL,
  `LOTqty` varchar(30) NOT NULL,
  `SKUID` varchar(30) NOT NULL,
  `SKUName` varchar(30) NOT NULL,
  `PrOStatus` int(11) NOT NULL,
  `JobStatus` int(11) NOT NULL,
  `LotRunStatus` int(11) NOT NULL,
  `PreCheckStatus` int(11) NOT NULL,
  `DumpingProcess` int(11) NOT NULL,
  `MatId` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `printer_job`
--

CREATE TABLE `printer_job` (
  `PrinterIP` varchar(15) DEFAULT NULL,
  `JobID` varchar(20) DEFAULT NULL,
  `Operation` varchar(50) DEFAULT NULL,
  `Template` varchar(50) DEFAULT NULL,
  `SKUDesc` varchar(50) DEFAULT NULL,
  `SKUId` int(11) DEFAULT NULL,
  `SSCC` varchar(50) DEFAULT NULL,
  `MaterialNumber` int(11) DEFAULT NULL,
  `MaterialDescription` varchar(50) DEFAULT NULL,
  `Batch` varchar(50) DEFAULT NULL,
  `UoM` varchar(50) DEFAULT NULL,
  `ExpiryDate` varchar(10) DEFAULT NULL,
  `MaterialSeqNo` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Variant` varchar(50) DEFAULT NULL,
  `Count` int(11) DEFAULT NULL,
  `Layers` varchar(50) DEFAULT NULL,
  `ProductionDate` varchar(10) DEFAULT NULL,
  `LotRun` varchar(50) DEFAULT NULL,
  `LineNo` int(11) DEFAULT NULL,
  `EAN13` varchar(13) DEFAULT NULL,
  `LOT` varchar(10) DEFAULT NULL,
  `LOTSequence` varchar(10) DEFAULT NULL,
  `PalletIdentifier` varchar(30) DEFAULT NULL,
  `TargetLocation` varchar(50) DEFAULT NULL,
  `OperId` varchar(30) DEFAULT NULL,
  `CreatedDateTime` varchar(30) DEFAULT NULL,
  `BagSequence` varchar(10) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Reason` varchar(50) DEFAULT NULL,
  `Comments` varchar(50) DEFAULT NULL,
  `ProgressStatus` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `printer_job`
--

INSERT INTO `printer_job` (`PrinterIP`, `JobID`, `Operation`, `Template`, `SKUDesc`, `SKUId`, `SSCC`, `MaterialNumber`, `MaterialDescription`, `Batch`, `UoM`, `ExpiryDate`, `MaterialSeqNo`, `Quantity`, `Variant`, `Count`, `Layers`, `ProductionDate`, `LotRun`, `LineNo`, `EAN13`, `LOT`, `LOTSequence`, `PalletIdentifier`, `TargetLocation`, `OperId`, `CreatedDateTime`, `BagSequence`, `Status`, `Reason`, `Comments`, `ProgressStatus`) VALUES
('10.6.255.11', '62729017_prep', 'LiquidsAssignBlending', 'BatchCompleteTemplate', 'Rooaxan A', 300084, '', 0, '', '', '', '', 0, 0, '', 0, '', '', '', 0, '', '1', '', '', 'PreBlendingMCA', 'sesa214355', '02-Nov-2017', '', 'Minor Completed', '', '', 1),
('10.6.255.11', '62729017_prep', 'LiquidsAssignBlending', 'BatchCompleteTemplate', 'Rooaxan A', 300084, '', 0, '', '', '', '', 0, 0, '', 0, '', '', '', 0, '', '1', '', '', 'PreBlendingMCA', 'sesa214355', '02-Nov-2017', '', 'Minor Completed', '', '', 1),
('10.6.255.11', '62729017_prep', 'LiquidsAssignBlending', 'BatchCompleteTemplate', 'Rooaxan A', 300084, '', 0, '', '', '', '', 0, 0, '', 0, '', '', '', 0, '', '1', '', '', 'PreBlendingMCA', 'sesa214355', '02-Nov-2017', '', 'Minor Completed', '', '', 1),
('10.6.255.11', '62729017_prep', 'LiquidsAssignBlending', 'BatchCompleteTemplate', 'Rooaxan A', 300084, '', 0, '', '', '', '', 0, 0, '', 0, '', '', '', 0, '', '1', '', '', 'PreBlendingMCA', 'sesa214355', '02-Nov-2017', '', 'Minor Completed', '', '', 1),
('10.6.255.11', '62729017_prep', 'LiquidsAssignBlending', 'BatchCompleteTemplate', 'Rooaxan A', 300084, '', 0, '', '', '', '', 0, 0, '', 0, '', '', '', 0, '', '1', '', '', 'PreBlendingMCA', 'sesa214355', '02-Nov-2017', '', 'Minor Completed', '', '', 1),
('10.6.255.11', '62729017_prep', 'LiquidsAssignBlending', 'BatchCompleteTemplate', 'Rooaxan A', 300084, '', 0, '', '', '', '', 0, 0, '', 0, '', '', '', 0, '', '1', '', '', 'PreBlendingMCA', 'sesa214355', '02-Nov-2017', '', 'Minor Completed', '', '', 1),
('10.6.255.11', '62729017_prep', 'LiquidsAssignBlending', 'BatchCompleteTemplate', 'Rooaxan A', 300084, '', 0, '', '', '', '', 0, 0, '', 0, '', '', '', 0, '', '1', '', '', 'PreBlendingMCA', 'sesa214355', '02-Nov-2017', '', 'Minor Completed', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_print`
--

CREATE TABLE `tbl_print` (
  `id` int(8) NOT NULL,
  `PrO` varchar(35) DEFAULT NULL,
  `LotSeq` varchar(5) DEFAULT NULL,
  `Number` varchar(10) DEFAULT NULL,
  `qty` varchar(6) DEFAULT NULL,
  `Batch` varchar(12) DEFAULT NULL,
  `productionDate` date DEFAULT NULL,
  `dataBarcode` varchar(20) DEFAULT NULL,
  `operationId` varchar(8) DEFAULT NULL,
  `expDate` date DEFAULT NULL,
  `BagSeq` varchar(10) DEFAULT NULL,
  `Linder` varchar(5) DEFAULT NULL,
  `Status` varchar(10) DEFAULT NULL,
  `Flag` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_print`
--

INSERT INTO `tbl_print` (`id`, `PrO`, `LotSeq`, `Number`, `qty`, `Batch`, `productionDate`, `dataBarcode`, `operationId`, `expDate`, `BagSeq`, `Linder`, `Status`, `Flag`) VALUES
(1, '0001', '01/08', '301370', '25.00', '0000012345', '2018-01-09', '00123456789012345678', 'User01', '2018-01-09', '02/05', 'H', 'Good', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tconfig`
--

CREATE TABLE `tconfig` (
  `device_id` int(11) NOT NULL,
  `device_names` varchar(50) NOT NULL,
  `device_type` varchar(50) NOT NULL,
  `status` int(8) NOT NULL DEFAULT '0',
  `ip_address` varchar(50) NOT NULL,
  `port_number` varchar(20) NOT NULL,
  `serial_number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tconfig`
--

INSERT INTO `tconfig` (`device_id`, `device_names`, `device_type`, `status`, `ip_address`, `port_number`, `serial_number`) VALUES
(1, 'Printer PALLETE', 'Label Printer', 1, '', '6101', 0),
(2, 'Printer BAG', 'Label Printer', 1, '192.168.0.102', '9100', 0),
(3, 'Camera VERIFICATION', 'Camera', 1, '192.168.0.103', '5106', 0),
(4, 'Printer BAG', 'Label Printer', 0, '192.168.26.101', '9100', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tjob_list`
--

CREATE TABLE `tjob_list` (
  `job_id` int(11) NOT NULL,
  `job_name` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `update_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `job_desc` varchar(255) DEFAULT NULL,
  `job_status` int(1) NOT NULL DEFAULT '0',
  `deleted_job` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tjob_list`
--

INSERT INTO `tjob_list` (`job_id`, `job_name`, `create_date`, `update_date`, `job_desc`, `job_status`, `deleted_job`) VALUES
(101, 'Job Coba 1', '2018-03-13 06:31:33', '2018-03-13 06:31:33', 'Job saat ini digunakan untuk melakukan depalletizer line 1 Susu', 2, 0),
(104, 'Job Coba 4', '2018-03-13 10:28:44', '2018-03-13 10:28:44', '                                   tes 2     ', 1, 0),
(105, 'Job Coba 5', '2018-03-13 10:45:37', '2018-03-13 10:45:37', '                          you can see me              ', 0, 0),
(106, 'Job Coba 6', '2018-03-13 10:22:40', '2018-03-13 10:22:40', NULL, 1, 0),
(107, 'Test Risa', '0000-00-00 00:00:00', NULL, 'test masuk engga                                        ', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tpallete`
--

CREATE TABLE `tpallete` (
  `pallete_id` int(11) NOT NULL,
  `pallete_number` int(11) NOT NULL DEFAULT '0',
  `create_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `update_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `job_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '0',
  `pallete_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpallete`
--

INSERT INTO `tpallete` (`pallete_id`, `pallete_number`, `create_date`, `update_date`, `job_id`, `qty`, `pallete_status`) VALUES
(122226789, 4, '0000-00-00 00:00:00', NULL, 101, 0, 0),
(122256789, 3, '2018-03-08 17:57:41', '2018-03-08 17:57:41', 101, 0, 0),
(122456789, 2, '2018-03-08 17:57:27', '2018-03-08 17:57:27', 101, 0, 0),
(123456789, 1, '0000-00-00 00:00:00', NULL, 101, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `userid` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pin` int(8) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `role` varchar(50) NOT NULL,
  `contact` bigint(13) DEFAULT NULL,
  `status` int(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`userid`, `username`, `pin`, `firstname`, `lastname`, `role`, `contact`, `status`) VALUES
(1, 'risa', 12345678, 'Risa', 'Aprilia', 'Manager', 6281573071855, 0),
(2, 'galih', 87654321, 'Galih Ayu', 'Kinanti', 'Supervisor', 6282117051958, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datacamera`
--
ALTER TABLE `datacamera`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_print`
--
ALTER TABLE `tbl_print`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tconfig`
--
ALTER TABLE `tconfig`
  ADD PRIMARY KEY (`device_id`,`serial_number`);

--
-- Indexes for table `tjob_list`
--
ALTER TABLE `tjob_list`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `tpallete`
--
ALTER TABLE `tpallete`
  ADD PRIMARY KEY (`pallete_id`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`userid`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datacamera`
--
ALTER TABLE `datacamera`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_print`
--
ALTER TABLE `tbl_print`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tjob_list`
--
ALTER TABLE `tjob_list`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `userid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
