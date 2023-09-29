-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 03:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(11) NOT NULL,
  `account_no` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `deposit` int(11) NOT NULL,
  `admin_ID` int(11) NOT NULL,
  `customer_ID` int(11) NOT NULL,
  `bank_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `ID` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `passwordd` varchar(15) NOT NULL,
  `balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`ID`, `username`, `passwordd`, `balance`) VALUES
(1, 'admin', 'admin123', 76411);

-- --------------------------------------------------------

--
-- Table structure for table `advert`
--

CREATE TABLE `advert` (
  `ID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `trailer` varchar(60) NOT NULL,
  `descriptionn` varchar(300) NOT NULL,
  `imagee` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advert`
--

INSERT INTO `advert` (`ID`, `title`, `trailer`, `descriptionn`, `imagee`) VALUES
(1, 'AVATAR: The way of water II', 'https://www.youtube.com/watch?v=kUsMeHtAU-M', 'Avatar: The Way of Water is an upcoming American epic science fiction film directed by James Cameron', 'Avatar.jpg'),
(2, 'Doctor Strange in the Multiverse of Madness', 'https://www.youtube.com/watch?v=MXxX6Ee95gQ', 'Dr Stephen Strange casts a forbidden spell that opens a portal to the multiverse. ', 'dr.strange.jpg'),
(3, 'FIRESTARTER', 'https://www.youtube.com/watch?v=59MJfJPP5eo', 'A couple desperately try to hide their daughter, Charlie, from a shadowy federal agency that wants to harness.', 'fire.jpg'),
(4, 'Black Adam', 'https://www.youtube.com/watch?v=ig30jT7xros', 'Black Adam is an upcoming American superhero film based on the DC Comics character of the same name. ', 'blackadam.jpg'),
(5, 'Black Panther: Wakanda Forever', 'https://www.youtube.com/watch?v=4m33h4rxRw4', 'Black Panther: Wakanda Forever is an upcoming American superhero film.', 'blackp.jpg'),
(7, 'Creed III', 'https://www.youtube.com/watch?v=dwzDhrM2BAc', 'Creed III is an upcoming American sports drama film directed by Michael B. Jordan (in his directorial debut).', 'creed3.webp');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `ID` int(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `address` varchar(15) NOT NULL,
  `notification` varchar(15) NOT NULL,
  `admin_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `location` varchar(40) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID`, `name`, `email`, `phone`, `location`, `message`) VALUES
(2, 'darknigga', 'yusuf@gmail.com', 2147483647, 'hawassa', 'keep up the good work'),
(3, 'darknigga', 'abela@yahoo.com', 2147483647, 'hawassa', 'keep up the good work'),
(4, 'darknigga', 'hellodarky8@gmail.com', 2147483647, 'hawassa', 'please add VIP seat type soon!'),
(5, 'Abdella', 'abdellahimself@yahoo.com', 2147483647, 'Adiss Ababa', 'I love your website');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `sno` int(11) NOT NULL,
  `payer` varchar(20) NOT NULL,
  `payerAcc` varchar(40) NOT NULL,
  `amount` int(11) NOT NULL,
  `time` text NOT NULL,
  `paidfor` int(11) NOT NULL,
  `ticket_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`sno`, `payer`, `payerAcc`, `amount`, `time`, `paidfor`, `ticket_ID`) VALUES
(314, 'munir ', 'munir@gmail.com', 350, '2022-05-11 21:27:18', 1, 353),
(315, 'munir ', 'munir@gmail.com', 150, '2022-05-11 21:27:50', 1, 354),
(317, 'munir ', 'munir@gmail.com', 450, '2022-05-11 22:27:28', 78, 357),
(318, 'munir ', 'munir@gmail.com', 350, '2022-05-12 22:46:06', 80, 359),
(319, 'munir ', 'munir@gmail.com', 350, '2022-05-14 18:50:10', 1, 360),
(320, 'munir ', 'munir@gmail.com', 350, '2022-05-14 18:50:23', 1, 360),
(321, 'munir ', 'munir@gmail.com', 350, '2022-05-16 01:00:57', 19, 361),
(322, 'munir ', 'munir@gmail.com', 350, '2022-05-16 01:16:35', 78, 362),
(323, 'munir ', 'munir@gmail.com', 350, '2022-05-16 12:56:56', 55, 363),
(324, 'munir ', 'munir@gmail.com', 350, '2022-05-17 17:46:11', 22, 364),
(325, 'munir ', 'munir@gmail.com', 150, '2022-05-17 20:20:05', 19, 369),
(326, 'munir ', 'munir@gmail.com', 150, '2022-05-17 20:22:34', 6, 371),
(327, 'mike', 'mike@gmail.com', 150, '2022-05-17 20:26:56', 17, 374),
(328, 'munir ', 'munir@gmail.com', 350, '2022-05-17 22:07:31', 79, 377),
(329, 'munir ', 'munir@gmail.com', 350, '2022-05-17 22:11:30', 79, 377),
(330, 'munir ', 'munir@gmail.com', 150, '2022-05-17 22:16:05', 79, 377),
(331, 'munir ', 'munir@gmail.com', 350, '2022-05-17 22:27:52', 79, 377),
(332, 'munir ', 'munir@gmail.com', 150, '2022-05-17 22:28:20', 79, 377),
(333, 'munir ', 'munir@gmail.com', 350, '2022-05-17 22:30:12', 79, 377),
(334, 'munir ', 'munir@gmail.com', 350, '2022-05-17 22:30:45', 79, 377),
(335, 'munir ', 'munir@gmail.com', 350, '2022-05-17 22:31:32', 79, 377),
(336, 'munir ', 'munir@gmail.com', 150, '2022-05-17 22:32:27', 79, 377),
(338, 'munir ', 'munir@gmail.com', 450, '2022-05-18 00:27:38', 80, 379),
(339, 'abelaaa', 'abela@yahoo.com', 350, '2022-05-19 14:12:00', 19, 382),
(340, 'abelaaa', 'abela@yahoo.com', 350, '2022-05-19 14:12:03', 19, 382),
(341, 'munir ', 'munir@gmail.com', 350, '2022-05-23 18:35:28', 10, 383);

-- --------------------------------------------------------

--
-- Table structure for table `movie_table`
--

CREATE TABLE `movie_table` (
  `ID` int(10) NOT NULL,
  `title` varchar(15) NOT NULL,
  `length_` varchar(15) NOT NULL,
  `trailer` varchar(60) NOT NULL,
  `descriptionn` varchar(100) NOT NULL,
  `imagee` varchar(100) NOT NULL,
  `show_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_table`
--

INSERT INTO `movie_table` (`ID`, `title`, `length_`, `trailer`, `descriptionn`, `imagee`, `show_time`) VALUES
(31, 'STORM', '3 hour', 'https://www.youtube.com/watch?v=xBH25XxM-7g', '23', '3.jpg', '12:00'),
(32, 'the hobbit', '2hour', 'https://www.youtube.com/watch?v=JTSoD4BBCJc', 'lauging niggas', '9.jpg', '09:00'),
(33, 'SPIDER MAN', '3 hour', 'www.youtube.com', 'jkjjkjkjkjkjkjkjk', 'spiderman.jpg', '11:00'),
(34, 'HER', '2hour', 'www.youtube.com', 'kffkdf', '1.jpeg', '04:10'),
(35, 'KICK-ASS2', '3hour', 'www.youtube.com', 'lauging niggas', '11.jpg', '07:00'),
(36, 'AVENGERS', '2hour', 'www.youtube.com', 'lauging niggas', 'avengers.jpg', '12:00'),
(37, 'NOBODY', '2hour', 'www.youtube.com', 'jkjjkjkjkjkjkjkjk', 'nobody.jpg', '11:00'),
(38, 'OBLIVION', '2hour', 'www.youtube.com', 'lauging niggas', '8.jpg', '02:10'),
(39, 'RED NOTICE', '1 hours ', 'www.youtube.com', 'lauging niggas', 'rednotice.jpg', '08:00 '),
(40, '1917', '2hour', 'www.youtube.com', 'kffkdf', '4.jpg', '09:10'),
(41, 'STAR WARS', '2hour', 'www.youtube.com', 'jkjjkjkjkjkjkjkjk', '2.jpeg', '12:30'),
(44, 'HARRY POTTER', '1 hours ', 'www.youtube.com', 'lauging niggas', 'harry_potter.jpg', '11:10');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES
('abela@yahoo.com', '768e78024aa8fdb9b8fe87be86f6474536e9c92a5c', '2022-05-16 22:48:22'),
('abela@yahoo.com', '768e78024aa8fdb9b8fe87be86f647452b7f53be1a', '2022-05-16 22:49:50'),
('abela@yahoo.com', '768e78024aa8fdb9b8fe87be86f64745bdb9871742', '2022-05-16 22:50:22'),
('abela@yahoo.com', '768e78024aa8fdb9b8fe87be86f64745e0f240a136', '2022-05-16 23:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `ID` int(10) NOT NULL,
  `customer_ID` int(10) NOT NULL,
  `reservation_ID` int(10) NOT NULL,
  `amount` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `ID` int(10) UNSIGNED NOT NULL,
  `amount` int(15) NOT NULL,
  `seat_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`ID`, `amount`, `seat_ID`) VALUES
