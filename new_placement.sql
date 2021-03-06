-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2017 at 05:47 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `new_placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `cur_date` date NOT NULL,
  `cur_time` time NOT NULL,
  `u_id` int(10) NOT NULL,
  `sent` varchar(10) NOT NULL DEFAULT 'n',
  PRIMARY KEY (`message_id`),
  KEY `user_id` (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`message_id`, `message`, `cur_date`, `cur_time`, `u_id`, `sent`) VALUES
(1, 'hi', '2017-03-22', '17:03:24', 2, 'n'),
(2, 'heelo', '2017-03-22', '17:06:53', 2, 'y');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `c_id` int(20) NOT NULL AUTO_INCREMENT,
  `cname` varchar(20) NOT NULL,
  `ccode` varchar(20) NOT NULL,
  `criteria` float NOT NULL,
  `deadline` date NOT NULL,
  `link` varchar(20) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`c_id`, `cname`, `ccode`, `criteria`, `deadline`, `link`) VALUES
(1, 'TCS', 'T5000', 3, '2017-03-31', ''),
(2, 'BridgeLabz', '123', 3, '2017-03-31', '');

-- --------------------------------------------------------

--
-- Table structure for table `dipmarks`
--

CREATE TABLE IF NOT EXISTS `dipmarks` (
  `sscmarks` int(10) NOT NULL,
  `sscoutoff` int(10) NOT NULL,
  `sscpercentage` float NOT NULL,
  `u_id` int(10) NOT NULL,
  `year1marks` int(10) NOT NULL,
  `year1outoff` int(10) NOT NULL,
  `year2marks` int(10) NOT NULL,
  `year2outoff` int(10) NOT NULL,
  `year3marks` int(10) NOT NULL,
  `year3outoff` int(10) NOT NULL,
  `totaldmarks` int(20) NOT NULL,
  `totaldoutoff` int(20) NOT NULL,
  `diplomapercentage` float NOT NULL,
  `sem3marks` int(10) NOT NULL,
  `sem3outoff` int(10) NOT NULL,
  `sem4marks` int(10) NOT NULL,
  `sem4outoff` int(10) NOT NULL,
  `sem5marks` int(10) NOT NULL,
  `sem5outoff` int(10) NOT NULL,
  `sem6marks` int(10) NOT NULL,
  `sem6outoff` int(10) NOT NULL,
  `sem7marks` int(10) NOT NULL,
  `sem7outoff` int(10) NOT NULL,
  `sem8marks` int(10) NOT NULL,
  `sem8outoff` int(10) NOT NULL,
  `totalmarks` int(20) NOT NULL,
  `totaloutoff` int(20) NOT NULL,
  `degreepointer` float NOT NULL,
  `livekt` int(10) NOT NULL,
  `deadkt` int(10) NOT NULL,
  `attempts` int(10) NOT NULL,
  `py1` int(10) NOT NULL,
  `py2` int(10) NOT NULL,
  `sy` int(10) NOT NULL,
  `py3` int(10) NOT NULL,
  `drops` int(10) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dipmarks`
--

