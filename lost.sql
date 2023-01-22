-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 22 jan. 2023 à 18:32
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lost`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nom` varchar(1000) NOT NULL,
  `commentaire` text NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user_ins`
--

DROP TABLE IF EXISTS `user_ins`;
CREATE TABLE IF NOT EXISTS `user_ins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surnom` varchar(1000) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(1000) NOT NULL,
  `mdp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user_ins`
--

INSERT INTO `user_ins` (`id`, `surnom`, `nom`, `prenom`, `mdp`) VALUES
(1, 'jonhies', 'Isaia', 'Lolo', '$2y$10$MH6AUCk0qekif7ANJ3GLAuou91bSTcMzMVi99irDiGfPhS5q3./za'),
(2, 'jonhies', 'Isaia', 'Lolo', '$2y$10$MH6AUCk0qekif7ANJ3GLAuou91bSTcMzMVi99irDiGfPhS5q3./za'),
(3, 'Toto', 'Alain', 'Coco', '$2y$10$bjWfXMPEzxZtAWM/DInxauGQXPN85FyG3fsaZSH1QcW0oU.4fu4ZO'),
(4, 'Toto', 'Alain', 'Coco', '$2y$10$bjWfXMPEzxZtAWM/DInxauGQXPN85FyG3fsaZSH1QcW0oU.4fu4ZO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
