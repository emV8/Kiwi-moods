-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 28 Avril 2016 à 12:32
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `kiwimoods`
--

-- --------------------------------------------------------

--
-- Structure de la table `currentmood`
--

CREATE TABLE IF NOT EXISTS `currentmood` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `mood_name` text NOT NULL,
  `playlist_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

-- --------------------------------------------------------

--
-- Structure de la table `emotion`
--

CREATE TABLE IF NOT EXISTS `emotion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emotion_name` text CHARACTER SET utf8 NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=968 ;

-- --------------------------------------------------------

--
-- Structure de la table `knowartist`
--

CREATE TABLE IF NOT EXISTS `knowartist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `knowartist` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=233 ;

-- --------------------------------------------------------

--
-- Structure de la table `knowtitle`
--

CREATE TABLE IF NOT EXISTS `knowtitle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `knowtitle` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=235 ;

-- --------------------------------------------------------

--
-- Structure de la table `likemusic`
--

CREATE TABLE IF NOT EXISTS `likemusic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `likesong` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=264 ;

-- --------------------------------------------------------

--
-- Structure de la table `likeplaylist`
--

CREATE TABLE IF NOT EXISTS `likeplaylist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mood_name` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

-- --------------------------------------------------------

--
-- Structure de la table `listencontext`
--

CREATE TABLE IF NOT EXISTS `listencontext` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `context_name` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=602 ;

-- --------------------------------------------------------

--
-- Structure de la table `listened`
--

CREATE TABLE IF NOT EXISTS `listened` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=41 ;

-- --------------------------------------------------------

--
-- Structure de la table `moodchange`
--

