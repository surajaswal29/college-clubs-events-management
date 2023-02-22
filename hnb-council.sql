-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 05:16 AM
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
  `club_description` varchar(6000) NOT NULL,
  `club_requirement` varchar(1000) NOT NULL,
  `c_image` varchar(100) NOT NULL,
  `club_table` varchar(1000) DEFAULT NULL,
  `verify` varchar(10) NOT NULL DEFAULT '0',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club_info`
--

INSERT INTO `club_info` (`id`, `club_name`, `club_description`, `club_requirement`, `c_image`, `club_table`, `verify`, `date`) VALUES
(11, 'Sports and Athletic Club', '<p>Sports and Athletic Club plans and organizes various sports and athletic events round the year. This club takes advantage of excellent sports infrastructure available in the University, in addition to sports complex for its activities. The students are encouraged to represent their Departments in various track and field events and also sports events like cricket, football, baseball, basketball, table tennis, badminton, hockey and chess etc.&nbsp;</p>', 'Sports and Athletic Club plans and organizes various sports and athletic events round the year. This club takes advantage of excellent sports infrastructure available in the University, in addition to sports complex for its activities. The students are encouraged to represent their Departments in various track and field events and also sports events like cricket, football, baseball, basketball, table tennis, badminton, hockey and chess etc. ', 'sp-club.jpg', '_cb_sportsandathletic', '1', '2023-02-10'),
(14, 'Creative Arts Club', '<p>The creative art club enables the students to color their imaginations and create miracles on innovative canvas. The club organizes creative extravaganza for the students and provide opportunity to express their colorful designs in traditional or unconventional art and painting shows organized in the campus. The creative activities add novel dimensions to abilities of the students and develop different perspective to visualize and present things.</p>', 'The creative art club enables the students to color their imaginations and create miracles on innovative canvas. The club organizes creative extravaganza for the students and provide opportunity to express their colorful designs in traditional or unconventional art and painting shows organized in the campus. ', 'c-art-club.jpeg', '_cb_creativearts', '1', '2023-02-10'),
(15, 'Music Club', 'The Music Club encourages students to realize and showcase their musical talents. Interested students are also encouraged to participate in other inter college functions.\r\nMain purpose/objectives of this club To develop musical talent among students. \r\nTo encourage students to actively participate in various music based programs organized within and outside the campus. To showcase students\' talent in playing various instruments like singing, keyboard, drums, guitar, tabla, violin, flute etc., to develop a powerful framework that allows students to become passionate and aspiring musicians to make their own profession. \r\nTo encourage talented students to work for musical projects, bands, orchestras, studios etc.,', '', 'music-club.jpg', '_cb_music', '1', '2023-02-10'),
(16, 'Drama Club', 'The aim of the College\'s Drama Club is to develop creative talent in students, especially to promote the stage. Drama clubs in universities play an important role in discovering and nurturing budding artistic talents among students. The Drama Club is one of the few active and spirited clubs in the college.', '', 'drama-club.jpg', '_cb_drama', '1', '2023-02-10'),
(17, 'Photography Club', '<p>A photography club is a team of people who focus on imagining, capturing and freezing a moment and creating beauty. The club aims to create opportunities to organize photography adventures or discuss the art form with like-minded friends.</p>\r\n<em>“The picture that you took with your camera is the imagination you want to create with reality.” — Scott Lorenzo</em>', '', 'photo-club.jpg', '_cb_photography', '1', '2023-02-10'),
(18, 'Literature and Writing Club', '<p>The Literary Club was formed to develop the speaking and writing skills of the students. Various activities and competitions are organized for the students throughout the year to develop the literary skills of the students.  Learn how to plan, organize and present their ideas whereby comparing and contrasting ideas.\r\nLearn how to expand notes creatively into longer pieces of composition.  Students develop consistency and accuracy of structure and vocabulary. They also learn to use the correct mechanics of writing, correct spelling, punctuation, and capitalization by using the correct tense, prepositions, articles, and connectors.', '', 'lit-writting.jpg', '_cb_literatureandwriting', '1', '2023-02-10'),
(19, 'Computer Science Club', '<p>\r\nComputer Science Club has the utter motive to provide a platform for the students who have keen interest in Web Development, DSA, App Development, Software Development, Machine Learning, Artificial Intelligence etc. Computer science Club welcomes all the students who are hardworking and has a vision for making or creating something new.\r\n</p>\r\n<em>A program designed for inputs from people is usually stressed beyond breaking point by computer-generated inputs.\r\nDennis Ritchie</em>', 'required', 'cs-club.jpg', '_cb_computerscience', '1', '2023-02-13'),
(20, 'Dance Club', '<p>The motto of the dance club is to nurture talent, celebrate diversity and express the creativity of young minds. This club exposes students to a creative, fun and easy way to learn dance. Dance Club keeps students moving, socializing and learning through dance.</p><p><strong>This is the main goal/goal of the club:</strong></p><ul><li>Improve students\' creativity through the form of live dance.&nbsp;</li><li>Develop dance talent among students.&nbsp;</li><li>To encourage students to participate actively in various dance activities inside and outside the campus.&nbsp;</li><li>To show the talent of students in various forms of dance.&nbsp;</li><li>Develop a strong framework that allows students to develop their professional talents to become passionate and skilled dancers.</li></ul>', 'Required for Btech', 'dance-club.jpg', '_cb_dance', '1', '2023-02-15');

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
  `event_table` varchar(1000) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event-list`
