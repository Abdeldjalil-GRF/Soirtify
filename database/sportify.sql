-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 10 avr. 2025 à 15:35
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sportify`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id_client` int(10) UNSIGNED NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_Naissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id_client`, `nom`, `prenom`, `mail`, `password`, `date_Naissance`) VALUES
(1, 'GUERROUF', 'Abdeldjalil', 'guerroufabdeldjalil@gmail.com', '$2y$10$NKW.6axurFumOQy7BsbuI.bq.e2Khpr8SDBdVRu.2UkYbgE6hZiQG', '2004-09-22');

-- --------------------------------------------------------

--
-- Structure de la table `coachs`
--

CREATE TABLE `coachs` (
  `id_coach` int(10) UNSIGNED NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `coachs`
--

INSERT INTO `coachs` (`id_coach`, `nom`, `prenom`, `mail`, `password`, `date_naissance`) VALUES
(1, 'Yamada', 'Sensei', 'yamada@example.com', 'password', '1970-01-01'),
(2, 'Dupuis', 'Jean', 'dupuis@example.com', 'password', '1980-06-15'),
(3, 'Koné', 'Malik', 'kone@example.com', 'password', '1985-03-22'),
(4, 'Prasert', 'Somchai', 'prasert@example.com', 'password', '1975-11-30'),
(5, 'Lefèvre', 'Romain', 'lefevre@example.com', 'password', '1990-08-05'),
(6, 'Tanaka', 'Aiko', 'tanaka@example.com', 'password', '1988-12-10');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_commentaire` int(10) UNSIGNED NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `num_tel` varchar(255) NOT NULL,
  `commentaire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id_commentaire`, `nom`, `prenom`, `mail`, `num_tel`, `commentaire`) VALUES
(1, 'GUERROUF', 'Abdeldjalil', 'guerroufabdeldjalil@gmail.com', '0685583056', 'test nika'),
(2, 'guerrouf', 'abdeldjalil', 'guerroufabdeldjalil@gmail.com', '0685583056', 'test nikmk'),
(3, 'guerrouf', 'djo', 'guerroufabdeldjalil@gmail.com', '0685583056', 'test nikmk');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id_cour` int(10) UNSIGNED NOT NULL,
  `jour` enum('lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche') NOT NULL,
  `heure` time NOT NULL,
  `prix` int(20) NOT NULL,
  `categorie` enum('debutant','intermediaire','avance') NOT NULL,
  `id_sport` int(10) UNSIGNED NOT NULL,
  `id_coach` int(10) UNSIGNED NOT NULL,
  `type` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id_cour`, `jour`, `heure`, `prix`, `categorie`, `id_sport`, `id_coach`, `type`) VALUES
(1, 'lundi', '09:00:00', 30, 'debutant', 1, 1, 1),
(2, 'mardi', '14:00:00', 25, 'intermediaire', 1, 1, 1),
(3, 'mercredi', '18:00:00', 20, 'avance', 1, 1, 1),
(4, 'jeudi', '09:00:00', 30, 'debutant', 2, 2, 1),
(5, 'vendredi', '14:00:00', 25, 'intermediaire', 2, 2, 1),
(6, 'samedi', '18:00:00', 20, 'avance', 2, 2, 1),
(7, 'dimanche', '09:00:00', 30, 'debutant', 3, 3, 1),
(8, 'lundi', '14:00:00', 25, 'intermediaire', 3, 3, 1),
(9, 'mardi', '18:00:00', 20, 'avance', 3, 3, 1),
(10, 'mercredi', '09:00:00', 30, 'debutant', 4, 4, 1),
(11, 'jeudi', '14:00:00', 25, 'intermediaire', 4, 4, 1),
(12, 'vendredi', '18:00:00', 20, 'avance', 4, 4, 1),
(13, 'samedi', '09:00:00', 30, 'debutant', 5, 5, 1),
(14, 'dimanche', '14:00:00', 25, 'intermediaire', 5, 5, 1),
(15, 'lundi', '18:00:00', 20, 'avance', 5, 3, 1),
(16, 'mardi', '09:00:00', 30, 'debutant', 6, 6, 1),
(17, 'mercredi', '14:00:00', 25, 'intermediaire', 6, 6, 1),
(18, 'jeudi', '18:00:00', 20, 'avance', 6, 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `cours_clients`
--

CREATE TABLE `cours_clients` (
  `id_cours_clients` int(10) UNSIGNED NOT NULL,
  `id_cour` int(10) UNSIGNED NOT NULL,
  `id_client` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sports`
--

CREATE TABLE `sports` (
  `id_sport` int(10) UNSIGNED NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `sports`
--

INSERT INTO `sports` (`id_sport`, `nom`) VALUES
(1, 'Jujutsu'),
(2, 'Judo'),
(3, 'Box'),
(4, 'Muay Thai'),
(5, 'Musculation'),
(6, 'Karaté');

-- --------------------------------------------------------

--
-- Structure de la table `type_cours`
--

CREATE TABLE `type_cours` (
  `id_type` int(10) UNSIGNED NOT NULL,
  `type` varchar(50) NOT NULL,
  `prix_a_ajouter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `type_cours`
--

INSERT INTO `type_cours` (`id_type`, `type`, `prix_a_ajouter`) VALUES
(1, 'collectif', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Index pour la table `coachs`
--
ALTER TABLE `coachs`
  ADD PRIMARY KEY (`id_coach`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_commentaire`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id_cour`),
  ADD KEY `fk_cours_sport` (`id_sport`),
  ADD KEY `fk_cours_coach` (`id_coach`),
  ADD KEY `fk_cours_type` (`type`);

--
-- Index pour la table `cours_clients`
--
ALTER TABLE `cours_clients`
  ADD PRIMARY KEY (`id_cours_clients`),
  ADD KEY `fk_cours_clients_clients` (`id_client`),
  ADD KEY `fk_cours_clients_cours` (`id_cour`);

--
-- Index pour la table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id_sport`);

--
-- Index pour la table `type_cours`
--
ALTER TABLE `type_cours`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `coachs`
--
ALTER TABLE `coachs`
  MODIFY `id_coach` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_commentaire` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id_cour` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `cours_clients`
--
ALTER TABLE `cours_clients`
  MODIFY `id_cours_clients` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `sports`
--
ALTER TABLE `sports`
  MODIFY `id_sport` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `type_cours`
--
ALTER TABLE `type_cours`
  MODIFY `id_type` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `fk_cours_coach` FOREIGN KEY (`id_coach`) REFERENCES `coachs` (`id_coach`),
  ADD CONSTRAINT `fk_cours_sport` FOREIGN KEY (`id_sport`) REFERENCES `sports` (`id_sport`),
  ADD CONSTRAINT `fk_cours_type` FOREIGN KEY (`type`) REFERENCES `type_cours` (`id_type`);

--
-- Contraintes pour la table `cours_clients`
--
ALTER TABLE `cours_clients`
  ADD CONSTRAINT `fk_cours_clients_clients` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id_client`),
  ADD CONSTRAINT `fk_cours_clients_cours` FOREIGN KEY (`id_cour`) REFERENCES `cours` (`id_cour`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
