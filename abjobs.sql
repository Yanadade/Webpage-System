-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 09:36 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abjobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'somjai@abjobs.com');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `com_id` int(11) NOT NULL,
  `com_email` varchar(50) NOT NULL,
  `com_name` varchar(50) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `subdistrict` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `comsize` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`com_id`, `com_email`, `com_name`, `address1`, `address2`, `subdistrict`, `district`, `province`, `telephone`, `comsize`) VALUES
(18, 'ab.entertianment@gamil.com', 'ab entertianment.co.,ltd', '987 Lumpini', 'wirless rd', 'phayathai', 'phayathai', 'Bangkok', '023456786', 1000),
(19, 'chicthai@hotmail.com', 'Chic Chic', 'Saim Square Soi10', 'Saim Square', 'Phayathai', 'Phayathai', 'Bangkok', '029876534', 50),
(20, 'airline@gmail.com', 'airline', 'Don Muang airport', 'Don Muang airport', 'Don Muang', 'Don Muang', 'Bangkok', '0811234567', 1000),
(21, 'Service123@outlook.com', 'CarService', '918 ', 'Bang Bo rd.', 'Bang Bo', 'Bang Bo', 'Samutsakorn', '0981234567', 10),
(22, 'swu@swu.ac.th', 'swu', 'swu', 'swu', 'asoke', 'klong-tei nai', 'Bangkok', '029876576', 10000),
(24, 'tom.jp@hotmail.com', 'JP Market', '678', 'Bang Na rd.', 'Bang Na', 'Bang Na', 'Bangkok', '0987654321', 500),
(31, 'tonsak1234@swu.ac.th', 'swu', 'swu', 'swu', 'asoke', 'klong-tei nai', 'Bangkok', '0987654321', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `jobposting`
--

CREATE TABLE `jobposting` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `job_indus` varchar(50) NOT NULL,
  `job_function` varchar(50) NOT NULL,
  `job_location` varchar(50) NOT NULL,
  `career_level` varchar(50) NOT NULL,
  `quali_level` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL,
  `job_type` varchar(50) NOT NULL,
  `job_des` text NOT NULL,
  `lang_skill` text NOT NULL,
  `hard_skill` text NOT NULL,
  `soft_skill` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobposting`
--

INSERT INTO `jobposting` (`job_id`, `job_title`, `job_indus`, `job_function`, `job_location`, `career_level`, `quali_level`, `salary`, `job_type`, `job_des`, `lang_skill`, `hard_skill`, `soft_skill`) VALUES
(13, 'Data Science', 'Entertainment', 'IT', 'Bangkok', 'Entry Level', 'Degree', 100000, 'Full Time', 'Coding', 'English', 'Python', 'Team work'),
(14, 'Sale Manager', 'Food and beverage', 'Sales', 'Bangkok', 'Manager', 'Degree', 50000, 'Contract', 'contact supplier', 'Chinese', 'Driving Car', 'Communication'),
(15, 'Admin', 'Aerospace', 'Admin & HR', 'Overseas', 'Senior Executive', 'Master', 70000, 'Permanent', 'Report Information', 'English', 'MS word', 'Quick Response'),
(16, 'mechanic', 'Transportation', 'FreshGrad', 'Samutprakarn', 'Entry Level', 'Diploma', 10000, 'Temporary', 'Car service', 'Thai', 'maintenance', 'service mind'),
(17, 'Data Engineer', 'Hospitality', 'IT', 'Pathumthani', 'Officer / Executive', 'Master', 70000, 'Permanent', 'Coding', 'Thai', 'Python', 'Team work'),
(18, 'Data Sci', 'Aerospace', 'Accounting', 'Samutsakorn', 'Entry Level', 'Doctor', 10000, 'Full Time', 'coding', 'English', 'Python', 'creative thinking');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pack_id` int(11) NOT NULL,
  `pack_name` varchar(50) NOT NULL,
  `cost` int(11) NOT NULL,
  `total_jpost` int(11) NOT NULL,
  `use_jpost` int(11) NOT NULL,
  `start` timestamp NOT NULL DEFAULT current_timestamp(),
  `exp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pack_id`, `pack_name`, `cost`, `total_jpost`, `use_jpost`, `start`, `exp`) VALUES
(7, 'Package2', 5000, 200, 20, '2022-12-21 10:59:51', '2022-12-20 17:00:00'),
(8, 'Package1', 1000, 10, 8, '2022-12-21 11:21:32', '2022-12-20 17:00:00'),
(10, 'Package2', 5000, 200, 8, '2022-12-21 11:35:27', '2022-12-20 17:00:00'),
(11, 'Package2', 10000, 250, 10, '2022-12-21 11:51:21', '2022-12-20 17:00:00'),
(12, 'Package1', 3000, 100, 20, '2022-12-21 11:53:37', '2022-12-20 17:00:00'),
(13, 'Package2', 15000, 300, 250, '2022-12-21 12:02:27', '2022-12-20 17:00:00'),
(14, 'Package2', 1000, 20, 20, '2022-12-21 14:42:28', '2022-12-20 17:00:00'),
(15, 'Package2', 5000, 100, 10, '2022-12-22 03:25:15', '2022-12-21 17:00:00'),
(16, 'Package2', 3000, 100, 20, '2022-12-22 03:26:27', '2022-12-21 17:00:00'),
(17, 'Package1', 10000, 200, 150, '2022-12-22 09:54:44', '2022-12-21 17:00:00'),
(23, 'Package2', 5000, 200, 10, '2022-12-23 06:13:07', '2022-12-23 06:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'Harry', 'Harry@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(2, 'Manee', 'Manee@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, 'Jackson', 'Jack123@hotmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(4, 'Tee', 'Tee@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, 'somsak', 'somsak@outlook.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, 'sombat', 'sombat@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(7, 'samantra', 'samantra@swu.ac.th', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, 'teena', 'teena@hotmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(9, 'ake', 'ake@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(10, 'Tonsak', 'Tonsak1234@swu.ac.th', 'd41d8cd98f00b204e9800998ecf8427e'),
(11, 'rose', 'rose@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(12, 'ab', 'ab@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(13, 'wee', 'wee@swu.ac.th', 'd41d8cd98f00b204e9800998ecf8427e'),
(14, 'zxc', 'zxc@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(15, 'thongchai', 'thongchai@hotmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(16, 'Tony123', 'Tony123@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(17, 'kitty', 'kitty789@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `jobposting`
--
ALTER TABLE `jobposting`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `jobposting`
--
ALTER TABLE `jobposting`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pack_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
