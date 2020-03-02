-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 28, 2020 at 07:34 AM
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
  `acpc` int(10) DEFAULT NULL,
  `cpi` float DEFAULT NULL,
  `action` varchar(5) NOT NULL,
  `action2` varchar(100) DEFAULT 'not allocated',
  `fees` int(5) NOT NULL DEFAULT 0,
  `remarks` varchar(5000) NOT NULL,
  `room_no` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`timestamp`, `email_id`, `id`, `name`, `branch`, `sem`, `acpc`, `cpi`, `action`, `action2`, `fees`, `remarks`, `room_no`) VALUES
('2020-02-28 02:24:17', 'karmasmart216@gmail.com', 'VGECHOSTEL1', 'karm', 'IC', 1, 1, 0, '1', 'finally_allocated', 1, '<br>', 1101),
('2020-02-28 05:52:49', 'darshaksavaliya1111@gmail.com', 'VGECHOSTEL10', 'savaliya darshak nareshbhai', 'IC', 5, NULL, 7.83, '1', 'not allocated', 1, '', 0),
('2020-02-28 05:52:55', 'akram87587@gmail.com', 'VGECHOSTEL11', 'Akram Patel', 'IC', 1, 1324, NULL, '1', 'finally_allocated', 1, '<br>', 1102),
('2020-02-28 05:54:47', 'akramsolanki4334@gmail.com', 'VGECHOSTEL12', 'akram', 'IT', 3, NULL, 7.9, '0', 'not allocated', 0, '<br>', 0),
('2020-02-28 05:54:43', 'jaychaudhary2809@gmail.com', 'VGECHOSTEL13', 'Jay Chaudhary', 'IC', 3, NULL, 8.3, '2', 'not allocated', 0, '', 0),
('2020-02-28 05:54:40', 'chaudharyjay2809@gmail.com', 'VGECHOSTEL14', 'Zeel Patel', 'IC', 3, NULL, 8.5, '0', 'not allocated', 0, '', 0),
('2020-02-28 05:53:06', 'akramsolanki4219@gmail.com', 'VGECHOSTEL15', 'Vaseem ', 'IT', 1, 1478, NULL, '1', 'not allocated', 1, '', 0),
('2020-02-28 05:54:36', 'majithiyadivya@gmail.com', 'VGECHOSTEL16', 'divy', 'IT', 3, NULL, 9.2, '1', 'not allocated', 0, '', 0),
('2020-02-28 05:53:11', 'karmpatel216@gmail.com', 'VGECHOSTEL17', 'Karm Patel', 'IC', 1, 1147, NULL, '1', 'not allocated', 1, '', 0),
('2020-02-28 05:00:32', 'khushnood.shaikh19@gmail.com', 'VGECHOSTEL19', 'khushnood', 'IT', 1, 1221, NULL, '1', 'not allocated', 1, '', 0),
('2020-02-28 05:53:16', 'malavmevada92@gmail.com', 'VGECHOSTEL3', 'malav', 'IT', 1, 43, NULL, '0', 'not allocated', 0, '<br>', 0),
('2020-02-28 05:53:19', 'rutvik@gmail.com', 'VGECHOSTEL4', 'Rutvik', 'IT', 1, 12, NULL, '1', 'not allocated', 1, '<br>', 0),
('2020-02-28 05:53:31', 'smitalhani@gmail.com', 'VGECHOSTEL5', 's', 'IT', 3, NULL, 8.1, '0', 'not allocated', 0, '<br>', 0),
('2020-02-28 05:53:52', 'rutvikpatel90990@gmail.com', 'VGECHOSTEL6', 'Rutvik Patel', 'IC', 3, NULL, 9.52, '1', 'not allocated', 0, '<br>', 0),
('2020-02-28 06:23:18', 'smitakhani2000@gmail.com', 'VGECHOSTEL7', 'Smit', 'IT', 5, NULL, 7.51, '1', 'finally_allocated', 1, '<br>', 1313),
('2020-02-28 06:24:11', 'dhvanil26patel@gmail.com', 'VGECHOSTEL8', 'dhvanil', 'IC', 5, NULL, 8.33, '1', 'finally_allocated', 1, '<br>', 1122),
('2020-02-28 05:54:29', 'om000193patel@gmail.com', 'VGECHOSTEL9', 'Om patel', 'IT', 5, NULL, 8.99, '0', 'not allocated', 0, '', 0);

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
  `handicap` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_form`
--

INSERT INTO `admission_form` (`timestamp`, `id`, `dob`, `category`, `email`, `phone_number`, `area`, `city`, `district`, `zipcode`, `handicap`) VALUES
('2020-02-25 19:46:49', 'VGECHOSTEL1', '2020-01-11', 'general', 'karmasmart216@gmail.com', 96243837, 'q', 'rt', '', 12345, ''),
('2020-02-25 19:46:49', 'VGECHOSTEL10', '2001-08-10', 'General', 'darshaksavaliya1111@gmail.com', 9978585452, 'devam 1 ', 'chandkheda', 'Ahemdabad', 382424, ''),
('2020-02-25 19:46:49', 'VGECHOSTEL11', '2020-02-23', 'OBC', 'akram87587@gmail.com', 9375756054, 'Vasudham', 'Adipur', 'Kutch', 370110, ''),
('2020-02-25 20:11:01', 'VGECHOSTEL12', '2020-02-11', 'General', 'akramsolanki4334@gmail.com', 9426452921, 'devam 1 ', 'Kutch', 'Ahemdabad', 370110, ''),
('2020-02-26 16:58:39', 'VGECHOSTEL13', '2020-02-15', 'OBC', 'jaychaudhary2809@gmail.com', 9624383710, 'ankur', 'Adipur', 'ahmedabad', 382424, ''),
('2020-02-26 17:18:05', 'VGECHOSTEL14', '2020-02-09', 'ST', 'chaudharyjay2809@gmail.com', 6355145366, 'Golden', 'Gandhidham', 'Kutch', 310147, ''),
('2020-02-26 17:31:11', 'VGECHOSTEL15', '2020-02-22', 'OBC', 'akramsolanki4219@gmail.com', 44444444, 'abc', 'Kutch', 'ahmedabad', 370110, ''),
('2020-02-27 06:29:56', 'VGECHOSTEL16', '2012-02-12', 'General', 'majithiyadivya@gmail.com', 9624383710, 'abc', 'def', 'ghi', 98754, ''),
('2020-02-27 09:26:28', 'VGECHOSTEL17', '2001-06-21', 'General', 'karmpatel216@gmail.com', 9426452921, 'devam 1 ', 'Adipur', 'Kutch', 370110, ''),
('2020-02-27 23:22:09', 'VGECHOSTEL19', '2020-02-12', 'General', 'khushnood.shaikh19@gmail.com', 9426452921, 'xfxn', 'Kutch', 'Ahemdabad', 370110, 'yes'),
('2020-02-25 19:46:49', 'VGECHOSTEL3', '2020-01-03', 'ST', 'mal@gmail.com', 3555, 'geg', 'fsfe', 'wfaf', 1234, ''),
('2020-02-25 19:46:49', 'VGECHOSTEL4', '2020-01-18', 'General', 'rutvik@gmail.com', 96258, 'sd', 'wq', 'dfv', 1212, ''),
('2020-02-25 19:46:49', 'VGECHOSTEL5', '2020-01-23', 'General', 'jgydgy@gmkd.com', 9624383710, 'ukhfuhduf', 'uhfffghtiyL', 'krotoro', 8555, ''),
('2020-02-25 19:46:49', 'VGECHOSTEL6', '2001-01-18', 'General', 'rutvikpatel90990@gmail.com', 9099072492, 'VGEC', 'Chnadkheda', 'Ahemdabad', 382424, ''),
('2020-02-25 19:46:49', 'VGECHOSTEL7', '2020-02-15', 'General', 'smitakhani2000@gmail.com', 7359911009, 'vgec', 'chandkheda', 'Ahmedabad', 382424, ''),
('2020-02-25 19:46:49', 'VGECHOSTEL8', '2020-02-19', 'OBC', 'dhvanil26patel@gmail.com', 9426452921, 'hari om complex', 'chandkheda', 'ahmedabad', 382424, ''),
('2020-02-25 19:46:49', 'VGECHOSTEL9', '2020-02-16', 'General', 'om000193patel@gmail.com', 6355145366, 'om cpmplex', 'surendranagar', 'surendranagar', 301010, '');

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
  `not_allocated` int(20) NOT NULL DEFAULT 0,
  `allocated` int(20) NOT NULL,
  `temp_allocated` int(20) NOT NULL,
  `pending` int(20) NOT NULL,
  `rejected` int(20) NOT NULL,
  `total_applications` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch_intake`
