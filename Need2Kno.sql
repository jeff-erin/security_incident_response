-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 23, 2020 at 02:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Need2Kno`
--

-- --------------------------------------------------------

--
-- Table structure for table `it_sec_user`
--

CREATE TABLE `it_sec_user` (
  `it_sec_id` int(4) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `it_sec_user`
--

INSERT INTO `it_sec_user` (`it_sec_id`, `f_name`, `l_name`, `email`, `password`) VALUES
(2, 'Jeffrey', 'Gore', 'gorej1@wit.edu', 'N3wUs3r'),
(3, 'Erin', 'Shea', 'sheae1@wit.edu', 'N3wUs3r'),
(4, 'Jeffrey ', 'Gore', 'gorej7@outlook.com', 'N3wUs3r');

-- --------------------------------------------------------

--
-- Table structure for table `standard_user`
--

CREATE TABLE `standard_user` (
  `user_id` int(4) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(25) NOT NULL,
  `token` varchar(11) NOT NULL,
  `is_verified` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `standard_user`
--

INSERT INTO `standard_user` (`user_id`, `f_name`, `l_name`, `email`, `password`, `token`, `is_verified`) VALUES
(11, 'Jeffrey', 'Gore', 'gorej1@wit.edu', 'password123', '0', 0),
(12, 'Jeffrey', 'Gore', 'gorej1@wit.edu', 'password123', '0', 0),
(13, 'Jeffrey', 'Gore', 'gorej1@wit.edu', 'N3wUs3r', '0', 0),
(19, 'Jon', 'Snow', 'gorej1@wit.edu', 'test', '395a23d55a', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(8) NOT NULL,
  `user_id` int(4) NOT NULL,
  `isOpen` tinyint(1) NOT NULL,
  `Details` varchar(400) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `Classification` varchar(30) NOT NULL,
  `it_sec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `user_id`, `isOpen`, `Details`, `date_created`, `Classification`, `it_sec_id`) VALUES
(1, 2, 0, 'test', '2020-06-22 21:48:20', 'phishing', 0),
(2, 2, 0, 'Testing again\r\n', '2020-06-22 23:20:25', 'phishing', 0),
(5, 5, 1, 'I clicked a link and now my computer is acting strange. ', '2020-06-22 23:45:21', 'malware', 0),
(6, 10, 1, 'Tried to download a video editing software. Now my computer appears to have some kind of ransomware infection. Pop up claiming I have 24 hours to provide X amount of money to unlock my machine. PLEASE HELP!!!', '2020-06-23 22:20:17', 'malware', 0),
(7, 12, 1, 'Malware', '2020-06-24 15:41:07', 'malware', 0),
(8, 12, 1, 'Test', '2020-07-20 17:46:09', 'malware', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `it_sec_user`
--
ALTER TABLE `it_sec_user`
  ADD PRIMARY KEY (`it_sec_id`);

--
-- Indexes for table `standard_user`
--
ALTER TABLE `standard_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `it_sec_user`
--
ALTER TABLE `it_sec_user`
  MODIFY `it_sec_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `standard_user`
--
ALTER TABLE `standard_user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
