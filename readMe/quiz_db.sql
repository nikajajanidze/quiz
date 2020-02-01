-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2020 at 07:11 PM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `num` int(1) NOT NULL,
  `text` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `num`, `text`) VALUES
(1, 1, 1, 'Ankara'),
(2, 1, 2, 'Madrid'),
(3, 1, 3, 'Erevan'),
(4, 1, 4, 'Baku'),
(5, 2, 1, 'Cat'),
(6, 2, 2, 'Giant panda'),
(7, 2, 3, 'Bear'),
(8, 2, 4, 'Lion'),
(9, 3, 1, 'Yusu'),
(10, 3, 2, 'Superman'),
(11, 3, 3, 'Batman'),
(12, 3, 4, 'Ankara'),
(13, 4, 1, 'Hong Kong'),
(14, 4, 2, 'London'),
(15, 4, 3, 'New-York'),
(16, 4, 4, 'Dubai'),
(17, 5, 1, 'Sahara'),
(18, 5, 2, 'Sonora'),
(19, 5, 3, 'Gareji'),
(20, 5, 4, 'Simora'),
(21, 6, 1, 'Iakuya'),
(22, 6, 2, 'Siberia'),
(23, 6, 3, 'Ural'),
(24, 6, 4, 'Moscow'),
(25, 7, 1, 'Seven'),
(26, 7, 2, 'Ten'),
(27, 7, 3, 'One'),
(28, 7, 4, 'Two'),
(29, 8, 1, 'Sicily'),
(30, 8, 2, 'Sardinia'),
(31, 8, 3, 'Cyprus'),
(32, 8, 4, 'Corsica'),
(33, 9, 1, 'Twenty-one'),
(34, 9, 2, 'Twenty-Two'),
(35, 9, 3, 'Twenty-five'),
(36, 9, 4, 'Twenty-four'),
(37, 10, 1, 'Sonora'),
(38, 10, 2, 'Gobi'),
(39, 10, 3, 'Sahara'),
(40, 10, 4, 'Ordos'),
(41, 11, 1, 'Tiber'),
(42, 11, 2, 'Po'),
(43, 11, 3, 'Piu'),
(44, 11, 4, 'Ziber'),
(45, 12, 1, 'Nigeria'),
(46, 12, 2, 'Zambia'),
(47, 12, 3, 'Zimbabwe'),
(48, 12, 4, 'Tanzania'),
(49, 13, 1, 'Irland'),
(50, 13, 2, 'Greenland'),
(51, 13, 3, 'Iceland'),
(52, 13, 4, 'Nonland'),
(53, 14, 1, 'Ohio'),
(54, 14, 2, 'Colorado'),
(55, 14, 3, 'Alaska'),
(56, 14, 4, 'Georgia'),
(57, 15, 1, 'Asia'),
(58, 15, 2, 'Africa'),
(59, 15, 3, 'Europe'),
(60, 15, 4, 'North America'),
(61, 16, 1, 'Volga'),
(62, 16, 2, 'Lena'),
(63, 16, 3, 'Donau'),
(64, 16, 4, 'Do'),
(65, 17, 1, 'Shuda'),
(66, 17, 2, 'Volga'),
(67, 17, 3, 'Lena'),
(68, 17, 4, 'Po'),
(69, 18, 1, 'Tallin'),
(70, 18, 2, 'Dublin'),
(71, 18, 3, 'Krakow'),
(72, 18, 4, 'Kiev'),
(73, 19, 1, 'Germany'),
(74, 19, 2, 'Spain'),
(75, 19, 3, 'France'),
(76, 19, 4, 'Poland'),
(77, 20, 1, 'Sholu'),
(78, 20, 2, 'Sholulu'),
(79, 20, 3, 'Honolulu'),
(80, 20, 4, 'Monolulu'),
(81, 21, 1, 'Hippo'),
(82, 21, 2, 'Ippo'),
(83, 21, 3, 'Nippon'),
(84, 21, 4, 'Japon'),
(85, 22, 1, 'Latvia'),
(86, 22, 2, 'Bulgaria'),
(87, 22, 3, 'Poland'),
(88, 22, 4, 'Germany'),
(89, 23, 1, 'Toronto'),
(90, 23, 2, 'Vancouver'),
(91, 23, 3, 'Portland'),
(92, 23, 4, 'Alaska'),
(93, 24, 1, 'Melbourne'),
(94, 24, 2, 'Mildura'),
(95, 24, 3, 'Canberra'),
(96, 24, 4, 'Dubbo'),
(97, 25, 1, 'The Mediterranean Sea and The Black Seas'),
(98, 25, 2, 'The Kaspian Sea and The Black Seas'),
(99, 25, 3, 'The Mediterranean Sea and The Red Seas'),
(100, 25, 4, 'The White Sea and The Black Seas');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `text` text NOT NULL,
  `correct_ans_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `text`, `correct_ans_id`) VALUES
(1, 'Geography', 'What is the capital of Turkey?', 1),
(2, 'Geography', 'What is the national animal of China?', 6),
(3, 'Geography', 'Which Turkish city has the name of a cartoon character?', 11),
(4, 'Geography', 'What is the noisiest city in the world?', 13),
(5, 'Geography', 'What is the name of the desert area in Mexico?', 18),
(6, 'Geography', 'What is a very cold part of Russia?', 22),
(7, 'Geography', 'How many continents are there?', 25),
(8, 'Geography', 'On which Italian island is Palermo?', 29),
(9, 'Geography', 'How many time zones are there in the world?', 36),
(10, 'Geography', 'Which is the largest desert on earth?', 39),
(11, 'Geography', 'Which river is flowing through Rome?', 41),
(12, 'Geography', 'Which country did once have the name Rhodesia?', 47),
(13, 'Geography', 'What island, which belonged to Denmark, was independent in 1944?', 51),
(14, 'Geography', 'What is the largest state of the United States?', 55),
(15, 'Geography', 'On which continent can you visit Sierra Leone?', 58),
(16, 'Geography', 'Which European river does flow through six different countries?', 63),
(17, 'Geography', 'What is the longest river in Europe?', 66),
(18, 'Geography', 'Through which capital does the Liffey river flow?', 70),
(19, 'Geography', 'What is the second largest country in Europe after Russia?', 75),
(20, 'Geography', 'What is the capital of the American state Hawaii?', 79),
(21, 'Geography', 'What do the Japanese people call their own country?', 83),
(22, 'Geography', 'In which country is Krakow located?', 87),
(23, 'Geography', 'What is the largest city in Canada?', 89),
(24, 'Geography', 'What is the capital city of Australia ?', 95),
(25, 'Geography', 'Which two seas are joined by the Suez Canal?', 99);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key` varchar(191) NOT NULL,
  `value` tinyint(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'binary', 1, '2020-02-01 13:22:52', '2020-02-01 18:45:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
