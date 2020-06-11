-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 11 jun 2020 om 13:45
-- Serverversie: 10.4.11-MariaDB
-- PHP-versie: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eindwerkjuni`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_firstname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_lastname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `availability_id` int(11) NOT NULL,
  `psych_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `appointments`
--

INSERT INTO `appointments` (`id`, `client_firstname`, `client_lastname`, `client_email`, `availability_id`, `psych_id`, `created_at`, `updated_at`) VALUES
(1, 'Karel', 'Smeets', 'k@s.com', 10, 6, '2020-06-10 14:49:16', '2020-06-10 14:49:16'),
(2, 'Voornaam', 'Achternaam', 'v@a.com', 10, 6, '2020-06-10 15:10:27', '2020-06-10 15:10:27'),
(3, 'G', 'H', 'g@h.com', 9, 1, '2020-06-10 15:25:30', '2020-06-10 15:25:30'),
(4, 'Karel', 'Smeets', 'k@s.com', 11, 1, '2020-06-11 06:29:47', '2020-06-11 06:29:47'),
(5, 'F', 'H', 'f@h.com', 12, 7, '2020-06-11 09:35:18', '2020-06-11 09:35:18');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `availabilities`
--

CREATE TABLE `availabilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `subject` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `psych_id` int(11) NOT NULL,
  `is_taken` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `availabilities`
--

INSERT INTO `availabilities` (`id`, `date`, `time`, `subject`, `created_at`, `updated_at`, `psych_id`, `is_taken`) VALUES
(1, '2020-06-08', '10:00:00', 'Beschikbaarheid 1A', NULL, '2020-06-03 06:22:55', 0, 0),
(2, '2020-06-08', '11:00:00', 'Beschikbaarheid 2', NULL, NULL, 0, 0),
(3, '2020-06-02', '16:00:00', 'Beschikbaarheid 3', NULL, NULL, 0, 0),
(4, '2020-06-01', '19:00:00', 'Beschikbaarheid 4', NULL, NULL, 0, 0),
(5, '2020-06-05', '09:00:00', 'Beschikbaarheid 5', '2020-06-01 14:33:17', '2020-06-01 14:33:17', 0, 0),
(7, '2020-06-08', '11:00:00', 'Beschikbaarheid 6', '2020-06-03 11:09:36', '2020-06-03 11:09:36', 0, 0),
(9, '2020-06-22', '10:00:00', 'Beschikbaarheid 9', '2020-06-08 16:49:27', '2020-06-10 15:25:30', 1, 1),
(10, '2020-06-22', '14:00:00', 'Afspraak 1', '2020-06-10 13:32:41', '2020-06-10 15:10:27', 6, 1),
(11, '2020-06-24', '10:00:00', 'Beschikaarheid 5', NULL, '2020-06-11 06:29:47', 1, 1),
(12, '2020-06-30', '14:00:00', '30/06/2020', '2020-06-11 09:31:25', '2020-06-11 09:35:18', 7, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_05_30_121410_create_psycholoogs_table', 1),
(4, '2020_06_01_145633_create_availabilities_table', 2),
(5, '2014_10_12_100000_create_password_resets_table', 3),
(6, '2020_06_03_122310_add_user_id_to_availabilities', 4),
(7, '2020_06_07_133100_add_user_id_to_psycholoogs_table', 5),
(8, '2020_06_07_150841_add_psych_id_to_availabilities_table', 6),
(9, '2020_06_10_075557_add_created_at_and__updated_at_to_psycholoogs_table', 7),
(10, '2020_06_10_075944_add_timestamps_to_psycholoogs_table', 8),
(11, '2020_06_10_115652_create_appointments_table', 9),
(12, '2020_06_10_165429_add_is_taken_to_availabilities_table', 10);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `psycholoogs`
--

CREATE TABLE `psycholoogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialisation` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(750) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `psycholoogs`
--

INSERT INTO `psycholoogs` (`id`, `firstname`, `lastname`, `email`, `telephone`, `address`, `zipcode`, `city`, `specialisation`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Lore', 'Lenaerts', 'lorelenaerts@hotmail.com', '+32456987256', 'Kempenseweg 13 B', '3690', 'Zutendaal', 'Gezinstherapie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac tortor condimentum lorem convallis auctor id vel felis. Mauris quis finibus libero', 2, NULL, NULL),
(2, 'Els', 'Merken', 'els@psycholoog.be', '+32478995632', 'Congostraat 23', '3600', 'Genk', 'Mental coaching', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac tortor condimentum lorem convallis auctor id vel felis. Mauris quis finibus libero', 0, NULL, NULL),
(6, 'kdf,', 'fke,', 'k,', '00', 'k,f', 'kef,', 'Diepenbeek', 'klf,', 'ffff', 3, '2020-06-10 13:21:44', '2020-06-10 13:21:44'),
(7, 'Ronald', 'Derksen', 'r@d.be', '0478', 'Hoogstraat 30', '3690', 'Zutendaal', 'Oplossingsgerichte therapie, EMDR, Schematherapie', 'Ronald heeft als GZ-psycholoog ruime ervaring in diagnostiek (o.a. persoonlijkheid, AD(H)D) en het behandelen van mensen met (lichte) persoonlijkheidsproblematiek, AD(H)D, depressieve klachten, angstklachten, werk- en stressgerelateerde klachten/burnout en trauma.\r\n\r\nWerkt met symptomen als: Aanpassings- en verwerkingsproblemen, ADD, ADHD, Angst, Burn-out en overspannenheid, Depressie, Problemen met dwangmatigheid, Onzekerheid en faalangst, Persoonlijkheidsproblemen, Psychotraumatische klachten, Rouw, Somatoforme klachten, Somberheid, Stemmingsklachten, Stressklachten, Trauma.', 4, '2020-06-11 09:24:13', '2020-06-11 09:24:13');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Frauke', 'f@f.com', NULL, '$2y$10$vPXvx.4Jq.mQD5KyOZW9PeYPV2rDN/zOKobmCYVKzbCeCfLgOUIMK', NULL, '2020-06-03 07:42:29', '2020-06-03 07:42:29'),
(2, 'Frauke', 'f@h.com', NULL, '$2y$10$8xwNRztq2ucWls0tScfRSO2QbXiZtn79EDdRjTGt.JGoxjgwdB2sO', NULL, '2020-06-07 11:54:33', '2020-06-07 11:54:33'),
(3, 'Gemma', 'g@h.com', NULL, '$2y$10$BMHaT5ZRzrdvXodwCOyXROKufXhTdRV3r5aqNcSC3Kh2HMzqmsttq', NULL, '2020-06-08 09:11:41', '2020-06-08 09:11:41'),
(4, 'Ronald Derksen', 'r@d.be', NULL, '$2y$10$0Gd5Ic8MGopZTs9GnlcpVu8XOZoAOl37GlkwMUNn8dFRBEcGETDnC', NULL, '2020-06-11 09:17:43', '2020-06-11 09:17:43');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `availabilities`
--
ALTER TABLE `availabilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexen voor tabel `psycholoogs`
--
ALTER TABLE `psycholoogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `availabilities`
--
ALTER TABLE `availabilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT voor een tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT voor een tabel `psycholoogs`
--
ALTER TABLE `psycholoogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
