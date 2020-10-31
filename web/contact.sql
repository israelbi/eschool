-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 23 mai 2020 à 11:43
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `invest`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `exactDate` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `date`, `exactDate`) VALUES
(1, 'kasongo Tambwe Gracias', 'kasongo@gmail.com', 'Une déesse du sexe européenne se fait baiser brutalement dans un bars dans la nuit du 25 decembre de l\'an 2019 par des assaillants non identifies par la police de la region', 'Une déesse du sexe européenne se fait baiser brutalementUne déesse du sexe européenne se fait baiser brutalementUne déesse du sexe européenne se fait baiser brutalementUne déesse du sexe européenne se fait baiser brutalement', '2020-05-13 13:37:34', ''),
(2, 'kqsongo', 'kqso2@h.l', 'kjk', 'The array_rand() function returns a random key from an array, or it returns an array of random keys if you specify that the function should return more than one key.', '2020-05-13 11:29:07', ''),
(3, 'jkdvjlbkd', 'bkbvdl@f.v', 'jldlvdb', 'jldlvdb', '2020-05-12 14:12:14', ''),
(4, 'Makaveli The Don', 'thedon@makaveli.mail', '', '', '2020-05-13 13:13:11', ''),
(5, '', '', '', '', '2020-05-12 14:17:46', ''),
(6, 'klndlknd', 'graciaskas@d.f', 'nkklavn', 'nkklavn', '2020-05-12 14:24:13', ''),
(7, 'klndlknd', 'graciaskas@d.f', 'nkklavn', 'nkklavn', '2020-05-12 14:25:02', ''),
(8, 'Yvan anzuruni', 'graciaskas@d.f', 'nkklavn', 'The array_rand() function returns a random key from an array, ', '2020-05-13 11:33:56', ''),
(9, 'Tambwe Kasongo\r\n', 'graciaskas@d.f', 'nkklavn', 'nkklavn', '2020-05-13 11:23:44', ''),
(10, 'kas', 'k@l.l', 'j', 'j', '2020-05-12 14:27:00', ''),
(11, 'MANACE', 'MANACE@GRACIAS.COM', 'JBCJKBVSV', 'The array_rand() function returns a random key from an array, or it returns an array of random keys if you specify that the function should The array_rand() function returns a random key from an array, or it returns an array of random keys if you specify that the function should return more than one key.The array_rand() function returns a random key from an array, or it returns an array of random keys if you specify that the function should return more than one key.return more than one key.', '2020-05-13 11:29:59', '2020-05-13'),
(12, 'Prince Arobaz', 'arobas@gmail.com', 'Si vous avez des questions nhésitez pas à nous envoyer un message', 'Si vous avez des questions nhésitez pas à nous envoyer un message', '2020-05-13 14:57:59', '2020-05-13'),
(13, 'Remy Bagalwa', 'bagalwa@remy.com', 'Convertir ces besoins en livres', 'Convertir ces besoins en livres', '2020-05-19 11:36:11', '2020-05-19'),
(14, 'Obtenez un devis gratuit Nom   ', 'fibgi@yahoor.fr', '', 'Addresse électronique   Message   envoyerAddresse électronique   Message   envoyerAddresse électronique   Message   envoyerAddresse électronique   Message   envoyerAddresse électronique   Message   envoyer', '2020-05-19 13:15:49', ''),
(15, 'Thedon Kasongo', 'Thedon@boopy.fr', '', '// e.target.reset()// e.target.reset()// e.target.reset()// e.target.reset()// e.target.reset()// e.target.reset()// e.target.reset()// e.target.reset()// e.target.reset()', '2020-05-19 13:17:25', ''),
(16, 'tehrootert', 'thedon@root.root', '', '// e.target.reset()// e.target.reset()// e.target.reset()// e.target.reset()// e.target.reset()// e.target.reset()// e.target.reset()', '2020-05-19 13:18:45', ''),
(17, 'hsgsjhk', 'theroot@rot.com', '', '// e.target.reset()// e.target.reset()// e.target.reset()// e.target.reset()// e.target.reset()', '2020-05-19 13:19:32', ''),
(18, 'las masongo bmt', 'kas@thedon.amil', '', 'service-buttonservice-buttonservice-buttonservice-buttonservice-buttonservice-buttonservice-buttonservice-buttonservice-buttonservice-buttonservice-buttonservice-buttonservice-buttonservice-buttonservice-buttonservice-buttonservice-button', '2020-05-19 13:33:42', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
