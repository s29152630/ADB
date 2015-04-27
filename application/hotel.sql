-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2015 �?04 ??25 ??12:44
-- 伺服器版本: 5.6.24
-- PHP 版本： 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `hotel`
--

-- --------------------------------------------------------

--
-- 資料表結構 `bookingdate`
--

CREATE TABLE IF NOT EXISTS `bookingdate` (
  `roomID` int(11) NOT NULL,
  `recID` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `bookingdate`
--

INSERT INTO `bookingdate` (`roomID`, `recID`, `startDate`, `endDate`) VALUES
(1, 1, '2015-04-26', '2015-04-27'),
(2, 2, '2015-04-26', '2015-04-27');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `memID` int(11) NOT NULL,
  `memName` varchar(10) NOT NULL,
  `memKey` int(11) NOT NULL,
  `memEmail` varchar(50) NOT NULL,
  `memAddress` varchar(100) NOT NULL,
  `memTel` varchar(20) NOT NULL,
  `memGender` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`memID`, `memName`, `memKey`, `memEmail`, `memAddress`, `memTel`, `memGender`) VALUES
(0, 'Wonderful', 1234, '1234@gmail.com', 'Tapie city', '29123687', '男'),
(1, 'Wonderful', 1234, '1234@gmail.com', 'Tapie city', '29123687', '男');

-- --------------------------------------------------------

--
-- 資料表結構 `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `recID` int(11) NOT NULL,
  `recDate` date NOT NULL,
  `payDate` date NOT NULL,
  `memID` int(11) NOT NULL,
  `roomID` int(11) NOT NULL,
  `checkoutDate` date NOT NULL,
  `checkinDate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `record`
--

INSERT INTO `record` (`recID`, `recDate`, `payDate`, `memID`, `roomID`, `checkoutDate`, `checkinDate`) VALUES
(1, '2015-04-26', '2015-04-26', 1, 1, '2015-04-27', '2015-04-26');

-- --------------------------------------------------------

--
-- 資料表結構 `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `roomID` int(11) NOT NULL,
  `roomCapacity` int(11) NOT NULL,
  `roomPrice` int(11) NOT NULL,
  `roomStyle` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `room`
--

INSERT INTO `room` (`roomID`, `roomCapacity`, `roomPrice`, `roomStyle`) VALUES
(1, 2, 2000, '紅海風格'),
(2, 2, 2000, '紅海風格'),
(3, 2, 2000, '紅海風格'),
(4, 2, 2000, '紅海風格'),
(5, 2, 2000, '紅海風格');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `bookingdate`
--
ALTER TABLE `bookingdate`
  ADD PRIMARY KEY (`roomID`,`recID`);

--
-- 資料表索引 `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomID`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `room`
--
ALTER TABLE `room`
  MODIFY `roomID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
