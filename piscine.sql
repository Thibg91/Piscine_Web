-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 20 avr. 2020 à 09:43
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `piscine`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `EmailAcheteur` varchar(255) NOT NULL,
  `EmailVendeur` varchar(255) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Prix` int(11) NOT NULL,
  `TypeAchat` varchar(255) NOT NULL,
  `NumeroCommande` int(11) NOT NULL AUTO_INCREMENT,
  `AdresseL1` varchar(255) NOT NULL,
  `AdresseL2` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `CodePostal` int(5) NOT NULL,
  `Pays` varchar(255) NOT NULL,
  `Telephone` int(10) NOT NULL,
  `NumeroCarte` int(16) NOT NULL,
  `nItem` int(11) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `DateF` date NOT NULL,
  `DateH` time NOT NULL,
  `Catégorie` varchar(255) NOT NULL,
  `PrixPropose` int(11) NOT NULL,
  PRIMARY KEY (`NumeroCommande`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`EmailAcheteur`, `EmailVendeur`, `Titre`, `Prix`, `TypeAchat`, `NumeroCommande`, `AdresseL1`, `AdresseL2`, `Ville`, `CodePostal`, `Pays`, `Telephone`, `NumeroCarte`, `nItem`, `Description`, `Photo`, `DateF`, `DateH`, `Catégorie`, `PrixPropose`) VALUES
('gautier@ece.fr', 'admin@ece.fr', 'Huawei', 300, 'nego_paye', 25, '5 rue petrelle', '', 'Paris', 75009, 'France', 641404660, 0, 1000013, '', 'huawei.jpg', '0000-00-00', '00:00:00', '', 280),
('oscar@ece.fr', 'gautier@ece.fr', 'lampe', 80, 'enchere_paye', 28, '9 rue condorcet', '', 'Paris', 75009, 'France', 641404667, 0, 1000019, '', 'lampe.jpg', '0000-00-00', '00:00:00', '', 80),
('gautier@ece.fr', 'admin@ece.fr', 'Bronze Rodin', 800, 'achatImmediat', 22, '5 rue petrelle', '', 'Paris', 75009, 'France', 641404660, 2147483647, 1000014, '', 'statut.jpg', '0000-00-00', '00:00:00', '', 0),
('tiago@ece.fr', 'gautier@ece.fr', 'Huawei', 501, 'enchere_paye', 30, '8 rue maubeuge', '', 'Paris', 75009, 'France', 641404668, 0, 1000020, '', 'huawei.jpg', '0000-00-00', '00:00:00', '', 501),
('tiago@ece.fr', 'admin@ece.fr', 'peluches kaws', 150, 'enchere', 31, '8 rue maubeuge', '', 'Paris', 75009, 'France', 641404668, 0, 1000029, 'Peluches Kaws en collaboration avec uniqlo sur sésame street - état proche du neuf ', '20200418_175217.jpg', '2020-04-20', '09:00:00', '', 155),
('tiago@ece.fr', 'admin@ece.fr', 'peluches kaws', 155, 'enchere', 32, '8 rue maubeuge', '', 'Paris', 75009, 'France', 641404668, 0, 1000029, 'Peluches Kaws en collaboration avec uniqlo sur sésame street - état proche du neuf ', '20200418_175217.jpg', '2020-04-20', '09:00:00', '', 156),
('gautier@ece.fr', 'admin@ece.fr', 'peluches kaws', 156, 'enchere', 33, '5 rue petrelle', '', 'Paris', 75009, 'France', 641404660, 0, 1000029, 'Peluches Kaws en collaboration avec uniqlo sur sésame street - état proche du neuf ', '20200418_175217.jpg', '2020-04-20', '09:00:00', '', 157),
('gautier@ece.fr', 'admin@ece.fr', 'peluches kaws', 157, 'enchere', 34, '5 rue petrelle', '', 'Paris', 75009, 'France', 641404660, 0, 1000029, 'Peluches Kaws en collaboration avec uniqlo sur sésame street - état proche du neuf ', '20200418_175217.jpg', '2020-04-20', '09:00:00', '', 158);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `Prenom` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Vendeur` varchar(255) NOT NULL,
  `Admin` varchar(255) NOT NULL,
  `AdresseL1` varchar(255) NOT NULL,
  `AdresseL2` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `CodePostal` int(5) NOT NULL,
  `Pays` varchar(255) NOT NULL,
  `Telephone` int(10) NOT NULL,
  `TypeCarte` varchar(255) NOT NULL,
  `numCarte` varchar(16) NOT NULL,
  `DateExpiration` varchar(11) NOT NULL,
  `CodeSecurite` int(4) NOT NULL,
  `NomCarte` varchar(255) NOT NULL,
  `photoID` varchar(255) NOT NULL,
  `photoBack` varchar(255) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`Prenom`, `Nom`, `Email`, `Password`, `Vendeur`, `Admin`, `AdresseL1`, `AdresseL2`, `Ville`, `CodePostal`, `Pays`, `Telephone`, `TypeCarte`, `numCarte`, `DateExpiration`, `CodeSecurite`, `NomCarte`, `photoID`, `photoBack`) VALUES
