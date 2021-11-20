-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 01:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finate`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `job` varchar(500) DEFAULT NULL,
  `job.type` varchar(500) DEFAULT NULL,
  `language_` varchar(500) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `workingtime` varchar(500) DEFAULT NULL,
  `phone` int(255) DEFAULT NULL,
  `adress` varchar(255) NOT NULL,
  `description` varchar(800) DEFAULT NULL,
  `requirement` varchar(800) DEFAULT NULL,
  `working hours` varchar(500) DEFAULT NULL,
  `benefits` varchar(800) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_id`, `image`, `name`, `job`, `job.type`, `language_`, `price`, `workingtime`, `phone`, `adress`, `description`, `requirement`, `working hours`, `benefits`, `status`, `created_date`) VALUES
(2, '1', 'assets/img/companies/w2.jpg', 'Darkento Ltd.', 'Front-end Developer', 'Full-time', 'CSS3, HTML5, Javascript, Bootstrap, Jquery', '2000$', 'monthly', 2147483647, ' New York, USA', 'It is a long established fact that a reader will be distracted the readable content of page when looking atits layout. The point of using is that has more-or-less normal a distribution of letters, as opposed to usin content publishing packages web page editors. It is a long established fact that a reader will be distracts by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that has look like readable publishing packages and web page editors', 'Having approved theme/s on ThemeForest will be given high preference.\r\nStrong knowledge of WordPress Theme Standards\r\nAbility to convert HTML templates into fully functional WordPress themes.\r\nGood knowledge in O OP PHP and front-end stuffs like HTML, CSS, JS, jQuery, etc.', '8:00 AM - 5:00 PM\r\nWeekly: 5 days.\r\nWeekend: Saturday, Sunday.', 'Work in a flat organization where your voice is always heard.\r\nProvident fund.\r\nGratuity.\r\nMedical Fund.\r\nHaving Corporate deals with multiple Hospitals.\r\nPerformance bonus.\r\nIncrement: Yearly.\r\nFestival Bonus: 2 (Yearly)\r\nLunch Facilities: Full Subsidize.\r\nUnlimited Tea, Coffee & Snacks.\r\nAnnual tour.\r\nTeam Outing.\r\nMarriage Bonus and Marriage Leave.\r\nPaternity and Maternity Leave.\r\nYearly Family Tour.\r\nKnowledge Sharing Session.\r\nLeave Encashment Facilities.\r\nWork with a vibrant team and amazing products.\r\nTable Tennis(Ping Pong) :table_tennis_paddle_and_ball:\r\nTraining and learning materials to improve skills.\r\nLast but not the least, WorldClass Work Environment.', 1, 1636989058),
(3, '2', 'assets/img/companies/w2.jpg', 'Darkento Ltd.', 'Senior Web Developer', 'Full-time', 'CSS3, HTML5, Javascript, Bootstrap, Jquery', '3000$', 'monthly', 2147483647, ' New York, USA', 'It is a long established fact that a reader will be distracted the readable content of page when looking atits layout. The point of using is that has more-or-less normal a distribution of letters, as opposed to usin content publishing packages web page editors. It is a long established fact that a reader will be distracts by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that has look like readable publishing packages and web page editors', 'Having approved theme/s on ThemeForest will be given high preference.\r\nStrong knowledge of WordPress Theme Standards\r\nAbility to convert HTML templates into fully functional WordPress themes.\r\nGood knowledge in O OP PHP and front-end stuffs like HTML, CSS, JS, jQuery, etc.', '8:00 AM - 5:00 PM\r\nWeekly: 5 days.\r\nWeekend: Saturday, Sunday.', 'Work in a flat organization where your voice is always heard.\r\nProvident fund.\r\nGratuity.\r\nMedical Fund.\r\nHaving Corporate deals with multiple Hospitals.\r\nPerformance bonus.\r\nIncrement: Yearly.\r\nFestival Bonus: 2 (Yearly)\r\nLunch Facilities: Full Subsidize.\r\nUnlimited Tea, Coffee & Snacks.\r\nAnnual tour.\r\nTeam Outing.\r\nMarriage Bonus and Marriage Leave.\r\nPaternity and Maternity Leave.\r\nYearly Family Tour.\r\nKnowledge Sharing Session.\r\nLeave Encashment Facilities.\r\nWork with a vibrant team and amazing products.\r\nTable Tennis(Ping Pong) :table_tennis_paddle_and_ball:\r\nTraining and learning materials to improve skills.\r\nLast but not the least, WorldClass Work Environment.', 1, 1636989058),
(4, '3', 'assets/img/companies/w2.jpg', 'Inspire Fitness Co.', 'Senior UI Designer', 'Full-time', 'CSS3, HTML5, Javascript, Bootstrap, Jquery', '3000$', 'monthly', 2147483647, ' New York, USA', 'It is a long established fact that a reader will be distracted the readable content of page when looking atits layout. The point of using is that has more-or-less normal a distribution of letters, as opposed to usin content publishing packages web page editors. It is a long established fact that a reader will be distracts by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that has look like readable publishing packages and web page editors', 'Having approved theme/s on ThemeForest will be given high preference.\r\nStrong knowledge of WordPress Theme Standards\r\nAbility to convert HTML templates into fully functional WordPress themes.\r\nGood knowledge in O OP PHP and front-end stuffs like HTML, CSS, JS, jQuery, etc.', '8:00 AM - 5:00 PM\r\nWeekly: 5 days.\r\nWeekend: Saturday, Sunday.', 'Work in a flat organization where your voice is always heard.\r\nProvident fund.\r\nGratuity.\r\nMedical Fund.\r\nHaving Corporate deals with multiple Hospitals.\r\nPerformance bonus.\r\nIncrement: Yearly.\r\nFestival Bonus: 2 (Yearly)\r\nLunch Facilities: Full Subsidize.\r\nUnlimited Tea, Coffee & Snacks.\r\nAnnual tour.\r\nTeam Outing.\r\nMarriage Bonus and Marriage Leave.\r\nPaternity and Maternity Leave.\r\nYearly Family Tour.\r\nKnowledge Sharing Session.\r\nLeave Encashment Facilities.\r\nWork with a vibrant team and amazing products.\r\nTable Tennis(Ping Pong) :table_tennis_paddle_and_ball:\r\nTraining and learning materials to improve skills.\r\nLast but not the least, WorldClass Work Environment.', 1, 1636989058),
(5, '3', 'assets/img/companies/w2.jpg', 'Inspire Fitness Co.', 'Senior UI Designer', 'Full-time', 'CSS3, HTML5, Javascript, Bootstrap, Jquery', '3000$', 'monthly', 2147483647, ' New York, USA', 'It is a long established fact that a reader will be distracted the readable content of page when looking atits layout. The point of using is that has more-or-less normal a distribution of letters, as opposed to usin content publishing packages web page editors. It is a long established fact that a reader will be distracts by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that has look like readable publishing packages and web page editors', 'Having approved theme/s on ThemeForest will be given high preference.\r\nStrong knowledge of WordPress Theme Standards\r\nAbility to convert HTML templates into fully functional WordPress themes.\r\nGood knowledge in O OP PHP and front-end stuffs like HTML, CSS, JS, jQuery, etc.', '8:00 AM - 5:00 PM\r\nWeekly: 5 days.\r\nWeekend: Saturday, Sunday.', 'Work in a flat organization where your voice is always heard.\r\nProvident fund.\r\nGratuity.\r\nMedical Fund.\r\nHaving Corporate deals with multiple Hospitals.\r\nPerformance bonus.\r\nIncrement: Yearly.\r\nFestival Bonus: 2 (Yearly)\r\nLunch Facilities: Full Subsidize.\r\nUnlimited Tea, Coffee & Snacks.\r\nAnnual tour.\r\nTeam Outing.\r\nMarriage Bonus and Marriage Leave.\r\nPaternity and Maternity Leave.\r\nYearly Family Tour.\r\nKnowledge Sharing Session.\r\nLeave Encashment Facilities.\r\nWork with a vibrant team and amazing products.\r\nTable Tennis(Ping Pong) :table_tennis_paddle_and_ball:\r\nTraining and learning materials to improve skills.\r\nLast but not the least, WorldClass Work Environment.', 1, 1636989058);

