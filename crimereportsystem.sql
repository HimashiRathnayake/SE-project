-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 12, 2019 at 05:53 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crimereportsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `policeStationID` int(11) NOT NULL,
  `publicID` int(11) NOT NULL,
  `dateOfIncident` varchar(20) NOT NULL,
  `incidentDescription` varchar(250) NOT NULL,
  `placeOfIncident` varchar(100) NOT NULL,
  PRIMARY KEY (`policeStationID`,`publicID`),
  KEY `publicID` (`publicID`),
  KEY `policeStationID` (`policeStationID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`policeStationID`, `publicID`, `dateOfIncident`, `incidentDescription`, `placeOfIncident`) VALUES
(30, 1, '11/12/2019', 'ss', 'dhsdhas,sdhausdh');

-- --------------------------------------------------------

--
-- Table structure for table `missingperson`
--

DROP TABLE IF EXISTS `missingperson`;
CREATE TABLE IF NOT EXISTS `missingperson` (
  `publicID` int(11) NOT NULL,
  `dateOfLastSeen` varchar(30) NOT NULL,
  `imageURL` varchar(100) DEFAULT NULL,
  `descriptionOfMissingPerson` varchar(250) NOT NULL,
  `mpID` int(11) NOT NULL AUTO_INCREMENT,
  `placeOfLastSeen` varchar(100) NOT NULL,
  PRIMARY KEY (`mpID`),
  KEY `publicID` (`publicID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `missingperson`
--

INSERT INTO `missingperson` (`publicID`, `dateOfLastSeen`, `imageURL`, `descriptionOfMissingPerson`, `mpID`, `placeOfLastSeen`) VALUES
(3, '11/12/2019', NULL, 'sas', 1, 'dhsdhas,sdhausdh'),
(3, 'sas', NULL, 'sa', 2, 'as'),
(3, '11/12/2019', NULL, 'czx', 3, 'dhsdhas,sdhausdh');

-- --------------------------------------------------------

--
-- Table structure for table `mostwantedperson`
--

DROP TABLE IF EXISTS `mostwantedperson`;
CREATE TABLE IF NOT EXISTS `mostwantedperson` (
  `mwID` int(11) NOT NULL AUTO_INCREMENT,
  `policeID` int(11) NOT NULL,
  `descriptionOfMostWanted` varchar(250) NOT NULL,
  `imageURL` varchar(100) NOT NULL,
  `placeOfLastSeen` varchar(50) NOT NULL,
  `dateOfLastSeen` varchar(50) NOT NULL,
  PRIMARY KEY (`mwID`),
  KEY `policeID` (`policeID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mostwantedperson`
--

INSERT INTO `mostwantedperson` (`mwID`, `policeID`, `descriptionOfMostWanted`, `imageURL`, `placeOfLastSeen`, `dateOfLastSeen`) VALUES
(3, 1, 'sd', 'sdas', 'as', 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

DROP TABLE IF EXISTS `police`;
CREATE TABLE IF NOT EXISTS `police` (
  `policeID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `NIC` varchar(15) DEFAULT NULL,
  `telNo` int(15) DEFAULT NULL,
  `imageURL` varchar(100) NOT NULL,
  `postalCode` varchar(30) NOT NULL,
  PRIMARY KEY (`policeID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`policeID`, `email`, `name`, `NIC`, `telNo`, `imageURL`, `postalCode`) VALUES
(1, 'katunayakaps@gmail.com', 'sasd', 'sasa', 11, 'sad', '');

-- --------------------------------------------------------

--
-- Table structure for table `policecase`
--

DROP TABLE IF EXISTS `policecase`;
CREATE TABLE IF NOT EXISTS `policecase` (
  `policeID` int(11) NOT NULL,
  `caseDescription` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `publicID` int(11) NOT NULL,
  `reportDescription` varchar(250) DEFAULT NULL,
  `caseID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`caseID`),
  KEY `publicID` (`publicID`),
  KEY `policeID` (`policeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `policestation`
--

DROP TABLE IF EXISTS `policestation`;
CREATE TABLE IF NOT EXISTS `policestation` (
  `policeStationName` varchar(50) NOT NULL,
  `policeStationID` int(11) NOT NULL AUTO_INCREMENT,
  `postalCode` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telNo` int(15) DEFAULT NULL,
  `hashedPassword` varchar(250) NOT NULL,
  PRIMARY KEY (`policeStationID`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policestation`
--

INSERT INTO `policestation` (`policeStationName`, `policeStationID`, `postalCode`, `email`, `telNo`, `hashedPassword`) VALUES
('katunayaka ps', 30, '121A', 'katunayakaps@gmail.com', 112257443, ''),
('negomboPs', 38, '121C', 'negombopc@gmail.com', 112257123, '');

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

DROP TABLE IF EXISTS `public`;
CREATE TABLE IF NOT EXISTS `public` (
  `publicID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `NIC` varchar(15) NOT NULL,
  `telNo` int(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `postalCode` varchar(30) NOT NULL,
  `imageURL` varchar(100) DEFAULT NULL,
  `hashedPassword` varchar(250) NOT NULL,
  PRIMARY KEY (`publicID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public`
--

INSERT INTO `public` (`publicID`, `name`, `NIC`, `telNo`, `email`, `address`, `postalCode`, `imageURL`, `hashedPassword`) VALUES
(1, 'yasiru', '9711v', 112257442, 'y@gmail.com', 'sddasd', '121A', '', ''),
(3, 'yas', '971191384v', 714271520, 'yasirurathnayaka.17@cse.mrt.ac.lk', '11112wsasdsa', '12345', NULL, '$2y$10$lixjtHVh.wCS6vZs6nFfCuTXq.UGTczTCx4lNJ63obmi4kyViF/hK');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_2` FOREIGN KEY (`publicID`) REFERENCES `public` (`publicID`),
  ADD CONSTRAINT `complaint_ibfk_3` FOREIGN KEY (`policeStationID`) REFERENCES `policestation` (`policeStationID`);

--
-- Constraints for table `missingperson`
--
ALTER TABLE `missingperson`
  ADD CONSTRAINT `missingperson_ibfk_1` FOREIGN KEY (`publicID`) REFERENCES `public` (`publicID`);

--
-- Constraints for table `mostwantedperson`
--
ALTER TABLE `mostwantedperson`
  ADD CONSTRAINT `mostwantedperson_ibfk_1` FOREIGN KEY (`policeID`) REFERENCES `police` (`policeID`);

--
-- Constraints for table `policecase`
--
ALTER TABLE `policecase`
  ADD CONSTRAINT `policecase_ibfk_1` FOREIGN KEY (`publicID`) REFERENCES `public` (`publicID`),
  ADD CONSTRAINT `policecase_ibfk_2` FOREIGN KEY (`policeID`) REFERENCES `police` (`policeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
