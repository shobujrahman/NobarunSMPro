-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 08:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_user_view`
--

CREATE TABLE `academic_user_view` (
  `academic_user_view_id` int(25) NOT NULL,
  `academic_name` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `routine` varchar(25) NOT NULL,
  `text_book` varchar(255) NOT NULL,
  `total_student` varchar(255) NOT NULL,
  `male_student` varchar(255) NOT NULL,
  `female_student` varchar(255) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `communication`
--

CREATE TABLE `communication` (
  `communication_id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(25) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `content_manage`
--

CREATE TABLE `content_manage` (
  `content_manage_id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `content_manage_details`
--

CREATE TABLE `content_manage_details` (
  `content_manage_details_id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content_manage_id` int(25) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `default_access`
--

CREATE TABLE `default_access` (
  `default_access_id` int(25) NOT NULL,
  `institute_name` varchar(255) NOT NULL,
  `access_name` varchar(255) NOT NULL,
  `access_password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `contact` int(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `education` text NOT NULL,
  `experience` text NOT NULL,
  `skill` text NOT NULL,
  `access_user_image` varchar(255) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_type`
--

CREATE TABLE `gallery_type` (
  `gallery_type_id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_type_details`
--

CREATE TABLE `gallery_type_details` (
  `gallery_type_details_id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gallery_type_id` int(25) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_type`
--

CREATE TABLE `member_type` (
  `member_type_id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_type_details`
--

CREATE TABLE `member_type_details` (
  `member_type_details_id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `address` varchar(25) NOT NULL,
  `contact` int(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `member_type_id` int(25) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_user_view`
--
ALTER TABLE `academic_user_view`
  ADD PRIMARY KEY (`academic_user_view_id`);

--
-- Indexes for table `communication`
--
ALTER TABLE `communication`
  ADD PRIMARY KEY (`communication_id`);

--
-- Indexes for table `content_manage`
--
ALTER TABLE `content_manage`
  ADD PRIMARY KEY (`content_manage_id`);

--
-- Indexes for table `content_manage_details`
--
ALTER TABLE `content_manage_details`
  ADD PRIMARY KEY (`content_manage_details_id`);

--
-- Indexes for table `default_access`
--
ALTER TABLE `default_access`
  ADD PRIMARY KEY (`default_access_id`);

--
-- Indexes for table `gallery_type`
--
ALTER TABLE `gallery_type`
  ADD PRIMARY KEY (`gallery_type_id`);

--
-- Indexes for table `gallery_type_details`
--
ALTER TABLE `gallery_type_details`
  ADD PRIMARY KEY (`gallery_type_details_id`);

--
-- Indexes for table `member_type`
--
ALTER TABLE `member_type`
  ADD PRIMARY KEY (`member_type_id`);

--
-- Indexes for table `member_type_details`
--
ALTER TABLE `member_type_details`
  ADD PRIMARY KEY (`member_type_details_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_user_view`
--
ALTER TABLE `academic_user_view`
  MODIFY `academic_user_view_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `communication`
--
ALTER TABLE `communication`
  MODIFY `communication_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `content_manage`
--
ALTER TABLE `content_manage`
  MODIFY `content_manage_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `content_manage_details`
--
ALTER TABLE `content_manage_details`
  MODIFY `content_manage_details_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `default_access`
--
ALTER TABLE `default_access`
  MODIFY `default_access_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_type`
--
ALTER TABLE `gallery_type`
  MODIFY `gallery_type_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_type_details`
--
ALTER TABLE `gallery_type_details`
  MODIFY `gallery_type_details_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_type`
--
ALTER TABLE `member_type`
  MODIFY `member_type_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_type_details`
--
ALTER TABLE `member_type_details`
  MODIFY `member_type_details_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(25) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
