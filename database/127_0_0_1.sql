-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 12:05 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-03-12 05:34:38'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-03-12 05:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `contact` int(15) NOT NULL,
  `prelim` int(3) NOT NULL,
  `midterm` int(3) NOT NULL,
  `final` int(3) NOT NULL,
  `endterm` int(3) NOT NULL,
  `remarks` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`name`, `course`, `subject`, `department`, `gender`, `contact`, `prelim`, `midterm`, `final`, `endterm`, `remarks`) VALUES
('Jake Pomperada', 'BS Computer Science', 'Pascal Programming', 'Commerce', 'MALE', 4335081, 78, 89, 95, 90, 'PASSED'),
('Ma. Junallie Fuentebella', 'BS Chemical Engineering', 'Chemistry 1', 'Engineering', 'FEMALE', 4335675, 89, 78, 100, 91, 'PASSED'),
('Ana Tan', 'BS Accountancy', 'Financial Management', 'Commerce', 'FEMALE', 7078423, 78, 78, 79, 79, 'PASSED'),
('Tita Swarding', 'Mass Communication', 'Basic Journalism', 'Arts and Sciences', 'FEMALE', 7546348, 87, 89, 94, 91, 'PASSED'),
('Vincent Qui', 'BS Business Management', 'Accouting 101', 'Commerce', 'MALE', 999237563, 74, 83, 84, 82, 'PASSED'),
('Boy Cruz', 'BS Mathematics', 'Calculus', 'Education', 'MALE', 4567812, 65, 72, 76, 73, 'FAILED'),
('Juan Tamad', 'BS Secondary Education', 'Physical Education', 'Education', 'MALE', 4235562, 73, 65, 71, 70, 'FAILED');

-- --------------------------------------------------------

--
-- Table structure for table `plus_key`
--

