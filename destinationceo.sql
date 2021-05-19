-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 03:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `destinationceo`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_experiences`
--

CREATE TABLE `additional_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsibilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currently_working` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `additional_experiences`
--

INSERT INTO `additional_experiences` (`id`, `user_id`, `role`, `responsibilities`, `employer`, `startdate`, `enddate`, `city`, `state`, `country`, `currently_working`, `created_at`, `updated_at`) VALUES
(1, 5, 'PyVista Contributor', '<p>Open-source 3D visualization toolkit; Improved 3D line geometry and tessellation filter.</p>', 'English Bay Battar', '2021-01-01', NULL, 'Mississuaga', 'Ontario', 'Canada', 'yes', '2021-04-19 11:43:22', '2021-04-19 11:43:22'),
(2, 5, 'NASA Space App Hackathon', '<p>Measured and analyzed sleep quality of astronaut&rsquo;s based on homeostatic functions.</p>', 'Objectivity', '2019-05-01', '2021-02-01', 'Brampton', 'Ontaio', 'Canada', NULL, '2021-04-19 11:44:14', '2021-04-19 11:52:44'),
(3, 5, 'QAC Executive', '<p>Appointed as key executive member by securing partnerships with local companies in Kingston.</p>', 'English Bay Battar', '2017-03-01', '2021-04-01', 'Mississauga', 'Ontario', 'Canada', NULL, '2021-04-19 11:45:13', '2021-04-19 11:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `admin_about_us_files`
--

CREATE TABLE `admin_about_us_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_about_us_files`
--

INSERT INTO `admin_about_us_files` (`id`, `about`, `created_at`, `updated_at`) VALUES
(2, '<p>Destination CEO is a social enterprise driven by a single goal; to do our part in supporting Job Seekers and Career Transitioners, pursue their dream careers, by facilitating Job Search Bootcamps, career Coaching, Mentoring and Collaboration with businesses, not-for-profit organizations and academic institutions.</p>\r\n\r\n<p>Destination CEO officially launched in 2014, and has been successfully delivered within numerous newcomer and new-grad career programs within colleges, nonprofit organizations and featured on various platforms.</p>\r\n\r\n<p>Destination CEO&rsquo;s strong partnerships with employers, help jobseekers build a foundation for lifelong success. Over 90 per cent of Destination CEO participants find employment within six weeks of the program, based on their involvement.</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_address_details`
--

CREATE TABLE `admin_address_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_address_details`
--

