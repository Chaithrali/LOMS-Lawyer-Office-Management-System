-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2020 at 02:44 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lawyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcase`
--

CREATE TABLE IF NOT EXISTS `addcase` (
  `cid` int(11) NOT NULL,
  `caseid` varchar(111) NOT NULL,
  `clientname` text NOT NULL,
  `casesubject` varchar(25) NOT NULL,
  `casedetail` varchar(30) NOT NULL,
  `associate` text NOT NULL,
  `party_type` varchar(20) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcase`
--

INSERT INTO `addcase` (`cid`, `caseid`, `clientname`, `casesubject`, `casedetail`, `associate`, `party_type`, `u_id`) VALUES
(21, 'CC3107/2019', 'chaithra', 'Divorce', 'Naveen Kamble.docx', 'Prakash Shetty', 'Plaintiff', 0),
(22, 'CC3121/2020', 'Shreya', 'GrantOfLand', 'Naveen Kamble.docx', 'Prakash Shetty', 'Complainant', 0),
(23, 'CC3121/2021', 'supriya', 'GrantOfLand', 'Naveen Kamble.docx', 'Prakash Shetty', 'Complainant', 4),
(24, 'CC3107/2019', 'akshitha', 'Cheating', 'Memo of Withdrawal.docx', 'Mrs.Jayashree Devadiga', 'Defendents', 0),
(25, 'CC3109/2020', 'rafid', 'GrantOfLand', 'Memo of Withdrawal.docx', 'Prakash Shetty', 'Respond', 5);

-- --------------------------------------------------------

--
-- Table structure for table `addhearing`
--