--

INSERT INTO `event-list` (`id`, `event_name`, `event_venue`, `organizer`, `description`, `start_date`, `end_date`, `event_image`, `event_table`, `date`) VALUES
(16, 'Front War', 'HNBGU Chauras campus', 'Computer Science Club', '<p>Go</p>', '2023-02-15', '2023-02-16', 'hackathon-1.jpg', '_tb_frontwar', '2023-02-13');

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

--
-- Dumping data for table `main-banner`
--

INSERT INTO `main-banner` (`id`, `banner-image`, `banner-description`, `date`) VALUES
(1, 'https://res.cloudinary.com/dc8yxs895/image/upload/v1676536335/astro-physics_pa7u6r.jpg', 'HNBGU Astro Physics Department', '2023-02-16'),
(2, 'https://res.cloudinary.com/dc8yxs895/image/upload/v1676536340/soet_rzai2f.jpg', 'SOET Department', '2023-02-16'),
(3, 'https://res.cloudinary.com/dc8yxs895/image/upload/v1676534773/library_rar24v.jpg', 'HNBGU Library', '2023-02-16'),
(4, 'https://res.cloudinary.com/dc8yxs895/image/upload/v1676539568/journalism_zh1ph0.jpg', 'HNBGU journalism', '2023-02-16'),
(5, 'https://res.cloudinary.com/dc8yxs895/image/upload/v1676539569/hotel_ibxna9.jpg', 'HNBGU Tourism and Hotel Management', '2023-02-16'),
(6, 'https://res.cloudinary.com/dc8yxs895/image/upload/v1676539564/commerce_dk82to.jpg', 'HNBGU Commerce', '2023-02-16'),
(7, 'https://res.cloudinary.com/dc8yxs895/image/upload/v1676539562/audi2_hqsoxy.jpg', 'Auditorium', '2023-02-16');

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
  `roll_no` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `social` varchar(100) DEFAULT NULL,
  `aoi` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `verified` int(1) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `reg_id`, `firstname`, `lastname`, `email`, `phone`, `department`, `year`, `semester`, `roll_no`, `course`, `social`, `aoi`, `password`, `verified`, `date`) VALUES
(50, 'HNB20237152', 'Suraj', 'Aswal', 'surajaswal29@gmail.com', '7037672652', 'Department of Computer Science & Engineering', 2, 4, '35', 'MCA', '', '', '$2y$10$.C2gje/NVELEYmLigexDfezMY6kVZcyuXWhgCMMLoHXF71FQFzJ8m', 1, '2023-02-16');

-- --------------------------------------------------------

--
-- Table structure for table `_cb_computerscience`
--

