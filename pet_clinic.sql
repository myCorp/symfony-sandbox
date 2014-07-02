-- phpMyAdmin SQL Dump
-- version 4.2.4
-- http://www.phpmyadmin.net
--
-- Host: arch2
-- Generation Time: Jul 03, 2014 at 12:39 AM
-- Server version: 5.5.37-MariaDB-log
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pet_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
`clientID` int(11) NOT NULL,
  `client_name` varchar(16) DEFAULT NULL,
  `address` varchar(64) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `mail` varchar(32) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientID`, `client_name`, `address`, `phone`, `mail`) VALUES
(1, 'name', 'addr', '111', 'mail');

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE IF NOT EXISTS `pet` (
  `clientID` int(11) NOT NULL,
  `pet_name` varchar(16) DEFAULT NULL,
  `breed` varchar(16) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`clientID`, `pet_name`, `breed`, `age`) VALUES
(1, 'petname', 'breed', 15);

-- --------------------------------------------------------

--
-- Table structure for table `reception`
--

CREATE TABLE IF NOT EXISTS `reception` (
  `clientID` int(11) DEFAULT NULL,
  `date` varchar(16) DEFAULT NULL,
  `start_reception` varchar(16) DEFAULT NULL,
  `end_time_reception` varchar(16) DEFAULT NULL,
  `symptoms` varchar(128) DEFAULT NULL,
  `comment` varchar(512) DEFAULT NULL,
  `veterinarian_name` varchar(16) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reception`
--

INSERT INTO `reception` (`clientID`, `date`, `start_reception`, `end_time_reception`, `symptoms`, `comment`, `veterinarian_name`, `status`) VALUES
(1, '02.07.2014', '15.00', '16.00', 'his died', 'HELP!!!', 'mikki', 2);

-- --------------------------------------------------------

--
-- Table structure for table `veterinarian`
--

CREATE TABLE IF NOT EXISTS `veterinarian` (
  `doctor_name` varchar(16) NOT NULL DEFAULT '',
  `profession` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `veterinarian`
--

INSERT INTO `veterinarian` (`doctor_name`, `profession`) VALUES
('mikki', 'killer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`clientID`), ADD KEY `clientID` (`clientID`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
 ADD UNIQUE KEY `clientID_2` (`clientID`), ADD KEY `clientID` (`clientID`);

--
-- Indexes for table `reception`
--
ALTER TABLE `reception`
 ADD UNIQUE KEY `clientID_2` (`clientID`), ADD KEY `clientID` (`clientID`), ADD KEY `veterinarian_name` (`veterinarian_name`);

--
-- Indexes for table `veterinarian`
--
ALTER TABLE `veterinarian`
 ADD PRIMARY KEY (`doctor_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
MODIFY `clientID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pet`
--
ALTER TABLE `pet`
ADD CONSTRAINT `pet_ibfk_18` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `pet_ibfk_1` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `pet_ibfk_10` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `pet_ibfk_11` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `pet_ibfk_12` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `pet_ibfk_13` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `pet_ibfk_14` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `pet_ibfk_15` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `pet_ibfk_16` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `pet_ibfk_17` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `pet_ibfk_2` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `pet_ibfk_3` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `pet_ibfk_4` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `pet_ibfk_5` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `pet_ibfk_6` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `pet_ibfk_7` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `pet_ibfk_8` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `pet_ibfk_9` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`);

--
-- Constraints for table `reception`
--
ALTER TABLE `reception`
ADD CONSTRAINT `reception_ibfk_9` FOREIGN KEY (`veterinarian_name`) REFERENCES `veterinarian` (`doctor_name`),
ADD CONSTRAINT `reception_ibfk_1` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `reception_ibfk_2` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `reception_ibfk_3` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `reception_ibfk_4` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `reception_ibfk_5` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `reception_ibfk_6` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `reception_ibfk_7` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`),
ADD CONSTRAINT `reception_ibfk_8` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
