-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 05 avr. 2018 à 08:33
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cadavre_esquisse`
--
CREATE DATABASE IF NOT EXISTS `cadavre_esquisse` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cadavre_esquisse`;

-- --------------------------------------------------------

--
-- Structure de la table `bandesdessinees`
--

DROP TABLE IF EXISTS `bandesdessinees`;
CREATE TABLE IF NOT EXISTS `bandesdessinees` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` text COLLATE utf8_bin NOT NULL,
  `utilisateur` varchar(100) COLLATE utf8_bin NOT NULL,
  `droits` enum('Entre pote','Ouverte à tous','Privée') COLLATE utf8_bin NOT NULL,
  `url` text COLLATE utf8_bin NOT NULL,
  `couverture` text COLLATE utf8_bin,
  `etat` enum('En cours - Réservée','En cours - Non réservée','Terminée','Publiée') COLLATE utf8_bin NOT NULL,
  `date_creation` date NOT NULL,
  `nbr_participant` int(11) DEFAULT NULL,
  `nbr_page` int(11) DEFAULT NULL,
  `nbr_case` int(11) DEFAULT NULL,
  `nbr_commentaire` int(11) DEFAULT NULL,
  `temps_real` time DEFAULT NULL,
  `duree_real` time DEFAULT NULL,
  `commentaire` text COLLATE utf8_bin,
  `note` set('1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `bandesdessinees`
--

INSERT INTO `bandesdessinees` (`id`, `titre`, `utilisateur`, `droits`, `url`, `couverture`, `etat`, `date_creation`, `nbr_participant`, `nbr_page`, `nbr_case`, `nbr_commentaire`, `temps_real`, `duree_real`, `commentaire`, `note`) VALUES
(1, 'Titre bande dessinée A', 'nomA', 'Entre pote', 'ww.cadavre-esquisse/titreA.com', NULL, 'En cours - Non réservée', '2018-04-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `cases`
--

DROP TABLE IF EXISTS `cases`;
CREATE TABLE IF NOT EXISTS `cases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` text COLLATE utf8_bin NOT NULL,
  `etat` enum('vide','reserve','complete') COLLATE utf8_bin NOT NULL,
  `image` text COLLATE utf8_bin NOT NULL COMMENT 'url',
  `format` enum('1','2','3','4','5') COLLATE utf8_bin NOT NULL,
  `likes` tinyint(1) NOT NULL,
  `utilisateur` varchar(100) COLLATE utf8_bin NOT NULL,
  `date_real` date NOT NULL,
  `date_resa` date NOT NULL,
  `duree_real` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `utilisateur` varchar(100) COLLATE utf8_bin NOT NULL,
  `contenu` text COLLATE utf8_bin NOT NULL,
  `likes` tinyint(1) DEFAULT NULL,
  `reponse` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `date_inscription` date DEFAULT NULL,
  `dexcription` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `url` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `url_avatar` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `description` text COLLATE utf8_bin,
  `lien_personnel` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `liens_reseaux` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `role` enum('admin','editeur','auteur') COLLATE utf8_bin DEFAULT NULL,
  `nb_bd_cree` int(11) DEFAULT NULL,
  `nb_bd_participee` int(11) DEFAULT NULL,
  `nb_case_cree` int(11) DEFAULT NULL,
  `nb_commentaire` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom_utilisateur`, `email`, `date_inscription`, `url`, `url_avatar`, `description`, `lien_personnel`, `liens_reseaux`, `role`, `nbr_bd_cree`, `nbr_bd_participee`, `nbr_case_cree`, `nbr_like`, `nbr_commentaire`) VALUES
(1, 'Test1', 'test1@mail.com', '2018-04-03', '', '', '', '', '', 'admin', 2, 3, 4, 5, 6),
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
