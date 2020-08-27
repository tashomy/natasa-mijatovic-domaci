-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2020 at 01:04 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `domaci8`
--

-- --------------------------------------------------------

--
-- Table structure for table `grad`
--

CREATE TABLE `grad` (
  `id` int(11) NOT NULL,
  `naziv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grad`
--

INSERT INTO `grad` (`id`, `naziv`) VALUES
(1, 'Niksic'),
(2, 'Podgorica'),
(3, 'Herceg Novi'),
(4, 'Zabljak'),
(5, 'Kotor'),
(6, 'Berane'),
(7, 'Budva');

-- --------------------------------------------------------

--
-- Table structure for table `podnosilac`
--

CREATE TABLE `podnosilac` (
  `id` int(11) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `prezime` varchar(255) NOT NULL,
  `jmbg` int(15) NOT NULL,
  `grad_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `primjedba`
--

CREATE TABLE `primjedba` (
  `id` int(11) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `slika_putanja` varchar(255) NOT NULL,
  `podnosilac_id` int(11) DEFAULT NULL,
  `grad_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grad`
--
ALTER TABLE `grad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podnosilac`
--
ALTER TABLE `podnosilac`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_grad_id` (`grad_id`) USING BTREE;

--
-- Indexes for table `primjedba`
--
ALTER TABLE `primjedba`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_grad_id` (`grad_id`) USING BTREE,
  ADD KEY `fk_podnosilac_id` (`podnosilac_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grad`
--
ALTER TABLE `grad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `podnosilac`
--
ALTER TABLE `podnosilac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `primjedba`
--
ALTER TABLE `primjedba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `podnosilac`
--
ALTER TABLE `podnosilac`
  ADD CONSTRAINT `podnosilac_ibfk_1` FOREIGN KEY (`grad_id`) REFERENCES `grad` (`id`);

--
-- Constraints for table `primjedba`
--
ALTER TABLE `primjedba`
  ADD CONSTRAINT `primjedba_ibfk_1` FOREIGN KEY (`grad_id`) REFERENCES `grad` (`id`),
  ADD CONSTRAINT `primjedba_ibfk_2` FOREIGN KEY (`podnosilac_id`) REFERENCES `podnosilac` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
