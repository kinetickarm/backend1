-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2020 at 05:38 PM
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
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email_id` varchar(100) NOT NULL,
  `id` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `branch` text NOT NULL,
  `sem` int(3) NOT NULL,
  `rank` int(10) NOT NULL,
  `action` varchar(5) NOT NULL,
  `action2` varchar(100) DEFAULT 'not allocated',
  `fees` int(5) NOT NULL DEFAULT 0,
  `remarks` varchar(5000) NOT NULL,
  `room_no` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`timestamp`, `email_id`, `id`, `name`, `branch`, `sem`, `rank`, `action`, `action2`, `fees`, `remarks`, `room_no`) VALUES
('2020-02-23 16:27:52', 'karmasmart216@gmail.com', 'VGECHOSTEL1', 'karm', 'IC', 1, 1, '1', 'not allocated', 0, '<br>', 0),
('2020-02-25 14:09:03', 'darshaksavaliya1111@gmail.com', 'VGECHOSTEL10', 'savaliya darshak nareshbhai', 'IC', 1, 2625, '0', 'not allocated', 0, '', 0),
('2020-02-26 06:53:01', 'akram87587@gmail.com', 'VGECHOSTEL11', 'Akram Patel', 'IC', 1, 1324, '1', 'not allocated', 1, '<br>', 0),
('2020-02-26 09:55:34', 'akramsolanki4334@gmail.com', 'VGECHOSTEL12', 'akram', 'IT', 3, 854, '1', 'not allocated', 0, '<br>', 0),
('2020-02-24 18:18:05', 'malavmevada92@gmail.com', 'VGECHOSTEL3', 'malav', 'IT', 1, 43, '1', 'not allocated', 1, '<br>', 0),
('2020-02-25 19:10:22', 'rutvik@gmail.com', 'VGECHOSTEL4', 'Rutvik', 'IT', 1, 12, '1', 'finally_allocated', 1, '<br>', 1105),
('2020-02-25 19:24:18', 'smitalhani@gmail.com', 'VGECHOSTEL5', 's', 'IT', 1, 4545, '1', 'finally_allocated', 1, '<br>', 2301),
('2020-02-17 16:39:15', 'rutvikpatel90990@gmail.com', 'VGECHOSTEL6', 'Rutvik Patel', 'IT', 1, 892, '1', 'not allocated', 0, '<br>', 0),
('2020-02-22 06:56:21', 'smitakhani2000@gmail.com', 'VGECHOSTEL7', 'Smit', 'IT', 1, 98878, '0', 'not allocated', 0, '<br>', 1313),
('2020-02-24 19:23:01', 'dhvanil26patel@gmail.com', 'VGECHOSTEL8', 'dhvanil', 'IC', 1, 4545, '1', 'finally_allocated', 1, '<br>', 1313),
('2020-02-24 16:16:17', 'om000193patel@gmail.com', 'VGECHOSTEL9', 'Om patel', 'IT', 1, 1412, '0', 'not allocated', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admission_form`
--

