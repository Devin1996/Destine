-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2019 at 08:11 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `destine`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `com_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`com_id`, `post_id`, `user_id`, `comment`, `comment_author`, `date`) VALUES
(1, 4, 4, 'Hi\r\n', 'devin_chandula_392913', '2019-09-18 16:18:15'),
(2, 6, 4, 'OK', 'devin_chandula_392913', '2019-09-19 21:33:30'),
(3, 6, 4, 'Ya', 'devin_chandula_392913', '2019-09-19 21:34:27'),
(4, 6, 4, 'I can help you to find some one', 'kalindu_hansike_23071', '2019-09-21 01:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `c_id` int(11) NOT NULL,
  `c_name` text NOT NULL,
  `cuser_name` text NOT NULL,
  `cdescribe_user` varchar(255) NOT NULL,
  `c_tel` text NOT NULL,
  `c_pass` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_area` text NOT NULL,
  `c_cat` text NOT NULL,
  `c_add` text NOT NULL,
  `c_image` varchar(255) NOT NULL,
  `c_cover` varchar(255) NOT NULL,
  `c_reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cstatus` text NOT NULL,
  `cposts` text NOT NULL,
  `crecovery_account` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`c_id`, `c_name`, `cuser_name`, `cdescribe_user`, `c_tel`, `c_pass`, `c_email`, `c_area`, `c_cat`, `c_add`, `c_image`, `c_cover`, `c_reg_date`, `cstatus`, `cposts`, `crecovery_account`) VALUES
(4, 'LankaHW', 'lankahw_93627', 'Company', '011234567421235', '12345678900', 'lankahw@hmao.lk', 'Southern Province', 'Hardaware Shop', 'LHW HAKMANA ROAD,MATARA', 'circle-512.png', 'download.jpg', '2019-09-19 16:53:52', 'status', 'no', 'DCMA.'),
(6, 'Ceylon Designs', 'ceylondesigns_271362', 'Company', '45798454874847', '1234567890', 'cd@abc.com', 'Southern Province', 'Interior Design', 'cd HAKMANA ROAD,MATARA', 'images.png', 'download.jpg', '2019-09-21 16:07:45', 'status', 'no', 'DCMA.'),
(7, 'We Plan', 'we plan_856262', 'Company', '98765432123456', '1234567890', 'wp@b.com', 'Isalnd Wide', 'Contract', '12345 Galle Road', 'i1.png.63', 'IMG_20180701_165116_939.jpg.6', '2019-09-21 04:41:04', 'status', 'yes', 'DCMA.'),
(8, 'Plands', 'plands_167724', 'Company', '32542598274', '1234567890', 'pl@a.com', 'Isalnd Wide', 'Land Sale', '123Colombo', 'c-logo.png.99', 'download.jpg', '2019-09-21 13:35:07', 'status', 'yes', 'DCMA.'),
(9, 'Dplan', 'dplan_742950', 'Company', '2342543647568858', '1234567890', 'dp@dp.com', 'Southern Province', 'Interior Design', 'Galle ROAD,MATARA', 'IMG_20180701_160304_497.jpg.23', 'mckenzie-toyne-747170-unsplash.jpg.14', '2019-09-21 04:55:34', 'status', 'no', 'DCMA.'),
(10, 'weProvideLanka', 'weprovide_385283', 'Company', '098765', '1234567890', 'wpl@b.com', 'Western Province', 'Equipment Prrovider', 'Galle', 'images.png', 'download.jpg', '2019-09-21 15:30:13', 'status', 'no', 'DCMA.');

-- --------------------------------------------------------

--
-- Table structure for table `cposts`
--

CREATE TABLE `cposts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_content` text NOT NULL,
  `upload_image` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cposts`
--

INSERT INTO `cposts` (`post_id`, `user_id`, `post_content`, `upload_image`, `post_date`) VALUES
(2, 7, 'Our New Design ', 'i7.jpg.14', '2019-09-19 19:53:58'),
(3, 8, 'Land for sale from Nuwara Eliya ! ', 'abc1.jpg.92', '2019-09-21 00:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `ind`
--

CREATE TABLE `ind` (
  `i_id` int(11) NOT NULL,
  `if_name` text NOT NULL,
  `il_name` text NOT NULL,
  `iuser_name` text NOT NULL,
  `idescribe_user` varchar(255) NOT NULL,
  `i_pass` varchar(255) NOT NULL,
  `i_email` varchar(255) NOT NULL,
  `i_gender` text NOT NULL,
  `i_birthday` text NOT NULL,
  `i_image` varchar(255) NOT NULL,
  `i_cover` varchar(255) NOT NULL,
  `i_reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `istatus` text NOT NULL,
  `iposts` text NOT NULL,
  `irecovery_account` varchar(255) NOT NULL,
  `i_area` varchar(255) NOT NULL,
  `i_cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ind`
--

