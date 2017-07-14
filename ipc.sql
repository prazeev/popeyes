-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2017 at 06:59 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipcamera`
--

-- --------------------------------------------------------

--
-- Table structure for table `camera_list`
--

CREATE TABLE `camera_list` (
  `c_id` int(11) NOT NULL,
  `cname` varchar(250) NOT NULL DEFAULT 'CAMERA',
  `zm` int(11) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camera_list`
--

INSERT INTO `camera_list` (`c_id`, `cname`, `zm`, `location`) VALUES
(1, 'Demo Camera', 5, 'Kathmandu'),
(2, 'Joseph Camera DEMO', 6, 'Kathmandu'),
(3, 'Joseph DEMO Camera', 7, 'Nepal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camera_list`
--
ALTER TABLE `camera_list`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camera_list`
--
ALTER TABLE `camera_list`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
