-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 02:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kynews`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_cat` int(11) NOT NULL,
  `category` varchar(12) NOT NULL,
  `summary` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_cat`, `category`, `summary`) VALUES
(1, 'General', 'General news can be anything, often used as fillers around the main headline or in subsequent pages. What\'s going on with the local school board? Who was on last night\'s police arrest blotter? What does some expert say about some health topic?'),
(2, 'Sports', 'Sport refers to a competitive physical activity. Sport is generally recognised as activities based in physical athleticism or physical dexterity. Sports are usually governed by rules to ensure fair competition and consistent adjudication of the winner. Records of performance are often kept and reported in sport news.'),
(3, 'World', 'World news or international news or even foreign coverage is the news media jargon for news from abroad, about a country or a global subject.'),
(4, 'Kyuem', 'Established in 1998 under Yayasan UEM (UEM Foundation), Kolej Yayasan UEM (KYUEM) is a premier residential college specialising in pre-university education. KYUEM is one of the selected colleges in Malaysia granted the Cambridge International Fellowship status, giving us preferential access to their varied support systems.');

-- --------------------------------------------------------

--
-- Table structure for table `featured`
--

CREATE TABLE `featured` (
  `id_news` int(4) NOT NULL,
  `modul` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `featured`
--

INSERT INTO `featured` (`id_news`, `modul`) VALUES
(78, 2),
(79, 2),
(80, 1),
(81, 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `id_user` varchar(9) DEFAULT NULL,
  `id_cat` int(4) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `description` varchar(500) NOT NULL,
  `coverimg` varchar(50) NOT NULL COMMENT 'imglocation',
  `dates` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `approved` tinyint(1) NOT NULL COMMENT '2 for pending, 1 for true, 3 for false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `id_user`, `id_cat`, `title`, `content`, `description`, `coverimg`, `dates`, `approved`) VALUES
(1, '9682', 1, 'Secret Santa Received Unexpected Number of Orders SIU Siu', '<p><br />\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat diam ut venenatis tellus in. Vel elit scelerisque mauris pellentesque pulvinar pellentesque. Sollicitudin aliquam ultrices sagittis orci. Mauris cursus mattis molestie a iaculis at erat. Pretium nibh ipsum consequat nisl vel pretium lectus quam id. Netus et malesuada fames ac turpis egestas maecenas pharetra. Pellentesque id nibh tortor id aliquet lectus proin nibh nisl. Nisl purus in mollis nunc sed id. Auctor augue mauris augue neque gravida in fermentum et. Sit amet consectetur adipiscing elit. Viverra nam libero justo laoreet. Fusce ut placerat orci nulla. Faucibus nisl tincidunt eget nullam. Egestas fringilla phasellus faucibus scelerisque. Venenatis a condimentum vitae sapien. Sit amet venenatis urna cursus eget nunc. Dapibus ultrices in iaculis nunc sed augue. Ipsum dolor sit amet consectetur adipiscing elit. Commodo odio aenean sed adipiscing diam donec.<br />\r\n&nbsp;</p>\r\n\r\n<p><br />\r\nMolestie ac feugiat sed lectus vestibulum mattis. Mauris pellentesque pulvinar pellentesque habitant morbi tristique. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis. Gravida in fermentum et sollicitudin ac orci phasellus egestas. Orci a scelerisque purus semper eget duis. Ullamcorper morbi tincidunt ornare massa. Dis parturient montes nascetur ridiculus mus mauris vitae. Aenean euismod elementum nisi quis eleifend quam adipiscing vitae. Lobortis elementum nibh tellus molestie. Auctor urna nunc id cursus metus aliquam eleifend. Mi eget mauris pharetra et ultrices. Integer enim neque volutpat ac tincidunt vitae semper quis lectus. Commodo elit at imperdiet dui accumsan sit. Sed felis eget velit aliquet sagittis id consectetur purus. Erat imperdiet sed euismod nisi porta. Tincidunt ornare massa eget egestas purus viverra accumsan in.<br />\r\n&nbsp;</p>\r\n', 'Damn, this place is dope and I love Mr Vrogue because he is cool. By the way Mika, click the button here. The other buttons do not work yet.', 'santa82266.jpg', '2022-12-11 07:56:04', 1),
(2, '9682', 4, 'Not So Secret Santa WOOPS ', '<p>Molestie ac feugiat sed lectus vestibulum mattis. Mauris pellentesque pulvinar pellentesque habitant morbi tristique. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis. Gravida in fermentum et sollicitudin ac orci phasellus egestas. Orci a scelerisque purus semper eget duis. Ullamcorper morbi tincidunt ornare massa. Dis parturient montes nascetur ridiculus mus mauris vitae. Aenean euismod elementum nisi quis eleifend quam adipiscing vitae. Lobortis elementum nibh tellus molestie. Auctor urna nunc id cursus metus aliquam eleifend. Mi eget mauris pharetra et ultrices. Integer enim neque volutpat ac tincidunt vitae semper quis lectus. Commodo elit at imperdiet dui accumsan sit. Sed felis eget velit aliquet sagittis id consectetur purus. Erat imperdiet sed euismod nisi porta. Tincidunt ornare massa eget egestas purus viverra accumsan in.<br />\r\n&nbsp;</p>\r\n', 'Santa was caught sneaking into a local chimney POOPIE', 'img-1.jpg', '2022-12-11 07:44:14', 1),
(78, '2806', 3, 'The Government has been Quite Controversial Lately Yeah', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero. Sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper eget. Mauris vitae ultricies leo integer malesuada nunc vel risus commodo. Quis commodo odio aenean sed adipiscing diam donec adipiscing tristique. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Tellus at urna condimentum mattis pellentesque id nibh. Justo laoreet sit amet cursus sit amet dictum sit. Sagittis vitae et leo duis. Lorem sed risus ultricies tristique nulla aliquet enim tortor. Ut faucibus pulvinar elementum integer. Quam quisque id diam vel quam. Habitant morbi tristique senectus et netus et malesuada fames ac. Integer vitae justo eget magna fermentum iaculis. Sem et tortor consequat id porta.<br />\r\n&nbsp;</p>\r\n\r\n<p><br />\r\nDolor magna eget est lorem ipsum dolor. Tellus in hac habitasse platea dictumst vestibulum rhoncus est pellentesque. Velit laoreet id donec ultrices tincidunt arcu. Leo a diam sollicitudin tempor id eu nisl nunc. Feugiat nibh sed pulvinar proin gravida hendrerit lectus. Velit laoreet id donec ultrices tincidunt arcu non sodales neque. Consectetur a erat nam at lectus urna duis convallis. Faucibus a pellentesque sit amet porttitor eget dolor morbi. Tellus id interdum velit laoreet id donec ultrices tincidunt arcu. Sem viverra aliquet eget sit amet tellus cras adipiscing enim. Neque gravida in fermentum et sollicitudin ac. Sit amet risus nullam eget felis eget nunc lobortis mattis.<br />\r\n&nbsp;</p>\r\n\r\n<p><br />\r\nUltrices mi tempus imperdiet nulla malesuada pellentesque elit. Diam maecenas ultricies mi eget mauris pharetra et ultrices neque. Vulputate eu scelerisque felis imperdiet proin fermentum. A scelerisque purus semper eget duis at tellus at urna. Blandit massa enim nec dui nunc. Malesuada fames ac turpis egestas maecenas pharetra convallis. Ridiculus mus mauris vitae ultricies leo integer malesuada. Id diam vel quam elementum pulvinar etiam non quam. Enim diam vulputate ut pharetra sit amet aliquam id diam. Ornare aenean euismod elementum nisi.<br />\r\n&nbsp;</p>\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'anwar30089.jpeg', '2022-12-11 07:43:35', 1),
(79, '2806', 4, 'Kolej Yayasan UEM Produces a Staggering Number of A*s Students ', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero. Sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper eget. Mauris vitae ultricies leo integer malesuada nunc vel risus commodo. Quis commodo odio aenean sed adipiscing diam donec adipiscing tristique. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Tellus at urna condimentum mattis pellentesque id nibh. Justo laoreet sit amet cursus sit amet dictum sit. Sagittis vitae et leo duis. Lorem sed risus ultricies tristique nulla aliquet enim tortor. Ut faucibus pulvinar elementum integer. Quam quisque id diam vel quam. Habitant morbi tristique senectus et netus et malesuada fames ac. Integer vitae justo eget magna fermentum iaculis. Sem et tortor consequat id porta.</div>', 'Miraculously, KYUEM has managed to produce 30 Straight A*s students in the recent A-Levels Examination!', 'kyuem92051.jpg', '2022-12-10 11:36:35', 1),
(80, '2806', 2, 'Cristiano Ronaldo Breached Contract with Manchester United SIUU', '<p>Dolor magna eget est lorem ipsum dolor. Tellus in hac habitasse platea dictumst vestibulum rhoncus est pellentesque. Velit laoreet id donec ultrices tincidunt arcu. Leo a diam sollicitudin tempor id eu nisl nunc. Feugiat nibh sed pulvinar proin gravida hendrerit lectus. Velit laoreet id donec ultrices tincidunt arcu non sodales neque. Consectetur a erat nam at lectus urna duis convallis. Faucibus a pellentesque sit amet porttitor eget dolor morbi. Tellus id interdum velit laoreet id donec ultrices tincidunt arcu. Sem viverra aliquet eget sit amet tellus cras adipiscing enim. Neque gravida in fermentum et sollicitudin ac. Sit amet risus nullam eget felis eget nunc lobortis mattis.</p>\r\n', 'Suddenly, Cristiano Ronaldo has broken all ties with the English Club, Manchester United in a harrowing interview.', 'cr714091.jpg', '2022-12-11 07:44:06', 1),
(81, '3', 3, 'Communism Should Be Looked at More Fondly', '<p><strong>Communism</strong>&nbsp;is the&nbsp;<em>root to all evil</em>&nbsp;as said by the Americans. I&nbsp;<strong>believe</strong>&nbsp;it is unfair to assume this when in fact the communists have helped contribute to the development of society in countless fields.</p>\r\n\r\n<p>Fields such as:</p>\r\n\r\n<ul>\r\n	<li>Space technology</li>\r\n	<li>Agriculture</li>\r\n	<li>Economy</li>\r\n</ul>\r\n', 'Communism is shat on too hard!', 'communism98669.jpg', '2022-12-11 09:48:51', 2),
(83, '9682', 1, 'Scorpion is a Legendary Band', '<p>Bring out your inner George R.R Martin!</p>\r\n', 'The Title says it all. Scorpions should get more recognition for their contribution to music as a whole.', 'scorpionband61471.jpg', '2022-12-11 09:48:47', 2),
(84, '1', 1, 'Guns N Roses are Bands That Deserve Recognition', '<p>Bring out your inner George R.R Martin!</p>\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'gunsnroses19395.jpg', '2022-12-11 09:50:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `type` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `type`) VALUES
(1, 'Student'),
(2, 'Writer'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` varchar(4) NOT NULL,
  `username` varchar(40) NOT NULL,
  `pass` varchar(9) NOT NULL,
  `about` varchar(500) DEFAULT NULL,
  `profilepic` varchar(20) DEFAULT NULL,
  `id_type` int(4) DEFAULT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `pass`, `about`, `profilepic`, `id_type`, `email`) VALUES
('1', 'student', '1', 'This is a test account for student', 'pfp250815.JPG', 1, '1@1'),
('2', 'writer', '2', NULL, NULL, 2, '2@2'),
('2806', 'Admin', 'p!q!mc00l', NULL, NULL, 3, 'test@email.com'),
('3', 'admin', '3', NULL, NULL, 3, '3@3'),
('9682', 'Mustaqim Bin Burhanuddin', 'Aqimkk04', 'I am a bold student who likes Cats, Computer Science, Mathematics and teamwork. I was born in Malaysia on the 28th of June 2004, and I hail from the far eastern shores of Kelantan, Malaysia.', 'pfp1.jpg', 1, 'peeqim@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `featured`
--
ALTER TABLE `featured`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
