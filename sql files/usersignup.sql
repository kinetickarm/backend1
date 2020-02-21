-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 21, 2020 at 09:34 AM
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
-- Table structure for table `usersignup`
--

CREATE TABLE `usersignup` (
  `email_id` varchar(255) NOT NULL,
  `fullname` text NOT NULL,
  `password` varchar(250) NOT NULL,
  `phonenumber` bigint(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersignup`
--

INSERT INTO `usersignup` (`email_id`, `fullname`, `password`, `phonenumber`, `type`) VALUES
('karmasmart216@gmail.com', 'Patel Karm Bharatbhai', 'karm', 9426452921, 'user'),
('karmpatel216@gmail.com', 'karm patel', 'karm', 6556565, 'user'),
('mahishapatel3220@gmail.com', 'mahisha', 'karm', 545454, 'user'),
('malavmevada77@gmail.com', 'sqs', 'sas', 122, 'user'),
('pppatel01@gmail.com', 'prachii', '123', 787979, 'admin'),
('rutvikpatel90990@gmail.com', 'Rutvik Patel', 'karm', 9099072492, 'user'),
('smitakhani2000@gmail.com', 'Smit Akhani', 'karm', 7359911009, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usersignup`
--
ALTER TABLE `usersignup`
  ADD PRIMARY KEY (`email_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
