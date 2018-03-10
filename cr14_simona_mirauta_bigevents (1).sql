-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 10. Mrz 2018 um 15:33
-- Server-Version: 10.1.30-MariaDB
-- PHP-Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr14_simona_mirauta_bigevents`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `event`
--

CREATE TABLE `event` (
  `id` int(21) NOT NULL,
  `name` varchar(30) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(50) NOT NULL,
  `capacity` int(15) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone_nr` int(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `URL` varchar(75) NOT NULL,
  `type` enum('music','sport','movie','theater') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `event`
--

INSERT INTO `event` (`id`, `name`, `start_date`, `end_date`, `description`, `image`, `capacity`, `email`, `phone_nr`, `address`, `URL`, `type`) VALUES
(1, 'Wanda', '2018-03-02 00:00:00', '2018-03-21 00:00:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.', 'img/wanda.jpg', 1500, 'wanda@gmail.com', 2147483647, 'Dr. Roland Rainer Platz / Eingang Märzpark, 1150 Wien', 'http://www.posthalle.de/', 'music'),
(2, 'Ballet Revolucion', '2018-03-20 00:00:00', '2018-03-25 00:00:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.', 'img/ballet_revolucion.jpg', 1000, 'wanda@gmail.com', 345483647, 'Museumsplatz 1 1070 Wien', 'https://events.wien.info/en/55f/ballet-revolucion/', 'theater'),
(3, 'Chelsea Live', '2018-03-09 00:00:00', '2018-03-31 00:00:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.', 'img/chelsea_1.jpg', 200, 'www.chelsea.co.at', 1234567, 'Lerchenfelder Gürtel, Stadtbahnbögen 29-30 \r\n1080 Wien', 'www.chelsea.co.at', 'sport'),
(5, 'Ballet: Giselle', '2018-03-02 00:00:00', '2018-03-20 00:00:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lore', 'img/Giselle.jpg', 1234567, 'smirauta@gmx.at', 234567, 'am teirutz 39', 'http://www.google.com', 'music'),
(6, 'Tribute to Frank Sinatra', '2018-03-02 00:00:00', '2018-03-20 00:00:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lore', 'img/MozartSaalNeu_1.jpg', 123, 'mi@asd.com', 45678, 'wienerstr 12', 'http://google.com', 'music'),
(7, 'Dance classes', '2018-03-02 00:00:00', '2018-03-20 00:00:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lore', 'img/dance_classes.jpg', 123, 'mi@asd.com', 23456, 'karlsplatz 3', 'http://www.google.com', 'music'),
(8, 'Viennese waltz', '2018-03-02 00:00:00', '2018-03-20 00:00:00', 'hgfgfsgf', 'img/image_teaser-small.jpg', 234, 'simona_c99@yahoo.de', 4567, 'wÃ¤hrjhl 12', 'http://www.google.com', 'movie');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'admin', 'admin@admin.com', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `event`
--
ALTER TABLE `event`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
