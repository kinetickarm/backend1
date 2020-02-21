-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 21, 2020 at 09:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HostelManagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` varchar(30) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `aadhar_card` varchar(1000) NOT NULL,
  `marksheet` varchar(1000) NOT NULL,
  `feereciept` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `photo`, `aadhar_card`, `marksheet`, `feereciept`) VALUES
('VGECHOSTEL1', 'Screenshot from 2020-02-10 22-16-35.png', 'Screenshot from 2020-02-10 22-17-20.png', 'Screenshot from 2020-02-10 22-32-37.png', 'Screenshot from 2020-02-11 01-18-42.png'),
('VGECHOSTEL10', '3.1.png', '3.2.png', '3.3.png', '1.2.png'),
('VGECHOSTEL6', 'Screenshot from 2020-02-10 22-16-35.png', 'Screenshot from 2020-02-10 22-17-20.png', 'Screenshot from 2020-02-10 22-32-37.png', 'Screenshot from 2020-02-11 01-18-42.png'),
('VGECHOSTEL7', 'video-bg.png', 'vgeclogo.png', 'map-marker.png', 'resort-story-img.jpg'),
('VGECHOSTEL8', 'Screenshot from 2020-02-10 22-16-35.png', 'Screenshot from 2020-02-10 22-17-20.png', 'Screenshot from 2020-02-10 23-47-13.png', 'Screenshot from 2020-02-11 01-18-42.png'),
('VGECHOSTEL9', '1.1.png', '2.3.png', '2.2.png', '3.3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
