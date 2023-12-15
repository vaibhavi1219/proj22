-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2023 at 03:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `d_name` varchar(20) NOT NULL,
  `group` varchar(20) NOT NULL,
  `mobile number` int(10) NOT NULL,
  `disease` varchar(20) NOT NULL,
  `unit` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `d_name`, `group`, `mobile number`, `disease`, `unit`) VALUES
(1, 'asdfjk', 'A+', 0, 'sdf', 12),
(2, 'asdfjk', 'A+', 0, 'd', 2),
(3, 'dfgdfg', 'A+', 0, 'dfg', 345),
(4, '21', 'O+', 0, 'no', 12),
(5, 'Deepak', 'O+', 0, 'no', 12),
(6, 'sahil', 'O+', 0, 'no', 23),
(7, 'harshu', 'O+', 0, 'no', 23),
(8, 'abhi', 'B+', 0, 'no', 12),
(9, 'rutik', 'A-', 0, 'no', 10),
(10, 'suraj', 'AB+', 0, 'no', 12),
(11, 'mayur shelar', 'B+', 0, 'no', 3),
(12, 'rohan kale', 'A+', 0, 'yes', 1),
(13, 'sanuja salunke', 'B+', 0, 'yes', 2),
(14, 'mayur', 'O+', 0, 'no', 3),
(15, '', 'A+', 0, '', 1234457790),
(16, '', 'A+', 0, '', 1234457790),
(17, '', 'A+', 0, '', 1234457790),
(18, 'akash', 'O+', 0, 'no', 1),
(19, 'rushi ', 'B+', 0, 'no', 2),
(20, 'abhi', 'A+', 0, 'no', 1),
(21, 'abhi', 'A+', 0, 'no', 1),
(22, 'abhi', 'A+', 0, 'no', 3),
(23, 'akash', 'B+', 0, 'no', 4),
(24, 'abhi', 'A+', 0, 'no', 1),
(25, 'abhi', 'A+', 0, 'no', 1),
(26, 'aditya', 'A+', 0, 'no', 2),
(27, 'mayur', 'B+', 0, 'no', 2),
(28, 'vaibhav waghole', 'AB+', 0, 'yes', 5),
(29, 'nitin more', 'O+', 0, 'no', 3),
(30, 'akanksha shitole', 'B+', 0, 'no', 5),
(31, 'suresh ', 'B+', 0, 'no', 1),
(32, 'akash', 'O+', 0, 'no', 9),
(33, 'sagar kudale', 'AB+', 0, 'yes', 4),
(34, 'vikas shelar', 'B+', 0, 'no', 2);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `username`, `email`, `password`) VALUES
(1, 'sefgh', 'ser@wsdf', 'sdfs'),
(2, 'abhi', 'abhishekshitole404@gmail.com', '1234'),
(3, 'ad;jkl', 'asdfjk@sdfjkl', 'asdfjkl'),
(4, 'harshu', 'harshu@123', '123'),
(5, 'donor1', 'donor@gmail.com', '123'),
(6, 'donor3', 'donor@gmail.com', '1234'),
(7, 'rutik ', 'rutik@123', '123'),
(8, 'donor4', 'donor@123', '1234'),
(9, 'mayur', 'mayur@123', '12345'),
(10, 'rohan', 'rohan@123', '12345'),
(11, 'sanuja', 'sanuja@123', '12345'),
(12, 'donor5', 'donor4@gmail.com', '12345'),
(13, 'donor6', 'donor6@gmail.com', '12345'),
(14, 'mayur', 'mayur@123', '12345'),
(15, 'nitin ', 'nitin@133', '1234'),
(16, 'donor7', 'donor7@123', '12345'),
(17, 'sagar', 'sagar123@gmail.com', '7979'),
(18, 'vikas', 'vikas@123', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `username`, `email`, `password`) VALUES
(1, 'pfsda', 'dfsg@sdgf', 'dsfg'),
(2, 'patient', 'asd@dsf', '1234'),
(3, 'rutik', 'rutik@1234', '1234'),
(4, 'patient4', 'patient4@1', '123'),
(5, 'vaibhav', 'vaibhav@12', '12345'),
(6, 'rohan', 'rohan@123', '12345'),
(7, 'mayur shel', 'mayur@123', '12345'),
(8, 'patient5', 'patient5@1', '1234'),
(9, 'sanuja sal', 'sanuja@123', '1234'),
(10, 'mayur', 'mayur@456', '1234'),
(11, 'aditya', 'aditya@123', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `patientdonation`
--

CREATE TABLE `patientdonation` (
  `id` int(11) NOT NULL,
  `d_name` varchar(20) NOT NULL,
  `group` varchar(20) NOT NULL,
  `disease` varchar(20) NOT NULL,
  `unit` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patientdonation`
--

INSERT INTO `patientdonation` (`id`, `d_name`, `group`, `disease`, `unit`) VALUES
(1, 'sdf', 'C+', 'sdf', 12),
(2, 'dfgfg', 'A+', 'jhk', 23),
(3, 'aditya', 'AB+', 'no', 15),
(4, 'rushi', 'AB-', 'no', 2),
(5, 'mahesh', 'B-', 'no', 2),
(6, 'rutik pawar', 'O+', 'yes', 12),
(7, 'vaibhav', 'O-', 'yes', 13),
(8, 'vaibhav waghole', 'O+', 'yes', 7),
(9, 'rohan', 'A+', 'no', 1),
(10, 'abhi', 'A+', 'no', 1),
(11, 'yes', 'O+', 'no', 4),
(12, 'aditya', 'A+', 'no', 4),
(13, 'sanuja', 'O+', 'no', 2),
(14, 'suraj shelar ', 'B-', 'no', 6),
(15, 'aditya', 'O-', 'yes', 17);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'abhi', 'abhi@123', '123'),
(2, 'fgj', 'fg@fgh', 'REDF'),
(3, 'ab', 'ab@gma', 'ab');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientdonation`
--
ALTER TABLE `patientdonation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patientdonation`
--
ALTER TABLE `patientdonation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
