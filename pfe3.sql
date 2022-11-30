-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 15 juil. 2019 à 19:47
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+01:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pfe3`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `matricule_pat` int(11) NOT NULL DEFAULT '1',
  `travailleur_exposes_risque` int(11) NOT NULL DEFAULT '1',
  `travailleur_affectes_postes_securite` int(11) NOT NULL DEFAULT '1',
  `travailleur_charges_la_restauration` int(11) NOT NULL DEFAULT '1',
  `handicapes_chroniques` int(11) NOT NULL DEFAULT '1',
  `femmes_enceintes_mere` int(11) NOT NULL DEFAULT '1',
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3311 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `matricule_pat`, `travailleur_exposes_risque`, `travailleur_affectes_postes_securite`, `travailleur_charges_la_restauration`, `handicapes_chroniques`, `femmes_enceintes_mere`, `updated_at`, `created_at`, `deleted_at`) VALUES
(6, 6, 2, 1, 1, 1, 1, '2019-06-18 15:07:48', '2019-06-05 19:46:40', NULL),
(9, 9, 1, 1, 1, 1, 2, '2019-07-10 08:12:49', '2019-06-05 21:36:05', '2019-07-10 08:12:49'),
(10, 10, 2, 1, 1, 2, 1, '2019-06-06 09:56:46', '2019-06-06 09:56:46', NULL),
(13, 13, 1, 1, 1, 2, 1, '2019-07-09 23:23:57', '2019-06-06 16:10:21', NULL),
(14, 14, 2, 1, 1, 1, 1, '2019-07-10 09:47:35', '2019-06-17 13:24:08', NULL),
(15, 15, 1, 1, 1, 1, 1, '2019-06-18 10:37:25', '2019-06-18 10:37:25', NULL),
(3310, 3310, 2, 1, 1, 1, 1, '2019-07-10 18:21:06', '2019-07-09 09:53:47', '2019-07-10 18:21:06');

-- --------------------------------------------------------

--
-- Structure de la table `divisions`
--

DROP TABLE IF EXISTS `divisions`;
CREATE TABLE IF NOT EXISTS `divisions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1212924 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `divisions`
--

