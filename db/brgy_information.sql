-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 10:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brgy_information`
--

-- --------------------------------------------------------

--
-- Table structure for table `resident_details`
--

CREATE TABLE `resident_details` (
  `id` int(50) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `suffix` varchar(5) DEFAULT NULL,
  `Birthdate` date DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `contact_no` int(15) DEFAULT NULL,
  `complete_address` varchar(255) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `citizenship` varchar(50) DEFAULT NULL,
  `civil_status` varchar(50) DEFAULT NULL,
  `vaccinated` varchar(15) DEFAULT NULL,
  `voters` varchar(5) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resident_details`
--

INSERT INTO `resident_details` (`id`, `first_name`, `middle_name`, `last_name`, `suffix`, `Birthdate`, `age`, `gender`, `contact_no`, `complete_address`, `occupation`, `citizenship`, `civil_status`, `vaccinated`, `voters`, `file_name`, `image`, `full_name`) VALUES
(2, 'jj', 'L.', 'buendia', 'n/a', '2023-04-28', 26, 'Male', 999, 'a', 'a', 'aa', 'single', 'yes', 'yes', 'UPLOAD-USER.PNG-20230428-275672-644b60c9ced01.png', 'upload/UPLOAD-USER.PNG-20230428-275672-644b60c9ced01.png', 'buendia, jj L.');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `id` int(50) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resident_details`
--
ALTER TABLE `resident_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resident_details`
--
ALTER TABLE `resident_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
