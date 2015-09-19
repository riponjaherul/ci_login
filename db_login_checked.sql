-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2015 at 07:21 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_login_checked`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(3) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_email_address` varchar(30) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `access_level` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email_address`, `admin_password`, `access_level`) VALUES
(1, 'Ripon Jaherul', 'ripon@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 'Amit Dutta', 'amit@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(3, 'Mamun Ahamed', 'mamun@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(4, 'Rasel Karim', 'rasel@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(5, 'Sabbir Alam', 'sabbir@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(6, 'Nasir Hossain', 'nasir@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(7, 'Md Safi', 'safi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(8, 'Kafi Khan', 'kafi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(9, 'Jisan Ahamed', 'jisan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(10, 'Admin Panel', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login_data`
--

CREATE TABLE IF NOT EXISTS `tbl_login_data` (
  `login_data_id` int(3) NOT NULL,
  `login_email_address` varchar(50) NOT NULL,
  `login_time` varchar(50) NOT NULL,
  `logout_time` varchar(40) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_login_data`
--

INSERT INTO `tbl_login_data` (`login_data_id`, `login_email_address`, `login_time`, `logout_time`) VALUES
(68, 'rasel@gmail.com', '2015-09-18 12:03:25 am', '2015-09-18 12:04:00 am'),
(69, 'kafi@gmail.com', '2015-09-18 12:04:19 am', '2015-09-18 12:04:42 am'),
(70, 'rasel@gmail.com', '2015-09-18 12:05:32 am', '2015-09-18 12:08:54 am'),
(71, 'kafi@gmail.com', '2015-09-18 12:24:45 am', '2015-09-18 12:31:22 am'),
(72, 'jisan@gmail.com', '2015-09-18 12:31:28 am', '2015-09-18 12:51:28 am'),
(73, 'kafi@gmail.com', '2015-09-18 12:51:41 am', '2015-09-18 01:09:04 am'),
(74, 'ripon@gmail.com', '2015-09-18 01:09:23 am', '2015-09-18 01:10:04 am'),
(75, 'amit@gmail.com', '2015-09-18 01:10:30 am', '2015-09-18 01:11:09 am'),
(76, 'rasel@gmail.com', '2015-09-18 01:12:07 am', '2015-09-18 01:12:17 am'),
(77, 'amit@gmail.com', '2015-09-18 01:12:49 am', '2015-09-18 01:13:11 am'),
(78, 'jisan@gmail.com', '2015-09-18 01:17:43 am', '2015-09-18 01:17:53 am'),
(79, 'amit@gmail.com', '2015-09-18 01:18:16 am', '2015-09-18 01:19:12 am'),
(80, 'rasel@gmail.com', '2015-09-18 01:20:40 am', '2015-09-18 01:21:02 am'),
(81, 'ripon@gmail.com', '2015-09-18 07:26:54 pm', '2015-09-18 07:38:21 pm'),
(82, 'kafi@gmail.com', '2015-09-18 07:38:42 pm', '2015-09-18 07:40:36 pm'),
(83, 'rasel@gmail.com', '2015-09-18 07:40:47 pm', '2015-09-18 07:40:57 pm'),
(84, 'jisan@gmail.com', '2015-09-18 07:41:44 pm', '2015-09-18 07:41:58 pm'),
(85, 'kafi@gmail.com', '2015-09-18 07:43:05 pm', '2015-09-18 07:43:19 pm'),
(86, 'ripon@gmail.com', '2015-09-19 02:53:49 am', '2015-09-19 02:54:17 am'),
(87, 'mamun@gmail.com', '2015-09-19 02:54:41 am', '2015-09-19 02:54:45 am'),
(88, 'kafi@gmail.com', '2015-09-19 02:54:57 am', '2015-09-19 02:55:01 am'),
(89, 'rasel@gmail.com', '2015-09-19 02:55:11 am', '2015-09-19 02:55:14 am'),
(90, 'ripon@gmail.com', '2015-09-19 02:55:22 am', '2015-09-19 02:55:26 am'),
(91, 'ripon@gmail.com', '2015-09-19 11:10:12 am', '2015-09-19 11:10:26 am'),
(92, 'ripon@gmail.com', '2015-09-19 11:14:02 am', '2015-09-19 11:15:56 am'),
(93, 'ripon@gmail.com', '2015-09-19 11:16:04 am', '2015-09-19 11:18:45 am'),
(94, 'ripon@gmail.com', '2015-09-19 11:18:53 am', '2015-09-19 11:19:03 am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_login_data`
--
ALTER TABLE `tbl_login_data`
  ADD PRIMARY KEY (`login_data_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_login_data`
--
ALTER TABLE `tbl_login_data`
  MODIFY `login_data_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=95;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
