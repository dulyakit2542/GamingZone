-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 12:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamingzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `no_company` int(10) NOT NULL,
  `company` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`no_company`, `company`) VALUES
(1, 'Behaviour Interactive Inc.		'),
(2, 'Rockstar Games		'),
(3, 'Studio Wildcard		'),
(4, 'KOJIMA PRODUCTIONS		'),
(5, 'Rebellion		'),
(6, 'Electronic Arts		'),
(7, 'PUBG Corporation		'),
(8, 'Endnight Games Ltd		'),
(9, 'BANDAI Namco'),
(10, 'Funselektor Labs Inc.'),
(11, 'Codemasters'),
(12, 'HB Studios Multimedia Ltd.'),
(13, 'Paradox Development Studio'),
(14, 'inkle Ltd'),
(15, '星罗云布Nebula Game Studio'),
(16, 'Lightbulb Crew'),
(17, 'Code Heretic'),
(18, 'FuturLab'),
(19, 'Crystal Dynamics'),
(20, 'Choice of Games'),
(21, 'Storm Studio'),
(22, 'Markus with friends'),
(23, 'Galaxy Pest Control'),
(24, 'Valve'),
(25, 'CAPCOM Co., Ltd. '),
(26, 'Feral Interactive (Linux) '),
(27, 'Devolver Digital'),
(28, 'Innersloth '),
(29, 'Monolith Productions  '),
(30, ' IO Interactive A/S '),
(31, 'Marvelous Inc.'),
(32, 'Arc System Works '),
(33, 'Visual Concepts '),
(34, 'Pearl Abyss '),
(35, 'Electronic Arts '),
(36, 'Creepy Jar '),
(37, 'Guerrilla '),
(38, 'AQURIA Co., Ltd.'),
(39, 'jacktostudios'),
(40, 'DONTNOD Entertainment');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `group_game` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company` int(10) NOT NULL,
  `age` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `system` int(10) NOT NULL,
  `date` varchar(20) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `detail` varchar(255) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL,
  `detail_index` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `group_game`, `name`, `company`, `age`, `price`, `system`, `date`, `rating`, `detail`, `image`, `detail_index`) VALUES
(1, 1, 'Dead by Daylight\r\n', 1, '18+', '369', 1, '14 มิ.ย. 2016', '8/10', 'Dead by Daylight เป็นเกมสยองขวัญแบบผู้เล่นหลายคน (4 ต่อ 1) ซึ่งผู้เล่นหนึ่งคนจะรับบทบาทเป็นฆาตกรป่าเถื่อน และอีกสี่คนจะเล่นเป็นผู้รอดชีวิตที่พยายามหลบหนีจากฆาตกรและหลบเลี่ยงไม่ให้ถูกจับ ถูกทรมาน และถูกฆ่า ', 'deadby.jpg', 'Dead by Daylight เป็นเกมสยองขวัญแบบผู้เล่นหลายคน (4 ต่อ 1) ซึ่งผู้เล่นหนึ่งคนจะรับบทบาทเป็นฆาตกรป่าเaDead by Daylight เป็นเกมสยองขวัญแบบผู้เล่นหลายคน '),
(2, 2, 'Grand Theft Auto V\r\n', 2, '12+', '699', 1, '14 เม.ย. 2015', '9/10', 'Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second. ', 'gta.jpg', 'Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and '),
(3, 1, 'ARK: Survival Evolved', 1, '16+', '579 บาท', 2, '28 ส.ค. 2017', '9/10', 'Stranded on the shores of a mysterious island, you must learn to survive. Use your cunning to kill or tame the primeval creatures roaming the land, and encounter other players to survive, dominate... and escape!', 'ark.jpeg', 'Stranded on the shores of a mysterious island, you must learn to survive. Use your cunning to kill or tame the primeval creatures roaming the land, an'),
(4, 2, 'DEATH STRANDING ', 2, '18+', '    1,890 ', 3, '    14 ก.ค. 2020', '    8/10', 'เชิญพบประสบการณ์ใหม่แหวกแนวจากคุณ Hideo Kojima ผู้สร้างสรรค์เกมเลื่องชื่อ แซม บริดเจส ต้องหาญกล้าตะลุยโลกที่พลิกโฉมไปอย่างสิ้นเชิงเนื่องจาก Death Stranding แซมต้องแบกรับภาระในการสานต่ออนาคตของเราที่แตกเป็นเศษเสี้ยว โดยเดินทางไปทั่ว เพื่อปะติดปะต่อโลกที่แต', 'deathstan.jpg', 'เชิญพบประสบการณ์ใหม่แหวกแนวจากคุณ Hideo Kojima ผู้สร้างสรรค์เกมเลื่องชื่อ แซม บริดเจส ต้องหาญกล้าตะลุยโลกที่พลิกโฉมไปอย่างสิ้นเชิงเนื่องจาก Death Stra'),
(5, 2, 'Red Dead Redemption 2\r\n', 2, '18+', '1599', 1, '6 ธ.ค. 2019', '9/10', 'Winner of over 175 Game of the Year Awards and recipient of over 250 perfect scores, RDR2 is the epic tale of outlaw Arthur Morgan and the infamous Van der Linde gang, on the run across America at the dawn of the modern age. Also includes access to the sh', 'reddead.jpg', 'Winner of over 175 Game of the Year Awards and recipient of over 250 perfect scores, RDR2 is the epic tale of outlaw Arthur Morgan and the infamous Va'),
(26, 5, 'The Sims™ 4', 6, '12+', '999', 1, '2 ก.ย. 2014', '7/10', 'ปลดปล่อยจินตนาการของคุณและสร้างโลกซิมที่มีเอกลักษณ์! สำรวจและปรับแต่งทุกรายละเอียด ตั้งแต่ซิมไปจนถึงบ้านและอื่นๆ อีกมากมาย เลือกลุค การแสดงออก ', 'sim4.png', 'ปลดปล่อยจินตนาการของคุณและสร้างโลกซิมที่มีเอกลักษณ์! สำรวจและปรับแต่งทุกรายละเอียด ตั้งแต่ซิมไปจนถึงบ้านและอื่นๆ อีกมากมาย เลือกลุค การแสดงออก '),
(27, 2, 'PLAYERUNKNOWNS', 7, '18+', '280', 3, '21 ธ.ค. 2017', '9/10', 'PLAYERUNKNOWN, หรือผู้ที่ใครๆรู้จักเขาในชื่อ Brendan Greene, คือผู้บุกเบิกของเกมแนว Battle royale และเป็นผู้ให้กำเนิด MOD โหมดการเล่น Battle royale ในเกม ARMA และ H1Z1: King of the Kill ที่ PUBG Corp., Greene', 'pubg.jpg', 'PLAYERUNKNOWN, หรือผู้ที่ใครๆรู้จักเขาในชื่อ Brendan Greene, คือผู้บุกเบิกของเกมแนว Battle royale และเป็นผู้ให้กำเนิด MOD โหมดการเล่น Battle royale ใน'),
(29, 6, 'The Forest ', 8, '18+', '289', 1, '30 เม.ย. 2018', '7/10', 'As the lone survivor of a passenger jet crash, you find yourself in a mysterious forest battling to stay alive against a society of cannibalistic mutants.', 'forest.jpg', 'As the lone survivor of a passenger jet crash, you find yourself in a mysterious forest battling to stay alive against a society of cannibalistic muta'),
(30, 3, 'Sniper Elite 4', 5, '18+', '1049', 1, '14 ก.พ. 2017', '8/10', 'Discover unrivalled sniping freedom in the largest and most advanced World War 2 shooter ever built.', 'sniper4.jpg', 'Discover unrivalled sniping freedom in the largest and most advanced World War 2 shooter ever built.'),
(36, 7, 'eFootball PES 2021', 9, '12+', '790', 2, '15 ก.ย. 2020', '7/10', 'Please note that the latest data for certain licensed leagues and teams will only be available via an update post-release. You will need an internet connection in order to download this update.', 'pes2021.jpg', 'Please note that the latest data for certain licensed leagues and teams will only be available via an update post-release. You will need an internet c'),
(38, 7, 'art of rally', 10, '12+', '287', 1, '23 ก.ย. 2020', '6/10', 'Race across the world through colorful and stylized environments in top-down view.\r\nCompete for first place in the leaderboards with daily and weekly challenges.', 'rally.jpg', '	Race across the world through colorful and stylized environments in top-down view.\r\nCompete for first place in the leaderboards with daily and weekly'),
(39, 7, 'F1® 2020', 11, '18+', '699', 3, '9 ก.ค. 2020', '8/10', 'F1® 2020 is the most comprehensive F1® game yet, putting players firmly in the driving seat as they race against the best drivers in the world.', 'f1.jpg', 'F1® 2020 is the most comprehensive F1® game yet, putting players firmly in the driving seat as they race against the best drivers in the world.'),
(178, 7, 'PGA TOUR 2K21', 12, '12+', '1390', 2, '21 ส.ค. 2020', '6/10', 'The Digital Deluxe Edition that includes the Golden Touch Pack featuring a gold-plated driver and putter, as well as the 2K/adidas CodeChaos MyPLAYER Pack featuring the adidas CodeChaos BOA Golf Shoes, and custom adidas.', 'golf.jpg', 'The Digital Deluxe Edition that includes the Golden Touch Pack featuring a gold-plated driver and putter, as well as the 2K/adidas CodeChaos MyPLAYER '),
(179, 8, 'Crusader Kings III', 13, '12+', '579', 1, '1 ก.ย. 2020', '6/10', 'Paradox Development Studio brings you the sequel to one of the most popular strategy games ever made.', 'kings.jpg', 'Paradox Development Studio brings you the sequel to one of the most popular strategy games ever made.'),
(180, 8, 'Pendragon', 14, '12+', '233', 1, '22 ก.ย. 2020', '5/10', 'Pendragon is a turn-based strategy game, where every move you make drives the narrative, and every story twist opens new gameplay opportunities.', 'Pendragon.jpg', 'Pendragon is a turn-based strategy game, where every move you make drives the narrative, and every story twist opens new gameplay opportunities.'),
(181, 8, 'Sword of Shushan', 15, '18+', '191', 3, '25 ก.ย. 2020', '7/10', '\"Sword of Shushan\" is a strategic war chess game with the background of Shushan holy land and ancient demon wars.', 'sword.jpg', '\"Sword of Shushan\" is a strategic war chess game with the background of Shushan holy land and ancient demon wars.'),
(182, 8, 'Othercide', 16, '18+', '790', 2, '28 ก.ค. 2020', '7/10', 'Descend into Humanity’s last hope. The Daughters, echoes of the greatest warrior to ever live, are all who stand before Suffering and death.', 'other.jpg', 'Descend into Humanity’s last hope. The Daughters, echoes of the greatest warrior to ever live, are all who stand before Suffering and death.'),
(183, 8, 'Peaky Blinders: Mastermind', 18, '16+', '319', 2, '20 ส.ค. 2020', '8/10', 'Peaky Blinders: Mastermind is a puzzle-adventure game, based on the multi-award-winning BBC and Netflix TV show.', 'peaky.jpg', 'Peaky Blinders: Mastermind is a puzzle-adventure game, based on the multi-award-winning BBC and Netflix TV show.'),
(184, 9, 'Marvels Avengers', 19, '16+', '1990', 3, '4 ก.ย. 2020', '10/10', 'Online access required for multiplayer and to download post-launch content. Free Square Enix Members account required for multiplayer only.', 'marvel.jpg', 'Online access required for multiplayer and to download post-launch content. Free Square Enix Members account required for multiplayer only.'),
(185, 9, 'Vampire: The Masquerade — Night Road', 20, '18+', '151', 2, '24 ก.ย. 2020', '6/10', 'The elders have entrusted you, an elite vampire courier, to deliver their secrets. Can you outrun the hunters, the other drivers, and the rising sun?', 'vampire.jpg', 'The elders have entrusted you, an elite vampire courier, to deliver their secrets. Can you outrun the hunters, the other drivers, and the rising sun?'),
(186, 9, 'Island of Deception', 21, '18+', '30', 2, '15 ก.ย. 2020', '8/10', 'เกมนี้เป็นเกมประเภทโซเชียลเรียลไทม์และมีการแข่งขันแบบ Asymmetric ที่มีผู้เล่นแปดคน(คล้ายเกม Werewolf kill) ในเกม “เกาะพายุ”จะมีผู้เล่นแปดคนที่สุ่มจับคู่เป็นกลุ่มกัน', 'island.jpg', 'เกมนี้เป็นเกมประเภทโซเชียลเรียลไทม์และมีการแข่งขันแบบ Asymmetric ที่มีผู้เล่นแปดคน(คล้ายเกม Werewolf kill) ในเกม “เกาะพายุ”จะมีผู้เล่นแปดคนที่สุ่มจับค'),
(187, 9, 'The Girl of Glass: A Summer Birds Tale', 22, '12+', '228', 1, '22 ก.ย. 2020', '6/10', 'Join Kristal as she sets out on her journey to better understand herself and the world around her in a point and click adventure game, featuring turn-based combat and hand-painted environments.', 'girl.jpg', 'Join Kristal as she sets out on her journey to better understand herself and the world around her in a point and click adventure game, featuring turn-'),
(188, 9, 'The Feud: Wild West Tactics', 23, '16+', '559', 2, '23 ก.ค. 2020', '5/10', 'Feud: Wild West Tactics is a turn based game all about gun blazing, shotgun blasting, knife stabbing and dynamite throwing action in the Wild West.', 'feud.jpg', 'Feud: Wild West Tactics is a turn based game all about gun blazing, shotgun blasting, knife stabbing and dynamite throwing action in the Wild West.'),
(189, 1, 'Mafia Definitive Edition', 26, '18+', '969', 3, '25 ก.ย 2017', '8/10', 'Part one of the Mafia crime saga - 1930s, Lost Heaven, IL Re-made from the ground up, rise through the ranks of the Mafia during the Prohibition era of organized crime.', 'Mafia Definitive Edition.jpg', 'Part one of the Mafia crime saga - 1930s, Lost Heaven, IL Re-made from the ground up, rise through the ranks of the Mafia during the Prohibition era o'),
(190, 1, 'Serious Sam 4', 27, '18+', '469', 2, '24 ก.ย 2020', '6/10', 'Humanity is under siege as the full force of Mental’s hordes spread across the world, ravaging what remains of a broken and beaten civilization.', 'Serious Sam 4.jpg', 'Humanity is under siege as the full force of Mental’s hordes spread across the world, ravaging what remains of a broken and beaten civilization.'),
(191, 1, 'Panzer Dragoon: Remake', 28, '12+', '319', 2, '25 ก.ย 2020', '7/10', 'A new, remade version of the Panzer Dragoon game – true to the original, with improved graphics and controls, that suit modern gaming standards! On a far, lone planet, you encounter two dragons awaken from the ancient times.', 'Panzer Dragoon Remake.jpg', 'A new, remade version of the Panzer Dragoon game – true to the original, with improved graphics and controls, that suit modern gaming standards! On a '),
(192, 1, 'Medieval Dynasty', 29, '16+', '419', 3, '17 ก.ย 2020', '7/10', 'Europe in the early Middle Ages -- Nobles and clergy rule and the trade between nations brings prosperity as well as envy, distrust, and greed. Military conflict is everywhere and entire continents are changing.', 'Medieval Dynasty.jpg', 'Europe in the early Middle Ages -- Nobles and clergy rule and the trade between nations brings prosperity as well as envy, distrust, and greed. Milita'),
(193, 1, 'BPM: BULLETS PER MINUTE', 30, '16+', '289', 1, '15 ก.ย2020', '5/10', 'Fight as a mighty Valkyrie to repel the forces of the underworld from invading the world of Asgard.', 'BPM BULLETS PER MINUTE.jpg', 'Fight as a mighty Valkyrie to repel the forces of the underworld from invading the world of Asgard.'),
(204, 1, 'The Dungeon Of Naheulbeuk', 31, '12+', '419', 1, '17 ก.ย 2020', '6/10', 'Are you ready to dive into a tactical RPG chock-full of charm, humor and crazy characters?!y  clumsy, inexperienced and feisty but...they’ll have to endure each other’s company to get the dungeon’s treasure.', 'The Dungeon Of Naheulbeuk.jpg', 'Are you ready to dive into a tactical RPG chock-full of charm, humor and crazy characters?!y  clumsy, inexperienced and feisty but...they’ll have to e'),
(219, 1, 'Rebel Galaxy Outlaw', 32, '12+', '379', 2, '22 ก.ย 2020', '6/10', 'Out of cash, out of luck, out on the fringe. Juno Markev has a killer to tail, a debt to pay, and more trouble headed her way. Rebel Galaxy Outlaw takes place in a greasy, blue-collar world of outlaws, truckers, cops and thieves.', 'Rebel Galaxy Outlaw.jpg', 'Out of cash, out of luck, out on the fringe. Juno Markev has a killer to tail, a debt to pay, and more trouble headed her way. Rebel Galaxy Outlaw tak'),
(234, 1, 'Craftopia', 33, '16+', '319', 2, '4 ก.ย 2020', '7/10', 'Craftopia is the brand new multiplayer open-world survival action game.', 'Craftopia.jpg', 'Craftopia is the brand new multiplayer open-world survival action game.'),
(235, 1, 'The Last of Waifus', 34, '16+', '31', 1, '25 ก.ย 2020', '5/10', 'The Last of Waifus is a third-person shooter game in post-apocalyptic theme. You are playing as the last Waifu clearing out the fallen city from Infected whose only target is you.', 'The Last of Waifus.jpg', 'The Last of Waifus is a third-person shooter game in post-apocalyptic theme. You are playing as the last Waifu clearing out the fallen city from Infec'),
(236, 1, 'The Masquerade', 35, '16+', '189', 2, '24 ก.ย 2020', '6/10', 'Vampire: The Masquerade — Night Road is a 650,000-word interactive horror novel by Kyle Marquis, based on Vampire: The Masquerade and set in the World of Darkness shared story universe. Your choices control the story.', 'The Masquerade.jpg', 'Vampire: The Masquerade — Night Road is a 650,000-word interactive horror novel by Kyle Marquis, based on Vampire: The Masquerade and set in the World'),
(278, 1, 'Horizon Zero Dawn™ Complete Edition', 37, '18+', '579', 3, '7 ส.ค 2020', '8/10', 'สัมผัสการผจญภัยในตำนานที่สมบูรณ์แบบของ Aloy เพื่อเผยความลับของโลกที่กลุ่มจักรกลมรณะปกครอง นักล่าสาวที่ถูกเนรเทศออกจากเผ่าผู้นี้ต้องต่อสู้เพื่อตามหาตัวตนในอดีตและโชคชะตาของเธอ... เพื่อหยุดยั้งหายนะร้ายแรงที่จะเกิดขึ้นในอนาคต', 'Horizon Zero Dawn.jpg', 'สัมผัสการผจญภัยในตำนานที่สมบูรณ์แบบของ Aloy เพื่อเผยความลับของโลกที่กลุ่มจักรกลมรณะปกครอง นักล่าสาวที่ถูกเนรเทศออกจากเผ่าผู้นี้ต้องต่อสู้เพื่อตามหาตัว'),
(287, 1, 'SWORD ART ONLINE Alicization Lycoris', 38, '16+', '1390', 3, '10 ก.ค 2020', '7/10', 'They always shared the same moments. They thought it would be like this for eternity. Kirito awakens in a completely unknown virtual world, but something about it feels a bit familiar', 'SWORD ART ONLINE.jpg', 'They always shared the same moments. They thought it would be like this for eternity. Kirito awakens in a completely unknown virtual world, but someth'),
(288, 2, 'Night of the Dead', 35, '18+', '319', 3, '28 ส.ค 2020', '7/10', 'Lucy wakes up from a human experiment and gets trapped in a city covered with zombies. She must survive nightly zombie waves and communicate with a group of survivors to escape from the isolated area.', 'Night of the Dead.jpg', 'Lucy wakes up from a human experiment and gets trapped in a city covered with zombies. She must survive nightly zombie waves and communicate with a gr'),
(289, 1, 'Tell Me Why', 40, '16+', '379', 2, '27 ส.ค 2020', '6/10', 'Tell Me Why is the latest narrative adventure game from DONTNOD Entertainment, the studio behind the beloved franchise, Life is Strange. In this intimate mystery,', 'Tell Me Why.jpg', 'Tell Me Why is the latest narrative adventure game from DONTNOD Entertainment, the studio behind the beloved franchise, Life is Strange. In this intim'),
(290, 2, 'Bully', 2, '16+', '315', 1, '21 ต.ค. 2008', '9/10', ' Scholarship Edition takes place at the fictional New England boarding school, Bullworth Academy, and tells the story of mischievous 15-year-old Jimmy Hopkins as he goes through the hilarity and awkwardness of adolescence. ', 'bully.jpg', ' Scholarship Edition takes place at the fictional New England boarding school, Bullworth Academy, and tells the story of mischievous 15-year-old Jimmy'),
(291, 2, 'Grand Theft Auto: San Andreas', 2, '18+', '241', 1, '6 มิ.ย. 2005', '9/10', 'Five years ago Carl Johnson escaped from the pressures of life in Los Santos, San Andreas... a city tearing itself apart with gang trouble, drugs and corruption. Where filmstars and millionaires do their best to avoid the dealers and gangbangers.', 'gtasan.jpg', 'Five years ago Carl Johnson escaped from the pressures of life in Los Santos, San Andreas... a city tearing itself apart with gang trouble, drugs and '),
(292, 8, 'Dota 2', 24, '12+', 'free', 2, '9 ก.ค. 2013', '9/10', 'ทุก ๆ วันผู้เล่นนับล้านทั่วโลกก้าวเข้าสู่สนามรบเพื่อสวมบทบาทเป็นหนึ่งในกว่าร้อยฮีโร่ของ Dota และไม่ว่าจะเป็นชั่วโมงที่ 10 ของการเล่นหรือชั่วโมงที่ 1,000 คุณจะค้นพบสิ่งใหม่ ๆ อยู่เสมอ', 'dota.jpg', 'ทุก ๆ วันผู้เล่นนับล้านทั่วโลกก้าวเข้าสู่สนามรบเพื่อสวมบทบาทเป็นหนึ่งในกว่าร้อยฮีโร่ของ Dota และไม่ว่าจะเป็นชั่วโมงที่ 10 ของการเล่นหรือชั่วโมงที่ 1,0'),
(293, 6, 'DEVIL MAY CRY 5 ', 25, '18+', '559', 3, '8 มี.ค. 2019 ', '9/10', ' Prepare to get downright demonic with this signature blend of high-octane stylized action and otherworldly & original characters the series is known for.', 'dmc5.jpg', ' Prepare to get downright demonic with this signature blend of high-octane stylized action and otherworldly & original characters the series is known '),
(294, 2, 'Mad Max ', 26, '18+', '369', 2, '1 ก.ย. 2015 ', '9/10', 'Become Mad Max, the lone warrior in a savage post-apocalyptic world where cars are the key to survival', 'mm.jpg', 'Become Mad Max, the lone warrior in a savage post-apocalyptic world where cars are the key to survival');

-- --------------------------------------------------------

--
-- Table structure for table `group_game`
--

CREATE TABLE `group_game` (
  `no_group` int(10) NOT NULL,
  `name_group` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_game`
