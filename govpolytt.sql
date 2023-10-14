-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 10, 2020 at 06:11 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `govpolytt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `srno` int(11) NOT NULL,
  `username` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`srno`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `srno` int(255) NOT NULL,
  `class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`srno`, `class`) VALUES
(1, 'FY Computer'),
(2, 'SY Computer'),
(3, 'TY Computer');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `srno` int(11) NOT NULL,
  `days` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`srno`, `days`) VALUES
(1, 'monday'),
(2, 'tuesday'),
(3, 'wednesday'),
(4, 'thursday'),
(5, 'friday'),
(6, 'saturday');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `srno` int(255) NOT NULL,
  `lab` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`srno`, `lab`) VALUES
(1, 'LB1'),
(2, 'LB2'),
(3, 'LB3');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `srno` int(11) NOT NULL,
  `tname` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `teacherid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`srno`, `tname`, `contact`, `teacherid`) VALUES
(1, 'milind', 2147483647, 123),
(2, 'chetan', 999999999, 251),
(3, 'vaibhav', 2147483647, 154),
(4, 'vijay sir', 1236547892, 254),
(5, 'priyanka mam', 2147483647, 333),
(6, 'rutik', 2147483647, 547),
(7, 'nilambari', 12365458, 555),
(8, 'vrushali', 2147483647, 785),
(9, 'vaishnavi', 2147483647, 6545654),
(10, 'shinde sir', 2147483647, 35465);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `srno` int(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `subjectcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`srno`, `subject`, `subjectcode`) VALUES
(1, 'micro', 123),
(2, 'm1', 254),
(3, 'm2', 658),
(4, 'm3', 987),
(5, 'DS', 248),
(6, 'TOC', 588),
(7, 'cs', 5885);

-- --------------------------------------------------------

--
-- Table structure for table `timeslot`
--

CREATE TABLE `timeslot` (
  `srno` int(11) NOT NULL,
  `timeslot` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeslot`
--

INSERT INTO `timeslot` (`srno`, `timeslot`) VALUES
(1, '10-11'),
(2, '11-12'),
(3, '1-2'),
(4, '2-3'),
(5, '3-4'),
(6, '4-5'),
(12, '5 - 6');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `srno` int(11) NOT NULL,
  `timeslot` varchar(255) DEFAULT NULL,
  `tname` varchar(255) DEFAULT NULL,
  `clname` varchar(255) DEFAULT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `b1_lab` varchar(2000) DEFAULT NULL,
  `b1_sub` varchar(2000) DEFAULT NULL,
  `b2_lab` varchar(2000) DEFAULT NULL,
  `b2_sub` varchar(2000) DEFAULT NULL,
  `b3_lab` varchar(2000) DEFAULT NULL,
  `b3_sub` varchar(2000) DEFAULT NULL,
  `b1_teacher` varchar(2000) DEFAULT NULL,
  `b2_teacher` varchar(2000) DEFAULT NULL,
  `b3_teacher` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`srno`, `timeslot`, `tname`, `clname`, `sname`, `day`, `type`, `b1_lab`, `b1_sub`, `b2_lab`, `b2_sub`, `b3_lab`, `b3_sub`, `b1_teacher`, `b2_teacher`, `b3_teacher`) VALUES
(1, '11-12', 'nilambari', 'SY Computer', 'm3', 'tuesday', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2-3', NULL, NULL, NULL, 'wednesday', 2, 'LB1', 'm1', 'LB2', 'm2', 'LB3', 'm3', 'milind', 'chetan', 'vrushali'),
(5, '10-11', 'milind', 'SY Computer', 'micro', 'monday', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '10-11', 'chetan', 'FY Computer', 'm1', 'monday', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '2-3', 'chetan', 'FY Computer', 'm2', 'monday', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '5 - 6', 'vaishnavi', 'FY Computer', 'DS', 'monday', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '2-3', 'rutik', 'TY Computer', 'DS', 'wednesday', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '10-11', 'vaibhav', 'FY Computer', 'micro', 'wednesday', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `timeslot`
--
ALTER TABLE `timeslot`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `srno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `srno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `srno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `timeslot`
--
ALTER TABLE `timeslot`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
