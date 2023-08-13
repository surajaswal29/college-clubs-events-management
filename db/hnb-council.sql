-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 12:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(19, 'Technical Club', '<p>\r\nComputer Science Club has the utter motive to provide a platform for the students who have keen interest in Web Development, DSA, App Development, Software Development, Machine Learning, Artificial Intelligence etc. Computer science Club welcomes all the students who are hardworking and has a vision for making or creating something new.\r\n</p>\r\n<em>A program designed for inputs from people is usually stressed beyond breaking point by computer-generated inputs.\r\nDennis Ritchie</em>', 'required', 'cs-club.jpg', '_cb_technical', '1', '2023-02-13'),
(20, 'Dance Club', '<p>The motto of the dance club is to nurture talent, celebrate diversity and express the creativity of young minds. This club exposes students to a creative, fun and easy way to learn dance. Dance Club keeps students moving, socializing and learning through dance.</p><p><strong>This is the main goal/goal of the club:</strong></p><ul><li>Improve students\' creativity through the form of live dance.&nbsp;</li><li>Develop dance talent among students.&nbsp;</li><li>To encourage students to participate actively in various dance activities inside and outside the campus.&nbsp;</li><li>To show the talent of students in various forms of dance.&nbsp;</li><li>Develop a strong framework that allows students to develop their professional talents to become passionate and skilled dancers.</li></ul>', 'Required for Btech', 'dance-club.jpg', '_cb_dance', '1', '2023-02-15'),
(22, 'Demo Club', '<p>Testing</p>', 'Testing', 'marguerite-729510_640.jpg', '_cb_demo', '1', '2023-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `event-list`
--

CREATE TABLE `event-list` (
  `id` int(11) NOT NULL,
  `event_name` varchar(500) NOT NULL,
  `event_venue` varchar(500) NOT NULL,
  `organizer` varchar(500) NOT NULL,
  `event_type` varchar(500) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `event_image` varchar(100) NOT NULL,
  `e_qr` varchar(500) DEFAULT 'NILL',
  `ev_fee` varchar(10) DEFAULT 'NILL',
  `event_table` varchar(1000) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event-list`
--

INSERT INTO `event-list` (`id`, `event_name`, `event_venue`, `organizer`, `event_type`, `description`, `start_date`, `end_date`, `event_image`, `e_qr`, `ev_fee`, `event_table`, `date`) VALUES
(45, 'Demo Event', 'HNBGU Chauras Campus, SOET', 'Technical Club', 'free', '<p>Project submission for MCA</p>', '2023-08-17', '2023-08-17', 'mountain.jpg', '', '', '_tb_demoevent', '2023-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `main-banner`
--

CREATE TABLE `main-banner` (
  `id` int(11) NOT NULL,
  `banner-image` varchar(500) NOT NULL,
  `banner-description` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main-banner`
--

INSERT INTO `main-banner` (`id`, `banner-image`, `banner-description`, `date`) VALUES
(1, 'https://res.cloudinary.com/dc8yxs895/image/upload/v1676536335/astro-physics_pa7u6r.jpg', 'HNBGU Astro Physics Department', '2023-02-16'),
(2, 'https://res.cloudinary.com/dc8yxs895/image/upload/v1676536340/soet_rzai2f.jpg', 'SOET Department', '2023-02-16'),
(3, 'https://res.cloudinary.com/dc8yxs895/image/upload/v1676534773/library_rar24v.jpg', 'HNBGU Library', '2023-02-16'),
(4, 'https://res.cloudinary.com/dc8yxs895/image/upload/v1676539568/journalism_zh1ph0.jpg', 'HNBGU journalism', '2023-02-16'),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `reg_id`, `firstname`, `lastname`, `email`, `phone`, `department`, `year`, `semester`, `roll_no`, `course`, `social`, `aoi`, `password`, `verified`, `date`) VALUES
(41, 'HNB20235230', 'Siddhant', 'Badoni', 'badonisiddhant15@gmail.com', '7088794524', 'Department of Computer Science & Engineering', 2, 4, '32', 'Mca', '', '', 'Sid@1234', 1, '2023-02-11'),
(43, 'HNB20233748', 'Gautam', 'Juyal', 'gautam.juyal.94@gmail.com', '8923229233', 'Department of Computer Science & Engineering', 2, 4, '21134708014', 'MCA', '', '', 'Gautam@12345', 1, '2023-02-11'),
(44, 'HNB20239031', 'Sagar ', 'Kumar ', 'sagarbgp108@gmail.com', '7903103049', 'Department of Electronic and Communication Engineering', 1, 1, '1', 'B TECH', '', '', 'Sagar@123', 1, '2023-02-11'),
(45, 'HNB20234294', 'Shantanu ', 'Singh ', 'shantanusingh5april2005@gmail.com', '9149121049', 'Department of Instrumentation Engineering', 1, 1, '', 'B tech', '', '', 'Welcome123@', 1, '2023-02-11'),
(46, 'HNB20232338', 'Yozita', 'Puri', 'ajaybhushan5204@gmail.com', '919045212527', ' Zoology & Biotechnology', 1, 1, '', 'Msc', '', '', 'yozitaajay@', 1, '2023-02-11'),
(47, 'HNB20235735', 'Aquib ', 'Shekh', 'aquibshekh8@gmail.com', '9554874223', 'Department of Center for Journalism& Mass Mass Com ', 1, 1, '25', 'BA(H) journalism and mass communication ', '', '', 'aquib2525', 1, '2023-02-11'),
(48, 'HNB20233836', 'Chetan singh', 'Bisht', 'chetanbisht.21jan@gmail.com', '9119051108', ' Centre for Mountain Tourism & Hospitality Studies', 3, 6, '13', 'Bhm', '', 'Photography ', 'Chetan@123', 1, '2023-02-11'),
(49, 'HNB20236077', 'Nitish ', 'Kumar ', 'ny08092005@gmail.com', '09955409611', 'Department of Center for Journalism& Mass Mass Com ', 1, 1, '630', 'Bachelor of journalism and mass communication', '', 'Poetry', 'Nit99#kr11', 1, '2023-02-12'),
(50, 'HNB20237055', 'Ms. ', 'Karishma', 'karishmasonkar8192@gmail.com', '8171971706', 'Department of Computer Science & Engineering', 4, 7, '19134501041', ' B. Tech ', '', 'Dancing ', 'Karishma@12345', 1, '2023-02-12'),
(51, 'HNB20234645', 'Ravi', 'Kumar', 'rravikumar27316@gmail.com', '08271964681', '00', 2, 3, '21134501027', 'B.Tech', '', '', 'Ravikumar@18', 1, '2023-02-12'),
(52, 'HNB20237558', 'AJAY', 'BHUSHAN', 'ajaybhushn5204@gmail.com', '7248789244', ' Zoology & Biotechnology', 1, 1, '', 'Msc zoology ', '', '', 'ajaybhushan5204@', 1, '2023-02-12'),
(53, 'HNB20236162', 'AJAY', 'BHUSHAN', 'ajaybhushn244@gmail.com', '7248789244', ' Zoology & Biotechnology', 1, 1, '', 'Msc zoology ', '', '', 'ajaybhushan5204@', 1, '2023-02-12'),
(54, 'HNB20238541', 'Manish ', 'Kumar', 'yadavmanishkumar299@gmail.com', '9608490869', 'Department of Computer Science & Engineering', 1, 1, '081', 'Btech', '', '', 'Cuet@123', 1, '2023-02-12'),
(55, 'HNB20239570', 'nidhi', 'kumari', 'nia30207@gmail.com', '7347354517', 'Department of Computer Science & Engineering', 1, 1, '0', 'BACHELOR OF ENGINEERING AND TECHNOLOGY', '', '', 'f@ke&ndblue', 1, '2023-02-12'),
(56, 'HNB20236499', 'KUMAR ', 'TUSHAR ', 'ktusharv2728@gmail.com', '6202709017', 'Department of Electronic and Communication Engineering', 3, 6, '20134502019', 'B.tech', '', '', '27Ktush@rv28', 1, '2023-02-12'),
(57, 'HNB20235396', 'Sagar', 'Kumar', 'sagarskp108@gmail.com', '7903103049', 'Department of Electronic and Communication Engineering', 1, 1, '1', 'B TECH', '', 'Chess', 'Sagar@2004', 1, '2023-02-12'),
(58, 'HNB20231375', 'Priyanshu ', 'Choudhary ', 'priyanshuofficial504@gmail.com', '9065822157', 'Department of Computer Science & Engineering', 2, 3, '21134501025', 'B  Tech ', 'https://instagram.com/priyanshu.choudhary_?igshid=ZDdkNTZiNTM=', 'Acting', 'Priyanshu504@', 1, '2023-02-12'),
(59, 'HNB20238128', 'Zuhaib', 'Hanfi', 'zk8829682@gmail.com', '7522059876', 'Department of Computer Science & Engineering', 1, 1, '0', 'B.Tech', '', 'Poetry and photography', 'Hanfi@123', 1, '2023-02-12'),
(60, 'HNB20232166', 'Suraj ', 'Kumar ', 'surajsingh66012@gmail.com', '8340271489', 'Department of Computer Science & Engineering', 1, 1, '22134501000', 'B.tech.', '', '', 'Champadevi@78', 1, '2023-02-12'),
(61, 'HNB20235932', 'Divya', 'Kaushal', 'yashodakaushal81@gmail.com', '7060187073', ' Centre for Mountain Tourism & Hospitality Studies', 3, 6, '12', 'Bhm', '', '', 'Divya@123', 1, '2023-02-13'),
(62, 'HNB20232973', 'Reecha', 'Singh ', 'reechasinghdos@gmail.com', '8252793752', 'Department of Electronic and Communication Engineering', 1, 1, '19', 'Btech', '', 'Literatures and writting ', 'Reecha@123', 1, '2023-02-13'),
(63, 'HNB20235799', 'MOHAMMED ', 'IRSHAD P', 'irshadmhd0009@gmail.com', '8086762052', ' Other’s', 1, 1, '20', 'MA HISTORY ', 'https://instagram.com/i_rshad_mhd?igshid=ZDdkNTZiNTM=', 'MOBILE PHOTOGRAPHY', 'Mohammed/12', 1, '2023-02-14'),
(64, 'HNB20233557', 'Isha', 'KAPOOR', 'kapuri2002@gmail.com', '9335303929', ' Other’s', 1, 1, '35', 'Bpharma ', '', 'Technology ', 'Ish@31082002', 1, '2023-02-14'),
(65, 'HNB20233377', 'Utsav', 'Hingar ', 'utsavhingar22@gmail.com', '946136575', 'Department of Computer Science & Engineering', 4, 8, '19134501039', 'Bachelors of Technology ', '', '', 'Rh@200276', 1, '2023-02-14'),
(66, 'HNB20239471', 'Swaroop', 'Kumar Yadav ', 'swaroopyadav13th@gmail.com', '8102618180', 'Department of Electronic and Communication Engineering', 1, 1, '', 'B.Tech', 'https://Instagram.com/Swaroop2sky ', '', 'Nitesh$13', 0, '2023-02-14'),
(67, 'HNB20232031', 'Nikhilesh ', 'Bhandari', 'nikhilbhan216@gmail.com', '8218092899', ' Centre for Mountain Tourism & Hospitality Studies', 3, 6, '22', 'Bhm', '', '', 'Nikhil@8218092899', 0, '2023-02-15'),
(68, 'HNB20232581', 'Anand', 'tthagat', 'anandtthagat0439@gmail.com', '8707210224', 'Department of Computer Science & Engineering', 2, 4, '21134501014', 'B. Tech', '', '', 'David@123', 0, '2023-02-16'),
(69, 'HNB20231851', 'Manas ', 'Pandey', 'deathnotemz6@gmail.com', '9927983050', 'Department of Information Technology', 2, 4, '21134503021', 'B.Tech', '', 'Science and Technology and Hindu Mythologies +Culture', 'Guitar@487', 0, '2023-02-16'),
(70, 'HNB20239816', 'Anamitra', 'Saha', 'tojosaha39@gmail.com', '7797884028', ' Other’s', 1, 1, '00', 'MA', 'https://instagram.com/bohemian_cloud_84?igshid=NTE5MzUyOTU=', '', 'Ana@#2000saha', 0, '2023-02-23'),
(71, 'HNB20235617', 'Ramesh', 'Bhatt', 'rameshbhatt1200@gmail.com', '1234', 'Department of Computer Science & Engineering', 2, 1, '12', 'BTech', '', '', '$2y$10$sazW9IngnF1ncYRp/nxdb.gy.RHtwFMtGmd5mlWAdsbq5Bqyxd5Gu', 1, '2023-02-25'),
(75, 'HNB20232191', 'John', 'Doe', 'aswal1125@gmail.com', '1234', 'Department of Computer Science & Engineering', 1, 1, '1234', 'MCA', '', '', 'Kyojin@1234', 1, '2023-03-01'),
(76, 'HNB20233253', 'suraj', 'aswal', 'thesurajaswal@gmail.com', '1234567890', 'Department of Computer Science & Engineering', 2, 4, '1234', 'MCA', '', '', 'Kyojin@123', 1, '2023-08-13');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_cb_creativearts`
--

INSERT INTO `_cb_creativearts` (`id`, `joiner_id`, `joiner_name`, `joiner_course`, `joiner_role`, `joined_on`) VALUES
(3, 'HNB20235617', 'Ramesh Bhatt', 'BTech', 'Member', '2023-02-27'),
(4, 'HNB20234695', 'Suraj Aswal', 'MCA', 'Member', '2023-02-28');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_cb_dance`
--

INSERT INTO `_cb_dance` (`id`, `joiner_id`, `joiner_name`, `joiner_course`, `joiner_role`, `joined_on`) VALUES
(3, 'HNB20234695', 'Suraj Aswal', 'MCA', 'Member', '2023-02-27 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `_cb_demo`
--

CREATE TABLE `_cb_demo` (
  `id` int(11) UNSIGNED NOT NULL,
  `joiner_id` varchar(200) NOT NULL,
  `joiner_name` varchar(200) NOT NULL,
  `joiner_course` varchar(200) NOT NULL,
  `joiner_role` varchar(100) NOT NULL,
  `joined_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_cb_drama`
--

INSERT INTO `_cb_drama` (`id`, `joiner_id`, `joiner_name`, `joiner_course`, `joiner_role`, `joined_on`) VALUES
(2, 'HNB20234695', 'Suraj Aswal', 'MCA', 'Member', '2023-02-28');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_cb_literatureandwriting`
--

INSERT INTO `_cb_literatureandwriting` (`id`, `joiner_id`, `joiner_name`, `joiner_course`, `joiner_role`, `joined_on`) VALUES
(4, 'HNB20234695', 'Suraj Aswal', 'MCA', 'Member', '2023-02-27');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_cb_music`
--

INSERT INTO `_cb_music` (`id`, `joiner_id`, `joiner_name`, `joiner_course`, `joiner_role`, `joined_on`) VALUES
(2, 'HNB20235617', 'Ramesh Bhatt', 'BTech', 'Member', '2023-02-27'),
(3, 'HNB20234695', 'Suraj Aswal', 'MCA', 'Member', '2023-02-28'),
(4, 'HNB20232191', 'John Doe', 'MCA', 'Member', '2023-03-01');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_cb_photography`
--

INSERT INTO `_cb_photography` (`id`, `joiner_id`, `joiner_name`, `joiner_course`, `joiner_role`, `joined_on`) VALUES
(4, 'HNB20234695', 'Suraj Aswal', 'MCA', 'Member', '2023-02-28');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_cb_sportsandathletic`
--

INSERT INTO `_cb_sportsandathletic` (`id`, `joiner_id`, `joiner_name`, `joiner_course`, `joiner_role`, `joined_on`) VALUES
(3, 'HNB20234695', 'Suraj Aswal', 'MCA', 'Director', '2023-02-28'),
(4, 'HNB20232191', 'John Doe', 'MCA', 'Member', '2023-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `_cb_technical`
--

CREATE TABLE `_cb_technical` (
  `id` int(11) NOT NULL,
  `joiner_id` varchar(200) NOT NULL,
  `joiner_name` varchar(200) NOT NULL,
  `joiner_course` varchar(200) NOT NULL,
  `joiner_role` varchar(100) NOT NULL DEFAULT '',
  `joined_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_cb_technical`
--

INSERT INTO `_cb_technical` (`id`, `joiner_id`, `joiner_name`, `joiner_course`, `joiner_role`, `joined_on`) VALUES
(9, 'HNB20235617', 'Ramesh Bhatt', 'BTech', 'Member', '2023-02-27'),
(12, 'HNB20232191', 'John Doe', 'MCA', 'Member', '2023-03-01'),
(13, 'HNB20233253', 'suraj aswal', 'MCA', 'Director', '2023-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `_tb_demoevent`
--

CREATE TABLE `_tb_demoevent` (
  `id` int(10) UNSIGNED NOT NULL,
  `joiner_id` varchar(100) NOT NULL,
  `joiner_name` varchar(100) NOT NULL,
  `joiner_email` varchar(100) NOT NULL,
  `order_id` varchar(100) DEFAULT NULL,
  `verified` int(1) DEFAULT NULL,
  `joinDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_tb_demoevent`
--

INSERT INTO `_tb_demoevent` (`id`, `joiner_id`, `joiner_name`, `joiner_email`, `order_id`, `verified`, `joinDate`) VALUES
(1, 'HNB20233253', 'suraj aswal', 'thesurajaswal@gmail.com', NULL, 1, '2023-08-12 18:30:00');

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
-- Indexes for table `_cb_demo`
--
ALTER TABLE `_cb_demo`
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
-- Indexes for table `_cb_technical`
--
ALTER TABLE `_cb_technical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_tb_demoevent`
--
ALTER TABLE `_tb_demoevent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club_info`
--
ALTER TABLE `club_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `event-list`
--
ALTER TABLE `event-list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `main-banner`
--
ALTER TABLE `main-banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `_cb_creativearts`
--
ALTER TABLE `_cb_creativearts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `_cb_dance`
--
ALTER TABLE `_cb_dance`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `_cb_demo`
--
ALTER TABLE `_cb_demo`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_cb_drama`
--
ALTER TABLE `_cb_drama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `_cb_literatureandwriting`
--
ALTER TABLE `_cb_literatureandwriting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `_cb_music`
--
ALTER TABLE `_cb_music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `_cb_photography`
--
ALTER TABLE `_cb_photography`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `_cb_sportsandathletic`
--
ALTER TABLE `_cb_sportsandathletic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `_cb_technical`
--
ALTER TABLE `_cb_technical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `_tb_demoevent`
--
ALTER TABLE `_tb_demoevent`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
