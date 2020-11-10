-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 02:15 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `progpresent`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cityId` int(11) NOT NULL,
  `cityName` varchar(30) NOT NULL,
  `teamId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityId`, `cityName`, `teamId`) VALUES
(51, 'Nairobi', 501),
(52, 'Mombasa', 502),
(53, 'Kisumu', 503),
(54, 'Eldoret', 504),
(55, 'Nakuru', 505),
(56, 'Thika', 506),
(57, 'Malindi', 507),
(58, 'Kitale', 508),
(59, 'Nanyuki', 509),
(60, 'Kakamega', 510);

-- --------------------------------------------------------

--
-- Table structure for table `coaches`
--

CREATE TABLE `coaches` (
  `coachId` int(11) NOT NULL,
  `coachName` varchar(30) NOT NULL,
  `teamId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coaches`
--

INSERT INTO `coaches` (`coachId`, `coachName`, `teamId`) VALUES
(1, 'Spring Kivuli Michael', 501),
(2, 'Karri Gilyard', 502),
(3, 'Isidro Brummett', 503),
(4, 'Nichol Soja', 504),
(5, 'Cornelius Stegman', 505),
(6, 'Joesph Gardener', 506),
(7, 'Ching Rix', 507),
(8, 'Mauricio Hobson', 508),
(9, 'Wonda Hurtado', 509),
(10, 'Patience Ollison', 510);

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `game_id` int(11) NOT NULL,
  `game_home` varchar(255) NOT NULL,
  `game_away` varchar(255) NOT NULL,
  `game_start` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`game_id`, `game_home`, `game_away`, `game_start`) VALUES
(1, 'Blade', 'Kivuli', '2019-09-26 21:59:02'),
(2, 'Ulinzi', 'Prisons', '2019-10-20 09:56:19'),
(3, 'KCB Bank', 'KCA', '2019-11-04 11:31:30'),
(4, 'Cooperative Bank', 'KPA', '2019-11-04 11:32:39'),
(5, 'Ulinzi', 'All Stars', '2019-11-04 11:32:58'),
(6, 'Strathmore', 'Blade', '2019-11-04 11:35:47'),
(7, 'Ulinzi ', 'Strathmore', '2019-11-26 12:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `game_score`
--

CREATE TABLE `game_score` (
  `game_id` int(11) NOT NULL,
  `score_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `score_home` int(8) NOT NULL DEFAULT '0',
  `score_away` int(8) NOT NULL DEFAULT '0',
  `score_comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game_score`
--

