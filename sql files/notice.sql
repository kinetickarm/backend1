-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2020 at 05:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostelmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `nid` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `notice` varchar(500) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`nid`, `subject`, `sdate`, `edate`, `notice`, `status`) VALUES
(1, 'Water', '2020-02-15', '2020-02-29', 'Due to scarcity of water in our area, it is a kind request to conserve water and do not waste water unnecessarily.', 1),
(2, 'Internet', '2020-02-22', '2020-02-29', 'Due to some technical issues , internet facility will not be available from 22nd feb to 29th feb,2020 .', 1),
(3, 'Internet', '2020-02-12', '2020-02-29', 'Due to some technical issues , internet facility will not be available from 22nd feb to 29th feb,2020 .', 1),
(4, 'Clean', '2020-02-15', '2020-02-22', 'It is observed that cleanliness is not maintained properly from last month. If you are not maintaining cleanliness you will be charged for the same.', 1),
(5, 'Fees', '2020-02-16', '2020-02-23', 'Dear all,\r\nIt is to inform you that within a week please pay your hostel fees and upload your fee receipt so your admission can be renewed. If your fee receipt wont be found uploaded, your hostel admission will be cancelled.', 1),
(6, 'Fees', '2020-02-16', '2020-02-14', 'dajbkfambg', 1),
(7, 'Nuisance', '2020-02-16', '2020-02-20', 'It is seen that hostel students are creating so much nuisance in the hostel.\r\nDo not create nuisance as seen from last 1 week due to your internal problems, otherwise strict actions will be taken.', 1),
(8, 'Water', '2020-02-16', '2020-02-19', 'wtuwajy', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`nid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