('Tiago', 'Teixeira', 'tiago@ece.fr', 'ece', 'non', 'non', '8 rue maubeuge', '', 'Paris', 75009, 'France', 641404668, 'visa', '1234567890123456', '1020', 784, 'TIAGO', '', ''),
('Gautier', 'Thibault', 'admin@ece.fr', 'admin', 'oui', 'oui', '7 rue lentonnet', '', 'Paris', 75009, 'France', 641404669, 'visa', '1234567891234567', '1020', 324, 'Gautier', '20200418_175217.jpg', ''),
('Oscar', 'Mars', 'oscar@ece.fr', 'ece', 'non', 'non', '9 rue condorcet', '', 'Paris', 75009, 'France', 641404667, 'amex', '9078563412123456', '1123', 3234, 'OSCAR', '', ''),
('Gautier', 'Plante', 'gautier@ece.fr', 'ece', 'oui', 'non', '5 rue petrelle', '', 'Paris', 75009, 'France', 641404660, 'master', '2143658709123456', '0921', 9875, 'GAUTIER', '', ''),
('Thibault', 'Guisnel', 'thibault@ece.fr', 'ece', 'non', 'non', '', '', '', 0, '', 0, 'visa', '1616161616161616', '0820', 741, 'M THIBAULT GUISNEL', '', ''),
('Xavier', 'ANTOINE', 'xavier@ece.fr', 'ece', 'non', 'non', '23 rue dESTIENNE DORVES', '', 'Brétigny-sur-Orge', 91220, 'FRANCE', 651153315, 'visa', '1234567891234567', '0720', 456, 'M THIBAULT GUISNEL', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `enchere` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meilleureO` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `achatM` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `titre` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descr` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `photo1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `photo2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `photo3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `AchatImmediat` int(11) NOT NULL,
  `dateF` date NOT NULL,
  `dateH` time NOT NULL,
  `nItem` int(11) NOT NULL AUTO_INCREMENT,
  `Categorie` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emailAcheteur` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emailVendeur` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`nItem`)
) ENGINE=MyISAM AUTO_INCREMENT=1000030 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`enchere`, `meilleureO`, `achatM`, `titre`, `descr`, `photo1`, `photo2`, `photo3`, `video`, `prix`, `AchatImmediat`, `dateF`, `dateH`, `nItem`, `Categorie`, `emailAcheteur`, `emailVendeur`) VALUES
('', 'oui', 'oui', 'Bronze Rodin', 'Statut en Bronze', 'statut.jpg', '', '', '', 1000, 1000, '2020-04-30', '11:00:00', 1000027, 'tresor', '', 'admin@ece.fr'),
('', '', 'oui', 'Louis or', 'Pièce en or très rare', 'piece.jpg', '', '', '', 2000, 2000, '2020-04-30', '13:00:00', 1000028, 'tresor', '', 'admin@ece.fr'),
('oui', '', 'oui', 'Tableau', 'portrait jeune fille', 'portrait.jpg', '', '', '', 500, 100, '2020-04-23', '12:00:00', 1000026, 'musee', '', 'admin@ece.fr'),
('', 'oui', 'oui', 'livres', 'Collection de livres', 'livres.jpg', '', '', '', 100, 200, '2020-04-22', '09:59:00', 1000025, 'musee', '', 'admin@ece.fr'),
('oui', '', 'oui', 'diamant', 'diamant', 'diamant.jpg', '', '', '', 20000, 100000, '2020-04-22', '00:00:00', 1000023, 'tresor', '', 'admin@ece.fr'),
('oui', '', 'oui', 'lampe', 'lampe ancienne', 'lampe.jpg', '', '', '', 40, 150, '2020-04-30', '00:00:00', 1000024, 'musee', '', 'admin@ece.fr'),
('', 'oui', '', 'Iphone', 'Iphone 11 neuf', 'iphone11.jpg', 'iphone11_2.jpg', '', '', 900, 1000, '2020-04-29', '00:00:00', 1000022, 'vip', '', 'gautier@ece.fr'),
('', 'oui', 'oui', 'Samsung', 'S10 bon etat', 's10.jpg', 'S10_2.jpg', '', '', 800, 1000, '2020-04-23', '12:00:00', 1000021, 'vip', '', 'gautier@ece.fr'),
('oui', '', 'oui', 'Huawei', 'Comme Neuf', 'huawei.jpg', '', '', '', 504, 1000, '2020-04-22', '01:00:00', 1000020, 'vip', '', 'gautier@ece.fr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
