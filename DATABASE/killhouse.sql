-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2017 at 04:30 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `killhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('killhouse@ganesh', 'teamkillhouse');

-- --------------------------------------------------------

--
-- Table structure for table `ip`
--

CREATE TABLE IF NOT EXISTS `ip` (
  `ip` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ip`
--

INSERT INTO `ip` (`ip`, `id`) VALUES
(' 192.168.1.102', 1);

-- --------------------------------------------------------

--
-- Table structure for table `last`
--

CREATE TABLE IF NOT EXISTS `last` (
  `last` int(11) NOT NULL,
  `id` int(11) NOT NULL DEFAULT '1',
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `last`
--

INSERT INTO `last` (`last`, `id`, `img`) VALUES
(63432138, 1, 0x36303039383033672e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `user` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `image` blob NOT NULL,
  `last` int(11) NOT NULL,
  `cod4` int(11) NOT NULL DEFAULT '0',
  `blur` int(11) NOT NULL DEFAULT '0',
  `codwaw` int(11) NOT NULL DEFAULT '0',
  `tf2` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`user`, `name`, `email`, `pass`, `id`, `active`, `image`, `last`, `cod4`, `blur`, `codwaw`, `tf2`) VALUES
('AKSHAY', 'AKSHAY', 'akshay@kh.com', '123', 63432138, 0, '', 0, 0, 0, 0, 0),
('ali123', 'alkesh', 'hh@ff', 'gg', 99215251, 0, 0x3832303036363337494d472d32303135303133302d5741303037382e706e67, 0, 115, 197, 5, 9),
('BHAGYA RAJU', 'BHAGYA RAJU', 'bhagyaraju@kh.com', '123', 39278439, 0, '', 0, 0, 0, 0, 0),
('CHAITANYA REDDY', 'CHAITANYA REDDY', 'chaitu@kh.com', '123', 6629389, 0, '', 0, 0, 0, 0, 0),
('CHAITANYA VARMA ', 'CHAITANYA VARMA CH', 'chaitanya@kh.com', '123', 19622722, 0, '', 0, 0, 0, 0, 0),
('DHARMA TEJA', 'DHARMA TEJA', 'dharma@kh.com', '123', 30812102, 0, '', 0, 0, 0, 0, 0),
('DILEEP', 'DILEEP', 'dileep@kh.com', '123', 91044854, 0, '', 0, 0, 0, 0, 0),
('evilinfinite', 'Aditya Challa', 'aditya.ch555@gmail.com', 'qwertyuiop', 5258359, 0, 0x3636373634343536494d475f303633382e4a5047, 0, 147, 0, 0, 223),
('francheise', 'phani bhushan', 'ajspbhushan97@gmail.com', 'suguna', 968911, 0, 0x363639393339383236353036353631494d475f303733302e4a5047, 0, 0, 0, 0, 0),
('ganesh123', 'ganesh', 'kanaysam123@gmail.com', 'gannu', 9059309, 0, 0x353438373336303944534330303737322e4a5047, 0, 0, 0, 0, 0),
('ganu', 'Ganesh Kumar', 'id.ganesh123@gmail.com', 'ganesh', 93298844, 0, 0x3539383838343257494e5f32303136303831345f31355f31335f32395f50726f2e6a7067, 0, 109, 185, 208, 58),
('GOVIND DAGA', 'G.GOVIND DAGA', 'govind@kh.com', '123', 66977221, 0, '', 0, 0, 0, 0, 0),
('HARIKESH', 'P.HARIKESH', 'harikesh@kh.com', '123', 4158761, 0, '', 0, 0, 0, 0, 0),
('harshastunning', 'Praharsha', 'harshastunning63@gmail.com', '9703726682', 78177236, 0, 0x35343730323735306d656d626572312e6a7067, 0, 0, 0, 0, 0),
('JUNNU PATNAIK', 'A.JUNNU PATNAIK', 'junnu@kh.com', '123', 6695458, 0, '', 0, 0, 0, 0, 0),
('killerbunny', 'sai kumar', 'saikumar.g23@gmail.com', 'sai123', 4883117, 0, 0x363039323733353157494e5f32303137303130365f31315f35385f31345f50726f2e6a7067, 0, 0, 0, 0, 0),
('motu', 'patlu', 'motu@patlu', 'mp', 96043157, 0, 0x393731333433373467697068792e676966, 0, 0, 144, 78, 0),
('MOUNIKA', 'M.MOUNIKA', 'mounika@kh.com', '123', 58289738, 0, '', 0, 0, 0, 0, 0),
('MRT', 'MRT', 'mrt@kh.com', '123', 4307445, 0, '', 0, 0, 0, 0, 0),
('PVSP', 'PVS PRAKASH', 'prakash@kh.com', '123', 27675785, 0, '', 0, 0, 0, 0, 0),
('shooterX', 'Abhinav Singh', 'ganuman123@gmail.com', 'abhi', 41772592, 0, 0x373533313632323262616c6a6565745f5f726f636b696e5f5f5f7468655f6775697461725f5f616e696d617465645f5f62795f6a617963617365792d6435396f69346c2e676966, 0, 0, 0, 0, 0),
('suchi123', 'Suchitra', 'suchi123@gmail.com', 'ss', 56397116, 0, 0x3334383333363334676f6c642e706e67, 0, 0, 0, 0, 0),
('Vijay Kumar Verma ', 'G.vijay Kumar varma', 'vijay@kh.com', '123', 34165690, 0, '', 0, 0, 0, 0, 0),
('yourdad', 'Sai Kumar', 'saikumar.duragasi@gmail.com', 'babloo123', 84243866, 0, 0x363930393136323239643861636338662d303562642d343161342d396665642d3630363135623734363965612e6a7067, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`user`);

--
-- Indexes for table `ip`
--
ALTER TABLE `ip`
 ADD FULLTEXT KEY `ip` (`ip`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
 ADD PRIMARY KEY (`user`), ADD UNIQUE KEY `email` (`email`), ADD FULLTEXT KEY `name` (`name`,`pass`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
