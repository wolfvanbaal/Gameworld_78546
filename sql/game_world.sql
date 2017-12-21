-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 21, 2017 at 09:19 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game_world`
--

-- --------------------------------------------------------

--
-- Table structure for table `nintendo_switch`
--

CREATE TABLE `nintendo_switch` (
  `id` int(11) NOT NULL,
  `gamename` varchar(50) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `discription` varchar(1900) NOT NULL,
  `cost` decimal(60,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nintendo_switch`
--

INSERT INTO `nintendo_switch` (`id`, `gamename`, `picture`, `discription`, `cost`) VALUES
(1, 'Super Mario Odyssey', 'images/game_covers/Odyssey.jpg', 'Mario maakt een reis rond de wereld!', '59.98'),
(2, 'Rayman Legends ', 'images/game_covers/Rayman.jpg', 'Rayman, Globox, en de Teensies wandelen door een betoverd bos en ontdekken een mysterieuze tent gevuld met allerlei boeiende schilderijen. Wanneer ze goed kijken, merken ze dat elk schilderij het verhaal van een mythische wereld vertelt. Terwijl ze aandachtig kijken naar een schilderij dat een middeleeuws landschap afbeeldt, worden ze plots in het schilderij gezogen. Zo betreden ze de magische wereld en kan het avontuur beginnen. De bende moet rennen, springen en vechten door elke wereld om de overwinnig te behalen en de geheimen van elk mysterieus schilderij te ontdekken.', '39.98'),
(3, 'Splatoon 2', 'images/game_covers/Splatoon2.jpg', 'In this sequel to the successful original, players compete again in teams of four. Splatoon 2 contains new levels, clothing styles and weapons, such as the Splat Dualies, which you can operate with two hands.', '59.98'),
(4, 'The Legend of Zelda - Breath of the Wild', 'images/game_covers/zelda.jpg', 'In the latest section in the The Legend of Zelda series, you explore a gigantic world of unparalleled size. Link encounters new puzzles and enemies in this huge environment. The world knows no secretions, so discover what lies behind the horizon!', '64.98'),
(5, 'Xenoblade 2', 'images/game_covers/Xenoblade2.jpg', 'Xenoblade Chronicles 2 is the sequel to the original, highly acclaimed RPG that appeared in Wii in 2011. This sequel provides access to new characters and worlds, with an extensive fighting system that will still feel familiar to fans of the first game. In Xenoblade Chronicles 2 you get to deal with Blades, artificial life forms that connect with Drivers so that they can use their weapons and powers during combat. Experience the story of Rex and his new friend Pyra, a Blade that gives Rex access to an immense power. Together Rex and Pyra go in search of Elysium, the ultimate paradise for all mankind.', '59.98'),
(6, 'Fire Emblem Warriors', 'images/game_covers/FireEmblemWarriors.jpg', 'Heroes from different worlds join hands!  Take on enemy force majeure and bloodthirsty monsters with Marth, Xander, Corrin and other heroes from Fire Emblem, who show spectacular moves in the style of Dynasty Warriors.  Take control of old and new heroes from Fire Emblem, give them commands in the thick of the battle and let fighters work together for unparalleled combos. You can unlock new characters who all have unique attacks, weapons and voices in this large-scale action game of the team behind Hyrule Warriors.', '59.98');

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE `pc` (
  `id` int(11) NOT NULL,
  `gamename` varchar(25) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `discription` varchar(1900) NOT NULL,
  `cost` decimal(60,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`id`, `gamename`, `picture`, `discription`, `cost`) VALUES
(1, 'terraria', 'images/game_covers/terraria.jpg', 'Dig_fight_build', '10.00'),
(2, 'stardew valley', 'images/game_covers/stardewvalley.jpg', 'Youve inherited your grandfathers old farm plot in Stardew Valley.', '13.99'),
(3, 'starbound', 'images/game_covers/starbound.jpg', 'Youve fled your home only to find yourself lost in space with a damaged ship. Your only option is to beam down to the planet below and gather the resources you need to repair your ship and set off to explore the vast infinite universeâ€¦', '13.99'),
(4, 'Secrets of Grindea', 'images/game_covers/SecretsofGrindea.jpg', 'Secrets of Grindea is an old-school Action RPG with co-op support for up to 4 players. It is a tribute to and sometimes a parody of the old SNES games so many of us grew up with and loved! Journey through fantastical lands and battle tons of different enemies and bosses in your quest for truth, friendship and, above all, finding the worlds rarest treasures!', '13.99'),
(5, 'The Elder Scrolls V', 'images/game_covers/TheElderScrollsV.jpg', 'The Empire of Tamriel is on the edge. The High King of Skyrim has been murdered. Alliances form as claims to the throne are made. In the midst of this conflict, a far more dangerous, ancient evil is awakened. Dragons, long lost to the passages of the Elder Scrolls, have returned to Tamriel. The future of Skyrim, even the Empire itself, hangs in the balance as they wait for the prophesized Dragonborn to come; a hero born with the power of The Voice, and the only one who can stand amongst the dragons.', '29.99'),
(6, 'Age of Empires II HD', 'images/game_covers/AgeofEmpiresIIHD.jpg', 'In Age of Empires II: HD Edition zullen zowel nieuwe spelers als liefhebbers van het originele spel verliefd worden op de klassieke ervaring van Age of Empires II. Verken alle originele campagnes van de Age of Kings en The Conquerors uitbreidingen, kies uit 18 beschavingen uit duizend jaar geschiedenis, en begeef je online om andere Steam-spelers uit te dagen in jouw zoektocht naar wereldoverheersing door de eeuwen heen. Het spel dat oorspronkelijk door Ensemble Studios ontwikkeld was en door Hidden Path Entertainment, Skybox Labs en Forgotten Empires heruitgevonden in hoge resolutie komt naar Steam. Microsoft Studios presenteert met trots Age of Empires II: HD Edition!', '19.99');

-- --------------------------------------------------------

--
-- Table structure for table `ps4`
--

CREATE TABLE `ps4` (
  `gamename` varchar(50) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `cost` decimal(60,2) NOT NULL,
  `discription` varchar(1900) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ps4`
--

INSERT INTO `ps4` (`gamename`, `picture`, `cost`, `discription`, `id`) VALUES
('Star Wars - Battlefront II', 'images/game_covers/SBFII.jpg', '64.98', 'Embark on rich and vibrant Star Wars multiplayer battles from all three eras: prequel, classic and new trilogy. Customize your heroes, starfighters or soldiers, each with unique skills that you can use during the battle.', 1),
('Horizon - Zero Dawn', 'images/game_covers/HZD.jpg', '64.98', 'Take control of Aloy, a young hunter who is looking for her destiny in the remnants of a distant past. From her birth she was banned by her own tribe. Aloy has learned to use her dexterity, intelligence and deadly precision to hunt the Machines, to defend against other tribes and to survive in wild nature.', 2),
('ARK - Survival Evolved', 'images/game_covers/ARK.jpg', '64.98', 'Prepare for the ultimate dino adventure! Wrapped up on a mysterious prehistoric island, you have to explore the different areas while hunting, harvesting, building implements, growing food and building a house for survival. Use your skills to kill, tame, breed and even ride the dinosaurs and other primitive animals that live on the \'ARK\'. Make sure your technology evolves from primitive tools to laser guns that you can place on a T-Rex and play alone or together with hundreds of other players.', 3),
('Nioh', 'images/game_covers/Nioh.jpg', '39.98', 'In Nioh you dive into the bloody Japanese Sengoku period from the 16th century, the era of wars and dark forces. The main character is William, a samurai without a master who provides brutal battles against experienced samurai, wicked beasts and demons. The story of Nioh is loosely based on an unfinished script by master filmmaker Akira Kurosawa.\r\n\r\nHis background as a savage warrior and extensive knowledge of the sword enables him to survive in the demon-ridden samurai country. These demons, also known as Yokai, lie in wait in the shadows to ambush unsuspecting victims. You will also have to compete against other samurai in supernatural sword battles that will test even the skills, patience and strategic insight of the most hardened samurai.', 4),
('Okami', 'images/game_covers/Okami.jpg', '24.98', 'Okami HD opens with a story about the goddess Shiranui, a white wolf, who joins forces with the great swordsman Nagi to take on an eight-headed demon called Orochi who is bothering the village of Kamiki. ', 5),
('Assassins Creed - Origins', 'images/game_covers/Origins.jpg', '64.98', 'The old Egypt. Once a prosperous and influential empire, now a society in decline. Dive into this mysterious part of history and discover the secrets of the great pyramids, forgotten myths, the last pharaohs and - described in lost hieroglyphs - the emergence of the Assassins brotherhood.', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nintendo_switch`
--
ALTER TABLE `nintendo_switch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ps4`
--
ALTER TABLE `ps4`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nintendo_switch`
--
ALTER TABLE `nintendo_switch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pc`
--
ALTER TABLE `pc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ps4`
--
ALTER TABLE `ps4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
