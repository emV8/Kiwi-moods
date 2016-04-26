-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 22 Avril 2016 à 15:39
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `currentmood`
--

INSERT INTO `currentmood` (`id`, `user_id`, `mood_name`, `playlist_id`) VALUES
(19, 11, 'joie', 0),
(20, 11, 'joie', 0),
(21, 11, 'joie', 3),
(22, 11, 'colère', 3);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=862 ;

--
-- Contenu de la table `emotion`
--

INSERT INTO `emotion` (`id`, `emotion_name`, `user_id`, `title`) VALUES
(794, 'tristesse', 11, 'Go Head'),
(793, 'fatigue', 11, 'Rock yo hips'),
(792, 'indifference', 11, 'JDC'),
(791, 'tristesse', 11, 'Too Rich for the Bitch'),
(790, 'indifference', 11, 'Summer Sixteen'),
(789, 'indifference', 11, 'Liquid Swords'),
(788, 'indifference', 11, 'Go Head'),
(787, 'indifference', 11, 'Rock yo hips'),
(786, 'indifference', 11, 'JDC'),
(785, 'indifference', 11, 'Too Rich for the Bitch'),
(784, 'indifference', 11, 'Summer Sixteen'),
(783, 'indifference', 11, 'Liquid Swords'),
(782, 'indifference', 11, 'Go Head'),
(781, 'indifference', 11, 'Rock yo hips'),
(780, 'indifference', 11, 'JDC'),
(779, 'indifference', 11, 'Too Rich for the Bitch'),
(778, 'indifference', 11, 'Summer Sixteen'),
(777, 'indifference', 11, 'Liquid Swords'),
(776, 'indifference', 11, 'Go Head'),
(775, 'indifference', 11, 'Rock yo hips'),
(772, 'indifference', 11, 'Summer Sixteen'),
(773, 'indifference', 11, 'Too Rich for the Bitch'),
(774, 'indifference', 11, 'JDC'),
(769, 'indifference', 11, 'Rock yo hips'),
(771, 'indifference', 11, 'Liquid Swords'),
(770, 'indifference', 11, 'Go Head'),
(768, 'indifference', 11, 'JDC'),
(767, 'indifference', 11, 'Too Rich for the Bitch'),
(766, 'indifference', 11, 'Summer Sixteen'),
(765, 'indifference', 11, 'Liquid Swords'),
(764, 'indifference', 11, 'Go Head'),
(763, 'indifference', 11, 'Rock yo hips'),
(762, 'indifference', 11, 'JDC'),
(761, 'indifference', 11, 'Too Rich for the Bitch'),
(760, 'indifference', 11, 'Summer Sixteen'),
(758, 'fatigue', 11, 'Go Head'),
(759, 'fatigue', 11, 'Liquid Swords'),
(757, 'fatigue', 11, 'Rock yo hips'),
(756, 'fatigue', 11, 'JDC'),
(755, 'calme', 11, 'JDC'),
(754, 'fatigue', 11, 'Too Rich for the Bitch'),
(753, 'fatigue', 11, 'Summer Sixteen'),
(752, 'tristesse', 11, 'Liquid Swords'),
(751, 'tristesse', 11, 'Go Head'),
(750, 'tristesse', 11, 'Rock yo hips'),
(749, 'tristesse', 11, 'JDC'),
(748, 'tristesse', 11, 'Too Rich for the Bitch'),
(747, 'tristesse', 11, 'Summer Sixteen'),
(746, 'excitation', 11, 'Liquid Swords'),
(745, 'excitation', 11, 'Go Head'),
(744, 'excitation', 11, 'Rock yo hips'),
(743, 'excitation', 11, 'JDC'),
(742, 'excitation', 11, 'Too Rich for the Bitch'),
(741, 'excitation', 11, 'Summer Sixteen'),
(740, 'calme', 11, 'Brulee'),
(739, 'calme', 11, 'We own the sky'),
(738, 'calme', 11, 'Fog'),
(737, 'calme', 11, 'Echo'),
(736, 'calme', 11, 'Slumber Party'),
(735, 'calme', 11, 'Summer'),
(734, 'indifference', 11, 'Dream On'),
(733, 'indifference', 11, 'Simple Man'),
(732, 'indifference', 11, 'Princes of the Universe'),
(731, 'indifference', 11, 'Ace of Spades'),
(730, 'indifference', 11, 'La Grange'),
(729, 'indifference', 11, 'Sultan of Swing'),
(728, 'indifference', 11, 'Brulee'),
(727, 'indifference', 11, 'We own the sky'),
(726, 'indifference', 11, 'Fog'),
(725, 'indifference', 11, 'Echo'),
(724, 'indifference', 11, 'Slumber Party'),
(723, 'indifference', 11, 'Summer'),
(722, 'indifference', 11, 'Brulee'),
(721, 'indifference', 11, 'We own the sky'),
(720, 'indifference', 11, 'Fog'),
(719, 'indifference', 11, 'Echo'),
(718, 'indifference', 11, 'Slumber Party'),
(717, 'indifference', 11, 'Summer'),
(716, 'indifference', 11, 'Brulee'),
(715, 'indifference', 11, 'We own the sky'),
(714, 'indifference', 11, 'Fog'),
(713, 'indifference', 11, 'Echo'),
(712, 'indifference', 11, 'Slumber Party'),
(711, 'indifference', 11, 'Summer'),
(710, 'indifference', 11, 'Brulee'),
(709, 'indifference', 11, 'We own the sky'),
(708, 'indifference', 11, 'Fog'),
(707, 'indifference', 11, 'Echo'),
(706, 'indifference', 11, 'Slumber Party'),
(705, 'indifference', 11, 'Summer'),
(704, 'indifference', 11, 'Brulee'),
(703, 'indifference', 11, 'We own the sky'),
(702, 'indifference', 11, 'Fog'),
(701, 'indifference', 11, 'Echo'),
(700, 'indifference', 11, 'Slumber Party'),
(699, 'indifference', 11, 'Summer'),
(698, 'fatigue', 11, 'Brulee'),
(697, 'joie', 11, 'We own the sky'),
(696, 'ennui', 11, 'Fog'),
(695, 'ennui', 11, 'Echo'),
(694, 'calme', 11, 'Slumber Party'),
(693, 'joie', 11, 'Summer'),
(692, 'indifference', 11, 'Brulee'),
(691, 'indifference', 11, 'We own the sky'),
(690, 'tristesse', 11, 'Fog'),
(689, 'indifference', 11, 'Echo'),
(688, 'indifference', 11, 'Slumber Party'),
(687, 'indifference', 11, 'Summer'),
(686, 'indifference', 11, 'Brulee'),
(685, 'indifference', 11, 'We own the sky'),
(684, 'indifference', 11, 'Fog'),
(683, 'indifference', 11, 'Echo'),
(682, 'indifference', 11, 'Slumber Party'),
(681, 'indifference', 11, 'Summer'),
(680, 'fatigue', 11, 'Brulee'),
(679, 'fatigue', 11, 'We own the sky'),
(678, 'fatigue', 11, 'Fog'),
(677, 'fatigue', 11, 'Echo'),
(676, 'fatigue', 11, 'Slumber Party'),
(675, 'fatigue', 11, 'Summer'),
(674, 'ennui', 11, 'Brulee'),
(673, 'ennui', 11, 'We own the sky'),
(672, 'ennui', 11, 'Fog'),
(671, 'ennui', 11, 'Echo'),
(670, 'ennui', 11, 'Slumber Party'),
(669, 'ennui', 11, 'Summer'),
(668, 'tristesse', 11, 'Brulee'),
(667, 'tristesse', 11, 'We own the sky'),
(666, 'tristesse', 11, 'Fog'),
(665, 'tristesse', 11, 'Echo'),
(664, 'tristesse', 11, 'Slumber Party'),
(663, 'tristesse', 11, 'Summer'),
(662, 'joie', 11, 'Brulee'),
(661, 'joie', 11, 'We own the sky'),
(660, 'joie', 11, 'Fog'),
(659, 'joie', 11, 'Echo'),
(658, 'joie', 11, 'Slumber Party'),
(657, 'joie', 11, 'Summer'),
(656, 'indifference', 11, 'Brulee'),
(655, 'indifference', 11, 'We own the sky'),
(654, 'indifference', 11, 'Fog'),
(653, 'indifference', 11, 'Echo'),
(652, 'indifference', 11, 'Slumber Party'),
(651, 'indifference', 11, 'Summer'),
(650, 'indifference', 11, 'Brulee'),
(649, 'indifference', 11, 'We own the sky'),
(648, 'indifference', 11, 'Fog'),
(647, 'indifference', 11, 'Echo'),
(646, 'indifference', 11, 'Slumber Party'),
(645, 'indifference', 11, 'Summer'),
(644, 'tristesse', 11, 'Brulee'),
(643, 'tristesse', 11, 'We own the sky'),
(642, 'tristesse', 11, 'Fog'),
(641, 'tristesse', 11, 'Echo'),
(640, 'tristesse', 11, 'Slumber Party'),
(639, 'tristesse', 11, 'Summer'),
(638, 'tristesse', 11, 'Brulee'),
(637, 'tristesse', 11, 'We own the sky'),
(636, 'tristesse', 11, 'Fog'),
(635, 'tristesse', 11, 'Echo'),
(634, 'tristesse', 11, 'Slumber Party'),
(633, 'tristesse', 11, 'Summer'),
(632, 'excitation', 11, 'Brulee'),
(631, 'excitation', 11, 'We own the sky'),
(630, 'excitation', 11, 'Fog'),
(629, 'excitation', 11, 'Echo'),
(628, 'excitation', 11, 'Slumber Party'),
(627, 'excitation', 11, 'Summer'),
(795, 'tristesse', 11, 'Liquid Swords'),
(796, 'indifference', 11, 'Summer Sixteen'),
(797, 'indifference', 11, 'Too Rich for the Bitch'),
(798, 'indifference', 11, 'JDC'),
(799, 'indifference', 11, 'Rock yo hips'),
(800, 'indifference', 11, 'Go Head'),
(801, 'indifference', 11, 'Liquid Swords'),
(802, 'indifference', 11, 'Summer Sixteen'),
(803, 'indifference', 11, 'Too Rich for the Bitch'),
(804, 'indifference', 11, 'JDC'),
(805, 'indifference', 11, 'Rock yo hips'),
(806, 'indifference', 11, 'Go Head'),
(807, 'indifference', 11, 'Liquid Swords'),
(808, 'indifference', 11, 'Summer Sixteen'),
(809, 'indifference', 11, 'Too Rich for the Bitch'),
(810, 'indifference', 11, 'JDC'),
(811, 'indifference', 11, 'Rock yo hips'),
(812, 'indifference', 11, 'Go Head'),
(813, 'indifference', 11, 'Liquid Swords'),
(814, 'indifference', 11, 'Summer Sixteen'),
(815, 'indifference', 11, 'Too Rich for the Bitch'),
(816, 'indifference', 11, 'JDC'),
(817, 'indifference', 11, 'Rock yo hips'),
(818, 'indifference', 11, 'Go Head'),
(819, 'indifference', 11, 'Liquid Swords'),
(820, 'indifference', 11, 'Summer Sixteen'),
(821, 'indifference', 11, 'Too Rich for the Bitch'),
(822, 'indifference', 11, 'JDC'),
(823, 'indifference', 11, 'Rock yo hips'),
(824, 'indifference', 11, 'Go Head'),
(825, 'indifference', 11, 'Liquid Swords'),
(826, 'indifference', 11, 'Summer Sixteen'),
(827, 'indifference', 11, 'Too Rich for the Bitch'),
(828, 'indifference', 11, 'JDC'),
(829, 'indifference', 11, 'Rock yo hips'),
(830, 'indifference', 11, 'Go Head'),
(831, 'indifference', 11, 'Liquid Swords'),
(832, 'indifference', 11, 'Summer Sixteen'),
(833, 'indifference', 11, 'Too Rich for the Bitch'),
(834, 'indifference', 11, 'JDC'),
(835, 'indifference', 11, 'Rock yo hips'),
(836, 'indifference', 11, 'Go Head'),
(837, 'indifference', 11, 'Liquid Swords'),
(838, 'indifference', 11, 'Summer Sixteen'),
(839, 'indifference', 11, 'Too Rich for the Bitch'),
(840, 'indifference', 11, 'JDC'),
(841, 'indifference', 11, 'Rock yo hips'),
(842, 'indifference', 11, 'Go Head'),
(843, 'indifference', 11, 'Liquid Swords'),
(844, 'indifference', 11, 'Summer Sixteen'),
(845, 'indifference', 11, 'Too Rich for the Bitch'),
(846, 'indifference', 11, 'JDC'),
(847, 'indifference', 11, 'Rock yo hips'),
(848, 'indifference', 11, 'Go Head'),
(849, 'indifference', 11, 'Liquid Swords'),
(850, 'tristesse', 11, 'Summer Sixteen'),
(851, 'tristesse', 11, 'Too Rich for the Bitch'),
(852, 'tristesse', 11, 'JDC'),
(853, 'tristesse', 11, 'Rock yo hips'),
(854, 'indifference', 11, 'Go Head'),
(855, 'tristesse', 11, 'Liquid Swords'),
(856, 'indifference', 11, 'Summer Sixteen'),
(857, 'indifference', 11, 'Too Rich for the Bitch'),
(858, 'indifference', 11, 'JDC'),
(859, 'indifference', 11, 'Rock yo hips'),
(860, 'indifference', 11, 'Go Head'),
(861, 'indifference', 11, 'Liquid Swords');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=180 ;

