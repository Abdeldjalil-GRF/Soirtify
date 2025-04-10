CREATE DATABASE IF NOT EXISTS sportify;
USE sportify;

CREATE TABLE clients (
  id_client INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  nom VARCHAR(50) NOT NULL,
  prenom VARCHAR(50) NOT NULL,
  mail VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  date_Naissance DATE NOT NULL,
  PRIMARY KEY (id_client)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE coachs (
  id_coach INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  nom VARCHAR(50) NOT NULL,
  prenom VARCHAR(50) NOT NULL,
  mail VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  date_naissance DATE NOT NULL,
  PRIMARY KEY (id_coach)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE commentaires (
  id_commentaire INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  nom VARCHAR(50) NOT NULL,
  prenom VARCHAR(50) NOT NULL,
  mail VARCHAR(50) NOT NULL,
  num_tel VARCHAR(255) NOT NULL,
  commentaire TEXT NOT NULL,
  PRIMARY KEY (id_commentaire)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE sports (
  id_sport INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  nom VARCHAR(50) NOT NULL,
  PRIMARY KEY (id_sport)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE type_cours (
  id_type INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  type VARCHAR(50) NOT NULL,
  prix_a_ajouter INT(11) NOT NULL,
  PRIMARY KEY (id_type)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE cours (
  id_cour INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  jour ENUM('lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche') NOT NULL,
  heure TIME NOT NULL,
  prix INT(20) NOT NULL,
  categorie ENUM('debutant','intermediaire','avance') NOT NULL,
  id_sport INT(10) UNSIGNED NOT NULL,
  id_coach INT(10) UNSIGNED NOT NULL,
  type INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (id_cour),
  FOREIGN KEY (id_sport) REFERENCES sports(id_sport),
  FOREIGN KEY (id_coach) REFERENCES coachs(id_coach),
  FOREIGN KEY (type) REFERENCES type_cours(id_type)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE cours_clients (
  id_cours_clients INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  id_cour INT(10) UNSIGNED NOT NULL,
  id_client INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (id_cours_clients),
  FOREIGN KEY (id_cour) REFERENCES cours(id_cour),
  FOREIGN KEY (id_client) REFERENCES clients(id_client)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO coachs (id_coach, nom, prenom, mail, password, date_naissance) VALUES
(1, 'Yamada', 'Sensei', 'yamada@example.com', 'password', '1970-01-01'),
(2, 'Dupuis', 'Jean', 'dupuis@example.com', 'password', '1980-06-15'),
(3, 'Koné', 'Malik', 'kone@example.com', 'password', '1985-03-22'),
(4, 'Prasert', 'Somchai', 'prasert@example.com', 'password', '1975-11-30'),
(5, 'Lefèvre', 'Romain', 'lefevre@example.com', 'password', '1990-08-05'),
(6, 'Tanaka', 'Aiko', 'tanaka@example.com', 'password', '1988-12-10');

INSERT INTO sports (id_sport, nom) VALUES
(1, 'Jujutsu'),
(2, 'Judo'),
(3, 'Box'),
(4, 'Muay Thai'),
(5, 'Musculation'),
(6, 'Karaté');

INSERT INTO type_cours (id_type, type, prix_a_ajouter) VALUES
(1, 'collectif', 0);

INSERT INTO cours (id_cour, jour, heure, prix, categorie, id_sport, id_coach, type) VALUES
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
