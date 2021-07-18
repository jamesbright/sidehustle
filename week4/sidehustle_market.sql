-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 11:19 PM
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
-- Database: `sidehustle_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `id` int(11) NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`id`, `item`, `price`, `user_id`, `created_at`) VALUES
(10, 'Hp pavillion', 87000, 1, '2021-07-16 13:49:04'),
(11, 'Hp pavillion', 87000, 1, '2021-07-16 13:50:43'),
(12, 'Hp pavillion', 87000, 1, '2021-07-16 13:51:13'),
(13, 'Hp pavillion', 87000, 1, '2021-07-16 13:51:26'),
(14, 'Hp pavillion', 87000, 1, '2021-07-16 13:52:44'),
(15, 'Tecno m6', 56000, 1, '2021-07-16 14:23:03'),
(16, 'Tecno m6', 56000, 1, '2021-07-16 14:23:53'),
(17, 'Tecno m6', 50000, 1, '2021-07-17 08:58:58'),
(18, 'Hp pavillion', 4500, 2, '2021-07-18 20:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'James Ononiwu', 'jamesononiwu@gmail.com', '$2y$12$JpWEzPpjcltSIdZ3KYFrPuRUta6y/VeasePVlPamfOmlndejLbh2a', '2021-07-16 13:17:59'),
(2, 'Mike Davies', 'mike@gmail.com', '$2y$12$x1vMKKEhAxdGa9PjVCkcgOvIwOuraeBv/HM9hoXLXDLSs/dADVfq.', '2021-07-18 20:48:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `market`
--
ALTER TABLE `market`
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
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
