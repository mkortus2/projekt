-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 26 Sty 2023, 20:39
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `biblioteka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `studenci`
--

CREATE TABLE `studenci` (
  `id` int(11) NOT NULL,
  `imie_nazwisko` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `studenci`
--

INSERT INTO `studenci` (`id`, `imie_nazwisko`) VALUES
(1, 'Jan Kowalski'),
(35, 'Grzegorz Nowak'),
(36, 'Anna Stefańska'),
(37, 'Barbara Kowalska'),
(38, 'Stanisław Piotrowski'),
(39, 'Joanna Grzegorzewska'),
(40, 'Marek Mazur'),
(41, 'Robert Nowakowski'),
(42, 'Amelia Dymna'),
(43, 'Allan Kostecki'),
(44, 'Mikołaj Kortus'),
(45, 'Błażej Rzodkiewicz'),
(46, 'Jerzy Jankowski'),
(47, 'Ryszard Król'),
(48, 'Maria Pawłowska'),
(49, 'Józef Kowalczyk'),
(50, 'Stefania Nowakowska'),
(51, 'Krzysztof Lewandowski'),
(52, 'Michał Bąk'),
(53, 'Daria Malinowska');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `studenci`
--
ALTER TABLE `studenci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `studenci`
--
ALTER TABLE `studenci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
