-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 19 dec 2016 om 10:21
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opdracht-security-login`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `hashed_password` varchar(255) NOT NULL,
  `last_login_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `email`, `salt`, `hashed_password`, `last_login_time`) VALUES
(23, 'test@test', '88102293158507f7b67fbf7.49432096', 'cac0029631f578cb01f5ee8ff971ef7523a237333510bf824e2c02b9bc85945ef3680a1146f7c53312a5999912040f61f76f1e342d13e3b5b3dd80d883dab4b5', '2016-12-14'),
(74, 'test@test2', '976071414585312a27192c1.76630133', 'a317278d539f4524bc44a62fc55facb647afa887223b0a8bfded8476d4416c3281fc1dcc86bcc7bf7ccd573cba583a18aacb755461b3ddc4aabf6c527e581b11', '2016-12-15'),
(75, 'robbert@', '20430999235853145155c224.70239773', '181721bfea1aebbf64a0731cd2c5fab79a7d5b6d71722552b5f995858d1e2fc1bbac33f8c96fc741c86d87120235c84c9c6abdd0af1854c582bf46436dc7fc15', '2016-12-15'),
(76, 'test@', '15188132605853244a9de4c5.34432233', '0a1d4a2f2facb196907b10b2866f6324c6c8fa4d52febc2702933ca27255f2de123019c3ee387e37789e3e99dcffbea7d2ddccc0206121e9b3449c1b9b97b100', '2016-12-16'),
(77, 'pieter.melis@hotmail.com', '58401498758532474a73ac4.00186674', 'fa10b524af2ebeb31756fe2124ae8d98df7ce96ed1de989260dab6da8a319b84c3b1e8aaaf58b242b9cb773962d52e988a20aaa452cab6abba8a498454627da0', '2016-12-16');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
