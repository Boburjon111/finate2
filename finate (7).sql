-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 02:36 PM
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
-- Table structure for table `about-us`
--

CREATE TABLE `about-us` (
  `id` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `statist1` int(255) DEFAULT NULL,
  `name1` varchar(500) DEFAULT NULL,
  `statist2` int(255) DEFAULT NULL,
  `name2` varchar(500) DEFAULT NULL,
  `statist3` int(255) DEFAULT NULL,
  `name3` varchar(500) DEFAULT NULL,
  `statist4` int(255) DEFAULT NULL,
  `name4` varchar(500) DEFAULT NULL,
  `statist5` int(255) DEFAULT NULL,
  `name5` varchar(500) DEFAULT NULL,
  `mumber1` varchar(500) DEFAULT NULL,
  `mumber2` varchar(500) DEFAULT NULL,
  `mumber3` varchar(500) DEFAULT NULL,
  `mumber4` varchar(500) DEFAULT NULL,
  `mumber5` varchar(500) DEFAULT NULL,
  `created_date` int(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about-us`
--

INSERT INTO `about-us` (`id`, `title`, `image`, `description`, `statist1`, `name1`, `statist2`, `name2`, `statist3`, `name3`, `statist4`, `name4`, `statist5`, `name5`, `mumber1`, `mumber2`, `mumber3`, `mumber4`, `mumber5`, `created_date`, `status`) VALUES
(1, 'Finate help your for get your dream job and build your bright career.', 'assets/img/about/11.jpg', 'It is a long established fact that a reader will be distracted the readable content of a page when looking at its layout. The point of using is that has more-or-less normal a distribution of letters, as opposed to using \'Content publishing packages web page editors.', 5689, 'Total Jobs', 3432, 'Candidates', 65, 'Resume', 5434, 'Compnay\'s', 345, 'Country\'s', 'assets/img/about/member1.png', 'assets/img/about/member2.png', 'assets/img/about/member3.png', 'assets/img/about/member4.png', 'assets/img/about/member5.png', 1636989058, 1);

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `img` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `job` varchar(500) DEFAULT NULL,
  `mark` varchar(500) DEFAULT NULL,
  `language_` varchar(500) DEFAULT NULL,
  `created_date` int(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `img`, `name`, `job`, `mark`, `language_`, `created_date`, `status`) VALUES
(1, 'assets/img/team/1.jpg', 'Lauran Benitez', 'Web Designer', '4', 'CSS3, HTML5, Javascript Bootstrap, Jquery', 1636989058, 1),
(2, 'assets/img/team/1.jpg', 'Valentine Anders', 'UI/UX Designer', '5', 'Bootstrap, CSS3, HTML5, Javascript, Jquery', 1636989058, 1),
(3, 'assets/img/team/2.jpg', 'Lauran Benitez', 'Web Designer', '2', 'CSS3, HTML5, Javascript Bootstrap, Jquery', 1636989058, 1),
(4, 'assets/img/team/1.jpg', 'Valentine Anders', 'UI/UX Designer', '3', 'Bootstrap, CSS3, HTML5, Javascript, Jquery', 1636989058, 1),
(5, 'assets/img/team/3.jpg', 'Lauran Benitez', 'Web Designer', '1', 'CSS3, HTML5, Javascript Bootstrap, Jquery', 1636989058, 1),
(6, 'assets/img/team/1.jpg', 'Valentine Anders', 'UI/UX Designer', '5', 'Bootstrap, CSS3, HTML5, Javascript, Jquery', 1636989058, 1),
(7, 'assets/img/team/4.jpg', ' Benitez', 'Web Designer', '3', 'CSS3, HTML5, Javascript Bootstrap, Jquery', 1636989058, 1),
(8, 'assets/img/team/1.jpg', 'Valentine ', 'UI Designer', '1', 'Bootstrap, CSS3, HTML5, Javascript, Jquery', 1636989058, 1),
(9, 'assets/img/team/5.jpg', 'Lauran ', 'Web Designer', '5', 'CSS3,  Javascript , Jquery', 1636989058, 1),
(10, 'assets/img/team/1.jpg', 'Valentine Anders', 'UI/UX Designer', '2', 'Bootstrap, CSS3, HTML5, Javascript, Jquery', 1636989058, 1);

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
  `phone` int(255) DEFAULT NULL,
  `adress` varchar(255) NOT NULL,
  `description` varchar(800) DEFAULT NULL,
  `benefit_1` varchar(500) DEFAULT NULL,
  `benefit_2` varchar(500) DEFAULT NULL,
  `benefit_3` varchar(500) DEFAULT NULL,
  `benefit_4` varchar(500) DEFAULT NULL,
  `benefit_5` varchar(500) DEFAULT NULL,
  `benefit_6` varchar(500) DEFAULT NULL,
  `benefit_7` varchar(500) DEFAULT NULL,
  `benefit_8` varchar(500) DEFAULT NULL,
  `benefit_9` varchar(500) DEFAULT NULL,
  `benefit_10` varchar(500) DEFAULT NULL,
  `working_hour_1` varchar(500) DEFAULT NULL,
  `working_hour_2` varchar(500) DEFAULT NULL,
  `working_hour_3` varchar(500) DEFAULT NULL,
  `Educational_requirements_1` varchar(500) DEFAULT NULL,
  `Requirements_1` varchar(500) DEFAULT NULL,
  `Requirements_2` varchar(500) DEFAULT NULL,
  `Requirements_3` varchar(500) DEFAULT NULL,
  `Requirements_4` varchar(500) DEFAULT NULL,
  `Requirements_5` varchar(500) DEFAULT NULL,
  `Requirements_6` varchar(500) DEFAULT NULL,
  `Respons_1` varchar(100) DEFAULT NULL,
  `Respons_2` varchar(100) DEFAULT NULL,
  `Respons_3` varchar(100) DEFAULT NULL,
  `Respons_4` varchar(100) DEFAULT NULL,
  `Statement` varchar(200) DEFAULT NULL,
  `Experience` varchar(200) DEFAULT NULL,
  `Gender` varchar(200) DEFAULT NULL,
  `Qualification` varchar(200) DEFAULT NULL,
  `Applied` int(50) DEFAULT NULL,
  `Applien_end` int(50) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_id`, `image`, `name`, `job`, `job.type`, `language_`, `price`, `phone`, `adress`, `description`, `benefit_1`, `benefit_2`, `benefit_3`, `benefit_4`, `benefit_5`, `benefit_6`, `benefit_7`, `benefit_8`, `benefit_9`, `benefit_10`, `working_hour_1`, `working_hour_2`, `working_hour_3`, `Educational_requirements_1`, `Requirements_1`, `Requirements_2`, `Requirements_3`, `Requirements_4`, `Requirements_5`, `Requirements_6`, `Respons_1`, `Respons_2`, `Respons_3`, `Respons_4`, `Statement`, `Experience`, `Gender`, `Qualification`, `Applied`, `Applien_end`, `status`, `created_date`) VALUES
(1, '1', 'assets/img/companies/w2.jpg', 'Darkento Ltd.', 'Front-end Developer', 'Full-time', 'CSS3, HTML5, Javascript, Bootstrap, Jquery', '2000$', 2147483647, ' New York, USA', 'It is a long established fact that a reader will be distracted the readable content of page when looking atits layout. The point of using is that has more-or-less normal a distribution of letters, as opposed to usin content publishing packages web page editors. It is a long established fact that a reader will be distracts by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that has look like readable publishing packages and web page editors', 'Work in a flat organization where your voice is always heard.', 'Provident fund.', 'Gratuity.', 'Medical Fund.', 'Having Corporate deals with multiple Hospitals.', 'Performance bonus.', 'Increment: Yearly.', 'Festival Bonus: 2 (Yearly)', 'Lunch Facilities: Full Subsidize.', 'Unlimited Tea, Coffee & Snacks.', '8:00 AM - 5:00 PM', 'Weekly: 5 days.', 'Weekend: Saturday, Sunday.', 'It doesn’t matter where you went to college or what your CGPA was as long as you are smart, passionate, ready to work hard, and have fun.', 'Having approved theme/s on ThemeForest will be given high preference.', 'Strong knowledge of WordPress Theme Standards', 'Ability to convert HTML templates into fully functional WordPress themes.', 'Good knowledge in O OP PHP and front-end stuffs like HTML, CSS, JS, jQuery, etc.', 'Moderate knowledge in WordPress Core APIs like options, metadata, REST, hooks, settings, etc.', 'Ability to debug and fix bugs arising from other developer’s code.', 'Developing custom themes (WordPress.org & ThemeForest Standards)', 'Creating reactive website designs', 'Working under strict deadlines', 'Develop page speed optimized themes', 'Finate is committed to creating the happiest company working for and is proud to provide equal opportunity to all. All the qualified applicants will receive consideration for employment without regard', '05 Years', 'Female', 'BSC, MSC', 1636989058, 1636989058, 1, 1636989058),
(2, '2', 'assets/img/companies/w2.jpg', 'Obelus Concepts Ltd.', 'Back-end Developer', 'Full-time', 'CSS3, HTML5, Javascript, Bootstrap, Jquery, PHP, Laravel', '9000$', 219083647, 'USA', 'It is a long established fact that a reader will be distracted the readable content of page when looking atits layout. The point of using is that has more-or-less normal a distribution of letters, as opposed to usin content publishing packages web page editors. It is a long established fact that a reader will be distracts by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that has look like readable publishing packages and web page editors', 'Work in a flat organization where your voice is always heard.', 'Provident fund.', 'Gratuity.', 'Medical Fund.', 'Having Corporate deals with multiple Hospitals.', 'Performance bonus.', 'Increment: Yearly.', 'Festival Bonus: 2 (Yearly)', 'Lunch Facilities: Full Subsidize.', 'Unlimited Tea, Coffee & Snacks.', '8:00 AM - 5:00 PM', 'Weekly: 5 days.', 'Weekend: Saturday, Sunday.', 'It doesn’t matter where you went to college or what your CGPA was as long as you are smart, passionate, ready to work hard, and have fun.', 'Having approved theme/s on ThemeForest will be given high preference.', 'Strong knowledge of WordPress Theme Standards', 'Ability to convert HTML templates into fully functional WordPress themes.', 'Good knowledge in O OP PHP and front-end stuffs like HTML, CSS, JS, jQuery, etc.', 'Moderate knowledge in WordPress Core APIs like options, metadata, REST, hooks, settings, etc.', 'Ability to debug and fix bugs arising from other developer’s code.', 'Developing custom themes (WordPress.org & ThemeForest Standards)', 'Creating reactive website designs', 'Working under strict deadlines', 'Develop page speed optimized themes', 'Finate is committed to creating the happiest company working for and is proud to provide equal opportunity to all. All the qualified applicants will receive consideration for employment without regard', '15 Years', 'male', 'BSC, MSC', 1636989058, 1636989058, 1, 1636989058),
(3, '2', 'assets/img/companies/w2.jpg', 'Concepts Ltd.', 'Back-end Developer', 'Half-time', 'Bootstrap, Jquery, PHP, Laravel', '9000$', 219083647, 'USA, Uzb', 'It is a long established fact that a reader will be distracted the readable content of page when looking atits layout. The point of using is that has more-or-less normal a distribution of letters, as opposed to usin content publishing packages web page editors. It is a long established fact that a reader will be distracts by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that has look like readable publishing packages and web page editors', 'Work in a flat organization where your voice is always heard.', 'Provident fund.', 'Gratuity.', 'Medical Fund.', 'Having Corporate deals with multiple Hospitals.', 'Performance bonus.', 'Increment: Yearly.', 'Festival Bonus: 2 (Yearly)', 'Lunch Facilities: Full Subsidize.', 'Unlimited Tea, Coffee & Snacks.', '8:00 AM - 5:00 PM', 'Weekly: 5 days.', 'Weekend: Saturday, Sunday.', 'It doesn’t matter where you went to college or what your CGPA was as long as you are smart, passionate, ready to work hard, and have fun.', 'Having approved theme/s on ThemeForest will be given high preference.', 'Strong knowledge of WordPress Theme Standards', 'Ability to convert HTML templates into fully functional WordPress themes.', 'Good knowledge in O OP PHP and front-end stuffs like HTML, CSS, JS, jQuery, etc.', 'Moderate knowledge in WordPress Core APIs like options, metadata, REST, hooks, settings, etc.', 'Ability to debug and fix bugs arising from other developer’s code.', 'Developing custom themes (WordPress.org & ThemeForest Standards)', 'Creating reactive website designs', 'Working under strict deadlines', 'Develop page speed optimized themes', 'Finate is committed to creating the happiest company working for and is proud to provide equal opportunity to all. All the qualified applicants will receive consideration for employment without regard', '15 Years', 'male', 'BSC, MSC', 1636989058, 1636989058, 1, 1636989058);

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
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `img` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `job` varchar(500) DEFAULT NULL,
  `desc` varchar(500) DEFAULT NULL,
  `mark` varchar(500) DEFAULT NULL,
  `created_date` int(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `img`, `name`, `job`, `desc`, `mark`, `created_date`, `status`) VALUES
(1, 'assets/img/testimonial/3.jpg', 'Amira ', 'Hiring Manager', 'It is a long established fact that reader will distracted the readable content page looking at its layout point using that has more-or-less normal distribution of letters opposed using content making.', '4', 1636989058, 1),
(3, 'assets/img/testimonial/3.jpg', 'Amira ', 'Hiring Manager', 'It is a long established fact that reader will distracted the readable content page looking at its layout point using that has more-or-less normal distribution of letters opposed using content making.', '4', 1636989058, 1),
(4, 'assets/img/testimonial/3.jpg', 'Amira ', 'Hiring Manager', 'It is a long established fact that reader will distracted the readable content page looking at its layout point using that has more-or-less normal distribution of letters opposed using content making.', '4', 1636989058, 1),
(5, 'assets/img/testimonial/3.jpg', 'Amira ', 'Hiring Manager', 'It is a long established fact that reader will distracted the readable content page looking at its layout point using that has more-or-less normal distribution of letters opposed using content making.', '4', 1636989058, 1),
(6, 'assets/img/testimonial/3.jpg', 'Amira ', 'Hiring Manager', 'It is a long established fact that reader will distracted the readable content page looking at its layout point using that has more-or-less normal distribution of letters opposed using content making.', '4', 1636989058, 1);

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `link1` varchar(500) DEFAULT NULL,
  `link2` varchar(500) DEFAULT NULL,
  `link3` varchar(500) DEFAULT NULL,
  `link4` varchar(500) DEFAULT NULL,
  `subheader1` varchar(500) DEFAULT NULL,
  `subheader2` varchar(500) DEFAULT NULL,
  `subheader3` varchar(500) DEFAULT NULL,
  `subheader4` varchar(500) DEFAULT NULL,
  `created_date` int(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `title`, `link1`, `link2`, `link3`, `link4`, `subheader1`, `subheader2`, `subheader3`, `subheader4`, `created_date`, `status`) VALUES
(1, 'Company', 'about-us.php', 'about-us.php', 'contact.php', 'contact.php', 'About us', 'Why Extobot', 'Contact with us', 'Our Partners', 1636989058, 1),
(2, 'Resources', 'login.php', 'job.php', 'page-not-found.php', 'job.php', 'Quick Links', 'JOb Packages', 'Post new Job', 'Jobs Listing', 1636989058, 1),
(3, 'Legal', 'login.php', 'page-not-found.php', 'page-not-found.php', 'job.php', 'Affiliate', 'Blog', 'Help & Support', 'Careers', 1636989058, 1),
(5, 'Products', 'page-not-found.php', 'about-us.php', 'page-not-found.php', 'about-us.php', 'Star a Trial', 'How it works', 'Features', 'Price & Planning', 1636989058, 1);

-- --------------------------------------------------------

--
-- Table structure for table `footer2`
--

CREATE TABLE `footer2` (
  `id` int(11) NOT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `icon1` varchar(500) DEFAULT NULL,
  `icon2` varchar(500) DEFAULT NULL,
  `icon3` varchar(500) DEFAULT NULL,
  `icon_link_1` varchar(500) DEFAULT NULL,
  `icon_link_2` varchar(500) DEFAULT NULL,
  `icon_link_3` varchar(500) DEFAULT NULL,
  `created_date` int(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer2`
--

INSERT INTO `footer2` (`id`, `logo`, `description`, `icon1`, `icon2`, `icon3`, `icon_link_1`, `icon_link_2`, `icon_link_3`, `created_date`, `status`) VALUES
(1, 'assets/img/logo-light-theme.png', 'That necessitat ecommerce platform that optimi your store popularised the release', 'facebook', 'skype', 'twitter', 'https://www.facebook.com', 'https://www.skype.com', 'https://www.twitter.com', 1636989058, 1);

-- --------------------------------------------------------

--
-- Table structure for table `howitwork?`
--

CREATE TABLE `howitwork?` (
  `id` int(11) NOT NULL,
  `icon_1` varchar(500) DEFAULT NULL,
  `icon_2` varchar(500) DEFAULT NULL,
  `title` varchar(500) NOT NULL,
  `desc` varchar(500) DEFAULT NULL,
  `img_1` varchar(500) DEFAULT NULL,
  `img_2` varchar(500) DEFAULT NULL,
  `created.date` int(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `howitwork?`
--

INSERT INTO `howitwork?` (`id`, `icon_1`, `icon_2`, `title`, `desc`, `img_1`, `img_2`, `created.date`, `status`) VALUES
(1, 'assets/img/icons/w1.png', 'assets/img/icons/w1-hover.png', 'Create an Account', 'It is long established fact reader distracted readable content', 'assets/img/icons/right-arrow.png', 'assets/img/icons/right-arrow2.png', 1636739155, 1),
(2, 'assets/img/icons/w2.png', 'assets/img/icons/w2-hover.png', 'CV/Resume', 'It is long established fact reader distracted readable content', 'assets/img/icons/right-arrow.png', 'assets/img/icons/right-arrow2.png', 423246546, 1),
(3, 'assets/img/icons/w3.png', 'assets/img/icons/w3-hover.png', 'Find Your Job', 'It is long established fact reader distracted readable content', 'assets/img/icons/right-arrow.png', 'assets/img/icons/right-arrow2.png', 1636739155, 1),
(4, 'assets/img/icons/w4.png', 'assets/img/icons/w4-hover.png', 'Save & Apply', 'It is long established fact reader distracted readable content', 'assets/img/icons/right-arrow.png', 'assets/img/icons/right-arrow2.png', 342432432, 1);

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

CREATE TABLE `icons` (
  `id` int(11) NOT NULL,
  `img` varchar(500) DEFAULT NULL,
  `created.date` int(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`id`, `img`, `created.date`, `status`) VALUES
(1, 'assets/img/brand-logo/1.png', 1636739155, 1),
(2, 'assets/img/brand-logo/2.png', 1636739155, 1),
(3, 'assets/img/brand-logo/1.png', 1636739155, 1),
(4, 'assets/img/brand-logo/2.png', 1636739155, 1),
(5, 'assets/img/brand-logo/3.png', 1636739155, 1),
(6, 'assets/img/brand-logo/4.png', 1636739155, 1),
(7, 'assets/img/brand-logo/5.png', 1636739155, 1),
(8, 'assets/img/brand-logo/6.png', 1636739155, 1),
(9, 'assets/img/brand-logo/1.png', 1636739155, 1),
(10, 'assets/img/brand-logo/2.png', 1636739155, 1),
(11, 'assets/img/brand-logo/3.png', 1636739155, 1),
(12, 'assets/img/brand-logo/4.png', 1636739155, 1),
(13, 'assets/img/brand-logo/5.png', 1636739155, 1),
(14, 'assets/img/brand-logo/6.png', 1636739155, 1);

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
(6, NULL, 'Candidates', 1636739155, 1, NULL, 'Candidates', 'Candidate Details', NULL, NULL, 'candidate.php', 'candidate-details.php', NULL, NULL, '2'),
(8, NULL, 'Blog', 1636739155, 0, NULL, 'Blog Grid', 'Blog left Sidebar', 'Blog Right Sidebar', 'Blog details', 'blog-grid.php', 'blog.php', 'blog-right-sidebar.php', 'blog-details.php', '4'),
(9, NULL, 'Pages', 1636739155, 1, NULL, 'About us', 'Login', 'Registration', 'Page not found', 'about-us.php', 'login.php', 'registration.php', 'page-not-found.php', '4'),
(10, NULL, 'Contact', 1636739155, 1, 'contact.php', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about-us`
--
ALTER TABLE `about-us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer2`
--
ALTER TABLE `footer2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `howitwork?`
--
ALTER TABLE `howitwork?`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
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
-- AUTO_INCREMENT for table `about-us`
--
ALTER TABLE `about-us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `choosen city`
--
ALTER TABLE `choosen city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer2`
--
ALTER TABLE `footer2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `howitwork?`
--
ALTER TABLE `howitwork?`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
