-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 22 Octobre 2021 à 09:52
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `articles`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `date_pub` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=585 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `texte`, `auteur`, `date_pub`) VALUES
(581, '', '', '', '0000-00-00'),
(582, 'article1', 'texte texte texte texte', 'yosra', '2021-10-21'),
(583, '', '', '', '0000-00-00'),
(584, '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texte` text NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `id_article` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=189 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `texte`, `auteur`, `date`, `id_article`) VALUES
(48, 'commentaire1', 'yosra', '2021-10-10', 0),
(160, '', '', '0000-00-00', 0),
(161, '', '', '0000-00-00', 0),
(162, '', '', '0000-00-00', 0),
(163, '', '', '0000-00-00', 0),
(164, '', '', '0000-00-00', 0),
(165, '', '', '0000-00-00', 0),
(166, '', '', '0000-00-00', 0),
(167, 'com2', '', '2021-10-10', 0),
(168, '', '', '0000-00-00', 0),
(169, '', '', '0000-00-00', 0),
(170, '', '', '0000-00-00', 0),
(171, '', '', '0000-00-00', 0),
(172, 'y', '', '2021-10-10', 0),
(173, 'y', '', '2021-10-10', 0),
(174, '', '', '0000-00-00', 0),
(175, '', '', '0000-00-00', 0),
(176, '', '', '0000-00-00', 0),
(177, '', '', '0000-00-00', 0),
(178, 'textetextetexte', '', '2021-10-10', 0),
(179, 'textetextetexte', '', '2021-10-10', 0),
(180, '', '', '0000-00-00', 0),
(181, 'g', '', '2021-10-10', 0),
(182, 'g', '', '2021-10-10', 0),
(183, '', '', '0000-00-00', 0),
(184, '', '', '0000-00-00', 0),
(185, 'correction', 'wiem', '2021-10-11', 0),
(186, '', '', '0000-00-00', 0),
(187, 'global', '', '2021-10-11', 0),
(188, '', '', '0000-00-00', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
