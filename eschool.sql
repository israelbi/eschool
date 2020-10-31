-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 23 mai 2020 à 16:47
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
-- Base de données : `eschool`
--

-- --------------------------------------------------------

--
-- Structure de la table `academic`
--

CREATE TABLE `academic` (
  `id` int(11) NOT NULL,
  `year` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `academic`
--

INSERT INTO `academic` (`id`, `year`) VALUES
(1, '2018-2019'),
(2, '2017-2018'),
(3, '2011-2012'),
(4, '2011-2012'),
(5, '2013-2014'),
(6, '2015-2016'),
(7, '2015-2016'),
(8, ''),
(9, '2013-2014'),
(10, '');

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

-- --------------------------------------------------------

--
-- Structure de la table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `class` varchar(45) NOT NULL,
  `section` varchar(45) NOT NULL,
  `salaire` varchar(45) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(45) NOT NULL,
  `avatar` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lecturers`
--

INSERT INTO `lecturers` (`id`, `no`, `fname`, `lname`, `class`, `section`, `salaire`, `age`, `sex`, `avatar`) VALUES
(1, 2019072, 'zv', 'xx', '1', 'A', '34', 12, 'male', 'avatar/php1D56.tmp'),
(2, 2019072, 'kas', 'tmb', '1', 'A', '56', 12, 'male', 'avatar/0E5B797DD62D0F13E510648B851_h450_w598_'),
(3, 2019072, 'diouf', 'kasongo', '3', 'Computer Science', '4', 3, 'male', 'avatar/02  lamborghini-concept s [vikitech] .'),
(4, 2019072, 'diouf', 'kasongo', '3', 'Computer Science', '4', 3, 'male', 'avatar/02  lamborghini-concept s [vikitech] .');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `date`) VALUES
(7, 'graciaskas96@gmail.com', '2020-05-13 14:55:23'),
(8, 'graciaskas98@thedon.mail', '2020-05-16 16:09:59'),
(9, 'remybagalwa@yahoor.fr', '2020-05-19 11:17:47'),
(10, 'yalhigalulu@yahoor.fr', '2020-05-23 09:57:08');

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `trimster` int(11) NOT NULL,
  `amount` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL,
  `academic` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `payment`
--

INSERT INTO `payment` (`id`, `student`, `trimster`, `amount`, `date`, `academic`) VALUES
(11, 2019070, 2, '60', '15-07-2019', '2018-2019'),
(12, 2019070, 1, '34', '15-07-2019', '2018-2019'),
(13, 2019071, 1, '120', '15-07-2019', '2018-2019'),
(14, 2019071, 3, '', '14-07-2019', '2018-2019'),
(15, 2019070, 1, '120', '15-07-2019', '2018-2019'),
(16, 2019070, 2, '56', '15-07-2019', '2018-2019'),
(17, 2019070, 2, '56', '16-07-2019', '2018-2019');

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `function` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `matricule` int(11) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `staff`
--

INSERT INTO `staff` (`id`, `username`, `fname`, `lname`, `function`, `password`, `matricule`, `avatar`) VALUES
(1, 'berce', 'carlos', 'bonucci', 'lecturer', 'carlos', 201920390, 'src/a.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `bday` varchar(30) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `class` int(1) NOT NULL,
  `section` varchar(30) NOT NULL,
  `ldn` varchar(30) NOT NULL,
  `matricule` int(11) NOT NULL,
  `academic` varchar(30) NOT NULL,
  `option` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `pseudo`, `bday`, `sex`, `class`, `section`, `ldn`, `matricule`, `academic`, `option`) VALUES
(25, 'kasjla', 'klnaldfnkk', 'klnslkvn', '76576', 'male', 4, 'humanity', 'jvajvh', 2020050, '', 'humanity'),
(26, 'mzee', 'mister', 'safari', '20-21-1999', 'male', 6, 'humanity', 'jhgh', 2020051, '2020', 'humanity'),
(27, 'Primaire', 'Lstname', 'Thedon', '20-17-2020', '', 7, '', 'Kindu', 2020052, '2020', ''),
(28, 'kaso', ';om;l', ';lm;n', '20-02-1999', '', 7, '', 'Goma', 2020053, '2020', ''),
(29, 'jkkk', 'hhghg', 'errett', '20-2-768', '', 8, '', 'dffggh', 2020054, '2020', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`,`matricule`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`,`matricule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `academic`
--
ALTER TABLE `academic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