--
-- Contenu de la table `knowartist`
--

INSERT INTO `knowartist` (`id`, `knowartist`, `user_id`, `title`) VALUES
(172, 'non', 11, 'Gucci Mane'),
(171, 'non', 11, 'Crim Moh'),
(170, 'non', 11, 'Booba'),
(169, 'non', 11, '50 Cent'),
(168, 'non', 11, 'Drake'),
(167, 'non', 11, 'GZA'),
(166, 'non', 11, 'Gucci Mane'),
(165, 'non', 11, 'Crim Moh'),
(164, 'non', 11, 'Booba'),
(163, 'non', 11, '50 Cent'),
(162, 'non', 11, 'Drake'),
(161, 'non', 11, 'GZA'),
(160, 'non', 11, 'Crim Moh'),
(159, 'non', 11, 'Booba'),
(158, 'non', 11, '50 Cent'),
(157, 'oui', 11, 'Drake'),
(156, 'non', 11, 'GZA'),
(155, 'non', 11, 'Gucci Mane'),
(154, 'non', 11, 'Crim Moh'),
(153, 'non', 11, 'Booba'),
(152, 'non', 11, '50 Cent'),
(151, 'oui', 11, 'Drake'),
(150, 'non', 11, 'GZA'),
(149, 'non', 11, 'Gucci Mane'),
(148, 'non', 11, 'Crim Moh'),
(147, 'non', 11, 'Booba'),
(146, 'non', 11, '50 Cent'),
(145, 'non', 11, 'Drake'),
(144, 'non', 11, 'GZA'),
(143, 'non', 11, 'Gucci Mane'),
(142, 'non', 11, 'Crim Moh'),
(141, 'non', 11, 'Booba'),
(140, 'non', 11, '50 Cent'),
(139, 'non', 11, 'Drake'),
(138, 'non', 11, 'GZA'),
(137, 'non', 11, 'Gucci Mane'),
(136, 'non', 11, 'Crim Moh'),
(135, 'non', 11, 'Booba'),
(134, 'non', 11, '50 Cent'),
(133, 'non', 11, 'Drake'),
(132, 'non', 11, 'GZA'),
(131, 'non', 11, 'Gucci Mane'),
(130, 'non', 11, 'Crim Moh'),
(129, 'non', 11, 'Booba'),
(128, 'non', 11, '50 Cent'),
(127, 'non', 11, 'Drake'),
(126, 'non', 11, 'GZA'),
(125, 'non', 11, 'Gucci Mane'),
(124, 'non', 11, 'Crim Moh'),
(123, 'non', 11, 'Booba'),
(122, 'non', 11, '50 Cent'),
(121, 'non', 11, 'Drake'),
(120, 'non', 11, 'GZA'),
(119, 'non', 11, 'Gucci Mane'),
(118, 'non', 11, 'Crim Moh'),
(117, 'non', 11, 'Booba'),
(116, 'non', 11, '50 Cent'),
(115, 'non', 11, 'Drake'),
(114, 'non', 11, 'Ratatat'),
(113, 'non', 11, 'M83'),
(112, 'non', 11, 'Jabberwocky'),
(111, 'non', 11, 'Cut Snake'),
(110, 'non', 11, 'Hellberg'),
(109, 'non', 11, 'Marshmello'),
(173, 'non', 11, 'GZA'),
(174, 'non', 11, 'Drake'),
(175, 'non', 11, '50 Cent'),
(176, 'non', 11, 'Booba'),
(177, 'non', 11, 'Crim Moh'),
(178, 'non', 11, 'Gucci Mane'),
(179, 'non', 11, 'GZA');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=182 ;

