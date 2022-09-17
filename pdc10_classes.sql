-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 09:47 AM
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
-- Database: `pdc10_classes`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(200) NOT NULL,
  `name` varchar(220) NOT NULL,
  `description` varchar(220) NOT NULL,
  `code` varchar(100) NOT NULL,
  `teacher_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `description`, `code`, `teacher_id`) VALUES
(2, 'Jello', 'Pogi', 'JPM15', 2),
(3, 'Jello', 'Pogi', 'JPM15', 2),
(4, 'Arnold', 'Sample', 'ANL', 2),
(5, 'Jello', 'Pogi', 'JPM15', 2),
(6, 'Jello', 'Pogi', 'JPM15', 2),
(7, 'Jello', 'Pogi', 'JPM15', 2),
(8, 'Jello', 'Pogi', 'JPM15', 2),
(9, 'Jello', 'Pogi', 'JPM15', 2),
(10, 'Jello', 'Pogi', 'JPM15', 2),
(11, 'Jello', 'Pogi', 'JPM15', 2),
(12, 'Jello', 'Pogi', 'JPM15', 2),
(13, 'Jello', 'Pogi', 'JPM15', 2),
(14, 'Jello', 'Pogi', 'JPM15', 2),
(15, 'Jello', 'Pogi', 'JPM15', 2),
(16, 'Jello', 'Pogi', 'JPM15', 2),
(17, 'Jello', 'Pogi', 'JPM15', 2),
(18, 'Jello', 'Pogi', 'JPM15', 2),
(19, 'Jello', 'Pogi', 'JPM15', 2),
(20, 'Jello', 'Pogi', 'JPM15', 2);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(200) NOT NULL,
  `first_name` varchar(220) NOT NULL,
  `last_name` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `contact` varchar(220) NOT NULL,
  `employee_number` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `first_name`, `last_name`, `email`, `contact`, `employee_number`) VALUES
(2, 'Karylle', 'Lopez', 'ckmalakas@gmail.com', '09123123', '20-20-20'),
(3, 'Arnold', 'LIM', 'ANL', 'SADAS', 'ADSA'),
(4, 'Karylle', 'Lopez', 'ckmalakas@gmail.com', '09123123', '20-20-20'),
(5, 'Karylle', 'Lopez', 'ckmalakas@gmail.com', '09123123', '20-20-20'),
(6, 'Karylle', 'Lopez', 'ckmalakas@gmail.com', '09123123', '20-20-20'),
(7, 'Karylle', 'Lopez', 'ckmalakas@gmail.com', '09123123', '20-20-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
