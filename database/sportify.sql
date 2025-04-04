-- Création de la base de données SPORTIFY si elle n'existe pas
CREATE DATABASE IF NOT EXISTS SPORTIFY CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

-- Utilisation de la base de données SPORTIFY
USE SPORTIFY;

-- Création des tables
CREATE TABLE IF NOT EXISTS `clients` (
  `id_client` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL UNIQUE,
  `password` varchar(255) NOT NULL,
  `date_Naissance` date NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `coachs` (
  `id_coach` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL UNIQUE,
  `password` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  PRIMARY KEY (`id_coach`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `sports` (
  `id_sport` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id_sport`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `type_cours` (
  `id_type` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `prix_a_ajouter` int(11) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `cours` (
  `id_cour` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date_heure` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prix` int(20) NOT NULL,
  `categorie` enum('debutant','intermediaire','avance') NOT NULL,
  `id_sport` int(10) UNSIGNED NOT NULL,
  `id_coach` int(10) UNSIGNED NOT NULL,
  `type` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_cour`),
  KEY `fk_cours_sport` (`id_sport`),
  KEY `fk_cours_coach` (`id_coach`),
  KEY `fk_cours_type` (`type`),
  CONSTRAINT `fk_cours_sport` FOREIGN KEY (`id_sport`) REFERENCES `sports` (`id_sport`),
  CONSTRAINT `fk_cours_coach` FOREIGN KEY (`id_coach`) REFERENCES `coachs` (`id_coach`),
  CONSTRAINT `fk_cours_type` FOREIGN KEY (`type`) REFERENCES `type_cours` (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `cours_clients` (
  `id_cours_clients` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cour` int(10) UNSIGNED NOT NULL,
  `id_client` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_cours_clients`),
  KEY `fk_cours_clients_clients` (`id_client`),
  KEY `fk_cours_clients_cours` (`id_cour`),
  CONSTRAINT `fk_cours_clients_clients` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id_client`),
  CONSTRAINT `fk_cours_clients_cours` FOREIGN KEY (`id_cour`) REFERENCES `cours` (`id_cour`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_commentaire` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `num_tel` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  PRIMARY KEY (`id_commentaire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
