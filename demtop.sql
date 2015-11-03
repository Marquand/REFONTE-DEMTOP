-- phpMyAdmin SQL Dump
-- version 3.3.9.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Lun 17 Juin 2013 à 19:46
-- Version du serveur: 5.5.9
-- Version de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `demtop`
--

-- --------------------------------------------------------

--
-- Structure de la table `bureaux`
--

CREATE TABLE IF NOT EXISTS `bureaux` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `Objet` varchar(25) DEFAULT NULL,
  `Volume` float DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `bureaux`
--

INSERT INTO `bureaux` (`ID`, `Objet`, `Volume`) VALUES
(1, 'Bureau', 0.5),
(2, 'Bureau avec retour', 0.8),
(3, 'Chaise accoudoir', 0.2),
(4, 'Chaise', 0.15),
(5, 'Classeur', 0.6),
(6, 'Ordinateur', 0.15),
(7, 'Commode', 0.5),
(8, 'Rangement', 1),
(9, 'Etagere', 0.8);

-- --------------------------------------------------------

--
-- Structure de la table `cartons`
--

CREATE TABLE IF NOT EXISTS `cartons` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `Objet` varchar(25) DEFAULT NULL,
  `Volume` float DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `cartons`
--

INSERT INTO `cartons` (`ID`, `Objet`, `Volume`) VALUES
(1, 'Petit carton', 0.1),
(2, 'Moyen carton', 0.2),
(3, 'Grand carton', 0.3);

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE IF NOT EXISTS `chambre` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `Objet` varchar(25) DEFAULT NULL,
  `Volume` float DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `chambre`
--

INSERT INTO `chambre` (`ID`, `Objet`, `Volume`) VALUES
(1, 'Lit matelas + sommier 200', 3.5),
(2, 'Lit matelas + sommier 160', 3),
(3, 'Lit matelas + sommier 120', 2.5),
(4, 'Lit matelas + sommier 90', 1.5),
(5, 'Chevet', 0.3),
(6, 'Commode 2 tiroirs', 0.4),
(7, 'Commode 3 tiroirs', 0.6),
(8, 'Bureau', 0.5),
(9, 'Bureau avec retour', 0.8),
(10, 'Armoire 2 portes', 2),
(11, 'Armoire 3 portes', 3),
(12, 'Dressing haut 200 x 90', 3),
(13, 'Chiffonier/Semainier/Rang', 0.6),
(14, 'Armoire enfant', 1.5),
(15, 'Coffre ', 0.3),
(16, 'Secr', 0.5);

-- --------------------------------------------------------

--
-- Structure de la table `cuisine`
--

CREATE TABLE IF NOT EXISTS `cuisine` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `Objet` varchar(25) DEFAULT NULL,
  `Volume` float DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `cuisine`
--

INSERT INTO `cuisine` (`ID`, `Objet`, `Volume`) VALUES
(1, 'Elements haut 2 portes', 0.5),
(2, 'Elements bas 2 portes', 0.75),
(3, 'Colonne cuisine', 1.5),
(4, 'Chaise', 0.15),
(5, 'Cuisiniere', 0.5),
(6, 'Lave vaisselle', 0.5),
(7, 'Frigo americain', 1.75),
(8, 'Congelateur', 1.5),
(9, 'Table ronde 4 personnes', 1.8),
(10, 'Table carre/rectangulaire', 1.5),
(11, 'Meuble d''appoint ', 0.3),
(12, 'Refrigerateur classique', 1);

-- --------------------------------------------------------

--
-- Structure de la table `garage/exterieur`
--

CREATE TABLE IF NOT EXISTS `garage` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `Objet` varchar(25) DEFAULT NULL,
  `Volume` float DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `garage/exterieur`
--

INSERT INTO `garage` (`ID`, `Objet`, `Volume`) VALUES
(1, 'Chaise', 0.2),
(2, 'Petite table', 2),
(3, 'Grande table', 3),
(4, 'Parasole', 0.1),
(5, 'Barbecue', 0.4),
(6, 'Velo', 0.4),
(7, 'Etagere metallique', 1),
(8, 'Armoire 2 portes', 2),
(9, 'Armoire 3 portes', 3),
(10, 'Brouette', 0.3),
(11, 'Pot de fleur petit modele', 0.1),
(12, 'Pot de fleur gros modele', 0.3);

-- --------------------------------------------------------

--
-- Structure de la table `salle a manger`
--

CREATE TABLE IF NOT EXISTS `manger` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `Objet` varchar(25) DEFAULT NULL,
  `Volume` float DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `salle a manger`
--

INSERT INTO `manger` (`ID`, `Objet`, `Volume`) VALUES
(1, 'Buffet 2 portes', 1.5),
(2, 'Buffet 3 portes', 2),
(3, 'Enfilade', 3),
(4, 'Buffet 2 portes 2 corps', 3),
(5, 'Buffet 3 portes 2 corps', 4),
(6, 'Vitrine', 1.5),
(7, 'Bonnetiere/homme debout', 1.5),
(8, 'Garde manger', 1.3),
(9, 'Living', 5),
(10, 'Encolure', 0.5),
(11, 'Encolure 2 corps', 0.8),
(12, 'Piano droit', 2),
(13, 'Chaise', 0.2),
(14, 'Table fermiere', 3),
(15, 'Table 6 personnes', 2.5);

-- --------------------------------------------------------

--
-- Structure de la table `salle de bain`
--

CREATE TABLE IF NOT EXISTS `bain` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `Objet` varchar(25) DEFAULT NULL,
  `Volume` float DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `salle de bain`
--

INSERT INTO `bain` (`ID`, `Objet`, `Volume`) VALUES
(1, 'Lave linge/Seche linge', 0.5),
(2, 'Meuble d''evier', 0.3),
(3, 'Colonne', 0.6);

-- --------------------------------------------------------

--
-- Structure de la table `salon`
--

CREATE TABLE IF NOT EXISTS `salon` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `Objet` varchar(25) DEFAULT NULL,
  `Volume` float DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `salon`
--

INSERT INTO `salon` (`ID`, `Objet`, `Volume`) VALUES
(1, 'Canape 2 places', 1.5),
(2, 'Canape 3 places', 2.5),
(3, 'Canape d''angle', 3),
(4, 'Banquette 2 places', 1.2),
(5, 'Banquette 3 places', 2),
(6, 'Fauteuil type club', 0.5),
(7, 'Fauteuil type voltaire', 0.4),
(8, 'Table basse classique', 0.4),
(9, 'Table basse carr', 0.7),
(10, 'Biblioth', 0.5),
(11, 'Commode', 0.6),
(12, 'Television', 0.3),
(13, 'Meuble d''appoint/bout de ', 0.2),
(14, 'Halogene', 0.2),
(15, 'Miroir', 0.2),
(16, 'Pouf', 0.3),
(17, 'Meuble tv', 0.4);
