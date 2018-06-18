-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 18 juin 2018 à 09:39
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
(10155, 1),
(31293, 1),
(18130, 1),
(4531, 1),
(30768, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=31294 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `bandesdessinees`
--

INSERT INTO `bandesdessinees` (`id`, `id_user`, `title`, `droits`, `pages`, `url`, `date_creation`, `etat`, `couverture`, `participants`, `cases`, `commentaires`, `temps_real`, `duree_real`, `commentaire`, `note`) VALUES
(10155, 1, 'test bd cree', 'privee', 1, 'www.cadavreesquisse.com/test bd cree', '2018-06-13', 'encours', 'http://localhost/cadavre_esquisse/img/cde-apercubd-type.jpg', 1, NULL, NULL, '1', NULL, NULL, NULL),
(30768, 1, 'test ajout case', 'tous', 5, 'www.cadavreesquisse.com/test ajout case', '2018-06-18', 'encours', '', 1, NULL, NULL, '6', NULL, NULL, NULL);

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
  `numero` int(11) NOT NULL,
  `time_creation` datetime DEFAULT NULL COMMENT 'y-m-d h:mn:sec',
  `date_real` date DEFAULT NULL,
  `date_resa` date DEFAULT NULL,
  `duree` time DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `password` char(255) COLLATE utf8_bin NOT NULL,
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

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `name`, `email`, `password`, `date_inscription`, `url`, `avatar`, `description`, `website`, `facebook`, `instagram`, `twitter`, `role`, `bd_cree`, `bdjoin`, `case_cree`, `like`, `commentaire`) VALUES
(1, 'admin', 'mailtemporaire@mail.com', 'uM#1F70ZL7vAjwZr', '2018-04-02', '', 'localhost/cadavre_esquisse/img/cde-avatar-type.jpg', '', NULL, NULL, NULL, NULL, 'admin', 5, NULL, NULL, NULL, NULL),
(5, 'user', 'user@mail.com', '$2y$10$4biTe.Lmp3dyZVTqOAVJueKKwa8YPvdvpGELp9wknSCJxCLUGcFbW', '2018-06-14', 'http://localhost/cadavre_esquisse/vues/user', 'localhost/cadavre_esquisse/img/cde-avatar-type.jpg', 'gnrtyjjyjhrt', '', NULL, NULL, NULL, 'user', NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
