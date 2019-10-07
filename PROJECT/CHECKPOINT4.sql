-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2019 at 12:28 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CHECKPOINT4`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `name`, `job`, `description`, `picture`) VALUES
(5, 'Achille Zavatta', 'Clown', 'Achille Zavatta (6 May 1915 – 16 November 1993) was a French clown, artist and circus operator.Achille Zavatta was born in La Goulette, Tunisia, the son of Federico Zavatta, a circus owner. He started performing in his family\'s circus show at the age of three, forming with his brothers Michel and Rolph, the Zavatta Trio. He was the interval act at the 1962 Eurovision Song Contest in Luxemburg. To this day the Zavatta Circus tours France and surrounding countries, these performances include live tiger acts, which means the circus cannot tour Britain under the Animal Welfare Act. The circus is rated as a top show in France.He became famous for his skills as a pantomime.\r\nHe committed suicide[2] in 1993 in Ouzouer des Champs, Loiret and was interred in the Père Lachaise Cemetery in Paris', '/build/clown.jpg'),
(6, 'Henri Martin', 'Dompteur', 'Le 24 décembre 1819, le dompteur français Henri Martin entra dans une cage de la ménagerie foraine néerlandaise Van Aken avec le tigre Atyr à Nuremberg, en Bavière.Dans le troisième Cirque olympique à Paris, la création en 1831 de la pantomime à grand spectacle Les Lions de Mysore marqua l\'avènement du domptage au cirque. Le dompteur Henri Martin fut engagé, avec ses fauves (ses lions Néron et Cobourg, son tigre Atyr), par les frères Franconi qui montèrent pour lui cette pantomime dans laquelle les félins du dompteur marseillais étaient présentés derrière un treillage placé sur le devant de la scène.', '/build/dompteur.jpg'),
(7, 'Rudolf Nureyev', 'Danseur', 'Rudolf Khametovich Nureyev (Tatar: Рудольф Хәмит улы Нуриев Rudolf Xämid ulı Nuriyev, Russian: Рудо́льф Хаме́тович Нуре́ев, IPA: [rʊˈdolʲf nʊˈrʲɛjɪf]; 17 March 1938 – 6 January 1993) was a Soviet ballet and contemporary dancer and choreographer. Named Lord of the Dance,[1][2][3] Nureyev is widely regarded as the greatest male ballet dancer of his generation.\r\nNureyev was born on a Trans-Siberian train near Irkutsk, Siberia, Soviet Union to a Tatar Muslim family. Nureyev began his early career with the Mariinsky Ballet in St. Petersburg. He defected from the Soviet Union to the West in 1961, despite KGB efforts to stop him.[7] This was the first defection of a Soviet artist during the Cold War and it created an international sensation. He went on to dance with The Royal Ballet in London and from 1983 to 1989 served as director of the Paris Opera Ballet. In addition to his technical prowess, Rudolf Nureyev was an accomplished choreographer serving as the chief choreographer of the Paris Opera Ballet. He produced his own interpretations of numerous classical works,[8] including Swan Lake, Giselle, and La Bayadère)', '/build/danseur.jpg'),
(8, 'Lisa Skinner', 'Trapeziste', 'Skinner began gymnastics in 1987 at Lawnton Academy. Between 1995 and 2004, she was a consistent presence on the Australian team, competing at four World Championships, three Olympic Games and many other international meets. She was the Australian national champion in 1996 and 1997.\r\nSkinner made her senior international debut at the 1995 World Championships in Sabae, placing 12th with the Australian team. The next year, at the 1996 Summer Olympics, she helped Australia place 10th in the team finals and finished 36th in the individual all-around.\r\nIn the following years, Skinner\'s international performance improved dramatically. She earned two gold medals at the 1998 Commonwealth Games: one with the Australian team, the other as an individual on the uneven bars. At the 1999 World Championships, she placed 15th in the all-around.)', '/build/trapeziste.jpg'),
(9, 'Anthony Gatto', 'Jongleur', 'Anthony Gatto (real name Anthony Commarota, born April 14, 1973) is an American juggler who holds several juggling world records. He began performing in Las Vegas at the age of ten.\r\nBorn in Manhattan[1] and growing up in Maryland, he was a juggling prodigy: world-class by the age of nine.[2] He made his first television appearance at the age of 8 on the program That\'s Incredible! Gatto\'s early exposure to juggling, and much of his initial act, can be credited to his father Nick Gatto, a longtime performer.In 1998 Gatto met his future wife Danielle, who would go on to become his assistant during his performances. A professional dancer, Danielle added circus-style skills to her résumé to accompany her husband on circus tours. Danielle and Anthony married in 1999 and they have two children.In 2000 he became the first and so far only juggler to win the prestigious Golden Clown award at the 24th International Circus Festival of Monte-Carlo.[4] Between 2007 and 2009 Gatto\'s performance was a part of Cirque du Soleil\'s show Koozå. From 2010 to 2012 he was part of Cirque du Soleil\'s show La Nouba.In 2012 Anthony Gatto retired from performing in Cirque Du Soleil in order to run a concrete resurfacing business Big Top Concrete Resurfacing LLC under his birth name of Anthony Commarota.[5] The business was founded by him in August 2012 and is located in Orlando, Florida.', '/build/jongleur.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artist_showw`
--

