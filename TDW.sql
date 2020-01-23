-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 20 jan. 2020 à 22:15
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_tdw`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(6) UNSIGNED NOT NULL,
  `titre` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `corps` longtext COLLATE utf8mb4_bin NOT NULL,
  `image_path` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(6) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

CREATE TABLE `devis` (
  `id_devis` int(6) UNSIGNED NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `prenom` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `numero` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `adresse` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `type_traduction` enum('general','scientifique','site-web') COLLATE utf8mb4_bin NOT NULL,
  `commentaires` text COLLATE utf8mb4_bin NOT NULL,
  `etat` enum('pas-encore-demarre','en-cours','finis','abandonne') COLLATE utf8mb4_bin NOT NULL DEFAULT 'pas-encore-demarre',
  `traducteur_assermente` tinyint(1) NOT NULL DEFAULT 0,
  `date` timestamp NULL DEFAULT NULL,
  `id_client` int(6) UNSIGNED NOT NULL,
  `id_document` int(6) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `devis`
--

INSERT INTO `devis` (`id_devis`, `nom`, `prenom`, `email`, `numero`, `adresse`, `type_traduction`, `commentaires`, `etat`, `traducteur_assermente`, `date`, `id_client`, `id_document`, `created_at`, `updated_at`) VALUES
(1, 'devis 1 ', 'devis 1 ', '1', '1', '1', 'scientifique', '1', 'en-cours', 1, '2020-01-14 23:00:00', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

CREATE TABLE `document` (
  `id_document` int(6) UNSIGNED NOT NULL,
  `path` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `id_devis` int(6) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `document`
--

INSERT INTO `document` (`id_document`, `path`, `date`, `id_devis`, `created_at`, `updated_at`) VALUES
(1, 'qsdqsd', '2020-01-13 23:00:00', 1, NULL, NULL),
(2, 'sdfsd', '2020-01-08 23:00:00', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

CREATE TABLE `langue` (
  `id_langue` int(6) UNSIGNED NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `description` text COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `langue`
--

INSERT INTO `langue` (`id_langue`, `nom`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Anglais', 'sqdqsdsqd', NULL, NULL),
(2, 'sqdqs', 'dsqdqsd', NULL, NULL),
(5, 'Chinois', 'sqdqsdsq', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `piece_jointe`
--

CREATE TABLE `piece_jointe` (
  `id_piece_jointe` int(6) UNSIGNED NOT NULL,
  `type` enum('cv','reference','assermentation') COLLATE utf8mb4_bin NOT NULL,
  `path` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `description` text COLLATE utf8mb4_bin DEFAULT NULL,
  `id_traducteur` int(6) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `piece_jointe`
--

INSERT INTO `piece_jointe` (`id_piece_jointe`, `type`, `path`, `description`, `id_traducteur`, `created_at`, `updated_at`) VALUES
(1, 'cv', 'sdfsdf', 'dsfsdfds', 1, NULL, NULL),
(2, 'reference', 'sdf', 'sfdsfsdf', 1, NULL, NULL),
(3, 'cv', 'fqsqsd', 'wsdqsd', 1, '2020-01-15 17:30:11', '2020-01-15 17:30:11');

-- --------------------------------------------------------

--
-- Structure de la table `traducteur`
--

CREATE TABLE `traducteur` (
  `id_traducteur` int(6) UNSIGNED NOT NULL,
  `est_assermente` tinyint(1) NOT NULL DEFAULT 0,
  `est_approuve` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `traducteur`
--

INSERT INTO `traducteur` (`id_traducteur`, `est_assermente`, `est_approuve`, `created_at`, `updated_at`) VALUES
(1, 0, 0, NULL, NULL),
(2, 0, 0, NULL, NULL),
(10, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `traducteur_devis`
--

CREATE TABLE `traducteur_devis` (
  `id_traducteur_devis` int(6) UNSIGNED NOT NULL,
  `id_traducteur` int(6) UNSIGNED NOT NULL,
  `id_devis` int(6) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `traducteur_devis`
--

INSERT INTO `traducteur_devis` (`id_traducteur_devis`, `id_traducteur`, `id_devis`, `created_at`, `updated_at`) VALUES
(1, 10, 1, '2020-01-15 18:07:01', '2020-01-15 18:07:01');

-- --------------------------------------------------------

--
-- Structure de la table `traducteur_langue`
--

CREATE TABLE `traducteur_langue` (
  `id_traducteur_langue` int(6) UNSIGNED NOT NULL,
  `id_traducteur` int(6) UNSIGNED NOT NULL,
  `id_langue` int(6) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `traducteur_langue`
--

INSERT INTO `traducteur_langue` (`id_traducteur_langue`, `id_traducteur`, `id_langue`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 2, 1, NULL, NULL),
(4, 10, 5, '2020-01-15 18:06:06', '2020-01-15 18:06:06');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(6) UNSIGNED NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `prenom` varchar(30) COLLATE utf8mb4_bin NOT NULL DEFAULT ' ',
  `email` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `pass` varchar(40) COLLATE utf8mb4_bin NOT NULL,
  `numero` varchar(30) COLLATE utf8mb4_bin NOT NULL DEFAULT '0555555555',
  `adresse` varchar(150) COLLATE utf8mb4_bin NOT NULL DEFAULT 'ESI',
  `acl` text COLLATE utf8mb4_bin DEFAULT '\'00\'',
  `deleted` tinyint(4) NOT NULL DEFAULT 0,
  `estTrad` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `email`, `pass`, `numero`, `adresse`, `acl`, `deleted`, `estTrad`) VALUES
(2, 'Hichem1', 'Bennaceur1', 'gh_bennaceur@esi.dz', '1111', '0555105901', 'Bealieu', '', 0, 0),
(3, 'Hichem', 'Bennaceur', 'gh_bennaceur@esi.dz', '', '0555105901', 'Bealieu', '', 0, 0),
(4, 'Hichem', 'Bennaceur', 'gh_bennaceur@esi.dz', '', '0555105901', 'Bealieu', '', 0, 0),
(5, 'Hichem', 'Bennaceur', 'gh_bennaceur@esi.dz', '', '0555105901', 'Bealieu', '', 0, 0),
(6, 'Bennaceur', 'Adel', 'Adel@e.com', '123456789', '000111222', '', '', 0, 0),
(8, 'raouf_ben', 'raouf', 'hichampredator@gmail.com', '$2y$10$4GrnTkjSGI/F69uvTIrCv.iXKftOT.Rn8', '0555555555', 'ESI', NULL, 0, 0),
(9, 'h_bennaceur', 'h_bennaceur', 'hichampredator@gmail.com', '$2y$10$Dmu.tWsbXQIOq/fxMnvslea7VstTCgy7h', '0555555555', 'ESI', NULL, 0, 0),
(10, 'bennaceur', 'bennaceur', 'gh@gmail.com', '$2y$10$q3/jDQLUx3wwh8BGZRKsDeLkEpFkqUtMR', '0555555555', 'ESI', NULL, 0, 0),
(11, 'bennaceur_hichem', 'hichem', 'gh@gmail.com', '$2y$10$EN9Wp355UtYobrsAnXOArulewGG7exZaT', '0555555555', 'ESI', NULL, 0, 0),
(12, 'raoufBen', 'raoufBen', 'g@gmail.com', '$2y$10$4Cz7Pqe/Q6mfUcgAATtoO.GdA3zfoB1Yp', '0555123456', 'ESI', NULL, 0, 0),
(13, 'aaaaaa', 'bbbbb', 'hichampredator@gmailLL.com', '$2y$10$oAQisMT4JH/0e1CCQPy.JefBRtLe6C2gh', '0555123456', 'beaulieu', NULL, 0, 0),
(14, 'azerty', 'azerty', 'Q@gmail.com', 'b59c67bf196a4758191e42f76670ceba', '0555105901', 'beaulieu', NULL, 0, 0),
(15, 'hichemBen', 'h_bennaceur', 'hichaaaaampredator@gmail.com', 'b59c67bf196a4758191e42f76670ceba', '0555123456', 'beaulieu', NULL, 0, 0),
(16, 'h_bennaceurrrr', 'erdkdk', 'g@d.com', 'b59c67bf196a4758191e42f76670ceba', '0000000000', 'bebebeb', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user_sessions`
--

