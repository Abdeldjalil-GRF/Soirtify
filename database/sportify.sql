

 
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `Id_Client` int(10) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Date_Naissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `coachs`
--

CREATE TABLE `coachs` (
  `id_coach` int(10) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id_cour` int(10) NOT NULL,
  `time` datetime NOT NULL,
  `prix` int(20) NOT NULL,
  `categorie` enum('debutant','intermediaire','avance') NOT NULL,
  `id_sport` int(10) NOT NULL,
  `id_coach` int(10) NOT NULL,
  `type` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cours_clients`
--

CREATE TABLE `cours_clients` (
  `id_cours_clients` int(10) NOT NULL,
  `id_cour` int(10) NOT NULL,
  `id_client` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sports`
--

CREATE TABLE `sports` (
  `id_sport` int(10) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_cours`
--

CREATE TABLE `type_cours` (
  `id_type` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `prix_a_ajouter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`Id_Client`);

--
-- Index pour la table `coachs`
--
ALTER TABLE `coachs`
  ADD PRIMARY KEY (`id_coach`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id_cour`),
  ADD KEY `fk_cours_sport` (`id_sport`),
  ADD KEY `fk_cours_coachs` (`id_coach`),
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
  MODIFY `Id_Client` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `coachs`
--
ALTER TABLE `coachs`
  MODIFY `id_coach` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id_cour` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cours_clients`
--
ALTER TABLE `cours_clients`
  MODIFY `id_cours_clients` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sports`
--
ALTER TABLE `sports`
  MODIFY `id_sport` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_cours`
--
ALTER TABLE `type_cours`
  MODIFY `id_type` int(10) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `fk_cours_coachs` FOREIGN KEY (`id_coach`) REFERENCES `coachs` (`id_coach`),
  ADD CONSTRAINT `fk_cours_sport` FOREIGN KEY (`id_sport`) REFERENCES `sports` (`id_sport`),
  ADD CONSTRAINT `fk_cours_type` FOREIGN KEY (`type`) REFERENCES `type_cours` (`id_type`);

--
-- Contraintes pour la table `cours_clients`
--
ALTER TABLE `cours_clients`
  ADD CONSTRAINT `fk_cours_clients_clients` FOREIGN KEY (`id_client`) REFERENCES `clients` (`Id_Client`),
  ADD CONSTRAINT `fk_cours_clients_cours` FOREIGN KEY (`id_cour`) REFERENCES `cours` (`id_cour`);
COMMIT;
