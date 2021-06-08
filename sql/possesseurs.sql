-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2021 at 10:51 PM
-- Server version: 10.1.48-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+01:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `benoitc1_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `possesseurs`
--

DROP TABLE IF EXISTS `possesseurs`;
CREATE TABLE `possesseurs` (
  `ID` int(255) UNSIGNED NOT NULL,
  `prenom` varchar(32) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `tel` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `possesseurs`
--

INSERT INTO `possesseurs` (`ID`, `prenom`, `nom`, `tel`) VALUES
(1, 'Patrick', 'Tambay', '06.54.89.62.89'),
(2, 'Michel', 'Vaillant', '06.79.46.32.45'),
(3, 'Mathieu', 'Alesi', '06.47.25.36.52'),
(4, 'Corentin', 'Piquet', '06.48.69.13.32'),
(5, 'Sebastien', 'Grosjean', '06.48.92.17.34'),
(6, 'Benoit', 'Jabouille', '06.04.46.36.42'),
(7, 'Pierre', 'Depailler', '06.78.99.21.12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `possesseurs`
--
ALTER TABLE `possesseurs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `possesseurs`
--
ALTER TABLE `possesseurs`
  MODIFY `ID` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
