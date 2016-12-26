-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Lun 26 Décembre 2016 à 15:53
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `boitier`
--

CREATE TABLE `boitier` (
  `id` int(11) NOT NULL,
  `numBoitier` int(11) NOT NULL,
  `etatBoitier` tinyint(1) NOT NULL,
  `sensibiliteDistance` int(11) NOT NULL,
  `sensibiliteVibration` int(11) NOT NULL,
  `veloStatique` tinyint(1) NOT NULL,
  `proximiteTel` tinyint(1) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `boitier`
--

INSERT INTO `boitier` (`id`, `numBoitier`, `etatBoitier`, `sensibiliteDistance`, `sensibiliteVibration`, `veloStatique`, `proximiteTel`, `latitude`, `longitude`) VALUES
(1, 123, 1, 10, 10, 1, 1, 0, 0);

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
  `boitier_id` int(11) DEFAULT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `numTel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vitesseMoyenneGlob` int(11) DEFAULT NULL,
  `distanceGlob` int(11) DEFAULT NULL,
  `notifSMS` tinyint(1) DEFAULT NULL,
  `notifEmail` tinyint(1) DEFAULT NULL,
  `notifZonesRisques` tinyint(1) DEFAULT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `boitier_id`, `email`, `numTel`, `vitesseMoyenneGlob`, `distanceGlob`, `notifSMS`, `notifEmail`, `notifZonesRisques`, `username`, `username_canonical`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(2, NULL, 'admin@bykeeper.com', NULL, NULL, NULL, NULL, NULL, NULL, 'admin', 'admin', 'admin@bykeeper.com', 1, NULL, '$2y$13$YMu8PfoT5khiMMxYoYmzSuGdjMpPrVBj45R8ObBTcnuLfEyfstrGS', '2016-12-23 16:51:14', NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `boitier`
--
ALTER TABLE `boitier`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_E91F629766B0EB30` (`numBoitier`);

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
  ADD UNIQUE KEY `UNIQ_1D1C63B344DE6F7C` (`boitier_id`),
  ADD UNIQUE KEY `UNIQ_1D1C63B3C05FB297` (`confirmation_token`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `boitier`
--
ALTER TABLE `boitier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `FK_1D1C63B344DE6F7C` FOREIGN KEY (`boitier_id`) REFERENCES `boitier` (`id`);
