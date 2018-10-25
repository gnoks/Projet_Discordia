-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 26 sep. 2018 à 10:15
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `discordia`
--

-- --------------------------------------------------------

--
-- Structure de la table `attaquer`
--

CREATE TABLE `attaquer` (
  `att_attaquant` int(11) NOT NULL,
  `att_victime` int(11) NOT NULL,
  `att_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `attaquer_temp`
--

CREATE TABLE `attaquer_temp` (
  `att_temp_carte_temp_fk` int(11) NOT NULL,
  `att_temp_hero_temp_fk` int(11) NOT NULL,
  `att_temp_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `avoir_habiliter`
--

CREATE TABLE `avoir_habiliter` (
  `avo_habiliter_fk` int(11) NOT NULL,
  `avo_carte_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

CREATE TABLE `carte` (
  `car_id` int(11) NOT NULL,
  `car_nom` varchar(50) NOT NULL,
  `car_description` varchar(75) NOT NULL,
  `car_degats` int(11) NOT NULL,
  `car_pdv` int(11) NOT NULL,
  `car_mana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `carte_temp`
--

CREATE TABLE `carte_temp` (
  `car_temp_id` int(11) NOT NULL,
  `car_temp_degats` int(11) NOT NULL,
  `car_temp_pdv` int(11) NOT NULL,
  `car_temp_mana` int(11) NOT NULL,
  `com_temp_date` datetime NOT NULL,
  `car_temp_carte_fk` int(11) NOT NULL,
  `car_temp_hero_temp_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `composer`
--

CREATE TABLE `composer` (
  `com_carte_fk` int(11) NOT NULL,
  `com_deck_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `deck`
--

CREATE TABLE `deck` (
  `dec_id` int(11) NOT NULL,
  `dec_description` text NOT NULL,
  `dec_utilisateur_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `etat_temp`
--

CREATE TABLE `etat_temp` (
  `eta_temp_id` int(11) NOT NULL,
  `eta_temp_lib` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `habiliter`
--

CREATE TABLE `habiliter` (
  `hab_id` int(11) NOT NULL,
  `hab_type` text NOT NULL,
  `hab_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `hero`
--

CREATE TABLE `hero` (
  `her_id` int(11) NOT NULL,
  `her_nom` varchar(50) NOT NULL,
  `her_description` varchar(75) NOT NULL,
  `her_pdv` int(11) NOT NULL,
  `her_mana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `hero_temp`
--

CREATE TABLE `hero_temp` (
  `her_temp_id` int(11) NOT NULL,
  `her_temp_pdv` int(11) NOT NULL,
  `her_temp_mana` int(11) NOT NULL,
  `her_partie_fk` int(11) NOT NULL,
  `her_utilisateur_fk` int(11) NOT NULL,
  `her_hero_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `historique_utilisateur`
--

CREATE TABLE `historique_utilisateur` (
  `his_uti_id` int(11) NOT NULL,
  `his_uti_date` date NOT NULL,
  `his_uti_resultat` tinyint(1) NOT NULL,
  `his_uti_utilisateur_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `partie`
--

CREATE TABLE `partie` (
  `par_id` int(11) NOT NULL,
  `par_victoire` int(11) NOT NULL,
  `par_tour` tinyint(1) NOT NULL,
  `par_dateCreation` date NOT NULL,
  `par_dateFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `situer_temp`
--

CREATE TABLE `situer_temp` (
  `sit_carte_temp_fk` int(11) NOT NULL,
  `sit_etat_temp_fk` int(11) NOT NULL,
  `sit_temp_date` datetime NOT NULL,
  `sit_temp_tour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `uti_id` int(11) NOT NULL,
  `uti_pseudo` varchar(50) NOT NULL,
  `uti_mdp` varchar(60) NOT NULL,
  `uti_nom` varchar(50) NOT NULL,
  `uti_prenom` varchar(50) NOT NULL,
  `uti_email` varchar(50) NOT NULL,
  `uti_dateNaissance` date NOT NULL,
  `uti_dateInscription` date NOT NULL,
  `uti_rank` int(11) NOT NULL,
  `uti_role` int(11) NOT NULL COMMENT '1 : Admin, 2 : User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `attaquer`
--
ALTER TABLE `attaquer`
  ADD PRIMARY KEY (`att_attaquant`,`att_victime`),
  ADD KEY `att_victime_ibfk` (`att_victime`);

--
-- Index pour la table `attaquer_temp`
--
ALTER TABLE `attaquer_temp`
  ADD PRIMARY KEY (`att_temp_carte_temp_fk`,`att_temp_hero_temp_fk`),
  ADD KEY `att_temp_hero_temp_ibfk` (`att_temp_hero_temp_fk`);

--
-- Index pour la table `avoir_habiliter`
--
ALTER TABLE `avoir_habiliter`
  ADD PRIMARY KEY (`avo_habiliter_fk`,`avo_carte_fk`),
  ADD KEY `avo_carte_ibfk` (`avo_carte_fk`);

--
-- Index pour la table `carte`
--
ALTER TABLE `carte`
  ADD PRIMARY KEY (`car_id`);

--
-- Index pour la table `carte_temp`
--
ALTER TABLE `carte_temp`
  ADD PRIMARY KEY (`car_temp_id`),
  ADD KEY `car_temp_carte_fk` (`car_temp_carte_fk`),
  ADD KEY `car_temp_hero_temp_fk` (`car_temp_hero_temp_fk`);

--
-- Index pour la table `composer`
--
ALTER TABLE `composer`
  ADD PRIMARY KEY (`com_carte_fk`,`com_deck_fk`),
  ADD KEY `com_deck_ibfk` (`com_deck_fk`);

--
-- Index pour la table `deck`
--
ALTER TABLE `deck`
  ADD PRIMARY KEY (`dec_id`),
  ADD KEY `dec_utilisateur_fk` (`dec_utilisateur_fk`);

--
-- Index pour la table `etat_temp`
--
ALTER TABLE `etat_temp`
  ADD PRIMARY KEY (`eta_temp_id`);

--
-- Index pour la table `habiliter`
--
ALTER TABLE `habiliter`
  ADD PRIMARY KEY (`hab_id`);

--
-- Index pour la table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`her_id`);

--
-- Index pour la table `hero_temp`
--
ALTER TABLE `hero_temp`
  ADD PRIMARY KEY (`her_temp_id`),
  ADD KEY `her_partie_fk` (`her_partie_fk`),
  ADD KEY `her_utilisateur_fk` (`her_utilisateur_fk`),
  ADD KEY `her_hero_fk` (`her_hero_fk`);

--
-- Index pour la table `historique_utilisateur`
--
ALTER TABLE `historique_utilisateur`
  ADD PRIMARY KEY (`his_uti_id`),
  ADD KEY `his_uti_utilisateur_fk` (`his_uti_utilisateur_fk`);

--
-- Index pour la table `partie`
--
ALTER TABLE `partie`
  ADD PRIMARY KEY (`par_id`);

--
-- Index pour la table `situer_temp`
--
ALTER TABLE `situer_temp`
  ADD PRIMARY KEY (`sit_carte_temp_fk`,`sit_etat_temp_fk`),
  ADD KEY `sit_etat_temp_ibfk` (`sit_etat_temp_fk`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`uti_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `carte`
--
ALTER TABLE `carte`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `carte_temp`
--
ALTER TABLE `carte_temp`
  MODIFY `car_temp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `deck`
--
ALTER TABLE `deck`
  MODIFY `dec_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etat_temp`
--
ALTER TABLE `etat_temp`
  MODIFY `eta_temp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `habiliter`
--
ALTER TABLE `habiliter`
  MODIFY `hab_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `hero`
--
ALTER TABLE `hero`
  MODIFY `her_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `hero_temp`
--
ALTER TABLE `hero_temp`
  MODIFY `her_temp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `historique_utilisateur`
--
ALTER TABLE `historique_utilisateur`
  MODIFY `his_uti_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `partie`
--
ALTER TABLE `partie`
  MODIFY `par_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `uti_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `attaquer`
--
ALTER TABLE `attaquer`
  ADD CONSTRAINT `att_attaquant_ibfk` FOREIGN KEY (`att_attaquant`) REFERENCES `carte_temp` (`car_temp_id`),
  ADD CONSTRAINT `att_victime_ibfk` FOREIGN KEY (`att_victime`) REFERENCES `carte_temp` (`car_temp_id`);

--
-- Contraintes pour la table `attaquer_temp`
--
ALTER TABLE `attaquer_temp`
  ADD CONSTRAINT `att_temp_carte_temp_ibfk` FOREIGN KEY (`att_temp_carte_temp_fk`) REFERENCES `carte_temp` (`car_temp_id`),
  ADD CONSTRAINT `att_temp_hero_temp_ibfk` FOREIGN KEY (`att_temp_hero_temp_fk`) REFERENCES `hero_temp` (`her_temp_id`);

--
-- Contraintes pour la table `avoir_habiliter`
--
ALTER TABLE `avoir_habiliter`
  ADD CONSTRAINT `avo_carte_ibfk` FOREIGN KEY (`avo_carte_fk`) REFERENCES `carte` (`car_id`),
  ADD CONSTRAINT `avo_habiliter_ibfk` FOREIGN KEY (`avo_habiliter_fk`) REFERENCES `habiliter` (`hab_id`);

--
-- Contraintes pour la table `carte_temp`
--
ALTER TABLE `carte_temp`
  ADD CONSTRAINT `car_temp_carte_ibfk` FOREIGN KEY (`car_temp_carte_fk`) REFERENCES `carte` (`car_id`),
  ADD CONSTRAINT `car_temp_hero_temp_ibfk` FOREIGN KEY (`car_temp_hero_temp_fk`) REFERENCES `hero_temp` (`her_temp_id`);

--
-- Contraintes pour la table `composer`
--
ALTER TABLE `composer`
  ADD CONSTRAINT `com_carte_ibfk` FOREIGN KEY (`com_carte_fk`) REFERENCES `carte` (`car_id`),
  ADD CONSTRAINT `com_deck_ibfk` FOREIGN KEY (`com_deck_fk`) REFERENCES `deck` (`dec_id`);

--
-- Contraintes pour la table `deck`
--
ALTER TABLE `deck`
  ADD CONSTRAINT `dec_utilisateur_ibfk` FOREIGN KEY (`dec_utilisateur_fk`) REFERENCES `utilisateur` (`uti_id`);

--
-- Contraintes pour la table `hero_temp`
--
ALTER TABLE `hero_temp`
  ADD CONSTRAINT `her_hero_ibfk` FOREIGN KEY (`her_hero_fk`) REFERENCES `hero` (`her_id`),
  ADD CONSTRAINT `her_partie_ibfk` FOREIGN KEY (`her_partie_fk`) REFERENCES `hero` (`her_id`),
  ADD CONSTRAINT `her_utilisateur_ibfk` FOREIGN KEY (`her_utilisateur_fk`) REFERENCES `utilisateur` (`uti_id`);

--
-- Contraintes pour la table `historique_utilisateur`
--
ALTER TABLE `historique_utilisateur`
  ADD CONSTRAINT `his_uti_utilisateur_ibfk` FOREIGN KEY (`his_uti_utilisateur_fk`) REFERENCES `utilisateur` (`uti_id`);

--
-- Contraintes pour la table `situer_temp`
--
ALTER TABLE `situer_temp`
  ADD CONSTRAINT `sit_carte_temp_ibfk` FOREIGN KEY (`sit_carte_temp_fk`) REFERENCES `carte_temp` (`car_temp_id`),
  ADD CONSTRAINT `sit_etat_temp_ibfk` FOREIGN KEY (`sit_etat_temp_fk`) REFERENCES `etat_temp` (`eta_temp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