--
-- Contenu de la table `knowtitle`
--

INSERT INTO `knowtitle` (`id`, `knowtitle`, `user_id`, `title`) VALUES
(34, 'oui', 11, '0'),
(33, 'oui', 11, '0'),
(32, 'oui', 11, '0'),
(31, 'oui', 11, '0'),
(30, 'oui', 11, '0'),
(29, 'oui', 11, '0'),
(28, 'oui', 11, '0'),
(27, 'oui', 11, '0'),
(26, 'oui', 11, '0'),
(25, 'oui', 11, '0'),
(24, 'oui', 11, '0'),
(23, 'oui', 11, '0'),
(22, 'oui', 11, '0'),
(21, 'oui', 11, '0'),
(20, 'oui', 11, '0'),
(19, 'oui', 11, '0'),
(18, 'oui', 11, '0'),
(35, 'oui', 11, '0'),
(36, 'oui', 11, '0'),
(37, 'oui', 11, '0'),
(38, 'oui', 11, '0'),
(39, 'oui', 11, '0'),
(40, 'oui', 11, '0'),
(41, 'oui', 11, '0'),
(42, 'oui', 11, 'Sultan of Swing'),
(43, 'non', 11, 'La Grange'),
(44, 'non', 11, 'Ace of Spades'),
(45, 'non', 11, 'Princes of the Universe'),
(46, 'non', 11, 'Simple Man'),
(47, 'oui', 11, 'Sultan of Swing'),
(48, 'non', 11, 'La Grange'),
(49, 'non', 11, 'Ace of Spades'),
(50, 'non', 11, 'Princes of the Universe'),
(51, 'non', 11, 'Simple Man'),
(52, 'oui', 11, 'Sultan of Swing'),
(53, 'non', 11, 'La Grange'),
(54, 'non', 11, 'Ace of Spades'),
(55, 'non', 11, 'Princes of the Universe'),
(56, 'non', 11, 'Simple Man'),
(57, 'oui', 11, 'Dream On'),
(58, 'oui', 11, 'Sultan of Swing'),
(59, 'non', 11, 'La Grange'),
(60, 'non', 11, 'Ace of Spades'),
(61, 'non', 11, 'Princes of the Universe'),
(62, 'non', 11, 'Simple Man'),
(63, 'oui', 11, 'Sultan of Swing'),
(64, 'non', 11, 'La Grange'),
(65, 'non', 11, 'Ace of Spades'),
(66, 'non', 11, 'Princes of the Universe'),
(67, 'non', 11, 'Simple Man'),
(68, 'oui', 11, 'Dream On'),
(69, 'non', 11, 'Sultan of Swing'),
(70, 'non', 11, 'La Grange'),
(71, 'non', 11, 'Ace of Spades'),
(72, 'non', 11, 'Princes of the Universe'),
(73, 'non', 11, 'Simple Man'),
(74, 'non', 11, 'Dream On'),
(75, 'non', 11, 'Sultan of Swing'),
(76, 'non', 11, 'La Grange'),
(77, 'non', 11, 'Ace of Spades'),
(78, 'non', 11, 'Princes of the Universe'),
(79, 'non', 11, 'Simple Man'),
(80, 'non', 11, 'Dream On'),
(81, 'non', 11, 'Sultan of Swing'),
(82, 'non', 11, 'La Grange'),
(83, 'non', 11, 'Ace of Spades'),
(84, 'non', 11, 'Princes of the Universe'),
(85, 'non', 11, 'Simple Man'),
(86, 'non', 11, 'Dream On'),
(87, 'non', 11, 'Summer'),
(88, 'non', 11, 'Slumber Party'),
(89, 'non', 11, 'Echo'),
(90, 'non', 11, 'Fog'),
(91, 'non', 11, 'We own the sky'),
(92, 'non', 11, 'Brulee'),
(93, 'non', 11, 'Sultan of Swing'),
(94, 'non', 11, 'La Grange'),
(95, 'non', 11, 'Ace of Spades'),
(96, 'non', 11, 'Princes of the Universe'),
(97, 'non', 11, 'Simple Man'),
(98, 'non', 11, 'Dream On'),
(99, 'non', 11, 'Summer'),
(100, 'non', 11, 'Slumber Party'),
(101, 'non', 11, 'Echo'),
(102, 'non', 11, 'Fog'),
(103, 'non', 11, 'We own the sky'),
(104, 'non', 11, 'Summer'),
(105, 'non', 11, 'Slumber Party'),
(106, 'non', 11, 'Echo'),
(107, 'non', 11, 'Fog'),
(108, 'non', 11, 'We own the sky'),
(109, 'non', 11, 'Brulee'),
(110, 'non', 11, 'Summer'),
(111, 'non', 11, 'Slumber Party'),
(112, 'non', 11, 'Echo'),
(113, 'non', 11, 'Fog'),
(114, 'non', 11, 'We own the sky'),
(115, 'non', 11, 'Brulee'),
(116, 'non', 11, 'Summer Sixteen'),
(117, 'non', 11, 'Too Rich for the Bitch'),
(118, 'non', 11, 'JDC'),
(119, 'non', 11, 'Rock yo hips'),
(120, 'non', 11, 'Go Head'),
(121, 'non', 11, 'Liquid Swords'),
(122, 'non', 11, 'Summer Sixteen'),
(123, 'non', 11, 'Too Rich for the Bitch'),
(124, 'non', 11, 'JDC'),
(125, 'non', 11, 'Rock yo hips'),
(126, 'non', 11, 'Go Head'),
(127, 'non', 11, 'Liquid Swords'),
(128, 'non', 11, 'Summer Sixteen'),
(129, 'non', 11, 'Too Rich for the Bitch'),
(130, 'non', 11, 'JDC'),
(131, 'non', 11, 'Rock yo hips'),
(132, 'non', 11, 'Go Head'),
(133, 'non', 11, 'Liquid Swords'),
(134, 'non', 11, 'Summer Sixteen'),
(135, 'non', 11, 'Too Rich for the Bitch'),
(136, 'non', 11, 'JDC'),
(137, 'non', 11, 'Rock yo hips'),
(138, 'non', 11, 'Go Head'),
(139, 'non', 11, 'Liquid Swords'),
(140, 'non', 11, 'Summer Sixteen'),
(141, 'non', 11, 'Too Rich for the Bitch'),
(142, 'non', 11, 'JDC'),
(143, 'non', 11, 'Rock yo hips'),
(144, 'non', 11, 'Go Head'),
(145, 'non', 11, 'Liquid Swords'),
(146, 'non', 11, 'Summer Sixteen'),
(147, 'non', 11, 'Too Rich for the Bitch'),
(148, 'non', 11, 'JDC'),
(149, 'non', 11, 'Rock yo hips'),
(150, 'non', 11, 'Go Head'),
(151, 'non', 11, 'Liquid Swords'),
(152, 'non', 11, 'Summer Sixteen'),
(153, 'non', 11, 'Too Rich for the Bitch'),
(154, 'non', 11, 'JDC'),
(155, 'non', 11, 'Rock yo hips'),
(156, 'non', 11, 'Go Head'),
(157, 'non', 11, 'Liquid Swords'),
(158, 'non', 11, 'Summer Sixteen'),
(159, 'non', 11, 'Too Rich for the Bitch'),
(160, 'non', 11, 'JDC'),
(161, 'non', 11, 'Rock yo hips'),
(162, 'non', 11, 'Go Head'),
(163, 'non', 11, 'Liquid Swords'),
(164, 'non', 11, 'Summer Sixteen'),
(165, 'non', 11, 'Too Rich for the Bitch'),
(166, 'non', 11, 'JDC'),
(167, 'non', 11, 'Rock yo hips'),
(168, 'non', 11, 'Go Head'),
(169, 'non', 11, 'Liquid Swords'),
(170, 'non', 11, 'Summer Sixteen'),
(171, 'non', 11, 'Too Rich for the Bitch'),
(172, 'non', 11, 'JDC'),
(173, 'non', 11, 'Rock yo hips'),
(174, 'non', 11, 'Go Head'),
(175, 'non', 11, 'Liquid Swords'),
(176, 'non', 11, 'Summer Sixteen'),
(177, 'non', 11, 'Too Rich for the Bitch'),
(178, 'non', 11, 'JDC'),
(179, 'non', 11, 'Rock yo hips'),
(180, 'non', 11, 'Go Head'),
(181, 'non', 11, 'Liquid Swords');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=216 ;

