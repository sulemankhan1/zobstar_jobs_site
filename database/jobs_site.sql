-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 03:25 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'abc'),
(2, 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `websitelink` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `full_address` text NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'use joins with user_table',
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `headquarter` varchar(255) NOT NULL,
  `no_of_employees` int(11) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `no_of_jobs` int(11) NOT NULL,
  `founded_in` date NOT NULL,
  `no_of_followers` int(11) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `websitelink`, `email_address`, `phone_no`, `country`, `city`, `full_address`, `user_id`, `date_time`, `headquarter`, `no_of_employees`, `industry`, `no_of_jobs`, `founded_in`, `no_of_followers`, `location`) VALUES
(1, 'Alphinex solutions', '', '', 212341234, 'pakistan', 'Hyderabqad', 'ABC XYZ', 0, '2020-10-14 13:22:21', 'abc xyz', 0, '', 0, '2017-01-01', 0, 'PK');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `Job_Title` varchar(255) NOT NULL,
  `Job_Type` varchar(255) NOT NULL,
  `career_level` varchar(255) NOT NULL,
  `Company_name` varchar(255) NOT NULL,
  `Job_status` varchar(255) NOT NULL,
  `Company_phone_no` varchar(255) NOT NULL,
  `No_Of_Applicant` int(255) NOT NULL,
  `Company_Logo` text NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `Offered_Salary_Min` int(255) NOT NULL,
  `Offered_Salary_Max` int(255) NOT NULL,
  `Experience` text NOT NULL,
  `Qualification` varchar(255) NOT NULL,
  `Industry` text NOT NULL,
  `Job_Tags` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `Skill_Requirement` text NOT NULL,
  `No_Of_Vaccency` int(255) NOT NULL,
  `Application_Deadline` datetime NOT NULL,
  `Job_Description` text NOT NULL,
  `Company_id` int(11) NOT NULL,
  `Tag_Line` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `City_name` varchar(255) NOT NULL,
  `Company_address` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `Job_Title`, `Job_Type`, `career_level`, `Company_name`, `Job_status`, `Company_phone_no`, `No_Of_Applicant`, `Company_Logo`, `category_id`, `Offered_Salary_Min`, `Offered_Salary_Max`, `Experience`, `Qualification`, `Industry`, `Job_Tags`, `gender`, `Skill_Requirement`, `No_Of_Vaccency`, `Application_Deadline`, `Job_Description`, `Company_id`, `Tag_Line`, `location`, `City_name`, `Company_address`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'PHP Developer', '1', '1', '', 'active', '', 0, '', '1', 10000, 900000, '3', '3', 'It', '[\"iOS\",\"Android\",\"PHP\"]', '2', '[\"CSS3\",\"PHP\",\"Javascript\"]', 10, '2020-10-20 00:00:00', 'asdfasdfas fasd fasd fas', 0, 'df asdf asdfa sf asdfa sdf', '', '', '', 2, '2020-10-14 13:22:21', '2020-10-14 13:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `profession_title` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `salary_min` int(11) NOT NULL,
  `salary_max` int(11) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `field_of_study` varchar(255) NOT NULL,
  `school_f_date` date NOT NULL,
  `school_t_date` date NOT NULL,
  `active_status` enum('online','offline') NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `company_f_date` date NOT NULL,
  `company_t_date` date NOT NULL,
  `company_desc` varchar(255) NOT NULL,
  `last_seen` datetime NOT NULL,
  `cv` varchar(255) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `completion_percentage` decimal(10,2) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `twiiter` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `experience` varchar(255) NOT NULL,
  `current_salary` varchar(255) NOT NULL,
  `expected_salary` varchar(255) NOT NULL,
  `education_level` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `email_subscription` tinyint(1) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email_updates` tinyint(1) NOT NULL,
  `i_agree_pp` tinyint(1) NOT NULL,
  `i_agree_tos` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `profile_pic`, `phone`, `type`, `profession_title`, `age`, `salary_min`, `salary_max`, `qualification`, `gender`, `about`, `password`, `email`, `school`, `degree`, `field_of_study`, `school_f_date`, `school_t_date`, `active_status`, `company_name`, `job_title`, `company_f_date`, `company_t_date`, `company_desc`, `last_seen`, `cv`, `verified`, `completion_percentage`, `facebook`, `instagram`, `twiiter`, `website`, `country`, `city`, `address`, `experience`, `current_salary`, `expected_salary`, `education_level`, `language`, `email_subscription`, `datetime`, `email_updates`, `i_agree_pp`, `i_agree_tos`) VALUES
(1, 'suleman', 'khan', '', '', '', '', 0, 0, 0, '', '', '', 'khan12345', 'suleman@email.com', '', '', '', '0000-00-00', '0000-00-00', 'online', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00 00:00:00', '', 0, '0.00', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2020-09-15 15:53:56', 0, 0, 0),
(2, 'employer', 'employer', '', '', 'employer', '', 0, 0, 0, '', '', '', 'employer', 'employer@email.com', '', '', '', '0000-00-00', '0000-00-00', 'online', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00 00:00:00', '', 0, '0.00', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2020-09-18 19:02:39', 0, 0, 0),
(3, 'candidate', 'candidate', '', '', 'candidate', '', 0, 0, 0, '', '', '', 'candidate', 'candidate@email.com', '', '', '', '0000-00-00', '0000-00-00', 'online', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00 00:00:00', '', 0, '0.00', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2020-09-18 19:03:00', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
