-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 09:11 PM
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
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `hoteli`
--

CREATE TABLE `hoteli` (
  `id` int(11) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `adresa` varchar(255) NOT NULL,
  `broj_spratova` int(11) NOT NULL,
  `kategorija` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sobe`
--

CREATE TABLE `sobe` (
  `id` int(11) NOT NULL,
  `broj_sobe` int(11) NOT NULL,
  `tip_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tip_sobe`
--

CREATE TABLE `tip_sobe` (
  `id` int(11) NOT NULL,
  `naziv` varchar(255) NOT NULL,
  `opis` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tip_zaposlenih`
--

CREATE TABLE `tip_zaposlenih` (
  `id` int(11) NOT NULL,
  `naziv` varchar(255) NOT NULL,
  `opis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `zaposleni`
--

CREATE TABLE `zaposleni` (
  `id` int(11) NOT NULL,
  `JMBG` int(15) NOT NULL,
  `datum_rodjenja` date NOT NULL,
  `datum_zaposlenja` date NOT NULL,
  `plata` float NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `tip_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoteli`
--
ALTER TABLE `hoteli`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ime` (`ime`);

--
-- Indexes for table `sobe`
--
ALTER TABLE `sobe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sobe_tip_sobe` (`tip_id`),
  ADD KEY `fk_sobe_hotel` (`hotel_id`);

--
-- Indexes for table `tip_sobe`
--
ALTER TABLE `tip_sobe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tip_zaposlenih`
--
ALTER TABLE `tip_zaposlenih`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zaposleni`
--
ALTER TABLE `zaposleni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_zaposleni_tip_zaposlenih` (`tip_id`),
  ADD KEY `fk_zaposleni_hotel` (`hotel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoteli`
--
ALTER TABLE `hoteli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sobe`
--
ALTER TABLE `sobe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tip_sobe`
--
ALTER TABLE `tip_sobe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tip_zaposlenih`
--
ALTER TABLE `tip_zaposlenih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zaposleni`
--
ALTER TABLE `zaposleni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sobe`
--
ALTER TABLE `sobe`
  ADD CONSTRAINT `fk_sobe_hotel` FOREIGN KEY (`hotel_id`) REFERENCES `hoteli` (`id`),
  ADD CONSTRAINT `fk_sobe_tip_sobe` FOREIGN KEY (`tip_id`) REFERENCES `tip_sobe` (`id`);

--
-- Constraints for table `zaposleni`
--
ALTER TABLE `zaposleni`
  ADD CONSTRAINT `fk_zaposleni_hotel` FOREIGN KEY (`hotel_id`) REFERENCES `hoteli` (`id`),
  ADD CONSTRAINT `fk_zaposleni_tip_zaposlenih` FOREIGN KEY (`tip_id`) REFERENCES `tip_zaposlenih` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
