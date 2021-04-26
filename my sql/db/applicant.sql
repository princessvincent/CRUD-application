-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 08:30 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `applicant`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `username`, `date_of_birth`, `phone`, `password`, `email`) VALUES
(1, 'Saheed', 'Saad', 'sahed2613', '2021-04-07', '08161150559', '81dc9bdb52d04dc20036dbd8313ed055', 'janbaoda@gmail.com'),
(2, 'jamiu', 'alabi', 'admin', '2021-04-07', '09081150550', '81dc9bdb52d04dc20036dbd8313ed055', 'Jamiu@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `my_course`
--

CREATE TABLE `my_course` (
  `Id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `course_Enrol` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_course`
--

INSERT INTO `my_course` (`Id`, `full_name`, `course_Enrol`, `user_id`) VALUES
(1, 'PHP LARAVEL 2', 'FRONTEND', 1),
(3, 'JAVA', 'my nigga', 1),
(4, 'PHP LARAVEL 56', 'my niggaooooooo', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_course`
--
ALTER TABLE `my_course`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `my_course`
--
ALTER TABLE `my_course`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
