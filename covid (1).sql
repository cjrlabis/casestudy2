-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 06:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `body_temp` varchar(255) DEFAULT NULL,
  `covid_diagnosed` varchar(255) DEFAULT NULL,
  `covid_encounter` varchar(255) DEFAULT NULL,
  `vaccinated` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `full_name`, `gender`, `age`, `mobile_no`, `body_temp`, `covid_diagnosed`, `covid_encounter`, `vaccinated`, `nationality`) VALUES
(3, 'Nice DigalS', 'Female', '23', '09558008440', '34', 'No', 'No', 'Yes', 'Filipino'),
(4, 'Johns', 'Male', '26', '09123456789', '36', 'No', 'Yes', 'Yes', 'Filipino'),
(5, 'asdasda', 'asdsad', 'asdas', 'asdsad', 'sadas', 'dasdsad', 'asdsad', 'sadsa', 'asdsad'),
(6, 'asdasda', 'asdsad', 'asdas', 'asdsad', 'sadas', 'dasdsad', 'asdsad', 'sadsa', 'asdsad'),
(7, 'asdasda', 'asdsad', 'asdas', 'asdsad', 'sadas', 'dasdsad', 'asdsad', 'sadsa', 'asdsad'),
(8, 'adsadsadsa', 'sadsadsa', 'sadsa', 'sadsad', 'sadsad', 'sadsad', 'sadsa', 'asda', 'sad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
