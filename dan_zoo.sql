-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 11 nov. 2024 à 18:31
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dan_zoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `abris`
--

CREATE TABLE `abris` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `abris`
--

INSERT INTO `abris` (`id`, `name`, `image_name`, `description`) VALUES
(1, 'LA SAVANE', 'zebresavanet.jpg', 'Elle est composée d\'herbes hautes recouvrant le sol à perte de vue, de quelques arbustes nains et de rares arbres, dispersés ici et là. Car la plupart du temps, les savanes sont situées entre les forêts et les prairies. Les plantes herbacées changent'),
(2, 'LA JUNGLE', 'jungle.jpg', 'Elle est une immense forêt où poussent de façon très serrée, arbres, broussailles et plantes hautes. Pour vivre, cette végétation très dense a besoin de beaucoup d\'eau. C\'est pourquoi elle se situe dans les régions proches de l\'équateur où le climat '),
(3, 'LE MARAIS', 'marais-nepal.jpg', 'Il se forment dans des zones peu accidentées, mal drainées par le réseau hydrographique, à sous-sol imperméable, soit à proximité de cours d\'eau ou de la mer. L\'eau d\'un marais peut être fraîche, stagnante, ou plus ou moins salée.');

-- --------------------------------------------------------

--
-- Structure de la table `animals`
--

CREATE TABLE `animals` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `id_abris` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `animals`
--

INSERT INTO `animals` (`id`, `name`, `description`, `image_name`, `id_abris`) VALUES
(1, 'Cheeta', 'Le chimpanzé commun est un primate de grande taille au poil uniformément noir, à l\'exception du visage, des oreilles, de la paume des mains et de la plante des pieds, des doigts et des orteils qui sont glabres et de couleur rosée, sombre ou tachetée selon la sous-espèce.', 'chimpanze.jpg', 2),
(2, 'Tigris', 'Un prédateur redoutable. Agile et puissant, son nom signifie « celui qui tue en un bond. Sa corpulence imposante lui permet de s\'attaquer à  des proies qui font parfois deux fois sa taille ! Mais cela ne fait pas tout, c\'est un excellent nageur.', 'jaguar.jpg', 2),
(3, 'Skar', 'Mammifère carnivore, de la famille des Félidés, de forte taille, caractérisé par sa face large, sa crinière touffue, son tronc et ses membres trapus, son pelage fauve, et vivant à l\'état sauvage surtout en Afrique.', 'lion.jpg', 2),
(4, 'Babar', 'L\'éléphant est caractérisé par sa masse pesante, sa peau rugueuse et ses grandes oreilles plates. Il est pourvu d\'un nez allongé en trompe et de défenses en ivoire. Sa trompe lui sert de main pour porter les aliments à sa bouche et elle lui est utile pour boire et prendre des douches.', 'elephant.jpg', 1),
(5, ' Longkou', 'Le plus grand mammifère terrestre, avec un cou pouvant atteindre 1,80 m de long, la girafe est également bien connue pour le motif brun et blanc unique de son pelage et ses longs cils et pattes.', 'girafe.jpg', 1),
(6, 'Rayou', 'Le zèbre est un herbivore connu pour ses rayures noires et blanches, principalement verticales. On appelle la femelle du zèbre, la zebrelle et le petit, le zébreau. Il existe plusieurs espèces de zèbres, les trois principales sont le zèbre des plaines, le zèbre de montagne et le zèbre de Grévy.', 'zebre.jpg', 1),
(7, 'Dundee', 'Animal vertébré, reptile de grande taille, à corps allongé couvert d\'écailles, à pattes courtes, à très fortes mâchoires, vivant dans l\'eau et sur terre.', 'crocodile.jpg', 3),
(8, 'Grugus', 'La Grue cendrée est l\'un des plus grands oiseaux d\'Europe. Une envergure de 2 m à 2,40 m pour un poids de 4 à 6 kg font d\'elle, un oiseau imposant. Son nom de « cendrée » lui vient de sa couleur à dominante grise, couleur cendre, relativement uniforme. L\'oiseau adulte présente une tête contrastée entre noir et blanc.', 'grue_cendree.jpg', 3),
(9, 'Ratou', 'Mammifère semi-aquatique, le ragondin mène une vie plutôt crépusculaire ou nocturne mais peut tout de même avoir une activité diurne soutenue. Il aime l’eau douce et creuse des terriers de 6 à 7 mètres le long des berges des fleuves, canaux ou marais. Dans certaines régions à très forte densité de ragondins, et lorsqu’il a à sa disposition un vaste réseau de fossés et canaux, les terriers du ragondin participent à la déstabilisation des berges.', 'ragondin.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) UNSIGNED NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `commentaire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` int(11) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `nom`, `description`, `image_name`) VALUES
(1, 'Le resto', 'Le site dispose d\'un restaurant, cuisine plutôt européenne et exotique au feu de bois.', 'resto.jpg'),
(2, 'Visite accompagnée', 'Un guide est proposé pour visiter tout le site gratuitement.', 'guide.jpg'),
(3, 'Le petit train', 'Nous proposons aussi une visite du zoo plus d\'une heure en petit train, plusieurs arrêts sont prévus sur des sites spécifiques.', 'petittrain.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `firt_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firt_name`, `last_name`, `email`, `password`, `role`) VALUES
(1, 'Jose', 'DUPONT', 'adminjose@zoo.com ', 'test', 'admin'),
(2, 'David', 'MARTIN', 'employeone@zoo.com ', 'test', 'employe'),
(3, 'Joe', 'DURAND', 'vetoone@zoo.com', 'test', 'veto');

-- --------------------------------------------------------

--
-- Structure de la table `vetos`
--

CREATE TABLE `vetos` (
  `id` int(11) UNSIGNED NOT NULL,
  `rapport` text NOT NULL,
  `date` date NOT NULL,
  `etat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abris`
--
ALTER TABLE `abris`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vetos`
--
ALTER TABLE `vetos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abris`
--
ALTER TABLE `abris`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `vetos`
--
ALTER TABLE `vetos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
