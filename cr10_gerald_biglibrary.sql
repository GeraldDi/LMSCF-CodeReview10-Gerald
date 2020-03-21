-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Mrz 2020 um 14:44
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_gerald_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_gerald_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_gerald_biglibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `image` varchar(120) NOT NULL,
  `author_firstname` varchar(40) NOT NULL,
  `author_lastname` varchar(11) NOT NULL,
  `ISBN` int(11) NOT NULL,
  `short_description` varchar(55) NOT NULL,
  `publish_date` date NOT NULL,
  `type` varchar(40) NOT NULL,
  `publisher_name` varchar(40) NOT NULL,
  `publisher_address` varchar(11) NOT NULL,
  `publisher_size` varchar(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`id`, `title`, `image`, `author_firstname`, `author_lastname`, `ISBN`, `short_description`, `publish_date`, `type`, `publisher_name`, `publisher_address`, `publisher_size`, `status`) VALUES
(1, 'Test1', 'https://images-na.ssl-images-amazon.com/images/I/61-uFOBDLDL.jpg', 'author 1', 'lastname 1', 12345, 'A great book about stuff', '2020-03-03', 'book', 'publisher a', 'street 1', 'big', 0),
(2, 'test2', 'https://images-na.ssl-images-amazon.com/images/I/61-uFOBDLDL.jpg', 'author 2', 'lastname 2', 23456, 'Another nice book about stuff', '2020-03-01', 'book', 'publisher_name', 'street 2', 'medium', 1),
(3, 'test_cd1', 'https://media.gettyimages.com/photos/-picture-id184597525?b=1&k=6&m=184597525&s=612x612&w=0&h=cMtmjW3pFoI05V-iZ9zYdTw9kr', 'author 3', 'lastname 3', 34567, 'Great CD', '2019-03-03', 'cd', 'publisher 3', 'street 3 ', 'big', 1),
(4, 'test_cd2', 'https://media.gettyimages.com/photos/-picture-id184597525?b=1&k=6&m=184597525&s=612x612&w=0&h=cMtmjW3pFoI05V-iZ9zYdTw9kr', 'author 3', 'lastname 3', 34568, 'Another great CD', '2020-03-04', 'cd', 'publisher 3', 'street 3', 'big', 0),
(5, 'test4', 'https://images-na.ssl-images-amazon.com/images/I/61-uFOBDLDL.jpg', 'author 4', 'lastname 4', 67890, 'An interesting book about stuff', '2020-03-15', 'book', 'publisher 2', 'street 2', 'medium', 0),
(6, 'test5', 'https://images-na.ssl-images-amazon.com/images/I/61-uFOBDLDL.jpg', 'author4', 'lastname 4', 78901, 'Another interesting book about stuff', '2017-06-30', 'book', 'publisher 4', 'street b', 'small', 0),
(7, 'dvd1', 'https://www.nierle.com/de/artikel/4786/DVD-R_4,7_GB_Intenso_16x_Speed_in_Cakebox_100_Stk.html', 'author 5', 'lastname 5', 343434, 'A great dvd', '2020-03-02', 'dvd', 'publisher m', 'address m', 'big', 0),
(8, 'dvd2', 'https://www.nierle.com/de/artikel/4786/DVD-R_4,7_GB_Intenso_16x_Speed_in_Cakebox_100_Stk.html', 'author 5', 'lastname 5', 878787, 'An exciting dvd', '2020-02-03', 'dvd', 'publisher_name', 'address m', 'big', 0),
(9, 'test6', 'https://images-na.ssl-images-amazon.com/images/I/61-uFOBDLDL.jpg', 'author k', 'lastname k', 567765, 'Another exciting thriller', '2019-12-17', 'book', 'publisher a', 'street 1', 'big', 0),
(10, 'test7', 'https://images-na.ssl-images-amazon.com/images/I/61-uFOBDLDL.jpg', 'author k', 'lastname k', 789987, 'Great story', '2020-03-17', 'book', 'publisher 2', 'street 2', 'medium', 0),
(11, 'ctest1', 'https://images-na.ssl-images-amazon.com/images/I/61-uFOBDLDL.jpg', 'author n1', 'lastname n2', 111222, 'goog short description', '2020-01-01', 'book', 'publisher n1', 'street n1', 'medium', 0),
(12, 'ntest2', 'https://images-na.ssl-images-amazon.com/images/I/61-uFOBDLDL.jpg', 'author n1', 'lastname n1', 111234, 'helpful description', '2019-02-03', 'book', 'publisher n1', 'address n1', 'medium', 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
