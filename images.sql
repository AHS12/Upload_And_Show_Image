-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 08:16 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imagestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `img_id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `img_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`img_id`, `img_name`, `img_path`, `img_type`) VALUES
(41, '16836038_797154637101441_587587720136164003_o.jpg', 'images/16836038_797154637101441_587587720136164003_o.jpg', 'image/jpeg'),
(42, '1.PNG', 'images/1.PNG', 'image/png'),
(43, '2.PNG', 'images/2.PNG', 'image/png'),
(44, 'Bangladesh-map-divisions-wise.jpg', 'images/Bangladesh-map-divisions-wise.jpg', 'image/jpeg'),
(45, '3.PNG', 'images/3.PNG', 'image/png'),
(46, '3.PNG', 'images/3.PNG', 'image/png'),
(47, '3.PNG', 'images/3.PNG', 'image/png'),
(48, '3.PNG', 'images/3.PNG', 'image/png'),
(49, 'Paladins 2017-07-23 22-32-52-28.png', 'images/Paladins 2017-07-23 22-32-52-28.png', 'image/png'),
(50, 'giFnui8.jpg', 'images/giFnui8.jpg', 'image/jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
