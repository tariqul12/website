-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2024 at 12:32 PM
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
-- Database: `websiteisp`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `broadband_customer` varchar(255) DEFAULT NULL,
  `service_award` varchar(255) DEFAULT NULL,
  `call_centre` varchar(255) DEFAULT NULL,
  `helping_customer` varchar(255) DEFAULT NULL,
  `future_title` varchar(255) DEFAULT NULL,
  `future_sub_title` varchar(255) DEFAULT NULL,
  `future_image` text DEFAULT NULL,
  `customer_satisfaction` varchar(255) DEFAULT NULL,
  `customer_satisfaction_image` text DEFAULT NULL,
  `trustpilot_image_title` varchar(255) DEFAULT NULL,
  `trustpilot_image_sub_title` varchar(255) DEFAULT NULL,
  `trustpilot_image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `sub_title`, `image`, `broadband_customer`, `service_award`, `call_centre`, `helping_customer`, `future_title`, `future_sub_title`, `future_image`, `customer_satisfaction`, `customer_satisfaction_image`, `trustpilot_image_title`, `trustpilot_image_sub_title`, `trustpilot_image`, `created_at`, `updated_at`) VALUES
(1, 'Voluptate vel odit d', 'Possimus nostrud do Possimus nostrud do Possimus nostrud do Possimus nostrud do Possimus nostrud do', 'upload/aboutimage/1733116634-about-img.png', NULL, 'Molestiae odio autem', 'Illum ea sed iusto', 'Libero et doloribus', 'Consectetur ad dolor', 'Necessitatibus aperi', 'upload/aboutimage/1733113115-s95uzw04zcgWSyjYkvXg8iPCwq4a3A0yLGne3WHo.jpg', 'Illo distinctio Qui', 'upload/aboutimage/1733113115-resized-image-Promo (1).jpeg', 'Aut perspiciatis qu', 'Aliquip ut quibusdam', 'upload/aboutimage/1733113115-joe-baiden-768x512.jpeg', '2024-12-01 22:18:35', '2024-12-01 23:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `page` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `image`, `description`, `page`, `created_at`, `updated_at`) VALUES
(1, 'In id id nihil magn', 'upload/banner/1733115483-download (6).jpg', 'Minim ipsa ratione', NULL, '2024-12-01 22:58:03', '2024-12-01 22:58:03'),
(2, 'Ab ipsum sit et et', 'upload/banner/1733115492-download (5).jpg', 'Duis sed et non iust', NULL, '2024-12-01 22:58:12', '2024-12-01 22:58:12'),
(3, 'Fugit consectetur e', 'upload/banner/1733115503-download (4).jpg', 'Reprehenderit veniam', NULL, '2024-12-01 22:58:23', '2024-12-01 22:58:23'),
(4, 'Perferendis voluptat', 'upload/banner/1733115514-download (3).jpg', 'Ex sed impedit culp', NULL, '2024-12-01 22:58:34', '2024-12-01 22:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Cloud', 'upload/categoryimage/1733113234-download (5).png', '2024-12-01 22:20:34', '2024-12-01 22:20:34'),
(2, 'Networking', 'upload/categoryimage/1733113265-download (6).png', '2024-12-01 22:21:05', '2024-12-01 22:21:05'),
(3, 'Mobility', 'upload/categoryimage/1733113295-download (7).png', '2024-12-01 22:21:35', '2024-12-01 22:21:35'),
(4, 'Cybersecurity', 'upload/categoryimage/1733113341-download (2).jpg', '2024-12-01 22:22:21', '2024-12-01 22:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `image`, `phone`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Hashim Ford', 'upload/categoryimage/1733114868-testimonials_01.jpg', '+1 (442) 614-4742', 'kiwade@mailinator.com', 'Suscipit rerum fuga', '2024-12-01 22:47:48', '2024-12-01 22:47:48'),
(2, 'Josephine Bauer', 'upload/categoryimage/1733114932-testimonials_02.jpg', '+1 (125) 817-4515', 'famowepip@mailinator.com', 'Mollit aliquam assum', '2024-12-01 22:48:52', '2024-12-01 22:48:52'),
(3, 'Giacomo Horne', 'upload/categoryimage/1733114958-testimonials_03.jpg', '+1 (384) 803-3811', 'jowipama@mailinator.com', 'Non tempora architec', '2024-12-01 22:49:18', '2024-12-01 22:49:18'),
(4, 'Moses Ruiz', 'upload/categoryimage/1733117869-02.jpg', '+1 (554) 786-8275', 'taxinyniv@mailinator.com', 'In nobis irure enim', '2024-12-01 23:37:49', '2024-12-01 23:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text DEFAULT NULL,
  `map` text DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `support` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `map`, `phone`, `email`, `support`, `created_at`, `updated_at`) VALUES
(1, 'Rerum velit velit ni', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5769.079393609495!2d90.41202048771987!3d23.831689628555996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c65e78f46ee1%3A0x3e009fd37c89634f!2sNikunja%202%2C%20Dhaka!5e1!3m2!1sen!2sbd!4v1733113033713!5m2!1sen!2sbd', '+1 (889) 566-7922', 'xevoci@mailinator.com', 'Blanditiis natus con', '2024-12-01 22:11:08', '2024-12-01 22:17:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `frequents`
--

CREATE TABLE `frequents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text DEFAULT NULL,
  `answare` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_23_064628_create_contacts_table', 1),
