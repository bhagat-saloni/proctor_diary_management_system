-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 08:43 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_record`
--

CREATE TABLE `academic_record` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ayr` int(4) NOT NULL,
  `sem` int(1) NOT NULL,
  `cti` varchar(255) NOT NULL,
  `ccd` varchar(10) NOT NULL,
  `cre` int(2) NOT NULL,
  `atd` int(3) NOT NULL,
  `cie` int(2) NOT NULL,
  `see` int(3) NOT NULL,
  `sem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_record`
--

INSERT INTO `academic_record` (`id`, `email`, `ayr`, `sem`, `cti`, `ccd`, `cre`, `atd`, `cie`, `see`, `sem_id`) VALUES
(114, 'saisriram.cs18@bmsce.ac.in', 2019, 3, 'COA', '15CS12DCOA', 4, 85, 40, 41, 30);

-- --------------------------------------------------------

--
-- Table structure for table `profile_proctor`
--

CREATE TABLE `profile_proctor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desig` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `off_addr` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_proctor`
--

INSERT INTO `profile_proctor` (`id`, `name`, `desig`, `email`, `off_addr`, `phone`, `dept`) VALUES
(16, 'Nandini V', 'Associate Professor', 'nandini.cse@bmsce.ac.in', 'S - 499, 4th Floor, New Building, BMSCE', 0000000000, 'cs'),
(17, 'Ishwari', 'Assistant Professor', 'ishwari.cse@bmsce.ac.in', 'S - 498,  4th Floor, New Building, BMSCE', 9876543210, 'cs');

-- --------------------------------------------------------

--
-- Table structure for table `profile_student`
--

CREATE TABLE `profile_student` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `blood` enum('ap','an','bp','bn','op','on','abp','abn') NOT NULL,
  `phone` int(10) NOT NULL,
  `father` varchar(255) NOT NULL,
  `foccup` varchar(255) NOT NULL,
  `faddr` varchar(255) NOT NULL,
  `fphone` int(10) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `moccup` varchar(255) NOT NULL,
  `maddr` varchar(255) NOT NULL,
  `mphone` int(10) NOT NULL,
  `guardian` varchar(255) NOT NULL,
  `goccup` varchar(255) NOT NULL,
  `gaddr` varchar(255) NOT NULL,
  `gphone` int(10) NOT NULL,
  `usn` varchar(255) NOT NULL,
  `proctor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_student`
--

INSERT INTO `profile_student` (`id`, `email`, `name`, `dob`, `blood`, `phone`, `father`, `foccup`, `faddr`, `fphone`, `mother`, `moccup`, `maddr`, `mphone`, `guardian`, `goccup`, `gaddr`, `gphone`, `usn`, `proctor`) VALUES

(12, 'saisriram.cs18@bmsce.ac.in', 'sai sriram vemparala', '03/04/2007', 'ap', 2147483647, 'JP Mayya', 'Doctor', 'Bangalore', 2147483647, 'Shuba Mayya', 'Housewife', 'Bangalore', 2147483647, '-', '-', '-', 0, '1BM18CS077', 'nandini.cse@bmsce.ac.in');


-- --------------------------------------------------------

--
-- Table structure for table `sem_record`
--

CREATE TABLE `sem_record` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sem` int(1) NOT NULL,
  `ayr` int(4) NOT NULL,
  `sent` enum('y','n') NOT NULL,
  `signed` enum('n','y') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem_record`
--

INSERT INTO `sem_record` (`id`, `email`, `sem`, `ayr`, `sent`, `signed`) VALUES

(33, 'saisriram.cs18@bmsce.ac.in', 3, 2019, 'y', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` enum('student','proctor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`) VALUES

(70, 'saisriram.cs18@bmsce.ac.in', '123456', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_record`
--
ALTER TABLE `academic_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_proctor`
--
ALTER TABLE `profile_proctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `profile_student`
--
ALTER TABLE `profile_student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `sem_record`
--
ALTER TABLE `sem_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_record`
--
ALTER TABLE `academic_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `profile_proctor`
--
ALTER TABLE `profile_proctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `profile_student`
--
ALTER TABLE `profile_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sem_record`
--
ALTER TABLE `sem_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
