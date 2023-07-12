-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 01:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yhc_courses`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `duration` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `duration`, `created_at`, `updated_at`) VALUES
(2, 'Belajar Dasar Pemrograman Web', 'Pelajari komponen-komponen dasar HTML dan CSS yang merupakan fondasi utama untuk menjadi front-end web developer.', 45, '2023-07-11 20:20:20', '2023-07-12 11:47:59'),
(3, 'Belajar Dasar Pemrograman JavaScript', 'Pelajari dasar JavaScript, dari fundamental, sintaks dan fitur ES6, hingga konsep automation test menggunakan framework populer.', 45, '2023-07-11 20:27:31', '2023-07-12 11:57:04'),
(4, 'Belajar Membuat Front-End Web untuk Pemula', 'Pelajari materi mengenai DOM manipulation, Event, dan Web Storage untuk meningkatkan fungsionalitas dan interaktifitas pada website Anda.', 45, '2023-07-11 22:41:32', '2023-07-12 11:57:39'),
(6, 'Belajar Fundamental Front-End Web Development', 'Pelajari sintaks ES6, Web Component, dan Build Tools dalam membangun website dengan teknik yang simple, reusable, dan optimized.', 70, '2023-07-12 04:05:38', '2023-07-12 11:58:14'),
(10, 'Belajar Tools Front-End Web Intermediate', 'Pelajari tools berstandar industri dengan Sass, Bootstrap, Lit, Axios, dan Firebase dalam membangun aplikasi web yang efisien dan powerful.', 65, '2023-07-12 11:58:47', '2023-07-12 11:58:47'),
(11, 'Menjadi Front-End Web Developer Expert', 'Pelajari teknik-teknik expert serta modern dalam membangun website yang optimal pada seluruh perangkat, terutama pada perangkat mobile.', 100, '2023-07-12 11:59:08', '2023-07-12 11:59:08');

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
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `embed_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `course_id`, `title`, `description`, `embed_link`, `created_at`, `updated_at`) VALUES
(6, 2, 'Persiapan Belajar', 'Memahami HAKI, mekanisme belajar, forum diskusi, glosarium, dan daftar referensi.', 'https://www.dicoding.com/academies/123', '2023-07-12 11:49:07', '2023-07-12 11:49:07'),
(7, 2, 'Pendahuluan', 'Pengenalan website, cara kerjanya, dan tools-nya dalam mengembangkannya.', 'https://www.dicoding.com/academies/123', '2023-07-12 11:49:47', '2023-07-12 11:49:47'),
(8, 2, 'Pengantar HTML', 'Mempelajari alat yang digunakan dalam membangun struktur halaman website. Modul ini membahas tentang HTML, struktur dasar dokumen HTML, dsb.', 'https://www.dicoding.com/academies/123', '2023-07-12 11:50:11', '2023-07-12 11:50:11'),
(9, 2, 'Pendalaman HTML', 'Mendalami penerapan HTML dalam membangun struktur halaman web secara lebih lanjut. Di antaranya seperti beragam elemen HTML, teknik mengorganisir konten website dengan elemen semantik, mengenal attribute pada elemen, generic element, table, dsb. Selain itu, modul ini membahas tentang perbedaan antara elemen yang bersifat inline dan block.', 'https://www.dicoding.com/academies/123', '2023-07-12 11:50:39', '2023-07-12 11:50:39'),
(10, 2, 'Pengenalan CSS', 'Memahami peran CSS dalam pembuatan website, benefitnya, dan mengetahui penulisan sintaks dasar CSS dengan menerapkan beberapa basic styling pada elemen HTML.', 'https://www.dicoding.com/academies/123', '2023-07-12 11:51:03', '2023-07-12 11:51:03'),
(11, 2, 'Pendalaman CSS', 'Mendalami penerapan CSS dalam mempercantik tampilan halaman website secara lebih lanjut. Di antaranya seperti variatif selector, styling untuk font dan text, memahami tentang foreground color dan background color, box model, shadow, positioning, layouting menggunakan float, dan media query.', 'https://www.dicoding.com/academies/123', '2023-07-12 11:53:30', '2023-07-12 11:53:30'),
(12, 2, 'Layout Responsif dengan Flexbox', 'Memahami tentang penggunaan flexbox sebagai teknik baru dalam menyusun layout yang mudah dan responsif pada beragam perangkat.', 'https://www.dicoding.com/academies/123', '2023-07-12 11:54:00', '2023-07-12 11:54:00'),
(13, 2, 'Penutup', 'Mengingat kembali seluruh materi-materi yang dipelajari melalui rangkuman serta melakukan validasi kepemahaman dan ingatan melalui ujian akhir.', 'https://www.dicoding.com/academies/123', '2023-07-12 11:54:20', '2023-07-12 11:54:20'),
(14, 2, 'Proyek Akhir', 'Membuat website sederhana dengan menerapkan semantic element dan layout flexbox.', 'https://www.dicoding.com/academies/123', '2023-07-12 11:54:46', '2023-07-12 11:54:46');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_11_234238_create_kursuses_table', 2),
(6, '2023_07_11_234336_create_materis_table', 2),
(7, '2023_07_11_235728_create_courses_table', 3),
(8, '2023_07_11_235950_create_lessons_table', 3);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Admin', 'admin@gmail.com', '2023-07-11 12:19:40', '$2y$10$ZTXcoP7YXS4eXPzqykOAnO0CvtbtDd5gPH/G71H2FIIUutzuk7Gea', 1, 'TL5OqbH7JWiYeqFWekXYYxioBUIPHcCaXnLBZZGGmlN5VYxQgj5Xnn0vF6kj', '2023-07-11 12:19:40', '2023-07-11 12:19:40'),
(2, 'Testing', 'testing@gmail.com', NULL, '$2y$10$aNxqBNwHPZMzb7hE5Ry9HuoiHMZg5TGEkvuVdSD5OvWXNf9gA0d1e', 0, NULL, '2023-07-11 12:42:11', '2023-07-11 12:42:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lessons_course_id_foreign` (`course_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
