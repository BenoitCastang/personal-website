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
-- Table structure for table `jeux_video`
--

DROP TABLE IF EXISTS `jeux_video`;
CREATE TABLE `jeux_video` (
  `ID` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `ID_possesseur` int(11) DEFAULT NULL,
  `console` varchar(255) NOT NULL,
  `prix` double NOT NULL DEFAULT '0',
  `nbre_joueurs_max` int(11) NOT NULL DEFAULT '0',
  `commentaires` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jeux_video`
--

INSERT INTO `jeux_video` (`ID`, `nom`, `ID_possesseur`, `console`, `prix`, `nbre_joueurs_max`, `commentaires`) VALUES
(2, 'Sonic', 1, 'Megadrive', 2, 1, 'Pour moi, le meilleur jeu du monde !'),
(5, 'Super Smash Bros Melee', 2, 'GameCube', 55, 4, 'Un jeu de baston délirant !'),
(6, 'Dead or Alive', 1, 'Xbox', 60, 4, 'Le plus beau jeu de baston jamais créé'),
(93, 'Super mario kart', NULL, 'SNES', 150, 0, NULL),
(12, 'Final fantasy IX', 1, 'PS2', 40, 1, 'Encore un Final Fantasy mais celui la est encore plus beau !'),
(15, 'Grand Theft Auto 3', 2, 'PS2', 30, 1, 'Comme dans les autres Gta on ecrase tout le monde :) .'),
(18, 'Super Mario Bros 3', 2, 'SuperNES', 10, 2, 'Le meilleur Mario selon moi.'),
(26, 'Street Fighter 2', 1, 'Megadrive', 10, 2, 'Le célèbre jeu de combat !'),
(32, 'Pro Evolution Soccer 5', 1, 'PS2', 59, 2, 'Un petit jeu de foot sur PS2'),
(44, 'F-ZERO', 3, 'GBA', 25, 4, 'Un super jeu de course futuriste !'),
(48, 'Wario World', 5, 'Gamecube', 40, 4, 'Wario vs Mario ! Qui gagnera ! ?'),
(61, 'Zelda : Breath of the Wild', 6, 'Nintendo Switch', 50, 1, 'Mon deuxième jeu préféré !'),
(87, 'Monster Hunter Freedom 2', NULL, 'PSP', 40, 0, NULL),
(80, 'Tennis Elbow 2013', NULL, 'PS4', 60, 4, 'Le pire jeu de tennis !');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jeux_video`
--
ALTER TABLE `jeux_video`
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jeux_video`
--
ALTER TABLE `jeux_video`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
