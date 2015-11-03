-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2015 at 07:27 PM
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
  `pname` text NOT NULL,
  `pimg` text NOT NULL,
  `pfile` text NOT NULL,
  `state` varchar(30) NOT NULL,
  `coinlimit` int(11) NOT NULL DEFAULT '0',
  `coinnow` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dc_option`
--

CREATE TABLE `dc_option` (
  `name` varchar(32) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dc_user`
--

CREATE TABLE `dc_user` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `puname` varchar(64) DEFAULT NULL,
  `mobile` varchar(20) NOT NULL,
  `sum` int(11) NOT NULL DEFAULT '0',
  `today` int(11) NOT NULL DEFAULT '0',
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dc_log`
--
ALTER TABLE `dc_log`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dc_user`
--
ALTER TABLE `dc_user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;