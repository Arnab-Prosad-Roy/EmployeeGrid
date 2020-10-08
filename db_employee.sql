-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 01:25 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'CEO', '2020-10-07 22:08:14', '2020-10-07 22:08:14'),
(2, 'IT Officer', '2020-10-07 22:08:14', '2020-10-07 22:08:14'),
(3, 'HR', '2020-10-07 22:08:14', '2020-10-07 22:08:14'),
(4, 'Accountant', '2020-10-07 22:08:14', '2020-10-07 22:08:14'),
(5, 'Senior IT Officer', '2020-10-07 22:08:14', '2020-10-07 22:08:14'),
(6, 'Software Engineer', '2020-10-07 22:08:14', '2020-10-07 22:08:14'),
(7, 'Sr. Software Engineer', '2020-10-07 22:08:14', '2020-10-07 22:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation_id` int(11) NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` double NOT NULL,
  `joining_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_no`, `name`, `designation_id`, `department`, `company`, `salary`, `joining_date`, `created_at`, `updated_at`) VALUES
(1, 'em001', 'John Doe', 2, 'IT', 'SoftBd', 25000, '2020-10-08', '2020-10-08 04:26:36', '2020-10-08 04:26:36'),
(2, 'em002', 'John Smit', 2, 'IT', 'SoftBd', 25000, '2020-10-08', '2020-10-08 04:26:36', '2020-10-08 04:26:36'),
(3, 'em003', 'Olive Yew', 4, 'Finance', 'SoftBd', 40000, '2020-10-08', '2020-10-08 04:26:36', '2020-10-08 04:26:36'),
(4, 'em004', 'Alli Garter', 5, 'IT', 'SoftBd', 45000, '2020-10-08', '2020-10-08 04:26:36', '2020-10-08 04:26:36'),
(5, 'em005', 'Eileen Sideways', 6, 'IT', 'SoftBd', 38000, '2020-10-08', '2020-10-08 04:26:36', '2020-10-08 04:26:36'),
(6, 'em006', 'Augusta Wind', 7, 'IT', 'SoftBd', 50000, '2020-10-08', '2020-10-08 04:26:36', '2020-10-08 04:26:36'),
(7, 'em007', 'Alli Garter', 2, 'IT', 'SoftBd', 25000, '2020-10-08', '2020-10-08 04:26:36', '2020-10-08 04:26:36'),
(8, 'em008', 'Roy L. Commishun', 2, 'IT', 'SoftBd', 25000, '2020-10-08', '2020-10-08 04:26:36', '2020-10-08 04:26:36'),
(9, 'em009', 'Pat Thettick', 6, 'IT', 'SoftBd', 30000, '2020-10-08', '2020-10-08 04:26:36', '2020-10-08 04:26:36'),
(10, 'em0010', 'Rod Knee', 4, 'Finance', 'SoftBd', 30000, '2020-10-08', '2020-10-08 04:26:36', '2020-10-08 04:26:36'),
(11, 'em0012', 'Karen Onnabit', 3, 'Management', 'SoftBd', 32000, '2020-10-08', '2020-10-08 04:26:36', '2020-10-08 04:26:36'),
(12, 'em0014', 'Joe V. Awl', 2, 'IT', 'SoftBd', 25000, '2020-10-08', '2020-10-08 04:26:36', '2020-10-08 04:26:36');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2020_10_08_050717_create_designations_table', 2),
(3, '2020_10_08_053139_create_employees_table', 3);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
