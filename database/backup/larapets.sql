-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2025 a las 22:15:28
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `larapets`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adoptions`
--

CREATE TABLE `adoptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pet_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `adoptions`
--

INSERT INTO `adoptions` (`id`, `user_id`, `pet_id`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '2025-10-30 18:36:43', '2025-10-30 18:36:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `jobs`
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
-- Estructura de tabla para la tabla `job_batches`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_10_22_214804_create_pets_table', 1),
(5, '2025_10_22_214917_create_adoptions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('mariaf@gmail.com', '$2y$12$vTtg7SPpSIa7VJYTjimic.0ZE1Ny15BmGrcf9g5v/ymBzzFPcF38e', '2025-11-13 18:04:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pets`
--

CREATE TABLE `pets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'no-image.png',
  `kind` varchar(255) NOT NULL,
  `weight` double NOT NULL,
  `age` int(11) NOT NULL,
  `breed` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pets`
--

INSERT INTO `pets` (`id`, `name`, `image`, `kind`, `weight`, `age`, `breed`, `location`, `description`, `active`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Firulais', 'no-image.png', 'Dog', 7.6, 2, 'French Bulldog', 'Paris', 'Black dog, so charming, lovely', 1, 0, '2025-10-30 18:36:43', '2025-10-30 18:36:43'),
(2, 'Killer', 'no-image.png', 'Dog', 18, 6, 'Cane Corso', 'Milan', 'Explosive & Hungry, be carefully with it, Danger', 1, 0, '2025-10-30 18:36:43', '2025-10-30 18:36:43'),
(3, 'Kiara', 'no-image.png', 'Cat', 3.2, 1, 'Siamese', 'Rome', 'Charming and playful cat', 1, 1, '2025-10-30 18:36:43', '2025-10-30 18:36:43'),
(4, 'Carrancho', 'no-image.png', 'Pig', 27.4, 4, 'Mini Pig', 'Berlin', 'Lazy pig, loves to eat and sleep', 1, 0, '2025-10-30 18:36:43', '2025-10-30 18:36:43'),
(5, 'Lucy', 'no-image.png', 'Bird', 8.6, 4, 'Lovebird', 'Lake Meredithstad', 'Est iusto harum beatae in eaque repudiandae ut voluptatem dolore in.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(6, 'Penny', 'no-image.png', 'Cat', 5.9, 8, 'Abyssinian', 'Hilpertport', 'Quia explicabo quaerat deleniti reiciendis amet consectetur.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(7, 'Buddy', 'no-image.png', 'Cat', 0.8, 1, 'Persian', 'Lethaborough', 'Corporis ut dicta excepturi sequi aperiam iste aspernatur iusto qui assumenda.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(8, 'Gracie', 'no-image.png', 'Bird', 6.9, 3, 'Cockatiel', 'South Stantonbury', 'Amet fuga qui dolorum fugit et dolores.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(9, 'Mia', 'no-image.png', 'Bird', 5.1, 4, 'Lovebird', 'Veummouth', 'Voluptatem aspernatur dolor aut dolorum facere dolorem magnam numquam.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(10, 'Louie', 'no-image.png', 'Pig', 9.8, 3, 'Landrace', 'South Jaquelin', 'Commodi accusantium corporis optio qui in sint quia.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(11, 'Teddy', 'no-image.png', 'Cat', 6.7, 3, 'British Shorthair', 'Wittinghaven', 'Ut praesentium et minima qui cum eum repellendus.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(12, 'Roxy', 'no-image.png', 'Pig', 5.1, 9, 'Pietrain', 'Albinshire', 'Rem natus inventore ipsum tenetur maxime rerum iure tempore ut odit.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(13, 'Zeus', 'no-image.png', 'Cat', 0.8, 6, 'British Shorthair', 'Halleburgh', 'Accusantium vero nihil sed enim doloremque et.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(14, 'Ruby', 'no-image.png', 'Cat', 1.8, 6, 'Siamese', 'Toyton', 'Dolorem aliquid laboriosam dolorum nam inventore.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(15, 'Tucker', 'no-image.png', 'Cat', 5.8, 0, 'Siamese', 'Lake Jillian', 'Voluptatem praesentium in molestiae rerum adipisci id dolores in.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(16, 'Maggie', 'no-image.png', 'Dog', 4, 6, 'Beagle', 'East Cassandreview', 'Suscipit nesciunt non odio tenetur quisquam nemo.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(17, 'Molly', 'no-image.png', 'Bird', 4.7, 7, 'Amazon Parrot', 'Port Jerelville', 'Porro quos animi quis qui eaque rem facilis.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(18, 'Winston', 'no-image.png', 'Pig', 0.6, 3, 'Hampshire', 'Aglaehaven', 'Qui sit similique qui molestiae sit alias.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(19, 'Jack', 'no-image.png', 'Pig', 8.5, 5, 'Duroc', 'Simonisport', 'Sint reprehenderit quis et ex consequatur aut autem.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(20, 'Charlie', 'no-image.png', 'Bird', 7.1, 3, 'Finch', 'North Luella', 'Illum quos pariatur beatae vel natus.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(21, 'Jack', 'no-image.png', 'Pig', 0.7, 8, 'Pietrain', 'West Jayceeport', 'Aliquid eligendi quia nesciunt fugit corrupti iste rerum dolores.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(22, 'Lily', 'no-image.png', 'Dog', 1.7, 3, 'Beagle', 'Haileefurt', 'Id porro aliquam quod eos perspiciatis.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(23, 'Sam', 'no-image.png', 'Bird', 6.9, 7, 'Budgerigar', 'Gulgowskifort', 'Dolore quam sed alias voluptatem dignissimos eos sed quas autem sed.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(24, 'Chloe', 'no-image.png', 'Pig', 0.7, 6, 'Vietnamese Pot-bellied', 'Watersstad', 'Tenetur similique neque ut nisi quia atque ipsa omnis.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(25, 'Henry', 'no-image.png', 'Pig', 0.4, 6, 'Chester White', 'Haydentown', 'Doloribus dolor at odio dolorem repellendus voluptates voluptatem consequuntur.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(26, 'Maggie', 'no-image.png', 'Cat', 4.2, 8, 'Ragdoll', 'Harberton', 'Hic molestiae facilis eveniet quaerat quia sed et sunt inventore.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(27, 'Molly', 'no-image.png', 'Dog', 5.6, 4, 'Poodle', 'Port Hailee', 'Dolor consequatur nam deserunt aliquid aut dicta iste cumque ullam.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(28, 'Tucker', 'no-image.png', 'Pig', 8.6, 3, 'Duroc', 'Lizaberg', 'Et est voluptatem dicta voluptas fuga vero aspernatur necessitatibus.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(29, 'Jack', 'no-image.png', 'Bird', 9.7, 9, 'African Grey Parrot', 'New Madisonport', 'Sit deleniti eligendi fugit deleniti expedita qui deserunt.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(30, 'Stella', 'no-image.png', 'Cat', 3.8, 5, 'Russian Blue', 'Marvinport', 'Eum aperiam vero qui consequatur repellat minus.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(31, 'Penny', 'no-image.png', 'Pig', 3.8, 7, 'Berkshire', 'Lake Rossshire', 'Repellat molestiae a iure molestiae quia libero et nobis qui.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(32, 'Ellie', 'no-image.png', 'Dog', 3.5, 0, 'Chihuahua', 'West Stephanyville', 'Amet dolorem repudiandae et sapiente laborum.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(33, 'Sophie', 'no-image.png', 'Pig', 0.2, 0, 'Pietrain', 'Reneeside', 'Vel ut earum dolor quis corrupti.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(34, 'Piper', 'no-image.png', 'Bird', 0.1, 9, 'African Grey Parrot', 'New Jaquanborough', 'Quisquam unde in exercitationem impedit id beatae.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(35, 'Sam', 'no-image.png', 'Dog', 3.9, 7, 'French Bulldog', 'Hettingermouth', 'Amet amet perferendis suscipit cum mollitia sit harum nisi.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(36, 'Roxy', 'no-image.png', 'Dog', 9, 3, 'Siberian Husky', 'Leschbury', 'Tempora qui explicabo harum velit quibusdam molestias ut mollitia.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(37, 'Molly', 'no-image.png', 'Dog', 5.2, 0, 'Labrador Retriever', 'New Meaganfurt', 'Eos et voluptate quidem est sunt aut.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(38, 'Maggie', 'no-image.png', 'Pig', 5.9, 1, 'Berkshire', 'Svenburgh', 'Tenetur tempore illo officiis aut deleniti et sequi illum labore.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(39, 'Milo', 'no-image.png', 'Cat', 5, 7, 'Siamese', 'Port Reynoldshire', 'Asperiores quibusdam quae ut dolores culpa soluta consectetur quod amet.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(40, 'Harley', 'no-image.png', 'Pig', 4.8, 9, 'Yorkshire', 'Turnershire', 'Nobis id corrupti adipisci quis non aperiam dolores animi accusamus.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(41, 'Henry', 'no-image.png', 'Bird', 0.3, 3, 'African Grey Parrot', 'Muellershire', 'Omnis voluptatibus soluta occaecati et exercitationem numquam.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(42, 'Mia', 'no-image.png', 'Bird', 5.6, 5, 'Lovebird', 'Dedricshire', 'Quis asperiores quos non cum totam.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(43, 'Winston', 'no-image.png', 'Pig', 9.8, 5, 'Vietnamese Pot-bellied', 'Rhiannatown', 'Et et ut ut rerum recusandae eum neque cumque cumque consequatur.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(44, 'Mia', 'no-image.png', 'Pig', 3.4, 2, 'Tamworth', 'Port Leanneborough', 'Quis quasi voluptates nesciunt qui reprehenderit quas labore.', 1, 0, '2025-10-30 18:37:31', '2025-10-30 18:37:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Fh3ohFgL8Uw0sSlllPsHfsdIy1O9oqZRvCX6esfG', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36 OPR/124.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidGdaTEpZQ2x0RVpGVERzTzY0VTFoZGRrQUdJdUVuZ1VvZ3hNRGZESCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VycyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1764364412),
('s94ThAYTvxfsB34bp0NGnkvVSdwcL4M9lkOkgU6l', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36 OPR/124.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWkk1WDBaQzJTUVpzQ1NzcXMyMU81VnFrWHp5dmltbmpDNTNuS05JUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1764357234);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document` bigint(20) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'no-photo.png',
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `role` varchar(255) NOT NULL DEFAULT 'customer',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `document`, `fullname`, `gender`, `birthdate`, `photo`, `phone`, `email`, `email_verified_at`, `password`, `active`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 75000001, 'John Wick', 'male', '1964-09-12', 'admin.png', '3100000001', 'johnw@gmail.com', NULL, '$2y$12$hT5PptXJeWbLObYQ3zYnbek7YHeNDIFUGRh3NGf6HD9qtYRKJOsZi', 1, 'Administrador', NULL, '2025-10-30 18:36:43', '2025-10-30 18:36:43'),
(2, 75000002, 'Maria Fernanda', 'female', '1992-02-14', 'gato.jpg', '3100000002', 'mariafernandag1234@gmail.com', NULL, '$2y$12$Q6qap1PV.XoJ1xG.Q00c8ObMJdCpjFJGfy5ycOVIxjbp9pFbg33ee', 1, 'customer', 'pt7JSzohA2TlsWrRwgNkR08BA0dun9Ij945XHW7ixTHwLx4okIkQdhvfLO5o', '2025-10-30 18:36:43', '2025-11-14 23:54:02'),
(3, 754340348, 'Karl Mertz', 'Male', '2022-10-23', '86da444f-cd9c-43d2-9405-807c00fe1670.jpg', '3146424018', 'ismael.kiehn@example.org', '2025-10-30 18:36:45', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 0, 'customer', 'XZhH83P8lV', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(4, 752933310, 'Lea Orn', 'Female', '1994-02-04', 'tyson.jpg', '3203151059', 'uhyatt@example.com', '2025-10-30 18:36:46', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'vKwAeUkZcg', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(5, 757147751, 'Laurie Will', 'Female', '2009-03-02', 'f2d79d07-0420-4bc8-83ce-6ba7d6082753.jpg', '3126128516', 'webster.will@example.net', '2025-10-30 18:36:47', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'kS8pJ2C8VW', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(6, 756758537, 'Mariane Johnston', 'Female', '2009-12-10', '13a5db81-ee89-42b4-81f1-56ce8ed67926.jpg', '3642229311', 'alvah.romaguera@example.com', '2025-10-30 18:36:48', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', '6Y35z63kHC', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(7, 759353606, 'Naomie Kerluke', 'Female', '2003-11-19', 'e3b62f47-d184-4e0e-a162-9fc6af977de8.jpg', '3327910948', 'johnny.borer@example.net', '2025-10-30 18:36:48', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'w9T9nxWGya', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(8, 753602922, 'Coralie Kassulke', 'Female', '1990-01-10', '862f4ff9-8593-4667-85c2-7d0303763e9c.jpg', '3447467392', 'lula89@example.net', '2025-10-30 18:36:49', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'q4vdqk6TY8', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(9, 759184159, 'Maudie Ryan', 'Female', '1991-06-06', '45fdaf80-21fc-4d00-bb83-a922010aacbf.jpg', '3477382470', 'giovani.kessler@example.org', '2025-10-30 18:36:49', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'cIOQhycEoY', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(10, 754532336, 'Corene Huels', 'Female', '1984-07-16', 'f7ab1a7a-9c1b-4bef-999c-4f4de5ef5b50.jpg', '3242193392', 'jerrell.berge@example.com', '2025-10-30 18:36:50', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'vrUJQoFhEx', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(11, 752237565, 'Maida Franecki', 'Female', '2005-12-31', '372a839c-8a40-466d-97ac-25c1ebd1a3ee.jpg', '3052796818', 'jordi83@example.com', '2025-10-30 18:36:51', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'rGlMeot2VH', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(12, 758268015, 'Kylee Upton', 'Female', '2008-08-23', 'ee3f3875-4994-4ea0-acab-0898d7052114.jpg', '3293681139', 'becker.yvonne@example.org', '2025-10-30 18:36:52', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'aVQEnucQZr', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(13, 758810739, 'Ellie Becker', 'Female', '2023-07-05', '3abb2858-44e4-4124-b5b8-f8f1c4736492.jpg', '3737107842', 'mertz.rosamond@example.net', '2025-10-30 18:36:52', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'VAsXYH1X15', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(14, 752131785, 'Lincoln Ryan', 'Male', '1987-06-02', 'c9ae0e39-5bc1-46f3-b042-2bca838d90c6.jpg', '3094375653', 'maryam.oreilly@example.net', '2025-10-30 18:36:53', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'kvpIkQ9V56', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(15, 751966585, 'Marielle Schultz', 'Female', '1970-06-25', '043ca1b6-d305-4d4e-8136-110a898f18f9.jpg', '3693391919', 'schuster.oliver@example.net', '2025-10-30 18:36:54', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'V40oCNmmdS', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(16, 754568083, 'Retha Mante', 'Female', '1972-05-04', 'bb4d0993-ae5f-45d0-9d96-18ca83019e69.jpg', '3421494804', 'ueichmann@example.com', '2025-10-30 18:36:54', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'NhzGWapOul', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(17, 755121897, 'Chauncey Mann', 'Male', '1977-09-25', 'c2512dd4-a935-401d-8cfb-b4d99eaeb605.jpg', '3348464461', 'margarett50@example.com', '2025-10-30 18:36:55', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'lq0O2nGrOr', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(18, 756870565, 'Regan Purdy', 'Male', '2015-02-02', '76d4bd3a-49ef-4879-91d0-79bbe8f4c24a.jpg', '3782801001', 'smoen@example.com', '2025-10-30 18:36:56', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'ZhqG2GQ6AH', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(19, 756797649, 'Emerson Roob', 'Male', '1981-05-28', '18586b21-43a6-4547-afb5-49a63d902831.jpg', '3717428625', 'toy.nicolas@example.com', '2025-10-30 18:36:57', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'klk7yfbLxa', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(20, 757218485, 'Zora Metz', 'Female', '1977-07-29', '9d277143-7032-497f-bbc2-a0f1d3a55391.jpg', '3457218876', 'lindsay25@example.com', '2025-10-30 18:36:57', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'HLcUJSuujQ', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(21, 759064698, 'Afton Koss', 'Male', '2010-05-22', '102cb719-3ec9-4075-a328-17b1d1065e1f.jpg', '3140981308', 'evans64@example.com', '2025-10-30 18:36:58', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'rfJpcvfhly', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(22, 754727481, 'Lacey Nitzsche', 'Female', '2015-03-20', 'e57bae1b-85c7-473c-953e-fbbeb9c45f8c.jpg', '3112303868', 'valentin99@example.net', '2025-10-30 18:36:59', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'cjTJFngRAE', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(23, 758568389, 'Marlin Corwin', 'Male', '2013-03-25', 'a9a13055-c4ab-4511-940d-c846fec7cf41.jpg', '3478648762', 'golden.hand@example.net', '2025-10-30 18:36:59', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'ScXG5Xhgvu', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(24, 758061238, 'Anabel Osinski', 'Female', '1981-05-31', 'bc0948cd-6b1a-44ef-b9a8-9d3d778c85cc.jpg', '3810933491', 'darlene.volkman@example.net', '2025-10-30 18:37:00', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'vhetEdkVJK', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(25, 758221827, 'Mac Greenfelder', 'Male', '1993-12-01', 'a4f9ca69-ac9d-496b-aef8-b991395e37a5.jpg', '3498305227', 'rath.tatyana@example.com', '2025-10-30 18:37:01', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'AN4n1UyJaC', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(26, 758197536, 'Julien Prohaska', 'Male', '2022-02-09', '3413f953-002b-4939-ba0d-3efea20a0bc5.jpg', '3539057592', 'luciano.oreilly@example.org', '2025-10-30 18:37:01', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'hscJb0kH2G', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(27, 753716665, 'Monserrat Lockman', 'Male', '2005-10-17', '36832f33-1b1d-4ae9-8938-bf5b4b27fbf4.jpg', '3518354624', 'jessyca70@example.net', '2025-10-30 18:37:02', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'jpQuI1ph3S', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(28, 751158356, 'Amy Rath', 'Female', '2025-09-17', '73f6e583-adba-486c-80c5-4bd8256ae14d.jpg', '3567970024', 'brice.lindgren@example.com', '2025-10-30 18:37:02', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', '6dwVlCX7tS', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(29, 757187862, 'Elmira Bogisich', 'Female', '2012-09-16', '1ee6fb72-2f76-4df6-9bc8-2bed71dd7796.jpg', '3538046246', 'fquitzon@example.org', '2025-10-30 18:37:03', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'qGPtyk4ycO', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(30, 750470781, 'Hadley Torphy', 'Male', '1986-11-21', 'c9c7f807-7f54-4760-bd37-25745ee1306b.jpg', '3276629112', 'sid.prosacco@example.org', '2025-10-30 18:37:04', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'N8pQ5vqsrz', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(31, 755815658, 'Grover O\'Kon', 'Male', '2021-11-16', 'bebcec81-38ff-42ac-85f5-7c0b1bf78e09.jpg', '3359792857', 'upadberg@example.com', '2025-10-30 18:37:04', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'O5OwExtuyi', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(32, 754371743, 'Dock Hartmann', 'Male', '2009-09-28', 'd37b1209-903e-43ce-9c36-a4e425b01b52.jpg', '3106385529', 'leanna33@example.com', '2025-10-30 18:37:05', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'UXSdQYx98L', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(33, 757514711, 'Brandy Runolfsdottir', 'Female', '2023-09-06', '950f0942-0c9c-4259-b26c-40bc4e0120cd.jpg', '3912313494', 'wilkinson.avis@example.org', '2025-10-30 18:37:06', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'UI3xlFyIKG', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(34, 751749590, 'Lorna Hintz', 'Female', '1972-08-06', 'c9eeb9f2-e50b-49ed-9d3c-11941d76f48f.jpg', '3691834752', 'barton.dustin@example.com', '2025-10-30 18:37:07', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'TkWSRlbdBD', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(35, 753410463, 'Cyrus Kessler', 'Male', '1973-04-10', '2629dd8d-a341-44ce-9543-045af2bb55a4.jpg', '3348722239', 'jason19@example.org', '2025-10-30 18:37:07', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'bQKqLYrU80', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(36, 753671082, 'Jerrod Crist', 'Male', '1990-07-12', 'c34e9bef-bbaa-4991-94b5-f49d91db4f71.jpg', '3496324105', 'hammes.muriel@example.net', '2025-10-30 18:37:08', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', '6Su82mLOsX', '2025-10-30 18:37:30', '2025-10-30 18:37:30'),
(37, 752430552, 'Emie Conroy', 'Female', '2007-01-14', 'a2f73e85-ad01-473b-97c7-9932879967b2.jpg', '3777125070', 'jayden72@example.com', '2025-10-30 18:37:14', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'Z9rAElXwHl', '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(38, 754434024, 'Jennings Morissette', 'Male', '1980-09-20', '64b1d308-b9ee-46a5-98aa-48da2d096b9d.jpg', '3875401732', 'kaylie.conn@example.com', '2025-10-30 18:37:14', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'KRAYQvSSpS', '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(39, 750734113, 'Ayden Beahan', 'Male', '1982-11-09', '36364ad5-1c0a-41c0-a56e-71d501613869.jpg', '3100826485', 'emarvin@example.org', '2025-10-30 18:37:15', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'nUkvvigNUP', '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(40, 750200052, 'Talon Reichert', 'Male', '1971-11-27', 'b71244ba-049d-4148-8658-3ba3f5ad3fc8.jpg', '3367089345', 'ana.predovic@example.com', '2025-10-30 18:37:16', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'NThQ2Qh6eV', '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(41, 759063041, 'Garland Rowe', 'Male', '1972-12-30', '6d613e75-c1fb-4b3a-8f89-4d7ed0949439.jpg', '3171429351', 'frederik42@example.net', '2025-10-30 18:37:17', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'GEXempizXJ', '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(42, 759352587, 'Adelbert Grimes', 'Male', '1997-03-26', 'fd4994cb-2144-41b9-967d-fc577df37dde.jpg', '3596137974', 'forest.marvin@example.com', '2025-10-30 18:37:18', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'K26Zjf3b9D', '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(43, 750020990, 'Taryn Kohler', 'Female', '2000-09-11', 'e5b700ef-40af-4d4b-824d-c85d66615801.jpg', '3020245239', 'urunolfsdottir@example.com', '2025-10-30 18:37:24', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', '2F4A1JDTD8', '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(44, 757662155, 'Barney Christiansen', 'Male', '1993-11-15', '22749769-f142-4c6e-a3e8-3a48cbcafa6e.jpg', '3648602261', 'crist.arnoldo@example.net', '2025-10-30 18:37:25', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', '4KAp7qo7My', '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(45, 752901948, 'Eliza Ratke', 'Female', '2020-04-07', 'd8a9efe4-dfb6-4ec2-82eb-d65b776b2711.jpg', '3408169815', 'reichert.hershel@example.com', '2025-10-30 18:37:25', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'AOeQIAfEqu', '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(46, 756541966, 'Donald Bahringer', 'Male', '1992-05-18', '86e59c32-5890-415c-a98b-0ec2adf57595.jpg', '3750677095', 'kiana.nikolaus@example.net', '2025-10-30 18:37:26', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'W7WoMGTCuv', '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(47, 751425623, 'Octavia Brakus', 'Female', '2021-08-28', '0fda6c91-1dd6-4af3-8022-32af24e40219.jpg', '3166547609', 'hkilback@example.com', '2025-10-30 18:37:27', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', '1edWC3T4DA', '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(48, 752209296, 'Demetrius Thiel', 'Male', '1974-11-23', 'a8963cee-0bfd-4f05-9b3b-8695194ed220.jpg', '3243293371', 'gennaro.daugherty@example.org', '2025-10-30 18:37:28', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'Ts3hOfWjDJ', '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(49, 759640104, 'Marvin Smith', 'Male', '1973-03-10', '9e07458e-f854-4e83-b84d-8eadbd42ea58.jpg', '3597869500', 'nbogan@example.com', '2025-10-30 18:37:28', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'uBAZ3QzziW', '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(50, 758557341, 'Estrella Runte', 'Female', '2008-06-17', 'b6fd9fb5-1137-46d5-be66-5d206f8e9ab6.jpg', '3894148886', 'edwardo.collins@example.org', '2025-10-30 18:37:29', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'k8qhHgiIZx', '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(51, 750501049, 'Otha Kemmer', 'Female', '1992-03-03', 'd08f9a32-7d09-436b-8e70-6541a1a2c069.jpg', '3493252204', 'tiara32@example.com', '2025-10-30 18:37:30', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'cwX3HN0JOq', '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(52, 756034942, 'Gertrude Bayer', 'Female', '1996-08-16', 'abb435e2-0710-413a-80e4-1a06b43599ed.jpg', '3190540038', 'wolff.ceasar@example.net', '2025-10-30 18:37:30', '$2y$12$wudQJ5LoWyqKZA5OcBjZlu8RwyF1aFeYbfCGuvJKfVV4wWr3Zr0By', 1, 'customer', 'zUivCFoLMu', '2025-10-30 18:37:31', '2025-10-30 18:37:31'),
(53, 585257854, 'rdfkygulkg', 'Female', '2025-11-12', 'no-photo.webp', '47542585', 'mariaf@gmail.com', NULL, '$2y$12$CB4DBF1Gbwv/9eLTo7ylcuHVr8YMnQVC7yeW8zelwMQRafIUJxgb2', 1, 'customer', NULL, '2025-11-13 03:07:26', '2025-11-13 03:07:26'),
(55, 563, 'Michi', 'Female', '2003-06-05', '1763648288.jpg', '3102564879', 'michi@gmail.com', NULL, '$2y$12$sYC770sHuAJq1dyADrd/ZuG.ye/OQtvw9Q5VSym4uSge8dtIoRgIa', 1, 'customer', NULL, '2025-11-20 19:18:08', '2025-11-20 19:18:08'),
(56, 641236, 'Ramoncito', 'Male', '2005-09-06', '1763648653.png', '555245', 'ramoncito@gmail.com', NULL, '$2y$12$feAIcgheqvZrpYkM92lWA.TWJPdCkzNys9u.2IY.ofivy0syisy9K', 1, 'customer', NULL, '2025-11-20 19:24:13', '2025-11-20 19:24:13'),
(57, 45545, 'Sandy', 'Female', '2016-06-04', '1763652566.jpg', '324796248', 'sandy@gmail.com', NULL, '$2y$12$.v/j5w6ywj0jUKd81774pOPxr1fGFW4UTnpD0doKkwPpw.5gSKt2S', 1, 'customer', NULL, '2025-11-20 20:29:26', '2025-11-20 20:29:26'),
(58, 485596, 'licenciado Oscar', 'Male', '2009-06-05', '1763653004.jpg', '32148962', 'lic.oscar@gmail.com', NULL, '$2y$12$FtjqtshgqJYU9nObHl014e99G3agWxaqWscrybhxBis24H5N9JPzu', 1, 'customer', NULL, '2025-11-20 20:36:44', '2025-11-20 20:36:44'),
(59, 2148626, 'REinalada', 'Female', '2004-02-19', '1763756472.jpg', '2289663', 'reinalda@gmail.com', NULL, '$2y$12$MERjJYyxnGKaSfiMwWgK1uS.k8Egdtiw5gAKS.wbd5XyczBY3r7RK', 1, 'customer', NULL, '2025-11-20 20:39:36', '2025-11-22 01:21:12'),
(60, 4863256, 'Nabidad', 'Male', '2001-06-05', '1763653529.jpg', '886574124574', 'nabidad@gmail.com', NULL, '$2y$12$mYYs55L5r1azCCkqigyjH.qV/SpyIAHa79q5CiWIXLS3lmcAgRwMS', 1, 'customer', NULL, '2025-11-20 20:45:29', '2025-11-20 20:45:29'),
(64, 5745, 'ofac', 'Male', '2001-01-24', '1763763038.jpg', '5854226742', 'ofac@gmail.com', NULL, '$2y$12$stse6BKrJhkWXlpI9X3KROjxD6hu25dA9U0QmXWfQobjcEwPt6aBi', 1, 'customer', NULL, '2025-11-22 03:10:38', '2025-11-22 03:10:38'),
(65, 542145742, 'chepe', 'Female', '2006-04-18', '1763763155.webp', '25424', 'chepe@gmail.com', NULL, '$2y$12$YqModZe1A3WaoiiwV6TYwuv9CxiTBhLpNDhBqhD5Ynny4YDdLuEYe', 1, 'customer', NULL, '2025-11-22 03:12:35', '2025-11-22 03:12:35');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adoptions`
--
ALTER TABLE `adoptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adoptions_user_id_foreign` (`user_id`),
  ADD KEY `adoptions_pet_id_foreign` (`pet_id`);

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_document_unique` (`document`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adoptions`
--
ALTER TABLE `adoptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pets`
--
ALTER TABLE `pets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adoptions`
--
ALTER TABLE `adoptions`
  ADD CONSTRAINT `adoptions_pet_id_foreign` FOREIGN KEY (`pet_id`) REFERENCES `pets` (`id`),
  ADD CONSTRAINT `adoptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
