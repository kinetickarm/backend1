-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 21, 2020 at 09:31 AM
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
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `email_id` varchar(100) NOT NULL,
  `id` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `branch` text NOT NULL,
  `sem` int(3) NOT NULL,
  `rank` int(10) NOT NULL,
  `action` varchar(5) NOT NULL,
  `action2` varchar(100) DEFAULT 'not allocated',
  `remarks` varchar(5000) NOT NULL,
  `room_no` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`email_id`, `id`, `name`, `branch`, `sem`, `rank`, `action`, `action2`, `remarks`, `room_no`) VALUES
('karmasmart216@gmail.com', 'VGECHOSTEL1', 'karm', 'Computer', 1, 1, '1', 'not allocated', '<br>', 0),
('mahil216sha1@gmail.com', 'VGECHOSTEL2', 'mahisha', 'IT', 2, 78, '1', 'finally_allocated', '<br>', 1313),
('', 'VGECHOSTEL3', 'malav', 'Mechanical', 3, 43, '1', 'not allocated', 'Problem in passportsize photo<br>', 0),
('', 'VGECHOSTEL4', 'Rutvik', 'IC', 6, 12, '1', 'not allocated', 'Invalid College Id<br>upload original id', 0),
('', 'VGECHOSTEL5', 's', 'IC', 6, 4545, '1', 'not allocated', 'Problem in Aadharcard<br>invalid rank', 0),
('rutvikpatel90990@gmail.com', 'VGECHOSTEL6', 'Rutvik Patel', 'Computer', 4, 892, '1', 'rejected', 'old fee receipt', 0),
('smitakhani2000@gmail.com', 'VGECHOSTEL7', 'Smit', 'Mechanical', 6, 98878, '1', 'finally_allocated', '<br>', 1313);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
