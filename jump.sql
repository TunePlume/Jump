-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 22 fév. 2023 à 10:55
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jump`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `email` varchar(300) NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `email`, `mdp`) VALUES
(75, 'jump_admin', 'admin@jump.mg', 'adminjump123');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prix` int(11) NOT NULL,
  `descri` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `img`, `nom`, `prix`, `descri`) VALUES
(1, 'https://static.fnac-static.com/multimedia/Images/FD/Comete/98567/CCP_IMG_ORIGINAL/1262089.jpg', 'Samsung Galaxy tab', 350000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea similique aperiam quibusdam aut cupiditate rerum temporibus alias numquam excepturi neque dicta sunt, at deleniti beatae obcaecati rem dignissimos iure atque.'),
(2, 'https://image.coolblue.be/624x351/content/cc1ac78f324a895789852ae0908ddb70', 'Microsoft NoteBook 5G', 2000000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea similique aperiam quibusdam aut cupiditate rerum temporibus alias numquam excepturi neque dicta sunt, at deleniti beatae obcaecati rem dignissimos iure atque.'),
(3, 'https://www.librinova.com/librinova/img/maquette/Livre_couverture_01.jpg', 'Quatre nuits d&#039;effroi', 25000, 'Il dort seul au rez-de-chaussée. Les autres occupants logent à l’étage. Il entend des bruits étranges provenant de la cuisine. Il hésite, n’ose appeler. Il veut en avoir le cœur net. Dans le couloir, la porte de la cave est entrebâillée. Il est d’autant plus inquiet que cet accès se trouve habituellement verrouillé. Puis c’est l’effroi. Devant lui, l’innommable, l’abject. Ils l’attendaient. C’est ainsi que durant quatre nuits, un garçonnet de sept ans en pension dans une famille qui le chérit assistera à des scènes effrayantes. Pourtant, il ne fuira pas, il restera à les observer, finira par s’approcher, comme fasciné par elles.\r\n\r\nUn roman fantastique où se côtoient l’intime et l’occulte ; où le destin d’innocents est la proie d’un passé meurtri à la recherche de réponses.'),
(5, 'https://images.frandroid.com/wp-content/uploads/2020/04/wacom-inuos-s-1200x723.jpg', 'Tablette WACOM', 1000000, 'Cette tablette graphique se veut l’introduction parfaite à l’art du dessin sur ordinateur. Compacte, la Wacom Intuos S Bluetooth propose une surface de travail de 7 pouces pour un poids de 249 g. Vous l’aurez compris, elle est loin d’être encombrante sur un bureau et elle peut se glisser facilement dans un sac lors de vos déplacements. D’autant qu’elle fonctionne directement en Bluetooth, ce qui vous permet de faire l’impasse sur les câbles lors de la connexion à un ordinateur.'),
(6, 'https://www.cdiscount.com/pdt2/3/0/9/1/300x300/xpp0796391003309/rw/xp-pen-artist-12-tablette-graphique-avec-ecran-11.jpg', 'XP-PEN Artist 12', 1500000, ' Ecran FHD 1920x1080 en 11.6 Pouces - Stylet passif sans batterie à 8192 Niveaux - Gamme de couleurs NTSC: 72% - 6 Touches de raccourci + 1 Barre tactile - Angle de vue: 178 ° NB: Ce n&#039;est pas un produit autonome, il faut connecter avec un ordinateur pour utiliser.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