--
-- Contenu de la table `likemusic`
--

INSERT INTO `likemusic` (`id`, `likesong`, `user_id`, `title`) VALUES
(43, 'oui', 11, '0'),
(42, 'oui', 11, '0'),
(41, 'oui', 11, '0'),
(40, 'oui', 11, '0'),
(39, 'oui', 11, '0'),
(38, 'oui', 11, '0'),
(37, 'oui', 11, '0'),
(36, 'oui', 11, '0'),
(35, 'oui', 11, '0'),
(34, 'oui', 11, '0'),
(33, 'oui', 11, '0'),
(32, 'oui', 11, '0'),
(31, 'oui', 11, '0'),
(30, 'oui', 11, '0'),
(29, 'oui', 11, '0'),
(28, 'oui', 11, '0'),
(27, 'oui', 11, '0'),
(26, 'oui', 11, '0'),
(44, 'oui', 11, '0'),
(45, 'oui', 11, '0'),
(46, 'oui', 11, '0'),
(47, 'oui', 11, '0'),
(48, 'oui', 11, '0'),
(49, 'oui', 11, '0'),
(50, 'oui', 11, '0'),
(51, 'oui', 11, '0'),
(52, 'oui', 11, '0'),
(53, 'oui', 11, '0'),
(54, 'oui', 11, '0'),
(55, 'oui', 11, '0'),
(56, 'oui', 11, 'Sultan of Swing'),
(57, 'oui', 11, 'La Grange'),
(58, 'oui', 11, 'Ace of Spades'),
(59, 'oui', 11, 'Princes of the Universe'),
(60, 'oui', 11, 'Simple Man'),
(61, 'oui', 11, 'Dream On'),
(62, 'oui', 11, 'Sultan of Swing'),
(63, 'oui', 11, 'La Grange'),
(64, 'oui', 11, 'Ace of Spades'),
(65, 'oui', 11, 'Princes of the Universe'),
(66, 'oui', 11, 'Simple Man'),
(67, 'oui', 11, 'Sultan of Swing'),
(68, 'oui', 11, 'La Grange'),
(69, 'oui', 11, 'Ace of Spades'),
(70, 'oui', 11, 'Princes of the Universe'),
(71, 'oui', 11, 'Simple Man'),
(72, 'oui', 11, 'Dream On'),
(73, 'oui', 11, 'Sultan of Swing'),
(74, 'non', 11, 'La Grange'),
(75, 'non', 11, 'Ace of Spades'),
(76, 'oui', 11, 'Princes of the Universe'),
(77, 'oui', 11, 'Simple Man'),
(78, 'oui', 11, 'Sultan of Swing'),
(79, 'non', 11, 'La Grange'),
(80, 'non', 11, 'Ace of Spades'),
(81, 'oui', 11, 'Princes of the Universe'),
(82, 'oui', 11, 'Simple Man'),
(83, 'oui', 11, 'Dream On'),
(84, 'non', 11, 'Sultan of Swing'),
(85, 'non', 11, 'La Grange'),
(86, 'non', 11, 'Ace of Spades'),
(87, 'non', 11, 'Princes of the Universe'),
(88, 'non', 11, 'Simple Man'),
(89, 'non', 11, 'Dream On'),
(90, 'oui', 11, 'Sultan of Swing'),
(91, 'oui', 11, 'La Grange'),
(92, 'oui', 11, 'Ace of Spades'),
(93, 'oui', 11, 'Princes of the Universe'),
(94, 'oui', 11, 'Simple Man'),
(95, 'oui', 11, 'Dream On'),
(96, 'non', 11, 'Sultan of Swing'),
(97, 'non', 11, 'La Grange'),
(98, 'non', 11, 'Ace of Spades'),
(99, 'non', 11, 'Princes of the Universe'),
(100, 'non', 11, 'Simple Man'),
(101, 'non', 11, 'Dream On'),
(102, 'non', 11, 'Summer'),
(103, 'non', 11, 'Slumber Party'),
(104, 'non', 11, 'Echo'),
(105, 'non', 11, 'Fog'),
(106, 'non', 11, 'We own the sky'),
(107, 'non', 11, 'Brulee'),
(108, 'non', 11, 'Sultan of Swing'),
(109, 'non', 11, 'La Grange'),
(110, 'non', 11, 'Ace of Spades'),
(111, 'non', 11, 'Princes of the Universe'),
(112, 'non', 11, 'Simple Man'),
(113, 'non', 11, 'Dream On'),
(114, 'oui', 11, 'Summer'),
(115, 'oui', 11, 'Slumber Party'),
(116, 'oui', 11, 'Echo'),
(117, 'oui', 11, 'Fog'),
(118, 'oui', 11, 'We own the sky'),
(119, 'oui', 11, 'Brulee'),
(120, 'non', 11, 'Summer'),
(121, 'non', 11, 'Slumber Party'),
(122, 'non', 11, 'Echo'),
(123, 'non', 11, 'Fog'),
(124, 'non', 11, 'We own the sky'),
(125, 'non', 11, 'Brulee'),
(126, 'non', 11, 'Summer'),
(127, 'non', 11, 'Slumber Party'),
(128, 'non', 11, 'Echo'),
(129, 'non', 11, 'Fog'),
(130, 'non', 11, 'We own the sky'),
(131, 'non', 11, 'Brulee'),
(132, 'non', 11, 'Summer'),
(133, 'non', 11, 'Slumber Party'),
(134, 'non', 11, 'Echo'),
(135, 'non', 11, 'Fog'),
(136, 'non', 11, 'We own the sky'),
(137, 'non', 11, 'Brulee'),
(138, 'non', 11, 'Summer'),
(139, 'non', 11, 'Slumber Party'),
(140, 'non', 11, 'Echo'),
(141, 'non', 11, 'Fog'),
(142, 'non', 11, 'We own the sky'),
(143, 'non', 11, 'Brulee'),
(144, 'non', 11, 'Summer'),
(145, 'non', 11, 'Slumber Party'),
(146, 'non', 11, 'Echo'),
(147, 'non', 11, 'Fog'),
(148, 'non', 11, 'We own the sky'),
(149, 'non', 11, 'Brulee'),
(150, 'non', 11, 'Summer Sixteen'),
(151, 'non', 11, 'Too Rich for the Bitch'),
(152, 'non', 11, 'JDC'),
(153, 'non', 11, 'Rock yo hips'),
(154, 'non', 11, 'Go Head'),
(155, 'non', 11, 'Liquid Swords'),
(156, 'non', 11, 'Summer Sixteen'),
(157, 'non', 11, 'Too Rich for the Bitch'),
(158, 'non', 11, 'JDC'),
(159, 'non', 11, 'Rock yo hips'),
(160, 'non', 11, 'Go Head'),
(161, 'non', 11, 'Liquid Swords'),
(162, 'non', 11, 'Summer Sixteen'),
(163, 'non', 11, 'Too Rich for the Bitch'),
(164, 'non', 11, 'JDC'),
(165, 'non', 11, 'Rock yo hips'),
(166, 'non', 11, 'Go Head'),
(167, 'non', 11, 'Liquid Swords'),
(168, 'non', 11, 'Summer Sixteen'),
(169, 'non', 11, 'Too Rich for the Bitch'),
(170, 'non', 11, 'JDC'),
(171, 'non', 11, 'Rock yo hips'),
(172, 'non', 11, 'Go Head'),
(173, 'non', 11, 'Liquid Swords'),
(174, 'non', 11, 'Summer Sixteen'),
(175, 'non', 11, 'Too Rich for the Bitch'),
(176, 'oui', 11, 'JDC'),
(177, 'non', 11, 'Rock yo hips'),
(178, 'non', 11, 'Go Head'),
(179, 'non', 11, 'Liquid Swords'),
(180, 'non', 11, 'Summer Sixteen'),
(181, 'non', 11, 'Too Rich for the Bitch'),
(182, 'non', 11, 'JDC'),
(183, 'non', 11, 'Rock yo hips'),
(184, 'non', 11, 'Go Head'),
(185, 'non', 11, 'Liquid Swords'),
(186, 'non', 11, 'Summer Sixteen'),
(187, 'non', 11, 'Too Rich for the Bitch'),
(188, 'non', 11, 'JDC'),
(189, 'non', 11, 'Rock yo hips'),
(190, 'non', 11, 'Go Head'),
(191, 'non', 11, 'Liquid Swords'),
(192, 'non', 11, 'Summer Sixteen'),
(193, 'non', 11, 'Too Rich for the Bitch'),
(194, 'non', 11, 'JDC'),
(195, 'non', 11, 'Rock yo hips'),
(196, 'non', 11, 'Go Head'),
(197, 'non', 11, 'Liquid Swords'),
(198, 'non', 11, 'Summer Sixteen'),
(199, 'non', 11, 'Too Rich for the Bitch'),
(200, 'non', 11, 'JDC'),
(201, 'non', 11, 'Rock yo hips'),
(202, 'non', 11, 'Go Head'),
(203, 'non', 11, 'Liquid Swords'),
(204, 'non', 11, 'Summer Sixteen'),
(205, 'non', 11, 'Too Rich for the Bitch'),
(206, 'non', 11, 'JDC'),
(207, 'non', 11, 'Rock yo hips'),
(208, 'non', 11, 'Go Head'),
(209, 'non', 11, 'Liquid Swords'),
(210, 'non', 11, 'Summer Sixteen'),
(211, 'non', 11, 'Too Rich for the Bitch'),
(212, 'non', 11, 'JDC'),
(213, 'non', 11, 'Rock yo hips'),
(214, 'non', 11, 'Go Head'),
(215, 'non', 11, 'Liquid Swords');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `likeplaylist`
--

