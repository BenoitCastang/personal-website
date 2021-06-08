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
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE `chat` (
  `id` int(10) UNSIGNED NOT NULL,
  `pseudo` varchar(15) NOT NULL,
  `content_message` varchar(255) NOT NULL,
  `datetime_message` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(60, '123', 'ooh it works\r\npoopy', '2021-05-24 02:44:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
