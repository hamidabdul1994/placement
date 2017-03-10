-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2016 at 07:07 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `reg_id` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`reg_id`, `password`) VALUES
('1234', 'sakecweb');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `message_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `cur_date` date NOT NULL,
  `cur_time` time NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `sent` varchar(10) NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`message_id`, `message`, `cur_date`, `cur_time`, `user_id`, `sent`) VALUES
(1, 'test', '0000-00-00', '00:00:00', '10230', 'n'),
(2, 'askdgasd', '2016-02-01', '11:40:23', '10230', 'n'),
(3, 'askdgasd', '2016-02-01', '11:40:44', '10230', 'n'),
(5, 'test123', '2016-02-01', '12:07:48', '10230', 'n'),
(6, 'testhgkj', '2016-02-01', '12:09:49', '10230', 'n'),
(7, '', '2016-02-01', '12:11:47', '10230', 'n'),
(8, 'hie', '2016-02-05', '16:24:10', '10230', 'n'),
(9, 'test1234', '2016-02-05', '16:24:44', '10230', 'y'),
(10, 'hiee', '2016-02-07', '23:44:58', '10231', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `c_id` int(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `ccode` varchar(20) NOT NULL,
  `criteria` float NOT NULL,
  `deadline` date NOT NULL,
  `link` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`c_id`, `cname`, `ccode`, `criteria`, `deadline`, `link`) VALUES
(1, 'tcs', 'tcs_2016', 3, '2016-04-30', ''),
(2, 'lnt', 'lnt-2016', 5, '2016-04-01', '');

-- --------------------------------------------------------

--
-- Table structure for table `dipmarks`
--

CREATE TABLE `dipmarks` (
  `sscmarks` int(10) NOT NULL,
  `sscoutoff` int(10) NOT NULL,
  `sscpercentage` float NOT NULL,
  `reg_id` int(10) NOT NULL,
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
  `drops` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `g_id` int(20) NOT NULL,
  `gname` varchar(20) NOT NULL,
  `gemail` varchar(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`g_id`, `gname`, `gemail`, `cname`, `pwd`) VALUES
(1, 'Forum Sheth', 'forumsheth@gmail.com', 'atos', '1234'),
(2, 'sunny jain', 'sunnykhabia66@gmail.', 'tcs', ''),
(3, 'fori', 'forumsheth@gmail.com', 'lnt', ''),
(4, 'Forum Sheth', 'forumsheth@gmail.com', 'igate', ''),
(5, 'leela jain', 'leela34@gmail.com', 'mindcraft', '');

-- --------------------------------------------------------

--
-- Table structure for table `hscmark`
--

CREATE TABLE `hscmark` (
  `sscmarks` int(20) NOT NULL,
  `sscoutoff` int(20) NOT NULL,
  `sscpercentage` float NOT NULL,
  `reg_id` int(20) NOT NULL,
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
  `py3` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hscmark`
--

