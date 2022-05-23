-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 09:09 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gtbpilibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `issuebook`
--

CREATE TABLE IF NOT EXISTS `issuebook` (
  `studentid` varchar(100) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `publication` varchar(100) NOT NULL,
  `issuedate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuebook`
--

INSERT INTO `issuebook` (`studentid`, `bookname`, `author`, `publication`, `issuedate`) VALUES
('CS/1435051002', 'Software Engineering', 'K.K. Aggarwal', 'New Age International Publication', '2017-05-09'),
('CS/1435051004', 'Software Engineering', 'K.K. Aggarwal', 'New Age International Publication', '2017-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `returnbook`
--

CREATE TABLE IF NOT EXISTS `returnbook` (
  `studentid` varchar(100) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `publication` varchar(100) NOT NULL,
  `returndate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returnbook`
--

INSERT INTO `returnbook` (`studentid`, `bookname`, `author`, `publication`, `returndate`) VALUES
('CS/1435051002', 'Software Engineering', 'K.K. Aggarwal', 'New Age International Publication', '2017-05-09'),
('CS/1435051004', 'Software Engineering', 'K.K. Aggarwal', 'New Age International Publication', '2017-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `systemuser`
--

CREATE TABLE IF NOT EXISTS `systemuser` (
  `userid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `systemuser`
--

INSERT INTO `systemuser` (`userid`, `name`, `branch`, `year`, `Address`, `password`) VALUES
('CS/1435051002', 'Aakash', 'COMPUTER ENGG', '3rd Year', 'Delhi', '1234'),
('CS/1435051004', 'ALBAB BARAR', 'COMPUTER ENGG', '3rd Year', '5 a bharat nagar,new friends colony,new delhi', '1234'),
('CS/1435051007', 'chinmay', 'COMPUTER ENGG', '3rd Year', 'Delhi', '1234'),
('CS/1435051009', 'ALBAB BARAR', 'AUTOMOBILE ENGG', '3rd Year', '5 a bharat nagar,new friends colony,new delhi', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `issuebook`
--
ALTER TABLE `issuebook`
 ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `returnbook`
--
ALTER TABLE `returnbook`
 ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `systemuser`
--
ALTER TABLE `systemuser`
 ADD PRIMARY KEY (`userid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
