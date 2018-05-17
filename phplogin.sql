-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2014 at 12:41 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phplogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

DROP TABLE IF EXISTS `candidate`;
CREATE TABLE IF NOT EXISTS `candidate` (
  `cand_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `cat_id` varchar(40) NOT NULL,
  `sum1` int(11) NOT NULL,
  `sum2` int(11) NOT NULL,
  `sum3` int(11) NOT NULL,
  `sum_all` int(11) NOT NULL,
  `image` mediumblob NOT NULL,
  `users_voted` int(11) NOT NULL,
  PRIMARY KEY (`cand_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`cand_id`, `name`, `cat_id`, `sum1`, `sum2`, `sum3`, `sum_all`, `image`, `users_voted`) VALUES
(1, 'LoL', 'MOBA', 8, 8, 9, 25, 0x687474703a2f2f61646475726f2e636f6d2f77702d636f6e74656e742f75706c6f6164732f323031332f31302f4c65616775656f666c6567656e64736c6f676f2e6a7067, 1),
(2, 'DOTA 2', 'MOBA', 7, 8, 8, 23, 0x687474703a2f2f7777772e746163746963616c67616d696e672e6e65742f68712f6e6577732f77702d636f6e74656e742f75706c6f6164732f323031332f30392f646f74612d322d6c6f676f2e6a7067, 1),
(3, 'Starcraft', 'Strategy', 7, 8, 9, 24, 0x687474703a2f2f7777772e6d6161736f6f2e6e65742f626c6f672f77702d636f6e74656e742f75706c6f6164732f323031332f30362f7374617263726166742d69692d6c6f676f2d706e6770616e6f72616d6963612d73756c2d67696f636f2d76617361636173742d7374617263726166742d322d6361737465722d73747265616d696e672d79667161776763632e706e67, 1),
(4, 'Warcraft II', 'Strategy', 8, 9, 9, 26, 0x687474703a2f2f696d672e696e666f726d65722e636f6d2f73637265656e73686f74732f3436332f3436333134365f322e6a7067, 1),
(5, 'Counter Strike', 'Shooter', 9, 9, 9, 27, 0x687474703a2f2f7777772e706f696e7467616d65732e6e65742f77702d636f6e74656e742f75706c6f6164732f323031342f30312f636f756e7465725f737472696b655f676f5f312e6a7067, 1),
(6, 'Battlefield', 'Shooter', 16, 15, 16, 47, 0x687474703a2f2f7777772e63696e656d61626c656e642e636f6d2f696d616765732f67616d65732f626174746c656669656c642d342e6a7067, 2),
(7, 'hearthstone', 'Strategy', 7, 7, 7, 21, 0x687474703a2f2f7374617469632e6f6e67616d6572732e636f6d2f75706c6f6164732f6f726967696e616c2f302f3638382f353433372d343934383636363937312d68656172742e6a7067, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `name`) VALUES
(0, 'All'),
(1, 'MOBA'),
(2, 'Shooter'),
(3, 'Strategy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `date`, `email`) VALUES
(3, 'stavros', 'lioulias', 'stavros', 'e4105ca106d6c3b922f3b56b', '2014-06-12', 'st@uop.gr'),
(7, 'pan', 'kar', 'first_user', 'a004cc1171d3bf6d6240f38430a07a26', '2014-06-12', 'first_user@uop.gr'),
(9, 'panos', 'giwths', 'panos', 'e961f9ef729b288ba6e9b8afcd6b8a4f', '2014-06-29', 'panos@uop.gr');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

DROP TABLE IF EXISTS `vote`;
CREATE TABLE IF NOT EXISTS `vote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(20) NOT NULL,
  `game` varchar(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`id`, `ip`, `game`) VALUES
(13, '::1', ''),
(14, '::1', 'Battlefield');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
