-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Lis 06, 2024 at 01:02 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kino_4tig1`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bilety`
--

CREATE TABLE `bilety` (
  `id` bigint(20) NOT NULL,
  `seans_id` bigint(20) NOT NULL,
  `sprzedawca_id` bigint(20) NOT NULL,
  `klient_id` bigint(20) NOT NULL,
  `cena` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmy`
--

CREATE TABLE `filmy` (
  `id` bigint(20) NOT NULL,
  `tytul` varchar(100) NOT NULL,
  `rezyser` varchar(40) NOT NULL,
  `czas_trwania` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filmy`
--

INSERT INTO `filmy` (`id`, `tytul`, `rezyser`, `czas_trwania`) VALUES
(1, 'Five Nights at Freddys', 'Emma Tammi', 130),
(2, 'Pila', 'James Wan', 102),
(3, 'Fortnite inreallife', 'Baby Gronk', 153);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmy_rodzaj`
--

CREATE TABLE `filmy_rodzaj` (
  `id` bigint(20) NOT NULL,
  `filmy_id` bigint(20) NOT NULL,
  `rodzaj_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id` bigint(20) NOT NULL,
  `imie` varchar(30) NOT NULL,
  `nazwisko` varchar(30) NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `klienci`
--

INSERT INTO `klienci` (`id`, `imie`, `nazwisko`, `mail`) VALUES
(1, 'Marcin', 'Parowa', 'marcinparowa_smarowidlo@wp.pl'),
(2, 'Kevin', 'Hart', 'kevinhart-contact@gmail.com'),
(3, 'Dawid', 'Jaspersky', 'dawidinformatyk4444@onet.pl');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rodzaj_filmu`
--

CREATE TABLE `rodzaj_filmu` (
  `id` bigint(20) NOT NULL,
  `nazwa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rodzaj_filmu`
--

INSERT INTO `rodzaj_filmu` (`id`, `nazwa`) VALUES
(1, 'Thriller'),
(2, 'Komedia'),
(3, 'Horror');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sale`
--

CREATE TABLE `sale` (
  `id` bigint(20) NOT NULL,
  `ilosc_miejsc` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `ilosc_miejsc`) VALUES
(1, 230),
(2, 200),
(3, 184);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `seanse`
--

CREATE TABLE `seanse` (
  `id` bigint(20) NOT NULL,
  `termin` datetime NOT NULL,
  `sala_id` bigint(20) NOT NULL,
  `film_id` bigint(20) NOT NULL,
  `liczba_wolnych_miejsc` bigint(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sprzedawcy`
--

CREATE TABLE `sprzedawcy` (
  `id` bigint(20) NOT NULL,
  `imie` varchar(30) NOT NULL,
  `nazwisko` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sprzedawcy`
--

INSERT INTO `sprzedawcy` (`id`, `imie`, `nazwisko`) VALUES
(1, 'Rafal', 'Masny'),
(2, 'Robert', 'Pasut'),
(3, 'Czarek', 'Jozwik');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `bilety`
--
ALTER TABLE `bilety`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seans_id` (`seans_id`),
  ADD KEY `sprzedawca_id` (`sprzedawca_id`),
  ADD KEY `klient_id` (`klient_id`);

--
-- Indeksy dla tabeli `filmy`
--
ALTER TABLE `filmy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `filmy_rodzaj`
--
ALTER TABLE `filmy_rodzaj`
  ADD PRIMARY KEY (`id`),
  ADD KEY `filmy_id` (`filmy_id`),
  ADD KEY `rodzaj_id` (`rodzaj_id`);

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `rodzaj_filmu`
--
ALTER TABLE `rodzaj_filmu`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `seanse`
--
ALTER TABLE `seanse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_id` (`film_id`),
  ADD KEY `sala_id` (`sala_id`);

--
-- Indeksy dla tabeli `sprzedawcy`
--
ALTER TABLE `sprzedawcy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filmy`
--
ALTER TABLE `filmy`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `filmy_rodzaj`
--
ALTER TABLE `filmy_rodzaj`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rodzaj_filmu`
--
ALTER TABLE `rodzaj_filmu`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seanse`
--
ALTER TABLE `seanse`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sprzedawcy`
--
ALTER TABLE `sprzedawcy`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bilety`
--
ALTER TABLE `bilety`
  ADD CONSTRAINT `bilety_ibfk_1` FOREIGN KEY (`sprzedawca_id`) REFERENCES `sprzedawcy` (`id`),
  ADD CONSTRAINT `bilety_ibfk_2` FOREIGN KEY (`klient_id`) REFERENCES `klienci` (`id`),
  ADD CONSTRAINT `bilety_ibfk_3` FOREIGN KEY (`seans_id`) REFERENCES `seanse` (`id`);

--
-- Constraints for table `filmy_rodzaj`
--
ALTER TABLE `filmy_rodzaj`
  ADD CONSTRAINT `filmy_rodzaj_ibfk_1` FOREIGN KEY (`rodzaj_id`) REFERENCES `rodzaj_filmu` (`id`),
  ADD CONSTRAINT `filmy_rodzaj_ibfk_2` FOREIGN KEY (`filmy_id`) REFERENCES `filmy` (`id`);

--
-- Constraints for table `seanse`
--
ALTER TABLE `seanse`
  ADD CONSTRAINT `seanse_ibfk_1` FOREIGN KEY (`sala_id`) REFERENCES `sale` (`id`),
  ADD CONSTRAINT `seanse_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `filmy` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
