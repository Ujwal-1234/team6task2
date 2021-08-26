-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2021 at 01:32 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ldd`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance sheet`
--

CREATE TABLE `attendance sheet` (
  `id` int(11) NOT NULL,
  `attdate` date DEFAULT NULL,
  `present` tinyint(1) DEFAULT NULL,
  `absent` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance sheet`
--

INSERT INTO `attendance sheet` (`id`, `attdate`, `present`, `absent`) VALUES
(12578, '2021-08-04', NULL, NULL),
(35, '2021-08-15', NULL, NULL),
(56, '2021-08-15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `Day` varchar(20) NOT NULL,
  `shift` varchar(5) NOT NULL DEFAULT 'D1',
  `endate` date DEFAULT NULL,
  `time_in` time DEFAULT NULL,
  `edate` date DEFAULT NULL,
  `time_out` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `date`, `Day`, `shift`, `endate`, `time_in`, `edate`, `time_out`) VALUES
(35, '2021-08-15', 'Sunday', 'D', NULL, '11:51:00', '2021-08-15', '11:52:00'),
(56, '2021-08-15', 'Sunday', 'N', '2021-08-15', '11:59:00', '2021-08-16', '12:59:00'),
(325, '2021-06-13', 'Sunday', 'N', '2021-07-01', '05:48:00', '2021-06-13', '08:31:00'),
(542, '2021-06-12', 'Saturday', 'D', '2021-07-04', '06:14:00', '2021-06-12', '11:27:00'),
(853, '2021-06-11', 'Friday', 'D', '2021-07-02', '06:44:00', '2021-06-12', '11:23:00'),
(1234, '2021-06-11', 'Friday', 'D', '2021-08-03', '08:12:00', '2021-06-12', '11:20:00'),
(1236, '2021-06-12', 'Saturday', 'D', '2021-06-28', '06:28:00', '2021-06-28', '06:31:00'),
(1447, '2021-06-13', 'Sunday', 'D', '2021-06-23', '10:36:00', '2021-06-13', '10:08:00'),
(2536, '2021-06-28', 'Monday', 'D', '2021-06-28', '04:14:00', NULL, NULL),
(5698, '2021-06-28', 'Monday', 'D', '2021-06-28', '09:46:00', '2021-06-28', '09:49:00'),
(6598, '2021-06-12', 'Saturday', 'D', NULL, '11:23:00', '2021-06-12', '11:27:00'),
(9688, '2021-06-11', 'Friday', 'D', NULL, '09:10:00', NULL, NULL),
(12578, '2021-08-04', 'Wednesday', 'D', '2021-08-04', '08:17:00', NULL, NULL),
(23654, '2021-06-16', 'Wednesday', 'N', NULL, '08:02:00', NULL, NULL),
(41357, '2021-06-11', 'Friday', 'D', NULL, '09:33:00', NULL, NULL),
(59687, '2021-06-11', 'Friday', 'D', NULL, '09:07:00', NULL, NULL),
(95666, '2021-06-11', 'Friday', 'D', NULL, '12:31:00', NULL, NULL),
(987554, '2021-06-11', 'Friday', 'D', NULL, '09:37:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `trade` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `govt_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `name`, `trade`, `father_name`, `dob`, `govt_id`) VALUES
(35, 'xyz', 'se', 'df', '2000-10-18', 23),
(56, 'xyzabcs', 'cs', 'this', '0000-00-00', 98598),
(325, 'nikit', 'btech', 'ksjkf', '2000-05-02', 965),
(542, 'idi', 'se', '2ee', '2019-11-12', 245),
(853, 'kumdf', 'serr', 'jgd', '2000-10-16', 7963),
(1234, 'likd', 'dfdeo', 'lkdr', '9110-05-31', 12),
(1236, 'new bot', 'mech', 'bot', '2000-02-01', 6321),
(1447, 'sachin', 'klsa', 'ashok', '2002-02-10', 741),
(2536, 'rabin', 'ddc', 'jjdk', '0000-00-00', 5266),
(5698, 'rabins', 'dkmsl', 'ljkdf', '2010-02-10', 956),
(6598, 'lkldf', 'julkd', 'ekd', '2000-02-01', 6587),
(9688, 'this is', 'me', 'dae', '2031-08-09', 7569),
(12578, 'jellyu', 'se', 'ujlwa', '2000-02-10', 78521),
(23654, 'ujkle', 'se', 'jd', '2000-10-16', 45632),
(41357, 'ujwalsdf', 'ser', 'jd', '2000-10-18', 1986),
(59687, 'kdf', 'se', 'jkd', '2222-10-16', 4562),
(95666, 'thisdf', 'dkk', 'dfdf', '2331-09-06', 4512),
(987554, 'Ujwl', 'ddfd', 'GD', '9232-05-23', 5569899);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=987555;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
