-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 11:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edukwic`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `course_count` int(3) NOT NULL,
  `course_title` varchar(35) NOT NULL,
  `course_branch` varchar(15) DEFAULT NULL,
  `anchor_tag` varchar(20) NOT NULL,
  `image_src` varchar(35) NOT NULL,
  `video_src` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`course_count`, `course_title`, `course_branch`, `anchor_tag`, `image_src`, `video_src`) VALUES
(3, 'Cybersecurity', 'Programming', 'index.html', 'assets/images/courses/pic3.jpg', 'https://youtu.be/rCPTa3lLCI0?si=WrffK4vTO9yI8X4D'),
(2, 'Full-Stack Development', 'Programming', 'index.html', 'assets/images/courses/pic2.jpg', 'https://youtu.be/rCPTa3lLCI0?si=WrffK4vTO9yI8X4D'),
(4, 'Game Development', 'Programming', 'index.html', 'assets/images/courses/pic4.jpg', 'https://youtu.be/rCPTa3lLCI0?si=WrffK4vTO9yI8X4D'),
(1, 'Introduction to Programming', 'Programming', 'intprograming.hmtl', 'assets/images/courses/pic1.jpg', 'https://youtu.be/rCPTa3lLCI0?si=88mdrCaBO3OnAWlo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `verify_token` varchar(50) NOT NULL,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_password`, `role_as`, `verify_token`, `reset_token_hash`, `reset_token_expires_at`, `created_at`) VALUES
(1, 'admin', 'edukwicorg@gmail.com', 0, '1234', 1, 'jnerc7nf53n889', '89c31b6f60c1fd693cf3a829a1dda0dfaa084f046e5a92c83b1c2546fab66a3e', '2024-01-20 11:37:55', '2024-01-07 09:34:22'),
(2, 'Student', 'student@gmail.com', 0, '123', 0, '00jfwehaw93uhh73', NULL, NULL, '2024-01-08 02:45:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`course_title`),
  ADD KEY `course_count` (`course_count`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
