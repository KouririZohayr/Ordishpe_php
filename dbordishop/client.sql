-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 28 juin 2022 à 10:38
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
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `email_c` varchar(60) NOT NULL,
  `prenom_c` varchar(20) NOT NULL,
  `nom_c` varchar(30) NOT NULL,
  `sexe_c` varchar(6) NOT NULL,
  `tel_c` varchar(20) NOT NULL,
  `type_c` varchar(15) DEFAULT NULL,
  `adr_c` varchar(70) DEFAULT NULL,
  `pass_c` varchar(40) NOT NULL,
  `type_utilisateur` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`email_c`, `prenom_c`, `nom_c`, `sexe_c`, `tel_c`, `type_c`, `adr_c`, `pass_c`, `type_utilisateur`) VALUES
('derouichraja00@gmail.com', 'abdelilah', 'hasnaoui', 'homme', '+212658758535', 'Entreprise', '22 rue alabsi', '123456789', 'client'),
('Kouri8@gmail.com', 'world', 'kouriri', 'famme', '+212658758535', 'Entreprise', '03 rue elmahjoub safi', '123456789', 'client'),
('KOURIRI.ZOHAYR@ofppt-edu.ma', 'ahmed ', 'zaimi', 'homme', '0658756587', 'Entreprise', '03 rue limran 200', '123456789', 'client'),
('kouririaiman@gmail.com', 'kouriri', 'aiman', 'homme', '+212658758535', 'Entreprise', '03 rue elmahjoub safi', 'zouhair065875', 'client'),
('kouririzouhair88@gmail.com', 'zouhair', 'kouriri', 'homme', '0658758535', NULL, '03 rue alll', 'zouhair2222', 'admin'),
('taoufyq@gmail.com', 'younes', 'taoufyq', 'homme', '0658758535', 'Enhj', 'hjkl', '12345678', 'client');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`email_c`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