CREATE TABLE IF NOT EXISTS `plus_key` (
  `userid` varchar(10) NOT NULL,
  `pkey` varchar(32) NOT NULL,
  `time` varchar(10) NOT NULL,
  `status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plus_key`
--

INSERT INTO `plus_key` (`userid`, `pkey`, `time`, `status`) VALUES
('121360', '47f902fdbf8726b9784cbe63524f95e3', '1521144016', 'pending'),
('122438', '70c0a27785c3568cd5cda0be968b7d4c', '1521144688', 'pending'),
('121360', '0e90d9306d4283dc95c10e535ea5dd1d', '1521302366', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `plus_login`
--

CREATE TABLE IF NOT EXISTS `plus_login` (
  `id` varchar(50) NOT NULL DEFAULT '',
  `userid` varchar(10) NOT NULL DEFAULT '',
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tm` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` char(3) NOT NULL DEFAULT 'ON'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plus_signup`
--

CREATE TABLE IF NOT EXISTS `plus_signup` (
  `mem_id` int(3) NOT NULL AUTO_INCREMENT,
  `userid` varchar(10) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `sex` varchar(6) NOT NULL DEFAULT '',
  `phone` varchar(222) NOT NULL,
  `dob` date NOT NULL,
  `soo` varchar(222) NOT NULL,
  `maritaltstatus` varchar(222) NOT NULL,
  `contactaddress` varchar(222) NOT NULL,
  `userPic` varchar(222) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `userid` (`userid`),
  UNIQUE KEY `mem_id` (`mem_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `plus_signup`
--

INSERT INTO `plus_signup` (`mem_id`, `userid`, `password`, `email`, `name`, `sex`, `phone`, `dob`, `soo`, `maritaltstatus`, `contactaddress`, `userPic`) VALUES
(29, '121360', 'e10adc3949ba59abbe56e057f20f883e', 'oluwasusiv@gmail.com', 'Oluwasusi Victor', 'male', '8100813300', '2018-03-03', 'Ohio', 'Single', 'No 4 Adesida Estate Alonge Igbatoro Road Akure', '719550.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblclasses`
--

CREATE TABLE IF NOT EXISTS `tblclasses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ClassName` varchar(80) DEFAULT NULL,
  `ClassNameNumeric` int(4) NOT NULL,
  `Section` varchar(30) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tblclasses`
--

INSERT INTO `tblclasses` (`id`, `ClassName`, `ClassNameNumeric`, `Section`, `CreationDate`, `UpdationDate`) VALUES
(1, '100H', 100, '2012/2013', '2018-03-12 18:36:33', '2018-03-12 07:00:00'),
(2, '100R', 100, '2012/2013', '2018-03-12 18:36:33', '2013-11-19 08:00:00'),
(4, '200R', 200, '2013/2014', '2018-03-12 19:05:04', '2015-03-19 16:00:31'),
(5, '300H', 300, '2014/2015', '2018-03-12 19:05:04', '0000-00-00 00:00:00'),
(8, '200H', 100, '2013/2014', '2018-03-12 18:37:27', '2018-03-12 19:03:46'),
(9, '300R', 300, '2014/2015', '2018-03-12 19:06:28', '0000-00-00 00:00:00'),
(10, '400H', 400, '2015/2016', '2018-03-12 19:06:28', '0000-00-00 00:00:00'),
(11, '400R', 400, '2015/2016', '2018-03-12 19:08:12', '0000-00-00 00:00:00'),
(12, '500H', 500, '2016/2017', '2018-03-12 19:08:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblresult`
--

CREATE TABLE IF NOT EXISTS `tblresult` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `StudentId` int(11) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `marks` varchar(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `tblresult`
--

INSERT INTO `tblresult` (`id`, `StudentId`, `ClassId`, `SubjectId`, `marks`, `PostingDate`, `UpdationDate`) VALUES
(20, 7, 1, 12, '28', '2018-03-12 19:22:33', '2018-03-14 18:35:02'),
(21, 7, 1, 14, '63', '2018-03-12 19:22:33', '2018-03-14 18:34:50'),
(22, 7, 1, 21, '78', '2018-03-12 19:22:34', '2018-03-14 18:34:50'),
(23, 7, 1, 15, '51', '2018-03-12 19:22:34', NULL),
(24, 7, 1, 11, '39', '2018-03-12 19:22:34', '2018-03-14 18:34:50'),
(25, 7, 1, 13, '78', '2018-03-12 19:22:34', NULL),
(26, 7, 1, 20, '67', '2018-03-12 19:22:34', NULL),
(27, 7, 1, 19, '69', '2018-03-12 19:22:34', '2018-03-16 08:24:21'),
(30, 8, 10, 22, '72', '2018-03-14 17:02:27', NULL),
(31, 8, 10, 23, '61', '2018-03-14 17:02:27', NULL),
(32, 9, 12, 24, '12', '2018-03-15 07:39:40', '2018-03-15 07:40:37'),
(33, 10, 1, 12, '45', '2018-03-16 23:07:54', NULL),
(34, 10, 1, 14, '76', '2018-03-16 23:07:54', NULL),
(35, 10, 1, 21, '26', '2018-03-16 23:07:54', '2018-03-17 00:46:02'),
(36, 10, 1, 15, '65', '2018-03-16 23:07:54', NULL),
(37, 10, 1, 11, '84', '2018-03-16 23:07:54', NULL),
(38, 10, 1, 13, '54', '2018-03-16 23:07:54', NULL),
(39, 10, 1, 20, '39', '2018-03-16 23:07:54', '2018-03-17 00:46:02'),
(40, 10, 1, 19, '65', '2018-03-16 23:07:54', NULL),
(41, 10, 1, 17, '87', '2018-03-16 23:07:54', NULL),
(42, 10, 1, 18, '-', '2018-03-16 23:07:54', '2018-03-17 00:46:02'),
(43, 12, 12, 24, '39', '2018-03-17 13:09:38', '2018-03-17 13:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE IF NOT EXISTS `tblstudents` (
  `StudentId` int(11) NOT NULL AUTO_INCREMENT,
  `StudentName` varchar(100) NOT NULL,
  `Rollid` varchar(6) NOT NULL,
  `StudentEmail` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `ClassId` int(11) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Status` int(1) NOT NULL,
  PRIMARY KEY (`StudentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`StudentId`, `StudentName`, `Rollid`, `StudentEmail`, `Gender`, `DOB`, `ClassId`, `RegDate`, `UpdationDate`, `Status`) VALUES
(8, 'Modupeola Temiloluwa O', '122438', 'oluwasusiv@gmail.com', 'Male', '', 10, '2018-03-14 16:49:12', '2018-03-14 16:50:47', 1),
(9, 'Fabumi Oluwaseun', '114929', 'oluwasusiv@gmail.com', 'Male', '', 12, '2018-03-15 07:37:03', NULL, 1),
(10, 'Oluwasusi Victor Ayodeji', '121360', 'oluwasusiv@gmail.com', 'Male', '', 1, '2018-03-16 23:04:52', '2018-03-16 23:06:31', 0),
(11, 'Oluwasusi Victor Ayodeji', '121360', 'oluwasusiv@gmail.com', 'Male', '2018-03-15', 10, '2018-03-17 00:41:06', NULL, 1),
(12, 'Oluwasusi Victor Ayodeji', '121360', 'oluwasusiv@gmail.com', 'Male', '2018-03-15', 12, '2018-03-17 00:41:27', NULL, 1),
(13, 'Oluwasusi Victor', '121360', 'oluwasusiv@gmail.com', 'Male', '2018-03-16', 11, '2018-03-17 02:23:48', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjectcombination`
--

CREATE TABLE IF NOT EXISTS `tblsubjectcombination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ClassId` int(11) NOT NULL,
  `SubjectId` int(11) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tblsubjectcombination`
--

INSERT INTO `tblsubjectcombination` (`id`, `ClassId`, `SubjectId`, `status`, `CreationDate`, `Updationdate`) VALUES
(15, 1, 11, 1, '2018-03-12 19:18:45', '2018-03-12 19:18:45'),
(16, 1, 12, 1, '2018-03-12 19:18:51', '2018-03-12 19:18:51'),
(17, 1, 13, 1, '2018-03-12 19:18:58', '2018-03-12 19:18:58'),
(18, 1, 14, 1, '2018-03-12 19:19:05', '2018-03-12 19:19:05'),
(19, 1, 15, 1, '2018-03-12 19:19:11', '2018-03-12 19:19:11'),
(20, 1, 16, 1, '2018-03-12 19:19:17', '2018-03-12 19:19:17'),
(21, 1, 17, 1, '2018-03-12 19:19:23', '2018-03-12 19:19:23'),
(22, 1, 18, 1, '2018-03-12 19:19:36', '2018-03-12 19:19:36'),
(23, 1, 19, 1, '2018-03-12 19:19:42', '2018-03-12 19:19:42'),
(24, 1, 20, 1, '2018-03-12 19:19:49', '2018-03-12 19:19:49'),
(25, 1, 21, 1, '2018-03-12 19:20:00', '2018-03-12 19:20:00'),
(26, 10, 23, 1, '2018-03-14 16:51:05', '2018-03-14 16:51:05'),
(27, 10, 22, 1, '2018-03-14 16:51:12', '2018-03-14 16:51:12'),
(28, 12, 24, 1, '2018-03-15 07:39:19', '2018-03-15 07:39:19'),
(29, 12, 25, 1, '2018-03-17 13:14:45', '2018-03-17 13:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE IF NOT EXISTS `tblsubjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SubjectName` varchar(100) NOT NULL,
  `SubjectCode` varchar(100) NOT NULL,
  `SubjectUnit` varchar(2) NOT NULL,
  `Creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`id`, `SubjectName`, `SubjectCode`, `SubjectUnit`, `Creationdate`, `UpdationDate`) VALUES
(11, 'General Biology I ', 'BIO101', '3', '2018-03-12 19:14:40', '2018-03-12 19:23:35'),
(12, 'Experimental Biology I ', 'BIO103', '1', '2018-03-12 19:15:06', '2018-03-12 19:23:42'),
(13, 'General Chemistry I ', 'CHM101', '4', '2018-03-12 19:15:39', '2018-03-12 19:23:50'),
(14, 'Experimental Chemistry I ', 'CHM191', '1', '2018-03-12 19:15:57', '2018-03-12 19:23:55'),
(15, 'Fundamental Of Drawing', 'FAA101', '2', '2018-03-12 19:16:21', '2018-03-12 19:23:58'),
(17, 'Use Of English I', 'GNS101', '2', '2018-03-12 19:16:48', '2018-03-12 19:24:02'),
(18, 'Use Of Library ', 'LIB101', '0', '2018-03-12 19:17:11', '2018-03-12 19:26:45'),
(19, 'Mathematical Methods I', 'MTH101', '5', '2018-03-12 19:17:40', '2018-03-12 19:24:06'),
(20, 'General Physics I', 'PHY101', '4', '2018-03-12 19:18:09', '2018-03-12 19:24:55'),
(21, 'Experimental Physics I', 'PHY103', '1', '2018-03-12 19:18:27', '2018-03-12 19:24:22'),
(22, 'Lebesque Measure And Integration ', 'MTH 407', '3', '2018-03-14 16:49:57', '2018-03-14 17:13:08'),
(23, 'Mathematical Modeling ', '405', '3', '2018-03-14 16:50:10', '2018-03-14 17:12:29'),
(24, 'MTH507', 'MTH507', '3', '2018-03-15 07:38:58', '2018-03-15 15:16:37'),
(25, '509', '3', '3', '2018-03-17 13:14:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `UserName`, `Password`) VALUES
(1, 'victor', 'victor');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
