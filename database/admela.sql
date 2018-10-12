-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2018 at 08:40 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admela`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `aid` int(11) NOT NULL,
  `websiteId` int(11) NOT NULL,
  `websiteOwnerId` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `cost` bigint(20) NOT NULL,
  `favourites` int(11) NOT NULL,
  `imgdst1` varchar(500) NOT NULL,
  `imgdst2` varchar(500) NOT NULL,
  `imgdst3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ad_type`
--

CREATE TABLE `ad_type` (
  `tid` int(11) NOT NULL,
  `adtype` int(11) NOT NULL,
  `totalWebsites` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `fid` int(11) NOT NULL,
  `adid` int(11) NOT NULL,
  `favByUserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `fullname`, `email`, `pwd`) VALUES
(1, 'amit99', 'Amit Bhujbal', 'amit.bhujbal@somaiya.edu', 'amitamit'),
(2, 'sidhero', 'Siddharth Umachandar', 'sid9805@somaiya.edu', 'sidsid'),
(3, 'SHARVAI', 'Sharvai Patil', 'sharvai.p@somaiya.edu', 'sharvaisharvai'),
(4, 'Joker6996', 'Shivam Mahajan', 'spmshivam@gmail.com', 'shivamspm'),
(5, 'MSS', 'Mihir Shah', 'mihir.shah@gmail.com', 'mihirshah'),
(8, 'shivamkul', 'shivam mahajan', 'shivam@gmail.com', '$2y$10$Yml89LST2G/aiw5V17FtuO.CdkAuFThXG7S66LFPoG26mqPEhOtDK');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `wid` int(11) NOT NULL,
  `websiteName` varchar(50) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `websiteType` int(11) NOT NULL,
  `pageviews` int(11) NOT NULL,
  `pg_lastmonth` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `website_type`
--

CREATE TABLE `website_type` (
  `wtid` int(11) NOT NULL,
  `wbtype` int(11) NOT NULL,
  `totalWebsites` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `websiteOwnerId` (`websiteOwnerId`),
  ADD KEY `ads_ibfk_2` (`websiteId`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `ad_type`
--
ALTER TABLE `ad_type`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `adid` (`adid`),
  ADD KEY `favByUserId` (`favByUserId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`wid`),
  ADD KEY `websites_ibfk_1` (`ownerId`),
  ADD KEY `websiteType` (`websiteType`);

--
-- Indexes for table `website_type`
--
ALTER TABLE `website_type`
  ADD PRIMARY KEY (`wtid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ad_type`
--
ALTER TABLE `ad_type`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `website_type`
--
ALTER TABLE `website_type`
  MODIFY `wtid` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_ibfk_1` FOREIGN KEY (`websiteOwnerId`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `ads_ibfk_2` FOREIGN KEY (`websiteId`) REFERENCES `websites` (`wid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ads_ibfk_3` FOREIGN KEY (`type`) REFERENCES `ad_type` (`tid`);

--
-- Constraints for table `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`adid`) REFERENCES `ads` (`aid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `favourites_ibfk_2` FOREIGN KEY (`favByUserId`) REFERENCES `users` (`uid`) ON UPDATE CASCADE;

--
-- Constraints for table `websites`
--
ALTER TABLE `websites`
  ADD CONSTRAINT `websites_ibfk_1` FOREIGN KEY (`ownerId`) REFERENCES `users` (`uid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `websites_ibfk_2` FOREIGN KEY (`websiteType`) REFERENCES `website_type` (`wtid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