CREATE TABLE `admission_form` (
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
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

INSERT INTO `admission_form` (`timestamp`, `id`, `dob`, `category`, `email`, `phone_number`, `area`, `city`, `district`, `zipcode`, `gender`) VALUES
('2020-02-25 19:46:49', 'VGECHOSTEL1', '2020-01-11', 'general', 'karmasmart216@gmail.com', 96243837, 'q', 'rt', '', 12345, 'male'),
('2020-02-25 19:46:49', 'VGECHOSTEL10', '2001-08-10', 'General', 'darshaksavaliya1111@gmail.com', 9978585452, 'devam 1 ', 'chandkheda', 'Ahemdabad', 382424, 'Male'),
('2020-02-25 19:46:49', 'VGECHOSTEL11', '2020-02-23', 'OBC', 'akram87587@gmail.com', 9375756054, 'Vasudham', 'Adipur', 'Kutch', 370110, 'Male'),
('2020-02-25 20:11:01', 'VGECHOSTEL12', '2020-02-11', 'General', 'akramsolanki4334@gmail.com', 9426452921, 'devam 1 ', 'Kutch', 'Ahemdabad', 370110, 'Male'),
('2020-02-25 19:46:49', 'VGECHOSTEL3', '2020-01-03', 'ST', 'mal@gmail.com', 3555, 'geg', 'fsfe', 'wfaf', 1234, 'Male'),
('2020-02-25 19:46:49', 'VGECHOSTEL4', '2020-01-18', 'General', 'rutvik@gmail.com', 96258, 'sd', 'wq', 'dfv', 1212, 'Male'),
('2020-02-25 19:46:49', 'VGECHOSTEL5', '2020-01-23', 'General', 'jgydgy@gmkd.com', 9624383710, 'ukhfuhduf', 'uhfffghtiyL', 'krotoro', 8555, 'Male'),
('2020-02-25 19:46:49', 'VGECHOSTEL6', '2001-01-18', 'General', 'rutvikpatel90990@gmail.com', 9099072492, 'VGEC', 'Chnadkheda', 'Ahemdabad', 382424, 'Male'),
('2020-02-25 19:46:49', 'VGECHOSTEL7', '2020-02-15', 'General', 'smitakhani2000@gmail.com', 7359911009, 'vgec', 'chandkheda', 'Ahmedabad', 382424, 'Male'),
('2020-02-25 19:46:49', 'VGECHOSTEL8', '2020-02-19', 'OBC', 'dhvanil26patel@gmail.com', 9426452921, 'hari om complex', 'chandkheda', 'ahmedabad', 382424, 'Male'),
('2020-02-25 19:46:49', 'VGECHOSTEL9', '2020-02-16', 'General', 'om000193patel@gmail.com', 6355145366, 'om cpmplex', 'surendranagar', 'surendranagar', 301010, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `branch_intake`
--

CREATE TABLE `branch_intake` (
  `branch` varchar(20) NOT NULL,
  `sem` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `intake` int(10) NOT NULL,
  `approved` int(20) NOT NULL,
  `allocated` int(20) NOT NULL,
  `temp_allocated` int(20) NOT NULL,
  `pending` int(20) NOT NULL,
  `rejected` int(20) NOT NULL,
  `total_applications` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch_intake`
--

INSERT INTO `branch_intake` (`branch`, `sem`, `total`, `intake`, `approved`, `allocated`, `temp_allocated`, `pending`, `rejected`, `total_applications`) VALUES
('IC', 1, 3, 1, 2, 1, 0, 1, 0, 4),
('IC', 3, 2, 2, 0, 0, 0, 0, 0, 0),
('IT', 1, 3, 1, 2, 2, 0, 2, 0, 6),
('IT', 3, 2, 1, 1, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `cid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `roomno` varchar(5) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `proof` varchar(255) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `action` varchar(255) NOT NULL DEFAULT '-',
  `decision` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`cid`, `name`, `email`, `contact`, `branch`, `sem`, `roomno`, `category`, `description`, `proof`, `status`, `action`, `decision`) VALUES
('CID1', 'Mish', 'mish38@gmail.com', '9068344344', 'IT', '05', '7682', 'Complaint related to illegal hostelites', 'sdgnmh', 'sublime-text.png', 'Rejected', 'False complaint', 1),
('CID2', 'Mish', 'mish38@gmail.com', '9068344344', 'IT', '05', '7682', 'Complaint related to illegal hostelites', 'sdgnmh', 'sublime-text.png', 'Solved', 'SOLVED', 1),
('CID3', 'Mahisha Patel', 'mahisha230@gmail.com', '7824359014', 'IT', '04', '7582', 'Cleanliness related complaint', 'skdjgbmhs sdj', '3.1.png', 'Pending', '-', 0),
('CID4', 'karm ', 'karmasmart216@gmail.com', '9624383710', 'compter', '3', '1313', 'Complaint related to mess(food)', 'uuugghghhhhg', 'logo.png', 'Pending', '-', 0);

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
('', 'Screenshot from 2020-02-22 01-03-57.png', 'Screenshot from 2020-02-10 23-47-13.png', 'Screenshot from 2020-02-10 22-17-20.png', 'Screenshot from 2020-02-10 22-17-20.png'),
('VGECHOSTEL1', 'Screenshot from 2020-02-10 22-16-35.png', 'Screenshot from 2020-02-10 22-17-20.png', 'Screenshot from 2020-02-10 22-32-37.png', 'Screenshot from 2020-02-11 01-18-42.png'),
('VGECHOSTEL11', 'IMG_0893 copy--.jpg', 'calc bill.jpg', '1 001.jpg', 'choose-resort-bg.jpg'),
('VGECHOSTEL6', 'Screenshot from 2020-02-10 22-16-35.png', 'Screenshot from 2020-02-10 22-17-20.png', 'Screenshot from 2020-02-10 22-32-37.png', 'Screenshot from 2020-02-11 01-18-42.png'),
('VGECHOSTEL7', 'video-bg.png', 'vgeclogo.png', 'map-marker.png', 'resort-story-img.jpg'),
('VGECHOSTEL8', 'Screenshot from 2020-02-10 22-16-35.png', 'Screenshot from 2020-02-10 22-17-20.png', 'Screenshot from 2020-02-10 23-47-13.png', 'Screenshot from 2020-02-11 01-18-42.png'),
('VGECHOSTEL9', 'Screenshot from 2020-02-10 22-16-35.png', 'Screenshot from 2020-02-10 22-17-20.png', 'Screenshot from 2020-02-10 23-47-13.png', 'Screenshot from 2020-02-22 01-03-57.png');

-- --------------------------------------------------------

--
-- Table structure for table `feereciept`
--

CREATE TABLE `feereciept` (
  `id` varchar(20) NOT NULL,
  `reciept` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feereciept`
--

INSERT INTO `feereciept` (`id`, `reciept`) VALUES
('VGECHOSTEL11', '1 001.jpg'),
('VGECHOSTEL8', 'Screenshot from 2020-02-10 22-32-37.png');

-- --------------------------------------------------------

--
-- Table structure for table `intake`
--

CREATE TABLE `intake` (
  `hostel` int(10) NOT NULL,
  `floor` int(10) NOT NULL,
  `room_no` int(10) NOT NULL,
  `seat_left` int(3) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intake`
--

INSERT INTO `intake` (`hostel`, `floor`, `room_no`, `seat_left`) VALUES
(1, 1, 1101, 0),
(1, 1, 1102, 3),
(1, 1, 1103, 3),
(1, 1, 1104, 3),
(1, 1, 1105, 2),
(1, 2, 1201, 0),
(1, 2, 1202, 1),
(1, 2, 1203, 3),
(1, 2, 1204, 3),
(1, 2, 1205, 3),
(1, 3, 1301, 0),
(1, 3, 1302, 1),
(1, 3, 1303, 3),
(1, 3, 1304, 3),
(1, 3, 1305, 3),
(2, 1, 2101, 0),
(2, 1, 2102, 3),
(2, 1, 2103, 3),
(2, 1, 2104, 3),
(2, 1, 2105, 3),
(2, 2, 2201, 0),
(2, 2, 2202, 3),
(2, 2, 2203, 3),
(2, 2, 2204, 3),
(2, 2, 2205, 3),
(2, 3, 2301, 0),
(2, 3, 2302, 3),
(2, 3, 2303, 3),
(2, 3, 2304, 3),
(2, 3, 2305, 3);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
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

INSERT INTO `notice` (`timestamp`, `nid`, `subject`, `sdate`, `edate`, `notice`, `status`) VALUES
('2020-02-21 12:27:44', 1, 'Water', '2020-02-15', '2020-02-29', 'Due to scarcity of water in our area, it is a kind request to conserve water and do not waste water unnecessarily.', 1),
('2020-02-21 12:27:44', 2, 'Internet', '2020-02-22', '2020-02-29', 'Due to some technical issues , internet facility will not be available from 22nd feb to 29th feb,2020 .', 1),
('2020-02-21 12:27:44', 3, 'Internet', '2020-02-12', '2020-02-29', 'Due to some technical issues , internet facility will not be available from 22nd feb to 29th feb,2020 .', 1),
('2020-02-21 12:27:44', 4, 'Clean', '2020-02-15', '2020-02-22', 'It is observed that cleanliness is not maintained properly from last month. If you are not maintaining cleanliness you will be charged for the same.', 1),
('2020-02-21 12:27:44', 5, 'Fees', '2020-02-16', '2020-02-23', 'Dear all,\r\nIt is to inform you that within a week please pay your hostel fees and upload your fee receipt so your admission can be renewed. If your fee receipt wont be found uploaded, your hostel admission will be cancelled.', 1),
('2020-02-21 12:27:44', 6, 'Fees', '2020-02-16', '2020-02-14', 'dajbkfambg', 1),
('2020-02-21 12:27:44', 7, 'Nuisance', '2020-02-16', '2020-02-20', 'It is seen that hostel students are creating so much nuisance in the hostel.\r\nDo not create nuisance as seen from last 1 week due to your internal problems, otherwise strict actions will be taken.', 1),
('2020-02-21 12:27:44', 8, 'Water', '2020-02-16', '2020-02-19', 'wtuwajy', 0),
('2020-02-25 12:39:06', 33, 'ROUND SCHEDULE', '2020-02-23', '2020-02-28', 'Round:1--you have to fill application between2020-02-23 and 2020-02-28', 0),
('2020-02-25 17:13:39', 34, 'Water', '2020-02-25', '2020-02-27', 'please use water carefully!!', 1),
('2020-02-25 17:39:56', 35, 'ROUND SCHEDULE', '2020-02-20', '2020-02-22', 'Round:1--you have to fill application between2020-02-20 and 2020-02-22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `resetpassword`
--

CREATE TABLE `resetpassword` (
  `code` varchar(255) NOT NULL,
  `Email_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rounds`
--

CREATE TABLE `rounds` (
  `round` int(5) NOT NULL,
  `sdate_application` date NOT NULL,
  `edate_application` date NOT NULL,
  `sdate_fees` date NOT NULL,
  `edate_fees` date NOT NULL,
  `decription` longtext NOT NULL,
  `edate_round` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rounds`
--

INSERT INTO `rounds` (`round`, `sdate_application`, `edate_application`, `sdate_fees`, `edate_fees`, `decription`, `edate_round`) VALUES
(1, '2020-02-20', '2020-02-28', '2020-02-28', '2020-02-24', 'nxnncmn', '2020-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `usersignup`
--

CREATE TABLE `usersignup` (
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email_id` varchar(255) NOT NULL,
  `fullname` text NOT NULL,
  `password` varchar(250) NOT NULL,
  `phonenumber` bigint(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersignup`
--

INSERT INTO `usersignup` (`timestamp`, `email_id`, `fullname`, `password`, `phonenumber`, `type`) VALUES
('2020-02-25 17:53:08', 'akram87587@gmail.com', 'Akram Patel', 'a8ecfeb9e8f1491c83594909f6cdd4dc', 9624389720, 'user'),
('2020-02-25 17:48:36', 'akramsolanki4334@gmail.com', 'Akram Solanki', 'a8ecfeb9e8f1491c83594909f6cdd4dc', 6363524178, 'user'),
('2020-02-25 17:48:36', 'darshaksavaliya1111@gmail.com', 'darshak savaliya', 'a8ecfeb9e8f1491c83594909f6cdd4dc', 9978585452, 'user'),
('2020-02-25 17:48:36', 'dhvanil26patel@gmail.com', 'dhvanil patel', 'a8ecfeb9e8f1491c83594909f6cdd4dc', 9106736063, 'user'),
('2020-02-26 11:56:08', 'karmasmart216@gmail.com', 'Patel Karm Bharatbhai', 'karm1', 9426452921, 'user'),
('2020-02-25 17:48:36', 'karmpatel216@gmail.com', 'karm patel', 'karm', 6556565, 'user'),
('2020-02-25 17:48:36', 'mahishapatel3220@gmail.com', 'mahisha', 'karm', 545454, 'user'),
('2020-02-25 17:48:36', 'malavmevada77@gmail.com', 'sqs', 'sas', 122, 'user'),
('2020-02-25 17:48:36', 'om000193patel@gmail.com', 'Rutvik Patel', 'a8ecfeb9e8f1491c83594909f6cdd4dc', 6355145366, 'user'),
('2020-02-25 17:48:36', 'pppatel01@gmail.com', 'prachii', 'a8ecfeb9e8f1491c83594909f6cdd4dc', 787979, 'admin'),
('2020-02-25 19:59:16', 'psangita492@gmail.com', 'Yash Patel', 'a8ecfeb9e8f1491c83594909f6cdd4dc', 787878, 'user'),
('2020-02-25 17:48:36', 'rutvikpatel90990@gmail.com', 'Rutvik Patel', 'karm', 9099072492, 'user'),
('2020-02-25 17:48:36', 'smitakhani2000@gmail.com', 'Smit Akhani', 'karm', 7359911009, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_form`
--
ALTER TABLE `admission_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_intake`
--
ALTER TABLE `branch_intake`
  ADD PRIMARY KEY (`branch`,`sem`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feereciept`
--
ALTER TABLE `feereciept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intake`
--
ALTER TABLE `intake`
  ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `resetpassword`
--
ALTER TABLE `resetpassword`
  ADD PRIMARY KEY (`Email_id`);

--
-- Indexes for table `rounds`
--
ALTER TABLE `rounds`
  ADD PRIMARY KEY (`round`);

--
-- Indexes for table `usersignup`
--
ALTER TABLE `usersignup`
  ADD PRIMARY KEY (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
