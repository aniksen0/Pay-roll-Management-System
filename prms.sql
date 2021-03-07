-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2021 at 11:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prms`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `uiid` int(30) NOT NULL,
  `attendance_date` date NOT NULL,
  `emp_id` int(30) NOT NULL,
  `time_in` timestamp NOT NULL DEFAULT current_timestamp(),
  `time_out` timestamp NULL DEFAULT NULL,
  `comments` varchar(255) NOT NULL DEFAULT 'No Comments',
  `overtime` varchar(30) DEFAULT NULL,
  `status1` int(30) NOT NULL,
  `created_by` varchar(255) NOT NULL DEFAULT 'system'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`uiid`, `attendance_date`, `emp_id`, `time_in`, `time_out`, `comments`, `overtime`, `status1`, `created_by`) VALUES
(1, '2021-02-01', 7, '2021-02-20 12:09:00', '2021-02-20 12:09:00', '  Without application leave', '100', 4, '6HR badol'),
(15, '2021-02-04', 6, '2021-02-20 02:01:00', '2021-02-20 03:00:00', 'no comments', '-25260', 3, ''),
(16, '2021-02-04', 7, '2021-02-19 23:00:00', '2021-02-20 07:00:00', 'no comments', '0', 3, ''),
(17, '2021-02-02', 7, '2021-02-20 01:00:00', '2021-02-20 01:10:00', 'no comments', '-28200', 3, ''),
(18, '2021-02-21', 9, '2021-02-21 04:00:00', '2021-02-21 14:00:00', 'great', '+7200', 3, ''),
(20, '2021-02-20', 9, '2021-02-20 00:50:34', NULL, '', NULL, 3, 'system'),
(21, '2021-02-21', 9, '2021-02-20 18:04:33', NULL, '', NULL, 3, 'system');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`uiid`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `status1` (`status1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `uiid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `empinfo` (`emp_id`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`status1`) REFERENCES `attendancestatus` (`status_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
