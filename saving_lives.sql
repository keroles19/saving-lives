-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2022 at 10:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saving_lives`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesses`
--

CREATE TABLE `accesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  `accessible_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accessible_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `action_events`
--

CREATE TABLE `action_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionable_id` bigint(20) UNSIGNED NOT NULL,
  `target_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fields` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'running',
  `exception` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `original` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `changes` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `action_events`
--

INSERT INTO `action_events` (`id`, `batch_id`, `user_id`, `name`, `actionable_type`, `actionable_id`, `target_type`, `target_id`, `model_type`, `model_id`, `fields`, `status`, `exception`, `created_at`, `updated_at`, `original`, `changes`) VALUES
(1, '9691135b-0ae9-40b9-ba28-8170cebd0057', 1, 'Create', 'App\\Models\\Article', 1, 'App\\Models\\Article', 1, 'App\\Models\\Article', 1, '', 'finished', '', '2022-06-17 18:39:52', '2022-06-17 18:39:52', NULL, '{\"title\":\"Veniam eiusmod rati\",\"short_description\":\"Tempor labore aut ut\",\"description\":\"<p>erewrwer<\\/p>\",\"image\":\"Articles\\/bg_image_1.jpg\",\"status\":true,\"updated_at\":\"2022-06-17T20:39:49.000000Z\",\"created_at\":\"2022-06-17T20:39:49.000000Z\",\"id\":1}'),
(2, '96911554-5eca-42f9-9b39-446006ad253b', 1, 'Create', 'App\\Models\\Hospital', 1, 'App\\Models\\Hospital', 1, 'App\\Models\\Hospital', 1, '', 'finished', '', '2022-06-17 18:45:22', '2022-06-17 18:45:22', NULL, '{\"name\":\"Freya Joyce\",\"email\":\"test@test.com\",\"phone\":\"2\",\"whatsapp\":\"Ut rerum mollitia re\",\"country_id\":1,\"status\":true,\"updated_at\":\"2022-06-17T20:45:22.000000Z\",\"created_at\":\"2022-06-17T20:45:22.000000Z\",\"id\":1}'),
(3, '96911622-b804-4958-91eb-256f96b15266', 1, 'Create', 'App\\Models\\Hospital', 2, 'App\\Models\\Hospital', 2, 'App\\Models\\Hospital', 2, '', 'finished', '', '2022-06-17 18:47:37', '2022-06-17 18:47:37', NULL, '{\"name\":\"Camden Morales\",\"email\":\"zibanoruci@mailinator.com\",\"phone\":\"3\",\"whatsapp\":\"Deserunt exercitatio\",\"country_id\":1,\"status\":true,\"updated_at\":\"2022-06-17T20:47:37.000000Z\",\"created_at\":\"2022-06-17T20:47:37.000000Z\",\"id\":2}'),
(4, '969116f1-f286-42ce-82ea-ceba8b4d4c50', 1, 'Create', 'App\\Models\\Organ', 1, 'App\\Models\\Organ', 1, 'App\\Models\\Organ', 1, '', 'finished', '', '2022-06-17 18:49:53', '2022-06-17 18:49:53', NULL, '{\"organ_name\":\"Eaton Cooke\",\"updated_at\":\"2022-06-17T20:49:53.000000Z\",\"created_at\":\"2022-06-17T20:49:53.000000Z\",\"id\":1}'),
(5, '969116f6-c21b-4a14-a587-216f424ed481', 1, 'Create', 'App\\Models\\Organ', 2, 'App\\Models\\Organ', 2, 'App\\Models\\Organ', 2, '', 'finished', '', '2022-06-17 18:49:56', '2022-06-17 18:49:56', NULL, '{\"organ_name\":\"Caesar Randall\",\"updated_at\":\"2022-06-17T20:49:56.000000Z\",\"created_at\":\"2022-06-17T20:49:56.000000Z\",\"id\":2}');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `short_description`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Veniam eiusmod rati', 'Tempor labore aut ut', '<p>erewrwer</p>', 'Articles/bg_image_1.jpg', '1', '2022-06-17 18:39:49', '2022-06-17 18:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `created_at`, `updated_at`) VALUES
(1, 'Egypt', '2022-06-17 18:23:33', '2022-06-17 18:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_number` bigint(20) NOT NULL,
  `blood_type` enum('A','A+','B+','B-','AB+','AB-','O+','O-') COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `organ_id` int(10) UNSIGNED NOT NULL,
  `hospital_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `full_name`, `email`, `phone`, `address`, `national_number`, `blood_type`, `description`, `status`, `organ_id`, `hospital_id`, `created_at`, `updated_at`) VALUES
(4, 'Ivan Santos', 'kihy@mailinator.com', '312312321321321338', 'Commodi voluptatem e', 12312312312312, 'B-', NULL, 1, 2, 1, '2022-06-18 10:21:13', '2022-06-18 15:59:26'),
(5, 'Maisie Hendrix', 'jedy@mailinator.com', '123123123123', 'Aliqua Sit officii', 12412312312312, 'O+', NULL, 1, 2, NULL, '2022-06-18 10:22:02', '2022-06-18 10:22:02'),
(6, 'Xena Carroll', 'guxare@mailinator.com', '12312312312', 'Ea ut ad debitis ut', 12121212121212, 'O-', NULL, 1, 2, NULL, '2022-06-18 12:53:13', '2022-06-18 12:53:13'),
(7, 'Veda Pope', 'bidacaqim@mailinator.com', '611231231231231232', 'Occaecat porro conse', 12121212121211, 'O+', NULL, 1, 2, NULL, '2022-06-18 12:53:48', '2022-06-18 12:53:48');

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
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `phone`, `whatsapp`, `email`, `email_verified_at`, `status`, `password`, `remember_token`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Freya Joyce', '2', 'Ut rerum mollitia re', 'test@test.com', NULL, 1, '$2y$10$Sk2fgvsCrL8mOkIrn3Nnlu84Vnq4AoKfNhgyA0Gpe37wpitWw92Uq', 'Egl1aeIpqWFkQdlmKoUj5zih6AfW7a0ZFeqMEjoQZA9cvCbVELKLtafdchgv', 1, '2022-06-17 18:45:22', '2022-06-17 18:45:22'),
(2, 'Camden Morales', '3', 'Deserunt exercitatio', 'zibanoruci@mailinator.com', NULL, 1, '$2y$10$kBdiEntWXAhWjmc2bn3X.OBnwNC/W65WE0epdJKhO.z1AkrKGwn3S', NULL, 1, '2022-06-17 18:47:37', '2022-06-17 18:47:37');

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
(1, '2014_10_12_000000_create_hospitals_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2017_05_28_115649_create_gates_table', 1),
(5, '2018_01_01_000000_create_action_events_table', 1),
(6, '2019_05_10_000000_add_fields_to_action_events_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_10_09_143453_create_accesses_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_06_03_233437_create_articles_table', 1),
(11, '2022_06_03_233437_create_countries_table', 1),
(12, '2022_06_03_233437_create_donors_table', 1),
(13, '2022_06_03_233437_create_obligations_table', 1),
(14, '2022_06_03_233437_create_organs_table', 1),
(15, '2022_06_03_233437_create_receivers_table', 1),
(16, '2022_06_03_233447_create_foreign_keys', 1),
(17, '2022_06_10_082231_create_settings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `obligations`
--

CREATE TABLE `obligations` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obligation_accept` tinyint(1) NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obligations`
--

INSERT INTO `obligations` (`id`, `full_name`, `national_number`, `obligation_accept`, `number`, `created_at`, `updated_at`) VALUES
(1, 'Shoshana Hardin', '4851213123123231', 1, '2571312312321', '2022-06-17 18:52:21', '2022-06-17 18:52:21'),
(2, 'Gillian Mcfarland', '75912312312312', 1, '727', '2022-06-18 11:24:43', '2022-06-18 11:24:43'),
(3, 'Xander Barrera', '75912312312212', 1, '812', '2022-06-18 11:25:01', '2022-06-18 11:25:01');

-- --------------------------------------------------------

--
-- Table structure for table `organs`
--

CREATE TABLE `organs` (
  `id` int(10) UNSIGNED NOT NULL,
  `organ_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organs`
--

INSERT INTO `organs` (`id`, `organ_name`, `created_at`, `updated_at`) VALUES
(1, 'Eaton Cooke', '2022-06-17 18:49:53', '2022-06-17 18:49:53'),
(2, 'Caesar Randall', '2022-06-17 18:49:56', '2022-06-17 18:49:56');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `receivers`
--

CREATE TABLE `receivers` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_number` bigint(20) NOT NULL,
  `blood_type` enum('A','A+','B+','B-','AB+','AB-','O+','O-') COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `hospital_id` int(10) UNSIGNED DEFAULT NULL,
  `donor_id` int(10) UNSIGNED DEFAULT NULL,
  `organ_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `receivers`
--

INSERT INTO `receivers` (`id`, `full_name`, `email`, `phone`, `address`, `national_number`, `blood_type`, `description`, `status`, `hospital_id`, `donor_id`, `organ_id`, `created_at`, `updated_at`) VALUES
(5, 'Boris Holloway', 'dezuz@mailinator.com', '2312312312312312', 'Tempor voluptatem fu', 12312312312312, 'AB+', 'Esse non ipsam iust', 1, 1, 4, 1, '2022-06-18 13:01:47', '2022-06-18 15:59:26'),
(6, 'Quynn Maldonado', 'xodocetub@mailinator.com', '7412412312312312', 'Placeat ipsum deser', 12412312312312, 'AB-', 'Accusantium architec', 1, NULL, NULL, 2, '2022-06-18 13:02:21', '2022-06-18 13:02:21');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_permission`
--

CREATE TABLE `role_permission` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `subhead` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `subhead`, `content`, `team_name`, `facebook`, `whatsapp`, `email`, `title`, `about`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 'subhead', 'content', 'team_name', 'facebook', 'whatsapp', 'email', 'title', 'about', 'copyright', '2022-06-17 18:23:33', '2022-06-17 18:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `photo`, `phone`, `whatsapp`, `email`, `email_verified_at`, `status`, `password`, `remember_token`, `country_id`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, '01040505060', '0105030302', 'admin@admin.com', NULL, 1, '$2y$10$Jlo4yGihQa/gR2PEUpzprOz4VTy4nKxLwjPhguP8JHkFfJkmeC.aG', 'Hyn36JDFJMGZ78pCRLzhzRywwUqAVScYTncdOGeUSaMdH7RDcAqK4RQu0sii', 1, 1, '2022-06-17 18:23:33', '2022-06-17 18:23:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesses`
--
ALTER TABLE `accesses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accesses_accessible_type_accessible_id_index` (`accessible_type`,`accessible_id`);

--
-- Indexes for table `action_events`
--
ALTER TABLE `action_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_events_actionable_type_actionable_id_index` (`actionable_type`,`actionable_id`),
  ADD KEY `action_events_batch_id_model_type_model_id_index` (`batch_id`,`model_type`,`model_id`),
  ADD KEY `action_events_user_id_index` (`user_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `donors_email_unique` (`email`),
  ADD UNIQUE KEY `donors_national_number_unique` (`national_number`),
  ADD KEY `donors_organ_id_foreign` (`organ_id`),
  ADD KEY `donors_hospital_id_foreign` (`hospital_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hospitals_email_unique` (`email`),
  ADD KEY `hospitals_country_id_foreign` (`country_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obligations`
--
ALTER TABLE `obligations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `obligations_national_number_unique` (`national_number`),
  ADD UNIQUE KEY `obligations_number_unique` (`number`);

--
-- Indexes for table `organs`
--
ALTER TABLE `organs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `receivers`
--
ALTER TABLE `receivers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `receivers_email_unique` (`email`),
  ADD UNIQUE KEY `receivers_national_number_unique` (`national_number`),
  ADD KEY `receivers_hospital_id_foreign` (`hospital_id`),
  ADD KEY `receivers_donor_id_foreign` (`donor_id`),
  ADD KEY `receivers_organ_id_foreign` (`organ_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_permission`
--
ALTER TABLE `role_permission`
  ADD PRIMARY KEY (`role_id`,`permission_slug`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `accesses`
--
ALTER TABLE `accesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `action_events`
--
ALTER TABLE `action_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `obligations`
--
ALTER TABLE `obligations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `organs`
--
ALTER TABLE `organs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receivers`
--
ALTER TABLE `receivers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donors`
--
ALTER TABLE `donors`
  ADD CONSTRAINT `donors_hospital_id_foreign` FOREIGN KEY (`hospital_id`) REFERENCES `hospitals` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `donors_organ_id_foreign` FOREIGN KEY (`organ_id`) REFERENCES `organs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD CONSTRAINT `hospitals_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `hospitals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `receivers`
--
ALTER TABLE `receivers`
  ADD CONSTRAINT `receivers_donor_id_foreign` FOREIGN KEY (`donor_id`) REFERENCES `donors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `receivers_hospital_id_foreign` FOREIGN KEY (`hospital_id`) REFERENCES `hospitals` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `receivers_organ_id_foreign` FOREIGN KEY (`organ_id`) REFERENCES `organs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_permission`
--
ALTER TABLE `role_permission`
  ADD CONSTRAINT `role_permission_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
