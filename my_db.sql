-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2022 at 03:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `SN` int(4) NOT NULL,
  `id` varchar(15) NOT NULL,
  `supervisor` char(35) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `years` int(4) NOT NULL,
  `title` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`SN`, `id`, `supervisor`, `topic`, `years`, `title`) VALUES
(1, 'eee/17u/0767', 'Dr. A.O. Abioye', 'robotics', 2019, ''),
(2, 'moses', 'Dr. A.O. Abioye', 'robotics', 2019, ''),
(3, 'chime', 'Engr Kadalla', 'robotics', 2020, '9148-IT letter.pdf'),
(4, 'chime', 'Engr Kadalla', 'Design and construction of automatic robotic arm', 2020, '3460-IT letter.pdf'),
(5, 'chime', 'Dr. A.O. Abioye', 'Design and construction of automatic robotic arm', 2020, '4916-IT letter.pdf'),
(6, 'Joel', 'Dr. A.O. Abioye', 'Design and construction of automatic robotic arm', 2020, '9138-IT letter.pdf'),
(7, 'eee/17u/0767', 'Dr. A.O. Abioye', 'Design and construction of automatic robotic arm', 2020, '7153-id_card.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`SN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `SN` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
