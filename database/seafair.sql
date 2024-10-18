-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2024 at 01:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seafair`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `approved_applicants`
--

CREATE TABLE `approved_applicants` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `approved_applicants`
--

INSERT INTO `approved_applicants` (`id`, `fullname`, `sex`, `email`, `contact`, `address`, `job`, `timestamp`) VALUES
(1, 'ralph miole', 'male', 'ralph@gmail.com', '098098', 'asdasdasd', '1', '2024-04-17 15:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `job_vacancy`
--

CREATE TABLE `job_vacancy` (
  `id` int(11) NOT NULL,
  `job` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `vacancy` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_vacancy`
--

INSERT INTO `job_vacancy` (`id`, `job`, `description`, `vacancy`) VALUES
(2, '1', 'asdasdasdasdasdee', 5);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `action` varchar(233) NOT NULL,
  `role` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `first_name`, `last_name`, `username`, `action`, `role`, `timestamp`) VALUES
(3, '', '', '', 'Logged Out', '', '2024-04-15 16:19:51'),
(4, 'bea', 'enovero', 'bea', 'Logged In', 'user', '2024-04-15 16:20:57'),
(5, 'admin', 'admin', 'admin', 'Logged In', 'admin', '2024-04-16 09:54:57'),
(6, 'bea', 'enovero', 'bea', 'Logged In', 'user', '2024-04-16 09:55:12'),
(7, 'bea', 'enovero', 'bea', 'Logged In', 'user', '2024-04-17 10:17:25'),
(9, 'bea', 'enovero', 'bea', 'Logged In', 'user', '2024-04-17 14:38:54'),
(10, 'bea', 'enovero', 'bea', 'Logged In', 'user', '2024-04-17 15:32:46'),
(11, 'admin', 'admin', 'admin', 'Logged In', 'admin', '2024-04-17 15:32:56'),
(12, 'bea', 'enovero', 'bea', 'Logged In', 'user', '2024-04-18 07:48:56'),
(13, 'admin', 'admin', 'admin', 'Logged In', 'admin', '2024-04-18 07:52:53'),
(14, 'admin', 'admin', 'admin', 'Logged In', 'admin', '2024-04-18 08:13:03'),
(15, 'admin', 'admin', 'admin', 'Logged In', 'admin', '2024-04-18 08:25:08'),
(16, 'bea', 'enovero', 'bea', 'Logged In', 'user', '2024-04-18 08:28:32'),
(17, 'admin', 'admin', 'admin', 'Logged In', 'admin', '2024-04-19 04:24:55'),
(18, 'bea', 'enovero', 'bea', 'Logged In', 'user', '2024-04-19 04:27:08'),
(19, 'admin', 'admin', 'admin', 'Logged In', 'admin', '2024-04-19 04:30:10'),
(20, 'ralph', 'balbahutog', 'ralphunzelat', 'Logged In', 'user', '2024-04-19 04:35:47'),
(21, 'admin', 'admin', 'admin', 'Logged In', 'admin', '2024-04-19 04:42:31'),
(22, 'admin', 'admin', 'admin', 'Logged In', 'admin', '2024-04-19 10:56:39'),
(23, 'admin', 'admin', 'admin', 'Logged In', 'admin', '2024-04-19 10:56:39'),
(24, 'admin', 'admin', 'admin', 'Logged In', 'admin', '2024-04-19 10:56:40'),
(25, 'admin', 'admin', 'admin', 'Logged In', 'admin', '2024-04-19 10:56:41'),
(26, 'admin', 'admin', 'admin', 'Logged In', 'admin', '2024-04-19 10:56:46'),
(27, 'ralph', 'balbahutog', 'ralphunzelat', 'Logged In', 'user', '2024-04-19 11:00:00'),
(28, 'ralph', 'balbahutog', 'ralphunzelat', 'Logged In', 'user', '2024-04-19 11:02:47'),
(29, 'ralph', 'balbahutog', 'ralphunzelat', 'Logged In', 'user', '2024-04-19 11:04:40'),
(30, 'ralph', 'balbahutog', 'ralphunzelat', 'Logged In', 'user', '2024-04-19 11:10:20'),
(31, 'admin', 'admin', 'admin', 'Logged In', 'admin', '2024-04-20 01:53:00'),
(32, 'admin', 'admin', 'admin', 'Logged In', 'admin', '2024-04-23 09:15:28'),
(33, 'admin', 'admin', 'admin', 'Logged In', 'admin', '2024-04-23 09:30:30'),
(34, 'Jella', 'Enovero', 'jellalat', 'Logged In', 'user', '2024-04-23 09:33:59'),
(35, 'ralph', 'miole', 'ralph', 'Logged In', 'user', '2024-04-23 09:37:18'),
(36, 'ralph', 'miole', 'ralph', 'Logged In', 'user', '2024-04-23 09:38:18'),
(37, 'ralph', 'miole', 'ralph', 'Logged In', 'user', '2024-04-23 09:39:25'),
(38, 'ralph', 'miole', 'ralph', 'Logged In', 'user', '2024-04-23 09:43:09'),
(39, 'bea', 'enovero', 'bea', 'Logged In', 'user', '2024-04-23 09:43:17'),
(40, 'admin', 'admin', 'admin', 'Logged In', 'admin', '2024-04-23 09:44:25'),
(41, 'ralph', 'miole', 'ralph', 'Logged In', 'user', '2024-04-23 09:45:37'),
(42, 'bea', 'enovero', 'bea', 'Logged In', 'user', '2024-04-23 09:46:56'),
(43, 'admin', 'admin', 'admin', 'Logged In', 'admin', '2024-04-23 09:49:10'),
(45, 'admin', 'admin', 'admin', 'Logged In', 'admin', '2024-04-23 09:54:48'),
(46, 'bea', 'enovero', 'bea', 'Logged In', 'user', '2024-04-23 10:01:30'),
(47, 'admin', 'admin', 'admin', 'Logged In', 'admin', '2024-04-23 10:48:14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `image`, `first_name`, `last_name`, `email`, `contact`, `role`, `username`, `password`, `date`) VALUES
(1, '', 'admin', 'admin', 'admin@gmail.com', '098686', 'admin', 'admin', 'admin', '2024-04-15 14:33:43'),
(2, '27539967_181784575926372_9053700506598043687_n copy.jpeg', 'bea', 'enovero', 'bellajenchixx@gmail.com', '342423', 'user', 'bea', '1', '2024-04-15 15:02:56'),
(4, '', 'Jella', 'Enovero', 'jellala@gmail.com', '09783461946', 'user', 'jellalat', 'kabaw', '2024-04-23 09:32:39'),
(5, '', 'ralph', 'miole', 'ralph@gmail.com', '092175765', 'user', 'ralph', 'ralph', '2024-04-23 09:37:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approved_applicants`
--
ALTER TABLE `approved_applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_vacancy`
--
ALTER TABLE `job_vacancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
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
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `approved_applicants`
--
ALTER TABLE `approved_applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_vacancy`
--
ALTER TABLE `job_vacancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
