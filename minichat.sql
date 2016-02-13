-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 05 Décembre 2015 à 13:28
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

DROP TABLE IF EXISTS `minichat`;
CREATE TABLE IF NOT EXISTS `minichat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_message` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `minichat`
--

INSERT INTO `minichat` (`id`, `pseudo`, `message`, `date_message`) VALUES
(1, 'Jacques', 'Bonjour tout le monde ! Voici mon nouveau minichat, j''espère qu''il vous plaira :-o', '2015-12-05 13:03:50'),
(2, 'John', 'Salut Jacques, il présente pas mal, est-il sécurisé ? ;-)', '2015-12-05 13:04:20'),
(3, 'Jacques', 'Oui, je crois. On verra à l''usage :-o', '2015-12-05 13:05:37'),
(4, 'Tom', 'Salut tout le monde ! Super ton minichat Jacques. Cela devrait te valoir une bonne note pour ce TP, ah ah ! ;-)', '2015-12-05 13:06:26'),
(5, 'Jacques', 'Merci Tom pour tes encouragements :-)', '2015-12-05 13:26:07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
