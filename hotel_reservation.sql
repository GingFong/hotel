-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 29 jun 2023 om 18:39
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_reservation`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `room`, `check_in`, `check_out`, `adults`, `children`, `days`) VALUES
(1, 'gugj', 'Ilyasb1dd60@gmail.comcec', 'Single', '2023-07-06', '2023-07-04', 2, 1, 0),
(2, 'gugj', 'Ilyasb1dd60@gmail.comcec', 'Single', '2023-07-06', '2023-07-04', 2, 1, 0),
(3, '1', '1', 'Single', '2023-07-05', '2023-07-04', 1, 1, 0),
(4, 'hvhjk', 's', 'Single', '2023-07-04', '2023-07-05', 1, 1, 0),
(5, 'hvhjk', 's', 'Single', '2023-07-04', '2023-07-05', 1, 1, 0),
(6, '1', '1', 'Single', '2023-07-04', '2023-07-04', 1, 1, 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
