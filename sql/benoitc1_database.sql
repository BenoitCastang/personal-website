-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 30, 2024 at 03:46 PM
-- Server version: 10.3.39-MariaDB-0ubuntu0.20.04.2
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `benoitc1_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `motdepasse` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `motdepasse`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `apprenant`
--

CREATE TABLE `apprenant` (
  `id` int(50) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `motdepasse` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `age` int(50) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `comment_id` int(11) NOT NULL,
  `comment_post_id` int(11) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_content`, `comment_date`) VALUES
(1, 1, 'M@teo21', 'Un peu court ce billet !', '2010-03-25 16:49:53'),
(2, 1, 'Maxime', 'Oui, ça commence pas très fort ce blog...', '2010-03-25 16:57:16'),
(3, 1, 'MultiKiller', '+1 !', '2010-03-25 17:12:52'),
(4, 2, 'John', 'Preum\'s !', '2010-03-27 18:59:49'),
(5, 2, 'Maxime', 'Excellente analyse de la situation !\r\nIl y arrivera plus tôt qu\'on ne le pense !', '2010-03-27 22:02:13'),
(6, 2, 'Porcellino', 'Je sais pas, ça me semble pas si bien engagé...', '2021-05-18 23:08:39'),
(7, 5, 'Benoît Castang', 'J\'avoue c\'est stylé', '2021-05-18 23:09:47'),
(8, 5, 'Porcellina', 'Le loup a faim, très faim, tellement faim qu\'il pourrait manger n\'importe quoi.', '2021-05-19 02:30:49'),
(9, 1, 'Benoît Castang', 'Mouais, c\'est un peu convenu, comme sujet !', '2021-05-21 20:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `post_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`post_id`, `post_title`, `post_content`, `post_date`) VALUES
(1, 'Bienvenue sur mon blog !', 'Je vous souhaite à toutes et à tous la bienvenue sur mon blog qui parlera de... PHP bien sûr !', '2010-03-25 16:28:41'),
(2, 'Le PHP à la conquête du monde !', 'C\'est officiel, l\'éléPHPant a annoncé à la radio hier soir \"J\'ai l\'intention de conquérir le monde !\".\r\nIl a en outre précisé que le monde serait à sa botte en moins de temps qu\'il n\'en fallait pour dire \"éléPHPant\". Pas dur, ceci dit entre nous...', '2010-03-27 18:31:11'),
(5, 'Premier post', 'Après quelques posts tirés de mes leçons de php et qui sont voués à disparaître, en voici un nouveau, le premier véritable, qui vient annoncer que le site est à présent responsive, soit adapté aux mobiles !\r\nIl est également en architecture mvc, mais puisque c\'est à peu près imperceptible, je préfère n\'en pas faire mention.\r\n\r\nQuoi qu\'il en soit, bonne virée sur mon site, et n\'hésitez pas à me contacter !', '2021-05-15 18:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(10) UNSIGNED NOT NULL,
  `pseudo` varchar(15) NOT NULL,
  `content_message` varchar(255) NOT NULL,
  `datetime_message` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `pseudo`, `content_message`, `datetime_message`) VALUES
(1, 'Benoit', 'Un premier message pour tester :)', '0000-00-00 00:00:00'),
(3, 'Porcellino', 'première réponse', '0000-00-00 00:00:00'),
(4, 'Porcellino', 'première réponse', '0000-00-00 00:00:00'),
(5, 'Porcellino', 'deuxième réponse', '0000-00-00 00:00:00'),
(6, 'Porcellino', 'deuxième réponse', '0000-00-00 00:00:00'),
(7, 'Porco', 'Bonjour', '0000-00-00 00:00:00'),
(8, 'Porcellino', 'One, two, one, two, this is a test.', '0000-00-00 00:00:00'),
(9, 'Alice', 'Alleeeeeeeeeeeeez', '0000-00-00 00:00:00'),
(10, 'Mimi', 'L\'ennui !', '0000-00-00 00:00:00'),
(11, 'Finkie', 'TAISEZ-VOUS !!!', '0000-00-00 00:00:00'),
(12, 'Tonton', 'Il a fait prout !', '0000-00-00 00:00:00'),
(13, 'Benoit', 'Cela fonctionne-t-il ?', '0000-00-00 00:00:00'),
(14, 'Benoit', 'Oh yeah !', '0000-00-00 00:00:00'),
(15, 'Sophocle', 'C\'est folie d\'entreprendre plus qu\'on ne peut. ...\r\n', '0000-00-00 00:00:00'),
(16, 'Pierre Menes', '- Votre repas vous a plu Mr.Ménès?\r\n\r\n- Le plateau manquait de sel ', '0000-00-00 00:00:00'),
(17, 'Lissou', 'Pourquoi vous m\'impliquez dans tout ça?\r\n', '0000-00-00 00:00:00'),
(18, 'Alice', 'Quelle indignité', '0000-00-00 00:00:00'),
(19, 'Benoit', 'Mêle-toi de tes fesses !', '0000-00-00 00:00:00'),
(20, 'Benoit', 'Soeur ingrate !', '0000-00-00 00:00:00'),
(21, 'Anonymous', 'bidou! bidou, bidou !!', '0000-00-00 00:00:00'),
(22, 'Anonyme', 'tubi? tubi !!!\r\n', '0000-00-00 00:00:00'),
(23, 'Bidule', 'Coucou le monde !', '0000-00-00 00:00:00'),
(25, 'Benoit', 'Coucou Linkedin !', '0000-00-00 00:00:00'),
(26, 'Ben', '&lt;script&gt;alert(&quot;Toujours sortir couvert!&quot;)&lt;/script&gt;', '0000-00-00 00:00:00'),
(27, 'Benoit', 'Bien tenté, petit saligaud !', '0000-00-00 00:00:00'),
(28, 'Le poiz ', 'Oui c’est moi le poiz', '0000-00-00 00:00:00'),
(29, 'Beau', 'Bonjour', '0000-00-00 00:00:00'),
(30, 'Testeur anonyme', 'Ceci est un tets', '0000-00-00 00:00:00'),
(31, 'Mixin', '&lt;script&gt;alert(&quot;Toujours sortir couvert!&quot;)&lt;/script&gt;', '0000-00-00 00:00:00'),
(32, 'zemmour', 'ppnul', '0000-00-00 00:00:00'),
(33, 'Freud', 'Enlarge your penis Benoite', '0000-00-00 00:00:00'),
(34, 'zdz', 'dqzdqzd', '0000-00-00 00:00:00'),
(35, 'Angela', 'Je veux ton zizi', '0000-00-00 00:00:00'),
(36, 'angela', 'stp\r\n', '0000-00-00 00:00:00'),
(37, 'Sabrina', 'polka de la galineeetta', '0000-00-00 00:00:00'),
(38, 'MathieuParis', 'j\'aime les boobs de wendy', '0000-00-00 00:00:00'),
(39, 'Robert', 'bah elle sont où les milfs près de chez moi??', '0000-00-00 00:00:00'),
(40, ' ', 'javascript:/*--&gt;&lt;/title&gt;&lt;/style&gt;&lt;/textarea&gt;&lt;/script&gt;&lt;/xmp&gt;&lt;svg/onload=\'+/&quot;/+/onmouseover=1/+/[*/[]/+alert(1)//\'&gt;', '0000-00-00 00:00:00'),
(41, 'Benoit', 'Mais qui s\'amuse à tester ma sécurité comme ça ? xD', '0000-00-00 00:00:00'),
(42, 'Benoît Castang', 'J\'ai rajouté le jour et la date, cela fonctionne-t-il ? xD', '2021-04-17 18:09:54'),
(43, 'Benoît Castang', 'Oh la la je suis un génie', '2021-04-17 18:10:07'),
(44, 'Benoît Castang', 'ah non y\'a un décalage horaire', '2021-04-17 18:10:22'),
(45, 'Karl Marx', 'L’académie suédoise a annoncé aujourd’hui que le prix Nobel de littérature 2020 était attribué à l’ancien président de la république Nicolas Sarkozy pour son livre mémoire « Le Temps des Tempêtes ».\r\n\r\nL’ancien président de la république a accueilli avec ', '2021-04-17 18:22:26'),
(46, 'Benoît Castang', 'la limite de texte c\'est 255 caractères xD', '2021-04-17 18:31:41'),
(47, 'Benoît Castang', 'Testons à nouveau le fuseau horaire...', '2021-04-17 20:36:25'),
(48, 'Benoît Castang', 'Toujours pas...', '2021-04-17 20:36:49'),
(49, 'Benoît Castang', 'Reassayons...', '2021-04-17 20:38:42'),
(50, 'Benoît Castang', '...', '2021-04-17 20:38:58'),
(51, 'Benoît Castang', 'toast', '2021-04-17 20:39:23'),
(52, 'Wendy', 'Je t\'attends grand fou !', '2021-04-17 20:51:29'),
(53, 'Angela', 'Pour le zizi je parlais à Freud', '2021-04-17 20:54:56'),
(54, 'Test', 'Salut', '2021-04-27 04:22:11'),
(55, 'Benoît Castang', 'On peut mainteant se créer un compte et se connecter/déconnecter !', '2021-04-29 23:24:34'),
(56, 'Benoît Castang', 'test', '2021-05-15 15:52:59'),
(57, 'Porcellino', 'dédi à toi', '2021-05-16 16:13:17'),
(58, 'Benoît Castang', 'this is poo chat', '2021-05-21 20:36:29'),
(59, '123', 'hello poop', '2021-05-24 02:44:38'),
(60, '123', 'ooh it works\r\npoopy', '2021-05-24 02:44:46'),
(61, 'Porcellino', 'A nouveau !', '2021-06-07 23:06:26'),
(62, 'Lol', 'L9o', '2021-06-08 10:17:15'),
(63, 'J', 'H', '2021-06-08 16:22:57'),
(64, 'terst', '&lt;script&gt;alert(&quot;Toujours sortir couvert!&quot;)&lt;/script&gt;', '2021-06-08 17:44:34'),
(65, '&lt;script&gt;a', '&lt;script&gt;alert(&quot;Toujours sortir couvert!&quot;)&lt;/script&gt;', '2021-06-09 08:21:54'),
(66, 't', 't', '2021-06-09 08:22:06'),
(67, 't', 't', '2021-06-09 08:22:16'),
(68, 'salut', 'salut', '2021-06-09 08:22:34'),
(69, 'rr', 'rr', '2021-06-09 08:22:40'),
(70, 'ee', 'e', '2021-06-09 08:23:03'),
(71, 'e', 'ee', '2021-06-09 08:23:20'),
(72, 'Test', '&lt;h1&gt;Hello&lt;/h1&gt;', '2021-06-11 06:51:46'),
(73, 'castalys', 'Ça marche !!', '2021-07-02 18:09:25'),
(74, 'Keke972', 'JHELLO WORLD ????', '2021-07-06 17:05:06'),
(75, 'Doraemon', 'World is here ;)', '2022-03-06 11:18:58'),
(76, 'AllerLeFoot', 'Hello', '2022-05-19 14:59:18'),
(77, 'Toast', 'C&#039;est la bonne heure ?', '2022-10-14 18:20:12'),
(78, 'Toast', '18h20 à ma montre', '2022-10-14 18:20:36'),
(79, 'Benoît le goat', 'Bonjour', '2024-06-26 13:51:26');

-- --------------------------------------------------------

--
-- Table structure for table `enseignant`
--

CREATE TABLE `enseignant` (
  `id` int(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `motdepasse` varchar(50) NOT NULL,
  `image` varchar(50) DEFAULT 'NULL',
  `mail` varchar(50) NOT NULL,
  `age` int(50) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jeux_video`
--

CREATE TABLE `jeux_video` (
  `ID` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `ID_possesseur` int(11) DEFAULT NULL,
  `console` varchar(255) NOT NULL,
  `prix` double NOT NULL DEFAULT 0,
  `nbre_joueurs_max` int(11) NOT NULL DEFAULT 0,
  `commentaires` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(10) UNSIGNED NOT NULL,
  `member_pseudo` varchar(255) NOT NULL,
  `member_password` varchar(255) NOT NULL,
  `member_email` varchar(255) NOT NULL,
  `member_registration_date` date DEFAULT NULL,
  `member_role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
(48, 'a', '$2y$10$kmB7M/gg5Hm2LQK3yFi11.lvNNMDGusnJckg4aGQk9F5r/wD0z7VC', 'a@aa.aa', '2021-06-07', 'member'),
(50, 'dddf', '$2y$10$BY2HtmdTOH/5HAa8H8n2petSJ5W4ivQpQxe88vkQ1HXdA.Ha/qd3.', 'dddf@dddf.com', '2021-06-08', 'member'),
(51, 'Femenino', '$2y$10$GuPC4Kolwn3/mgIFoifog.e9i4xXWxPHZmrA1cEP/tRe2GbTJVdM6', 'ximenezegbev0@seznam.cz', '2021-08-27', 'member'),
(52, 'Doraemon', '$2y$10$.BJh0lklRziQMsukIJBekeA1Cdhfki4GZpO7z8m2R.S4uRg4yczYW', 'doraemon@nhk.jp', '2022-03-06', 'member'),
(53, 'Hombre', '$2y$10$COdopJqiwr3weO1X.a.RbOmn8N6hvjSuupjNr8mzklYKYMECaLQZu', 'sirfak@yandex.com', '2023-09-30', 'member'),
(55, 'XEilYabeRCpUwmB', '$2y$10$fKbmpjvj13AeVdy1zTMOu.vo5ypyzJjImrkEAAQ0XxZBlKo2fgA8W', 'robert19holcombejmf@outlook.com', '2024-02-03', 'member'),
(57, 'tuUkcjQZgmsKbMx', '$2y$10$u3uCpr3joYDfLQioOJSkZerU.6lZq/7ZaInefmrkvsqFXzw/AXD/y', 'vladimirmey8dk@outlook.com', '2024-02-11', 'member'),
(59, 'TsMDHgzJY', '$2y$10$zAeNNZA/94MZPpkJzbzHhuWUo.K4SLb3sSE0NOOmIUZSRPbGBIW52', 'eliabuzyrine6@outlook.com', '2024-02-19', 'member'),
(61, 'RQpDCZAgW', '$2y$10$zb0Sb3.xSRiptOYDNqFE4edqj5O5BH/HbLlSEigx9oiV8lCUtIsxa', 'scott65mauney8aw@outlook.com', '2024-03-21', 'member'),
(62, 'ypMXcUYF', '$2y$10$0vUxHY85Jf0sEXLwlTir7.IT56/mRsat6lBky.rUc2r20Xb00SIDi', 'dennistp_martindw@outlook.com', '2024-03-27', 'member'),
(64, 'XfEchgbSOkBu', '$2y$10$3yE5k9deaAgqkLEbC8bRXONW42HNSorUf/34xytR1ZfqGJzkUbWau', 'young_sarah2197@yahoo.com', '2024-04-03', 'member'),
(66, 'mpbGyfxZauI', '$2y$10$RniULWNeQyLDY2McRjyIhOAm8f/KI5W9MmIVwDO5RVszmf5KeIQgm', 'forbespqi1980@gmail.com', '2024-04-07', 'member'),
(68, 'uzHnOSYes', '$2y$10$aEGd.XlhepekmkyNGYM/OO1bzI2x6MQhL3ou3Ze1E1Aj2Lojuy9Pa', 'barrihans709@gmail.com', '2024-04-14', 'member'),
(70, 'JCbonZRS', '$2y$10$hpCwxe6LrN7BzNXb.FGn5eN.UxXDDEOJZtB8RPIBb3G08oCVLG4K2', 'brandonmorgan1989@yahoo.com', '2024-04-20', 'member'),
(72, 'gEPmIFNOu', '$2y$10$g5GDb3O3s2KQXVs0VShiXObce3egg4.fxY2ABVnSBXnypHvz4DHQe', 'don.williamson1979@yahoo.com', '2024-04-22', 'member'),
(74, 'LrcXVDHOp', '$2y$10$A.ZsB9AkhMX3k0npPeh0I.PfgX.cHI9S1/VA7HmyShhl.suFf1u5C', 'amanda.wilbourn1995@yahoo.com', '2024-05-23', 'member'),
(75, 'bEmavoiQNSV', '$2y$10$lcWQsuVT8NB1ZKt2p4Ey/O5d5AVvHaHjzAoLY/1I9zpmUheJRC8ZC', 'wpeimlla1983@gmail.com', '2024-05-30', 'member'),
(76, 'JYawDxeu', '$2y$10$TqERMXJZAgnraWxP7GyUIuZ/zX6OM/laap4WynNNeFSwbyxadjOSi', 'brenda_anglin1998@yahoo.com', '2024-06-07', 'member'),
(77, 'tzJakjYFH', '$2y$10$Z97/4YEUYFMqlf5MbCdSE.qn6PSNy2oRgaysY/NiMALkug3KgAU9K', 'roulet_dan8365@yahoo.com', '2024-06-14', 'member'),
(78, 'qZlTYXveDCNWMVOk', '$2y$10$iuvAayjUKmb9TmGUphfn4.rv3vW5Ja4Ptr3VWahFgS/wC.a6DUGF6', 'chambeliot9994@gmail.com', '2024-06-24', 'member'),
(79, 'yBQHcEzdCTPhKoli', '$2y$10$NuObnaELP4IHs8pUeWDUYulzVelKLyJ5m0yCdhyUy/QDsQc7VKiXO', 'mike_espinoza1982@yahoo.com', '2024-06-28', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`) VALUES
(1, 'First news', 'This is my first database news. Hope it works !'),
(2, 'Second news', 'This is the second news. Hope second dont mean same thing as in french !'),
(3, 'Third news', 'This is the third news, cause never two without three. Plus I needed for my practice.');

-- --------------------------------------------------------

--
-- Table structure for table `possesseurs`
--

CREATE TABLE `possesseurs` (
  `ID` int(255) UNSIGNED NOT NULL,
  `prenom` varchar(32) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `tel` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jeux_video`
--
ALTER TABLE `jeux_video`
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `member_pseudo` (`member_pseudo`),
  ADD UNIQUE KEY `member_email` (`member_email`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `possesseurs`
--
ALTER TABLE `possesseurs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apprenant`
--
ALTER TABLE `apprenant`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jeux_video`
--
ALTER TABLE `jeux_video`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `possesseurs`
--
ALTER TABLE `possesseurs`
  MODIFY `ID` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
