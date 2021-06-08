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
-- Table structure for table `members`
--
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `member_id` int(10) UNSIGNED NOT NULL,
  `member_pseudo` varchar(255) NOT NULL,
  `member_password` varchar(255) NOT NULL,
  `member_email` varchar(255) NOT NULL,
  `member_registration_date` date DEFAULT NULL,
  `member_role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `member_pseudo`, `member_password`, `member_email`, `member_registration_date`, `member_role`) VALUES
(13, 'Porcellina', '$2y$10$BuwlNNPhBvteXI8JUawy8.WD7AlmxW/27YL7TUiukv/r7fISAZte2', 'porcellina@porcellina.fr', '2021-04-26', 'member'),
(17, 'Porcellino', '$2y$10$dIGH5jvCSC11gx.tNGqBHu8qyHGzyEjMfYVI/HermcijUXKrJX9Mq', 'porcellino@porcellino.fr', '2021-04-26', 'member'),
(35, 'Porco', '$2y$10$dAq4H648Np54G0DaO5S5teS5sdEbj69fCXE9nPaFoOEeobDl6siIu', 'porco@porco.fr', '2021-04-27', 'member'),
(37, 'psychiogreg', '$2y$10$Suf4Cc.eH1I3PV00PMlFzOrnurH36PIlicX9gaFKfczdI6AV4i2Gi', 'psychiogreg@live.fr', '2021-04-27', 'member'),
(38, 'Benoît Castang', '$2y$10$xCgKXm1XzAc8Ebd1GYgqSO1ERqIpOvfoSbERlrKio6N54jsmhK6cS', 'castang.benoit@gmail.com', '2021-04-29', 'member'),
(39, 'AAA', '$2y$10$KUmVad5l8RGFg3EgMDOFgerbsE2zycxw.FojBbfw6Re.T.OBno46u', 'aaa@aaa.fr', '2021-05-15', 'member'),
(40, 'Leon', '$2y$10$fiWE8JMQ165cUoIY/eQLSu1x590EUX1LglSmvG57RrvQtrqxLoHsO', 'Leon@mail.fr', '2021-05-17', 'member'),
(47, 'psychiogreg77', '$2y$10$sPeBjL/wP6iCYm4tDEWYSeeHuNxdencO5THiErAYITM0h7mIi6y/q', 'psychiogreg77@live.fr', '2021-05-24', 'member'),
(48, 'a', '$2y$10$kmB7M/gg5Hm2LQK3yFi11.lvNNMDGusnJckg4aGQk9F5r/wD0z7VC', 'a@aa.aa', '2021-06-07', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `member_pseudo` (`member_pseudo`),
  ADD UNIQUE KEY `member_email` (`member_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