--

INSERT INTO `group_game` (`no_group`, `name_group`) VALUES
(1, 'Survive'),
(2, 'Adventure'),
(3, 'Shooting'),
(4, 'Racing car'),
(5, 'Casual'),
(6, 'Action'),
(7, 'sport'),
(8, 'strategy'),
(9, 'Indie'),
(10, 'RPG'),
(11, '');

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE `system` (
  `no_system` int(10) NOT NULL,
  `os` varchar(20) NOT NULL,
  `cpu` varchar(20) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `gpu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `system`
--

INSERT INTO `system` (`no_system`, `os`, `cpu`, `ram`, `gpu`) VALUES
(1, 'Windows 7', 'Intel Core i3-4170 	', '8GB', 'GeForce GTX 460	'),
(2, 'Windows 7', 'Intel Core i5-2400	', '8GB', 'NVIDIA GTX 670 	'),
(3, 'Windows 8.1', 'AMD Ryzen™ 3 1200	', '8GB', 'GeForce GTX 1050 	');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `permission` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `birthday`, `sex`, `password`, `permission`) VALUES
(21, 'Dulyakit', 'Phommachat', 'gamegamegamelove@gmail.com', '2021-03-10', 'ชาย', '123456', 'admin'),
(23, 'test', '2test', 'dulyakit2542@hotmail.com', '2021-03-09', 'ชาย', '111', NULL),
(29, 'ณัฐพล', 'นานา', 'abcd@gmail.com', '2021-03-09', 'ชาย', '123456789', NULL),
(31, 'root', 'root', 'root', '2021-03-23', 'ชาย', 'root', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`no_company`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `UC_Person` (`name`),
  ADD KEY `group_game` (`group_game`),
  ADD KEY `company` (`company`),
  ADD KEY `system` (`system`);

--
-- Indexes for table `group_game`
--
ALTER TABLE `group_game`
  ADD PRIMARY KEY (`no_group`);

--
-- Indexes for table `system`
--
ALTER TABLE `system`
  ADD PRIMARY KEY (`no_system`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UC_Person` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=394;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `FK_company` FOREIGN KEY (`company`) REFERENCES `company` (`no_company`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_group` FOREIGN KEY (`group_game`) REFERENCES `group_game` (`no_group`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_system` FOREIGN KEY (`system`) REFERENCES `system` (`no_system`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