INSERT INTO `game_score` (`game_id`, `score_time`, `score_home`, `score_away`, `score_comment`) VALUES
(1, '2019-10-18 12:37:46', 19, 22, 'first quarter'),
(1, '2019-10-18 12:38:07', 32, 30, 'Second quarter'),
(1, '2019-10-18 12:38:57', 42, 37, 'Third quarter'),
(1, '2019-10-18 12:40:36', 55, 64, 'Fourth quarter'),
(2, '2019-10-20 09:56:44', 10, 12, 'first quarter'),
(2, '2019-10-20 09:57:22', 33, 28, 'second quarter'),
(2, '2019-10-20 09:57:50', 40, 40, 'third quarter'),
(2, '2019-10-20 09:58:17', 54, 59, 'final quater'),
(3, '2019-11-26 07:46:07', 12, 15, 'First quarter'),
(3, '2019-11-26 07:47:19', 26, 23, 'Second Quarter'),
(3, '2019-11-26 07:48:20', 30, 35, 'Third Quarter'),
(3, '2019-11-26 07:50:52', 45, 43, 'Forth Quater'),
(4, '2019-11-04 11:35:18', 0, 0, NULL),
(5, '2019-11-04 11:33:48', 0, 0, NULL),
(6, '2019-11-04 11:35:52', 0, 0, NULL),
(7, '2019-11-26 12:55:16', 20, 30, 'first quarter'),
(7, '2019-11-26 12:55:51', 45, 47, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `info_news`
--

CREATE TABLE `info_news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_short_description` text NOT NULL,
  `news_full_content` text NOT NULL,
  `news_author` varchar(120) NOT NULL,
  `news_published_on` int(46) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_news`
--

INSERT INTO `info_news` (`news_id`, `news_title`, `news_short_description`, `news_full_content`, `news_author`, `news_published_on`) VALUES
(2, 'Team lebron rallies to beat team giannis in 68th nba all star game', '\r\nTeam LeBron is undefeated in All-Star competition, having picked up its second straight win', '\r\n\r\nTeam LeBron is undefeated in All-Star competition, having picked up its second straight win, a 178-164 victory over Team Giannis, at the 68th NBA All-Star Game at the Spectrum Center on Sunday.\r\n\r\nTeam Giannis took early control with a 53-37 first quarter, featuring a combined 28 points on 12-for-13 shooting from Bucks teammates Giannis Antetokounmpo and Khris Middleton. Team Giannis led by as many as 20 points, but Team LeBron made it a game with an 18-4 run, fueled by Damian Lillard and Bradley Beal, in the third quarter.\r\n\r\nThe teams traded leads early in the fourth and it was a three-point game with 4 1/2 minutes to go, but Team LeBron put it away with a 10-2 run featuring five straight points – a step-back 3-pointer over Joel Embiid and an alley-oop dunk from former teammate Kyrie Irving – from LeBron James.\r\n\r\nKia All-Star MVP Kevin Durant led Team LeBron with 31 points on 10-for-15 shooting, scoring 11 (on a perfect 4-for-4 shooting) in the fourth quarter. Nine other members of Team LeBron scored in double-figures.\r\n\r\nAntetokounmpo led all scorers with 38 points on 17-for-23 shooting, adding 11 rebounds and five assists. The Hornets’ Kemba Walker shot just 2-for-8, but had a game-high eight assists. Dirk Nowitzki, a special roster addition in perhaps his final NBA season, entered late in the first quarter and shot 3-for-3 from 3-point range in four first-half minutes for Team Giannis. Dwyane Wade, playing his final All-Star Game, had seven points and four assists for Team LeBron.\r\n', 'NBA News', 2172019),
(3, 'So hard to say goodbye', 'Dirk Nowitzki and Dwyane Wade shared their All-Star farewell on Sunday night.', 'Dirk Nowitzki and Dwyane Wade will be linked forever, having battled twice in The Finals during their surefire Hall of Fame careers. Since they splitthose meetings it’s only fitting that these two living legends went out together in their final All-Star Game appearance.\r\n\r\nAnd they didn’t disappoint. Dirk knocked down three deep 3-pointers for Team Giannis before halftime. Wade drained a 3-pointer of his own for Team LeBron before halftime. And he started the second half as Team LeBron rallied from a 13-point first-half deficit to take the lead at the end of the third quarter. Salute to two of the game’s all-time greats.', 'Dwyane Wade', 0),
(5, 'Jordan Makes Birthday Appearance At NBA Legends Brunch', 'CHARLOTTE, N.C. — Dell Curry had just been honored as the 2019 Hometown Hero at All-Star Weekend, and the award presentation to the popular sharpshooter-turned-broadcaster for the Charlotte Hornets was extra-special because his three children — NBA players Steph and Seth Curry, and daughter Sydel — were on stage to make it.', 'CHARLOTTE, N.C. — Dell Curry had just been honored as the 2019 Hometown Hero at All-Star Weekend, and the award presentation to the popular sharpshooter-turned-broadcaster for the Charlotte Hornets was extra-special because his three children — NBA players Steph and Seth Curry, and daughter Sydel — were on stage to make it.\r\n\r\nMoments later, though, an unofficial hometown hero stepped from behind the curtain at the Charlotte Civic Center Sunday to send an even bigger buzz through the Legends Brunch crowd of an estimated 2,000 people.\r\n\r\nMichael Jordan, arguably the NBA’s greatest player ever and owner of the Hornets since 2010, made a surprise cameo appearance to cap the annual All-Star celebration of the league’s history and pioneers.\r\n\r\n“I see a lot of old friends, a lot of old adversaries, some teammates,” Jordan said. “You guys know today is my 56th birthday — I look young compared to a lot of you guys out there.”\r\n\r\nJordan typically keeps a low profile publicly. Even though All-Star Weekend had flushed him out a couple of times heading toward Sunday night’s game, some of the organizers of the brunch weren’t told he would be dropping by. But the event, presented by the National Basketball Retired Players Association, is one of the highlights of the weekend each year and was attended by nearly 200 former NBA players.\r\n\r\nApparently, an old college teammate from the University of North Carolina Tar Heels convinced Jordan to be one of them.\r\n\r\n“Sam Perkins nagged me for about two months to be here,” Jordan said. “I’m glad I chose to do this. It’s great to see the energy that you [fans] provide to us, and to see the former players and the opportunity that you provided to me.”\r\n\r\nIn addition to Curry’s award, three other Hornets were honored: Muggsy Bogues received the Community Ambassador Award, Alonzo Mourning was given the Global Ambassador Award and Glen Rice was named Hornets Legend of the Year.\r\n\r\n“I’m here just to congratulate the four guys who have done an unbelievable job for the city of Charlotte,” Jordan said. “I played against all four of those guys and they were true, true competitors. But the thing I love most about them — I’ve had the chance to spend time with them — is what great people they are, and what they have done for the city.\r\n\r\n“When I ask them to be a part of things, I don’t get a ‘no’ from those guys.”\r\n\r\nHall of Famer Spencer Haywood, chairman of the NBRPA board, spoke during the program about the improved benefits the retired players have received in recent years, thanks to financial assistance from both the National Basketball Players Association and the NBA. Among them: A health care program for the league’s alumni and an increase in their pension payments.\r\n\r\nMichele Roberts, executive director of the active players’ union, praised the former players for building up the league in which today’s participants thrive. So did Jordan.\r\n\r\n“To all the legends, you guys paved the road for all of us,” he said. “Everything that I’ve done, I’ve paid tribute to you guys. I’m glad we were able to find some way that we were able to give things back.”\r\n\r\nCurrent Hornets All-Star guard Kemba Walker presented Bogues with his award, appearing in the morning despite his starting spot in the evening’s game. Hall of Famer and fellow Georgetown star Dikembe Mutombo introduced Mourning, and Mourning in turn presented Rice’s award.\r\n\r\nSinger-songwriter Anthony Hamilton performed during the poignant “In Memoriam” segment of the program, in which a slideshow of NBA figures who died since the previous Legends Brunch was projected on massive video screens. TNT studio host Ernie Johnson had the crowd laughing and wincing with another one of his comic, corny and annually anticipated poems.\r\n\r\nBut comedian JB Smoove, who opened the entertainment, had the event’s funniest line, ripped from recent headlines. Gushing in his memory of Magic Johnson’s signature no-look passes — “He’d look you in the eyes and that ball is gone before you know it” — Smoove then warned players on the team over which Johnson now presides.\r\n\r\n“Some of you Lakers better look out,” Smoove said, “for the no-look trade.”\r\n\r\nSteve Aschburner has written about the NBA since 1980. You can e-mail him here, find his archive here and follow him on Twitter.\r\n\r\nThe views on this page do not necessarily reflect the views of the NBA, its clubs or Turner Broadcasting.', '', 0),
(6, 'Can Anthony Davis and the Lakers get LeBron to play elite defense again?', 'Los Angeles Lakers coach Frank Vogel made a lot of strong decisions during his tenure as coach of the Indiana Pacers, but there was one mistake that\'s been hard to forget', '\"The league\'s modern-day offenses are designed to invert your defense. To get switches and 7-footers guarding point guards and point guards guarding bigs down low,\" Vogel said. \"We want to resist that temptation. There are still times when you have to do it, but we want to do it as little as possible.\"\r\n\r\nThe Lakers\' roster features the personnel to make this vision work. Vogel has two classic centers who are good at defending the rim and gifted at blocking shots in JaVale McGee and Dwight Howard. And they have a defensive wizard in Anthony Davis who can do it as well. In theory, the Lakers could have one of the best rim-defending teams in the league.\r\n', 'Kevin Durant', 0),
(7, 'Carmelo Anthony leads Trail Blazers past Bulls in vintage performance', 'CHICAGO -- There was a 376-day gap between Carmelo Anthony\'s last NBA game and when he joined the Portland Trail Blazers on a non-guaranteed contract on Nov. 19', 'Four games into his comeback, the veteran treated his wife, La La Anthony, to a vintage performance with a season-best 25 points and eight boards in Portland\'s 117-94 win against the Chicago Bulls on Monday.\r\n\r\n\"Mentally, she kept me going,\" Anthony said of his wife. \"Emotionally, she kept me going. She was nudging me, \'Don\'t do it, don\'t think about it, don\'t do it, don\'t you let that thought creep into your head.\' So, she was a major, major part of why I\'m here today.\"\r\n\r\nLa La Anthony was in town filming for the television show \"The Chi.\" After her husband passed Alex English for the 18th spot on the all-time scoring list, she FaceTimed their son, Kiyan, using her iPhone during a timeout with 7:49 left, as his dad rested on the bench.\r\n\r\nOnce Anthony noticed his son watching, he used a hand gesture to salute him from across the screen.\r\n\r\n\"My son always wants to feel like he\'s here,\" La La Anthony told ESPN. \"He misses his dad a lot. I was filming up the block, so I came here and just wanted my son to feel like he was a part of the moment. I FaceTimed him so he could see his dad, and he just was excited because his dad had such a great game tonight.\"\r\n\r\nShe added: \"Who wouldn\'t want to see this? It\'s amazing and exactly how it should be.\"\r\n\r\nThe 25-point performance was Anthony\'s highest scoring game since his 28 points against Brooklyn on Nov. 2, 2018. Portland was also able to snap a four-game losing skid with CJ McCollum adding 21 points on the night. All-Star guard Damian Lillard contributed 13 points with 12 assists,but was also caught up in the Carmelo Anthony Show, just like Bulls fans who chanted \"Bring back Melo\" and \"We want Melo\" late in the fourth once he checked out.\r\n\r\nWhen Anthony\'s 3-pointer dropped at 9:31 in the fourth, Lillard stole his famous three fingers to the head celebration while jumping up and down on the sidelines. His teammates also got hyped after his two-handed baseline jam over Wendell Carter Jr. after blowing past Tomas Satoransky at 9:46.', 'Douglas Bitok', 0);

-- --------------------------------------------------------

--
-- Table structure for table `performances`
--

CREATE TABLE `performances` (
  `PerformanceID` int(11) NOT NULL,
  `PlayerID` int(11) DEFAULT NULL,
  `PositionID` int(11) DEFAULT NULL,
  `MatchID` int(11) DEFAULT NULL,
  `TwopointAttemps` int(11) DEFAULT NULL,
  `TwopointMade` int(11) DEFAULT NULL,
  `ThreepointAttemps` int(11) DEFAULT NULL,
  `ThreepointMade` int(11) DEFAULT NULL,
  `FreethrowsAttempt` int(11) DEFAULT NULL,
  `FreethrowsMade` int(11) DEFAULT NULL,
  `MinutePlayed` int(11) DEFAULT NULL,
  `FoulMade` int(11) DEFAULT NULL,
  `Rebounds` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performances`
--

INSERT INTO `performances` (`PerformanceID`, `PlayerID`, `PositionID`, `MatchID`, `TwopointAttemps`, `TwopointMade`, `ThreepointAttemps`, `ThreepointMade`, `FreethrowsAttempt`, `FreethrowsMade`, `MinutePlayed`, `FoulMade`, `Rebounds`) VALUES
(31, 100, 501, 201, 43, 23, 20, 14, 7, 5, 24, 1, 9),
(32, 103, 505, 202, 40, 42, 23, 17, 8, 2, 54, 4, 10),
(33, 105, 503, 204, 34, 32, 12, 10, 10, 1, 45, 5, 4),
(34, 104, 504, 203, 42, 22, 26, 11, 4, 0, 76, 2, 3),
(35, 106, 502, 201, 56, 34, 19, 18, 6, 3, 65, 3, 7),
(36, 106, 504, 206, 13, 6, 9, 8, 7, 3, 20, 1, 1),
(37, 107, 503, 208, 10, 7, 11, 10, 15, 7, 30, 5, 4),
(38, 106, 502, 209, 21, 12, 3, 3, 25, 14, 50, 3, 8),
(39, 105, 505, 210, 23, 7, 25, 3, 12, 11, 10, 2, 15),
(40, 109, 501, 205, 10, 5, 8, 8, 5, 4, 60, 3, 14);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `playerId` int(11) NOT NULL,
  `playerName` varchar(30) NOT NULL,
  `teamId` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`playerId`, `playerName`, `teamId`, `height`, `weight`, `age`) VALUES