INSERT INTO `likeplaylist` (`id`, `mood_name`, `user_id`, `playlist_id`) VALUES
(4, '', 11, 0),
(3, '', 11, 0),
(5, '', 11, 0),
(6, '', 11, 0),
(7, '', 11, 2),
(8, 'oui', 11, 2),
(9, 'oui', 11, 2),
(10, 'oui', 11, 2),
(11, 'oui', 11, 2),
(12, 'oui', 11, 6),
(13, 'oui', 11, 2),
(14, 'non', 11, 5),
(15, 'oui', 11, 6),
(16, 'non', 11, 3),
(17, 'non', 11, 3),
(18, 'non', 11, 3),
(19, 'oui', 11, 3),
(20, 'non', 11, 3),
(21, 'non', 11, 3),
(22, 'non', 11, 3),
(23, 'non', 11, 3),
(24, 'non', 11, 3);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=548 ;

--
-- Contenu de la table `listencontext`
--

INSERT INTO `listencontext` (`id`, `context_name`, `user_id`, `title`) VALUES
(316, 'famille', 11, '0'),
(315, 'famille', 11, '0'),
(314, 'famille', 11, '0'),
(313, 'famille', 11, '0'),
(312, 'famille', 11, '0'),
(311, 'famille', 11, '0'),
(310, 'famille', 11, '0'),
(309, 'famille', 11, '0'),
(308, 'famille', 11, '0'),
(307, 'famille', 11, '0'),
(306, 'famille', 11, '0'),
(305, 'famille', 11, '0'),
(304, 'famille', 11, '0'),
(303, 'famille', 11, '0'),
(302, 'famille', 11, '0'),
(301, 'famille', 11, '0'),
(300, 'famille', 11, '0'),
(299, 'famille', 11, '0'),
(298, 'famille', 11, '0'),
(297, 'famille', 11, '0'),
(296, 'famille', 11, '0'),
(295, 'famille', 11, '0'),
(294, 'famille', 11, '0'),
(293, 'famille', 11, '0'),
(292, 'famille', 11, '0'),
(291, 'famille', 11, '0'),
(290, 'famille', 11, '0'),
(317, 'famille', 11, '0'),
(318, 'famille', 11, '0'),
(319, 'famille', 11, '0'),
(320, 'famille', 11, '0'),
(321, 'famille', 11, '0'),
(322, 'famille', 11, '0'),
(323, 'famille', 11, '0'),
(324, 'famille', 11, '0'),
(325, 'famille', 11, '0'),
(326, 'seul', 11, 'Sultan of Swing'),
(327, 'amis', 11, 'La Grange'),
(328, 'compagnon', 11, 'Ace of Spades'),
(329, 'famille', 11, 'Princes of the Universe'),
(330, 'sport', 11, 'Simple Man'),
(331, 'lecture', 11, 'Dream On'),
(332, 'famille', 11, 'Sultan of Swing'),
(333, 'famille', 11, 'La Grange'),
(334, 'famille', 11, 'Ace of Spades'),
(335, 'famille', 11, 'Princes of the Universe'),
(336, 'famille', 11, 'Simple Man'),
(337, 'famille', 11, 'Dream On'),
(338, 'famille', 11, 'Sultan of Swing'),
(339, 'compagnon', 11, 'La Grange'),
(340, 'amis', 11, 'Ace of Spades'),
(341, 'compagnon', 11, 'Princes of the Universe'),
(342, 'compagnon', 11, 'Simple Man'),
(343, 'famille', 11, 'Dream On'),
(344, 'famille', 11, 'Sultan of Swing'),
(345, 'famille', 11, 'La Grange'),
(346, 'famille', 11, 'Ace of Spades'),
(347, 'famille', 11, 'Princes of the Universe'),
(348, 'famille', 11, 'Simple Man'),
(349, 'famille', 11, 'Dream On'),
(350, 'famille', 11, 'Sultan of Swing'),
(351, 'famille', 11, 'La Grange'),
(352, 'famille', 11, 'Ace of Spades'),
(353, 'famille', 11, 'Princes of the Universe'),
(354, 'famille', 11, 'Simple Man'),
(355, 'famille', 11, 'Dream On'),
(356, 'famille', 11, 'Sultan of Swing'),
(357, 'famille', 11, 'La Grange'),
(358, 'famille', 11, 'Ace of Spades'),
(359, 'famille', 11, 'Princes of the Universe'),
(360, 'famille', 11, 'Simple Man'),
(361, 'famille', 11, 'Dream On'),
(362, 'famille', 11, 'Summer'),
(363, 'famille', 11, 'Slumber Party'),
(364, 'famille', 11, 'Echo'),
(365, 'famille', 11, 'Fog'),
(366, 'famille', 11, 'We own the sky'),
(367, 'famille', 11, 'Brulee'),
(368, 'famille', 11, 'Sultan of Swing'),
(369, 'famille', 11, 'La Grange'),
(370, 'famille', 11, 'Ace of Spades'),
(371, 'famille', 11, 'Princes of the Universe'),
(372, 'famille', 11, 'Simple Man'),
(373, 'famille', 11, 'Dream On'),
(374, 'transport', 11, 'Summer'),
(375, 'transport', 11, 'Slumber Party'),
(376, 'transport', 11, 'Echo'),
(377, 'transport', 11, 'Fog'),
(378, 'transport', 11, 'We own the sky'),
(379, 'transport', 11, 'Brulee'),
(380, 'famille', 11, 'Summer'),
(381, 'famille', 11, 'Slumber Party'),
(382, 'famille', 11, 'Echo'),
(383, 'famille', 11, 'Fog'),
(384, 'famille', 11, 'We own the sky'),
(385, 'famille', 11, 'Brulee'),
(386, 'famille', 11, 'Summer'),
(387, 'famille', 11, 'Slumber Party'),
(388, 'famille', 11, 'Echo'),
(389, 'famille', 11, 'Fog'),
(390, 'famille', 11, 'We own the sky'),
(391, 'famille', 11, 'Brulee'),
(392, 'famille', 11, 'Summer'),
(393, 'famille', 11, 'Slumber Party'),
(394, 'famille', 11, 'Echo'),
(395, 'famille', 11, 'Fog'),
(396, 'famille', 11, 'We own the sky'),
(397, 'famille', 11, 'Brulee'),
(398, 'famille', 11, 'Summer'),
(399, 'famille', 11, 'Slumber Party'),
(400, 'famille', 11, 'Echo'),
(401, 'famille', 11, 'Fog'),
(402, 'famille', 11, 'We own the sky'),
(403, 'famille', 11, 'Brulee'),
(404, 'famille', 11, 'Summer'),
(405, 'famille', 11, 'Slumber Party'),
(406, 'famille', 11, 'Echo'),
(407, 'famille', 11, 'Fog'),
(408, 'famille', 11, 'We own the sky'),
(409, 'famille', 11, 'Brulee'),
(410, 'famille', 11, 'Summer'),
(411, 'famille', 11, 'Slumber Party'),
(412, 'famille', 11, 'Echo'),
(413, 'famille', 11, 'Fog'),
(414, 'famille', 11, 'We own the sky'),
(415, 'famille', 11, 'Brulee'),
(416, 'famille', 11, 'Summer'),
(417, 'famille', 11, 'Slumber Party'),
(418, 'famille', 11, 'Echo'),
(419, 'famille', 11, 'Fog'),
(420, 'famille', 11, 'We own the sky'),
(421, 'famille', 11, 'Brulee'),
(422, 'famille', 11, 'Summer'),
(423, 'famille', 11, 'Slumber Party'),
(424, 'famille', 11, 'Echo'),
(425, 'famille', 11, 'Fog'),
(426, 'famille', 11, 'We own the sky'),
(427, 'famille', 11, 'Brulee'),
(428, 'famille', 11, 'Summer'),
(429, 'famille', 11, 'Slumber Party'),
(430, 'famille', 11, 'Echo'),
(431, 'famille', 11, 'Fog'),
(432, 'famille', 11, 'We own the sky'),
(433, 'famille', 11, 'Brulee'),
(434, 'conduite', 11, 'Summer'),
(435, 'conduite', 11, 'Slumber Party'),
(436, 'conduite', 11, 'Echo'),
(437, 'conduite', 11, 'Fog'),
(438, 'conduite', 11, 'We own the sky'),
(439, 'conduite', 11, 'Brulee'),
(440, 'amis', 11, 'Summer'),
(441, 'amis', 11, 'Slumber Party'),
(442, 'amis', 11, 'Echo'),
(443, 'amis', 11, 'Fog'),
(444, 'amis', 11, 'We own the sky'),
(445, 'amis', 11, 'Brulee'),
(446, 'lecture', 11, 'Summer'),
(447, 'lecture', 11, 'Slumber Party'),
(448, 'lecture', 11, 'Echo'),
(449, 'lecture', 11, 'Fog'),
(450, 'lecture', 11, 'We own the sky'),
(451, 'lecture', 11, 'Brulee'),
(452, 'jeu', 11, 'Summer'),
(453, 'jeu', 11, 'Slumber Party'),
(454, 'jeu', 11, 'Echo'),
(455, 'jeu', 11, 'Fog'),
(456, 'jeu', 11, 'We own the sky'),
(457, 'jeu', 11, 'Brulee'),
(458, 'famille', 11, 'Summer'),
(459, 'famille', 11, 'Slumber Party'),
(460, 'famille', 11, 'Echo'),
(461, 'famille', 11, 'Fog'),
(462, 'famille', 11, 'We own the sky'),
(463, 'famille', 11, 'Brulee'),
(464, 'famille', 11, 'Summer'),
(465, 'famille', 11, 'Slumber Party'),
(466, 'famille', 11, 'Echo'),
(467, 'famille', 11, 'Fog'),
(468, 'famille', 11, 'We own the sky'),
(469, 'famille', 11, 'Brulee'),
(470, 'seul', 11, 'Summer'),
(471, 'seul', 11, 'Slumber Party'),
(472, 'seul', 11, 'Echo'),
(473, 'seul', 11, 'Fog'),
(474, 'seul', 11, 'We own the sky'),
(475, 'seul', 11, 'Brulee'),
(476, 'amis', 11, 'Summer'),
(477, 'amis', 11, 'Slumber Party'),
(478, 'amis', 11, 'Echo'),
(479, 'amis', 11, 'Fog'),
(480, 'amis', 11, 'We own the sky'),
(481, 'amis', 11, 'Brulee'),
(482, 'famille', 11, 'Summer Sixteen'),
(483, 'famille', 11, 'Too Rich for the Bitch'),
(484, 'famille', 11, 'JDC'),
(485, 'famille', 11, 'Rock yo hips'),
(486, 'famille', 11, 'Go Head'),
(487, 'famille', 11, 'Liquid Swords'),
(488, 'famille', 11, 'Summer Sixteen'),
(489, 'famille', 11, 'Too Rich for the Bitch'),
(490, 'famille', 11, 'JDC'),
(491, 'famille', 11, 'Rock yo hips'),
(492, 'famille', 11, 'Go Head'),
(493, 'famille', 11, 'Liquid Swords'),
(494, 'famille', 11, 'Summer Sixteen'),
(495, 'famille', 11, 'Too Rich for the Bitch'),
(496, 'famille', 11, 'JDC'),
(497, 'famille', 11, 'Rock yo hips'),
(498, 'famille', 11, 'Go Head'),
(499, 'famille', 11, 'Liquid Swords'),
(500, 'famille', 11, 'Summer Sixteen'),
(501, 'famille', 11, 'Too Rich for the Bitch'),
(502, 'compagnon', 11, 'JDC'),
(503, 'famille', 11, 'Rock yo hips'),
(504, 'famille', 11, 'Go Head'),
(505, 'famille', 11, 'Liquid Swords'),
(506, 'famille', 11, 'Summer Sixteen'),
(507, 'famille', 11, 'Too Rich for the Bitch'),
(508, 'famille', 11, 'JDC'),
(509, 'famille', 11, 'Rock yo hips'),
(510, 'famille', 11, 'Go Head'),
(511, 'famille', 11, 'Liquid Swords'),
(512, 'famille', 11, 'Summer Sixteen'),
(513, 'famille', 11, 'Too Rich for the Bitch'),
(514, 'famille', 11, 'JDC'),
(515, 'famille', 11, 'Rock yo hips'),
(516, 'famille', 11, 'Go Head'),
(517, 'famille', 11, 'Liquid Swords'),
(518, 'famille', 11, 'Summer Sixteen'),
(519, 'famille', 11, 'Too Rich for the Bitch'),
(520, 'famille', 11, 'JDC'),
(521, 'famille', 11, 'Rock yo hips'),
(522, 'famille', 11, 'Go Head'),
(523, 'famille', 11, 'Liquid Swords'),
(524, 'famille', 11, 'Summer Sixteen'),
(525, 'famille', 11, 'Too Rich for the Bitch'),
(526, 'famille', 11, 'JDC'),
(527, 'famille', 11, 'Rock yo hips'),
(528, 'famille', 11, 'Go Head'),
(529, 'famille', 11, 'Liquid Swords'),
(530, 'compagnon', 11, 'Summer Sixteen'),
(531, 'compagnon', 11, 'Too Rich for the Bitch'),
(532, 'compagnon', 11, 'JDC'),
(533, 'compagnon', 11, 'Rock yo hips'),
(534, 'compagnon', 11, 'Go Head'),
(535, 'sport', 11, 'Liquid Swords'),
(536, 'compagnon', 11, 'Summer Sixteen'),
(537, 'compagnon', 11, 'Too Rich for the Bitch'),
(538, 'compagnon', 11, 'JDC'),
(539, 'compagnon', 11, 'Rock yo hips'),
(540, 'compagnon', 11, 'Go Head'),
(541, 'sport', 11, 'Liquid Swords'),
(542, 'famille', 11, 'Summer Sixteen'),
(543, 'famille', 11, 'Too Rich for the Bitch'),
(544, 'famille', 11, 'JDC'),
(545, 'famille', 11, 'Rock yo hips'),
(546, 'famille', 11, 'Go Head'),
(547, 'famille', 11, 'Liquid Swords');