INSERT INTO `admin_address_details` (`id`, `address`, `city`, `province`, `postcode`, `country`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(100, '3 drive', 'Mississuaga', 'Ontario', NULL, 'Canada', 'destinationceo.org@gmail.com', '6475045562', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_social_links_files`
--

CREATE TABLE `admin_social_links_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedIn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_social_links_files`
--

INSERT INTO `admin_social_links_files` (`id`, `twitter`, `facebook`, `instagram`, `google`, `linkedIn`, `created_at`, `updated_at`) VALUES
(1, 'http://127.0.0.1:8000/admin/socialLinks', 'http://127.0.0.1:8000/admin/socialLinks', 'http://127.0.0.1:8000/admin/socialLinks', 'http://127.0.0.1:8000/admin/socialLinks', 'http://127.0.0.1:8000/admin/socialLinks', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `schoolname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enddate` date NOT NULL,
  `fieldofstudy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GPA` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduated` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relevant_courses` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `awards` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_activity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `user_id`, `schoolname`, `degree`, `enddate`, `fieldofstudy`, `city`, `state`, `country`, `GPA`, `graduated`, `relevant_courses`, `awards`, `extra_activity`, `created_at`, `updated_at`) VALUES
(1, 5, 'Humber College', 'Post Graduate', '2021-09-01', 'Information Technology', 'Toronto', 'ON', 'Canada', '2.5', 'still_enrolled', '[\"Comp. Architecture\",\"Object Oriented Programming\",\"Data Structures and Algorithms\",\"Operating Systems\",\"Engineering Entrepreneurship\"]', '[\"Dean\'s Honors list\"]', '[\"Painting\",\"Gardening\"]', '2021-04-19 11:35:48', '2021-04-19 11:35:48');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currently_working` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_responsibilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `user_id`, `job_title`, `employer`, `startdate`, `enddate`, `city`, `state`, `country`, `currently_working`, `work_responsibilities`, `created_at`, `updated_at`) VALUES
(1, 5, 'Software Engineer, Intern', 'Objectivity', '2019-05-01', '2019-09-01', 'Toronto', 'ON', 'Canada', NULL, '<p><strong>IoT Development</strong></p>\r\n\r\n<ul>\r\n	<li>Designed and coordinated a scalable multi-container solution</li>\r\n	<li>Implemented flow-based programming interface for clients to rapidly prototype and modify properties to suit their needs</li>\r\n	<li>Integrated IoT Technologies such as IBM-Bluemix Node-RED into common web technologies such as Flask, React and Nginx to create a pipeline to convert concurrent data into 3D geometry</li>\r\n</ul>\r\n\r\n<p><strong>3D Development</strong></p>\r\n\r\n<ul>\r\n	<li>Reduced time (over 50%) to generate complex 3D geometry by using vectorization</li>\r\n	<li>Implemented method to calculate for intersection in point cloud in O(nlogn)</li>\r\n	<li>Developed optimization algorithm to find fewest lines used to enclose the maximum volume in O(nlogn)</li>\r\n	<li>Implemented method to find the shell of a point cloud by finding the convex hull and using smoothing techniques</li>\r\n	<li>Architected the pipeline to manage, clean, visualize and interpret multivariable data</li>\r\n</ul>\r\n\r\n<p><strong>Project Development</strong></p>\r\n\r\n<ul>\r\n	<li>Developed and maintained unit-tests, continuous integration and E2E testing in Python and JavaScript</li>\r\n	<li>Maintained API documentation with swagger.io endpoint</li>\r\n</ul>', '2021-04-19 11:38:05', '2021-04-19 11:38:05');

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
-- Table structure for table `hard_skills_keywords`
--

CREATE TABLE `hard_skills_keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hard_skill_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hard_skills_keywords`
--

INSERT INTO `hard_skills_keywords` (`id`, `hard_skill_keyword`, `created_at`, `updated_at`) VALUES
(1, 'html', NULL, NULL),
(2, 'css', '2021-03-31 02:51:27', '2021-03-31 02:51:27'),
(3, 'java', '2021-03-31 02:51:36', '2021-03-31 02:51:36'),
(4, 'javascript', '2021-03-31 02:51:46', '2021-03-31 02:51:46'),
(5, 'python', '2021-03-31 02:51:55', '2021-03-31 02:51:55'),
(6, 'ruby', '2021-03-31 02:52:03', '2021-03-31 02:52:03'),
(7, 'sql', '2021-03-31 02:52:09', '2021-03-31 02:52:09'),
(8, 'mysql', '2021-03-31 02:52:16', '2021-03-31 02:52:16'),
(9, 'perl', '2021-03-31 02:52:25', '2021-03-31 02:52:25'),
(10, 'adobe flex', '2021-03-31 22:30:50', '2021-03-31 22:30:50'),
(11, 'react.js', '2021-03-31 22:31:01', '2021-03-31 22:31:01'),
(12, 'xml', '2021-03-31 22:31:10', '2021-03-31 22:31:10'),
(13, 'active x', '2021-03-31 22:31:19', '2021-03-31 22:31:19'),
(14, 'objective-c', '2021-03-31 22:31:30', '2021-03-31 22:31:30'),
(15, 'jsp', '2021-03-31 22:31:36', '2021-03-31 22:31:36'),
(16, 'c#', '2021-03-31 22:31:44', '2021-03-31 22:31:44'),
(17, 'android', '2021-03-31 22:31:51', '2021-03-31 22:31:51'),
(18, 'linux', '2021-03-31 22:31:59', '2021-03-31 22:31:59'),
(19, 'windows', '2021-03-31 22:32:11', '2021-03-31 22:32:11'),
(20, 'wireless communications', '2021-03-31 22:32:26', '2021-03-31 22:32:26'),
(21, 'troubleshooting', '2021-03-31 22:32:37', '2021-03-31 22:32:37'),
(22, 'excel', '2021-03-31 22:32:43', '2021-03-31 22:32:43'),
(23, 'powerpoint', '2021-03-31 22:32:51', '2021-03-31 22:32:51'),
(24, 'mongodb', '2021-03-31 22:33:01', '2021-03-31 22:33:01'),
(25, 'copywriting', NULL, NULL),
(26, 'editing', NULL, NULL),
(27, 'researching', NULL, NULL),
(28, 'reporting', NULL, NULL),
(29, 'translation', NULL, NULL),
(30, 'transcription', NULL, NULL),
(31, 'word processing', NULL, NULL),
(32, 'digital communication', NULL, NULL),
(33, 'pivot tables', NULL, NULL),
(34, 'word', NULL, NULL),
(35, 'outlook', NULL, NULL),
(36, 'wordpress', NULL, NULL),
(37, 'adobe suite', NULL, NULL),
(38, 'photoshop', NULL, NULL),
(39, 'data engineering', NULL, NULL),
(40, 'database ', NULL, NULL),
(41, 'data mining', NULL, NULL),
(42, 'data visualization', NULL, NULL),
(43, 'web analytics', NULL, NULL),
(44, 'data analytics', NULL, NULL),
(45, 'IBM', NULL, NULL),
(46, 'ERP', NULL, NULL),
(47, 'visual basic', NULL, NULL),
(48, 'hyperion', NULL, NULL),
(49, 'bigdata', NULL, NULL),
(50, 'search engine optimization', NULL, NULL),
(51, 'google analytics', NULL, NULL),
(52, 'search engine marketing', NULL, NULL),
(53, 'email marketing', NULL, NULL),
(54, 'web scraping', NULL, NULL),
(55, 'ux design', NULL, NULL),
(56, 'dreamweaver', NULL, NULL),
(57, 'typography', NULL, NULL),
(58, 'analytics', NULL, NULL),
(59, 'banking', NULL, NULL),
(60, 'bookkeeping', NULL, NULL),
(61, 'electrical', NULL, NULL),
(62, 'hardware', NULL, NULL),
(63, 'mathematical', NULL, NULL),
(64, 'mechanical', NULL, NULL),
(65, 'nursing', NULL, NULL),
(66, 'spreadsheets', NULL, NULL),
(67, 'testing', NULL, NULL),
(68, 'programming', NULL, NULL),
(69, 'operating system', NULL, NULL),
(70, 'operating systems', NULL, NULL),
(71, 'statistical analysis', NULL, NULL),
(72, 'margin calculation', NULL, NULL),
(73, ' interpretation', NULL, NULL),
(74, 'forecasting', NULL, NULL),
(75, 'billing', NULL, NULL),
(76, 'invoicing', NULL, NULL),
(77, 'taxation', NULL, NULL),
(78, 'financial modeling ', NULL, NULL),
(79, 'auditing', NULL, NULL),
(80, 'content creation', NULL, NULL),
(81, 'content creator', NULL, NULL),
(82, 'content management', NULL, NULL),
(83, 'sales', NULL, NULL),
(84, 'customer service', NULL, NULL),
(85, 'artificial intelligence', NULL, NULL),
(86, 'cloud ', NULL, NULL),
(87, 'computer applications', NULL, NULL),
(88, 'interpretation', NULL, NULL),
(89, 'web service design', NULL, NULL),
(90, 'website creation', NULL, NULL),
(91, 'website management', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `highlights`
--

CREATE TABLE `highlights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `hard_skills` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_skills` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `communication_language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objective` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `highlights`
--

INSERT INTO `highlights` (`id`, `user_id`, `hard_skills`, `soft_skills`, `communication_language`, `objective`, `created_at`, `updated_at`) VALUES
(1, 5, '[\"html\",\"Javascript\"]', '[\"team work\"]', 'English , Punjabi, hindi, french', 'JAVA Programmer with XYZ Organization', '2021-04-19 11:59:04', '2021-04-19 11:59:04');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_20_055322_create_user_details_table', 1),
(5, '2021_02_20_062645_create_education_table', 1),
(6, '2021_02_20_201633_create_experiences_table', 1),
(7, '2021_02_20_210144_create_skills_table', 1),
(8, '2021_02_21_001418_add_credibleintro_column_to_user_details_table', 1),
(9, '2021_02_28_203521_create_additional_experiences_table', 1),
(10, '2021_03_01_125403_create_testimonials_table', 1),
(11, '2021_03_08_221045_create_technical_experiences_table', 1),
(12, '2021_03_10_233744_create_highlights_table', 1),
(13, '2021_03_22_110045_about_us', 1),
(14, '2021_03_29_053833_add_status_column_to_testimonials', 1),
(15, '2021_03_30_204806_create_hard_skills_keywords_table', 1),
(16, '2021_03_30_205312_create_soft_skills_keywords_table', 1),
(17, '2021_03_30_211747_create_admin_address_details_table', 1),
(18, '2021_04_07_221437_laratrust_setup_tables', 1),
(19, '2021_04_11_173508_upload_template_files', 1),
(20, '2021_04_11_180008_admin_social_links_files', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2021-04-12 10:42:32', '2021-04-12 10:42:32'),
(2, 'users-read', 'Read Users', 'Read Users', '2021-04-12 10:42:33', '2021-04-12 10:42:33'),
(3, 'users-update', 'Update Users', 'Update Users', '2021-04-12 10:42:33', '2021-04-12 10:42:33'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2021-04-12 10:42:33', '2021-04-12 10:42:33'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2021-04-12 10:42:33', '2021-04-12 10:42:33'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2021-04-12 10:42:33', '2021-04-12 10:42:33'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2021-04-12 10:42:33', '2021-04-12 10:42:33'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2021-04-12 10:42:33', '2021-04-12 10:42:33'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2021-04-12 10:42:33', '2021-04-12 10:42:33'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2021-04-12 10:42:33', '2021-04-12 10:42:33'),
(11, 'module_1_name-create', 'Create Module_1_name', 'Create Module_1_name', '2021-04-12 10:42:34', '2021-04-12 10:42:34'),
(12, 'module_1_name-read', 'Read Module_1_name', 'Read Module_1_name', '2021-04-12 10:42:34', '2021-04-12 10:42:34'),
(13, 'module_1_name-update', 'Update Module_1_name', 'Update Module_1_name', '2021-04-12 10:42:34', '2021-04-12 10:42:34'),
(14, 'module_1_name-delete', 'Delete Module_1_name', 'Delete Module_1_name', '2021-04-12 10:42:34', '2021-04-12 10:42:34');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3),
(11, 4),
(12, 4),
(13, 4),
(14, 4);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2021-04-12 10:42:32', '2021-04-12 10:42:32'),
(2, 'administrator', 'Administrator', 'Administrator', '2021-04-12 10:42:34', '2021-04-12 10:42:34'),
(3, 'user', 'User', 'User', '2021-04-12 10:42:34', '2021-04-12 10:42:34'),
(4, 'role_name', 'Role Name', 'Role Name', '2021-04-12 10:42:34', '2021-04-12 10:42:34');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(2, 2, 'App\\Models\\User'),
(2, 3, 'App\\Models\\User'),
(3, 4, 'App\\Models\\User'),
(3, 5, 'App\\Models\\User'),
(3, 6, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `skill_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `user_id`, `skill_title`, `value`, `description`, `created_at`, `updated_at`) VALUES
(1, 5, 'Languages', 'Python; JavaScript; Java; C++; C; PHP', NULL, '2021-04-19 11:46:04', '2021-04-19 11:46:04'),
(2, 5, 'Front-End Frameworks', 'React.JS; Vue.JS; Bootstrap', NULL, '2021-04-19 11:47:15', '2021-04-19 11:47:15'),
(3, 5, 'Back-End Frameworks', 'Node.JS; Node-RED; Express; jQuery; Flask', NULL, '2021-04-19 11:47:39', '2021-04-19 11:47:39'),
(4, 5, '3D Graphics', 'VTK; VTK.js; ParaView; PyVista; OpenGL 3.0+; WebGL', NULL, '2021-04-19 11:48:09', '2021-04-19 11:48:09'),
(5, 5, 'Toolchain', 'Git; Bash Scripting; Docker; Docker-Compose; Webpack', NULL, '2021-04-19 11:50:39', '2021-04-19 11:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `soft_skills_keywords`
--

CREATE TABLE `soft_skills_keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `soft_skill_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soft_skills_keywords`
--

INSERT INTO `soft_skills_keywords` (`id`, `soft_skill_keyword`, `created_at`, `updated_at`) VALUES
(1, 'creativity', '2021-03-31 02:54:22', '2021-03-31 02:54:22'),
(2, 'teamwork', '2021-03-31 02:54:30', '2021-03-31 02:54:30'),
(3, 'interpersonal', '2021-03-31 02:54:39', '2021-03-31 02:54:39'),
(4, 'verbal', '2021-03-31 02:54:51', '2021-03-31 02:54:51'),
(5, 'listening', '2021-03-31 22:22:50', '2021-03-31 22:22:50'),
(6, 'information processing', '2021-03-31 22:23:08', '2021-03-31 22:23:08'),
(7, 'listens', '2021-03-31 22:23:21', '2021-03-31 22:23:21'),
(8, 'data entry', '2021-03-31 22:23:30', '2021-03-31 22:23:30'),
(9, 'entry', '2021-03-31 22:23:39', '2021-03-31 22:23:39'),
(10, 'filing', '2021-03-31 22:23:47', '2021-03-31 22:23:47'),
(11, 'telephone skills', '2021-03-31 22:23:59', '2021-03-31 22:23:59'),
(12, 'telephonic', '2021-03-31 22:24:09', '2021-03-31 22:24:09'),
(13, 'smart work', '2021-03-31 22:24:17', '2021-03-31 22:24:17'),
(14, 'works smarter', '2021-03-31 22:24:27', '2021-03-31 22:24:27'),
(15, 'meets deadline', '2021-03-31 22:24:37', '2021-03-31 22:24:37'),
(16, 'meets deadlines', '2021-03-31 22:24:50', '2021-03-31 22:24:50'),
(17, 'deadline meeting', '2021-03-31 22:25:08', '2021-03-31 22:25:08'),
(18, 'organizes tasks', '2021-03-31 22:25:22', '2021-03-31 22:25:22'),
(19, 'tasks organization ', '2021-03-31 22:25:43', '2021-03-31 22:25:43'),
(20, 'written', '2021-03-31 22:25:56', '2021-03-31 22:25:56'),
(21, 'verbal', '2021-03-31 22:26:37', '2021-03-31 22:26:37'),
(22, 'marketting', '2021-03-31 22:26:51', '2021-03-31 22:26:51'),
(23, 'works effectively', '2021-03-31 22:27:04', '2021-03-31 22:27:04'),
(24, 'effective working', '2021-03-31 22:27:13', '2021-03-31 22:27:13'),
(25, 'effective work', '2021-03-31 22:27:27', '2021-03-31 22:27:27'),
(26, 'networking', '2021-03-31 22:27:45', '2021-03-31 22:27:45'),
(27, 'results oriented', '2021-03-31 22:28:02', '2021-03-31 22:28:02'),
(28, 'problem solving', '2021-03-31 22:28:55', '2021-03-31 22:28:55'),
(29, 'organizational', '2021-03-31 22:29:11', '2021-03-31 22:29:11'),
(30, 'teamwork', '2021-03-31 22:29:22', '2021-03-31 22:29:22'),
(31, 'collaboration', '2021-03-31 22:29:49', '2021-03-31 22:29:49'),
(32, 'Active listening', NULL, NULL),
(33, 'interviewing', NULL, NULL),
(34, 'negotiation', NULL, NULL),
(35, 'persuasion', NULL, NULL),
(36, 'presentation', NULL, NULL),
(37, 'storytelling', NULL, NULL),
(38, 'diplomacy', NULL, NULL),
(39, 'empathy', NULL, NULL),
(40, 'humor', NULL, NULL),
(41, 'patience', NULL, NULL),
(42, 'patient', NULL, NULL),
(43, 'sensitivity', NULL, NULL),
(44, 'tolerance', NULL, NULL),
(45, 'analysis', NULL, NULL),
(46, 'artistic', NULL, NULL),
(47, 'brainstorming', NULL, NULL),
(48, 'designing', NULL, NULL),
(49, 'divergent thinking', NULL, NULL),
(50, 'experimenting', NULL, NULL),
(51, 'experimentation', NULL, NULL),
(52, 'imagination', NULL, NULL),
(54, 'innovative', NULL, NULL),
(55, 'inspiration', NULL, NULL),
(56, 'inspirational', NULL, NULL),
(57, 'lateral thinking', NULL, NULL),
(58, 'logical', NULL, NULL),
(59, 'observation', NULL, NULL),
(60, 'observative', NULL, NULL),
(61, 'questioning', NULL, NULL),
(62, 'troubleshooting', NULL, NULL),
(63, 'people management', NULL, NULL),
(64, 'work management', NULL, NULL),
(65, 'project management', NULL, NULL),
(66, 'team management', NULL, NULL),
(67, 'talent management', NULL, NULL),
(68, 'meeting management', NULL, NULL),
(69, 'agility', NULL, NULL),
(70, 'coaching', NULL, NULL),
(71, 'conflict resolution', NULL, NULL),
(72, 'dispute resolution', NULL, NULL),
(73, 'decision making', NULL, NULL),
(74, 'decision-maker', NULL, NULL),
(75, 'delegation', NULL, NULL),
(76, 'mentoring', NULL, NULL),
(77, 'sponsoring', NULL, NULL),
(78, 'planning', NULL, NULL),
(79, 'supervising', NULL, NULL),
(80, 'supervision', NULL, NULL),
(81, 'versatility', NULL, NULL),
(82, 'authenticity', NULL, NULL),
(83, 'encouraging', NULL, NULL),
(84, 'encouragement', NULL, NULL),
(85, 'generosity', NULL, NULL),
(86, 'generous', NULL, NULL),
(87, 'inspiring', NULL, NULL),
(88, 'inspirational', NULL, NULL),
(89, 'attentive', NULL, NULL),
(90, 'calm', NULL, NULL),
(91, 'competitive', NULL, NULL),
(92, 'competitiveness', NULL, NULL),
(93, 'curiosity', NULL, NULL),
(94, 'discipline', NULL, NULL),
(95, 'independence', NULL, NULL),
(96, 'independent', NULL, NULL),
(97, 'initiative', NULL, NULL),
(98, 'integrity', NULL, NULL),
(99, 'motivational', NULL, NULL),
(100, 'open-minded', NULL, NULL),
(102, 'professional', NULL, NULL),
(103, 'punctual', NULL, NULL),
(104, 'reliable', NULL, NULL),
(105, 'responsible', NULL, NULL),
(106, 'tolerance', NULL, NULL),
(107, 'tolerant', NULL, NULL),
(108, 'adaptive', NULL, NULL),
(109, 'adaptability', NULL, NULL),
(110, 'collaborative', NULL, NULL),
(111, 'cooperation', NULL, NULL),
(112, 'cooperative', NULL, NULL),
(113, 'influential', NULL, NULL),
(114, 'personality', NULL, NULL),
(115, 'respectful', NULL, NULL),
(116, 'respectfulness', NULL, NULL),
(117, 'coping', NULL, NULL),
(118, 'interview', NULL, NULL),
(119, 'planning', NULL, NULL),
(120, 'stress management', NULL, NULL),
(121, 'task planning', NULL, NULL),
(122, 'time management', NULL, NULL),
(123, 'conflict management', NULL, NULL),
(124, 'communication', NULL, NULL),
(125, 'willingness to learn', NULL, NULL),
(126, 'flexibility', NULL, NULL),
(127, 'deadline-oriented', NULL, NULL),
(128, 'work under pressure', NULL, NULL),
(129, 'detail oriented', NULL, NULL),
(130, 'optimistic', NULL, NULL),
(131, 'team skills', NULL, NULL),
(132, 'Attention to detail', NULL, NULL),
(133, 'workload', NULL, NULL),
(134, 'tight deadlines', NULL, NULL),
(135, 'team player', NULL, NULL),
(136, 'judgement', NULL, NULL),
(137, 'reliability', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `technical_experiences`
--

CREATE TABLE `technical_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `project_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `technology_stack` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technical_experiences`
--

INSERT INTO `technical_experiences` (`id`, `user_id`, `project_title`, `project_year`, `project_description`, `technology_stack`, `created_at`, `updated_at`) VALUES
(1, 5, 'E-Commerce Website', '2018', 'Built a direct manufacturer-to-consumer e-commerce platform. Redirect orders from e-commerce website to drop-shipping company using their API.', 'PHP, Apache, MySQL, AWS', '2021-04-19 11:39:37', '2021-04-19 11:39:37'),
(2, 5, 'Finance Tracking Web App', '2018', 'Developed a web-app to track QAC’s budget, a club totaling 50 members. Display responsive graph data to summarize financial prospects and history.', 'React.JS, React-Redux, Firebase', '2021-04-19 11:40:45', '2021-04-19 11:40:45'),
(3, 5, 'QAC Personal Website', '2018', 'Created a personal website for QAC. Integrated Google Calendar and Kitsu.IO API; Updated asynchronously to prevent overcalling.', 'Django', '2021-04-19 11:41:20', '2021-04-19 11:41:20'),
(4, 5, 'Predictive Metagame Algorithm', '2018', 'Designed a machine-learning algorithm to predict the potential viability of certain characters in a competitive metagame.', 'Python, SciKit-Learn, Pandas, NumPy, Matplotlib', '2021-04-19 11:42:02', '2021-04-19 11:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `jobtitle`, `view`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Inderjit Singh', 'Full time', 'good job..', 'approved', '1618250180.jpg', '2021-04-12 23:56:20', '2021-04-12 23:57:59'),
(4, 'Sukhvir Kaur', 'Amazon Worker', 'Very Good website', 'not approved', '1619044822.jpg', '2021-04-22 04:40:22', '2021-04-22 04:40:22');

-- --------------------------------------------------------

--
-- Table structure for table `upload_template_files`
--

CREATE TABLE `upload_template_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filenames` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upload_template_files`
--

INSERT INTO `upload_template_files` (`id`, `filenames`, `created_at`, `updated_at`) VALUES
(2, 'Resume Template 1.jpg', '2021-04-19 11:25:07', '2021-04-19 11:25:07'),
(3, 'Resume Template 2.jpg', '2021-04-19 11:25:18', '2021-04-19 11:25:18'),
(4, 'Commerce-resume.docx', '2021-04-19 11:26:01', '2021-04-19 11:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'destinationceo12@gmail.com', NULL, '$2y$10$dZ/qZAfBbjJBBuGOUqrOe.e.w169OR86Z9ni3hMKvBAfeQjAV41Fy', 'iV1jA4QJTWtnCT3DtsKVf5FCu9tTnoKS9Qb1PoGAcgEpOEM1lLFmVX5sOR3K', '2021-04-12 10:43:04', '2021-04-12 10:43:04'),
(4, 'Inderjit Singh', 'saini34inder@gmail.com', NULL, '$2y$10$AZdHYx9qzFoXO0ysETj.HuPlZD9IijCVelVns5ojoQgWmERf.Yds6', NULL, '2021-04-12 11:36:40', '2021-04-12 11:36:40'),
(5, 'John Doe', 'john@gmail.com', NULL, '$2y$10$/rL/Ds8JInwQIpNASsKo/eSHgZdrFc62J5fT.PeIA1ryERr6rF.16', NULL, '2021-04-19 11:28:39', '2021-04-19 11:28:39'),
(6, 'Inderjit Singh', 'inder@gmail.com', NULL, '$2y$10$Dk.36.OpQZ7srFUXd12/kuWecuxTNZZlG4ia9jJKyevpw9c770euS', NULL, '2021-04-22 04:35:09', '2021-04-22 04:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `credibleintro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `firstname`, `lastname`, `country`, `city`, `state`, `zipcode`, `email`, `phone`, `address`, `created_at`, `updated_at`, `credibleintro`, `linkedin`, `github`) VALUES
(1, 4, 'Inderjit', 'Singh', 'Canada', 'Brampton', 'Ontario', 'L6R 0E3', 'saini34inder@gmail.com', '4372418668', '3 Moldovan Drive', '2021-04-12 23:54:13', '2021-04-12 23:54:13', 'inder', NULL, NULL),
(2, 5, 'John', 'Doe', 'Canada', 'Toronto', 'ON', 'M5A 3JL7', 'john@gmail.com', '4372418668', '250 Humber College Blvd', '2021-04-19 11:32:59', '2021-04-19 11:32:59', 'this is demo introduction', 'https://www.linkedin.com/in/inderjit-singh-s/', 'https://github.com/silverbowen/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional_experiences`
--
ALTER TABLE `additional_experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `additional_experiences_user_id_foreign` (`user_id`);

--
-- Indexes for table `admin_about_us_files`
--
ALTER TABLE `admin_about_us_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_address_details`
--
ALTER TABLE `admin_address_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_social_links_files`
--
ALTER TABLE `admin_social_links_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `education_user_id_foreign` (`user_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experiences_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hard_skills_keywords`
--
ALTER TABLE `hard_skills_keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `highlights`
--
ALTER TABLE `highlights`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skills_user_id_foreign` (`user_id`);

--
-- Indexes for table `soft_skills_keywords`
--
ALTER TABLE `soft_skills_keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technical_experiences`
--
ALTER TABLE `technical_experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `technical_experiences_user_id_foreign` (`user_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_template_files`
--
ALTER TABLE `upload_template_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_details_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additional_experiences`
--
ALTER TABLE `additional_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_about_us_files`
--
ALTER TABLE `admin_about_us_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_address_details`
--
ALTER TABLE `admin_address_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `admin_social_links_files`
--
ALTER TABLE `admin_social_links_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hard_skills_keywords`
--
ALTER TABLE `hard_skills_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `highlights`
--
ALTER TABLE `highlights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `soft_skills_keywords`
--
ALTER TABLE `soft_skills_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `technical_experiences`
--
ALTER TABLE `technical_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `upload_template_files`
--
ALTER TABLE `upload_template_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `additional_experiences`
--
ALTER TABLE `additional_experiences`
  ADD CONSTRAINT `additional_experiences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `technical_experiences`
--
ALTER TABLE `technical_experiences`
  ADD CONSTRAINT `technical_experiences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