INSERT INTO `hscmark` (`sscmarks`, `sscoutoff`, `sscpercentage`, `reg_id`, `hscmarks`, `hscoutoff`, `hscpercentage`, `sem1marks`, `sem1outoff`, `sem2marks`, `sem2outoff`, `sem3marks`, `sem3outoff`, `sem4marks`, `sem4outoff`, `sem5marks`, `sem5outoff`, `sem6marks`, `sem6outoff`, `sem7marks`, `sem7outoff`, `sem8marks`, `sem8outoff`, `totalmarks`, `totaloutoff`, `degreepointer`, `livekt`, `deadkt`, `attempts`, `drops`, `py1`, `py2`, `sy`, `py3`) VALUES
(507, 550, 92, 9814, 519, 600, 87, 203, 27, 214, 27, 187, 28, 242, 28, 187, 24, 200, 24, 0, 0, 0, 0, 1233, 158, 7.8, 0, 0, 0, 2, 2010, 2016, 2010, 2016),
(528, 550, 96, 9827, 525, 600, 88, 187, 27, 196, 27, 178, 28, 194, 28, 168, 24, 153, 24, 0, 0, 0, 0, 1076, 158, 6.81, 1, 2, 2, 0, 2010, 2016, 2012, 2016),
(481, 550, 87, 9830, 522, 600, 87, 209, 27, 224, 27, 194, 28, 246, 28, 196, 24, 212, 24, 0, 0, 0, 0, 1281, 158, 8.1, 1, 3, 3, 0, 2010, 2012, 2012, 2016),
(461, 550, 84, 9835, 414, 600, 69, 154, 27, 162, 27, 171, 28, 177, 28, 159, 24, 169, 24, 191, 25, 0, 0, 1183, 183, 6.46, 2, 1, 1, 0, 2009, 2012, 2012, 2016),
(493, 550, 90, 9836, 420, 600, 70, 160, 27, 186, 27, 186, 28, 199, 28, 165, 24, 156, 24, 0, 0, 0, 0, 1052, 158, 6.65, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(477, 550, 87, 9837, 524, 600, 87, 227, 27, 239, 27, 244, 28, 235, 28, 198, 24, 170, 24, 0, 0, 0, 0, 1313, 158, 8.31, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(496, 550, 90, 9839, 429, 600, 72, 163, 27, 166, 27, 150, 28, 158, 28, 178, 24, 160, 24, 198, 25, 0, 0, 1173, 183, 6.4, 4, 5, 5, 0, 2010, 2012, 2012, 2016),
(448, 550, 81, 9913, 444, 600, 74, 164, 27, 182, 27, 177, 28, 201, 28, 154, 24, 167, 24, 203, 25, 0, 0, 1248, 183, 6.81, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(414, 550, 75, 9914, 411, 600, 69, 166, 27, 181, 27, 162, 28, 187, 28, 161, 24, 155, 24, 203, 25, 0, 0, 1215, 183, 6.63, 0, 1, 1, 0, 2010, 2012, 2012, 2016);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mail_id` int(11) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message` text NOT NULL,
  `send_date` date NOT NULL,
  `send_time` time NOT NULL,
  `company_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mail_id`, `subject`, `message`, `send_date`, `send_time`, `company_id`) VALUES
(7, 'tcs registration', '', '2016-04-21', '13:31:58', '1');

-- --------------------------------------------------------

--
-- Table structure for table `message_list`
--

CREATE TABLE `message_list` (
  `t_id` int(10) NOT NULL,
  `mail_id` varchar(10) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `register` varchar(3) NOT NULL DEFAULT 'n',
  `round` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_list`
--

INSERT INTO `message_list` (`t_id`, `mail_id`, `user_id`, `register`, `round`) VALUES
(19, '7', '9914', 'y', '1'),
(20, '7', '9827', 'y', '3'),
(21, '7', '9836', 'y', '1'),
(22, '7', '9835', 'y', '3'),
(23, '7', '9839', 'y', '1');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `reg_id` int(25) NOT NULL,
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
  `publication` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`reg_id`, `address`, `project`, `miniproject`, `certification`, `sy1`, `py1`, `Hname`, `py2`, `sname`, `py3`, `obj`, `langu`, `publication`) VALUES
(9803, '45/352, SHRIJI SADAN, CHANDAVARKAR ROAD, MATUNGA, MUMBAI-400019\r\n', 'Sakec ', 'no', 'no', '2012', ' 2016', 'K.J Somaiya College Of Science And Commerce', ' 2012', 'Vani Vidyalaya', '2010', 'to be an engineer', 'no', ''),
(9814, '', ' sakec', 'no', 'no', '2012', ' 2016', 'K.J Somaiya College Of Science And Commerce', ' 2012', 'Vani Vidyalaya', '2010', 'to be an engineer', 'no', ''),
(9816, '', ' ', '', '', '2012', ' 2016', 'K.J Somaiya College Of Science And Commerce', ' 2012', 'Vani Vidyalaya', '2010', '', '', ''),
(9827, '', ' ', '', '', '2012', ' 2016', 'K.J Somaiya College Of Science And Commerce', ' 2012', 'Vani Vidyalaya', '2010', '', '', ''),
(9830, '', ' ', '', '', '2012', ' 2016', 'K.J Somaiya College Of Science And Commerce', ' 2012', 'Vani Vidyalaya', '2010', '', '', ''),
(9835, '', ' ', '', '', '2012', '2016', 'K.J Somaiya College Of Science And Commerce', ' 2012', 'Vani Vidyalaya', '2009', '', '', ''),
(9836, '', ' ', '', '', '2012', '2016', 'K.J Somaiya College Of Science And Commerce', '2012', 'Vani Vidyalaya', '2010', '', '', ''),
(9837, '', ' ', '', '', '2012', ' 2016', 'K.J Somaiya College Of Science And Commerce', ' 2012', 'Vani Vidyalaya', '2010', '', '', ''),
(9839, '', ' ', '', '', '2012', ' 2016', 'K.J Somaiya College Of Science And Commerce', ' 2012', 'Vani Vidyalaya', '2010', '', '', ''),
(9913, '706, 3E-Heritage apts, Ganesh Gawde Road, Mulund-west, Mumbai-400080.', 'SAKEC PLACEMENT PORTAL FOR CBGS\r\nOur college maintains a comprehensive website to detail out various aspects & functions of this institution. We took upon a task to overhaul the experience on the Placements section of the website. This section is use', '1. Bakery Website\r\nA website which gives information about the different types of bakery products available.\r\n\r\n2. Disk Management\r\nPrepared a GUI for Disk Management for implementing different disk management commands. \r\n', 'NO', '2012', ' 2016', 'K.J Somaiya College Of Science And Commerce', ' 2012', 'Vani Vidyalaya', '2010', 'Seeking challenging assignments in a technology driven, growth oriented organization, which shall he', 'C, Java, HTML, MS Of', 'NO'),
(9914, '601,MARUTI ASHISH,J.N  RD,MULUND (WEST),MUMBAI-80.', ' Sakec placement portal', 'no', 'no', '2012', ' 2016', 'S.K Somaiya College Of Science And Commerce', ' 2012', 'Vani Vidyalaya', '2010', 'to be an engineer', 'no', ''),
(9999, '', ' ', '', '', '2012', ' 2016', 'S.M.SHETTY', '2013', 'POWAI ENGLISH HIGH SCHOOL', '2010', 'BE THE WEBMASTER', '', ''),
(10230, 'I.I.T MAINGATE', 'SAKEC PLACEMENT FOR CBGS ', 'MINIPROJECTS', 'NO', '2012', '2016', 'S.M.SHETTY', '2012', 'POWAI ENGLISH HIGH School', '2010', 'BE THE WEBMASTER', 'C,JAVA', ''),
(11034, '', ' ', '', '', '2012', ' 2016', 'K.J Somaiya College Of Science And Commerce', ' 2012', 'Vani Vidyalaya', '2010', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `stname` varchar(100) DEFAULT NULL,
  `faname` varchar(100) DEFAULT NULL,
  `moname` varchar(100) DEFAULT NULL,
  `reg_id` int(50) NOT NULL DEFAULT '0',
  `smart_card` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `st_mobile` varchar(100) DEFAULT NULL,
  `pa_mobile` varchar(100) DEFAULT NULL,
  `r_number` int(100) DEFAULT NULL,
  `division` int(100) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `emailid` varchar(100) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `passyear` int(10) NOT NULL,
  `defaulter` varchar(20) NOT NULL DEFAULT 'n',
  `placed` varchar(1) NOT NULL DEFAULT 'n',
  `company_id` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`stname`, `faname`, `moname`, `reg_id`, `smart_card`, `dob`, `st_mobile`, `pa_mobile`, `r_number`, `division`, `branch`, `emailid`, `type`, `gender`, `passyear`, `defaulter`, `placed`, `company_id`) VALUES
(' KINJAL MEHTA', 'PRAVIN MEHTA', 'MEHTA', 9803, 'M2012CM1001', '1994-10-26', '9022733240', '9969575851', 29, 3, 'comp', 'mehtakinjal2610@gmail.com', 'hsc', 'female', 2016, 'y', 'n', ''),
(' MANSI CHHEDA', 'HASMUKH CHHEDA', 'CHHEDA', 9814, 'M2012CM1002', '1994-12-24', '9870445993', '9870307083', 11, 3, 'comp', 'mansichheda.2016@gmail.com', 'hsc', 'female', 2016, 'n', 'n', ''),
('BHAVIN PARMAR ', 'DILIP PARMAR ', 'PARMAR ', 9816, 'M2012CM1003', '1994-05-27', '9930047921', '9969481235', 15, 4, 'comp', 'bhavinparmar.2016@hotmail.com', 'hsc', 'male', 2016, 'y', 'n', ''),
('KRISHMA ', 'PARESH SHAH ', 'SHAH ', 9827, 'M2012CM1004', '1994-10-25', '9819252072', '9820900662', 55, 4, 'it', 'krishmashah.2016@gmail.com', 'hsc', 'female', 2016, 'n', 'y', '1'),
(' RACHIT NANDU', 'SANJAY NANDU', 'NANDU', 9830, 'M2012CM1005', '1994-12-29', '9029028077', '9869264088', 47, 1, 'elec', 'rachitnandu2016@gmail.com', 'hsc', 'male', 2016, 'n', 'n', ''),
('JIGAR GALA ', ' NAVIN GALA ', 'GALA ', 9835, 'M2012CM1007', '1994-10-12', '9819257660', '9920736110', 17, 7, 'extc', 'jigargala.2016@gmail.com', 'hsc', 'female', 2016, 'n', 'y', '1'),
('MANAN  SHAH ', 'GAURANG  SHAH ', ' SHAH ', 9836, 'M2012CM1008', '1994-03-14', '9820329710', '9820329710', 49, 5, 'it', 'mananshah.2016@gmail.com', 'hsc', 'male', 2016, 'n', 'n', ''),
('KHUSAL  SHAH ', ' RAMESH SHAH ', ' SHAH ', 9837, 'M2012CM1009', '1995-01-30', '9757473749', '9821134640', 50, 2, 'elec', 'khusalshah.2016@gmail.com', 'hsc', 'male', 2016, 'n', 'n', ''),
(' SALONI  BARVALIA', 'ANIL BARVALIA', 'BARVALIA', 9839, 'M2012CM1010', '1994-04-08', '7738344494', '9322245836', 10, 7, 'extc', 'salonibarvalia.2016@gmail.com', 'hsc', 'female', 2016, 'n', 'n', ''),
('Forum Sheth', 'Rajen Sheth', 'Bindu Sheth', 9913, 'M2012CM1052', '1994-09-15', '9029710205', '9892306614', 59, 3, 'comp', 'forumsheth@gmail.com', 'hsc', 'female', 2016, 'n', 'n', ''),
('Leela', 'Yashwantraj', 'Shantadevi', 9914, 'M2012CM1053', '1994-10-21', '8080855649', '9029735796', 18, 3, 'comp', 'leelajain34@gmail.com', 'hsc', 'female', 2016, 'n', 'n', ''),
(' ADITI GADA', 'UTKAL GADA', 'GADA', 11034, 'M2013IT2601', '1994-10-19', '8082762275', '9869767187', 27, 5, 'IT', 'aditigada.2016@gmail.com', 'diploma', 'female', 2016, 'n', 'n', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `reg_id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `smartcard_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`reg_id`, `uname`, `password`, `smartcard_no`) VALUES
(9803, 'MEHTA KINJAL PRAVIN\r\n', '12345', 'M2012CM1001'),
(9814, 'CHHEDA MANSI HASMUKH\r\n', '12345', 'M2012CM1002'),
(9816, '\r\nPARMAR BHAVIN DILIP\r\n', '12345', 'M2012CM1003'),
(9827, 'SHAH KRISHMA PARESH\r\n', '12345', 'M2012CM1004'),
(9830, 'NANDU RACHIT SANJAY\r\n', '12345', 'M2012CM1005'),
(9835, 'GALA JIGAR NAVIN\r\n', '12345', 'M2012CM1007'),
(9836, 'SHAH MANAN \r\n', '12345', 'M2012CM1008'),
(9837, 'SHAH KHUSAL RAMESH\r\n', '12345', 'M2012CM1009'),
(9839, 'BARVALIA SALONI ANIL\r\n', '12345', 'M2012CM1010'),
(9913, 'Forum Sheth', 'forum', 'M2012CM1052'),
(9914, 'Leela Jain', 'leela', 'M2012CM1053'),
(10230, 'sunny jain', 'abcd', 'C2012CM1110'),
(11034, 'GADA ADITI UTKAL\r\n', '12345', 'M2013IT2601'),
(11037, 'DOSHI BHAKTI SANJAY\r\n', '12345', 'M2013IT2602'),
(11038, 'CHHEDA UMANG HARSHAD\r\n', '12345', 'M2013IT2603'),
(11039, 'DOSHI NIRAV RAJNIKANT\r\n', '12345', 'M2013CM2002'),
(11040, 'VORA VIRAL BHUPENDRA\r\n', '12345', 'M2013CM2003'),
(11041, 'SHAH DARSHAK KETAN\r\n', '12345', 'M2013CM2004'),
(11043, 'CHHEDA SMIT SANJAY\r\n', '12345', 'M2013IT2604'),
(11044, 'CHHEDA JAY GIRISH\r\n', '12345', 'M2013CM2006'),
(11045, 'GOSALIA MIHIR NITIN\r\n', '12345', 'M2013CM2007'),
(11047, 'MEHTA NAYAN ANIL\r\n', '12345', 'M2013CM2008');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `dipmarks`
--
ALTER TABLE `dipmarks`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `hscmark`
--
ALTER TABLE `hscmark`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mail_id`);

--
-- Indexes for table `message_list`
--
ALTER TABLE `message_list`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `g_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `message_list`
--
ALTER TABLE `message_list`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
