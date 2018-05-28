-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 02 mai 2018 à 08:52
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
-- Structure de la table `assoc_bd_cases`
--

DROP TABLE IF EXISTS `assoc_bd_cases`;
CREATE TABLE IF NOT EXISTS `assoc_bd_cases` (
  `id_bd` int(11) NOT NULL,
  `id_case` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `assoc_bd_user`
--

DROP TABLE IF EXISTS `assoc_bd_user`;
CREATE TABLE IF NOT EXISTS `assoc_bd_user` (
  `id_bd` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `assoc_bd_user`
--

INSERT INTO `assoc_bd_user` (`id_bd`, `id_user`) VALUES
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(8, 3),
(10, 3),
(12, 3),
(18, 3),
(19, 3),
(23, 3);

-- --------------------------------------------------------

--
-- Structure de la table `bandesdessinees`
--

DROP TABLE IF EXISTS `bandesdessinees`;
CREATE TABLE IF NOT EXISTS `bandesdessinees` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `title` varchar(535) COLLATE utf8_bin NOT NULL,
  `droits` set('potes','tous','privee') COLLATE utf8_bin DEFAULT NULL,
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
(1, NULL, 'exemple1', 'potes', 10, NULL, '2018-04-09', 'terminee', 'http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 4, 'exemple2', 'potes', 10, NULL, '2018-04-09', 'terminee', 'http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, 'exemple3', 'privee', 10, '', '2018-04-13', 'terminee', 'http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg', 2, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 3, 'exemple4', 'potes', 5, '', '2018-04-11', 'encours', 'http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 3, 'exemple5', 'tous', 10, NULL, '2018-04-10', 'terminee', 'http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 3, 'exemple6', 'tous', 10, NULL, '2018-04-10', 'terminee', 'http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 4, 'exemple7', 'tous', 10, NULL, '2018-04-10', 'terminee', 'http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 3, 'exemple8', 'tous', 2, '', '2018-04-13', 'encours', 'http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg', 2, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 4, 'exemple9', 'tous', 3, '', '2018-04-02', 'encours', 'http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 3, 'exemple10', 'tous', 10, NULL, '2018-04-10', 'terminee', 'http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 5, 'exemple11', 'potes', 10, NULL, '2018-04-10', 'terminee', 'http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 3, 'exemple12', 'tous', 10, NULL, '2018-04-10', 'terminee', 'http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 4, 'exemple13', 'tous', 10, NULL, '2018-04-10', 'terminee', 'http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 5, 'exemple14', 'tous', 10, NULL, '2018-04-10', 'terminee', 'http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg', 5, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 5, 'exemple15', 'tous', 4, NULL, '2018-04-17', 'encours', 'http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 3, 'exemple18', 'potes', 10, 'www.cadavreesquisse.com/exemple1', '2018-04-19', 'terminee', 'http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg', NULL, NULL, NULL, '4j', NULL, NULL, NULL),
(19, 3, 'exemple19', 'tous', 7, 'www.cadavreesquisse.com/exemple2', '2018-04-19', 'terminee', 'http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg', NULL, NULL, NULL, '6j', NULL, NULL, NULL),
(20, 5, 'exemple20', 'potes', 10, NULL, NULL, 'terminee', 'http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 4, 'exemple21', 'potes', 5, NULL, NULL, 'terminee', 'http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 4, 'exemple22', 'potes', 1, '', '2018-04-20', 'encours', NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 3, 'exemple23', 'tous', 9, NULL, '2018-04-13', 'encours', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 4, 'exemple24', 'tous', 8, NULL, '2018-04-09', 'encours', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `cases`
--

INSERT INTO `cases` (`id`, `id_bd`, `id_user`, `url`, `etatC`, `image`, `format`, `time_creation`, `date_real`, `date_resa`, `duree`) VALUES
(1, 9, 2, NULL, 'reserve', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 4, 3, NULL, 'vide', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 2, 5, NULL, 'vide', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 3, 5, NULL, 'reserve', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 15, 4, NULL, 'reserve', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 18, 3, NULL, 'vide', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 19, 4, NULL, 'reserve', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 20, 5, NULL, 'termine', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 21, 3, NULL, 'vide', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 22, 4, NULL, 'reserve', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 23, 5, NULL, 'termine', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 24, 5, NULL, 'reserve', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 8, 3, NULL, 'vide', NULL, NULL, NULL, NULL, NULL, NULL);

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
  `name` varchar(36) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(535) COLLATE utf8_bin NOT NULL,
  `date_inscription` date NOT NULL,
  `url` varchar(535) COLLATE utf8_bin NOT NULL,
  `avatar` varchar(535) COLLATE utf8_bin NOT NULL DEFAULT 'localhost/cadavre_esquisse/img/cde-avatar-type.jpg' COMMENT 'url',
  `description` varchar(535) COLLATE utf8_bin NOT NULL,
  `website` varchar(535) COLLATE utf8_bin DEFAULT NULL,
  `facebook` varchar(535) COLLATE utf8_bin DEFAULT NULL,
  `instagram` varchar(535) COLLATE utf8_bin DEFAULT NULL,
  `twitter` varchar(535) COLLATE utf8_bin DEFAULT NULL,
  `role` enum('admin','user','public') COLLATE utf8_bin NOT NULL DEFAULT 'user',
  `bd_cree` int(11) DEFAULT NULL,
  `bdjoin` int(11) DEFAULT NULL,
  `case_cree` int(11) DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  `commentaire` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
COMMIT;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `name`, `email`, `password`, `date_inscription`, `url`, `avatar`, `description`, `website`, `facebook`, `instagram`, `twitter`, `role`, `bd_cree`, `bdjoin`, `case_cree`, `like`, `commentaire`) VALUES
(3, 'test1', 'test1@mail.com', 'Test.1', NULL, NULL, 'http://localhost/cadavre_esquisse/img/cde-avatar-type.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