CREATE TABLE `artist_showw` (
  `artist_id` int(11) NOT NULL,
  `showw_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artist_showw`
--

INSERT INTO `artist_showw` (`artist_id`, `showw_id`) VALUES
(5, 7),
(5, 11),
(6, 8),
(6, 11),
(7, 9),
(7, 12),
(8, 7),
(8, 10),
(9, 8),
(9, 10);

-- --------------------------------------------------------

--
-- Table structure for table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20190717071528', '2019-07-17 07:15:31'),
('20190717071716', '2019-07-17 07:17:17'),
('20190717082313', '2019-07-17 08:23:18'),
('20190717094207', '2019-07-17 09:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `showw`
--

CREATE TABLE `showw` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_picture1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_picture2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_picture3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_picture4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `showw`
--

INSERT INTO `showw` (`id`, `name`, `adress`, `price`, `date`, `picture`, `detail_picture1`, `detail_picture2`, `detail_picture3`, `detail_picture4`, `description`) VALUES
(7, 'Mystère', '3300 S Las Vegas Blvd, Las Vegas, NV 89109, USA', '80€', '08/08/1999', '/build/MystèreImageCard.png', '/build/Mystère1.png', '/build/Mystère2.png', '/build/Mystère3.png', '/build/Mystère4.png', 'Mystère is one of six resident Cirque du Soleil shows in Las Vegas, Nevada. Held in a custom theatre at the Treasure Island Hotel and Casino, the show was first performed on 25 December 1993, making it the company\'s longest running show. As with many Cirque du Soleil productions, Mystère features a mixture of circus skills, dance, elaborate sets, opera, worldbeat music, and street theatre-style comedy. Featuring a musical score composed by René Dupéré and Benoît Jutras, the show was created under the direction of Franco Dragone.'),
(8, 'Amaluna', '100 Station Ave, Oaks, PA 19456, USA', '120€', '18/09/2018', '/build/AmalunaImageCard.png', '/build/Amaluna1.jpg', '/build/Amaluna2.png', '/build/Amaluna3.jpg', '/build/Amaluna4.jpeg', 'Amaluna is a touring show by Cirque du Soleil, created and directed by Diane Paulus. It premiered in Montréal, Quebec, Canada, on April 19, 2012. Loosely inspired by William Shakespeare\'s The Tempest,[2] the story takes place on an island governed by goddesses. During a storm, a group of men are washed up on shore. The queen\'s daughter falls for one of the young men, and the trials of their love are the basis of the show\'s main narrative through-line.[3] The show is notable for having a cast that is 70% female.[4]\r\n\r\nThe title, Amaluna, is the combination of two words. Ama which refers to mother in many languages, and luna which means moon. The moon is a symbol of femininity, which is part of the reason it was chosen for this production.'),
(9, 'Crystal', '333 E Trade St, Charlotte, NC 28202, USA', '75€', '10/07/2019', '/build/CrystalImageCard.png', '/build/Crystal1.png', '/build/Crystal2.png', '/build/Crystal3.png', '/build/Crystal4.png', 'Crystal is an arena touring show by Cirque du Soleil that started previewing to the public in October 2017, with an official premiere in December 2017. It is Cirque du Soleil\'s 42nd original show since 1984, and the first one done on an ice rink, where most of the performers are ice skating throughout the show, and blends several circus acts with high-level ice skating. It is described as a woman shattering reality to discover herself in the world of possibility.\r\nKurt Browning, a four-time world champion Canadian figure skater, joined the creative team as the Skating Performances Senior Designer,[4] along with Benjamin Agosto, four-time world medalist American ice dancer, as the Skating Performances Designer.'),
(10, 'OVO', 'J5400 San Juan, San Juan Province, Argentina', '102€', '15/08/2019', '/build/OVOImageCard.png', '/build/OVO1.png', '/build/OVO2.png', '/build/OVO3.png', '/build/OVO4.png', 'Ovo is a touring circus production by Cirque du Soleil that premiered in Montréal, Canada, in 2009. Ovo\'s creator and director, Deborah Colker, took inspiration from the world of insects. The idea for Ovo was not to be about the acts, nor dancing, nor insects, but about movement.[1] The movement of life permeates the entire show with creatures flying, leaping, bounding, and crawling. Composer Berna Ceppas brought additional life to Ovo with a score inspired by the music of Brazil. Ovo means egg in Portuguese and represents the underlying thread through the show. Graphically, inside the logo of Ovo, is an insect. The two O\'s represent the eyes and the V forms the nose and antennas.'),
(11, 'Totem', '35100 Maspalomas, Las Palmas, Spain', '110€', '23/10/2019', '/build/TotemImageCard.png', '/build/Totem1.png', '/build/Totem2.png', '/build/Totem3.png', '/build/Totem4.jpg', 'Totem is a touring show by Cirque du Soleil that premiered in Montréal on April 22, 2010.[1] It was written and directed by previous collaborator Robert Lepage (Kà).[2] Cirque du Soleil describes Totem\'s theme as the evolution of humanity from its primordial, amphibian state toward the aspiration of flight, taking inspiration from many of humanity\'s founding myths.[3] The show was awarded the 2013 New York Drama Desk Award for Unique Theatrical Experience.[4]\r\n\r\nAll of Cirque du Soleil\'s previous touring productions were originally created to be performed inside large, custom-designed tents (called the grand chapiteau), but many of those shows have since been re-staged in arenas and other venues after the conclusion of their big top tour. Totem\'s creation team faced the challenge of designing a show that could be adapted for arenas and other venues from the outset.'),
(12, 'Zumanity', '3300 S Las Vegas Blvd, Las Vegas, NV 89109, USA', '83€', '02/08/2019', '/build/ZumanityImageCard.png', '/build/Zumanity1.png', '/build/Zumanity2.png', '/build/Zumanity3.png', '/build/Zumanity4.png', 'Zumanity is a resident cabaret-style show by Cirque du Soleil at the New York-New York Hotel & Casino on the Las Vegas Strip. The production was unveiled on September 20, 2003 (previews started on August 14, 2003). It is the first adult-themed Cirque du Soleil show, billed as the sensual side of Cirque du Soleil or another side of Cirque du Soleil. Created by René Richard Cyr and Dominic Champagne, Zumanity is a departure from the standard Cirque format. Intended to be for mature adult audiences only, this show is centered on erotic song, dance, acrobatics and comedy.[1]The inspiration to create Zumanity came from multiple sources. Cirque du Soleil founder Guy Laliberté had been offered the chance to create two new shows in Las Vegas, and wanted something completely new and original rather than multiple similar shows that would cannibalize off of each other\'s sales and audiences. Another reason was that the New York-New York Hotel and Casino wanted to make their entertainment appear more trendy. The hotel liked the concept of a more adult Cirque du Soleil performance.Laliberté admits that the biggest reason to produce this show was the chance to create something with riskier subject matter. He was interested in the idea of creating a show that explored human sexuality, something that was at complete odds with the other, more family-oriented Cirque du Soleil shows. Our previous shows have all been family-oriented and politically correct, which is great,Laliberté said, but we\'re human beings, we won\'t hide it. We\'re a bunch of happy campers. We like to live new experiences. Zumanity deals with some of those experiences.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(1, 'user@gmail.com', '[\"ROLE_USER\"]', '$2y$13$W8Wrqfft/Np.6.Kw.mLwbuYumz3XsPfEbbFl8ucIlhSa9NC5Ujzb.'),
(2, 'admin@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$pTdSTfJP9.FMx5tfDceFe.b4B0PTVwbO1zjG/91YkQlBywkkV1n36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist_showw`
--
ALTER TABLE `artist_showw`
  ADD PRIMARY KEY (`artist_id`,`showw_id`),
  ADD KEY `IDX_B5A050EB7970CF8` (`artist_id`),
  ADD KEY `IDX_B5A050E221C4ECF` (`showw_id`);

--
-- Indexes for table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `showw`
--
ALTER TABLE `showw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `showw`
--
ALTER TABLE `showw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `artist_showw`
--
ALTER TABLE `artist_showw`
  ADD CONSTRAINT `FK_B5A050E221C4ECF` FOREIGN KEY (`showw_id`) REFERENCES `showw` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B5A050EB7970CF8` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
