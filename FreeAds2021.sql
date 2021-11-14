-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 03 nov. 2021 à 18:39
-- Version du serveur :  10.3.31-MariaDB-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `FreeAds2021`
--

-- --------------------------------------------------------

--
-- Structure de la table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ads`
--

INSERT INTO `ads` (`id`, `title`, `description`, `picture`, `price`, `location`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Red Dead Redemption 2', 'Actuellement il n\'y a pas de description détaillée pour cet article.', 'public/images/image1.jpg', 18, 'Paris', 14, 2, '2021-11-03 17:03:14', '2021-11-03 17:03:14'),
(2, 'Dragon Ball Z', 'Actuellement il n\'y a pas de description détaillée pour cet article.', 'public/images/image2.jpg', 15, 'Lyon', 6, 2, '2021-11-03 17:05:51', '2021-11-03 17:05:51'),
(3, 'Ghost of Tsushima', 'Actuellement il n\'y a pas de description détaillée pour cet article.', 'public/images/image3.jpg', 18, 'Toulouse', 9, 2, '2021-11-03 17:05:51', '2021-11-03 17:05:51'),
(4, 'Death Stranding', 'Actuellement il n\'y a pas de description détaillée pour cet article.', 'public/images/image4.jpg', 25, 'Toulouse', 9, 2, '2021-11-03 17:05:51', '2021-11-03 17:05:51'),
(5, 'Spiderman', 'Actuellement il n\'y a pas de description détaillée pour cet article.', 'public/images/image5.jpg', 25, 'Nice', 20, 2, '2021-11-03 17:05:51', '2021-11-03 17:05:51'),
(6, 'Code de la route', 'Actuellement il n\'y a pas de description détaillée pour cet article.', 'public/images/image6.jpg', 19, 'Brest', 5, 4, '2021-11-03 17:05:51', '2021-11-03 17:05:51'),
(7, 'Les Sims 4', 'Actuellement il n\'y a pas de description détaillée pour cet article.', 'public/images/image7.jpg', 9, 'Paris', 1, 4, '2021-11-03 17:05:51', '2021-11-03 17:05:51'),
(8, 'Farming-Simulator', 'Actuellement il n\'y a pas de description détaillée pour cet article.', 'public/images/image8.jpg', 12, 'Montpellier', 2, 4, '2021-11-03 17:05:51', '2021-11-03 17:05:51'),
(9, 'GTA V', 'Actuellement il n\'y a pas de description détaillée pour cet article.', 'public/images/image9.jpg', 23, 'Nice', 4, 3, '2021-11-03 17:05:51', '2021-11-03 17:05:51'),
(10, 'Lego Star Wars ', 'Actuellement il n\'y a pas de description détaillée pour cet article.', 'public/images/image10.jpg', 19, 'Nice', 4, 3, '2021-11-03 17:05:51', '2021-11-03 17:05:51'),
(11, 'Assassin \'s Creed', 'Actuellement il n\'y a pas de description détaillée pour cet article.', 'public/images/image11.jpg', 26, 'Nice', 4, 3, '2021-11-03 17:05:51', '2021-11-03 17:05:51'),
(12, 'Mario Party 9', 'Actuellement il n\'y a pas de description détaillée pour cet article.', 'public/images/image12.jpg', 6, 'Bordeaux', 7, 5, '2021-11-03 17:05:51', '2021-11-03 17:05:51'),
(13, 'Batman Arkham City', 'Actuellement il n\'y a pas de description détaillée pour cet article.', 'public/images/image13.jpg', 8, 'Bordeaux', 7, 5, '2021-11-03 17:05:51', '2021-11-03 17:05:51'),
(14, 'Just Dance 2014', 'Actuellement il n\'y a pas de description détaillée pour cet article.', 'public/images/image14.jpg', 5, 'Oyonnax', 13, 5, '2021-11-03 17:05:51', '2021-11-03 17:05:51'),
(15, 'Donkey Kong Country', 'Actuellement il n\'y a pas de description détaillée pour cet article.', 'public/images/image15.jpg', 19, 'Amiens', 16, 1, '2021-11-03 17:05:51', '2021-11-03 17:05:51'),
(16, 'Mario Kart 8 Deluxe', 'Actuellement il n\'y a pas de description détaillée pour cet article.', 'public/images/image16.jpg', 25, 'Amiens', 16, 1, '2021-11-03 17:05:51', '2021-11-03 17:05:51'),
(17, 'Age De Glace', 'Actuellement il n\'y a pas de description détaillée pour cet article.', 'public/images/image17.jpg', 22, 'Amiens', 16, 1, '2021-11-03 17:05:51', '2021-11-03 17:05:51'),
(18, 'Programme du Dr Kawashima', 'Actuellement il n\'y a pas de description détaillée pour cet article.', 'public/images/image18.jpg', 17, 'Toulouse', 11, 1, '2021-11-03 17:05:51', '2021-11-03 17:05:51'),
(19, 'Resident Evil', 'Actuellement il n\'y a pas de description détaillée pour cet article.', 'public/images/image19.jpg', 15, 'Grenoble', 10, 6, '2021-11-03 17:05:51', '2021-11-03 17:05:51'),
(20, 'Le Seigneur des Anneaux', 'Actuellement il n\'y a pas de description détaillée pour cet article.', 'public/images/image20.jpg', 13, 'Paris', 17, 6, '2021-11-03 17:05:51', '2021-11-03 17:05:51');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Switch', '2021-11-03 16:55:51', '2021-11-03 16:55:51'),
(2, 'PlayStation 4', '2021-11-03 16:56:17', '2021-11-03 16:56:17'),
(3, 'Xbox', '2021-11-03 16:56:37', '2021-11-03 16:56:37'),
(4, 'PC', '2021-11-03 16:56:57', '2021-11-03 16:56:57'),
(5, 'Wii', '2021-11-03 16:58:54', '2021-11-03 16:58:54'),
(6, 'Gamecube', '2021-11-03 16:59:18', '2021-11-03 16:59:18');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_03_133146_create_ads_table', 1),
(6, '2021_11_03_161419_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `email_verified_at`, `phone_number`, `nickname`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Camren Marks II', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rogahn.kendra@example.org', '2021-11-03 15:37:15', '0653222813', 'schmitt.kaylin', 0, '1t869bcKrZ', '2021-11-03 15:37:15', '2021-11-03 15:37:15'),
(2, 'Alivia Hoppe', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'emmanuelle51@example.com', '2021-11-03 15:37:15', '0603234074', 'delphia.upton', 1, 'zEZwMKjxXI', '2021-11-03 15:37:15', '2021-11-03 15:37:15'),
(3, 'Jeanne Champlin PhD', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'parker.sophia@example.org', '2021-11-03 15:37:15', '0602110880', 'ymante', 0, 'h6fYU3sgNQ', '2021-11-03 15:37:15', '2021-11-03 15:37:15'),
(4, 'Dr. Jeffery Leuschke DDS', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'buck.wuckert@example.org', '2021-11-03 15:37:15', '0609989121', 'wschmitt', 1, 'VgVxiELrKQ', '2021-11-03 15:37:15', '2021-11-03 15:37:15'),
(5, 'Stephania Rohan', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vaughn09@example.net', '2021-11-03 15:37:15', '0690262185', 'brad.steuber', 1, 'WVdIGXk2ds', '2021-11-03 15:37:15', '2021-11-03 15:37:15'),
(6, 'Ransom Reinger DVM', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'abbott.louvenia@example.net', '2021-11-03 15:37:15', '0673827336', 'fadel.brice', 0, 'uwSd4tYfiO', '2021-11-03 15:37:15', '2021-11-03 15:37:15'),
(7, 'Dr. Ola Bergnaum', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ricardo.rippin@example.net', '2021-11-03 15:37:15', '0608226095', 'mcglynn.dorian', 1, 'ehisL9yOrA', '2021-11-03 15:37:15', '2021-11-03 15:37:15'),
(8, 'Aric Kihn', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nitzsche.alia@example.org', '2021-11-03 15:37:15', '0634447351', 'rubye85', 1, 'LfphPn3B3j', '2021-11-03 15:37:15', '2021-11-03 15:37:15'),
(9, 'Dr. Gayle Jacobson', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'beaulah.schroeder@example.com', '2021-11-03 15:37:15', '0628781664', 'nya.rodriguez', 1, 'Ei6YZ9RAE3', '2021-11-03 15:37:15', '2021-11-03 15:37:15'),
(10, 'Ward Torphy', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jeff72@example.com', '2021-11-03 15:37:15', '0614790551', 'angela.mohr', 1, 'syuNTsbfB4', '2021-11-03 15:37:15', '2021-11-03 15:37:15'),
(11, 'Luna Rutherford', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ocarroll@example.org', '2021-11-03 15:37:15', '0624829289', 'alyce.abshire', 0, 'nc2oNOpc3j', '2021-11-03 15:37:15', '2021-11-03 15:37:15'),
(12, 'Claudia McClure IV', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bashirian.narciso@example.com', '2021-11-03 15:37:15', '0647935946', 'zieme.emory', 1, 'd5Kgf0zuq4', '2021-11-03 15:37:15', '2021-11-03 15:37:15'),
(13, 'Laura Pfeffer', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'windler.nico@example.org', '2021-11-03 15:37:15', '0678439399', 'hahn.vicenta', 0, 'pED7EofSZO', '2021-11-03 15:37:15', '2021-11-03 15:37:15'),
(14, 'Reagan Gulgowski', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'morissette.laurel@example.net', '2021-11-03 15:37:15', '0691638426', 'qemmerich', 1, 'T2k8Y6IOVE', '2021-11-03 15:37:15', '2021-11-03 15:37:15'),
(15, 'Prof. Newton Terry DVM', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'weston.krajcik@example.com', '2021-11-03 15:37:15', '0686443961', 'sadie99', 1, '19uuqOGGvL', '2021-11-03 15:37:15', '2021-11-03 15:37:15'),
(16, 'Juanita Beahan', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oreynolds@example.com', '2021-11-03 15:37:15', '0649297601', 'xwolff', 0, '78XKvN4far', '2021-11-03 15:37:15', '2021-11-03 15:37:15'),
(17, 'Chadd Schinner III', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'joanne53@example.net', '2021-11-03 15:37:15', '0610572236', 'magnus73', 0, 'Pc433RzkRO', '2021-11-03 15:37:15', '2021-11-03 15:37:15'),
(18, 'Kamryn Gerlach', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bradtke.brandyn@example.net', '2021-11-03 15:37:15', '0692808852', 'tpadberg', 0, 'IHbSGem9YT', '2021-11-03 15:37:15', '2021-11-03 15:37:15'),
(19, 'Ally Gislason', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qweber@example.net', '2021-11-03 15:37:15', '0621132188', 'kimberly.bruen', 1, 'QkNSY3MYGQ', '2021-11-03 15:37:15', '2021-11-03 15:37:15'),
(20, 'Jaylon Wisoky', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'neil.lind@example.org', '2021-11-03 15:37:15', '0618593855', 'gorczany.magdalena', 1, 'RUBIW7OOkM', '2021-11-03 15:37:15', '2021-11-03 15:37:15');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ads_title_unique` (`title`),
  ADD KEY `ads_user_id_foreign` (`user_id`),
  ADD KEY `ads_category_id_foreign` (`category_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_login_unique` (`login`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
