-- phpMyAdmin SQL Dump
-- version 4.2.4
-- http://www.phpmyadmin.net
--
-- Host: arch2
-- Generation Time: Jul 03, 2014 at 01:34 PM
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
  `firstName` varchar(16) DEFAULT NULL,
  `lastName` varchar(16) DEFAULT NULL,
  `address` varchar(64) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `mail` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE IF NOT EXISTS `pet` (
`id` int(11) NOT NULL,
  `clientID` int(11) NOT NULL,
  `nickname` varchar(16) DEFAULT NULL,
  `breed` varchar(16) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reception`
--

CREATE TABLE IF NOT EXISTS `reception` (
`id` int(11) NOT NULL,
  `clientID` int(11) NOT NULL,
  `date` varchar(16) NOT NULL,
  `start_time_reception` varchar(16) DEFAULT NULL,
  `end_time_reception` varchar(16) DEFAULT NULL,
  `symptoms` varchar(128) DEFAULT NULL,
  `comment` varchar(512) DEFAULT NULL,
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(16) NOT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `veterinarian`
--

CREATE TABLE IF NOT EXISTS `veterinarian` (
`id` int(11) NOT NULL,
  `name` varchar(16) DEFAULT NULL,
  `profession` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`clientID`), ADD UNIQUE KEY `clientID` (`clientID`), ADD KEY `clientID_2` (`clientID`), ADD KEY `address` (`address`), ADD KEY `phone` (`phone`), ADD KEY `mail` (`mail`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD KEY `clientID` (`clientID`), ADD KEY `nickname` (`nickname`);

--
-- Indexes for table `reception`
--
ALTER TABLE `reception`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD KEY `clientID` (`clientID`), ADD KEY `date` (`date`), ADD KEY `doctor_name` (`doctor_name`), ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `veterinarian`
--
ALTER TABLE `veterinarian`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD KEY `name` (`name`), ADD KEY `profession` (`profession`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
MODIFY `clientID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reception`
--
ALTER TABLE `reception`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `veterinarian`
--
ALTER TABLE `veterinarian`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pet`
--
ALTER TABLE `pet`
ADD CONSTRAINT `pet_ibfk_1` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`);

--
-- Constraints for table `reception`
--
ALTER TABLE `reception`
ADD CONSTRAINT `reception_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `veterinarian` (`id`),
ADD CONSTRAINT `reception_ibfk_1` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