(1, 100, 2),
(2, 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `passwordd` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phoneCode` int(11) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `username`, `passwordd`, `email`, `phoneCode`, `phone`, `balance`) VALUES
(11, 'abelaaa', 'password', 'abela@yahoo.com', 251, 940167785, 17380),
(12, 'manek', 'passwrd', 'manek@gmail.com', 251, 90897656, 100),
(13, 'amir beshir', 'password', 'amirbeshir@gmail.com', 251, 234567789, 0),
(14, 'eyob', 'password', 'eyob@gmail.com', 251, 940167785, 9650),
(15, 'yusuf', 'password', 'yusuf@gmail.com', 251, 9897654, 12000),
(16, 'khaleed', 'password', 'khaleed@gmail.com', 251, 9897654, 0),
(17, 'benzema khaleed', 'password', 'benzema@gmail.com', 251, 9876543, 139550),
(18, 'jx', 'password', 'jx@yahoo.com', 251, 9809897867, 0),
(19, 'amir', 'password', 'amir@yahoo.com', 251, 997843683, 9650),
(20, 'abdure', 'password', 'abdure@yahoo.com', 978, 892382764, 0),
(21, 'helsinki', 'password', 'helsinki@gmail.com', 251, 940167785, 0),
(22, 'dark nigga', 'password', 'darknigga@gmail.com', 251, 940167785, 0),
(23, 'munir ', 'password', 'munir@gmail.com', 251, 940167785, 672630),
(24, 'mahi', 'password', 'mahi@gmail.com', 251, 98765432, 0),
(25, 'ayda', 'password', 'ayda@gmail.com', 251, 911600243, 0),
(27, 'almahi munir', 'password', 'almahikonjiyew@gmail.com', 251, 940167785, 2000),
(28, 'messi', 'password', 'messi@gmail.com', 251, 940167785, 0),
(29, 'FANTYE', 'password', 'fantunegash@yahoo.com', 251, 911603511, 1000),
(30, 'abduse', 'password', 'abduse@gmail.com', 251, 940167785, 0),
(31, 'nahom', 'password', 'nahom@gmail.com', 251, 940167785, 200),
(34, 'tolera', 'password123', 'tolera@email.com', 251, 938108575, 300),
(35, 'mike', 'passwordd', 'mike@gmail.com', 251, 940167785, 150),
(36, 'lucas', 'passwordd', 'lucas@gmail.com', 251, 940167785, 300),
(37, 'admin', 'password', 'hellodarky8@gmail.com', 251, 940167785, 300);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `ID` int(10) NOT NULL,
  `pay_status` varchar(15) NOT NULL,
  `admin_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `ID` int(10) NOT NULL,
  `namee` varchar(15) NOT NULL,
  `phone_no` int(15) NOT NULL,
  `theatre_ID` int(10) NOT NULL,
  `seat_ID` int(10) NOT NULL,
  `seat_n_ID` int(10) NOT NULL,
  `show_date` date DEFAULT NULL,
  `movie_ID` int(10) NOT NULL,
  `register_ID` int(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ID`, `namee`, `phone_no`, `theatre_ID`, `seat_ID`, `seat_n_ID`, `show_date`, `movie_ID`, `register_ID`, `status`) VALUES
(232, 'yusuf', 940167785, 3, 2, 14, '2022-04-27', 33, 27, 'Expired'),
(246, 'abdella', 940167785, 3, 2, 11, '2022-05-09', 32, 11, 'Expired'),
(247, 'abdella', 940167785, 3, 2, 8, '2022-05-09', 32, 11, 'Expired'),
(248, 'abdella', 940167785, 3, 2, 4, '2022-05-09', 32, 11, 'Expired'),
(249, 'abdella', 940167785, 3, 2, 2, '2022-05-09', 32, 11, 'Expired'),
(250, 'abdella', 940167785, 3, 2, 3, '2022-05-09', 32, 11, 'Expired'),
(251, 'abdella', 940167785, 3, 3, 4, '2022-05-09', 32, 11, 'Expired'),
(252, 'abdella', 940167785, 3, 3, 9, '2022-05-09', 32, 11, 'Expired'),
(253, 'abdella', 940167785, 3, 3, 6, '2022-05-09', 32, 11, 'Expired'),
(254, 'abdella', 940167785, 4, 3, 6, '2022-05-09', 32, 11, 'Expired'),
(255, 'abdella', 940167785, 4, 3, 8, '2022-05-09', 32, 11, 'Expired'),
(256, 'abdella', 940167785, 4, 1, 8, '2022-05-09', 32, 11, 'Expired'),
(279, 'abdella', 940167785, 3, 1, 52, '2022-05-05', 35, 11, 'Expired'),
(280, 'abdella', 940167785, 3, 1, 56, '2022-05-17', 36, 11, 'Ongoing'),
(282, 'abdella', 940167785, 3, 1, 56, '2022-05-12', 40, 11, 'Expired'),
(283, 'abdella', 940167785, 3, 1, 50, '2022-05-12', 40, 11, 'Expired'),
(284, 'abdella', 940167785, 3, 1, 33, '2022-05-12', 40, 11, 'Expired'),
(285, 'abdella', 940167785, 4, 1, 16, '2022-05-18', 39, 11, 'Ongoing'),
(289, 'abdella', 940167785, 3, 1, 15, '2022-05-18', 32, 19, 'Ongoing'),
(312, 'abdella', 9876543, 3, 1, 19, '2022-05-27', 35, 29, 'Ongoing'),
(313, 'abdella', 9876543, 3, 1, 10, '2022-05-27', 35, 29, 'Ongoing'),
(329, 'assad', 1234454655, 4, 1, 14, '2022-05-26', 34, 14, 'Ongoing'),
(353, 'abdella', 940167785, 3, 1, 1, '2022-05-12', 39, 23, 'Expired'),
(354, 'abdella', 940167785, 3, 2, 1, '2022-05-12', 32, 23, 'Expired'),
(357, 'abdella', 940167785, 3, 3, 78, '2022-05-31', 32, 23, 'Ongoing'),
(358, 'abdella', 940167785, 3, 1, 80, '2022-05-26', 31, 23, 'Ongoing'),
(359, 'abdella', 940167785, 3, 1, 80, '2022-05-27', 31, 23, 'Ongoing'),
(360, 'abdella', 940167785, 3, 1, 1, '2022-05-15', 39, 23, 'Expired'),
(361, 'abdella', 940167785, 3, 1, 19, '2022-05-29', 44, 23, 'Ongoing'),
(362, 'abdella', 940167785, 3, 1, 78, '2022-05-18', 35, 23, 'Ongoing'),
(363, 'abdella', 940167785, 3, 1, 55, '2022-05-24', 36, 23, 'Ongoing'),
(364, 'Abdella', 940167785, 3, 1, 22, '2022-05-25', 41, 23, ''),
(368, 'as', 2147483647, 3, 1, 20, '2022-05-30', 33, 35, ''),
(369, 'Abdella', 940167785, 3, 2, 19, '2022-05-24', 39, 23, ''),
(371, 'Abdella', 940167785, 3, 2, 6, '2022-05-24', 31, 23, ''),
(374, 'mike', 1212121212, 3, 2, 17, '2022-05-30', 34, 35, ''),
(375, 'Abdella', 940167785, 3, 2, 7, '2022-05-24', 31, 23, ''),
(377, 'abdella', 98765432, 3, 1, 79, '2022-05-31', 36, 23, ''),
(379, 'Abdella', 940167785, 3, 3, 80, '2022-05-18', 41, 23, ''),
(380, 'abdella', 940167785, 3, 1, 17, '2022-05-24', 33, 23, ''),
(381, 'abdella', 940167785, 3, 1, 18, '2022-05-25', 33, 11, ''),
(382, 'abdella', 940167785, 3, 1, 19, '2022-05-25', 33, 11, ''),
(383, 'abdella', 940167785, 3, 1, 10, '2022-05-24', 36, 23, '');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `ID` int(10) NOT NULL,
  `seat_type` varchar(15) NOT NULL,
  `seat_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`ID`, `seat_type`, `seat_number`) VALUES
(1, '3D', 350),
(2, '2D', 150),
(3, 'DELUXE', 450);

-- --------------------------------------------------------

--
-- Table structure for table `seat_n`
--

CREATE TABLE `seat_n` (
  `ID` int(10) NOT NULL,
  `seat_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat_n`
--

INSERT INTO `seat_n` (`ID`, `seat_number`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(32, 32),
(33, 33),
(34, 34),
(35, 35),
(36, 36),
(37, 37),
(38, 38),
(39, 39),
(40, 40),
(41, 41),
(42, 42),
(43, 43),
(44, 44),
(45, 45),
(46, 46),
(47, 47),
(48, 48),
(49, 49),
(50, 50),
(51, 51),
(52, 52),
(53, 53),
(54, 54),
(55, 55),
(56, 56),
(57, 57),
(58, 58),
(59, 59),
(60, 60),
(61, 61),
(62, 62),
(63, 63),
(64, 64),
(65, 65),
(66, 66),
(67, 67),
(68, 68),
(69, 69),
(70, 70),
(71, 71),
(72, 72),
(73, 73),
(74, 74),
(75, 75),
(76, 76),
(77, 77),
(78, 78),
(79, 79),
(80, 80);

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `ID` int(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `hall_quantity` int(10) NOT NULL,
  `seat_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`ID`, `name`, `hall_quantity`, `seat_ID`) VALUES
(3, 'hall 1', 30, 2),
(4, 'hall 2', 50, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `movie_table`
--
ALTER TABLE `movie_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `seat_ID` (`seat_ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `movie_schedule_ID` (`theatre_ID`),
  ADD KEY `seat_ID` (`seat_ID`),
  ADD KEY `seat_n_ID` (`seat_n_ID`),
  ADD KEY `register_ID` (`register_ID`),
  ADD KEY `reservation_ibfk_4` (`movie_ID`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `seat_n`
--
ALTER TABLE `seat_n`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `seat_ID` (`seat_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advert`
--
ALTER TABLE `advert`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342;

--
-- AUTO_INCREMENT for table `movie_table`
--
ALTER TABLE `movie_table`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=384;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seat_n`
--
ALTER TABLE `seat_n`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pricing`
--
ALTER TABLE `pricing`
  ADD CONSTRAINT `pricing_ibfk_1` FOREIGN KEY (`seat_ID`) REFERENCES `seat` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`theatre_ID`) REFERENCES `theatre` (`ID`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`seat_ID`) REFERENCES `seat` (`ID`),
  ADD CONSTRAINT `reservation_ibfk_4` FOREIGN KEY (`movie_ID`) REFERENCES `movie_table` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_5` FOREIGN KEY (`seat_n_ID`) REFERENCES `seat_n` (`ID`),
  ADD CONSTRAINT `reservation_ibfk_6` FOREIGN KEY (`register_ID`) REFERENCES `register` (`ID`);

--
-- Constraints for table `theatre`
--
ALTER TABLE `theatre`
  ADD CONSTRAINT `theatre_ibfk_1` FOREIGN KEY (`seat_ID`) REFERENCES `seat` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
