-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 05, 2016 at 09:24 PM
-- Server version: 5.5.50
-- PHP Version: 5.3.10-1ubuntu3.24

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `powercode`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `project_id`, `name`, `text`, `date`) VALUES
(1, 17, 'Игорь', 'тестовый комментарий', '1473077441'),
(2, 17, 'Саша', 'второй комментарий', '1473078009'),
(3, 25, 'Света', 'комментарий к девятому проекту', '1473078360'),
(4, 26, 'Павел', 'комментарий десятому', '1473080195'),
(5, 26, 'Ирина', 'второй комментарий к десятому', '1473082035');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `deadline` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `deadline`, `status`) VALUES
(17, 'первый проект', 'описание первого проекта', '05.09.2016', 1),
(18, 'второй проект', 'описание второго проекта', '09.09.2016', 0),
(19, 'третий', 'описание третьего', '07.09.2016', 1),
(20, 'четвёртый проектfdfdf', 'описание четвёртого', '07.09.2016', 0),
(21, 'пятый', 'описание пятого', '09.09.2016', 0),
(22, 'шестой', 'описание шестого', '10.09.2016', 0),
(23, 'седьмой', 'седьмой проект', '11.09.2016', 0),
(24, 'восьмой', 'восьмой проект', '06.09.2016', 1),
(25, 'девятый проект', 'описание девятого', '05.09.2016', 1),
(26, 'десятый проект', 'описание десятого проекта', '11.09.2016', 0),
(27, 'Одиннадцатый проект', 'описание одиннадцатого', '17.09.2016', 0),
(28, 'двенадцатый проект', 'описание фывафыа', '29.09.2016', 0),
(29, 'тринадцатый проект', 'фываыфва', '18.09.2016', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
