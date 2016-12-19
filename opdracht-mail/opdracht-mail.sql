-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 19 dec 2016 om 10:20
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opdracht-mail`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `time_sent` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Gegevens worden geëxporteerd voor tabel `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `email`, `message`, `time_sent`) VALUES
(17, 'pieter.melis@hotmail.com', 'test', '2016-12-18 13:32:24'),
(18, 'pieter.melis@hotmail.com', 'test', '2016-12-18 13:41:37'),
(19, '', '', '2016-12-18 13:43:10'),
(20, '', '', '2016-12-18 13:43:12'),
(21, '', '', '2016-12-18 13:43:14'),
(22, 'pieter.melis@hotmail.com', 'test', '2016-12-18 13:52:15'),
(23, '', '', '2016-12-18 13:52:19'),
(24, '', '', '2016-12-18 13:52:20'),
(25, 'test@test', 'test', '2016-12-18 13:53:22'),
(26, 'test@test', 'test', '2016-12-18 13:55:34'),
(27, 'test@test', 'test', '2016-12-18 13:56:55'),
(28, 'test@test', 'gtet', '2016-12-18 13:57:14'),
(29, 'test@test', 'test', '2016-12-18 13:58:17'),
(30, 'test@test', 'test', '2016-12-18 13:59:04'),
(31, 'test@test', 'test', '2016-12-18 14:00:52'),
(32, 'test@test', 'test', '2016-12-18 14:04:08'),
(33, 'test@test', 'test', '2016-12-18 14:04:56'),
(34, 'test@test', 'test', '2016-12-18 14:07:03'),
(35, 'test@test', 'test', '2016-12-18 14:13:16'),
(36, 'test@test', 'test', '2016-12-18 14:13:52'),
(37, 'test@test', 'test', '2016-12-18 14:14:09'),
(38, 'test@test', 'test', '2016-12-18 14:15:17'),
(39, 'test@test', 'test', '2016-12-18 14:15:23'),
(40, 'test@test', 'test', '2016-12-18 14:15:46'),
(41, 'test@test', 'test', '2016-12-18 14:16:58'),
(42, 'test@test', 'test', '2016-12-18 14:17:07'),
(43, 'test@test', 'test', '2016-12-19 09:34:27');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
