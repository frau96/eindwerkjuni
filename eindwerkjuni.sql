-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 jun 2020 om 18:47
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
(26, 'Floris', 'Wolfs', 'floriswolfs@hotmail.com', 31, 10, '2020-06-19 16:47:55', '2020-06-19 16:47:55'),
(27, 'Jana', 'Slegers', 'janaslegers@gmail.com', 33, 11, '2020-06-19 16:51:49', '2020-06-19 16:51:49'),
(28, 'Dirk', 'Henrard', 'dirk_henrard@telenet.be', 36, 12, '2020-06-19 16:54:36', '2020-06-19 16:54:36'),
(33, 'Lore', 'Laenen', 'lorelaenen@hotmail.com', 46, 7, '2020-06-20 14:32:56', '2020-06-20 14:32:56');

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
(13, '2020-06-30', '17:00:00', '30/06/2020', '2020-06-11 11:40:49', '2020-06-15 16:36:08', 7, 1),
(15, '2020-06-12', '19:00:00', '12/06/2020', '2020-06-12 07:45:20', '2020-06-12 14:55:05', 9, 0),
(25, '2020-06-12', '18:00:00', 'Afspraak 12/06/2020', '2020-06-19 12:29:16', '2020-06-19 12:29:16', 7, 0),
(26, '2020-07-01', '15:00:00', 'Afspraak 01/07/2020', '2020-06-19 12:29:54', '2020-06-20 10:59:40', 7, 0),
(27, '2020-06-30', '10:00:00', 'Afspraak 30/06/20', '2020-06-19 16:44:07', '2020-06-19 16:44:07', 9, 0),
(28, '2020-06-26', '18:00:00', 'Afspraak 26/06/20', '2020-06-19 16:44:47', '2020-06-20 11:05:05', 9, 0),
(29, '2020-06-29', '19:00:00', 'Afspraak 29/06/2020', '2020-06-19 16:46:10', '2020-06-19 16:46:10', 10, 0),
(30, '2020-06-29', '20:00:00', 'Afspraak 29/06/2020 (2)', '2020-06-19 16:46:21', '2020-06-19 16:46:21', 10, 0),
(31, '2020-06-29', '21:00:00', 'Afspraak 29/06/2020 (3)', '2020-06-19 16:46:25', '2020-06-19 16:47:55', 10, 1),
(32, '2020-07-01', '17:00:00', 'Afspraak met Lisanne De Jager', '2020-06-19 16:50:22', '2020-06-19 16:50:22', 11, 0),
(33, '2020-07-03', '16:00:00', 'Afspraak met Lisanne De Jager', '2020-06-19 16:50:39', '2020-06-19 16:51:49', 11, 1),
(34, '2020-07-03', '20:00:00', 'Afspraak met Lisanne De Jager', '2020-06-19 16:50:46', '2020-06-19 16:50:46', 11, 0),
(35, '2020-06-24', '09:00:00', 'Afsprak psycholoog Rachel Martha', '2020-06-19 16:53:26', '2020-06-19 16:53:26', 12, 0),
(36, '2020-06-24', '10:00:00', 'Afspraak psycholoog Rachel Martha', '2020-06-19 16:53:37', '2020-06-19 16:54:36', 12, 1),
(37, '2020-06-24', '13:00:00', 'Afspraak psycholoog Rachel Martha', '2020-06-19 16:53:42', '2020-06-19 16:53:42', 12, 0),
(38, '2020-06-30', '19:30:00', 'Afspraak met psycholoog Emma', '2020-06-19 16:56:07', '2020-06-19 16:56:07', 13, 0),
(39, '2020-06-30', '17:30:00', 'Afspraak met psycholoog Emma', '2020-06-19 16:56:15', '2020-06-19 16:56:15', 13, 0),
(40, '2020-06-26', '14:30:00', 'Afspraak psychotherapeut Jeroen', '2020-06-19 16:58:11', '2020-06-19 16:58:11', 14, 0),
(41, '2020-06-26', '18:00:00', 'Afspraak psychotherapeut Jeroen', '2020-06-19 16:58:21', '2020-06-19 16:58:21', 14, 0),
(42, '2020-07-03', '09:30:00', 'Afspraak met Alinah Li - psychotherapeut', '2020-06-19 17:00:05', '2020-06-19 17:00:05', 15, 0),
(43, '2020-07-03', '10:30:00', 'Afspraak met Alinah Li - psychotherapeut', '2020-06-19 17:00:13', '2020-06-19 17:00:13', 15, 0),
(44, '2020-07-03', '11:30:00', 'Afspraak met Alinah Li - psychotherapeut', '2020-06-19 17:00:21', '2020-06-19 17:00:21', 15, 0),
(46, '2020-06-30', '20:00:00', 'Afspraak Ronald Derksen', '2020-06-20 07:46:15', '2020-06-20 14:32:56', 7, 1),
(48, '2020-06-22', '17:00:00', 'Afspraak Ronald Derksen', '2020-06-20 09:54:55', '2020-06-20 11:08:22', 7, 0),
(49, '2020-06-29', '10:00:00', 'Afspraak met Ronald Derksen', '2020-06-20 10:06:16', '2020-06-20 10:06:16', 7, 0);

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
(12, '2020_06_10_165429_add_is_taken_to_availabilities_table', 10),
(13, '2020_06_11_163458_add_photo_to_psycholoogs_table', 11);

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
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `psycholoogs`
--