(5, '2024_11_23_065430_create_services_table', 1),
(6, '2024_11_23_065450_create_pakages_table', 1),
(7, '2024_11_23_065509_create_abouts_table', 1),
(8, '2024_11_23_065825_create_categories_table', 1),
(9, '2024_11_23_065849_create_clients_table', 1),
(10, '2024_11_23_065931_create_teams_table', 1),
(11, '2024_11_23_070013_create_frequents_table', 1),
(12, '2024_11_23_070100_create_tconditions_table', 1),
(13, '2024_11_23_070130_create_policies_table', 1),
(14, '2024_11_23_143825_create_banners_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pakages`
--

CREATE TABLE `pakages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `speed` varchar(255) DEFAULT NULL,
  `up_speed` varchar(255) DEFAULT NULL,
  `dw_speed` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `additional` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pakages`
--

INSERT INTO `pakages` (`id`, `title`, `sub_title`, `speed`, `up_speed`, `dw_speed`, `price`, `description`, `additional`, `created_at`, `updated_at`) VALUES
(1, 'basic', 'Multi-device streaming', '80', '125', '80', '39 .99', 'Multi-device streaming Download shows quickly Download large files', 'Multi-device streaming Download shows quickly Download large files', '2024-12-01 22:28:51', '2024-12-01 22:28:51'),
(2, 'premium', 'Multi-device streaming', '160', '200', '160', '89 .99', 'Multi-device streaming Download shows quickly Download large files', 'Multi-device streaming Download shows quickly Download large files', '2024-12-01 22:34:19', '2024-12-01 22:34:19'),
(3, 'premium', 'Multi-device streaming', '300', '200', '299', '139 .99', 'Multi-device streaming Download shows quickly Download large files', 'Multi-device streaming Download shows quickly Download large files', '2024-12-01 22:39:09', '2024-12-01 22:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2024-12-01 22:59:21', '2024-12-01 22:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `category_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Marny Osborne', 'upload/servicesimage/1733112882-pgdc.jpg', NULL, 'Nihil molestiae culp', '2024-12-01 22:14:42', '2024-12-02 00:33:01'),
(2, 'Alea Vega', 'upload/servicesimage/1733112919-Screenshot_3-768x471.png', NULL, 'Ipsum adipisicing om', '2024-12-01 22:15:19', '2024-12-02 00:33:08'),
(3, 'Trevor Curtis', 'upload/servicesimage/1733112966-Untitled-design-1.jpg', NULL, 'Laboris aut nulla ex', '2024-12-01 22:16:06', '2024-12-02 00:33:14');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tconditions`
--

CREATE TABLE `tconditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tconditions`
--

INSERT INTO `tconditions` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop', '2024-12-01 22:59:00', '2024-12-01 22:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `linkdin` varchar(255) DEFAULT NULL,
  `twiter` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `title`, `sub_title`, `name`, `image`, `designation`, `facebook`, `linkdin`, `twiter`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Iste reprehenderit d', 'Maxime porro consequ', 'Dara Byrd', 'upload/teamImage/1733115072-06.jpg', 'Et minus animi nisi', 'Aut laborum Consequ', 'Aliquam quod neque v', 'Incididunt id labori', 'Aut id quos exercita', '2024-12-01 22:51:12', '2024-12-01 22:51:12'),
(2, 'Perferendis tempor a', 'Eveniet dolores ut', 'Naida Curry', 'upload/teamImage/1733115080-05.jpg', 'Illo ratione qui adi', 'In quos eiusmod quia', 'Magni sed sint nisi', 'Cillum quidem quas n', 'Nisi perferendis qui', '2024-12-01 22:51:20', '2024-12-01 22:51:20'),
(3, 'Cum et veniam imped', 'Iure sunt iusto volu', 'Drake Avery', 'upload/teamImage/1733115087-04.jpg', 'Adipisicing labore e', 'Velit eiusmod magna', 'Modi impedit nihil', 'Cum in velit repudia', 'Tempore est explic', '2024-12-01 22:51:27', '2024-12-01 22:51:27'),
(4, 'Quisquam tempor ipsu', 'Et in iste dolor exc', 'Tate Mcclure', 'upload/teamImage/1733115096-03.jpg', 'Voluptatum qui dolor', 'Eligendi dolor anim', 'Minus est corporis m', 'Sint aut quia maiore', 'Recusandae Dolore e', '2024-12-01 22:51:36', '2024-12-01 22:51:36'),
(5, 'Aperiam ut aute aliq', 'Aute enim consequunt', 'Jaquelyn Summers', 'upload/teamImage/1733115106-02.jpg', 'Tenetur eiusmod dolo', 'Non nostrud autem au', 'Distinctio Sit erro', 'In impedit et beata', 'Dolorum nisi autem i', '2024-12-01 22:51:46', '2024-12-01 22:51:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@gmail.com', NULL, '$2y$12$JIrg6ptqLGzRqWlXDnLdNO/ZHZzohTyjroweuAgV8rL5wMu/j.ISu', 1, NULL, '2024-12-01 22:01:57', '2024-12-01 22:01:57'),
(2, 'UBold', 'demo@user.com', '2024-12-01 22:01:59', '$2y$12$SOCwp3Y3Gzkkx4k4C0nG2uNQyKn7ab227I0rRhdtBEi2C67MDZogW', 1, 'JFZFGV1mJr', '2024-12-01 22:01:59', '2024-12-01 22:01:59'),
(3, 'shimul', 'shimul@gmail.com', NULL, '$2y$12$SiKiw5btxl6GHzzzmzXFNO4heTAWA5wGxl8qeh7tHd3Xee4UMjRna', 1, NULL, '2024-12-01 22:04:21', '2024-12-01 22:04:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `frequents`
--
ALTER TABLE `frequents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakages`
--
ALTER TABLE `pakages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tconditions`
--
ALTER TABLE `tconditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frequents`
--
ALTER TABLE `frequents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pakages`
--
ALTER TABLE `pakages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tconditions`
--
ALTER TABLE `tconditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
