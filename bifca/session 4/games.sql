-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2021-04-08 10:32:19
-- 服务器版本： 10.4.17-MariaDB
-- PHP 版本： 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `games`
--
CREATE DATABASE IF NOT EXISTS `games` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `games`;

-- --------------------------------------------------------

--
-- 表的结构 `information`
--

CREATE TABLE `information` (
  `gameID` int(11) NOT NULL,
  `gameName` varchar(30) NOT NULL,
  `company` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `introduct` text NOT NULL,
  `price` int(7) NOT NULL,
  `issueDate` date NOT NULL,
  `url` text NOT NULL,
  `photo` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `information`
--

INSERT INTO `information` (`gameID`, `gameName`, `company`, `type`, `introduct`, `price`, `issueDate`, `url`, `photo`) VALUES
(1, 'Lost Castle', 'Hunter Studio', 'Rogue', 'Harwood曾经是被贵族统治的城堡，平凡的日子不幸迎来了终结，邪恶降临到了这片土地之上，曾经的主人贵族们被恶魔或奴役或杀害。渐渐地，恶魔们不满足于此，毗邻Harwood城堡的其他领地之民饱受侵扰。各地的勇者们开始踏入了Harwood城堡寻找邪恶的根源...\r\n你扮演的是一位踏入Harwood城堡的宝藏猎人，计划着用手中的剑去伸张正义，顺便.....干点宝藏猎人的勾当。然而城堡已被邪恶侵蚀，一切能如你所愿？', 33, '2016-09-01', 'https://store.steampowered.com/app/939620/Pleasure_PuzzlePortrait/', 'logo/header2.jpg'),
(2, 'We Happy Few', 'Compulsion Games', 'adventure', 'We Happy Few讲述的是一群富有勇气又有一丝小坏的人们的传奇，他们正试着逃离惠灵顿威尔士单调古板的生活。在这座毒品泛滥、充满着复古未来主义风格的架空1960年代英国城市，你必须与其他居民打成一片，尽管这些居民对于不遵守他们古怪规矩的人们不太友好。', 248, '2018-08-11', 'https://store.steampowered.com/app/320240/We_Happy_Few/', 'logo/header5.jpg'),
(3, 'Dead Frontier 2', 'Creaky Corpse Ltd', 'terror', '这黑暗的世界会带出旧式恐怖游戏的气氛。算好子弹数量，让每一枪都开的有目标。\r\n在扩大，每日都在改变的荒弃建筑物中拾荒寻找资源与装备\r\n帮助一路上遇见的幸存者， 或忽视他们\r\n在一个真实玩家控制的市场交易\r\n从各式的机能，装备和服装制造自己独特的角色\r\n与其他玩家合作或单独行动\r\n在街上与其他玩家对战\r\n免费玩，要得到最上等装备等等优势一分钱也不用花。', 0, '2019-07-05', 'https://store.steampowered.com/app/744900/Dead_Frontier_2/', 'logo/header1.jpg'),
(4, 'Pleasure Puzzle:Portrait', ' 冷笑黑妖', 'Relax', '“油画风格休闲益智拼图小游戏，称赞画师小姐姐的技术！游戏中可以播放自己的bgm，也可以调整总块数来增加难度(100块怎么看都觉得很反人类...)，价格美丽，可以考虑入手~”', 6, '2018-09-24', 'https://store.steampowered.com/app/939620/Pleasure_PuzzlePortrait/', 'logo/header3.jpg'),
(5, 'Kingdom Come: Deliverance', ' Warhorse Studios', 'adventure', '你是亨利，一位铁匠的儿子。你被卷入一场残酷的内战，你绝望的看着入侵者席卷你的镇子，屠杀你的家人和朋友。你幸运的逃过一劫，并拿起剑誓言反抗。请为你的双亲报仇！并击退侵略者！', 90, '2018-02-13', 'https://store.steampowered.com/app/379430/Kingdom_Come_Deliverance/', 'logo/header6.jpg'),
(6, 'Deiland', 'Chibig', 'adventure', 'Deiland 是一款单人冒险 游戏，拥有多种沙盒元素，如农业、制作和建筑。这是一款宁静的游戏，在一个宛如有生命、会呼吸的小世界里体现了精心制作的视效和令人着迷的叙事，这个世界会根据每个玩家的行动而演变。\r\n扮演黛蓝星的小王子，统治您自己的星球！\r\n', 50, '2018-08-09', 'https://store.steampowered.com/app/760620/Deiland/', 'logo/header7.jpg'),
(7, 'Planet Zoo: Arctic Pack', 'Frontier Development', 'relax', '与伯尼·古德温一同在壮丽的北极展开冒险，探索全新挑战、动物等丰富内容！除了能在两个全新的关卡中以动物园经理身分面对新的挑战，还有四种新动物与超过 200 个景物部件，让你能够打造出冰凉有劲的动物园。', 53, '2019-12-17', 'https://store.steampowered.com/app/1196770/Planet_Zoo_Arctic_Pack/', 'logo/header8.jpg'),
(8, 'Tomb Raider', 'Crystal Dynamics....', 'adventure', '《古墓丽影》探索了劳拉·克劳馥紧张又勇敢的起源故事，以及她从年轻女人变为坚强生存者的成长过程。 单凭原始本能以及超越极限的人类耐力，劳拉必须奋力揭开被遗忘的岛屿的黑暗历史，以逃离小岛无情的控制。下载“转折点”预告片，观看劳拉史诗级的冒险的起源。', 68, '2013-03-05', 'https://store.steampowered.com/app/434650/Lost_Castle/', 'logo/header4.jpg'),
(9, 'LARA CROFT AND THE TEMPLE OF O', 'Crystal Dynamics', 'adventure', 'Lara Croft and the Temple of Osiris is the sequel to the critically-acclaimed Lara Croft and the Guardian of Light, and the first-ever four-player co-op experience with Lara Croft. Featuring stunning visuals and a brand-new story, players must work together to explore the temple, defeat hordes of enemies from the Egyptian underworld, solve devious puzzles, and avoid deadly traps. All the while, players will compete for treasure, powerful artifacts, and ultimate bragging rights.\r\n', 68, '2014-12-09', 'https://store.steampowered.com/app/289690/LARA_CROFT_AND_THE_TEMPLE_OF_OSIRIS/', 'logo/header9.jpg'),
(10, 'Dota Underlords', 'Valve', 'relax', '新一代自动对战游戏\r\n在《刀塔霸业》中，战略决策远比手速重要得多。 此游戏包含令人难以抗拒的单人和多人游戏模式，并提供附带奖励的等级进度。 来一场极富战略性的标准游戏、可迅速完成的快速淘汰比赛或是和好友一起合作的双打比赛吧。', 0, '2019-06-21', 'https://store.steampowered.com/app/1046930/Dota_Underlords/', 'logo/header.jpg'),
(11, 'test', 'sam', 'Other', 'the date can be delete', 0, '2020-04-08', 'no', 'no');

--
-- 转储表的索引
--

--
-- 表的索引 `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`gameID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `information`
--
ALTER TABLE `information`
  MODIFY `gameID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
