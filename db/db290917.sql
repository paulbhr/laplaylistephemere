-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Ven 29 Septembre 2017 à 09:58
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `laplaylist`
--

-- --------------------------------------------------------

--
-- Structure de la table `playlist`
--

CREATE TABLE `playlist` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `playlist`
--

INSERT INTO `playlist` (`id`, `name`, `logo`, `description`) VALUES
(1, 'La Playlist Éphémère', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `playlist_song`
--

CREATE TABLE `playlist_song` (
  `playlist_id` int(11) NOT NULL,
  `song_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `playlist_song`
--

INSERT INTO `playlist_song` (`playlist_id`, `song_id`) VALUES
(1, 1),
(1, 2),
(1, 4),
(1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `song`
--

CREATE TABLE `song` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artist` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `bpm` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `song`
--

INSERT INTO `song` (`id`, `title`, `artist`, `time`, `bpm`, `url`) VALUES
(1, 'Dancer', 'Gino Soccio', 507, 122, '-3y2C8jqG8Q'),
(2, 'Cowboys & Gangsters', 'Gichy Dan', 441, 125, 'lQ76k12Jg20'),
(4, 'Baby Be Mine', 'Michael Jackson', 260, 110, 'hG9OzYVSg3c'),
(5, 'Countdown (Instrumental)', 'Beyoncé', 212, 167, 'jgMRpGSmGrw'),
(6, 'Youve Come A Long Way', 'Machine', 386, 135, 'UXXT75Lu4wI'),
(7, 'Roll With Me', 'Charli XCX', 201, 138, 'Rfj2SUnhYCk'),
(8, 'Have Fun Tonight', 'Fischerspooner', 260, 110, 'ruDhSzPLjuY'),
(9, 'Havana', 'Camila Cabello', 216, 105, 'HCjNJDNzw8Y'),
(10, 'Southern Man', 'Merry Clayton', 195, 89, '4czTIjYwGlc'),
(11, 'LMK', 'Kelela', 218, 100, 'ePi5BLJogyA'),
(12, 'Ciao Adios', 'Anne-Marie', 200, 106, 'qqob4D3BoZc'),
(13, 'Feels (feat. Pharrell Williams, Katy Perry & Big Sean)', 'Calvin Harris', 223, 101, 'ozv4q2ov3Mk'),
(14, 'It Means I Love You', 'Jessy Lanza', 281, 160, 'C216ZRVOM5A'),
(15, 'Strobelite', 'Gorillaz', 272, 105, 'EaE6YOZe4Gw'),
(16, 'Oh Devil (feat. Devin Di Dakta)', 'Electric Guest', 217, 97, '8iOjRkIZvow'),
(17, 'Not Enough (feat. THEY.)', 'Lido ', 192, 110, 'kJRLP0rnBv4'),
(18, 'Clean Break', 'SIBA', 211, 104, '6MSKQAmRXQQ'),
(19, 'Idol', 'Mind Enterprises', 252, 120, 'WAKLwFY3i50'),
(20, 'He Like That', 'Fifth Harmony', 217, 147, 'lCmJC8y3Epk'),
(21, 'Roller Party', 'Ambeyance', 553, 129, 'UFb9VIxWIng'),
(22, 'Mistakes', 'Tove Styrke', 207, 92, 'lQDzUhHpJ6s'),
(23, 'Selfish Love', 'Jessie Ware', 234, 115, 'yXtv8rDcnB4'),
(24, 'Walk The Night', 'Skatt Brothers', 324, 115, '7ogydMMtHZA'),
(25, 'Black Stations / White Stations', 'Martha & The Muffins', 312, 120, 'os4eWX88OxA'),
(26, 'Gotta Let You Go', 'Dominica', 233, 126, 'sNbqN9TbdnE'),
(27, 'Gold Junkies', 'Melanie De Biaso', 199, 140, 'LKT6f2_w6Rs'),
(28, 'Chocolate (Emo Mix)', 'Kylie Minogue', 413, 110, 'bypY8sgJO50'),
(29, 'Deadly Valenrtine (TEN O FIVE REMIX)', 'Charlotte Gainsbourg', 220, 105, '5iB4UwproTM'),
(30, 'What\'s Your Name What\'s Your Number', 'Andrea True Connection', 395, 113, 'BsQSAFvfNFc');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `adminstatus` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `mail`, `adminstatus`) VALUES
(1, 'paulbhr', 'Coucou1$', '', 1),
(10, 'leslie', 'test', '', 0),
(13, 'bonjour', 'coucou', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user_song`
--

CREATE TABLE `user_song` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `song_id` int(11) NOT NULL,
  `lifepoints` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `user_song`
--

INSERT INTO `user_song` (`id`, `user_id`, `song_id`, `lifepoints`) VALUES
(1, 1, 4, -10),
(2, 1, 5, -3),
(14, 1, 6, -9),
(20, 1, 6, -9),
(23, 1, 5, -3),
(24, 1, 2, 1),
(25, 1, 1, -5),
(29, 1, 7, 6),
(35, 1, 8, 2),
(41, 1, 9, -2),
(47, 1, 10, 1),
(53, 1, 11, 0),
(59, 1, 12, -1),
(65, 1, 13, 6),
(71, 1, 14, 3),
(77, 1, 15, -2),
(83, 1, 16, 2),
(89, 1, 17, 0),
(95, 1, 18, 2),
(101, 1, 19, 1),
(107, 1, 20, 3),
(113, 1, 21, 3),
(119, 1, 22, 2),
(125, 1, 23, 2),
(131, 1, 24, 3),
(137, 1, 25, 3),
(143, 1, 26, 3),
(149, 1, 27, 2),
(155, 1, 28, 2),
(161, 1, 29, 3),
(167, 1, 30, 3),
(170, 10, 1, 0),
(171, 10, 10, -9),
(172, 10, 29, 3),
(173, 10, 18, 3),
(174, 10, 24, 3),
(232, 13, 1, 3),
(233, 13, 10, 3),
(234, 13, 29, 3),
(235, 13, 18, 3),
(236, 13, 24, 3),
(237, 13, 16, 3),
(238, 13, 30, 3),
(239, 13, 28, 3),
(240, 13, 14, 3),
(241, 13, 15, 3),
(242, 13, 11, 3),
(243, 13, 9, 3),
(244, 13, 4, 3),
(245, 13, 5, 3),
(246, 13, 17, 3),
(247, 13, 20, 3),
(248, 13, 27, 3),
(249, 13, 2, 3),
(250, 13, 22, 3),
(251, 13, 25, 3),
(252, 13, 13, 3),
(253, 13, 12, 3),
(254, 13, 7, 3),
(255, 13, 8, 3),
(256, 13, 26, 3),
(257, 13, 21, 3),
(258, 13, 6, 3),
(259, 13, 19, 3),
(260, 13, 23, 3);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_D782112D5E237E06` (`name`);

--
-- Index pour la table `playlist_song`
--
ALTER TABLE `playlist_song`
  ADD PRIMARY KEY (`playlist_id`,`song_id`),
  ADD KEY `IDX_93F4D9C36BBD148` (`playlist_id`),
  ADD KEY `IDX_93F4D9C3A0BDB2F3` (`song_id`);

--
-- Index pour la table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_33EDEEA1F47645AE` (`url`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649AA08CB10` (`login`);

--
-- Index pour la table `user_song`
--
ALTER TABLE `user_song`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_496CA268A76ED395` (`user_id`),
  ADD KEY `IDX_496CA268A0BDB2F3` (`song_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `song`
--
ALTER TABLE `song`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `user_song`
--
ALTER TABLE `user_song`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `playlist_song`
--
ALTER TABLE `playlist_song`
  ADD CONSTRAINT `FK_93F4D9C36BBD148` FOREIGN KEY (`playlist_id`) REFERENCES `playlist` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_93F4D9C3A0BDB2F3` FOREIGN KEY (`song_id`) REFERENCES `song` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user_song`
--
ALTER TABLE `user_song`
  ADD CONSTRAINT `FK_496CA268A0BDB2F3` FOREIGN KEY (`song_id`) REFERENCES `song` (`id`),
  ADD CONSTRAINT `FK_496CA268A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