CREATE TABLE IF NOT EXISTS `moodchange` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `changing` text COLLATE utf8_bin NOT NULL,
  `playlist_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=24 ;

-- --------------------------------------------------------

--
-- Structure de la table `moodplaylist`
--

CREATE TABLE IF NOT EXISTS `moodplaylist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mood_name` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Structure de la table `music`
--

CREATE TABLE IF NOT EXISTS `music` (
  `title_id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `artiste` text NOT NULL,
  `lien` text NOT NULL,
  `playlist_id` int(11) NOT NULL,
  PRIMARY KEY (`title_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Contenu de la table `music`
--

INSERT INTO `music` (`title_id`, `titre`, `artiste`, `lien`, `playlist_id`) VALUES
(1, 'Sultan of Swing', 'Dire Straits', 'http://www.aht.li/2876475/Dire_Straits-Sultans_Of_SwingHQ_Audio.mp3', 1),
(2, 'Sultan of Swing', 'Dire Straits', 'http://www.aht.li/2876476/Dire_Straits-Sultans_Of_SwingHQ_Audio_-_remix.mp3', 2),
(3, 'La Grange', 'ZZTop', 'http://www.aht.li/2876483/ZZ_Top-_La_grange_HQ.mp3', 1),
(4, 'La Grange', 'ZZTop', 'http://www.aht.li/2876484/ZZ_Top-_La_grange_HQ_-_remix.mp3', 2),
(5, 'Ace of Spades', 'Motorhead', 'http://www.aht.li/2876477/Motorhead_-_Ace_Of_Spades_HQ.mp3', 1),
(6, 'Ace of Spades', 'Motorhead', 'http://www.aht.li/2876478/Motorhead_-_Ace_Of_Spades_HQ_-_remix.mp3', 2),
(7, 'Princes of the Universe', 'Queen', 'http://www.aht.li/2876479/Queen_-_Princes_Of_The_Universe_HQ.mp3', 1),
(8, 'Princes of the Universe', 'Queen', 'http://www.aht.li/2876480/Queen_-_Princes_Of_The_Universe_HQ_-_remix.mp3', 2),
(9, 'Simple Man', 'Lynyrd Skynyrd', 'http://www.aht.li/2876481/Simple_Man_-_Lynyrd_Skynyrd_HQ.mp3', 1),
(10, 'Simple Man', 'Lynyrd Skynyrd', 'http://www.aht.li/2876482/Simple_Man_-_Lynyrd_Skynyrd_HQ-_remix.mp3', 2),
(11, 'Dream On', 'Aerosmith', 'http://www.aht.li/2876474/Aerosmith_-_Dream_On_HQ.mp3', 1),
(12, 'Dream On', 'Aerosmith', 'http://www.aht.li/2876432/Aerosmith_-_Dream_On_HQ_-_remix.mp3', 2),
(13, 'Summer Sixteen', 'Drake', 'http://www.aht.li/2876466/Drake_-_Summer_Sixteen_-HQ-_Explicit_Freestyle.mp3', 3),
(14, 'Summer Sixteen', 'Drake', 'http://www.aht.li/2876467/Drake_-_Summer_Sixteen_-HQ-_Explicit_Freestyle_-_remix.mp3', 4),
(15, 'Too Rich for the Bitch', '50 Cent', 'http://www.aht.li/2876460/50_Cent_-_Too_Rich_Lyrics_HQ.mp3', 3),
(16, 'Too Rich for the Bitch', '50 Cent', 'http://www.aht.li/2876461/50_Cent_-_Too_Rich_Lyrics_HQ_-_remix.mp3', 4),
(17, 'JDC', 'Booba', 'http://www.aht.li/2876462/Booba_-_JDC.mp3', 3),
(18, 'JDC', 'Booba', 'http://www.aht.li/2876463/Booba_-_JDC_-_remix.mp3', 4),
(19, 'Rock yo hips', 'Crim Moh', 'http://www.aht.li/2876464/Crime_Mob_-_Rock_yo_hips.mp3', 3),
(20, 'Rock yo hips', 'Crim Mob', 'http://www.aht.li/2876465/Crime_Mob_-_Rock_yo_hips_-_remix.mp3', 4),
(21, 'Go Head', 'Gucci Mane', 'http://www.aht.li/2876468/Gucci_Mane-_Go_Head_lyrics.mp3', 3),
(22, 'Go Head', 'Gucci Mane', 'http://www.aht.li/2876470/Gucci_Mane-_Go_Head_lyrics_-_remix.mp3', 4),
(23, 'Liquid Swords', 'GZA', 'http://www.aht.li/2876471/GZA_-_Liquid_Swords_RZA_Production_1995_HQ.mp3', 3),
(24, 'Liquid Swords', 'GZA', 'http://www.aht.li/2876472/GZA_-_Liquid_Swords_RZA_Production_1995_HQ_-_remix.mp3', 4),
(25, 'Summer', 'Marshmello', 'http://www.aht.li/2876455/marshmello_-_Summer.mp3', 5),
(26, 'Summer', 'Marshmello', 'http://www.aht.li/2876456/marshmello_-_Summer_-_remix.mp3', 6),
(27, 'Slumber Party', 'Hellberg', 'http://www.aht.li/2876449/Hellberg_-_Slumber_Party_-_HQ.mp3', 5),
(28, 'Slumber Party', 'Hellberg', 'http://www.aht.li/2876450/Hellberg_-_Slumber_Party_-_HQ_-_remix.mp3', 6),
(29, 'Echo', 'Cut Snake', 'http://www.aht.li/2876445/Cut_Snake_-_Echo_Official_Audio.mp3', 5),
(30, 'Echo', 'Cut Snake', 'http://www.aht.li/2876446/Cut_Snake_-_Echo_Official_Audio_-_remix.mp3', 6),
(31, 'Fog', 'Jabberwocky', 'http://www.aht.li/2876452/Jabberwocky__Fog_feat_Ana_Zimmer.mp3', 5),
(32, 'Fog', 'Jabberwocky', 'http://www.aht.li/2876486/Jabberwocky__Fog_feat_Ana_Zimmer_-_remix.mp3', 6),
(33, 'We own the sky', 'M83', 'http://www.aht.li/2876453/M83_-_We_own_the_sky_-lyrics-.mp3', 5),
(34, 'We own the sky', 'M83', 'http://www.aht.li/2876454/M83_-_We_own_the_sky_-lyrics-_-_remix.mp3', 6),
(35, 'Brulee', 'Ratatat', 'http://www.aht.li/2876458/RATATAT_-_BRULEE_HD.mp3', 5),
(36, 'Brulee', 'Ratatat', 'http://www.aht.li/2876459/RATATAT_-_BRULEE_HD_-_remix.mp3', 6);

-- --------------------------------------------------------

--
-- Structure de la table `namemoodplaylist`
--

CREATE TABLE IF NOT EXISTS `namemoodplaylist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mood_name` text COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=27 ;

-- --------------------------------------------------------

--
-- Structure de la table `newmoodplaylist`
--

CREATE TABLE IF NOT EXISTS `newmoodplaylist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mood_name` text COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Structure de la table `playlist`
--

CREATE TABLE IF NOT EXISTS `playlist` (
  `playlist_id` int(11) NOT NULL AUTO_INCREMENT,
  `genre` text NOT NULL,
  `tempo` text NOT NULL,
  PRIMARY KEY (`playlist_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `playlist`
--

INSERT INTO `playlist` (`playlist_id`, `genre`, `tempo`) VALUES
(1, 'rock', 'rapide'),
(2, 'rock', 'lent'),
(3, 'rap', 'rapide'),
(4, 'rap', 'lent'),
(5, 'electro', 'rapide'),
(6, 'electro', 'lent');

-- --------------------------------------------------------

--
-- Structure de la table `possiblecontext`
--

CREATE TABLE IF NOT EXISTS `possiblecontext` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `context_name` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=229 ;

-- --------------------------------------------------------

--
-- Structure de la table `possiblecontextplaylist`
--

CREATE TABLE IF NOT EXISTS `possiblecontextplaylist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `context_name` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Structure de la table `suggestion`
--

CREATE TABLE IF NOT EXISTS `suggestion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `suggestion_message` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `mdp` text NOT NULL,
  `mail` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`user_id`, `login`, `mdp`, `mail`) VALUES
(11, 'test', '098f6bcd4621d373cade4e832627b4f6', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
