-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 02 déc. 2024 à 15:00
-- Version du serveur : 8.0.30
-- Version de PHP : 8.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wuras`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--


INSERT INTO `articles` (`id`, `name`, `description`, `price`, `discount_type`, `discount_value`, `status`, `quantite`, `couverture`, `slug`, `created_at`, `updated_at`, `images`) VALUES
(1, 'Article 1', '<p>Desciption </p>', 100000.00, 'none', NULL, 'published', 4.00, 'images/default.jpg', 'nom-de-larticlehh', '2024-12-02 13:26:36', '2024-12-02 13:26:36', NULL),
(2, 'Article 2', '', 50000.00, 'none', NULL, 'published', 3.00, 'images/articles/couverture/2_couverture.png', 'nom-de-larticlevdf', '2024-12-02 13:27:31', '2024-12-02 13:27:31', NULL),
(3, 'Article 3', '', 54000.00, 'none', NULL, 'published', 3.00, 'images/articles/couverture/3_couverture.png', 'nom-de-lafdgsrticlehh', '2024-12-02 14:21:47', '2024-12-02 14:21:47', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `article_category`
--


--
-- Déchargement des données de la table `article_category`
--

INSERT INTO `article_category` (`id`, `article_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `article_tag`
--


--
-- Déchargement des données de la table `article_tag`
--

INSERT INTO `article_tag` (`id`, `article_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `article_variation`
--

--
-- Déchargement des données de la table `article_variation`
--

INSERT INTO `article_variation` (`id`, `article_id`, `type`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 'Couleur', '#FF5733', '2024-12-02 13:26:36', '2024-12-02 13:26:36'),
(2, 2, 'Couleur', '#FF5733', '2024-12-02 13:27:31', '2024-12-02 13:27:31'),
(3, 3, 'Couleur', '#FF5733', '2024-12-02 14:21:47', '2024-12-02 14:21:47');

-- --------------------------------------------------------

--
-- Structure de la table `banners`
--


-- --------------------------------------------------------

--
-- Structure de la table `cache`
--


-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--


-- --------------------------------------------------------

--
-- Structure de la table `categories`
--


--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'Ordinateurs', NULL, 'images/default.jpg', NULL, NULL),
(2, 'Composants PC', NULL, 'images/default.jpg', NULL, NULL),
(3, 'Imprimantes et scanners', NULL, 'images/default.jpg', NULL, NULL),
(4, 'Logiciels et licences', NULL, 'images/default.jpg', NULL, NULL),
(5, 'Stockage et mémoire', NULL, 'images/default.jpg', NULL, NULL),
(6, 'Accessoires informatiques', NULL, 'images/default.jpg', NULL, NULL),
(7, 'Réseaux et connectivité', NULL, 'images/default.jpg', NULL, NULL),
(8, 'Casques et audio', NULL, 'images/default.jpg', NULL, NULL),
(9, 'Moniteurs et écrans', NULL, 'images/default.jpg', NULL, NULL),
(10, 'Gaming et eSports', NULL, 'images/default.jpg', NULL, NULL),
(11, 'Objets connectés', NULL, 'images/default.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--


-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--


-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_27_142425_create_categories_table', 1),
(5, '2024_11_27_142514_create_subcategories_table', 1),
(6, '2024_11_27_142601_create_articles_table', 1),
(7, '2024_11_27_150351_create_tags_table', 1),
(8, '2024_11_27_150439_create_product_tag_table', 1),
(9, '2024_11_27_165220_add_images_to_articles_table', 1),
(10, '2024_11_28_103626_create_article_category_table', 1),
(11, '2024_11_28_104830_create_product_image_table', 1),
(12, '2024_11_29_140607_create_article_tag_table', 1),
(13, '2024_11_29_143152_create_article_variation_table', 1),
(14, '2024_11_29_144103_create_variations_table', 1),
(15, '2024_11_29_154503_create_banners_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--
-- --------------------------------------------------------

--
-- Structure de la table `product_image`
--

--
-- Déchargement des données de la table `product_image`
--

INSERT INTO `product_image` (`id`, `article_id`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 3, 'storage/images/articles/674dc27be4e6d.png', '2024-12-02 14:21:47', '2024-12-02 14:21:47'),
(2, 3, 'storage/images/articles/674dc27be68b3.png', '2024-12-02 14:21:47', '2024-12-02 14:21:47'),
(3, 3, 'storage/images/articles/674dc27be7c69.png', '2024-12-02 14:21:47', '2024-12-02 14:21:47'),
(4, 3, 'storage/images/articles/674dc27be8f34.png', '2024-12-02 14:21:47', '2024-12-02 14:21:47'),
(5, 3, 'storage/images/articles/674dc27bea259.png', '2024-12-02 14:21:47', '2024-12-02 14:21:47');

-- --------------------------------------------------------

--
-- Structure de la table `product_tag`
--

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Dne2rWwmjHGda5O4SNBeLE9uD8gl3bNVqwZVxC9I', NULL, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiajFYaGRzSDRGdkhzejQ2bmMyb2lJRUZvR1FzUWl0V0pyYlkxcUxSaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG9wL25vbS1kZS1sYXJ0aWNsZWhoIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1733151423);

-- --------------------------------------------------------

--
-- Structure de la table `subcategories`
--

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `tag_thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'yop', 'images/tags/kHQH1rZMhjnrOPSJLNnLsY5bdmnuNaebuqe3yE14.png', '2024-12-02 13:25:38', '2024-12-02 13:25:38');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

-- --------------------------------------------------------

--
-- Structure de la table `variations`
--

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`);

--
-- Index pour la table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_category_article_id_foreign` (`article_id`),
  ADD KEY `article_category_category_id_foreign` (`category_id`);

--
-- Index pour la table `article_tag`
--
ALTER TABLE `article_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_tag_article_id_foreign` (`article_id`),
  ADD KEY `article_tag_tag_id_foreign` (`tag_id`);

--
-- Index pour la table `article_variation`
--
ALTER TABLE `article_variation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_variation_article_id_foreign` (`article_id`);

--
-- Index pour la table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Index pour la table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_image_article_id_foreign` (`article_id`);

--
-- Index pour la table `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_tag_article_id_foreign` (`article_id`),
  ADD KEY `product_tag_tag_id_foreign` (`tag_id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `variations`
--
ALTER TABLE `variations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `variations_article_id_foreign` (`article_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `article_tag`
--
ALTER TABLE `article_tag`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `article_variation`
--
ALTER TABLE `article_variation`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `variations`
--
ALTER TABLE `variations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article_category`
--
ALTER TABLE `article_category`
  ADD CONSTRAINT `article_category_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `article_variation`
--
ALTER TABLE `article_variation`
  ADD CONSTRAINT `article_variation_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `product_tag`
--
ALTER TABLE `product_tag`
  ADD CONSTRAINT `product_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `variations`
--
ALTER TABLE `variations`
  ADD CONSTRAINT `variations_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
