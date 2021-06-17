-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 10:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_bk`
--

CREATE TABLE `create_bk` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `phone` bigint(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `curr_bal` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `create_bk`
--

INSERT INTO `create_bk` (`id`, `name`, `phone`, `mail`, `password`, `city`, `curr_bal`) VALUES
(1, 'Divya Kundale', 2147483647, 'dskundale@mitaoe.ac.in', 'dsk@123', 'Pune', 340000),
(2, 'Kumar Sanu', 9125523658, 'kumargmail.com', 'ks@123', 'Pune', 64000),
(3, 'Esha Sul', 9124568798, 'epsul@mitaoe.ac.in', 'ep@123', 'Solapur', 18600),
(4, 'Sunil Pawar', 9845237821, 'ssp@gmail.com', 'ssp@123', 'Kolhapur', 42500),
(5, 'Meena Patil', 7845237845, 'meena@gmail.com	', 'mna@1234', 'singapore	', 12310),
(6, 'Ayush Parmar', 9975237845, 'ayy@gmail.com', 'ayush@ab12', 'Nashik	', 74600),
(7, 'Vinayak Bhalchim', 8845237845, 'vinu@gmail.com', 'vinbha@457', 'Surat', 14400),
(8, 'Sujata Sadgile', 9940037845, 'ss@gmail.com', 'ss2YTU', 'Satara', 100960),
(9, 'Akshay Patil', 9945237800, 'akp@gmail.com', 'akp@768', 'Pune', 3730),
(10, 'Pallavi Kaswale', 9845237811, 'ppk@gmail.com', 'gh456@87', 'Solapur', 10200),
(11, 'Satish Kolhapure', 9845230000, 'ssk@gmail.com', 'kss87@099', 'Solapur', 7500),
(12, 'Nita Kundale', 7030640122, 'nmussale@gmail.com', 'nita@123', 'Pune', 2100);

-- --------------------------------------------------------

--
-- Table structure for table `to_person_detail`
--

CREATE TABLE `to_person_detail` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `phone` bigint(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `to_person_detail`
--

INSERT INTO `to_person_detail` (`id`, `name`, `phone`, `amount`) VALUES
(1, 'Divya Kundale', 2147483647, 0),
(2, 'Kumar Sanu', 9125523658, 1),
(3, 'Esha Sul', 9124568798, 0),
(4, 'Sunil Pawar', 9845237821, 0),
(5, 'Meena Patil', 7845237845, 10),
(6, 'Ayush Parmar', 9975237845, 0),
(7, 'Vinayak Bhalchim', 8845237845, 0),
(8, 'Sujata Sadgile', 9940037845, 0),
(9, 'Akshay Patil', 9945237800, 0),
(10, 'Pallavi Kaswale', 9845237811, 0),
(11, 'Satish Kolhapure', 9845230000, 0),
(12, 'Nita Kundale', 7030640122, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transfer_money`
--

CREATE TABLE `transfer_money` (
  `id` int(255) NOT NULL,
  `From_person` text NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer_money`
--

INSERT INTO `transfer_money` (`id`, `From_person`, `amount`) VALUES
(7, 'Esha Sul', 10000),
(8, 'Meena Patil', 1),
(9, 'Sunil Pawar', 11),
(10, 'Sunil Pawar', 2000),
(11, 'Esha Sul', 10000),
(12, 'Divya Kundale', 1000),
(13, 'Divya Kundale', 2000),
(14, 'Divya Kundale', 20),
(15, 'Divya Kundale', 11),
(16, 'Sunil Pawar', 2000),
(17, 'Meena Patil', 1),
(18, 'Ayush Parmar', 2000),
(19, 'Divya Kundale', 1),
(20, 'Esha Sul', 11),
(21, 'Meena Patil', 10),
(22, 'Meena Patil', 70),
(23, 'Divya Kundale', 2000),
(24, 'Divya Kundale', 2000),
(25, 'Divya Kundale', 120),
(26, 'Kumar Sanu', 1),
(27, 'Divya Kundale', 12),
(28, 'Meena Patil', 111),
(29, 'Meena Patil', 33),
(30, 'Meena Patil', 1),
(31, 'Sunil Pawar', 11),
(32, 'Sunil Pawar', 0),
(33, 'Esha Sul', 9),
(34, 'Esha Sul', 1),
(35, 'Sunil Pawar', 1),
(36, 'Sunil Pawar', 20),
(37, 'Divya Kundale', 41),
(38, 'Vinayak Bhalchim', 55),
(39, 'Kumar Sanu', 20),
(40, 'Esha Sul', 1),
(41, 'Esha Sul', 1),
(42, 'Ayush Parmar', 1),
(43, 'Meena Patil', 1111),
(44, 'Meena Patil', 1111),
(45, 'Sunil Pawar', 788),
(46, 'Sunil Pawar', 788),
(47, 'Esha Sul', 2000),
(48, 'Pallavi Kaswale', 100),
(49, 'Pallavi Kaswale', 100),
(50, 'Pallavi Kaswale', 100),
(51, 'Ayush Parmar', 10),
(52, 'Ayush Parmar', 10000),
(53, 'Ayush Parmar', 11),
(54, 'Ayush Parmar', 11),
(55, 'Ayush Parmar', 11),
(56, 'Ayush Parmar', 2000),
(57, 'Ayush Parmar', 2000),
(58, 'Ayush Parmar', 2000),
(59, 'Ayush Parmar', 2000),
(60, 'Ayush Parmar', 2000),
(61, 'Ayush Parmar', 2000),
(62, 'Ayush Parmar', 2000),
(63, 'Ayush Parmar', 2000),
(64, 'Ayush Parmar', 2000),
(65, 'Ayush Parmar', 2000),
(66, 'Ayush Parmar', 2000),
(67, 'Ayush Parmar', 1),
(68, 'Meena Patil', 1111),
(69, 'Meena Patil', 1111),
(70, 'Meena Patil', 1111),
(71, 'Meena Patil', 1111),
(72, 'Meena Patil', 1111),
(73, 'Meena Patil', 1111),
(74, 'Meena Patil', 1111),
(75, 'Meena Patil', 1111),
(76, 'Meena Patil', 1111),
(77, 'Sunil Pawar', 1),
(78, 'Divya Kundale', 3459),
(79, 'Esha Sul', 10),
(80, 'Divya Kundale', 782);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `create_bk`
--
ALTER TABLE `create_bk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `to_person_detail`
--
ALTER TABLE `to_person_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer_money`
--
ALTER TABLE `transfer_money`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `create_bk`
--
ALTER TABLE `create_bk`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `to_person_detail`
--
ALTER TABLE `to_person_detail`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transfer_money`
--
ALTER TABLE `transfer_money`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
