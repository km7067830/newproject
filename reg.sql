-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2021 at 11:37 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pnum` decimal(11,0) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `uname`, `email`, `pnum`, `address`, `password`, `image`) VALUES
(1, 'monu mishra', 'mn7067830', 'mn7067830@gmail.com', '8299687487', '122/1 BLOCK NO 6 SAROJNI naga near Delhi darbar ka', 'd964173dc44da83eeafa3aebbee9a1a0', 'image/badamas 1.jpeg'),
(3, 'krishna Awtar Mishra', 'km7067830', 'km7067830@gmail.com', '7753803306', '122/1 BLOCK NO 6 SAROJNI naga near Delhi darbar ka', 'e10adc3949ba59abbe56e057f20f883e', 'image/photo-1561731216-c3a4d99437d5 - Copy - Copy '),
(4, 'shivam', 'sh7067830', 'sh7067830@gmail.com', '7753803306', '122/1 BLOCK NO 6 SAROJNI naga near Delhi darbar ka', 'd964173dc44da83eeafa3aebbee9a1a0', 'image/unnamed - Copy.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
