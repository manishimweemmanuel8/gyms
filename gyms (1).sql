-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2020 at 07:49 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gyms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `controller_id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL,
  `membership_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `customer_id`, `controller_id`, `sport_id`, `membership_id`, `category_id`, `payment_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(54, 17, 1, 6, 21, 2, 43, '2020-01-03', '2020-01-03 22:40:16', NULL),
(55, 1, 1, 1, 30, 3, 38, '2020-01-03', '2020-01-03 22:41:07', NULL),
(56, 14, 1, 3, 12, 3, 40, '2020-01-03', '2020-01-03 22:43:39', NULL),
(57, 21, 1, 2, 5, 3, 42, '2020-01-03', '2020-01-03 22:44:27', NULL),
(58, 1, 1, 2, 6, 3, 39, '2020-01-04', '2020-01-05 01:25:33', NULL),
(59, 14, 1, 3, 12, 3, 40, '2020-01-04', '2020-01-05 01:25:54', NULL),
(60, 17, 1, 6, 21, 2, 43, '2020-01-04', '2020-01-05 01:26:10', NULL),
(61, 9, 1, 6, 21, 2, 44, '2020-01-04', '2020-01-05 01:26:19', NULL),
(62, 14, 1, 1, 30, 3, 45, '2020-01-04', '2020-01-05 01:26:36', NULL),
(63, 18, 1, 3, 32, 3, 46, '2020-01-04', '2020-01-05 01:26:47', NULL),
(64, 22, 1, 1, 1, 3, 47, '2020-01-04', '2020-01-05 04:25:16', NULL),
(65, 23, 1, 6, 21, 2, 48, '2020-01-04', '2020-01-05 06:46:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'kid', NULL, NULL, NULL),
(2, 'student', NULL, NULL, NULL),
(3, 'adult', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `controllers`
--

CREATE TABLE `controllers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `controllers`
--

