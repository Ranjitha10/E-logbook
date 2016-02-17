-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2015 at 03:20 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elogbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Username` varchar(30) NOT NULL,
  `Password` text CHARACTER SET armscii8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `experiments`
--

CREATE TABLE IF NOT EXISTS `experiments` (
  `sem` varchar(10) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `experiment` int(11) NOT NULL,
  `subexperiment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `username` varchar(100) CHARACTER SET armscii8 NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `lab_session`
--

CREATE TABLE IF NOT EXISTS `lab_session` (
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(50) NOT NULL,
  `lab` varchar(25) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `start_lab` varchar(11) NOT NULL,
  `end_lab` varchar(11) NOT NULL,
  `faculty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logbook_final`
--

CREATE TABLE IF NOT EXISTS `logbook_final` (
  `sub_name` varchar(100) NOT NULL,
  `log_in` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sid` varchar(100) NOT NULL,
  `USN` varchar(20) NOT NULL,
  `system_no` int(20) NOT NULL,
  `batch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `logbook_temp`
--

CREATE TABLE IF NOT EXISTS `logbook_temp` (
`sid` int(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `USN` varchar(100) NOT NULL,
  `log_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `system_no` int(11) NOT NULL,
  `approval` varchar(11) NOT NULL DEFAULT '0',
  `batch` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `marks_sem1`
--

CREATE TABLE IF NOT EXISTS `marks_sem1` (
  `USN` varchar(25) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `ex1` varchar(10) NOT NULL,
  `ex2` varchar(10) NOT NULL,
  `ex3` varchar(10) NOT NULL,
  `ex4` varchar(10) NOT NULL,
  `ex5` varchar(10) NOT NULL,
  `ex6` varchar(10) NOT NULL,
  `batch` varchar(10) DEFAULT NULL,
  `Year` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marks_sem2`
--

CREATE TABLE IF NOT EXISTS `marks_sem2` (
  `USN` varchar(25) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `ex1` varchar(10) NOT NULL,
  `ex2` varchar(10) NOT NULL,
  `ex3` varchar(10) NOT NULL,
  `ex4` varchar(10) NOT NULL,
  `ex5` varchar(10) NOT NULL,
  `ex6` varchar(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `Year` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marks_sem3`
--

CREATE TABLE IF NOT EXISTS `marks_sem3` (
  `USN` varchar(25) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `ex1` varchar(10) DEFAULT NULL,
  `ex2` varchar(10) DEFAULT NULL,
  `ex3` varchar(10) DEFAULT NULL,
  `ex4` varchar(10) DEFAULT NULL,
  `ex5` varchar(10) DEFAULT NULL,
  `ex6` varchar(10) DEFAULT NULL,
  `ex7` varchar(10) DEFAULT NULL,
  `ex8` varchar(10) DEFAULT NULL,
  `ex9` varchar(10) DEFAULT NULL,
  `ex10` varchar(10) DEFAULT NULL,
  `batch` varchar(10) DEFAULT NULL,
  `Year` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marks_sem4`
--

CREATE TABLE IF NOT EXISTS `marks_sem4` (
  `USN` varchar(25) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `ex1` varchar(10) DEFAULT NULL,
  `ex2` varchar(10) DEFAULT NULL,
  `ex3` varchar(10) DEFAULT NULL,
  `ex4` varchar(10) DEFAULT NULL,
  `ex5` varchar(10) DEFAULT NULL,
  `ex6` varchar(10) DEFAULT NULL,
  `ex7` varchar(10) DEFAULT NULL,
  `ex8` varchar(10) DEFAULT NULL,
  `ex9` varchar(10) DEFAULT NULL,
  `ex10` varchar(10) DEFAULT NULL,
  `batch` varchar(10) DEFAULT NULL,
  `Year` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marks_sem5`
--

CREATE TABLE IF NOT EXISTS `marks_sem5` (
  `USN` varchar(25) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `ex1` varchar(10) DEFAULT NULL,
  `ex2` varchar(10) DEFAULT NULL,
  `ex3` varchar(10) DEFAULT NULL,
  `ex4` varchar(10) DEFAULT NULL,
  `ex5` varchar(10) DEFAULT NULL,
  `ex6` varchar(10) DEFAULT NULL,
  `ex7` varchar(10) DEFAULT NULL,
  `ex8` varchar(10) DEFAULT NULL,
  `ex9` varchar(10) DEFAULT NULL,
  `ex10` varchar(10) DEFAULT NULL,
  `batch` varchar(10) DEFAULT NULL,
  `Year` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marks_sem6`
--

CREATE TABLE IF NOT EXISTS `marks_sem6` (
  `USN` varchar(25) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `ex1` varchar(10) DEFAULT NULL,
  `ex2` varchar(10) DEFAULT NULL,
  `ex3` varchar(10) DEFAULT NULL,
  `ex4` varchar(10) DEFAULT NULL,
  `ex5` varchar(10) DEFAULT NULL,
  `ex6` varchar(10) DEFAULT NULL,
  `ex7` varchar(10) DEFAULT NULL,
  `ex8` varchar(10) DEFAULT NULL,
  `ex9` varchar(10) DEFAULT NULL,
  `ex10` varchar(10) DEFAULT NULL,
  `batch` varchar(10) DEFAULT NULL,
  `Year` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marks_sem7`
--

CREATE TABLE IF NOT EXISTS `marks_sem7` (
  `USN` varchar(25) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `ex1` varchar(10) NOT NULL,
  `ex2` varchar(10) NOT NULL,
  `ex3` varchar(10) NOT NULL,
  `ex4` varchar(10) NOT NULL,
  `ex5` varchar(10) NOT NULL,
  `ex6` varchar(10) NOT NULL,
  `batch` varchar(10) DEFAULT NULL,
  `Year` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `USN` varchar(255) NOT NULL,
  `sent_at` datetime NOT NULL,
  `read` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(80) NOT NULL,
  `USN` varchar(100) NOT NULL,
  `sem` int(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `mail_id` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `patent` varchar(100) NOT NULL,
  `parent_mail_id` varchar(100) NOT NULL,
  `parent_no` varchar(100) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `year` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `student_log`
--

CREATE TABLE IF NOT EXISTS `student_log` (
  `usn` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `experiments`
--
ALTER TABLE `experiments`
 ADD UNIQUE KEY `sem` (`sem`,`sub`,`experiment`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `lab_session`
--
ALTER TABLE `lab_session`
 ADD UNIQUE KEY `sub_name_2` (`batch`), ADD UNIQUE KEY `sub_name` (`sub_name`,`lab`,`batch`);

--
-- Indexes for table `logbook_final`
--
ALTER TABLE `logbook_final`
 ADD UNIQUE KEY `sid` (`sid`,`USN`);

--
-- Indexes for table `logbook_temp`
--
ALTER TABLE `logbook_temp`
 ADD PRIMARY KEY (`sid`,`USN`);

--
-- Indexes for table `marks_sem1`
--
ALTER TABLE `marks_sem1`
 ADD UNIQUE KEY `USN` (`USN`,`sub`);

--
-- Indexes for table `marks_sem2`
--
ALTER TABLE `marks_sem2`
 ADD UNIQUE KEY `USN` (`USN`,`sub`);

--
-- Indexes for table `marks_sem3`
--
ALTER TABLE `marks_sem3`
 ADD UNIQUE KEY `USN` (`USN`,`sub`);

--
-- Indexes for table `marks_sem4`
--
ALTER TABLE `marks_sem4`
 ADD UNIQUE KEY `USN` (`USN`,`sub`);

--
-- Indexes for table `marks_sem5`
--
ALTER TABLE `marks_sem5`
 ADD UNIQUE KEY `USN` (`USN`,`sub`);

--
-- Indexes for table `marks_sem6`
--
ALTER TABLE `marks_sem6`
 ADD UNIQUE KEY `USN` (`USN`,`sub`);

--
-- Indexes for table `marks_sem7`
--
ALTER TABLE `marks_sem7`
 ADD UNIQUE KEY `USN` (`USN`,`sub`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
 ADD PRIMARY KEY (`sid`), ADD UNIQUE KEY `activity` (`activity`,`sub`,`batch`), ADD UNIQUE KEY `activity_2` (`activity`,`sub`,`batch`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`USN`), ADD UNIQUE KEY `phone` (`mail_id`);

--
-- Indexes for table `student_log`
--
ALTER TABLE `student_log`
 ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
 ADD PRIMARY KEY (`sub_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logbook_temp`
--
ALTER TABLE `logbook_temp`
MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