-- --------------------------------------------------------

--
-- Structure de la table `listened`
--

CREATE TABLE IF NOT EXISTS `listened` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- Contenu de la table `listened`
--

INSERT INTO `listened` (`id`, `user_id`, `playlist_id`) VALUES
(1, 11, 1),
(3, 11, 6),
(4, 11, 2),
(5, 11, 5),
(6, 11, 4);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=16 ;

--
-- Contenu de la table `moodchange`
--

INSERT INTO `moodchange` (`id`, `user_id`, `changing`, `playlist_id`) VALUES
(1, 11, 'oui', 2),
(2, 11, 'oui', 2),
(3, 11, 'oui', 6),
(4, 11, 'non', 2),
(5, 11, 'oui', 5),
(6, 11, 'non', 6),
(7, 11, 'non', 3),
(8, 11, 'non', 3),
(9, 11, 'non', 3),
(10, 11, 'oui', 3),
(11, 11, 'non', 3),
(12, 11, 'non', 3),
(13, 11, 'non', 3),
(14, 11, 'non', 3),
(15, 11, 'non', 3);

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

--
-- Contenu de la table `moodplaylist`
--

INSERT INTO `moodplaylist` (`id`, `mood_name`, `user_id`, `playlist_id`) VALUES
(7, '', 11, 0),
(6, 'tristesse', 11, 0),
(5, '', 11, 0),
(8, '', 11, 0),
(9, '', 11, 0),
(10, '', 11, 2),
(11, 'ennui', 11, 2);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

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

