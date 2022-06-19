-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2022 at 09:55 PM
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
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `hospitals` (`id`, `name`, `phone`, `whatsapp`, `email`, `photo`, `email_verified_at`, `status`, `password`, `remember_token`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Freya Joyce', '2', 'Ut rerum mollitia re', 'test@test.com', 'Users/doctor_3.jpg', NULL, 1, '$2y$10$Sk2fgvsCrL8mOkIrn3Nnlu84Vnq4AoKfNhgyA0Gpe37wpitWw92Uq', 'w75WstjakLsjyLjfC4N5qQxXzvLxOJDCsONjtrvx1Oeo0Gt97TWC5M0ApDUo', 1, '2022-06-17 18:45:22', '2022-06-19 17:46:48'),
(2, 'Camden Morales', '3', 'Deserunt exercitatio', 'zibanoruci@mailinator.com', 'Users/doctor_1.jpg', NULL, 1, '$2y$10$kBdiEntWXAhWjmc2bn3X.OBnwNC/W65WE0epdJKhO.z1AkrKGwn3S', NULL, 1, '2022-06-17 18:47:37', '2022-06-19 17:46:37'),
(3, 'Norman Mayer', '60', 'Modi maiores perspic', 'lukivo@mailinator.com', 'Users/doctor_1.jpg', NULL, 1, '$2y$10$oKMdjNjVqzqLOXGjkCeAe.Wo7qW2lr.cmFFSRaeE7P.ZO5TJ8vbtW', NULL, 1, '2022-06-19 17:47:07', '2022-06-19 17:47:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hospitals_email_unique` (`email`),
  ADD KEY `hospitals_country_id_foreign` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD CONSTRAINT `hospitals_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `hospitals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
