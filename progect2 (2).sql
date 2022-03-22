-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 07:07 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `progect2`
--

-- --------------------------------------------------------

--
-- Table structure for table `abdominal__circumference3s`
--

CREATE TABLE `abdominal__circumference3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `abdominal__circumferences`
--

CREATE TABLE `abdominal__circumferences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Ocean_Poison` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Client_id` bigint(20) UNSIGNED NOT NULL,
  `Categore_id` bigint(20) UNSIGNED NOT NULL,
  `Cause_Harm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Does_No_Harm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abdominal__circumferences`
--

INSERT INTO `abdominal__circumferences` (`id`, `Ocean_Poison`, `Client_id`, `Categore_id`, `Cause_Harm`, `Does_No_Harm`, `Notes`, `created_at`, `updated_at`) VALUES
(1, 'd', 1, 1, 'd', 'd', NULL, '2022-03-15 21:27:16', '2022-03-15 21:27:16');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'children', '2022-03-15 17:48:06', '2022-03-15 17:48:06'),
(2, 'Young', '2022-03-15 17:48:07', '2022-03-15 17:48:07'),
(3, 'Elderly', '2022-03-15 17:48:08', '2022-03-15 17:48:08'),
(4, 'Supervisor', '2022-03-15 17:48:10', '2022-03-15 17:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `National_ID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `The_Test_Result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `Name`, `National_ID`, `Status`, `The_Test_Result`, `categorie_id`, `created_at`, `updated_at`) VALUES
(1, 'ahmed', '01065942071', 'مفعل', NULL, 4, '2022-03-15 20:58:27', '2022-03-15 20:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fat__percentage2s`
--

CREATE TABLE `fat__percentage2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `The_Ratio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Client_number` bigint(20) UNSIGNED NOT NULL,
  `Fat_Type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `You_Need_Medical_Advice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `You_Do_Not_Need_Medical_Advice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fat__percentages`
--

CREATE TABLE `fat__percentages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `The_Ratio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Client_number` bigint(20) UNSIGNED NOT NULL,
  `Categore_id` bigint(20) UNSIGNED NOT NULL,
  `Fat_Type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `You_Need_Medical_Advice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `You_Do_Not_Need_Medical_Advice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fat__percentages`
--

INSERT INTO `fat__percentages` (`id`, `The_Ratio`, `Client_number`, `Categore_id`, `Fat_Type`, `You_Need_Medical_Advice`, `You_Do_Not_Need_Medical_Advice`, `Notes`, `created_at`, `updated_at`) VALUES
(1, 'd', 1, 1, 'd', 'd', 'd', 'd', '2022-03-15 21:27:29', '2022-03-15 21:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `heights`
--

CREATE TABLE `heights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Height_Cm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Client__Id` bigint(20) UNSIGNED NOT NULL,
  `Categore_id` bigint(20) UNSIGNED NOT NULL,
  `Natural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Abnormal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heights`
--

INSERT INTO `heights` (`id`, `Height_Cm`, `Client__Id`, `Categore_id`, `Natural`, `Abnormal`, `Notes`, `created_at`, `updated_at`) VALUES
(1, 'd', 1, 1, 'd', 'd', 'd', '2022-03-15 21:27:48', '2022-03-15 21:27:48');

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
(4, '2022_03_07_173541_create_categories_table', 1),
(5, '2022_03_08_124615_create_clients_table', 1),
(6, '2022_03_08_153449_create_specializations_table', 1),
(7, '2022_03_08_154826_create_heights_table', 1),
(8, '2022_03_08_155715_create_weights_table', 1),
(9, '2022_03_08_160548_create_fat__percentages_table', 1),
(10, '2022_03_08_161734_create_abdominal__circumferences_table', 1),
(11, '2022_03_12_193340_create_fat__percentage2s_table', 1),
(12, '2022_03_12_193713_create_abdominal__circumference3s_table', 1),
(13, '2022_03_14_220712_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2);

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
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Categories', 'web', '2022-03-15 17:48:19', '2022-03-15 17:48:19'),
(2, 'children', 'web', '2022-03-15 17:48:23', '2022-03-15 17:48:23'),
(3, 'Young', 'web', '2022-03-15 17:48:23', '2022-03-15 17:48:23'),
(4, 'Elderly', 'web', '2022-03-15 17:48:24', '2022-03-15 17:48:24'),
(5, 'AdminPortal', 'web', '2022-03-15 17:48:24', '2022-03-15 17:48:24'),
(6, 'Users', 'web', '2022-03-15 17:48:24', '2022-03-15 17:48:24'),
(7, 'customers', 'web', '2022-03-15 17:48:24', '2022-03-15 17:48:24'),
(8, 'powers', 'web', '2022-03-15 17:48:25', '2022-03-15 17:48:25'),
(9, 'Add_Client', 'web', '2022-03-15 17:48:25', '2022-03-15 17:48:25'),
(10, 'Edite_C', 'web', '2022-03-15 17:48:26', '2022-03-15 17:48:26'),
(11, 'Delete_C', 'web', '2022-03-15 17:48:26', '2022-03-15 17:48:26'),
(12, 'Add_Role', 'web', '2022-03-15 17:48:26', '2022-03-15 17:48:26'),
(13, 'Edite_Role', 'web', '2022-03-15 17:48:26', '2022-03-15 17:48:26'),
(14, 'حذف صلاحية', 'web', '2022-03-15 17:48:26', '2022-03-15 17:48:26'),
(15, 'Show', 'web', '2022-03-15 17:48:26', '2022-03-15 17:48:26'),
(16, 'Add_User', 'web', '2022-03-15 17:48:27', '2022-03-15 17:48:27'),
(17, 'Edite', 'web', '2022-03-15 17:48:27', '2022-03-15 17:48:27'),
(18, 'Delete', 'web', '2022-03-15 17:48:27', '2022-03-15 17:48:27'),
(19, 'Add_A_C', 'web', '2022-03-15 17:48:27', '2022-03-15 17:48:27'),
(20, 'Delete_A_C', 'web', '2022-03-15 17:48:27', '2022-03-15 17:48:27'),
(21, 'Edite_A_C', 'web', '2022-03-15 17:48:27', '2022-03-15 17:48:27'),
(22, 'Add_F_C', 'web', '2022-03-15 17:48:28', '2022-03-15 17:48:28'),
(23, 'Delete_F_C', 'web', '2022-03-15 17:48:28', '2022-03-15 17:48:28'),
(24, 'Edite_F_C', 'web', '2022-03-15 17:48:28', '2022-03-15 17:48:28'),
(25, 'Add_H_C', 'web', '2022-03-15 17:48:28', '2022-03-15 17:48:28'),
(26, 'Delete_H_C', 'web', '2022-03-15 17:48:28', '2022-03-15 17:48:28'),
(27, 'Edite_H_C', 'web', '2022-03-15 17:48:29', '2022-03-15 17:48:29'),
(28, 'Add_W_C', 'web', '2022-03-15 17:48:29', '2022-03-15 17:48:29'),
(29, 'Delete_W_C', 'web', '2022-03-15 17:48:29', '2022-03-15 17:48:29'),
(30, 'Edite_W_C', 'web', '2022-03-15 17:48:30', '2022-03-15 17:48:30'),
(31, 'Add_A_Y', 'web', '2022-03-15 17:48:30', '2022-03-15 17:48:30'),
(32, 'Delete_A_Y', 'web', '2022-03-15 17:48:30', '2022-03-15 17:48:30'),
(33, 'Edite_A_Y', 'web', '2022-03-15 17:48:30', '2022-03-15 17:48:30'),
(34, 'Add_F_Y', 'web', '2022-03-15 17:48:30', '2022-03-15 17:48:30'),
(35, 'Delete_F_Y', 'web', '2022-03-15 17:48:30', '2022-03-15 17:48:30'),
(36, 'Edite_F_Y', 'web', '2022-03-15 17:48:31', '2022-03-15 17:48:31'),
(37, 'Add_H_Y', 'web', '2022-03-15 17:48:31', '2022-03-15 17:48:31'),
(38, 'Delete_H_Y', 'web', '2022-03-15 17:48:32', '2022-03-15 17:48:32'),
(39, 'Edite_H_Y', 'web', '2022-03-15 17:48:32', '2022-03-15 17:48:32'),
(40, 'Add_W_Y', 'web', '2022-03-15 17:48:32', '2022-03-15 17:48:32'),
(41, 'Delete_W_Y', 'web', '2022-03-15 17:48:32', '2022-03-15 17:48:32'),
(42, 'Edite_W_Y', 'web', '2022-03-15 17:48:32', '2022-03-15 17:48:32'),
(43, 'Add_A_E', 'web', '2022-03-15 17:48:32', '2022-03-15 17:48:32'),
(44, 'Delete_A_E', 'web', '2022-03-15 17:48:33', '2022-03-15 17:48:33'),
(45, 'Edite_A_E', 'web', '2022-03-15 17:48:33', '2022-03-15 17:48:33'),
(46, 'Add_F_E', 'web', '2022-03-15 17:48:33', '2022-03-15 17:48:33'),
(47, 'Delete_F_E', 'web', '2022-03-15 17:48:33', '2022-03-15 17:48:33'),
(48, 'Edite_F_E', 'web', '2022-03-15 17:48:33', '2022-03-15 17:48:33'),
(49, 'Add_H_E', 'web', '2022-03-15 17:48:33', '2022-03-15 17:48:33'),
(50, 'Delete_H_E', 'web', '2022-03-15 17:48:33', '2022-03-15 17:48:33'),
(51, 'Edite_H_E', 'web', '2022-03-15 17:48:33', '2022-03-15 17:48:33'),
(52, 'Add_W_E', 'web', '2022-03-15 17:48:33', '2022-03-15 17:48:33'),
(53, 'Delete_W_E', 'web', '2022-03-15 17:48:33', '2022-03-15 17:48:33'),
(54, 'Edite_W_E', 'web', '2022-03-15 17:48:34', '2022-03-15 17:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'owner', 'web', '2022-03-15 17:48:35', '2022-03-15 17:48:35'),
(2, 'Young', 'web', '2022-03-15 19:19:00', '2022-03-15 19:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1);

-- --------------------------------------------------------

--
-- Table structure for table `specializations`
--

CREATE TABLE `specializations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specializations`
--

INSERT INTO `specializations` (`id`, `Name`, `created_at`, `updated_at`) VALUES
(1, 'Height', '2022-03-15 17:48:12', '2022-03-15 17:48:12'),
(2, 'Weight', '2022-03-15 17:48:12', '2022-03-15 17:48:12'),
(3, 'Fat_Percentage', '2022-03-15 17:48:13', '2022-03-15 17:48:13'),
(4, 'Abdominal_Circumference', '2022-03-15 17:48:14', '2022-03-15 17:48:14'),
(5, 'Supervisor', '2022-03-15 17:48:15', '2022-03-15 17:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `Specialization_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `roles_name`, `Status`, `email_verified_at`, `password`, `categorie_id`, `Specialization_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AhmedMofrih', 'ahmed.mofrih22@yahoo.com', '[\"owner\"]', 'مفعل', NULL, '$2y$10$KSAGzLpofiZx/t9pX8yW7OuZPrnPb4ue1NJlX9nC.d3TsVBh494f.', 4, 5, NULL, '2022-03-15 17:48:35', '2022-03-15 17:48:35'),
(2, 'ail', 'ail33@gmail.com', '[\"Young\"]', 'مفعل', NULL, '$2y$10$Mp7N0vvGcOuyduFTFNRJf.OQY.LugnEvAKTajNNhvQzIrNdAEGonO', 2, 4, NULL, '2022-03-15 19:37:12', '2022-03-15 20:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `weights`
--

CREATE TABLE `weights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Weight_kg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_Client` bigint(20) UNSIGNED NOT NULL,
  `Categore_id` bigint(20) UNSIGNED NOT NULL,
  `Plus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Minus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Needs_A_Diet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Needs_Nourishment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weights`
--

INSERT INTO `weights` (`id`, `Weight_kg`, `id_Client`, `Categore_id`, `Plus`, `Minus`, `Needs_A_Diet`, `Needs_Nourishment`, `Notes`, `created_at`, `updated_at`) VALUES
(1, 'd', 1, 1, 'd', 'd', 'd', 'd', 'd', '2022-03-15 21:28:07', '2022-03-15 21:28:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abdominal__circumference3s`
--
ALTER TABLE `abdominal__circumference3s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `abdominal__circumferences`
--
ALTER TABLE `abdominal__circumferences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abdominal__circumferences_client_id_foreign` (`Client_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fat__percentage2s`
--
ALTER TABLE `fat__percentage2s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fat__percentage2s_client_number_foreign` (`Client_number`);

--
-- Indexes for table `fat__percentages`
--
ALTER TABLE `fat__percentages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fat__percentages_client_number_foreign` (`Client_number`);

--
-- Indexes for table `heights`
--
ALTER TABLE `heights`
  ADD PRIMARY KEY (`id`),
  ADD KEY `heights_client__id_foreign` (`Client__Id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

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
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `specializations`
--
ALTER TABLE `specializations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `weights`
--
ALTER TABLE `weights`
  ADD PRIMARY KEY (`id`),
  ADD KEY `weights_id_client_foreign` (`id_Client`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abdominal__circumference3s`
--
ALTER TABLE `abdominal__circumference3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `abdominal__circumferences`
--
ALTER TABLE `abdominal__circumferences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fat__percentage2s`
--
ALTER TABLE `fat__percentage2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fat__percentages`
--
ALTER TABLE `fat__percentages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `heights`
--
ALTER TABLE `heights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `specializations`
--
ALTER TABLE `specializations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `weights`
--
ALTER TABLE `weights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abdominal__circumferences`
--
ALTER TABLE `abdominal__circumferences`
  ADD CONSTRAINT `abdominal__circumferences_client_id_foreign` FOREIGN KEY (`Client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fat__percentage2s`
--
ALTER TABLE `fat__percentage2s`
  ADD CONSTRAINT `fat__percentage2s_client_number_foreign` FOREIGN KEY (`Client_number`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fat__percentages`
--
ALTER TABLE `fat__percentages`
  ADD CONSTRAINT `fat__percentages_client_number_foreign` FOREIGN KEY (`Client_number`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `heights`
--
ALTER TABLE `heights`
  ADD CONSTRAINT `heights_client__id_foreign` FOREIGN KEY (`Client__Id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `weights`
--
ALTER TABLE `weights`
  ADD CONSTRAINT `weights_id_client_foreign` FOREIGN KEY (`id_Client`) REFERENCES `clients` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
