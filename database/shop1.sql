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
-- Database: `shop1`
--

-- --------------------------------------------------------

--
-- Table structure for table `approved_order`
--

CREATE TABLE `approved_order` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(355) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(20, 'asaaa', '300', '0672dcc7badc3e4caad3083da843c6d7.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `e_hype_ratings`
--

CREATE TABLE `e_hype_ratings` (
  `id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e_hype_ratings`
--

INSERT INTO `e_hype_ratings` (`id`, `item_id`, `rate`, `user`) VALUES
(1, 1, 1, '2147483647'),
(0, 2, 3, ''),
(0, 3, 3, ''),
(0, 1, 2, ''),
(0, 2, 3, ''),
(0, 1, 2, ''),
(0, 1, 3, ''),
(0, 1, 3, ''),
(0, 1, 3, ''),
(0, 3, 3, ''),
(0, 1, 2, ''),
(0, 2, 5, ''),
(0, 4, 3, ''),
(0, 1, 1, ''),
(0, 2, 1, ''),
(0, 2, 3, ''),
(0, 1, 1, ''),
(0, 1, 1, ''),
(0, 1, 2, ''),
(0, 3, 1, ''),
(0, 2, 2, ''),
(0, 1, 2, ''),
(0, 1, 3, ''),
(0, 1, 3, ''),
(0, 1, 3, ''),
(0, 1, 4, ''),
(0, 1, 3, ''),
(0, 2, 4, ''),
(0, 1, 3, ''),
(0, 1, 2, ''),
(0, 2, 2, ''),
(0, 1, 3, ''),
(0, 5, 3, ''),
(0, 1, 3, ''),
(0, 1, 3, ''),
(0, 1, 3, ''),
(0, 1, 3, ''),
(0, 1, 3, ''),
(0, 1, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `job_lists`
--

CREATE TABLE `job_lists` (
  `id` int(11) NOT NULL,
  `job_position` varchar(255) NOT NULL,
  `requirements` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `action` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_type` varchar(255) NOT NULL,
  `system_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `username`, `action`, `timestamp`, `user_type`, `system_type`) VALUES
(41, 'jobAdmin', 'Logged In', '2024-04-08 09:43:21', 'JobHub admin', 'JobHub'),
(42, 'jobAdmin', 'Logged Out', '2024-04-08 09:43:36', '', 'JobHub'),
(43, 'admin', 'Logged In', '2024-04-08 10:01:22', 'HypeBeast Admin', 'HypeBeast'),
(44, 'jobAdmin', 'Logged In', '2024-04-08 10:11:58', 'JobHub admin', 'JobHub'),
(45, 'admin', 'Logged In', '2024-04-08 10:13:37', 'HypeBeast Admin', 'HypeBeast'),
(46, 'admin', 'Logged In', '2024-04-08 10:13:45', 'HypeBeast Admin', 'HypeBeast'),
(47, 'admin', 'Logged In', '2024-04-08 10:14:08', 'HypeBeast admin', 'HypeBeast'),
(48, 'admin', 'Logged Out', '2024-04-08 10:19:54', '', 'HypeBeast'),
(49, 'admin', 'Logged In', '2024-04-08 10:20:01', 'HypeBeast admin', 'HypeBeast'),
(50, 'admin', 'Logged Out', '2024-04-08 10:21:47', '', 'HypeBeast'),
(51, 'user', 'Logged In', '2024-04-08 10:21:51', 'HypeBeast user', 'HypeBeast'),
(52, 'user', 'Logged Out', '2024-04-08 10:24:25', '', 'JobHub'),
(53, 'job', 'Logged In', '2024-04-08 10:24:47', 'JobHub user', 'JobHub'),
(54, 'job', 'Logged Out', '2024-04-08 10:26:27', '', 'JobHub'),
(55, 'user', 'Logged In', '2024-04-08 15:14:57', 'HypeBeast user', 'HypeBeast'),
(56, 'user', 'Logged Out', '2024-04-08 15:22:33', '', 'HypeBeast'),
(57, 'user', 'Logged In', '2024-04-08 15:35:24', 'HypeBeast user', 'HypeBeast'),
(58, 'user', 'Logged Out', '2024-04-08 15:35:26', '', 'HypeBeast'),
(59, 'seller1', 'Logged In', '2024-04-08 15:35:33', 'HypeBeast seller 1', 'HypeBeast'),
(60, 'seller1', 'Logged Out', '2024-04-08 15:41:36', '', 'HypeBeast'),
(61, 'admin', 'Logged In', '2024-04-08 15:41:41', 'HypeBeast admin', 'HypeBeast'),
(62, 'admin', 'Logged Out', '2024-04-08 15:42:17', '', 'HypeBeast'),
(63, 'seller5', 'Logged In', '2024-04-11 14:24:54', 'HypeBeast seller 5', 'HypeBeast'),
(64, 'seller5', 'Logged Out', '2024-04-11 14:25:51', '', 'HypeBeast'),
(65, 'user', 'Logged In', '2024-04-11 14:25:56', 'HypeBeast user', 'HypeBeast'),
(66, 'admin', 'Logged In', '2024-04-19 11:12:54', 'HypeBeast admin', 'JobHub'),
(67, 'jobAdmin', 'Logged In', '2024-04-19 11:13:37', 'JobHub admin', 'JobHub'),
(68, 'jobAdmin', 'Logged In', '2024-04-20 01:41:51', 'JobHub admin', 'JobHub'),
(69, 'jobAdmin', 'Logged In', '2024-04-23 10:39:13', 'JobHub admin', 'JobHub'),
(70, 'jobAdmin', 'Logged Out', '2024-04-23 10:40:47', '', 'JobHub'),
(71, '', 'Register', '2024-04-23 10:41:38', '', 'JobHub');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`) VALUES
(6, 'ralph', '09090', 'ralph@gmail.com', 'cash on delivery', 'libas', 'KAWS BRONZE - Passing Through (1) , Loonie Toons X Supreme - sweat shirt (3) ', '5900');

-- --------------------------------------------------------

--
-- Table structure for table `pending_applicants`
--

CREATE TABLE `pending_applicants` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `documents` varchar(255) NOT NULL,
  `job_position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`) VALUES
('h12FAnxY6JoXb51iDpda', '01 example post title', 'post_1.webp'),
('sRKX0vSREJbBzO07wM1H', '02 example post title', 'post_2.webp'),
('G6zDaxTTS0fV5UT4BQ46', '03 example post title', 'post_3.webp'),
('6zQRsklaYIO38cLIgYZN', '04 example post title', 'post_4.webp'),
('mMj2FWPRVWZPsfOsjSUL', '05 example post title', 'post_5.webp'),
('hK2tgabAaK1c1FAak6UW', '06 example post title', 'post_6.webp');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `item_type` varchar(200) NOT NULL,
  `seller_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `item_id`, `image`, `item_name`, `price`, `brand`, `item_type`, `seller_type`) VALUES
(1, '23123', '', 'jordan 1 low', '100', 'nike', 'Sneaker', 'seller 1'),
(2, '12312', '497e31b8ba5a0f13db3e625348040daf.jpg', 'black off-white hoodie', '90000', 'off-white', 'hoodie', 'seller 5');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` varchar(20) NOT NULL,
  `post_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `rating` varchar(1) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `product`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(6, '', 'Lorem Ipsum', 4, 'The camera quality is phenomenal, especially in low light conditions.', 1621935691),
(7, '', 'Jane Doe', 5, 'Battery life lasts me all day, even with heavy usage. Impressive!', 1621939888),
(8, '', 'John Doe', 5, 'Love the sleek design and lightning-fast performance of this iphone!', 1621940010),
(9, '', 'asdasd', 3, 'xxxxxxx', 1712837572),
(10, '', 'ss', 3, 'ss', 1712843586),
(11, 'jordan 1 low', 'a', 3, 'aa', 1712844537),
(12, 'black off-white hoodie', 'asasas', 3, 'noice cja', 1712852583);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `documents` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `image`, `full_name`, `sex`, `email`, `number`, `documents`, `job_type`) VALUES
(1, 'profile.jpg', 'Dora', 'female', '', '', '431097082_434208715795011_5347946004316131280_n.jpg', 'Product Manager'),
(2, 'profile.jpg', 'sd', 'male', '', '', 'sd', 'Manager'),
(3, 'profile.jpg', 'Dora', 'female', '', '', 'asas', 'Accountant'),
(4, 'image', 'ralph', 'male', 'ralph@gmail.com', '99999', '431097082_434208715795011_5347946004316131280_n.jpg', 'Rider'),
(5, 'image', 'asd', 'male', 'ralph@gmail.com', '09123837402', '431097082_434208715795011_5347946004316131280_n.jpg', 'Rider');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `image`, `fname`, `sex`, `age`, `email`, `number`, `username`, `address`, `pass`, `user_type`) VALUES
(1, 'profile.jpg', 'Administrator', '', 0, '', '', 'admin', '', 'admin', 'HypeBeast admin'),
(2, 'profile.jpg', 'seller 1', 'female', 15, 'seller@gmail.com', '', 'seller1', '1234aa', '1234', 'HypeBeast seller 1'),
(3, '', 'user', 'male', 20, 'user@gmail.com', '', 'user', 'usera', 'user', 'HypeBeast user'),
(4, 'profile.jpg', 'seller 2', 'male', 0, 'seller2@gmail.com', '', 'seller2', 'seller2', '1234', 'HypeBeast seller 2'),
(5, 'profile.jpg', 'seller3', '', 0, 'seller3@gmail.com', '', 'seller3', 'seller3', '1234', 'HypeBeast seller 3'),
(6, 'profile.jpg', 'seller4', '', 0, 'seller4@gmail.com', '', 'seller4', 'seller4', '1234', 'HypeBeast seller 4'),
(7, 'profile.jpg', 'seller5', 'male', 6, 'seller5@gmail.com', '97987', 'seller5', 'seller5', '1234', 'HypeBeast seller 5'),
(8, 'a.jpeg', 'user Jobhub', 'male', 21, 'user@gmail.com', '0923745', 'job', 'job user', 'job', 'JobHub user'),
(9, 'a.jpeg', 'job admin', 'male', 21, 'admin@gmail.com', '0923745', 'jobAdmin', 'job admin', '1', 'JobHub admin'),
(16, ' -3.jpg', 'ralph miole', 'male', 69, 'ralph@gmail.com', '09757576', 'user', 'asdasdasd', 'user', 'JobHub user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approved_order`
--
ALTER TABLE `approved_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_lists`
--
ALTER TABLE `job_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending_applicants`
--
ALTER TABLE `pending_applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
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
-- AUTO_INCREMENT for table `approved_order`
--
ALTER TABLE `approved_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `job_lists`
--
ALTER TABLE `job_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pending_applicants`
--
ALTER TABLE `pending_applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
