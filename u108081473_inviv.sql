-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 05, 2018 at 01:26 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u108081473_inviv`
--

-- --------------------------------------------------------

--
-- Table structure for table `merch`
--

CREATE TABLE `merch` (
  `id` int(100) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(65,2) NOT NULL,
  `upload` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `storage` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `merch`
--

INSERT INTO `merch` (`id`, `username`, `title`, `price`, `upload`, `storage`) VALUES
(40, 'Andromedik', 'Trasher Limited Cap', '15.23', 'http://invive.esy.es/upload/image/ADL_0771.JPG', '/home/u108081473/public_html/upload/image/ADL_0771.JPG'),
(41, 'Prismo', 'Prismo Vinyl', '23.99', 'http://invive.esy.es/upload/image/37517301_800_800.jpg', '/home/u108081473/public_html/upload/image/37517301_800_800.jpg'),
(42, 'Tobu', 'Tobu White Shirt', '19.00', 'http://invive.esy.es/upload/image/ra,unisex_tshirt,x925,fafafa_ca443f4786,front-c,217,190,210,230-bg,f8f8f8.lite-1.jpg', '/home/u108081473/public_html/upload/image/ra,unisex_tshirt,x925,fafafa_ca443f4786,front-c,217,190,210,230-bg,f8f8f8.lite-1.jpg'),
(43, 'Tobu', 'Tobu Black Shirt', '19.00', 'http://invive.esy.es/upload/image/tobu_logo_tshirt.jpg', '/home/u108081473/public_html/upload/image/tobu_logo_tshirt.jpg'),
(44, 'Vexento', 'OLX Preloved', '25.49', 'http://invive.esy.es/upload/image/839664363_1_644x461.jpg', '/home/u108081473/public_html/upload/image/839664363_1_644x461.jpg'),
(45, 'Alan Walker', 'AlanW Hoodie', '30.30', 'http://invive.esy.es/upload/image/_alan_walker_faded_remix_zipper_hoodies01.jpg', '/home/u108081473/public_html/upload/image/_alan_walker_faded_remix_zipper_hoodies01.jpg'),
(46, 'Tobu', 'Tobu Hito Book', '12.00', 'http://invive.esy.es/upload/image/51WH9h-JQzL._SX353_BO1,204,203,200_.jpg', '/home/u108081473/public_html/upload/image/51WH9h-JQzL._SX353_BO1,204,203,200_.jpg'),
(47, 'Alan Walker', 'Umbrella Calaxico', '9.99', 'http://invive.esy.es/upload/image/dj-alan-walker-folding-umbrella-for-fans-faded-music-black-uv-umbrella-122903.jpg', '/home/u108081473/public_html/upload/image/dj-alan-walker-folding-umbrella-for-fans-faded-music-black-uv-umbrella-122903.jpg'),
(48, 'Kala Jengking', 'Kala d Jengking', '2.55', 'http://invive.esy.es/upload/image/penny-dreadful-scorpion-womens-v-neck-t-shirt-180_1000.jpg', '/home/u108081473/public_html/upload/image/penny-dreadful-scorpion-womens-v-neck-t-shirt-180_1000.jpg'),
(49, 'Starset', 'Starset Helmet', '109.00', 'http://invive.esy.es/upload/image/helmet starset.jpg', '/home/u108081473/public_html/upload/image/helmet starset.jpg'),
(50, 'Kala Jengking', 'Key Chain [Hot]', '2.10', 'http://invive.esy.es/upload/image/fd509f09bb282b643bd7352e6d337916.jpg', '/home/u108081473/public_html/upload/image/fd509f09bb282b643bd7352e6d337916.jpg'),
(51, 'John Denver', 't-shirt', '12.89', 'http://invive.esy.es/upload/image/download (2).jpg', '/home/u108081473/public_html/upload/image/download (2).jpg'),
(52, 'John Denver', 'Mountain Cap', '4.99', 'http://invive.esy.es/upload/image/images (1).jpg', '/home/u108081473/public_html/upload/image/images (1).jpg'),
(53, 'John Denver', 'White T', '6.99', 'http://invive.esy.es/upload/image/download (5).jpg', '/home/u108081473/public_html/upload/image/download (5).jpg'),
(55, 'adilin', 'tshirt', '15.00', 'http://invive.esy.es/upload/image/tobu_logo_tshirt.jpg', '/home/u108081473/public_html/upload/image/tobu_logo_tshirt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(255) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(65,2) NOT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `upload` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `storage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `upload2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `storage2` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `username`, `title`, `price`, `genre`, `upload`, `storage`, `upload2`, `storage2`) VALUES
(25, 'Andromedik', 'Firefly', '2.39', 'Drumstep', 'http://invive.esy.es/upload/audio/Andromedik_-_Firefly_NCS_Release[Mp3Converter.net].mp3', '/home/u108081473/public_html/upload/audio/Andromedik_-_Firefly_NCS_Release[Mp3Converter.net].mp3', 'http://invive.esy.es/upload/image/Andromedik-Firefly-CDQ.jpg', '/home/u108081473/public_html/upload/image/Andromedik-Firefly-CDQ.jpg'),
(29, 'Andromedik', 'Motion', '3.99', 'Drumstep', 'http://invive.esy.es/upload/audio/Andromedik - Motion.mp3', '/home/u108081473/public_html/upload/audio/Andromedik - Motion.mp3', 'http://invive.esy.es/upload/image/s.jpg', '/home/u108081473/public_html/upload/image/s.jpg'),
(30, 'Prismo', 'Hold On', '1.99', 'Trap', 'http://invive.esy.es/upload/audio/Prismo - Hold on [NCS Release].mp3', '/home/u108081473/public_html/upload/audio/Prismo - Hold on [NCS Release].mp3', 'http://invive.esy.es/upload/image/37517301_800_800.jpg', '/home/u108081473/public_html/upload/image/37517301_800_800.jpg'),
(31, 'Prismo', 'Stronger', '1.99', 'EDM', 'http://invive.esy.es/upload/audio/Prismo_-_Stronger_NCS_Release[Mp3Converter.net].mp3', '/home/u108081473/public_html/upload/audio/Prismo_-_Stronger_NCS_Release[Mp3Converter.net].mp3', 'http://invive.esy.es/upload/image/s.jpg', '/home/u108081473/public_html/upload/image/s.jpg'),
(32, 'Tobu', 'Amazing', '13.00', 'EDM', 'http://invive.esy.es/upload/audio/Alan_Walker_Tobu_-_Amazing_New_Song_2017[Mp3Converter.net].mp3', '/home/u108081473/public_html/upload/audio/Alan_Walker_Tobu_-_Amazing_New_Song_2017[Mp3Converter.net].mp3', 'http://invive.esy.es/upload/image/alanwalker.jpg', '/home/u108081473/public_html/upload/image/alanwalker.jpg'),
(33, 'Vexento', 'We Are One', '2.99', 'Electro', 'http://invive.esy.es/upload/audio/Vexento - We Are One.mp3', '/home/u108081473/public_html/upload/audio/Vexento - We Are One.mp3', 'http://invive.esy.es/upload/image/vexento.jpg', '/home/u108081473/public_html/upload/image/vexento.jpg'),
(34, 'Starset', 'My Demons', '2.39', 'Progressive Rock', 'http://invive.esy.es/upload/audio/07 My Demons.mp3', '/home/u108081473/public_html/upload/audio/07 My Demons.mp3', 'http://invive.esy.es/upload/image/cover.jpg', '/home/u108081473/public_html/upload/image/cover.jpg'),
(35, 'Starset', 'Frequency', '1.95', 'Metal + EDM', 'http://invive.esy.es/upload/audio/03. Frequency.mp3', '/home/u108081473/public_html/upload/audio/03. Frequency.mp3', 'http://invive.esy.es/upload/image/folder.jpeg', '/home/u108081473/public_html/upload/image/folder.jpeg'),
(36, 'Leader', 'Warrior Inside', '0.99', 'Rock', 'http://invive.esy.es/upload/audio/Leader - Warrior Inside (Single).mp3', '/home/u108081473/public_html/upload/audio/Leader - Warrior Inside (Single).mp3', 'http://invive.esy.es/upload/image/31731810_800_800.jpg', '/home/u108081473/public_html/upload/image/31731810_800_800.jpg'),
(37, 'Alan Walker', 'Alone', '15.40', 'Bass Boosted', 'http://invive.esy.es/upload/audio/Alan Walker - Alone [Bass Boosted].mp3', '/home/u108081473/public_html/upload/audio/Alan Walker - Alone [Bass Boosted].mp3', 'http://invive.esy.es/upload/image/alanw.jpg', '/home/u108081473/public_html/upload/image/alanw.jpg'),
(38, 'CODE', 'Duck Face', '0.88', 'EDM', 'http://invive.esy.es/upload/audio/CØDE_-_Duck_Face_NCS_Release[Mp3Converter.net].mp3', '/home/u108081473/public_html/upload/audio/CØDE_-_Duck_Face_NCS_Release[Mp3Converter.net].mp3', 'http://invive.esy.es/upload/image/downloak.jpg', '/home/u108081473/public_html/upload/image/downloak.jpg'),
(39, 'Alan Walker', 'The Spectre', '12.21', 'Electro', 'http://invive.esy.es/upload/audio/Alan Walker - The Spectre [Bass Boosted].mp3', '/home/u108081473/public_html/upload/audio/Alan Walker - The Spectre [Bass Boosted].mp3', 'http://invive.esy.es/upload/image/maxresdefault.jpg', '/home/u108081473/public_html/upload/image/maxresdefault.jpg'),
(40, 'Starset', 'Carnivore', '1.99', 'Hard Rock', 'http://invive.esy.es/upload/audio/04 Carnivore.mp3', '/home/u108081473/public_html/upload/audio/04 Carnivore.mp3', 'http://invive.esy.es/upload/image/cover.jpg', '/home/u108081473/public_html/upload/image/cover.jpg'),
(41, 'Kala Jengking', 'Always Somewhere', '4.99', 'Rock', 'http://invive.esy.es/upload/audio/Scorpions - Always Somewhere.mp3', '/home/u108081473/public_html/upload/audio/Scorpions - Always Somewhere.mp3', 'http://invive.esy.es/upload/image/download.jpg', '/home/u108081473/public_html/upload/image/download.jpg'),
(42, 'Kala Jengking', 'Wind of Change', '5.99', 'Rock', 'http://invive.esy.es/upload/audio/Scorpions - Wind of Change.mp3', '/home/u108081473/public_html/upload/audio/Scorpions - Wind of Change.mp3', 'http://invive.esy.es/upload/image/maxresdefault (1).jpg', '/home/u108081473/public_html/upload/image/maxresdefault (1).jpg'),
(43, 'Kala Jengking', 'When Love Kills Love', '2.99', 'Rock', 'http://invive.esy.es/upload/audio/Scorpions - When Love Kills Love.mp3', '/home/u108081473/public_html/upload/audio/Scorpions - When Love Kills Love.mp3', 'http://invive.esy.es/upload/image/download (1).jpg', '/home/u108081473/public_html/upload/image/download (1).jpg'),
(44, 'Kala Jengking', 'Living for Tomorrow', '3.55', 'Rock', 'http://invive.esy.es/upload/audio/Scorpions - Living for Tomorrow.mp3', '/home/u108081473/public_html/upload/audio/Scorpions - Living for Tomorrow.mp3', 'http://invive.esy.es/upload/image/hqdefault.jpg', '/home/u108081473/public_html/upload/image/hqdefault.jpg'),
(45, 'M Monroe', 'On days like this(Italian Job)', '3.20', 'Pop', 'http://invive.esy.es/upload/audio/Matt_Monro-On_Days_Like_These_(The_Italian_Job1969).mp3', '/home/u108081473/public_html/upload/audio/Matt_Monro-On_Days_Like_These_(The_Italian_Job1969).mp3', 'http://invive.esy.es/upload/image/R-6964694-1494814016-1755.jpeg.jpg', '/home/u108081473/public_html/upload/image/R-6964694-1494814016-1755.jpeg.jpg'),
(46, 'John Denver', 'Rocky Mountain High', '8.44', 'Country', 'http://invive.esy.es/upload/audio/John Denver - Rocky Mountain High.mp3', '/home/u108081473/public_html/upload/audio/John Denver - Rocky Mountain High.mp3', 'http://invive.esy.es/upload/image/download (3).jpg', '/home/u108081473/public_html/upload/image/download (3).jpg'),
(47, 'John Denver', 'Country Roads Take Me Home', '4.55', 'Country', 'http://invive.esy.es/upload/audio/John Denver - Country Roads Take Me Home.mp3', '/home/u108081473/public_html/upload/audio/John Denver - Country Roads Take Me Home.mp3', 'http://invive.esy.es/upload/image/download (4).jpg', '/home/u108081473/public_html/upload/image/download (4).jpg'),
(49, 'Andeka Caklempong', 'Jomblo Happy(cover)', '2.45', 'Classic Instrumental', 'http://invive.esy.es/upload/audio/Jomblo Happy - IIUM Andeka Caklempong - YouTube.mp3', '/home/u108081473/public_html/upload/audio/Jomblo Happy - IIUM Andeka Caklempong - YouTube.mp3', 'http://invive.esy.es/upload/image/artworks-000017915526-l9drf7-t500x500.jpg', '/home/u108081473/public_html/upload/image/artworks-000017915526-l9drf7-t500x500.jpg'),
(50, 'Andeka Caklempong', 'Kelok 9', '4.55', 'Classic Instrumental', 'http://invive.esy.es/upload/audio/Kelok 9 Tradisional - IIUM Andeka Caklempong - YouTube.mp3', '/home/u108081473/public_html/upload/audio/Kelok 9 Tradisional - IIUM Andeka Caklempong - YouTube.mp3', 'http://invive.esy.es/upload/image/photo.jpg', '/home/u108081473/public_html/upload/image/photo.jpg'),
(52, 'Andeka Caklempong', 'Bugih Lamo', '2.10', 'Classic Instrumental', 'http://invive.esy.es/upload/audio/Bugih Lamo - IIUM Andeka Caklempong - YouTube.mp3', '/home/u108081473/public_html/upload/audio/Bugih Lamo - IIUM Andeka Caklempong - YouTube.mp3', 'http://invive.esy.es/upload/image/photo.jpg', '/home/u108081473/public_html/upload/image/photo.jpg'),
(53, 'kuku', 'Frequency', '1.99', 'EDM', 'http://invive.esy.es/upload/audio/Andromedik - Scavenger(2).mp3', '/home/u108081473/public_html/upload/audio/Andromedik - Scavenger(2).mp3', 'http://invive.esy.es/upload/image/31731810_800_800.jpg', '/home/u108081473/public_html/upload/image/31731810_800_800.jpg'),
(54, 'Andromedik', 'pop', '20.00', 'EDM', 'http://invive.esy.es/upload/audio/03. Dreamwalkers.mp3', '/home/u108081473/public_html/upload/audio/03. Dreamwalkers.mp3', 'http://invive.esy.es/upload/image/37517301_800_800.jpg', '/home/u108081473/public_html/upload/image/37517301_800_800.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'admin', 'admin@admin.co', 'admin', 'admin'),
(46, 'firdza', 'firdza92@gmail.co', 'admin', 'pija1234'),
(47, 'Andromedik', 'andro@g.co', 'artist', 'andro'),
(48, 'samudinzul', 'samudinzul@gmail.com', 'admin', '`caercaer'),
(49, 'Abaddon', 'abad@g.co', 'user', 'abad'),
(51, 'Prismo', 'prism@g.co', 'artist', 'prismo'),
(53, 'mnpaan', 'mnfarhan94@gmail.com', 'user', 'paan'),
(55, 'aemir', 'aemirfashaa@gmail.com', 'user', '1234'),
(56, 'Tobu', 'tobu@gmail.com', 'artist', 'tobu'),
(57, 'Vexento', 'vexento@gmail.com', 'artist', 'vexento'),
(58, 'Starset', 'asadullah@gmail.com', 'artist', 'starset'),
(59, 'Leader', 'leader@g.co', 'artist', 'leader'),
(60, 'Alan Walker', 'alanw@gmail.com', 'artist', 'alanw'),
(61, 'CODE', 'code@q.co', 'artist', 'code'),
(62, 'Kala Jengking', 'kala@gmail.com', 'artist', 'kala'),
(63, 'M Monroe', 'mmonroe@yahoo.com', 'artist', 'mmonroe'),
(64, 'John Denver', 'jdenver@yahoo.com', 'artist', 'jdenver'),
(65, 'amir', 'amir@g.co', 'user', 'amir'),
(66, 'Andeka Caklempong', 'andeka_caklempong@gmail.com', 'artist', 'andeka'),
(68, 'adilin', 'adiliiiiiin@gmail.com', 'artist', 'yuyu'),
(69, 'kuku', 'kema@yahoo.com', 'artist', 'kuku');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `merch`
--
ALTER TABLE `merch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `merch`
--
ALTER TABLE `merch`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
