-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 02:22 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronictrade`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `qtyorder` varchar(50) NOT NULL,
  `costumerid` varchar(50) NOT NULL,
  `paymethed` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `prodectid` varchar(50) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `qtyorder`, `costumerid`, `paymethed`, `total`, `prodectid`, `date`) VALUES
(16, '2 , 1 , 1', '28', 'cache', '33', '352 , 369 , 349', '2020-09-21 10:11:29.937753'),
(17, '2 , 1 , 1', '28', 'cache', '33', '352 , 369 , 349', '2020-09-21 10:13:20.361604'),
(18, '2 , 1 , 1', '28', 'cache', '33', '352 , 369 , 349', '2020-09-21 10:15:20.742963'),
(19, '2 , 1 , 1', '28', 'cache', '33', '352 , 369 , 349', '2020-09-21 10:17:59.273369'),
(20, '2 , 1 , 1', '28', 'cache', '33', '352 , 369 , 349', '2020-09-21 10:18:11.140087'),
(21, '2 , 1 , 1', '28', 'cache', '33', '352 , 369 , 349', '2020-09-21 10:19:29.398297'),
(22, '2 , 1 , 1', '28', 'cache', '33', '352 , 369 , 349', '2020-09-21 13:50:55.977025'),
(23, '2 , 1 , 1', '28', 'cache', '33', '352 , 369 , 349', '2020-09-21 13:52:10.046379'),
(24, '2 , 1 , 1', '28', 'cache', '33', '352 , 369 , 349', '2020-09-21 13:55:43.280538'),
(25, '2 , 1 , 1', '28', 'cache', '33', '352 , 369 , 349', '2020-09-21 13:56:05.850337'),
(26, '2 , 1 , 1', '28', 'cache', '33', '352 , 369 , 349', '2020-09-21 13:56:41.722200'),
(27, '2 , 1 , 1', '28', 'cache', '33', '352 , 369 , 349', '2020-09-21 13:57:00.221929'),
(28, '2 , 1 , 1', '28', 'cache', '33', '352 , 369 , 349', '2020-09-21 13:57:58.470634'),
(29, '2 , 1 , 1', '28', 'cache', '33', '352 , 369 , 349', '2020-09-21 13:58:13.942862'),
(30, '2 , 1 , 1', '28', 'cache', '33', '352 , 369 , 349', '2020-09-21 13:58:26.015041'),
(31, '2 , 1 , 1', '28', 'cache', '33', '352 , 369 , 349', '2020-09-21 13:58:45.295384'),
(32, '2 , 1 , 1', '28', 'cache', '33', '352 , 369 , 349', '2020-09-21 13:58:54.881468'),
(33, '2 , 1 , 1 , 1', '28', 'cache', '45', '352 , 369 , 349 , 346', '2020-09-21 15:26:47.688898');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
