-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2018 at 09:41 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taskmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `email`, `updated_at`, `created_at`) VALUES
(1, 'Đỗ Viết Duy', '918833689', 'vduybtc@gmail.com', NULL, NULL),
(11, 'Nguyễn Tiến Lâm', '969666999', 'nguyentienlam@tueba.edu.vn', NULL, NULL),
(12, 'Nguyễn Việt Cường', '989666888', 'cuongnguyen@live.com', NULL, NULL),
(13, 'Nguyễn Thị Thu Yến', '966888666', 'maibui@oulook.com', NULL, NULL),
(14, 'Trần Huy Ngọc', '987667788', 'huyngoctran@outlook.com', NULL, NULL),
(15, 'Bùi Thị Mai', '989666888', 'doquang@dogiafarm.vn', NULL, NULL),
(19, 'Trần Quyết Thắng', '0912345678', 'thangtran@gmail.com', '2018-10-03 18:43:00', '2018-10-03 18:38:55'),
(20, 'Đỗ Đức Quang', '0988668899', 'quangdo@dogiafarm.com', '2018-10-03 19:16:17', '2018-10-03 19:16:17'),
(23, 'Trần Quang Huy', '0912654123', 'tranquanghuy@tueba.edu.vn', '2018-10-03 20:52:42', '2018-10-03 20:52:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
