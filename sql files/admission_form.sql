-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 21, 2020 at 09:32 AM
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
-- Table structure for table `admission_form`
--

CREATE TABLE `admission_form` (
  `id` varchar(20) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `category` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `area` varchar(200) NOT NULL,
  `city` text NOT NULL,
  `district` text NOT NULL,
  `zipcode` int(10) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_form`
--

INSERT INTO `admission_form` (`id`, `dob`, `category`, `email`, `phone_number`, `area`, `city`, `district`, `zipcode`, `gender`) VALUES
('VGECHOSTEL1', '2020-01-11', 'general', 'karmasmart216@gmail.com', 96243837, 'q', 'rt', '', 12345, 'male'),
('VGECHOSTEL2', '2020-01-21', '', 'mahil216sha1@gmail.com', 54545, 'q', 'rt', '', 1231, 'Female'),
('VGECHOSTEL3', '2020-01-03', 'ST', 'mal@gmail.com', 3555, 'geg', 'fsfe', 'wfaf', 1234, 'Male'),
('VGECHOSTEL4', '2020-01-18', 'General', 'rutvik@gmail.com', 96258, 'sd', 'wq', 'dfv', 1212, 'Male'),
('VGECHOSTEL5', '2020-01-23', 'General', 'jgydgy@gmkd.com', 9624383710, 'ukhfuhduf', 'uhfffghtiyL', 'krotoro', 8555, 'Male'),
('VGECHOSTEL6', '2001-01-18', 'General', 'rutvikpatel90990@gmail.com', 9099072492, 'VGEC', 'Chnadkheda', 'Ahemdabad', 382424, 'Male'),
('VGECHOSTEL7', '2020-02-15', 'General', 'smitakhani2000@gmail.com', 7359911009, 'vgec', 'chandkheda', 'Ahmedabad', 382424, 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_form`
--
ALTER TABLE `admission_form`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