--
-- Contenu de la table `newmoodplaylist`
--

INSERT INTO `newmoodplaylist` (`id`, `mood_name`, `user_id`, `playlist_id`) VALUES
(1, 'ennui', 11, 2),
(2, 'fatigue', 11, 2),
(3, 'fatigue', 11, 2),
(4, 'tristesse', 11, 6),
(5, 'fatigue', 11, 5),
(6, 'tristesse', 11, 3);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=181 ;

--
-- Contenu de la table `possiblecontext`
--

INSERT INTO `possiblecontext` (`id`, `context_name`, `user_id`, `title`) VALUES
(27, 'famille', 11, '0'),
(26, 'famille', 11, '0'),
(25, 'famille', 11, '0'),
(24, 'famille', 11, '0'),
(23, 'famille', 11, '0'),
(22, 'famille', 11, '0'),
(21, 'famille', 11, '0'),
(20, 'famille', 11, '0'),
(19, 'famille', 11, '0'),
(28, 'famille', 11, '0'),
(29, 'famille', 11, '0'),
(30, 'famille', 11, '0'),
(31, 'famille', 11, '0'),
(32, 'famille', 11, '0'),
(33, 'famille', 11, '0'),
(34, 'famille', 11, '0'),
(35, 'famille', 11, '0'),
(36, 'famille', 11, '0'),
(37, 'famille', 11, '0'),
(38, 'famille', 11, '0'),
(39, 'famille', 11, '0'),
(40, 'famille', 11, '0'),
(41, 'famille', 11, '0'),
(42, 'famille', 11, '0'),
(43, 'famille', 11, 'Sultan of Swing'),
(44, 'famille', 11, 'La Grange'),
(45, 'famille', 11, 'Ace of Spades'),
(46, 'famille', 11, 'Princes of the Universe'),
(47, 'famille', 11, 'Simple Man'),
(48, 'famille', 11, 'Dream On'),
(49, 'famille', 11, 'Sultan of Swing'),
(50, 'famille', 11, 'La Grange'),
(51, 'famille', 11, 'Ace of Spades'),
(52, 'famille', 11, 'Princes of the Universe'),
(53, 'famille', 11, 'Simple Man'),
(54, 'famille', 11, 'Dream On'),
(55, 'famille', 11, 'Sultan of Swing'),
(56, 'compagnon', 11, 'La Grange'),
(57, 'amis', 11, 'Ace of Spades'),
(58, 'seul', 11, 'Princes of the Universe'),
(59, 'sport', 11, 'Simple Man'),
(60, 'jeu', 11, 'Dream On'),
(61, 'famille', 11, 'Sultan of Swing'),
(62, 'famille', 11, 'La Grange'),
(63, 'famille', 11, 'Ace of Spades'),
(64, 'famille', 11, 'Princes of the Universe'),
(65, 'famille', 11, 'Simple Man'),
(66, 'famille', 11, 'Dream On'),
(67, 'famille', 11, 'Sultan of Swing'),
(68, 'famille', 11, 'La Grange'),
(69, 'famille', 11, 'Ace of Spades'),
(70, 'famille', 11, 'Princes of the Universe'),
(71, 'famille', 11, 'Simple Man'),
(72, 'famille', 11, 'Dream On'),
(73, 'sport', 11, 'Sultan of Swing'),
(74, 'sport', 11, 'La Grange'),
(75, 'sport', 11, 'Ace of Spades'),
(76, 'sport', 11, 'Princes of the Universe'),
(77, 'sport', 11, 'Simple Man'),
(78, 'sport', 11, 'Dream On'),
(79, 'famille', 11, 'Summer'),
(80, 'famille', 11, 'Slumber Party'),
(81, 'famille', 11, 'Echo'),
(82, 'famille', 11, 'Fog'),
(83, 'famille', 11, 'We own the sky'),
(84, 'famille', 11, 'Brulee'),
(85, 'famille', 11, 'Sultan of Swing'),
(86, 'famille', 11, 'La Grange'),
(87, 'famille', 11, 'Ace of Spades'),
(88, 'famille', 11, 'Princes of the Universe'),
(89, 'famille', 11, 'Simple Man'),
(90, 'famille', 11, 'Dream On'),
(91, 'révision', 11, 'Summer'),
(92, 'révision', 11, 'Slumber Party'),
(93, 'révision', 11, 'Echo'),
(94, 'révision', 11, 'Fog'),
(95, 'révision', 11, 'We own the sky'),
(96, 'révision', 11, 'Brulee'),
(97, 'famille', 11, 'Summer'),
(98, 'famille', 11, 'Slumber Party'),
(99, 'famille', 11, 'Echo'),
(100, 'famille', 11, 'Fog'),
(101, 'famille', 11, 'We own the sky'),
(102, 'famille', 11, 'Brulee'),
(103, 'famille', 11, 'Summer'),
(104, 'famille', 11, 'Slumber Party'),
(105, 'famille', 11, 'Echo'),
(106, 'famille', 11, 'Fog'),
(107, 'famille', 11, 'We own the sky'),
(108, 'famille', 11, 'Brulee'),
(109, 'lecture', 11, 'Summer'),
(110, 'lecture', 11, 'Slumber Party'),
(111, 'lecture', 11, 'Echo'),
(112, 'lecture', 11, 'Fog'),
(113, 'lecture', 11, 'We own the sky'),
(114, 'lecture', 11, 'Brulee'),
(115, 'famille', 11, 'Summer Sixteen'),
(116, 'famille', 11, 'Too Rich for the Bitch'),
(117, 'famille', 11, 'JDC'),
(118, 'famille', 11, 'Rock yo hips'),
(119, 'famille', 11, 'Go Head'),
(120, 'famille', 11, 'Liquid Swords'),
(121, 'famille', 11, 'Summer Sixteen'),
(122, 'famille', 11, 'Too Rich for the Bitch'),
(123, 'famille', 11, 'JDC'),
(124, 'famille', 11, 'Rock yo hips'),
(125, 'famille', 11, 'Go Head'),
(126, 'famille', 11, 'Liquid Swords'),
(127, 'famille', 11, 'Summer Sixteen'),
(128, 'famille', 11, 'Too Rich for the Bitch'),
(129, 'famille', 11, 'JDC'),
(130, 'famille', 11, 'Rock yo hips'),
(131, 'famille', 11, 'Go Head'),
(132, 'famille', 11, 'Liquid Swords'),
(133, 'famille', 11, 'Summer Sixteen'),
(134, 'famille', 11, 'Too Rich for the Bitch'),
(135, 'famille', 11, 'JDC'),
(136, 'famille', 11, 'Rock yo hips'),
(137, 'famille', 11, 'Go Head'),
(138, 'famille', 11, 'Liquid Swords'),
(139, 'compagnon', 11, 'Summer Sixteen'),
(140, 'compagnon', 11, 'Too Rich for the Bitch'),
(141, 'compagnon', 11, 'JDC'),
(142, 'compagnon', 11, 'Rock yo hips'),
(143, 'compagnon', 11, 'Go Head'),
(144, 'sport', 11, 'Liquid Swords'),
(145, 'famille', 11, 'Summer Sixteen'),
(146, 'famille', 11, 'Too Rich for the Bitch'),
(147, 'famille', 11, 'JDC'),
(148, 'famille', 11, 'Rock yo hips'),
(149, 'famille', 11, 'Go Head'),
(150, 'famille', 11, 'Liquid Swords'),
(151, 'famille', 11, 'Summer Sixteen'),
(152, 'famille', 11, 'Too Rich for the Bitch'),
(153, 'famille', 11, 'JDC'),
(154, 'famille', 11, 'Rock yo hips'),
(155, 'famille', 11, 'Go Head'),
(156, 'famille', 11, 'Liquid Swords'),
(157, 'famille', 11, 'Summer Sixteen'),
(158, 'famille', 11, 'Too Rich for the Bitch'),
(159, 'famille', 11, 'JDC'),
(160, 'famille', 11, 'Rock yo hips'),
(161, 'famille', 11, 'Go Head'),
(162, 'famille', 11, 'Liquid Swords'),
(163, 'compagnon', 11, 'Summer Sixteen'),
(164, 'compagnon', 11, 'Too Rich for the Bitch'),
(165, 'compagnon', 11, 'JDC'),
(166, 'compagnon', 11, 'Rock yo hips'),
(167, 'compagnon', 11, 'Go Head'),
(168, 'sport', 11, 'Liquid Swords'),
(169, 'conduite', 11, 'Summer Sixteen'),
(170, 'conduite', 11, 'Too Rich for the Bitch'),
(171, 'conduite', 11, 'JDC'),
(172, 'conduite', 11, 'Rock yo hips'),
(173, 'conduite', 11, 'Go Head'),
(174, 'conduite', 11, 'Liquid Swords'),
(175, 'travail', 11, 'Summer Sixteen'),
(176, 'travail', 11, 'Too Rich for the Bitch'),
(177, 'travail', 11, 'JDC'),
(178, 'travail', 11, 'Rock yo hips'),
(179, 'travail', 11, 'Go Head'),
(180, 'travail', 11, 'Liquid Swords');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`user_id`, `login`, `mdp`, `mail`) VALUES
(12, 'test2', 'ad0234829205b9033196ba818f7a872b', ''),
(11, 'test', '098f6bcd4621d373cade4e832627b4f6', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
