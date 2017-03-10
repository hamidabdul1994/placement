-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2017 at 09:07 AM
-- Server version: 10.1.8-MariaDB
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
(10, 'hiee', '2016-02-07', '23:44:58', '10231', 'n'),
(11, 'hey ', '2016-04-22', '12:19:55', '9914', 'n');

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

--
-- Dumping data for table `dipmarks`
--

INSERT INTO `dipmarks` (`sscmarks`, `sscoutoff`, `sscpercentage`, `reg_id`, `year1marks`, `year1outoff`, `year2marks`, `year2outoff`, `year3marks`, `year3outoff`, `totaldmarks`, `totaldoutoff`, `diplomapercentage`, `sem3marks`, `sem3outoff`, `sem4marks`, `sem4outoff`, `sem5marks`, `sem5outoff`, `sem6marks`, `sem6outoff`, `sem7marks`, `sem7outoff`, `sem8marks`, `sem8outoff`, `totalmarks`, `totaloutoff`, `degreepointer`, `livekt`, `deadkt`, `attempts`, `py1`, `py2`, `sy`, `py3`, `drops`) VALUES
(530, 650, 81.54, 9990, 598, 900, 992, 1550, 1122, 1450, 2712, 3900, 69.54, 170, 26, 217, 28, 202, 28, 149, 23, 0, 0, 0, 0, 738, 105, 7.03, 0, 2, 1, 2008, 2013, 2013, 2016, 0),
(448, 550, 81.45, 9991, 1098, 1675, 1126, 1575, 1174, 1550, 3398, 4800, 70.79, 209, 28, 200, 28, 166, 24, 176, 24, 0, 0, 0, 0, 751, 104, 7.22, 0, 1, 1, 2010, 2013, 2012, 2016, 1),
(411, 650, 63.23, 9992, 946, 1675, 1004, 1625, 1182, 1600, 3132, 4900, 63.92, 147, 24, 127, 24, 100, 16, 97, 20, 0, 0, 0, 0, 471, 84, 5.61, 4, 6, 4, 2008, 2013, 2013, 2016, 0),
(486, 550, 88.36, 9993, 1224, 1550, 1222, 1750, 1411, 1750, 3857, 5050, 76.38, 167, 26, 191, 28, 207, 27, 200, 28, 0, 0, 0, 0, 765, 109, 7.02, 0, 1, 1, 2010, 2013, 2013, 2016, 0),
(404, 650, 62.15, 9995, 1120, 1675, 1067, 1575, 1162, 1550, 3349, 4800, 69.77, 181, 28, 188, 28, 155, 24, 183, 24, 0, 0, 0, 0, 707, 104, 6.8, 0, 1, 2, 2008, 2013, 2013, 2016, 0),
(437, 550, 79.45, 9996, 1087, 1675, 1224, 1550, 1373, 1600, 3684, 4825, 76.35, 209, 28, 170, 28, 186, 26, 178, 25, 0, 0, 0, 0, 743, 107, 6.94, 0, 1, 2, 2010, 2013, 2013, 2016, 0),
(491, 550, 89.27, 9997, 1203, 1675, 1151, 1575, 1162, 1550, 3516, 4800, 73.25, 175, 28, 191, 28, 158, 24, 167, 24, 0, 0, 0, 0, 691, 104, 6.64, 0, 1, 2, 2010, 2013, 2012, 2016, 1),
(372, 550, 67.64, 9999, 1073, 1675, 1170, 1575, 1190, 1550, 3433, 4800, 71.52, 173, 28, 184, 28, 163, 24, 176, 24, 0, 0, 0, 0, 696, 104, 6.69, 0, 1, 1, 2010, 2013, 2013, 2016, 0),
(476, 550, 86.55, 10000, 1038, 1675, 1049, 1575, 1185, 1550, 3272, 4800, 68.17, 183, 28, 199, 28, 175, 24, 155, 24, 0, 0, 0, 0, 712, 104, 6.85, 0, 3, 1, 2010, 2013, 2013, 2016, 0),
(467, 550, 84.91, 10002, 1266, 1675, 1098, 1575, 1162, 1550, 3526, 4800, 73.46, 188, 28, 186, 28, 133, 20, 158, 24, 0, 0, 0, 0, 665, 100, 6.65, 0, 0, 0, 2010, 2013, 2013, 2016, 0),
(425, 550, 77.27, 10016, 1044, 1550, 1057, 1750, 1358, 1750, 3459, 5050, 68.5, 160, 26, 176, 28, 181, 28, 137, 27, 0, 0, 0, 0, 654, 109, 6, 0, 2, 1, 2010, 2013, 2013, 2016, 0),
(452, 550, 82.18, 10017, 1077, 1675, 989, 1575, 1123, 1550, 3189, 4800, 66.44, 167, 28, 172, 28, 169, 24, 159, 24, 0, 0, 0, 0, 667, 104, 6.41, 0, 3, 3, 2010, 2013, 2013, 2016, 0),
(414, 650, 63.69, 10019, 996, 1675, 1077, 1575, 1135, 1550, 3208, 4800, 66.83, 191, 28, 185, 28, 142, 24, 131, 20, 0, 0, 0, 0, 649, 100, 6.49, 1, 3, 6, 2008, 2013, 2013, 2016, 0),
(458, 550, 83.27, 10021, 1071, 1675, 1005, 1550, 1200, 1600, 3276, 4825, 67.9, 167, 28, 162, 28, 191, 26, 201, 25, 0, 0, 0, 0, 721, 107, 6.74, 0, 2, 1, 2010, 2013, 2013, 2016, 0),
(494, 550, 89.82, 10022, 1056, 1675, 1001, 1575, 1148, 1550, 3205, 4800, 66.77, 201, 28, 190, 28, 161, 24, 172, 24, 0, 0, 0, 0, 724, 104, 6.96, 0, 4, 6, 2010, 2013, 2013, 2016, 0),
(501, 550, 91.09, 10023, 1211, 1550, 1297, 1750, 1359, 1750, 3867, 5050, 76.57, 188, 26, 240, 28, 234, 28, 182, 27, 0, 0, 0, 0, 844, 109, 7.74, 0, 0, 0, 2010, 2013, 2013, 2016, 0),
(497, 550, 90.36, 10024, 1201, 1550, 1231, 1750, 1345, 1750, 3777, 5050, 74.79, 169, 26, 191, 28, 186, 28, 0, 0, 0, 0, 0, 0, 546, 82, 6.66, 4, 0, 0, 2010, 2013, 2013, 2016, 0),
(460, 550, 83.64, 10026, 1116, 1550, 1317, 1750, 1417, 1750, 3850, 5050, 76.24, 203, 26, 237, 28, 252, 28, 204, 27, 0, 0, 0, 0, 896, 109, 8.22, 0, 0, 0, 2010, 2013, 2013, 2016, 0),
(497, 550, 90.36, 10057, 816, 1270, 1286, 1945, 1004, 1370, 3106, 4585, 67.74, 185, 28, 182, 28, 176, 26, 177, 25, 0, 0, 0, 0, 720, 107, 6.73, 0, 2, 3, 2010, 2013, 2013, 2016, 0),
(351, 500, 70.2, 10058, 1167, 1675, 1025, 1575, 1178, 1550, 3370, 4800, 70.21, 147, 24, 134, 24, 154, 24, 0, 0, 0, 0, 0, 0, 435, 72, 6.04, 2, 4, 9, 2010, 2013, 2013, 2016, 0),
(457, 650, 70.31, 10059, 951, 1550, 1123, 1750, 1336, 1750, 3410, 5050, 67.52, 164, 26, 168, 28, 175, 28, 133, 27, 0, 0, 0, 0, 640, 109, 5.87, 0, 0, 0, 2010, 2013, 2013, 2016, 0),
(514, 650, 79.08, 10061, 1134, 1675, 1002, 1575, 1176, 1550, 3312, 4800, 69, 182, 28, 186, 28, 159, 24, 189, 24, 0, 0, 0, 0, 716, 104, 6.88, 0, 0, 0, 2008, 2013, 2013, 2016, 0),
(599, 650, 92.15, 10062, 1283, 1675, 1280, 1700, 1302, 1600, 3865, 4975, 77.69, 170, 26, 200, 28, 181, 27, 185, 24, 0, 0, 0, 0, 736, 105, 7.01, 1, 1, 2, 2009, 2013, 2013, 2016, 0),
(430, 550, 78.18, 10063, 1026, 1675, 1017, 1575, 1135, 1150, 3178, 4400, 72.23, 154, 28, 147, 28, 164, 26, 183, 25, 0, 0, 0, 0, 648, 107, 6.06, 0, 1, 2, 2010, 2013, 2013, 2016, 0),
(473, 550, 86, 10064, 1090, 1675, 1107, 1575, 1133, 1550, 3330, 4800, 69.38, 192, 28, 210, 28, 193, 26, 214, 25, 0, 0, 0, 0, 809, 107, 7.56, 0, 1, 2, 2010, 2013, 2013, 2016, 0),
(395, 500, 79, 10065, 1129, 1675, 1027, 1575, 1171, 1550, 3327, 4800, 69.31, 191, 28, 181, 28, 139, 24, 169, 24, 0, 0, 0, 0, 680, 104, 6.54, 0, 2, 3, 2010, 2013, 2013, 2016, 0),
(441, 650, 67.85, 10066, 58, 125, 1031, 1550, 1177, 1600, 2266, 3275, 69.19, 154, 28, 187, 28, 197, 26, 208, 25, 0, 0, 0, 0, 746, 107, 6.97, 0, 6, 7, 2009, 2013, 2013, 2016, 0),
(368, 500, 73.6, 10069, 954, 1675, 1020, 1550, 1205, 1600, 3179, 4825, 65.89, 182, 28, 186, 28, 198, 26, 202, 25, 0, 0, 0, 0, 768, 107, 7.18, 0, 1, 1, 2010, 2013, 2013, 2016, 0),
(476, 550, 86.55, 10070, 973, 1675, 1019, 1575, 1149, 1550, 3141, 4800, 65.44, 148, 24, 161, 24, 145, 24, 0, 0, 0, 0, 0, 0, 454, 72, 6.31, 2, 0, 0, 2010, 2013, 2013, 2016, 0);

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
(5, 'leela jain', 'leela34@gmail.com', 'mindcraft', ''),
(6, 'sakeanchor', 'sake@gmail.com', 'sake', 'sake2016');

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
(414, 550, 75, 9914, 411, 600, 69, 166, 27, 181, 27, 162, 28, 187, 28, 161, 24, 155, 24, 203, 25, 0, 0, 1215, 183, 6.63, 0, 1, 1, 0, 2010, 2012, 2012, 2016),
(503, 550, 91.45, 9970, 467, 600, 77.83, 183, 27, 193, 27, 186, 28, 181, 28, 182, 26, 190, 25, 0, 0, 0, 0, 1115, 161, 6.93, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(468, 550, 85.09, 9971, 417, 600, 69.5, 190, 27, 178, 27, 188, 26, 204, 28, 222, 28, 159, 27, 0, 0, 0, 0, 1141, 163, 7, 0, 1, 1, 0, 2010, 2012, 2012, 2016),
(480, 500, 96, 9972, 440, 500, 88, 244, 27, 241, 27, 241, 28, 231, 28, 185, 24, 208, 24, 0, 0, 0, 0, 1350, 158, 8.54, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(451, 500, 90.2, 9973, 535, 600, 89.17, 226, 27, 242, 27, 234, 26, 226, 28, 217, 28, 0, 0, 0, 0, 0, 0, 1145, 136, 8.42, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(499, 550, 90.73, 9974, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2009, 0, 0, 2016),
(485, 550, 88.18, 9976, 389, 600, 64.83, 180, 27, 200, 27, 180, 26, 207, 28, 198, 28, 186, 27, 0, 0, 0, 0, 1151, 163, 7.06, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(457, 500, 91.4, 9977, 549, 600, 91.5, 226, 27, 254, 27, 232, 26, 248, 28, 252, 28, 212, 27, 0, 0, 0, 0, 1424, 163, 8.74, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(487, 550, 88.55, 9978, 430, 600, 71.67, 171, 27, 185, 27, 163, 26, 163, 28, 171, 28, 141, 27, 0, 0, 0, 0, 994, 163, 6.1, 0, 3, 4, 0, 2010, 2012, 2012, 2016),
(541, 700, 77.29, 9980, 369, 500, 73.8, 191, 27, 193, 27, 161, 26, 175, 28, 168, 28, 0, 0, 0, 0, 0, 0, 888, 136, 6.53, 0, 0, 0, 0, 2009, 2012, 2012, 2016),
(445, 500, 89, 9981, 415, 500, 83, 178, 27, 208, 27, 177, 26, 203, 28, 213, 28, 172, 27, 0, 0, 0, 0, 1151, 163, 7.06, 0, 1, 1, 0, 2010, 2012, 2012, 2016),
(424, 500, 84.8, 9982, 427, 600, 71.17, 166, 27, 183, 27, 164, 26, 177, 28, 197, 28, 180, 27, 0, 0, 0, 0, 1067, 163, 6.55, 0, 2, 0, 0, 2010, 2012, 2012, 2016),
(0, 0, 0, 9983, 0, 0, 0, 165, 27, 162, 27, 142, 26, 162, 28, 117, 28, 0, 0, 0, 0, 0, 0, 748, 136, 5.5, 3, 5, 1, 0, 2010, 2012, 2012, 2016),
(586, 700, 83.71, 9984, 483, 600, 80.5, 192, 27, 204, 27, 139, 26, 166, 28, 172, 28, 109, 19, 0, 0, 0, 0, 982, 155, 6.34, 3, 4, 0, 0, 2010, 2012, 2012, 2016),
(360, 500, 72, 9985, 416, 600, 69.33, 169, 27, 162, 27, 155, 26, 168, 28, 188, 28, 112, 23, 0, 0, 0, 0, 954, 159, 6, 2, 3, 3, 0, 2010, 2012, 2012, 2016),
(523, 550, 95.09, 9987, 444, 600, 74, 186, 27, 188, 27, 227, 28, 220, 28, 188, 24, 195, 24, 0, 0, 0, 0, 1204, 158, 7.62, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(454, 500, 90.8, 9989, 514, 600, 85.67, 214, 27, 216, 27, 172, 26, 207, 28, 200, 28, 180, 27, 0, 0, 0, 0, 1189, 163, 7.29, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(515, 550, 93.64, 10004, 543, 600, 90.5, 263, 27, 258, 27, 268, 28, 267, 28, 216, 24, 228, 24, 0, 0, 0, 0, 1500, 158, 9.49, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(494, 550, 89.82, 10005, 421, 600, 70.17, 188, 27, 191, 27, 204, 26, 211, 28, 213, 28, 152, 23, 0, 0, 0, 0, 1159, 159, 7.29, 1, 1, 2, 0, 2010, 2012, 2012, 2016),
(460, 500, 92, 10006, 447, 500, 89.4, 207, 27, 232, 27, 220, 26, 249, 28, 253, 28, 219, 27, 0, 0, 0, 0, 1380, 163, 8.47, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(504, 550, 91.64, 10007, 451, 600, 75.17, 210, 27, 244, 27, 208, 26, 234, 28, 238, 27, 232, 28, 0, 0, 0, 0, 1366, 163, 8.38, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(511, 550, 92.91, 10010, 490, 600, 81.67, 199, 27, 233, 27, 224, 28, 202, 28, 174, 24, 173, 24, 0, 0, 0, 0, 1205, 158, 7.63, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(551, 700, 78.71, 10012, 402, 500, 80.4, 198, 27, 208, 27, 158, 26, 136, 24, 105, 16, 0, 0, 0, 0, 0, 0, 805, 120, 6.71, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(497, 550, 90.36, 10013, 416, 600, 69.33, 166, 27, 178, 27, 162, 26, 225, 28, 219, 28, 187, 27, 0, 0, 0, 0, 1137, 163, 6.98, 0, 5, 5, 0, 2010, 2012, 2012, 2016),
(510, 550, 92.73, 10015, 484, 600, 80.67, 168, 27, 181, 27, 167, 26, 192, 28, 205, 28, 176, 27, 0, 0, 0, 0, 1089, 163, 6.68, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(498, 550, 90.55, 10027, 496, 600, 82.67, 178, 27, 202, 27, 178, 28, 161, 28, 203, 26, 197, 25, 0, 0, 0, 0, 1119, 161, 6.95, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(504, 550, 91.64, 10028, 448, 600, 74.67, 207, 27, 215, 27, 204, 28, 201, 28, 209, 26, 190, 25, 0, 0, 0, 0, 1226, 161, 7.61, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(560, 650, 86.15, 10029, 386, 600, 64.33, 204, 27, 200, 27, 197, 28, 199, 28, 212, 26, 206, 25, 0, 0, 0, 0, 1218, 161, 7.57, 0, 0, 0, 0, 2009, 2011, 2012, 2016),
(477, 550, 86.73, 10031, 439, 600, 73.17, 159, 27, 169, 27, 176, 28, 167, 28, 149, 26, 177, 25, 0, 0, 0, 0, 997, 161, 6.19, 0, 5, 6, 0, 2010, 2012, 2012, 2016),
(502, 550, 91.27, 10032, 388, 600, 64.67, 151, 27, 184, 27, 181, 28, 188, 28, 167, 26, 175, 25, 0, 0, 0, 0, 1046, 161, 6.5, 0, 4, 1, 0, 2010, 2012, 2012, 2016),
(425, 550, 77.27, 10033, 405, 600, 67.5, 145, 27, 155, 27, 147, 28, 138, 28, 142, 26, 83, 21, 0, 0, 0, 0, 810, 157, 5.16, 1, 6, 9, 0, 2010, 2012, 2012, 2016),
(434, 500, 86.8, 10034, 473, 600, 78.83, 190, 27, 198, 27, 208, 28, 212, 28, 196, 26, 201, 25, 0, 0, 0, 0, 1205, 161, 7.48, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(453, 550, 82.36, 10035, 389, 600, 64.83, 157, 27, 164, 27, 166, 28, 147, 28, 169, 26, 178, 25, 0, 0, 0, 0, 981, 161, 6.09, 0, 4, 4, 0, 2010, 2012, 2012, 2016),
(497, 550, 90.36, 10036, 461, 600, 76.83, 182, 27, 176, 27, 188, 28, 198, 28, 192, 26, 207, 25, 0, 0, 0, 0, 1143, 161, 7.1, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(463, 550, 84.18, 10037, 346, 600, 57.67, 158, 27, 163, 27, 155, 28, 174, 28, 189, 26, 189, 25, 0, 0, 0, 0, 1028, 161, 6.39, 0, 9, 13, 0, 2010, 2012, 2012, 2016),
(462, 500, 92.4, 10038, 499, 600, 83.17, 194, 27, 188, 27, 202, 26, 184, 28, 188, 28, 181, 27, 0, 0, 0, 0, 1137, 163, 6.98, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(476, 550, 86.55, 10041, 432, 600, 72, 169, 27, 154, 27, 0, 0, 157, 28, 155, 23, 174, 25, 0, 0, 0, 0, 809, 130, 6.22, 1, 4, 8, 0, 2010, 2012, 2012, 2016),
(445, 500, 89, 10042, 399, 500, 79.8, 225, 27, 227, 27, 173, 26, 188, 28, 221, 28, 190, 27, 0, 0, 0, 0, 1224, 163, 7.51, 0, 1, 1, 0, 2010, 2012, 2012, 2016),
(422, 500, 84.4, 10043, 417, 600, 69.5, 174, 27, 165, 27, 171, 28, 172, 28, 162, 26, 157, 25, 0, 0, 0, 0, 1001, 161, 6.22, 0, 4, 5, 0, 2010, 2012, 2012, 2016),
(455, 550, 82.73, 10044, 449, 600, 74.83, 168, 27, 197, 27, 190, 28, 206, 28, 203, 26, 202, 25, 0, 0, 0, 0, 1166, 161, 7.24, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(527, 550, 95.82, 10045, 526, 600, 87.67, 206, 27, 213, 27, 228, 26, 238, 28, 250, 27, 222, 28, 0, 0, 0, 0, 1357, 163, 8.33, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(488, 550, 88.73, 10046, 456, 600, 76, 191, 27, 215, 27, 208, 26, 220, 28, 232, 27, 214, 28, 0, 0, 0, 0, 1280, 163, 7.85, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(501, 550, 91.09, 10047, 526, 600, 87.67, 205, 27, 220, 27, 196, 26, 223, 28, 226, 28, 186, 27, 0, 0, 0, 0, 1256, 163, 7.71, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(504, 550, 91.64, 10048, 492, 600, 82, 209, 27, 211, 27, 227, 28, 232, 28, 231, 26, 226, 25, 0, 0, 0, 0, 1336, 161, 8.3, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(479, 500, 95.8, 10050, 434, 500, 86.8, 226, 27, 209, 27, 247, 28, 268, 28, 218, 24, 210, 24, 0, 0, 0, 0, 1378, 158, 8.72, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(474, 550, 86.18, 10051, 445, 600, 74.17, 183, 27, 208, 27, 186, 28, 183, 28, 185, 26, 189, 25, 0, 0, 0, 0, 1134, 161, 7.04, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(450, 500, 90, 10052, 392, 500, 78.4, 183, 27, 187, 27, 164, 26, 220, 28, 208, 28, 0, 0, 0, 0, 0, 0, 962, 136, 7.07, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(499, 550, 90.73, 10054, 482, 600, 80.33, 179, 27, 196, 27, 165, 28, 156, 28, 158, 26, 146, 25, 0, 0, 0, 0, 1000, 161, 6.21, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(491, 550, 89.27, 10055, 485, 600, 80.83, 180, 27, 208, 27, 191, 28, 199, 28, 167, 24, 187, 24, 0, 0, 0, 0, 1132, 158, 7.16, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(489, 550, 88.91, 10056, 490, 600, 81.67, 167, 27, 203, 27, 186, 26, 180, 28, 195, 28, 155, 27, 0, 0, 0, 0, 1086, 163, 6.66, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(553, 650, 85.08, 10072, 478, 600, 79.67, 207, 27, 232, 27, 228, 26, 223, 28, 216, 27, 217, 28, 0, 0, 0, 0, 1323, 163, 8.12, 0, 0, 0, 0, 2009, 2011, 2012, 2016),
(489, 550, 88.91, 10073, 478, 600, 79.67, 214, 27, 226, 27, 250, 28, 251, 28, 209, 26, 230, 25, 0, 0, 0, 0, 1380, 161, 8.57, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(531, 550, 96.55, 10074, 489, 600, 81.5, 180, 27, 178, 27, 173, 28, 183, 28, 180, 29, 0, 0, 0, 0, 0, 0, 894, 139, 6.43, 0, 1, 2, 0, 2010, 2012, 2012, 2016),
(491, 550, 89.27, 10075, 508, 600, 84.67, 163, 27, 204, 27, 189, 26, 199, 28, 189, 27, 168, 28, 0, 0, 0, 0, 1112, 163, 6.82, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(435, 500, 87, 10078, 479, 600, 79.83, 174, 27, 174, 27, 164, 26, 199, 28, 180, 28, 162, 27, 0, 0, 0, 0, 1053, 163, 6.46, 0, 3, 2, 0, 2010, 2012, 2012, 2016),
(438, 550, 79.64, 10080, 415, 600, 69.17, 139, 27, 165, 27, 154, 26, 167, 28, 189, 28, 0, 0, 0, 0, 0, 0, 814, 136, 5.99, 0, 0, 0, 0, 2010, 2012, 2012, 2016),
(395, 500, 79, 10081, 388, 600, 64.67, 169, 27, 186, 27, 168, 28, 148, 28, 162, 26, 173, 25, 0, 0, 0, 0, 1006, 161, 6.25, 0, 5, 6, 0, 2010, 2012, 2012, 2016),
(362, 500, 72.4, 10082, 406, 600, 67.67, 175, 27, 174, 27, 164, 28, 188, 28, 126, 20, 151, 24, 0, 0, 0, 0, 978, 154, 6.35, 1, 3, 2, 0, 2010, 2012, 2012, 2016),
(396, 500, 79.2, 10085, 467, 600, 77.83, 199, 27, 206, 27, 163, 26, 175, 28, 183, 28, 165, 27, 0, 0, 0, 0, 1091, 163, 6.69, 0, 0, 0, 0, 2009, 2011, 2012, 2016);

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
(112, '', '', '', '', '', '', '', '', '', '', '', '', ''),
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
('Stud_Name', 'Fathers_Name', 'moname', 0, 'Smart_Card_No', 'DOB', 'Telephone', 'Parents_Telephone', 0, 0, 'Branch_Nm', 'Email', 'type', 'Gender', 0, 'Defaulter1', 'p', 'co'),
('fjpjp', 'mfvm', 'fmv', 112, '123654', '2017-03-05', '08080855649', '8080855649', 1, 5, 'it', 'kjlrjb@gmil.com', '', 'female', 0, 'n', 'n', ''),
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
('SHINDE RUPESH ARUN', '', '', 9970, 'C2012IT1620', '01-Jan-01', '', '', 0, 0, 'INFORMATION TECHNOLOGY', '', 'hsc', '', 2016, 'N', '', ''),
('SHAH HARSH RAJESH', 'RAJESH CHIMANLAL SHAH', '', 9971, 'C2012EX1212', '04-Sep-95', '9221396898', '9224281322', 43, 1, 'ELECTRONICS ENGINEERING', 'harshrajeshshah.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('PANDEY NIDHI RAMAKANT', 'RAMA KANT PANDEY', '', 9972, 'C2012CM1062', '30-Mar-94', '8652836711', '022-27720116', 76, 3, 'COMPUTER ENGINEERING', 'nidhiipandey.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('SETH SAMRIDHI NAVNEET', 'NAVNEET SETH', '', 9973, 'C2012EX1213', '27-Jul-95', '9819998815', '9820898703', 40, 1, 'ELECTRONICS ENGINEERING', 'samridhiseth.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('MANIYAR SANA JAWEED', '', '', 9974, 'I2012EX1214', '01-Jan-01', '', '', 0, 1, 'ELECTRONICS ENGINEERING', '', 'hsc', 'F', 2016, 'N', '', ''),
('SHELAR SANKET SURESH', 'SURESH SADASHIV SHELAR', '', 9976, 'I2012EX1216', '21-Sep-94', '9833035718', '9819164872', 47, 1, 'ELECTRONICS ENGINEERING', 'sanketshelar.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('JAIN VAIBHAV ASHOK', 'ASHOK MANEKCHAND JAIN', '', 9977, 'I2012EX1217', '13-Jan-95', '8080395575', '9930435110', 18, 1, 'ELECTRONICS ENGINEERING', 'vaibhavajain.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('PATIL KANCHAN HARI', 'HARI ONKAR PATIL', '', 9978, 'C2012EX1218', '28-Jul-95', '9076758505', '9029376152', 31, 2, 'ELECTRONICS ENGINEERING', 'kanchanpatil.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('KHAJANCHI SOURABH ASHOK', 'Ashok Gulabchand Khajanchi', '', 9980, 'I2012EX1220', '04-Jan-95', '8976427967', '9321034746', 75, 2, 'ELECTRONICS ENGINEERING', 'sourabhkhajanchi.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('MICHAEL ASHWIN OOMMEN', '', '', 9981, 'I2012EX1221', '01-Jan-01', '', '', 0, 1, 'ELECTRONICS ENGINEERING', '', 'hsc', 'M', 2016, 'N', '', ''),
('SARKAR MONALISHA SISHIR', 'Sishir Kumar Sarkar', '', 9982, 'I2012EX1222', '21-Apr-94', '9619230330', '9869301418', 38, 1, 'ELECTRONICS ENGINEERING', 'Monalishasarkar.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('RAJPUT SOWMYA MOOLCHANDRA', 'MOOLCHANDRA RAJPUT', '', 9983, 'I2012EX1223', '11-Jun-95', '9969986579', '9969161108', 36, 1, 'ELECTRONICS ENGINEERING', 'sowmyarajput.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('MEHTA VINIT NILESH', 'NILESH TULSIDAS MEHTA', '', 9984, 'I2012EX1224', '01-Jan-01', '9619630626', '', 0, 0, 'ELECTRONICS ENGINEERING', 'vinitmehta.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('MAHAJAN AMEYA VIJAY', 'VIJAY BALWANTRAO MAHAJAN', '', 9985, 'I2012EX1225', '22-Sep-94', '9619398182', '9920351579', 50, 2, 'ELECTRONICS ENGINEERING', 'ameya_mahajan@yahoo.com', 'hsc', 'M', 2016, 'N', '', ''),
('Ankit Alok Mathur', 'Alok Kumar Mathur', '', 9987, 'I2012EX1227', '19-May-94', '9869840688', '9869601393', 25, 2, 'ELECTRONICS ENGINEERING', 'ankitmathur.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('BAGWE BHAKTI RAMCHANDRA', 'RAMCHANDRA SHANTARAM BAGWE', '', 9989, 'C2012CM1063', '04-Apr-95', '9029922444', '9702419128', 8, 4, 'COMPUTER ENGINEERING', 'bhaktibagwe.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('Rahul Kumar', 'Umesh Kumar', '', 9990, 'I2012EX1228', '08-Jul-95', '9869922262', '9969960210', 21, 1, 'ELECTRONICS ENGINEERING', 'rahulukumar.2016@gmail.com', 'diploma', 'M', 2016, 'N', '', ''),
('KULKARNI SOHAM SUNIL', 'SUNIL SHASHIKANT KULKARNI', '', 9991, 'C2012CM1064', '03-Jan-95', '9503307799', '9422580653', 40, 4, 'COMPUTER ENGINEERING', 'sohamkulkarni.2016@gmail.com', 'diploma', 'M', 2016, 'N', '', ''),
('PAWAR PRIYA BAJIRAO', 'BAJIRAO GANPAT PAWAR', '', 9992, 'C2012EX1229', '27-Nov-94', '9773208945', '8976459406', 32, 2, 'ELECTRONICS ENGINEERING', 'pawar.priya2016@gmail.com', 'diploma', 'F', 2016, 'N', '', ''),
('POOJA SIVANKUTTY NAIR', 'SIVANKUTTY RAGHAVAN NAIR', '', 9993, 'C2012EX1230', '18-May-94', '9757388710', '9969688752', 31, 1, 'ELECTRONICS ENGINEERING', 'poojasnair.2016@gmail.com', 'diploma', 'F', 2016, 'N', '', ''),
('LAD ADITYA SADANAND', 'SADANAND SHANKAR LAD', '', 9995, 'C2012EX1231', '05-Jul-94', '9833147965', '9869479765', 57, 7, 'ELECTRONICS AND TELE COMMUNICATIONS ENGINEERING', 'adityalad.2016@gmail.com', 'diploma', 'M', 2016, 'N', '', ''),
('NAKHAWA ANISH AMRESH', 'AMRESH RAMCHANDRA NAKHAWA', '', 9996, 'C2012CM1065', '30-Mar-95', '9867393917', '9987296060', 30, 3, 'COMPUTER ENGINEERING', 'anish.nakhawa2016@gmail.com', 'diploma', 'M', 2016, 'Y', '', ''),
('PILLAI GAUTAM RAMANUJAN', 'RAMANUJAN N', '', 9997, 'I2012EX1232', '04-Sep-94', '9930825090', '', 78, 2, 'ELECTRONICS ENGINEERING', 'gautam4994@gmail.com', 'diploma', 'M', 2016, 'Y', '', ''),
('SONAWANE AKSHADA GAUTAM', 'GAUTAM KESHAV SONAWANE', '', 9999, 'I2012EX1234', '30-Mar-95', '9769499464', '9322107788', 53, 2, 'ELECTRONICS ENGINEERING', 'akshadasonawane2016@gmail.com', 'diploma', 'F', 2016, 'N', '', ''),
('BOTRE MONIKA RAMCHANDRA', 'Ramchandra Sopan Botre', '', 10000, 'I2012EX1235', '27-Oct-94', '9324134263', '9324173138', 8, 2, 'ELECTRONICS ENGINEERING', 'monikabotre.2016@gmail.com', 'diploma', 'F', 2016, 'N', '', ''),
('Shashank shivaramakrishna iyer', 'Shivaramakrishna', '', 10002, 'I2012IT1622', '24-Feb-95', '7208226490', '', 30, 6, 'INFORMATION TECHNOLOGY', 'Shashankiyer.2016@gmail.com', 'diploma', 'M', 2016, 'N', '', ''),
('CHEMBURKAR TUSHAR HEMANT', 'HEMANT GAJENDRA CHEMBURKAR', '', 10004, 'I2012IT1624', '14-Aug-94', '9768373755', '9324178583', 11, 6, 'INFORMATION TECHNOLOGY', 'tusharchemburkar.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('DAMA NILAM JAYESHBHAI', 'DAMA JAYESHBHAI', '', 10005, 'I2012IT1625', '25-May-94', '7666972321', '9029120592', 19, 6, 'INFORMATION TECHNOLOGY', 'nilamdama.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('WANKHEDE SHIVANI MOHAN', 'Mohan Damodar Wankhade', '', 10006, 'I2012IT1626', '19-Jun-94', '9757440726', '9969054606', 71, 6, 'INFORMATION TECHNOLOGY', 'shivaniwankhade.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('MAITREYI JEEVAN RATNAKAR', 'JEEVAN PRABHAKAR RATNAKAR', '', 10007, 'I2012IT1627', '05-Sep-94', '9665199912', '9423367656', 45, 6, 'INFORMATION TECHNOLOGY', 'maitreyiratnakar.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('MAKASARE NAYAN VILAS', 'nayan vilas makasare', '', 10010, 'C2012IT1630', '26-Nov-94', '9004246058', '8097300652', 30, 5, 'INFORMATION TECHNOLOGY', 'nvmakasare94@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('RATHOD PRIYANKA JAGAN', 'JAGAN RAMLU RATHOD', '', 10012, 'C2012IT1631', '17-Mar-95', '9773863810', '9773832307', 44, 6, 'INFORMATION TECHNOLOGY', 'priyankajrathod.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('SALGAONKAR RASIKA ANIL', 'ANIL SALGAONKAR', '', 10013, 'I2012IT1632', '01-Jan-01', '', '', 0, 1, 'ELECTRONICS AND TELE COMMUNICATIONS ENGINEERING', '', 'hsc', 'F', 2016, 'N', '', ''),
('DHANESH DHIREN SHAH ', 'DHIREN DEEPAK SHAH', '', 10015, 'I2012IT1634', '18-Aug-94', '8655249681', '9987642051', 51, 6, 'INFORMATION TECHNOLOGY', 'dhaneshshah2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('PATIL LALIT BHASKAR', 'Bhaskar Chandrakant Patil', '', 10016, 'I2012IT1635', '17-Nov-94', '9967290066', '9892717347', 38, 5, 'INFORMATION TECHNOLOGY', 'lalitpatil03251@gmail.com', 'diploma', 'M', 2016, 'N', '', ''),
('CHAUDHARI VIRAJ VILAS', 'VILAS NAMDEO CHAUDHARI', '', 10017, 'I2012IT1636', '16-Apr-95', '9773301222', '9664488005', 5, 5, 'INFORMATION TECHNOLOGY', 'viraj.1604@gmail.com', 'diploma', 'M', 2016, 'N', '', ''),
('SINGH ABHISHEK DHRUVA', 'Dhruva Kumar Singh', '', 10019, 'C2012EX1236', '17-May-94', '9969181717', '9869427464', 50, 1, 'ELECTRONICS ENGINEERING', 'abhishek.d.singh.2016@gmail.com', 'diploma', 'M', 2016, 'N', '', ''),
('PAREKH NEIL RAKESH', 'Rakesh krishnakant parekh', '', 10021, 'I2012IT1639', '12-Sep-94', '9930041225', '9820308263', 0, 6, 'INFORMATION TECHNOLOGY', 'neilparekh.2016@gmail.com', 'diploma', 'M', 2016, 'N', '', ''),
('TOPPO NIDHI DASRATH', 'Dasrath Toppo', '', 10022, 'I2012IT1640', '02-Apr-95', '9969384572', '9869222684', 51, 1, 'ELECTRONICS ENGINEERING', 'nidhitoppo.2016@gmail.com', 'diploma', 'F', 2016, 'N', '', ''),
('SALIAN CHIRAYU DAMODHAR', 'DAMODHAR MANJUNATH SALIAN', '', 10023, 'I2012IT1641', '04-Jun-94', '7506245831', '9821284624', 47, 5, 'INFORMATION TECHNOLOGY', 'chirayusalian.2016@gmail.com', 'diploma', 'F', 2016, 'N', '', ''),
('ANCHAN POOJA HARISH', 'HARISH RAMANNA ANCHAN', '', 10024, 'I2012IT1642', '30-Jun-94', '9619906758', '9819766896', 2, 6, 'INFORMATION TECHNOLOGY', 'poojaanchan.2016@gmail.com', 'diploma', 'F', 2016, 'N', '', ''),
('PALLAVI  BALU  DOKE', 'BALU  DHARMAJI  DOKE', '', 10026, 'C2012ETC1816', '01-Mar-94', '9769870301', '9869680061', 9, 7, 'ELECTRONICS AND TELE COMMUNICATIONS ENGINEERING', 'pallavidoke.2016@gmail.com', 'diploma', 'F', 2016, 'N', '', ''),
('SHRADDHA  SHYAM HEGDE', 'SHYAM SHIVANNA HEGDE', '', 10027, 'C2012ETC1817', '08-Jun-95', '9967179504', '8082008512', 17, 7, 'ELECTRONICS AND TELE COMMUNICATIONS ENGINEERING', 'shraddhahegde.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('PRASHANTH SUDARSHAN PILLAMARI', 'SUDARSHAN NARSAYYA PILLAMARI', '', 10028, 'C2012EX1237', '17-Jun-94', '9029210491', '9869908109', 23, 2, 'ELECTRONICS ENGINEERING', 'prashanthpillamari.2016@gmail.com', 'hsc', 'M', 2016, 'Y', '', ''),
('BHOSALE YUGANDHARA SHIVAJI', 'SHIVAJI ABAJI BHOSALE', '', 10029, 'C2012IT1644', '19-Apr-95', '9987109666', '9869530521', 9, 6, 'INFORMATION TECHNOLOGY', 'yugandharabhosale.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('BANGALORE AKSHATA JAGADEESH', 'jagadeesh shivshankar bangalore', '', 10031, 'C2012CM1066', '25-Mar-95', '9619341236', '9820218783', 9, 4, 'COMPUTER ENGINEERING', 'bangalore.akshata@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('TITIKSHA AROON MAHIMKER', ' AROON KASHINATH MAHIMKER', '', 10032, 'C2012IT1645', '04-Nov-94', '9699599989', '9820673509', 34, 6, 'INFORMATION TECHNOLOGY', 'titikshamahimker.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
(' VANDANA ROSHAN', 'Roshan Singh', '', 10033, 'C2012EX1238', '06-Aug-94', '7588744903', '9489446866', 52, 1, 'ELECTRONICS ENGINEERING', 'vandanasakec@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('GAWDE SANKET DASHARATH', 'DASHARATH SAKHARAM GAWDE', '', 10034, 'C2012IT1646', '29-Aug-94', '8097333746', '9969037571', 18, 5, 'INFORMATION TECHNOLOGY', 'sanketgawde.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('HARAM ASHISH MAHADEV', 'MAHADEV ABAJI HARAM', '', 10035, 'C2012CM1067', '03-Jun-94', '9773274183', '9821733775', 26, 4, 'COMPUTER ENGINEERING', 'ashishharam.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('SHIPURE MEGHALI SANJAY', 'SANJAY RAMACHANDRA SHIPURE', '', 10036, 'C2012EX1239', '15-Jun-95', '7588715530', '9422495261', 49, 1, 'ELECTRONICS ENGINEERING', 'meghalishipure2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('GUNDA SRUJANA NARAHARI', 'NARAHARI NARSAIAH GUNDA', '', 10037, 'C2012ETC1818', '24-Oct-93', '9664729760', '9920311361', 15, 7, 'ELECTRONICS AND TELE COMMUNICATIONS ENGINEERING', 'srujanagunda.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('DASARI RANI NARAYANA', 'NARAYANA NARASAYYA DASARI ', '', 10038, 'C2012IT1647', '05-Apr-95', '9167315336', '9702282341', 21, 6, 'INFORMATION TECHNOLOGY', 'ranidasari.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('TIRODKAR MIHIR RAJAN', 'RAJAN SHANKAR TIRODKAR', '', 10041, 'C2012CM1068', '01-Mar-94', '9869381808', '9699030290', 83, 3, 'COMPUTER ENGINEERING', 'mihirtirodkar2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('SHINDE SAGAR SURYAKANT', 'Suryakant Gangaram Shinde', '', 10042, 'C2012ETC1819', '09-Mar-94', '8108946480', '8600372206', 37, 7, 'ELECTRONICS AND TELE COMMUNICATIONS ENGINEERING', 'sagarshinde3.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('ZAWAR SARANG SANDEEP', 'SANDEEP BABULAL ZAWAR', '', 10043, 'C2012CM1069', '15-Oct-94', '8275337737', '8275337737', 72, 4, 'COMPUTER ENGINEERING', 'sarangzawar.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('SAWANT ADITYA DINESH', 'DINESH KASHINATH SAWANT', '', 10044, 'C2012ETC1820', '22-May-94', '9969568822', '9869723982', 63, 7, 'ELECTRONICS AND TELE COMMUNICATIONS ENGINEERING', 'adityasawant.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('GHARAT SWAPNALI PRAMOD', 'PRAMOD SHANTARAM GHARAT', '', 10045, 'C2012EX1240', '24-Apr-95', '9158479537', '9673712546', 14, 2, 'ELECTRONICS ENGINEERING', 'swapnaligharat.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('SWATI VIJAYBAHADUR YADAV', 'VIJAYBAHADUR SUDAMA YADAV', '', 10046, 'I2012ETC1821', '02-Feb-95', '9930343473', '7738540737', 71, 7, 'ELECTRONICS AND TELE COMMUNICATIONS ENGINEERING', 'swativijayyadav.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('JADHAV ADITYA SANJIV', 'SANJIV SITARAM JADHAV', '', 10047, 'I2012ETC1822', '15-Sep-94', '9619755235', '9869354352', 54, 7, 'ELECTRONICS AND TELE COMMUNICATIONS ENGINEERING', 'adityajadhav.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('UDAYKARTHIK MURUGANAND', 'MURUGANAND SUBRAMANIAN', '', 10048, 'I2012ETC1823', '25-Sep-94', '9619943906', '9870251743', 70, 7, 'ELECTRONICS AND TELE COMMUNICATIONS ENGINEERING', 'udaykarthikmuruganand.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('BHATT VIRAT JEETENDRA', 'JEETENDRA', '', 10050, 'C2012CM1070', '07-Aug-93', '8451812083', '9960337850', 8, 3, 'COMPUTER ENGINEERING', 'viratbhatt.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('KOMPLE PRIYANKA PANDURANG', 'PANDURANG MADHAVRAO KOMPLE', '', 10051, 'C2012EX1241', '26-Mar-95', '8286176936', '9820623753', 22, 2, 'ELECTRONICS ENGINEERING', 'priyankakomple.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('SANDAL AKSHAY DILBAGHSINGH', 'DILBAGH SINGH SANDAL ', '', 10052, 'C2012CM1071', '22-Mar-95', '9920308069', '9920590026', 32, 3, 'COMPUTER ENGINEERING', 'akshaysandal@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('SINGH KISHAN RAJENDRAPRASAD', 'RAJENDRAPRASAD SINGH', '', 10054, 'C2012EX1242', '29-Aug-94', '9022381678', '9867841750', 72, 2, 'ELECTRONICS ENGINEERING', 'kishanrsingh.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('SHETTIGAR VINAYAK KRISHNA', 'KRISHNA DHARMANNA SHETTIGAR', '', 10055, 'C2012CM1072', '19-Oct-94', '8693840653', '9820823042', 61, 4, 'COMPUTER ENGINEERING', 'vinayakshettigar.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('SHAIKH JAVERIA ANWAR', 'Anwar Badruddin Shaikh', '', 10056, 'C2012IT1648', '27-Sep-94', '8082496866', '9819000482', 56, 6, 'INFORMATION TECHNOLOGY', 'javeriashaikh.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('DHOKE ASHWITA VITHOBA', 'VITHOBA ATMARAM DHOKE', '', 10057, 'C2012IT1649', '29-Jan-95', '9769185542', '9987840955', 24, 6, 'INFORMATION TECHNOLOGY', 'ashwitadhoke.2016@gmail.com', 'diploma', 'F', 2016, 'N', '', ''),
('YERUNKAR SHWETA NANDKUMAR', 'NANDKUMAR PARSHURAM YERUNKAR', '', 10058, 'C2012IT1650', '08-Dec-94', '9769714073', '9833211075', 73, 6, 'INFORMATION TECHNOLOGY', 'shwetayerunkar.2016@gmail.com', 'diploma', 'F', 2016, 'N', '', ''),
('KHOT VISHAL JAGANNATH', '', '', 10059, 'C2012IT1651', '01-Jan-01', '', '', 0, 0, 'INFORMATION TECHNOLOGY', '', 'diploma', '', 2016, 'N', '', ''),
('BHILLARE SIDDHESH SANJAY', 'SANJAY ATMARAM BHILLARE', '', 10061, 'C2012EX1243', '03-Jan-95', '9768066242', '9821252738', 7, 2, 'ELECTRONICS ENGINEERING', 'siddheshbhillare.2016@gmail.com', 'diploma', 'M', 2016, 'N', '', ''),
('MANJREKAR SHWETA GAJANAN', 'Gajanan Janardhan Manjrekar', '', 10062, 'C2012CM1074', '26-Feb-95', '9773648273', '9867164937', 75, 3, 'COMPUTER ENGINEERING', 'shwetamanjrekar.2016@gmail.com', 'diploma', 'F', 2016, 'N', '', ''),
('CHOUDHARY VINAY SUNIL', 'SUNIL BHAGWAT CHOUDHARY', '', 10063, 'C2012ETC1824', '19-Sep-93', '7208517193', '9833029380', 4, 7, 'ELECTRONICS AND TELE COMMUNICATIONS ENGINEERING', 'vinaychoudhary59@gmail.com', 'diploma', 'M', 2016, 'N', '', ''),
('BHAYYE ABHISHEK BHIKAJI', 'BHIKAJI PRABHAKAR BHAYYE', '', 10064, 'C2012IT1652', '03-Sep-94', '9702134061', '9224799146', 4, 5, 'INFORMATION TECHNOLOGY', 'abhishekbhayye.2016@gmail.com', 'diploma', 'M', 2016, 'N', '', ''),
('BINAYKIYA SIDDHARTH GANESHLAL', 'Ganeshlal mohanlal binaykiya', '', 10065, 'C2012CM1075', '14-Oct-94', '7738288934', '9588822244', 9, 3, 'COMPUTER ENGINEERING', 'siddharthbinaykiya.2016@gmail.com', 'diploma', 'M', 2016, 'N', '', ''),
('AHERKAR SANTOSH KALURAM', 'KALURAM TUKARAM AHERKAR', '', 10066, 'C2012CM1076', '22-Jul-94', '8286601741', '9702497893', 2, 3, 'COMPUTER ENGINEERING', 'santoshaherkar.2016@gmail.com', 'diploma', 'M', 2016, 'N', '', ''),
('YADAV SHRADDHA SANTLAL', 'SANTLAL TEJU YADAV ', '', 10069, 'C2012IT1653', '21-Aug-94', '9664546525', '8082007674', 72, 6, 'INFORMATION TECHNOLOGY', 'shraddhasyadav.2016@gmail.com', 'diploma', 'F', 2016, 'N', '', ''),
('CHHEDA BHAKTI RAMESH', 'RAMESH LAKHAMSHI CHHEDA', '', 10070, 'M2012CM1078', '13-Sep-94', '8983297583', '9270014759', 9, 1, 'ELECTRONICS ENGINEERING', 'bhaktichheda.2016@gmail.com', 'diploma', 'F', 2016, 'N', '', ''),
('SHETTY YASH SANTOSH', 'Santosh shama shetty', '', 10071, 'C2012ETC1825', '01-Jan-01', '9820203989', '9920591858', 65, 7, 'ELECTRONICS AND TELE COMMUNICATIONS ENGINEERING', 'yashshetty2016@gmail.com', 'diploma', 'M', 2016, 'N', '', ''),
('TANDEL SONIA SHIRISH', 'SHIRISH SHANTARAM TANDEL', '', 10072, 'C2012IT1654', '22-Feb-94', '8097017497', '9987894911', 63, 6, 'INFORMATION TECHNOLOGY', 'soniatandel.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('SANGLE TANVI CHANDRAKANT', 'Chandrakant Parshuram Sangle ', '', 10073, 'C2012IT1655', '10-Dec-94', '9930755383', '9820827318', 48, 6, 'INFORMATION TECHNOLOGY', 'tanvisangle.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('NAGDA HIMANSHU JAMBUKUMAR', 'JAMBUKUMAR BHANWARLAL NAGDA', '', 10074, 'C2012IT1656', '28-Oct-94', '9870081008', '9323801971', 36, 6, 'INFORMATION TECHNOLOGY', 'himanshunagda.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('GAJARE HIMANSHU KISHOR', 'KISHOR KRISHNAJI GAJARE', '', 10075, 'C2012EX1245', '11-Apr-95', '8655001857', '9322276446', 11, 2, 'ELECTRONICS ENGINEERING', 'himanshugajare.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('KHORWAL RAVINDRA RAMCHANDRA', 'KHORWAL  RAMACHANDRA KACHARARAM', '', 10078, 'C2012EX1247', '29-May-95', '8898181265', '9920047956', 21, 2, 'ELECTRONICS ENGINEERING', 'ravindrakhorwal28@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('URMISHA UMESH KORGAONKAR', 'UMESH LAXMAN KORGAONKAR ', '', 10080, 'I2012CM1080', '21-Nov-94', '9920365737', '', 38, 4, 'COMPUTER ENGINEERING', 'urmishakorgaonkar.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('DHURE RAJ DEEPAK', 'DEEPAK LAXMANRAO DHURE', '', 10081, 'C2012IT1658', '17-Jun-95', '9833408273', '9833229837', 11, 5, 'INFORMATION TECHNOLOGY', 'rajdhure.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
('SAWANT PRAJAKTA PARASU', 'Parsu Jotiba Sawant', '', 10082, 'C2012EX1248', '26-Aug-94', '7302459707', '9773110626', 39, 1, 'ELECTRONICS ENGINEERING', 'prajaktasawant.2016@gmail.com', 'hsc', 'F', 2016, 'N', '', ''),
('PALECHA NIRAJ SUNIL', 'SUNIL JOHARILAL PALECHA', '', 10085, 'C2012IT1660', '05-Mar-94', '9029746248', '', 38, 6, 'INFORMATION TECHNOLOGY', 'nirajpalecha.2016@gmail.com', 'hsc', 'M', 2016, 'N', '', ''),
(' ADITI GADA', 'UTKAL GADA', 'GADA', 11034, 'M2013IT2601', '1994-10-19', '8082762275', '9869767187', 27, 5, 'IT', 'aditigada.2016@gmail.com', 'diploma', 'female', 2016, 'n', 'n', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `reg_id` varchar(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `smartcard_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`reg_id`, `uname`, `password`, `smartcard_no`) VALUES
('01', 'lee', '12345', 'm2012'),
('10000', 'BOTRE MONIKA RAMCHANDRA', '1234', 'I2012EX1235'),
('10002', 'Shashank shivaramakrishna iyer', '1234', 'I2012IT1622'),
('10004', 'CHEMBURKAR TUSHAR HEMANT', '1234', 'I2012IT1624'),
('10005', 'DAMA NILAM JAYESHBHAI', '1234', 'I2012IT1625'),
('10006', 'WANKHEDE SHIVANI MOHAN', '1234', 'I2012IT1626'),
('10007', 'MAITREYI JEEVAN RATNAKAR', '1234', 'I2012IT1627'),
('10010', 'MAKASARE NAYAN VILAS', '1234', 'C2012IT1630'),
('10012', 'RATHOD PRIYANKA JAGAN', '1234', 'C2012IT1631'),
('10013', 'SALGAONKAR RASIKA ANIL', '1234', 'I2012IT1632'),
('10015', 'DHANESH DHIREN SHAH ', '1234', 'I2012IT1634'),
('10016', 'PATIL LALIT BHASKAR', '1234', 'I2012IT1635'),
('10017', 'CHAUDHARI VIRAJ VILAS', '1234', 'I2012IT1636'),
('10019', 'SINGH ABHISHEK DHRUVA', '1234', 'C2012EX1236'),
('10021', 'PAREKH NEIL RAKESH', '1234', 'I2012IT1639'),
('10022', 'TOPPO NIDHI DASRATH', '1234', 'I2012IT1640'),
('10023', 'SALIAN CHIRAYU DAMODHAR', '1234', 'I2012IT1641'),
('10024', 'ANCHAN POOJA HARISH', '1234', 'I2012IT1642'),
('10026', 'PALLAVI  BALU  DOKE', '1234', 'C2012ETC1816'),
('10027', 'SHRADDHA  SHYAM HEGDE', '1234', 'C2012ETC1817'),
('10028', 'PRASHANTH SUDARSHAN PILLAMARI', '1234', 'C2012EX1237'),
('10029', 'BHOSALE YUGANDHARA SHIVAJI', '1234', 'C2012IT1644'),
('10031', 'BANGALORE AKSHATA JAGADEESH', '1234', 'C2012CM1066'),
('10032', 'TITIKSHA AROON MAHIMKER', '1234', 'C2012IT1645'),
('10033', ' VANDANA ROSHAN', '1234', 'C2012EX1238'),
('10034', 'GAWDE SANKET DASHARATH', '1234', 'C2012IT1646'),
('10035', 'HARAM ASHISH MAHADEV', '1234', 'C2012CM1067'),
('10036', 'SHIPURE MEGHALI SANJAY', '1234', 'C2012EX1239'),
('10037', 'GUNDA SRUJANA NARAHARI', '1234', 'C2012ETC1818'),
('10038', 'DASARI RANI NARAYANA', '1234', 'C2012IT1647'),
('10041', 'TIRODKAR MIHIR RAJAN', '1234', 'C2012CM1068'),
('10042', 'SHINDE SAGAR SURYAKANT', '1234', 'C2012ETC1819'),
('10043', 'ZAWAR SARANG SANDEEP', '1234', 'C2012CM1069'),
('10044', 'SAWANT ADITYA DINESH', '1234', 'C2012ETC1820'),
('10045', 'GHARAT SWAPNALI PRAMOD', '1234', 'C2012EX1240'),
('10046', 'SWATI VIJAYBAHADUR YADAV', '1234', 'I2012ETC1821'),
('10047', 'JADHAV ADITYA SANJIV', '1234', 'I2012ETC1822'),
('10048', 'UDAYKARTHIK MURUGANAND', '1234', 'I2012ETC1823'),
('10050', 'BHATT VIRAT JEETENDRA', '1234', 'C2012CM1070'),
('10051', 'KOMPLE PRIYANKA PANDURANG', '1234', 'C2012EX1241'),
('10052', 'SANDAL AKSHAY DILBAGHSINGH', '1234', 'C2012CM1071'),
('10054', 'SINGH KISHAN RAJENDRAPRASAD', '1234', 'C2012EX1242'),
('10055', 'SHETTIGAR VINAYAK KRISHNA', '1234', 'C2012CM1072'),
('10056', 'SHAIKH JAVERIA ANWAR', '1234', 'C2012IT1648'),
('10057', 'DHOKE ASHWITA VITHOBA', '1234', 'C2012IT1649'),
('10058', 'YERUNKAR SHWETA NANDKUMAR', '1234', 'C2012IT1650'),
('10059', 'KHOT VISHAL JAGANNATH', '1234', 'C2012IT1651'),
('10061', 'BHILLARE SIDDHESH SANJAY', '1234', 'C2012EX1243'),
('10062', 'MANJREKAR SHWETA GAJANAN', '1234', 'C2012CM1074'),
('10063', 'CHOUDHARY VINAY SUNIL', '1234', 'C2012ETC1824'),
('10064', 'BHAYYE ABHISHEK BHIKAJI', '1234', 'C2012IT1652'),
('10065', 'BINAYKIYA SIDDHARTH GANESHLAL', '1234', 'C2012CM1075'),
('10066', 'AHERKAR SANTOSH KALURAM', '1234', 'C2012CM1076'),
('10069', 'YADAV SHRADDHA SANTLAL', '1234', 'C2012IT1653'),
('10070', 'CHHEDA BHAKTI RAMESH', '1234', 'M2012CM1078'),
('10071', 'SHETTY YASH SANTOSH', '1234', 'C2012ETC1825'),
('10072', 'TANDEL SONIA SHIRISH', '1234', 'C2012IT1654'),
('10073', 'SANGLE TANVI CHANDRAKANT', '1234', 'C2012IT1655'),
('10074', 'NAGDA HIMANSHU JAMBUKUMAR', '1234', 'C2012IT1656'),
('10075', 'GAJARE HIMANSHU KISHOR', '1234', 'C2012EX1245'),
('10078', 'KHORWAL RAVINDRA RAMCHANDRA', '1234', 'C2012EX1247'),
('10080', 'URMISHA UMESH KORGAONKAR', '1234', 'I2012CM1080'),
('10081', 'DHURE RAJ DEEPAK', '1234', 'C2012IT1658'),
('10082', 'SAWANT PRAJAKTA PARASU', '1234', 'C2012EX1248'),
('10085', 'PALECHA NIRAJ SUNIL', '1234', 'C2012IT1660'),
('10230', 'sunny jain', 'abcd', 'C2012CM1110'),
('11034', 'GADA ADITI UTKAL\r\n', '12345', 'M2013IT2601'),
('11037', 'DOSHI BHAKTI SANJAY\r\n', '12345', 'M2013IT2602'),
('11038', 'CHHEDA UMANG HARSHAD\r\n', '12345', 'M2013IT2603'),
('11039', 'DOSHI NIRAV RAJNIKANT\r\n', '12345', 'M2013CM2002'),
('11040', 'VORA VIRAL BHUPENDRA\r\n', '12345', 'M2013CM2003'),
('11041', 'SHAH DARSHAK KETAN\r\n', '12345', 'M2013CM2004'),
('11043', 'CHHEDA SMIT SANJAY\r\n', '12345', 'M2013IT2604'),
('11044', 'CHHEDA JAY GIRISH\r\n', '12345', 'M2013CM2006'),
('11045', 'GOSALIA MIHIR NITIN\r\n', '12345', 'M2013CM2007'),
('11047', 'MEHTA NAYAN ANIL\r\n', '12345', 'M2013CM2008'),
('11056', 'SHAH MRUNAL RAJIV', '1234', 'M2012CM3572'),
('11057', 'CHHEDA HARDIK VINOD', '1234', 'M2012CM3571'),
('11059', 'BHANSALI SAGAR MAHAVIR', '1234', 'M2012CM3573'),
('11060', 'SANIL PARAG JHAVERI', '1234', 'M2012CM3574'),
('11087', 'GOSALIA MIHIR NITIN', '1234', 'M2012CM3570'),
('2398', 'NIKITA J', '1234', 'M2012CM3569'),
('9803', 'MEHTA KINJAL PRAVIN\r\n', '12345', 'M2012CM1001'),
('9814', 'CHHEDA MANSI HASMUKH\r\n', '12345', 'M2012CM1002'),
('9816', '\r\nPARMAR BHAVIN DILIP\r\n', '12345', 'M2012CM1003'),
('9827', 'SHAH KRISHMA PARESH\r\n', '12345', 'M2012CM1004'),
('9830', 'NANDU RACHIT SANJAY\r\n', '12345', 'M2012CM1005'),
('9835', 'GALA JIGAR NAVIN\r\n', '12345', 'M2012CM1007'),
('9836', 'SHAH MANAN \r\n', '12345', 'M2012CM1008'),
('9837', 'SHAH KHUSAL RAMESH\r\n', '12345', 'M2012CM1009'),
('9839', 'BARVALIA SALONI ANIL\r\n', '12345', 'M2012CM1010'),
('9913', 'Forum Sheth', 'forum', 'M2012CM1052'),
('9914', 'Leela Jain', '1234', 'M2012CM1053'),
('9970', 'SHINDE RUPESH ARUN', '1234', 'C2012IT1620'),
('9971', 'SHAH HARSH RAJESH', '1234', 'C2012EX1212'),
('9972', 'PANDEY NIDHI RAMAKANT', '1234', 'C2012CM1062'),
('9973', 'SETH SAMRIDHI NAVNEET', '1234', 'C2012EX1213'),
('9974', 'MANIYAR SANA JAWEED', '1234', 'I2012EX1214'),
('9976', 'SHELAR SANKET SURESH', '1234', 'I2012EX1216'),
('9977', 'JAIN VAIBHAV ASHOK', '1234', 'I2012EX1217'),
('9978', 'PATIL KANCHAN HARI', '1234', 'C2012EX1218'),
('9980', 'KHAJANCHI SOURABH ASHOK', '1234', 'I2012EX1220'),
('9981', 'MICHAEL ASHWIN OOMMEN', '1234', 'I2012EX1221'),
('9982', 'SARKAR MONALISHA SISHIR', '1234', 'I2012EX1222'),
('9983', 'RAJPUT SOWMYA MOOLCHANDRA', '1234', 'I2012EX1223'),
('9984', 'MEHTA VINIT NILESH', '1234', 'I2012EX1224'),
('9985', 'MAHAJAN AMEYA VIJAY', '1234', 'I2012EX1225'),
('9987', 'Ankit Alok Mathur', '1234', 'I2012EX1227'),
('9989', 'BAGWE BHAKTI RAMCHANDRA', '1234', 'C2012CM1063'),
('9990', 'Rahul Kumar', '1234', 'I2012EX1228'),
('9991', 'KULKARNI SOHAM SUNIL', '1234', 'C2012CM1064'),
('9992', 'PAWAR PRIYA BAJIRAO', '1234', 'C2012EX1229'),
('9993', 'POOJA SIVANKUTTY NAIR', '1234', 'C2012EX1230'),
('9995', 'LAD ADITYA SADANAND', '1234', 'C2012EX1231'),
('9996', 'NAKHAWA ANISH AMRESH', '1234', 'C2012CM1065'),
('9997', 'PILLAI GAUTAM RAMANUJAN', '1234', 'I2012EX1232'),
('9999', 'SONAWANE AKSHADA GAUTAM', '1234', 'I2012EX1234');

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
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `g_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
