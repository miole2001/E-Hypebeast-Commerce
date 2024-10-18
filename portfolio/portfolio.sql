-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2024 at 03:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_info`
--

CREATE TABLE `my_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `middle_name` varchar(10) NOT NULL,
  `number` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `birth_date` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_2` varchar(20) NOT NULL,
  `university` varchar(100) NOT NULL,
  `campus` varchar(20) NOT NULL,
  `year_level` varchar(20) NOT NULL,
  `course` varchar(100) NOT NULL,
  `major` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `my_info`
--

INSERT INTO `my_info` (`id`, `first_name`, `student_id`, `last_name`, `middle_name`, `number`, `email`, `facebook`, `birth_date`, `address`, `gender`, `image`, `image_2`, `university`, `campus`, `year_level`, `course`, `major`) VALUES
(1, 'Ralph', '20-20012', 'Miole', 'Ando', '09603063097', 'ralphmiole2001@gmail.com', 'https://web.facebook.com/blackspade2001', 'May 30,2001', 'Barangay Libas, Sogod, Southern Leyte', 'Male', '1.jpg', '2.jpg', 'Southern Leyte State University', 'Tomas Oppus Campus', '3rd Year', 'Bachelor of Science in Information Technology', 'Programming');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_info`
--
ALTER TABLE `my_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my_info`
--
ALTER TABLE `my_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
