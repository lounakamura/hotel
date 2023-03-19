-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Mar 2023, 17:52
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `hotel`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `account`
--

CREATE TABLE `account` (
  `account_id` tinyint(4) NOT NULL,
  `username` varchar(32) COLLATE utf8mb4_polish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `account`
--

INSERT INTO `account` (`account_id`, `username`, `password`, `is_admin`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `first_name` varchar(64) COLLATE utf8mb4_polish_ci NOT NULL,
  `last_name` varchar(64) COLLATE utf8mb4_polish_ci NOT NULL,
  `phone` varchar(64) COLLATE utf8mb4_polish_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `guest`
--

INSERT INTO `guest` (`guest_id`, `first_name`, `last_name`, `phone`, `email`) VALUES
(1, 'Walter', 'White', '666666666', 'walter@white.com'),
(2, 'Jesse', 'Pinkman', '+48 123 456 789', 'jesse@pinkman.pl'),
(3, 'Bill', 'Gates', '+00 000 000 000', 'bill.gates@gmail.com'),
(4, 'Skyler', 'White', '987 654 321', 'skyler@white.com'),
(5, 'Elon', 'Musk', '+1 111 111 111', 'elonmusk@twitter.spacex'),
(6, 'Selena', 'Gomez', '555 555 555', 'gomezselena@gmail.com'),
(7, 'Adam', 'Mickiewicz', '+9 999 999 999', 'adammickiewicz@onet.pl'),
(8, 'Juliusz', 'Słowacki', '+7 777 777 777', 'juliusz@slowacki.pl'),
(9, 'Wednesday', 'Addams', '+1234567890', 'waddams@gmail.com'),
(10, 'Krzysztof', 'Biskup', '+1010101010', 'krzysztof.biskup@gmail.com'),
(11, 'Bill', 'Nye', '+6 999 333 111', 'bill@nye.com'),
(12, 'Alicja', 'Dębska', '+48 000 111 222', 'alicja@debska.pl'),
(13, 'Norbert', 'Gierczak', '732 123 675', 'norbert.gierczak@interia.pl'),
(14, 'Karol', 'Wiśniewski', '555 666 777', 'friz@friz.friz'),
(16, 'Bill', 'Pinkman', '+1 111 111 111', 'walter@white.com'),
(17, 'Selena', 'Pinkman', '987 654 321', 'walter@white.com'),
(18, 'Skyler', 'Musk', '+1 111 111 111', 'walter@white.com'),
(19, 'Jesse', 'Mickiewicz', '987 654 321', 'walter@white.com'),
(20, 'Walter', 'Gates', '666666666', 'walter@white.com'),
(21, 'Elon', 'White', '987 654 321', 'walter@white.com'),
(22, 'Elon', 'Pinkman', '+00 000 000 000', 'walter@white.com'),
(23, 'Elon', 'White', '+48 123 456 789', 'walter@white.com');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `full_name` varchar(64) COLLATE utf8mb4_polish_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_polish_ci NOT NULL,
  `message` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `message`
--

INSERT INTO `message` (`message_id`, `full_name`, `email`, `message`) VALUES
(1, 'Full name', 'email@email.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tempus fermentum laoreet. Etiam accumsan molestie nunc, a bibendum tellus posuere ac. Aliquam semper, lectus eu convallis gravida, velit sem viverra sem, sit amet ultricies metus lorem consequat nisl. Maecenas dictum aliquam eleifend. Donec elit justo, molestie in faucibus vel, accumsan at nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent sed lorem id augue pharetra ultrices. Aliquam molestie risus sapien, sit amet tempus dui vulputate a. Nam ac lacinia orci. Integer vel porttitor nunc. Ut scelerisque risus eget tellus rhoncus, vitae blandit ipsum laoreet.\r\n\r\nIn facilisis tellus sapien, sed consectetur nunc eleifend at. Vivamus quam turpis, finibus sed magna congue, fringilla molestie orci. Nunc tempor porttitor cursus. Ut suscipit, tortor sed dictum feugiat, risus augue blandit turpis, ac dictum justo ipsum eu purus. Nulla eu nunc tristique, congue purus quis, sodales sem. Vestibulum malesuada, diam at porttitor feugiat, ante felis consequat risus, ut mollis nunc erat vitae libero. Pellentesque vitae risus ut lorem finibus varius in a sapien. Fusce eleifend erat sapien, ut dapibus mauris porttitor vel. Vivamus vestibulum auctor gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at ultricies lorem. Nulla lobortis tortor quis sem sagittis auctor. Praesent vitae urna commodo, cursus dolor non, feugiat sem.\r\n\r\nSuspendisse nec auctor enim. Pellentesque bibendum, orci in suscipit volutpat, ante purus gravida mi, nec auctor lacus est nec turpis. Aliquam faucibus euismod tellus, eget eleifend purus ultrices et. Aenean metus turpis, aliquam congue odio sed, lacinia varius enim. Vivamus et malesuada nisl. In hac habitasse platea dictumst. Cras vitae tortor ac mauris consequat gravida ac eu purus. Integer egestas lacus nisi, et lacinia lectus dignissim ac. Quisque lacinia mauris quis tellus interdum laoreet. Duis a viverra dui. Integer ut efficitur mi, ut gravida nunc. Sed tempor, massa in efficitur cursus, ipsum nibh dignissim felis, nec ornare eros dolor eu mauris. Etiam venenatis pharetra est quis varius. Ut metus sapien, semper sit amet sapien ac, commodo mollis odio. Duis nec leo rutrum, elementum metus non, convallis nisi.\r\n\r\nAliquam erat volutpat. Curabitur eget vestibulum justo. Maecenas vitae vulputate turpis. Fusce pellentesque tempus leo in ullamcorper. Vestibulum metus leo, mollis sit amet venenatis eu, lacinia a justo. Donec at gravida felis. Duis dictum, magna ac fringilla porttitor, leo quam aliquam metus, vel interdum neque turpis at ipsum. Pellentesque molestie nisi dolor, vel consequat mi egestas eget. Phasellus non pretium sapien. Vivamus convallis venenatis iaculis. Proin nisl enim, semper in vestibulum eu, volutpat et arcu. Curabitur a ornare augue. Integer sed leo aliquet, molestie ipsum vel, sodales risus. Aliquam imperdiet scelerisque justo, ut consequat ante tincidunt in. Nunc rutrum ultrices sem id laoreet. Aliquam maximus id urna et porta.'),
(2, 'Full name', 'email3@email.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tempus fermentum laoreet. Etiam accumsan molestie nunc, a bibendum tellus posuere ac. Aliquam semper, lectus eu convallis gravida, velit sem viverra sem, sit amet ultricies metus lorem consequat nisl. Maecenas dictum aliquam eleifend. Donec elit justo, molestie in faucibus vel, accumsan at nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent sed lorem id augue pharetra ultrices. Aliquam molestie risus sapien, sit amet tempus dui vulputate a. Nam ac lacinia orci. Integer vel porttitor nunc. Ut scelerisque risus eget tellus rhoncus, vitae blandit ipsum laoreet.\r\n\r\nIn facilisis tellus sapien, sed consectetur nunc eleifend at. Vivamus quam turpis, finibus sed magna congue, fringilla molestie orci. Nunc tempor porttitor cursus. Ut suscipit, tortor sed dictum feugiat, risus augue blandit turpis, ac dictum justo ipsum eu purus. Nulla eu nunc tristique, congue purus quis, sodales sem. Vestibulum malesuada, diam at porttitor feugiat, ante felis consequat risus, ut mollis nunc erat vitae libero. Pellentesque vitae risus ut lorem finibus varius in a sapien. Fusce eleifend erat sapien, ut dapibus mauris porttitor vel. Vivamus vestibulum auctor gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at ultricies lorem. Nulla lobortis tortor quis sem sagittis auctor. Praesent vitae urna commodo, cursus dolor non, feugiat sem.\r\n\r\nSuspendisse nec auctor enim. Pellentesque bibendum, orci in suscipit volutpat, ante purus gravida mi, nec auctor lacus est nec turpis. Aliquam faucibus euismod tellus, eget eleifend purus ultrices et. Aenean metus turpis, aliquam congue odio sed, lacinia varius enim. Vivamus et malesuada nisl. In hac habitasse platea dictumst. Cras vitae tortor ac mauris consequat gravida ac eu purus. Integer egestas lacus nisi, et lacinia lectus dignissim ac. Quisque lacinia mauris quis tellus interdum laoreet. Duis a viverra dui. Integer ut efficitur mi, ut gravida nunc. Sed tempor, massa in efficitur cursus, ipsum nibh dignissim felis, nec ornare eros dolor eu mauris. Etiam venenatis pharetra est quis varius. Ut metus sapien, semper sit amet sapien ac, commodo mollis odio. Duis nec leo rutrum, elementum metus non, convallis nisi.\r\n\r\nAliquam erat volutpat. Curabitur eget vestibulum justo. Maecenas vitae vulputate turpis. Fusce pellentesque tempus leo in ullamcorper. Vestibulum metus leo, mollis sit amet venenatis eu, lacinia a justo. Donec at gravida felis. Duis dictum, magna ac fringilla porttitor, leo quam aliquam metus, vel interdum neque turpis at ipsum. Pellentesque molestie nisi dolor, vel consequat mi egestas eget. Phasellus non pretium sapien. Vivamus convallis venenatis iaculis. Proin nisl enim, semper in vestibulum eu, volutpat et arcu. Curabitur a ornare augue. Integer sed leo aliquet, molestie ipsum vel, sodales risus. Aliquam imperdiet scelerisque justo, ut consequat ante tincidunt in. Nunc rutrum ultrices sem id laoreet. Aliquam maximus id urna et porta.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `no_of_guests` tinyint(4) NOT NULL,
  `room_number` smallint(6) NOT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `guest_id`, `start_date`, `end_date`, `no_of_guests`, `room_number`, `total_price`, `created`) VALUES
(1, 1, '2023-03-17', '2023-03-31', 3, 1, '9100', '2023-03-16 17:56:49'),
(2, 2, '2023-03-20', '2023-03-26', 2, 2, '3900', '2023-03-16 17:58:49'),
(3, 3, '2023-03-17', '2023-03-31', 1, 3, '9100', '2023-03-16 17:59:50'),
(4, 4, '2023-03-18', '2023-03-28', 2, 4, '6500', '2023-03-16 18:01:02'),
(5, 5, '2023-03-21', '2023-03-25', 3, 5, '2600', '2023-03-16 18:01:50'),
(6, 6, '2023-03-22', '2023-03-24', 1, 6, '1300', '2023-03-16 18:02:57'),
(7, 7, '2023-03-20', '2023-03-23', 2, 7, '1950', '2023-03-16 18:16:18'),
(8, 8, '2023-03-21', '2023-03-22', 2, 8, '650', '2023-03-16 18:16:42'),
(9, 9, '2023-03-17', '2023-03-31', 3, 9, '9100', '2023-03-16 18:17:51'),
(10, 10, '2023-03-17', '2023-03-31', 2, 10, '9100', '2023-03-16 18:18:35'),
(11, 11, '2023-03-20', '2023-03-21', 1, 6, '650', '2023-03-16 20:41:25'),
(12, 12, '2023-03-17', '2023-03-20', 2, 5, '1950', '2023-03-16 20:51:39'),
(13, 13, '2023-03-17', '2023-03-20', 2, 8, '1950', '2023-03-16 20:53:15'),
(14, 14, '2023-03-17', '2023-03-19', 1, 2, '1300', '2023-03-16 20:54:03'),
(15, 1, '2023-03-17', '2023-03-19', 1, 6, '1300', '2023-03-16 20:56:56'),
(16, 1, '2023-03-17', '2023-03-19', 1, 7, '1300', '2023-03-16 20:57:08'),
(17, 1, '2023-03-17', '2023-03-17', 1, 4, '650', '2023-03-16 21:24:19'),
(19, 1, '2023-07-01', '2023-07-31', 9, 101, '150000', '2023-03-18 16:39:57'),
(20, 1, '2023-04-01', '2023-04-01', 2, 11, '650', '2023-03-19 16:16:58'),
(21, 1, '2023-04-01', '2023-04-01', 2, 12, '650', '2023-03-19 16:18:09'),
(22, 16, '2023-04-01', '2023-04-01', 3, 13, '650', '2023-03-19 16:18:26'),
(23, 17, '2023-04-01', '2023-04-01', 3, 14, '650', '2023-03-19 16:19:49'),
(24, 18, '2023-04-01', '2023-04-01', 3, 15, '650', '2023-03-19 16:20:53'),
(25, 19, '2023-04-01', '2023-04-01', 3, 16, '650', '2023-03-19 16:21:05'),
(26, 20, '2023-04-01', '2023-04-01', 3, 17, '650', '2023-03-19 16:21:19'),
(27, 21, '2023-04-01', '2023-04-01', 3, 18, '650', '2023-03-19 16:21:32'),
(28, 22, '2023-04-01', '2023-04-01', 2, 19, '650', '2023-03-19 16:21:42'),
(29, 23, '2023-04-01', '2023-04-01', 2, 20, '650', '2023-03-19 16:21:52');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `room`
--

CREATE TABLE `room` (
  `room_number` smallint(6) NOT NULL,
  `room_type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `room`
--

INSERT INTO `room` (`room_number`, `room_type`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3),
(26, 3),
(27, 3),
(28, 3),
(29, 3),
(30, 3),
(31, 4),
(32, 4),
(33, 4),
(34, 4),
(35, 4),
(36, 4),
(37, 4),
(38, 4),
(39, 4),
(40, 4),
(41, 5),
(42, 5),
(43, 5),
(44, 5),
(45, 5),
(46, 5),
(47, 5),
(48, 5),
(49, 5),
(50, 5),
(51, 6),
(52, 6),
(53, 6),
(54, 6),
(55, 6),
(56, 6),
(57, 6),
(58, 6),
(59, 6),
(60, 6),
(61, 7),
(62, 7),
(63, 7),
(64, 7),
(65, 7),
(66, 7),
(67, 7),
(68, 7),
(69, 7),
(70, 7),
(71, 8),
(72, 8),
(73, 8),
(74, 8),
(75, 8),
(76, 8),
(77, 8),
(78, 8),
(79, 8),
(80, 8),
(81, 9),
(82, 9),
(83, 9),
(84, 9),
(85, 9),
(86, 9),
(87, 9),
(88, 9),
(89, 9),
(90, 9),
(91, 10),
(92, 10),
(93, 10),
(94, 10),
(95, 10),
(96, 10),
(97, 10),
(98, 10),
(99, 10),
(100, 10),
(101, 11),
(102, 11),
(103, 11),
(104, 11),
(105, 11),
(106, 11),
(107, 11),
(108, 11),
(109, 11),
(110, 11);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `room_type`
--

CREATE TABLE `room_type` (
  `room_id` tinyint(11) NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_polish_ci NOT NULL,
  `guests` tinyint(4) NOT NULL,
  `beds` tinyint(4) NOT NULL,
  `bathrooms` tinyint(4) NOT NULL,
  `size` smallint(4) NOT NULL COMMENT '[m2]',
  `price_per_night` decimal(10,0) NOT NULL COMMENT '[$]'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `room_type`
--

INSERT INTO `room_type` (`room_id`, `name`, `guests`, `beds`, `bathrooms`, `size`, `price_per_night`) VALUES
(1, 'Deluxe Room', 3, 2, 1, 50, '650'),
(2, 'Deluxe Palm Court Room', 3, 2, 1, 50, '650'),
(3, 'Deluxe River-View Room', 3, 2, 1, 50, '750'),
(4, 'Premier River-View Room', 3, 2, 1, 50, '800'),
(5, 'Studio Family Suite', 7, 2, 1, 77, '850'),
(6, 'Studio River-View Suite', 3, 2, 1, 80, '1000'),
(7, 'Studio River-View Terrace Suite', 3, 2, 1, 200, '2000'),
(8, 'Executive Suite', 3, 2, 1, 125, '1700'),
(9, 'Deluxe River-View Two Bedroom Suite', 6, 5, 2, 195, '2300'),
(10, 'Riverside Terrace Suite', 3, 2, 1, 248, '2600'),
(11, 'Riverfront Penthouse', 9, 7, 3, 450, '5000');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indeksy dla tabeli `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indeksy dla tabeli `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indeksy dla tabeli `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `guest_id` (`guest_id`),
  ADD KEY `room_number` (`room_number`);

--
-- Indeksy dla tabeli `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_number`),
  ADD KEY `room_type` (`room_type`);

--
-- Indeksy dla tabeli `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `account`
--
ALTER TABLE `account`
  MODIFY `account_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT dla tabeli `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT dla tabeli `room`
--
ALTER TABLE `room`
  MODIFY `room_number` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT dla tabeli `room_type`
--
ALTER TABLE `room_type`
  MODIFY `room_id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`guest_id`) REFERENCES `guest` (`guest_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`room_number`) REFERENCES `room` (`room_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`room_type`) REFERENCES `room_type` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