CREATE TABLE `_cb_computerscience` (
  `id` int(11) NOT NULL,
  `joiner_id` varchar(200) NOT NULL,
  `joiner_name` varchar(200) NOT NULL,
  `joiner_course` varchar(200) NOT NULL,
  `joiner_role` varchar(100) NOT NULL DEFAULT '',
  `joined_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_cb_computerscience`
--

INSERT INTO `_cb_computerscience` (`id`, `joiner_id`, `joiner_name`, `joiner_course`, `joiner_role`, `joined_on`) VALUES
(4, 'HNB20237152', 'Suraj Aswal', 'MCA', 'director', '2023-02-16');

-- --------------------------------------------------------

--
-- Table structure for table `_cb_creativearts`
--

CREATE TABLE `_cb_creativearts` (
  `id` int(11) NOT NULL,
  `joiner_id` varchar(200) NOT NULL,
  `joiner_name` varchar(200) NOT NULL,
  `joiner_course` varchar(200) NOT NULL,
  `joiner_role` varchar(100) NOT NULL,
  `joined_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_cb_dance`
--

CREATE TABLE `_cb_dance` (
  `id` int(11) UNSIGNED NOT NULL,
  `joiner_id` varchar(200) NOT NULL,
  `joiner_name` varchar(200) NOT NULL,
  `joiner_course` varchar(200) NOT NULL,
  `joiner_role` varchar(100) NOT NULL,
  `joined_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_cb_drama`
--

CREATE TABLE `_cb_drama` (
  `id` int(11) NOT NULL,
  `joiner_id` varchar(200) NOT NULL,
  `joiner_name` varchar(200) NOT NULL,
  `joiner_course` varchar(200) NOT NULL,
  `joiner_role` varchar(100) NOT NULL,
  `joined_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_cb_literatureandwriting`
--

CREATE TABLE `_cb_literatureandwriting` (
  `id` int(11) NOT NULL,
  `joiner_id` varchar(200) NOT NULL,
  `joiner_name` varchar(200) NOT NULL,
  `joiner_course` varchar(200) NOT NULL,
  `joiner_role` varchar(100) NOT NULL,
  `joined_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_cb_literatureandwriting`
--

INSERT INTO `_cb_literatureandwriting` (`id`, `joiner_id`, `joiner_name`, `joiner_course`, `joiner_role`, `joined_on`) VALUES
(2, 'HNB20237152', 'Suraj Aswal', 'MCA', 'Member', '2023-02-16');

-- --------------------------------------------------------

--
-- Table structure for table `_cb_music`
--

CREATE TABLE `_cb_music` (
  `id` int(11) NOT NULL,
  `joiner_id` varchar(200) NOT NULL,
  `joiner_name` varchar(200) NOT NULL,
  `joiner_course` varchar(200) NOT NULL,
  `joiner_role` varchar(100) NOT NULL,
  `joined_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_cb_photography`
--

CREATE TABLE `_cb_photography` (
  `id` int(11) NOT NULL,
  `joiner_id` varchar(100) NOT NULL,
  `joiner_name` varchar(200) NOT NULL,
  `joiner_course` varchar(200) NOT NULL,
  `joiner_role` varchar(100) NOT NULL,
  `joined_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_cb_sportsandathletic`
--

CREATE TABLE `_cb_sportsandathletic` (
  `id` int(11) NOT NULL,
  `joiner_id` varchar(200) NOT NULL,
  `joiner_name` varchar(200) NOT NULL,
  `joiner_course` varchar(200) NOT NULL,
  `joiner_role` varchar(100) NOT NULL,
  `joined_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_cb_sportsandathletic`
--

INSERT INTO `_cb_sportsandathletic` (`id`, `joiner_id`, `joiner_name`, `joiner_course`, `joiner_role`, `joined_on`) VALUES
(2, 'HNB20237152', 'Suraj Aswal', 'MCA', 'Member', '2023-02-16');

-- --------------------------------------------------------

--
-- Table structure for table `_tb_frontwar`
--

CREATE TABLE `_tb_frontwar` (
  `id` int(10) UNSIGNED NOT NULL,
  `joiner_id` varchar(100) NOT NULL,
  `joiner_name` varchar(100) NOT NULL,
  `joiner_email` varchar(100) NOT NULL,
  `joinDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_tb_frontwar`
--

INSERT INTO `_tb_frontwar` (`id`, `joiner_id`, `joiner_name`, `joiner_email`, `joinDate`) VALUES
(1, 'HNB20225449', 'Suraj Aswal', 'surajaswal29@gmail.com', '2023-02-12 18:30:00');

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
-- Indexes for table `_cb_computerscience`
--
ALTER TABLE `_cb_computerscience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_cb_creativearts`
--
ALTER TABLE `_cb_creativearts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_cb_dance`
--
ALTER TABLE `_cb_dance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_cb_drama`
--
ALTER TABLE `_cb_drama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_cb_literatureandwriting`
--
ALTER TABLE `_cb_literatureandwriting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_cb_music`
--
ALTER TABLE `_cb_music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_cb_photography`
--
ALTER TABLE `_cb_photography`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_cb_sportsandathletic`
--
ALTER TABLE `_cb_sportsandathletic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_tb_frontwar`
--
ALTER TABLE `_tb_frontwar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club_info`
--
ALTER TABLE `club_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `event-list`
--
ALTER TABLE `event-list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `main-banner`
--
ALTER TABLE `main-banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `_cb_computerscience`
--
ALTER TABLE `_cb_computerscience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `_cb_creativearts`
--
ALTER TABLE `_cb_creativearts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_cb_dance`
--
ALTER TABLE `_cb_dance`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_cb_drama`
--
ALTER TABLE `_cb_drama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_cb_literatureandwriting`
--
ALTER TABLE `_cb_literatureandwriting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `_cb_music`
--
ALTER TABLE `_cb_music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `_cb_photography`
--
ALTER TABLE `_cb_photography`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_cb_sportsandathletic`
--
ALTER TABLE `_cb_sportsandathletic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `_tb_frontwar`
--
ALTER TABLE `_tb_frontwar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
