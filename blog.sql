-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 13 mars 2025 à 09:04
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `categorie` int(11) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `auteur` int(11) DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `description`, `categorie`, `image`, `auteur`, `date_creation`) VALUES
(9, 'Maki', 'Le lémur Catta ou Maki catta est l’espèce de lémurien la plus connue. Il vit principalement au sud de l’Île. Il est caractérisé par une longue queue annelée de couleur blanc et noir. Étant le plus ancien des lémuriens de Madagascar, le Maki catta est le plus emblématique du pays. D’ailleurs, cet animal est protégé par les villageois, dans le sud du pays. Les autochtones considèrent les lémuriens comme la réincarnation de leurs ancêtres. Les Makis de Madagascar sont des primates lémuriforme de la famille des Lemuridae. Comme la majorité des lémuriens, le Maki se nourrit principalement de feuilles, de fleurs, de fruits, de bourgeons, d’écorces et de sève. Il lui arrive cependant de manger des insectes, des petits vertébrés (caméléons ou oiseaux) et des araignées. Le Maki catta est donc un omnivore à tendance végétarienne.\r\n\r\nPendant la saison sèche, le Maki se nourrit majoritairement de fruits de tamarinier pour survivre. Ce dernier représente 50 % de sa ration.\r\n\r\nLorsque les fruits d’un tamarinier sont en fin de maturation, un groupe de Maki s’installe dans l’arbre pendant des jours avant de se déplacer vers un autre site de nourrissage. En faisant cela, il contribue à la dispersion des graines et à la vie de la forêt. Le Maki catta est un mammifère qui se reproduit une fois par an, entre avril et juin. Il a une portée de 1 petit. Dans de rares cas, il peut mettre bas 2 petits. Durant les premières semaines, le jeune reste accroché à sa mère, d’abord sur son ventre, puis sur son dos. Il n’est sevré qu’après 5 mois.\r\n\r\nCependant, plus de la moitié des jeunes Makis meurent durant leur première année de vie à cause des conditions environnementales rudes, de la prédation et des chutes. C’est une des raisons qui expliquerait que l’on trouve aujourd’hui entre 140 et 350 individus par kilomètre carré dans les secteurs de forêt-galerie, et à peine 17 individus par kilomètre carré dans les zones les plus arides.\r\n\r\nFace à cette situation, l’Union Internationale pour la Conservation de la Nature (UICN) a classé l’espèce dans la catégorie « quasi menacée ».\r\n\r\nLe Maki catta est une espèce diurne : il passe la journée le matin et la nuit à se reposer. Un groupe de Makis se scinde en plusieurs petits groupuscules d’individus pour se blottir les uns contre les autres. Cela leur permet de conserver leur chaleur corporelle pendant la nuit.\r\n\r\nÀ leur réveil, les Makis à Madagascar se rassemblent pour prendre un bain de soleil, en exposant les zones les moins poilues de leur corps (torse et ventre). Ils s’assoient bien droit, les pattes antérieures écartées. Après s’être réchauffés, les Makis catta partent à la recherche de nourriture. C’est d’ailleurs à cette période de la journée où ils sont très actifs, qu’il est conseillé de partir à la recherche des lémuriens.\r\n\r\nLe Maki de Madagascar est l’espèce la plus terrestre de tous les lémuriens. Il passe au moins 30 % de son temps au sol. Lorsqu’il se déplace, il le fait principalement par voie terrestre.\r\n\r\nUne structure sociale dominée par les femelles\r\nAnimal emblématique de Madagascar, le Maki fascine pour son apparence et son mode de vie unique. En effet, les Makis vivent en groupe de 10 à 25 individus constitué de plusieurs mâles et femelles. Ces dernières dominent dans la hiérarchie du groupe.\r\n\r\nEn général, un groupe de Makis occupe un territoire de 6 à 25 ha en fonction des caractéristiques de l’habitat et des ressources alimentaires disponibles. Lorsqu’ils vivent dans une forêt luxuriante, les Makis peuvent se contenter d’un territoire de 6 à 8 ha. En forêt épineuse, ils ont besoin d’un territoire de 15 à 25 ha pour trouver de la nourriture suffisante pour assurer la survie du groupe.', 8, '/blog/images/67d00a73cd52b_maki.png', 1, '2025-03-11 10:37:53'),
(10, 'Serpent', 'Les serpents, de nom scientifique Serpentes, forment un sous-ordre de squamates carnivores au corps très allongé et dépourvus de membres apparents. Il s\'agit plus précisément de vertébrés amniotes caractérisés par un tégument recouvert d\'écailles, imbriquées les unes sur les autres et protégées par une couche cornée épaisse, et par une thermorégulation assurée par trois mécanismes, l\'ectothermie, la poïkilothermie et le bradymétabolisme. Ils sont aussi appelés plus rarement Ophidiens (du grec ὄφεις / ópheis).\r\n\r\nLes serpents ont comme caractéristiques spécifiques d\'avoir une langue bifide, des yeux sans paupière, un crâne articulé et des mâchoires mobiles qui facilitent l\'ingestion de proies. Ils partagent la disparition des pattes avec deux autres groupes de vertébrés tétrapodes : les amphisbènes, qui sont d\'autres squamates, et les gymnophiones, qui appartiennent au groupe des lissamphibiens.\r\n\r\nAu cours de leur longue évolution qui remonte au Crétacé, les serpents ont perfectionné plusieurs modes de locomotion apode ainsi que leur système de préhension des proies, ce qui leur a permis de conquérir les biotopes les plus variés et d\'occuper presque tous les climats, même les plus extrêmes à l\'exception des climats polaires et subpolaires, facteurs expliquant leur succès évolutif.\r\n\r\nCentre d\'un symbolisme important qui renvoie à de nombreux mythes, contes et légendes, le serpent jouit d\'un rôle ambivalent, combinant des aspects positifs et négatifs.', 5, '/blog/images/67d06761e601c_serpent.png', 1, '2025-03-13 06:59:03'),
(11, 'Grenouille', 'Le terme grenouille est un nom vernaculaire attribué à certains amphibiens, principalement dans le genre Rana. À un de ses stades de développement, la larve de la grenouille est appelée un têtard. Les grenouilles sont des quadrupèdes de l\'ordre des anoures, tout comme les rainettes, qui sont en général plus vertes et arboricoles, les crapauds dont la peau est plus granuleuse et les xénopes strictement aquatiques. Tous ces termes usuels correspondent à des aspects extérieurs plus qu\'à des classements strictement taxinomiques.\r\n\r\nEn Europe, parmi les espèces de grenouilles les plus connues figurent la Grenouille verte et la Petite grenouille verte, la Grenouille des champs, la Grenouille rousse et, en élevage, la Grenouille rieuse.\r\n\r\nCertaines espèces comme la Grenouille-taureau d\'Amérique du Nord, la Grenouille goliath d\'Afrique ou Nyctimystes infrafrenatus (grenouille géante) sont remarquables pour leur très grande taille.\r\n\r\nIl existe environ 3 800 espèces de grenouilles et crapauds1 qui subissent depuis le milieu du XXe siècle un déclin brutal, déroutant et alarmant.\r\n\r\nPlusieurs espèces de grenouilles sont élevées pour consommer leurs cuisses, d\'autres servent à l\'expérimentation, d\'autres encore sont parfois adoptées pour l\'agrément.\r\n\r\nElles sont souvent évoquées dans les textes anciens et récents et présentes dans les représentations artistiques. La grenouille est aussi un personnage important du folklore populaire ou enfantin sous forme d\'animal tantôt répugnant et maléfique ou, au contraire, magique et bénéfique, en particulier à travers le mythe du prince ou de la princesse transformés en grenouille (ou souvent en crapaud).', 6, '/blog/images/67d00b87575c6_grenouille.png', 1, '2025-03-11 10:37:53'),
(12, 'Cameleon edit', 'Les Caméléonidés (Chamaeleonidae) sont une famille de sauriens surtout arboricoles, définie par Constantine Samuel Rafinesque en 1815. Elle contient près de 200 espèces de caméléons. Cette famille est divisée en deux sous-familles : les Chamaeleoninae et les Brookesiinae (en).\r\n\r\nCe sont des animaux qui se caractérisent par la mobilité indépendante de leurs yeux, leur langue protractile qui leur permet d\'attraper leurs proies à distance, les doigts groupés en deux blocs opposables assurant une bonne prise sur les branches, leur capacité à changer de couleur, et enfin leur queue qui sert à se stabiliser.\r\nDescription\r\nUn caméléon commun à El Puerto de Santa María en Andalousie, (Espagne).\r\n\r\nLes caméléons sont des lézards et donc des reptiles qui présentent de nombreuses particularités anatomiques et biologiques semblables.\r\nQueue\r\n\r\nLes caméléons sont dotés d\'une queue assez longue (entre un tiers et la moitié de la longueur totale chez la plupart des espèces). Cette queue peut s\'enrouler sur elle-même, et est souvent utilisée pour assurer une meilleure prise dans les arbres.\r\n\r\nCeci n\'est vrai que pour les caméléons arboricoles. Les caméléons nains (genres Rhampholeon, Rieppeleon et Brookesia), de mœurs quasi-terrestres, présentent en général une queue bien plus petite et moins mobile.\r\nDoigts\r\n\r\nLes doigts des pattes, griffus, sont rassemblés en deux groupes opposés qui forment une sorte de pince, utilisée pour agripper solidement les branches lors de leurs déplacements. Ils sont dits zygodactyles. Les doigts sont regroupés de sorte que la pince ait deux doigts en vis-à-vis des trois autres. Chez de nombreuses espèces les doigts adjacents sont plus ou moins soudés entre eux.\r\nCrêtes et cornes\r\nFurcifer labordi possède des appendices crâniens proéminents.\r\n\r\nLes caméléons sont souvent dotés de casques, crêtes et cornes. Ce sont des téguments que l\'on retrouve plus ou moins développés chez toutes les espèces.\r\n\r\nCertaines espèces comme Trioceros jacksonii ou Trioceros johnstoni présentent de grandes cornes (jusqu\'à 3 cm) sur le rostre. D\'autres espèces ont une ou deux cornes, plus ou moins longues. Certaines espèces n\'en ont pas du tout.\r\n\r\nD\'autres (par exemple, Chamaeleo calyptratus) présentent une crête rigide très proéminente sur le crâne.\r\n\r\nD\'autres encore ont une crête plus ou moins développée qui court sur le dos ou le ventre, parfois jusque sur la queue.\r\n\r\nQuasiment toutes les espèces présentent une structure épaisse sur le dessus du crâne, un peu comme un casque.\r\nDimorphisme sexuel\r\n\r\nLes mâles et femelles sont souvent très différents. Les mâles sont en général plus grands et gros, bien qu\'il existe quelques exceptions. De plus, les crêtes, casques ou cornes sont en général moins développés, voire complètement absentes, chez les femelles. La robe est généralement très différente ; les mâles ont la plupart du temps des couleurs plus vives et contrastées.\r\n\r\nLes caméléons nains (genres Rhampholeon, Rieppeleon et Brookesia) font encore exception. Mâles et femelles ont généralement les mêmes couleurs, et les femelles sont la plupart du temps plus grandes.\r\nVision\r\nLes yeux d’un caméléon peuvent bouger indépendamment l’un de l’autre.\r\n\r\nLes yeux des caméléons sont proéminents et dotés de mouvements indépendants. Ceci leur permet de surveiller simultanément tous les côtés à l\'approche de prédateurs. Lorsqu\'ils repèrent une proie, les yeux convergent sur celle-ci pour obtenir une meilleure précision.\r\nQuasiment dépourvus de bâtonnets, les caméléons ont une très mauvaise vue nocturne − et ont un mode de vie diurne.\r\nLangue\r\nStructure de la langue d\'un caméléon.\r\n\r\nPour chasser leurs proies les caméléons utilisent leur langue protractile. Composée\r\n\r\nentre autres de muscles propulseurs et rétracteurs, la langue est rangée dans la bouche sur l\'os hyoïde. L\'animal projette avec une grande précision sa langue (dont l\'extrémité est couverte d\'un mucus gluant) sur ses proies, puis ramène le tout dans sa bouche1. La viscosité de son mucus est 400 fois supérieure à celle de la salive humaine2,3.\r\n\r\nSelon les espèces, la langue peut atteindre presque deux fois la longueur du corps de l\'animal. Le caméléon projette sa langue en 1/25e de seconde (à plus de 20 km/h), s\'empare d\'une proie qui peut atteindre un tiers de sa propre masse, et la ramène à sa bouche en une demi-seconde. La projection puis la rétraction de la langue ainsi que la préhension de la proie associent plusieurs mécanismes physiques d\'une certaine complexité4. Pour les espèces les plus performantes, l\'accélération entre zéro et 97 km/h se fait en un centième de seconde5.', 5, '/blog/images/67d2900e438bd_cameleon.png', 1, '2025-03-13 07:58:06');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `description`) VALUES
(1, 'Mamifère', 'Des animaux qui est venu au monde en naissant'),
(2, 'Rongeur', 'Des animaux petits'),
(3, 'Oiseau', NULL),
(4, 'Poisson', NULL),
(5, 'Reptile', NULL),
(6, 'Amphibien', NULL),
(7, 'Insecte', ''),
(8, 'Primat', ''),
(10, 'Félin', '');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `profil` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `email`, `mot_de_passe`, `profil`) VALUES
(1, 'Bernard Rakoto', 'bernard@etudiant.com', '0b8e0b1f37895567811a9d382317c26804f86e3a', NULL),
(2, 'Pierre Razafy', 'razafy@etudiant.com', 'ff019a5748a52b5641624af88a54a2f0e46a9fb5', NULL),
(4, 'RAZANANTSIMBA Mamy', 'mamy@blog.mg', '7c222fb2927d828af22f592134e8932480637c0d', NULL),
(5, 'RAVOKATRA Fidy', 'fidy@blog.mg', '7c222fb2927d828af22f592134e8932480637c0d', NULL),
(8, 'RAZANANY Luca', 'luca@blog.mg', '7c222fb2927d828af22f592134e8932480637c0d', NULL),
(9, 'RAVAO Julia', 'julia@blog.mg', '9cf95dacd226dcf43da376cdb6cbba7035218921', NULL),
(10, 'RANDRIA Jean', 'jean@blog.mg', '9cf95dacd226dcf43da376cdb6cbba7035218921', NULL),
(11, 'RAVOHITRA Donné', 'donne@blog.mg', '9cf95dacd226dcf43da376cdb6cbba7035218921', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie` (`categorie`),
  ADD KEY `auteur` (`auteur`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`auteur`) REFERENCES `utilisateur` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `articles_ibfk_3` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