-- --------------------------------------------------------

--
-- Table structure for table `choosen city`
--

CREATE TABLE `choosen city` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `created.date` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choosen city`
--

INSERT INTO `choosen city` (`id`, `name`, `created.date`, `status`) VALUES
(2, 'Samarkand', 1636739155, 1),
(3, 'Tashkent', 1636739155, 1),
(4, 'Bukhara', 1636739155, 1),
(5, 'Andijan', 1636739155, 1),
(6, 'Nukus', 1636739155, 1),
(7, 'Navai', 1636739155, 1),
(8, 'Jizzakh', 1636739155, 1),
(9, 'Khashkhadarya', 1636739155, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `img` varchar(500) DEFAULT NULL,
  `theme` varchar(500) DEFAULT NULL,
  `created.date` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `link` varchar(500) DEFAULT NULL,
  `subheader1` varchar(500) DEFAULT NULL,
  `subheader2` varchar(500) DEFAULT NULL,
  `subheader3` varchar(500) DEFAULT NULL,
  `subheader4` varchar(500) DEFAULT NULL,
  `link1` varchar(500) DEFAULT NULL,
  `link2` varchar(500) DEFAULT NULL,
  `link3` varchar(500) DEFAULT NULL,
  `link4` varchar(500) DEFAULT NULL,
  `num` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `img`, `theme`, `created.date`, `status`, `link`, `subheader1`, `subheader2`, `subheader3`, `subheader4`, `link1`, `link2`, `link3`, `link4`, `num`) VALUES
(1, 'assets/img/logo-light.png', 'main page', 1636739155, 1, 'index.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(3, 'assets/img/logo-light.png', 'job find', 1636739155, 1, 'job.php', 'jobs', 'job detaials', NULL, NULL, 'job.php', 'job-details.php', NULL, NULL, '2'),
(5, NULL, 'employers details', 1636739155, 1, 'employers-details.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(6, NULL, 'Candidates', 1636739155, 1, 'employers-details.php', 'Candidates', 'Candidate Details', NULL, NULL, 'candidate.php', 'candidate-details.php', NULL, NULL, '2'),
(7, NULL, 'Blog', 1636739155, 1, NULL, 'Blog Grid', 'Blog left Sidebar', 'Blog Right Sidebar', 'Blog details', 'blog-grid.php', 'blog.php', 'blog-right-sidebar.php', 'blog-details.php', '4'),
(8, NULL, 'Blog', 1636739155, 1, NULL, 'Blog Grid', 'Blog left Sidebar', 'Blog Right Sidebar', 'Blog details', 'blog-grid.php', 'blog.php', 'blog-right-sidebar.php', 'blog-details.php', '4'),
(9, NULL, 'Pages', 1636739155, 1, NULL, 'About us', 'Login', 'Registration', 'Page not found', 'about-us.php', 'login.php', 'registration.php', 'page-not-found.php', '4'),
(10, NULL, 'Contact', 1636739155, 1, 'contact.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `subheader`
--

CREATE TABLE `subheader` (
  `link` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choosen city`
--
ALTER TABLE `choosen city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `choosen city`
--
ALTER TABLE `choosen city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
