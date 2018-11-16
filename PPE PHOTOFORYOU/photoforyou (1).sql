-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 16 nov. 2018 à 08:49
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `photoforyou`
--

DELIMITER $$
--
-- Fonctions
--
DROP FUNCTION IF EXISTS `InitCap`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `InitCap` (`chainecara` VARCHAR(30)) RETURNS VARCHAR(30) CHARSET utf8 BEGIN
declare chaine varchar(30);
declare lettre varchar(1);
set chaine = chainecara;
set lettre = substr(chaine,1,1) ;
set chaine =substring(chaine,2);
set chaine = concat(upper(lettre),lower(chaine));

RETURN chaine;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `idMenu` int(11) NOT NULL AUTO_INCREMENT,
  `NomMenu` varchar(255) NOT NULL,
  `Lien` varchar(255) NOT NULL,
  `connexion` tinyint(1) NOT NULL,
  `connexion2` int(1) NOT NULL,
  PRIMARY KEY (`idMenu`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`idMenu`, `NomMenu`, `Lien`, `connexion`, `connexion2`) VALUES
(1, 'Acheter de crédits', 'achatscredits.php', 0, 2),
(2, 'Acheter des images', 'achatimages.php', 0, 2),
(3, 'Nous contacter', 'contacts.php', 0, 2),
(4, 'Connexion', 'connexion.php', 0, 0),
(5, 'S\'inscrire', 'inscription.php', 0, 0),
(6, 'Déconnexion', 'deco.php', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(50) NOT NULL,
  `type` varchar(11) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `motdepasse` varchar(40) DEFAULT NULL,
  `credit` varchar(45) DEFAULT 'Crédits',
  PRIMARY KEY (`email`,`type`),
  UNIQUE KEY `nom_UNIQUE` (`nom`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`email`, `type`, `prenom`, `nom`, `pseudo`, `motdepasse`, `credit`) VALUES
('robert@doisno.fr', 'photographe', 'Robert', 'Doisneau', 'DOisneau', 'azertyuiop', '12'),
('sebcbien@info.fr', 'photographe', 'SEBASTIEN', 'INION', 'sebcbien', 'azerty11', '43'),
('bat@gmail.com', '', 'bat', 'pou', 'batman', 'bc7316929fe1545bf0b98d114ee3ecb8', 'Crédits');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
