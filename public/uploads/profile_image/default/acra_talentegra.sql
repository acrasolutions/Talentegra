-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 04:49 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acra_talentegra`
--

-- --------------------------------------------------------

--
-- Table structure for table `associations`
--

CREATE TABLE `associations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `association` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `associations`
--

INSERT INTO `associations` (`id`, `association`, `created_at`, `updated_at`) VALUES
(1, 'Full Time', NULL, NULL),
(2, 'Part Time', NULL, NULL),
(3, 'Correspondence/Distance Learning', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `degree_types`
--

CREATE TABLE `degree_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `degree_type` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `degree_types`
--

INSERT INTO `degree_types` (`id`, `degree_type`, `created_at`, `updated_at`) VALUES
(1, 'Secondary', NULL, NULL),
(2, 'Higher Secondary', NULL, NULL),
(3, 'Graduation', NULL, NULL),
(4, 'Advanced Diploma', NULL, NULL),
(5, 'Post Graduation', NULL, NULL),
(6, 'Doctorate/PhD', NULL, NULL),
(7, 'Diploma', NULL, NULL),
(8, 'Certification', NULL, NULL),
(9, 'Other', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_05_03_081005_subjects', 1),
(6, '2021_05_03_081927_create_subjects_table', 1),
(8, '2021_05_03_085023_create_profiles_table', 2),
(9, '2021_05_04_163734_create_sub_levels_table', 3),
(10, '2021_05_05_104545_create_associations_table', 4),
(11, '2021_05_05_104637_create_degree_types_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_job` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_name` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `speciality_strength` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postalcode` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_tech` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`subject_tech`)),
  `user_education` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`user_education`)),
  `professional_exp` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`professional_exp`)),
  `teaching_details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`teaching_details`)),
  `profile_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`profile_description`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `fullname`, `company_name`, `role_job`, `display_name`, `created_at`, `updated_at`, `gender`, `dob`, `speciality_strength`, `location`, `postalcode`, `subject_tech`, `user_education`, `professional_exp`, `teaching_details`, `profile_description`) VALUES
(16, 54, 'Sangeetha Tutoring', 'sample company', 'sample role', 'Both', '2021-05-06 05:52:32', '2021-05-08 10:17:56', 'Female', '2021-05-12', 'sample Speciality', 'dad', NULL, '[{\"subject\":\"1\",\"from_level\":\"1\",\"to_level\":\"2\"}]', '[{\"institution\":\"sample institution\",\"deg_type\":\"2\",\"deg_name\":\"bsc IT\",\"startdate\":\"2021-05-20\",\"enddate\":\"2021-05-28\",\"association\":\"2\",\"speciality\":\"sample Speciality\",\"score\":\"sample Score\"},{\"institution\":\"Rvs college of dental studies\",\"deg_type\":\"2\",\"deg_name\":\"bba\",\"startdate\":\"2021-05-25\",\"enddate\":\"2021-05-25\",\"association\":\"1\",\"speciality\":\"sample Speciality\",\"score\":\"sda\"}]', '[{\"organisation\":\"sample Organisation\",\"designation\":\"sample Designation\",\"e_startdate\":\"2021-05-11\",\"e_enddate\":\"2021-05-21\",\"association\":\"2\",\"job_description\":\"sample Job Description\"},\r\n{\"organisation\":\"oracle\",\"designation\":\"developer\",\"e_startdate\":\"2021-05-18\",\"e_enddate\":\"2021-05-27\",\"association\":\"1\",\"job_description\":\"sample\"}]', '[{\"i_charge\":\"Weekly\",\"min_fee\":\"29\",\"max_fee\":\"30\",\"fee_details\":\"yes Fee Details\",\"tot_exp\":\"2\",\"online_exp\":\"1\",\"travel\":\"yes\",\"travel_kms\":\"2\",\"avail_online_teach\":\"Yes\",\"digital_pen\":\"No\",\"help_homework_assig\":\"Yes\",\"currently_emp\":\"No\",\"oppor_interest\":\"full_time\"}]', '[{\"profile_des\":\"This is the most important section for you.\\r\\n80% of students will decide if they want to hire you just based on what you write here.\\r\\nMake sure it\'s good, relevent in detail, and without mistakes.\\r\\nDo not copy-paste your resume here.\\r\\nDo not share any contact details.\",\"one_acc\":\"yes\"}]'),
(18, 54, NULL, NULL, NULL, NULL, '2021-05-14 00:48:18', '2021-05-14 00:48:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `user_role`, `created_at`, `updated_at`) VALUES
(1, 'Teacher', NULL, NULL),
(2, 'Student/Parent', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_name` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `created_at`, `updated_at`) VALUES
(1, 'Physics', NULL, NULL),
(2, 'Chemistry', NULL, NULL),
(3, 'Thermodynamics', NULL, NULL),
(4, 'Maths', NULL, NULL),
(5, 'Zoology', NULL, NULL),
(6, 'Electronics', '2021-05-05 03:25:44', '2021-05-05 03:25:44'),
(7, 'Computer Science', '2021-05-05 03:27:56', '2021-05-05 03:27:56'),
(8, 'computer network', '2021-05-05 03:29:47', '2021-05-05 03:29:47'),
(9, 'Java', '2021-05-05 03:30:29', '2021-05-05 03:30:29'),
(12, 'Geospace', '2021-05-05 03:47:08', '2021-05-05 03:47:08'),
(13, 'Mysql and PHP', '2021-05-05 05:42:59', '2021-05-05 05:42:59'),
(14, 'oracle cloud', '2021-05-05 23:38:28', '2021-05-05 23:38:28'),
(15, 'sample subject', '2021-05-06 06:09:22', '2021-05-06 06:09:22');

-- --------------------------------------------------------

--
-- Table structure for table `sub_levels`
--

CREATE TABLE `sub_levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level_name` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_levels`
--

INSERT INTO `sub_levels` (`id`, `level_name`, `created_at`, `updated_at`) VALUES
(1, 'Beginner', NULL, NULL),
(2, 'Intermediate', NULL, NULL),
(3, 'Expert', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `user_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iam_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_img` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `only_acc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `user_type`, `iam_type`, `password`, `remember_token`, `phone`, `profile_img`, `only_acc`, `temp_email`, `created_at`, `updated_at`) VALUES
(54, 'Sangeetha Tutoring', 'josan57108@gmail.com', '2021-05-06 06:31:13', 'Teacher', 'Individual Teacher', '$2y$10$zNnpzZe5u/0ecFZo0pXNLe4omSfpEoalE/oN/aMZGsWUer.H6fKmC', NULL, '99431 06549', NULL, 'yes', NULL, '2021-05-06 05:51:51', '2021-05-14 00:48:17'),
(55, 'josan', 'sangeetha.nitb2015@gmail.com', '2021-05-14 00:53:29', 'Student/Parent', 'Student/Parent', '$2y$10$/IfcFKK8uFjTCGdQkmB70OOfNqxK3zCn6/9aod0Fa0S3TMG8t6WgS', NULL, NULL, '1621000163.5581186f69494afdcac69f519f4dddd4.jpg', 'yes', NULL, '2021-05-14 00:49:21', '2021-05-14 08:19:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `associations`
--
ALTER TABLE `associations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `degree_types`
--
ALTER TABLE `degree_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_levels`
--
ALTER TABLE `sub_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `associations`
--
ALTER TABLE `associations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `degree_types`
--
ALTER TABLE `degree_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sub_levels`
--
ALTER TABLE `sub_levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
