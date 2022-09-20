-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 06:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hnb-council`
--

-- --------------------------------------------------------

--
-- Table structure for table `event-list`
--

CREATE TABLE `event-list` (
  `id` int(11) NOT NULL,
  `event_name` varchar(500) NOT NULL,
  `event_venue` varchar(500) NOT NULL,
  `organizer` varchar(500) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `event_image` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `reg_id` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `semester` int(100) NOT NULL,
  `council` varchar(100) NOT NULL,
  `club` varchar(100) NOT NULL,
  `social` varchar(100) DEFAULT NULL,
  `aoi` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `verified` int(1) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `reg_id`, `firstname`, `lastname`, `email`, `phone`, `department`, `year`, `semester`, `council`, `club`, `social`, `aoi`, `password`, `verified`, `date`) VALUES
(13, 'HNB20225264', 'Suraj', 'Aswal', 'surajaswal29@gmail.com', '7535868150', 'MCA', 2, 3, 'Technical Council\r\n                    ', 'Computer Science Club\r\n                    ', 'https://github.com/', 'Web Developer', 'Suraj@123', 0, '2022-09-17'),
(14, 'HNB20228324', 'Zayn', 'Malik', 'zayn@gmail.com', '123456789', 'MCA', 2, 3, 'Technical Council\r\n                    ', 'Computer Science Club\r\n                    ', '', '', 'Zayn@123', 0, '2022-09-17'),
(16, 'HNB20222696', 'Siddhant', 'Badoni', 'sid@gmail.com', '1234567890', 'MCA', 2, 3, 'Technical Council\r\n                    ', 'Computer Science Club\r\n                    ', '', '', 'Sidhant@123', 1, '2022-09-17'),
(17, 'HNB20226224', 'suraj', 'Aswal', 'surajaswal29@gmail.com', '7535868150', 'MCA', 2, 3, 'Technical Council\r\n                    ', 'Computer Science Club\r\n                    ', 'https://github.com/', 'Web Developer', 'Loin@123', 0, '2022-09-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event-list`
--
ALTER TABLE `event-list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event-list`
--
ALTER TABLE `event-list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
