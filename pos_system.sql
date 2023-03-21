-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 10:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `user_id` int(25) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_passwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`user_id`, `user_name`, `user_email`, `user_passwd`) VALUES
(7702502, 'ธันย์ชนก เจริญฟูประเสริฐ', 'thanchanokcha@cpall.co.th', '0818982715.Boo'),
(7702506, 'ฉัตรชัย สมสกุล', 'chatchaisom@cpall.co.th', 'Chatchai.56511335610');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_type` varchar(10) NOT NULL COMMENT 'Type',
  `user_id` int(11) NOT NULL COMMENT 'รหัสพนักงาน',
  `user_name` varchar(50) NOT NULL COMMENT 'Name',
  `user_date1` date NOT NULL COMMENT 'วันที่เริ่ม',
  `user_date2` date NOT NULL COMMENT 'วันสิ้นสุด',
  `user_time` time NOT NULL COMMENT 'Time',
  `user_note` varchar(500) NOT NULL COMMENT 'Note'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_type`, `user_id`, `user_name`, `user_date1`, `user_date2`, `user_time`, `user_note`) VALUES
(1, 'ลากิจ', 7702506, 'ฉัตรชัย สมสกุล', '2023-03-27', '2023-03-27', '08:30:00', 'ไปทำธุรส่วนตัว'),
(2, 'ลาป่วย', 7702506, 'ฉัตรชัย สมสกุล', '2023-03-29', '2023-03-31', '12:00:00', 'ไข้หวัด'),
(3, 'ลาป่วย', 7702506, 'ฉัตรชัย สมสกุล', '2023-04-01', '2023-04-06', '08:00:00', 'ติดเชื้อโควิต-19'),
(4, 'ลาป่วย', 7702502, 'ธันย์ชนก เจริญฟูประเสริฐ', '2023-03-06', '2023-03-07', '10:10:00', 'ลาป่วย'),
(5, 'ลากิจ', 7702504, 'ศุภกร ศิริยอด', '2023-03-08', '2023-03-09', '00:00:00', 'ไปทำธุรส่วนตัว');

-- --------------------------------------------------------

--
-- Table structure for table `work_pos`
--

CREATE TABLE `work_pos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(50) NOT NULL,
  `work_date` date NOT NULL,
  `work_in` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `work_pos`
--

INSERT INTO `work_pos` (`id`, `user_id`, `user_name`, `work_date`, `work_in`) VALUES
(58, 7702506, 'ฉัตรชัย สมสกุล', '2023-02-28', '11:28:56'),
(68, 7702506, 'ฉัตรชัย สมสกุล', '2023-03-04', '11:35:15'),
(69, 7702502, 'ธันย์ชนก เจริญฟูประเสริฐ', '2023-03-06', '15:57:26'),
(70, 7702504, 'ศุภกร ศิริยอด', '2023-03-06', '16:00:33'),
(71, 7702504, 'ศุภกร ศิริยอด', '2023-03-06', '16:00:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_pos`
--
ALTER TABLE `work_pos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `work_pos`
--
ALTER TABLE `work_pos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
