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
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `code_pr` int(12) NOT NULL,
  `marque_pr` varchar(20) NOT NULL,
  `serie_pr` varchar(50) NOT NULL,
  `type_pr` varchar(50) NOT NULL,
  `prece_pr` varchar(50) NOT NULL,
  `ram_pr` varchar(50) NOT NULL,
  `rom_pr` varchar(50) NOT NULL,
  `tpdisque_pr` varchar(5) NOT NULL,
  `cgraphique_pr` varchar(50) NOT NULL,
  `prix_inistial_pr` float NOT NULL,
  `propmotion_pr` float DEFAULT NULL,
  `ios_pr` varchar(100) NOT NULL,
  `ecran_pr` varchar(20) DEFAULT NULL,
  `colour_pr` varchar(50) NOT NULL,
  `tactil_pr` varchar(50) DEFAULT NULL,
  `qstock_pr` int(10) NOT NULL,
  `photo_pr` varchar(300) NOT NULL,
  `description_pr` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`code_pr`, `marque_pr`, `serie_pr`, `type_pr`, `prece_pr`, `ram_pr`, `rom_pr`, `tpdisque_pr`, `cgraphique_pr`, `prix_inistial_pr`, `propmotion_pr`, `ios_pr`, `ecran_pr`, `colour_pr`, `tactil_pr`, `qstock_pr`, `photo_pr`, `description_pr`) VALUES
(0, 'MINIS FORUM', 'minis 7530', 'Mini pc', 'Celeron N4020', '‎4', '8', 'SSD', '‎Intel UHD Graphics 600', 2047, NULL, 'Windows 10 Home', NULL, 'Noir', NULL, 20, 'img\\61S6-BOCEaL._AC_SL1500_.jpg img\\71c2x9g6HrL._AC_SL1500_.jpg img\\41kHm8bRYtL._AC_.jpg \r\n', 'Mini PC sans Ventilateur Celeron N4020 (jusqu\'à 2,8 GHz) 4 Go DDR4 / 64 Go eMMC Mini Ordinateur Port HDMI et VGA 2,4/5,8 WiFi BT 3xUSB3.0, SSD M.2 2242 SSD'),
(1, 'Dell', 'Dell XPS 15 7590', 'portable', 'Intel Core i7-9750H', '16 DDR4', '1To', 'SSD', 'NVIDIA GeForce GTX 1650 4GB GDDR5', 11551, NULL, 'Windows 11 Home', '15.6 Pouces', 'Noir', 'non', 20, 'img\\71U6lws4MXL._AC_SL1500_.jpg img\\71XsLNbFhuL._AC_SL1500_.jpg img\\81iD7QhS30L._AC_SL1500_.jpg img\\81xR-N6DUcL._AC_SL1500_.jpg ', 'Dell XPS 15 7590 Intel Core i7-9750H Ordinateur Portable ultra leger 15\" OLED 4K Ultra HD Silver 16 Go de RAM SSD 1 To NVIDIA GTX 1650 4GB Clavier Français'),
(2, 'ASUS', 'ASUS ZenBook S13 UX371EA-HL366T', 'portable', 'Intel Core i7-1165G7 Evo', '32', '1To', 'SSD', 'Intel Iris XE Graphics', 7500.99, 20, 'Windows 10', '‎13.3 Pouces', 'Gris', 'oui', 5, 'img\\61muvldhxHL._AC_SL1080_.jpg img\\71ksIoC1cnL._AC_SL1500_.jpg img\\51FVMeas+VL._AC_SL1080_.jpg img\\51lPVidCBCL._AC_SL1080_.jpg img\\51n-iU+cfKL._AC_SL1080_.jpg', 'ASUS ZenBook S13 UX371EA-HL366T PC Portable 13\" UHD 4K OLED 400 Nits (Intel Core i7-1165G7 Evo, Intel Iris XE Graphics, RAM 16G, 1TB SSD PCIE, Windows 10) Clavier AZERTY Français'),
(4, 'Dell', '‎Inspiron 3891 Compact Desktop', 'Bureau', 'Intel Core i3-10105', '8 Go  DDR4', ' 1To', 'SSD', 'Intel UHD Graphics 630', 641.58, NULL, 'Windows 11 professionnel', ' 15.6', 'Noir', ' non', 30, 'img\\71whm0S+SkL._AC_SL1500_.jpg img\\71lXzXmYHFL._AC_SL1500_.jpg img\\71hXXZM8veL._AC_SL1500_.jpg img\\71Odco0bdxL._AC_SL1500_.jpg', 'Dell Inspiron 3891 Compact Tower Desktop - Intel Core i3-10105, 8GB DDR4 RAM, 256GB SSD, Intel UHD Graphics 630 with Shared Graphics Memory, Windows 10 Home - Black (Latest Model)');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`code_pr`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `code_pr` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
