-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 01 fév. 2020 à 20:53
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
(42, NULL, NULL),
(46, NULL, NULL),
(45, NULL, NULL),
(7, NULL, NULL),
(39, NULL, NULL);

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
  `etat` enum('pas-encore-demarre','en-cours','finis','abandonne','acceptee','client-accepte') COLLATE utf8mb4_bin NOT NULL DEFAULT 'pas-encore-demarre',
  `date` timestamp NULL DEFAULT current_timestamp(),
  `id_client` int(6) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lang_dest` enum('Arabe','Francais','Anglais','Chinois','Espagnol','Allemand','Italien') COLLATE utf8mb4_bin NOT NULL DEFAULT 'Francais',
  `lang_src` enum('Arabe','Francais','Anglais','Chinois','Espagnol','Allemand','Italien') COLLATE utf8mb4_bin NOT NULL DEFAULT 'Arabe',
  `id_traducteur` int(11) DEFAULT 0,
  `prix` int(11) DEFAULT 0,
  `path` varchar(200) COLLATE utf8mb4_bin NOT NULL DEFAULT '""'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `devis`
--

INSERT INTO `devis` (`id_devis`, `nom`, `prenom`, `email`, `numero`, `adresse`, `type_traduction`, `commentaires`, `etat`, `date`, `id_client`, `created_at`, `updated_at`, `lang_dest`, `lang_src`, `id_traducteur`, `prix`, `path`) VALUES
(1, 'devis 1 ', 'devis 1 ', '1', '1', '1', 'scientifique', '1', 'en-cours', '2020-01-14 23:00:00', 1, NULL, NULL, 'Arabe', 'Arabe', 100, 0, '\"\"'),
(2, 'traducteur', 'hichem', 'traducteur@gmail.com', '0555105901', 'beulieu', 'scientifique', 'scientifique from anglais to espagnol', 'pas-encore-demarre', NULL, 41, NULL, NULL, 'Espagnol', 'Anglais', 0, 0, '\"\"'),
(3, 'client', 'client', 'A@GMAIL.COM', '0555123456', 'AAAA', 'scientifique', 'scientifique from espagnol to Chinois', 'pas-encore-demarre', NULL, 18, NULL, NULL, 'Chinois', 'Espagnol', 0, 1000, '\"\"'),
(4, 'client', 'client', 'A@GMAIL.COM', '0555123456', 'AAAA', '', 'siteweb from a Espagnolto italien', 'pas-encore-demarre', NULL, 18, NULL, NULL, 'Italien', 'Espagnol', 0, 0, '\"\"'),
(5, 'client', 'client', 'A@GMAIL.COM', '0555123456', 'AAAA', 'scientifique', 'scientifique from arabe to french', 'pas-encore-demarre', NULL, 18, NULL, NULL, 'Francais', 'Arabe', 0, 0, '\"\"'),
(6, 'client', 'client', 'A@GMAIL.COM', '0555123456', 'AAAA', 'general', '', 'pas-encore-demarre', NULL, 18, NULL, NULL, 'Francais', 'Arabe', 0, 0, '\"\"'),
(7, 'client', 'client', 'A@GMAIL.COM', '0555123456', 'AAAA', '', 'dfghjkl', 'pas-encore-demarre', NULL, 18, NULL, NULL, 'Espagnol', 'Francais', 0, 0, '\"\"'),
(8, 'client', 'client', 'A@GMAIL.COM', '0555123456', 'AAAA', '', 'dfghjkl', 'pas-encore-demarre', NULL, 18, NULL, NULL, 'Espagnol', 'Francais', 0, 0, '\"\"'),
(9, 'client', 'client', 'A@GMAIL.COM', '0555123456', 'AAAA', 'scientifique', 'dfghjk', 'pas-encore-demarre', NULL, 18, NULL, NULL, 'Chinois', 'Chinois', 0, 0, '\"\"'),
(10, 'client', 'client', 'A@GMAIL.COM', '0555123456', 'AAAA', 'scientifique', 'fghjk', 'abandonne', NULL, 18, NULL, NULL, 'Francais', 'Arabe', 44, 30000, '\"\"'),
(11, 'client2', 'Adel', 'client2@gmail.com', '0555555555', 'Belle vue elharrach ', 'scientifique', 'francais to chinois ', 'client-accepte', NULL, 46, NULL, NULL, 'Chinois', 'Francais', 44, 20000, 'C:/xampp/htdocs/TRADUCTION/devis/46-devis_serie d\'exercices ACP (1).pdf'),
(12, 'client2', 'Adel', 'client2@gmail.com', '0555555555', 'Belle vue elharrach ', 'scientifique', 'scientifique from anglais to espagnol', 'pas-encore-demarre', NULL, 46, NULL, NULL, 'Espagnol', 'Anglais', 44, NULL, 'C:/xampp/htdocs/TRADUCTION/devis/46-devis_A-C-P-.pdf'),
(13, 'client2', 'Adel', 'client2@gmail.com', '0555555555', 'Belle vue elharrach ', 'general', '', 'pas-encore-demarre', NULL, 46, NULL, NULL, 'Francais', 'Arabe', NULL, NULL, 'C:/xampp/htdocs/TRADUCTION/devis/46-devis_'),
(14, 'client2', 'Adel', 'client2@gmail.com', '0555555555', 'Belle vue elharrach ', 'general', '', 'pas-encore-demarre', NULL, 46, NULL, NULL, 'Francais', 'Arabe', NULL, NULL, 'C:/xampp/htdocs/TRADUCTION/devis/46-devis_'),
(15, 'client2', 'Adel', 'client2@gmail.com', '0555555555', 'Belle vue elharrach ', 'scientifique', '', 'pas-encore-demarre', NULL, 46, NULL, NULL, 'Italien', 'Chinois', 41, NULL, 'C:/xampp/htdocs/TRADUCTION/devis/46-devis_Serie d\'exercices ad1.pdf'),
(16, 'client2', 'Adel', 'client2@gmail.com', '0555555555', 'Belle vue elharrach ', 'general', '', 'pas-encore-demarre', NULL, 46, NULL, NULL, 'Arabe', 'Italien', 44, NULL, 'C:/xampp/htdocs/TRADUCTION/devis/46-devis_Sol-TD-ACP.pdf');

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
  `type` enum('cv','devis','assermentation','reference','traduction') COLLATE utf8mb4_bin NOT NULL,
  `path` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `description` text COLLATE utf8mb4_bin DEFAULT NULL,
  `id_user` int(6) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `piece_jointe`
--

INSERT INTO `piece_jointe` (`id_piece_jointe`, `type`, `path`, `description`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'cv', 'sdfsdf', 'dsfsdfds', 1, NULL, NULL),
(2, 'reference', 'sdf', 'sfdsfsdf', 1, NULL, NULL),
(3, 'cv', 'fqsqsd', 'wsdqsd', 1, '2020-01-15 17:30:11', '2020-01-15 17:30:11'),
(4, 'cv', 'C:/xampp/htdocs/TRADUCTION/devis/44-cv_traducteur_A-C-P-.pdf', 'c\'est un cv d\'un traducteur', 44, NULL, NULL),
(5, 'cv', 'C:/xampp/htdocs/TRADUCTION/devis/44-cv_traducteur_A-C-P-.pdf', 'c\'est un cv d\'un traducteur', 44, NULL, NULL),
(6, 'cv', 'C:/xampp/htdocs/TRADUCTION/devis/44-cv_traducteur_PrÃ©sentation cours AFC.pdf', 'c\'est un cv d\'un traducteur', 44, NULL, NULL),
(7, 'devis', 'C:/xampp/htdocs/TRADUCTION/devis/46-devis_Sol-TD-ACP.pdf', 'c\'est un devis d\'un client', 46, NULL, NULL),
(8, 'devis', 'C:/xampp/htdocs/TRADUCTION/devis/46-devis_serie d\'exercices ACP (1).pdf', 'c\'est un devis d\'un client', 46, NULL, NULL),
(9, 'devis', 'C:/xampp/htdocs/TRADUCTION/devis/46-devis_A-C-P-.pdf', 'c\'est un devis d\'un client', 46, NULL, NULL),
(10, 'devis', 'C:/xampp/htdocs/TRADUCTION/devis/46-devis_Serie d\'exercices ad1.pdf', 'c\'est un devis d\'un client', 46, NULL, NULL),
(11, 'devis', 'C:/xampp/htdocs/TRADUCTION/devis/46-devis_Sol-TD-ACP.pdf', 'c\'est un devis d\'un client', 46, NULL, NULL);

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
(10, 0, 0, NULL, NULL),
(100, 0, 1, NULL, NULL),
(41, 1, 1, NULL, NULL),
(43, 1, 1, NULL, NULL),
(44, 1, 1, NULL, NULL);

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
(3, 'Hichemoo', 'Bennaceur', 'hichem@esi.dz', 'b59c67bf196a4758191e42f76670ceba', '02151613121', 'HAWAI', '', 0, 0),
(4, 'Hichem', 'Bennaceur', 'gh_bennaceur@esi.dz', '', '0555105901', 'Bealieu', '', 0, 0),
(5, 'Hichem', 'Bennaceur', 'gh_bennaceur@esi.dz', '', '0555105901', 'Bealieu', '', 0, 0),
(6, 'Bennaceur', 'Adel', 'Adel@e.com', '123456789', '000111222', '', '', 0, 0),
(8, 'raouf_ben', 'raouf', 'hichampredator@gmail.com', '$2y$10$4GrnTkjSGI/F69uvTIrCv.iXKftOT.Rn8', '0555555555', 'ESI', NULL, 0, 0),
(9, 'h_bennaceur', 'h_bennaceur', 'hichampredator@gmail.com', '$2y$10$Dmu.tWsbXQIOq/fxMnvslea7VstTCgy7h', '0555555555', 'ESI', NULL, 1, 0),
(10, 'bennaceur', 'bennaceur', 'gh@gmail.com', '$2y$10$q3/jDQLUx3wwh8BGZRKsDeLkEpFkqUtMR', '0555555555', 'ESI', NULL, 0, 0),
(11, 'bennaceur_hichem', 'hichem', 'gh@gmail.com', '$2y$10$EN9Wp355UtYobrsAnXOArulewGG7exZaT', '0555555555', 'ESI', NULL, 0, 0),
(12, 'raoufBen', 'raoufBen', 'g@gmail.com', '$2y$10$4Cz7Pqe/Q6mfUcgAATtoO.GdA3zfoB1Yp', '0555123456', 'ESI', NULL, 0, 0),
(13, 'aaaaaa', 'bbbbb', 'hichampredator@gmailLL.com', '$2y$10$oAQisMT4JH/0e1CCQPy.JefBRtLe6C2gh', '0555123456', 'beaulieu', NULL, 0, 0),
(14, 'qwerty', 'qwerty', 'qwerty@gmail.com', '2f7b52aacfbf6f44e13d27656ecb1f59', '0555105901', 'beaulieu', NULL, 0, 0),
(15, 'hichemBen', 'h_bennaceur', 'hichaaaaampredator@gmail.com', 'b59c67bf196a4758191e42f76670ceba', '0555123456', 'beaulieu', NULL, 0, 0),
(44, 'trad', 'trad', 'trad@gmail.com', 'b59c67bf196a4758191e42f76670ceba', '0555105901', 'oran', NULL, 0, 1),
(43, 'hichem_traducteur', 'hichem', 'hichemTrad@gmail.com', 'b59c67bf196a4758191e42f76670ceba', '0555123456', 'Oued smar,elharrach', NULL, 0, 1),
(18, 'client', 'client', 'A@GMAIL.COM', 'b59c67bf196a4758191e42f76670ceba', '0555123456', 'AAAA', NULL, 0, 0),
(19, 'Bennaceur', 'Ikram', 'ikram@gmail.com', 'b59c67bf196a4758191e42f76670ceba', '0000000000', ' alger', NULL, 0, 0),
(20, 'testClient', 'testClient', 'hhhh@g.c', 'b59c67bf196a4758191e42f76670ceba', '0000000000', 'aaaa', NULL, 0, 0),
(21, 'ddfklscdlk', 'dckcdlkd', 'A@GMAIL.COMAAA', 'b59c67bf196a4758191e42f76670ceba', '111111', 'AA', NULL, 0, 0),
(22, 'DODXLS', 'SKSKSK', 'D@GMAIL.XM', 'b59c67bf196a4758191e42f76670ceba', '111111', 'AAA', NULL, 0, 0),
(23, 'kdkdkksk', 'dkdkkddk', 'qqqq@g.v', '698d51a19d8a121ce581499d7b701668', '000000', 'ssssk', NULL, 0, 0),
(24, 'LSLSSKKK', 'SJSJSJS', 'sl@s.cm', 'c4ca4238a0b923820dcc509a6f75849b', '0000000000', 'ls', NULL, 0, 0),
(25, 'ksskskksks', 'ldkdksk', 'Q@gmail.com', 'b59c67bf196a4758191e42f76670ceba', '000', 'sossl', NULL, 0, 0),
(26, 'dkdkkdkd', 'xdkxkxkxk', 'slslsls@s.d', '698d51a19d8a121ce581499d7b701668', '00000', 'lslsl', NULL, 0, 0),
(27, 'dlllxl', 'slslsl', 'j@s.cl', 'f09564c9ca56850d4cd6b3319e541aee', '0555105901', 'dkd', NULL, 0, 0),
(28, 'sisksxkl', 'djdjjdk', 'djd@h.com', '7fc56270e7a70fa81a5935b72eacbe29', '000000', 'jdjdjd', NULL, 0, 0),
(29, 'dkkskJJJJ', 'dkdkdk', 'Qqq@g.comm', '7fc56270e7a70fa81a5935b72eacbe29', '000000', 'sksk', NULL, 0, 0),
(30, 'dkkskJJJJ', 'dkdkdk', 'Qqq@g.comm', '4cbd6d53280de25e04712c7434a70642', '000000', 'sksk', NULL, 0, 0),
(31, 'dkkxkd', 'kkdkd', 'S@Q.CM', '7fc56270e7a70fa81a5935b72eacbe29', '0555105901', 'SSK', NULL, 0, 0),
(32, 'fghjklm', 'fghjkl', 'S@Q.CMs', '7fc56270e7a70fa81a5935b72eacbe29', '000000', 'skskks', NULL, 0, 0),
(33, 'KDKDKkekk', 'DJDJ', 'dkdk@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '000000', 'js', NULL, 0, 0),
(34, 'skskdskksks', 'slsl', 'q@fh.cm', '0cc175b9c0f1b6a831c399e269772661', '000000', 'qkkskq', NULL, 0, 0),
(35, 'dkdkdJJJ', 'dkdkdk', 'a@gmail.comQ', '7fc56270e7a70fa81a5935b72eacbe29', '0000000000', 'KEKDKD', NULL, 0, 0),
(36, 'sskkds', 'djdjdj', 'Qqq@g.commP', '7fc56270e7a70fa81a5935b72eacbe29', '0000000000', 'Q', NULL, 0, 0),
(37, 'raouf_bennaceur', 'aaa', 'aa@g.cccc', '0cc175b9c0f1b6a831c399e269772661', '000', 'k', NULL, 0, 0),
(38, 'sdfghjkl', 'fvgbn,;:!', 'A@GMAIL.COMLLL', 'b59c67bf196a4758191e42f76670ceba', '0000', 'SJSJSJ', NULL, 0, 0),
(39, 'sdfghjkl:m!', 'sgsjsk', 'l@g.cl', '74b87337454200d4d33f80c4663dc5e5', '0444444', 'KSK', NULL, 1, 0),
(40, 'treducteur', 'hichem', 'trad@gmail.com', 'b59c67bf196a4758191e42f76670ceba', '0555123456', 'BEAULIEU', NULL, 0, 0),
(41, 'traducteur', 'traducteur', 'traducteur@gmail.com', '2f7b52aacfbf6f44e13d27656ecb1f59', '0555105901', 'beulieu', NULL, 0, 1),
(42, 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '0000000000', ' ', NULL, 0, 0),
(45, 'client', 'client', 'oued_smar@gmail.com', 'b59c67bf196a4758191e42f76670ceba', '012345679', 'oued smar ', NULL, 0, 0),
(46, 'client2', 'Adel', 'client2@gmail.com', 'b59c67bf196a4758191e42f76670ceba', '0555555555', 'Belle vue elharrach ', NULL, 0, 0);

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
(4, NULL, '7076fed8739893d9acde5b19a9bbe962', 'Mozilla (Windows NT 10.0; Win64; x64) AppleWebKit (KHTML, like Gecko) Chrome Safari'),
(5, NULL, 'ff4d5fbbafdf976cfdc032e3bde78de5', 'Mozilla (Windows NT 10.0; Win64; x64) AppleWebKit (KHTML, like Gecko) Chrome Safari'),
(6, NULL, 'ebd9629fc3ae5e9f6611e2ee05a31cef', 'Mozilla (Windows NT 10.0; Win64; x64) AppleWebKit (KHTML, like Gecko) Chrome Safari'),
(7, NULL, '3dc4876f3f08201c7c76cb71fa1da439', 'Mozilla (Windows NT 10.0; Win64; x64) AppleWebKit (KHTML, like Gecko) Chrome Safari'),
(8, NULL, '99c5e07b4d5de9d18c350cdf64c5aa3d', 'Mozilla (Windows NT 10.0; Win64; x64) AppleWebKit (KHTML, like Gecko) Chrome Safari'),
(9, NULL, '8b16ebc056e613024c057be590b542eb', 'Mozilla (Windows NT 10.0; Win64; x64) AppleWebKit (KHTML, like Gecko) Chrome Safari');

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
  ADD KEY `id_client` (`id_client`);

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
  ADD KEY `id_traducteur` (`id_user`);

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
  MODIFY `id_devis` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id_piece_jointe` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id_user` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `user_sessions`
--
ALTER TABLE `user_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
