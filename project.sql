-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2015 at 10:32 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `adminupdates`
--

CREATE TABLE IF NOT EXISTS `adminupdates` (
  `message` varchar(90) DEFAULT NULL,
  `mydate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `atofmsgs`
--

CREATE TABLE IF NOT EXISTS `atofmsgs` (
  `message` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atofmsgs`
--

INSERT INTO `atofmsgs` (`message`) VALUES
('hello   '),
(' hi');

-- --------------------------------------------------------

--
-- Table structure for table `excel`
--

CREATE TABLE IF NOT EXISTS `excel` (
  `id` int(11) DEFAULT NULL,
  `eid` varchar(60) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `dob` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facultysignup`
--

CREATE TABLE IF NOT EXISTS `facultysignup` (
  `fname` char(20) DEFAULT NULL,
  `lname` char(20) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `emailid` varchar(30) DEFAULT NULL,
  `contactno` int(20) DEFAULT NULL,
  `password1` varchar(20) DEFAULT NULL,
  `verify` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultysignup`
--

INSERT INTO `facultysignup` (`fname`, `lname`, `username`, `emailid`, `contactno`, `password1`, `verify`) VALUES
('Rashmi', 'R', 'rashmi', 'rashmir@rvce.edu.in', 2147483647, 'rashmi123', 'rashmi123'),
('Smitha', 'G R', 'smitha', 'smithagr@rvce.edu.in', 2147483647, 'smitha123', 'smitha123');

-- --------------------------------------------------------

--
-- Table structure for table `facultyupdates`
--

CREATE TABLE IF NOT EXISTS `facultyupdates` (
  `message` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultyupdates`
--

INSERT INTO `facultyupdates` (`message`) VALUES
(''),
('            hi students');

-- --------------------------------------------------------

--
-- Table structure for table `facultyupload`
--

CREATE TABLE IF NOT EXISTS `facultyupload` (
  `Fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `emailid` varchar(35) DEFAULT NULL,
  `contactno` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hostsession`
--

CREATE TABLE IF NOT EXISTS `hostsession` (
  `sem` varchar(20) DEFAULT NULL,
  `sub` varchar(20) DEFAULT NULL,
  `batch` varchar(6) DEFAULT NULL,
  `lab` varchar(6) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostsession`
--

INSERT INTO `hostsession` (`sem`, `sub`, `batch`, `lab`) VALUES
('3', 'data structures', 'b2', 'lab2');

-- --------------------------------------------------------

--
-- Table structure for table `logbookfinal`
--

CREATE TABLE IF NOT EXISTS `logbookfinal` (
  `usn` varchar(10) DEFAULT NULL,
  `sem` int(11) DEFAULT NULL,
  `batch` varchar(4) DEFAULT NULL,
  `lab` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logbookfinal`
--

INSERT INTO `logbookfinal` (`usn`, `sem`, `batch`, `lab`) VALUES
('1rv13is408', 1, 'b1', 'lab1'),
('1rv13ec412', 1, 'b1', 'lab1'),
('1rv13is410', 1, 'b1', 'lab1'),
('1rv13is405', 1, 'b1', 'lab1');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `usn` varchar(10) NOT NULL,
  `sem` varchar(10) DEFAULT NULL,
  `batch` varchar(10) DEFAULT NULL,
  `lab` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`usn`, `sem`, `batch`, `lab`) VALUES
('1rv13is410', '1', 'b1', 'lab1');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `sid` varchar(100) NOT NULL DEFAULT '0',
  `sem` varchar(10) NOT NULL DEFAULT '1',
  `log_in` datetime NOT NULL,
  `faculty` varchar(80) NOT NULL,
  `lab_no` varchar(11) NOT NULL,
  `activity` varchar(25) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `experiment` int(11) NOT NULL,
  `Year` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`sid`, `sem`, `log_in`, `faculty`, `lab_no`, `activity`, `sub`, `batch`, `experiment`, `Year`) VALUES
('1', '', '2015-04-06 22:02:24', '', 'lab1', '1', 'cprogramming', 'b1', 0, '2014-2015'),
('2', '', '2015-04-06 22:03:38', '', 'lab2', '1', 'cprogramming', 'b3', 0, '2014-2015'),
('3', '', '2015-04-06 22:05:19', '', 'lab2', '1', 'cprogramming', 'b1', 0, '2014-2015'),
('4', '', '2015-04-07 23:23:46', '', 'lab1', '1', 'cprogramming', 'b1', 0, '2014-2015'),
('5', '', '2015-04-08 10:12:54', '', 'lab1', '1', 'cprogramming', 'b1', 0, '2014-2015'),
('6', '', '2015-04-08 10:26:13', '', 'lab1', '1', 'cprogramming', 'b1', 0, '2014-2015');

-- --------------------------------------------------------

--
-- Table structure for table `ssignup`
--

CREATE TABLE IF NOT EXISTS `ssignup` (
  `fname` char(30) DEFAULT NULL,
  `lname` char(30) DEFAULT NULL,
  `usn` varchar(10) NOT NULL,
  `sem` int(5) NOT NULL,
  `batch` int(5) DEFAULT NULL,
  `emailid` varchar(30) DEFAULT NULL,
  `contactno` int(11) DEFAULT NULL,
  `password1` varchar(20) DEFAULT NULL,
  `verify` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssignup`
--

INSERT INTO `ssignup` (`fname`, `lname`, `usn`, `sem`, `batch`, `emailid`, `contactno`, `password1`, `verify`) VALUES
('Gireesh', 'B P', '1RV13IS401', 7, 4, 'gireeshbp@gmail.com', 41632001, 'gireesh123', 'gireesh123'),
('Hasansab', 'Sheikh', '1RV13IS402', 5, 2, 'hasansab@gmail.com', 41632002, 'hasan123', 'hasan123'),
('Pradhnya', 'Kapse Arun', '1RV13IS404', 7, 3, 'pradhnyaka@gmail.com', 41632003, 'pradhnya123', 'pradhnya123'),
('Keerthana', 'J P', '1RV13IS405', 7, 4, 'email2jpkeerthana@gmail.com', 41632009, 'keerthana123', 'keerthana123'),
('Kumara', 'S K', '1RV13IS406', 5, 4, 'kumarask@gmail.com', 41632004, 'kumara123', 'kumara123'),
('Sowmya', 'N', '1RV13IS407', 4, 1, 'sowmyan@gmail.com', 41632005, 'sowmya123', 'sowmya123'),
('Pooja', 'N', '1RV13IS408', 3, 2, 'poojan@gmail.com', 41632006, 'pooja123', 'pooja123'),
('Prahallada', 'K N', '1RV13IS410', 6, 1, 'prahalladakn@gmail.com', 41632007, 'prahallada123', 'prahallada123'),
('Suraj', 'P S', '1RV13IS411', 7, 3, 'suraj0068@gmail.com', 41632008, 'suraj123', 'suraj123');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `sub_code` varchar(10) NOT NULL,
  `sub_name` varchar(80) NOT NULL,
  `sem` int(2) NOT NULL,
  `no_of_classes` int(255) NOT NULL,
  `no_of_experiments` int(11) NOT NULL,
  `sub_year` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `test_mysql`
--

CREATE TABLE IF NOT EXISTS `test_mysql` (
`id` int(4) NOT NULL,
  `name` varchar(65) NOT NULL DEFAULT '',
  `lastname` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE IF NOT EXISTS `verify` (
  `usn` varchar(20) NOT NULL,
  `name` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facultysignup`
--
ALTER TABLE `facultysignup`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `hostsession`
--
ALTER TABLE `hostsession`
 ADD PRIMARY KEY (`lab`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `ssignup`
--
ALTER TABLE `ssignup`
 ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `test_mysql`
--
ALTER TABLE `test_mysql`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verify`
--
ALTER TABLE `verify`
 ADD PRIMARY KEY (`usn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test_mysql`
--
ALTER TABLE `test_mysql`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