(101, 'Douglas Ilajil', 501, 183, 63, 20),
(102, 'Kevin Debrun', 502, 190, 88, 22),
(103, 'Brenton Terrell', 503, 184, 90, 21),
(104, 'Autumn Fairclough', 504, 187, 93, 22),
(105, 'Kiara Barnette', 505, 174, 70, 23),
(106, 'Clarence Self', 506, 194, 95, 27),
(107, 'Nerissa Frechette', 507, 200, 84, 25),
(108, 'Dana Mcmahon', 508, 165, 91, 27),
(109, 'Frieda Matousek', 509, 184, 94, 39),
(110, 'Latrina Croll', 510, 199, 110, 29),
(112, 'Christiano Ronaldo', 501, 184, 92, 29),
(113, 'Toro Laura', 501, 189, 90, 23),
(114, 'Deno Kafomu', 502, 200, 88, 21),
(115, 'Jeff Koinange', 502, 1846, 99, 19),
(116, 'Hendry Mukeni', 502, 184, 93, 24),
(117, 'Christian Benteke', 503, 190, 120, 35),
(118, 'Benard Shibwabo', 503, 174, 85, 40),
(119, 'Kevin Bwari', 503, 197, 95, 24),
(120, 'Jenifer Korir', 504, 199, 89, 27),
(121, 'Caroline Wagatia', 504, 200, 85, 22),
(122, 'Christiano Ronaldo', 504, 180, 100, 24),
(123, 'Uhuru Kenyata', 505, 189, 85, 24),
(124, 'Anne Wanjiru', 505, 200, 81, 28),
(125, 'Peter Ogato', 506, 201, 85, 29),
(126, 'Kane Rotich', 506, 204, 95, 23),
(127, 'Dida Aukot', 507, 214, 94, 24),
(128, 'Michele June', 507, 194, 92, 22),
(129, 'Chiloba Chebukati', 508, 195, 90, 26),
(130, 'Penelope Truw', 508, 183, 93, 24),
(131, 'Paul Pogba', 509, 194, 94, 31),
(132, 'Ronaldinyo Ronaldo', 510, 194, 91, 34);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'dsdsd', 'sdds', 800.00, '25'),
(2, 'asd', '21', 34.00, 'af'),
(3, 'Kevin Durant', '', 21.00, ''),
(9, 'mnm', 'kjn', 0.00, ''),
(10, 'Nike', 'bhj345', 100.00, ''),
(13, 'Kevin Durant', '12345678', 223.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `standings`
--

CREATE TABLE `standings` (
  `standingId` int(11) NOT NULL,
  `teamId` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `loss` int(11) NOT NULL,
  `played` int(11) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `standings`
--

INSERT INTO `standings` (`standingId`, `teamId`, `win`, `loss`, `played`, `points`) VALUES
(1, 501, 0, 0, 0, 0),
(2, 502, 1, 0, 1, 2),
(3, 503, 0, 0, 0, 0),
(4, 504, 1, 0, 1, 2),
(5, 505, 0, 0, 0, 0),
(6, 506, 1, 0, 1, 2),
(7, 507, 0, 0, 0, 0),
(8, 508, 0, 0, 0, 0),
(9, 509, 0, 0, 0, 0),
(10, 510, 1, 0, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `teamId` int(11) NOT NULL,
  `teamName` varchar(30) NOT NULL,
  `playerId` int(11) NOT NULL,
  `coachId` int(11) NOT NULL,
  `cityId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`teamId`, `teamName`, `playerId`, `coachId`, `cityId`) VALUES
(501, 'Blade', 101, 1, 51),
(502, 'KCB', 102, 2, 52),
(503, 'Cooperative Bank', 103, 3, 53),
(504, 'Strathmore', 104, 4, 54),
(505, 'Ulinzi', 105, 5, 55),
(506, 'Prisons', 106, 6, 56),
(507, 'All Stars', 107, 7, 57),
(508, 'KPA', 108, 8, 58),
(509, 'KCA', 109, 9, 59),
(510, 'Kivuli', 110, 10, 60);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(15) NOT NULL,
  `Full_Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_Number` varchar(15) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL DEFAULT '123456',
  `UserType` int(9) NOT NULL,
  `AccessTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Image` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `Full_Name`, `email`, `phone_Number`, `User_Name`, `Password`, `UserType`, `AccessTime`, `Image`, `Address`) VALUES
(24, 'Silus kip', 'silus@gmail.com', '0710223375', 'silus', '25f9e794323b453885f5181f1b624d0b', 1, '2019-11-25 21:07:08', 'user_Silus kip.jpg', 'Juja'),
(26, 'Andres Perera', 'perera@yahoo.com', '0725486624', 'perera', '25f9e794323b453885f5181f1b624d0b', 2, '2019-09-16 05:52:39', 'user_Andres Perera.jpg', 'Manchester'),
(27, 'Washu Gghjk', 'washu@gmail.com', '0710223378', 'washu', '25f9e794323b453885f5181f1b624d0b', 1, '2019-09-16 07:05:21', 'user_Washu Gghjk.jpg', 'Malkia'),
(28, 'Karen Kuto', 'kuto@gmail.com', '0745248536', 'kuto', '25f9e794323b453885f5181f1b624d0b', 2, '2019-11-26 09:51:38', 'user_Karen Kuto.jpg', 'Torongo'),
(29, 'Paul Bitok', 'paul@gmail.com', '0710223377', 'paul', 'd41d8cd98f00b204e9800998ecf8427e', 2, '2019-10-06 18:58:57', 'user_Paul Bitok.jpg', 'Rongaii'),
(39, 'Caroline Chelagat', 'chela@gmail.com', '0725486625', 'chela', 'd41d8cd98f00b204e9800998ecf8427e', 1, '2019-10-08 14:12:07', 'user_Caroline Chela.jpg', 'Malkia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cityId`),
  ADD KEY `teamId` (`teamId`),
  ADD KEY `cityId` (`cityId`);

--
-- Indexes for table `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`coachId`),
  ADD KEY `coachId` (`coachId`),
  ADD KEY `teamId` (`teamId`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_id`),
  ADD KEY `game_start` (`game_start`) USING BTREE;

--
-- Indexes for table `game_score`
--
ALTER TABLE `game_score`
  ADD PRIMARY KEY (`game_id`,`score_time`);

--
-- Indexes for table `info_news`
--
ALTER TABLE `info_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `performances`
--
ALTER TABLE `performances`
  ADD PRIMARY KEY (`PerformanceID`),
  ADD KEY `fk_PlayerID` (`PlayerID`),
  ADD KEY `fk_positionID` (`PositionID`),
  ADD KEY `fk_matchID` (`MatchID`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`playerId`),
  ADD KEY `playeId` (`playerId`),
  ADD KEY `teamId` (`teamId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `standings`
--
ALTER TABLE `standings`
  ADD PRIMARY KEY (`standingId`),
  ADD KEY `teamId` (`teamId`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`teamId`),
  ADD KEY `teamId` (`teamId`),
  ADD KEY `playerId` (`playerId`),
  ADD KEY `coachId` (`coachId`),
  ADD KEY `cityId` (`cityId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `User_Name` (`User_Name`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `info_news`
--
ALTER TABLE `info_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `performances`
--
ALTER TABLE `performances`
  MODIFY `PerformanceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`teamId`) REFERENCES `teams` (`teamId`);

--
-- Constraints for table `coaches`
--
ALTER TABLE `coaches`
  ADD CONSTRAINT `coaches_ibfk_1` FOREIGN KEY (`teamId`) REFERENCES `teams` (`teamId`);

--
-- Constraints for table `game_score`
--
ALTER TABLE `game_score`
  ADD CONSTRAINT `game_frk` FOREIGN KEY (`game_id`) REFERENCES `game` (`game_id`);

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_ibfk_1` FOREIGN KEY (`teamId`) REFERENCES `teams` (`teamId`);

--
-- Constraints for table `standings`
--
ALTER TABLE `standings`
  ADD CONSTRAINT `standings_ibfk_1` FOREIGN KEY (`teamId`) REFERENCES `teams` (`teamId`);

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_ibfk_1` FOREIGN KEY (`coachId`) REFERENCES `coaches` (`coachId`),
  ADD CONSTRAINT `teams_ibfk_2` FOREIGN KEY (`playerId`) REFERENCES `players` (`playerId`),
  ADD CONSTRAINT `teams_ibfk_3` FOREIGN KEY (`cityId`) REFERENCES `city` (`cityId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
