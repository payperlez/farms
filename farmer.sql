-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 04:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmer`
--

-- --------------------------------------------------------

--
-- Table structure for table `edu_level`
--

CREATE TABLE `edu_level` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edu_level`
--

INSERT INTO `edu_level` (`id`, `status`) VALUES
(1, 'Primary'),
(4, 'JHS'),
(5, 'SHS/Vocational'),
(7, 'Tertiary'),
(8, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `emp_status`
--

CREATE TABLE `emp_status` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_status`
--

INSERT INTO `emp_status` (`id`, `status`) VALUES
(1, ' Artisan'),
(3, ' Farming'),
(5, ' Others');

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `age` int(100) NOT NULL,
  `gender` text NOT NULL,
  `community` text NOT NULL,
  `region` text NOT NULL,
  `household_status` int(10) NOT NULL,
  `no._dependents` int(255) NOT NULL,
  `marital_status` varchar(30) NOT NULL,
  `employment_status` int(10) NOT NULL,
  `educational_level` int(10) NOT NULL,
  `yrs_farming` int(2) NOT NULL,
  `source_income` varchar(20) NOT NULL,
  `lang` varchar(20) NOT NULL,
  `no._farms` int(2) NOT NULL,
  `trainee_status` int(10) NOT NULL,
  `level_training` tinyint(20) NOT NULL,
  `phone` int(70) NOT NULL,
  `momo` int(2) NOT NULL,
  `farmer_id` varchar(70) NOT NULL,
  `farm_id` varchar(70) NOT NULL,
  `buying_company` varchar(100) NOT NULL,
  `picture` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `status`) VALUES
(1, 'Twi'),
(2, 'English'),
(3, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `level_train`
--

CREATE TABLE `level_train` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level_train`
--

INSERT INTO `level_train` (`id`, `status`) VALUES
(1, '1st'),
(2, '2nd'),
(3, '3rd');

-- --------------------------------------------------------

--
-- Table structure for table `trainee`
--

CREATE TABLE `trainee` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainee`
--

INSERT INTO `trainee` (`id`, `status`) VALUES
(1, 'Owner'),
(2, 'Worker');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `edu_level`
--
ALTER TABLE `edu_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_status`
--
ALTER TABLE `emp_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level_train`
--
ALTER TABLE `level_train`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainee`
--
ALTER TABLE `trainee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `edu_level`
--
ALTER TABLE `edu_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `emp_status`
--
ALTER TABLE `emp_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `level_train`
--
ALTER TABLE `level_train`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trainee`
--
ALTER TABLE `trainee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