INSERT INTO `ind` (`i_id`, `if_name`, `il_name`, `iuser_name`, `idescribe_user`, `i_pass`, `i_email`, `i_gender`, `i_birthday`, `i_image`, `i_cover`, `i_reg_date`, `istatus`, `iposts`, `irecovery_account`, `i_area`, `i_cat`) VALUES
(6, 'Don', 'Amal', 'don_amal_263641', 'Service Provider', '12345678901', 'damal@b.c', 'Male', '1997-03-03', 'images.png', 'download.jpg', '2019-09-21 00:06:48', 'status', 'no', 'DCMA.', 'Isalnd Wide', 'Interior Designer'),
(7, 'Don', 'Kamal', 'don_kamal_561828', 'Service Provider', '24348948328934545', 'dkamal@b.c', 'Male', '1965-04-05', 'circle-512.png', 'download.jpg', '2019-09-21 00:07:00', 'status', 'no', 'DCMA.', 'Isalnd Wide', 'Interior Designer'),
(8, 'Don', 'Kamal', 'don_kamal_689971', 'Service Provider', '21321231432314', 'dkamal@b.c2', 'Male', '1965-04-05', 'User.png', 'download.jpg', '2019-09-21 00:07:10', 'status', 'no', 'DCMA.', 'Isalnd Wide', 'Interior Designer'),
(9, 'Amal', 'prasanna', 'amal_prasanna_131835', 'Service Provider', '1234567890', 'ap@g.com', 'Male', '1975-05-05', 'Screenshot (91).png.56', 'download.jpg', '2019-09-21 14:18:35', 'status', 'yes', 'DCMA.', 'Northern Province', 'Gardener'),
(10, 'Ananda', 'Perera', 'ananda_gamage_26973', 'Service Provider', '1234567890', 'ag@g.com', 'Male', '', 'Screenshot (105).png.41', 'download.jpg', '2019-09-21 15:14:48', 'status', 'no', 'DCMA.', 'Southern Province', 'Painter');

-- --------------------------------------------------------

--
-- Table structure for table `iposts`
--

CREATE TABLE `iposts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_content` text NOT NULL,
  `upload_image` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iposts`
--

INSERT INTO `iposts` (`post_id`, `user_id`, `post_content`, `upload_image`, `post_date`) VALUES
(7, 9, 'Any Kind of work can be done', 'i3.jpg.81', '2019-09-21 00:30:34'),
(8, 9, 'Available on this weekend', 'i3.jpg.56', '2019-09-21 00:30:38'),
(9, 9, 'Service can be provide at any time', '', '2019-09-21 00:30:43');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_content` text NOT NULL,
  `upload_image` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `post_content`, `upload_image`, `post_date`) VALUES
(4, 4, 'A', '', '2019-09-19 14:18:25'),
(6, 4, 'Carpenter Needed', '', '2019-09-19 19:19:53'),
(7, 10, 'looking for a planner', 'i4.jpg.89', '2019-09-21 01:13:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `user_name` text NOT NULL,
  `describe_user` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_dis` text NOT NULL,
  `user_gender` text NOT NULL,
  `user_birthday` text NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_cover` varchar(255) NOT NULL,
  `user_reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` text NOT NULL,
  `posts` text NOT NULL,
  `recovery_account` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `f_name`, `l_name`, `user_name`, `describe_user`, `user_pass`, `user_email`, `user_dis`, `user_gender`, `user_birthday`, `user_image`, `user_cover`, `user_reg_date`, `status`, `posts`, `recovery_account`) VALUES
(4, 'Devin', 'Chandula', 'devin_chandula_392913', 'User', '1234567890', 'devinchandula@gmail.com', 'Colombo', 'Male', '1996-05-25', 'IMG_20180701_165116_939.jpg.92', 'Galaxy-Background.jpg.71', '2019-09-21 04:56:07', 'status', 'yes', 'DCMA.'),
(10, 'Kalindu', 'Hansike', 'kalindu_hansike_23071', 'User', '12345678900', 'khg@gm.com', '', 'Male', '1995-12-12', 'IMG_20190820_102334 (3).jpg.95', 'mckenzie-toyne-747170-unsplash.jpg.14', '2019-09-21 01:59:25', 'status', 'yes', 'DCMA.'),
(12, 'Gayan', 'Palliyaguru', 'gayan_palliyaguru_698028', 'User', '0987654321', 'gjp@h.com', 'Matara', 'Male', '1995-06-05', 'User.png', 'download.jpg', '2019-09-19 05:27:06', 'status', 'no', 'DCMA.'),
(13, 'Dulanga', 'Nimesha', 'dulanga_nimesha_479827', 'User', '0987654321', 'dm@h.com', 'Colombo', 'Male', '1996-02-02', 'User.png', 'download.jpg', '2019-09-19 05:27:09', 'status', 'no', 'DCMA.'),
(14, 'Malinda', 'Rukkshal', 'malinda_rukkshal_391265', 'USER', '1234567890', 'mrj@mrj.com', 'Nuwara Eliya', 'Male', '1997-03-02', 'User.png', 'download.jpg', '2019-09-19 05:31:01', 'status', 'no', 'DCMA.');

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_form` int(11) NOT NULL,
  `msg_body` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `msg_seen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `cposts`
--
ALTER TABLE `cposts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `ind`
--
ALTER TABLE `ind`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `iposts`
--
ALTER TABLE `iposts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cposts`
--
ALTER TABLE `cposts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ind`
--
ALTER TABLE `ind`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `iposts`
--
ALTER TABLE `iposts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