INSERT INTO `dipmarks` (`sscmarks`, `sscoutoff`, `sscpercentage`, `u_id`, `year1marks`, `year1outoff`, `year2marks`, `year2outoff`, `year3marks`, `year3outoff`, `totaldmarks`, `totaldoutoff`, `diplomapercentage`, `sem3marks`, `sem3outoff`, `sem4marks`, `sem4outoff`, `sem5marks`, `sem5outoff`, `sem6marks`, `sem6outoff`, `sem7marks`, `sem7outoff`, `sem8marks`, `sem8outoff`, `totalmarks`, `totaloutoff`, `degreepointer`, `livekt`, `deadkt`, `attempts`, `py1`, `py2`, `sy`, `py3`, `drops`) VALUES
(464, 650, 71.38, 2, 654, 800, 750, 850, 950, 120, 2354, 1770, 132.99, 7, 25, 7, 24, 7, 26, 7, 23, 7, 26, 8, 25, 43, 149, 0.29, 0, 0, 0, 2009, 2013, 2013, 2016, 0);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE IF NOT EXISTS `guest` (
  `g_id` int(20) NOT NULL AUTO_INCREMENT,
  `gname` varchar(20) NOT NULL,
  `gemail` varchar(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`g_id`, `gname`, `gemail`, `cname`, `pwd`) VALUES
(1, 'HAmid ', 'noorihamid1994@gmail', 'BridgeLabz', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `hscmark`
--

CREATE TABLE IF NOT EXISTS `hscmark` (
  `sscmarks` int(20) NOT NULL,
  `sscoutoff` int(20) NOT NULL,
  `sscpercentage` float NOT NULL,
  `u_id` int(20) NOT NULL,
  `hscmarks` int(10) NOT NULL,
  `hscoutoff` int(10) NOT NULL,
  `hscpercentage` float NOT NULL,
  `sem1marks` int(10) NOT NULL,
  `sem1outoff` int(10) NOT NULL,
  `sem2marks` int(10) NOT NULL,
  `sem2outoff` int(10) NOT NULL,
  `sem3marks` int(10) NOT NULL,
  `sem3outoff` int(10) NOT NULL,
  `sem4marks` int(10) NOT NULL,
  `sem4outoff` int(10) NOT NULL,
  `sem5marks` int(10) NOT NULL,
  `sem5outoff` int(10) NOT NULL,
  `sem6marks` int(10) NOT NULL,
  `sem6outoff` int(10) NOT NULL,
  `sem7marks` int(10) NOT NULL,
  `sem7outoff` int(10) NOT NULL,
  `sem8marks` int(10) NOT NULL,
  `sem8outoff` int(10) NOT NULL,
  `totalmarks` int(10) NOT NULL,
  `totaloutoff` int(10) NOT NULL,
  `degreepointer` float NOT NULL,
  `livekt` int(10) NOT NULL,
  `deadkt` int(10) NOT NULL,
  `attempts` int(10) NOT NULL,
  `drops` int(10) NOT NULL,
  `py1` int(10) NOT NULL,
  `py2` int(10) NOT NULL,
  `sy` int(10) NOT NULL,
  `py3` int(10) NOT NULL,
  PRIMARY KEY (`u_id`),
  KEY `u_id` (`u_id`),
  KEY `u_id_2` (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hscmark`
--

INSERT INTO `hscmark` (`sscmarks`, `sscoutoff`, `sscpercentage`, `u_id`, `hscmarks`, `hscoutoff`, `hscpercentage`, `sem1marks`, `sem1outoff`, `sem2marks`, `sem2outoff`, `sem3marks`, `sem3outoff`, `sem4marks`, `sem4outoff`, `sem5marks`, `sem5outoff`, `sem6marks`, `sem6outoff`, `sem7marks`, `sem7outoff`, `sem8marks`, `sem8outoff`, `totalmarks`, `totaloutoff`, `degreepointer`, `livekt`, `deadkt`, `attempts`, `drops`, `py1`, `py2`, `sy`, `py3`) VALUES
(650, 700, 92.86, 6, 650, 700, 92.86, 7, 25, 7, 25, 7, 25, 7, 25, 7, 25, 7, 25, 7, 25, 7, 25, 56, 200, 0.28, 0, 0, 0, -1, 2009, 2012, 2013, 2016);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(300) NOT NULL,
  `message` text NOT NULL,
  `send_date` date NOT NULL,
  `send_time` time NOT NULL,
  `c_id` int(10) NOT NULL,
  PRIMARY KEY (`mail_id`),
  KEY `c_id` (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `message_list`
--

CREATE TABLE IF NOT EXISTS `message_list` (
  `t_id` int(10) NOT NULL AUTO_INCREMENT,
  `mail_id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `register` varchar(3) NOT NULL DEFAULT 'n',
  `round` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`t_id`),
  KEY `u_id` (`u_id`),
  KEY `mail_id` (`mail_id`),
  KEY `mail_id_2` (`mail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE IF NOT EXISTS `resume` (
  `u_id` int(25) NOT NULL,
  `address` varchar(250) NOT NULL,
  `project` varchar(250) NOT NULL,
  `miniproject` varchar(250) NOT NULL,
  `certification` varchar(200) NOT NULL,
  `sy1` varchar(20) NOT NULL,
  `py1` varchar(20) NOT NULL,
  `Hname` varchar(100) NOT NULL,
  `py2` varchar(10) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `py3` varchar(10) NOT NULL,
  `obj` varchar(150) NOT NULL,
  `langu` varchar(100) NOT NULL,
  `publication` varchar(150) NOT NULL,
  PRIMARY KEY (`u_id`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`u_id`, `address`, `project`, `miniproject`, `certification`, `sy1`, `py1`, `Hname`, `py2`, `sname`, `py3`, `obj`, `langu`, `publication`) VALUES
(2, 'Panvel', ' NA   ', 'NA', 'Na', '2013', '2016', 'ARKP', '2013', 'Yakub Baig School', '2009', 'Nothing', 'Java,c', 'Narayan Publication'),
(6, 'Mumbai', ' NA ', 'NA', 'NA', '2013', '2016', 'Sabu Engineering', '2013', 'ABC', '2009', 'NA', 'Java', 'Noting');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `stname` varchar(100) DEFAULT NULL,
  `faname` varchar(100) DEFAULT NULL,
  `moname` varchar(100) DEFAULT NULL,
  `u_id` int(50) NOT NULL DEFAULT '0',
  `smart_card` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `st_mobile` int(100) DEFAULT NULL,
  `pa_mobile` int(100) DEFAULT NULL,
  `r_number` int(100) DEFAULT NULL,
  `division` int(100) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `emailid` varchar(100) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `passyear` int(10) NOT NULL,
  `defaulter` tinyint(1) NOT NULL DEFAULT '0',
  `placed` tinyint(1) NOT NULL DEFAULT '0',
  `c_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`u_id`),
  KEY `u_id` (`u_id`),
  KEY `c_id` (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`stname`, `faname`, `moname`, `u_id`, `smart_card`, `dob`, `st_mobile`, `pa_mobile`, `r_number`, `division`, `branch`, `emailid`, `type`, `gender`, `passyear`, `defaulter`, `placed`, `c_id`) VALUES
('Hamid', 'Abdul Qadir', 'Noori', 2, '123456', '1994-09-20', 2147483647, 2147483647, 1, 4, 'comp', 'noorihamid1994@gmail.com', 'diploma', '', 2016, 0, 0, NULL),
('Yusuf', 'ABDUL ', 'MIss ABDul', 6, '12345', '1994-09-20', 123457890, 12457980, 30, 4, 'comp', 'yusuf@gmail.com', 'hsc', 'male', 2016, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `smartcard_no` varchar(50) NOT NULL,
  `valid` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `smartcard_no` (`smartcard_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `uname`, `password`, `smartcard_no`, `valid`) VALUES
(2, 'noorihamid', '123456', '123456', 1),
(6, 'Yusuf', '12345', '12345', 1),
(7, 'Suhail', '1234', '1234', 1),
(8, 'Hamid', '123', '123', 1),
(9, 'hamid', '123123', '123123', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dipmarks`
--
ALTER TABLE `dipmarks`
  ADD CONSTRAINT `dipmarks_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hscmark`
--
ALTER TABLE `hscmark`
  ADD CONSTRAINT `hscmark_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `company` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `message_list`
--
ALTER TABLE `message_list`
  ADD CONSTRAINT `message_list_ibfk_2` FOREIGN KEY (`mail_id`) REFERENCES `message` (`mail_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `message_list_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resume`
--
ALTER TABLE `resume`
  ADD CONSTRAINT `resume_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_details`
--
ALTER TABLE `student_details`
  ADD CONSTRAINT `student_details_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