--

INSERT INTO `branch_intake` (`branch`, `sem`, `total`, `intake`, `approved`, `not_allocated`, `allocated`, `temp_allocated`, `pending`, `rejected`, `total_applications`) VALUES
('IC', 1, 3, 2, 1, 1, 2, 0, 0, 0, 3),
('IC', 3, 2, 1, 1, 1, 0, 0, 1, 1, 3),
('IC', 5, 2, 0, 2, 2, 0, 0, 0, 0, 2),
('IT', 1, 3, 0, 3, 3, 0, 0, 1, 0, 4),
('IT', 3, 2, 1, 1, 1, 0, 0, 2, 0, 3),
('IT', 5, 2, 1, 1, 1, 0, 0, 1, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `roomno` varchar(5) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `proof` varchar(255) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `action` varchar(255) NOT NULL DEFAULT '-',
  `decision` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`timestamp`, `cid`, `name`, `email`, `contact`, `branch`, `sem`, `roomno`, `category`, `description`, `proof`, `status`, `action`, `decision`) VALUES
('2020-02-27 07:02:48', 'CID1', 'Mish', 'mish38@gmail.com', '9068344344', 'IT', '05', '7682', 'Complaint related to illegal hostelites', 'sdgnmh', 'sublime-text.png', 'Rejected', 'False complaint', 1),
('2020-02-27 07:02:48', 'CID2', 'Mish', 'mish38@gmail.com', '9068344344', 'IT', '05', '7682', 'Complaint related to illegal hostelites', 'sdgnmh', 'sublime-text.png', 'Solved', 'SOLVED', 1),
('2020-02-27 07:02:48', 'CID3', 'Mahisha Patel', 'mahisha230@gmail.com', '7824359014', 'IT', '04', '7582', 'Cleanliness related complaint', 'skdjgbmhs sdj', '3.1.png', 'Pending', '-', 0),
('2020-02-27 07:02:48', 'CID4', 'karm ', 'karmasmart216@gmail.com', '9624383710', 'compter', '3', '1313', 'Complaint related to mess(food)', 'uuugghghhhhg', 'logo.png', 'Pending', '-', 0),
('2020-02-28 06:25:16', 'CID5', 'dhvanil', 'dhvanil26patel@gmail.com', '9426452921', 'IC', '1', '1313', 'Cleanliness related complaint', 'testing by karm', '1.5.png', 'Solved', 'your complaint is solved', 1),
('2020-02-27 08:51:03', 'CID6', 'dhvanil', 'dhvanil26patel@gmail.com', '9426452921', 'IC', '1', '1313', 'Cleanliness related complaint', 'dddddd', 'images.jpeg', 'Pending', '-', 0),
('2020-02-27 09:02:56', 'CID7', 'dhvanil', 'dhvanil26patel@gmail.com', '9426452921', 'IC', '1', '1313', 'Cleanliness related complaint', 'adadadadadadadad', '', 'Pending', '-', 0);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` varchar(30) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `aadhar_card` varchar(1000) NOT NULL,
  `marksheet` varchar(1000) NOT NULL,
  `feereciept` varchar(1000) NOT NULL,
  `handicap` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `photo`, `aadhar_card`, `marksheet`, `feereciept`, `handicap`) VALUES
('', 'Screenshot from 2020-02-22 01-03-57.png', 'Screenshot from 2020-02-10 23-47-13.png', 'Screenshot from 2020-02-10 22-17-20.png', 'Screenshot from 2020-02-10 22-17-20.png', NULL),
('VGECHOSTEL1', 'Screenshot from 2020-02-10 22-16-35.png', 'Screenshot from 2020-02-10 22-17-20.png', 'Screenshot from 2020-02-10 22-32-37.png', 'Screenshot from 2020-02-11 01-18-42.png', NULL),
('VGECHOSTEL10', '3.3.png', '3.2.png', '3.1.png', '2.4.png', NULL),
('VGECHOSTEL11', 'IMG_0893 copy--.jpg', 'calc bill.jpg', '1 001.jpg', 'choose-resort-bg.jpg', NULL),
('VGECHOSTEL13', '1.1.png', '1.2.png', '1.3.png', '1.4.png', NULL),
('VGECHOSTEL14', '1.5.png', '2.1.png', '2.3.png', '2.4.png', NULL),
('VGECHOSTEL15', '1.1.png', '1.2.png', '1.3.png', '1.5.png', NULL),
('VGECHOSTEL17', '1.1.png', '1.2.png', '1.3.png', '1.5.png', NULL),
('VGECHOSTEL19', '1.1.png', '1.2.png', '1.3.png', '1.5.png', '2.1.png'),
('VGECHOSTEL6', 'Screenshot from 2020-02-10 22-16-35.png', 'Screenshot from 2020-02-10 22-17-20.png', 'Screenshot from 2020-02-10 22-32-37.png', 'Screenshot from 2020-02-11 01-18-42.png', NULL),
('VGECHOSTEL7', 'video-bg.png', 'vgeclogo.png', 'map-marker.png', 'resort-story-img.jpg', NULL),
('VGECHOSTEL8', 'Screenshot from 2020-02-10 22-16-35.png', 'Screenshot from 2020-02-10 22-17-20.png', 'Screenshot from 2020-02-10 23-47-13.png', 'Screenshot from 2020-02-11 01-18-42.png', NULL),
('VGECHOSTEL9', 'Screenshot from 2020-02-10 22-16-35.png', 'Screenshot from 2020-02-10 22-17-20.png', 'Screenshot from 2020-02-10 23-47-13.png', 'Screenshot from 2020-02-22 01-03-57.png', NULL);

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
  `seat_left` int(3) NOT NULL DEFAULT 3,
  `sem_1` varchar(3) DEFAULT '" "',
  `branch_1` varchar(30) DEFAULT NULL,
  `sem_3` varchar(5) DEFAULT '" "',
  `branch_3` varchar(30) DEFAULT NULL,
  `sem_5` varchar(3) DEFAULT NULL,
  `branch_5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intake`
--

INSERT INTO `intake` (`hostel`, `floor`, `room_no`, `seat_left`, `sem_1`, `branch_1`, `sem_3`, `branch_3`, `sem_5`, `branch_5`) VALUES
(1, 1, 1101, 1, '1', 'IC', ' ', '', NULL, NULL),
(1, 1, 1102, 2, '1', 'IC', ' ', NULL, NULL, NULL),
(1, 1, 1103, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(1, 1, 1104, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(1, 1, 1105, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(1, 2, 1201, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(1, 2, 1202, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(1, 2, 1203, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(1, 2, 1204, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(1, 2, 1205, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(1, 3, 1301, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(1, 3, 1302, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(1, 3, 1303, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(1, 3, 1304, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(1, 3, 1305, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(2, 1, 2101, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(2, 1, 2102, 3, '\" \"', NULL, '\" \"', NULL, '\" \"', NULL),
(2, 1, 2103, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(2, 1, 2104, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(2, 1, 2105, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(2, 2, 2201, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(2, 2, 2202, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(2, 2, 2203, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(2, 2, 2204, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(2, 2, 2205, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(2, 3, 2301, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(2, 3, 2302, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(2, 3, 2303, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(2, 3, 2304, 3, ' ', NULL, ' ', NULL, NULL, NULL),
(2, 3, 2305, 3, ' ', NULL, ' ', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `intake_new`
--

CREATE TABLE `intake_new` (
  `id` varchar(20) DEFAULT NULL,
  `room` int(6) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `sem` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intake_new`
