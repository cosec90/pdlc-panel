-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 07, 2020 at 04:39 PM
-- Server version: 10.3.22-MariaDB-log
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `37546`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `ad_id` int(11) NOT NULL,
  `ad_fname` varchar(255) NOT NULL,
  `ad_lastname` varchar(255) NOT NULL,
  `ad_collegeDept` varchar(255) NOT NULL,
  `ad_courseDept` varchar(255) NOT NULL,
  `ad_username` varchar(255) NOT NULL,
  `ad_password` varchar(255) NOT NULL,
  `ad_email` varchar(255) NOT NULL,
  `ad_status` varchar(255) NOT NULL,
  `ad_authority` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`ad_id`, `ad_fname`, `ad_lastname`, `ad_collegeDept`, `ad_courseDept`, `ad_username`, `ad_password`, `ad_email`, `ad_status`, `ad_authority`) VALUES
(1, 'Shahid', 'Mansuri', 'degree', 'bscit', 'shahid37', '098f6bcd4621d373cade4e832627b4f6', 'mansurishahid37@gmail.com', 'ACTIVE', 'HEAD'),
(2, 'Lionel', 'Messi', 'degree', 'bmm', 'shahid69', '5f4dcc3b5aa765d61d8327deb882cf99', 'shahidmansuri317@gmail.com', 'ACTIVE', 'HEAD');

-- --------------------------------------------------------

--
-- Table structure for table `notice_tb`
--

CREATE TABLE `notice_tb` (
  `nt_id` int(11) NOT NULL,
  `ad_id` int(11) DEFAULT NULL,
  `nt_title` varchar(255) DEFAULT NULL,
  `nt_description` varchar(255) DEFAULT NULL,
  `nt_date` date DEFAULT NULL,
  `nt_docPath` varchar(255) DEFAULT NULL,
  `nt_noticeState` varchar(255) DEFAULT NULL,
  `nt_filename` varchar(255) NOT NULL,
  `nt_year` varchar(255) DEFAULT NULL,
  `nt_course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice_tb`
--

INSERT INTO `notice_tb` (`nt_id`, `ad_id`, `nt_title`, `nt_description`, `nt_date`, `nt_docPath`, `nt_noticeState`, `nt_filename`, `nt_year`, `nt_course`) VALUES
(41, 1, 'temp2', 'hasjd', '2020-03-02', '../uploads/g2.png', 'general', 'g2.png', 'all', 'bscit'),
(42, 1, 'Teasdagsv', 'asdv', '2020-03-07', '../uploads/Cheque mate.pdf', 'specific', 'Cheque mate.pdf', 'ty', 'bscit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `notice_tb`
--
ALTER TABLE `notice_tb`
  ADD PRIMARY KEY (`nt_id`),
  ADD KEY `ad_id` (`ad_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice_tb`
--
ALTER TABLE `notice_tb`
  MODIFY `nt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notice_tb`
--
ALTER TABLE `notice_tb`
  ADD CONSTRAINT `notice_tb_ibfk_1` FOREIGN KEY (`ad_id`) REFERENCES `admin_tb` (`ad_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