INSERT INTO `controllers` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kanana', 'kanana@gmail.com', '2019-12-24 14:18:55', 'kanana', 'kanana', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitie_id` int(11) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity_representative` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstName`, `lastName`, `phone`, `email`, `entitie_id`, `dob`, `gender`, `entity_representative`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Manishimwe', 'Emmanuel', '0781194126', 'manishimweemmanuel8@gmail.com', 1, '1994-06-28', 'Male', 0, '2019-12-15 01:56:21', '2020-01-05 06:33:14', NULL),
(2, 'IRAKOZE', 'Blaise', '0788121298', 'irakozeblaise@gmial.com', 7, '1994-12-29', 'Male', 0, '2019-12-15 01:59:57', '2019-12-15 02:01:42', '2019-12-15 02:01:42'),
(5, 'KAMANA', 'eric', '0934828374', 'erci@gmial.com', 7, '2019-12-16', 'Male', 0, '2019-12-16 13:10:06', '2019-12-16 13:10:20', '2019-12-16 13:10:20'),
(9, 'irera', 'Dieudonne', '094892783', 'ireradodos@gmail.com', 7, '2019-12-13', 'Male', 0, '2019-12-23 11:24:40', '2019-12-23 11:24:40', NULL),
(11, 'kanakuze', 'jeanne', '9887258234', 'kanakuze@gmail.com', 7, '2019-12-27', 'Female', 0, '2019-12-23 11:57:36', '2019-12-23 11:57:36', NULL),
(14, 'uwurukundo', 'nadine', '0788486409', 'uwurukundona02@gmail.com', 8, '2019-12-23', 'Female', 0, '2019-12-23 19:27:55', '2019-12-23 19:27:55', NULL),
(15, 'uwera', 'aline', '0788376293', 'uweraaline02@gmail.com', 9, '2019-12-26', 'Female', 0, '2019-12-25 20:16:28', '2019-12-25 20:16:28', NULL),
(16, 'rwabukanga', 'jado', '078231231', 'jado@gmail.com', 7, '2019-12-27', 'Male', 0, '2019-12-26 06:21:34', '2019-12-26 06:21:34', NULL),
(17, 'haguma', 'paul', '07894534243', 'hagumapaul@gmail.com', 9, '2019-12-26', 'Male', 0, '2019-12-26 06:22:07', '2019-12-26 06:22:07', NULL),
(18, 'murwanashyaka', 'paul', '078231231231', 'pmurwana@gmail.com', 9, '2019-12-21', 'Male', 0, '2019-12-26 06:22:48', '2019-12-26 06:22:48', NULL),
(19, 'ineza', 'Brighton', '0781194127', 'inezabrighton@gmail.com', 7, '2019-12-27', 'Male', 0, '2019-12-26 06:23:49', '2020-01-03 04:14:13', '2020-01-03 04:14:13'),
(20, 'ineza', 'brigthon', '0788486409', 'ineza.brighton@gmail.com', 7, '2016-06-28', 'Male', 0, '2020-01-03 04:19:17', '2020-01-03 04:19:17', NULL),
(21, 'kamli', 'john', '0788191238', 'kamali@gmail.com', 1, '1990-09-12', 'Male', 0, '2020-01-03 21:36:38', '2020-01-03 21:36:38', NULL),
(22, 'murerabana', 'esperance', '0788486400', 'esperance@gmial.com', 7, '2020-01-04', 'Female', 0, '2020-01-05 04:01:50', '2020-01-05 04:01:50', NULL),
(23, 'ruhamyambuga', 'cedrick', '0788486406', 'cedrick@gmail.com', 1, '2020-01-22', 'Male', 0, '2020-01-05 06:18:27', '2020-01-05 06:18:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 10, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(58, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(59, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(60, 10, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 5),
(61, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(62, 11, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(63, 11, 'organisation', 'text', 'Organisation', 0, 1, 1, 1, 1, 1, '{}', 3),
(64, 11, 'customer_id', 'text', 'Customer Id', 0, 1, 1, 1, 1, 1, '{}', 4),
(65, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(66, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(67, 11, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 7);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2019-12-11 15:59:01', '2019-12-11 15:59:01'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2019-12-11 15:59:02', '2019-12-11 15:59:02'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2019-12-11 15:59:02', '2019-12-11 15:59:02'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2019-12-11 15:59:34', '2019-12-11 15:59:34'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2019-12-11 15:59:37', '2019-12-11 15:59:37'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2019-12-11 15:59:41', '2019-12-11 15:59:41'),
(10, 'sports', 'sports', 'Sport', 'Sports', NULL, 'App\\Sport', NULL, 'App\\Http\\Controllers\\SportController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-12-12 03:17:21', '2019-12-12 03:18:12'),
(11, 'entities', 'entities', 'Entity', 'Entities', NULL, 'App\\Entity', NULL, 'App\\Http\\Controllers\\EntitiesController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-12-12 03:28:18', '2019-12-12 03:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `entities`
--

CREATE TABLE `entities` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organisation` tinyint(4) DEFAULT 0,
  `customer_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entities`
--

INSERT INTO `entities` (`id`, `name`, `organisation`, `customer_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'self', 0, 12, NULL, NULL, NULL),
(7, 'MINECOFIN', 1, 1, '2019-12-12 12:35:57', '2019-12-12 12:35:57', NULL),
(8, 'RWANDAIR', 0, 1, NULL, NULL, NULL),
(9, 'akagera', 0, 5, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `duration` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `name`, `duration`, `sport_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Session', 1, 1, NULL, NULL, NULL),
(2, 'monthly', 28, 1, NULL, NULL, NULL),
(3, 'yearly', 365, 1, NULL, NULL, NULL),
(4, 'trimester', 90, 1, NULL, NULL, NULL),
(5, 'Session', 1, 2, NULL, NULL, NULL),
(6, 'Monthly', 28, 2, NULL, NULL, NULL),
(7, 'Yearly', 365, 2, NULL, NULL, NULL),
(8, 'Trimester', 90, 2, NULL, NULL, NULL),
(9, 'Session', 1, 3, NULL, NULL, NULL),
(10, 'Monthly', 28, 3, NULL, NULL, NULL),
(11, 'Yearly', 365, 3, NULL, NULL, NULL),
(12, 'Trimester', 90, 3, NULL, NULL, NULL),
(13, 'Session', 1, 4, NULL, NULL, NULL),
(14, 'Monthly', 28, 4, NULL, NULL, NULL),
(15, 'Yearly', 365, 4, NULL, NULL, NULL),
(16, 'Trimester', 90, 4, NULL, NULL, NULL),
(17, 'Session', 1, 5, NULL, NULL, NULL),
(18, 'Monthly', 28, 5, NULL, NULL, NULL),
(19, 'Yearly', 365, 5, NULL, NULL, NULL),
(20, 'Trimester', 90, 5, NULL, NULL, NULL),
(21, 'Session', 1, 6, NULL, NULL, NULL),
(22, 'Session', 1, 7, NULL, NULL, NULL),
(23, 'Session', 1, 8, NULL, NULL, NULL),
(24, 'Monthly', 28, 8, NULL, NULL, NULL),
(25, 'Session', 1, 9, NULL, NULL, NULL),
(26, 'Monthly', 28, 9, NULL, NULL, NULL),
(27, 'Session', 1, 10, NULL, NULL, NULL),
(28, 'Session', 1, 11, NULL, NULL, NULL),
(29, 'Monthly', 28, 11, NULL, NULL, NULL),
(30, 'tickets', 15, 1, NULL, NULL, NULL),
(31, 'tickets', 15, 2, NULL, NULL, NULL),
(32, 'tickets', 15, 3, NULL, NULL, NULL),
(33, 'tickets', 15, 4, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-12-11 15:59:04', '2019-12-11 15:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2019-12-11 15:59:04', '2019-12-11 15:59:04', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2019-12-11 15:59:04', '2019-12-11 15:59:04', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2019-12-11 15:59:05', '2019-12-11 15:59:05', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2019-12-11 15:59:05', '2019-12-11 15:59:05', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2019-12-11 15:59:05', '2019-12-11 15:59:05', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2019-12-11 15:59:05', '2019-12-11 15:59:05', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2019-12-11 15:59:05', '2019-12-11 15:59:05', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2019-12-11 15:59:05', '2019-12-11 15:59:05', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2019-12-11 15:59:05', '2019-12-11 15:59:05', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2019-12-11 15:59:05', '2019-12-11 15:59:05', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 8, '2019-12-11 15:59:35', '2019-12-11 15:59:35', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 6, '2019-12-11 15:59:40', '2019-12-11 15:59:40', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 7, '2019-12-11 15:59:44', '2019-12-11 15:59:44', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 13, '2019-12-11 15:59:53', '2019-12-11 15:59:53', 'voyager.hooks', NULL),
(15, 1, 'Sports', '', '_self', NULL, NULL, NULL, 15, '2019-12-12 03:17:21', '2019-12-12 03:17:21', 'voyager.sports.index', NULL),
(16, 1, 'Entities', '', '_self', NULL, NULL, NULL, 16, '2019-12-12 03:28:18', '2019-12-12 03:28:18', 'voyager.entities.index', NULL);

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2016_01_01_000000_create_pages_table', 2),
(24, '2016_01_01_000000_create_posts_table', 2),
(25, '2016_02_15_204651_create_categories_table', 2),
(26, '2017_04_11_000000_alter_post_nullable_fields_table', 2),
(27, '2019_12_24_173026_create_countries_table', 3),
(28, '2019_12_24_173116_create_states_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2019-12-11 15:59:44', '2019-12-11 15:59:44');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `receptionist_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL,
  `membership_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `duration` int(11) DEFAULT NULL,
  `expiry_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `customer_id`, `receptionist_id`, `categorie_id`, `sport_id`, `membership_id`, `amount`, `duration`, `expiry_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(38, 1, 1, 3, 1, 30, 0, 11, '2020-01-09', '2020-01-03 05:27:39', '2020-01-03 05:27:39', NULL),
(39, 1, 1, 3, 2, 6, 0, 24, '2020-01-31', '2020-01-03 12:54:42', '2020-01-03 12:54:42', NULL),
(40, 14, 1, 3, 3, 12, 0, 84, '2020-03-31', '2020-01-03 12:55:46', '2020-01-03 12:55:46', NULL),
(41, 9, 1, 2, 7, 22, 0, -2, '2020-01-03', '2020-01-03 12:56:21', '2020-01-03 12:56:21', NULL),
(42, 21, 1, 3, 2, 5, 0, 0, '2020-01-03', '2020-01-03 21:41:16', '2020-01-03 21:41:16', NULL),
(43, 17, 1, 2, 6, 21, 0, 0, '2020-01-09', '2020-01-03 22:28:10', '2020-01-03 22:28:10', NULL),
(44, 9, 1, 2, 6, 21, 0, 0, '2020-01-04', '2020-01-05 01:22:08', '2020-01-05 01:22:08', NULL),
(45, 14, 2, 3, 1, 30, 0, 14, '2020-01-31', '2020-01-05 01:22:46', '2020-01-05 01:22:46', NULL),
(46, 18, 2, 3, 3, 32, 0, 14, '2020-01-15', '2020-01-05 01:23:58', '2020-01-05 01:23:58', NULL),
(47, 22, 2, 3, 1, 1, 0, 0, '2020-01-04', '2020-01-05 04:20:07', '2020-01-05 04:20:07', NULL),
(48, 23, 2, 2, 6, 21, 0, 0, '2020-01-04', '2020-01-05 06:46:09', '2020-01-05 06:46:09', NULL),
(49, 23, 2, 3, 8, 24, 0, 28, '2020-01-31', '2020-01-05 17:15:13', '2020-01-05 17:15:13', NULL),
(50, 16, 2, 2, 6, 21, 2000, 1, '2020-01-05', '2020-01-05 21:41:00', '2020-01-05 21:41:00', NULL),
(51, 20, 2, 1, 5, 18, 10000, 28, '2020-02-05', '2020-01-05 21:50:11', '2020-01-05 21:50:11', NULL),
(52, 22, 2, 3, 8, 24, 112000, 28, '2020-02-05', '2020-01-05 21:53:42', '2020-01-05 21:53:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-12-11 15:59:06', '2019-12-11 15:59:06'),
(2, 'browse_bread', NULL, '2019-12-11 15:59:06', '2019-12-11 15:59:06'),
(3, 'browse_database', NULL, '2019-12-11 15:59:06', '2019-12-11 15:59:06'),
(4, 'browse_media', NULL, '2019-12-11 15:59:06', '2019-12-11 15:59:06'),
(5, 'browse_compass', NULL, '2019-12-11 15:59:07', '2019-12-11 15:59:07'),
(6, 'browse_menus', 'menus', '2019-12-11 15:59:07', '2019-12-11 15:59:07'),
(7, 'read_menus', 'menus', '2019-12-11 15:59:07', '2019-12-11 15:59:07'),
(8, 'edit_menus', 'menus', '2019-12-11 15:59:07', '2019-12-11 15:59:07'),
(9, 'add_menus', 'menus', '2019-12-11 15:59:07', '2019-12-11 15:59:07'),
(10, 'delete_menus', 'menus', '2019-12-11 15:59:07', '2019-12-11 15:59:07'),
(11, 'browse_roles', 'roles', '2019-12-11 15:59:07', '2019-12-11 15:59:07'),
(12, 'read_roles', 'roles', '2019-12-11 15:59:07', '2019-12-11 15:59:07'),
(13, 'edit_roles', 'roles', '2019-12-11 15:59:07', '2019-12-11 15:59:07'),
(14, 'add_roles', 'roles', '2019-12-11 15:59:07', '2019-12-11 15:59:07'),
(15, 'delete_roles', 'roles', '2019-12-11 15:59:08', '2019-12-11 15:59:08'),
(16, 'browse_users', 'users', '2019-12-11 15:59:08', '2019-12-11 15:59:08'),
(17, 'read_users', 'users', '2019-12-11 15:59:08', '2019-12-11 15:59:08'),
(18, 'edit_users', 'users', '2019-12-11 15:59:08', '2019-12-11 15:59:08'),
(19, 'add_users', 'users', '2019-12-11 15:59:08', '2019-12-11 15:59:08'),
(20, 'delete_users', 'users', '2019-12-11 15:59:08', '2019-12-11 15:59:08'),
(21, 'browse_settings', 'settings', '2019-12-11 15:59:08', '2019-12-11 15:59:08'),
(22, 'read_settings', 'settings', '2019-12-11 15:59:08', '2019-12-11 15:59:08'),
(23, 'edit_settings', 'settings', '2019-12-11 15:59:08', '2019-12-11 15:59:08'),
(24, 'add_settings', 'settings', '2019-12-11 15:59:08', '2019-12-11 15:59:08'),
(25, 'delete_settings', 'settings', '2019-12-11 15:59:09', '2019-12-11 15:59:09'),
(26, 'browse_categories', 'categories', '2019-12-11 15:59:35', '2019-12-11 15:59:35'),
(27, 'read_categories', 'categories', '2019-12-11 15:59:35', '2019-12-11 15:59:35'),
(28, 'edit_categories', 'categories', '2019-12-11 15:59:35', '2019-12-11 15:59:35'),
(29, 'add_categories', 'categories', '2019-12-11 15:59:35', '2019-12-11 15:59:35'),
(30, 'delete_categories', 'categories', '2019-12-11 15:59:36', '2019-12-11 15:59:36'),
(31, 'browse_posts', 'posts', '2019-12-11 15:59:40', '2019-12-11 15:59:40'),
(32, 'read_posts', 'posts', '2019-12-11 15:59:40', '2019-12-11 15:59:40'),
(33, 'edit_posts', 'posts', '2019-12-11 15:59:40', '2019-12-11 15:59:40'),
(34, 'add_posts', 'posts', '2019-12-11 15:59:40', '2019-12-11 15:59:40'),
(35, 'delete_posts', 'posts', '2019-12-11 15:59:40', '2019-12-11 15:59:40'),
(36, 'browse_pages', 'pages', '2019-12-11 15:59:44', '2019-12-11 15:59:44'),
(37, 'read_pages', 'pages', '2019-12-11 15:59:44', '2019-12-11 15:59:44'),
(38, 'edit_pages', 'pages', '2019-12-11 15:59:44', '2019-12-11 15:59:44'),
(39, 'add_pages', 'pages', '2019-12-11 15:59:44', '2019-12-11 15:59:44'),
(40, 'delete_pages', 'pages', '2019-12-11 15:59:44', '2019-12-11 15:59:44'),
(41, 'browse_hooks', NULL, '2019-12-11 15:59:53', '2019-12-11 15:59:53'),
(42, 'browse_sports', 'sports', '2019-12-12 03:17:21', '2019-12-12 03:17:21'),
(43, 'read_sports', 'sports', '2019-12-12 03:17:21', '2019-12-12 03:17:21'),
(44, 'edit_sports', 'sports', '2019-12-12 03:17:21', '2019-12-12 03:17:21'),
(45, 'add_sports', 'sports', '2019-12-12 03:17:21', '2019-12-12 03:17:21'),
(46, 'delete_sports', 'sports', '2019-12-12 03:17:21', '2019-12-12 03:17:21'),
(47, 'browse_entities', 'entities', '2019-12-12 03:28:18', '2019-12-12 03:28:18'),
(48, 'read_entities', 'entities', '2019-12-12 03:28:18', '2019-12-12 03:28:18'),
(49, 'edit_entities', 'entities', '2019-12-12 03:28:18', '2019-12-12 03:28:18'),
(50, 'add_entities', 'entities', '2019-12-12 03:28:18', '2019-12-12 03:28:18'),
(51, 'delete_entities', 'entities', '2019-12-12 03:28:18', '2019-12-12 03:28:18');

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
(1, 3),
(2, 1),
(2, 3),
(3, 1),
(3, 3),
(4, 1),
(4, 3),
(5, 1),
(5, 3),
(6, 1),
(6, 2),
(6, 3),
(7, 1),
(7, 2),
(7, 3),
(8, 1),
(8, 2),
(8, 3),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3),
(11, 1),
(11, 3),
(12, 1),
(12, 3),
(13, 1),
(13, 3),
(14, 1),
(14, 3),
(15, 1),
(15, 3),
(16, 1),
(16, 3),
(17, 1),
(17, 3),
(18, 1),
(18, 3),
(19, 1),
(19, 3),
(20, 1),
(20, 3),
(21, 1),
(21, 3),
(22, 1),
(22, 3),
(23, 1),
(23, 3),
(24, 1),
(24, 3),
(25, 1),
(25, 3),
(26, 1),
(26, 3),
(27, 1),
(27, 3),
(28, 1),
(28, 3),
(29, 1),
(29, 3),
(30, 1),
(30, 3),
(31, 1),
(31, 3),
(32, 1),
(32, 3),
(33, 1),
(33, 3),
(34, 1),
(34, 3),
(35, 1),
(35, 3),
(36, 1),
(36, 3),
(37, 1),
(37, 3),
(38, 1),
(38, 3),
(39, 1),
(39, 3),
(40, 1),
(40, 3),
(41, 3),
(42, 1),
(42, 3),
(43, 1),
(43, 3),
(44, 1),
(44, 3),
(45, 1),
(45, 3),
(46, 1),
(46, 3),
(47, 1),
(47, 3),
(48, 1),
(48, 3),
(49, 1),
(49, 3),
(50, 1),
(50, 3),
(51, 1),
(51, 3);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-12-11 15:59:41', '2019-12-11 15:59:41'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-12-11 15:59:41', '2019-12-11 15:59:41'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-12-11 15:59:41', '2019-12-11 15:59:41'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-12-11 15:59:41', '2019-12-11 15:59:41');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sport_id` int(11) NOT NULL,
  `membership_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `sport_id`, `membership_id`, `amount`, `created_at`, `updated_at`, `deleted_at`, `category_id`) VALUES
(13, 2, 5, 2500, NULL, NULL, NULL, 3),
(14, 6, 21, 2000, NULL, NULL, NULL, 2),
(15, 2, 6, 70000, NULL, NULL, NULL, 3),
(16, 2, 7, 730000, NULL, NULL, NULL, 3),
(17, 4, 13, 5000, NULL, NULL, NULL, 3),
(18, 1, 1, 3000, NULL, NULL, NULL, 3),
(19, 7, 22, 2000, NULL, NULL, NULL, 2),
(20, 5, 17, 1500, NULL, NULL, NULL, 1),
(21, 1, 2, 84000, NULL, NULL, NULL, 3),
(22, 5, 18, 10000, NULL, NULL, NULL, 1),
(23, 1, 3, 1095000, NULL, NULL, NULL, 3),
(24, 3, 9, 3000, NULL, NULL, NULL, 3),
(25, 3, 10, 84000, NULL, NULL, NULL, 3),
(26, 3, 11, 1095000, NULL, NULL, NULL, 3),
(27, 8, 23, 4000, NULL, NULL, NULL, 3),
(28, 8, 24, 112000, NULL, NULL, NULL, 3),
(29, 9, 25, 4000, NULL, NULL, NULL, 3),
(30, 9, 26, 112000, NULL, NULL, NULL, 3),
(31, 10, 27, 6000, NULL, NULL, NULL, 3),
(32, 11, 28, 4000, NULL, NULL, NULL, 3),
(33, 11, 29, 112000, NULL, NULL, NULL, 3),
(34, 2, 31, 2000, NULL, NULL, NULL, 3),
(35, 1, 30, 3000, NULL, NULL, NULL, 3),
(36, 3, 32, 3000, NULL, NULL, NULL, 3),
(37, 4, 33, 5000, NULL, NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `receptionists`
--

CREATE TABLE `receptionists` (
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
-- Dumping data for table `receptionists`
--

INSERT INTO `receptionists` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'manishimwe', 'manishimweemmanuel8@gmail.com', NULL, '$2y$10$WT08Qun9cOreU/0pNZsqmeIs7D/HdI04d1/fN6EnrL1AF7tkkVuKO', NULL, '2019-12-15 01:58:20', '2019-12-15 01:58:20'),
(2, 'receptionist', 'receptionist@gmail.com', NULL, '$2y$10$EMY7O16Yd0TLkcE4LIeejuT.cE1fHmErR1EEDk0EmakXZhg8mUFs2', NULL, '2020-01-05 00:58:23', '2020-01-05 00:58:23');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-12-11 15:59:05', '2019-12-11 15:59:05'),
(2, 'user', 'Normal User', '2019-12-11 15:59:05', '2019-12-11 15:59:05'),
(3, 'receptionist', 'Receptionist', '2019-12-12 03:43:35', '2019-12-12 03:43:35'),
(4, 'controller', 'Controller', '2019-12-12 03:59:42', '2019-12-12 03:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings/December2019/pXeOuFtjkxwLBAntGAcK.png', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 4, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Gym', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 5, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `name`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pool', 3, '2019-12-12 03:19:42', '2019-12-12 03:19:42', NULL),
(2, 'GYM', 3, NULL, NULL, NULL),
(3, 'sauna', 3, NULL, NULL, NULL),
(4, 'massage', 3, NULL, NULL, NULL),
(5, 'Pool', 1, NULL, NULL, NULL),
(6, 'GYM', 2, NULL, NULL, NULL),
(7, 'Pool', 2, NULL, NULL, NULL),
(8, 'GYM & POOL', 3, NULL, NULL, NULL),
(9, 'GYM & SAUNA', 3, NULL, NULL, NULL),
(10, 'SAUNA & MASSAGE', 3, NULL, NULL, NULL),
(11, 'SAUNA & POOL', 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2019-12-11 15:59:44', '2019-12-11 15:59:44'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2019-12-11 15:59:45', '2019-12-11 15:59:45'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2019-12-11 15:59:45', '2019-12-11 15:59:45'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2019-12-11 15:59:45', '2019-12-11 15:59:45'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2019-12-11 15:59:45', '2019-12-11 15:59:45'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2019-12-11 15:59:45', '2019-12-11 15:59:45'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2019-12-11 15:59:46', '2019-12-11 15:59:46'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2019-12-11 15:59:46', '2019-12-11 15:59:46'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2019-12-11 15:59:46', '2019-12-11 15:59:46'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2019-12-11 15:59:46', '2019-12-11 15:59:46'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2019-12-11 15:59:46', '2019-12-11 15:59:46'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2019-12-11 15:59:46', '2019-12-11 15:59:46'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2019-12-11 15:59:46', '2019-12-11 15:59:46'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2019-12-11 15:59:46', '2019-12-11 15:59:46'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2019-12-11 15:59:46', '2019-12-11 15:59:46'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2019-12-11 15:59:47', '2019-12-11 15:59:47'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2019-12-11 15:59:47', '2019-12-11 15:59:47'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2019-12-11 15:59:47', '2019-12-11 15:59:47'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2019-12-11 15:59:47', '2019-12-11 15:59:47'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2019-12-11 15:59:47', '2019-12-11 15:59:47'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2019-12-11 15:59:47', '2019-12-11 15:59:47'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2019-12-11 15:59:47', '2019-12-11 15:59:47'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2019-12-11 15:59:47', '2019-12-11 15:59:47'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2019-12-11 15:59:47', '2019-12-11 15:59:47'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2019-12-11 15:59:47', '2019-12-11 15:59:47'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2019-12-11 15:59:48', '2019-12-11 15:59:48'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2019-12-11 15:59:48', '2019-12-11 15:59:48'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2019-12-11 15:59:48', '2019-12-11 15:59:48'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2019-12-11 15:59:48', '2019-12-11 15:59:48'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2019-12-11 15:59:49', '2019-12-11 15:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$D1yUrdJZvow3ra6ruNHOu.Rj7iTFEI1rF72jzhipblo5y12uOa3ZO', 'rAfADGSDwve785HBsG5rWdgyQBImsvZVzfTEzMovzn8Rtz2HvKJ9zLdlKZJm', NULL, '2019-12-11 15:59:37', '2019-12-11 15:59:37'),
(2, 1, 'Blaise', 'Blaise@gmail.com', 'users/December2019/9iYKNEE1ldeBHdVn4WG2.JPG', NULL, '$2y$10$qLf65YNr3DJ81B9t43bnruM191eglMb/bKWYL0alCSIZU.QQ78USC', NULL, '{\"locale\":\"en\"}', '2019-12-12 03:47:44', '2019-12-12 03:48:36'),
(3, 3, 'Emmy', 'Emmy@gmail.com', 'users\\December2019\\Nuu6mowWRI1dpcfCyUsj.jpg', NULL, '$2y$10$WT08Qun9cOreU/0pNZsqmeIs7D/HdI04d1/fN6EnrL1AF7tkkVuKO', NULL, '{\"locale\":\"en\"}', '2019-12-12 04:02:04', '2019-12-17 14:08:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(2, 1),
(3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `controllers`
--
ALTER TABLE `controllers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`,`email`);

--
-- Indexes for table `entities`
--
ALTER TABLE `entities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receptionists`
--
ALTER TABLE `receptionists`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `controllers`
--
ALTER TABLE `controllers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `entities`
--
ALTER TABLE `entities`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `receptionists`
--
ALTER TABLE `receptionists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
