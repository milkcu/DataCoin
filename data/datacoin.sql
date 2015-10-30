-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 30, 2015 at 11:22 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `datacoin`
--

-- --------------------------------------------------------

--
-- Table structure for table `dc_game`
--

CREATE TABLE `dc_game` (
  `gid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `state` varchar(30) NOT NULL,
  `coinlimit` int(11) NOT NULL DEFAULT '0',
  `coinnow` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dc_game`
--

INSERT INTO `dc_game` (`gid`, `pid`, `state`, `coinlimit`, `coinnow`) VALUES
(1, 5, 'new', 0, 0),
(2, 8, 'new', 0, 0),
(3, 8, 'new', 0, 0),
(4, 8, 'new', 0, 0),
(5, 8, 'new', 0, 0),
(6, 8, 'new', 0, 0),
(7, 8, 'new', 0, 0),
(8, 8, 'new', 0, 0),
(9, 8, 'new', 888, 0),
(10, 8, 'new', 0, 0),
(11, 8, 'new', 0, 0),
(12, 8, 'new', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dc_log`
--

CREATE TABLE `dc_log` (
  `lid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `dealtime` varchar(20) NOT NULL,
  `dealno` varchar(30) NOT NULL,
  `coinnum` int(11) NOT NULL,
  `description` text,
  `result` varchar(20) DEFAULT NULL,
  `returncode` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dc_log`
--

INSERT INTO `dc_log` (`lid`, `gid`, `uid`, `mobile`, `dealtime`, `dealno`, `coinnum`, `description`, `result`, `returncode`) VALUES
(1, 9, 9, '18353115149', '8888', '9999', 1, 'give', 'success', '10086'),
(2, 9, 9, '18353115149', '8888', '9999', 1, 'give', 'success', '10086'),
(3, 9, 9, '18353115149', '8888', '9999', 1, 'give', 'success', '10086'),
(4, 9, 9, '18353115149', '8888', '9999', 1, 'give', 'success', '10086'),
(5, 9, 9, '18353115149', '8888', '9999', 1, 'give', 'success', '10086'),
(6, 9, 9, '18353115149', '8888', '9999', 1, 'give', 'success', '10086'),
(7, 9, 9, '18353115149', '8888', '9999', 1, 'give', 'success', '10086'),
(8, 9, 9, '18353115149', '8888', '9999', 1, 'give', 'success', '10086'),
(9, 9, 9, '18353115149', '8888', '9999', 1, 'give', 'success', '10086'),
(10, 9, 9, '18353115149', '8888', '9999', 1, 'give', 'success', '10086'),
(11, 9, 9, '18353115149', '8888', '9999', 1, 'give', 'success', '10086'),
(12, 9, 9, '18353115149', '8888', '9999', 1, 'give', 'success', '10086'),
(13, 9, 9, '18353115149', '8888', '9999', 1, 'give', 'success', '10086'),
(14, 9, 9, '18353115149', '8888', '9999', 1, 'give', 'success', '10086'),
(15, 9, 9, '18353115149', '8888', '9999', 1, 'give', 'success', '10086'),
(16, 9, 9, '18353115149', '8888', '9999', 1, 'give', 'success', '10086'),
(17, 9, 9, '18353115149', '8888', '9999', 1, 'give', 'success', '10086'),
(18, 9, 9, '18353115149', '8888', '9999', 1, 'give', 'success', '10086'),
(19, 9, 9, '18353115149', '8888', '9999', 1, 'give', 'success', '10086'),
(20, 9, 9, '18353115149', '8888', '9999', 1, 'give', 'success', '10086');

-- --------------------------------------------------------

--
-- Table structure for table `dc_option`
--

CREATE TABLE `dc_option` (
  `name` varchar(32) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dc_option`
--

INSERT INTO `dc_option` (`name`, `value`) VALUES
('coin_limit', '6');

-- --------------------------------------------------------

--
-- Table structure for table `dc_user`
--

CREATE TABLE `dc_user` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `sum` int(11) NOT NULL DEFAULT '0',
  `today` int(11) NOT NULL DEFAULT '0',
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dc_user`
--

INSERT INTO `dc_user` (`uid`, `pid`, `mobile`, `sum`, `today`, `state`) VALUES
(1, 9, '13776043903', 0, 0, 'black'),
(2, 9, '18353115149', 0, 0, 'normal'),
(3, 9, '18353115149', 0, 0, 'normal'),
(4, 9, '18353115149', 0, 0, 'normal'),
(5, 9, '18353115149', 0, 0, 'normal'),
(6, 9, '18353115149', 0, 0, 'normal'),
(7, 9, '18353115149', 0, 0, 'normal'),
(8, 9, '18353115149', 0, 0, 'normal'),
(9, 9, '18353115149', 0, 0, 'normal'),
(10, 9, '18353115149', 0, 0, 'black'),
(11, 9, '18353115149', 0, 0, 'normal'),
(12, 9, '18353115149', 0, 0, 'normal'),
(13, 9, '18353115149', 0, 0, 'normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dc_game`
--
ALTER TABLE `dc_game`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `dc_log`
--
ALTER TABLE `dc_log`
  ADD PRIMARY KEY (`lid`,`gid`,`uid`);

--
-- Indexes for table `dc_option`
--
ALTER TABLE `dc_option`
  ADD PRIMARY KEY (`name`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `dc_user`
--
ALTER TABLE `dc_user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dc_game`
--
ALTER TABLE `dc_game`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `dc_log`
--
ALTER TABLE `dc_log`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `dc_user`
--
ALTER TABLE `dc_user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;