--

INSERT INTO `intake_new` (`id`, `room`, `branch`, `sem`) VALUES
('VGECHOSTEL1', 1101, 'IC', 1),
('VGECHOSTEL11', 1102, 'IC', 1),
('VGECHOSTEL12', 1103, 'IT', 3),
('VGECHOSTEL13', 1101, 'IC', 3),
('VGECHOSTEL14', 1102, 'IC', 3);

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
('2020-02-25 17:39:56', 35, 'ROUND SCHEDULE', '2020-02-20', '2020-02-22', 'Round:1--you have to fill application between2020-02-20 and 2020-02-22', 0),
('2020-02-28 01:12:45', 36, 'ROUND SCHEDULE', '2020-02-27', '2020-02-07', 'Round:1--You have to pay the hostel fees between 2020-02-04 and 2020-02-07', 1),
('2020-02-28 01:12:45', 37, 'ROUND SCHEDULE', '2020-02-27', '2020-03-01', 'Round:1--You have to fill application between 2020-02-27 and 2020-03-01', 1),
('2020-02-28 01:12:45', 38, 'ROUND SCHEDULE', '2020-02-27', '2020-02-04', 'Round:1--Admin will approve your application between2020-03-01 and 2020-02-04', 1),
('2020-02-28 01:12:45', 39, 'ROUND SCHEDULE', '2020-02-27', '2020-02-09', 'Round:1--Room will be allocated by admin between 2020-02-07 and 2020-02-09', 1),
('2020-02-28 01:14:51', 40, 'ROUND SCHEDULE', '2020-02-27', '2020-02-07', 'Round:1--You have to pay the hostel fees between 2020-02-04 and 2020-02-07', 1),
('2020-02-28 01:14:51', 41, 'ROUND SCHEDULE', '2020-02-27', '2020-03-01', 'Round:1--You have to fill application between 2020-02-27 and 2020-03-01', 1),
('2020-02-28 01:14:51', 42, 'ROUND SCHEDULE', '2020-02-27', '2020-02-04', 'Round:1--Admin will approve your application between2020-03-01 and 2020-02-04', 1),
('2020-02-28 01:14:52', 43, 'ROUND SCHEDULE', '2020-02-27', '2020-02-09', 'Round:1--Room will be allocated by admin between 2020-02-07 and 2020-02-09', 1),
('2020-02-28 01:15:56', 44, 'ROUND SCHEDULE', '2020-02-27', '2020-02-07', 'Round:1--You have to pay the hostel fees between 2020-02-04 and 2020-02-07', 1),
('2020-02-28 01:15:56', 45, 'ROUND SCHEDULE', '2020-02-27', '2020-03-01', 'Round:1--You have to fill application between 2020-02-27 and 2020-03-01', 1),
('2020-02-28 01:15:56', 46, 'ROUND SCHEDULE', '2020-02-27', '2020-02-04', 'Round:1--Admin will approve your application between2020-03-01 and 2020-02-04', 1),
('2020-02-28 01:15:57', 47, 'ROUND SCHEDULE', '2020-02-27', '2020-02-09', 'Round:1--Room will be allocated by admin between 2020-02-07 and 2020-02-09', 1),
('2020-02-28 01:21:23', 48, 'ROUND SCHEDULE', '2020-02-27', '2020-02-07', 'Round:1--You have to pay the hostel fees between 2020-02-04 and 2020-02-07', 1),
('2020-02-28 01:21:23', 49, 'ROUND SCHEDULE', '2020-02-27', '2020-03-01', 'Round:1--You have to fill application between 2020-02-27 and 2020-03-01', 1),
('2020-02-28 01:21:23', 50, 'ROUND SCHEDULE', '2020-02-27', '2020-02-04', 'Round:1--Admin will approve your application between2020-03-01 and 2020-02-04', 1),
('2020-02-28 01:21:23', 51, 'ROUND SCHEDULE', '2020-02-27', '2020-02-09', 'Round:1--Room will be allocated by admin between 2020-02-07 and 2020-02-09', 1),
('2020-02-28 01:23:44', 52, 'ROUND SCHEDULE', '2020-02-27', '2020-02-07', 'Round:1--You have to pay the hostel fees between 2020-02-04 and 2020-02-07', 1),
('2020-02-28 01:23:44', 53, 'ROUND SCHEDULE', '2020-02-27', '2020-03-01', 'Round:1--You have to fill application between 2020-02-27 and 2020-03-01', 1),
('2020-02-28 01:23:44', 54, 'ROUND SCHEDULE', '2020-02-27', '2020-02-04', 'Round:1--Admin will approve your application between2020-03-01 and 2020-02-04', 1),
('2020-02-28 01:23:44', 55, 'ROUND SCHEDULE', '2020-02-27', '2020-02-09', 'Round:1--Room will be allocated by admin between 2020-02-07 and 2020-02-09', 1),
('2020-02-28 01:24:07', 56, 'ROUND SCHEDULE', '2020-02-27', '2020-02-07', 'Round:1--You have to pay the hostel fees between 2020-02-04 and 2020-02-07', 1),
('2020-02-28 01:24:07', 57, 'ROUND SCHEDULE', '2020-02-27', '2020-03-01', 'Round:1--You have to fill application between 2020-02-27 and 2020-03-01', 1),
('2020-02-28 01:24:07', 58, 'ROUND SCHEDULE', '2020-02-27', '2020-02-04', 'Round:1--Admin will approve your application between2020-03-01 and 2020-02-04', 1),
('2020-02-28 01:24:07', 59, 'ROUND SCHEDULE', '2020-02-27', '2020-02-09', 'Round:1--Room will be allocated by admin between 2020-02-07 and 2020-02-09', 1);

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
(1, '2020-02-27', '2020-03-01', '2020-02-04', '2020-02-25', 'hiii', '2020-02-29');

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
  `type` varchar(20) NOT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `sem` varchar(5) DEFAULT NULL,
  `profile_img` varchar(250) DEFAULT NULL,
  `category` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersignup`
--

INSERT INTO `usersignup` (`timestamp`, `email_id`, `fullname`, `password`, `phonenumber`, `type`, `branch`, `sem`, `profile_img`, `category`) VALUES
('2020-02-25 17:53:08', 'akram87587@gmail.com', 'Akram Patel', 'a8ecfeb9e8f1491c83594909f6cdd4dc', 9624389720, 'user', '', '0', '', ''),
('2020-02-26 16:47:12', 'akramsolanki4219@gmail.com', 'Zeel Patel', 'a8ecfeb9e8f1491c83594909f6cdd4dc', 6355145366, 'user', '', '0', '', ''),
('2020-02-25 17:48:36', 'akramsolanki4334@gmail.com', 'Akram Solanki', 'a8ecfeb9e8f1491c83594909f6cdd4dc', 6363524178, 'user', '', '0', '', ''),
('2020-02-26 16:52:26', 'chaudharyjay2809@gmail.com', 'Jay Patel', 'a8ecfeb9e8f1491c83594909f6cdd4dc', 6355145366, 'user', '', '0', '', ''),
('2020-02-25 17:48:36', 'darshaksavaliya1111@gmail.com', 'darshak savaliya', 'a8ecfeb9e8f1491c83594909f6cdd4dc', 9978585452, 'user', '', '0', '', ''),
('2020-02-27 08:31:03', 'dhvanil26patel@gmail.com', 'dhvanil patel', 'a8ecfeb9e8f1491c83594909f6cdd4dc', 9106736063, 'user', 'IT', '3', '1582792234-IMG_0893 copy--.jpg', 'General'),
('2020-02-26 16:56:17', 'jaychaudhary2809@gmail.com', 'Vsasim Akram', 'a8ecfeb9e8f1491c83594909f6cdd4dc', 9624383710, 'user', '', '0', '', ''),
('2020-02-27 04:52:18', 'karmasmart216@gmail.com', 'Patel Karm Bharatbhai', '033f785d585448eb24f25ef86e7fb688', 9426452921, 'user', '', '0', '', ''),
('2020-02-27 09:24:18', 'karmpatel216@gmail.com', 'karm patel', 'a8ecfeb9e8f1491c83594909f6cdd4dc', 6556565, 'user', '', '0', '', ''),
('2020-02-27 21:28:54', 'khushnood.shaikh19@gmail.com', 'khush', 'a8ecfeb9e8f1491c83594909f6cdd4dc', 9624383710, 'user', NULL, NULL, NULL, NULL),
('2020-02-25 17:48:36', 'mahishapatel3220@gmail.com', 'mahisha', 'karm', 545454, 'user', '', '0', '', ''),
('2020-02-27 06:50:14', 'majithiyadivya@gmail.com', 'divy', 'a8ecfeb9e8f1491c83594909f6cdd4dc', 63535353, 'user', '', '', NULL, ''),
('2020-02-25 17:48:36', 'malavmevada77@gmail.com', 'sqs', 'sas', 122, 'user', '', '0', '', ''),
('2020-02-25 17:48:36', 'om000193patel@gmail.com', 'Rutvik Patel', 'a8ecfeb9e8f1491c83594909f6cdd4dc', 6355145366, 'user', '', '0', '', ''),
('2020-02-25 17:48:36', 'pppatel01@gmail.com', 'prachii', 'a8ecfeb9e8f1491c83594909f6cdd4dc', 787979, 'admin', '', '0', '', ''),
('2020-02-25 19:59:16', 'psangita492@gmail.com', 'Yash Patel', 'a8ecfeb9e8f1491c83594909f6cdd4dc', 787878, 'user', '', '0', '', ''),
('2020-02-25 17:48:36', 'rutvikpatel90990@gmail.com', 'Rutvik Patel', 'karm', 9099072492, 'user', '', '0', '', ''),
('2020-02-25 17:48:36', 'smitakhani2000@gmail.com', 'Smit Akhani', 'karm', 7359911009, 'user', '', '0', '', '');

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
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
