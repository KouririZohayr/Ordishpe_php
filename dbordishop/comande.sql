-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 28 juin 2022 à 10:39
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ordishop`
--

-- --------------------------------------------------------

--
-- Structure de la table `comande`
--

CREATE TABLE `comande` (
  `id` int(11) NOT NULL,
  `adress` varchar(40) NOT NULL,
  `prix_totale` float NOT NULL,
  `email_c` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comande`
--

INSERT INTO `comande` (`id`, `adress`, `prix_totale`, `email_c`) VALUES
(1, '22 rue alabsi', 83677.5, 'derouichraja00@gmail.com'),
(2, '22 rue alabsi', 83677.5, 'derouichraja00@gmail.com'),
(3, '22 rue alabsi', 83677.5, 'derouichraja00@gmail.com'),
(4, '22 rue alabsi', 83677.5, 'derouichraja00@gmail.com'),
(19, '22 rue alabsi', 83677.5, 'derouichraja00@gmail.com'),
(20, '22 rue alabsi', 0, 'derouichraja00@gmail.com'),
(21, '22 rue alabsi', 0, 'derouichraja00@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comande`
--
ALTER TABLE `comande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_c` (`email_c`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comande`
--
ALTER TABLE `comande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comande`
--
ALTER TABLE `comande`
  ADD CONSTRAINT `email_c` FOREIGN KEY (`email_c`) REFERENCES `client` (`email_c`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
