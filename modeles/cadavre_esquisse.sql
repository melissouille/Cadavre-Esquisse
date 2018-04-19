-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 19 avr. 2018 à 14:56
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
  `id_user` int(11) DEFAULT NULL,
  `title` varchar(535) COLLATE utf8_bin NOT NULL,
  `droits` set('Entre pote','Ouverte à tous','Privée') COLLATE utf8_bin DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `url` text COLLATE utf8_bin,
  `date_creation` date DEFAULT NULL COMMENT 'Y-m-d',
  `etat` enum('terminee','encours') COLLATE utf8_bin DEFAULT NULL,
  `couverture` text COLLATE utf8_bin,
  `participants` int(11) DEFAULT NULL,
  `cases` int(11) DEFAULT NULL,
  `commentaires` int(11) DEFAULT NULL,
  `temps_real` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `duree_real` time DEFAULT NULL,
  `commentaire` text COLLATE utf8_bin,
  `note` set('1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `bandesdessinees`
--

INSERT INTO `bandesdessinees` (`id`, `id_user`, `title`, `droits`, `pages`, `url`, `date_creation`, `etat`, `couverture`, `participants`, `cases`, `commentaires`, `temps_real`, `duree_real`, `commentaire`, `note`) VALUES
(2, 0, 'BD test 1', 'Ouverte à tous', NULL, '', '2018-04-13', 'terminee', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 0, 'BD test 2', 'Privée', NULL, '', '2018-04-13', 'terminee', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 0, 'BD test 3', 'Entre pote', NULL, '', '2018-04-11', 'encours', NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 0, 'BD test 5', 'Entre pote', NULL, '', '2018-04-02', 'terminee', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 0, 'BD test 6', 'Ouverte à tous', NULL, '', '2018-04-02', 'encours', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 5, 'BD test 1', 'Ouverte à tous', 4, NULL, '2018-04-17', 'encours', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 5, 'testtemps', NULL, 2, NULL, '2018-04-17', 'encours', NULL, NULL, NULL, NULL, '12h', NULL, NULL, NULL),
(17, 5, 'testurl', NULL, 1, 'www.cadavreesquisse.com/testurl', '2018-04-17', 'encours', NULL, NULL, NULL, NULL, '1h', NULL, NULL, NULL),
(18, 3, 'exemple1', 'Entre pote', 10, 'www.cadavreesquisse.com/exemple1', '2018-04-19', 'terminee', NULL, NULL, NULL, NULL, '4j', NULL, NULL, NULL),
(19, 3, 'exemple2', 'Ouverte à tous', 7, 'www.cadavreesquisse.com/exemple2', '2018-04-19', 'terminee', NULL, NULL, NULL, NULL, '6j', NULL, NULL, NULL),
(20, 5, 'exemple3', 'Entre pote', 10, NULL, NULL, 'terminee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 4, 'exemple4', 'Entre pote', 5, NULL, NULL, 'terminee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 4, 'exemple5', 'Entre pote', 1, NULL, NULL, 'terminee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 3, 'exemple6', 'Ouverte à tous', 9, NULL, NULL, 'terminee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 4, 'exemple7', 'Ouverte à tous', 8, NULL, NULL, 'terminee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `cases`
--

DROP TABLE IF EXISTS `cases`;
CREATE TABLE IF NOT EXISTS `cases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_bd` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `url` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `etatC` enum('vide','reserve','termine') COLLATE utf8_bin NOT NULL,
  `image` text COLLATE utf8_bin COMMENT 'url',
  `format` enum('1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `time_creation` datetime DEFAULT NULL COMMENT 'y-m-d h:mn:sec',
  `date_real` date DEFAULT NULL,
  `date_resa` date DEFAULT NULL,
  `duree` time DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `cases`
--

INSERT INTO `cases` (`id`, `id_bd`, `id_user`, `url`, `etatC`, `image`, `format`, `time_creation`, `date_real`, `date_resa`, `duree`) VALUES
(1, 9, 2, NULL, 'reserve', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 4, 3, NULL, 'vide', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 2, 5, NULL, 'vide', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 3, 5, NULL, 'reserve', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 8, 4, NULL, 'vide', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 15, 4, NULL, 'reserve', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 16, 3, NULL, 'vide', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 16, 4, NULL, 'reserve', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_bd` int(11) NOT NULL,
  `id_case` int(11) NOT NULL,
  `contenu` text COLLATE utf8_bin NOT NULL,
  `reponse` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`,`id_bd`,`id_case`),
  KEY `id_case` (`id_case`)
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
  `avatar` varchar(500) COLLATE utf8_bin DEFAULT NULL COMMENT 'url',
  `description` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `facebook` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `instagram` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `twitter` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `role` enum('admin','user','public') COLLATE utf8_bin DEFAULT NULL,
  `bd_cree` int(11) DEFAULT NULL,
  `bd_join` int(11) DEFAULT NULL,
  `case_cree` int(11) DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  `commentaire` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom` (`name`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `name`, `email`, `password`, `date_inscription`, `url`, `avatar`, `description`, `website`, `facebook`, `instagram`, `twitter`, `role`, `bd_cree`, `bd_join`, `case_cree`, `like`, `commentaire`) VALUES
(3, 'test1', 'test1@mail.com', 'Test.1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'test2', 'test2@mail.com', 'Test.2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'test3', 'test3@mail.com', 'Test.3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`id_case`) REFERENCES `cases` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
