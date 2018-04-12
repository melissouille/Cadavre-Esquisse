-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 12 avr. 2018 à 12:58
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
  `user` varchar(32) COLLATE utf8_bin NOT NULL,
  `droits` enum('Entre pote','Ouverte à tous','Privée') COLLATE utf8_bin NOT NULL,
  `url` text COLLATE utf8_bin NOT NULL,
  `couverture` text COLLATE utf8_bin,
  `etat` enum('En cours - Réservée','En cours - Non réservée','Terminée','Publiée') COLLATE utf8_bin NOT NULL,
  `date_creation` date NOT NULL,
  `nb_participant` int(11) DEFAULT NULL,
  `nb_page` int(11) DEFAULT NULL,
  `nb_case` int(11) DEFAULT NULL,
  `nb_commentaire` int(11) DEFAULT NULL,
  `temps_real` time DEFAULT NULL,
  `duree_real` time DEFAULT NULL,
  `commentaire` text COLLATE utf8_bin,
  `note` set('1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `cases`
--

DROP TABLE IF EXISTS `cases`;
CREATE TABLE IF NOT EXISTS `cases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(32) COLLATE utf8_bin NOT NULL,
  `url` varchar(500) COLLATE utf8_bin NOT NULL,
  `etat` enum('vide','reserve','termine') COLLATE utf8_bin NOT NULL,
  `image` text COLLATE utf8_bin NOT NULL COMMENT 'url',
  `format` enum('1','2','3','4','5') COLLATE utf8_bin NOT NULL,
  `date_real` date NOT NULL,
  `date_resa` date NOT NULL,
  `duree` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(32) COLLATE utf8_bin NOT NULL,
  `contenu` text COLLATE utf8_bin NOT NULL,
  `reponse` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `date_inscription` date DEFAULT NULL,
  `url` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `url_avatar` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `description` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `facebook` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `instagram` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `twitter` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `role` enum('admin','user','public') COLLATE utf8_bin DEFAULT NULL,
  `nb_BD_cree` int(11) DEFAULT NULL,
  `nb_BD_participee` int(11) DEFAULT NULL,
  `nb_case_cree` int(11) DEFAULT NULL,
  `nb_like` int(11) DEFAULT NULL,
  `nb_commentaire` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom` (`name`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `name`, `email`, `password`, `date_inscription`, `url`, `url_avatar`, `description`, `website`, `facebook`, `instagram`, `twitter`, `role`, `nb_BD_cree`, `nb_BD_participee`, `nb_case_cree`, `nb_like`, `nb_commentaire`) VALUES
(3, 'test1', 'test1@mail.com', 'Test.1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bandesdessinees`
--
ALTER TABLE `bandesdessinees`
  ADD CONSTRAINT `bandesdessinees_ibfk_1` FOREIGN KEY (`user`) REFERENCES `utilisateurs` (`name`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `cases_ibfk_1` FOREIGN KEY (`user`) REFERENCES `utilisateurs` (`name`) ON UPDATE NO ACTION;

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`user`) REFERENCES `utilisateurs` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
