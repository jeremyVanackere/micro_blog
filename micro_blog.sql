-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 18 jan. 2019 à 13:43
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `micro_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `contenu` varchar(64) CHARACTER SET utf8mb4 NOT NULL,
  `date` datetime NOT NULL,
  `vote` int(4) NOT NULL DEFAULT '0',
  `ip` varchar(16) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `contenu`, `date`, `vote`, `ip`) VALUES
(22, '1', '2019-01-18 12:59:21', 1, '::1'),
(23, '2', '2019-01-18 12:59:25', 1, '::1'),
(24, '3', '2019-01-18 12:59:29', 1, '::1'),
(25, '4', '2019-01-18 12:59:35', 0, NULL),
(26, '5', '2019-01-18 12:59:40', 0, NULL),
(27, '6', '2019-01-18 12:59:48', 0, NULL),
(29, '7', '2019-01-18 13:00:05', 0, NULL),
(30, '8', '2019-01-18 13:00:09', 0, NULL),
(31, '9', '2019-01-18 13:00:14', 0, NULL),
(32, '10', '2019-01-18 13:00:20', 0, NULL),
(33, '11', '2019-01-18 13:00:24', 0, NULL),
(34, '13', '2019-01-18 13:00:31', 0, NULL),
(35, '14', '2019-01-18 13:00:37', 0, NULL),
(36, '15', '2019-01-18 13:00:43', 0, NULL),
(45, '22', '2019-01-18 13:02:42', 0, NULL),
(38, '16', '2019-01-18 13:00:48', 1, '::1'),
(39, '17', '2019-01-18 13:00:53', 0, NULL),
(44, '21', '2019-01-18 13:02:37', 0, NULL),
(41, '18', '2019-01-18 13:00:58', 1, '::1'),
(42, '19', '2019-01-18 13:01:05', 1, '::1'),
(43, '20', '2019-01-18 13:01:12', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(32) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `sid` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `pwd`, `sid`, `email`) VALUES
(1, 'jules', '1234', 'b0e119c18702d9acc26a9f86fa0b3519', 'je.jedu59123@hotmail.fr'),
(2, 'jules', '1234', 'b0e119c18702d9acc26a9f86fa0b3519', 'je.jedu59123@hotmail.fr');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
