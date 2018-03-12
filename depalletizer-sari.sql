-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2018 at 01:34 AM
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
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `device_id` int(11) DEFAULT NULL,
  `device_names` varchar(50) DEFAULT NULL,
  `device_type` varchar(50) DEFAULT NULL,
  `device_status` int(8) DEFAULT NULL,
  `device_ip` varchar(50) DEFAULT NULL,
  `device_port` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`device_id`, `device_names`, `device_type`, `device_status`, `device_ip`, `device_port`) VALUES
(NULL, NULL, NULL, 0, '192.168.0.102', '6101');

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
-- Table structure for table `t_job_list`
--

CREATE TABLE `t_job_list` (
  `job_id` int(11) NOT NULL,
  `job_name` varchar(50) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `job_desc` varchar(100) DEFAULT NULL,
  `job_status` varchar(30) DEFAULT NULL,
  `deleted_job` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_job_list`
--

INSERT INTO `t_job_list` (`job_id`, `job_name`, `create_date`, `update_date`, `job_desc`, `job_status`, `deleted_job`) VALUES
(1, 'test_job', '2018-03-05 06:24:27', '2018-03-05 06:24:27', 'lorem_ipsum', '0', NULL),
(4, 'test 2', '2018-03-05 06:24:38', '2018-03-05 06:24:38', '                                   tes 2     ', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pin` int(8) DEFAULT NULL,
  `status` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `pin`, `status`) VALUES
(1, 'wakanda', 12345678, 0),
(2, 'hera', 87654321, 0);

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
-- Indexes for table `t_job_list`
--
ALTER TABLE `t_job_list`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

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
-- AUTO_INCREMENT for table `t_job_list`
--
ALTER TABLE `t_job_list`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
