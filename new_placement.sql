-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2017 at 04:34 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `message_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `cur_date` date NOT NULL,
  `cur_time` time NOT NULL,
  `u_id` int(10) NOT NULL,
  `sent` varchar(10) NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `dipmarks`
--

CREATE TABLE `dipmarks` (
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

-- --------------------------------------------------------

--
-- Table structure for table `hscmark`
--

CREATE TABLE `hscmark` (
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
  `py3` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `c_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message_list`
--

CREATE TABLE `message_list` (
  `t_id` int(10) NOT NULL,
  `mail_id` varchar(10) NOT NULL,
  `u_id` varchar(10) NOT NULL,
  `register` varchar(3) NOT NULL DEFAULT 'n',
  `round` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
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
  `publication` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
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
  `c_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `smartcard_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `user_id` (`u_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `dipmarks`
--
ALTER TABLE `dipmarks`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `hscmark`
--
ALTER TABLE `hscmark`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `u_id_2` (`u_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mail_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `message_list`
--
ALTER TABLE `message_list`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `g_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message_list`
--
ALTER TABLE `message_list`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
