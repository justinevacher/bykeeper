-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 27 Décembre 2016 à 19:32
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `coordonnee`
--

CREATE TABLE `coordonnee` (
  `id` int(11) NOT NULL,
  `trajet_id` int(11) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

CREATE TABLE `trajet` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateDebut` datetime NOT NULL,
  `dateFin` datetime NOT NULL,
  `vitesseMoyenne` int(11) NOT NULL,
  `distance` int(11) NOT NULL,
  `duree` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `numTel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vitesseMoyenneGlob` int(11) NOT NULL,
  `distanceGlob` int(11) NOT NULL,
  `notifSMS` tinyint(1) NOT NULL,
  `notifEmail` tinyint(1) NOT NULL,
  `notifZonesRisques` tinyint(1) NOT NULL,
  `numBoitier` int(11) NOT NULL,
  `etatBoitier` tinyint(1) NOT NULL,
  `sensibiliteDistanceBoitier` int(11) NOT NULL,
  `sensibiliteVibrationBoitier` int(11) NOT NULL,
  `optionBoitierVeloStatique` tinyint(1) NOT NULL,
  `optionBoitierProximiteTel` tinyint(1) NOT NULL,
  `latitudeBoitier` double NOT NULL,
  `longitudeBoitier` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `numTel`, `vitesseMoyenneGlob`, `distanceGlob`, `notifSMS`, `notifEmail`, `notifZonesRisques`, `numBoitier`, `etatBoitier`, `sensibiliteDistanceBoitier`, `sensibiliteVibrationBoitier`, `optionBoitierVeloStatique`, `optionBoitierProximiteTel`, `latitudeBoitier`, `longitudeBoitier`) VALUES
(1, 'admin', 'admin', 'admin@testtest.fr', 'admin@testtest.fr', 1, NULL, '$2y$13$EkHf1qkGmFHzrUhFBmalPuRM0bx/dA3kHk5mS9oHfUUgML6nbtsE2', '2016-12-27 19:28:20', NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', '0102030405', 0, 0, 1, 1, 0, 454545444, 0, 0, 0, 0, 0, 0, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `coordonnee`
--
ALTER TABLE `coordonnee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1C592B9AD12A823` (`trajet_id`);

--
-- Index pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2B5BA98CFB88E14F` (`utilisateur_id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1D1C63B392FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_1D1C63B3A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_1D1C63B366B0EB30` (`numBoitier`),
  ADD UNIQUE KEY `UNIQ_1D1C63B3C05FB297` (`confirmation_token`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `coordonnee`
--
ALTER TABLE `coordonnee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `trajet`
--
ALTER TABLE `trajet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `coordonnee`
--
ALTER TABLE `coordonnee`
  ADD CONSTRAINT `FK_1C592B9AD12A823` FOREIGN KEY (`trajet_id`) REFERENCES `trajet` (`id`);

--
-- Contraintes pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD CONSTRAINT `FK_2B5BA98CFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
