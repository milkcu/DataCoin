-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2015 at 07:25 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dc_game`
--

INSERT INTO `dc_game` (`gid`, `pid`, `pname`, `pimg`, `pfile`, `state`, `coinlimit`, `coinnow`) VALUES
(9, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(14, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(15, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(16, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(17, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(18, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(19, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(20, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(21, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(22, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(23, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(24, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(25, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(26, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(27, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(28, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(29, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(30, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(31, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(32, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(33, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(34, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(35, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(36, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(37, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(38, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(39, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(40, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(41, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(42, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(43, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(44, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(45, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(46, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(47, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(48, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(49, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(50, 88, '暗黑英雄', 'http://www.1000you.com/upload/yxk/201409/20140729032412352.png', 'http://sjg1.xiaopi.com:801/small/anheiyingxiong_an.apk', 'new', 30, 0),
(51, 22, 'aacc', 'bb', 'cc', 'new', 32, 0),
(52, 2, 'a', 'b', 'c', 'new', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dc_game`
--
ALTER TABLE `dc_game`
  ADD PRIMARY KEY (`gid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dc_game`
--
ALTER TABLE `dc_game`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;