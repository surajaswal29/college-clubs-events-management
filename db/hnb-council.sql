-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 04:25 AM
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
-- Table structure for table `club_info`
--

CREATE TABLE `club_info` (
  `id` int(11) NOT NULL,
  `club_name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `club_description` varchar(1000) NOT NULL,
  `c_image` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `verify` varchar(10) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club_info`
--

INSERT INTO `club_info` (`id`, `club_name`, `department`, `club_description`, `c_image`, `school`, `verify`, `date`) VALUES
(7, 'Sports Club', 'BTECH', '<p>The objective of this Club is to make expose students to valuable skills which prepares and sustain them in professional working environment. The Club also works to inculcate technical skills, teamwork and leadership in them. The Club organizes Workshops, Quiz Hunts (Technical+Non-Technical), LAN Gaming, Seminars, Code Hunt, Theatre Plays and other Technical and Non-Technical Activities. HNBGU encourages the students to participate in all activities conducted by the club. Club has a format body with multiple positions are occupied by students after a screening process.</p>', 'bg-image.jpg', 'SOET', '', '2022-10-06'),
(8, 'Technical Society', 'BTECH', '<p>The objective of this Club is to make expose students to valuable skills which prepares and sustain them in professional working environment. The Club also works to inculcate technical skills, teamwork and leadership in them. The Club organizes Workshops, Quiz Hunts (Technical+Non-Technical), LAN Gaming, Seminars, Code Hunt, Theatre Plays and other Technical and Non-Technical Activities. HNBGU encourages the students to participate in all activities conducted by the club. Club has a format body with multiple positions are occupied by students after a screening process.</p>', 'events.jpg', 'SOET', '', '2022-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `event-list`
--

CREATE TABLE `event-list` (
  `id` int(11) NOT NULL,
  `event_name` varchar(500) NOT NULL,
  `event_venue` varchar(500) NOT NULL,
  `organizer` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `event_image` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event-list`
--

INSERT INTO `event-list` (`id`, `event_name`, `event_venue`, `organizer`, `description`, `start_date`, `end_date`, `event_image`, `date`) VALUES
(4, 'Smart India Hackathon', 'IIT Dhanbad, Jharkhand', 'Robotics and Instrumental Club\r\n                        ', '<h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humor and the like).</p>', '2022-09-22', '2022-09-24', 'hackathon-1.jpg', '2022-09-20'),
(5, 'Fresher Dance', 'HNBGU Chauras Campus', 'Drama Club', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their defaul', '2022-09-22', '2022-09-22', 'hnbg-banner.jpg', '2022-09-20'),
(6, 'Hackathon', 'HNBGU Chauras Campus', 'Computer Science Club\r\n                        ', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popu', '2022-09-22', '2022-09-23', 'hackathon.png', '2022-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `main-banner`
--

CREATE TABLE `main-banner` (
  `id` int(11) NOT NULL,
  `banner-image` varchar(500) NOT NULL,
  `banner-description` varchar(500) NOT NULL,
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
  `role` varchar(100) NOT NULL,
  `id_card` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `verified` int(1) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `reg_id`, `firstname`, `lastname`, `email`, `phone`, `department`, `year`, `semester`, `council`, `club`, `social`, `aoi`, `role`, `id_card`, `password`, `verified`, `date`) VALUES
(1, 'HNB20229060', 'Suraj', 'Aswal', 'surajaswal29@gmail.com', '7535868150', 'MCA', 2, 3, 'Technical Council\r\n                    ', 'Computer Science Club\r\n                    ', 'https://github.com/', 'Web Developer', 'Club Head', 'bg-image-1.jpg', 'Joker@123', 1, '2022-09-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club_info`
--
ALTER TABLE `club_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event-list`
--
ALTER TABLE `event-list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main-banner`
--
ALTER TABLE `main-banner`
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
-- AUTO_INCREMENT for table `club_info`
--
ALTER TABLE `club_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `event-list`
--
ALTER TABLE `event-list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `main-banner`
--
ALTER TABLE `main-banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