INSERT INTO `psycholoogs` (`id`, `firstname`, `lastname`, `email`, `telephone`, `address`, `zipcode`, `city`, `specialisation`, `description`, `user_id`, `created_at`, `updated_at`, `photo`) VALUES
(7, 'Ronald', 'Derksen', 'r@d.be', '0478', 'Hoogstraat 30', '3690', 'Zutendaal', 'Oplossingsgerichte therapie, EMDR, Schematherapie', 'Ronald heeft als GZ-psycholoog ruime ervaring in diagnostiek (o.a. persoonlijkheid, AD(H)D) en het behandelen van mensen met (lichte) persoonlijkheidsproblematiek, AD(H)D, depressieve klachten, angstklachten, werk- en stressgerelateerde klachten/burnout en trauma.\r\n\r\nWerkt met symptomen als: Aanpassings- en verwerkingsproblemen, ADD, ADHD, Angst, Burn-out en overspannenheid, Depressie, Problemen met dwangmatigheid, Onzekerheid en faalangst, Persoonlijkheidsproblemen, Psychotraumatische klachten, Rouw, Somatoforme klachten, Somberheid, Stemmingsklachten, Stressklachten, Trauma.', 4, '2020-06-11 09:24:13', '2020-06-16 12:14:47', 'Ronald_1592316887.jpg'),
(9, 'Pim', 'Joosten', 'p@j.be', '0478', 'Nieuwland 20', '3600', 'Genk', 'Cliëntgerichte therapie', 'Pim heeft veel respect voor ieders eigenheid. In zijn gesprekken streeft hij naar openheid, aandacht en vertrouwen. Zodoende ontstaat er ruimte voor nieuwe inzichten, antwoorden en oplossingen. Pim maakt ook graag gebruik van zijn creativiteit, nuchterheid en humor.\r\n\r\nWerkt met symptomen als: Aanpassings- en verwerkingsproblemen, Angst, Burn-out en overspannenheid, Depressie, Gedragsproblemen, Identiteitsproblemen, Onzekerheid en faalangst, Persoonlijkheidsproblemen, Psychotraumatische klachten, Rouw, Slaapproblemen, Somatoforme klachten, Somberheid, Stemmingsklachten, Stressklachten.', 5, '2020-06-12 07:23:07', '2020-06-12 07:23:07', 'pim_1591953787.jpg'),
(10, 'Iris', 'Zonneveld', 'i@z.be', '0476', 'Congostraat 23', '3600', 'Genk', 'Oplossingsgerichte therapie', 'Binnen de behandeling vindt zij het belangrijk om een vertrouwde behandelrelatie op te bouwen. Haar stijl omschrijft ze als open en accepterend, vaak met humor. Ze ziet dat veel klachten te maken hebben met verwachtingen en eisen van buitenaf. Door deze druk is het niet altijd gemakkelijk om je eigen koers te varen. Iris onderzoekt je klachten en kijkt samen met jou naar wat jouw waarden en talenten zijn. Met die kennis is het gemakkelijker om jouw richting in het leven te bepalen.\r\n\r\nWerkt met symptomen als: Aanpassings- en verwerkingsproblemen, ADHD, Angst, Autisme, Burn-out en overspannenheid, Onzekerheid en faalangst, Rouw, Stemmingsklachten, Stressklachten.', 6, '2020-06-13 10:50:01', '2020-06-13 10:50:01', 'Iris_1592052601.jpg'),
(11, 'Lisanne', 'De Jager', 'l@dj.be', '0476786654', 'Gieterijstraat 14', '3600', 'Genk', 'Oplossingsgerichte therapie, EMDR', 'De kracht van Lisanne is het vormen van een goede behandelrelatie. Zij is laagdrempelig en open in het contact. Vaste onderdelen van haar werkwijze zijn het aansluiten en samen de weg zoeken. En bouwen aan de gewenste verandering.\r\n\r\nWerkt met symptomen als: Aanpassings- en verwerkingsproblemen, Angst, Burn-out en overspannenheid, Depressie, Identiteitsproblemen, Onzekerheid en faalangst, Psychotraumatische klachten, Rouw, Slaapproblemen, Somberheid, Stemmingsklachten, Stressklachten, Trauma.', 7, '2020-06-13 10:52:28', '2020-06-13 10:52:28', 'Lisanne_1592052748.jpg'),
(12, 'Rachel', 'Martha', 'rachelmartha@psyhcoloog.be', '0475123578', 'Koning Boudewijnlaan 43/bus 1', '3600', 'Genk', 'Oplossingsgerichte therapie, Positieve psychologie', 'De zin “De antwoorden die je krijgt zijn afhankelijk van de vragen die je jezelf durft te stellen” typeert haar werk. Rachel weet dat het belangrijk is om een focus te hebben in het leven. Haar partner en twee kinderen helpen haar deze focus te bewaken. Met een rustige en analytische houding begeleidt ze jou graag op weg naar jouw doelen. Rachel gebruikt daarbij oplossingsgerichte technieken, cognitieve gedragstherapie en positieve psychologie. Samen zoeken jullie hoe jij je kwaliteiten kan inzetten. Zij gelooft dat timing, motivatie en een beetje humor belangrijk zijn in dit proces.\r\n\r\nWerkt met symptomen als: Aanpassings- en verwerkingsproblemen, Angst, Burn-out en overspannenheid, Depressie, Identiteitsproblemen, Onzekerheid en faalangst, Somberheid, Stemmingsklachten, Stressklachten.', 8, '2020-06-13 10:54:58', '2020-06-13 10:54:58', 'Rachel_1592052898.jpg'),
(13, 'Emma', 'Bakker', 'emmabakker@gmail.com', '0475841236', 'Oude Heide 36', '3600', 'Genk', 'Oplossingsgerichte psychologie', 'Geen verhaal is Emma ‘te gek’. Met een open houding en oprechte interesse in jou als mens gaat zij met je in gesprek. Eerdere cliënten waarderen haar positiviteit, betrokkenheid, motiverende woorden en adviezen. De kracht van Michelle is het vormen van een goede behandelrelatie. Zij gaat samen met jou je klachten onderzoeken en verminderen.\r\n\r\nWerkt met symptomen als: ADD, ADHD, Angst, Autisme, Burn-out en overspannenheid, Depressie, Onzekerheid en faalangst, Persoonlijkheidsproblemen, Psychotraumatische klachten, Somatoforme klachten.', 9, '2020-06-13 10:59:50', '2020-06-13 10:59:50', 'Emma_1592053190.jpg'),
(14, 'Jeroen', 'De Wind', 'jeroendewind@psycholoog.be', '0452153212', 'Hoogstraat 74', '3690', 'Zutendaal', 'Psychotherapie, EMDR, Schematherapie', 'Jeroen heeft veel ervaring met diagnostiek. Zo weet hij veel over autisme spectrum stoornissen, ADHD, niet aangeboren hersenletsel, dementie en persoonlijkheidsproblemen. Hij denkt en puzzelt graag mee om te onderzoeken hoe problemen met elkaar samenhangen of waar ze hun oorsprong hebben.\r\n\r\nWerkt met symptomen als: Aanpassings- en verwerkingsproblemen, ADD, ADHD, Angst, Autisme, Burn-out en overspannenheid, Cognitieve problemen (o.a. dementie), Depressie, Genderdysforie, Identiteitsproblemen, Ontwikkelingsproblemen, Onzekerheid en faalangst, Persoonlijkheidsproblemen, Problemen met dwangmatigheid.', 10, '2020-06-13 11:03:21', '2020-06-13 11:03:21', 'Jeroen_1592053401.jpg'),
(15, 'Alinah', 'Li', 'alinahli@hotmail.com', '0479561478', 'Dorpsstraat 28', '3665', 'As', 'Positieve psychologie, Oplossingsgerichte therapie, EMDR', 'Alinah is een zorgzaam persoon en in haar contact met anderen warm en direct. Zij gaat op een gelijkwaardige manier met cliënten om. Zij is altijd open over wat ze denkt over de cliënt en zijn/haar problematiek. Met deze transparante werkwijze legt zij een basis voor vertrouwen. Dit vind zij erg belangrijk voor een goede band tussen behandelaar en cliënt. Haar manier van werken kenmerkt zich door transparantie, steun en structuur.\r\n\r\nWerkt met symptomen als: Aanpassings- en verwerkingsproblemen, Angst, Depressie, Onzekerheid en faalangst, Psychotraumatische klachten, Rouw, Somberheid, Stemmingsklachten, Stressklachten.', 11, '2020-06-13 11:05:10', '2020-06-13 11:05:10', 'Alinah_1592053509.jpg');

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
(4, 'Ronald Derksen', 'r@d.be', NULL, '$2y$10$0Gd5Ic8MGopZTs9GnlcpVu8XOZoAOl37GlkwMUNn8dFRBEcGETDnC', NULL, '2020-06-11 09:17:43', '2020-06-11 09:17:43'),
(5, 'Pim Joosten', 'p@j.be', NULL, '$2y$10$70WGoR3zUxbbs6hGy0OsjOTQUQdZXuJK0TmY9OlJSyo8KkbUSn2ei', NULL, '2020-06-11 14:18:54', '2020-06-11 14:18:54'),
(6, 'Iris Zonneveld', 'i@z.be', NULL, '$2y$10$eIfsINZG3vQQ/jAOyQH5veOIXAsINt1ADI.ETjpvUFDpoV5YTifxi', NULL, '2020-06-13 10:47:24', '2020-06-13 10:47:24'),
(7, 'Lisanne De Jager', 'l@dj.be', NULL, '$2y$10$dpS5BSWTuOyCPVPhKnPFneB9PrjmaBtJawBD5GZ7uWhmEDAbHLfBa', NULL, '2020-06-13 10:50:42', '2020-06-13 10:50:42'),
(8, 'Rachel Martha', 'r@m.be', NULL, '$2y$10$eLsm9aWenbDejbXK0i9T5uGoh78d.zScExj9jsNdqp.Xp0UNfvXdG', NULL, '2020-06-13 10:53:08', '2020-06-13 10:53:08'),
(9, 'Emma Bakker', 'e@b.be', NULL, '$2y$10$C7m5egLYusg/YwcKcdpLhejUCuvjLb5QS1MPnBFQm2fxOxG7Rn4ei', NULL, '2020-06-13 10:56:10', '2020-06-13 10:56:10'),
(10, 'Jeroen De Wind', 'j@d.be', NULL, '$2y$10$j7GfMEPBmKudEfVwswZ6Vu6OQNvkx.EAilFVdMXBE3IspPbLoIG7C', NULL, '2020-06-13 11:02:17', '2020-06-13 11:02:17'),
(11, 'Alinah Li', 'a@l.be', NULL, '$2y$10$tt.4lE29M9usVB3LH1TRZ.tyw7/tgoL.YSTr0loDPIap0KSI8Outi', NULL, '2020-06-13 11:04:09', '2020-06-13 11:04:09'),
(12, 'Romy Hendrix', 'r@h.be', NULL, '$2y$10$UEZ9wauZy7dUW0wRfKiYO.BMuudiKt4qIWsYHRapYcRdo7Gu5dReq', NULL, '2020-06-17 13:27:30', '2020-06-17 13:27:30');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT voor een tabel `availabilities`
--
ALTER TABLE `availabilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT voor een tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT voor een tabel `psycholoogs`
--
ALTER TABLE `psycholoogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
