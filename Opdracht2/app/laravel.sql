-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 25 jan 2017 om 20:48
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `votes` bigint(20) NOT NULL,
  `posted_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `url`, `votes`, `posted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Google test', 'https://www.google.be', 1, 'Pieter Melis', '2017-01-22 12:17:59', '2017-01-24 23:22:51', NULL),
(3, 'The KdG website', 'https://intranet.student.kdg.be/', 2, 'Pieter Melis', '2017-01-22 12:18:11', '2017-01-24 23:38:40', NULL),
(4, 'The laravel website !!', 'https://www.laravel.com', 0, 'Pieter Melis', '2017-01-24 14:36:53', '2017-01-24 23:24:30', NULL),
(5, 'This is a test from another user', 'https://www.facebook.com/pieter.meils', 0, 'Pieter Melis2', '2017-01-24 23:29:59', '2017-01-24 23:29:59', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `posted_article` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `posted_article`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pieter Melis', 'test', 1, '2017-01-22 12:17:36', '2017-01-22 12:17:36', NULL),
(10, 'Pieter Melis', 'test12', 2, '2017-01-23 14:13:28', '2017-01-23 14:13:49', NULL),
(11, 'Pieter Melis', 'eee', 2, '2017-01-23 14:13:31', '2017-01-23 14:13:31', NULL),
(12, 'Pieter Melis', 'test', 3, '2017-01-24 15:56:02', '2017-01-24 15:56:02', NULL),
(13, 'Pieter Melis2', 'This is a comment from another user!', 5, '2017-01-24 23:30:21', '2017-01-24 23:35:10', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(22, '2017_01_03_131246_articles', 2),
(23, '2017_01_08_145656_create_comments_table', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pieter Melis', 'pieter.melis@hotmail.com', '$2y$10$Gk8VaHFvu50k7Q70igwAOOV8Eh4.5dyzFmXnXewLdB8nYJMLUT4ri', 'wBIPMRdtj65gkyxrcRDTUkqmtuAvQFZzquJRTIeJ6hAVGhnXknpeeomFshlK', '2017-01-10 21:09:57', '2017-01-24 23:24:41'),
(3, 'Pieter Melis2', 'pieter.melis2@hotmail.com', '$2y$10$Okg0NCbPcYJhA5EaWWbgPeBaRp2MnOol6otrT2NX5CRvllq7rJ9tS', 'QoRgQWhuu5vT16mwQxZvEEfeFnSlQq1SmZqCwR3df7X0oiNUd9m8zQJ3DRW4', '2017-01-16 21:35:03', '2017-01-16 21:56:18'),
(4, 'Pieter Melis', 'test123@hotmail.com2', '$2y$10$bVQ2pVI9ICv9NjCOy5NZZOKaHtSo3EQqFjub3DyHSww8vM6LxkllO', 'S6hVLQcK1LMS4OJGNTm8ES7GhXwRcmF3RCQWij9RkKIRJzvdFXI4O9KRpT5x', '2017-01-24 23:25:15', '2017-01-24 23:25:23');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_title_index` (`title`),
  ADD KEY `articles_url_index` (`url`),
  ADD KEY `articles_posted_by_index` (`posted_by`);

--
-- Indexen voor tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