CREATE TABLE `user_sessions` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_sessions`
--

INSERT INTO `user_sessions` (`id`, `id_user`, `session`, `user_agent`) VALUES
(1, NULL, '7076fed8739893d9acde5b19a9bbe962', 'Mozilla (Windows NT 10.0; Win64; x64) AppleWebKit (KHTML, like Gecko) Chrome Safari'),
(2, NULL, '7076fed8739893d9acde5b19a9bbe962', 'Mozilla (Windows NT 10.0; Win64; x64) AppleWebKit (KHTML, like Gecko) Chrome Safari'),
(3, NULL, '7076fed8739893d9acde5b19a9bbe962', 'Mozilla (Windows NT 10.0; Win64; x64) AppleWebKit (KHTML, like Gecko) Chrome Safari'),
(4, NULL, '7076fed8739893d9acde5b19a9bbe962', 'Mozilla (Windows NT 10.0; Win64; x64) AppleWebKit (KHTML, like Gecko) Chrome Safari');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `devis`
--
ALTER TABLE `devis`
  ADD PRIMARY KEY (`id_devis`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_document` (`id_document`);

--
-- Index pour la table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id_document`),
  ADD KEY `id_devis` (`id_devis`);

--
-- Index pour la table `langue`
--
ALTER TABLE `langue`
  ADD PRIMARY KEY (`id_langue`);

--
-- Index pour la table `piece_jointe`
--
ALTER TABLE `piece_jointe`
  ADD PRIMARY KEY (`id_piece_jointe`),
  ADD KEY `id_traducteur` (`id_traducteur`);

--
-- Index pour la table `traducteur`
--
ALTER TABLE `traducteur`
  ADD PRIMARY KEY (`id_traducteur`);

--
-- Index pour la table `traducteur_devis`
--
ALTER TABLE `traducteur_devis`
  ADD PRIMARY KEY (`id_traducteur_devis`),
  ADD KEY `id_traducteur` (`id_traducteur`),
  ADD KEY `id_devis` (`id_devis`);

--
-- Index pour la table `traducteur_langue`
--
ALTER TABLE `traducteur_langue`
  ADD PRIMARY KEY (`id_traducteur_langue`),
  ADD KEY `id_traducteur` (`id_traducteur`),
  ADD KEY `id_langue` (`id_langue`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `user_sessions`
--
ALTER TABLE `user_sessions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `devis`
--
ALTER TABLE `devis`
  MODIFY `id_devis` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `document`
--
ALTER TABLE `document`
  MODIFY `id_document` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `langue`
--
ALTER TABLE `langue`
  MODIFY `id_langue` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `piece_jointe`
--
ALTER TABLE `piece_jointe`
  MODIFY `id_piece_jointe` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `traducteur_devis`
--
ALTER TABLE `traducteur_devis`
  MODIFY `id_traducteur_devis` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `traducteur_langue`
--
ALTER TABLE `traducteur_langue`
  MODIFY `id_traducteur_langue` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `user_sessions`
--
ALTER TABLE `user_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
