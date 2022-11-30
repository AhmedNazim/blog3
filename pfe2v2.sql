-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 29 Mai 2019 à 15:23
-- Version du serveur :  5.6.17
-- Version de PHP :  5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pfe2`
--

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE IF NOT EXISTS `employes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `matricule` int(11) NOT NULL,
  `nom_emp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_emp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naiss` date NOT NULL,
  `lieu_naiss` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_recru` date NOT NULL,
  `email_emp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_poste` int(11) DEFAULT NULL,
  `poste_trav` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `groupage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `situation_fam` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_securite_so` int(11) DEFAULT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maladie_chro` tinyint(1) DEFAULT NULL,
  `categorie` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `employes`
--

INSERT INTO `employes` (`id`, `matricule`, `nom_emp`, `prenom_emp`, `date_naiss`, `lieu_naiss`, `sexe`, `date_recru`, `email_emp`, `n_poste`, `poste_trav`, `groupage`, `situation_fam`, `n_securite_so`, `adresse`, `maladie_chro`, `categorie`) VALUES
(1, 1, 'racim', 'saibi', '1997-05-15', 'hammamat', 'homme', '2019-05-12', 'racim@gmail.com', 521, 'technicien', 'o+', 'marié', 513, 'drarria', 0, 'TPER'),
(2, 2, 'samir', 'saibi', '1997-05-15', 'bordj', 'homme', '2019-05-12', 'samir@gmail.com', 522, 'technicien', 'o+', 'célébataire', 514, 'drarria', 0, 'TPER'),
(3, 3, 'hamid', 'hamidouch', '1997-05-15', 'setif', 'homme', '2019-05-12', 'hamid@gmail.com', 521, 'medecin', 'o+', 'marié', 513, 'cheraga', 0, 'TPER'),
(4, 4, 'imad', 'imad prenom', '1997-05-01', 'bouzariaa', 'homme', '2019-01-08', 'imad@gmail.com', 233, '', '', '', 0, 'bouzariaa', 0, ''),
(5, 5, 'salim', 'dahmani', '1998-05-02', 'said hamdin', 'homme', '0000-00-00', '', 0, '', '', 'célébataire', 0, 'alger centre', 0, ''),
(6, 6, 'imad', 'dahmani', '1997-05-15', '', '', '0000-00-00', '', 0, '', '', '', 0, '', 0, ''),
(7, 7, 'imad', 'dahmani', '1997-05-15', 'bouzariaa', 'homme', '2019-05-12', NULL, NULL, NULL, NULL, NULL, NULL, 'bouzariaa adresse', NULL, NULL),
(8, 8, 'hamid', 'merouani', '1997-07-15', 'alger', 'homme', '2019-06-12', NULL, NULL, NULL, NULL, NULL, NULL, 'alger adresse', NULL, NULL),
(9, 9, 'amina', 'amani', '1997-07-15', 'setif', 'femme', '2019-01-12', NULL, NULL, NULL, NULL, NULL, NULL, 'setif adresse', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=12 ;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_24_230719_create_employes_table', 1),
(4, '2019_05_26_140725_add_column_isAdmin', 2),
(7, '2019_05_29_105940_create_techniciens_table', 3),
(10, '2019_05_29_115747_add_colomn_updated_at', 4),
(11, '2019_05_29_115837_add_colomn_created_at', 4);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `techniciens`
--

CREATE TABLE IF NOT EXISTS `techniciens` (
  `matricule` int(11) DEFAULT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `nom_tech` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom_tech` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_naiss` date DEFAULT NULL,
  `lieu_naiss` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_tech` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `groupage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  UNIQUE KEY `id_user` (`id_user`),
  UNIQUE KEY `techniciens_matricule_unique` (`matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `techniciens`
--

INSERT INTO `techniciens` (`matricule`, `id_user`, `nom_tech`, `prenom_tech`, `date_naiss`, `lieu_naiss`, `email_tech`, `sexe`, `groupage`, `adresse`, `updated_at`, `created_at`) VALUES
(12, 5, '12345', '12345', NULL, NULL, NULL, '12345', NULL, NULL, '2019-05-29 13:00:09', '2019-05-29 13:00:09'),
(356, 6, '12345', '12345', NULL, NULL, 'racim2@gmail.com', '12345', NULL, NULL, '2019-05-29 13:18:13', '2019-05-29 13:18:13'),
(9, 7, '12345', '12345', NULL, NULL, 'racim3@gmail.com', '12345', NULL, NULL, '2019-05-29 13:07:34', '2019-05-29 13:07:34'),
(122, 8, '12345', '12345', NULL, NULL, 'racim4@gmail.com', '12345', NULL, NULL, '2019-05-29 13:15:55', '2019-05-29 13:15:55');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `isAdmin`) VALUES
(5, 'racim', 'racim@gmail.com', '$2y$10$xg939wqSfcctazNT5w97weDyyOPalZpClAFnSODyejSKNl163/gPi', 'mzNc5D6L7iotmYLHb0zONidNbzmYYkRmM8L1Alb3wVrbjX4oobCQdf4pB2fV', '2019-05-26 20:31:04', '2019-05-26 20:31:04', 1),
(6, 'racim2', 'racim2@gmail.com', '$2y$10$xg939wqSfcctazNT5w97weDyyOPalZpClAFnSODyejSKNl163/gPi', 'iayr8yPE37KtuZGids6wkttri4hLvBWD18j4dvlQtJeYQv0rjqnQydfVxfUL', NULL, NULL, 7),
(7, 'racim3', 'racim3@gmail.com', '$2y$10$cfmIUETl.LYed6K3rUl.fOsmtIsgIV/fwOL/uif7f0yIQtzc8LVhe', 'PuiqfGT69MCdpQiFaaowIXslUqoEBdr7E8zuuRITYPey3DWQWxs7HtXI5YqJ', '2019-05-29 08:34:05', '2019-05-29 08:34:05', 7),
(8, 'racim4', 'racim4@gmail.com', '$2y$10$fhmzhzrY6SXjdl1zXyUD5ualUehIq1lyOwKX.WvEYEvZ/CjevVokm', NULL, '2019-05-29 11:14:35', '2019-05-29 11:14:35', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
