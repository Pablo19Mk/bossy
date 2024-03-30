-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 30 mars 2024 à 06:25
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
-- Base de données : `bddinformation`
--

-- --------------------------------------------------------

--
-- Structure de la table `profile_personne`
--

DROP TABLE IF EXISTS `profile_personne`;
CREATE TABLE IF NOT EXISTS `profile_personne` (
  `Rang` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `Race` varchar(100) NOT NULL,
  `PaysOrigine` varchar(100) NOT NULL,
  PRIMARY KEY (`Rang`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `profile_personne`
--

INSERT INTO `profile_personne` (`Rang`, `Nom`, `Prenom`, `Age`, `Race`, `PaysOrigine`) VALUES
(40, 'David ', 'Gabriello', 26, 'gasy', 'Mada'),
(41, 'Baldwin', 'IV', 16, 'bloodking', 'jerusalem');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
