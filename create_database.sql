-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 18 Novembre 2016 à 15:40
-- Version du serveur :  5.5.52-0+deb8u1
-- Version de PHP :  5.6.24-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `site_pruvos_j`
--

-- --------------------------------------------------------

--
-- Structure de la table `Hero`
--

CREATE TABLE IF NOT EXISTS `Hero` (
`id` int(6) unsigned NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `hero` varchar(25) DEFAULT NULL,
  `path` varchar(180) DEFAULT NULL,
  `hero_name` varchar(40) DEFAULT NULL,
  `groupe` varchar(30) DEFAULT NULL,
  `description` text,
  `prix` int(6) unsigned DEFAULT NULL,
  `Date_Creat` date DEFAULT NULL,
  `Date_Mod` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Hero`
--

INSERT INTO `Hero` (`id`, `name`, `hero`, `path`, `hero_name`, `groupe`, `description`, `prix`, `Date_Creat`, `Date_Mod`) VALUES
(1, 'Captain-profil.jpg', 'Captain_America', './pictures/profil/Captain-profil.jpg', 'CAPTAIN AMERICA', 'Avengers', 'Surhomme ayant traversé un siècle par congélation, première Avengers, se battant pour la justice à l''aide d''un bouclier de vibranium qui absorbe 100% des chocs!', 2000, NULL, NULL),
(2, 'Iron-Man_profil.jpg', 'Iron_Man', './pictures/profil/Iron-Man_profil.jpg', 'Iron Man', 'Avengers', 'Wounded, captur\r\ned and forced to build a weapon by his enemies, billionaire industrialist Tony Stark instead created an advanced suit\r\n of armor to save his life and escape captivity. Now with a new outlook on life, Tony uses his money and intelligence\r\n to make the world a safer, better place as Iron Man.', 10900, NULL, NULL),
(3, 'Thor_profil.jpg', 'Thor', './pictures/profil/Thor_profil.jpg', 'Thor', 'Avengers', 'As the Norse God of thunder\r\n and lightning, Thor wields one of the greatest weapons ever made, the enchanted hammer Mjolnir. While others have de\r\nscribed Thor as an over-muscled, oafish imbecile, he s quite smart and compassionate. He s self-assured, and he would\r\n never, ever stop fighting for a worthwhile cause.', 2350, NULL, NULL),
(4, 'Hulk_profil.jpeg', 'Hulk', './pictures/profil/Hulk_profil.jpeg', 'Hulk', 'Avengers', 'Caught in a gamma bomb explosion while trying to save the life of a teenager, Dr. Bruce Banner was transformed into the\r\n incredibly powerful creature called the Hulk. An all too often misunderstood hero, the angrier the Hulk gets, the stronger the Hulk gets.', 2800, NULL, NULL),
(5, 'Veuve-noire_profil.jpg', 'Black_Widow', './pictures/profil/Veuve-noire_profil.jpg', 'Black Widow', 'Avengers', 'Natasha Romanova, known by many aliases, is an expert spy, athlete, and assassin. Trained at\r\n a young age by the KGB s infamous Red Room Academy, the Black Widow was formerly an enemy to the Avengers. She later became their ally after breaking out of the U.S.S.R. s grasp, and also serves as a top S.H.I\r\n.E.L.D. agent.', 50000, NULL, NULL),
(6, 'Oeil-de-faucon_profil.jpg', 'Hawkeye', './pictures/profil/Oeil-de-faucon_profil.jpg', 'Hawkeye', 'Avengers', 'Adventurer, former outlaw, former spy, former federal inmate, former unofficial agent of SHIEL\r\nD, former chief of security of Cross Technological Enterprises, former rancher, former archery professor, former professional criminal, former Circus artist, former apprentice in butchery.', 980, NULL, NULL),
(7, 'Batman_profil.jpg', 'Batman', './pictures/profil/Batman_profil.jpg', 'BATMAN', 'Justice League', 'Millionaire Bruce Wayne was just a kid when he watched his parents get gunned down durin\r\ng a mugging in Gotham City. The crime would define his life, as he dedicated himself to becoming the world’s greatest weapon against crime—the Batman.', 11000, NULL, NULL),
(8, 'Superman.jpg', 'Superman', './pictures/profil/Superman.jpg', 'SUPERMAN', 'Justice League', 'Rocketed to Earth from the dying planet Krypton, baby Kal-El was found by a farming couple who named the boy Cla\r\nrk Kent and raised him as their own. Discovering his enormous powers, they instilled in him strong moral values—and inspired him to become a hero.', 22500, NULL, NULL),
(9, 'Wonder-woman.jpg', 'Wonder_Woman', './pictures/profil/Wonder-woman.jpg', 'WONDER WOMAN', 'Justice League', 'Wonder Woman is Princess Diana of the immortal Amazons from Greek mythology.  When army pilot St\r\neve Trevor crashes on the warriors’ secluded island paradise, Diana wins the right to escort him home and make her people known to the world. Entering our cynical world for the first time, there’s a lot she mus\r\nt wrap her head around, especially our ways of war, hate, and, well… dating. Helping her are her superhuman strength and speed, as well as the trademark bulletproof bracelets, but it’s probably her Golden Lasso\r\n of Truth most people really wish they had.', 13000, NULL, NULL),
(10, 'Aquaman.jpeg', 'Aquaman', './pictures/profil/Aquaman.jpeg', 'AQUAMAN', 'Justice League', 'Cast out from Atlantis as a baby, Arthur Curry grew up on land, thinking himself a normal human. But when he matu\r\nred, Atlantis returned, claiming him as their rightful king. Caught between a surface world constantly ravaging the sea and Atlanteans looking to lash out in revolt, he’s committed to protecting the entire glob\r\ne.', 2000, NULL, NULL),
(11, 'Flash_profil.jpg', 'Flash', './pictures/profil/Flash_profil.jpg', 'FLASH', 'Justice League', 'Young Barry Allen’s life stopped the minute his mother was murdered. The true killer never f\r\nound, its mystery obsessed Barry, driving him to become a forensic scientist. Consumed by his work, he spent his life chained to his desk, solving every case that flew across it. But when a freak lightning bolt\r\n hits a nearby shelf in his lab, Barry receives super-speed, becoming the Flash. Now, he’ll race up buildings, across oceans, and around the world to get his man—while getting introduced to a world so much bigg\r\ner than his old life of microscopes and cold cases.', 1700, NULL, NULL),
(12, 'Cyborg_profile.jpg', 'Cyborg', './pictures/profil/Cyborg_profile.jpg', 'CYBORG', 'Justice League', 'Although a star athlete, Vic Stone only yearned for his father’s approval. But Dad was too focused on hi\r\ns scientific career to notice… until the day Vic became his greatest experiment. After Vic suffered a grave injury, his father saved him by replacing over half his body with cybernetic parts.', 1750, NULL, NULL),
(13, 'Harley-quinn.png', 'Harley_Quinn', './pictures/profil/Harley-quinn.png', 'HARLEY QUINN', 'Justice League', 'Before her descent into madness, Dr. Harleen Quinzel was a promising psychiatrist assigned to Ar\r\nkham Asylum, Gotham s home for the criminally insane. But after meeting the Joker, the young doctor became obsessed with the crazed criminal s warped mind. Sensing opportunity, the Joker manipulated her, drivin\r\ng his therapist so mad that he was able to control her. Harleen fell in love with the villain, broke him out of Arkham and devoted her life to making him happy and spreading his bloody brand of mayhem.', 75000, NULL, NULL),
(14, 'Captain-boomerang.jpg', 'Captain_Boomerang', './pictures/profil/Captain-boomerang.jpg', 'CAPTAIN BOOMERANG', 'Suicid Squad', 'During his childhood in Australia, Digger became adept at crafting boomerangs.\r\n At first, they were playthings, but later in life, he learned to enhance his boomerangs with incendiary or electrifying components. Digger’s skill with the device led to a job as a performer and boomerang prom\r\noter in the U.S., but he didn’t receive a warm welcome. Laughter from the audience made him resentful, so he took his bitterness and poured it into a life of crime, taking on the moniker of Captain Boomerang. E\r\nventually, the law caught up with him, and Digger found himself looking at a life in prison. That is, of course, unless he joined the Suicide Squad for a chance at a pardon.', 500, NULL, NULL),
(15, 'Deadshot_profil.png', 'Deadshot', './pictures/profil/Deadshot_profil.png', 'DEADSHOT', 'Suicid Squad', 'Part of Gotham City s long line of rogues, Deadshot is obsessed with precision, fi\r\nrmly believing that the target who s been paid for should be the only one taken down. In the midst of a successful career, Lawton was taken down by the Dark Knight and sentenced to life in prison for the countl\r\ness assassinations he committed. However, a man of Lawton s skills earns a reputation.', 3375, NULL, NULL),
(16, 'El-Diablo.jpeg', 'El_Diablo', './pictures/profil/El-Diablo.jpeg', 'EL DIABLO', 'Suicid Squad', 'When gang leader Chato Santana was left severely wounded after being betrayed by his second-in-command, he f\r\nound himself sharing a hospital room with the comatose gunslinger Lazarus Lane. The nearly dead Santana traveled to the spirit world, where Lane passed the El Diablo curse he had been suffering from on to him. \r\nIt wasn’t a gift. The El Diablo curse is rooted in revenge and punishment. It drives the afflicted to seek right for any wrongs that have been done, regardless of the cost. It bestows its host with a variety of\r\n abilities, most notably pyrokinesis and extreme resistance to injury, as well as supernatural skills such as seeing a person’s sins written on their soul and communicating with spirits in the great beyond.', 2500, NULL, NULL),
(17, 'Enchanteresse.jpg', 'Enchantress', './pictures/profil/Enchanteresse.jpg', 'ENCHANTRESS', 'Suicid Squad', 'Initially, June used her newfound skills as Enchantress to defeat evil creatures. She walked a heroi\r\nc path, but sadly, her good intentions didn’t last. As June’s Enchantress persona became more nefarious, she enlisted in the Suicide Squad, the incentive for which was Amanda Waller’s help in learning how to cont\r\nrol the Enchantress.', 25000, NULL, NULL),
(18, 'Katana.jpg', 'Katana', './pictures/profil/Katana.jpg', 'KATANA', 'Suicid Squad', 'However, Katana s quest for justice isn t a solo affair—the souls of her dead husband and countless others currently reside in her sword, the mystical blade known as the Soultaker.', 2750, NULL, NULL),
(19, 'Killer-croc_profil.jpg', 'Killer_Croc', './pictures/profil/Killer-croc_profil.jpg', 'KILLER CROC', 'Suicid Squad', 'As he grew older, Waylon became bitter, developing into a violent and ma\r\nlevolent criminal and adopting a fearful name that matched his frightening appearance—Killer Croc. Waylon managed to engineer a career path that took him from sideshow wrestler to a formidable criminal figure in \r\nthe Gotham City underworld, often finding himself at violent odds with Batman. And yet, perhaps because of his childhood, Waylon has a soft spot for abandoned and neglected children. He shelters many within his t\r\nerritory in the sewers of Gotham, something that has not gone unnoticed by the Dark Knight, who has demonstrated a bit more leniency with Croc over the years than with most of Gotham s rogues.', 1350, NULL, NULL),
(20, 'Rick-flag_profil.jpg', 'Rick_Flag', './pictures/profil/Rick-flag_profil.jpg', 'RICK_FLAG', 'Suicid Squad', 'Leading the infamous Suicide Squad comes with a lot of baggage. Comprised entirely of criminals an\r\nd super-villains, the group draws the most challenging missions where survival is almost always secondary. As a military hero, Rick doesn’t share the checkered past of many of his teammates, but is nevertheless f\r\niercely loyal to the Squad. He’s never backed down from a conflict and he’s applied his talents as a leader, a pilot and a fighter in scrape after scrape.', 1000, NULL, NULL),
(21, 'Slipknot.jpg', 'Slipknot', './pictures/profil/Slipknot.jpg', 'SLIPKNOT', 'Suicid Squad', 'Slipknot is a villain who is believed to have once worked as a chemist in the Southern United States, where he devel\r\noped the supremely powerful adhesive that covers his ropes.', 10, NULL, NULL),
(22, 'Star-lord_profile.jpg', 'Star_Lord', './pictures/profil/Star-lord_profile.jpg', 'STAR LORD', 'Guardians of the Galaxy', 'Refusing to miss his opportunity, Peter Jason Quill stole a scoutship from Cape Canaveral, retur\r\nned to Eve, and shot his way to the appointed spot, where his old rival Harrelson, NASA s choice to be Star-Lord, was awaiting selection, where Quill was transported away in his stead, and transformed into Star-L\r\nord.', 10000, NULL, NULL),
(23, 'Rocket-Raccoon.jpg', 'Rocket_Raccoon', './pictures/profil/Rocket-Raccoon.jpg', 'ROCKET RACCOON', 'Guardians of the Galaxy', 'An expert marksman with a penchant for large weaponry, Rocket Raccoon is the last\r\n of his kind. After being captured by the Kree, Rocket teams up with Star-Lord and other adventurers to form the Guardians of the Galaxy. Together, they travel the galaxy and defend it from those who wish it harm\r\n.', 7500, NULL, NULL),
(24, 'Groot_profile.jpg', 'Groot', './pictures/profil/Groot_profile.jpg', 'GROOT', 'Guardians of the Galaxy', 'The tree-like creature known as Groot was captured by the Kree and put on a team with Star-Lord, Bug,\r\n Mantis, and Rocket Raccoon. A tree of few words, Groot formed a bond with the creature known as Rocket Raccoon. Forming the Guardians of the Galaxy, Groot and his best friend Rocket travel through space getting \r\ninto trouble wherever they go.', 40000, NULL, NULL),
(25, 'Gamora_profil.jpg', 'Gamora', './pictures/profil/Gamora_profil.jpg', 'GAMORA', 'Guardians of the Galaxy', 'The last of the Zen-Whoberi race, Gamora was adopted by the villainous Thanos and raised as an assa\r\nssin. Gamora turned on her adopted father and now uses her abilities to help those who cannot help themselves. A veteran of the Annihilation Wave, Gamora now travels with the Guardians of the Galaxy and is known \r\nas the Most Dangerous Woman in the Universe.', 35000, NULL, NULL),
(26, 'Drax_profil.jpg', 'Drax', './pictures/profil/Drax_profil.jpg', 'DRAX', 'Guardians of the Galaxy', 'After being murdered along with his family by Thanos, Arthur Douglas was reborn as Drax t\r\nhe Destroyer, a superhuman warrior designed to defeat the mad Titan. Recruited by Star-Lord to join the Guardians of the Galaxy, Drax possesses superhuman strength, durability and a healing factor making him stro\r\nng enough to face any threat he comes across.', 5500, NULL, NULL),
(27, 'dancing-groot.jpg', 'Dancing_Groot', './photo/dancing-groot.jpg', 'DANCING GROOT', 'Guardians of the Galaxy', 'After the death of Groot during the crash of Ronan s ship, Rocket Raccoon picked up Groot seeds found in the rubble he plamed in a flower pot. The flower that pushed addore moved with music, so reborn Groot.', 200000, NULL, NULL),
(28, 'Deadpool_profile.jpg', 'DeadPool', './pictures/profil/Deadpool_profile.jpg', 'DEADPOOL', 'Unknow', 'Wade Wilson is a former test subject of the Weapon X program, possessing a regenerative healing factor and\r\n an unstable compiling of other "Weapon X" experiments. Deadpool s powers and personality traits combine to make a wild, mentally unstable, and unpredictable mercenary. Deadpool has been a member of X-Force and t\r\nhe Thunderbolts, and a self-professed member of the X-Men and Avengers. The "Merc with a Mouth" is infamous for breaking the fourth wall.', 150000, NULL, NULL),
(29, 'Spiderman_profil.jpg', 'Spiderman', './pictures/profil/Spiderman_profil.jpg', 'SPIDERMAN', 'Unknow', 'Bitten by a radioactive spider, high school student Peter Parker gained the speed, strength and powers of a \r\nspider. Adopting the name Spider-Man, Peter hoped to start a career using his new abilities. Taught that with great power comes great responsibility, Spidey has vowed to use his powers to help people.', 125000, NULL, NULL),
(30, 'Joker_profil.jpg', 'Joker', './pictures/profil/Joker_profil.jpg', 'JOKER', 'Unknow', 'Unpredictable, violent and incredibly dangerous, he is chaos personified and has taken on everyone from his archenemy Batman to even the Man of Steel. But Gotham remains his primary home and Batman his biggest adversary, and no hero is perhaps better suited as in many ways, the Joker is the polar opposite of the Dark K\r\nnight. Both were created by a great tragedy, but Batman has since vowed to do whatever it takes to prevent similar incidents, the Joker revels in creating chaos and destroying lives, believing that life’s a big joke and psychotically demonstrating that in a moment, it can all change.', 175000, NULL, NULL),
(31, 'Batman.jpg', 'Batman_a', './photo/Batman.jpg', 'BATMAN', 'Justice League', '', 0, NULL, NULL),
(32, 'captain-america.jpg', 'Captain_America_a', './photo/captain-america.jpg', 'CAPTAIN AMERICA', 'Avengers', '', 0, NULL, NULL),
(34, 'harley.jpg', 'Harley_Quinn_a', './photo/harley.jpg', 'HARLEY QUINN', 'Suicide Squad', '', 0, NULL, NULL),
(35, 'aqua.jpg', 'Aquaman_a', './photo/aqua.jpg', 'AQUAMAN', 'Justice League', '', 0, NULL, NULL),
(36, 'widow.jpg', 'Black_Widow_a', './photo/widow.jpg', 'BLACK WIDOW', 'Avengers', '', 0, NULL, NULL),
(37, 'croc.jpg', 'Killer_Croc_a', './photo/croc.jpg', 'KILLER CROC', 'Suicide Squad', '', 0, NULL, NULL),
(38, 'cyborg.jpg', 'Cyborg_a', './photo/cyborg.jpg', 'CYBORG', 'Justice League', '', 0, NULL, NULL),
(39, 'hulk.jpg', 'Hulk_a', './photo/hulk.jpg', 'HULK', 'Avengers', '', 0, NULL, NULL),
(40, 'enchantress.jpg', 'Enchantress_a', './photo/enchantress.jpg', 'ENCHANTRES', 'Suicide Squad', '', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Hero_Utilisateur`
--

CREATE TABLE IF NOT EXISTS `Hero_Utilisateur` (
  `ID_Hero` int(6) unsigned DEFAULT NULL,
  `ID_utilisateur` int(6) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Hero_Utilisateur`
--

INSERT INTO `Hero_Utilisateur` (`ID_Hero`, `ID_utilisateur`) VALUES
(13, 1);

-- --------------------------------------------------------

--
-- Structure de la table `Location`
--

CREATE TABLE IF NOT EXISTS `Location` (
`ID` int(6) unsigned NOT NULL,
  `ID_Hero` int(6) unsigned DEFAULT NULL,
  `ID_User` int(6) unsigned DEFAULT NULL,
  `Date_begin` date DEFAULT NULL,
  `Hour_begin` int(6) DEFAULT NULL,
  `Hours` int(6) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Role`
--

CREATE TABLE IF NOT EXISTS `Role` (
`ID` int(6) unsigned NOT NULL,
  `Libelle` varchar(20) NOT NULL,
  `Description` text,
  `Date_creation` date DEFAULT NULL,
  `Date_modification` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Role`
--

INSERT INTO `Role` (`ID`, `Libelle`, `Description`, `Date_creation`, `Date_modification`) VALUES
(1, 'Dieu', 'Admin', '0000-00-00', '0000-00-00'),
(2, 'Etre_inferieur', 'Utilisateurs', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `Team`
--

CREATE TABLE IF NOT EXISTS `Team` (
`ID` int(6) unsigned NOT NULL,
  `Team` varchar(30) NOT NULL,
  `Description` text,
  `Date_creation` date DEFAULT NULL,
  `Date_modification` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Team`
--

INSERT INTO `Team` (`ID`, `Team`, `Description`, `Date_creation`, `Date_modification`) VALUES
(1, 'Avengers', 'Earth s Mightiest Heroes joined forces to take on threats that were too big for any one hero to tackle. With a roster that has included Captain America, Iron Man, Ant-Man, Hulk, Thor, Wasp and dozens more over the years, the Avengers have come to be regarded as Earth s No. 1 team.', '0000-00-00', '0000-00-00'),
(2, 'Guardians of the galaxy', 'A group of cosmic adventurers led by Star-Lord, the Guardians of the Galaxy protect the universe from threats all across space. The team also includes Drax, Gamora, Groot and Rocket Raccoon!', '0000-00-00', '0000-00-00'),
(3, 'Suicide Squad', 'Of course, no one will officially admit to any of this. That s the charm of Task Force X, perhaps better known by its nickname: the Suicide Squad. This team of super-villains, assembled by their director Amanda “The Wall” Waller, undertakes high-risk covert operations and in exchange receive commuted prison sentences.', '0000-00-00', '0000-00-00'),
(4, 'Justice League', 'Greater than the sum of their awe-inspiring parts, the Justice League handles threats too massive for any single hero. Made up of the World’s Greatest Super Heroes, their membership inflates and contracts around each new threat, but the core line-up is known as the Big Seven: Superman, the most powerful hero in the world.', '0000-00-00', '0000-00-00'),
(5, 'Exclusive', 'ABSOLUTELY EXCEPTIONAL', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `Team_Hero`
--

CREATE TABLE IF NOT EXISTS `Team_Hero` (
  `ID_Team` int(6) unsigned NOT NULL,
  `ID_Hero` int(6) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Team_Hero`
--

INSERT INTO `Team_Hero` (`ID_Team`, `ID_Hero`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(4, 7),
(4, 8),
(4, 9),
(4, 10),
(4, 11),
(4, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(3, 18),
(3, 19),
(3, 20),
(3, 21),
(5, 27),
(5, 28),
(5, 29),
(5, 30);

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateurs`
--

CREATE TABLE IF NOT EXISTS `Utilisateurs` (
`ID` int(6) unsigned NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Date_de_naissance` date DEFAULT NULL,
  `Ville` varchar(40) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Code_postale` varchar(5) NOT NULL,
  `Pays` varchar(30) NOT NULL,
  `sexe` char(1) NOT NULL,
  `Role` int(6) unsigned DEFAULT NULL,
  `Date_creation` date DEFAULT NULL,
  `Date_modification` date DEFAULT NULL,
  `Login` varchar(20) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Pass_word` varchar(150) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Utilisateurs`
--

INSERT INTO `Utilisateurs` (`ID`, `Nom`, `Prenom`, `Date_de_naissance`, `Ville`, `Adresse`, `Code_postale`, `Pays`, `sexe`, `Role`, `Date_creation`, `Date_modification`, `Login`, `Email`, `Pass_word`) VALUES
(1, 'PRUVOST', 'Joffrey', '1998-06-02', 'Croix en ternois', '16 route nationale', '62130', 'France', 'M', 1, '2016-11-09', '2016-11-09', 'Very_Bad_Jok', 'pruvos_j@etna-alternance.net', '2cd1de3f90aae0636e1c28436f9e27bc'),
(2, 'Selatni', 'Ryad', '1994-07-20', 'marly-la-ville', '20 rue du parc', '95670', 'France', 'M', 2, '2016-11-17', '2016-11-17', 'selatn_r', 'selatn_r@etna-alternance.net', 'fca11899dc842eee3e6c1c852838cac4');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Hero`
--
ALTER TABLE `Hero`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Hero_Utilisateur`
--
ALTER TABLE `Hero_Utilisateur`
 ADD KEY `ID_Hero` (`ID_Hero`), ADD KEY `ID_utilisateur` (`ID_utilisateur`);

--
-- Index pour la table `Location`
--
ALTER TABLE `Location`
 ADD PRIMARY KEY (`ID`), ADD KEY `ID_Hero` (`ID_Hero`), ADD KEY `ID_User` (`ID_User`);

--
-- Index pour la table `Role`
--
ALTER TABLE `Role`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Team`
--
ALTER TABLE `Team`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Team_Hero`
--
ALTER TABLE `Team_Hero`
 ADD KEY `ID_Team` (`ID_Team`), ADD KEY `ID_Hero` (`ID_Hero`);

--
-- Index pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`), ADD UNIQUE KEY `Login` (`Login`), ADD UNIQUE KEY `Email` (`Email`), ADD UNIQUE KEY `Login_2` (`Login`), ADD KEY `Role` (`Role`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Hero`
--
ALTER TABLE `Hero`
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT pour la table `Location`
--
ALTER TABLE `Location`
MODIFY `ID` int(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Role`
--
ALTER TABLE `Role`
MODIFY `ID` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `Team`
--
ALTER TABLE `Team`
MODIFY `ID` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
MODIFY `ID` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Hero_Utilisateur`
--
ALTER TABLE `Hero_Utilisateur`
ADD CONSTRAINT `Produit_Utilisateur_ibfk_1` FOREIGN KEY (`ID_Hero`) REFERENCES `Hero` (`id`),
ADD CONSTRAINT `Produit_Utilisateur_ibfk_2` FOREIGN KEY (`ID_utilisateur`) REFERENCES `Utilisateurs` (`ID`);

--
-- Contraintes pour la table `Location`
--
ALTER TABLE `Location`
ADD CONSTRAINT `Location_ibfk_1` FOREIGN KEY (`ID_Hero`) REFERENCES `Hero` (`id`),
ADD CONSTRAINT `Location_ibfk_2` FOREIGN KEY (`ID_User`) REFERENCES `Utilisateurs` (`ID`);

--
-- Contraintes pour la table `Team_Hero`
--
ALTER TABLE `Team_Hero`
ADD CONSTRAINT `Categorie_Produit_ibfk_1` FOREIGN KEY (`ID_Team`) REFERENCES `Team` (`ID`),
ADD CONSTRAINT `Categorie_Produit_ibfk_2` FOREIGN KEY (`ID_Hero`) REFERENCES `Hero` (`id`);

--
-- Contraintes pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
ADD CONSTRAINT `Utilisateurs_ibfk_1` FOREIGN KEY (`Role`) REFERENCES `Role` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
