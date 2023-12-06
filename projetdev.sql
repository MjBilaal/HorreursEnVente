-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 06 déc. 2023 à 21:55
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetdev`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nomProd` varchar(30) NOT NULL,
  `prix` int NOT NULL,
  `note` varchar(5) NOT NULL,
  `avis` int NOT NULL,
  `description` varchar(200) NOT NULL,
  `img` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nomProd`, `prix`, `note`, `avis`, `description`, `img`) VALUES
(1, '4 Masques d\'horreur', 50, '★★★☆☆', 66, 'Qu\'il s\'agissent de fêter Halloween, ou pour se créer des frayeurs en famille, optez pour ce superbe pack de quatre masques différents plus effrayants les uns que les autres!', 'image99.jpg'),
(2, 'Masque de démon', 75, '★★★★★', 39, 'Découvrez l\'ultime masque de démon, une création terrifiante d\'une beauté macabre. Ses cornes menaçantes et ses détails démoniaques en font l\'accessoire parfait pour une expérience effrayante à chaque', 'demon.jpg'),
(3, 'Masque Michael Myers', 60, '★★★★☆', 578, 'Découvrez l\'horreur emblématique avec notre masque de Michael Myers, une reproduction fidèle du visage sinistre du célèbre tueur en série. Les détails authentiques, la blancheur glaciale du masque et ', 'myersMasque.jpg'),
(4, 'Masque de Jason', 30, '★★★★☆', 463, 'Plongez dans l\'univers cauchemardesque de Jason Voorhees avec notre masque emblématique. Reproduisant les cicatrices de ce tueur légendaire, ce masque incarne la terreur des vendredis 13. Que ce soit ', 'hockey.jpg'),
(5, 'Masque de loup', 60, '★★★☆☆', 105, 'Plongez dans l\'atmosphère mystique d\'Halloween avec notre masque de loup ensorcelant. Ses détails saisissants, inspirés du monde des loups-garous, ajoutent une dose de mystère à votre déguisement. Que', 'loup.jpg'),
(6, 'Masque de cochon', 60, '★★★☆☆', 92, 'Éveillez la terreur avec notre masque de cochon effrayant pour Halloween. Inspiré des cauchemars les plus sombres, ce masque macabre est conçu pour instiller la peur et l\'épouvante. Les détails sinist', 'cochon.jpg'),
(7, 'Costume Mercredi Addams', 50, '★★★★☆', 158, 'Explorez l\'obscurité avec le costume de Mercredi Addams. La robe noire élégante, le col blanc distinctif, et les manches larges font de ce costume une parfaite incarnation du style gothique emblématiq', 'mercredi.jpg'),
(8, 'Costume de vampire', 40, '★★★★☆', 209, 'Plongez dans l\'obscurité avec notre costume de vampire pour fille. La robe sombre et la cape évoquent l\'envoûtement nocturne, transformant votre enfant en une créature mystique assoiffée de friandises', 'vampire.jpg'),
(9, 'Costume de faucheur', 36, '★★★★☆', 179, 'Préparez-vous à semer la terreur avec notre costume de faucheur pour garçon. La cape sombre, la capuche mystérieuse et la faux sinistre créent une aura de mort imminente. Idéal pour une nuit d\'Hallowe', 'faucheur.jpg'),
(10, 'Costume de clown', 36, '★★★★☆', 206, 'Préparez-vous à répandre des rires macabres avec notre costume de clown tueur pour garçon. La combinaison colorée cache une sinistre menace derrière un masque terrifiant. Parfait pour créer des frisso', 'clowngarcon.jpg'),
(11, 'Costume de vampire adulte', 90, '★★★★☆', 178, 'Plongez dans une nuit de terreur avec notre costume de vampire pour adulte. Des crocs acérés, une cape déchirée et une aura de ténèbres font de vous la créature de la nuit ultime. Prêt à semer la terr', 'couplevampire.png'),
(12, 'Costume de médecin', 80, '★★★☆☆', 222, 'Incarnez l\'apocalypse médicale avec notre costume de médecin de pandémie. La blouse maculée, le masque effrayant et les accessoires dystopiques créent une atmosphère de catastrophe. Un choix saisissan', 'medecin.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
