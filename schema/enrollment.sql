-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 05:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollment`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `admin_id` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deletes`
--

CREATE TABLE `deletes` (
  `reg_no` varchar(20) NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_name` varchar(255) NOT NULL,
  `total_seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_name`, `total_seats`) VALUES
('BBA', 100),
('CSE', 172),
('ECE', 99);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `reg_no` varchar(20) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `hsc_roll` int(11) NOT NULL,
  `college` varchar(255) NOT NULL,
  `hsc_gpa` float NOT NULL,
  `hsc_year` int(11) NOT NULL,
  `hsc_group` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`reg_no`, `department_name`, `std_name`, `gender`, `hsc_roll`, `college`, `hsc_gpa`, `hsc_year`, `hsc_group`, `f_name`, `m_name`) VALUES
('165020010445', 'ECE', 'Ugandian Girl Afra Amatul', 'female', 55454, 'ChudishLighting College of Technology', 1.5, 2012, 'science', 'Rabeya Kanom', 'Abed Bhai'),
('16502001082', 'CSE', 'Al Hasan Rahman', 'male', 111020, 'Govt.Science College, Dhaka', 4.88, 2016, 'Science', 'Billal Bhai', 'Billal Bhai er Bou'),
('16502001094', 'BBA', 'Somalian Girl Afra Amatul', 'female', 55454, 'ChudishLighting College of Technology', 1.5, 2012, 'science', 'Rabeya Kanom', 'Abed Bhai'),
('165020010945', 'ECE', 'Nigerian Girl Afra Amatul', 'female', 55454, 'ChudishLighting College of Technology', 1.5, 2012, 'science', 'Rabeya Kanom', 'Abed Bhai'),
('16502001111', 'CSE', 'Sadaf', 'male', 123456, 'City College', 5, 2016, 'Science', 'Akram Khan', 'Papia Khan'),
('165020094445', 'CSE', 'Chandian Girl Afra Amatul', 'female', 55454, 'ChudishLighting College of Technology', 1.5, 2012, 'science', 'Rabeya Kanom', 'Abed Bhai'),
('165020120495', 'CSE', 'Jamaican Girl Afra Amatul', 'female', 55454, 'ChudishLighting College of Technology', 1.5, 2012, 'science', 'Rabeya Kanom', 'Abed Bhai'),
('16502040445', 'CSE', 'Congian Girl Afra Amatul', 'female', 55454, 'ChudishLighting College of Technology', 1.5, 2012, 'science', 'Rabeya Kanom', 'Abed Bhai'),
('16502040495', 'CSE', 'Tobagian Girl Afra Amatul', 'female', 55454, 'ChudishLighting College of Technology', 1.5, 2012, 'science', 'Rabeya Kanom', 'Abed Bhai');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `reg_no` varchar(20) NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `deletes`
--
ALTER TABLE `deletes`
  ADD KEY `reg_no` (`reg_no`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_name`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`reg_no`),
  ADD KEY `department_name` (`department_name`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD KEY `reg_no` (`reg_no`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deletes`
--
ALTER TABLE `deletes`
  ADD CONSTRAINT `deletes_ibfk_1` FOREIGN KEY (`reg_no`) REFERENCES `student_info` (`reg_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deletes_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `administrator` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_info`
--
ALTER TABLE `student_info`
  ADD CONSTRAINT `student_info_ibfk_1` FOREIGN KEY (`department_name`) REFERENCES `department` (`department_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `updates`
--
ALTER TABLE `updates`
  ADD CONSTRAINT `updates_ibfk_1` FOREIGN KEY (`reg_no`) REFERENCES `student_info` (`reg_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `updates_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `administrator` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