INSERT INTO `divisions` (`id`, `division`, `updated_at`, `created_at`, `deleted_at`) VALUES
(6, 'A', NULL, NULL, NULL),
(9, 'A', '2019-07-10 08:12:49', NULL, '2019-07-10 08:12:49'),
(13, 'B', NULL, NULL, NULL),
(14, 'B', '2019-07-10 09:47:35', NULL, NULL),
(15, 'C', NULL, NULL, NULL),
(3310, 'C', '2019-07-10 18:21:06', '2019-07-09 09:53:47', '2019-07-10 18:21:06'),
(1212923, 'D', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `equipes`
--

DROP TABLE IF EXISTS `equipes`;
CREATE TABLE IF NOT EXISTS `equipes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `equipe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1212924 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `equipes`
--

INSERT INTO `equipes` (`id`, `equipe`, `updated_at`, `created_at`, `deleted_at`) VALUES
(6, 'A1', NULL, NULL, NULL),
(9, 'A2', '2019-07-10 08:12:49', NULL, '2019-07-10 08:12:49'),
(13, 'B1', NULL, NULL, NULL),
(14, 'B2', '2019-07-10 09:47:35', NULL, NULL),
(15, 'C1', NULL, NULL, NULL),
(3310, 'C3', '2019-07-10 18:21:06', '2019-07-09 09:53:47', '2019-07-10 18:21:06'),
(1212923, 'D1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `historiquemnps`
--

DROP TABLE IF EXISTS `historiquemnps`;
CREATE TABLE IF NOT EXISTS `historiquemnps` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `matricule` int(11) NOT NULL,
  `qui` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quoi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aqui` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quand` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `historiquemnps`
--

INSERT INTO `historiquemnps` (`id`, `matricule`, `qui`, `quoi`, `aqui`, `quand`, `updated_at`, `created_at`, `deleted_at`) VALUES
(3, 1, 'racim', 'Modifier compte', 'nedjm', '2019-07-07 01:51:40', '2019-07-07 01:51:40', '2019-07-07 01:51:40', NULL),
(4, 1, 'racim', 'Archiver compte', 'nedjm', '2019-07-07 02:00:45', '2019-07-07 02:00:45', '2019-07-07 02:00:45', NULL),
(5, 1, 'racim', 'Modifier compte', 'nabilion bounaparte', '2019-07-09 10:45:30', '2019-07-09 10:45:30', '2019-07-09 10:45:30', NULL),
(6, 1, 'racim', 'Modifier compte', 'nabilion bounaparte', '2019-07-09 10:57:24', '2019-07-09 10:57:24', '2019-07-09 10:57:24', NULL),
(7, 1, 'racim', 'Modifier compte', 'nabil', '2019-07-09 10:58:02', '2019-07-09 10:58:02', '2019-07-09 10:58:02', NULL),
(8, 1, 'racim', 'Modifier compte', 'madjoudj', '2019-07-09 10:58:55', '2019-07-09 10:58:55', '2019-07-09 10:58:55', NULL),
(9, 1, 'racim', 'Modifier compte', 'madjoudj', '2019-07-09 12:08:03', '2019-07-09 12:08:03', '2019-07-09 12:08:03', NULL),
(10, 1, 'racim', 'Modifier compte', 'madjoudj', '2019-07-09 12:08:44', '2019-07-09 12:08:44', '2019-07-09 12:08:44', NULL),
(11, 1, 'racim', 'Modifier compte', 'nabil', '2019-07-09 08:48:03', '2019-07-09 20:48:03', '2019-07-09 20:48:03', NULL),
(12, 1, 'racim', 'Modifier compte', 'nabil', '2019-07-09 08:49:21', '2019-07-09 20:49:21', '2019-07-09 20:49:21', NULL),
(13, 1, 'racim', 'Modifier compte', 'amrouche', '2019-07-09 09:00:16', '2019-07-09 21:00:16', '2019-07-09 21:00:16', NULL),
(14, 1, 'racim', 'Archiver compte', 'nabil', '2019-07-09 09:12:37', '2019-07-09 21:12:37', '2019-07-09 21:12:37', NULL),
(15, 1, 'racim', 'Compléter compte', 'nabi', '2019-07-09 09:19:26', '2019-07-09 21:19:26', '2019-07-09 21:19:26', NULL),
(16, 1, 'racim', 'Modifier compte', 'nabi', '2019-07-09 09:20:01', '2019-07-09 21:20:01', '2019-07-09 21:20:01', NULL),
(17, 1, 'racim', 'Modifier compte', 'silarbi', '2019-07-09 09:28:24', '2019-07-09 21:28:24', '2019-07-09 21:28:24', NULL),
(18, 1, 'racim', 'Compléter compte', 'safti', '2019-07-09 10:04:55', '2019-07-09 22:04:55', '2019-07-09 22:04:55', NULL),
(19, 1, 'racim', 'Compléter compte', 'nabi', '2019-07-09 10:12:03', '2019-07-09 22:12:03', '2019-07-09 22:12:03', NULL),
(20, 1, 'racim', 'Modifier compte', 'nabi', '2019-07-09 10:12:44', '2019-07-09 22:12:44', '2019-07-09 22:12:44', NULL),
(21, 1, 'racim', 'Archiver compte', 'safti', '2019-07-09 10:12:55', '2019-07-09 22:12:55', '2019-07-09 22:12:55', NULL),
(22, 1, 'racim', 'Compléter compte', 'safti', '2019-07-09 10:34:33', '2019-07-09 22:34:33', '2019-07-09 22:34:33', NULL),
(23, 1, 'racim', 'Compléter compte', 'nabi', '2019-07-09 10:38:28', '2019-07-09 22:38:28', '2019-07-09 22:38:28', NULL),
(24, 1, 'racim', 'Modifier compte', 'nabi', '2019-07-09 10:38:58', '2019-07-09 22:38:58', '2019-07-09 22:38:58', NULL),
(25, 1, 'racim', 'Archiver compte', 'safti', '2019-07-09 10:39:09', '2019-07-09 22:39:09', '2019-07-09 22:39:09', NULL),
(26, 1, 'racim', 'Compléter compte', 'nabi', '2019-07-09 10:47:09', '2019-07-09 22:47:09', '2019-07-09 22:47:09', NULL),
(27, 1, 'racim', 'Modifier compte', 'nabi', '2019-07-09 10:47:39', '2019-07-09 22:47:39', '2019-07-09 22:47:39', NULL),
(28, 1, 'racim', 'Archiver compte', 'safti', '2019-07-09 10:47:51', '2019-07-09 22:47:51', '2019-07-09 22:47:51', NULL),
(29, 15, 'imad96', 'Compléter compte', 'mahiouz', '2019-07-09 10:50:13', '2019-07-09 22:50:13', '2019-07-09 22:50:13', NULL),
(30, 15, 'imad96', 'Modifier compte', 'mahiouz', '2019-07-09 10:50:50', '2019-07-09 22:50:50', '2019-07-09 22:50:50', NULL),
(31, 1, 'racim', 'Compléter compte', 'nabi', '2019-07-09 11:16:40', '2019-07-09 23:16:40', '2019-07-09 23:16:40', NULL),
(32, 1, 'racim', 'Modifier compte', 'nabi', '2019-07-09 11:17:17', '2019-07-09 23:17:17', '2019-07-09 23:17:17', NULL),
(33, 1, 'racim', 'Compléter compte', 'nabi', '2019-07-09 11:20:23', '2019-07-09 23:20:23', '2019-07-09 23:20:23', NULL),
(34, 1, 'racim', 'Modifier compte', 'nabi', '2019-07-09 11:20:57', '2019-07-09 23:20:57', '2019-07-09 23:20:57', NULL),
(35, 1, 'racim', 'Archiver compte', 'safti', '2019-07-09 11:21:11', '2019-07-09 23:21:11', '2019-07-09 23:21:11', NULL),
(36, 15, 'imad96', 'Compléter compte', 'mahyouz', '2019-07-09 11:23:12', '2019-07-09 23:23:12', '2019-07-09 23:23:12', NULL),
(37, 15, 'imad96', 'Modifier compte', 'mahyouz', '2019-07-09 11:23:42', '2019-07-09 23:23:42', '2019-07-09 23:23:42', NULL),
(38, 1, 'racim', 'Compléter compte', 'nabi', '2019-07-09 11:42:35', '2019-07-09 23:42:35', '2019-07-09 23:42:35', NULL),
(39, 1, 'racim', 'Modifier compte', 'nabi', '2019-07-09 11:43:06', '2019-07-09 23:43:06', '2019-07-09 23:43:06', NULL),
(40, 1, 'racim', 'Archiver compte', 'safti', '2019-07-09 11:43:19', '2019-07-09 23:43:19', '2019-07-09 23:43:19', NULL),
(41, 15, 'imad96', 'Compléter compte', 'mahiyouz', '2019-07-09 11:45:25', '2019-07-09 23:45:25', '2019-07-09 23:45:25', NULL),
(42, 1, 'racim', 'Archiver compte', 'ben dahman', '2019-07-10 08:12:50', '2019-07-10 08:12:50', '2019-07-10 08:12:50', NULL),
(43, 1, 'racim', 'Modifier compte', 'mahiyouz', '2019-07-10 08:20:16', '2019-07-10 08:20:16', '2019-07-10 08:20:16', NULL),
(44, 1, 'racim', 'Modifier compte', 'hassaine', '2019-07-10 09:33:36', '2019-07-10 09:33:36', '2019-07-10 09:33:36', NULL),
(45, 1, 'racim', 'Compléter compte', 'nabi', '2019-07-10 09:44:10', '2019-07-10 09:44:10', '2019-07-10 09:44:10', NULL),
(46, 1, 'racim', 'Modifier compte', 'nabi', '2019-07-10 09:44:41', '2019-07-10 09:44:41', '2019-07-10 09:44:41', NULL),
(47, 1, 'racim', 'Archiver compte', 'safti', '2019-07-10 09:44:53', '2019-07-10 09:44:53', '2019-07-10 09:44:53', NULL),
(48, 15, 'imad96', 'Compléter compte', 'mahiouz', '2019-07-10 09:47:21', '2019-07-10 09:47:21', '2019-07-10 09:47:21', NULL),
(49, 15, 'imad96', 'Archiver compte', 'nabil', '2019-07-10 09:47:35', '2019-07-10 09:47:35', '2019-07-10 09:47:35', NULL),
(50, 1, 'racim', 'Compléter compte', 'nabi', '2019-07-10 06:18:50', '2019-07-10 18:18:50', '2019-07-10 18:18:50', NULL),
(51, 1, 'racim', 'Modifier compte', 'nabi', '2019-07-10 06:19:29', '2019-07-10 18:19:29', '2019-07-10 18:19:29', NULL),
(52, 15, 'imad96', 'Archiver compte', 'silarbi', '2019-07-10 06:21:06', '2019-07-10 18:21:06', '2019-07-10 18:21:06', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `historiquems`
--

DROP TABLE IF EXISTS `historiquems`;
CREATE TABLE IF NOT EXISTS `historiquems` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `matricule_pat` int(11) NOT NULL,
  `nom_pat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom_pat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat_rendez` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_rendez` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `historiquems`
--

INSERT INTO `historiquems` (`id`, `matricule_pat`, `nom_pat`, `prenom_pat`, `etat_rendez`, `date_rendez`, `updated_at`, `created_at`, `deleted_at`) VALUES
(8, 15, 'belailie', 'youcef', 'Achevée', '2019-07-09 10:59:25', '2019-07-09 10:59:25', '2019-07-09 10:59:25', NULL),
(9, 13, 'hassaine', 'zakari', 'Achevée', '2019-07-09 10:59:56', '2019-07-09 10:59:56', '2019-07-09 10:59:56', NULL),
(10, 13, 'hassaine', 'zakari', 'Non Achevée', '2019-07-09 11:05:54', '2019-07-09 11:05:54', '2019-07-09 11:05:54', NULL),
(11, 13, 'hassaine', 'zakari', 'Achevée', '2019-07-09 12:09:06', '2019-07-09 12:09:06', '2019-07-09 12:09:06', NULL),
(12, 6, 'nabilion bouna', 'nabil', 'Reportée', '2019-07-09 12:09:14', '2019-07-09 12:09:14', '2019-07-09 12:09:14', NULL),
(13, 9, 'ben dahman', 'imen', 'Achevée', '2019-07-09 08:57:22', '2019-07-09 20:57:22', '2019-07-09 20:57:22', NULL),
(14, 13, 'hassaine', 'zakari', 'Reportée', '2019-07-09 08:57:35', '2019-07-09 20:57:35', '2019-07-09 20:57:35', NULL),
(15, 15362, 'mahiyouz', 'malik', 'Achevée', '2019-07-09 11:50:02', '2019-07-09 23:50:02', '2019-07-09 23:50:02', NULL),
(16, 15362, 'mahiyouz', 'malik', 'Achevée', '2019-07-10 08:37:42', '2019-07-10 08:37:42', '2019-07-10 08:37:42', NULL),
(17, 15362, 'mahiyouz', 'malik', 'Non Achevée', '2019-07-10 08:50:05', '2019-07-10 08:50:05', '2019-07-10 08:50:05', NULL),
(18, 15362, 'mahiyouz', 'malik', 'Reportée', '2019-07-10 08:51:03', '2019-07-10 08:51:03', '2019-07-10 08:51:03', NULL),
(19, 15362, 'mahiyouz', 'malik', 'Non Achevée', '2019-07-10 08:51:17', '2019-07-10 08:51:17', '2019-07-10 08:51:17', NULL),
(20, 15362, 'mahiyouz', 'malik', 'Non Achevée', '2019-07-10 09:01:55', '2019-07-10 09:01:55', '2019-07-10 09:01:55', NULL),
(21, 15362, 'mahiyouz', 'malik', 'Reportée', '2019-07-10 09:02:24', '2019-07-10 09:02:24', '2019-07-10 09:02:24', NULL),
(22, 15362, 'mahiyouz', 'malik', 'Non Achevée', '2019-07-10 09:02:42', '2019-07-10 09:02:42', '2019-07-10 09:02:42', NULL),
(23, 15362, 'mahiyouz', 'malik', 'Achevée', '2019-07-10 09:05:40', '2019-07-10 09:05:40', '2019-07-10 09:05:40', NULL),
(24, 15362, 'mahiyouz', 'malik', 'Achevée', '2019-07-10 09:05:49', '2019-07-10 09:05:49', '2019-07-10 09:05:49', NULL),
(25, 15362, 'mahiyouz', 'malik', 'Non Achevée', '2019-07-10 09:06:00', '2019-07-10 09:06:00', '2019-07-10 09:06:00', NULL),
(26, 15362, 'mahiyouz', 'malik', 'Achevée', '2019-07-10 09:06:10', '2019-07-10 09:06:10', '2019-07-10 09:06:10', NULL),
(27, 15362, 'mahiyouz', 'malik', 'Achevée', '2019-07-10 09:06:53', '2019-07-10 09:06:53', '2019-07-10 09:06:53', NULL),
(28, 6, 'amrouche', 'nabil', 'Achevée', '2019-07-10 09:07:10', '2019-07-10 09:07:10', '2019-07-10 09:07:10', NULL),
(29, 6, 'amrouche', 'nabil', 'Achevée', '2019-07-10 09:09:30', '2019-07-10 09:09:30', '2019-07-10 09:09:30', NULL),
(30, 6, 'amrouche', 'nabil', 'Achevée', '2019-07-10 09:10:22', '2019-07-10 09:10:22', '2019-07-10 09:10:22', NULL),
(31, 15362, 'mahiyouz', 'malik', 'Achevée', '2019-07-10 09:11:10', '2019-07-10 09:11:10', '2019-07-10 09:11:10', NULL),
(32, 15362, 'mahiyouz', 'malik', 'Achevée', '2019-07-10 09:20:50', '2019-07-10 09:20:50', '2019-07-10 09:20:50', NULL),
(33, 6, 'amrouche', 'nabil', 'Achevée', '2019-07-10 09:22:38', '2019-07-10 09:22:38', '2019-07-10 09:22:38', NULL),
(34, 9, 'ben dahman', 'imen', 'Achevée', '2019-07-10 09:23:17', '2019-07-10 09:23:17', '2019-07-10 09:23:17', NULL),
(35, 3310, 'silarbi', 'nassim', 'Achevée', '2019-07-10 09:24:43', '2019-07-10 09:24:43', '2019-07-10 09:24:43', NULL),
(36, 13, 'hassaine', 'zakari', 'Achevée', '2019-07-10 09:31:02', '2019-07-10 09:31:02', '2019-07-10 09:31:02', NULL),
(37, 14, 'nabil', 'behlouli', 'Achevée', '2019-07-10 09:31:09', '2019-07-10 09:31:09', '2019-07-10 09:31:09', NULL),
(38, 10, 'hamidouch', 'hamid', 'Non Achevée', '2019-07-10 09:31:39', '2019-07-10 09:31:39', '2019-07-10 09:31:39', NULL),
(39, 10, 'hamidouch', 'hamid', 'Reportée', '2019-07-10 09:31:47', '2019-07-10 09:31:47', '2019-07-10 09:31:47', NULL),
(40, 8695, 'mahiouz', 'malik', 'Achevée', '2019-07-10 10:08:40', '2019-07-10 10:08:40', '2019-07-10 10:08:40', NULL),
(41, 6, 'amrouche', 'nabil', 'Achevée', '2019-07-10 06:25:37', '2019-07-10 18:25:37', '2019-07-10 18:25:37', NULL),
(42, 15, 'belailie', 'youcef', 'Achevée', '2019-07-15 07:20:59', '2019-07-15 19:20:59', '2019-07-15 19:20:59', NULL),
(43, 6, 'amrouche', 'nabil', 'Achevée', '2019-07-15 07:21:17', '2019-07-15 19:21:17', '2019-07-15 19:21:17', NULL),
(44, 6, 'amrouche', 'nabil', 'Achevée', '2019-07-15 07:21:24', '2019-07-15 19:21:24', '2019-07-15 19:21:24', NULL),
(45, 15, 'belailie', 'youcef', 'Achevée', '2019-07-15 07:22:45', '2019-07-15 19:22:45', '2019-07-15 19:22:45', NULL),
(46, 6, 'amrouche', 'nabil', 'Achevée', '2019-07-15 07:22:58', '2019-07-15 19:22:58', '2019-07-15 19:22:58', NULL),
(47, 13, 'hassaine', 'zakari', 'Achevée', '2019-07-15 07:29:25', '2019-07-15 19:29:25', '2019-07-15 19:29:25', NULL),
(48, 9, 'ben dahman', 'imen', 'Achevée', '2019-07-15 07:30:06', '2019-07-15 19:30:06', '2019-07-15 19:30:06', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(78, '2014_10_12_000000_create_users_table', 1),
(79, '2014_10_12_100000_create_password_resets_table', 1),
(80, '2019_05_24_230719_create_employes_table', 1),
(81, '2019_05_26_140725_add_column_isAdmin', 1),
(82, '2019_05_29_105940_create_techniciens_table', 1),
(83, '2019_05_29_115747_add_colomn_updated_at', 1),
(84, '2019_05_29_115837_add_colomn_created_at', 1),
(85, '2019_05_29_122330_add_column_id_user', 1),
(86, '2019_05_31_003821_create_profiles_table', 1),
(87, '2019_05_31_125808_add_column_matricule_tech', 2),
(88, '2019_05_31_175448_add_column_updated_at', 2),
(89, '2019_05_31_175530_add_column_created_at', 2),
(90, '2019_06_01_100748_add_column_arch_cor_med', 2),
(91, '2019_06_01_101533_add_column_arch_comp_pat', 2),
(92, '2019_06_01_195913_add_column_id', 2),
(93, '2019_06_02_225327_create_patients_table', 2),
(94, '2019_06_03_053349_add_column_id_user1', 2),
(95, '2019_06_03_175934_create_categories_table', 2),
(96, '2019_06_05_170922_add_column_deleted_at', 2),
(97, '2019_06_05_172946_add_column_deleted_at2', 2),
(98, '2019_06_05_173422_add_column_idProfile', 2),
(99, '2019_06_05_194231_add_column_user_id_pat', 3),
(100, '2019_06_05_220809_add_column_deleted_at_patients', 4),
(101, '2019_06_05_221554_add_column_user_id_pat_cat', 5),
(102, '2019_06_17_002345_create_selecteds_table', 6),
(103, '2019_06_17_131205_add_column_date_der_visite', 7),
(104, '2019_06_17_154312_add_column_nom_sel', 8),
(105, '2019_06_17_154350_add_column_prenom_sel', 8),
(106, '2019_06_17_154450_add_column_date_der_visite_sel', 8),
(107, '2019_06_17_154602_add_column_type_visite_sel', 8),
(108, '2019_06_17_225012_add_column_etat', 9),
(109, '2019_06_17_230807_create_selectedvalides_table', 10),
(110, '2019_06_18_101808_add_column_nbrVA', 11),
(111, '2019_07_06_181756_add_column_etat_visite', 12),
(114, '2019_07_06_212323_create_historiqueManipulations_table', 13),
(115, '2019_07_06_224625_create_historiqueMan_table', 14),
(116, '2019_07_08_235006_add_column_dateSupProchRendez', 15),
(117, '2019_07_09_091818_create_table_equipes', 16),
(118, '2019_07_09_091850_create_table_divisions', 16);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('racim@gmail.com', '$2y$10$hx2Uuoxsohy/UihaPw092OzbpK9QxQHOB3//efI68njU78UnNvBzi', '2019-06-18 14:06:44');

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user_pat` int(10) UNSIGNED DEFAULT NULL,
  `matricule_p` int(11) NOT NULL,
  `nom_pat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom_pat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_naiss_pat` date DEFAULT NULL,
  `lieu_naiss_pat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexe_pat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_recru_pat` date DEFAULT NULL,
  `email_emp_pat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poste_trav_pat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_poste_pat` int(11) DEFAULT NULL,
  `groupage_pat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `situation_fam_pat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_securite_so_pat` int(11) DEFAULT NULL,
  `nbrVA` int(11) DEFAULT NULL,
  `adresse_pat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_der_visite` date DEFAULT NULL,
  `dateSupProchRendez` date DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3311 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `patients`
--

INSERT INTO `patients` (`id`, `id_user_pat`, `matricule_p`, `nom_pat`, `prenom_pat`, `date_naiss_pat`, `lieu_naiss_pat`, `sexe_pat`, `date_recru_pat`, `email_emp_pat`, `poste_trav_pat`, `n_poste_pat`, `groupage_pat`, `situation_fam_pat`, `n_securite_so_pat`, `nbrVA`, `adresse_pat`, `date_der_visite`, `dateSupProchRendez`, `updated_at`, `created_at`, `deleted_at`) VALUES
(6, 3, 6, 'amrouche', 'nabil', '1980-01-07', 'mensoura', 'Homme', '2019-06-02', 'nabil@gmail.com', 'informaticien', 100, 'B+', 'Célibataire', 1000, 2, 'Bejaia', '2019-07-15', '2020-02-10', '2019-07-15 19:22:58', '2019-06-05 19:46:40', NULL),
(9, 4, 9, 'ben dahman', 'imen', '2019-06-15', 'alger', 'Femme', '2019-05-01', 'imen@gmail.com', 'biologiste', 101, 'AB-', 'Célibataire', 1001, 2, 'alger , ain beniane', '2019-07-15', '2020-02-10', '2019-07-15 19:30:06', '2019-06-05 21:36:05', '2019-07-10 08:12:49'),
(10, 5, 10, 'hamidouch', 'hamid', '2019-06-05', 'mensoura', 'Homme', '2019-06-02', 'hamid@gmail.com', 'informaticien', 102, 'AB-', 'celibataire', 1002, 2, 'adresse hamid', '2019-01-01', '2019-07-30', '2019-06-06 09:56:46', '2019-06-06 09:56:46', NULL),
(13, 6, 13, 'hassaine', 'zakari', '2019-06-07', 'dar el bida', 'Femme', '2019-06-06', 'zaki@gmail.com', 'electronicien', 103, 'B-', 'Marié', 1003, 2, 'adresse zaki', '2019-07-15', '2020-02-10', '2019-07-15 19:29:25', '2019-06-06 16:10:21', NULL),
(14, 3, 14, 'nabil', 'behlouli', '2019-06-12', 'mensoura', 'Homme', '2019-06-03', 'nabil@gmail.com', 'electronicien', 1441, 'O+', 'mariee', 1441, 2, 'france', '2019-07-10', '2020-02-05', '2019-07-10 09:47:35', '2019-06-17 13:24:08', NULL),
(15, 8, 15, 'belailie', 'youcef', '1998-03-05', 'alger', 'Homme', '2019-01-23', 'youcef@gmail.com', 'electronicien', 101, 'O+', 'Célibataire', 1441, 1, 'alger', '2019-07-15', '2020-09-07', '2019-07-15 19:22:45', '2019-06-18 10:37:25', NULL),
(3310, 12, 3310, 'silarbi', 'nassim', '1985-02-05', 'dar el bida', 'Homme', '2019-07-18', 'nassime@gmai.com', 'biologiste', 101, 'O+', 'Célibataire', 1003, 1, 'Alger', '2019-07-10', '2020-09-02', '2019-07-10 18:21:06', '2019-07-09 09:53:47', '2019-07-10 18:21:06');

-- --------------------------------------------------------

--
-- Structure de la table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `matricule_tech` int(11) DEFAULT NULL,
  `int_cor_med` int(11) NOT NULL DEFAULT '1',
  `modif_cor_med` int(11) NOT NULL DEFAULT '1',
  `arch_cor_med` int(11) NOT NULL DEFAULT '1',
  `affic_donn_med` int(11) NOT NULL DEFAULT '1',
  `int_donn_pat` int(11) NOT NULL DEFAULT '1',
  `modif_donn_pat` int(11) NOT NULL DEFAULT '1',
  `arch_comp_pat` int(11) NOT NULL DEFAULT '1',
  `afficher_donn_pat` int(11) NOT NULL DEFAULT '1',
  `gerer_rendez` int(11) NOT NULL DEFAULT '1',
  `cons_his_man` int(11) NOT NULL DEFAULT '1',
  `cons_his_rendez` int(11) NOT NULL DEFAULT '1',
  `rechercher` int(11) NOT NULL DEFAULT '1',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profiles_matricule_tech_foreign` (`matricule_tech`)
) ENGINE=InnoDB AUTO_INCREMENT=153693 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `profiles`
--

INSERT INTO `profiles` (`id`, `matricule_tech`, `int_cor_med`, `modif_cor_med`, `arch_cor_med`, `affic_donn_med`, `int_donn_pat`, `modif_donn_pat`, `arch_comp_pat`, `afficher_donn_pat`, `gerer_rendez`, `cons_his_man`, `cons_his_rendez`, `rechercher`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(3, 3, 2, 2, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, '2019-07-09 12:08:44', '2019-06-05 19:22:03', NULL),
(1234, 1234, 2, 2, 1, 2, 1, 2, 1, 1, 1, 1, 1, 1, '2019-07-09 21:12:37', '2019-06-12 21:08:15', '2019-07-09 21:12:37'),
(15366, 15366, 1, 1, 1, 1, 2, 2, 2, 2, 2, 1, 1, 1, '2019-07-10 18:19:29', '2019-07-10 18:18:50', NULL),
(153692, 153692, 1, 1, 1, 1, 1, 1, 1, 2, 2, 1, 1, 1, '2019-07-10 09:44:53', '2019-07-09 22:34:33', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `selecteds`
--

DROP TABLE IF EXISTS `selecteds`;
CREATE TABLE IF NOT EXISTS `selecteds` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_sel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom_sel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_der_visite_sel` date DEFAULT NULL,
  `type_visite` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `selecteds`
--

INSERT INTO `selecteds` (`id`, `nom_sel`, `prenom_sel`, `date_der_visite_sel`, `type_visite`, `etat`, `updated_at`, `created_at`, `deleted_at`) VALUES
(9, 'ben dahman', 'imen', '2020-02-05', 'Visite pèriodique', NULL, '2019-07-15 19:29:46', '2019-07-15 19:29:46', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `selectedvalides`
--

DROP TABLE IF EXISTS `selectedvalides`;
CREATE TABLE IF NOT EXISTS `selectedvalides` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_sel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_sel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_der_visite_sel` date NOT NULL,
  `type_visite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat_visite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `selectedvalides`
--

INSERT INTO `selectedvalides` (`id`, `nom_sel`, `prenom_sel`, `date_der_visite_sel`, `type_visite`, `etat`, `etat_visite`, `updated_at`, `created_at`, `deleted_at`) VALUES
(9, 'ben dahman', 'imen', '2020-02-10', 'Visite pèriodique', 'en attente', 'Achevée', '2019-07-15 19:30:06', '2019-07-15 19:29:48', NULL),
(13, 'hassaine', 'zakari', '2020-02-10', 'Visite d\'embauche', 'en attente', 'Achevée', '2019-07-15 19:29:25', '2019-07-15 19:28:21', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `techniciens`
--

DROP TABLE IF EXISTS `techniciens`;
CREATE TABLE IF NOT EXISTS `techniciens` (
  `matricule` int(11) DEFAULT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `nom_tech` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom_tech` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_naiss` date DEFAULT NULL,
  `lieu_naiss` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_tech` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `groupage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user1` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `techniciens_matricule_unique` (`matricule`),
  KEY `techniciens_id_user_foreign` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=153693 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `techniciens`
--

INSERT INTO `techniciens` (`matricule`, `id_user`, `nom_tech`, `prenom_tech`, `date_naiss`, `lieu_naiss`, `email_tech`, `sexe`, `groupage`, `adresse`, `updated_at`, `created_at`, `deleted_at`, `id`, `id_user1`) VALUES
(1, 1, 'racim', 'saibi', '2019-06-04', 'drarria', 'racim@gmail.com', 'Homme', 'O+', 'drarria alger', NULL, NULL, NULL, 1, NULL),
(3, 2, 'madjoudj', 'lylia', '2019-06-15', 'sidi hmed', 'lylia@gmail.com', 'Femme', 'O-', 'alger', '2019-07-09 10:58:55', '2019-06-05 19:22:03', NULL, 3, 2),
(1234, 3, 'nabil', 'behlouli', '1998-12-12', 'sidi hmed', 'nabil@gmail.com', 'Homme', 'A+', 'alger', '2019-07-09 21:12:37', '2019-06-12 21:08:14', '2019-07-09 21:12:37', 1234, 2),
(15366, 15, 'nabi', 'imad', '1995-08-15', 'bab el oued', 'imad96@gmail.com', 'Homme', 'A+', 'alger', '2019-07-10 18:18:50', '2019-07-10 18:18:50', NULL, 15366, 15),
(153692, 17, 'safti', 'sarah', '1992-04-28', 'hamamet', 'sarah@gmail.com', 'Femme', 'B+', 'Alger', '2019-07-10 09:44:53', '2019-07-09 22:34:33', NULL, 153692, 17);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `isAdmin`) VALUES
(1, 'racim', 'racim@gmail.com', '$2y$10$y1rSPVya9UeQ.9WyyolvIeHs/RS1g6fjzVds2iwS1jHdvC6M3rBsq', '0h5BklENF5YNf23s3HSwEub40YCkUfydFUfSxI1R6DvjM9QFxANaLe9HP5yA', '2019-06-05 17:04:45', '2019-06-05 17:04:45', 1),
(2, 'lylia', 'lylia@gmail.com', '$2y$10$tZodtCkKKJ1FhxqHM8u/A.a20Mo06tCwWcfHaSfvjjhJekVSSt2wm', 'cboKasLILe5f0utE5bieNGsbNcpjFhgpoOGvKT3Gj0dZPVozIXMfRZ40vdF6', '2019-06-05 17:20:56', '2019-06-05 17:22:03', 2),
(3, 'nabil', 'nabil52@gmail.com', '$2y$10$kvbnTV52pFkGanBmPAZRzOVFDKtAWd8j.7B82MfxECehZL8VC/r/i', 'QAATF22RgJhuf3d4jA3SAg6pEBioTZxYMQqsFnt07qsa7p8xMIOEdyJUaTSQ', '2019-06-05 17:24:35', '2019-06-17 11:24:09', 3),
(4, 'imen', 'imen@gmail.com', '$2y$10$gxXMFZU2IaK.3nE619v4n.4FxI8ND0SfYGHZ35iOGCQSjK6LiKNQW', 'Jbf65Q3GivwLC9tc1S93CizpKldeAi7FQx2owz6aL9gEBlCh8fdv8E2Y8A50', '2019-06-05 19:34:28', '2019-06-05 19:36:05', 3),
(5, 'hamid', 'hamid@gmail.com', '$2y$10$Rx8M5FoI1FMityJuAWfOZed974OEyKimlvcvopyAjoW3IG/kexi2G', '9iSm3B2p4eOmJXADctD6qxeJhV43QXLZzwmWM7B6sPO78PRMVeUV60RkZPM6', '2019-06-06 07:55:39', '2019-06-06 07:56:46', 3),
(6, 'zaki', 'zaki@gmail.com', '$2y$10$UU38nrvR8qLrgJb3bUxpAupEz82.eKEnnOAlJnfQK0bpPdUymr6YW', 'ugD1sWbY85FAYcmgjYqW1hN4rwpfSFnhKZ3jwEpZsqf7L1etdU9IXqlnSAiS', '2019-06-06 14:06:58', '2019-06-06 14:10:21', 3),
(8, 'youcef', 'youcef@gmail.com', '$2y$10$Rp6us.24cUh8w.QUcPdBA.RBWPCfJfwWLfUoK0j2wHC1H62rFUgUq', 'HidCmFuUfxHCar6aNgyZYDk6k6kyK7GxZgvh0kadLor0O85Pb8fDwk84yV5r', '2019-06-18 08:34:39', '2019-06-18 08:36:17', 3),
(9, 'rayan', 'rayan@gmail.com', '$2y$10$3RvivdZeMOHNaPpx7vf3QOxvemNeZzDjbjVo6GRT3FMPTv..6CW3i', 'iUKprujxRRgckzITYb8xFWjMkg9inqMI7oU4LSJLwJwoHYEw3vuPvbhPhZlx', '2019-06-25 12:27:08', '2019-07-06 23:45:52', 2),
(10, 'manil', 'manil@gmail.com', '$2y$10$SYcCOKpoIGM.8GYqvwvhvuNAOevwlpKBj5/TQU2LeS5p49d/E1v/a', 'ipQeHaAxGQ0okI4oOyXYd30BwicM3wc4TeCjsgKKlXG5nDghMRZT6e7jHtEQ', '2019-07-08 21:59:18', '2019-07-08 22:59:36', 3),
(11, 'larbi', 'larbi@gmail.com', '$2y$10$X7INwVRFO01f05irJ9k9LOV4mZ3JBZp2blp4224py0AOX1llLF6c2', 'UgUnQsRTLZ0DOhDQRLj6ZW5VkSSWp7lDc9cd2lINWVy6U9td4DR7vRzaxn29', '2019-07-08 23:02:48', '2019-07-09 06:49:28', 10),
(12, 'nassime', 'nassime@gmai.com', '$2y$10$mR1ad5hJDm.gqweA/c5U/uiFj9q.COXBgp9forZCGFRRMYpGZcv2u', '3NnUU5Lt3bhUZ0PAbI7MLuT04vG31n8EtlTbxnueCjJUKmXBIC3tqbH1fE05', '2019-07-09 07:41:14', '2019-07-09 07:53:47', 3),
(13, 'mouna', 'mouna@gmail.com', '$2y$10$BWy2Q/y.qqbGzzqjnL3ad.CHTE71cekvYAP7CYHlFdAPQbSSQxVoa', 'XmfFtKyP9V5ykatepLwwlMVao68447A2L0HvS8Z7EpvvEgvleX3JOR2zNVt8', '2019-07-09 12:27:10', '2019-07-09 12:27:10', 10),
(14, 'malik', 'malik@gmail.com', '$2y$10$.dZ5BXwa4YgRwUV3ghBLYeqab06wJFFkQuPBk7ricePcmCXS9BV5G', 'm4RyGTG2OvRDyJvlQxiEln5gEY1j3FRiL4t6U5mPb9UygxfUoDOe2RQVs45N', '2019-07-09 12:38:55', '2019-07-10 08:47:21', 10),
(15, 'imad96', 'imad96@gmail.com', '$2y$10$58BLe8tUIDqjAxqKxLgPiuJWvy.I7iCm7w70Opzs6OsDXO82cgp8m', 'JsGBmxZl5c1v33pqrsc4SbKMW5iuMR0Cwi9BG7a7lyeJWVpyEggvCYIr5NMC', '2019-07-09 20:16:43', '2019-07-10 17:18:51', 2),
(16, 'samira', 'samira@gmail.com', '$2y$10$IapSrNkMy25n6euctoJmxO4xF/9Il6nNT.OFuYJXaaaNlMcxpMIIO', 'jMeLAOvHxzwyZFAoZcsopmmRXwEJDkLy04lVyinHw3nrfjwabplr90JkKqWp', '2019-07-09 21:01:23', '2019-07-09 21:01:23', 10),
(17, 'sarah', 'sarah@gmail.com', '$2y$10$5b0Acns4rCDuF/QrosMSSuaPNYpEEjepavKbsETzGoWhtsJg2IM0C', 'XOqmGZ7DUGFx2iIT7WMn1rJNynLKc6tAVyB85N4hmb1gjN0B0eERSd6PWVdo', '2019-07-09 21:02:03', '2019-07-09 21:34:33', 10),
(18, 'karim', 'karim@gmail.com', '$2y$10$o9QhhbfC5SudPZXPFfrypOf0XEHcqYctG2UdvEE8OyiFWiJSwxltS', 'SFl6JjUuOQXf6oYHlhWTwAvsD0BtLQYctIMo5eGguvBW91yhmC7pna7nu8iv', '2019-07-09 21:02:42', '2019-07-09 21:02:42', 10),
(19, 'user1', 'user1@gmail.com', '$2y$10$QT6kqhAxPlm.2u7OnqvKueip.4cvYYQV/B10naqSEsnnBIWDVeSXC', 'ZrwgUnPIwNOPZB3Sf755YQRuLqWgZ1z15VaC2TYjjg9sA93PvpyIzHmj7cYV', '2019-07-11 04:45:25', '2019-07-11 04:45:25', 10),
(20, 'user2', 'user2@gmail.com', '$2y$10$wajS3Hyqm6W2qv4Ipvblg.7jVW5zBIHPSWf7nbbHPbhe4y1KNPNqa', 'gGWlLfls5q5pcKR2msnymG2cpZr5rwLIGFOJoPfH1o1tORcRPbGhsIIzvCik', '2019-07-11 04:46:00', '2019-07-11 04:46:00', 10),
(21, 'user3', 'user3@gmail.com', '$2y$10$Bkn2QJJpkwOoiciwkF/N5eXAiUwV5I4a4pbT5z5r4COmBHUEhX0Ne', 'RTsrVfT2YBz3eB5YMiMoD3hB4MaMWw2IpH9ngZU8JhNJKiFGYr41eb3OEYPl', '2019-07-11 04:46:52', '2019-07-11 04:46:52', 10);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_matricule_tech_foreign` FOREIGN KEY (`matricule_tech`) REFERENCES `techniciens` (`matricule`);

--
-- Contraintes pour la table `techniciens`
--
ALTER TABLE `techniciens`
  ADD CONSTRAINT `techniciens_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