CREATE TABLE IF NOT EXISTS `addhearing` (
  `hearingid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `caseid` varchar(25) NOT NULL,
  `clientname` text NOT NULL,
  `associate` text NOT NULL,
  `casestage` varchar(25) NOT NULL,
  `hearingdate` date NOT NULL,
  `courtname` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addhearing`
--

INSERT INTO `addhearing` (`hearingid`, `cid`, `u_id`, `caseid`, `clientname`, `associate`, `casestage`, `hearingdate`, `courtname`) VALUES
(9, 9, 0, 'CC3107/2015', 'naveen', 'Mr.Prakash K', 'Settlement', '2020-03-29', 'Prl_Munchiff'),
(10, 12, 0, 'CC3114/2020', 'Shreyas', 'Mr.Prakash K', 'Evidence', '2020-04-03', 'Prl_Munchiff'),
(11, 13, 0, 'CC3120/2020', 'Rohan ', 'Mr.Prakash K', 'Objection', '2020-04-02', 'Prl_Munchiff'),
(13, 12, 0, 'CC3114/2020', 'Shreyas', 'Mr.Prakash K', 'Reply', '2020-03-28', 'Prl_Munchiff'),
(14, 21, 0, 'CC3107/2019', 'chaithra', 'Prakash Shetty', 'Objection', '2020-03-31', 'mouncipal'),
(15, 23, 4, 'CC3121/2021', 'supriya', 'Prakash Shetty', 'Objection', '2020-03-30', 'mouncipal'),
(16, 23, 4, 'CC3107/2012', 'supriya', 'Mr.Prakash K', '313Statment', '2020-03-28', 'mouncipal'),
(17, 25, 5, 'CC3121/2020', 'rafid', 'Prakash Shetty', 'Objection', '2020-06-13', 'Prl_Munchiff');

-- --------------------------------------------------------

--
-- Table structure for table `adminmaster`
--

CREATE TABLE IF NOT EXISTS `adminmaster` (
  `advocateid` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `workprofile` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminmaster`
--

INSERT INTO `adminmaster` (`advocateid`, `name`, `email`, `contact`, `address`, `workprofile`, `password`) VALUES
(1, 'admin', 'prakash@gmail.com', 8796523140, 'manglore', 'ba,llb', '123'),
(2, 'jayashree', 'jayadev123@gmail.com', 8050601760, 'udupi', 'ba,llb', '7891'),
(3, 'veena', 'veena123@gmail.com', 8105048469, 'bhatkal', 'ba,llb', '141531'),
(4, 'hima', 'hima18@gmail.com', 8105048469, 'puttur', 'llb,m.sc', '183115');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `appid` int(11) NOT NULL,
  `clientid` int(11) NOT NULL,
  `associateid` int(11) NOT NULL,
  `title` text NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appid`, `clientid`, `associateid`, `title`, `date`, `time`, `status`) VALUES
(1, 2, 3, 'land property', '2020-03-01', '2020-03-01 11:56:24', 'Confirmed'),
(2, 2, 4, 'cheating', '2020-03-01', '2020-03-01 12:13:34', 'Confirmed'),
(3, 2, 3, 'divorce', '2020-03-02', '2020-03-02 05:31:07', 'Pending'),
(4, 2, 3, 'land property', '2020-03-05', '2020-03-05 08:59:30', 'Confirmed'),
(5, 2, 3, 'time??', '2020-03-05', '2020-03-05 14:13:48', 'Pending'),
(6, 2, 3, 'land property', '2020-03-06', '2020-03-06 17:08:23', 'Confirmed'),
(7, 2, 3, 'divorce', '2020-03-06', '2020-03-06 18:41:48', 'Pending'),
(8, 2, 3, 'divorce', '2020-03-07', '2020-03-07 03:54:57', 'Confirmed'),
(9, 2, 3, 'land property', '2020-03-12', '2020-03-12 08:11:16', 'Confirmed'),
(10, 3, 3, 'land property', '2020-03-18', '2020-03-18 08:42:52', 'Confirmed'),
(11, 4, 3, 'land property', '2020-03-18', '2020-03-18 09:02:37', 'Confirmed'),
(12, 5, 3, 'land issue', '2020-06-08', '2020-06-08 21:14:54', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `associate`
--

CREATE TABLE IF NOT EXISTS `associate` (
  `associateid` int(11) NOT NULL,
  `lawyer_name` text NOT NULL,
  `workprofile` varchar(150) NOT NULL,
  `image` varchar(100) NOT NULL,
  `user_name` text NOT NULL,
  `expertise` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `associate`
--

INSERT INTO `associate` (`associateid`, `lawyer_name`, `workprofile`, `image`, `user_name`, `expertise`, `email`, `contact`, `experience`, `address`) VALUES
(3, 'Prakash Shetty', 'ba,llb', 'D559F0E983C800764E74029A5A_1511953366635.jpg', 'prakash', 'civil', 'prakash12@gmail.com', 9845288349, '21', 'mangalore'),
(4, 'Jayashree Devadiga', 'ba,llb', '592030f6b2d129_45652385.jpg', 'jayadev15', 'civil', 'jayadev456@gmail.com', 9741486698, '10', 'mulki');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `bill_id` int(11) NOT NULL,
  `caseid` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `bill_no` varchar(15) NOT NULL,
  `due_amt` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `caseid`, `u_id`, `bill_no`, `due_amt`, `date`, `status`) VALUES
(1, 10, 0, 'bill1', 5000, '2020-03-05', 'Pending'),
(2, 12, 0, '101', 5000, '2020-03-05', 'Pending'),
(3, 10, 0, 'loms12908', 50000, '2020-03-06', 'Pending'),
(4, 12, 0, 'loms12908', 50000, '2020-03-06', 'Pending'),
(5, 13, 0, 'loms12908', 50000, '2020-03-12', 'Pending'),
(6, 21, 4, 'bill21', 50000, '2020-03-18', 'Confirmed'),
(7, 23, 4, 'bill27', 50000, '2020-03-18', 'Pending'),
(8, 23, 4, 'bill27', 50000, '2020-03-18', 'Pending'),
(9, 23, 4, 'loms123', 2000, '2020-03-21', 'Pending'),
(10, 22, 0, 'loms12908', 30000, '2020-03-21', 'Pending'),
(11, 0, 4, 'loms129088', 500001, '2020-03-21', 'Pending'),
(12, 23, 4, 'loms1238', 3000085, '2020-03-21', 'Pending'),
(13, 25, 5, 'loms0906', 27000, '2020-06-08', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `clientmaster`
--

CREATE TABLE IF NOT EXISTS `clientmaster` (
  `clientid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `doc_id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `doctype` varchar(100) NOT NULL,
  `filepath` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`doc_id`, `cid`, `doctype`, `filepath`) VALUES
(1, 2, 'docx', '/c'),
(2, 2, 'docx', '/c'),
(3, 12, 'docx', '/c'),
(4, 13, 'docx', '/c'),
(5, 13, 'docx', '/c'),
(6, 10, 'docx', '/c'),
(7, 21, 'docx', '/c');

-- --------------------------------------------------------

--
-- Table structure for table `employeemaster`
--

CREATE TABLE IF NOT EXISTS `employeemaster` (
  `empid` int(11) DEFAULT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `contact` int(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `employeetype` varchar(30) NOT NULL,
  `assigncase` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `enq_id` int(11) NOT NULL,
  `clientid` int(11) NOT NULL,
  `associateid` int(11) NOT NULL,
  `qry` varchar(111) NOT NULL,
  `datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enqstatus` varchar(111) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enq_id`, `clientid`, `associateid`, `qry`, `datetime`, `enqstatus`) VALUES
(1, 2, 3, 'fedeueru', '2020-03-02 06:27:32', ''),
(2, 2, 3, 'timings?', '2020-03-02 06:32:32', ''),
(3, 2, 3, 'timings?', '2020-03-02 06:33:38', ''),
(4, 2, 3, 'payment', '2020-03-02 06:37:55', ''),
(5, 2, 3, 'wertyuiop', '2020-03-02 06:57:03', ''),
(6, 2, 3, 'timing details', '2020-03-05 09:26:49', ''),
(7, 2, 3, 'payment details??', '2020-03-05 09:32:32', ''),
(8, 2, 3, 'payment??', '2020-03-05 09:34:38', ''),
(9, 2, 3, 'payment details ??', '2020-03-05 09:36:28', ''),
(11, 2, 3, 'payment details', '2020-03-07 03:55:51', ''),
(12, 2, 3, 'payment and timing?', '2020-03-12 08:12:24', ''),
(13, 4, 3, 'Heeugifru', '2020-03-18 09:38:35', ''),
(14, 5, 3, 'what about land issues case fees', '2020-06-08 21:22:13', ''),
(15, 5, 3, 'uta aita', '2020-06-08 23:16:29', 'Replied');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `nid` int(11) NOT NULL,
  `clientid` int(11) NOT NULL,
  `associateid` int(11) NOT NULL,
  `message` varchar(70) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`nid`, `clientid`, `associateid`, `message`, `date`) VALUES
(1, 4, 0, 'your message giuyk', '2020-03-18'),
(2, 4, 1, 'xhcgjhklj', '2020-03-18'),
(3, 5, 1, 'your case hearing date got fixed', '2020-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `paymentid` int(11) NOT NULL,
  `caseid` int(11) NOT NULL,
  `date` date NOT NULL,
  `transactionno` varchar(10) NOT NULL,
  `amount` int(11) NOT NULL,
  `paymentmethod` varchar(111) NOT NULL,
  `chname` varchar(111) NOT NULL,
  `cno` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `expdate` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentid`, `caseid`, `date`, `transactionno`, `amount`, `paymentmethod`, `chname`, `cno`, `cvv`, `expdate`, `status`, `u_id`) VALUES
(14, 25, '2020-06-09', 'loms0906', 27000, 'Card', 'fardin', 87456, 999, '2023-12-15', 'Confirmed', 5),
(15, 25, '2020-06-09', 'loms0906', 27000, 'Cash', '', 0, 0, '0000-00-00', 'Confirmed', 5);

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `reply_id` int(11) NOT NULL,
  `enq_id` int(11) NOT NULL,
  `associateid` int(11) NOT NULL,
  `clientid` int(11) NOT NULL,
  `reply` varchar(111) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`reply_id`, `enq_id`, `associateid`, `clientid`, `reply`, `datetime`) VALUES
(1, 1, 3, 2, '0', '2020-03-02 07:32:41'),
(2, 2, 3, 2, 'payment is ', '2020-03-02 07:33:23'),
(3, 6, 3, 2, '10:00am-4:0', '2020-03-05 09:27:43'),
(4, 10, 3, 2, 'Yes It can ', '2020-03-06 17:12:46'),
(5, 11, 3, 2, 'it depends', '2020-03-07 03:56:16'),
(6, 12, 3, 2, '15000\r\n10am', '2020-03-12 08:13:05'),
(7, 13, 3, 4, 'rextcyvubhi', '2020-03-18 09:40:23'),
(8, 14, 3, 5, 'nearly 2500', '2020-06-08 21:23:18'),
(9, 15, 3, 5, 'aitu', '2020-06-08 23:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `caseid` int(11) NOT NULL,
  `casesubject` varchar(20) NOT NULL,
  `stage` varchar(20) NOT NULL,
  `courtname` varchar(20) NOT NULL,
  `lawyer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subadmin`
--

CREATE TABLE IF NOT EXISTS `subadmin` (
  `advocate_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `address` varchar(25) NOT NULL,
  `workprofile` varchar(20) NOT NULL,
  `sqsn` varchar(200) NOT NULL,
  `sans` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subadmin`
--

INSERT INTO `subadmin` (`advocate_id`, `name`, `email`, `contact`, `address`, `workprofile`, `sqsn`, `sans`, `password`) VALUES
(1, 'chaithra', 'hima18@gmail.com', 7698453, 'edritfgyhjo', 'llb', '3', '1', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `address` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `sqsn` varchar(21) NOT NULL,
  `sans` varchar(21) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `email`, `contact`, `address`, `password`, `sqsn`, `sans`) VALUES
(1, 'megha', 'megha5@gmail.com', 9885236740, 'surathkal', '321654', '', ''),
(2, 'chaithra', 'hima18@gmail.com', 9768453, 'mukka', '12345', '', ''),
(3, 'Shreya', 'shreya21@gmail.com', 8050601760, 'Kasargoad', '141531', '', ''),
(4, 'supriya', 'supriya@gmail.com', 9856321470, 'adyar', 'Supriya123', '', ''),
(5, 'rafid', 'rafi@gmail.com', 7845963210, 'bc road', 'Rafi123', '', ''),
(6, 'deeksha', 'd@gmail.com', 7455556, 'dngl', '456', '3', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcase`
--
ALTER TABLE `addcase`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `addhearing`
--
ALTER TABLE `addhearing`
  ADD PRIMARY KEY (`hearingid`);

--
-- Indexes for table `adminmaster`
--
ALTER TABLE `adminmaster`
  ADD PRIMARY KEY (`advocateid`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appid`);

--
-- Indexes for table `associate`
--
ALTER TABLE `associate`
  ADD PRIMARY KEY (`associateid`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `clientmaster`
--
ALTER TABLE `clientmaster`
  ADD PRIMARY KEY (`clientid`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enq_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `subadmin`
--
ALTER TABLE `subadmin`
  ADD PRIMARY KEY (`advocate_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcase`
--
ALTER TABLE `addcase`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `addhearing`
--
ALTER TABLE `addhearing`
  MODIFY `hearingid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `adminmaster`
--
ALTER TABLE `adminmaster`
  MODIFY `advocateid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `associate`
--
ALTER TABLE `associate`
  MODIFY `associateid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `clientmaster`
--
ALTER TABLE `clientmaster`
  MODIFY `clientid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enq_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `subadmin`
--
ALTER TABLE `subadmin`
  MODIFY `advocate_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
